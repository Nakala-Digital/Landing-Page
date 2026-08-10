<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function schedule()
    {
        return view('pages.schedule');
    }

    public function confirm(Request $request)
    {
        // Validasi input tanggal & jam
        $request->validate([
            'selected_date' => 'required|date',
            'selected_time' => 'required',
        ]);

        // Ambil data kontak dari session yang tersimpan sebelumnya
        $contactData = session('booking_contact_data');

        $selectedDate = $request->input('selected_date');
        $selectedTime = $request->input('selected_time');

        // TODO: Simpan ke Database atau Kirim Email Notifikasi ke Admin/User

        // Hapus session setelah berhasil
        session()->forget('booking_contact_data');

        // Redirect ke halaman sukses / thank you page
        return redirect()->route('booking.success')->with('success', 'Jadwal berhasil dikonfirmasi!');
    }
}
