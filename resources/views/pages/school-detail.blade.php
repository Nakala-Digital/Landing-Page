@php
    $locale = app()->getLocale();
    $localeSuffix = $locale === 'en' ? '.en' : '';
@endphp

<!DOCTYPE html>

<html class="scroll-smooth" lang="{{ $locale }}">

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
    <title>
        {{ $locale === 'en'
    ? 'School & Foundation Digital Solutions | Nakala Digital'
    : 'Solusi Digital Sekolah & Yayasan | Nakala Digital' }}
    </title>
    @include('partials.seo', [
        'title' =>
            $locale === 'en'
            ? 'School & Foundation Digital Solutions | Nakala Digital'
            : 'Solusi Digital Sekolah & Yayasan | Nakala Digital',
        'description' =>
            $locale === 'en'
            ? 'Integrated digital solutions for schools and foundations: PPDB, parent portal, LMS, HRIS, tuition payment, and AI Assistant in one connected ecosystem.'
            : 'Solusi digital terintegrasi untuk sekolah dan yayasan: PPDB, portal orang tua, LMS, HRIS, pembayaran SPP, hingga AI Assistant dalam satu ekosistem yang terhubung.',
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
                    },
                    keyframes: {
                        "float-slow": {
                            "0%, 100%": {
                                transform: "translateY(0)"
                            },
                            "50%": {
                                transform: "translateY(-15px)"
                            }
                        },
                        "float-fast": {
                            "0%, 100%": {
                                transform: "translateY(0)"
                            },
                            "50%": {
                                transform: "translateY(-8px)"
                            }
                        }
                    },
                    animation: {
                        "float-slow": "float-slow 6s ease-in-out infinite",
                        "float-fast": "float-fast 4s ease-in-out infinite"
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

        /* --- HERO THEME CAROUSEL --- */
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

        /* Slow-drifting gradient orbs */
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

        {{-- Section 1 : Solusi Pendidikan --}}
        <section id="hero"
            class="relative overflow-hidden bg-gradient-to-br from-surface-container-lowest via-surface to-primary/20 pt-unit-md sm:pt-unit-lg lg:pt-unit-md pb-unit-xl sm:pb-unit-xl lg:pb-unit-lg border-b">

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
            <div
                class="hero-orb hero-orb-delay pointer-events-none absolute -bottom-32 -left-24 h-96 w-96 rounded-full bg-primary/20 blur-3xl">
            </div>

            <div
                class="flex justify-start items-start w-full max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="space-y-unit-lg z-10 pt-unit-lg lg:w-1/2">

                    {{-- Hero Badge --}}
                    <div class="flex justify-start">
                        <div
                            class="inline-flex items-center justify-start gap-2 sm:gap-4 bg-tertiary-fixed text-on-tertiary-fixed px-4 sm:px-6 py-1.5 rounded-[20px] font-label-sm font-semibold text-[16px] sm:text-[22px] uppercase tracking-wide w-max h-[38px] sm:h-[43px]">
                            <svg width="27.5" height="22.5" viewBox="0 0 28 23" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.75 22.5L5 17.75V10.25L0 7.5L13.75 0L27.5 7.5V17.5H25V8.875L22.5 10.25V17.75L13.75 22.5ZM13.75 12.125L22.3125 7.5L13.75 2.875L5.1875 7.5L13.75 12.125ZM13.75 19.6563L20 16.2812V11.5625L13.75 15L7.5 11.5625V16.2812L13.75 19.6563Z"
                                    fill="black" />
                            </svg>
                            {{ $locale === 'en' ? 'Education Solutions' : 'Solusi Pendidikan' }}
                        </div>
                    </div>

                    {{-- Hero Title --}}
                    <h1
                        class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-on-background max-w-6xl text-start hero-heading md:max-w-full lg:max-w-6xl">
                        {!! $locale === 'en'
    ? 'Integrated Solutions<br>for Schools and<br><span class="text-primary">Education Foundations</span>'
    : 'Solusi Terintegrasi<br>untuk Sekolah dan<br><span class="text-primary">Yayasan Pendidikan</span>' !!}
                    </h1>

                    {{-- Hero Description --}}
                    <p
                        class="font-body-lg text-body-lg text-on-surface-variant max-w-xl text-start hero-desc md:max-w-full lg:max-w-xl">
                        {!! $locale === 'en'
    ? 'From kindergarten, elementary, junior high, to senior high under one foundation umbrella. Manage admissions, learning, payments, and operations in one connected digital ecosystem.'
    : 'Dari TK, SD, SMP, hingga SMA dalam satu payung yayasan Kelola penerimaan, pembelajaran, pembayaran, dan operasional dalam satu ekosistem digital yang terhubung.' !!}
                    </p>
                </div>

                {{-- RIGHT: Dashboard Mockup Card --}}
                <div class="relative z-10 hidden lg:flex lg:w-1/2 justify-end items-start pt-16 pb-16">
                    <div class="relative w-full max-w-[640px]" style="transform: translateX(32px) translateY(-120px);">

                        {{-- Dashboard Panel --}}
                        <img src="{{ asset('assets/image 23.png') }}"
                            class="relative w-full aspect-[640/316] object-cover rounded-[24px] mt-40"
                            alt="Dashboard Panel Card">
                    </div>
                </div>
            </div>
        </section>

        {{-- Section 2: Who It Helps --}}
        <section id="for-who" class="w-full bg-gray-50 py-16 scroll-mt-20">
            <div class="mx-auto w-full max-w-[1440px] px-margin-mobile md:px-margin-desktop">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-gutter justify-items-center">

                    {{-- Card 1: Untuk Siapa (light) --}}
                    <div
                        class="w-full lg:w-[610px] h-auto lg:h-[297px] bg-white rounded-[24px] border border-primary text-on-background p-unit-lg lg:p-unit-xl flex flex-col justify-between shadow-sm">
                        <div class="flex items-center gap-unit-md mb-unit-md">
                            <div class="h-14 w-14 shrink-0 rounded-2xl bg-primary/10 flex items-center justify-center">
                                <svg width="36.67" height="26.67" viewBox="0 0 37 27" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 26.6667V22C0 21.0556 0.243333 20.1878 0.73 19.3967C1.21667 18.6056 1.86222 18.0012 2.66667 17.5834C4.38889 16.7223 6.13889 16.0767 7.91667 15.6467C9.69444 15.2167 11.5 15.0012 13.3333 15C15.1667 14.9989 16.9722 15.2145 18.75 15.6467C20.5278 16.0789 22.2778 16.7245 24 17.5834C24.8056 18 25.4517 18.6045 25.9383 19.3967C26.425 20.1889 26.6678 21.0567 26.6667 22V26.6667H0ZM30 26.6667V21.6667C30 20.4445 29.66 19.2706 28.98 18.145C28.3 17.0195 27.3344 16.0545 26.0833 15.25C27.5 15.4167 28.8333 15.7017 30.0833 16.105C31.3333 16.5084 32.5 17.0012 33.5833 17.5834C34.5833 18.1389 35.3472 18.7567 35.875 19.4367C36.4028 20.1167 36.6667 20.86 36.6667 21.6667V26.6667H30ZM8.625 11.375C7.31945 10.0695 6.66667 8.50004 6.66667 6.66671C6.66667 4.83338 7.31945 3.26393 8.625 1.95838C9.93056 0.652821 11.5 4.27345e-05 13.3333 4.27345e-05C15.1667 4.27345e-05 16.7361 0.652821 18.0417 1.95838C19.3472 3.26393 20 4.83338 20 6.66671C20 8.50004 19.3472 10.0695 18.0417 11.375C16.7361 12.6806 15.1667 13.3334 13.3333 13.3334C11.5 13.3334 9.93056 12.6806 8.625 11.375ZM28.0417 11.375C26.7361 12.6806 25.1667 13.3334 23.3333 13.3334C23.0278 13.3334 22.6389 13.2989 22.1667 13.23C21.6944 13.1612 21.3056 13.0845 21 13C21.75 12.1112 22.3267 11.125 22.73 10.0417C23.1333 8.95838 23.3344 7.83338 23.3333 6.66671C23.3322 5.50004 23.1311 4.37504 22.73 3.29171C22.3289 2.20838 21.7522 1.22226 21 0.333376C21.3889 0.194487 21.7778 0.103932 22.1667 0.0617097C22.5556 0.0194875 22.9444 -0.00106838 23.3333 4.27345e-05C25.1667 4.27345e-05 26.7361 0.652821 28.0417 1.95838C29.3472 3.26393 30 4.83338 30 6.66671C30 8.50004 29.3472 10.0695 28.0417 11.375Z"
                                        fill="#12AED0" />
                                </svg>
                            </div>
                            <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                                {{ $locale === 'en' ? 'Who It Helps' : 'Untuk Siapa' }}
                            </h3>
                        </div>

                        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-2 -mt-4">
                            @php
                                $audiences = [
                                    ['id' => 'Yayasan Pendidikan', 'en' => 'Education Foundation'],
                                    ['id' => 'Tim Tata Usaha', 'en' => 'Administrative Team'],
                                    ['id' => 'Kepala Sekolah', 'en' => 'School Principal'],
                                    ['id' => 'Panitia PPDB', 'en' => 'PPDB Committee'],
                                ];
                            @endphp
                            @foreach ($audiences as $audience)
                                <li class="flex items-center gap-unit-md text-on-background/90">
                                    <svg width="20" height="20" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="shrink-0">
                                        <path
                                            d="M10.7835 17.8663L5.83333 12.915L7.483 11.2653L10.7835 14.5647L17.3822 7.96484L19.033 9.61568L10.7835 17.8663Z"
                                            fill="#A7F432" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 12.8333C0 5.74583 5.74583 0 12.8333 0C19.9208 0 25.6667 5.74583 25.6667 12.8333C25.6667 19.9208 19.9208 25.6667 12.8333 25.6667C5.74583 25.6667 0 19.9208 0 12.8333ZM12.8333 23.3333C11.4545 23.3333 10.0891 23.0617 8.81516 22.5341C7.54124 22.0064 6.38373 21.233 5.40871 20.258C4.4337 19.2829 3.66027 18.1254 3.1326 16.8515C2.60492 15.5776 2.33333 14.2122 2.33333 12.8333C2.33333 11.4545 2.60492 10.0891 3.1326 8.81516C3.66027 7.54124 4.4337 6.38373 5.40871 5.40871C6.38373 4.4337 7.54124 3.66027 8.81516 3.1326C10.0891 2.60492 11.4545 2.33333 12.8333 2.33333C15.6181 2.33333 18.2888 3.43958 20.258 5.40871C22.2271 7.37784 23.3333 10.0486 23.3333 12.8333C23.3333 15.6181 22.2271 18.2888 20.258 20.258C18.2888 22.2271 15.6181 23.3333 12.8333 23.3333Z"
                                            fill="#A7F432" />
                                    </svg>
                                    <span class="font-body-md text-[16px]">{{ $audience[$locale] }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- Card 2: Untuk Siapa (dark, same content) --}}
                    <div
                        class="w-full lg:w-[610px] h-auto lg:h-[297px] bg-secondary rounded-[24px] border border-transparent text-white p-unit-lg lg:p-unit-xl flex flex-col justify-between shadow-sm">
                        <div class="flex items-center gap-unit-md mb-unit-md">
                            <div
                                class="h-14 w-14 shrink-0 rounded-2xl bg-impact-lime/10 flex items-center justify-center">
                                <svg width="40" height="39.83" viewBox="0 0 40 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.5 27.325H20V39.825H12.5V27.325ZM2.5 34.825H10V39.825H2.5V34.825ZM32.5 29.825H40V39.825H32.5V29.825ZM22.5 22.325H30V39.825H22.5V22.325ZM40 0L25.8 12.425L12.125 8.175L0 17.575V22.325L12.875 12.325L26.7 16.625L40 4.975V0Z"
                                        fill="#A7F432" />
                                </svg>
                            </div>
                            <h3 class="font-headline-h3 text-headline-h3 text-white">
                                {{ $locale === 'en' ? 'Main Focus' : 'Fokus Utama' }}
                            </h3>
                        </div>

                        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-2">
                            @php
                                $navyFeatures = [
                                    ['id' => 'Penerimaan Siswa Baru', 'en' => 'New Student Admissions'],
                                    ['id' => 'Pembayaran', 'en' => 'Payments'],
                                    ['id' => 'Pengalaman Orang Tua', 'en' => 'Parent Experience'],
                                    ['id' => 'Pembelajaran', 'en' => 'Learning'],
                                    ['id' => 'Kontrol Operasional', 'en' => 'Operational Control'],
                                ];
                            @endphp
                            @foreach ($navyFeatures as $feature)
                                <li class="flex items-center gap-unit-md text-white/90">
                                    <svg width="20" height="20" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="shrink-0">
                                        <path
                                            d="M10.7835 17.8663L5.83333 12.915L7.483 11.2653L10.7835 14.5647L17.3822 7.96484L19.033 9.61568L10.7835 17.8663Z"
                                            fill="#A7F432" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 12.8333C0 5.74583 5.74583 0 12.8333 0C19.9208 0 25.6667 5.74583 25.6667 12.8333C25.6667 19.9208 19.9208 25.6667 12.8333 25.6667C5.74583 25.6667 0 19.9208 0 12.8333ZM12.8333 23.3333C11.4545 23.3333 10.0891 23.0617 8.81516 22.5341C7.54124 22.0064 6.38373 21.233 5.40871 20.258C4.4337 19.2829 3.66027 18.1254 3.1326 16.8515C2.60492 15.5776 2.33333 14.2122 2.33333 12.8333C2.33333 11.4545 2.60492 10.0891 3.1326 8.81516C3.66027 7.54124 4.4337 6.38373 5.40871 5.40871C6.38373 4.4337 7.54124 3.66027 8.81516 3.1326C10.0891 2.60492 11.4545 2.33333 12.8333 2.33333C15.6181 2.33333 18.2888 3.43958 20.258 5.40871C22.2271 7.37784 23.3333 10.0486 23.3333 12.8333C23.3333 15.6181 22.2271 18.2888 20.258 20.258C18.2888 22.2271 15.6181 23.3333 12.8333 23.3333Z"
                                            fill="#A7F432" />
                                    </svg>
                                    <span class="font-body-md text-[16px]">{{ $feature[$locale] }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section 3 : Capability Reference --}}
        <section class="w-full bg-white py-16">
            <div class="mx-auto w-full max-w-[1440px] px-margin-mobile md:px-margin-desktop">

                <div class="mb-unit-xl max-w-2xl mx-auto text-center">
                    <span class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">
                        {{ $locale === 'en' ? 'Capability Reference' : 'Referensi Kapabilitas' }}
                    </span>
                    <h2
                        class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-background mb-unit-md">
                        {{ $locale === 'en' ? 'School & Foundation Solution Details' : 'Detail Solusi Sekolah & Yayasan' }}
                    </h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant">
                        {{ $locale === 'en'
    ? 'Integrated modules designed to support every aspect of modern school management.'
    : 'Modul terintegrasi untuk mendukung setiap aspek manajemen sekolah modern.' }}
                    </p>
                </div>

                @php
                    $capabilities = [
                        [
                            'icon' => 'how_to_reg',
                            'title' => ['en' => 'PPDB & School Website', 'id' => 'PPDB dan Website Sekolah'],
                            'desc' => ['en' => 'End-to-end online admission portal complete with document upload and automatic verification.', 'id' => 'Portal pendaftaran online end-to-end lengkap dengan upload dokumen dan verifikasi otomatis.'],
                        ],
                        [
                            'icon' => 'family_restroom',
                            'title' => ['en' => 'Parent & Student Portal', 'id' => 'Parent & Student Portal'],
                            'desc' => ['en' => 'One unified portal for parents and students to monitor grades, schedules, attendance, and school announcements without switching apps or asking staff directly.', 'id' => 'Satu portal terpadu bagi orang tua dan siswa untuk memantau nilai, jadwal, kehadiran, dan pengumuman sekolah tanpa perlu berpindah aplikasi atau bertanya langsung ke staf.'],
                        ],
                        [
                            'icon' => 'menu_book',
                            'title' => ['en' => 'LMS and Assessment', 'id' => 'LMS dan Assessment'],
                            'desc' => ['en' => 'Digital learning platform where teachers share materials, assignments, and quizzes, while tracking student progress and evaluation results in real-time.', 'id' => 'Platform pembelajaran digital tempat guru membagikan materi, tugas, dan kuis, sekaligus melacak progres serta hasil evaluasi siswa secara real-time.'],
                        ],
                        [
                            'icon' => 'payments',
                            'title' => ['en' => 'SPP / Payment Gateway', 'id' => 'SPP / Payment Gateway'],
                            'desc' => ['en' => 'Automated monthly tuition billing with payment gateway integration, so parents can pay through various methods.', 'id' => 'Otomatisasi penagihan SPP bulanan dengan integrasi payment gateway, sehingga orang tua bisa membayar lewat berbagai metode.'],
                        ],
                        [
                            'icon' => 'badge',
                            'title' => ['en' => 'HRIS and Attendance', 'id' => 'HRIS dan Absensi'],
                            'desc' => ['en' => 'Manage employee data, leave, and attendance for teachers and staff in one centralized system, replacing error-prone manual records.', 'id' => 'Kelola data kepegawaian, cuti, dan kehadiran guru serta staf dalam satu sistem terpusat, menggantikan pencatatan manual yang rawan kesalahan.'],
                        ],
                        [
                            'icon' => 'dashboard_customize',
                            'title' => ['en' => 'Foundation Dashboard', 'id' => 'Dashboard Yayasan'],
                            'desc' => ['en' => 'Centralized dashboard for foundation management to monitor operational performance across all units and education levels, from enrollment to financial health, in one view.', 'id' => 'Dashboard terpusat bagi pengurus yayasan untuk memantau performa operasional di seluruh unit dan jenjang pendidikan dari pendaftaran hingga kondisi keuangan dalam satu tampilan.'],
                        ],
                        [
                            'icon' => 'smart_toy',
                            'title' => ['en' => 'AI Parent / Admission Assistant', 'id' => 'AI Parent/Admission Assistant'],
                            'desc' => ['en' => '24/7 information assistance for parents and prospective students, from admission status to bills, with automatic escalation to admin staff for more complex questions.', 'id' => 'Bantuan informasi 24/7 untuk orang tua dan calon siswa mulai dari status pendaftaran hingga tagihan dengan eskalasi otomatis ke staf admin untuk pertanyaan yang lebih kompleks.'],
                        ],
                        [
                            'icon' => 'forum',
                            'title' => ['en' => 'CRM AI Assistant', 'id' => 'CRM AI Assistant'],
                            'desc' => ['en' => 'Unified AI-based applicant (PPDB/PMB) management platform designed for schools, foundations, and multi-unit higher education institutions.', 'id' => 'Platform manajemen penerimaan pendaftar (PPDB/PMB) terpadu berbasis AI yang dirancang untuk sekolah, yayasan, dan perguruan tinggi multi-unit.'],
                        ],
                    ];
                @endphp

                <div class="flex flex-wrap justify-center gap-gutter">
                    @foreach ($capabilities as $cap)
                        <div
                            class="w-full sm:w-[calc(50%-12px)] lg:w-[397.33px] h-auto sm:min-h-[250.33px] bg-white rounded-[12px] border border-primary p-unit-lg flex flex-col justify-between shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
                            <div class="space-y-unit-md">
                                <div class="w-10 h-10 rounded-[10px] bg-primary/10 flex items-center justify-center">
                                    <span
                                        class="material-symbols-outlined text-primary text-[22px]">{{ $cap['icon'] }}</span>
                                </div>
                                <h3 class="font-headline-h3 text-[24px] font-semibold text-on-background leading-tight">
                                    {{ $cap['title'][$locale] }}
                                </h3>
                                <p class="text-[16px] text-on-surface-variant leading-snug">
                                    {{ $cap['desc'][$locale] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

    @include('partials.footer')
    @include('partials.lenis-scroll')

    <script>
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header.fixed');

            if (!header) {
                return;
            }

            if (window.scrollY > 20) {
                header.classList.add('shadow-md', 'h-16');
                header.classList.remove('h-20');
            } else {
                header.classList.remove('shadow-md', 'h-16');
                header.classList.add('h-20');
            }
        });

        // Hero Section — animated / interactive IT network background.
        (function () {
            const canvas = document.getElementById('hero-network');
            const section = document.getElementById('hero');
            if (!canvas || !section) return;

            const ctx = canvas.getContext('2d', {
                alpha: true
            });
            const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            const NODE_COLORS = ['18, 174, 208', '167, 244, 50'];
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

        // Hero Section — background theme carousel. Auto-advances, pauses when not in view.
        (function () {
            const section = document.getElementById('hero');
            const carousel = document.getElementById('hero-carousel');
            if (!section || !carousel) return;

            const slides = Array.from(carousel.querySelectorAll('.hero-carousel-slide'));
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
                current = nextIndex;
                slides[current].classList.add('is-active');
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

            section.addEventListener('mouseenter', stopAuto);
            section.addEventListener('mouseleave', () => {
                if (inViewport && !document.hidden) startAuto();
            });
            section.addEventListener('focusin', stopAuto);
            section.addEventListener('focusout', () => {
                if (inViewport && !document.hidden) startAuto();
            });

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
</body>

</html>
