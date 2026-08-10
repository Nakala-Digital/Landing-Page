<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $date;
    public $time;
    public $contactData;

    public function __construct($date, $time, $contactData = [])
    {
        $this->date = $date;
        $this->time = $time;
        $this->contactData = $contactData;
    }

    public function build()
    {
        $nama = $this->contactData['nama'] ?? 'Pengunjung';

        return $this->subject('Pemberitahuan Booking Baru - Sesi Discovery')
                    ->html("
                        <h2>Ada Booking Sesi Discovery Baru!</h2>
                        <p>Berikut detail jadwal yang dipilih oleh <strong>{$nama}</strong>:</p>
                        <ul>
                            <li><strong>Tanggal:</strong> {$this->date}</li>
                            <li><strong>Waktu:</strong> {$this->time} WIB</li>
                        </ul>
                    ");
    }
}
