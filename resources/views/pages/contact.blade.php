<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ app()->getLocale() === 'en' ? 'Contact Us | Nakala Digital' : 'Hubungi Kami | Nakala Digital' }}</title>
    @include('partials.seo', [
        'title' => app()->getLocale() === 'en' ? 'Contact Us | Nakala Digital' : 'Hubungi Kami | Nakala Digital',
        'description' =>
            app()->getLocale() === 'en' ? 'Get in touch with Nakala Digital...' : 'Hubungi Nakala Digital...',
    ])
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />

    <script id="tailwind-config">
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "midnight-navy": "#031A44",
                        "electric-cyan": "#12AED0",
                        "impact-lime": "#A7F432",
                        "bg-gray-light": "#F4F7F9"
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .form-input-focus:focus {
            border-color: #12AED0;
            ring-color: transparent;
        }

        /* State Aktif untuk Pilihan Tanggal & Jam */
        .cal-day-active {
            background-color: #12AED0 !important;
            color: #ffffff !important;
            font-weight: 700 !important;
            border-radius: 8px;
        }

        .time-slot-active {
            background-color: #12AED0 !important;
            color: #ffffff !important;
            border-color: #12AED0 !important;
            font-weight: 700 !important;
        }
    </style>
</head>

<body class="bg-bg-gray-light text-midnight-navy font-sans">
    @include('partials.navbar')

    <main class="pt-20 bg-[#F8FAFC]">
        <section class="py-12 max-w-7xl mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">

                <!-- ================= SEKTOR KIRI (FORM & WHATSAPP) ================= -->
                <div class="lg:col-span-8 flex flex-col gap-6">

                    <!-- Container Form Kontak -->
                    <div class="bg-white p-6 md:p-8 border border-[#A5E3F0] rounded-2xl shadow-sm">
                        <h2 class="text-2xl font-bold mb-6 text-[#031A44]">Form Kontak</h2>

                        <!-- Alert Box Error Client-side JS -->
                        <div id="jsErrorAlert" class="hidden mb-6 p-4 text-xs font-semibold text-rose-800 bg-rose-50 border border-rose-200 rounded-xl">
                            <p class="font-bold mb-1">Periksa kembali inputan Anda:</p>
                            <ul class="list-disc pl-4" id="jsErrorList"></ul>
                        </div>

                        <!-- Form langsung di-handle JS (Tanpa action POST ke route Laravel untuk WhatsApp Instant) -->
                        <form id="contactForm" class="space-y-6">
                            <!-- Hidden Inputs untuk Tanggal & Jam Terpilih -->
                            <input type="hidden" name="selected_date" id="selectedDateInput" value="">
                            <input type="hidden" name="selected_time" id="selectedTimeInput" value="">

                            <!-- Input Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                                <!-- Nama Lengkap -->
                                <div class="flex flex-col gap-1.5">
                                    <label for="full_name" class="text-xs font-semibold text-[#031A44]">Nama Lengkap *</label>
                                    <input type="text" id="full_name" name="full_name" placeholder="Contoh: Budi Santoso"
                                        class="w-full bg-[#F3F4F6] text-gray-700 border-none rounded-xl p-3 text-xs focus:ring-2 focus:ring-[#12AED0] outline-none" required>
                                </div>
                                <!-- Alamat Email -->
                                <div class="flex flex-col gap-1.5">
                                    <label for="email" class="text-xs font-semibold text-[#031A44]">Alamat Email *</label>
                                    <input type="email" id="email" name="email" placeholder="Alex@Company.com"
                                        class="w-full bg-[#F3F4F6] text-gray-700 border-none rounded-xl p-3 text-xs focus:ring-2 focus:ring-[#12AED0] outline-none" required>
                                </div>
                                <!-- Perusahaan -->
                                <div class="flex flex-col gap-1.5">
                                    <label for="company" class="text-xs font-semibold text-[#031A44]">Perusahaan</label>
                                    <input type="text" id="company" name="company" placeholder="Contoh: PT. ABC"
                                        class="w-full bg-[#F3F4F6] text-gray-700 border-none rounded-xl p-3 text-xs focus:ring-2 focus:ring-[#12AED0] outline-none">
                                </div>
                                <!-- Sistem yang Digunakan -->
                                <div class="flex flex-col gap-1.5">
                                    <label for="system_used" class="text-xs font-semibold text-[#031A44]">Sistem yang Digunakan</label>
                                    <input type="text" id="system_used" name="system_used" placeholder="Contoh: Google"
                                        class="w-full bg-[#F3F4F6] text-gray-700 border-none rounded-xl p-3 text-xs focus:ring-2 focus:ring-[#12AED0] outline-none">
                                </div>
                                <!-- Kebutuhan -->
                                <div class="flex flex-col gap-1.5 relative">
                                    <label for="needs" class="text-xs font-semibold text-[#031A44]">Kebutuhan *</label>
                                    <div class="relative">
                                        <select id="needs" name="needs"
                                            class="w-full bg-[#F3F4F6] text-gray-700 border-none rounded-xl p-3 pr-10 text-xs focus:ring-2 focus:ring-[#12AED0] outline-none appearance-none cursor-pointer" required>
                                            <option value="PPDB / PMB & Adminis">PPDB / PMB & Adminis</option>
                                            <option value="Enterprise Web App">Enterprise Web App</option>
                                            <option value="Mobile App Development">Mobile App Development</option>
                                        </select>
                                        <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 text-sm pointer-events-none">chevron_right</span>
                                    </div>
                                </div>
                                <!-- Target Implementasi -->
                                <div class="flex flex-col gap-1.5 relative">
                                    <label for="timeline" class="text-xs font-semibold text-[#031A44]">Target Implementasi *</label>
                                    <div class="relative">
                                        <select id="timeline" name="timeline"
                                            class="w-full bg-[#F3F4F6] text-gray-700 border-none rounded-xl p-3 pr-10 text-xs focus:ring-2 focus:ring-[#12AED0] outline-none appearance-none cursor-pointer" required>
                                            <option value="Secepatnya (<1 bulan)">Secepatnya (&lt;1 bulan)</option>
                                            <option value="1 - 3 Bulan">1 - 3 Bulan</option>
                                            <option value="3 - 6 Bulan">3 - 6 Bulan</option>
                                        </select>
                                        <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 text-sm pointer-events-none">chevron_right</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Kalender Terintegrasi & Waktu -->
                            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 pt-4 items-center">
                                <!-- Kalender Interaktif Dinamis -->
                                <div class="md:col-span-7 bg-[#EFF3F6] rounded-2xl p-4">
                                    <div class="flex justify-between items-center mb-3 px-1">
                                        <span id="calendarMonthYear" class="text-xs font-bold text-[#031A44]"></span>
                                        <div class="flex gap-2">
                                            <button type="button" id="prevMonthBtn"
                                                class="p-1 bg-[#12AED0] text-white rounded-md flex items-center justify-center hover:opacity-80 transition">
                                                <span class="material-symbols-outlined text-xs font-bold">chevron_left</span>
                                            </button>
                                            <button type="button" id="nextMonthBtn"
                                                class="p-1 bg-[#12AED0] text-white rounded-md flex items-center justify-center hover:opacity-80 transition">
                                                <span class="material-symbols-outlined text-xs font-bold">chevron_right</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-7 gap-y-2 text-center text-[10px] font-bold text-gray-500 mb-2">
                                        <div>SUN</div><div>MON</div><div>TUE</div><div>WED</div><div>THU</div><div>FRI</div><div>SAT</div>
                                    </div>
                                    <!-- Container Angka Tanggal (JS) -->
                                    <div class="grid grid-cols-7 gap-y-1 text-center text-xs font-medium text-gray-700" id="calendarDays"></div>
                                </div>

                                <!-- Slot Waktu & Submit -->
                                <div class="md:col-span-5 flex flex-col justify-between h-full min-h-[160px]">
                                    <div class="grid grid-cols-2 gap-2 text-center" id="timeSlots">
                                        @php
                                            $times = ['07:00', '12:00', '08:00', '13:00', '09:00', '14:00', '10:00', '15:00', '11:00', '16:00'];
                                        @endphp
                                        @foreach ($times as $time)
                                            <button type="button" data-time="{{ $time }}"
                                                class="time-btn border border-gray-300 rounded-lg py-1.5 text-[11px] text-gray-600 bg-white hover:border-[#12AED0] transition">
                                                {{ $time }}
                                            </button>
                                        @endforeach
                                    </div>

                                    <button type="submit"
                                        class="w-full bg-[#12AED0] text-white py-2.5 mt-4 rounded-full font-bold text-[11px] tracking-wider hover:bg-opacity-95 transition uppercase shadow-sm flex items-center justify-center gap-2">
                                        JADWALKAN SESI DISCOVERY
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Card Chat via WhatsApp -->
                    <div class="bg-white p-6 border border-[#A5E3F0] rounded-2xl shadow-sm flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                        <div class="flex items-center gap-4">
                            <div class="p-3 bg-[#E2F7FC] rounded-xl text-[#12AED0] flex items-center justify-center">
                                <span class="material-symbols-outlined text-2xl font-bold">chat</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-xs font-semibold text-gray-500">Respon Cepat</span>
                                <h4 class="text-xl font-bold text-[#031A44] tracking-tight">Chat via WhatsApp</h4>
                            </div>
                        </div>
                        <a href="https://wa.me/6282295706304" target="_blank"
                            class="bg-[#12AED0] text-white px-8 py-3 rounded-full text-xs font-bold hover:bg-opacity-95 transition uppercase tracking-wider shadow-sm">
                            HUBUNGI KAMI
                        </a>
                    </div>
                </div>

                <!-- ================= SEKTOR KANAN (INFO KONTAK & MODEL) ================= -->
                <div class="lg:col-span-4 flex flex-col gap-6">
                    <!-- Informasi Kontak Card -->
                    <div class="bg-[#031A44] text-white p-6 md:p-8 rounded-2xl shadow-sm space-y-6">
                        <h3 class="text-xl font-bold tracking-tight">Informasi Kontak</h3>
                        <div class="space-y-5 text-xs">
                            <div class="flex items-start gap-3.5">
                                <span class="material-symbols-outlined text-[#A7F432] text-xl">mail</span>
                                <div>
                                    <p class="text-white font-bold text-sm mb-0.5">Email</p>
                                    <p class="text-gray-300 font-light">contact@nakala.digital</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3.5">
                                <span class="material-symbols-outlined text-[#A7F432] text-xl">call</span>
                                <div>
                                    <p class="text-white font-bold text-sm mb-0.5">Telepon</p>
                                    <p class="text-gray-300 font-light">+6282295706304</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3.5">
                                <span class="material-symbols-outlined text-[#A7F432] text-xl">calendar_today</span>
                                <div>
                                    <p class="text-white font-bold text-sm mb-0.5">Sesi Discovery</p>
                                    <p class="text-gray-300 font-light">Sesi Discovery Gratis</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3.5">
                                <span class="material-symbols-outlined text-[#A7F432] text-xl">location_on</span>
                                <div>
                                    <p class="text-white font-bold text-sm mb-0.5">Kantor</p>
                                    <p class="text-gray-300 font-light leading-relaxed">
                                        Pointlab Coworking Space, Graha Pos Indonesia, Jl. Banda No.30 Lantai 2 Blok C,
                                        Citarum, Bandung Wetan, Bandung City, West Java 40115
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Model Kami Card -->
                    <div class="bg-white p-6 md:p-8 border border-[#A5E3F0] rounded-2xl shadow-sm space-y-5">
                        <h3 class="text-xl font-bold text-[#031A44]">Model Kami</h3>
                        <div class="relative pl-5 space-y-6 border-l-2 border-[#12AED0] ml-1.5">
                            <div class="relative">
                                <span class="absolute -left-[26px] top-0.5 bg-[#12AED0] w-2.5 h-2.5 rounded-full ring-4 ring-white"></span>
                                <h4 class="font-bold text-xs text-[#12AED0]">01. Discovery & Scoping</h4>
                                <p class="text-gray-600 text-[11px] leading-relaxed mt-1">Menentukan tujuan proyek, ruang lingkup, dan proposal solusi.</p>
                            </div>
                            <div class="relative">
                                <span class="absolute -left-[26px] top-0.5 bg-[#12AED0] w-2.5 h-2.5 rounded-full ring-4 ring-white"></span>
                                <h4 class="font-bold text-xs text-[#12AED0]">02. Design & Architecture</h4>
                                <p class="text-gray-600 text-[11px] leading-relaxed mt-1">Wireframes, desain sistem, dan rencana pengiriman.</p>
                            </div>
                            <div class="relative">
                                <span class="absolute -left-[26px] top-0.5 bg-[#12AED0] w-2.5 h-2.5 rounded-full ring-4 ring-white"></span>
                                <h4 class="font-bold text-xs text-[#12AED0]">03. Agile Dev & QA</h4>
                                <p class="text-gray-600 text-[11px] leading-relaxed mt-1">Pengembangan berbasis Sprint dengan pengujian QA.</p>
                            </div>
                            <div class="relative">
                                <span class="absolute -left-[26px] top-0.5 bg-[#12AED0] w-2.5 h-2.5 rounded-full ring-4 ring-white"></span>
                                <h4 class="font-bold text-xs text-[#12AED0]">04. Handover & Support</h4>
                                <p class="text-gray-600 text-[11px] leading-relaxed mt-1">Serah terima formal, dukungan SLA, dan peta jalan.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>

    @include('partials.footer')

    <!-- ================= SCRIPT UTAMA ================= -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const dateInput = document.getElementById('selectedDateInput');
            const timeInput = document.getElementById('selectedTimeInput');
            const calendarDays = document.getElementById('calendarDays');
            const calendarMonthYear = document.getElementById('calendarMonthYear');
            const prevMonthBtn = document.getElementById('prevMonthBtn');
            const nextMonthBtn = document.getElementById('nextMonthBtn');
            const contactForm = document.getElementById('contactForm');
            const jsErrorAlert = document.getElementById('jsErrorAlert');
            const jsErrorList = document.getElementById('jsErrorList');

            // --- REAL TIME INITIALIZATION ---
            // Secara dinamis memuat Bulan dan Tahun saat ini sesuai waktu asli komputer pengguna
            let currentDate = new Date();
            let selectedFormattedDate = formatDate(currentDate);

            const monthNames = [
                "January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];

            function formatDate(d) {
                let year = d.getFullYear();
                let month = String(d.getMonth() + 1).padStart(2, '0');
                let day = String(d.getDate()).padStart(2, '0');
                return `${year}-${month}-${day}`;
            }

            function renderCalendar() {
                const year = currentDate.getFullYear();
                const month = currentDate.getMonth();

                calendarMonthYear.innerText = `${monthNames[month]} ${year}`;

                const firstDayIndex = new Date(year, month, 1).getDay();
                const totalDays = new Date(year, month + 1, 0).getDate();
                const prevLastDay = new Date(year, month, 0).getDate();

                let daysHTML = "";

                // Padding bulan sebelumnya
                for (let x = firstDayIndex; x > 0; x--) {
                    daysHTML += `<div class="text-gray-400 py-1 select-none">${prevLastDay - x + 1}</div>`;
                }

                // Hari aktif
                for (let i = 1; i <= totalDays; i++) {
                    let monthStr = String(month + 1).padStart(2, '0');
                    let dayStr = String(i).padStart(2, '0');
                    let fullDateStr = `${year}-${monthStr}-${dayStr}`;

                    let isActive = fullDateStr === selectedFormattedDate;

                    daysHTML += `
                        <button type="button" data-date="${fullDateStr}"
                            class="cal-day py-1 rounded hover:bg-cyan-100 transition ${isActive ? 'cal-day-active' : ''}">
                            ${i}
                        </button>
                    `;
                }

                // Padding bulan setelahnya
                const totalCells = firstDayIndex + totalDays;
                const nextDays = (7 - (totalCells % 7)) % 7;
                for (let j = 1; j <= nextDays; j++) {
                    daysHTML += `<div class="text-gray-400 py-1 select-none">${j}</div>`;
                }

                calendarDays.innerHTML = daysHTML;

                // Update input tersembunyi
                dateInput.value = selectedFormattedDate;

                // Listener tombol kalender
                document.querySelectorAll('.cal-day').forEach(btn => {
                    btn.addEventListener('click', () => {
                        document.querySelectorAll('.cal-day').forEach(b => b.classList.remove('cal-day-active'));
                        btn.classList.add('cal-day-active');
                        selectedFormattedDate = btn.getAttribute('data-date');
                        dateInput.value = selectedFormattedDate;
                    });
                });
            }

            // Navigasi Bulan
            prevMonthBtn.addEventListener('click', () => {
                currentDate.setMonth(currentDate.getMonth() - 1);
                renderCalendar();
            });

            nextMonthBtn.addEventListener('click', () => {
                currentDate.setMonth(currentDate.getMonth() + 1);
                renderCalendar();
            });

            // Jalankan Kalender Awal
            renderCalendar();

            // Handle Klik Jam
            const timeButtons = document.querySelectorAll('.time-btn');
            timeButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    timeButtons.forEach(b => b.classList.remove('time-slot-active'));
                    btn.classList.add('time-slot-active');
                    timeInput.value = btn.getAttribute('data-time');
                });
            });

            // --- LOGIK DIRECT SUBMIT WHATSAPP INSTAN ---
            contactForm.addEventListener('submit', (e) => {
                e.preventDefault();
                jsErrorAlert.classList.add('hidden');
                jsErrorList.innerHTML = "";

                const fullName = document.getElementById('full_name').value;
                const email = document.getElementById('email').value;
                const company = document.getElementById('company').value || '-';
                const systemUsed = document.getElementById('system_used').value || '-';
                const needs = document.getElementById('needs').value;
                const timeline = document.getElementById('timeline').value;
                const selectedDate = dateInput.value;
                const selectedTime = timeInput.value;

                // Validasi manual slot waktu sebelum dialihkan
                if (!selectedTime) {
                    jsErrorAlert.classList.remove('hidden');
                    jsErrorList.innerHTML = "<li>Silakan pilih slot waktu pertemuan terlebih dahulu.</li>";
                    return;
                }

                // Format Teks Pesan WhatsApp yang Indah
                let message = `*Halo Nakala Digital, saya ingin menjadwalkan Sesi Discovery.*\n\n`;
                message += `*Detail Profil:*\n`;
                message += `• Nama Lengkap: ${fullName}\n`;
                message += `• Email: ${email}\n`;
                message += `• Perusahaan: ${company}\n`;
                message += `• Sistem Saat Ini: ${systemUsed}\n\n`;
                message += `*Kebutuhan Proyek:*\n`;
                message += `• Kebutuhan: ${needs}\n`;
                message += `• Target Implementasi: ${timeline}\n\n`;
                message += `*Jadwal Discovery Terpilih:*\n`;
                message += `• Tanggal: ${selectedDate}\n`;
                message += `• Waktu/Jam: ${selectedTime} WIB`;

                const targetPhone = "628138853493";
                const waUrl = `https://api.whatsapp.com/send?phone=${targetPhone}&text=${encodeURIComponent(message)}`;

                // Jalankan Instant Redirect tanpa tertahan blocker browser
                window.open(waUrl, '_blank');
            });
        });
    </script>
</body>

</html>
