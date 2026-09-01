<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ app()->getLocale() }}">
<!--
  ============================================================
  CONTACT PAGE – Nakala Digital
  ============================================================
  File        : contact.blade.php
  Route       : /contact (ID) | /en/contact (EN)
  Purpose     : Main contact/inquiry page with hero, info panel,
                contact form, WhatsApp CTA, and engagement model.
  Dependencies: tailwindcss (CDN), Material Symbols, Poppins (Google Fonts)
  ============================================================
-->

<html lang="{{ app()->getLocale() }}">

<head>
    <!--
      ========================================================
      META & SEO
      ========================================================
      - Dynamic title based on locale.
      - Includes SEO partial for og:tags / meta description.
    -->
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ app()->getLocale() === 'en' ? 'Contact Us | Nakala Digital' : 'Hubungi Kami | Nakala Digital' }}</title>
    @include('partials.seo', [
        'title' => app()->getLocale() === 'en' ? 'Contact Us | Nakala Digital' : 'Hubungi Kami | Nakala Digital',
        'description' =>
            app()->getLocale() === 'en' ? 'Get in touch with Nakala Digital...' : 'Hubungi Nakala Digital...',
            app()->getLocale() === 'en'
                ? 'Get in touch with Nakala Digital to discuss your next software or AI project.'
                : 'Hubungi Nakala Digital untuk mendiskusikan proyek software, AI, atau transformasi digital Anda selanjutnya.',
    ])

    <!--
      ========================================================
      Tailwind CSS (CDN) – v4 with forms & container-queries
      ========================================================
      - Tailwind config is embedded below with custom design tokens:
        colors, spacing, fontFamily, fontSize, borderRadius.
      - All tokens follow Nakala Digital's design system.
    -->
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

    <!--
      ========================================================
      CUSTOM STYLES
      ========================================================
      - .material-symbols-outlined : icon font settings.
      - .bento-grid               : 12-column grid helper.
      - .form-input-focus         : focus ring override for form fields.
    -->
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
<body class="bg-background text-on-background font-body-md">

    <!--
      ========================================================
      NAVBAR (partial)
      ========================================================
      Fixed top navigation with logo, desktop nav links, language
      switcher, CTA button, and mobile hamburger menu.
    -->
    @include('partials.navbar')

    <main class="pt-20">

        <!--
          ======================================================
          HERO SECTION
          ======================================================
          - Full-width midnight navy background with overlay image.
          - Tagline badge + headline + description.
          - Content is constrained by max-w-container-max.
        -->
        <section class="relative bg-midnight-navy text-white py-unit-xl overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <img class="w-full h-full object-cover"
                    data-alt="A sophisticated architectural photograph of a modern high-tech office building at dusk with sharp glass lines and cool blue lighting. The atmosphere is professional and authoritative, reflecting the corporate identity of a premium digital partner. Deep navy shadows contrast with illuminated office windows, creating a sense of scale and technical precision in a minimalist urban setting."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-mtSPaRJvm3MMZPT-yRQF923u69JQwGRSDLW7GDzfw2tcz6oO2ynBG2d3_t5zdC_FBhlDRkk-9y3yY0JzS7rFvDQexsa7JZ4DRXeLMKL3t8M_43QD85Q-KSarD1-hJij4pKrrGna1weJMejvO10fBODl8EPk73DVv7OQBLJwQXTl9U_ge9briz4frpYKGM4ClHfPi877YhqVyyUBk63suAmUwBIjUo6e152x2G6-iiaTAIBE4ERjWSwCn8L_S_2obDvQb9129h-Yv" />
            </div>
            <div class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-unit-lg">
                <div
                    class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-4 py-1.5 rounded-full font-label-sm text-label-sm uppercase tracking-widest mb-unit-md">
                    <span class="material-symbols-outlined text-[16px]">public</span>
                    {{ app()->getLocale() === 'en' ? 'Local & Regional' : 'Lokal & Regional' }}
                </div>
                <h1
                    class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-white max-w-3xl mb-unit-md">
                    {{ app()->getLocale() === 'en' ? "Let's build the digital future together" : 'Mari bangun masa depan digital bersama' }}
                </h1>
                <p class="font-body-lg text-body-lg text-surface-variant max-w-2xl">
                    {{ app()->getLocale() === 'en' ? 'Nakala Digital brings regional capability with a local touch. Tell us about your project.' : 'Nakala Digital menghadirkan kapabilitas regional dengan sentuhan lokal. Ceritakan tentang proyek Anda.' }}
                </p>
            </div>
        </section>

        <!--
          ======================================================
          CONTENT & FORM SECTION
          ======================================================
          12-column grid layout:
          - LEFT (lg:col-span-4) : Contact info, WhatsApp CTA,
            engagement model timeline.
          - RIGHT (lg:col-span-8): Contact form with name, company,
            position, email, phone, project type, budget, timeline,
            and message textarea.
        -->
        <section class="py-unit-xl max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">

                <!--
                  ====================================================
                  LEFT PANEL — Contact Information
                  ====================================================
                  Card with border-t-4 in electric-cyan containing:
                  - Email    (contact@nakala.digital)
                  - Phone    (+6282295706304)
                  - Office   (Pointlab Coworking, Bandung)
                  - Consultation session CTA
                -->
                <div class="lg:col-span-4 space-y-unit-lg">
                    <div class="p-unit-lg bg-white border border-outline-variant border-t-4 border-t-electric-cyan">
                        <h3 class="font-headline-h3 text-headline-h3 mb-unit-md">
                            {{ app()->getLocale() === 'en' ? 'Contact Information' : 'Informasi Kontak' }}</h3>
                        <div class="space-y-unit-md">

                            <!-- Email -->
                            <div class="flex items-start gap-unit-md">
                                <span class="material-symbols-outlined text-electric-cyan" data-icon="mail">mail</span>
                                <div>
                                    <p class="text-white font-bold text-sm mb-0.5">Email</p>
                                    <p class="text-gray-300 font-light">contact@nakala.digital</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3.5">
                                <span class="material-symbols-outlined text-[#A7F432] text-xl">call</span>

                            <!-- Phone -->
                            <div class="flex items-start gap-unit-md">
                                <span class="material-symbols-outlined text-electric-cyan"
                                    data-icon="phone">phone</span>
                                <div>
                                    <p class="text-white font-bold text-sm mb-0.5">Telepon</p>
                                    <p class="text-gray-300 font-light">+6282295706304</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3.5">
                                <span class="material-symbols-outlined text-[#A7F432] text-xl">calendar_today</span>

                            <!-- Office Address -->
                            <div class="flex items-start gap-unit-md">
                                <span class="material-symbols-outlined text-electric-cyan"
                                    data-icon="location_on">location_on</span>
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

                            <!-- Consultation Session -->
                            <div class="flex items-start gap-unit-md">
                                <span class="material-symbols-outlined text-electric-cyan"
                                    data-icon="calendar_month">calendar_month</span>
                                <div>
                                    <p class="font-label-sm uppercase text-on-surface-variant">
                                        {{ app()->getLocale() === 'en' ? 'Discovery Session' : 'Sesi Discovery' }}
                                    </p>
                                    <p class="font-body-lg">
                                        {{ app()->getLocale() === 'en' ? 'Free Discovery Session' : 'Sesi Discovery Gratis' }}
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
                    <!--
                      ====================================================
                      WHATSAPP CTA
                      ====================================================
                      - Quick-response card with chat icon.
                      - Button opens wa.me link in new tab.
                      - Uses rel="noopener noreferrer" for security.
                    -->
                    <div
                        class="p-unit-lg bg-white border border-outline-variant shadow-sm border-l-4 border-l-primary flex flex-col gap-unit-md">
                        <div class="flex items-center gap-unit-md">
                            <div
                                class="w-12 h-12 bg-primary/10 text-primary rounded-full flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[24px]">forum</span>
                            </div>
                            <div>
                                <p class="font-label-sm uppercase tracking-widest text-on-surface-variant mb-1">
                                    {{ app()->getLocale() === 'en' ? 'Quick Response' : 'Respons Cepat' }}</p>
                                <p class="font-headline-h3 text-xl font-bold text-on-surface">
                                    {{ app()->getLocale() === 'en' ? 'Chat via WhatsApp' : 'Chat via WhatsApp' }}</p>
                            </div>
                        </div>
                        <a href="https://wa.me/6282295706304" target="_blank" rel="noopener noreferrer"
                            class="mt-2 w-full flex items-center justify-center gap-2 text-center bg-primary text-white px-6 py-3 rounded-[20px] font-button text-button uppercase tracking-widest hover:opacity-90 transition-opacity">
                            {{ app()->getLocale() === 'en' ? 'Message Us' : 'Hubungi Kami' }}
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>

                    <!--
                      ====================================================
                      ENGAGEMENT MODEL
                      ====================================================
                      Timeline with vertical line and dots showing the
                      4-step delivery process:
                      01. Discovery → 02. Design → 03. Agile Dev → 04. Handover
                    -->
                    <div class="p-unit-lg bg-surface-container-low border border-outline-variant">
                        <h4 class="font-headline-h3 text-headline-h3 mb-unit-md">
                            {{ app()->getLocale() === 'en' ? 'Our Model' : 'Model Kami' }}</h4>
                        <div class="relative pl-6 space-y-unit-lg border-l-2 border-outline-variant">
                            <div class="relative">
                                <span class="absolute -left-[31px] top-0 bg-electric-cyan w-4 h-4 rounded-full"></span>
                                <p class="font-button text-button text-primary">01. Discovery &amp; Scoping</p>
                                <p class="text-on-surface-variant text-sm">
                                    {{ app()->getLocale() === 'en' ? 'Defining project goals, scope, and solution proposal.' : 'Menentukan tujuan proyek, ruang lingkup, dan proposal solusi.' }}
                                </p>
                            </div>
                            <div class="relative">
                                <span class="absolute -left-[31px] top-0 bg-electric-cyan w-4 h-4 rounded-full"></span>
                                <p class="font-button text-button text-primary">02. Design &amp; Architecture</p>
                                <p class="text-on-surface-variant text-sm">
                                    {{ app()->getLocale() === 'en' ? 'Wireframes, system design, and delivery plan.' : 'Wireframes, desain sistem, dan rencana pengiriman.' }}
                                </p>
                            </div>
                            <div class="relative">
                                <span class="absolute -left-[31px] top-0 bg-electric-cyan w-4 h-4 rounded-full"></span>
                                <p class="font-button text-button text-primary">03. Agile Dev &amp; QA</p>
                                <p class="text-on-surface-variant text-sm">
                                    {{ app()->getLocale() === 'en' ? 'Sprint-based development with QA testing.' : 'Pengembangan berbasis Sprint dengan pengujian QA.' }}
                                </p>
                            </div>
                            <div class="relative">
                                <span class="absolute -left-[31px] top-0 bg-electric-cyan w-4 h-4 rounded-full"></span>
                                <p class="font-button text-button text-primary">04. Handover &amp; Support</p>
                                <p class="text-on-surface-variant text-sm">
                                    {{ app()->getLocale() === 'en' ? 'Formal handover, SLA support, and growth roadmap.' : 'Serah terima formal, dukungan SLA, dan peta jalan.' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>

    @include('partials.footer')

    <!-- ================= SCRIPT UTAMA ================= -->
                <!--
                  ====================================================
                  RIGHT PANEL — Contact Form
                  ====================================================
                  Form fields:
                  - Row 1: Full Name + Company
                  - Row 2: Position + Email
                  - Row 3: Phone + Project Type (dropdown)
                  - Row 4: Budget Range (dropdown) + Timeline (dropdown)
                  - Row 5: Message / Project Details (textarea)
                  - Submit button
                  On submit, sends data via mailto: link.
                -->
                <div class="lg:col-span-8 flex flex-col gap-unit-xs">
                    <span
                        class="font-label-sm text-primary uppercase tracking-[0.3em] block">{{ app()->getLocale() === 'en' ? 'Contact Form' : 'Formulir Kontak' }}</span>
                    <div class="bg-white p-unit-lg md:p-unit-xl border border-outline-variant shadow-sm">
                        <form class="space-y-unit-md" id="contactForm">

                            <!-- Row 1: Full Name + Company -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                                <div class="space-y-1">
                                    <label
                                        class="font-label-sm text-on-surface-variant uppercase">{{ app()->getLocale() === 'en' ? 'Full Name' : 'Nama Lengkap' }}</label>
                                    <input
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest"
                                        placeholder="{{ app()->getLocale() === 'en' ? 'e.g. John Doe' : 'Contoh: Budi Santoso' }}"
                                        type="text" />
                                </div>
                                <div class="space-y-1">
                                    <label
                                        class="font-label-sm text-on-surface-variant uppercase">{{ app()->getLocale() === 'en' ? 'Company' : 'Perusahaan' }}</label>
                                    <input
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest"
                                        placeholder="{{ app()->getLocale() === 'en' ? 'e.g. Acme Corp' : 'Contoh: PT ABC' }}"
                                        type="text" />
                                </div>
                            </div>

                            <!-- Row 2: Position + Email -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                                <div class="space-y-1">
                                    <label
                                        class="font-label-sm text-on-surface-variant uppercase">{{ app()->getLocale() === 'en' ? 'Position' : 'Jabatan' }}</label>
                                    <input
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest"
                                        placeholder="{{ app()->getLocale() === 'en' ? 'e.g. CTO' : 'Contoh: CTO / Direktur' }}"
                                        type="text" />
                                </div>
                                <div class="space-y-1">
                                    <label
                                        class="font-label-sm text-on-surface-variant uppercase">{{ app()->getLocale() === 'en' ? 'Email Address' : 'Alamat Email' }}</label>
                                    <input
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest"
                                        placeholder="john@company.com" type="email" />
                                </div>
                            </div>

                            <!-- Row 3: Phone + Project Type -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                                <div class="space-y-1">
                                    <label
                                        class="font-label-sm text-on-surface-variant uppercase">{{ app()->getLocale() === 'en' ? 'Phone Number' : 'Nomor Telepon' }}</label>
                                    <input
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest"
                                        placeholder="+62..." type="tel" />
                                </div>
                                <div class="space-y-1">
                                    <label
                                        class="font-label-sm text-on-surface-variant uppercase">{{ app()->getLocale() === 'en' ? 'Project Type' : 'Jenis Proyek' }}</label>
                                    <select
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest">
                                        <option>{{ app()->getLocale() === 'en' ? 'Website / Portal' : 'Website / Portal' }}</option>
                                        <option>{{ app()->getLocale() === 'en' ? 'Mobile Application' : 'Aplikasi Mobile' }}</option>
                                        <option>{{ app()->getLocale() === 'en' ? 'AI / Automation Solution' : 'Solusi AI / Otomatisasi' }}</option>
                                        <option>{{ app()->getLocale() === 'en' ? 'Custom Business System' : 'Sistem Bisnis Kustom' }}</option>
                                        <option>{{ app()->getLocale() === 'en' ? 'QA / Software Testing' : 'QA / Pengujian Software' }}</option>
                                        <option>{{ app()->getLocale() === 'en' ? 'Other / Not Sure Yet' : 'Lainnya / Belum Yakin' }}</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Row 4: Budget + Timeline -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                                <div class="space-y-1">
                                    <label
                                        class="font-label-sm text-on-surface-variant uppercase">{{ app()->getLocale() === 'en' ? 'Budget Range' : 'Rentang Anggaran' }}</label>
                                    <select
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest">
                                        <option>{{ app()->getLocale() === 'en' ? '< Rp 50 Million' : '< Rp 50 Juta' }}</option>
                                        <option>{{ app()->getLocale() === 'en' ? 'Rp 50 - 200 Million' : 'Rp 50 - 200 Juta' }}</option>
                                        <option>{{ app()->getLocale() === 'en' ? 'Rp 200 - 500 Million' : 'Rp 200 - 500 Juta' }}</option>
                                        <option>{{ app()->getLocale() === 'en' ? 'Rp 500 Million - 1 Billion' : 'Rp 500 Juta - 1 Miliar' }}</option>
                                        <option>{{ app()->getLocale() === 'en' ? '> Rp 1 Billion' : '> Rp 1 Miliar' }}</option>
                                        <option>{{ app()->getLocale() === 'en' ? 'Not Sure Yet' : 'Belum Yakin' }}</option>
                                    </select>
                                </div>
                                <div class="space-y-1">
                                    <label
                                        class="font-label-sm text-on-surface-variant uppercase">{{ app()->getLocale() === 'en' ? 'Timeline' : 'Lini Masa' }}</label>
                                    <select
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest">
                                        <option>
                                            {{ app()->getLocale() === 'en' ? 'ASAP (Within 1 mo)' : 'Secepatnya (Dalam 1 bln)' }}
                                        </option>
                                        <option>{{ app()->getLocale() === 'en' ? '1-3 Months' : '1-3 Bulan' }}</option>
                                        <option>{{ app()->getLocale() === 'en' ? '3-6 Months' : '3-6 Bulan' }}</option>
                                        <option>
                                            {{ app()->getLocale() === 'en' ? 'Ongoing partnership' : 'Kerjasama Berkelanjutan' }}
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <!-- Row 5: Message -->
                            <div class="space-y-1">
                                <label
                                    class="font-label-sm text-on-surface-variant uppercase">{{ app()->getLocale() === 'en' ? 'Message / Project Details' : 'Pesan / Detail Proyek' }}</label>
                                <textarea class="w-full border-outline-variant rounded p-3 min-h-[120px] form-input-focus bg-surface-container-lowest"
                                    placeholder="{{ app()->getLocale() === 'en' ? 'Tell us about your technical challenges...' : 'Ceritakan tentang tantangan teknis Anda...' }}"></textarea>
                            </div>

                            <!-- Submit -->
                            <div class="pt-unit-md">
                                <button
                                    class="bg-primary text-white px-8 py-4 rounded-[20px] font-button text-button uppercase tracking-widest hover:bg-on-surface-variant transition-colors"
                                    type="submit">
                                    {{ app()->getLocale() === 'en' ? 'Submit Inquiry' : 'Kirim Pertanyaan' }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partner Badge Section -->
        @include('partials.partner-badge')

    </main>

    <!-- Footer -->
    @include('partials.footer')
    @include('partials.lenis-scroll')

    <!--
      ========================================================
      JAVASCRIPT
      ========================================================
      - Contact form handler: collects all field values,
        serializes them, and opens mailto: link.
      - Scroll header handler: shrinks navbar on scroll.
    -->
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
            const btn = f.querySelector('button');
            const originalText = btn.innerHTML;
            const isEn = window.location.pathname.startsWith('/en');
            btn.innerHTML = isEn ? 'Opening Email...' : 'Membuka Email...';
            btn.disabled = true;

            const subjectText = isEn ? 'Project Inquiry | Nakala Digital' : 'Pertanyaan Proyek | Nakala Digital';
            const subject = encodeURIComponent(subjectText);
            const body = encodeURIComponent(
                Object.entries(data)
                .filter(([k, v]) => v)
                .map(([k, v]) => `${k}: ${v}`)
                .join('\n')
            );
            window.location.href = `mailto:contact@nakala.digital?subject=${subject}&body=${body}`;

            setTimeout(() => {
                btn.innerHTML = originalText;
                btn.disabled = false;
            }, 3000);
        });

        /*
         * Scroll header: toggle shadow & height on scroll > 50px.
         */
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header.fixed');
            if (window.scrollY > 50) {
                header.classList.add('py-2', 'h-16');
                header.classList.remove('h-20');
            } else {
                header.classList.remove('py-2', 'h-16');
                header.classList.add('h-20');
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

