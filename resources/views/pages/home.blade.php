<!DOCTYPE html>

<html class="scroll-smooth" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
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
            <section id="hero"
                class="relative overflow-hidden bg-gradient-to-br from-surface-container-lowest via-surface to-primary/5 py-unit-md sm:py-unit-lg lg:py-unit-md border-b md:flex-1 lg:flex-none">

                {{-- IT / digital-transformation themed background --}}
                <div id="hero-carousel" class="hero-carousel pointer-events-none" aria-hidden="true">
                    <div class="hero-carousel-slide slide-ai is-active">
                        <span class="material-symbols-outlined slide-icon">smart_toy</span>
                    </div>
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
                    class="flex justify-center items-start w-full max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop min-h-[520px] sm:min-h-[660px]">
                    <div class="space-y-unit-lg z-10 pt-unit-lg">
                        <div class="flex justify-center">
                            <div
                                class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-3 sm:px-4 py-1 sm:py-1.5 rounded-full font-label-sm text-[10px] sm:text-label-sm uppercase tracking-widest">
                                <span class="material-symbols-outlined text-[16px]">bolt</span>
                                {{ __('messages.hero_badge') }}
                            </div>
                        </div>
                        <h1
                            class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-on-background max-w-6xl mx-auto text-center hero-heading md:max-w-full lg:max-w-6xl">
                            @php $heroHighlight = app()->getLocale() === 'en' ? 'Business Growth' : 'Pertumbuhan Bisnis'; @endphp
                            {!! str_replace(
                                $heroHighlight,
                                '<span class="text-primary">' . $heroHighlight . '</span>',
                                __('messages.hero_title'),
                            ) !!}
                        </h1>
                        <p
                            class="font-body-lg text-body-lg text-on-surface-variant max-w-xl mx-auto text-center hero-desc md:max-w-full lg:max-w-xl">
                            {{ __('messages.hero_desc') }}
                        </p>
                        <div class="flex flex-row gap-2 sm:gap-10 pt-unit-md items-center justify-center">
                            @php $localeSuffix = app()->getLocale() === 'en' ? '.en' : ''; @endphp

                            {{-- Tombol Utama (Primary CTA) --}}
                            <a href="{{ route('contact' . $localeSuffix) }}"
                                class="inline-flex items-center justify-center text-center border-2 border-primary-container text-primary-container bg-transparent px-4 sm:px-8 py-2.5 sm:py-4 rounded-[20px] font-button text-sm sm:text-base uppercase tracking-widest shadow-md hover:bg-primary hover:text-white hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300 ease-out hero-btn">
                                {{ app()->getLocale() === 'en' ? 'Contact Us' : 'Hubungi Kami' }}
                            </a>

                            {{-- Tombol Kedua (Outline/Secondary CTA) --}}
                            <a href="{{ route('services' . $localeSuffix) }}"
                                class="inline-flex items-center justify-center text-center border-2 border-on-secondary-fixed text-on-secondary-fixed bg-transparent px-4 sm:px-8 py-2.5 sm:py-4 rounded-[20px] font-button text-sm sm:text-base uppercase tracking-widest hover:bg-on-secondary-fixed hover:text-white hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300 ease-out hero-btn">
                                {{ app()->getLocale() === 'en' ? 'View Our Services' : 'Lihat Layanan' }}
                            </a>
                        </div>

                        <div class="flex items-center justify-center gap-3 pt-2">
                            <div
                                class="inline-flex items-center gap-2 border border-outline-variant bg-surface-container px-4 py-2 rounded-full">
                                <img alt="Romulus Digital" class="h-4 object-contain"
                                    src="{{ asset('assets/romulus-birumuda.png') }}" />
                                <span class="font-label-sm text-on-surface-variant text-xs tracking-[0.12em] uppercase">
                                    {{ __('messages.hero_support_line') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @include('partials.partner-badge')
        </div>

        {{-- Carousel Card --}}
        <section class="w-full bg-gray-50 py-16">
            <div x-data="cardAccordion()"
                class="relative mx-auto w-full max-w-[1229px] lg:max-w-[1229px] h-[360px] sm:h-[400px] md:h-[400px] lg:h-[585px] overflow-x-auto md:overflow-hidden">
                @php
                    $cards = [
                        [
                            'image' =>
                                'https://plus.unsplash.com/premium_photo-1683121710572-7723bd2e235d?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                            'title' => 'AI TECHNOLOGY & GEN AI',
                            'subtitle' => 'Solutions',
                            'desc' => 'Otomatisasi cerdas dan aplikasi Gen AI untuk mempercepat proses bisnis Anda.',
                            'solution_id' => 'ai-hiring',
                        ],
                        [
                            'icon' => 'gear-cycle',
                            'image' =>
                                'https://media.istockphoto.com/id/2248831265/id/foto/sistem-erp-terintegrasi-ai-dan-otomatisasi-berbasis-pembelajaran-mesin-analitik-prediktif.webp?a=1&b=1&s=612x612&w=0&k=20&c=APLcsSXmZ7rzuHb1kDHSQveTYog41T0RDIFl9Z_gcDs=',
                            'title' => 'OPERATIONAL SYSTEMS',
                            'subtitle' => 'HRMS / HSE',
                            'desc' => 'Sistem HR, keselamatan kerja, dan platform operasional khusus industri Anda.',
                            'solution_id' => 'hrms-mahya',
                        ],
                        [
                            'icon' => null,
                            'image' =>
                                'https://images.unsplash.com/photo-1515879218367-8466d910aaa4?q=80&w=1169&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                            'title' => 'CUSTOM SOFTWARE DEVELOPER',
                            'subtitle' => 'Development',
                            'desc' =>
                                'Aplikasi web, mobile, dan sistem enterprise yang dibangun sesuai kebutuhan Anda.',
                        ],
                        [
                            'icon' => null,
                            'image' =>
                                'https://plus.unsplash.com/premium_photo-1661878265739-da90bc1af051?q=80&w=1086&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                            'title' => 'QA GOVERNANCE',
                            'subtitle' => 'Testing & Quality',
                            'desc' =>
                                'Pengujian menyeluruh (SIT/UAT) untuk memastikan setiap solusi siap dan bebas kendala.',
                        ],
                        [
                            'icon' => null,
                            'image' =>
                                'https://media.istockphoto.com/id/2264468773/id/foto/login-aman-untuk-pendidikan-online-dan-platform-e-learning-di-tablet-digital.jpg?s=2048x2048&w=is&k=20&c=aRz44Ln-Fc49c0BqgjOO0aWvVfAYGFDD93bXmdqMycc=',
                            'title' => 'WEB & PORTAL DEVELOPMENT',
                            'subtitle' => 'Digital Presence',
                            'desc' =>
                                'Website perusahaan, portal, dan platform digital untuk menjangkau lebih banyak pengguna.',
                        ],
                        [
                            'icon' => null,
                            'image' =>
                                'https://plus.unsplash.com/premium_photo-1764691242193-962c5e2dbd3f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGNsb3VkJTIwQUl8ZW58MHx8MHx8fDA%3D',
                            'title' => 'MANAGED SUPPORT & D365',
                            'subtitle' => 'Post-Launch Care',
                            'desc' =>
                                'Dukungan purna luncur dan integrasi Microsoft D365 untuk keberlangsungan sistem Anda.',
                        ],
                    ];
                @endphp

                @foreach ($cards as $index => $card)
                    @php $i = $index + 1; @endphp

                    <div @click="toggle({{ $i }})" :style="getStyle({{ $i }})"
                        class="absolute top-0 h-[360px] sm:h-[400px] md:h-[400px] lg:h-[585px] cursor-pointer overflow-hidden rounded-2xl shadow-lg transition-all duration-500 ease-in-out">

                        {{-- Background Image --}}
                        <img src="{{ $card['image'] }}" alt="{{ $card['title'] ?? 'Kapabilitas' }}"
                            class="absolute inset-0 h-full w-full object-cover" />

                        {{-- Dark Gradient Overlay --}}
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/40 to-slate-900/10">
                        </div>

                        {{-- Text Content (hanya tampil detail saat card aktif) --}}
                        <div class="absolute inset-0 flex flex-col justify-end p-6 md:p-8">

                            {{-- Icon (muncul saat card aktif) --}}
                            <div x-show="active === {{ $i }}"
                                x-transition:enter="transition ease-out duration-500 delay-150"
                                x-transition:enter-start="opacity-0 -translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="mb-3 md:mb-4 flex h-10 w-10 md:h-14 md:w-14 items-center justify-center rounded-full bg-slate-900/60 ring-1 ring-cyan-400/60 p-1.5 md:p-2">

                                {{-- SVG AI TECHNOLOGY --}}
                                @if ($i === 1)
                                    <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 md:h-7 md:w-7">
                                        <path
                                            d="M37.6 9.1C39.1 10.7 40 12.8 40 15c0-2.2.9-4.3 2.4-5.9 1.6-1.6 3.7-2.4 5.9-2.4 2.2 0 4.3.9 5.9 2.4 1.6 1.6 2.4 3.7 2.4 5.9 1.8 0 3.5.5 5 1.4 1.5.9 2.8 2.2 3.6 3.6.9 1.5 1.3 3.3 1.3 5.1 0 1.8-.5 3.5-1.4 5 2.3.4 4.3 1.6 5.8 3.5 1.5 1.8 2.3 4 2.3 6.4s-.8 4.6-2.3 6.4c-1.5 1.8-3.5 3-5.8 3.5.9 1.5 1.4 3.3 1.4 5.1 0 1.8-.5 3.5-1.4 5-.9 1.5-2.2 2.8-3.6 3.6-1.5.9-3.3 1.4-5 1.4 0 2.2-.9 4.3-2.4 5.9-1.6 1.6-3.7 2.4-5.9 2.4-2.2 0-4.3-.9-5.9-2.4-1.6-1.6-2.4-3.7-2.4-5.9 0 2.2-.9 4.3-2.4 5.9-1.6 1.6-3.7 2.4-5.9 2.4-2.2 0-4.3-.9-5.9-2.4-1.6-1.6-2.4-3.7-2.4-5.9-1.8 0-3.5-.5-5-1.4-1.5-.9-2.8-2.2-3.6-3.6-.9-1.5-1.3-3.3-1.3-5.1 0-1.8.5-3.5 1.4-5-2.3-.4-4.3-1.6-5.8-3.5-1.5-1.8-2.3-4-2.3-6.4 0-2.4.8-4.6 2.3-6.4 1.5-1.8 3.5-3 5.8-3.5-.9-1.5-1.4-3.3-1.4-5.1 0-1.8.5-3.5 1.4-5.1.9-1.5 2.2-2.8 3.6-3.6 1.5-.9 3.3-1.4 5-1.4 0-2.2.9-4.3 2.4-5.9 1.6-1.6 3.7-2.4 5.9-2.4 2.2 0 4.3.9 5.9 2.4z"
                                            stroke="#12AED0" stroke-width="5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M35 23.3v6.6M23.3 35h6.8M50.1 35h6.8M50.1 44.9h6.8M23.3 44.9h6.8M35 50.1v6.6M45 50.1v6.6M45 23.3v6.6M33.5 49.9h13.2c.9 0 1.7-.4 2.3-1 .6-.6 1-1.4 1-2.3V33.3c0-.9-.4-1.7-1-2.3-.6-.6-1.4-1-2.3-1H33.5c-.9 0-1.7.4-2.3 1-.6.6-1 1.4-1 2.3v13.3c0 .9.4 1.7 1 2.3.6.6 1.4 1 2.3 1z"
                                            stroke="#12AED0" stroke-width="5" stroke-linecap="round" />
                                    </svg>

                                    {{-- SVG OPERATIONAL SYSTEMS --}}
                                @elseif ($i === 2)
                                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M46.9 38.3 48.5 36.7c1.5-1.5 2.2-2.2 3.2-1.9 1 .3 1.1 1.2 1.4 2.7.1.8.2 1.5.2 2.3 0 2.2-.5 4.3-1.5 6.3-1 1.9-2.5 3.5-4.3 4.7-1.8 1.2-3.9 2-6.1 2.2-2.2.2-4.4-.1-6.4-.9M33.3 41.8l-1.8 1.8c-1.4 1.4-2.2 2.2-3.1 1.9-.9-.3-1.1-1.2-1.4-2.9-.5-2.4-.3-4.8.5-7.1.8-2.3 2.2-4.3 4-5.8 1.9-1.5 4.1-2.5 6.5-2.9 2.4-.4 4.8-.1 7.1.8"
                                            stroke="#12AED0" stroke-width="7" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M70 47c1.7-.5 2.6-.7 3-1.2.3-.5.3-1.2.3-2.6V36.8c0-1.4 0-2.1-.3-2.6-.3-.5-1.2-.7-2.9-1.2-6.5-1.7-10.6-8.5-8.9-15 1.5-1.8 1.7-2.6 1.5-3.2-.2-.5-.8-.9-2-1.6l-5.7-3.3c-1.2-.7-1.8-1-2.4-.9-.6.1-1.2.7-2.5 2-4.9-4.9-12.9-4.9-17.8 0-1.3-1.3-1.9-1.9-2.5-2-.6-.1-1.2.2-2.4.9L20.5 13.2c-1.3.7-1.9 1-2.1 1.5-.2.5.1 1.4.6 3.2 1.7 6.5-2.4 13.3-8.9 15-1.7.5-2.6.7-3 1.2-.3.5-.3 1.2-.3 2.6v6.5c0 1.4 0 2.1.3 2.6.3.5 1.2.7 2.9 1.2 6.5 1.8 10.6 8.5 8.9 15-.5 1.8-.7 2.7-.5 3.2.2.5.8.9 2.1 1.6l5.8 3.3c1.2.7 1.8 1 2.4.9.6-.1 1.2-.7 2.5-2 4.9 4.9 12.9 4.9 17.8 0 1.3 1.3 1.9 1.9 2.5 2 .6.1 1.2-.3 2.4-1l5.8-3.3c1.3-.7 1.9-1 2.1-1.5.2-.5 0-1.4-.5-3.2C59.5 55.5 63.6 48.7 70 47z"
                                            stroke="#12AED0" stroke-width="7" stroke-linecap="round" />
                                    </svg>

                                    {{-- SVG CUSTOM SOFTWARE DEVELOPER --}}
                                @elseif ($i === 3)
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-7 md:w-7 text-cyan-400"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M7 8L3 12L7 16M11 5L13 19M17 8L21 12L17 16" />
                                    </svg>

                                    {{-- SVG QA GOVERNANCE --}}
                                @elseif ($i === 4)
                                    <svg width="91" height="100" viewBox="0 0 91 100" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.5 20.3 45.5 11.5l30 8.8v18c0 9.2-2.9 18.2-8.3 25.6-5.4 7.5-13 13.1-21.7 16-8.7-2.9-16.3-8.5-21.7-16-5.4-7.5-8.3-16.5-8.3-25.7v-18z"
                                            stroke="#12AED0" stroke-width="7" stroke-linejoin="round" />
                                        <path d="M30.5 43.2 42.2 54.8 62.2 34.8" stroke="#12AED0" stroke-width="7"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    {{-- SVG DATA ANALYTICS --}}
                                @elseif ($i === 5)
                                    <svg width="91" height="91" viewBox="0 0 91 91" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M59.8667 48C60.1333 45.8 60.3333 43.6 60.3333 41.3333C60.3333 39.0667 60.1333 36.8667 59.8667 34.6667H71.1333C71.6667 36.8 72 39.0333 72 41.3333C72 43.6333 71.6667 45.8667 71.1333 48M53.9667 66.5333C55.9667 62.8333 57.5 58.8333 58.5667 54.6667H68.4C65.1706 60.2276 60.047 64.44 53.9667 66.5333ZM53.1333 48H37.5333C37.2 45.8 37 43.6 37 41.3333C37 39.0667 37.2 36.8333 37.5333 34.6667H53.1333C53.4333 36.8333 53.6667 39.0667 53.6667 41.3333C53.6667 43.6 53.4333 45.8 53.1333 48ZM45.3333 67.8667C42.5667 63.8667 40.3333 59.4333 38.9667 54.6667H51.7C50.3333 59.4333 48.1 63.8667 45.3333 67.8667ZM32 28H22.2667C25.4621 22.4234 30.5822 18.2041 36.6667 16.1333C34.6667 19.8333 33.1667 23.8333 32 28ZM22.2667 54.6667H32C33.1667 58.8333 34.6667 62.8333 36.6667 66.5333C30.5942 64.441 25.481 60.2273 22.2667 54.6667ZM19.5333 48C19 45.8667 18.6667 43.6333 18.6667 41.3333C18.6667 39.0333 19 36.8 19.5333 34.6667H30.8C30.5333 36.8667 30.3333 39.0667 30.3333 41.3333C30.3333 43.6 30.5333 45.8 30.8 48M45.3333 14.7667C48.1 18.7667 50.3333 23.2333 51.7 28H38.9667C40.3333 23.2333 42.5667 18.7667 45.3333 14.7667ZM68.4 28H58.5667C57.5218 23.872 55.9771 19.887 53.9667 16.1333C60.1 18.2333 65.2 22.4667 68.4 28ZM45.3333 8C26.9 8 12 23 12 41.3333C12 50.1739 15.5119 58.6523 21.7631 64.9036C24.8584 67.9988 28.533 70.4542 32.5772 72.1293C36.6214 73.8045 40.9559 74.6667 45.3333 74.6667C54.1739 74.6667 62.6523 71.1548 68.9036 64.9036C75.1548 58.6523 78.6667 50.1739 78.6667 41.3333C78.6667 36.9559 77.8045 32.6214 76.1293 28.5772C74.4542 24.533 71.9988 20.8584 68.9036 17.7631C65.8083 14.6678 62.1336 12.2125 58.0894 10.5373C54.0453 8.86219 49.7107 8 45.3333 8Z"
                                            fill="#12AED0" />
                                    </svg>

                                    {{-- SVG WEB & PORTAL DEVELOPMENT --}}
                                @elseif ($i === 6)
                                    <svg width="80" height="80" viewBox="0 0 80 80" fill="#12AED0"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M61.7 42l.7 3.4.2 1 1 .4c.6.3 1.2.5 1.8.8.5.3 1 .6 1.5 1l.8.6 1-.3 3.3-1 1.7 2.9-2.6 2.2-.8.7.2 1.1c.1.5.1 1.1.1 1.7 0 .7 0 1.3-.1 1.8l-.2 1.1.8.7 2.6 2.2-1.7 2.9-3.3-1-.9-.3-.8.6c-.5.4-1.1.7-1.6 1-.5.3-1.1.6-1.7.9l-1 .4-.2 1-.7 3.4h-3.4l-.7-3.4-.2-1-1-.4c-.5-.2-1.1-.5-1.7-.8-.5-.3-1-.6-1.5-1l-.8-.6-1 .3-3.3 1-1.7-2.9 2.6-2.2.8-.7-.2-1.1c-.1-.5-.1-1.1-.1-1.7 0-.7 0-1.3.1-1.8l.2-1.1-.8-.7-2.6-2.2 1.7-2.9 3.3 1 1 .3.8-.6c.5-.4 1.1-.7 1.6-1 .5-.3 1.1-.6 1.7-.9l1-.4.2-1 .7-3.4h3.4zm-29.2-26.7 6.1 6.1.6.6h27.5c1.3 0 2.4.4 3.3 1.4.9 1 .9 2 1 3.3v7.4c-.1 0-.2 0-.2-.1-.8-.4-1.5-.7-2.3-1v-8.2H38.1L31.4 18H11.3v44h23.9c.2.7.4 1.4.6 2.1 0 .2.1.4.1.7h-22.6c-1.3 0-2.4-.4-3.3-1.4-.9-1-1.3-2-1.3-3.2v-40c0-1.3.4-2.4 1.4-3.3.9-.9 1.9-1.3 3.2-1.4l.2 0h19.2zm27.5 32.7c-2.4 0-4.5.9-6.2 2.6-1.7 1.7-2.6 3.8-2.6 6.2 0 2.4.9 4.5 2.6 6.2 1.7 1.7 3.8 2.6 6.2 2.6 2.4 0 4.5-.9 6.2-2.6.8-.8 1.4-1.8 1.7-2.9.3-1.1.4-2.2.4-3.3 0-2.4-.9-4.5-2.6-6.2-1.7-1.7-3.8-2.6-6.2-2.6z"
                                            stroke="#12AED0" stroke-width="4" stroke-linejoin="round" />
                                    </svg>
                                @endif
                            </div>

                            {{-- Title --}}
                            <h3 x-show="active === {{ $i }}"
                                x-transition:enter="transition ease-out duration-500 delay-200"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="whitespace-nowrap text-xs md:text-lg lg:text-2xl font-extrabold text-white">
                                {{ $card['title'] ?? '' }}
                            </h3>

                            {{-- Subtitle --}}
                            <p x-show="active === {{ $i }}"
                                x-transition:enter="transition ease-out duration-500 delay-300"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="whitespace-nowrap text-[10px] md:text-base lg:text-xl font-extrabold text-lime-400">
                                {{ $card['subtitle'] ?? '' }}
                            </p>

                            {{-- Description --}}
                            <p x-show="active === {{ $i }}"
                                x-transition:enter="transition ease-out duration-500 delay-[350ms]"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="max-w-full md:max-w-[420px] text-sm md:text-lg leading-relaxed text-slate-200">
                                {{ $card['desc'] ?? '' }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- Logic Card Carousel --}}
        <script>
            function cardAccordion() {
                return {
                    active: 1,
                    width: window.innerWidth,
                    init() {
                        window.addEventListener('resize', () => {
                            this.width = window.innerWidth;
                        });
                    },
                    toggle(i) {
                        this.active = this.active === i ? 0 : i;
                    },
                    get isMobile() {
                        return this.width < 768;
                    },
                    get isTablet() {
                        return this.width >= 768 && this.width < 1024;
                    },
                    get gap() {
                        return this.isMobile ? 5 : this.isTablet ? 10 : 16;
                    },
                    get activeW() {
                        return this.isMobile ? 240 : this.isTablet ? 300 : 520;
                    },
                    get inactiveW() {
                        if (this.active === 0) return this.isMobile ? 52 : this.isTablet ? 105 : 184;
                        return this.isMobile ? 36 : this.isTablet ? 72 : 120;
                    },
                    get containerW() {
                        if (this.active === 0) {
                            return 6 * this.inactiveW + 5 * this.gap;
                        }
                        return this.activeW + 5 * this.inactiveW + 5 * this.gap;
                    },
                    getStyle(i) {
                        const a = this.active;
                        const gap = this.gap;
                        const aw = this.activeW;
                        const iw = this.inactiveW;
                        const cw = this.containerW;
                        const off = Math.max(0, ((this.isTablet || this.isMobile ? this.width : 1229) - cw) / 2);
                        const gw = (j) => j === a ? aw : iw;
                        if (i <= 3) {
                            let left = off;
                            for (let j = 1; j < i; j++) left += gw(j) + gap;
                            return 'left:' + left.toFixed(1) + 'px;width:' + gw(i) + 'px';
                        } else {
                            let right = off;
                            for (let j = 6; j > i; j--) right += gw(j) + gap;
                            return 'right:' + right.toFixed(1) + 'px;width:' + gw(i) + 'px';
                        }
                    }
                };
            }
        </script>

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
    </script>
    @include('partials.lenis-scroll')
</body>

</html>
