<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validasi Input Form
        $validatedData = $request->validate([
            'full_name'     => 'required|string|max:255',
            'email'         => 'required|email|max:255',
            'company'       => 'nullable|string|max:255',
            'system_used'   => 'nullable|string|max:255',
            'needs'         => 'required|string',
            'timeline'      => 'required|string',
            'selected_date' => 'required|date',
            'selected_time' => 'required|string',
        ], [
            'selected_time.required' => 'Silakan pilih slot waktu pertemuan terlebih dahulu.',
        ]);

        // Berformat tanggal Indonesia yang lebih rapi untuk dibaca di WhatsApp
        $formattedDate = date('d F Y', strtotime($request->selected_date));

        // 2. Susun Pesan untuk WhatsApp
        $message = "*Halo Nakala Digital, saya ingin menjadwalkan Sesi Discovery.*\n\n";
        $message .= "*Detail Profil:*\n";
        $message .= "• Nama Lengkap: " . $request->full_name . "\n";
        $message .= "• Email: " . $request->email . "\n";
        $message .= "• Perusahaan: " . ($request->company ?? '-') . "\n";
        $message .= "• Sistem Saat Ini: " . ($request->system_used ?? '-') . "\n\n";
        $message .= "*Kebutuhan Proyek:*\n";
        $message .= "• Kebutuhan: " . $request->needs . "\n";
        $message .= "• Target Implementasi: " . $request->timeline . "\n\n";
        $message .= "*Jadwal Discovery Terpilih:*\n";
        $message .= "• Tanggal: " . $formattedDate . "\n";
        $message .= "• Waktu/Jam: " . $request->selected_time . " WIB\n";

        // Nomor WhatsApp tujuan (gunakan kode negara, tanpa tanda '+')
        $targetPhone = "6282295706304";

        // Buat Link WhatsApp API
        $whatsAppUrl = "https://api.whatsapp.com/send?phone=" . $targetPhone . "&text=" . urlencode($message);

        // Kirim url whatsapp ke view melalui session flash
        return redirect()->back()->with('whatsapp_url', $whatsAppUrl);
    }
}
