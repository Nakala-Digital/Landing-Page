<!DOCTYPE html>
@php $localeSuffix = app()->getLocale() === 'en' ? '.en' : ''; @endphp

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
    ? 'Nakala AI Assistant | Nakala Digital'
    : 'Asisten AI Nakala | Nakala Digital' }}
    </title>
    @include('partials.seo', [
        'title' =>
            app()->getLocale() === 'en'
            ? 'Nakala AI Assistant | Nakala Digital'
            : 'Asisten AI Nakala | Nakala Digital',
        'description' =>
            app()->getLocale() === 'en'
            ? 'Meet Nakala AI, your intelligent assistant embedded across admissions, learning, payments, and operations for education institutions.'
            : 'Kenali Nakala AI, asisten cerdas yang hadir di setiap titik layanan pendidikan: penerimaan, pembelajaran, pembayaran, hingga operasional.',
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

    {{-- Section 1 : Ekosistem Pendidikan Berdaya AI --}}
    <main class="pt-20">
        <div class="md:flex md:flex-col lg:min-h-0 lg:block">
            <section id="hero"
                class="relative overflow-hidden bg-gradient-to-br from-surface-container-lowest via-surface to-primary/[0.08] pt-unit-md sm:pt-unit-lg lg:pt-unit-md pb-unit-xl sm:pb-unit-xl lg:pb-unit-lg border-b md:flex-1 lg:flex-none">

                {{-- IT / digital-transformation themed background --}}
                <div id="hero-carousel" class="hero-carousel pointer-events-none" aria-hidden="true">
                    <div class="hero-carousel-slide slide-ai">
                        <span class="material-symbols-outlined slide-icon">smart_toy</span>
                    </div>
                    <div class="hero-carousel-slide slide-data">
                        <span class="material-symbols-outlined slide-icon">monitoring</span>
                    </div>
                    <div class="hero-carousel-slide slide-cloud">
                        <span class="material-symbols-outlined slide-icon">cloud</span>
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
                                <span
                                    class="material-symbols-outlined text-on-tertiary-fixed text-[22px]">smart_toy</span>
                                {{ app()->getLocale() === 'en' ? 'AI-Powered Education Assistant' : 'AI Assistant' }}
                            </div>
                        </div>

                        {{-- Hero Title --}}
                        <h1
                            class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-on-background max-w-6xl text-start hero-heading md:max-w-auto lg:max-w-6xl">
                            @if (app()->getLocale() === 'en')
                                <span class="block">One AI Assistant for</span>
                                <span class="block">Every <span class="text-primary">Educational</span></span>
                                <span class="block text-primary">Journey</span>
                            @else
                                <span class="block">Satu AI Assistant untuk</span>
                                <span class="block">Setiap <span class="text-primary">Perjalanan</span></span>
                                <span class="block text-primary">Pendidikan</span>
                            @endif
                        </h1>

                        {{-- Hero Description --}}
                        <p
                            class="font-body-lg text-body-lg text-on-surface-variant max-w-xl text-start hero-desc md:max-w-full lg:max-w-xl">
                            {!! app()->getLocale() === 'en'
    ? 'Nakala Digital AI Assistant lives inside every system — not a separate chatbot. It understands user context, guides processes, records activity, and knows when to hand the conversation to a human agent.'
    : 'AI Assistant Nakala Digital hadir di setiap sistem, bukan chatbot terpisah tetapi memahami konteks pengguna, memandu proses, mencatat aktivitas, dan tahu kapan harus menyerahkan percakapan kepada petugas manusia.' !!}
                        </p>
                    </div>

                    {{-- RIGHT: Hero Image --}}
                    <img src="{{ asset('assets/Chat Mockup.png') }}"
                        class="hidden lg:block z-10 w-full max-w-[640px] lg:w-1/2 h-auto object-contain self-center"
                        alt="Nakala AI Assistant">
                </div>

                {{-- Bottom fade into next section --}}
                <div class="absolute inset-x-0 bottom-0 h-28 bg-gradient-to-t from-white via-white/70 to-transparent pointer-events-none"
                    aria-hidden="true"></div>
            </section>
        </div>

        {{-- Section 2 : Integrated AI Architecture --}}
        <section id="ai-architecture" class="py-unit-xl bg-on-primary scroll-mt-24">
            <div class="max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="mb-unit-xl items-center justify-center text-center">
                    <span class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">{{ app()->getLocale() === 'en'
    ? 'Architecture'
    : 'Referensi Kapabilitas' }}</span>
                    <h2
                        class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-background">
                        {{ app()->getLocale() === 'en' ? 'Integrated AI Architecture' : 'Arsitektur AI Terintegrasi' }}
                    </h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant mt-unit-md">
                        {{ app()->getLocale() === 'en'
    ? 'A system seamlessly connected across every layer of your educational institution, ensuring intelligent and secure information flow.'
    : 'Sistem yang terhubung mulus di seluruh lapisan institusi pendidikan Anda, memastikan alur informasi yang cerdas dan aman.' }}
                    </p>
                </div>

                <div class="relative">
                    <div class="absolute z-0 top-0 bottom-0 w-[3px] left-[19px] md:left-1/2 md:-translate-x-1/2 bg-[#12AED0]"
                        aria-hidden="true"></div>

                    {{-- 1. Kanal / Channels (left) --}}
                    <div class="relative grid grid-cols-1 md:grid-cols-[1fr_auto_1fr] items-center gap-y-8 md:gap-x-10">
                        <div class="pl-14 md:justify-self-end md:col-start-1 md:pr-16">
                            <div
                                class="bg-white p-unit-md rounded-[20px] border border-outline-variant shadow-sm w-full max-w-[378px] min-h-[198px] flex flex-col relative">
                                <div class="flex items-center gap-unit-md mb-unit-sm pl-6 translate-y-5">
                                    <div
                                        class="h-11 w-11 rounded-[100px] bg-primary/10 flex items-center justify-center shrink-0">
                                        <span class="material-symbols-outlined text-primary text-[25px]">devices</span>
                                    </div>
                                    <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                                        {{ app()->getLocale() === 'en' ? 'Channels' : 'Kanal' }}
                                    </h3>
                                </div>
                                <p
                                    class="font-body-md text-[18px] text-on-surface-variant md:absolute md:inset-x-0 md:top-[70%] md:-translate-y-1/2 pl-12 pr-unit-md text-left mt-unit-sm">
                                    {{ app()->getLocale() === 'en'
    ? 'Website, portal, app, WhatsApp, and internal dashboard.'
    : 'Website, portal, aplikasi, WhatsApp, dan dashboard internal.' }}
                                </p>
                            </div>
                        </div>
                        <div
                            class="absolute z-10 h-5 w-5 rounded-full bg-white border-[3px] border-[#12AED0] shadow-sm left-[10px] md:static md:col-start-2 md:left-auto md:translate-x-0">
                        </div>
                        <div class="hidden md:block md:col-start-3"></div>
                    </div>

                    {{-- 2. AI Core (right) --}}
                    <div class="relative grid grid-cols-1 md:grid-cols-[1fr_auto_1fr] items-center gap-y-8 md:gap-x-10">
                        <div class="hidden md:block md:col-start-1"></div>
                        <div
                            class="absolute z-10 h-5 w-5 rounded-full bg-white border-[3px] border-[#12AED0] shadow-sm left-[10px] md:static md:col-start-2 md:left-auto md:translate-x-0">
                        </div>
                        <div class="pl-14 md:pl-16 md:col-start-3">
                            <div
                                class="bg-white p-unit-md rounded-[20px] border border-outline-variant shadow-sm w-full max-w-[378px] min-h-[198px] flex flex-col relative">
                                <div class="flex items-center gap-unit-md mb-unit-sm pl-6 translate-y-5">
                                    <div
                                        class="h-11 w-11 rounded-[100px] bg-primary/10 flex items-center justify-center shrink-0">
                                        <span class="material-symbols-outlined text-primary text-2xl">group</span>
                                    </div>
                                    <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                                        {{ app()->getLocale() === 'en' ? 'Users' : 'Pengguna' }}
                                    </h3>
                                </div>
                                <p
                                    class="font-body-md text-[18px] text-on-surface-variant md:absolute md:inset-x-0 md:top-[70%] md:-translate-y-1/2 pl-12 pr-unit-md text-left mt-unit-sm">
                                    {{ app()->getLocale() === 'en'
    ? 'Prospective Students, Parents, Students, Teachers & Lecturers, Admin, Management.'
    : 'Calon Siswa/Mhs, Orang Tua, Siswa/Mhs, Guru/Dosen, Admin, Manajemen.' }}
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- 3. Data Integration (left) --}}
                    <div class="relative grid grid-cols-1 md:grid-cols-[1fr_auto_1fr] items-center gap-y-8 md:gap-x-10">
                        <div class="pl-14 md:justify-self-end md:col-start-1 md:pr-16">
                            <div
                                class="bg-white p-unit-md rounded-[20px] border border-outline-variant shadow-sm w-full max-w-[378px] min-h-[198px] flex flex-col relative">
                                <div class="flex items-center gap-unit-md mb-unit-sm pl-6 translate-y-5">
                                    <div
                                        class="h-11 w-11 rounded-[100px] bg-primary/10 flex items-center justify-center shrink-0">
                                        <span class="material-symbols-outlined text-primary text-2xl">smart_toy</span>
                                    </div>
                                    <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                                        AI Assistant
                                    </h3>
                                </div>
                                <p
                                    class="font-body-md text-[18px] text-on-surface-variant md:absolute md:inset-x-0 md:top-[70%] md:-translate-y-1/2 pl-12 pr-unit-md text-left mt-unit-sm">
                                    Knowledge Retrieval, Guidance, Summary, Reminder, Action, Orchestration, Human
                                    handoff.
                                </p>
                            </div>
                        </div>
                        <div
                            class="absolute z-10 h-5 w-5 rounded-full bg-white border-[3px] border-[#12AED0] shadow-sm left-[10px] md:static md:col-start-2 md:left-auto md:translate-x-0">
                        </div>
                        <div class="hidden md:block md:col-start-3"></div>
                    </div>

                    {{-- 4. Security & Privacy (right) --}}
                    <div class="relative grid grid-cols-1 md:grid-cols-[1fr_auto_1fr] items-center gap-y-8 md:gap-x-10">
                        <div class="hidden md:block md:col-start-1"></div>
                        <div
                            class="absolute z-10 h-5 w-5 rounded-full bg-white border-[3px] border-[#12AED0] shadow-sm left-[10px] md:static md:col-start-2 md:left-auto md:translate-x-0">
                        </div>
                        <div class="pl-14 md:pl-16 md:col-start-3">
                            <div
                                class="bg-white p-unit-md rounded-[20px] border border-outline-variant shadow-sm w-full max-w-[378px] min-h-[198px] flex flex-col relative">
                                <div class="flex items-center gap-unit-md mb-unit-sm pl-6 translate-y-5">
                                    <div
                                        class="h-11 w-11 rounded-[100px] bg-primary/10 flex items-center justify-center shrink-0">
                                        <span class="material-symbols-outlined text-primary text-2xl">dns</span>
                                    </div>
                                    <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                                        {{ app()->getLocale() === 'en' ? 'Systems' : 'Sistem' }}
                                    </h3>
                                </div>
                                <p
                                    class="font-body-md text-[18px] text-on-surface-variant md:absolute md:inset-x-0 md:top-[70%] md:-translate-y-1/2 pl-12 pr-unit-md text-left mt-unit-sm">
                                    PPDB/PMB, Portal, LMS, SIAKAD, Finance, HRIS, CRM, Helpdesk, Dashboard.
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- 5. Pengguna / Users (left) --}}
                    <div class="relative grid grid-cols-1 md:grid-cols-[1fr_auto_1fr] items-center gap-y-8 md:gap-x-10">
                        <div class="pl-14 md:justify-self-end md:col-start-1 md:pr-16">
                            <div
                                class="bg-white p-unit-md rounded-[20px] border border-outline-variant shadow-sm w-full max-w-[378px] min-h-[198px] flex flex-col relative">
                                <div class="flex items-center gap-unit-md mb-unit-sm pl-6 translate-y-5">
                                    <div
                                        class="h-11 w-11 rounded-[100px] bg-primary/10 flex items-center justify-center shrink-0">
                                        <span
                                            class="material-symbols-outlined text-primary text-2xl">account_balance</span>
                                    </div>
                                    <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                                        Governance
                                    </h3>
                                </div>
                                <p
                                    class="font-body-md text-[18px] text-on-surface-variant md:absolute md:inset-x-0 md:top-[70%] md:-translate-y-1/2 pl-12 pr-unit-md text-left mt-unit-sm">
                                    Role-based Access, Audit Trail, Data isolation, Approval, Logging, Monitoring.
                                </p>
                            </div>
                        </div>
                        <div
                            class="absolute z-10 h-5 w-5 rounded-full bg-white border-[3px] border-[#12AED0] shadow-sm left-[10px] md:static md:col-start-2 md:left-auto md:translate-x-0">
                        </div>
                        <div class="hidden md:block md:col-start-3"></div>
                    </div>
                </div>
            </div>
        </section>

        @php
            $solutions = [
                [
                    'id' => 'prospective',
                    'icon' => 'school',
                    'id_title' => 'AI Admission Assistant',
                    'en_title' => 'AI Admission Assistant',
                    'id_tab' => 'Calon Siswa/Mahasiswa',
                    'en_tab' => 'Prospective Students',
                    'id_desc' => 'Membantu calon siswa mendapatkan informasi program, biaya, persyaratan, status, dokumen, reminder, dan eskalasi ke admission officer secara otomatis.',
                    'en_desc' => 'Helps prospective students get information on programs, fees, requirements, status, documents, reminders, and automatic escalation to admission officers.'
                ],
                [
                    'id' => 'parents',
                    'icon' => 'family_home',
                    'id_title' => 'AI Guardian Companion',
                    'en_title' => 'AI Guardian Companion',
                    'id_tab' => 'Orang Tua',
                    'en_tab' => 'Parents',
                    'id_desc' => 'Memberikan orang tua informasi perkembangan akademik, jadwal kegiatan, tagihan, dan notifikasi penting anak secara real-time.',
                    'en_desc' => 'Gives parents real-time updates on academic progress, activity schedules, fees, and important notifications.'
                ],
                [
                    'id' => 'students',
                    'icon' => 'psychology',
                    'id_title' => 'AI Study Companion',
                    'en_title' => 'AI Study Companion',
                    'id_tab' => 'Siswa/Mahasiswa',
                    'en_tab' => 'Students',
                    'id_desc' => 'Mendampingi siswa dalam tugas, jadwal, materi belajar, dan pelacakan progres belajar.',
                    'en_desc' => 'Assists students with assignments, schedules, learning materials, and study progress tracking.'
                ],
                [
                    'id' => 'teachers',
                    'icon' => 'co_present',
                    'id_title' => 'AI Teacher Assistant',
                    'en_title' => 'AI Teacher Assistant',
                    'id_tab' => 'Guru/Dosen',
                    'en_tab' => 'Teachers & Lecturers',
                    'id_desc' => 'Membantu guru/dosen dalam administrasi kelas, penilaian, kehadiran, dan penyusunan bahan ajar.',
                    'en_desc' => 'Helps teachers and lecturers with class administration, grading, attendance, and lesson preparation.'
                ],
                [
                    'id' => 'admin',
                    'icon' => 'badge',
                    'id_title' => 'AI Admin Helper',
                    'en_title' => 'AI Admin Helper',
                    'id_tab' => 'Admin',
                    'en_tab' => 'Admin',
                    'id_desc' => 'Mengotomatiskan pengarsipan, validasi data, laporan, dan layanan helpdesk internal.',
                    'en_desc' => 'Automates filing, data validation, reports, and internal helpdesk services.'
                ],
                [
                    'id' => 'management',
                    'icon' => 'insights',
                    'id_title' => 'AI Dashboard & Insight',
                    'en_title' => 'AI Dashboard & Insight',
                    'id_tab' => 'Manajemen',
                    'en_tab' => 'Management',
                    'id_desc' => 'Menyajikan insight, laporan, dan rekomendasi strategis untuk pengambilan keputusan manajemen.',
                    'en_desc' => 'Delivers insights, reports, and strategic recommendations for management decision-making.'
                ],
            ];
            $isEn = app()->getLocale() === 'en';
        @endphp

        {{-- Section 3 : Solusi Yang Dirancang --}}
        <section class="py-unit-xl bg-surface-container-lowest">
            <div class="max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="mb-unit-xl max-w-2xl mx-auto text-center">
                    <span
                        class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">{{ $isEn ? 'Capability Reference' : 'Referensi Kapabilitas' }}</span>
                    <h2
                        class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-background">
                        {{ $isEn ? 'Designed Solutions' : 'Solusi yang Dirancang' }}
                    </h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant mt-unit-md">
                        {{ $isEn
    ? 'See how the AI Assistant delivers real value to every stakeholder in your institution.'
    : 'Lihat bagaimana AI Assistant memberikan nilai nyata bagi setiap pemangku kepentingan di institusi Anda.' }}
                    </p>
                </div>

                <div class="flex flex-wrap justify-center gap-[10px] mb-unit-xl" id="solutions-tabs">
                    @foreach ($solutions as $index => $solution)
                        <button type="button" data-solution="{{ $solution['id'] }}"
                            class="solutions-tab px-unit-md h-[47px] rounded-full font-medium text-[14px] border transition-all duration-300 ease-out flex items-center hover:bg-primary hover:text-white hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 {{ $index === 0 ? 'bg-primary text-white border-primary shadow-sm' : 'bg-white text-on-surface-variant border-outline-variant' }}">
                            {{ $isEn ? $solution['en_tab'] : $solution['id_tab'] }}
                        </button>
                    @endforeach
                </div>

                <div class="relative max-w-[768px] mx-auto">
                    @foreach ($solutions as $index => $solution)
                        <div data-solution-panel="{{ $solution['id'] }}"
                            class="solutions-panel {{ $index === 0 ? '' : 'hidden' }}">
                            <div
                                class="bg-white rounded-[20px] border border-outline-variant shadow-sm p-unit-lg min-h-[212px] flex flex-col sm:flex-row items-start sm:items-center gap-unit-md sm:gap-unit-lg">
                                <div class="h-16 w-16 shrink-0 rounded-2xl bg-primary/10 flex items-center justify-center">
                                    <span
                                        class="material-symbols-outlined text-primary text-3xl">{{ $solution['icon'] }}</span>
                                </div>
                                <div>
                                    <h3 class="text-[18px] font-semibold text-on-background mb-unit-xs">
                                        {{ $isEn ? $solution['en_title'] : $solution['id_title'] }}
                                    </h3>
                                    <p class="font-body-md text-[16px] text-on-surface-variant">
                                        {{ $isEn ? $solution['en_desc'] : $solution['id_desc'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <script>
                (function () {
                    const tabs = Array.from(document.querySelectorAll('.solutions-tab'));
                    const panels = Array.from(document.querySelectorAll('.solutions-panel'));
                    const activeCls = ['bg-primary', 'text-white', 'border-primary', 'shadow-sm'];
                    const idleCls = ['bg-white', 'text-on-surface-variant', 'border-outline-variant', 'hover:border-primary'];
                    tabs.forEach((tab) => {
                        tab.addEventListener('click', () => {
                            const id = tab.dataset.solution;
                            tabs.forEach((t) => {
                                t.classList.remove(...activeCls);
                                t.classList.add(...idleCls);
                            });
                            tab.classList.add(...activeCls);
                            tab.classList.remove(...idleCls);
                            panels.forEach((p) => p.classList.toggle('hidden', p.dataset.solutionPanel !== id));
                        });
                    });
                })();
        </script>

        @include('partials.partner-badge')

        {{-- Cakupan Integrasi --}}
        <section class="py-unit-xl bg-white scroll-mt-24">
            <div class="max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="mb-unit-xl max-w-3xl">
                    <span class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">{{ app()->getLocale() === 'en'
    ? 'Integration Coverage'
    : 'Cakupan Integrasi' }}</span>
                    <h2
                        class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-background">
                        {!! app()->getLocale() === 'en' ? 'AI Assistant Integrated into Your Systems' : 'AI Assistant Terintegrasi ke <br> Sistem Anda' !!}
                    </h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant mt-unit-md">
                        {!! app()->getLocale() === 'en'
    ? 'The AI Assistant is not an additional feature, but a smart layer embedded directly into every operational system of your institution.'
    : 'AI Assistant hadir bukan sebagai fitur tambahan, melainkan lapisan cerdas<br> yang tertanam langsung di setiap sistem operasional institusi Anda.' !!}
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
                    <div class="space-y-unit-md">
                        <div
                            class="bg-[#EFF4F7] rounded-r-[20px] border-l-4 border-l-primary shadow-sm p-unit-md min-h-[100px] flex flex-col justify-center">
                            <h3 class="font-headline-h3 text-headline-h3 text-on-background">PPDB/PMB</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
    ? 'Automated document verification and admission Q&A.'
    : 'Otomasi verifikasi berkas dan tanya jawab pendaftaran.' }}
                            </p>
                        </div>
                        <div
                            class="bg-[#EFF4F7] rounded-r-[20px] border-l-4 border-l-secondary shadow-sm p-unit-md min-h-[100px] flex flex-col justify-center">
                            <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                                {{ app()->getLocale() === 'en' ? 'Student / Parent Portal' : 'Portal Siswa / Orang tua' }}
                            </h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
    ? 'Fast access to grades, attendance, and school announcements.'
    : 'Akses cepat ke nilai, absensi, dan pengumuman sekolah.' }}
                            </p>
                        </div>
                        <div
                            class="bg-[#EFF4F7] rounded-r-[20px] border-l-4 border-l-[#A7F432] shadow-sm p-unit-md min-h-[100px] flex flex-col justify-center">
                            <h3 class="font-headline-h3 text-headline-h3 text-on-background">LMS</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
    ? 'LMS summarizes materials and answers students\' academic questions.'
    : 'LMS merangkum materi dan menjawab pertanyaan akademik siswa.' }}
                            </p>
                        </div>
                    </div>

                    <div class="space-y-unit-md">
                        <div
                            class="bg-[#EFF4F7] rounded-r-[20px] border-l-4 border-l-[#A7F432] shadow-sm p-unit-md min-h-[100px] flex flex-col justify-center">
                            <h3 class="font-headline-h3 text-headline-h3 text-on-background">Finance</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
    ? 'Tuition fee information and instant payment confirmation.'
    : 'Informasi tagihan SPP dan konfirmasi pembayaran instan.' }}
                            </p>
                        </div>
                        <div
                            class="bg-[#EFF4F7] rounded-r-[20px] border-l-4 border-l-secondary shadow-sm p-unit-md min-h-[100px] flex flex-col justify-center">
                            <h3 class="font-headline-h3 text-headline-h3 text-on-background">HRIS</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
    ? 'Leave requests and payslip access for teachers & staff.'
    : 'Pengajuan cuti dan akses slip gaji untuk guru & staf.' }}
                            </p>
                        </div>
                        <div
                            class="bg-[#EFF4F7] rounded-r-[20px] border-l-4 border-l-primary shadow-sm p-unit-md min-h-[100px] flex flex-col justify-center">
                            <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                                {{ app()->getLocale() === 'en' ? 'Management Dashboard' : 'Dashboard Manajemen' }}
                            </h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
    ? 'Real-time institution data summary via voice or text commands.'
    : 'Ringkasan data institusi real-time via perintah suara/teks.' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section 4 : Simulasi Alur Percakapan --}}
        <section class="py-unit-xl bg-on-tertiary-fixed scroll-mt-24">
            <div class="max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="grid grid-cols-1 lg:grid-cols-[auto_1fr] gap-y-unit-lg lg:gap-x-[104px] items-center">

                    {{-- Phone Mockup (Kiri) --}}
                    <div class="flex justify-center">
                        <img src="{{ asset('assets/Phone Mockup with Chat.png') }}" alt="Phone Mockup with Chat"
                            class="w-[320px] h-[624px] object-cover" />
                    </div>

                    {{-- Konten (Kanan) --}}
                    <div class="space-y-unit-lg">
                        <h2 class="font-semibold text-[28px] sm:text-[36px] lg:text-[44px] leading-snug text-white">
                            {{ app()->getLocale() === 'en' ? 'Conversation Flow Simulation' : 'Simulasi Alur Percakapan' }}
                        </h2>
                        <p class="font-body-lg text-body-lg text-white">
                            {{ app()->getLocale() === 'en'
    ? 'See how the AI Assistant understands context, retrieves information from official sources, and knows when to hand the conversation over to a human officer.'
    : 'Lihat bagaimana AI Assistant memahami konteks, mengambil informasi dari sumber resmi, dan tahu kapan harus menyerahkan percakapan ke petugas manusia.' }}
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
                            <div
                                class="w-full max-w-[358px] min-h-[70px] bg-primary/10 border-l-4 border-l-primary shadow-sm p-unit-md flex items-center gap-unit-md">
                                <span
                                    class="w-10 h-10 shrink-0 bg-primary text-white rounded-[100px] flex items-center justify-center font-semibold text-sm">01</span>
                                <span
                                    class="font-semibold text-[18px] text-white">{{ app()->getLocale() === 'en' ? 'User Question' : 'Pertanyaan Pengguna' }}</span>
                            </div>
                            <div
                                class="w-full max-w-[358px] min-h-[70px] bg-primary/10 border-l-4 border-l-primary shadow-sm p-unit-md flex items-center gap-unit-md">
                                <span
                                    class="w-10 h-10 shrink-0 bg-primary text-white rounded-[100px] flex items-center justify-center font-semibold text-sm">02</span>
                                <span
                                    class="font-semibold text-[18px] text-white">{{ app()->getLocale() === 'en' ? 'Context & Role Recognition' : 'Pengenalan Kontek & Peran' }}</span>
                            </div>
                            <div
                                class="w-full max-w-[358px] min-h-[70px] bg-primary/10 border-l-4 border-l-primary shadow-sm p-unit-md flex items-center gap-unit-md">
                                <span
                                    class="w-10 h-10 shrink-0 bg-primary text-white rounded-[100px] flex items-center justify-center font-semibold text-sm">03</span>
                                <span
                                    class="font-semibold text-[18px] text-white">{{ app()->getLocale() === 'en' ? 'Retrieval from Official Systems' : 'Pengambilan Sumber dari Sistem Resmi' }}</span>
                            </div>
                            <div
                                class="w-full max-w-[358px] min-h-[70px] bg-primary/10 border-l-4 border-l-primary shadow-sm p-unit-md flex items-center gap-unit-md">
                                <span
                                    class="w-10 h-10 shrink-0 bg-primary text-white rounded-[100px] flex items-center justify-center font-semibold text-sm">04</span>
                                <span
                                    class="font-semibold text-[18px] text-white">{{ app()->getLocale() === 'en' ? 'Guidance or Action' : 'Panduan atau tindakan' }}</span>
                            </div>
                            <div
                                class="w-full max-w-[358px] min-h-[70px] bg-primary/10 border-l-4 border-l-primary shadow-sm p-unit-md flex items-center gap-unit-md">
                                <span
                                    class="w-10 h-10 shrink-0 bg-primary text-white rounded-[100px] flex items-center justify-center font-semibold text-sm">05</span>
                                <span
                                    class="font-semibold text-[18px] text-white">{{ app()->getLocale() === 'en' ? 'Human Handoff to Officer if needed' : 'Human Handoff ke Petugas jika dibutuhkan' }}</span>
                            </div>
                            <div
                                class="w-full max-w-[358px] min-h-[70px] bg-primary/10 border-l-4 border-l-primary shadow-sm p-unit-md flex items-center gap-unit-md">
                                <span
                                    class="w-10 h-10 shrink-0 bg-primary text-white rounded-[100px] flex items-center justify-center font-semibold text-sm">06</span>
                                <span
                                    class="font-semibold text-[18px] text-white">{{ app()->getLocale() === 'en' ? 'Log & Audit Trail Recorded' : 'Log & Audit Trail Tercatat' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section 5 : Keamanan & Kontrol --}}
        <section class="py-unit-xl bg-surface-container-low scroll-mt-24">
            <div class="max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="text-center mb-unit-xl">
                    <span class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">
                        {{ app()->getLocale() === 'en' ? 'SECURITY & CONTROL' : 'KEAMANAN & KONTROL' }}
                    </span>
                    <h2 class="font-semibold text-[28px] sm:text-[36px] lg:text-[44px] leading-snug text-on-background">
                        {{ app()->getLocale() === 'en' ? 'Security and Governance' : 'Keamanan dan Tata Kelola' }}
                    </h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant mt-unit-md">
                        {{ app()->getLocale() === 'en'
    ? 'Every AI Assistant interaction follows data security principles, role-based access control, and an audit trail that is properly accountable to the institution.'
    : 'Setiap interaksi AI Assistant mengikuti prinsip keamanan data, kontrol akses berbasis peran, dan jejak audit yang tepat dipertanggung jawabkan institusi.' }}
                    </p>
                </div>

                {{-- Grid Column --}}
                <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-[400px_400px_400px] gap-x-4 gap-y-6 justify-center">

                    <div
                        class="w-full max-w-[400px] min-h-[110px] bg-white rounded-[20px] border border-primary shadow-sm p-unit-md flex items-center gap-unit-md">
                        <span class="w-12 h-12 shrink-0 bg-primary/10 rounded-[10px] flex items-center justify-center">
                            <svg width="22.5" height="25.63" viewBox="0 0 25 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1 4.285L12.2556 1L23.5 4.285V11.0213C23.4996 14.4735 22.413 17.8381 20.3943 20.6385C18.3756 23.439 15.5269 25.5333 12.2519 26.625C8.9756 25.5338 6.12581 23.4392 4.10631 20.6381C2.08682 17.837 1.00005 14.4713 1 11.0181V4.285Z"
                                    stroke="#12AED0" stroke-width="2" stroke-linejoin="round" />
                                <path d="M6.625 12.875L11 17.25L18.5 9.75" stroke="#12AED0" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span
                            class="font-body-lg text-[16px] text-on-background">{{ app()->getLocale() === 'en' ? 'Answers use official information sources determined by the institution.' : 'Jawaban menggunakan sumber informasi resmi yang ditentukan institusi.' }}</span>
                    </div>

                    <div
                        class="w-full max-w-[400px] min-h-[110px] bg-white rounded-[20px] border border-primary shadow-sm p-unit-md flex items-center gap-unit-md">
                        <span class="w-12 h-12 shrink-0 bg-primary/10 rounded-[10px] flex items-center justify-center">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.7625 25H8.125C6.25 25 4.6 24.375 3.2625 23.0375C1.925 21.725 1.25 20.1125 1.25 18.225C1.25 16.6 1.7375 15.15 2.7125 13.875C3.6635 12.6287 5.02922 11.7641 6.5625 11.4375C7.0875 9.525 8.125 7.975 9.6875 6.7875C11.25 5.625 13.025 5 15 5C17.4375 5 19.5125 5.85 21.2 7.55C22.9 9.2375 23.75 11.3125 23.75 13.75C25.1875 13.9125 26.3875 14.5375 27.325 15.625C28.125 16.5375 28.575 17.575 28.7 18.75H26.2C26.075 18.125 25.8 17.6125 25.3375 17.1625C24.7375 16.55 24 16.25 23.125 16.25H21.25V13.75C21.25 12.025 20.625 10.55 19.425 9.325C18.2125 8.125 16.7375 7.5 15 7.5C13.275 7.5 11.8 8.125 10.575 9.325C9.375 10.55 8.75 12.025 8.75 13.75H8.125C6.9125 13.75 5.8875 14.175 5.0375 15.0375C4.175 15.8875 3.75 16.9125 3.75 18.125C3.75 19.3375 4.175 20.375 5.0375 21.25C5.8875 22.0875 6.9125 22.5 8.125 22.5H11.25C11.25 23.4 11.4375 24.2375 11.7625 25ZM28.75 21.25V23.75H26.25V26.25H23.75V23.75H21C20.5 25.25 19.125 26.25 17.5 26.25C15.375 26.25 13.75 24.625 13.75 22.5C13.75 20.375 15.375 18.75 17.5 18.75C19.125 18.75 20.5 19.75 21 21.25H28.75ZM18.75 22.5C18.75 21.875 18.25 21.25 17.5 21.25C16.75 21.25 16.25 21.875 16.25 22.5C16.25 23.125 16.75 23.75 17.5 23.75C18.25 23.75 18.75 23.125 18.75 22.5Z"
                                    fill="#12AED0" />
                            </svg>
                        </span>
                        <span
                            class="font-body-lg text-[16px] text-on-background">{{ app()->getLocale() === 'en' ? 'Information access follows the roles and rights of users.' : 'Akses informasi mengikuti peran dan hak pengguna.' }}</span>
                    </div>

                    <div
                        class="w-full max-w-[400px] min-h-[110px] bg-white rounded-[20px] border border-primary shadow-sm p-unit-md flex items-center gap-unit-md">
                        <span class="w-12 h-12 shrink-0 bg-primary/10 rounded-[10px] flex items-center justify-center">
                            <svg width="20" height="26.25" viewBox="0 0 20 27" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.5 26.25C1.8125 26.25 1.22417 26.0054 0.735 25.5163C0.245833 25.0271 0.000833333 24.4383 0 23.75V11.25C0 10.5625 0.245 9.97417 0.735 9.485C1.225 8.99583 1.81333 8.75083 2.5 8.75H3.75V6.25C3.75 4.52083 4.35958 3.04708 5.57875 1.82875C6.79792 0.610418 8.27167 0.000834187 10 8.53242e-07C11.7283 -0.00083248 13.2025 0.608751 14.4225 1.82875C15.6425 3.04875 16.2517 4.5225 16.25 6.25V8.75H17.5C18.1875 8.75 18.7763 8.995 19.2663 9.485C19.7563 9.975 20.0008 10.5633 20 11.25V23.75C20 24.4375 19.7554 25.0263 19.2663 25.5163C18.7771 26.0063 18.1883 26.2508 17.5 26.25H2.5ZM2.5 23.75H17.5V11.25H2.5V23.75ZM11.7663 19.265C12.2554 18.7767 12.5 18.1883 12.5 17.5C12.5 16.8117 12.2554 16.2233 11.7663 15.735C11.2771 15.2467 10.6883 15.0017 10 15C9.31167 14.9983 8.72333 15.2433 8.235 15.735C7.74667 16.2267 7.50167 16.815 7.5 17.5C7.49833 18.185 7.74333 18.7738 8.235 19.2663C8.72667 19.7588 9.315 20.0033 10 20C10.685 19.9967 11.2738 19.7508 11.7663 19.265ZM6.25 8.75H13.75V6.25C13.75 5.20833 13.3854 4.32292 12.6562 3.59375C11.9271 2.86458 11.0417 2.5 10 2.5C8.95833 2.5 8.07292 2.86458 7.34375 3.59375C6.61458 4.32292 6.25 5.20833 6.25 6.25V8.75Z"
                                    fill="#12AED0" />
                            </svg>
                        </span>
                        <span
                            class="font-body-lg text-[16px] text-on-background">{{ app()->getLocale() === 'en' ? 'Not all data must be sent or opened to the AI.' : 'Tidak seluruh data harus dikirim atau dibuka kepada AI.' }}</span>
                    </div>

                    <div
                        class="w-full max-w-[400px] min-h-[110px] bg-white rounded-[20px] border border-primary shadow-sm p-unit-md flex items-center gap-unit-md">
                        <span class="w-12 h-12 shrink-0 bg-primary/10 rounded-[10px] flex items-center justify-center">
                            <svg width="22.4" height="22.4" viewBox="0 0 23 23" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.0469 2.79849C10.2297 2.77239 10.4056 2.71054 10.5645 2.61646C10.7234 2.52238 10.8622 2.39792 10.9731 2.25019C11.0839 2.10246 11.1645 1.93434 11.2104 1.75545C11.2562 1.57655 11.2664 1.39038 11.2403 1.20755C11.2142 1.02473 11.1523 0.848835 11.0583 0.689915C10.9642 0.530995 10.8397 0.392161 10.692 0.28134C10.5443 0.170519 10.3761 0.0898815 10.1972 0.0440309C10.0184 -0.00181957 9.83218 -0.0119849 9.64935 0.0141154C7.58228 0.311545 5.63877 1.17837 4.03635 2.51758C2.43392 3.85679 1.23582 5.61553 0.576135 7.59696C-0.0835521 9.57839 -0.178789 11.7043 0.301083 13.7368C0.780955 15.7693 1.817 17.6281 3.29326 19.1052C4.76952 20.5824 6.62773 21.6195 8.65993 22.1006C10.6921 22.5816 12.8181 22.4876 14.7999 21.8291C16.7817 21.1706 18.5412 19.9735 19.8813 18.3719C21.2215 16.7703 22.0895 14.8273 22.3881 12.7604C22.4408 12.3911 22.3447 12.0161 22.1209 11.7177C21.8971 11.4194 21.5639 11.2221 21.1947 11.1694C20.8254 11.1167 20.4504 11.2128 20.152 11.4367C19.8537 11.6605 19.6564 11.9936 19.6037 12.3629C19.3793 13.9128 18.7279 15.3698 17.7226 16.5706C16.7173 17.7715 15.3977 18.669 13.9114 19.1626C12.4251 19.6562 10.8307 19.7265 9.30676 19.3656C7.78278 19.0047 6.38928 18.2269 5.28219 17.1191C4.17509 16.0114 3.39808 14.6174 3.03808 13.0932C2.67809 11.569 2.74932 9.97473 3.2438 8.48871C3.73829 7.00269 4.63651 5.68359 5.83798 4.67898C7.03945 3.67438 8.49676 3.02204 10.0469 2.79849ZM15.0025 0.540991C14.6507 0.41667 14.2639 0.437204 13.9272 0.598075C13.5905 0.758946 13.3315 1.04698 13.2072 1.3988C13.0828 1.75063 13.1034 2.13743 13.2643 2.47412C13.4251 2.8108 13.7132 3.0698 14.065 3.19412C14.6312 3.39412 15.1662 3.64912 15.67 3.95912C15.8273 4.06156 16.0035 4.13149 16.1882 4.16477C16.3729 4.19805 16.5624 4.19401 16.7456 4.15289C16.9287 4.11178 17.1018 4.03441 17.2545 3.92536C17.4073 3.8163 17.5367 3.67777 17.6351 3.51792C17.7335 3.35807 17.7989 3.18014 17.8274 2.99462C17.856 2.8091 17.8471 2.61975 17.8013 2.43772C17.7555 2.25569 17.6737 2.08467 17.5608 1.93474C17.4478 1.78481 17.306 1.659 17.1437 1.56474C16.4681 1.14895 15.7503 0.805786 15.0025 0.540991ZM20.8431 5.26599C20.7488 5.10367 20.623 4.96187 20.4731 4.84894C20.3232 4.73601 20.1522 4.65424 19.9701 4.60845C19.7881 4.56265 19.5987 4.55376 19.4132 4.5823C19.2277 4.61084 19.0498 4.67623 18.8899 4.77462C18.7301 4.87301 18.5915 5.0024 18.4825 5.15518C18.3734 5.30795 18.2961 5.48101 18.255 5.66415C18.2138 5.84729 18.2098 6.03681 18.2431 6.22154C18.2764 6.40627 18.3463 6.58246 18.4487 6.73974C18.7575 7.23974 19.0112 7.77099 19.21 8.33349C19.3387 8.67929 19.5981 8.96066 19.9324 9.11693C20.2666 9.27319 20.6489 9.29183 20.9967 9.16882C21.3446 9.04581 21.6302 8.79102 21.7919 8.45938C21.9536 8.12774 21.9785 7.74582 21.8612 7.39599C21.5975 6.65225 21.2562 5.93832 20.8431 5.26599ZM11.2525 6.93287C11.2525 6.5599 11.1043 6.20222 10.8406 5.9385C10.5769 5.67477 10.2192 5.52662 9.84623 5.52662C9.47327 5.52662 9.11558 5.67477 8.85186 5.9385C8.58814 6.20222 8.43998 6.5599 8.43998 6.93287V12.5579C8.43998 13.3341 9.06998 13.9641 9.84623 13.9641H13.5962C13.9692 13.9641 14.3269 13.816 14.5906 13.5522C14.8543 13.2885 15.0025 12.9308 15.0025 12.5579C15.0025 12.1849 14.8543 11.8272 14.5906 11.5635C14.3269 11.2998 13.9692 11.1516 13.5962 11.1516H11.2525V6.93287Z"
                                    fill="#12AED0" />
                            </svg>
                        </span>
                        <span
                            class="font-body-lg text-[16px] text-on-background">{{ app()->getLocale() === 'en' ? 'Important activities have logs and audit trails.' : 'Aktivitas penting memiliki log dan audit trail.' }}</span>
                    </div>

                    <div
                        class="w-full max-w-[400px] min-h-[110px] bg-white rounded-[20px] border border-primary shadow-sm p-unit-md flex items-center gap-unit-md">
                        <span class="w-12 h-12 shrink-0 bg-primary/10 rounded-[10px] flex items-center justify-center">
                            <svg width="25" height="25" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.938 6.99892H20C20.5304 6.99892 21.0391 7.20964 21.4142 7.58471C21.7893 7.95978 22 8.46849 22 8.99892V12.9989C22 13.5294 21.7893 14.0381 21.4142 14.4131C21.0391 14.7882 20.5304 14.9989 20 14.9989H18.938C18.6944 16.9323 17.7535 18.7103 16.292 19.9992C14.8304 21.288 12.9487 21.9991 11 21.9989V19.9989C12.5913 19.9989 14.1174 19.3668 15.2426 18.2416C16.3679 17.1163 17 15.5902 17 13.9989V7.99892C17 6.40762 16.3679 4.8815 15.2426 3.75628C14.1174 2.63107 12.5913 1.99892 11 1.99892C9.4087 1.99892 7.88258 2.63107 6.75736 3.75628C5.63214 4.8815 5 6.40762 5 7.99892V14.9989H2C1.46957 14.9989 0.960859 14.7882 0.585786 14.4131C0.210714 14.0381 0 13.5294 0 12.9989V8.99892C0 8.46849 0.210714 7.95978 0.585786 7.58471C0.960859 7.20964 1.46957 6.99892 2 6.99892H3.062C3.30603 5.06582 4.24708 3.2882 5.70857 1.9996C7.17007 0.711003 9.05155 0 11 0C12.9484 0 14.8299 0.711003 16.2914 1.9996C17.7529 3.2882 18.694 5.06582 18.938 6.99892ZM2 8.99892V12.9989H3V8.99892H2ZM19 8.99892V12.9989H20V8.99892H19ZM6.76 14.7839L7.82 13.0879C8.77303 13.6851 9.87535 14.0008 11 13.9989C12.1246 14.0008 13.227 13.6851 14.18 13.0879L15.24 14.7839C13.9693 15.5802 12.4996 16.0014 11 15.9989C9.50044 16.0014 8.03067 15.5802 6.76 14.7839Z"
                                    fill="#12AED0" />
                            </svg>
                        </span>
                        <span
                            class="font-body-lg text-[16px] text-on-background">{{ app()->getLocale() === 'en' ? 'Human handoff is available for questions or decisions that require an officer.' : 'Tersedia human handoff untuk pertanyaan atau keputusan yang membutuhkan petugas.' }}</span>
                    </div>

                    <div
                        class="w-full max-w-[400px] min-h-[110px] bg-white rounded-[20px] border border-primary shadow-sm p-unit-md flex items-center gap-unit-md">
                        <span class="w-12 h-12 shrink-0 bg-primary/10 rounded-[10px] flex items-center justify-center">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25 14.375C25 16.575 23.375 18.4 21.25 18.7V22.5C21.25 23.163 20.9866 23.7989 20.5178 24.2678C20.0489 24.7366 19.413 25 18.75 25H14V24.625C14 23.7299 13.6444 22.8714 13.0115 22.2385C12.3786 21.6056 11.5201 21.25 10.625 21.25C8.75 21.25 7.25 22.7625 7.25 24.625V25H2.5C1.83696 25 1.20107 24.7366 0.732233 24.2678C0.263392 23.7989 0 23.163 0 22.5V17.75H0.375C2.2375 17.75 3.75 16.25 3.75 14.375C3.75 12.5 2.2375 11 0.375 11H0V6.25C0 5.58696 0.263392 4.95107 0.732233 4.48223C1.20107 4.01339 1.83696 3.75 2.5 3.75H6.3C6.6 1.625 8.425 0 10.625 0C12.825 0 14.65 1.625 14.95 3.75H18.75C19.413 3.75 20.0489 4.01339 20.5178 4.48223C20.9866 4.95107 21.25 5.58696 21.25 6.25V10.05C23.375 10.35 25 12.175 25 14.375ZM18.75 16.25H20.625C21.1223 16.25 21.5992 16.0525 21.9508 15.7008C22.3025 15.3492 22.5 14.8723 22.5 14.375C22.5 13.8777 22.3025 13.4008 21.9508 13.0492C21.5992 12.6975 21.1223 12.5 20.625 12.5H18.75V6.25H12.5V4.375C12.5 3.87772 12.3025 3.40081 11.9508 3.04917C11.5992 2.69754 11.1223 2.5 10.625 2.5C10.1277 2.5 9.65081 2.69754 9.29917 3.04917C8.94754 3.40081 8.75 3.87772 8.75 4.375V6.25H2.5V8.9C4.7 9.75 6.25 11.875 6.25 14.375C6.25 16.875 4.6875 19 2.5 19.85V22.5H5.15C5.57833 21.396 6.33031 20.4471 7.30733 19.7779C8.28434 19.1088 9.44078 18.7504 10.625 18.75C13.125 18.75 15.25 20.3125 16.1 22.5H18.75V16.25Z"
                                    fill="#12AED0" />
                            </svg>
                        </span>
                        <span
                            class="font-body-lg text-[16px] text-on-background">{{ app()->getLocale() === 'en' ? 'Integration can be done with existing systems.' : 'Integrasi dapat dilakukan ke sistem yang sudah berjalan.' }}</span>
                    </div>
                </div>
            </div>
        </section>


        {{-- Section 6 : Ecosystem Solution Pillars --}}
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
                <div class="grid grid-cols-1 md:grid-cols-12 gap-unit-lg">

                    {{-- Pillar 1: Attract & Admit --}}
                    <a href="{{ route('services' . $localeSuffix) }}"
                        class="group bg-white p-unit-lg rounded-[20px] border border-outline-variant flex flex-col justify-between transition-all duration-300 hover:-translate-y-1 hover:border-primary shadow-sm md:col-span-7 lg:min-h-[303px]">
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
                        class="group bg-[#031A44] p-unit-lg rounded-[20px] border border-transparent flex flex-col justify-between transition-all duration-300 hover:-translate-y-1 hover:border-primary-fixed-dim shadow-sm md:col-span-5 lg:min-h-[303px]">
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
                        class="group bg-[#A7F432] p-unit-lg rounded-[20px] border border-transparent flex flex-col justify-between transition-all duration-300 hover:-translate-y-1 hover:border-primary shadow-sm md:col-span-5 lg:min-h-[303px]">
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
                        class="group bg-[#12AED0] p-unit-lg rounded-[20px] border border-transparent flex flex-col justify-between transition-all duration-300 hover:-translate-y-1 hover:border-primary shadow-sm md:col-span-7 lg:min-h-[303px]">
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

        // Hero Section — background theme carousel. Auto-advances and pauses
        // whenever the hero isn't what the user is actually looking at.
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
    @include('partials.lenis-scroll')
</body>

</html>
