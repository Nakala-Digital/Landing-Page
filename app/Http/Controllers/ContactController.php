<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Step 1: Simpan input Form Kontak ke Session dulu (TANPA kirim email dulu)
     * Lalu LALU LANGSUNG redirect ke Halaman Jadwal Discovery.
     */
    public function store(StoreContactRequest $request): RedirectResponse
    {
        $data = $request->validated();
        unset($data['website']); // buang honeypot field

        // Simpan data kontak sementara ke session
        session()->put('booking_contact_data', $data);

        // Tentukan route tujuan
        $routeName = request()->routeIs('*.en') ? 'booking.schedule.en' : 'booking.schedule';
        $redirectUrl = route($routeName);

        // Fallback jika dikirim via submit HTML biasa
        return redirect()->to($redirectUrl);
    }

    /**
     * Step 2: Tampilkan Halaman Pilih Jadwal Discovery Session
     */
    public function showSchedule()
    {
        // Jika user mencoba akses /schedule-session tanpa isi form kontak dulu
        if (!session()->has('booking_contact_data')) {
            $routeName = request()->routeIs('*.en') ? 'contact.en' : 'contact';
            return redirect()->route($routeName);
        }

        $timeSlots = ['09:00 WIB', '11:00 WIB', '14:00 WIB', '16:00 WIB', '19:30 WIB'];

        return view('pages.schedule', compact('timeSlots'));
    }

    /**
     * Step 3: Pengguna sudah memilih Jadwal Sesi
     * Kirim EMAIL LENGKAP (Form + Jadwal) ke rizkyfaiz204@gmail.com
     * Lalu Redirect ke WhatsApp Admin.
     */
    public function storeSchedule(Request $request): RedirectResponse
    {
        $request->validate([
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|string',
        ]);

        $contactData = session('booking_contact_data');

        if (!$contactData) {
            $routeName = request()->routeIs('*.en') ? 'contact.en' : 'contact';
            return redirect()->route($routeName);
        }

        // Gabungkan Data Form Kontak + Data Jadwal Sesi yang dipilih
        $fullBookingData = array_merge($contactData, [
            'booking_date' => $request->date,
            'booking_time' => $request->time,
        ]);

        // -----------------------------------------------------------
        // 1. KIRIM EMAIL LENGKAP KE GMAIL
        // -----------------------------------------------------------
        $recipientEmail = env('MAIL_CONTACT_RECIPIENT', 'rizkyfaiz204@gmail.com');

        try {
            // Mengirim data gabungan ke email
            Mail::to($recipientEmail)->send(new ContactFormMail($fullBookingData));
        } catch (\Throwable $e) {
            Log::error('Gagal mengirim email booking lengkap: ' . $e->getMessage(), [
                'exception' => $e,
                'data' => $fullBookingData,
            ]);
            // Catatan: Walaupun email gagal/delay, aplikasi tetap lanjut ke WhatsApp agar UX pengguna tidak terganggu.
        }

        // -----------------------------------------------------------
        // 2. BUAT PESAN WHATSAPP & REDIRECT
        // -----------------------------------------------------------
        $adminPhone = '628138853493'; // Nomor WA Admin Nakala Digital

        $message = "*DISCOVERY SESSION INQUIRY - NAKALA DIGITAL*\n\n"
            . "*Data Klien:*\n"
            . "• Nama: " . $contactData['full_name'] . "\n"
            . "• Perusahaan: " . ($contactData['company'] ?? '-') . " (" . ($contactData['position'] ?? '-') . ")\n"
            . "• Email: " . $contactData['email'] . "\n"
            . "• WhatsApp: " . $contactData['phone'] . "\n\n"
            . "*Detail Proyek:*\n"
            . "• Jenis: " . $contactData['project_type'] . "\n"
            . "• Budget: " . ($contactData['budget_range'] ?? '-') . "\n"
            . "• Timeline: " . ($contactData['timeline'] ?? '-') . "\n"
            . "• Pesan: " . $contactData['message'] . "\n\n"
            . "*JADWAL SESI DIPILIH:*\n"
            . "• Tanggal: " . $request->date . "\n"
            . "• Jam: " . $request->time . "\n\n"
            . "Mohon konfirmasi ketersediaan sesi ini. Terima kasih!";

        $waUrl = "https://wa.me/{$adminPhone}?text=" . urlencode($message);

        // Hapus session booking setelah proses selesai
        session()->forget('booking_contact_data');

        // Pengalihan pengguna langsung ke WhatsApp
        return redirect()->away($waUrl);
    }
}
