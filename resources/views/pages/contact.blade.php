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
            app()->getLocale() === 'en'
                ? 'Get in touch with Nakala Digital to discuss your next software or AI project.'
                : 'Hubungi Nakala Digital untuk mendiskusikan projek software, AI, atau transformasi digital Anda selanjutnya.',
    ])
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-tint": "#12AED0",
                        "on-error": "#ffffff",
                        "outline-variant": "#12AED0",
                        "on-tertiary-fixed": "#031A44",
                        "on-secondary-fixed": "#031A44",
                        "surface-dim": "#d5dbdd",
                        "secondary-container": "#12AED0",
                        "primary-fixed-dim": "#12AED0",
                        "tertiary-fixed": "#A7F432",
                        "error": "#A7F432",
                        "on-secondary-container": "#031A44",
                        "background": "#F7FAFC",
                        "on-secondary": "#ffffff",
                        "surface-container-low": "#eff4f7",
                        "on-tertiary-container": "#031A44",
                        "on-primary-fixed": "#031A44",
                        "on-primary": "#ffffff",
                        "outline": "#12AED0",
                        "inverse-primary": "#12AED0",
                        "surface-container": "#e9eff1",
                        "on-error-container": "#031A44",
                        "secondary-fixed-dim": "#12AED0",
                        "surface-bright": "#F7FAFC",
                        "surface-container-highest": "#dee3e6",
                        "primary-fixed": "#12AED0",
                        "primary-container": "#12AED0",
                        "primary": "#12AED0",
                        "on-primary-container": "#031A44",
                        "on-surface-variant": "#031A44",
                        "on-primary-fixed-variant": "#031A44",
                        "on-tertiary-fixed-variant": "#031A44",
                        "on-background": "#031A44",
                        "on-secondary-fixed-variant": "#031A44",
                        "tertiary-container": "#A7F432",
                        "on-surface": "#031A44",
                        "tertiary": "#A7F432",
                        "surface": "#F7FAFC",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary": "#031A44",
                        "surface-container-high": "#e4e9ec",
                        "secondary-fixed": "#12AED0",
                        "error-container": "#A7F432",
                        "inverse-surface": "#031A44",
                        "tertiary-fixed-dim": "#A7F432",
                        "secondary": "#031A44",
                        "inverse-on-surface": "#ecf1f4",
                        "surface-variant": "#dee3e6",
                        "midnight-navy": "#031A44",
                        "electric-cyan": "#12AED0",
                        "impact-lime": "#A7F432"
                    },
                    "borderRadius": {
                        "DEFAULT": "4px",
                        "lg": "4px",
                        "xl": "8px",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "unit-xl": "64px",
                        "unit-lg": "32px",
                        "margin-mobile": "20px",
                        "margin-desktop": "80px",
                        "unit-xs": "4px",
                        "container-max": "1280px",
                        "unit-md": "16px",
                        "unit-sm": "8px"
                    },
                    "fontFamily": {
                        "display-lg-mobile": ["Poppins"],
                        "body-md": ["Poppins"],
                        "button": ["Poppins"],
                        "headline-h1-mobile": ["Poppins"],
                        "headline-h2": ["Poppins"],
                        "body-lg": ["Poppins"],
                        "headline-h2-mobile": ["Poppins"],
                        "headline-h1": ["Poppins"],
                        "headline-h3": ["Poppins"],
                        "display-lg": ["Poppins"],
                        "label-sm": ["Poppins"]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .form-input-focus:focus {
            border-color: #12AED0;
            border-width: 2px;
            ring-color: transparent;
        }

        .field-error {
            border-color: #dc2626 !important;
        }

        .field-error-message {
            display: none;
            color: #dc2626;
            font-size: 12px;
            margin-top: 4px;
        }

        .field-error-message.active {
            display: block;
        }

        #formToast {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 100;
            max-width: 380px;
            transform: translateX(120%);
            opacity: 0;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        #formToast.show {
            transform: translateX(0);
            opacity: 1;
        }
    </style>
</head>

<body class="bg-background text-on-background font-body-md">
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
                <!-- Badge Disesuaikan dengan Figma (LOKAL & REGIONAL) -->
                <div
                    class="inline-flex items-center bg-tertiary-fixed text-on-tertiary-fixed px-4 py-1.5 rounded-full font-label-sm text-xs font-bold uppercase tracking-widest mb-unit-md">
                    LOKAL & REGIONAL
                </div>
                <h1
                    class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 max-w-3xl mb-unit-md font-bold">
                    {{ app()->getLocale() === 'en' ? 'Build the digital future together' : 'Mari bangun masa depan Digital bersama' }}
                </h1>
                <p class="font-body-lg text-body-lg text-surface-variant max-w-2xl">
                    {{ app()->getLocale() === 'en' ? 'Nakala Digital brings regional capability with a local touch. Tell us about your project.' : 'Nakala Digital menghadirkan kapabilitas regional dengan sentuhan lokal. Ceritakan tentang proyek Anda.' }}
                </p>
            </div>
        </section>

        <!-- Content & Form Section -->
        <section class="py-unit-xl max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">

                <!-- Form Kontak / Jadwal Sesi Discovery (Kiri di Figma) -->
                <div class="lg:col-span-7 flex flex-col gap-unit-md">
                    <div
                        class="bg-white p-unit-lg md:p-unit-xl border border-outline-variant rounded-xl shadow-sm relative">
                        <h2 class="font-headline-h3 text-2xl font-bold mb-unit-lg text-on-surface">
                            {{ app()->getLocale() === 'en' ? 'Contact Form' : 'Form Kontak' }}
                        </h2>

                        <!-- Alert Error Global jika ada -->
                        @if ($errors->any())
                            <div class="mb-unit-md p-4 rounded bg-red-50 text-red-700 flex items-start gap-3"
                                role="alert">
                                <span class="material-symbols-outlined">error</span>
                                <div>
                                    <p class="font-bold">
                                        {{ app()->getLocale() === 'en' ? 'Please fix the highlighted fields below.' : 'Mohon perbaiki isian form yang salah di bawah ini.' }}
                                    </p>
                                </div>
                            </div>
                        @endif

                        <form class="space-y-unit-md" id="contactForm"
                            action="{{ route('contact.store' . (app()->getLocale() === 'en' ? '.en' : '')) }}"
                            method="POST">
                            @csrf

                            <!-- Honeypot Field -->
                            <div class="absolute -left-[9999px] w-px h-px overflow-hidden" aria-hidden="true">
                                <label for="website">Website</label>
                                <input type="text" id="website" name="website" tabindex="-1" autocomplete="off" />
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                                <!-- Nama Lengkap -->
                                <div class="space-y-1">
                                    <label for="full_name"
                                        class="font-label-sm text-xs font-semibold text-on-surface-variant">
                                        {{ app()->getLocale() === 'en' ? 'Full Name' : 'Nama Lengkap' }}
                                    </label>
                                    <input id="full_name" name="full_name"
                                        class="w-full border @error('full_name') border-red-600 @else border-gray-200 @enderror rounded-lg p-3 form-input-focus bg-gray-50 text-sm"
                                        placeholder="{{ app()->getLocale() === 'en' ? 'e.g. John Doe' : 'Contoh: Budi Santoso' }}"
                                        type="text" value="{{ old('full_name') }}" required />
                                    @error('full_name')
                                        <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Perusahaan -->
                                <div class="space-y-1">
                                    <label for="company"
                                        class="font-label-sm text-xs font-semibold text-on-surface-variant">
                                        {{ app()->getLocale() === 'en' ? 'Company' : 'Perusahaan' }}
                                    </label>
                                    <input id="company" name="company"
                                        class="w-full border @error('company') border-red-600 @else border-gray-200 @enderror rounded-lg p-3 form-input-focus bg-gray-50 text-sm"
                                        placeholder="{{ app()->getLocale() === 'en' ? 'e.g. Acme Corp' : 'Contoh: PT. ABC' }}"
                                        type="text" value="{{ old('company') }}" />
                                    @error('company')
                                        <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                                <!-- Jabatan -->
                                <div class="space-y-1">
                                    <label for="position"
                                        class="font-label-sm text-xs font-semibold text-on-surface-variant">
                                        {{ app()->getLocale() === 'en' ? 'Position' : 'Jabatan' }}
                                    </label>
                                    <input id="position" name="position"
                                        class="w-full border @error('position') border-red-600 @else border-gray-200 @enderror rounded-lg p-3 form-input-focus bg-gray-50 text-sm"
                                        placeholder="{{ app()->getLocale() === 'en' ? 'e.g. CTO' : 'Contoh: CTO / Direktur' }}"
                                        type="text" value="{{ old('position') }}" />
                                    @error('position')
                                        <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="space-y-1">
                                    <label for="email"
                                        class="font-label-sm text-xs font-semibold text-on-surface-variant">
                                        {{ app()->getLocale() === 'en' ? 'Email Address' : 'Alamat Email' }}
                                    </label>
                                    <input id="email" name="email"
                                        class="w-full border @error('email') border-red-600 @else border-gray-200 @enderror rounded-lg p-3 form-input-focus bg-gray-50 text-sm"
                                        placeholder="Alex@company.com" type="email" value="{{ old('email') }}"
                                        required />
                                    @error('email')
                                        <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                                <!-- Telepon -->
                                <div class="space-y-1">
                                    <label for="phone"
                                        class="font-label-sm text-xs font-semibold text-on-surface-variant">
                                        {{ app()->getLocale() === 'en' ? 'Phone Number' : 'Nomor Telephone' }}
                                    </label>
                                    <input id="phone" name="phone"
                                        class="w-full border @error('phone') border-red-600 @else border-gray-200 @enderror rounded-lg p-3 form-input-focus bg-gray-50 text-sm"
                                        placeholder="+62 811 - 34xx - xxxx" type="tel" value="{{ old('phone') }}"
                                        required />
                                    @error('phone')
                                        <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Jenis Proyek -->
                                <div class="space-y-1">
                                    <label for="project_type"
                                        class="font-label-sm text-xs font-semibold text-on-surface-variant">
                                        {{ app()->getLocale() === 'en' ? 'Project Type' : 'Jenis Proyek' }}
                                    </label>
                                    <select id="project_type" name="project_type"
                                        class="w-full border @error('project_type') border-red-600 @else border-gray-200 @enderror rounded-lg p-3 form-input-focus bg-gray-50 text-sm text-gray-600"
                                        required>
                                        <option value="" disabled {{ old('project_type') ? '' : 'selected' }}>
                                            Website / Portal
                                        </option>
                                        <option value="enterprise_web_app" @selected(old('project_type') === 'enterprise_web_app')>Enterprise Web
                                            App</option>
                                        <option value="mobile_app" @selected(old('project_type') === 'mobile_app')>Mobile App
                                            (iOS/Android)</option>
                                        <option value="cloud_infrastructure" @selected(old('project_type') === 'cloud_infrastructure')>Cloud
                                            Infrastructure</option>
                                        <option value="ai_ml_solutions" @selected(old('project_type') === 'ai_ml_solutions')>AI/ML Solutions
                                        </option>
                                    </select>
                                    @error('project_type')
                                        <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                                <!-- Rentang Anggaran -->
                                <div class="space-y-1">
                                    <label for="budget_range"
                                        class="font-label-sm text-xs font-semibold text-on-surface-variant">
                                        {{ app()->getLocale() === 'en' ? 'Budget Range' : 'Rentang Anggaran' }}
                                    </label>
                                    <select id="budget_range" name="budget_range"
                                        class="w-full border border-gray-200 rounded-lg p-3 form-input-focus bg-gray-50 text-sm text-gray-600">
                                        <option value="not_sure" @selected(!old('budget_range') || old('budget_range') === 'not_sure')>
                                            < Rp 50 Juta </option>
                                        <option value="10k_25k" @selected(old('budget_range') === '10k_25k')>Rp 50 Juta - Rp 100 Juta
                                        </option>
                                        <option value="25k_50k" @selected(old('budget_range') === '25k_50k')>Rp 100 Juta - Rp 250 Juta
                                        </option>
                                        <option value="50k_plus" @selected(old('budget_range') === '50k_plus')>> Rp 250 Juta</option>
                                    </select>
                                </div>

                                <!-- Lini Masa -->
                                <div class="space-y-1">
                                    <label for="timeline"
                                        class="font-label-sm text-xs font-semibold text-on-surface-variant">
                                        {{ app()->getLocale() === 'en' ? 'Timeline' : 'Lini Masa' }}
                                    </label>
                                    <select id="timeline" name="timeline"
                                        class="w-full border border-gray-200 rounded-lg p-3 form-input-focus bg-gray-50 text-sm text-gray-600">
                                        <option value="asap" @selected(!old('timeline') || old('timeline') === 'asap')>
                                            Secepatnya (<1 bulan) </option>
                                        <option value="1_3_months" @selected(old('timeline') === '1_3_months')>1-3 Bulan</option>
                                        <option value="3_6_months" @selected(old('timeline') === '3_6_months')>3-6 Bulan</option>
                                        <option value="ongoing" @selected(old('timeline') === 'ongoing')>Kerjasama Berkelanjutan
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <!-- Pesan -->
                            <div class="space-y-1">
                                <label for="message"
                                    class="font-label-sm text-xs font-semibold text-on-surface-variant">
                                    {{ app()->getLocale() === 'en' ? 'Message / Project Details' : 'Pesan / Detail Proyek' }}
                                </label>
                                <textarea id="message" name="message"
                                    class="w-full border @error('message') border-red-600 @else border-gray-200 @enderror rounded-lg p-3 min-h-[100px] form-input-focus bg-gray-50 text-sm"
                                    placeholder="{{ app()->getLocale() === 'en' ? 'Tell us about your technical challenges...' : 'Ceritakan Tentang Tantangan Teknis anda' }}"
                                    required>{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Tombol Submit Native -->
                            <div class="pt-unit-sm">
                                <button
                                    class="bg-electric-cyan text-white px-6 py-3 rounded-md font-button text-xs font-bold uppercase tracking-wider hover:opacity-90 transition-opacity inline-flex items-center gap-2"
                                    type="submit">
                                    <span>{{ app()->getLocale() === 'en' ? 'SCHEDULE DISCOVERY SESSION' : 'JADWALKAN SESI DISCOVERY' }}</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Info Panel & Model Kami -->
                <div class="lg:col-span-5 space-y-unit-md">
                    <!-- Informasi Kontak Card -->
                    <div class="p-unit-lg bg-white border border-outline-variant rounded-xl shadow-sm space-y-unit-md">
                        <h3 class="font-headline-h3 text-lg font-bold text-on-surface">
                            {{ app()->getLocale() === 'en' ? 'Contact Information' : 'Informasi Kontak' }}
                        </h3>
                        <div class="space-y-4 text-sm">
                            <!-- 1. Email -->
                            <div class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-electric-cyan text-xl mt-0.5">mail</span>
                                <div>
                                    <p class="font-semibold text-on-surface">Email</p>
                                    <p class="text-gray-600">contact@nakala.digital</p>
                                </div>
                            </div>
                            <!-- 2. Telepon -->
                            <div class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-electric-cyan text-xl mt-0.5">call</span>
                                <div>
                                    <p class="font-semibold text-on-surface">Telepon</p>
                                    <p class="text-gray-600">+6282295706304</p>
                                </div>
                            </div>
                            <!-- 3. Sesi Discovery -->
                            <div class="flex items-start gap-3">
                                <span
                                    class="material-symbols-outlined text-electric-cyan text-xl mt-0.5">calendar_today</span>
                                <div>
                                    <p class="font-semibold text-on-surface">Sesi Discovery</p>
                                    <p class="text-gray-600">Sesi Discovery Gratis</p>
                                </div>
                            </div>
                            <!-- 4. Kantor -->
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

                    <!-- Engagement Model Card (Model Kami) 1-->
                    <div class="p-unit-lg bg-white border border-outline-variant rounded-xl shadow-sm space-y-unit-md">
                        <h4 class="font-headline-h3 text-lg font-bold text-on-surface">
                            {{ app()->getLocale() === 'en' ? 'Our Model' : 'Model Kami' }}
                        </h4>
                        <div class="relative pl-6 space-y-5 border-l-2 border-electric-cyan/30 ml-2">
                            <div class="relative">
                                <span
                                    class="absolute -left-[31px] top-1 bg-electric-cyan w-3.5 h-3.5 rounded-full ring-4 ring-white"></span>
                                <p class="font-bold text-sm text-electric-cyan">01. Discovery & Scoping</p>
                                <p class="text-gray-600 text-xs">
                                    Menentukan tujuan proyek, ruang lingkup, dan proposal solusi.
                                </p>
                            </div>
                            <div class="relative">
                                <span
                                    class="absolute -left-[31px] top-1 bg-electric-cyan w-3.5 h-3.5 rounded-full ring-4 ring-white"></span>
                                <p class="font-bold text-sm text-electric-cyan">02. Design & Architecture</p>
                                <p class="text-gray-600 text-xs">
                                    Wireframes, desain sistem, dan rencana pengiriman.
                                </p>
                            </div>
                            <div class="relative">
                                <span
                                    class="absolute -left-[31px] top-1 bg-electric-cyan w-3.5 h-3.5 rounded-full ring-4 ring-white"></span>
                                <p class="font-bold text-sm text-electric-cyan">03. Agile Dev & QA</p>
                                <p class="text-gray-600 text-xs">
                                    Pengembangan berbasis Sprint dengan pengujian QA.
                                </p>
                            </div>
                            <div class="relative">
                                <span
                                    class="absolute -left-[31px] top-1 bg-electric-cyan w-3.5 h-3.5 rounded-full ring-4 ring-white"></span>
                                <p class="font-bold text-sm text-electric-cyan">04. Handover & Support</p>
                                <p class="text-gray-600 text-xs">
                                    Serah terima formal, dukungan SLA, dan peta jalan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Partner Badge Section -->
        @include('partials.partner-badge')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <script>
        (() => {
            const LOCALE = "{{ app()->getLocale() }}";
            const MSG = {
                required: LOCALE === 'en' ? 'This field is required.' : 'Kolom ini wajib diisi.',
                email: LOCALE === 'en' ? 'Please enter a valid email address.' :
                    'Masukkan alamat email yang valid.',
                phone: LOCALE === 'en' ? 'Enter a valid phone number (8-15 digits).' :
                    'Masukkan nomor telepon yang valid (8-15 digit).',
                minLength: (n) => LOCALE === 'en' ? `Minimum ${n} characters required.` : `Minimal ${n} karakter.`,
                generic: LOCALE === 'en' ? 'Something went wrong. Please try again.' :
                    'Terjadi kesalahan. Silakan coba lagi.',
                network: LOCALE === 'en' ? 'Network error. Please check your connection and try again.' :
                    'Gagal terhubung ke server. Periksa koneksi internet Anda dan coba lagi.',
                success: LOCALE === 'en' ? 'Thank you! Your inquiry has been sent successfully.' :
                    'Terima kasih! Pesan Anda berhasil dikirim. Tim kami akan segera menghubungi Anda.',
            };

            const form = document.getElementById('contactForm');
            if (!form) return;

            const alertBox = document.getElementById('formAlert');
            const submitBtn = document.getElementById('contactSubmitBtn');
            const submitLabel = document.getElementById('contactSubmitLabel');
            const submitSpinner = document.getElementById('contactSubmitSpinner');
            const originalLabel = submitLabel.textContent;
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

            const fieldRules = {
                full_name: {
                    required: true,
                    minLength: 3
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true
                },
                project_type: {
                    required: true
                },
                message: {
                    required: true,
                    minLength: 10
                },
            };

            function showFieldError(name, message) {
                const input = form.querySelector(`[name="${name}"]`);
                const errorEl = document.getElementById(`${name}_error`);
                if (!input) return;
                input.classList.add('field-error');
                input.setAttribute('aria-invalid', 'true');
                if (errorEl) {
                    if (message) errorEl.textContent = message;
                    errorEl.classList.add('active');
                }
            }

            function clearFieldError(name) {
                const input = form.querySelector(`[name="${name}"]`);
                const errorEl = document.getElementById(`${name}_error`);
                if (!input) return;
                input.classList.remove('field-error');
                input.removeAttribute('aria-invalid');
                if (errorEl) errorEl.classList.remove('active');
            }

            function clearAllErrors() {
                Object.keys(fieldRules).forEach(clearFieldError);
                ['company', 'position'].forEach(clearFieldError);
            }

            function validateField(name) {
                const rules = fieldRules[name];
                if (!rules) return true;
                const input = form.querySelector(`[name="${name}"]`);
                if (!input) return true;
                const value = input.value.trim();

                if (rules.required && !value) {
                    showFieldError(name, MSG.required);
                    return false;
                }
                if (rules.minLength && value.length < rules.minLength) {
                    showFieldError(name, MSG.minLength(rules.minLength));
                    return false;
                }
                if (rules.email && value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                    showFieldError(name, MSG.email);
                    return false;
                }
                clearFieldError(name);
                return true;
            }

            function validateForm() {
                let isValid = true;
                Object.keys(fieldRules).forEach((name) => {
                    if (!validateField(name)) isValid = false;
                });
                return isValid;
            }

            Object.keys(fieldRules).forEach((name) => {
                const input = form.querySelector(`[name="${name}"]`);
                if (!input) return;
                input.addEventListener('blur', () => validateField(name));
                input.addEventListener('input', () => {
                    if (input.classList.contains('field-error')) validateField(name);
                });
            });

            function showAlert(type, message) {
                alertBox.classList.remove('hidden', 'bg-red-50', 'text-red-700', 'bg-green-50', 'text-green-700');
                if (type === 'success') {
                    alertBox.classList.add('bg-green-50', 'text-green-700');
                    alertBox.innerHTML =
                        `<span class="material-symbols-outlined">check_circle</span><span>${message}</span>`;
                } else {
                    alertBox.classList.add('bg-red-50', 'text-red-700');
                    alertBox.innerHTML = `<span class="material-symbols-outlined">error</span><span>${message}</span>`;
                }
                alertBox.scrollIntoView({
                    behavior: 'smooth',
                    block: 'nearest'
                });
            }

            function hideAlert() {
                alertBox.classList.add('hidden');
                alertBox.innerHTML = '';
            }

            function setLoading(isLoading) {
                submitBtn.disabled = isLoading;
                submitSpinner.classList.toggle('hidden', !isLoading);
                submitSpinner.classList.toggle('animate-spin', isLoading);
                submitLabel.textContent = isLoading ? (LOCALE === 'en' ? 'Sending...' : 'Mengirim...') : originalLabel;
            }

            form.addEventListener('submit', async (e) => {
                e.preventDefault();
                hideAlert();
                clearAllErrors();

                if (!validateForm()) {
                    const firstError = form.querySelector('.field-error');
                    if (firstError) firstError.focus({
                        preventScroll: false
                    });
                    showAlert('error', LOCALE === 'en' ?
                        'Please fix the highlighted fields before submitting.' :
                        'Mohon lengkapi kolom yang wajib diisi dengan benar.');
                    return;
                }

                setLoading(true);
                const formData = new FormData(form);

                try {
                    const response = await fetch(form.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': csrfToken || '',
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json',
                        },
                        body: formData,
                    });

                    let payload = null;
                    try {
                        payload = await response.json();
                    } catch (_) {}

                    if (response.ok) {
                        form.reset();
                        clearAllErrors();
                        showAlert('success', (payload && payload.message) || MSG.success);
                    } else if (response.status === 422 && payload && payload.errors) {
                        Object.entries(payload.errors).forEach(([field, messages]) => {
                            showFieldError(field, Array.isArray(messages) ? messages[0] : messages);
                        });
                        showAlert('error', LOCALE === 'en' ?
                            'Please fix the highlighted fields before submitting.' :
                            'Mohon lengkapi kolom yang wajib diisi dengan benar.');
                    } else {
                        showAlert('error', (payload && payload.message) || MSG.generic);
                    }
                } catch (err) {
                    console.error('Contact form submission failed:', err);
                    showAlert('error', MSG.network);
                } finally {
                    setLoading(false);
                }
            });
        })();
    </script>
</body>

</html>
