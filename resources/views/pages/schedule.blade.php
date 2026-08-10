<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>
        {{ app()->getLocale() === 'en' ? 'Schedule Discovery Session | Nakala Digital' : 'Jadwal Sesi Discovery | Nakala Digital' }}
    </title>

    @include('partials.seo', [
        'title' =>
            app()->getLocale() === 'en'
                ? 'Schedule Discovery Session | Nakala Digital'
                : 'Jadwal Sesi Discovery | Nakala Digital',
        'description' => 'Pilih tanggal dan waktu untuk Sesi Discovery Gratis bersama tim Nakala Digital.',
    ])

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />

    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "midnight-navy": "#031A44",
                        "electric-cyan": "#12AED0",
                        "impact-lime": "#A7F432",
                        "surface-variant": "#dee3e6",
                        "on-surface": "#031A44",
                        "outline-variant": "#12AED0",
                        "background": "#F7FAFC"
                    },
                    spacing: {
                        "gutter": "24px",
                        "unit-xl": "64px",
                        "unit-lg": "32px",
                        "unit-md": "16px",
                        "margin-mobile": "20px",
                        "margin-desktop": "80px",
                        "container-max": "1280px"
                    },
                    fontFamily: {
                        body: ["Poppins", "sans-serif"]
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-background text-on-surface font-body">
    @include('partials.navbar')

    <main class="pt-20">
        <!-- Hero Section -->
        <section class="relative bg-midnight-navy text-white py-unit-xl overflow-hidden text-center">
            <div class="absolute inset-0 opacity-10">
                <img class="w-full h-full object-cover" alt="Background Office"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-mtSPaRJvm3MMZPT-yRQF923u69JQwGRSDLW7GDzfw2tcz6oO2ynBG2d3_t5zdC_FBhlDRkk-9y3yY0JzS7rFvDQexsa7JZ4DRXeLMKL3t8M_43QD85Q-KSarD1-hJij4pKrrGna1weJMejvO10fBODl8EPk73DVv7OQBLJwQXTl9U_ge9briz4frpYKGM4ClHfPi877YhqVyyUBk63suAmUwBIjUo6e152x2G6-iiaTAIBE4ERjWSwCn8L_S_2obDvQb9129h-Yv" />
            </div>
            <div
                class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-unit-lg flex flex-col items-center">
                <div
                    class="inline-flex items-center bg-[#A7F432] text-[#031A44] px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest mb-4">
                    LOKAL & REGIONAL
                </div>
                <h1 class="text-3xl md:text-5xl max-w-3xl mb-4 font-bold">
                    {{ app()->getLocale() === 'en' ? 'Build the digital future together' : 'Mari bangun masa depan Digital bersama' }}
                </h1>
                <p class="text-gray-300 max-w-2xl text-sm md:text-base">
                    {{ app()->getLocale() === 'en' ? 'Nakala Digital brings regional capability with a local touch. Tell us about your project.' : 'Nakala Digital menghadirkan kapabilitas regional dengan sentuhan lokal. Ceritakan tentang proyek Anda.' }}
                </p>
            </div>
        </section>

        <!-- Content Section -->
        <section class="py-unit-xl max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">

                <!-- Jadwal Sesi Discovery  -->
                <div class="lg:col-span-7 flex flex-col gap-unit-md">
                    <form action="{{ route('booking.confirm' . (app()->getLocale() === 'en' ? '.en' : '')) }}"
                        method="POST">
                        @csrf

                        <div class="bg-white p-6 md:p-8 border border-gray-200 rounded-2xl shadow-sm">
                            <h2 class="text-2xl font-bold mb-6 text-on-surface">
                                {{ app()->getLocale() === 'en' ? 'Schedule Discovery Session' : 'Jadwal Sesi Discovery' }}
                            </h2>

                            @if (session('error'))
                                <div class="mb-4 p-3 bg-red-50 text-red-700 text-xs rounded-lg">
                                    {{ session('error') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="mb-4 p-3 bg-red-50 text-red-700 text-xs rounded-lg space-y-1">
                                    @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                </div>
                            @endif

                            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-start">

                                <!-- 1. Kalender (Kiri) -->
                                <div id="discoveryCalendar"
                                    class="md:col-span-7 border border-gray-100 rounded-xl p-4 bg-gray-50/50"
                                    data-locale="{{ app()->getLocale() }}" data-old-date="{{ old('date', '') }}">

                                    <!-- Field tersembunyi yang dikirim ke server -->
                                    <input type="hidden" name="date" id="calSelectedDateInput"
                                        value="{{ old('date', '') }}" />

                                    <div class="flex items-center justify-between mb-4">
                                        <span id="calMonthLabel" class="font-bold text-sm text-gray-800"></span>
                                        <div class="flex items-center gap-1">
                                            <button type="button" id="calPrevBtn"
                                                class="p-1 rounded hover:bg-gray-200 text-gray-600">
                                                <span class="material-symbols-outlined text-sm">chevron_left</span>
                                            </button>
                                            <button type="button" id="calNextBtn"
                                                class="p-1 rounded hover:bg-gray-200 text-gray-600">
                                                <span class="material-symbols-outlined text-sm">chevron_right</span>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Grid Hari -->
                                    <div id="calWeekdayHeader"
                                        class="grid grid-cols-7 text-center text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-2">
                                    </div>

                                    <!-- Grid Tanggal -->
                                    <div id="calDaysGrid" class="grid grid-cols-7 text-center gap-1 text-xs"></div>
                                </div>

                                <!-- 2. Pilihan Slot Jam (Kanan) -->
                                <div class="md:col-span-5 space-y-2.5">
                                    @php
                                        $slots = $slots ?? [
                                            '08:00',
                                            '09:00',
                                            '10:00',
                                            '11:00',
                                            '13:00',
                                            '14:00',
                                            '15:00',
                                            '16:00',
                                        ];
                                        $oldTime = old('time');
                                    @endphp

                                    <div class="grid grid-cols-2 gap-2">
                                        @foreach ($slots as $time)
                                            <label class="cursor-pointer">
                                                <input type="radio" name="time" value="{{ $time }}"
                                                    class="peer hidden"
                                                    {{ $oldTime === $time || (!$oldTime && $loop->first) ? 'checked' : '' }} />
                                                <span
                                                    class="block text-center py-2 px-3 border border-gray-200 rounded-lg text-xs font-semibold text-gray-600 hover:border-electric-cyan peer-checked:border-electric-cyan peer-checked:bg-cyan-50/50 peer-checked:text-electric-cyan transition-all">
                                                    {{ $time }}
                                                </span>
                                            </label>
                                        @endforeach
                                    </div>
                                </div>

                            </div>

                            <script>
                                (function() {
                                    const wrapper = document.getElementById('discoveryCalendar');
                                    const monthLabel = document.getElementById('calMonthLabel');
                                    const weekdayHeader = document.getElementById('calWeekdayHeader');
                                    const daysGrid = document.getElementById('calDaysGrid');
                                    const hiddenInput = document.getElementById('calSelectedDateInput');
                                    const prevBtn = document.getElementById('calPrevBtn');
                                    const nextBtn = document.getElementById('calNextBtn');

                                    const locale = wrapper.dataset.locale === 'en' ? 'en' : 'id';
                                    const oldDate = wrapper.dataset.oldDate || '';

                                    const MONTHS = {
                                        id: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                                            'Oktober', 'November', 'Desember'
                                        ],
                                        en: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                                            'October', 'November', 'December'
                                        ],
                                    };
                                    const WEEKDAYS = {
                                        id: ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'],
                                        en: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                                    };

                                    weekdayHeader.innerHTML = WEEKDAYS[locale].map((d) => `<span>${d}</span>`).join('');

                                    const today = new Date();
                                    today.setHours(0, 0, 0, 0);

                                    // Tanggal yang sedang dipilih (default: dari old() jika ada, kalau tidak hari ini)
                                    let selectedDate = oldDate || formatDate(today);

                                    // Bulan yang sedang ditampilkan mengikuti tanggal terpilih
                                    const initial = parseDate(selectedDate) || today;
                                    let viewYear = initial.getFullYear();
                                    let viewMonth = initial.getMonth(); // 0-11

                                    function pad(n) {
                                        return String(n).padStart(2, '0');
                                    }

                                    function formatDate(d) {
                                        return `${d.getFullYear()}-${pad(d.getMonth() + 1)}-${pad(d.getDate())}`;
                                    }

                                    function parseDate(str) {
                                        if (!str) return null;
                                        const [y, m, d] = str.split('-').map(Number);
                                        if (!y || !m || !d) return null;
                                        return new Date(y, m - 1, d);
                                    }

                                    function renderCalendar() {
                                        monthLabel.textContent = `${MONTHS[locale][viewMonth]} ${viewYear}`;

                                        const firstOfMonth = new Date(viewYear, viewMonth, 1);
                                        const startDow = firstOfMonth.getDay(); // 0=Min
                                        const daysInMonth = new Date(viewYear, viewMonth + 1, 0).getDate();
                                        const daysInPrevMonth = new Date(viewYear, viewMonth, 0).getDate();

                                        let html = '';

                                        // Padding tanggal bulan sebelumnya
                                        for (let i = startDow; i > 0; i--) {
                                            html += `<span class="py-2 text-gray-300">${daysInPrevMonth - i + 1}</span>`;
                                        }

                                        // Tanggal bulan berjalan
                                        for (let d = 1; d <= daysInMonth; d++) {
                                            const cellDate = new Date(viewYear, viewMonth, d);
                                            const dateStr = formatDate(cellDate);
                                            const isPast = cellDate < today;
                                            const isSelected = dateStr === selectedDate;

                                            if (isPast) {
                                                html += `<span class="py-2 text-gray-300 cursor-not-allowed">${d}</span>`;
                                            } else {
                                                const base = 'block py-2 rounded font-medium transition-all cursor-pointer';
                                                const state = isSelected ?
                                                    'bg-electric-cyan text-white font-bold' :
                                                    'text-gray-700 hover:bg-cyan-50';
                                                html += `<span class="${base} ${state}" data-date="${dateStr}" role="button">${d}</span>`;
                                            }
                                        }

                                        // Padding tanggal bulan berikutnya biar genap kelipatan 7
                                        const totalCells = startDow + daysInMonth;
                                        const remainder = totalCells % 7;
                                        if (remainder > 0) {
                                            const trailing = 7 - remainder;
                                            for (let d = 1; d <= trailing; d++) {
                                                html += `<span class="py-2 text-gray-300">${d}</span>`;
                                            }
                                        }

                                        daysGrid.innerHTML = html;

                                        // Nonaktifkan tombol "prev" kalau bulan yang ditampilkan = bulan ini
                                        const isCurrentMonth = viewYear === today.getFullYear() && viewMonth === today.getMonth();
                                        prevBtn.disabled = isCurrentMonth;
                                        prevBtn.classList.toggle('opacity-30', isCurrentMonth);
                                        prevBtn.classList.toggle('cursor-not-allowed', isCurrentMonth);
                                    }

                                    daysGrid.addEventListener('click', function(e) {
                                        const target = e.target.closest('[data-date]');
                                        if (!target) return;
                                        selectedDate = target.dataset.date;
                                        hiddenInput.value = selectedDate;
                                        renderCalendar();
                                    });

                                    prevBtn.addEventListener('click', function() {
                                        if (prevBtn.disabled) return;
                                        viewMonth -= 1;
                                        if (viewMonth < 0) {
                                            viewMonth = 11;
                                            viewYear -= 1;
                                        }
                                        renderCalendar();
                                    });

                                    nextBtn.addEventListener('click', function() {
                                        viewMonth += 1;
                                        if (viewMonth > 11) {
                                            viewMonth = 0;
                                            viewYear += 1;
                                        }
                                        renderCalendar();
                                    });

                                    // Set nilai awal & render pertama kali
                                    hiddenInput.value = selectedDate;
                                    renderCalendar();

                                    // Validasi ringan sebelum submit: pastikan tanggal & jam sudah dipilih
                                    const form = wrapper.closest('form');
                                    if (form) {
                                        form.addEventListener('submit', function(e) {
                                            const timeChecked = form.querySelector('input[name="time"]:checked');
                                            if (!hiddenInput.value || !timeChecked) {
                                                e.preventDefault();
                                                alert(locale === 'en' ?
                                                    'Please select both a date and a time slot.' :
                                                    'Silakan pilih tanggal dan jam sesi terlebih dahulu.');
                                            }
                                        });
                                    }
                                })();
                            </script>

                            <!-- Tombol KONFIRMASI -->
                            <div class="mt-8">
                                <button type="submit"
                                    class="bg-electric-cyan text-white px-8 py-3 rounded-md font-bold text-xs uppercase tracking-wider hover:opacity-90 transition-opacity">
                                    {{ app()->getLocale() === 'en' ? 'CONFIRM' : 'KONFIRMASI' }}
                                </button>
                            </div>

                        </div>
                    </form>

                    <!-- WhatsApp CTA Card -->
                    <div
                        class="p-6 bg-white border border-gray-200 rounded-2xl shadow-sm flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 bg-electric-cyan/10 text-electric-cyan rounded-lg flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[20px]">chat</span>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 font-medium">Respon Cepat</p>
                                <p class="font-bold text-base text-on-surface">Chat via WhatsApp</p>
                            </div>
                        </div>
                        <a href="https://wa.me/628138853493" target="_blank" rel="noopener noreferrer"
                            class="bg-electric-cyan text-white px-5 py-2.5 rounded-md font-button text-xs font-bold uppercase tracking-wider hover:opacity-90 transition-opacity">
                            {{ app()->getLocale() === 'en' ? 'Contact Us' : 'HUBUNGI KAMI' }}
                        </a>
                    </div>
                </div>

                <!-- Informasi Kontak & Model Kami -->
                <div class="lg:col-span-5 space-y-unit-md">
                    <!-- Informasi Kontak Card -->
                    <div class="p-6 bg-white border border-gray-200 rounded-2xl shadow-sm space-y-4">
                        <h3 class="text-lg font-bold text-on-surface">
                            {{ app()->getLocale() === 'en' ? 'Contact Information' : 'Informasi Kontak' }}
                        </h3>
                        <div class="space-y-4 text-sm">
                            <div class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-electric-cyan text-xl mt-0.5">mail</span>
                                <div>
                                    <p class="font-semibold text-on-surface">Email</p>
                                    <p class="text-gray-600">contact@nakala.digital</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-electric-cyan text-xl mt-0.5">call</span>
                                <div>
                                    <p class="font-semibold text-on-surface">Telepon</p>
                                    <p class="text-gray-600">+6282295706304</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span
                                    class="material-symbols-outlined text-electric-cyan text-xl mt-0.5">calendar_today</span>
                                <div>
                                    <p class="font-semibold text-on-surface">Sesi Discovery</p>
                                    <p class="text-gray-600">Sesi Discovery Gratis</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span
                                    class="material-symbols-outlined text-electric-cyan text-xl mt-0.5">location_on</span>
                                <div>
                                    <p class="font-semibold text-on-surface">Kantor</p>
                                    <p class="text-gray-600 leading-relaxed text-xs">
                                        Pointlab Coworking Space, Graha Pos Indonesia, Jl. Banda No.30 Lantai 2 Blok C,
                                        Citarum, Bandung Wetan, Bandung City, West Java 40115
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Engagement Model Card -->
                    <div class="p-6 bg-white border border-gray-200 rounded-2xl shadow-sm space-y-4">
                        <h4 class="text-lg font-bold text-on-surface">
                            {{ app()->getLocale() === 'en' ? 'Our Model' : 'Model Kami' }}
                        </h4>
                        <div class="relative pl-6 space-y-5 border-l-2 border-electric-cyan/30 ml-2">
                            <div class="relative">
                                <span
                                    class="absolute -left-[31px] top-1 bg-electric-cyan w-3.5 h-3.5 rounded-full ring-4 ring-white"></span>
                                <p class="font-bold text-sm text-electric-cyan">01. Discovery & Scoping</p>
                                <p class="text-gray-600 text-xs">Menentukan tujuan proyek, ruang lingkup, dan proposal
                                    solusi.</p>
                            </div>
                            <div class="relative">
                                <span
                                    class="absolute -left-[31px] top-1 bg-electric-cyan w-3.5 h-3.5 rounded-full ring-4 ring-white"></span>
                                <p class="font-bold text-sm text-electric-cyan">02. Design & Architecture</p>
                                <p class="text-gray-600 text-xs">Wireframes, desain sistem, dan rencana pengiriman.</p>
                            </div>
                            <div class="relative">
                                <span
                                    class="absolute -left-[31px] top-1 bg-electric-cyan w-3.5 h-3.5 rounded-full ring-4 ring-white"></span>
                                <p class="font-bold text-sm text-electric-cyan">03. Agile Dev & QA</p>
                                <p class="text-gray-600 text-xs">Pengembangan berbasis Sprint dengan pengujian QA.</p>
                            </div>
                            <div class="relative">
                                <span
                                    class="absolute -left-[31px] top-1 bg-electric-cyan w-3.5 h-3.5 rounded-full ring-4 ring-white"></span>
                                <p class="font-bold text-sm text-electric-cyan">04. Handover & Support</p>
                                <p class="text-gray-600 text-xs">Serah terima formal, dukungan SLA, dan peta jalan.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        @include('partials.partner-badge')
    </main>

    @include('partials.footer')
</body>

</html>
