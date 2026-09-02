<!DOCTYPE html>

<html class="scroll-smooth" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <title>
        {{ app()->getLocale() === 'en'
    ? 'Nakala Digital | Local Delivery, Regional Capability'
    : 'Nakala Digital | Layanan Lokal, Kemampuan Regional' }}
    </title>
    @include('partials.seo', [
        'title' =>
            app()->getLocale() === 'en'
            ? 'Nakala Digital | Local Delivery, Regional Capability'
            : 'Nakala Digital | Layanan Lokal, Kemampuan Regional',
        'description' =>
            app()->getLocale() === 'en'
            ? 'AI, Software Development & Digital Solutions Partner for Business Growth. Your strategic partner in Indonesia with regional expertise.'
            : 'Mitra Solusi Digital, Pengembangan Perangkat Lunak & AI untuk Pertumbuhan Bisnis Anda.',
    ])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
                        "electric-cyan": "#12AED0",
                        "midnight-navy": "#031A44",
                        "impact-lime": "#A7F432"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
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
                    },
                    "fontSize": {
                        "display-lg-mobile": ["48px", {
                            "lineHeight": "1.1",
                            "fontWeight": "700"
                        }],
                        "body-md": ["16px", {
                            "lineHeight": "1.6",
                            "fontWeight": "400"
                        }],
                        "button": ["15px", {
                            "lineHeight": "1.0",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
                        }],
                        "headline-h1-mobile": ["28px", {
                            "lineHeight": "1.3",
                            "fontWeight": "700"
                        }],
                        "headline-h2": ["40px", {
                            "lineHeight": "1.3",
                            "fontWeight": "600"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "1.6",
                            "fontWeight": "400"
                        }],
                        "headline-h2-mobile": ["28px", {
                            "lineHeight": "1.3",
                            "fontWeight": "600"
                        }],
                        "headline-h1": ["56px", {
                            "lineHeight": "1.2",
                            "fontWeight": "700"
                        }],
                        "headline-h3": ["24px", {
                            "lineHeight": "1.4",
                            "fontWeight": "600"
                        }],
                        "display-lg": ["72px", {
                            "lineHeight": "1.1",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "label-sm": ["12px", {
                            "lineHeight": "1.0",
                            "fontWeight": "700"
                        }]
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.35s ease-out;
        }

        .accordion-item.active .accordion-content {
            max-height: 600px;
        }

        .accordion-item.active .toggle-icon {
            transform: rotate(180deg);
        }

        /* --- SOCIAL PROOF STATS: EDIT SESUAI KEBUTUHAN --- */
        .stat-card {
            text-align: center;
        }

        .stat-number {
            font-weight: 700;
            color: #12AED0;
            line-height: 1.1;
        }

        .stat-label {
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            color: #031A44;
            line-height: 1.2;
        }

        /* MOBILE (< 768px) */
        @media (max-width: 767px) {
            .stat-card {
                padding: 24px 16px;
                border-bottom: 1px solid #12AED0;
            }

            .stat-card:nth-last-child(-n+2) {
                border-bottom: none;
            }

            .stat-number {
                font-size: 36px;
                margin-bottom: 4px;
            }

            .stat-label {
                font-size: 11px;
            }
        }

        /* TABLET (768px - 1024px) */
        @media (min-width: 768px) and (max-width: 1024px) {
            .stat-card {
                padding: 16px;
            }

            .stat-card:not(:last-child) {
                border-right: 1px solid #12AED0;
            }

            .stat-number {
                font-size: 48px;
                margin-bottom: 6px;
            }

            .stat-label {
                font-size: 11px;
            }
        }

        /* DESKTOP (> 1024px) */
        @media (min-width: 1025px) {
            .stat-card {
                padding: 24px 16px;
            }

            .stat-card:not(:last-child) {
                border-right: 1px solid #12AED0;
            }

            .stat-number {
                font-size: 64px;
                margin-bottom: 8px;
            }

            .stat-label {
                font-size: 12px;
            }
        }

        /* SMALL MOBILE (≤400px) — Hero readability fix */
        @media (max-width: 400px) {
            .hero-heading {
                font-size: 22px !important;
                line-height: 1.3 !important;
            }

            .hero-desc {
                font-size: 15px !important;
            }

            .hero-btn {
                padding-left: 1.25rem !important;
                padding-right: 1.25rem !important;
                padding-top: 0.625rem !important;
                padding-bottom: 0.625rem !important;
                font-size: 13px !important;
            }
        }

        /* --- HERO IT-THEMED BACKGROUND --- */
        #hero {
            isolation: isolate;
        }

        /* Circuit / tech grid pattern layer */
        .hero-grid-pattern {
            background-image:
                linear-gradient(rgba(18, 174, 208, 0.20) 1px, transparent 1px),
                linear-gradient(90deg, rgba(18, 174, 208, 0.20) 1px, transparent 1px);
            background-size: 72px 72px;
            -webkit-mask-image: radial-gradient(ellipse 85% 65% at 30% 25%, black 30%, transparent 85%);
            mask-image: radial-gradient(ellipse 85% 65% at 30% 25%, black 30%, transparent 85%);
        }

        /* --- HERO THEME CAROUSEL (AI / Cloud / Data / Digital Transformation / Cybersecurity) --- */
        .hero-carousel {
            position: absolute;
            inset: 0;
            overflow: hidden;
        }

        .hero-carousel-slide {
            position: absolute;
            inset: 0;
            opacity: 0;
            transition: opacity 1.4s ease-in-out;
        }

        .hero-carousel-slide.is-active {
            opacity: 1;
        }

        .hero-carousel-slide .slide-icon {
            position: absolute;
            right: -5%;
            bottom: -10%;
            font-size: clamp(180px, 24vw, 340px);
            color: rgba(3, 26, 68, 0.05);
            pointer-events: none;
        }

        .slide-ai {
            background: linear-gradient(135deg, rgba(18, 174, 208, 0.12), rgba(3, 26, 68, 0.03) 60%);
        }

        .slide-cloud {
            background: linear-gradient(135deg, rgba(18, 174, 208, 0.06), rgba(18, 174, 208, 0.14) 60%);
        }

        .slide-data {
            background: linear-gradient(135deg, rgba(18, 174, 208, 0.16), rgba(18, 174, 208, 0.06) 60%);
        }

        .slide-digital {
            background: linear-gradient(135deg, rgba(3, 26, 68, 0.06), rgba(18, 174, 208, 0.12) 60%);
        }

        .slide-security {
            background: linear-gradient(135deg, rgba(18, 174, 208, 0.10), rgba(3, 26, 68, 0.05) 60%);
        }

        /* Slow-drifting gradient orbs (kept from original design, softened) */
        .hero-orb {
            animation: hero-orb-float 14s ease-in-out infinite;
        }

        .hero-orb-delay {
            animation-delay: -7s;
        }

        @keyframes hero-orb-float {

            0%,
            100% {
                transform: translate3d(0, 0, 0) scale(1);
            }

            50% {
                transform: translate3d(20px, -16px, 0) scale(1.08);
            }
        }

        /* Canvas network layer sits behind content, above grid/orbs */
        #hero-network {
            display: block;
        }

        @media (prefers-reduced-motion: reduce) {

            .hero-orb,
            .hero-orb-delay {
                animation: none;
            }
        }
    </style>

</head>

<body class="bg-background text-on-background font-body-md selection:bg-primary-fixed selection:text-on-primary-fixed">
    @include('partials.navbar')
    <main class="pt-20">
        <div class="md:min-h-[calc(100vh-80px)] md:flex md:flex-col lg:min-h-0 lg:block">

            {{-- Section 1 : Ekosistem Pendidikan Berdaya AI --}}
            <section id="hero"
                class="relative overflow-hidden bg-gradient-to-br from-surface-container-lowest via-surface to-primary/[0.08] pt-unit-md sm:pt-unit-lg lg:pt-unit-md pb-unit-xl sm:pb-unit-xl lg:pb-unit-lg border-b md:flex-1 lg:flex-none">

                {{-- IT / digital-transformation themed background --}}
                <div id="hero-carousel" class="hero-carousel pointer-events-none" aria-hidden="true">
                    <div class="hero-carousel-slide slide-cloud">
                        <span class="material-symbols-outlined slide-icon">cloud</span>
                    </div>
                    <div class="hero-carousel-slide slide-data">
                        <span class="material-symbols-outlined slide-icon">monitoring</span>
                    </div>
                    <div class="hero-carousel-slide slide-digital">
                        <span class="material-symbols-outlined slide-icon">hub</span>
                    </div>
                    <div class="hero-carousel-slide slide-security">
                        <span class="material-symbols-outlined slide-icon">encrypted</span>
                    </div>
                </div>
                <div class="hero-grid-pattern absolute inset-0 pointer-events-none" aria-hidden="true"></div>
                <canvas id="hero-network" class="absolute inset-0 h-full w-full pointer-events-none"
                    aria-hidden="true"></canvas>

                {{-- Decorative background accents --}}
                <div
                    class="hero-orb pointer-events-none absolute -top-24 -right-24 h-96 w-96 rounded-full bg-primary/10 blur-3xl">
                </div>
                <div class="hero-orb hero-orb-delay pose
                     inter-events-none absolute -bottom-32 -left-24 h-96 w-96 rounded-full bg-primary/20 blur-3xl">
                </div>
                <div
                    class="flex justify-start items-center w-full max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop min-h-[520px] sm:min-h-[660px]">
                    <div class="space-y-unit-lg z-10 pt-unit-lg lg:w-1/2">

                        {{-- Hero Badge --}}
                        <div class="flex justify-start">
                            <div
                                class="inline-flex items-center justify-start gap-3 sm:gap-4 bg-tertiary-fixed text-on-tertiary-fixed px-4 sm:px-6 py-1.5 rounded-[20px] font-label-sm font-semibold text-[16px] sm:text-[22px] uppercase tracking-wide w-max h-[38px] sm:h-[43px]">
                                <svg width="14" height="21" viewBox="0 0 14 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.15322 12.3503C5.16253 12.274 5.15562 12.1966 5.13293 12.1231C5.11024 12.0497 5.07229 11.9818 5.02156 11.924C4.97084 11.8663 4.90848 11.8198 4.83857 11.7878C4.76866 11.7558 4.69278 11.7389 4.61589 11.7383H1.29222C1.20235 11.7373 1.11409 11.7142 1.03522 11.6711C0.956359 11.628 0.889304 11.5662 0.839967 11.491C0.79063 11.4159 0.760523 11.3298 0.752299 11.2403C0.744076 11.1508 0.757987 11.0606 0.792808 10.9778L5.02539 1.0891C5.06552 0.989572 5.13431 0.904209 5.22304 0.843839C5.31176 0.783469 5.41641 0.750814 5.52372 0.750015H10.4182C10.8006 0.750015 11.0617 1.14002 10.922 1.50185L8.51156 7.68985C8.47846 7.77253 8.46601 7.86204 8.47528 7.95062C8.48456 8.0392 8.51527 8.12419 8.56477 8.19822C8.61428 8.27226 8.68107 8.33313 8.75938 8.37555C8.8377 8.41797 8.92517 8.44067 9.01423 8.44168H12.1256C12.5719 8.44168 12.8265 8.9606 12.5567 9.32243L4.46423 20.2056C4.39706 20.2955 4.25731 20.2381 4.26922 20.1276L5.15322 12.3503Z"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                {{ __('messages.hero_badge') }}
                            </div>
                        </div>

                        {{-- Hero Title --}}
                        <h1
                            class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-on-background max-w-6xl text-start hero-heading md:max-w-full lg:max-w-6xl">
                            @php $heroHighlight = app()->getLocale() === 'en' ? 'Connected, Efficient,<br>and Ready to Grow' : 'Terhubung, Efisien,<br>dan Siap Bertumbuh'; @endphp
                            {!! str_replace(
    $heroHighlight,
    '<span class="text-primary">' . $heroHighlight . '</span>',
    __('messages.hero_title'),
) !!}
                        </h1>

                        {{-- Hero Description --}}
                        <p
                            class="font-body-lg text-body-lg text-on-surface-variant max-w-xl text-start hero-desc md:max-w-full lg:max-w-xl">
                            {!! __('messages.hero_desc') !!}
                        </p>

                        {{-- Hero Support Line --}}
                        <div class="flex items-start justify-start gap-3 -mt-6">
                            <div
                                class="inline-flex items-center gap-2 border border-outline-variant bg-surface-container px-4 py-2 rounded-full">
                                <img alt="Romulus Digital" class="h-4 object-contain"
                                    src="{{ asset('assets/romulus-birumuda.png') }}" />
                                <span class="font-label-sm text-on-surface-variant text-xs tracking-[0.12em] uppercase">
                                    {{ __('messages.hero_support_line') }}
                                </span>
                            </div>
                        </div>

                        <div
                            class="flex flex-col sm:flex-row gap-3 sm:gap-4 pt-unit-md items-start justify-start w-full sm:w-auto">
                            @php $localeSuffix = app()->getLocale() === 'en' ? '.en' : ''; @endphp

                            {{-- Button Primary CTA --}}
                            <a href="{{ route('contact' . $localeSuffix) }}"
                                class="inline-flex items-center justify-center text-center border-2 border-primary-container text-primary-container bg-transparent px-4 sm:px-5 py-2.5 rounded-[12px] font-button text-xs sm:text-sm uppercase tracking-widest shadow-md hover:bg-primary hover:text-white hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300 ease-out hero-btn w-full sm:w-auto">
                                {{ app()->getLocale() === 'en' ? 'Contact Us' : 'Jadwalkan Sesi Discovery' }}
                            </a>

                            {{-- Button Secondary CTA --}}
                            <a href="{{ route('services' . $localeSuffix) }}"
                                class="inline-flex items-center justify-center text-center border-2 border-on-secondary-fixed text-on-secondary-fixed bg-transparent px-4 sm:px-5 py-2.5 rounded-[12px] font-button text-xs sm:text-sm uppercase tracking-widest hover:bg-on-secondary-fixed hover:text-white hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300 ease-out hero-btn w-full sm:w-auto">
                                {{ app()->getLocale() === 'en' ? 'View Our Services' : 'Jelajahi Solusi Pendidikan' }}
                            </a>
                        </div>
                    </div>

                    {{-- RIGHT: Dashboard Mockup Card --}}
                    <div class="relative z-10 hidden lg:flex lg:w-1/2 justify-end items-start pt-16 pb-16">
                        <div class="relative w-full max-w-[640px]"
                            style="transform: translateX(32px) translateY(-120px);">

                            {{-- Dashboard Panel --}}
                            <div
                                class="relative bg-white rounded-[24px] shadow-2xl border border-outline-variant/30 overflow-hidden">
                                <img src="https://raw.githubusercontent.com/zhafrannajib31-cmyk/Assets/refs/heads/main/Dashboard%20Panel%20Card.png"
                                    class="w-full aspect-[640/364] object-cover" alt="Dashboard Panel Card">
                            </div>

                            {{-- AI Assistant Chat Bubble --}}
                            <div
                                class="absolute -bottom-10 -left-0 w-[320px] bg-white rounded-[20px] shadow-2xl p-4 space-y-3 border border-outline-variant/30 overflow-hidden">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="h-9 w-9 rounded-full bg-tertiary-fixed flex items-center justify-center shrink-0">
                                        <span
                                            class="material-symbols-outlined text-on-tertiary-fixed text-lg">smart_toy</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-on-background leading-tight">Nakala AI
                                            Assistant</p>
                                        <p class="text-[11px] text-primary flex items-center gap-1">
                                            <span class="h-1.5 w-1.5 rounded-full bg-primary inline-block"></span>
                                            {{ app()->getLocale() === 'en' ? 'Online' : 'Online' }}
                                        </p>
                                    </div>
                                </div>
                                <p class="text-xs italic text-on-surface-variant">
                                    {{ app()->getLocale() === 'en'
    ? '"How is new student enrollment trending today?"'
    : '"Bagaimana progres pendaftaran mahasiswa baru di Fakultas Teknik hari ini?"' }}
                                </p>
                                <div class="bg-primary/10 border-l-4 border-primary rounded-r-xl px-3 py-2">
                                    <p class="text-xs text-primary font-medium">
                                        {{ app()->getLocale() === 'en'
    ? 'Up 15% from yesterday. Want to see the breakdown?'
    : 'Terdapat kenaikan 15% dari kemarin, Ingin melihat detail per prodi?' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @include('partials.partner-badge')
        </div>

        {{-- Section 2 : Pilih Kebutuhan Institusi Anda --}}
        <section class="w-full bg-gray-50 py-16">
            <div class="mx-auto w-full max-w-[1229px] px-margin-mobile md:px-margin-desktop">
                @php $localeSuffix = app()->getLocale() === 'en' ? '.en' : ''; @endphp

                <div class="mb-unit-xl max-w-2xl mx-auto text-center">
                    <h2
                        class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-background mb-unit-md">
                        {{ app()->getLocale() === 'en' ? 'Select Your Institution Needs' : 'Pilih Kebutuhan Institusi Anda' }}
                    </h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant">
                        {{ app()->getLocale() === 'en'
    ? 'Modular solutions designed specifically for different education levels and institutional scales.'
    : 'Solusi modular yang dirancang spesifik untuk jenjang dan skala pendidikan yang berbeda.' }}
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">

                    {{-- Card Sekolah & Yayasan --}}
                    <a href="{{ route('sekolah' . $localeSuffix) }}"
                        class="group bg-white p-unit-lg lg:p-unit-xl rounded-[24px] border border-primary text-on-background flex flex-col justify-between transition-all duration-300 hover:-translate-y-1 shadow-sm">
                        <div class="space-y-unit-md">
                            <div class="h-14 w-14 rounded-2xl bg-primary/10 flex items-center justify-center">
                                <svg width="56" height="56" viewBox="0 0 76 76" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.5 73.3329H71.5625M6.04167 41.4579V73.3329M69.7917 41.4579V73.3329M21.9792 23.7496V73.3329M53.8542 23.7496V73.3329M2.5 41.4579H20.2083M73.3333 41.4579H55.625M18.4375 23.7496H57.3958M37.9167 23.7496V13.0608M37.9167 13.0608V5.935C37.9167 4.25625 37.9167 3.41687 38.4338 2.89625C40.0629 1.25646 46.7708 5.13104 49.3208 6.70354C51.4742 8.02812 52.0833 10.6773 52.0833 13.0608H37.9167ZM37.9167 73.3329V66.2496M32.6042 37.9163V39.6871M43.2292 37.9163V39.6871M32.6042 52.0829V53.8538M43.2292 52.0829V53.8538"
                                        stroke="#12AED0" stroke-width="5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                                {{ app()->getLocale() === 'en' ? 'School & Foundation' : 'Sekolah & Yayasan' }}
                            </h3>
                            <p class="font-body-md text-on-surface-variant max-w-md"
                                style="font-family: 'Inter', sans-serif; font-weight: 400;">
                                {{ app()->getLocale() === 'en'
    ? 'Integrated solutions for kindergarten, elementary, junior high, and senior high under one foundation umbrella.'
    : 'Solusi terintegrasi untuk TK, SD, SMP, hingga SMA dalam satu payung yayasan.' }}
                            </p>
                        </div>
                        <div class="mt-unit-lg">
                            <ul class="grid grid-cols-1 gap-unit-sm">
                                <li class="flex items-center gap-unit-md text-on-background/90"><svg width="20"
                                        height="20" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="shrink-0">
                                        <path
                                            d="M10.7835 17.8663L5.83333 12.915L7.483 11.2653L10.7835 14.5647L17.3822 7.96484L19.033 9.61568L10.7835 17.8663Z"
                                            fill="#A7F432" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 12.8333C0 5.74583 5.74583 0 12.8333 0C19.9208 0 25.6667 5.74583 25.6667 12.8333C25.6667 19.9208 19.9208 25.6667 12.8333 25.6667C5.74583 25.6667 0 19.9208 0 12.8333ZM12.8333 23.3333C11.4545 23.3333 10.0891 23.0617 8.81516 22.5341C7.54124 22.0064 6.38373 21.233 5.40871 20.258C4.4337 19.2829 3.66027 18.1254 3.1326 16.8515C2.60492 15.5776 2.33333 14.2122 2.33333 12.8333C2.33333 11.4545 2.60492 10.0891 3.1326 8.81516C3.66027 7.54124 4.4337 6.38373 5.40871 5.40871C6.38373 4.4337 7.54124 3.66027 8.81516 3.1326C10.0891 2.60492 11.4545 2.33333 12.8333 2.33333C15.6181 2.33333 18.2888 3.43958 20.258 5.40871C22.2271 7.37784 23.3333 10.0486 23.3333 12.8333C23.3333 15.6181 22.2271 18.2888 20.258 20.258C18.2888 22.2271 15.6181 23.3333 12.8333 23.3333Z"
                                            fill="#A7F432" />
                                    </svg>{{ app()->getLocale() === 'en' ? 'PPDB & School Website' : 'PPDB dan Website Sekolah' }}
                                </li>
                                <li class="flex items-center gap-unit-md text-on-background/90"><svg width="20"
                                        height="20" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="shrink-0">
                                        <path
                                            d="M10.7835 17.8663L5.83333 12.915L7.483 11.2653L10.7835 14.5647L17.3822 7.96484L19.033 9.61568L10.7835 17.8663Z"
                                            fill="#A7F432" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 12.8333C0 5.74583 5.74583 0 12.8333 0C19.9208 0 25.6667 5.74583 25.6667 12.8333C25.6667 19.9208 19.9208 25.6667 12.8333 25.6667C5.74583 25.6667 0 19.9208 0 12.8333ZM12.8333 23.3333C11.4545 23.3333 10.0891 23.0617 8.81516 22.5341C7.54124 22.0064 6.38373 21.233 5.40871 20.258C4.4337 19.2829 3.66027 18.1254 3.1326 16.8515C2.60492 15.5776 2.33333 14.2122 2.33333 12.8333C2.33333 11.4545 2.60492 10.0891 3.1326 8.81516C3.66027 7.54124 4.4337 6.38373 5.40871 5.40871C6.38373 4.4337 7.54124 3.66027 8.81516 3.1326C10.0891 2.60492 11.4545 2.33333 12.8333 2.33333C15.6181 2.33333 18.2888 3.43958 20.258 5.40871C22.2271 7.37784 23.3333 10.0486 23.3333 12.8333C23.3333 15.6181 22.2271 18.2888 20.258 20.258C18.2888 22.2271 15.6181 23.3333 12.8333 23.3333Z"
                                            fill="#A7F432" />
                                    </svg>Parent
                                    & Student Portal
                                </li>
                                <li class="flex items-center gap-unit-md text-on-background/90"><svg width="20"
                                        height="20" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="shrink-0">
                                        <path
                                            d="M10.7835 17.8663L5.83333 12.915L7.483 11.2653L10.7835 14.5647L17.3822 7.96484L19.033 9.61568L10.7835 17.8663Z"
                                            fill="#A7F432" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 12.8333C0 5.74583 5.74583 0 12.8333 0C19.9208 0 25.6667 5.74583 25.6667 12.8333C25.6667 19.9208 19.9208 25.6667 12.8333 25.6667C5.74583 25.6667 0 19.9208 0 12.8333ZM12.8333 23.3333C11.4545 23.3333 10.0891 23.0617 8.81516 22.5341C7.54124 22.0064 6.38373 21.233 5.40871 20.258C4.4337 19.2829 3.66027 18.1254 3.1326 16.8515C2.60492 15.5776 2.33333 14.2122 2.33333 12.8333C2.33333 11.4545 2.60492 10.0891 3.1326 8.81516C3.66027 7.54124 4.4337 6.38373 5.40871 5.40871C6.38373 4.4337 7.54124 3.66027 8.81516 3.1326C10.0891 2.60492 11.4545 2.33333 12.8333 2.33333C15.6181 2.33333 18.2888 3.43958 20.258 5.40871C22.2271 7.37784 23.3333 10.0486 23.3333 12.8333C23.3333 15.6181 22.2271 18.2888 20.258 20.258C18.2888 22.2271 15.6181 23.3333 12.8333 23.3333Z"
                                            fill="#A7F432" />
                                    </svg>{{ app()->getLocale() === 'en' ? 'LMS & Assessment' : 'LMS dan Assessment' }}
                                </li>
                                <li class="flex items-center gap-unit-md text-on-background/90"><svg width="20"
                                        height="20" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="shrink-0">
                                        <path
                                            d="M10.7835 17.8663L5.83333 12.915L7.483 11.2653L10.7835 14.5647L17.3822 7.96484L19.033 9.61568L10.7835 17.8663Z"
                                            fill="#A7F432" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 12.8333C0 5.74583 5.74583 0 12.8333 0C19.9208 0 25.6667 5.74583 25.6667 12.8333C25.6667 19.9208 19.9208 25.6667 12.8333 25.6667C5.74583 25.6667 0 19.9208 0 12.8333ZM12.8333 23.3333C11.4545 23.3333 10.0891 23.0617 8.81516 22.5341C7.54124 22.0064 6.38373 21.233 5.40871 20.258C4.4337 19.2829 3.66027 18.1254 3.1326 16.8515C2.60492 15.5776 2.33333 14.2122 2.33333 12.8333C2.33333 11.4545 2.60492 10.0891 3.1326 8.81516C3.66027 7.54124 4.4337 6.38373 5.40871 5.40871C6.38373 4.4337 7.54124 3.66027 8.81516 3.1326C10.0891 2.60492 11.4545 2.33333 12.8333 2.33333C15.6181 2.33333 18.2888 3.43958 20.258 5.40871C22.2271 7.37784 23.3333 10.0486 23.3333 12.8333C23.3333 15.6181 22.2271 18.2888 20.258 20.258C18.2888 22.2271 15.6181 23.3333 12.8333 23.3333Z"
                                            fill="#A7F432" />
                                    </svg>{{ app()->getLocale() === 'en' ? 'HRIS & Attendance' : 'HRIS dan Absensi' }}
                                </li>
                                <li class="flex items-center gap-unit-md text-on-background/90"><svg width="20"
                                        height="20" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="shrink-0">
                                        <path
                                            d="M10.7835 17.8663L5.83333 12.915L7.483 11.2653L10.7835 14.5647L17.3822 7.96484L19.033 9.61568L10.7835 17.8663Z"
                                            fill="#A7F432" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 12.8333C0 5.74583 5.74583 0 12.8333 0C19.9208 0 25.6667 5.74583 25.6667 12.8333C25.6667 19.9208 19.9208 25.6667 12.8333 25.6667C5.74583 25.6667 0 19.9208 0 12.8333ZM12.8333 23.3333C11.4545 23.3333 10.0891 23.0617 8.81516 22.5341C7.54124 22.0064 6.38373 21.233 5.40871 20.258C4.4337 19.2829 3.66027 18.1254 3.1326 16.8515C2.60492 15.5776 2.33333 14.2122 2.33333 12.8333C2.33333 11.4545 2.60492 10.0891 3.1326 8.81516C3.66027 7.54124 4.4337 6.38373 5.40871 5.40871C6.38373 4.4337 7.54124 3.66027 8.81516 3.1326C10.0891 2.60492 11.4545 2.33333 12.8333 2.33333C15.6181 2.33333 18.2888 3.43958 20.258 5.40871C22.2271 7.37784 23.3333 10.0486 23.3333 12.8333C23.3333 15.6181 22.2271 18.2888 20.258 20.258C18.2888 22.2271 15.6181 23.3333 12.8333 23.3333Z"
                                            fill="#A7F432" />
                                    </svg>{{ app()->getLocale() === 'en' ? 'Foundation Dashboard' : 'Dashboard Yayasan' }}
                                </li>
                                <li class="flex items-center gap-unit-md text-on-background/90"><svg width="20"
                                        height="20" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="shrink-0">
                                        <path
                                            d="M10.7835 17.8663L5.83333 12.915L7.483 11.2653L10.7835 14.5647L17.3822 7.96484L19.033 9.61568L10.7835 17.8663Z"
                                            fill="#A7F432" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 12.8333C0 5.74583 5.74583 0 12.8333 0C19.9208 0 25.6667 5.74583 25.6667 12.8333C25.6667 19.9208 19.9208 25.6667 12.8333 25.6667C5.74583 25.6667 0 19.9208 0 12.8333ZM12.8333 23.3333C11.4545 23.3333 10.0891 23.0617 8.81516 22.5341C7.54124 22.0064 6.38373 21.233 5.40871 20.258C4.4337 19.2829 3.66027 18.1254 3.1326 16.8515C2.60492 15.5776 2.33333 14.2122 2.33333 12.8333C2.33333 11.4545 2.60492 10.0891 3.1326 8.81516C3.66027 7.54124 4.4337 6.38373 5.40871 5.40871C6.38373 4.4337 7.54124 3.66027 8.81516 3.1326C10.0891 2.60492 11.4545 2.33333 12.8333 2.33333C15.6181 2.33333 18.2888 3.43958 20.258 5.40871C22.2271 7.37784 23.3333 10.0486 23.3333 12.8333C23.3333 15.6181 22.2271 18.2888 20.258 20.258C18.2888 22.2271 15.6181 23.3333 12.8333 23.3333Z"
                                            fill="#A7F432" />
                                    </svg>SPP
                                    & Payment Gateway
                                </li>
                                <li class="flex items-center gap-unit-md text-on-background/90"><svg width="20"
                                        height="20" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="shrink-0">
                                        <path
                                            d="M10.7835 17.8663L5.83333 12.915L7.483 11.2653L10.7835 14.5647L17.3822 7.96484L19.033 9.61568L10.7835 17.8663Z"
                                            fill="#A7F432" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 12.8333C0 5.74583 5.74583 0 12.8333 0C19.9208 0 25.6667 5.74583 25.6667 12.8333C25.6667 19.9208 19.9208 25.6667 12.8333 25.6667C5.74583 25.6667 0 19.9208 0 12.8333ZM12.8333 23.3333C11.4545 23.3333 10.0891 23.0617 8.81516 22.5341C7.54124 22.0064 6.38373 21.233 5.40871 20.258C4.4337 19.2829 3.66027 18.1254 3.1326 16.8515C2.60492 15.5776 2.33333 14.2122 2.33333 12.8333C2.33333 11.4545 2.60492 10.0891 3.1326 8.81516C3.66027 7.54124 4.4337 6.38373 5.40871 5.40871C6.38373 4.4337 7.54124 3.66027 8.81516 3.1326C10.0891 2.60492 11.4545 2.33333 12.8333 2.33333C15.6181 2.33333 18.2888 3.43958 20.258 5.40871C22.2271 7.37784 23.3333 10.0486 23.3333 12.8333C23.3333 15.6181 22.2271 18.2888 20.258 20.258C18.2888 22.2271 15.6181 23.3333 12.8333 23.3333Z"
                                            fill="#A7F432" />
                                    </svg>AI
                                    Parent & Admission Assistant
                                </li>
                                <li class="flex items-center gap-unit-md text-on-background/90"><svg width="20"
                                        height="20" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="shrink-0">
                                        <path
                                            d="M10.7835 17.8663L5.83333 12.915L7.483 11.2653L10.7835 14.5647L17.3822 7.96484L19.033 9.61568L10.7835 17.8663Z"
                                            fill="#A7F432" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 12.8333C0 5.74583 5.74583 0 12.8333 0C19.9208 0 25.6667 5.74583 25.6667 12.8333C25.6667 19.9208 19.9208 25.6667 12.8333 25.6667C5.74583 25.6667 0 19.9208 0 12.8333ZM12.8333 23.3333C11.4545 23.3333 10.0891 23.0617 8.81516 22.5341C7.54124 22.0064 6.38373 21.233 5.40871 20.258C4.4337 19.2829 3.66027 18.1254 3.1326 16.8515C2.60492 15.5776 2.33333 14.2122 2.33333 12.8333C2.33333 11.4545 2.60492 10.0891 3.1326 8.81516C3.66027 7.54124 4.4337 6.38373 5.40871 5.40871C6.38373 4.4337 7.54124 3.66027 8.81516 3.1326C10.0891 2.60492 11.4545 2.33333 12.8333 2.33333C15.6181 2.33333 18.2888 3.43958 20.258 5.40871C22.2271 7.37784 23.3333 10.0486 23.3333 12.8333C23.3333 15.6181 22.2271 18.2888 20.258 20.258C18.2888 22.2271 15.6181 23.3333 12.8333 23.3333Z"
                                            fill="#A7F432" />
                                    </svg>CRM
                                    AI Assistant
                                </li>
                            </ul>
                            <div
                                class="mt-unit-lg inline-flex items-center gap-2 text-secondary font-button text-button tracking-normal group-hover:gap-3 transition-all duration-300">
                                {{ app()->getLocale() === 'en' ? 'Learn School Services' : 'Pelajari Layanan Sekolah' }}
                                <span class="material-symbols-outlined text-lg">arrow_forward</span>
                            </div>
                        </div>
                    </a>

                    {{-- Card Perguruan Tinggi --}}
                    <a href="{{ route('perguruan-tinggi' . $localeSuffix) }}"
                        class="group bg-secondary p-unit-lg lg:p-unit-xl rounded-[24px] border border-transparent hover:border-primary text-white flex flex-col justify-between transition-all duration-300 hover:-translate-y-1">
                        <div class="space-y-unit-md">
                            <div class="h-14 w-14 rounded-2xl bg-white/10 flex items-center justify-center">
                                <span
                                    class="material-symbols-outlined text-tertiary-fixed text-3xl">account_balance</span>
                            </div>
                            <h3 class="font-headline-h3 text-headline-h3 text-white">
                                {{ app()->getLocale() === 'en' ? 'University & Higher Education' : 'Perguruan Tinggi' }}
                            </h3>
                            <p class="font-body-md text-white/90 max-w-md"
                                style="font-family: 'Inter', sans-serif; font-weight: 400;">
                                {{ app()->getLocale() === 'en'
    ? 'Manage complex academic ecosystems, from research to industry integration, for universities and polytechnics.'
    : 'Kelola ekosistem akademik yang kompleks, riset, hingga integrasi industri untuk Universitas dan Politeknik.' }}
                            </p>
                        </div>
                        <div class="mt-unit-lg">
                            <ul class="grid grid-cols-1 gap-unit-sm">
                                <li class="flex items-center gap-unit-md text-white/90"><svg width="20" height="20"
                                        viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="shrink-0">
                                        <path
                                            d="M10.7835 17.8663L5.83333 12.915L7.483 11.2653L10.7835 14.5647L17.3822 7.96484L19.033 9.61568L10.7835 17.8663Z"
                                            fill="#12AED0" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 12.8333C0 5.74583 5.74583 0 12.8333 0C19.9208 0 25.6667 5.74583 25.6667 12.8333C25.6667 19.9208 19.9208 25.6667 12.8333 25.6667C5.74583 25.6667 0 19.9208 0 12.8333ZM12.8333 23.3333C11.4545 23.3333 10.0891 23.0617 8.81516 22.5341C7.54124 22.0064 6.38373 21.233 5.40871 20.258C4.4337 19.2829 3.66027 18.1254 3.1326 16.8515C2.60492 15.5776 2.33333 14.2122 2.33333 12.8333C2.33333 11.4545 2.60492 10.0891 3.1326 8.81516C3.66027 7.54124 4.4337 6.38373 5.40871 5.40871C6.38373 4.4337 7.54124 3.66027 8.81516 3.1326C10.0891 2.60492 11.4545 2.33333 12.8333 2.33333C15.6181 2.33333 18.2888 3.43958 20.258 5.40871C22.2271 7.37784 23.3333 10.0486 23.3333 12.8333C23.3333 15.6181 22.2271 18.2888 20.258 20.258C18.2888 22.2271 15.6181 23.3333 12.8333 23.3333Z"
                                            fill="#12AED0" />
                                    </svg>{{ app()->getLocale() === 'en' ? 'PPDB & School Website' : 'PPDB dan Website Sekolah' }}
                                </li>
                                <li class="flex items-center gap-unit-md text-white/90"><svg width="20" height="20"
                                        viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="shrink-0">
                                        <path
                                            d="M10.7835 17.8663L5.83333 12.915L7.483 11.2653L10.7835 14.5647L17.3822 7.96484L19.033 9.61568L10.7835 17.8663Z"
                                            fill="#12AED0" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 12.8333C0 5.74583 5.74583 0 12.8333 0C19.9208 0 25.6667 5.74583 25.6667 12.8333C25.6667 19.9208 19.9208 25.6667 12.8333 25.6667C5.74583 25.6667 0 19.9208 0 12.8333ZM12.8333 23.3333C11.4545 23.3333 10.0891 23.0617 8.81516 22.5341C7.54124 22.0064 6.38373 21.233 5.40871 20.258C4.4337 19.2829 3.66027 18.1254 3.1326 16.8515C2.60492 15.5776 2.33333 14.2122 2.33333 12.8333C2.33333 11.4545 2.60492 10.0891 3.1326 8.81516C3.66027 7.54124 4.4337 6.38373 5.40871 5.40871C6.38373 4.4337 7.54124 3.66027 8.81516 3.1326C10.0891 2.60492 11.4545 2.33333 12.8333 2.33333C15.6181 2.33333 18.2888 3.43958 20.258 5.40871C22.2271 7.37784 23.3333 10.0486 23.3333 12.8333C23.3333 15.6181 22.2271 18.2888 20.258 20.258C18.2888 22.2271 15.6181 23.3333 12.8333 23.3333Z"
                                            fill="#12AED0" />
                                    </svg>Parent
                                    & Student Portal
                                </li>
                                <li class="flex items-center gap-unit-md text-white/90"><svg width="20" height="20"
                                        viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="shrink-0">
                                        <path
                                            d="M10.7835 17.8663L5.83333 12.915L7.483 11.2653L10.7835 14.5647L17.3822 7.96484L19.033 9.61568L10.7835 17.8663Z"
                                            fill="#12AED0" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 12.8333C0 5.74583 5.74583 0 12.8333 0C19.9208 0 25.6667 5.74583 25.6667 12.8333C25.6667 19.9208 19.9208 25.6667 12.8333 25.6667C5.74583 25.6667 0 19.9208 0 12.8333ZM12.8333 23.3333C11.4545 23.3333 10.0891 23.0617 8.81516 22.5341C7.54124 22.0064 6.38373 21.233 5.40871 20.258C4.4337 19.2829 3.66027 18.1254 3.1326 16.8515C2.60492 15.5776 2.33333 14.2122 2.33333 12.8333C2.33333 11.4545 2.60492 10.0891 3.1326 8.81516C3.66027 7.54124 4.4337 6.38373 5.40871 5.40871C6.38373 4.4337 7.54124 3.66027 8.81516 3.1326C10.0891 2.60492 11.4545 2.33333 12.8333 2.33333C15.6181 2.33333 18.2888 3.43958 20.258 5.40871C22.2271 7.37784 23.3333 10.0486 23.3333 12.8333C23.3333 15.6181 22.2271 18.2888 20.258 20.258C18.2888 22.2271 15.6181 23.3333 12.8333 23.3333Z"
                                            fill="#12AED0" />
                                    </svg>{{ app()->getLocale() === 'en' ? 'LMS & Assessment' : 'LMS dan Assessment' }}
                                </li>
                                <li class="flex items-center gap-unit-md text-white/90"><svg width="20" height="20"
                                        viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="shrink-0">
                                        <path
                                            d="M10.7835 17.8663L5.83333 12.915L7.483 11.2653L10.7835 14.5647L17.3822 7.96484L19.033 9.61568L10.7835 17.8663Z"
                                            fill="#12AED0" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 12.8333C0 5.74583 5.74583 0 12.8333 0C19.9208 0 25.6667 5.74583 25.6667 12.8333C25.6667 19.9208 19.9208 25.6667 12.8333 25.6667C5.74583 25.6667 0 19.9208 0 12.8333ZM12.8333 23.3333C11.4545 23.3333 10.0891 23.0617 8.81516 22.5341C7.54124 22.0064 6.38373 21.233 5.40871 20.258C4.4337 19.2829 3.66027 18.1254 3.1326 16.8515C2.60492 15.5776 2.33333 14.2122 2.33333 12.8333C2.33333 11.4545 2.60492 10.0891 3.1326 8.81516C3.66027 7.54124 4.4337 6.38373 5.40871 5.40871C6.38373 4.4337 7.54124 3.66027 8.81516 3.1326C10.0891 2.60492 11.4545 2.33333 12.8333 2.33333C15.6181 2.33333 18.2888 3.43958 20.258 5.40871C22.2271 7.37784 23.3333 10.0486 23.3333 12.8333C23.3333 15.6181 22.2271 18.2888 20.258 20.258C18.2888 22.2271 15.6181 23.3333 12.8333 23.3333Z"
                                            fill="#12AED0" />
                                    </svg>{{ app()->getLocale() === 'en' ? 'HRIS & Attendance' : 'HRIS dan Absensi' }}
                                </li>
                                <li class="flex items-center gap-unit-md text-white/90"><svg width="20" height="20"
                                        viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="shrink-0">
                                        <path
                                            d="M10.7835 17.8663L5.83333 12.915L7.483 11.2653L10.7835 14.5647L17.3822 7.96484L19.033 9.61568L10.7835 17.8663Z"
                                            fill="#12AED0" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 12.8333C0 5.74583 5.74583 0 12.8333 0C19.9208 0 25.6667 5.74583 25.6667 12.8333C25.6667 19.9208 19.9208 25.6667 12.8333 25.6667C5.74583 25.6667 0 19.9208 0 12.8333ZM12.8333 23.3333C11.4545 23.3333 10.0891 23.0617 8.81516 22.5341C7.54124 22.0064 6.38373 21.233 5.40871 20.258C4.4337 19.2829 3.66027 18.1254 3.1326 16.8515C2.60492 15.5776 2.33333 14.2122 2.33333 12.8333C2.33333 11.4545 2.60492 10.0891 3.1326 8.81516C3.66027 7.54124 4.4337 6.38373 5.40871 5.40871C6.38373 4.4337 7.54124 3.66027 8.81516 3.1326C10.0891 2.60492 11.4545 2.33333 12.8333 2.33333C15.6181 2.33333 18.2888 3.43958 20.258 5.40871C22.2271 7.37784 23.3333 10.0486 23.3333 12.8333C23.3333 15.6181 22.2271 18.2888 20.258 20.258C18.2888 22.2271 15.6181 23.3333 12.8333 23.3333Z"
                                            fill="#12AED0" />
                                    </svg>{{ app()->getLocale() === 'en' ? 'Foundation Dashboard' : 'Dashboard Yayasan' }}
                                </li>
                                <li class="flex items-center gap-unit-md text-white/90"><svg width="20" height="20"
                                        viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="shrink-0">
                                        <path
                                            d="M10.7835 17.8663L5.83333 12.915L7.483 11.2653L10.7835 14.5647L17.3822 7.96484L19.033 9.61568L10.7835 17.8663Z"
                                            fill="#12AED0" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 12.8333C0 5.74583 5.74583 0 12.8333 0C19.9208 0 25.6667 5.74583 25.6667 12.8333C25.6667 19.9208 19.9208 25.6667 12.8333 25.6667C5.74583 25.6667 0 19.9208 0 12.8333ZM12.8333 23.3333C11.4545 23.3333 10.0891 23.0617 8.81516 22.5341C7.54124 22.0064 6.38373 21.233 5.40871 20.258C4.4337 19.2829 3.66027 18.1254 3.1326 16.8515C2.60492 15.5776 2.33333 14.2122 2.33333 12.8333C2.33333 11.4545 2.60492 10.0891 3.1326 8.81516C3.66027 7.54124 4.4337 6.38373 5.40871 5.40871C6.38373 4.4337 7.54124 3.66027 8.81516 3.1326C10.0891 2.60492 11.4545 2.33333 12.8333 2.33333C15.6181 2.33333 18.2888 3.43958 20.258 5.40871C22.2271 7.37784 23.3333 10.0486 23.3333 12.8333C23.3333 15.6181 22.2271 18.2888 20.258 20.258C18.2888 22.2271 15.6181 23.3333 12.8333 23.3333Z"
                                            fill="#12AED0" />
                                    </svg>SPP
                                    & Payment Gateway
                                </li>
                                <li class="flex items-center gap-unit-md text-white/90"><svg width="20" height="20"
                                        viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="shrink-0">
                                        <path
                                            d="M10.7835 17.8663L5.83333 12.915L7.483 11.2653L10.7835 14.5647L17.3822 7.96484L19.033 9.61568L10.7835 17.8663Z"
                                            fill="#12AED0" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 12.8333C0 5.74583 5.74583 0 12.8333 0C19.9208 0 25.6667 5.74583 25.6667 12.8333C25.6667 19.9208 19.9208 25.6667 12.8333 25.6667C5.74583 25.6667 0 19.9208 0 12.8333ZM12.8333 23.3333C11.4545 23.3333 10.0891 23.0617 8.81516 22.5341C7.54124 22.0064 6.38373 21.233 5.40871 20.258C4.4337 19.2829 3.66027 18.1254 3.1326 16.8515C2.60492 15.5776 2.33333 14.2122 2.33333 12.8333C2.33333 11.4545 2.60492 10.0891 3.1326 8.81516C3.66027 7.54124 4.4337 6.38373 5.40871 5.40871C6.38373 4.4337 7.54124 3.66027 8.81516 3.1326C10.0891 2.60492 11.4545 2.33333 12.8333 2.33333C15.6181 2.33333 18.2888 3.43958 20.258 5.40871C22.2271 7.37784 23.3333 10.0486 23.3333 12.8333C23.3333 15.6181 22.2271 18.2888 20.258 20.258C18.2888 22.2271 15.6181 23.3333 12.8333 23.3333Z"
                                            fill="#12AED0" />
                                    </svg>AI
                                    Parent & Admission Assistant
                                </li>
                                <li class="flex items-center gap-unit-md text-white/90"><svg width="20" height="20"
                                        viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="shrink-0">
                                        <path
                                            d="M10.7835 17.8663L5.83333 12.915L7.483 11.2653L10.7835 14.5647L17.3822 7.96484L19.033 9.61568L10.7835 17.8663Z"
                                            fill="#12AED0" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 12.8333C0 5.74583 5.74583 0 12.8333 0C19.9208 0 25.6667 5.74583 25.6667 12.8333C25.6667 19.9208 19.9208 25.6667 12.8333 25.6667C5.74583 25.6667 0 19.9208 0 12.8333ZM12.8333 23.3333C11.4545 23.3333 10.0891 23.0617 8.81516 22.5341C7.54124 22.0064 6.38373 21.233 5.40871 20.258C4.4337 19.2829 3.66027 18.1254 3.1326 16.8515C2.60492 15.5776 2.33333 14.2122 2.33333 12.8333C2.33333 11.4545 2.60492 10.0891 3.1326 8.81516C3.66027 7.54124 4.4337 6.38373 5.40871 5.40871C6.38373 4.4337 7.54124 3.66027 8.81516 3.1326C10.0891 2.60492 11.4545 2.33333 12.8333 2.33333C15.6181 2.33333 18.2888 3.43958 20.258 5.40871C22.2271 7.37784 23.3333 10.0486 23.3333 12.8333C23.3333 15.6181 22.2271 18.2888 20.258 20.258C18.2888 22.2271 15.6181 23.3333 12.8333 23.3333Z"
                                            fill="#12AED0" />
                                    </svg>CRM
                                    AI Assistant
                                </li>
                            </ul>
                            <div
                                class="mt-unit-lg inline-flex items-center gap-2 text-tertiary-fixed font-button text-button tracking-normal group-hover:gap-3 transition-all duration-300">
                                {{ app()->getLocale() === 'en' ? 'Learn Campus Services' : 'Pelajari Layanan Kampus' }}
                                <span class="material-symbols-outlined text-lg">arrow_forward</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        {{-- Section 3 : Digital Transformation Challenges --}}
        <section class="py-unit-xl bg-[#031A44]">
            <div class="max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-unit-xl items-center">
                    <div class="space-y-unit-lg">
                        <div class="space-y-unit-md">
                            <h2
                                class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-white max-w-md">
                                <span class="block">{{ __('messages.challenge_title_pre') }}</span>
                                <span class="block text-[#12AED0]">{{ __('messages.challenge_title_highlight') }}</span>
                            </h2>
                            <p class="font-body-lg text-body-lg text-white/80 max-w-xl">
                                {{ __('messages.challenge_desc') }}
                            </p>
                        </div>
                        <div class="space-y-unit-md max-w-3xl">
                            <div class="flex items-start gap-unit-md">
                                <span
                                    class="w-12 h-12 md:w-14 md:h-14 shrink-0 rounded-[100px] bg-[#A7F432]/10 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[#A7F432] text-2xl">assignment</span>
                                </span>
                                <div>
                                    <h3 class="font-headline-h3 text-headline-h3 text-white">
                                        {{ __('messages.challenge_admisi') }}
                                    </h3>
                                    <p class="font-body-md text-body-md text-white/70 mt-unit-xs">
                                        {!! nl2br(e(__('messages.challenge_admisi_desc'))) !!}
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start gap-unit-md">
                                <span
                                    class="w-12 h-12 md:w-14 md:h-14 shrink-0 rounded-[100px] bg-[#A7F432]/10 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[#A7F432] text-2xl">account_tree</span>
                                </span>
                                <div>
                                    <h3 class="font-headline-h3 text-headline-h3 text-white">
                                        {{ __('messages.challenge_fragmentasi') }}
                                    </h3>
                                    <p class="font-body-md text-body-md text-white/70 mt-unit-xs">
                                        {!! nl2br(e(__('messages.challenge_fragmentasi_desc'))) !!}
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start gap-unit-md">
                                <span
                                    class="w-12 h-12 md:w-14 md:h-14 shrink-0 rounded-[100px] bg-[#A7F432]/10 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[#A7F432] text-2xl">campaign</span>
                                </span>
                                <div>
                                    <h3 class="font-headline-h3 text-headline-h3 text-white">
                                        {{ __('messages.challenge_komunikasi') }}
                                    </h3>
                                    <p class="font-body-md text-body-md text-white/70 mt-unit-xs">
                                        {!! nl2br(e(__('messages.challenge_komunikasi_desc'))) !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="bg-white/5 border border-white/10 rounded-[24px] p-unit-lg">
                            <div class="grid grid-cols-12 gap-unit-md">
                                <div
                                    class="col-span-12 md:col-span-6 bg-[#12AED0]/10 rounded-[20px] p-unit-lg flex flex-col justify-between min-h-[140px]">
                                    <span class="material-symbols-outlined text-[#12AED0] text-3xl">school</span>
                                    <span
                                        class="font-label-sm text-white/60 uppercase">{{ app()->getLocale() === 'en' ? 'Admissions' : 'Pendaftaran' }}</span>
                                </div>
                                <div
                                    class="col-span-12 md:col-span-6 bg-[#A7F432]/10 rounded-[20px] p-unit-lg flex flex-col justify-between min-h-[140px]">
                                    <span class="material-symbols-outlined text-[#A7F432] text-3xl">payments</span>
                                    <span
                                        class="font-label-sm text-white/60 uppercase">{{ app()->getLocale() === 'en' ? 'Billing' : 'Tagihan' }}</span>
                                </div>
                                <div
                                    class="col-span-12 md:col-span-6 bg-[#A7F432]/10 rounded-[20px] p-unit-lg flex flex-col justify-between min-h-[140px]">
                                    <span class="material-symbols-outlined text-[#A7F432] text-3xl">groups</span>
                                    <span
                                        class="font-label-sm text-white/60 uppercase">{{ app()->getLocale() === 'en' ? 'Parents' : 'Orang Tua' }}</span>
                                </div>
                                <div
                                    class="col-span-12 md:col-span-6 bg-[#12AED0]/10 rounded-[20px] p-unit-lg flex flex-col justify-between min-h-[140px]">
                                    <span class="material-symbols-outlined text-[#12AED0] text-3xl">analytics</span>
                                    <span
                                        class="font-label-sm text-white/60 uppercase">{{ app()->getLocale() === 'en' ? 'Insight' : 'Wawasan' }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                            <div
                                class="h-24 w-24 md:h-28 md:w-28 rounded-[100px] bg-[#12AED0] flex items-center justify-center shadow-2xl ring-8 ring-[#12AED0]/20">
                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.05 40.1C19.5167 40.1 19.0083 40 18.525 39.8C18.0417 39.6 17.6 39.3167 17.2 38.95L1.15 22.9C0.783333 22.5 0.5 22.0583 0.3 21.575C0.1 21.0917 0 20.5833 0 20.05C0 19.5167 0.1 19 0.3 18.5C0.5 18 0.783333 17.5667 1.15 17.2L17.2 1.15C17.6 0.75 18.0417 0.458333 18.525 0.275C19.0083 0.0916667 19.5167 0 20.05 0C20.5833 0 21.1 0.0916667 21.6 0.275C22.1 0.458333 22.5333 0.75 22.9 1.15L38.95 17.2C39.35 17.5667 39.6417 18 39.825 18.5C40.0083 19 40.1 19.5167 40.1 20.05C40.1 20.5833 40.0083 21.0917 39.825 21.575C39.6417 22.0583 39.35 22.5 38.95 22.9L22.9 38.95C22.5333 39.3167 39.6 40 21.6 39.8C21.1 40 20.5833 40.1 20.05 40.1ZM18.05 22.05H22.05V10.05H18.05V22.05ZM20.05 28.05C20.6167 28.05 21.0917 27.8583 21.475 27.475C21.8583 27.0917 22.05 26.6167 22.05 26.05C22.05 25.4833 21.8583 25.0083 21.475 24.625C21.0917 24.2417 20.6167 24.05 20.05 24.05C19.4833 24.05 19.0083 24.2417 18.625 24.625C18.2417 25.0083 18.05 25.4833 18.05 26.05C18.05 26.6167 18.2417 27.0917 18.625 27.475C19.0083 27.8583 19.4833 28.05 20.05 28.05Z"
                                        fill="white" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section 4 : Ecosystem Solution Pillars --}}
        <section class="py-unit-xl bg-surface-container-lowest">
            <div class="max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="mb-unit-xl max-w-2xl mx-auto text-center">
                    <span class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">{{ __(
    'messages.ecosys_badge',
) }}</span>
                    <h2
                        class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-background mb-unit-md">
                        {{ __('messages.ecosys_title') }}
                    </h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant">
                        {!! nl2br(e(__('messages.ecosys_desc'))) !!}
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-unit-lg">

                    {{-- Pillar 1: Attract & Admit --}}
                    <a href="{{ route('services' . $localeSuffix) }}"
                        class="group bg-white p-unit-lg rounded-[20px] border border-outline-variant flex flex-col justify-between transition-all duration-300 hover:-translate-y-1 hover:border-primary shadow-sm lg:col-span-7 lg:min-h-[303px]">
                        <div class="space-y-unit-md">
                            <svg width="51.87" height="58.75" viewBox="0 0 52 59" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M25.2364 2.5C25.2364 1.83696 25.4998 1.20107 25.9686 0.732233C26.4375 0.263392 27.0734 0 27.7364 0C28.3994 0 29.0353 0.263392 29.5042 0.732233C29.973 1.20107 30.2364 1.83696 30.2364 2.5V6.03C30.2364 6.69304 29.973 7.32893 29.5042 7.79777C29.0353 8.26661 28.3994 8.53 27.7364 8.53C27.0734 8.53 26.4375 8.26661 25.9686 7.79777C25.4998 7.32893 25.2364 6.69304 25.2364 6.03V2.5ZM5.17389 22.5C5.17389 23.163 5.43728 23.7989 5.90612 24.2678C6.37497 24.7366 7.01085 25 7.67389 25H11.2126C11.8757 25 12.5116 24.7366 12.9804 24.2678C13.4492 23.7989 13.7126 23.163 13.7126 22.5C13.7126 21.837 13.4492 21.2011 12.9804 20.7322C12.5116 20.2634 11.8757 20 11.2126 20H7.67389C7.01085 20 6.37497 20.2634 5.90612 20.7322C5.43728 21.2011 5.17389 21.837 5.17389 22.5ZM51.8739 22.5C51.8739 23.163 51.6105 23.7989 51.1417 24.2678C50.6728 24.7366 50.0369 25 49.3739 25H45.8339C45.1708 25 44.535 24.7366 44.0661 24.2678C43.5973 23.7989 43.3339 23.163 43.3339 22.5C43.3339 21.837 43.5973 21.2011 44.0661 20.7322C44.535 20.2634 45.1708 20 45.8339 20H49.3739C50.0369 20 50.6728 20.2634 51.1417 20.7322C51.6105 21.2011 51.8739 21.837 51.8739 22.5ZM11.7789 6.59375C11.5459 6.82498 11.361 7.10004 11.2348 7.40307C11.1086 7.7061 11.0436 8.03111 11.0436 8.35938C11.0436 8.68764 11.1086 9.01265 11.2348 9.31568C11.361 9.61871 11.5459 9.89377 11.7789 10.125L14.2814 12.62C15.2589 13.595 16.8439 13.595 17.8226 12.62C18.055 12.3885 18.2394 12.1135 18.3652 11.8106C18.491 11.5077 18.5557 11.183 18.5557 10.855C18.5557 10.527 18.491 10.2023 18.3652 9.8994C18.2394 9.59652 18.055 9.32146 17.8226 9.09L15.3189 6.59375C14.8487 6.12568 14.2123 5.8629 13.5489 5.8629C12.8855 5.8629 12.249 6.12568 11.7789 6.59375ZM44.3964 9.5775C44.6287 9.34604 44.8131 9.07098 44.9389 8.7681C45.0647 8.46521 45.1295 8.14047 45.1295 7.8125C45.1295 7.48453 45.0647 7.15979 44.9389 6.8569C44.8131 6.55402 44.6287 6.27896 44.3964 6.0475C43.9262 5.57905 43.2895 5.31603 42.6258 5.31603C41.962 5.31603 41.3253 5.57905 40.8551 6.0475L38.3514 8.5425C38.119 8.77396 37.9347 9.04902 37.8089 9.3519C37.6831 9.65479 37.6183 9.97953 37.6183 10.3075C37.6183 10.6355 37.6831 10.9602 37.8089 11.2631C37.9347 11.566 38.119 11.841 38.3514 12.0725C39.3301 13.0475 40.9139 13.0475 41.8926 12.0725L44.3964 9.5775ZM25.7139 22.6113C16.9201 30.7575 8.72639 39.0988 5.33639 42.5938C4.98139 42.9588 4.93389 43.4063 5.07889 43.7375C5.37889 44.42 5.71264 45.115 6.03514 45.6712C6.35764 46.2275 6.79389 46.8625 7.23639 47.4638C7.45389 47.7575 7.87514 47.9438 8.37639 47.8188C13.1014 46.6413 24.4251 43.7425 35.8851 40.2287C35.0851 38.3212 33.6564 35.2938 31.2051 31.06C28.8389 26.9737 26.9714 24.2725 25.7139 22.61M32.1864 10.815C31.7759 10.3656 31.2156 10.0814 30.6105 10.0157C30.0054 9.94997 29.3971 10.1072 28.8997 10.458C28.4024 10.8088 28.05 11.329 27.9088 11.921C27.7675 12.513 27.8471 13.1362 28.1326 13.6737C17.2114 23.3275 5.88014 34.85 1.74639 39.1112C0.080141 40.8312 -0.519859 43.4262 0.501391 45.75C0.836391 46.51 1.25389 47.3925 1.70764 48.1775C2.16264 48.96 2.72014 49.7625 3.21389 50.4313C4.71889 52.4725 7.26389 53.2488 9.58514 52.67C10.4589 52.4525 11.5601 52.1763 12.8476 51.8463L13.0364 52.5525C14.2364 57.0175 18.8351 59.6562 23.2989 58.465C27.7651 57.2712 30.4276 52.6875 29.2264 48.22L29.0264 47.4713C34.1514 46.005 39.6514 44.3475 44.8889 42.6062C45.2122 43.1221 45.7127 43.5022 46.2964 43.6753C46.8801 43.8483 47.5069 43.8025 48.0591 43.5463C48.6114 43.2901 49.0512 42.8412 49.296 42.2838C49.5409 41.7264 49.5739 41.0988 49.3889 40.5188L48.1439 40.9137L49.3876 40.5175V40.5162L49.3851 40.5125L49.3839 40.505L49.3764 40.485L49.3564 40.425L49.2889 40.23C49.2306 40.0658 49.1414 39.8292 49.0214 39.52C48.7789 38.9025 48.3964 37.9875 47.8251 36.7475C46.6814 34.2675 44.7739 30.48 41.6864 25.1475C38.5989 19.815 36.2614 16.2763 34.6789 14.0487C34.0983 13.2257 33.4948 12.4191 32.8689 11.63C32.6677 11.3783 32.4614 11.1308 32.2501 10.8875L32.2089 10.8413L32.1939 10.825L32.1889 10.8187L32.1864 10.815ZM24.2114 48.825C21.8764 49.47 19.6776 50.0625 17.6864 50.5875L17.8651 51.255C18.1001 52.1194 18.6684 52.8552 19.4452 53.3012C20.222 53.7471 21.144 53.8667 22.0089 53.6338C22.4362 53.5206 22.837 53.3244 23.1884 53.0562C23.5398 52.7881 23.8349 52.4532 24.0568 52.0709C24.2786 51.6886 24.4229 51.2663 24.4814 50.8282C24.5399 50.39 24.5114 49.9446 24.3976 49.5175L24.2114 48.825Z"
                                    fill="#12AED0" />
                            </svg>
                            <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                                {{ __('messages.ecosys_card1_title') }}
                            </h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                {{ __('messages.ecosys_card1_desc') }}
                            </p>
                        </div>
                        <div
                            class="mt-unit-lg flex items-center justify-end gap-2 text-secondary font-button font-light text-button tracking-normal group-hover:gap-3 transition-all duration-300">
                            <span
                                class="underline underline-offset-4 decoration-2 decoration-primary">{{ __('messages.ecosys_detail') }}</span>
                            <span aria-hidden="true">></span>
                        </div>
                    </a>

                    {{-- Pillar 2: Learn & Engage --}}
                    <a href="{{ route('services' . $localeSuffix) }}"
                        class="group bg-[#031A44] p-unit-lg rounded-[20px] border border-transparent flex flex-col justify-between transition-all duration-300 hover:-translate-y-1 hover:border-primary-fixed-dim shadow-sm lg:col-span-5 lg:min-h-[303px]">
                        <div class="space-y-unit-md">
                            <svg width="55" height="38.69" viewBox="0 0 55 39" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M30 32.625C31.8333 31.75 33.6775 31.0933 35.5325 30.655C37.3875 30.2167 39.2933 29.9983 41.25 30C42.75 30 44.2192 30.125 45.6575 30.375C47.0958 30.625 48.5433 31 50 31.5V6.75001C48.625 6.16667 47.1975 5.72918 45.7175 5.43751C44.2375 5.14584 42.7483 5.00001 41.25 5.00001C39.2917 5.00001 37.3542 5.25001 35.4375 5.75001C33.5208 6.25001 31.7083 7.00001 30 8.00001V32.625ZM25.845 38.47C25.3233 38.3233 24.8333 38.125 24.375 37.875C22.75 36.9167 21.0417 36.1983 19.25 35.72C17.4583 35.2417 15.625 35.0017 13.75 35C12 35 10.2817 35.2292 8.595 35.6875C6.90833 36.1458 5.29333 36.7917 3.75 37.625C2.875 38.0833 2.03167 38.0625 1.22 37.5625C0.408333 37.0625 0.00166667 36.3333 0 35.375V5.25001C0 4.79167 0.115 4.35417 0.345 3.93751C0.575 3.52084 0.918333 3.20834 1.375 3.00001C3.33333 2.04167 5.34417 1.30167 7.4075 0.780007C9.47083 0.258341 11.585 -0.0016587 13.75 7.9618e-06C16.1667 7.9618e-06 18.5317 0.312508 20.845 0.937508C23.1583 1.56251 25.3767 2.50001 27.5 3.75001C29.625 2.50001 31.8442 1.56251 34.1575 0.937508C36.4708 0.312508 38.835 7.9618e-06 41.25 7.9618e-06C43.4167 7.9618e-06 45.5317 0.260842 47.595 0.782508C49.6583 1.30418 51.6683 2.04334 53.625 3.00001C54.0833 3.20834 54.4275 3.52084 54.6575 3.93751C54.8875 4.35417 55.0017 4.79167 55 5.25001V35.375C55 36.3333 54.5942 37.0625 53.7825 37.5625C52.9708 38.0625 52.1267 38.0833 51.25 37.625C49.7083 36.7917 48.0942 36.1458 46.4075 35.6875C44.7208 35.2292 43.0017 35 41.25 35C39.375 35 37.5417 35.24 35.75 35.72C33.9583 36.2 32.25 36.9183 30.625 37.875C30.1667 38.125 29.6775 38.3233 29.1575 38.47C28.6375 38.6167 28.085 38.6892 27.5 38.6875C26.915 38.6858 26.3625 38.6125 25.8425 38.4675M32.5 11.94C32.5 11.565 32.6358 11.18 32.9075 10.785C33.1792 10.39 33.4808 10.1283 33.8125 10C35.0208 9.58334 36.2292 9.27084 37.4375 9.06251C38.6458 8.85417 39.9167 8.75001 41.25 8.75001C42.0833 8.75001 42.9067 8.80251 43.72 8.90751C44.5333 9.01251 45.335 9.14751 46.125 9.31251C46.5 9.39584 46.8233 9.60417 47.095 9.93751C47.3667 10.2708 47.5017 10.6458 47.5 11.0625C47.5 11.7708 47.2708 12.2917 46.8125 12.625C46.3542 12.9583 45.7708 13.0417 45.0625 12.875C44.4792 12.75 43.865 12.6567 43.22 12.595C42.575 12.5333 41.9183 12.5017 41.25 12.5C40.1667 12.5 39.1042 12.6042 38.0625 12.8125C37.0208 13.0208 36.0208 13.2917 35.0625 13.625C34.3125 13.9167 33.6983 13.8958 33.22 13.5625C32.7417 13.2292 32.5017 12.6875 32.5 11.9375M32.5 25.6875C32.5 25.3125 32.6358 24.9275 32.9075 24.5325C33.1792 24.1375 33.4808 23.8767 33.8125 23.75C35.0208 23.3333 36.2292 23.0208 37.4375 22.8125C38.6458 22.6042 39.9167 22.5 41.25 22.5C42.0833 22.5 42.9067 22.5525 43.72 22.6575C44.5333 22.7625 45.335 22.8975 46.125 23.0625C46.5 23.1458 46.8233 23.3542 47.095 23.6875C47.3667 24.0208 47.5017 24.3958 47.5 24.8125C47.5 25.5208 47.2708 26.0417 46.8125 26.375C46.3542 26.7083 45.7708 26.7917 45.0625 26.625C44.4792 26.5 43.865 26.4067 43.22 26.345C42.575 26.2833 41.9183 26.2517 41.25 26.25C40.1667 26.25 39.1042 26.3442 38.0625 26.5325C37.0208 26.7208 36.0208 26.9808 35.0625 27.3125C34.3125 27.6042 33.6983 27.5942 33.22 27.2825C32.7417 26.9708 32.5017 26.4392 32.5 25.6875ZM32.5 18.8125C32.5 18.4375 32.6358 18.0525 32.9075 17.6575C33.1792 17.2625 33.4808 17.0017 33.8125 16.875C35.0208 16.4583 36.2292 16.1458 37.4375 15.9375C38.6458 15.7292 39.9167 15.625 41.25 15.625C42.0833 15.625 42.9067 15.6775 43.72 15.7825C44.5333 15.8875 45.335 16.0225 46.125 16.1875C46.5 16.2708 46.8233 16.4792 47.095 16.8125C47.3667 17.1458 47.5017 17.5208 47.5 17.9375C47.5 18.6458 47.2708 19.1667 46.8125 19.5C46.3542 19.8333 45.7708 19.9167 45.0625 19.75C44.4792 19.625 43.865 19.5317 43.22 19.47C42.575 19.4083 41.9183 19.3767 41.25 19.375C40.1667 19.375 39.1042 19.4792 38.0625 19.6875C37.0208 19.8958 36.0208 20.1667 35.0625 20.5C34.3125 20.7917 33.6983 20.7708 33.22 20.4375C32.7417 20.1042 32.5017 19.5625 32.5 18.8125Z"
                                    fill="#A7F432" />
                            </svg>
                            <h3 class="font-headline-h3 text-headline-h3 text-white">
                                {{ __('messages.ecosys_card2_title') }}
                            </h3>
                            <p class="font-body-md text-body-md text-white/80">
                                {{ __('messages.ecosys_card2_desc') }}
                            </p>
                        </div>
                        <div
                            class="mt-unit-lg flex items-center justify-end gap-2 text-white font-button font-light text-button tracking-normal group-hover:gap-3 transition-all duration-300">
                            <span
                                class="underline underline-offset-4 decoration-2 decoration-primary">{{ __('messages.ecosys_detail') }}</span>
                            <span aria-hidden="true">></span>
                        </div>
                    </a>

                    {{-- Pillar 3: Operate & Pay --}}
                    <a href="{{ route('services' . $localeSuffix) }}"
                        class="group bg-[#A7F432] p-unit-lg rounded-[20px] border border-transparent flex flex-col justify-between transition-all duration-300 hover:-translate-y-1 hover:border-primary shadow-sm lg:col-span-5 lg:min-h-[303px]">
                        <div class="space-y-unit-md">
                            <svg width="47.5" height="45" viewBox="0 0 48 45" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 0C3.67392 0 2.40215 0.526784 1.46447 1.46447C0.526784 2.40215 0 3.67392 0 5V40C0 41.3261 0.526784 42.5979 1.46447 43.5355C2.40215 44.4732 3.67392 45 5 45H40C41.3261 45 42.5979 44.4732 43.5355 43.5355C44.4732 42.5979 45 41.3261 45 40V34.3C45.7557 33.8637 46.384 33.2373 46.8226 32.4829C47.2612 31.7286 47.4947 30.8726 47.5 30V15C47.4947 14.1274 47.2612 13.2714 46.8226 12.5171C46.384 11.7627 45.7557 11.1363 45 10.7V5C45 3.67392 44.4732 2.40215 43.5355 1.46447C42.5979 0.526784 41.3261 0 40 0H5ZM5 5H40V10H25C23.6739 10 22.4021 10.5268 21.4645 11.4645C20.5268 12.4021 20 13.6739 20 15V30C20 31.3261 20.5268 32.5979 21.4645 33.5355C22.4021 34.4732 23.6739 35 25 35H40V40H5V5ZM25 15H42.5V30H25V15ZM32.5 18.75C31.5054 18.75 30.5516 19.1451 29.8483 19.8483C29.1451 20.5516 28.75 21.5054 28.75 22.5C28.75 23.4946 29.1451 24.4484 29.8483 25.1517C30.5516 25.8549 31.5054 26.25 32.5 26.25C33.4946 26.25 34.4484 25.8549 35.1516 25.1517C35.8549 24.4484 36.25 23.4946 36.25 22.5C36.25 21.5054 35.8549 20.5516 35.1516 19.8483C34.4484 19.1451 33.4946 18.75 32.5 18.75Z"
                                    fill="black" />
                            </svg>
                            <h3 class="font-headline-h3 text-headline-h3 text-[#031A44]">
                                {{ __('messages.ecosys_card3_title') }}
                            </h3>
                            <p class="font-body-md text-body-md text-[#031A44]/80">
                                {{ __('messages.ecosys_card3_desc') }}
                            </p>
                        </div>
                        <div
                            class="mt-unit-lg flex items-center justify-end gap-2 text-secondary font-button font-light text-button tracking-normal group-hover:gap-3 transition-all duration-300">
                            <span
                                class="underline underline-offset-4 decoration-2 decoration-secondary">{{ __('messages.ecosys_detail') }}</span>
                            <span aria-hidden="true">></span>
                        </div>
                    </a>

                    {{-- Pillar 4: Manage & Grow --}}
                    <a href="{{ route('services' . $localeSuffix) }}"
                        class="group bg-[#12AED0] p-unit-lg rounded-[20px] border border-transparent flex flex-col justify-between transition-all duration-300 hover:-translate-y-1 hover:border-primary shadow-sm lg:col-span-7 lg:min-h-[303px]">
                        <div class="space-y-unit-md">
                            <svg width="60" height="59.74" viewBox="0 0 60 60" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.75 40.9875H30V59.7375H18.75V40.9875ZM3.75 52.2375H15V59.7375H3.75V52.2375ZM48.75 44.7375H60V59.7375H48.75V44.7375ZM33.75 33.4875H45V59.7375H33.75V33.4875ZM60 0L38.7 18.6375L18.1875 12.2625L0 26.3625V33.4875L19.3125 18.4875L40.05 24.9375L60 7.4625V0Z"
                                    fill="white" />
                            </svg>
                            <h3 class="font-headline-h3 text-headline-h3 text-white">
                                {{ __('messages.ecosys_card4_title') }}
                            </h3>
                            <p class="font-body-md text-body-md text-white/80">
                                {{ __('messages.ecosys_card4_desc') }}
                            </p>
                        </div>
                        <div
                            class="mt-unit-lg flex items-center justify-end gap-2 text-white font-button font-light text-button tracking-normal group-hover:gap-3 transition-all duration-300">
                            <span
                                class="underline underline-offset-4 decoration-2 decoration-white">{{ __('messages.ecosys_detail') }}</span>
                            <span aria-hidden="true">></span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        {{-- Section 5 : AI Assistant Section --}}
        <section id="ai-assistant" class="py-unit-xl bg-surface-container-low scroll-mt-24">
            <div class="max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-unit-xl items-stretch">
                    <div>
                        <div class="mb-unit-md max-w-3xl">
                            <h2
                                class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-background">
                                <span class="block">{{ __('messages.ai_title_pre') }}</span>
                                <span
                                    class="block text-primary">{!! nl2br(e(__('messages.ai_title_highlight'))) !!}</span>
                            </h2>
                            <p class="font-body-lg text-body-lg text-on-surface-variant mt-unit-md">
                                {!! nl2br(e(__('messages.ai_desc'))) !!}
                            </p>
                        </div>
                        <div class="grid grid-cols-1 gap-unit-sm md:max-w-[478px]">
                            <div
                                class="bg-white p-unit-md rounded-r-[20px] border-l-4 border-l-primary shadow-sm w-full md:w-[478px] md:min-h-[89px] flex flex-col justify-center">
                                <div class="space-y-unit-xs">
                                    <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                                        {{ __('messages.ai_ctx_title') }}
                                    </h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant">
                                        {{ __('messages.ai_ctx_desc') }}
                                    </p>
                                </div>
                            </div>
                            <div
                                class="bg-white p-unit-md rounded-r-[20px] border-l-4 border-l-tertiary shadow-sm w-full md:w-[478px] md:min-h-[89px] flex flex-col justify-center">
                                <div class="space-y-unit-xs">
                                    <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                                        {{ __('messages.ai_handoff_title') }}
                                    </h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant">
                                        {{ __('messages.ai_handoff_desc') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="{{ asset('assets/Chat Mockup.png') }}" alt="Nakala AI Assistant"
                        class="lg:justify-self-end lg:-translate-x-6 w-full h-auto lg:w-[448px] lg:h-[564px] object-cover" />
                </div>
            </div>
        </section>

        {{-- Section 6 : Studi Kasus Pendidikan --}}
        <section class="py-unit-xl bg-surface-container-lowest">
            <div class="max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="mb-unit-xl max-w-2xl text-start">
                    <h2
                        class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-background mb-unit-sm">
                        {{ __('messages.case_title') }}
                    </h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant">
                        {{ __('messages.case_desc') }}
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-unit-lg">

                    {{-- Case Study Card 1: LMS Berkemah --}}
                    <article
                        class="bg-white rounded-[20px] border border-outline-variant shadow-sm overflow-hidden flex flex-col transition-all duration-300 hover:-translate-y-1 hover:border-primary">
                        <div
                            class="flex items-center justify-center aspect-[399.21/249] bg-gradient-to-br from-primary/15 via-surface-container-low to-tertiary/15">
                            <img src="{{ asset('assets/LMS.png') }}" alt="LMS" class="w-full h-full object-cover" />
                        </div>
                        <div class="p-unit-lg flex flex-col flex-1">
                            <span
                                class="font-semibold text-primary uppercase text-sm">{{ __('messages.case_card1_badge') }}</span>
                            <h3 class="font-headline-h3 text-headline-h3 text-on-background mt-unit-sm">
                                {{ __('messages.case_card1_title') }}
                            </h3>
                            <div class="mt-unit-md space-y-unit-md flex-1">
                                <div class="flex gap-3">
                                    <svg class="mt-0.5 shrink-0" width="16.67" height="16.67" viewBox="0 0 17 17"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.33333 0C12.9358 0 16.6667 3.73083 16.6667 8.33333C16.6667 12.9358 12.9358 16.6667 8.33333 16.6667C3.73083 16.6667 0 12.9358 0 8.33333C0 3.73083 3.73083 0 8.33333 0ZM8.33333 1.66667C6.56522 1.66667 4.86953 2.36905 3.61929 3.61929C2.36905 4.86953 1.66667 6.56522 1.66667 8.33333C1.66667 10.1014 2.36905 11.7971 3.61929 13.0474C4.86953 14.2976 6.56522 15 8.33333 15C10.1014 15 11.7971 14.2976 13.0474 13.0474C14.2976 11.7971 15 10.1014 15 8.33333C15 6.56522 14.2976 4.86953 13.0474 3.61929C11.7971 2.36905 10.1014 1.66667 8.33333 1.66667ZM8.33333 10.8333C8.55435 10.8333 8.76631 10.9211 8.92259 11.0774C9.07887 11.2337 9.16667 11.4457 9.16667 11.6667C9.16667 11.8877 9.07887 12.0996 8.92259 12.2559C8.76631 12.4122 8.55435 12.5 8.33333 12.5C8.11232 12.5 7.90036 12.4122 7.74408 12.2559C7.5878 12.0996 7.5 11.8877 7.5 11.6667C7.5 11.4457 7.5878 11.2337 7.74408 11.0774C7.90036 10.9211 8.11232 10.8333 8.33333 10.8333ZM8.33333 3.33333C8.55435 3.33333 8.76631 3.42113 8.92259 3.57741C9.07887 3.73369 9.16667 3.94565 9.16667 4.16667V9.16667C9.16667 9.38768 9.07887 9.59964 8.92259 9.75592C8.76631 9.9122 8.55435 10 8.33333 10C8.11232 10 7.90036 9.9122 7.74408 9.75592C7.5878 9.59964 7.5 9.38768 7.5 9.16667V4.16667C7.5 3.94565 7.5878 3.73369 7.74408 3.57741C7.90036 3.42113 8.11232 3.33333 8.33333 3.33333Z"
                                            fill="#12AED0" />
                                    </svg>
                                    <div class="space-y-unit-xs">
                                        <p class="font-body-md text-sm font-semibold text-on-background">
                                            {{ __('messages.case_lbl_challenge') }}
                                        </p>
                                        <p class="font-body-md text-sm text-on-surface-variant">
                                            {{ __('messages.case_card1_challenge') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="flex gap-3">
                                    <svg class="mt-0.5 shrink-0" width="17.5" height="16.62" viewBox="0 0 18 17"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.00813 0L2.12813 0.87875L3.4375 2.1875L4.31625 1.30875L3.00813 0ZM14.4925 0L13.1831 1.30875L14.0625 2.1875L15.3713 0.879375L14.4925 0ZM8.75 0.39C8.54375 0.391667 8.33542 0.405 8.125 0.43H8.10625C5.57125 0.720625 3.55375 2.76875 3.20312 5.2925C2.92313 7.32375 3.76062 9.16562 5.15625 10.3519C5.72705 10.8392 6.11317 11.5077 6.25 12.2456V15.9956H7.675C7.8925 16.3687 8.28938 16.6206 8.75 16.6206C9.21062 16.6206 9.6075 16.3687 9.825 15.9956H11.25V13.4956H11.3088V12.7531C11.3088 11.8369 11.785 10.9131 12.5588 10.195C13.5938 9.15875 14.375 7.68687 14.375 5.99625C14.375 2.90875 11.8337 0.36125 8.75 0.39ZM8.75 1.64C11.1656 1.60625 13.125 3.58375 13.125 5.99625C13.125 7.305 12.5188 8.4575 11.6794 9.29625L11.6994 9.31625C10.8656 10.0857 10.3263 11.1219 10.1744 12.2463H7.44062C7.30312 11.175 6.84375 10.1381 5.97563 9.39437C4.87125 8.45687 4.21313 7.04437 4.43313 5.44938C4.70625 3.48062 6.30375 1.8975 8.26125 1.68062C8.42288 1.65821 8.58563 1.64486 8.74875 1.64063L8.75 1.64ZM0 5.99625V7.24625H1.875V5.99625H0ZM15.625 5.99625V7.24625H17.5V5.99625H15.625ZM3.4375 11.055L2.12875 12.3631L3.00813 13.2425L4.31562 11.9338L3.4375 11.055ZM14.0625 11.055L13.1838 11.9338L14.4919 13.2425L15.3713 12.3631L14.0625 11.055ZM7.5 13.4963H10V14.7463H7.5V13.4963Z"
                                            fill="#12AED0" />
                                    </svg>
                                    <div class="space-y-unit-xs">
                                        <p class="font-body-md text-sm font-semibold text-on-background">
                                            {{ __('messages.case_lbl_solution') }}
                                        </p>
                                        <p class="font-body-md text-sm text-on-surface-variant">
                                            {{ __('messages.case_card1_solution') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="flex gap-3">
                                    <svg class="mt-0.5 shrink-0" width="16.37" height="16.67" viewBox="0 0 17 17"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.0362 8.88447C14.9026 8.73239 14.8289 8.53689 14.8289 8.33447C14.8289 8.13204 14.9026 7.93654 15.0362 7.78447L16.1029 6.58447C16.2204 6.45336 16.2934 6.28839 16.3114 6.11322C16.3293 5.93806 16.2914 5.76171 16.2029 5.60947L14.5362 2.72613C14.4486 2.57407 14.3153 2.45353 14.1552 2.38171C13.9951 2.30988 13.8164 2.29043 13.6445 2.32613L12.0779 2.6428C11.8785 2.68399 11.671 2.65079 11.4944 2.54947C11.3179 2.44814 11.1845 2.2857 11.1195 2.0928L10.6112 0.5678C10.5553 0.402283 10.4488 0.258521 10.3067 0.156835C10.1647 0.0551491 9.99425 0.00068233 9.81954 0.0011333H6.48621C6.30449 -0.00835173 6.12465 0.0419053 5.97418 0.144228C5.8237 0.246551 5.71086 0.395316 5.65288 0.5678L5.18621 2.0928C5.12121 2.2857 4.98785 2.44814 4.8113 2.54947C4.63475 2.65079 4.42722 2.68399 4.22788 2.6428L2.61954 2.32613C2.45667 2.30312 2.29063 2.32882 2.14233 2.4C1.99404 2.47118 1.87013 2.58466 1.78621 2.72613L0.119542 5.60947C0.0288425 5.76001 -0.0119391 5.93537 0.00302795 6.11049C0.017995 6.2856 0.0879444 6.4515 0.202876 6.58447L1.26121 7.78447C1.39481 7.93654 1.46849 8.13204 1.46849 8.33447C1.46849 8.53689 1.39481 8.73239 1.26121 8.88447L0.202876 10.0845C0.0879444 10.2174 0.017995 10.3833 0.00302795 10.5584C-0.0119391 10.7336 0.0288425 10.9089 0.119542 11.0595L1.78621 13.9428C1.87379 14.0949 2.00714 14.2154 2.16725 14.2872C2.32736 14.3591 2.50606 14.3785 2.67788 14.3428L4.24454 14.0261C4.44389 13.9849 4.65142 14.0181 4.82797 14.1195C5.00452 14.2208 5.13788 14.3832 5.20288 14.5761L5.71121 16.1011C5.76919 16.2736 5.88204 16.4224 6.03251 16.5247C6.18299 16.627 6.36282 16.6773 6.54454 16.6678H9.87788C10.0526 16.6683 10.223 16.6138 10.3651 16.5121C10.5071 16.4104 10.6136 16.2667 10.6695 16.1011L11.1779 14.5761C11.2429 14.3832 11.3762 14.2208 11.5528 14.1195C11.7293 14.0181 11.9369 13.9849 12.1362 14.0261L13.7029 14.3428C13.8747 14.3785 14.0534 14.3591 14.2135 14.2872C14.3736 14.2154 14.507 14.0949 14.5945 13.9428L16.2612 11.0595C16.3497 10.9072 16.3877 10.7309 16.3697 10.5557C16.3517 10.3805 16.2787 10.2156 16.1612 10.0845L15.0362 8.88447ZM13.7945 10.0011L14.4612 10.7511L13.3945 12.6011L12.4112 12.4011C11.811 12.2784 11.1867 12.3804 10.6567 12.6876C10.1267 12.9949 9.728 13.486 9.53621 14.0678L9.21954 15.0011H7.08621L6.78621 14.0511C6.59442 13.4693 6.19569 12.9782 5.66571 12.671C5.13573 12.3637 4.51139 12.2618 3.91121 12.3845L2.92788 12.5845L1.84454 10.7428L2.51121 9.9928C2.92117 9.53445 3.14782 8.94108 3.14782 8.32613C3.14782 7.71119 2.92117 7.11782 2.51121 6.65947L1.84454 5.90947L2.91121 4.07613L3.89454 4.27613C4.49473 4.39882 5.11907 4.29687 5.64905 3.98963C6.17903 3.6824 6.57775 3.19127 6.76954 2.60947L7.08621 1.6678H9.21954L9.53621 2.6178C9.728 3.1996 10.1267 3.69073 10.6567 3.99797C11.1867 4.3052 11.811 4.40715 12.4112 4.28447L13.3945 4.08447L14.4612 5.93447L13.7945 6.68447C13.3892 7.14177 13.1654 7.7317 13.1654 8.3428C13.1654 8.9539 13.3892 9.54383 13.7945 10.0011ZM8.15288 5.00113C7.4936 5.00113 6.84914 5.19663 6.30097 5.5629C5.75281 5.92917 5.32557 6.44977 5.07328 7.05886C4.82098 7.66794 4.75497 8.33816 4.88359 8.98477C5.01221 9.63137 5.32968 10.2253 5.79585 10.6915C6.26203 11.1577 6.85597 11.4751 7.50257 11.6038C8.14918 11.7324 8.8194 11.6664 9.42849 11.4141C10.0376 11.1618 10.5582 10.7345 10.9244 10.1864C11.2907 9.6382 11.4862 8.99374 11.4862 8.33447C11.4862 7.45041 11.135 6.60257 10.5099 5.97744C9.88478 5.35232 9.03693 5.00113 8.15288 5.00113ZM8.15288 10.0011C7.82324 10.0011 7.50101 9.90339 7.22692 9.72025C6.95284 9.53711 6.73922 9.27682 6.61308 8.97227C6.48693 8.66773 6.45392 8.33262 6.51823 8.00932C6.58254 7.68601 6.74128 7.38904 6.97436 7.15596C7.20745 6.92287 7.50442 6.76413 7.82773 6.69982C8.15103 6.63552 8.48614 6.66852 8.79068 6.79467C9.09522 6.92081 9.35552 7.13443 9.53866 7.40852C9.72179 7.6826 9.81954 8.00483 9.81954 8.33447C9.81954 8.77649 9.64395 9.20042 9.33139 9.51298C9.01883 9.82554 8.5949 10.0011 8.15288 10.0011Z"
                                            fill="#12AED0" />
                                    </svg>
                                    <div class="space-y-unit-xs">
                                        <p class="font-body-md text-sm font-semibold text-on-background">
                                            {{ __('messages.case_lbl_impl') }}
                                        </p>
                                        <p class="font-body-md text-sm text-on-surface-variant">
                                            {{ __('messages.case_card1_impl') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="mt-unit-lg border-l-4 border-l-tertiary bg-surface-container-lowest rounded-r-[16px] px-4 py-3 flex items-center gap-2 shadow-sm">
                                <span class="material-symbols-outlined text-tertiary-fixed text-lg">trending_up</span>
                                <p class="font-body-md text-sm font-semibold text-on-background">
                                    {{ __('messages.case_card1_result') }}
                                </p>
                            </div>
                        </div>
                    </article>

                    {{-- Case Study Card 2: Website PPDB & School Portal --}}
                    <article
                        class="bg-white rounded-[20px] border border-outline-variant shadow-sm overflow-hidden flex flex-col transition-all duration-300 hover:-translate-y-1 hover:border-primary">
                        <div
                            class="flex items-center justify-center aspect-[399.21/249] bg-gradient-to-br from-tertiary/20 via-surface-container-low to-primary/15">
                            <img src="{{ asset('assets/PPDB.png') }}" alt="PPDB" class="w-full h-full object-cover" />
                        </div>
                        <div class="p-unit-lg flex flex-col flex-1">
                            <span
                                class="font-semibold text-primary uppercase text-sm">{{ __('messages.case_card2_badge') }}</span>
                            <h3 class="font-headline-h3 text-headline-h3 text-on-background mt-unit-sm">
                                {{ __('messages.case_card2_title') }}
                            </h3>
                            <div class="mt-unit-md space-y-unit-md flex-1">
                                <div class="flex gap-3">
                                    <svg class="mt-0.5 shrink-0" width="16.67" height="16.67" viewBox="0 0 17 17"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.33333 0C12.9358 0 16.6667 3.73083 16.6667 8.33333C16.6667 12.9358 12.9358 16.6667 8.33333 16.6667C3.73083 16.6667 0 12.9358 0 8.33333C0 3.73083 3.73083 0 8.33333 0ZM8.33333 1.66667C6.56522 1.66667 4.86953 2.36905 3.61929 3.61929C2.36905 4.86953 1.66667 6.56522 1.66667 8.33333C1.66667 10.1014 2.36905 11.7971 3.61929 13.0474C4.86953 14.2976 6.56522 15 8.33333 15C10.1014 15 11.7971 14.2976 13.0474 13.0474C14.2976 11.7971 15 10.1014 15 8.33333C15 6.56522 14.2976 4.86953 13.0474 3.61929C11.7971 2.36905 10.1014 1.66667 8.33333 1.66667ZM8.33333 10.8333C8.55435 10.8333 8.76631 10.9211 8.92259 11.0774C9.07887 11.2337 9.16667 11.4457 9.16667 11.6667C9.16667 11.8877 9.07887 12.0996 8.92259 12.2559C8.76631 12.4122 8.55435 12.5 8.33333 12.5C8.11232 12.5 7.90036 12.4122 7.74408 12.2559C7.5878 12.0996 7.5 11.8877 7.5 11.6667C7.5 11.4457 7.5878 11.2337 7.74408 11.0774C7.90036 10.9211 8.11232 10.8333 8.33333 10.8333ZM8.33333 3.33333C8.55435 3.33333 8.76631 3.42113 8.92259 3.57741C9.07887 3.73369 9.16667 3.94565 9.16667 4.16667V9.16667C9.16667 9.38768 9.07887 9.59964 8.92259 9.75592C8.76631 9.9122 8.55435 10 8.33333 10C8.11232 10 7.90036 9.9122 7.74408 9.75592C7.5878 9.59964 7.5 9.38768 7.5 9.16667V4.16667C7.5 3.94565 7.5878 3.73369 7.74408 3.57741C7.90036 3.42113 8.11232 3.33333 8.33333 3.33333Z"
                                            fill="#12AED0" />
                                    </svg>
                                    <div class="space-y-unit-xs">
                                        <p class="font-body-md text-sm font-semibold text-on-background">
                                            {{ __('messages.case_lbl_challenge') }}
                                        </p>
                                        <p class="font-body-md text-sm text-on-surface-variant">
                                            {{ __('messages.case_card2_challenge') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="flex gap-3">
                                    <svg class="mt-0.5 shrink-0" width="17.5" height="16.62" viewBox="0 0 18 17"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.00813 0L2.12813 0.87875L3.4375 2.1875L4.31625 1.30875L3.00813 0ZM14.4925 0L13.1831 1.30875L14.0625 2.1875L15.3713 0.879375L14.4925 0ZM8.75 0.39C8.54375 0.391667 8.33542 0.405 8.125 0.43H8.10625C5.57125 0.720625 3.55375 2.76875 3.20312 5.2925C2.92313 7.32375 3.76062 9.16562 5.15625 10.3519C5.72705 10.8392 6.11317 11.5077 6.25 12.2456V15.9956H7.675C7.8925 16.3687 8.28938 16.6206 8.75 16.6206C9.21062 16.6206 9.6075 16.3687 9.825 15.9956H11.25V13.4956H11.3088V12.7531C11.3088 11.8369 11.785 10.9131 12.5588 10.195C13.5938 9.15875 14.375 7.68687 14.375 5.99625C14.375 2.90875 11.8337 0.36125 8.75 0.39ZM8.75 1.64C11.1656 1.60625 13.125 3.58375 13.125 5.99625C13.125 7.305 12.5188 8.4575 11.6794 9.29625L11.6994 9.31625C10.8656 10.0857 10.3263 11.1219 10.1744 12.2463H7.44062C7.30312 11.175 6.84375 10.1381 5.97563 9.39437C4.87125 8.45687 4.21313 7.04437 4.43313 5.44938C4.70625 3.48062 6.30375 1.8975 8.26125 1.68062C8.42288 1.65821 8.58563 1.64486 8.74875 1.64063L8.75 1.64ZM0 5.99625V7.24625H1.875V5.99625H0ZM15.625 5.99625V7.24625H17.5V5.99625H15.625ZM3.4375 11.055L2.12875 12.3631L3.00813 13.2425L4.31562 11.9338L3.4375 11.055ZM14.0625 11.055L13.1838 11.9338L14.4919 13.2425L15.3713 12.3631L14.0625 11.055ZM7.5 13.4963H10V14.7463H7.5V13.4963Z"
                                            fill="#12AED0" />
                                    </svg>
                                    <div class="space-y-unit-xs">
                                        <p class="font-body-md text-sm font-semibold text-on-background">
                                            {{ __('messages.case_lbl_solution') }}
                                        </p>
                                        <p class="font-body-md text-sm text-on-surface-variant">
                                            {{ __('messages.case_card2_solution') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="flex gap-3">
                                    <svg class="mt-0.5 shrink-0" width="16.37" height="16.67" viewBox="0 0 17 17"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.0362 8.88447C14.9026 8.73239 14.8289 8.53689 14.8289 8.33447C14.8289 8.13204 14.9026 7.93654 15.0362 7.78447L16.1029 6.58447C16.2204 6.45336 16.2934 6.28839 16.3114 6.11322C16.3293 5.93806 16.2914 5.76171 16.2029 5.60947L14.5362 2.72613C14.4486 2.57407 14.3153 2.45353 14.1552 2.38171C13.9951 2.30988 13.8164 2.29043 13.6445 2.32613L12.0779 2.6428C11.8785 2.68399 11.671 2.65079 11.4944 2.54947C11.3179 2.44814 11.1845 2.2857 11.1195 2.0928L10.6112 0.5678C10.5553 0.402283 10.4488 0.258521 10.3067 0.156835C10.1647 0.0551491 9.99425 0.00068233 9.81954 0.0011333H6.48621C6.30449 -0.00835173 6.12465 0.0419053 5.97418 0.144228C5.8237 0.246551 5.71086 0.395316 5.65288 0.5678L5.18621 2.0928C5.12121 2.2857 4.98785 2.44814 4.8113 2.54947C4.63475 2.65079 4.42722 2.68399 4.22788 2.6428L2.61954 2.32613C2.45667 2.30312 2.29063 2.32882 2.14233 2.4C1.99404 2.47118 1.87013 2.58466 1.78621 2.72613L0.119542 5.60947C0.0288425 5.76001 -0.0119391 5.93537 0.00302795 6.11049C0.017995 6.2856 0.0879444 6.4515 0.202876 6.58447L1.26121 7.78447C1.39481 7.93654 1.46849 8.13204 1.46849 8.33447C1.46849 8.53689 1.39481 8.73239 1.26121 8.88447L0.202876 10.0845C0.0879444 10.2174 0.017995 10.3833 0.00302795 10.5584C-0.0119391 10.7336 0.0288425 10.9089 0.119542 11.0595L1.78621 13.9428C1.87379 14.0949 2.00714 14.2154 2.16725 14.2872C2.32736 14.3591 2.50606 14.3785 2.67788 14.3428L4.24454 14.0261C4.44389 13.9849 4.65142 14.0181 4.82797 14.1195C5.00452 14.2208 5.13788 14.3832 5.20288 14.5761L5.71121 16.1011C5.76919 16.2736 5.88204 16.4224 6.03251 16.5247C6.18299 16.627 6.36282 16.6773 6.54454 16.6678H9.87788C10.0526 16.6683 10.223 16.6138 10.3651 16.5121C10.5071 16.4104 10.6136 16.2667 10.6695 16.1011L11.1779 14.5761C11.2429 14.3832 11.3762 14.2208 11.5528 14.1195C11.7293 14.0181 11.9369 13.9849 12.1362 14.0261L13.7029 14.3428C13.8747 14.3785 14.0534 14.3591 14.2135 14.2872C14.3736 14.2154 14.507 14.0949 14.5945 13.9428L16.2612 11.0595C16.3497 10.9072 16.3877 10.7309 16.3697 10.5557C16.3517 10.3805 16.2787 10.2156 16.1612 10.0845L15.0362 8.88447ZM13.7945 10.0011L14.4612 10.7511L13.3945 12.6011L12.4112 12.4011C11.811 12.2784 11.1867 12.3804 10.6567 12.6876C10.1267 12.9949 9.728 13.486 9.53621 14.0678L9.21954 15.0011H7.08621L6.78621 14.0511C6.59442 13.4693 6.19569 12.9782 5.66571 12.671C5.13573 12.3637 4.51139 12.2618 3.91121 12.3845L2.92788 12.5845L1.84454 10.7428L2.51121 9.9928C2.92117 9.53445 3.14782 8.94108 3.14782 8.32613C3.14782 7.71119 2.92117 7.11782 2.51121 6.65947L1.84454 5.90947L2.91121 4.07613L3.89454 4.27613C4.49473 4.39882 5.11907 4.29687 5.64905 3.98963C6.17903 3.6824 6.57775 3.19127 6.76954 2.60947L7.08621 1.6678H9.21954L9.53621 2.6178C9.728 3.1996 10.1267 3.69073 10.6567 3.99797C11.1867 4.3052 11.811 4.40715 12.4112 4.28447L13.3945 4.08447L14.4612 5.93447L13.7945 6.68447C13.3892 7.14177 13.1654 7.7317 13.1654 8.3428C13.1654 8.9539 13.3892 9.54383 13.7945 10.0011ZM8.15288 5.00113C7.4936 5.00113 6.84914 5.19663 6.30097 5.5629C5.75281 5.92917 5.32557 6.44977 5.07328 7.05886C4.82098 7.66794 4.75497 8.33816 4.88359 8.98477C5.01221 9.63137 5.32968 10.2253 5.79585 10.6915C6.26203 11.1577 6.85597 11.4751 7.50257 11.6038C8.14918 11.7324 8.8194 11.6664 9.42849 11.4141C10.0376 11.1618 10.5582 10.7345 10.9244 10.1864C11.2907 9.6382 11.4862 8.99374 11.4862 8.33447C11.4862 7.45041 11.135 6.60257 10.5099 5.97744C9.88478 5.35232 9.03693 5.00113 8.15288 5.00113ZM8.15288 10.0011C7.82324 10.0011 7.50101 9.90339 7.22692 9.72025C6.95284 9.53711 6.73922 9.27682 6.61308 8.97227C6.48693 8.66773 6.45392 8.33262 6.51823 8.00932C6.58254 7.68601 6.74128 7.38904 6.97436 7.15596C7.20745 6.92287 7.50442 6.76413 7.82773 6.69982C8.15103 6.63552 8.48614 6.66852 8.79068 6.79467C9.09522 6.92081 9.35552 7.13443 9.53866 7.40852C9.72179 7.6826 9.81954 8.00483 9.81954 8.33447C9.81954 8.77649 9.64395 9.20042 9.33139 9.51298C9.01883 9.82554 8.5949 10.0011 8.15288 10.0011Z"
                                            fill="#12AED0" />
                                    </svg>
                                    <div class="space-y-unit-xs">
                                        <p class="font-body-md text-sm font-semibold text-on-background">
                                            {{ __('messages.case_lbl_impl') }}
                                        </p>
                                        <p class="font-body-md text-sm text-on-surface-variant">
                                            {{ __('messages.case_card2_impl') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="mt-unit-lg border-l-4 border-l-tertiary bg-surface-container-lowest rounded-r-[16px] px-4 py-3 flex items-center gap-2 shadow-sm">
                                <span class="material-symbols-outlined text-tertiary-fixed text-lg">trending_up</span>
                                <p class="font-body-md text-sm font-semibold text-on-background">
                                    {{ __('messages.case_card2_result') }}
                                </p>
                            </div>
                        </div>
                    </article>

                    {{-- Case Study Card 3: Digital Coaching / AI Coach --}}
                    <article
                        class="bg-white rounded-[20px] border border-outline-variant shadow-sm overflow-hidden flex flex-col transition-all duration-300 hover:-translate-y-1 hover:border-primary">
                        <div
                            class="flex items-center justify-center aspect-[399.21/249] bg-gradient-to-br from-primary/20 via-surface-container-low to-secondary/15">
                            <img src="{{ asset('assets/Digital Coaching.png') }}" alt="Digital Coaching"
                                class="w-full h-full object-cover" />
                        </div>
                        <div class="p-unit-lg flex flex-col flex-1">
                            <span
                                class="font-semibold text-primary uppercase text-sm">{{ __('messages.case_card3_badge') }}</span>
                            <h3 class="font-headline-h3 text-headline-h3 text-on-background mt-unit-sm">
                                {{ __('messages.case_card3_title') }}
                            </h3>
                            <div class="mt-unit-md space-y-unit-md flex-1">
                                <div class="flex gap-3">
                                    <svg class="mt-0.5 shrink-0" width="16.67" height="16.67" viewBox="0 0 17 17"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.33333 0C12.9358 0 16.6667 3.73083 16.6667 8.33333C16.6667 12.9358 12.9358 16.6667 8.33333 16.6667C3.73083 16.6667 0 12.9358 0 8.33333C0 3.73083 3.73083 0 8.33333 0ZM8.33333 1.66667C6.56522 1.66667 4.86953 2.36905 3.61929 3.61929C2.36905 4.86953 1.66667 6.56522 1.66667 8.33333C1.66667 10.1014 2.36905 11.7971 3.61929 13.0474C4.86953 14.2976 6.56522 15 8.33333 15C10.1014 15 11.7971 14.2976 13.0474 13.0474C14.2976 11.7971 15 10.1014 15 8.33333C15 6.56522 14.2976 4.86953 13.0474 3.61929C11.7971 2.36905 10.1014 1.66667 8.33333 1.66667ZM8.33333 10.8333C8.55435 10.8333 8.76631 10.9211 8.92259 11.0774C9.07887 11.2337 9.16667 11.4457 9.16667 11.6667C9.16667 11.8877 9.07887 12.0996 8.92259 12.2559C8.76631 12.4122 8.55435 12.5 8.33333 12.5C8.11232 12.5 7.90036 12.4122 7.74408 12.2559C7.5878 12.0996 7.5 11.8877 7.5 11.6667C7.5 11.4457 7.5878 11.2337 7.74408 11.0774C7.90036 10.9211 8.11232 10.8333 8.33333 10.8333ZM8.33333 3.33333C8.55435 3.33333 8.76631 3.42113 8.92259 3.57741C9.07887 3.73369 9.16667 3.94565 9.16667 4.16667V9.16667C9.16667 9.38768 9.07887 9.59964 8.92259 9.75592C8.76631 9.9122 8.55435 10 8.33333 10C8.11232 10 7.90036 9.9122 7.74408 9.75592C7.5878 9.59964 7.5 9.38768 7.5 9.16667V4.16667C7.5 3.94565 7.5878 3.73369 7.74408 3.57741C7.90036 3.42113 8.11232 3.33333 8.33333 3.33333Z"
                                            fill="#12AED0" />
                                    </svg>
                                    <div class="space-y-unit-xs">
                                        <p class="font-body-md text-sm font-semibold text-on-background">
                                            {{ __('messages.case_lbl_challenge') }}
                                        </p>
                                        <p class="font-body-md text-sm text-on-surface-variant">
                                            {{ __('messages.case_card3_challenge') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="flex gap-3">
                                    <svg class="mt-0.5 shrink-0" width="17.5" height="16.62" viewBox="0 0 18 17"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.00813 0L2.12813 0.87875L3.4375 2.1875L4.31625 1.30875L3.00813 0ZM14.4925 0L13.1831 1.30875L14.0625 2.1875L15.3713 0.879375L14.4925 0ZM8.75 0.39C8.54375 0.391667 8.33542 0.405 8.125 0.43H8.10625C5.57125 0.720625 3.55375 2.76875 3.20312 5.2925C2.92313 7.32375 3.76062 9.16562 5.15625 10.3519C5.72705 10.8392 6.11317 11.5077 6.25 12.2456V15.9956H7.675C7.8925 16.3687 8.28938 16.6206 8.75 16.6206C9.21062 16.6206 9.6075 16.3687 9.825 15.9956H11.25V13.4956H11.3088V12.7531C11.3088 11.8369 11.785 10.9131 12.5588 10.195C13.5938 9.15875 14.375 7.68687 14.375 5.99625C14.375 2.90875 11.8337 0.36125 8.75 0.39ZM8.75 1.64C11.1656 1.60625 13.125 3.58375 13.125 5.99625C13.125 7.305 12.5188 8.4575 11.6794 9.29625L11.6994 9.31625C10.8656 10.0857 10.3263 11.1219 10.1744 12.2463H7.44062C7.30312 11.175 6.84375 10.1381 5.97563 9.39437C4.87125 8.45687 4.21313 7.04437 4.43313 5.44938C4.70625 3.48062 6.30375 1.8975 8.26125 1.68062C8.42288 1.65821 8.58563 1.64486 8.74875 1.64063L8.75 1.64ZM0 5.99625V7.24625H1.875V5.99625H0ZM15.625 5.99625V7.24625H17.5V5.99625H15.625ZM3.4375 11.055L2.12875 12.3631L3.00813 13.2425L4.31562 11.9338L3.4375 11.055ZM14.0625 11.055L13.1838 11.9338L14.4919 13.2425L15.3713 12.3631L14.0625 11.055ZM7.5 13.4963H10V14.7463H7.5V13.4963Z"
                                            fill="#12AED0" />
                                    </svg>
                                    <div class="space-y-unit-xs">
                                        <p class="font-body-md text-sm font-semibold text-on-background">
                                            {{ __('messages.case_lbl_solution') }}
                                        </p>
                                        <p class="font-body-md text-sm text-on-surface-variant">
                                            {{ __('messages.case_card3_solution') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="flex gap-3">
                                    <svg class="mt-0.5 shrink-0" width="16.37" height="16.67" viewBox="0 0 17 17"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.0362 8.88447C14.9026 8.73239 14.8289 8.53689 14.8289 8.33447C14.8289 8.13204 14.9026 7.93654 15.0362 7.78447L16.1029 6.58447C16.2204 6.45336 16.2934 6.28839 16.3114 6.11322C16.3293 5.93806 16.2914 5.76171 16.2029 5.60947L14.5362 2.72613C14.4486 2.57407 14.3153 2.45353 14.1552 2.38171C13.9951 2.30988 13.8164 2.29043 13.6445 2.32613L12.0779 2.6428C11.8785 2.68399 11.671 2.65079 11.4944 2.54947C11.3179 2.44814 11.1845 2.2857 11.1195 2.0928L10.6112 0.5678C10.5553 0.402283 10.4488 0.258521 10.3067 0.156835C10.1647 0.0551491 9.99425 0.00068233 9.81954 0.0011333H6.48621C6.30449 -0.00835173 6.12465 0.0419053 5.97418 0.144228C5.8237 0.246551 5.71086 0.395316 5.65288 0.5678L5.18621 2.0928C5.12121 2.2857 4.98785 2.44814 4.8113 2.54947C4.63475 2.65079 4.42722 2.68399 4.22788 2.6428L2.61954 2.32613C2.45667 2.30312 2.29063 2.32882 2.14233 2.4C1.99404 2.47118 1.87013 2.58466 1.78621 2.72613L0.119542 5.60947C0.0288425 5.76001 -0.0119391 5.93537 0.00302795 6.11049C0.017995 6.2856 0.0879444 6.4515 0.202876 6.58447L1.26121 7.78447C1.39481 7.93654 1.46849 8.13204 1.46849 8.33447C1.46849 8.53689 1.39481 8.73239 1.26121 8.88447L0.202876 10.0845C0.0879444 10.2174 0.017995 10.3833 0.00302795 10.5584C-0.0119391 10.7336 0.0288425 10.9089 0.119542 11.0595L1.78621 13.9428C1.87379 14.0949 2.00714 14.2154 2.16725 14.2872C2.32736 14.3591 2.50606 14.3785 2.67788 14.3428L4.24454 14.0261C4.44389 13.9849 4.65142 14.0181 4.82797 14.1195C5.00452 14.2208 5.13788 14.3832 5.20288 14.5761L5.71121 16.1011C5.76919 16.2736 5.88204 16.4224 6.03251 16.5247C6.18299 16.627 6.36282 16.6773 6.54454 16.6678H9.87788C10.0526 16.6683 10.223 16.6138 10.3651 16.5121C10.5071 16.4104 10.6136 16.2667 10.6695 16.1011L11.1779 14.5761C11.2429 14.3832 11.3762 14.2208 11.5528 14.1195C11.7293 14.0181 11.9369 13.9849 12.1362 14.0261L13.7029 14.3428C13.8747 14.3785 14.0534 14.3591 14.2135 14.2872C14.3736 14.2154 14.507 14.0949 14.5945 13.9428L16.2612 11.0595C16.3497 10.9072 16.3877 10.7309 16.3697 10.5557C16.3517 10.3805 16.2787 10.2156 16.1612 10.0845L15.0362 8.88447ZM13.7945 10.0011L14.4612 10.7511L13.3945 12.6011L12.4112 12.4011C11.811 12.2784 11.1867 12.3804 10.6567 12.6876C10.1267 12.9949 9.728 13.486 9.53621 14.0678L9.21954 15.0011H7.08621L6.78621 14.0511C6.59442 13.4693 6.19569 12.9782 5.66571 12.671C5.13573 12.3637 4.51139 12.2618 3.91121 12.3845L2.92788 12.5845L1.84454 10.7428L2.51121 9.9928C2.92117 9.53445 3.14782 8.94108 3.14782 8.32613C3.14782 7.71119 2.92117 7.11782 2.51121 6.65947L1.84454 5.90947L2.91121 4.07613L3.89454 4.27613C4.49473 4.39882 5.11907 4.29687 5.64905 3.98963C6.17903 3.6824 6.57775 3.19127 6.76954 2.60947L7.08621 1.6678H9.21954L9.53621 2.6178C9.728 3.1996 10.1267 3.69073 10.6567 3.99797C11.1867 4.3052 11.811 4.40715 12.4112 4.28447L13.3945 4.08447L14.4612 5.93447L13.7945 6.68447C13.3892 7.14177 13.1654 7.7317 13.1654 8.3428C13.1654 8.9539 13.3892 9.54383 13.7945 10.0011ZM8.15288 5.00113C7.4936 5.00113 6.84914 5.19663 6.30097 5.5629C5.75281 5.92917 5.32557 6.44977 5.07328 7.05886C4.82098 7.66794 4.75497 8.33816 4.88359 8.98477C5.01221 9.63137 5.32968 10.2253 5.79585 10.6915C6.26203 11.1577 6.85597 11.4751 7.50257 11.6038C8.14918 11.7324 8.8194 11.6664 9.42849 11.4141C10.0376 11.1618 10.5582 10.7345 10.9244 10.1864C11.2907 9.6382 11.4862 8.99374 11.4862 8.33447C11.4862 7.45041 11.135 6.60257 10.5099 5.97744C9.88478 5.35232 9.03693 5.00113 8.15288 5.00113ZM8.15288 10.0011C7.82324 10.0011 7.50101 9.90339 7.22692 9.72025C6.95284 9.53711 6.73922 9.27682 6.61308 8.97227C6.48693 8.66773 6.45392 8.33262 6.51823 8.00932C6.58254 7.68601 6.74128 7.38904 6.97436 7.15596C7.20745 6.92287 7.50442 6.76413 7.82773 6.69982C8.15103 6.63552 8.48614 6.66852 8.79068 6.79467C9.09522 6.92081 9.35552 7.13443 9.53866 7.40852C9.72179 7.6826 9.81954 8.00483 9.81954 8.33447C9.81954 8.77649 9.64395 9.20042 9.33139 9.51298C9.01883 9.82554 8.5949 10.0011 8.15288 10.0011Z"
                                            fill="#12AED0" />
                                    </svg>
                                    <div class="space-y-unit-xs">
                                        <p class="font-body-md text-sm font-semibold text-on-background">
                                            {{ __('messages.case_lbl_impl') }}
                                        </p>
                                        <p class="font-body-md text-sm text-on-surface-variant">
                                            {{ __('messages.case_card3_impl') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="mt-unit-lg border-l-4 border-l-tertiary bg-surface-container-lowest rounded-r-[16px] px-4 py-3 flex items-center gap-2 shadow-sm">
                                <span class="material-symbols-outlined text-tertiary-fixed text-lg">trending_up</span>
                                <p class="font-body-md text-sm font-semibold text-on-background">
                                    {{ __('messages.case_card3_result') }}
                                </p>
                            </div>
                        </div>
                    </article>

                </div>
            </div>
        </section>

        {{-- Section 7 : Nilai Inti Section --}}
        <section class="py-unit-xl bg-surface">
            <div class="max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="mb-unit-xl max-w-auto mx-auto text-center">
                    <span
                        class="text-primary font-label-sm uppercase tracking-[0.3em] mb-4 block">{{ __('messages.core_badge') }}</span>
                    <h2
                        class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-background mb-unit-sm">
                        {{ __('messages.core_title') }}
                    </h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant">
                        {!! nl2br(e(__('messages.core_desc'))) !!}
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">

                    {{-- Card 1: Professional Delivery --}}
                    <article
                        class="bg-secondary rounded-[24px] p-unit-xl text-white flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-1 shadow-lg">
                        <div class="flex items-center justify-center mb-unit-lg shrink-0">
                            <svg width="123" height="123" viewBox="0 0 123 123" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="61.5" cy="61.5" r="60.5" stroke="white" stroke-width="2" />
                                <g transform="translate(25.5 25.5) scale(3)">
                                    <path fill="white"
                                        d="M19.14,12.94c0.04-0.3,0.06-0.61,0.06-0.94c0-0.32-0.02-0.64-0.07-0.94l2.03-1.58c0.18-0.14,0.23-0.41,0.12-0.61l-1.92-3.32c-0.12-0.22-0.37-0.29-0.59-0.22l-2.39,0.96c-0.5-0.38-1.03-0.7-1.62-0.94L14.4,2.81c-0.04-0.24-0.24-0.41-0.48-0.41h-3.84c-0.24,0-0.43,0.17-0.47,0.41L9.25,5.35C8.66,5.59,8.12,5.92,7.63,6.29L5.24,5.33c-0.22-0.08-0.47,0-0.59,0.22L2.74,8.87C2.62,9.08,2.66,9.34,2.86,9.48l2.03,1.58C4.84,11.36,4.8,11.69,4.8,12s0.02,0.64,0.07,0.94l-2.03,1.58c-0.18,0.14-0.23,0.41-0.12,0.61l1.92,3.32c0.12,0.22,0.37,0.29,0.59,0.22l2.39-0.96c0.5,0.38,1.03,0.7,1.62,0.94l0.36,2.54c0.05,0.24,0.24,0.41,0.48,0.41h3.84c0.24,0,0.44-0.17,0.47-0.41l0.36-2.54c0.59-0.24,1.13-0.56,1.62-0.94l2.39,0.96c0.22,0.08,0.47,0,0.59-0.22l1.92-3.32c0.12-0.22,0.07-0.47-0.12-0.61L19.14,12.94zM12,15.6c-1.98,0-3.6-1.62-3.6-3.6s1.62-3.6,3.6-3.6s3.6,1.62,3.6,3.6S13.98,15.6,12,15.6z" />
                                </g>
                            </svg>
                        </div>
                        <h3 class="font-headline-h3 text-headline-h3 text-white mb-unit-md">
                            {{ __('messages.core_card1_title') }}
                        </h3>
                        <p class="font-body-md text-white/90 max-w-md">
                            {{ __('messages.core_card1_desc') }}
                        </p>
                    </article>

                    {{-- Card 2: Meaningful Solutions --}}
                    <article
                        class="bg-primary rounded-[24px] p-unit-xl text-white flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-1 shadow-lg">
                        <div class="flex items-center justify-center mb-unit-lg shrink-0">
                            <svg width="123" height="123" viewBox="0 0 123 123" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="61.5" cy="61.5" r="60.5" stroke="white" stroke-width="2" />
                                <g transform="translate(25.5 25.5) scale(3)" fill="none" stroke="white"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1.3.5 2.6 1.5 3.5.8.8 1.3 1.5 1.5 2.5" />
                                    <path d="M9 18h6" />
                                    <path d="M10 22h4" />
                                </g>
                            </svg>
                        </div>
                        <h3 class="font-headline-h3 text-headline-h3 text-white mb-unit-md">
                            {{ __('messages.core_card2_title') }}
                        </h3>
                        <p class="font-body-md text-white/90 max-w-md">
                            {{ __('messages.core_card2_desc') }}
                        </p>
                    </article>

                    {{-- Card 3: Impactful Growth --}}
                    <article
                        class="bg-tertiary-fixed rounded-[24px] p-unit-xl text-on-tertiary-fixed flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-1 shadow-lg">
                        <div class="flex items-center justify-center mb-unit-lg shrink-0">
                            <svg width="123" height="123" viewBox="0 0 123 123" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="61.5" cy="61.5" r="60.5" stroke="#031A44" stroke-width="2" />
                                <g transform="translate(25.5 25.5) scale(3)">
                                    <path fill="#031A44"
                                        d="M19.14,12.94c0.04-0.3,0.06-0.61,0.06-0.94c0-0.32-0.02-0.64-0.07-0.94l2.03-1.58c0.18-0.14,0.23-0.41,0.12-0.61l-1.92-3.32c-0.12-0.22-0.37-0.29-0.59-0.22l-2.39,0.96c-0.5-0.38-1.03-0.7-1.62-0.94L14.4,2.81c-0.04-0.24-0.24-0.41-0.48-0.41h-3.84c-0.24,0-0.43,0.17-0.47,0.41L9.25,5.35C8.66,5.59,8.12,5.92,7.63,6.29L5.24,5.33c-0.22-0.08-0.47,0-0.59,0.22L2.74,8.87C2.62,9.08,2.66,9.34,2.86,9.48l2.03,1.58C4.84,11.36,4.8,11.69,4.8,12s0.02,0.64,0.07,0.94l-2.03,1.58c-0.18,0.14-0.23,0.41-0.12,0.61l1.92,3.32c0.12,0.22,0.37,0.29,0.59,0.22l2.39-0.96c0.5,0.38,1.03,0.7,1.62,0.94l0.36,2.54c0.05,0.24,0.24,0.41,0.48,0.41h3.84c0.24,0,0.44-0.17,0.47-0.41l0.36-2.54c0.59-0.24,1.13-0.56,1.62-0.94l2.39,0.96c0.22,0.08,0.47,0,0.59-0.22l1.92-3.32c0.12-0.22,0.07-0.47-0.12-0.61L19.14,12.94zM12,15.6c-1.98,0-3.6-1.62-3.6-3.6s1.62-3.6,3.6-3.6s3.6,1.62,3.6,3.6S13.98,15.6,12,15.6z" />
                                </g>
                            </svg>
                        </div>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-tertiary-fixed mb-unit-md">
                            {{ __('messages.core_card3_title') }}
                        </h3>
                        <p class="font-body-md text-on-tertiary-fixed/90 max-w-md">
                            {{ __('messages.core_card3_desc') }}
                        </p>
                    </article>

                </div>
            </div>
        </section>

        {{-- Section 8 : Delivery Approach --}}
        <section id="delivery-approach" class="py-unit-xl bg-surface-container-lowest">
            <div
                class="flex flex-col justify-center items-start w-full max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop min-h-[520px] sm:min-h-[660px]">
                <div class="mb-20 text-center max-w-2xl mx-auto">
                    <span class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">Delivery
                        Approach</span>
                    <h2 class="font-headline-h2 text-headline-h2 text-on-background mb-4">
                        {{ app()->getLocale() === 'en' ? 'End-to-End Delivery Lifecycle' : 'Siklus Delivery End-to-End' }}
                    </h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        {{ app()->getLocale() === 'en'
    ? 'From discovery to growth, every phase is designed for transparency, quality, and measurable progress.'
    : 'Dari discovery hingga growth, setiap fase dirancang untuk transparansi, kualitas, dan kemajuan yang terukur.' }}
                    </p>
                </div>

                {{-- Curved timeline (desktop) --}}
                <div class="relative hidden xl:block ml-12" style="height:1450px; width:1130px;">
                    <svg class="absolute left-[60px] top-[65px]" style="width:215.03px; height:1215.2px;"
                        viewBox="0 0 218 1232" fill="none" aria-hidden="true">
                        <path
                            d="M2.25009 0.837402C2.25009 0.837402 213.25 312.337 216.25 606.337C219.25 900.337 1.25009 1230.84 1.25009 1230.84"
                            stroke="#12AED0" stroke-width="3" />
                    </svg>

                    {{-- Step 01 --}}
                    <div class="absolute w-[50px] h-[50px] rounded-[100px] bg-primary text-on-primary flex items-center justify-center font-headline-h3 text-[24px] shadow-md"
                        style="left:62.2px; top:65.8px; transform:translate(-50%,-50%)">
                        01
                    </div>

                    {{-- Card 01 --}}
                    <div class="absolute" style="left:260px; top:0.8px; width:610px; height:180px;">
                        <div
                            class="bg-white border border-outline-variant rounded-[20px] p-5 shadow-sm h-full flex flex-col">
                            <span
                                class="font-label-sm text-xs font-semibold uppercase tracking-[0.5px] text-primary">{{ app()->getLocale() === 'en' ? 'Planning' : 'Perencanaan' }}</span>
                            <div class="mt-1 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-[22px]">explore</span>
                                <h3 class="font-headline-h3 text-lg text-on-background font-medium">
                                    {{ app()->getLocale() === 'en' ? 'Discovery & Scoping' : 'Discovery & Scoping' }}
                                </h3>
                            </div>
                            <p class="mt-2 font-body-md text-sm text-on-surface-variant flex-1 leading-snug">
                                {{ app()->getLocale() === 'en' ? 'Stakeholder workshops, requirement gathering, feasibility study, and project roadmap definition.' : 'Workshop stakeholder, pengumpulan kebutuhan, studi kelayakan, dan definisi roadmap proyek.' }}
                            </p>
                            <div class="mt-3 pt-3 border-t border-outline-variant flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-[18px]">check_circle</span>
                                <span class="font-body-md text-sm font-semibold text-primary">Output: PRB
                                    &amp; Project Charter</span>
                            </div>
                        </div>
                    </div>

                    {{-- Step 02 --}}
                    <div class="absolute w-[50px] h-[50px] rounded-[100px] bg-primary text-on-primary flex items-center justify-center font-headline-h3 text-[24px] shadow-md"
                        style="left:163.6px; top:268px; transform:translate(-50%,-50%)">
                        02
                    </div>

                    {{-- Card 02 --}}
                    <div class="absolute" style="left:310px; top:203.2px; width:610px; height:180px;">
                        <div
                            class="bg-white border border-outline-variant rounded-[20px] p-5 shadow-sm h-full flex flex-col">
                            <span
                                class="font-label-sm text-xs font-semibold uppercase tracking-[0.5px] text-primary">{{ app()->getLocale() === 'en' ? 'Design' : 'Perancangan' }}</span>
                            <div class="mt-1 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-[22px]">design_services</span>
                                <h3 class="font-headline-h3 text-lg text-on-background font-medium">
                                    {{ app()->getLocale() === 'en' ? 'Design & Architecture' : 'Design & Architecture' }}
                                </h3>
                            </div>
                            <p class="mt-2 font-body-md text-sm text-on-surface-variant flex-1 leading-snug">
                                {{ app()->getLocale() === 'en' ? 'System architecture design, tech stack selection, UI/UX prototyping, and technical specifications.' : 'Desain arsitektur sistem, pemilihan tech stack, prototyping UI/UX, dan spesifikasi teknis.' }}
                            </p>
                            <div class="mt-3 pt-3 border-t border-outline-variant flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-[18px]">check_circle</span>
                                <span class="font-body-md text-sm font-semibold text-primary">Output:
                                    Dokumen Desain Teknis &amp; Prototype</span>
                            </div>
                        </div>
                    </div>

                    {{-- Step 03 --}}
                    <div class="absolute w-[50px] h-[50px] rounded-[100px] bg-primary text-on-primary flex items-center justify-center font-headline-h3 text-[24px] shadow-md"
                        style="left:241.4px; top:470.2px; transform:translate(-50%,-50%)">
                        03
                    </div>

                    {{-- Card 03 --}}
                    <div class="absolute" style="left:360px; top:405.4px; width:610px; height:180px;">
                        <div
                            class="bg-white border border-outline-variant rounded-[20px] p-5 shadow-sm h-full flex flex-col">
                            <span
                                class="font-label-sm text-xs font-semibold uppercase tracking-[0.5px] text-primary">{{ app()->getLocale() === 'en' ? 'Development' : 'Pengembangan' }}</span>
                            <div class="mt-1 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-[22px]">code</span>
                                <h3 class="font-headline-h3 text-lg text-on-background font-medium">
                                    {{ app()->getLocale() === 'en' ? 'Agile Development & QA' : 'Agile Development & QA' }}
                                </h3>
                            </div>
                            <p class="mt-2 font-body-md text-sm text-on-surface-variant flex-1 leading-snug">
                                {{ app()->getLocale() === 'en' ? 'Sprint-based development with continuous integration, automated testing, and code review processes.' : 'Pengembangan berbasis sprint dengan integrasi berkelanjutan, automated testing, dan proses code review.' }}
                            </p>
                            <div class="mt-3 pt-3 border-t border-outline-variant flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-[18px]">check_circle</span>
                                <span class="font-body-md text-sm font-semibold text-primary">Output: Source code &amp;
                                    Unit Test</span>
                            </div>
                        </div>
                    </div>

                    {{-- Step 04 --}}
                    <div class="absolute w-[50px] h-[50px] rounded-[100px] bg-primary text-on-primary flex items-center justify-center font-headline-h3 text-[24px] shadow-md"
                        style="left:273.3px; top:672.4px; transform:translate(-50%,-50%)">
                        04
                    </div>

                    {{-- Card 04 --}}
                    <div class="absolute" style="left:410px; top:607.6px; width:610px; height:180px;">
                        <div
                            class="bg-white border border-outline-variant rounded-[20px] p-5 shadow-sm h-full flex flex-col">
                            <span
                                class="font-label-sm text-xs font-semibold uppercase tracking-[0.5px] text-primary">{{ app()->getLocale() === 'en' ? 'Testing' : 'Pengujian' }}</span>
                            <div class="mt-1 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-[22px]">fact_check</span>
                                <h3 class="font-headline-h3 text-lg text-on-background font-medium">
                                    {{ app()->getLocale() === 'en' ? 'SIT / UAT' : 'SIT / UAT' }}
                                </h3>
                            </div>
                            <p class="mt-2 font-body-md text-sm text-on-surface-variant flex-1 leading-snug">
                                {{ app()->getLocale() === 'en' ? 'System Integration Testing and User Acceptance Testing to validate functionality, performance, and business readiness.' : 'System Integration Testing dan User Acceptance Testing untuk memvalidasi fungsionalitas, performa, dan kesiapan bisnis.' }}
                            </p>
                            <div class="mt-3 pt-3 border-t border-outline-variant flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-[18px]">check_circle</span>
                                <span class="font-body-md text-sm font-semibold text-primary">Output: SIT
                                    &amp; UAT Sign-off</span>
                            </div>
                        </div>
                    </div>

                    {{-- Step 05 --}}
                    <div class="absolute w-[50px] h-[50px] rounded-[100px] bg-primary text-on-primary flex items-center justify-center font-headline-h3 text-[24px] shadow-md"
                        style="left:250.6px; top:874.5px; transform:translate(-50%,-50%)">
                        05
                    </div>

                    {{-- Card 05 --}}
                    <div class="absolute" style="left:360px; top:809.7px; width:610px; height:180px;">
                        <div
                            class="bg-white border border-outline-variant rounded-[20px] p-5 shadow-sm h-full flex flex-col">
                            <span
                                class="font-label-sm text-xs font-semibold uppercase tracking-[0.5px] text-primary">{{ app()->getLocale() === 'en' ? 'Deployment' : 'Peluncuran' }}</span>
                            <div class="mt-1 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-[22px]">rocket_launch</span>
                                <h3 class="font-headline-h3 text-lg text-on-background font-medium">
                                    {{ app()->getLocale() === 'en' ? 'Deployment & Go-Live' : 'Deployment & Go-Live' }}
                                </h3>
                            </div>
                            <p class="mt-2 font-body-md text-sm text-on-surface-variant flex-1 leading-snug">
                                {{ app()->getLocale() === 'en' ? 'Release readiness check, CI/CD pipeline execution, production deployment, and go-live verification.' : 'Pemeriksaan kesiapan rilis, eksekusi pipeline CI/CD, deployment produksi, dan verifikasi Go-Live.' }}
                            </p>
                            <div class="mt-3 pt-3 border-t border-outline-variant flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-[18px]">check_circle</span>
                                <span class="font-body-md text-sm font-semibold text-primary">Output: Rilis Produksi
                                    Aktif</span>
                            </div>
                        </div>
                    </div>

                    {{-- Step 06 --}}
                    <div class="absolute w-[50px] h-[50px] rounded-[100px] bg-primary text-on-primary flex items-center justify-center font-headline-h3 text-[24px] shadow-md"
                        style="left:181.8px; top:1076.7px; transform:translate(-50%,-50%)">
                        06
                    </div>

                    {{-- Card 06 --}}
                    <div class="absolute" style="left:310px; top:1011.9px; width:610px; height:180px;">
                        <div
                            class="bg-white border border-outline-variant rounded-[20px] p-5 shadow-sm h-full flex flex-col">
                            <span
                                class="font-label-sm text-xs font-semibold uppercase tracking-[0.5px] text-primary">{{ app()->getLocale() === 'en' ? 'Handover' : 'Serah Terima' }}</span>
                            <div class="mt-1 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-[22px]">handshake</span>
                                <h3 class="font-headline-h3 text-lg text-on-background font-medium">
                                    {{ app()->getLocale() === 'en' ? 'Handover' : 'Handover' }}
                                </h3>
                            </div>
                            <p class="mt-2 font-body-md text-sm text-on-surface-variant flex-1 leading-snug">
                                {{ app()->getLocale() === 'en' ? 'BAST (Berita Acara Serah Terima), operational documentation, knowledge transfer, and user training.' : 'BAST (Berita Acara Serah Terima), dokumentasi operasional, transfer pengetahuan, dan pelatihan pengguna.' }}
                            </p>
                            <div class="mt-3 pt-3 border-t border-outline-variant flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-[18px]">check_circle</span>
                                <span class="font-body-md text-sm font-semibold text-primary">Output: BAST
                                    &amp; Manual Operasional</span>
                            </div>
                        </div>
                    </div>

                    {{-- Step 07 --}}
                    <div class="absolute w-[50px] h-[50px] rounded-[100px] bg-tertiary text-on-tertiary flex items-center justify-center font-headline-h3 text-[24px] shadow-md"
                        style="left:61.2px; top:1279.1px; transform:translate(-50%,-50%)">
                        07
                    </div>

                    {{-- Card 07 --}}
                    <div class="absolute" style="left:260px; top:1214.1px; width:610px; height:180px;">
                        <div
                            class="bg-white border border-outline-variant rounded-[20px] p-5 shadow-sm h-full flex flex-col">
                            <span
                                class="font-label-sm text-xs font-semibold uppercase tracking-[0.5px] text-primary">{{ app()->getLocale() === 'en' ? 'Sustainable' : 'Berkelanjutan' }}</span>
                            <div class="mt-1 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-[22px]">trending_up</span>
                                <h3 class="font-headline-h3 text-lg text-on-background font-medium">
                                    {{ app()->getLocale() === 'en' ? 'Discovery & Scoping' : 'Discovery & Scoping' }}
                                </h3>
                            </div>
                            <p class="mt-2 font-body-md text-sm text-on-surface-variant flex-1 leading-snug">
                                {{ app()->getLocale() === 'en' ? 'Experienced in web applications, core banking systems, and scalable solutions.' : 'Berpengalaman dalam aplikasi web, sistem core banking, dan solusi yang dapat diskalakan.' }}
                            </p>
                            <div class="mt-3 pt-3 border-t border-outline-variant flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-[18px]">check_circle</span>
                                <span class="font-body-md text-sm font-semibold text-primary">Output: Growth Roadmap
                                    &amp; Laporan SLA</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Curved timeline (mobile fallback) --}}
                <div class="xl:hidden relative max-w-md mx-auto px-margin-mobile">
                    <div class="absolute left-6 md:left-7 top-2 bottom-2 w-0.5 bg-outline-variant" aria-hidden="true">
                    </div>

                    <div class="relative pl-16 md:pl-20 pb-unit-lg">
                        <div
                            class="absolute left-0 top-0 w-12 h-12 md:w-14 md:h-14 rounded-full bg-primary text-on-primary flex items-center justify-center font-headline-h3 text-headline-h3 z-10 shadow-md">
                            01</div>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                            {{ app()->getLocale() === 'en' ? 'Discovery & Scoping' : 'Discovery & Scoping' }}
                        </h3>
                        <p class="font-body-md text-sm text-on-surface-variant mt-1">
                            {{ app()->getLocale() === 'en' ? 'Stakeholder workshops, requirement gathering, feasibility study, and project roadmap definition.' : 'Workshop stakeholder, pengumpulan kebutuhan, studi kelayakan, dan definisi roadmap proyek.' }}
                        </p>
                    </div>
                    <div class="relative pl-16 md:pl-20 pb-unit-lg">
                        <div
                            class="absolute left-0 top-0 w-12 h-12 md:w-14 md:h-14 rounded-full bg-primary text-on-primary flex items-center justify-center font-headline-h3 text-headline-h3 z-10 shadow-md">
                            02</div>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                            {{ app()->getLocale() === 'en' ? 'Design & Architecture' : 'Design & Architecture' }}
                        </h3>
                        <p class="font-body-md text-sm text-on-surface-variant mt-1">
                            {{ app()->getLocale() === 'en' ? 'System architecture design, technology stack selection, UX/UI prototyping, and technical specification.' : 'Desain arsitektur sistem, pemilihan tech stack, prototyping UX/UI, dan spesifikasi teknis.' }}
                        </p>
                    </div>
                    <div class="relative pl-16 md:pl-20 pb-unit-lg">
                        <div
                            class="absolute left-0 top-0 w-12 h-12 md:w-14 md:h-14 rounded-full bg-primary text-on-primary flex items-center justify-center font-headline-h3 text-headline-h3 z-10 shadow-md">
                            03</div>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                            {{ app()->getLocale() === 'en' ? 'Agile Development & QA' : 'Agile Development & QA' }}
                        </h3>
                        <p class="font-body-md text-sm text-on-surface-variant mt-1">
                            {{ app()->getLocale() === 'en' ? 'Sprint-based development with continuous integration, automated testing, and code review processes.' : 'Pengembangan berbasis sprint dengan integrasi berkelanjutan, automated testing, dan proses code review.' }}
                        </p>
                    </div>
                    <div class="relative pl-16 md:pl-20 pb-unit-lg">
                        <div
                            class="absolute left-0 top-0 w-12 h-12 md:w-14 md:h-14 rounded-full bg-primary text-on-primary flex items-center justify-center font-headline-h3 text-headline-h3 z-10 shadow-md">
                            04</div>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                            {{ app()->getLocale() === 'en' ? 'SIT / UAT' : 'SIT / UAT' }}
                        </h3>
                        <p class="font-body-md text-sm text-on-surface-variant mt-1">
                            {{ app()->getLocale() === 'en' ? 'System Integration Testing and User Acceptance Testing to validate functionality, performance, and business readiness.' : 'System Integration Testing dan User Acceptance Testing untuk memvalidasi fungsionalitas, performa, dan kesiapan bisnis.' }}
                        </p>
                    </div>
                    <div class="relative pl-16 md:pl-20 pb-unit-lg">
                        <div
                            class="absolute left-0 top-0 w-12 h-12 md:w-14 md:h-14 rounded-full bg-primary text-on-primary flex items-center justify-center font-headline-h3 text-headline-h3 z-10 shadow-md">
                            05</div>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                            {{ app()->getLocale() === 'en' ? 'Deployment & Go-Live' : 'Deployment & Go-Live' }}
                        </h3>
                        <p class="font-body-md text-sm text-on-surface-variant mt-1">
                            {{ app()->getLocale() === 'en' ? 'Release readiness check, CI/CD pipeline execution, production deployment, and go-live verification.' : 'Pemeriksaan kesiapan rilis, eksekusi pipeline CI/CD, deployment produksi, dan verifikasi go-live.' }}
                        </p>
                    </div>
                    <div class="relative pl-16 md:pl-20 pb-unit-lg">
                        <div
                            class="absolute left-0 top-0 w-12 h-12 md:w-14 md:h-14 rounded-full bg-primary text-on-primary flex items-center justify-center font-headline-h3 text-headline-h3 z-10 shadow-md">
                            06</div>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                            {{ app()->getLocale() === 'en' ? 'Handover' : 'Handover' }}
                        </h3>
                        <p class="font-body-md text-sm text-on-surface-variant mt-1">
                            {{ app()->getLocale() === 'en' ? 'BAST (Berita Acara Serah Terima), operational documentation, knowledge transfer, and user training.' : 'BAST (Berita Acara Serah Terima), dokumentasi operasional, transfer pengetahuan, dan pelatihan pengguna.' }}
                        </p>
                    </div>
                    <div class="relative pl-16 md:pl-20 pb-0">
                        <div
                            class="absolute left-0 top-0 w-12 h-12 md:w-14 md:h-14 rounded-full bg-tertiary text-on-tertiary flex items-center justify-center font-headline-h3 text-headline-h3 z-10 shadow-md">
                            07</div>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                            {{ app()->getLocale() === 'en' ? 'Support & Growth' : 'Support & Growth' }}
                        </h3>
                        <p class="font-body-md text-sm text-on-surface-variant mt-1">
                            {{ app()->getLocale() === 'en' ? 'Ongoing maintenance, performance monitoring, feature enhancements, and continuous improvement based on user feedback and business needs.' : 'Maintenance berkelanjutan, monitoring performa, peningkatan fitur, dan perbaikan berkelanjutan berdasarkan feedback pengguna dan kebutuhan bisnis.' }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section 9 : FAQ Section --}}
        <section class="py-unit-xl bg-surface">
            <div class="max-w-4xl mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="text-center mb-unit-lg">
                    <h2 class="font-headline-h2 text-headline-h2 text-on-background mb-unit-xs">
                        {{ app()->getLocale() === 'en' ? 'Common Queries' : 'Pertanyaan Umum' }}
                    </h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant">
                        {{ app()->getLocale() === 'en' ? 'Need more info? Check our FAQ.' : 'Butuh informasi lebih? Cek FAQ kami.' }}
                    </p>
                </div>
                <div class="space-y-4">
                    <div
                        class="accordion-item bg-white border border-outline-variant rounded-[20px] p-5 transition-all hover:border-primary shadow-sm">
                        <button class="w-full flex justify-between items-center text-left"
                            onclick="toggleAccordion(this)">
                            <span
                                class="font-headline-h3 text-lg text-on-surface">{{ app()->getLocale() === 'en' ? 'What services does Nakala Digital provide?' : 'Layanan apa saja yang disediakan Nakala Digital?' }}</span>
                            <span
                                class="material-symbols-outlined toggle-icon transition-transform text-outline">expand_more</span>
                        </button>
                        <div class="accordion-content">
                            <p class="pt-4 font-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
    ? 'We provide Custom Software Dev, AI & GenAI, Tech Consulting, Web & Portal, QA Governance, and Managed Support & Dynamics 365. Each service is delivered with local context and regional capability.'
    : 'Kami menyediakan Pengembangan Software Kustom, AI & GenAI, Konsultasi Teknologi, Web & Portal, Tata Kelola QA, serta Managed Support & Dynamics 365. Setiap layanan diberikan dengan konteks lokal dan kapabilitas regional.' }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="accordion-item bg-white border border-outline-variant rounded-[20px] p-5 transition-all hover:border-primary shadow-sm">
                        <button class="w-full flex justify-between items-center text-left"
                            onclick="toggleAccordion(this)">
                            <span
                                class="font-headline-h3 text-lg text-on-surface">{{ app()->getLocale() === 'en' ? 'How does the project engagement process work?' : 'Bagaimana proses keterlibatan proyek?' }}</span>
                            <span
                                class="material-symbols-outlined toggle-icon transition-transform text-outline">expand_more</span>
                        </button>
                        <div class="accordion-content">
                            <p class="pt-4 font-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
    ? 'We follow a structured end-to-end lifecycle: Discovery & Scoping, Design & Architecture, Agile Development & QA, SIT/UAT, Deployment & Go-Live, Handover, and Support & Growth. Every stage includes documentation and quality checkpoints so you maintain full visibility throughout the project.'
    : 'Kami mengikuti siklus end-to-end yang terstruktur: Discovery & Scoping, Design & Architecture, Agile Development & QA, SIT/UAT, Deployment & Go-Live, Handover, serta Support & Growth. Setiap tahap mencakup dokumentasi dan checkpoint kualitas sehingga Anda memiliki visibilitas penuh selama proyek berlangsung.' }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="accordion-item bg-white border border-outline-variant rounded-[20px] p-5 transition-all hover:border-primary shadow-sm">
                        <button class="w-full flex justify-between items-center text-left"
                            onclick="toggleAccordion(this)">
                            <span
                                class="font-headline-h3 text-lg text-on-surface">{{ app()->getLocale() === 'en' ? 'What is the estimated project timeline?' : 'Berapa estimasi timeline pengerjaan?' }}</span>
                            <span
                                class="material-symbols-outlined toggle-icon transition-transform text-outline">expand_more</span>
                        </button>
                        <div class="accordion-content">
                            <p class="pt-4 font-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
    ? 'Timelines depend on project scope and complexity. A focused MVP can typically be delivered within 8-12 weeks. Larger enterprise solutions are delivered in phases, with core modules typically available within 4-6 months. We provide a detailed timeline during the Discovery & Scoping phase.'
    : 'Timeline tergantung pada lingkup dan kompleksitas proyek. MVP yang terfokus biasanya dapat selesai dalam 8-12 minggu. Solusi enterprise yang lebih besar dikirimkan secara bertahap, dengan modul inti biasanya tersedia dalam 4-6 bulan. Kami memberikan timeline detail selama fase Discovery & Scoping.' }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="accordion-item bg-white border border-outline-variant rounded-[20px] p-5 transition-all hover:border-primary shadow-sm">
                        <button class="w-full flex justify-between items-center text-left"
                            onclick="toggleAccordion(this)">
                            <span
                                class="font-headline-h3 text-lg text-on-surface">{{ app()->getLocale() === 'en' ? 'Is post-launch support available?' : 'Apakah tersedia dukungan setelah go-live?' }}</span>
                            <span
                                class="material-symbols-outlined toggle-icon transition-transform text-outline">expand_more</span>
                        </button>
                        <div class="accordion-content">
                            <p class="pt-4 font-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
    ? 'Yes. We provide ongoing support through flexible SLAs, including system monitoring, maintenance, feature updates, and technical assistance. Our managed support covers L1 to L3 support, ensuring your platform remains stable and up-to-date after launch.'
    : 'Ya. Kami menyediakan dukungan berkelanjutan melalui SLA yang fleksibel, termasuk pemantauan sistem, pemeliharaan, pembaruan fitur, dan bantuan teknis. Dukungan terkelola kami mencakup L1 hingga L3, memastikan platform Anda tetap stabil dan terkini setelah peluncuran.' }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="accordion-item bg-white border border-outline-variant rounded-[20px] p-5 transition-all hover:border-primary shadow-sm">
                        <button class="w-full flex justify-between items-center text-left"
                            onclick="toggleAccordion(this)">
                            <span
                                class="font-headline-h3 text-lg text-on-surface">{{ app()->getLocale() === 'en' ? 'How does the partnership with Romulus Digital work?' : 'Bagaimana model partnership dengan Romulus Digital?' }}</span>
                            <span
                                class="material-symbols-outlined toggle-icon transition-transform text-outline">expand_more</span>
                        </button>
                        <div class="accordion-content">
                            <p class="pt-4 font-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
    ? 'Nakala Digital remains the primary delivery partner for every client engagement. Romulus Digital serves as a strategic trust layer and regional capability partner, providing additional technical depth, reference, and capacity when projects require larger scale or specialised expertise. This means you get local responsiveness with regional backing.'
    : 'Nakala Digital tetap menjadi mitra pengiriman utama untuk setiap engagement klien. Romulus Digital berperan sebagai trust layer strategis dan mitra kapabilitas regional, memberikan kedalaman teknis tambahan, referensi, dan kapasitas saat proyek membutuhkan skala lebih besar atau keahlian khusus. Ini berarti Anda mendapatkan respons lokal dengan dukungan regional.' }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="accordion-item bg-white border border-outline-variant rounded-[20px] p-5 transition-all hover:border-primary shadow-sm">
                        <button class="w-full flex justify-between items-center text-left"
                            onclick="toggleAccordion(this)">
                            <span
                                class="font-headline-h3 text-lg text-on-surface">{{ app()->getLocale() === 'en' ? 'How is data security handled?' : 'Bagaimana aspek data/security ditangani?' }}</span>
                            <span
                                class="material-symbols-outlined toggle-icon transition-transform text-outline">expand_more</span>
                        </button>
                        <div class="accordion-content">
                            <p class="pt-4 font-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
    ? 'We follow industry-standard security practices including role-based access control (RBAC), data encryption, and secure development lifecycle. Our QA governance framework includes security review checkpoints at every stage. For specific compliance requirements, we work with clients to align with their existing security policies and standards.'
    : 'Kami mengikuti praktik keamanan standar industri termasuk role-based access control (RBAC), enkripsi data, dan siklus pengembangan yang aman. Framework tata kelola QA kami mencakup checkpoint review keamanan di setiap tahap. Untuk kebutuhan kepatuhan spesifik, kami bekerja sama dengan klien untuk menyelaraskan dengan kebijakan keamanan yang sudah ada.' }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="accordion-item bg-white border border-outline-variant rounded-[20px] p-5 transition-all hover:border-primary shadow-sm">
                        <button class="w-full flex justify-between items-center text-left"
                            onclick="toggleAccordion(this)">
                            <span
                                class="font-headline-h3 text-lg text-on-surface">{{ app()->getLocale() === 'en' ? 'How can I contact the Nakala team?' : 'Bagaimana cara menghubungi tim Nakala?' }}</span>
                            <span
                                class="material-symbols-outlined toggle-icon transition-transform text-outline">expand_more</span>
                        </button>
                        <div class="accordion-content">
                            <p class="pt-4 font-body-md text-on-surface-variant">
                                {!! app()->getLocale() === 'en'
    ? 'You can reach us via email at <a href="mailto:contact@nakala.digital" class="underline hover:text-primary transition-colors">contact@nakala.digital</a>, by phone at <a href="tel:+6282295706304" class="underline hover:text-primary transition-colors">+62 822-9570-6304</a>, or through the contact form on our website. We typically respond within one business day. For project discussions, we offer a free discovery session to understand your needs and provide initial recommendations.'
    : 'Anda dapat menghubungi kami melalui email di <a href="mailto:contact@nakala.digital" class="underline hover:text-primary transition-colors">contact@nakala.digital</a>, melalui telepon di <a href="tel:+6282295706304" class="underline hover:text-primary transition-colors">+62 822-9570-6304</a>, atau melalui form kontak di website kami. Kami biasanya merespon dalam satu hari kerja. Untuk diskusi proyek, kami menawarkan sesi discovery gratis untuk memahami kebutuhan Anda dan memberikan rekomendasi awal.' !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-unit-lg">
                    <a href="{{ route('faq' . (app()->getLocale() === 'en' ? '.en' : '')) }}"
                        class="inline-flex items-center gap-unit-xs text-primary font-button text-button hover:underline">
                        {{ app()->getLocale() === 'en' ? 'View All FAQ' : 'Lihat Semua FAQ' }}
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
            </div>
        </section>

        {{-- Section 10 : Final CTA --}}
        <section class="py-unit-xl bg-primary text-center relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="grid grid-cols-6 h-full">
                    <div class="border-r border-white"></div>
                    <div class="border-r border-white"></div>
                    <div class="border-r border-white"></div>
                    <div class="border-r border-white"></div>
                    <div class="border-r border-white"></div>
                    <div></div>
                </div>
            </div>
            <div class="max-w-2xl mx-auto px-margin-mobile relative z-10 space-y-unit-lg">
                <h2 class="font-semibold text-[28px] sm:text-[36px] lg:text-[44px] leading-snug text-white">
                    {{ __('messages.final_cta_title') }}
                </h2>
                <p class="text-[16px] sm:text-[18px] text-white/90">{{ __('messages.final_cta_desc') }}</p>
                <div class="pt-unit-md">
                    <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}"
                        class="inline-flex w-full sm:w-[348px] h-[62px] items-center justify-center bg-tertiary-fixed text-on-tertiary-fixed rounded-[20px] font-medium text-[16px] sm:text-[18px] tracking-[0.5px] uppercase shadow-xl hover:scale-105 transition-transform active:scale-100">
                        {{ app()->getLocale() === 'en' ? 'Schedule a Discovery Session' : 'Jadwalkan Sesi Discovery' }}
                    </a>
                </div>
            </div>
        </section>
    </main>
    @include('partials.footer')
    <script>
        // Simple scroll header effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header.fixed');
            if (window.scrollY > 20) {
                header.classList.add('h-16');
                header.classList.remove('h-20');
            } else {
                header.classList.remove('h-16');
                header.classList.add('h-20');
            }
        });

        // FAQ Accordion functionality
        function toggleAccordion(button) {
            const item = button.closest('.accordion-item');
            const isActive = item.classList.contains('active');

            // Close all items
            document.querySelectorAll('.accordion-item').forEach(el => {
                el.classList.remove('active');
            });

            // Toggle clicked item
            if (!isActive) {
                item.classList.add('active');
            }
        }

        // Initialize first FAQ as open
        document.addEventListener('DOMContentLoaded', () => {
            const firstItem = document.querySelector('.accordion-item');
            if (firstItem) firstItem.classList.add('active');
        });

        // Hero Section Ã¢â‚¬â€ animated / interactive IT network background.
        // Lightweight canvas particle-network (represents connectivity, data & AI)
        // that stays behind the headline/CTA and never blocks pointer events.
        (function () {
            const canvas = document.getElementById('hero-network');
            const section = document.getElementById('hero');
            if (!canvas || !section) return;

            const ctx = canvas.getContext('2d', {
                alpha: true
            });
            const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            const NODE_COLORS = ['18, 174, 208', '167, 244, 50']; // brand cyan / lime
            const LINE_COLOR = '18, 174, 208';

            let width = 0;
            let height = 0;
            let dpr = 1;
            let nodes = [];
            let animationId = null;
            let inViewport = true;
            let mouse = {
                x: null,
                y: null,
                radius: 110
            };
            let resizeTimer = null;

            function nodeCountFor(w, h) {
                const area = w * h;
                // Fewer nodes on small screens to protect performance/battery.
                const base = Math.floor(area / 24000);
                return Math.max(14, Math.min(50, base));
            }

            function buildNodes() {
                const count = nodeCountFor(width, height);
                nodes = Array.from({
                    length: count
                }, () => ({
                    x: Math.random() * width,
                    y: Math.random() * height,
                    vx: (Math.random() - 0.5) * 0.22,
                    vy: (Math.random() - 0.5) * 0.22,
                    r: Math.random() * 1.4 + 1,
                    color: Math.random() > 0.78 ? NODE_COLORS[1] : NODE_COLORS[0],
                }));
            }

            function resize() {
                const rect = section.getBoundingClientRect();
                width = rect.width;
                height = rect.height;
                dpr = Math.min(window.devicePixelRatio || 1, 2);
                canvas.width = Math.round(width * dpr);
                canvas.height = Math.round(height * dpr);
                canvas.style.width = width + 'px';
                canvas.style.height = height + 'px';
                ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
                buildNodes();
            }

            function drawFrame() {
                ctx.clearRect(0, 0, width, height);
                const linkDistance = Math.min(150, width * 0.15);

                for (const n of nodes) {
                    ctx.beginPath();
                    ctx.arc(n.x, n.y, n.r, 0, Math.PI * 2);
                    ctx.fillStyle = `rgba(${n.color}, 0.5)`;
                    ctx.fill();
                }

                for (let i = 0; i < nodes.length; i++) {
                    for (let j = i + 1; j < nodes.length; j++) {
                        const a = nodes[i];
                        const b = nodes[j];
                        const dx = a.x - b.x;
                        const dy = a.y - b.y;
                        const dist = Math.sqrt(dx * dx + dy * dy);
                        if (dist < linkDistance) {
                            const opacity = (1 - dist / linkDistance) * 0.18;
                            ctx.beginPath();
                            ctx.moveTo(a.x, a.y);
                            ctx.lineTo(b.x, b.y);
                            ctx.strokeStyle = `rgba(${LINE_COLOR}, ${opacity})`;
                            ctx.lineWidth = 1;
                            ctx.stroke();
                        }
                    }
                }
            }

            function step() {
                for (const n of nodes) {
                    n.x += n.vx;
                    n.y += n.vy;

                    if (n.x <= 0 || n.x >= width) n.vx *= -1;
                    if (n.y <= 0 || n.y >= height) n.vy *= -1;

                    // Gentle interactive repulsion around the cursor.
                    if (mouse.x !== null) {
                        const dx = n.x - mouse.x;
                        const dy = n.y - mouse.y;
                        const dist = Math.sqrt(dx * dx + dy * dy);
                        if (dist < mouse.radius && dist > 0.01) {
                            const force = (mouse.radius - dist) / mouse.radius;
                            n.x += (dx / dist) * force * 1.1;
                            n.y += (dy / dist) * force * 1.1;
                        }
                    }
                }

                drawFrame();
                animationId = requestAnimationFrame(step);
            }

            function start() {
                if (animationId || prefersReducedMotion) return;
                animationId = requestAnimationFrame(step);
            }

            function stop() {
                if (animationId) {
                    cancelAnimationFrame(animationId);
                    animationId = null;
                }
            }

            section.addEventListener('mousemove', (e) => {
                const rect = section.getBoundingClientRect();
                mouse.x = e.clientX - rect.left;
                mouse.y = e.clientY - rect.top;
            });
            section.addEventListener('mouseleave', () => {
                mouse.x = null;
                mouse.y = null;
            });

            window.addEventListener('resize', () => {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(() => {
                    resize();
                    if (prefersReducedMotion) drawFrame();
                }, 150);
            });

            document.addEventListener('visibilitychange', () => {
                if (document.hidden) {
                    stop();
                } else if (inViewport) {
                    start();
                }
            });

            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        inViewport = entry.isIntersecting;
                        if (inViewport && !document.hidden) {
                            start();
                        } else {
                            stop();
                        }
                    });
                }, {
                    threshold: 0.05
                });
                observer.observe(section);
            }

            resize();
            if (prefersReducedMotion) {
                drawFrame();
            } else {
                start();
            }
        })();

        // Hero Section Ã¢â‚¬â€ background theme carousel (AI / Cloud / Data / Digital
        // Transformation / Cybersecurity). Auto-advances, but stays fully
        // controllable via the dot indicators and pauses whenever the hero
        // isn't the thing the user is actually looking at.
        (function () {
            const section = document.getElementById('hero');
            const carousel = document.getElementById('hero-carousel');
            if (!section || !carousel) return;

            const slides = Array.from(carousel.querySelectorAll('.hero-carousel-slide'));
            const dots = Array.from(section.querySelectorAll('.hero-carousel-dot'));
            if (!slides.length) return;

            const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            const AUTO_ADVANCE_MS = 5000;

            let current = slides.findIndex((s) => s.classList.contains('is-active'));
            if (current < 0) current = 0;
            let timer = null;
            let inViewport = true;
            let touchStartX = null;

            function goTo(index) {
                const nextIndex = (index + slides.length) % slides.length;
                if (nextIndex === current) return;
                slides[current].classList.remove('is-active');
                if (dots[current]) dots[current].classList.remove('is-active');
                current = nextIndex;
                slides[current].classList.add('is-active');
                if (dots[current]) dots[current].classList.add('is-active');
            }

            function next() {
                goTo(current + 1);
            }

            function startAuto() {
                if (timer || prefersReducedMotion) return;
                timer = setInterval(next, AUTO_ADVANCE_MS);
            }

            function stopAuto() {
                if (timer) {
                    clearInterval(timer);
                    timer = null;
                }
            }

            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    goTo(index);
                    stopAuto();
                    startAuto();
                });
            });

            // Pause on hover/focus so people reading the headline aren't distracted.
            section.addEventListener('mouseenter', stopAuto);
            section.addEventListener('mouseleave', () => {
                if (inViewport && !document.hidden) startAuto();
            });
            section.addEventListener('focusin', stopAuto);
            section.addEventListener('focusout', () => {
                if (inViewport && !document.hidden) startAuto();
            });

            // Swipe support for touch devices.
            section.addEventListener('touchstart', (e) => {
                touchStartX = e.touches[0].clientX;
            }, {
                passive: true
            });
            section.addEventListener('touchend', (e) => {
                if (touchStartX === null) return;
                const deltaX = e.changedTouches[0].clientX - touchStartX;
                if (Math.abs(deltaX) > 40) {
                    deltaX < 0 ? goTo(current + 1) : goTo(current - 1);
                    stopAuto();
                    startAuto();
                }
                touchStartX = null;
            }, {
                passive: true
            });

            document.addEventListener('visibilitychange', () => {
                if (document.hidden) {
                    stopAuto();
                } else if (inViewport) {
                    startAuto();
                }
            });

            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        inViewport = entry.isIntersecting;
                        if (inViewport && !document.hidden) {
                            startAuto();
                        } else {
                            stopAuto();
                        }
                    });
                }, {
                    threshold: 0.05
                });
                observer.observe(section);
            }

            startAuto();
        })();
    </script>
    @include('partials.lenis-scroll')
</body>

</html>
