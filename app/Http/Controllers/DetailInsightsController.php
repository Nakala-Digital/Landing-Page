<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailInsightsController extends Controller
{
    public function show($slug)
    {
        $isEn = app()->getLocale() === 'en';

        // Simulasi data dari array Insights dengan dukungan bilingual
        $allInsights = [
            'menjembatani-gap-implementasi-ai-untuk-ukm-regional' => [
                'tag' => 'AI GOVERNANCE',
                'title' => $isEn 
                    ? 'Bridging the Gap: AI Implementation for Regional SMEs' 
                    : 'Menjembatani Gap: Implementasi AI untuk UKM Regional',
                'desc' => $isEn 
                    ? 'Learn how local businesses leverage tailored machine learning models to compete with global players efficiently.' 
                    : 'Pelajari bagaimana bisnis lokal memanfaatkan model machine learning yang disesuaikan untuk bersaing dengan pemain global tanpa biaya yang berlebihan.',
                'img' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=80',
                'date' => $isEn ? 'August 12, 2026' : '12 Agustus 2026',
                'author' => 'Nakala Digital Team'
            ],
            'qa-pilar-tak-terlihat-untuk-scaling' => [
                'tag' => 'QA',
                'title' => $isEn 
                    ? 'QA: The Unseen Pillar for Scaling' 
                    : 'QA: Pilar Tak Terlihat untuk Scaling',
                'desc' => $isEn 
                    ? 'Why automated testing is not just an add-on, but an absolute necessity as products grow rapidly.' 
                    : 'Mengapa automated testing bukan sekadar tambahan, tetapi kebutuhan mutlak saat produk berkembang pesat.',
                'img' => 'https://images.unsplash.com/photo-1607799279861-4dd421887fb3?auto=format&fit=crop&w=1200&q=80',
                'date' => $isEn ? 'August 10, 2026' : '10 Agustus 2026',
                'author' => 'QA Lead Nakala'
            ],
            'agile-vs-waterfall-di-enterprise' => [
                'tag' => $isEn ? 'PROCESS' : 'PROSES',
                'title' => $isEn 
                    ? 'Agile vs. Waterfall in the Enterprise' 
                    : 'Agile vs. Waterfall di Enterprise',
                'desc' => $isEn 
                    ? 'Understanding the cultural shift needed when traditional industries migrate to adaptive management.' 
                    : 'Memahami perubahan budaya yang dibutuhkan saat industri tradisional bermigrasi ke pengelolaan adaptif.',
                'img' => 'https://images.unsplash.com/photo-1531403009284-440f080d1e12?auto=format&fit=crop&w=1200&q=80',
                'date' => $isEn ? 'August 08, 2026' : '08 Agustus 2026',
                'author' => 'Project Manager'
            ],
            'eventgate-semua-kebutuhan-acara-dalam-satu-platform' => [
                'tag' => $isEn ? 'EVENT TECHNOLOGY' : 'TEKNOLOGI EVENT',
                'title' => $isEn 
                    ? 'EventGate: All Event Needs in One Platform' 
                    : 'EventGate: Semua Kebutuhan Acara dalam Satu Platform',
                'desc' => $isEn 
                    ? 'Platform from Konser.com for event discovery, digital ticketing, and centralized QR check-in with high reliability.' 
                    : 'Platform dari Konser.com untuk pencarian event, tiket digital, dan check-in QR terpusat dengan reliabilitas tinggi.',
                'img' => asset('assets/eventgate-2.png'),
                'date' => $isEn ? 'August 03, 2026' : '03 Agustus 2026',
                'author' => 'Tech Architect',
                'paragraphs' => $isEn ? [
                    'Organizing events — from concerts and seminars to festivals — often involves multiple disconnected systems: one for event promotion, another for ticket sales, and manual processes for on-site check-ins. This disconnection makes it difficult for organizers to monitor attendee data in real time, while visitors experience slow check-ins prone to long queues.',
                    'EventGate, developed for Konser.com, serves as an integrated solution that unifies the user journey into a single platform: from event discovery and digital ticket purchases to centralized QR code check-ins. With this system, organizers can track attendance live, while attendees enjoy a faster entry process without needing physical tickets.',
                    'The platform is built to handle high concurrency — a common occurrence right before major events — without compromising speed or system reliability.'
                ] : [
                    'Menyelenggarakan sebuah acara — mulai dari konser, seminar, hingga festival — sering kali melibatkan banyak sistem terpisah: satu platform untuk promosi event, sistem lain untuk penjualan tiket, dan proses manual untuk check-in di lokasi. Ketidakterhubungan ini membuat penyelenggara sulit memantau data peserta secara real-time, sementara pengunjung harus melalui proses check-in yang lambat dan rawan antrean panjang.',
                    'EventGate, yang dikembangkan untuk Konser.com, hadir sebagai solusi terpadu yang menyatukan seluruh perjalanan pengguna dalam satu platform: mulai dari pencarian event, pembelian tiket digital, hingga proses check-in menggunakan QR code yang terpusat. Dengan sistem ini, penyelenggara dapat memantau jumlah kehadiran secara real-time, sementara pengunjung mendapatkan pengalaman masuk lokasi yang jauh lebih cepat tanpa perlu tiket fisik.',
                    'Platform ini dirancang agar mampu menangani volume tinggi pengguna secara bersamaan — kondisi umum yang terjadi menjelang hari-H sebuah acara besar — tanpa mengorbankan kecepatan maupun keandalan sistem.'
                ]
            ],
            'wilayahflow-merapikan-pelaporan-rt-rw' => [
                'tag' => $isEn ? 'REGIONAL ADMIN' : 'ADMINISTRASI WILAYAH',
                'title' => $isEn 
                    ? 'WilayahFlow: Streamlining Neighborhood Reporting' 
                    : 'WilayahFlow: Merapikan Pelaporan RT/RW',
                'desc' => $isEn 
                    ? 'Reporting and administrative assistant with automatic recaps and secure cloud archives.' 
                    : 'Asisten pelaporan dan administrasi RT/RW dengan rekap otomatis dan arsip berbasis cloud aman.',
                'img' => asset('assets/wilayahflow-2.png'),
                'date' => $isEn ? 'June 03, 2025' : '03 Juni 2025',
                'author' => 'Product Owner',
                'paragraphs' => $isEn ? [
                    'Neighborhood administrators (RT/RW) in many areas still manage administrative reporting — resident records, official letters, and activity recaps — manually using paper notes or files scattered across multiple devices. This approach delays reporting to higher administrative levels, risks data loss, and makes retrieval difficult.',
                    'WilayahFlow was developed as a digital assistant for RT/RW officials to streamline administrative processes into one central system. The platform provides automated recaps for resident activities and reporting, alongside digital archives that allow officials to access document history at any time.',
                    'With a simple and user-friendly interface designed for non-technical administrators, WilayahFlow speeds up reporting workflows while enhancing administrative transparency.'
                ] : [
                    'Pengurus RT/RW di banyak wilayah masih mengelola pelaporan administrasi — data warga, surat-menyurat, hingga rekap kegiatan — secara manual menggunakan catatan kertas atau dokumen yang tersebar di berbagai perangkat. Cara kerja ini membuat proses pelaporan ke tingkat kelurahan menjadi lambat, rawan data hilang, dan sulit ditelusuri kembali saat dibutuhkan.',
                    'WilayahFlow dikembangkan sebagai asisten digital bagi pengurus RT/RW untuk merapikan seluruh proses administrasi wilayah dalam satu sistem. Platform ini menyediakan rekap otomatis atas kegiatan dan pelaporan warga, serta arsip digital yang memudahkan pengurus mengakses riwayat dokumen kapan saja tanpa perlu mencari tumpukan berkas fisik.',
                    'Dengan pendekatan yang sederhana dan mudah digunakan oleh pengurus wilayah non-teknis, WilayahFlow membantu mempercepat alur pelaporan sekaligus meningkatkan transparansi administrasi di tingkat RT/RW.'
                ]
            ],
            'desahub-menghubungkan-ekonomi-desa' => [
                'tag' => $isEn ? 'RURAL ECONOMY' : 'EKONOMI DESA',
                'title' => $isEn 
                    ? 'DesaHub: Connecting the Rural Economy' 
                    : 'DesaHub: Menghubungkan Ekonomi Desa',
                'desc' => $isEn 
                    ? 'An integrated marketplace connecting local produce, SMEs, and village enterprises directly to city markets.' 
                    : 'Platform marketplace terintegrasi yang menghubungkan produk lokal, UMKM, dan BUMDes langsung ke pasar kota.',
                'img' => asset('assets/desahub-2.png'),
                'date' => $isEn ? 'June 03, 2025' : '3 Juni 2025',
                'author' => 'Solution Specialist',
                'paragraphs' => $isEn ? [
                    'Local products and rural SMEs often boast high quality but face market access constraints due to a lack of digital platforms reaching buyers outside their immediate area. Meanwhile, Village-Owned Enterprises (BUMDes) need a centralized channel to promote and sell village products systematically.',
                    'DesaHub provides an integrated marketplace platform connecting local goods, SMEs, and BUMDes within a single digital ecosystem. Through this platform, village products gain wider market reach while urban buyers gain direct access to authentic regional goods.',
                    'Beyond serving as a sales channel, DesaHub helps BUMDes organize transaction logging, fostering structured and sustainable economic growth for rural communities.'
                ] : [
                    'Produk-produk lokal dan UMKM di tingkat desa sering kali memiliki kualitas baik, namun terkendala akses pasar yang lebih luas karena minimnya platform digital yang menjangkau pembeli di luar wilayah mereka. Di sisi lain, Badan Usaha Milik Desa (BUMDes) juga membutuhkan kanal terpusat untuk mempromosikan dan menjual produk-produk unggulan desa secara lebih terorganisir.',
                    'DesaHub hadir sebagai platform marketplace terintegrasi yang menghubungkan produk lokal, pelaku UMKM, dan BUMDes dalam satu ekosistem digital. Melalui platform ini, produk-produk desa dapat dipasarkan lebih luas, sementara pembeli mendapatkan akses langsung ke ragam produk otentik dari berbagai daerah.',
                    'Selain menjadi kanal penjualan, DesaHub juga dirancang untuk mendukung pencatatan transaksi yang lebih rapi bagi BUMDes, membuka peluang bagi ekonomi desa untuk bertumbuh secara lebih terstruktur dan berkelanjutan.'
                ]
            ],
            'kick-off-al-azhar-syifa-budi-parahyangan' => [
                'tag' => $isEn ? 'INTERNSHIP' : 'MAGANG',
                'title' => 'Kick Off Al Azhar Syifa Budi Parahyangan',
                'desc' => $isEn 
                    ? 'First successful digital solution project developed and executed at Nakala Digital.' 
                    : 'Project solusi digital pertama yang sukses dikembangkan dan dikerjakan di Nakala Digital.',
                'img' => asset('assets/al-azhar.png'),
                'date' => $isEn ? 'July 20, 2026' : '20 Juli 2026',
                'author' => 'Mentor Nakala'
            ],
            'kick-off-universitas-widyatama' => [
                'tag' => $isEn ? 'INTERNSHIP' : 'MAGANG',
                'title' => 'Kick Off Universitas Widyatama',
                'desc' => $isEn 
                    ? 'Collaboration and internship program implementation for Widyatama University students.' 
                    : 'Kolaborasi dan pelaksanaan program magang untuk mahasiswa dari Universitas Widyatama.',
                'img' => asset('assets/widyatama-2.png'),
                'date' => $isEn ? 'July 15, 2026' : '15 Juli 2026',
                'author' => 'HR Nakala'
            ],
            'kick-off-universitas-komputer' => [
                'tag' => $isEn ? 'INTERNSHIP' : 'MAGANG',
                'title' => 'Kick Off Universitas Komputer',
                'desc' => $isEn 
                    ? 'Collaboration and internship program implementation for UNIKOM students.' 
                    : 'Kolaborasi dan pelaksanaan program magang untuk mahasiswa dari Universitas Komputer.',
                'img' => asset('assets/unikom.png'),
                'date' => $isEn ? 'July 10, 2026' : '10 Juli 2026',
                'author' => 'HR Nakala'
            ],
            'kick-off-politeknik-negeri-bandung' => [
                'tag' => $isEn ? 'INTERNSHIP' : 'MAGANG',
                'title' => 'Kick Off Politeknik Negeri Bandung',
                'desc' => $isEn 
                    ? 'Collaboration and internship program implementation for POLBAN students.' 
                    : 'Kolaborasi dan pelaksanaan program magang untuk mahasiswa dari Politeknik Negeri Bandung.',
                'img' => asset('assets/polban.png'),
                'date' => $isEn ? 'July 05, 2026' : '05 Juli 2026',
                'author' => 'HR Nakala'
            ]
        ];

        if (!array_key_exists($slug, $allInsights)) {
            abort(404);
        }

        $insight = $allInsights[$slug];
        

        return view('pages.detail-insights', compact('insight', 'slug'));
    }
}