<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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

        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }

        .bento-item {
            border: 1px solid #12AED0;
            transition: all 0.3s ease;
        }

        .bento-item:hover {
            border-color: #12AED0;
        }

        /* SOCIAL PROOF STATS - Nakala Slogans */
        .stat-card {
            text-align: center;
        }

        .stat-slogan {
            font-weight: 700;
            color: #12AED0;
            line-height: 1.2;
        }

        /* MOBILE (< 768px) */
        @media (max-width: 767px) {
            .stat-card {
                padding: 24px 16px;
                border-bottom: 1px solid #12AED0;
            }

            .stat-card:last-child {
                border-bottom: none;
            }

            .stat-slogan {
                font-size: 18px;
            }
        }

        /* TABLET (768px - 1024px) */
        @media (min-width: 768px) and (max-width: 1024px) {
            .stat-card {
                padding: 16px;
            }

            .stat-slogan {
                font-size: 20px;
            }
        }

        /* DESKTOP (> 1024px) */
        @media (min-width: 1025px) {
            .stat-card {
                padding: 24px 16px;
            }

            .stat-slogan {
                font-size: 22px;
            }
        }

        /* SOCIAL PROOF - Scroll Animation */
        @keyframes marquee {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-50%); }
        }

        .animate-marquee {
            animation: marquee 20s linear infinite;
        }

        /* SMALL MOBILE (Ã¢â€°Â¤400px) Ã¢â‚¬â€ Hero readability fix */
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
                linear-gradient(rgba(18, 174, 208, 0.10) 1px, transparent 1px),
                linear-gradient(90deg, rgba(18, 174, 208, 0.10) 1px, transparent 1px);
            background-size: 44px 44px;
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

        .hero-carousel-dots {
            position: absolute;
            left: 50%;
            bottom: 18px;
            transform: translateX(-50%);
            display: flex;
            align-items: center;
            gap: 8px;
            z-index: 20;
        }

        .hero-carousel-dot {
            width: 8px;
            height: 8px;
            border-radius: 9999px;
            border: none;
            padding: 0;
            background: rgba(3, 26, 68, 0.25);
            cursor: pointer;
            transition: width 0.3s ease, background-color 0.3s ease;
        }

        .hero-carousel-dot.is-active {
            width: 26px;
            background: #12AED0;
        }

        .hero-carousel-dot:focus-visible {
            outline: 2px solid #12AED0;
            outline-offset: 2px;
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

        /* --- CAROUSEL SPLIT AI (Panel Kiri & Kanan) --- */
        .panel-slice {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .panel-slice:hover {
            flex-grow: 1.5;
            filter: grayscale(0%);
            opacity: 1;
        }

        .panel-slice {
            transition: flex-grow 0.6s cubic-bezier(0.4, 0, 0.2, 1),
                filter 0.6s ease,
                opacity 0.6s ease;
        }

        .panel-slice.is-expanded,
        .panel-slice:hover {
            flex-grow: 3 !important;
            filter: grayscale(0%) !important;
            opacity: 1 !important;
        }

    </style>

    <style>
        .heroSwiper .swiper-slide {
            opacity: 0.25;
            transform: scale(0.9);
            transition: all 0.5s ease;
        }

        .heroSwiper .swiper-slide-active {
            opacity: 1;
            transform: scale(1);
        }
    </style>
</head>

<body class="bg-background text-on-background font-body-md selection:bg-primary-fixed selection:text-on-primary-fixed">
    @include('partials.navbar')
    <main class="pt-20">
        <section id="hero"
            class="relative overflow-hidden bg-gradient-to-br from-surface-container-lowest via-surface to-primary/5 pt-unit-lg pb-unit-xl lg:pt-unit-xl lg:pb-32 border-b border-outline-variant">
            {{-- IT / digital-transformation themed background --}}

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
                class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 lg:grid-cols-2 gap-unit-xl items-center">
                <div class="space-y-unit-lg z-10">
                    <div
                        class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-4 py-1.5 rounded-full font-label-sm text-label-sm uppercase tracking-widest">
                        <span class="material-symbols-outlined text-[16px]">bolt</span>
                        {{ __('messages.hero_badge') }}
                    </div>
                    <h1
                        class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-on-background max-w-2xl hero-heading">
                        @php $heroHighlight = app()->getLocale() === 'en' ? 'Business Growth' : 'Pertumbuhan Bisnis'; @endphp
                        {!! str_replace(
                            $heroHighlight,
                            '<span class="text-primary">' . $heroHighlight . '</span>',
                            __('messages.hero_title'),
                        ) !!}
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl hero-desc">
                        {{ __('messages.hero_desc') }}
                    </p>
                    <div class="flex items-center gap-3 pt-2">
                        <div
                            class="inline-flex items-center gap-2 border border-outline-variant bg-surface-container px-4 py-2 rounded-full">
                            <img alt="Romulus Digital" class="h-4 object-contain"
                                src="{{ asset('assets/romulus-birumuda.png') }}" />
                            <span class="font-label-sm text-on-surface-variant text-xs tracking-[0.12em] uppercase">
                                {{ __('messages.hero_support_line') }}
                            </span>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-unit-md pt-unit-md">
                        @php $localeSuffix = app()->getLocale() === 'en' ? '.en' : ''; @endphp

                        {{-- Tombol Utama (Primary CTA) --}}
                        <a href="{{ route('contact' . $localeSuffix) }}"
                            class="inline-flex items-center justify-center text-center bg-primary-container text-on-primary-container px-8 py-4 rounded-[20px] font-button text-base uppercase tracking-widest shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300 ease-out hero-btn">
                            {{ app()->getLocale() === 'en' ? 'Contact Us' : 'Hubungi Kami' }}
                        </a>

                        {{-- Tombol Kedua (Outline/Secondary CTA) --}}
                        <a href="{{ route('services' . $localeSuffix) }}"
                            class="inline-flex items-center justify-center text-center border-2 border-on-secondary-fixed text-on-secondary-fixed px-8 py-4 rounded-[20px] font-button text-base uppercase tracking-widest hover:bg-surface-container-high hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300 ease-out hero-btn">
                            {{ app()->getLocale() === 'en' ? 'View Our Services' : 'Lihat Layanan' }}
                        </a>
                    </div>
                </div>

                <!-- CONTAINER CAROUSEL SPLIT (KANAN HERO) -->
                <div class="relative w-full overflow-hidden">
                    <div class="absolute -inset-4 bg-primary/5 rounded-xl blur-3xl opacity-50 pointer-events-none">
                    </div>

                    <div class="swiper heroSwiper relative h-[380px] md:h-[450px] w-full items-center">
                        <div class="swiper-wrapper">

                            <div
                                class="swiper-slide !w-[75%] md:!w-[70%] rounded-2xl overflow-hidden shadow-xl border border-outline-variant relative group">
                                <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=800&q=80"
                                    alt="AI & GenAI" class="w-full h-full object-cover">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-midnight-navy/80 via-transparent to-transparent flex flex-col justify-end p-6 text-center">
                                    <h3
                                        class="text-white text-xl md:text-2xl font-semibold tracking-widest uppercase mb-1">
                                        AI & GenAI</h3>
                                    <p class="text-electric-cyan text-xs tracking-wider uppercase font-medium">Solutions</p>
                                </div>
                            </div>

                            <div
                                class="swiper-slide !w-[75%] md:!w-[70%] rounded-2xl overflow-hidden shadow-xl border border-outline-variant relative group">
                                <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=800&q=80"
                                    alt="Software Development" class="w-full h-full object-cover">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-midnight-navy/80 via-transparent to-transparent flex flex-col justify-end p-6 text-center">
                                    <h3
                                        class="text-white text-xl md:text-2xl font-semibold tracking-widest uppercase mb-1">
                                        Software Dev</h3>
                                    <p class="text-electric-cyan text-xs tracking-wider uppercase font-medium">
                                        Development</p>
                                </div>
                            </div>

                            <div
                                class="swiper-slide !w-[75%] md:!w-[70%] rounded-2xl overflow-hidden shadow-xl border border-outline-variant relative group">
                                <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?auto=format&fit=crop&w=800&q=80"
                                    alt="Cloud Security" class="w-full h-full object-cover">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-midnight-navy/80 via-transparent to-transparent flex flex-col justify-end p-6 text-center">
                                    <h3
                                        class="text-white text-xl md:text-2xl font-semibold tracking-widest uppercase mb-1">
                                        Cyber Security</h3>
                                    <p class="text-electric-cyan text-xs tracking-wider uppercase font-medium">
                                        Protection</p>
                                </div>
                            </div>

                            <div
                                class="swiper-slide !w-[75%] md:!w-[70%] rounded-2xl overflow-hidden shadow-xl border border-outline-variant relative group">
                                <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=800&q=80"
                                    alt="Data Analytics" class="w-full h-full object-cover">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-midnight-navy/80 via-transparent to-transparent flex flex-col justify-end p-6 text-center">
                                    <h3
                                        class="text-white text-xl md:text-2xl font-semibold tracking-widest uppercase mb-1">
                                        Data Infrastructure</h3>
                                    <p class="text-electric-cyan text-xs tracking-wider uppercase font-medium">Analytics”</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>

        @include('partials.partner-badge')

        <!-- Social Proof Metrics -->
        <section class="py-unit-lg bg-surface overflow-hidden">
            <div class="flex w-[200%] md:w-[150%] lg:w-[120%] animate-marquee">
                <!-- Group 1 -->
                <div class="flex-1 flex justify-around items-center min-w-[50%]">
                    <div class="stat-card">
                        <div class="stat-slogan">󠁯Professional Delivery</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-slogan">󠁯Meaningful Solutions</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-slogan">Impactful Growth</div>
                    </div>
                </div>
                <!-- Group 2 (Duplicate for smooth infinite scroll) -->
                <div class="flex-1 flex justify-around items-center min-w-[50%]">
                    <div class="stat-card">
                        <div class="stat-slogan">󠁯Professional Delivery</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-slogan">󠁯Meaningful Solutions</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-slogan">Impactful Growth</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Capabilities Bento Grid -->
        <section class="py-unit-xl bg-surface-container-low">
            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="mb-unit-xl max-w-2xl">
                    <span
                        class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">{{ app()->getLocale() === 'en' ? 'Capability Reference' : 'Referensi Kapabilitas' }}</span>
                    <h2
                        class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-background mb-unit-md">
                        {{ __('messages.cap_title') }}</h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant">{{ __('messages.cap_desc') }}</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
                    <!-- Bento Item 1 -->
                    <div
                        class="md:col-span-8 bg-surface-container-lowest p-unit-lg rounded-[20px] border border-outline-variant flex flex-col justify-between group hover:border-primary-container transition-all">
                        <div class="space-y-unit-md">
                            <span class="material-symbols-outlined text-primary text-4xl"
                                data-weight="fill">settings_suggest</span>
                            <h3 class="font-headline-h3 text-headline-h3">{{ __('messages.cap_software') }}</h3>
                            <p class="font-body-md text-on-surface-variant max-w-md">
                                {{ __('messages.cap_software_desc') }}</p>
                        </div>
                        <div class="mt-unit-lg">
                            <ul class="grid grid-cols-2 gap-unit-sm">
                                <li class="flex items-center gap-unit-xs text-on-surface-variant"><span
                                        class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                    {{ app()->getLocale() === 'en' ? 'Web Apps' : 'Aplikasi Web' }}</li>
                                <li class="flex items-center gap-unit-xs text-on-surface-variant"><span
                                        class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                    {{ app()->getLocale() === 'en' ? 'Mobile Native' : 'Mobile Native' }}</li>
                                <li class="flex items-center gap-unit-xs text-on-surface-variant"><span
                                        class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                    {{ app()->getLocale() === 'en' ? 'API Integration' : 'Integrasi API' }}</li>
                                <li class="flex items-center gap-unit-xs text-on-surface-variant"><span
                                        class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                    {{ app()->getLocale() === 'en' ? 'Legacy Migration' : 'Migrasi Sistem' }}</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Bento Item 2 -->
                    <div
                        class="md:col-span-4 bg-on-secondary-fixed p-unit-lg rounded-[20px] text-on-secondary border border-transparent hover:border-primary-fixed-dim transition-all">
                        <div class="h-full flex flex-col justify-between">
                            <div class="space-y-unit-md">
                                <span class="material-symbols-outlined text-tertiary-fixed text-4xl">psychology</span>
                                <h3 class="font-headline-h3 text-headline-h3">{{ __('messages.cap_ai') }}</h3>
                                <p class="font-body-md text-secondary-fixed">{{ __('messages.cap_ai_desc') }}</p>
                            </div>
                            <div class="bg-surface-container-lowest/10 p-unit-md rounded mt-unit-lg">
                                <span
                                    class="font-label-sm text-tertiary-fixed uppercase">{{ app()->getLocale() === 'en' ? 'Strategic Focus' : 'Fokus Strategis' }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Bento Item 3 -->
                    <div
                        class="md:col-span-4 bg-[#A7F432] text-[#031A44] p-unit-lg rounded-[20px] border border-outline-variant group hover:opacity-90 transition-all">
                        <span class="material-symbols-outlined text-[#031A44] text-4xl mb-unit-md">query_stats</span>
                        <h3 class="font-headline-h3 text-headline-h3 mb-unit-sm">{{ __('messages.cap_consulting') }}
                        </h3>
                        <p class="font-body-md opacity-90">{{ __('messages.cap_consulting_desc') }}</p>
                    </div>
                    <!-- Bento Item 4 -->
                    <div
                        class="md:col-span-8 bg-primary p-unit-lg rounded-[20px] text-white relative overflow-hidden flex items-center">
                        <div class="z-10 space-y-unit-md">
                            <h3 class="font-headline-h2-mobile text-white">{{ __('messages.cap_local_title') }}</h3>
                            <p class="font-body-lg text-white/90 max-w-lg">{{ __('messages.cap_local_desc') }}</p>
                        </div>
                        <div class="absolute right-[-10%] top-[-10%] opacity-10">
                            <span class="material-symbols-outlined text-[300px]">language</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About / Narrative Section -->
        <section class="py-unit-xl bg-surface-container-lowest">
            <div
                class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 lg:grid-cols-2 gap-unit-xl items-center">
                <div class="order-2 lg:order-1">
                    <img alt="Nakala Digital Team Collaboration"
                        class="rounded-[20px] shadow-xl grayscale hover:grayscale-0 transition-all duration-700"
                        data-alt="A diverse group of professional software engineers and digital consultants collaborating in a sleek, minimalist office environment with floor-to-ceiling glass windows. The lighting is crisp and natural, emphasizing a bright, light-mode corporate aesthetic. They are working around a large table with modern laptops, reflecting a mood of technical rigor and collaborative problem-solving. The scene uses a palette of whites, cool greys, and subtle electric cyan accents."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIkKof9jfTV3ZLWx_WT91Cn9j9BwU7L7iRjUW8s1_CpNFUfxi-TxWpYXf4MN9di_-4rUJf_qv_npecCOhWJGdWvG-oJ9ed48cN99fs4UaCdjYRQmYsUgEjNPeA54mlQTk71PJzoRl54GfT46lqT1VAFHs063ifm6xPl595wy6lf2epw0d4JJRnhAVc7P-QdGRxKrS_qvU4NK1q6jvMKydHVH4hwGa-RIzInomT87uNg9wwwpDupaYwgxaNy0SKFyD7MXIVWIGO_g8O" />
                </div>
                <div class="order-1 lg:order-2 space-y-unit-lg">
                    <span
                        class="font-label-sm text-primary uppercase tracking-[0.3em]">{{ app()->getLocale() === 'en' ? 'Solution Highlight' : 'Sorotan Solusi' }}</span>
                    <h2
                        class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-background">
                        {{ __('messages.who_title') }}</h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant">
                        {{ __('messages.who_desc1') }}
                    </p>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        {{ __('messages.who_desc2') }}
                    </p>
                    <div class="grid grid-cols-2 gap-unit-md border-l-4 border-primary pl-unit-md">
                        <div class="flex items-center h-full">
                            <span
                                class="font-label-sm text-on-surface-variant uppercase">{{ __('messages.who_local_commit') }}</span>
                        </div>
                        <div>
                            <span class="block font-headline-h3 text-on-background">ISO</span>
                            <span
                                class="font-label-sm text-on-surface-variant uppercase">{{ __('messages.who_iso') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ Section -->
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
                    @include('partials.faq-accordion', [
                        'items' => collect([
                            ['question' => __('messages.faq_services_q'), 'answer' => __('messages.faq_services_a')],
                            ['question' => __('messages.faq_security_q'), 'answer' => __('messages.faq_security_a')],
                            ['question' => __('messages.faq_romulus_q'), 'answer' => __('messages.faq_romulus_a')],
                            ['question' => __('messages.faq_support_q'), 'answer' => __('messages.faq_support_a')],
                            ['question' => __('messages.faq_timeline_q'), 'answer' => __('messages.faq_timeline_a')],
                            ['question' => __('messages.faq_engagement_q'), 'answer' => __('messages.faq_engagement_a')],
                            ['question' => __('messages.faq_contact_q'), 'answer' => __('messages.faq_contact_a')],
                        ]),
                        'columns' => 1,
                        'itemClass' => 'bg-white border border-primary rounded-[25px] px-6 py-5 transition-all shadow-sm',
                        'questionClass' => 'font-headline-h3 text-lg text-on-surface',
                        'answerClass' => 'pt-4 font-body-md text-on-surface-variant',
                    ])
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
        <!-- Final CTA -->
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
                <h2 class="font-headline-h1-mobile text-headline-h1-mobile text-white">
                    {{ __('messages.final_cta_title') }}</h2>
                <p class="font-body-lg text-white/90">{{ __('messages.final_cta_desc') }}</p>
                <div class="pt-unit-md">
                    <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}"
                        class="inline-block bg-tertiary-fixed text-on-tertiary-fixed px-12 py-6 rounded-[20px] font-button text-xl rounded-[20px] uppercase tracking-widest shadow-xl hover:scale-105 transition-transform active:scale-100">
                        {{ app()->getLocale() === 'en' ? 'Schedule a Discovery Session' : 'Jadwalkan Sesi Discovery' }}
                    </a>
                </div>
            </div>
        </section>
    </main>
    @include('partials.footer')
    @include('partials.lenis-scroll')
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

        // Logika Auto-Play & Hover Interaktif untuk Split Carousel Kanan
        (function() {
            const container = document.getElementById('split-accordion-container');
            if (!container) return;

            const slices = Array.from(container.querySelectorAll('.panel-slice'));
            let currentIndex = 0;
            let autoPlayTimer = null;
            const INTERVAL_MS = 3000; // Berganti setiap 3 detik

            function activateSlice(index) {
                slices.forEach((slice, idx) => {
                    if (idx === index) {
                        slice.classList.add('is-expanded');
                    } else {
                        slice.classList.remove('is-expanded');
                    }
                });
            }

            function nextSlice() {
                currentIndex = (currentIndex + 1) % slices.length;
                activateSlice(currentIndex);
            }

            function startAutoPlay() {
                if (!autoPlayTimer) {
                    autoPlayTimer = setInterval(nextSlice, INTERVAL_MS);
                }
            }

            function stopAutoPlay() {
                clearInterval(autoPlayTimer);
                autoPlayTimer = null;
            }

            // Jalankan siklus pertama saat halaman dimuat
            activateSlice(currentIndex);
            startAutoPlay();

            // Interaksi Hover Kursor
            slices.forEach((slice, index) => {
                slice.addEventListener('mouseenter', () => {
                    stopAutoPlay();
                    currentIndex = index;
                    activateSlice(currentIndex);
                });
            });

            container.addEventListener('mouseleave', () => {
                startAutoPlay();
            });
        })();
    
        // Hero Section Ã¢â‚¬â€ animated / interactive IT network background.
        // Lightweight canvas particle-network (represents connectivity, data & AI)
        // that stays behind the headline/CTA and never blocks pointer events.
        (function() {
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
        (function() {
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

        // carousel
        document.addEventListener('DOMContentLoaded', () => {
        const swiper = new Swiper('.heroSwiper', {
            loop: true,
            className: 'swiper-container',
            slidesPerView: 'auto',       // Membuat lebar slide mengikuti class CSS (!w-[75%])
            centeredSlides: true,        // Slide aktif otomatis berada di tengah frame
            spaceBetween: 20,            // Jarak antar slide gambar
            grabCursor: true,            // Kursor tangan saat di-drag
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
        });
    });
    </script>
</body>

</html>
