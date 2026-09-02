<!DOCTYPE html>

<html class="light" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ app()->getLocale() === 'en' ? 'About Us | Nakala Digital' : 'Tentang Kami | Nakala Digital' }}</title>
    @include('partials.seo', [
        'title' => app()->getLocale() === 'en' ? 'About Us | Nakala Digital' : 'Tentang Kami | Nakala Digital',
        'description' =>
            app()->getLocale() === 'en'
            ? 'Learn about Nakala Digital — our vision, mission, team, and delivery methodology for enterprise digital solutions.'
            : 'Pelajari tentang Nakala Digital — visi, misi, tim, dan metodologi delivery untuk solusi digital perusahaan.',
    ])
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
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
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
                        "headline-h1-mobile": ["36px", {
                            "lineHeight": "1.2",
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
                },
            },
        }
    </script>
    <style>
        .active-nav {
            border-bottom: 2px solid #12AED0;
            padding-bottom: 4px;
            color: #12AED0;
        }

        html {
            scroll-behavior: smooth;
        }

        .hero-grid-pattern {
            background-image:
                linear-gradient(rgba(18, 174, 208, 0.10) 1px, transparent 1px),
                linear-gradient(90deg, rgba(18, 174, 208, 0.10) 1px, transparent 1px);
            background-size: 44px 44px;
            -webkit-mask-image: radial-gradient(ellipse 85% 65% at 30% 25%, black 30%, transparent 85%);
            mask-image: radial-gradient(ellipse 85% 65% at 30% 25%, black 30%, transparent 85%);
        }

        .hero-orb {
            animation: hero-orb-float 14s ease-in-out infinite;
        }

        .hero-orb-delay {
            animation-delay: -7s;
        }

        @keyframes hero-orb-float {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            33% {
                transform: translate(30px, -50px) scale(1.1);
            }

            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        /* Robust Scroll Reveal */
        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s ease-out, transform 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
            will-change: opacity, transform;
        }

        .reveal-on-scroll.is-revealed {
            opacity: 1;
            transform: translateY(0);
        }

        /* SVG / Icon Pop Animation */
        @keyframes icon-pop {
            0% {
                transform: scale(0) rotate(-45deg);
                opacity: 0;
            }

            60% {
                transform: scale(1.4) rotate(15deg);
                opacity: 1;
            }

            100% {
                transform: scale(1) rotate(0deg);
                opacity: 1;
            }
        }

        .reveal-on-scroll .material-symbols-outlined {
            opacity: 0;
            display: inline-block;
        }

        .reveal-on-scroll.is-revealed .material-symbols-outlined {
            animation: icon-pop 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            animation-delay: 0.3s;
            /* Delay icon pop until parent card is almost fully visible */
        }

        /* TAB (768px - 1024px) */
        @media (min-width: 768px) and (max-width: 1024px) {
            .reason-card {
                padding: 20px !important;
            }

            .reason-card .reason-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }

            .reason-card .reason-title {
                font-size: 18px !important;
            }

            .reason-card .reason-desc {
                font-size: 14px !important;
            }
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="overflow-x-hidden bg-surface text-on-surface">
    @include('partials.navbar')
    <main class="pt-20">

        {{-- Section 1 : Mitra Transformasi Digital & AI untuk Pendidikan --}}
        <header id="company-hero"
            class="relative bg-gradient-to-br from-surface-container-lowest via-surface to-primary/5 overflow-hidden">
            <div class="hero-grid-pattern absolute inset-0 pointer-events-none" aria-hidden="true"></div>
            <canvas id="company-hero-network" class="absolute inset-0 h-full w-full pointer-events-none"
                aria-hidden="true"></canvas>
            <div
                class="hero-orb pointer-events-none absolute -top-24 -right-24 h-96 w-96 rounded-full bg-primary/10 blur-3xl">
            </div>
            <div
                class="hero-orb hero-orb-delay pointer-events-none absolute -bottom-32 -left-24 h-96 w-96 rounded-full bg-primary/20 blur-3xl">
            </div>
            <div
                class="flex justify-start items-start w-full max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop pb-unit-lg lg:pb-unit-xl">
                <div class="space-y-unit-lg z-10 pt-unit-lg lg:w-1/2">
                    <div
                        class="inline-flex items-center justify-start gap-2 sm:gap-4 bg-tertiary-fixed text-on-tertiary-fixed px-4 sm:px-6 py-1.5 rounded-[20px] font-label-sm font-semibold text-[16px] sm:text-[22px] uppercase tracking-wide w-max h-[38px] sm:h-[43px]">
                        <svg width="21.67" height="19.5" viewBox="0 0 22 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.3333 13H15.1667V15.1667H17.3333M17.3333 8.66667H15.1667V10.8333H17.3333M19.5 17.3333H10.8333V15.1667H13V13H10.8333V10.8333H13V8.66667H10.8333V6.5H19.5M8.66667 4.33333H6.5V2.16667H8.66667M8.66667 8.66667H6.5V6.5H8.66667M8.66667 13H6.5V10.8333H8.66667M8.66667 17.3333H6.5V15.1667H8.66667M4.33333 4.33333H2.16667V2.16667H4.33333M4.33333 8.66667H2.16667V6.5H4.33333M4.33333 13H2.16667V10.8333H4.33333M4.33333 17.3333H2.16667V15.1667H4.33333M10.8333 4.33333V0H0V19.5H21.6667V4.33333H10.8333Z"
                                fill="black" />
                        </svg>
                        {{ app()->getLocale() === 'en' ? 'About Us' : 'Tentang Kami' }}
                    </div>
                    <h1
                        class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-on-surface tracking-tight">
                        @if (app()->getLocale() === 'en')
                            Local partner for AI, software, and digital solutions.
                        @else
                            <span class="block">Mitra Transformasi</span>
                            <span class="block"><span class="text-primary">Digital &amp; AI</span> untuk</span>
                            <span class="block">Pendidikan</span>
                        @endif
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-lg">
                        {!! app()->getLocale() === 'en'
    ? 'Bridging local expertise with Romulus Digital\'s regional capability to empower your enterprise.'
    : 'Membantu sekolah, yayasan, dan perguruan tinggi membangun<br>ekosistem digital yang terintegrasi, aman, mudah digunakan,<br>serta diperkuat AI Assistant pada setiap layanan.' !!}
                    </p>
                    <div class="pt-unit-sm">
                        <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}"
                            class="inline-block bg-primary text-on-primary font-button text-button px-unit-lg py-unit-md rounded-[20px] shadow-lg hover:scale-105 transition-transform">
                            {{ app()->getLocale() === 'en' ? 'Start Discovery Session' : 'Mulai Sesi Discovery' }}
                        </a>
                    </div>
                </div>
                <div class="relative z-10 hidden lg:flex lg:w-1/2 justify-end items-start pt-16 pb-16">
                    <img alt="Digital Partnership Globe" class="w-full max-w-[640px] aspect-[741/494] object-cover"
                        src="{{ asset('assets/image 27.png') }}" />
                </div>
            </div>
        </header>

        {{-- Section 2 : Visi & Misi --}}
        <section id="vision-mission"
            class="py-unit-xl px-margin-mobile md:px-margin-desktop max-w-[1440px] mx-auto scroll-mt-28">
            <div class="mb-unit-lg">
                <span
                    class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">{{ app()->getLocale() === 'en' ? 'Solution Highlight' : 'Sorotan Solusi' }}</span>
                <h2
                    class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-surface">
                    {{ app()->getLocale() === 'en' ? 'Vision & Mission' : 'Visi & Misi' }}
                </h2>
                <div class="h-1.5 w-24 bg-primary-container mt-unit-sm"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">

                {{-- Visi --}}
                <div
                    class="md:col-span-5 lg:col-span-4 bg-primary text-on-primary p-unit-lg lg:p-unit-xl rounded-[20px] flex flex-col justify-between">
                    <div class="space-y-unit-md">
                        <div class="flex items-center gap-unit-md">
                            <span class="material-symbols-outlined text-[39px] leading-none shrink-0"
                                style="font-variation-settings: 'FILL' 1; font-size: 39px; width: 39px; height: 39px;">visibility</span>
                            <h3 class="font-headline-h3 text-[28px] font-semibold">
                                {{ app()->getLocale() === 'en' ? 'Our Vision' : 'Visi Kami' }}
                            </h3>
                        </div>
                        <p class="font-body-md text-[18px] font-regular leading-relaxed">
                            @if (app()->getLocale() === 'en')
                                To become a trusted technology partner that empowers educational institutions in Indonesia
                                through smart, integrated digital solutions with real impact on the advancement of learning.
                            @else
                                Menjadi partner teknologi terpercaya yang memberdayakan institusi pendidikan di Indonesia
                                melalui solusi digital cerdas, terintegrasi, dan berdampak nyata bagi kemajuan pembelajaran.
                            @endif
                        </p>
                    </div>
                </div>

                {{-- Misi --}}
                <div
                    class="md:col-span-7 lg:col-span-8 bg-secondary text-white p-unit-lg lg:p-unit-xl rounded-[20px] flex flex-col justify-between">
                    <div class="space-y-unit-md">
                        <h3 class="font-headline-h3 text-[28px] font-semibold">
                            {{ app()->getLocale() === 'en' ? 'Our Mission' : 'Misi Kami' }}
                        </h3>
                        <div class="divide-y divide-white/20">
                            <p class="font-body-md text-body-md py-unit-md flex items-start gap-unit-md">
                                <span class="material-symbols-outlined text-tertiary shrink-0">arrow_forward</span>
                                <span>{{ app()->getLocale() === 'en'
    ? 'Digitize academic and operational education processes to be efficient and transparent.'
    : 'Mendigitalisasi proses akademik dan operasional pendidikan agar efisien dan transparan.' }}</span>
                            </p>
                            <p class="font-body-md text-body-md py-unit-md flex items-start gap-unit-md">
                                <span class="material-symbols-outlined text-tertiary shrink-0">arrow_forward</span>
                                <span>{{ app()->getLocale() === 'en'
    ? 'Integrate AI Assistant to accelerate services for students, teachers, and staff.'
    : 'Mengintegrasikan AI Assistant untuk mempercepat layanan bagi siswa, guru, dan staf.' }}</span>
                            </p>
                            <p class="font-body-md text-body-md py-unit-md flex items-start gap-unit-md">
                                <span class="material-symbols-outlined text-tertiary shrink-0">arrow_forward</span>
                                <span>{{ app()->getLocale() === 'en'
    ? 'Ensure data security and technology infrastructure in every solution we build.'
    : 'Menjamin keamanan data dan infrastruktur teknologi di setiap solusi yang kami bangun.' }}</span>
                            </p>
                            <p class="font-body-md text-body-md py-unit-md flex items-start gap-unit-md">
                                <span class="material-symbols-outlined text-tertiary shrink-0">arrow_forward</span>
                                <span>{{ app()->getLocale() === 'en'
    ? 'Apply professional delivery standards through strategic partnership with Romulus Digital.'
    : 'Menerapkan standar delivery professional melalui kemitraan strategis dengan Romulus Digital.' }}</span>
                            </p>
                            <p class="font-body-md text-body-md py-unit-md flex items-start gap-unit-md">
                                <span class="material-symbols-outlined text-tertiary shrink-0">arrow_forward</span>
                                <span>{{ app()->getLocale() === 'en'
    ? 'Provide ongoing assistance to ensure successful technology adoption.'
    : 'Memberikan pendampingan berkelanjutan untuk memastikan adaptasi teknologi berjalan sukses.' }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section 3 : Filosofi --}}
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

        @include('partials.partner-badge')

        {{-- Section 4 : Mengapa Nakala Digital --}}
        <section id="why-nakala" class="bg-surface-container-low py-unit-xl scroll-mt-28">
            <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">

                <div class="mb-unit-lg text-center max-w-3xl mx-auto">
                    <span
                        class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">{{ app()->getLocale() === 'en' ? 'Capability Reference' : 'Referensi Kapabilitas' }}</span>
                    <h2
                        class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-surface">
                        {{ app()->getLocale() === 'en' ? 'Why Nakala Digital?' : 'Mengapa Nakala Digital?' }}
                    </h2>
                    <p class="text-on-surface-variant font-body-lg text-body-lg mt-unit-sm">
                        {{ app()->getLocale() === 'en' ? 'Delivering Excellence through 6 Core Pillars' : 'Memberikan Keunggulan melalui 6 Pilar Utama' }}
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">

                    {{-- Card 1 : Delivery Dicipline & QA Governance --}}
                    <div
                        class="reason-card bg-surface-container-lowest p-unit-lg border border-outline-variant group hover:shadow-xl transition-all rounded-[20px]">
                        <div class="reason-header flex items-center gap-4 mb-unit-md">
                            <div
                                class="w-12 h-12 shrink-0 bg-primary-container/10 flex items-center justify-center rounded-[20px] group-hover:bg-primary-container transition-colors">
                                <span
                                    class="material-symbols-outlined text-primary group-hover:text-on-primary-container">local_shipping</span>
                            </div>
                            <h4 class="reason-title font-headline-h3 text-headline-h3 m-0">
                                {{ app()->getLocale() === 'en' ? 'Delivery Discipline & QA Governance' : 'Delivery Dicipline & QA Governance' }}
                            </h4>
                        </div>
                        <p class="reason-desc text-on-surface-variant font-body-md text-body-md leading-relaxed">
                            {{ app()->getLocale() === 'en'
    ? 'Local delivery team implementing Agile/Scrum and disciplined QA from SIT/UAT to release governance at every stage of the project.'
    : 'Tim delivery lokal yang menerapkan Agile/Scrum dan QA disiplin mulai dari SIT/UAT hingga release governance di setiap tahap proyek.' }}
                        </p>
                    </div>

                    {{-- Card 2 : AI Assistant Kapabilitas --}}
                    <div
                        class="reason-card bg-surface-container-lowest p-unit-lg border border-outline-variant group hover:shadow-xl transition-all rounded-[20px]">
                        <div class="reason-header flex items-center gap-4 mb-unit-md">
                            <div
                                class="w-12 h-12 shrink-0 bg-primary-container/10 flex items-center justify-center rounded-[20px] group-hover:bg-primary-container transition-colors">
                                <span
                                    class="material-symbols-outlined text-primary group-hover:text-on-primary-container">psychology</span>
                            </div>
                            <h4 class="reason-title font-headline-h3 text-headline-h3 m-0">
                                {{ app()->getLocale() === 'en' ? 'AI Assistant Capability' : 'AI Assistant Kapabilitas' }}
                            </h4>
                        </div>
                        <p class="reason-desc text-on-surface-variant font-body-md text-body-md leading-relaxed">
                            {{ app()->getLocale() === 'en'
    ? 'AI Assistant embedded directly in each system instead of additional chatbots guides users from admission, learning, to administrative services.'
    : 'AI Assistant tertanam langsung di setiap sistem bukan chatbot tambahan memandu pengguna dari admisi, pembelajaran, hingga layanan administrasi.' }}
                        </p>
                    </div>

                    {{-- Card 3 : Pengalaman Implementasi Pendidikan --}}
                    <div
                        class="reason-card bg-surface-container-lowest p-unit-lg border border-outline-variant group hover:shadow-xl transition-all rounded-[20px]">
                        <div class="reason-header flex items-center gap-4 mb-unit-md">
                            <div
                                class="w-12 h-12 shrink-0 bg-primary-container/10 flex items-center justify-center rounded-[20px] group-hover:bg-primary-container transition-colors">
                                <span
                                    class="material-symbols-outlined text-primary group-hover:text-on-primary-container">verified</span>
                            </div>
                            <h4 class="reason-title font-headline-h3 text-headline-h3 m-0">
                                {{ app()->getLocale() === 'en' ? 'Education Implementation Experience' : 'Pengalaman Implementasi Pendidikan' }}
                            </h4>
                        </div>
                        <p class="reason-desc text-on-surface-variant font-body-md text-body-md leading-relaxed">
                            {{ app()->getLocale() === 'en'
    ? 'Track record of building PPDB, LMS, and student/parent portals for schools, foundations, and universities in Indonesia.'
    : 'Rekam jejak membangun PPDB, LMS, dan portal siswa/orang tua untuk sekolah, yayasan, dan perguruan tinggi di indonesia.' }}
                        </p>
                    </div>

                    {{-- Card 4 : Kemampuan Regional --}}
                    <div
                        class="reason-card bg-surface-container-lowest p-unit-lg border border-outline-variant group hover:shadow-xl transition-all rounded-[20px]">
                        <div class="reason-header flex items-center gap-4 mb-unit-md">
                            <div
                                class="w-12 h-12 shrink-0 bg-primary-container/10 flex items-center justify-center rounded-[20px] group-hover:bg-primary-container transition-colors">
                                <span
                                    class="material-symbols-outlined text-primary group-hover:text-on-primary-container">hub</span>
                            </div>
                            <h4 class="reason-title font-headline-h3 text-headline-h3 m-0">
                                {{ app()->getLocale() === 'en' ? 'Regional Capability' : 'Kemampuan Regional' }}
                            </h4>
                        </div>
                        <p class="reason-desc text-on-surface-variant font-body-md text-body-md leading-relaxed">
                            {{ app()->getLocale() === 'en'
    ? 'Backed by Romulus Digital, giving us the scale and depth of a regional tech giant.'
    : 'Didukung oleh Romulus Digital, memberi kami skala dan kedalaman raksasa teknologi regional.' }}
                        </p>
                    </div>

                    {{-- Card 5 : Keamanan & Governance Data --}}
                    <div
                        class="reason-card bg-surface-container-lowest p-unit-lg border border-outline-variant group hover:shadow-xl transition-all rounded-[20px]">
                        <div class="reason-header flex items-center gap-4 mb-unit-md">
                            <div
                                class="w-12 h-12 shrink-0 bg-primary-container/10 flex items-center justify-center rounded-[20px] group-hover:bg-primary-container transition-colors">
                                <span
                                    class="material-symbols-outlined text-primary group-hover:text-on-primary-container">shield</span>
                            </div>
                            <h4 class="reason-title font-headline-h3 text-headline-h3 m-0">
                                {{ app()->getLocale() === 'en' ? 'Data Security & Governance' : 'Keamanan & Governance Data' }}
                            </h4>
                        </div>
                        <p class="reason-desc text-on-surface-variant font-body-md text-body-md leading-relaxed">
                            {{ app()->getLocale() === 'en'
    ? 'Implement role-based access controls and industry-standard data security practices to protect student, teacher, and institutional data.'
    : 'Menerapkan kontrol akses berbasis peran dan praktik keamanan data standar industri untuk melindungi data siswa, guru, dan institusi.' }}
                        </p>
                    </div>

                    {{-- Card 6 : Deployment Cepat --}}
                    <div
                        class="reason-card bg-surface-container-lowest p-unit-lg border border-outline-variant group hover:shadow-xl transition-all rounded-[20px]">
                        <div class="reason-header flex items-center gap-4 mb-unit-md">
                            <div
                                class="w-12 h-12 shrink-0 bg-primary-container/10 flex items-center justify-center rounded-[20px] group-hover:bg-primary-container transition-colors">
                                <span
                                    class="material-symbols-outlined text-primary group-hover:text-on-primary-container">speed</span>
                            </div>
                            <h4 class="reason-title font-headline-h3 text-headline-h3 m-0">
                                {{ app()->getLocale() === 'en' ? 'Rapid Deployment' : 'Deployment Cepat' }}
                            </h4>
                        </div>
                        <p class="reason-desc text-on-surface-variant font-body-md text-body-md leading-relaxed">
                            {{ app()->getLocale() === 'en'
    ? 'Purpose-built frameworks that help you go from concept to launch with measurable efficiency.'
    : 'Kerangka kerja yang dirancang khusus untuk membantu Anda dari konsep hingga peluncuran dengan efisiensi terukur.' }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section 5 : Tim Inti Nakala --}}
        <section id="team" class="scroll-mt-28">

            {{-- Core Tim Grid --}}
            <div class="py-unit-xl px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
                <div class="mb-unit-xl">
                    <span
                        class="font-label-sm text-primary text-center justify-center uppercase tracking-[0.3em] mb-unit-sm block">{{ app()->getLocale() === 'en' ? 'Capability Reference' : 'Referensi Kapabilitas' }}</span>
                    <h2
                        class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-center justify-center text-on-surface mt-unit-sm mb-unit-md">
                        {{ app()->getLocale() === 'en' ? 'Core Team Nakala' : 'Tim Inti Nakala' }}
                    </h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant text-center">
                        {{ app()->getLocale() === 'en'
    ? 'Every project is led by Nakala Digital as the accountable, client-facing team. Our strategic partner strengthens confidence in the background without changing who owns the relationship.'
    : 'Setiap proyek dipimpin oleh Nakala Digital sebagai tim utama yang akuntabel dan berhadapan langsung dengan klien. Mitra strategis kami memperkuat keyakinan di belakang layar tanpa mengubah siapa yang memegang relasi utama.' }}
                    </p>
                </div>
                <div class="flex flex-wrap justify-center gap-gutter">

                    {{-- CEO --}}
                    <div
                        class="group bg-surface-container-lowest border border-outline-variant rounded-[20px] overflow-hidden transition-all duration-300 hover:shadow-xl w-full md:w-[calc(50%-12px)] max-w-md">
                        <div class="aspect-square relative overflow-hidden">
                            <img alt="Milzam Zihni"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                src="{{ asset('assets/team/milzam.jpeg') }}" />
                            <div class="absolute top-0 left-0 w-1 h-full bg-primary-container"></div>
                        </div>
                        <div class="p-unit-lg">
                            <p class="text-primary font-label-sm text-label-sm uppercase mb-unit-xs tracking-widest">
                                Chief
                                Executive Officer</p>
                            <h3 class="font-headline-h3 text-headline-h3 mb-unit-md text-on-background">Milzam Zihni
                            </h3>
                            <div class="space-y-unit-sm">
                                <div
                                    class="flex items-center gap-unit-sm text-on-surface-variant font-body-md text-body-md">
                                    <span class="material-symbols-outlined text-primary"
                                        style="font-variation-settings: 'FILL' 1;">handshake</span>
                                    <span>{{ app()->getLocale() === 'en' ? 'Client Engagement' : 'Engagement Klien' }}</span>
                                </div>
                                <div
                                    class="flex items-center gap-unit-sm text-on-surface-variant font-body-md text-body-md">
                                    <span class="material-symbols-outlined text-primary"
                                        style="font-variation-settings: 'FILL' 1;">verified</span>
                                    <span>{{ app()->getLocale() === 'en' ? 'Quality Assurance' : 'Quality Assurance' }}</span>
                                </div>
                                <div
                                    class="flex items-center gap-unit-sm text-on-surface-variant font-body-md text-body-md">
                                    <span class="material-symbols-outlined text-primary"
                                        style="font-variation-settings: 'FILL' 1;">task_alt</span>
                                    <span>{{ app()->getLocale() === 'en' ? 'Project Delivery' : 'Delivery Proyek' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- COO --}}
                    <div
                        class="group bg-surface-container-lowest border border-outline-variant rounded-[20px] overflow-hidden transition-all duration-300 hover:shadow-xl w-full md:w-[calc(50%-12px)] max-w-md">
                        <div class="aspect-square relative overflow-hidden">
                            <img alt="Raul Mahya Komaran"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                src="{{ asset('assets/team/raul.jpeg') }}" />
                            <div class="absolute top-0 left-0 w-1 h-full bg-primary-container"></div>
                        </div>
                        <div class="p-unit-lg">
                            <p class="text-primary font-label-sm text-label-sm uppercase mb-unit-xs tracking-widest">
                                Chief
                                Operating Officer</p>
                            <h3 class="font-headline-h3 text-headline-h3 mb-unit-md text-on-background">Raul Mahya
                                Komaran
                            </h3>
                            <div class="space-y-unit-sm">
                                <div
                                    class="flex items-center gap-unit-sm text-on-surface-variant font-body-md text-body-md">
                                    <span class="material-symbols-outlined text-primary"
                                        style="font-variation-settings: 'FILL' 1;">settings_suggest</span>
                                    <span>{{ app()->getLocale() === 'en' ? 'Operational Strategy' : 'Strategi Operasional' }}</span>
                                </div>
                                <div
                                    class="flex items-center gap-unit-sm text-on-surface-variant font-body-md text-body-md">
                                    <span class="material-symbols-outlined text-primary"
                                        style="font-variation-settings: 'FILL' 1;">groups_2</span>
                                    <span>{{ app()->getLocale() === 'en' ? 'Stakeholder Follow-up' : 'Tindak Lanjut Stakeholder' }}</span>
                                </div>
                                <div
                                    class="flex items-center gap-unit-sm text-on-surface-variant font-body-md text-body-md">
                                    <span class="material-symbols-outlined text-primary"
                                        style="font-variation-settings: 'FILL' 1;">description</span>
                                    <span>{{ app()->getLocale() === 'en' ? 'Documentation & Compliance' : 'Dokumentasi & Kepatuhan' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Section 5 : Jaringan Mitra Kami --}}
            <section id="partnership-capability" class="py-unit-xl scroll-mt-28">
                <div class="px-margin-mobile md:px-margin-desktop max-w-[1440px] mx-auto">
                    <div class="mb-unit-xl">
                        <span
                            class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">{{ app()->getLocale() === 'en' ? 'Partnership Capability' : 'Kapabilitas Kemitraan' }}</span>
                        <h2
                            class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-surface mt-unit-sm mb-unit-md">
                            {{ app()->getLocale() === 'en' ? 'Our Partner Network' : 'Jaringan Mitra Kami' }}
                        </h2>
                        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl text-start">
                            {{ app()->getLocale() === 'en'
    ? 'Backed by Romulus Digital\'s regional capability to strengthen AI, D365, and large-scale enterprise transformation.'
    : 'Didukung kapabilitas regional Romulus Digital untuk memperkuat AI, D365, dan transformasi enterprise skala besar.' }}
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-y-unit-sm gap-x-2 max-w-[1228px] mx-auto">

                        {{-- Vi Duong --}}
                        <div
                            class="w-full max-w-[610px] min-h-[180px] border border-[#BBBBBB] rounded-[20px] bg-surface-container-lowest p-unit-md flex flex-col sm:flex-row items-center gap-unit-md sm:gap-unit-lg">
                            <div
                                class="w-[127px] h-[127px] rounded-[20px] bg-surface-container-high flex items-center justify-center shrink-0">
                                <span
                                    class="material-symbols-outlined text-5xl text-on-surface-variant/40">person</span>
                            </div>
                            <div class="space-y-unit-sm">
                                <h3 class="font-headline-h3 text-headline-h3 text-on-surface">Vi Duong</h3>
                                <p class="font-label-sm text-primary font-semibold tracking-[0.5px]">Operation Lead</p>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    {{ app()->getLocale() === 'en'
    ? 'Over 20 years of experience in business operations, growth, and execution.'
    : 'Lebih dari 20 tahun pengalaman dalam operasional bisnis, pertumbuhan, dan eksekusi.' }}
                                </p>
                            </div>
                        </div>

                        {{-- Gary Tan --}}
                        <div
                            class="w-full max-w-[610px] min-h-[180px] border border-[#BBBBBB] rounded-[20px] bg-surface-container-lowest p-unit-md flex flex-col sm:flex-row items-center gap-unit-md sm:gap-unit-lg">
                            <div
                                class="w-[127px] h-[127px] rounded-[20px] bg-surface-container-high flex items-center justify-center shrink-0">
                                <span
                                    class="material-symbols-outlined text-5xl text-on-surface-variant/40">person</span>
                            </div>
                            <div class="space-y-unit-sm">
                                <h3 class="font-headline-h3 text-headline-h3 text-on-surface">Gary Tan</h3>
                                <p class="font-label-sm text-primary font-semibold tracking-[0.5px]">Business Lead</p>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    {{ app()->getLocale() === 'en' ? 'Experienced in digital transformation for enterprise and government sectors.' : 'Berpengalaman dalam transformasi digital untuk sektor enterprise dan pemerintahan.' }}
                                </p>
                            </div>
                        </div>

                        {{-- Erloy Chew --}}
                        <div
                            class="w-full max-w-[610px] min-h-[180px] border border-[#BBBBBB] rounded-[20px] bg-surface-container-lowest p-unit-md flex flex-col sm:flex-row items-center gap-unit-md sm:gap-unit-lg">
                            <div
                                class="w-[127px] h-[127px] rounded-[20px] bg-surface-container-high flex items-center justify-center shrink-0">
                                <span
                                    class="material-symbols-outlined text-5xl text-on-surface-variant/40">person</span>
                            </div>
                            <div class="space-y-unit-sm">
                                <h3 class="font-headline-h3 text-headline-h3 text-on-surface">Erloy Chew</h3>
                                <p class="font-label-sm text-primary font-semibold tracking-[0.5px]">Project Management
                                    Lead</p>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    {{ app()->getLocale() === 'en' ? 'Experienced in web applications, core banking systems, and scalable solutions.' : 'Berpengalaman dalam aplikasi web, sistem core banking, dan solusi yang dapat diskalakan.' }}
                                </p>
                            </div>
                        </div>

                        {{-- Loc le --}}
                        <div
                            class="w-full max-w-[610px] min-h-[180px] border border-[#BBBBBB] rounded-[20px] bg-surface-container-lowest p-unit-md flex flex-col sm:flex-row items-center gap-unit-md sm:gap-unit-lg">
                            <div
                                class="w-[127px] h-[127px] rounded-[20px] bg-surface-container-high flex items-center justify-center shrink-0">
                                <span
                                    class="material-symbols-outlined text-5xl text-on-surface-variant/40">person</span>
                            </div>
                            <div class="space-y-unit-sm">
                                <h3 class="font-headline-h3 text-headline-h3 text-on-surface">Loc le</h3>
                                <p class="font-label-sm text-primary font-semibold tracking-[0.5px]">Solution Architect
                                    Lead</p>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    {{ app()->getLocale() === 'en' ? 'Secure Solution Architecture and enterprise-class platform.' : 'Arsitektur Solusi yang aman dan platform berkelas enterprise.' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Scalable Team Section --}}
            <section class="py-unit-xl bg-inverse-surface text-surface">
                <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-unit-xl">
                        <div class="w-full lg:w-1/2">
                            <div
                                class="bg-surface-container-lowest/10 p-unit-lg border border-surface-variant/20 rounded-[20px] backdrop-blur-sm">
                                <h2
                                    class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 mb-unit-lg text-primary-fixed-dim">
                                    {{ app()->getLocale() === 'en' ? 'Nakala leads delivery. Romulus strengthens trust.' : 'Nakala memimpin delivery. Romulus memperkuat trust.' }}
                                </h2>
                                <p class="font-body-lg text-body-lg text-surface-variant mb-unit-lg">
                                    {{ app()->getLocale() === 'en'
    ? 'This partnership model keeps accountability clear: Nakala is the primary team your project works with day to day, while Romulus Digital acts as a strategic partner behind the scenes for regional insight, technical confidence, and additional specialist access.'
    : 'Model kemitraan ini menjaga akuntabilitas tetap jelas: Nakala adalah tim utama yang bekerja langsung dengan proyek Anda setiap hari, sementara Romulus Digital berperan sebagai mitra strategis di belakang layar untuk insight regional, keyakinan teknis, dan akses spesialis tambahan.' }}
                                </p>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-unit-md">
                                    <div
                                        class="flex min-h-[132px] items-center justify-center bg-surface/5 p-unit-md border-l-4 border-tertiary">
                                        <div
                                            class="flex h-[84px] w-full max-w-[220px] items-center justify-center rounded-[20px] bg-white px-5 ring-1 ring-white/20">
                                            <img alt="Nakala Digital" class="h-[56px] w-auto max-w-full object-contain"
                                                src="{{ asset('assets/logo-nakala.png') }}" />
                                        </div>
                                    </div>
                                    <div
                                        class="flex min-h-[100px] items-center justify-center bg-surface/5 p-unit-md border-l-4 border-primary-fixed-dim">
                                        <div
                                            class="flex h-[60px] w-full max-w-[160px] items-center justify-center rounded-[20px] border border-white/35 bg-white/5 px-4">
                                            <img alt="Romulus Digital"
                                                class="h-[36px] w-auto max-w-full object-contain opacity-70"
                                                src="{{ asset('assets/romulus-putih.png') }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <div class="relative rounded-[20px] overflow-hidden border border-outline shadow-2xl">
                                <img class="w-full h-full object-cover"
                                    alt="Network of interconnected nodes across a regional map of Southeast Asia"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuB47IQhwnQ_73ET9EOURjZQvNJ6YnkHUzF_sJxGQ1KPmB0cGMLjojD0IAAJtGTSYs0xl_qcmH3TyKZGCKPcEJfGBMzNxWAYWEdHIac5t0Bp8X0BKRcIpQmRrsna6yksO6lUeUut8hBTV7RVhzO6XCRLlbyk1YJvbAGz2rXdlqp7XkQ2oZCpDwRfSBImRmxU_WeiI9UCRO850c-OkCRV_blyiudN1Bji8I3z3EROaS2bMQg0Wee6O9acOQjf0XHwF_glAuUyttJDVCmh" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        {{-- Section 8 : Siklus Delivery End-to-End --}}
        <section id="delivery-approach" class="py-unit-xl bg-surface-container-lowest">
            <div
                class="flex flex-col justify-center items-start w-full max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop min-h-[520px] sm:min-h-[660px]">
                <div class="mb-20 text-center max-w-2xl mx-auto">
                    <span class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">Delivery
                        Approach</span>
                    <h2
                        class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-background mb-4">
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

        {{-- Section 9 : Menjamin Kualitas, Bukan Sekadar Membangun Aplikasi --}}
        <section id="qa-governance" class="py-unit-xl bg-surface-container-low">
            <div
                class="flex flex-col justify-center items-start w-full max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="mb-unit-lg text-center max-w-2xl mx-auto">
                    <span class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">{{
    app()->getLocale() === 'en' ? 'Our Differentiator' : 'Pembeda Utama Kami' }}</span>
                    <h2
                        class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-background mb-4">
                        {{ app()->getLocale() === 'en'
    ? 'Ensuring Quality, Not Just Building Applications'
    : 'Menjamin Kualitas, Bukan Sekadar Membangun Aplikasi' }}
                    </h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        {{ app()->getLocale() === 'en'
    ? 'At Nakala Digital, our commitment does not stop when the code is written — we apply strict QA Governance to ensure every digital solution we release runs stable, secure, and ready to use.'
    : 'Di Nakala Digital, komitmen kami tidak berhenti saat kode selesai ditulis, kami menerapkan QA Governance yang ketat untuk memastikan setiap solusi digital yang kami rilis berjalan dengan stabil, aman, dan siap pakai.' }}
                    </p>
                </div>

                <div
                    class="w-full max-w-[1168px] mx-auto min-h-[1143px] bg-surface-container-lowest border border-outline-variant rounded-[24px] p-unit-lg lg:p-unit-xl flex flex-col gap-unit-lg">
                    <div class="flex items-start gap-unit-md">
                        <div
                            class="w-[48px] h-[48px] rounded-[12px] bg-primary/10 flex items-center justify-center shrink-0">
                            <svg width="22.5" height="25.62" viewBox="0 0 25 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1 4.285L12.2556 1L23.5 4.285V11.0213C23.4996 14.4735 22.413 17.8381 20.3943 20.6385C18.3756 23.439 15.5269 25.5333 12.2519 26.625C8.9756 25.5338 6.12581 23.4392 4.10631 20.6381C2.08682 17.837 1.00005 14.4713 1 11.0181V4.285Z"
                                    stroke="#12AED0" stroke-width="2" stroke-linejoin="round" />
                                <path d="M6.625 12.875L11 17.25L18.5 9.75" stroke="#12AED0" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-headline-h3 text-headline-h3 text-on-surface mb-unit-sm">
                                {{ app()->getLocale() === 'en' ? 'High-Standard Delivery Discipline' : 'Disiplin Pengiriman Standar Tinggi' }}
                            </h3>
                            <p class="font-body-md text-body-md text-on-surface-variant max-w-3xl">
                                {{ app()->getLocale() === 'en'
    ? 'We position quality assurance as a core pillar from the very start to the end of the project, not merely an add-on at the end of the development process.'
    : 'Kami memposisikan penjaminan mutu sebagai pilar utama dari awal hingga akhir proyek, bukan sekadar pelengkap di akhir proses pengembangan.' }}
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md max-w-[1028px] mx-auto w-full">

                        {{-- Card 1 --}}
                        <div
                            class="w-full max-w-[505px] min-h-[240px] bg-surface-container-low rounded-[20px] p-unit-lg flex flex-col gap-unit-sm">
                            <span class="font-headline-h3 text-headline-h3 text-primary">01</span>
                            <h4 class="font-headline-h3 text-headline-h3 text-on-surface">
                                {{ app()->getLocale() === 'en' ? 'Thorough Analysis & Planning' : 'Analisis & Perencanaan Matang' }}
                            </h4>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
    ? 'Review business requirements from the start (Requirement Review) and prepare a comprehensive test planning.'
    : 'Melakukan peninjauan kebutuhan bisnis sejak awal (Requirement Review) serta menyusun rencana pengujian (Test Planning) yang komprehensif.' }}
                            </p>
                        </div>

                        {{-- Card 2 --}}
                        <div
                            class="w-full max-w-[505px] min-h-[240px] bg-surface-container-low rounded-[20px] p-unit-lg flex flex-col gap-unit-sm">
                            <span class="font-headline-h3 text-headline-h3 text-primary">02</span>
                            <h4 class="font-headline-h3 text-headline-h3 text-on-surface">
                                {{ app()->getLocale() === 'en' ? 'System & User Validation (SIT/UAT)' : 'Validasi Sistem & Pengguna (SIT/UAT)' }}
                            </h4>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
    ? 'Review business requirements from the start (Requirement Review) and prepare a comprehensive test planning.'
    : 'Melakukan peninjauan kebutuhan bisnis sejak awal (Requirement Review) serta menyusun rencana pengujian (Test Planning) yang komprehensif.' }}
                            </p>
                        </div>

                        {{-- Card 3 --}}
                        <div
                            class="w-full max-w-[505px] min-h-[240px] bg-surface-container-low rounded-[20px] p-unit-lg flex flex-col gap-unit-sm">
                            <span class="font-headline-h3 text-headline-h3 text-primary">03</span>
                            <h4 class="font-headline-h3 text-headline-h3 text-on-surface">
                                {{ app()->getLocale() === 'en' ? 'Issue Management & Release Readiness' : 'Manajemen Isu & Kesiapan Rilis' }}
                            </h4>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
    ? 'Review business requirements from the start (Requirement Review) and prepare a comprehensive test planning.'
    : 'Melakukan peninjauan kebutuhan bisnis sejak awal (Requirement Review) serta menyusun rencana pengujian (Test Planning) yang komprehensif.' }}
                            </p>
                        </div>

                        {{-- Card 4 --}}
                        <div
                            class="w-full max-w-[505px] min-h-[240px] bg-surface-container-low rounded-[20px] p-unit-lg flex flex-col gap-unit-sm">
                            <span class="font-headline-h3 text-headline-h3 text-primary">04</span>
                            <h4 class="font-headline-h3 text-headline-h3 text-on-surface">
                                {{ app()->getLocale() === 'en' ? 'Handover & Warranty' : 'Serah Terima & Garansi' }}
                            </h4>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
    ? 'Review business requirements from the start (Requirement Review) and prepare a comprehensive test planning.'
    : 'Melakukan peninjauan kebutuhan bisnis sejak awal (Requirement Review) serta menyusun rencana pengujian (Test Planning) yang komprehensif.' }}
                            </p>
                        </div>
                    </div>

                    <div
                        class="w-full max-w-[1028px] mx-auto bg-secondary text-white rounded-[20px] min-h-[367px] p-unit-lg flex flex-col justify-center">
                        <h3 class="font-headline-h3 text-headline-h3 text-white mb-unit-md">Artefak QA</h3>
                        <div class="flex flex-col divide-y divide-white/20">
                            <div class="flex items-center gap-unit-md py-unit-sm">
                                <div
                                    class="w-[30px] h-[30px] rounded-[8px] bg-primary/10 flex items-center justify-center shrink-0">
                                    <svg width="12" height="15" viewBox="0 0 12 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.25 0H9.75C10.3467 0 10.919 0.237053 11.341 0.65901C11.7629 1.08097 12 1.65326 12 2.25V12.75C12 13.3467 11.7629 13.919 11.341 14.341C10.919 14.7629 10.3467 15 9.75 15H2.25C1.65326 15 1.08097 14.7629 0.65901 14.341C0.237053 13.919 0 13.3467 0 12.75L0 2.25C0 1.65326 0.237053 1.08097 0.65901 0.65901C1.08097 0.237053 1.65326 0 2.25 0ZM2.25 1.5C2.05109 1.5 1.86032 1.57902 1.71967 1.71967C1.57902 1.86032 1.5 2.05109 1.5 2.25V12.75C1.5 12.9489 1.57902 13.1397 1.71967 13.2803C1.86032 13.421 2.05109 13.5 2.25 13.5H9.75C9.94891 13.5 10.1397 13.421 10.2803 13.2803C10.421 13.1397 10.5 12.9489 10.5 12.75V2.25C10.5 2.05109 10.421 1.86032 10.2803 1.71967C10.1397 1.57902 9.94891 1.5 9.75 1.5H2.25ZM3.75 2.25H8.25C8.44891 2.25 8.63968 2.32902 8.78033 2.46967C8.92098 2.61032 9 2.80109 9 3C9 3.19891 8.92098 3.38968 8.78033 3.53033C8.63968 3.67098 8.44891 3.75 8.25 3.75H3.75C3.55109 3.75 3.36032 3.67098 3.21967 3.53033C3.07902 3.38968 3 3.19891 3 3C3 2.80109 3.07902 2.61032 3.21967 2.46967C3.36032 2.32902 3.55109 2.25 3.75 2.25ZM3.75 11.25H5.25C5.44891 11.25 5.63968 11.329 5.78033 11.4697C5.92098 11.6103 6 11.8011 6 12C6 12.1989 5.92098 12.3897 5.78033 12.5303C5.63968 12.671 5.44891 12.75 5.25 12.75H3.75C3.55109 12.75 3.36032 12.671 3.21967 12.5303C3.07902 12.3897 3 12.1989 3 12C3 11.8011 3.07902 11.6103 3.21967 11.4697C3.36032 11.329 3.55109 11.25 3.75 11.25ZM3.75 8.25H8.25C8.44891 8.25 8.63968 8.32902 8.78033 8.46967C8.92098 8.61032 9 8.80109 9 9C9 9.19891 8.92098 9.38968 8.78033 9.53033C8.63968 9.67098 8.44891 9.75 8.25 9.75H3.75C3.55109 9.75 3.36032 9.67098 3.21967 9.53033C3.07902 9.38968 3 9.19891 3 9C3 8.80109 3.07902 8.61032 3.21967 8.46967C3.36032 8.32902 3.55109 8.25 3.75 8.25ZM3.75 5.25H8.25C8.44891 5.25 8.63968 5.32902 8.78033 5.46967C8.92098 5.61032 9 5.80109 9 6C9 6.19891 8.92098 6.38968 8.78033 6.53033C8.63968 6.67098 8.44891 6.75 8.25 6.75H3.75C3.55109 6.75 3.36032 6.67098 3.21967 6.53033C3.07902 6.38968 3 6.19891 3 6C3 5.80109 3.07902 5.61032 3.21967 5.46967C3.36032 5.32902 3.55109 5.25 3.75 5.25Z"
                                            fill="#12AED0" />
                                    </svg>
                                </div>
                                <span
                                    class="font-body-md text-body-md text-white">{{ app()->getLocale() === 'en' ? 'Requirements Traceability Matrix' : 'Matriks Traceability Kebutuhan' }}</span>
                            </div>
                            <div class="flex items-center gap-unit-md py-unit-sm">
                                <div
                                    class="w-[30px] h-[30px] rounded-[8px] bg-primary/10 flex items-center justify-center shrink-0">
                                    <svg width="15.01" height="14.99" viewBox="0 0 15 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.7575 0C11.52 0 10.5075 1.0125 10.5075 2.25C10.5075 3 10.875 3.6525 11.4375 4.065L9.9975 7.5225C9.915 7.515 9.84 7.5 9.7575 7.5C9.4125 7.5 9.09 7.5825 8.79 7.725L7.275 6.21C7.4175 5.9175 7.5 5.595 7.5 5.2425C7.5 4.005 6.4875 2.9925 5.25 2.9925C4.0125 2.9925 3 4.005 3 5.2425C3 5.8575 3.2475 6.42 3.6525 6.825L2.1225 10.5075C0.945 10.575 0 11.55 0 12.7425C0 13.935 1.0125 14.9925 2.25 14.9925C3.4875 14.9925 4.5 13.98 4.5 12.7425C4.5 11.9925 4.1325 11.34 3.57 10.9275L5.01 7.47C5.0925 7.4775 5.1675 7.4925 5.25 7.4925C5.595 7.4925 5.9175 7.41 6.2175 7.2675L7.7325 8.7825C7.59 9.075 7.5075 9.3975 7.5075 9.75C7.5075 10.9875 8.52 12 9.7575 12C10.995 12 12.0075 10.9875 12.0075 9.75C12.0075 9.135 11.76 8.5725 11.355 8.1675L12.885 4.485C14.0625 4.4175 15.0075 3.4425 15.0075 2.25C15.0075 1.0575 13.995 0 12.7575 0ZM2.2575 13.5C1.845 13.5 1.5075 13.1625 1.5075 12.75C1.5075 12.3375 1.845 12 2.2575 12C2.67 12 3.0075 12.3375 3.0075 12.75C3.0075 13.1625 2.67 13.5 2.2575 13.5ZM4.5075 5.25C4.5075 4.8375 4.845 4.5 5.2575 4.5C5.67 4.5 6.0075 4.8375 6.0075 5.25C6.0075 5.6625 5.67 6 5.2575 6C4.845 6 4.5075 5.6625 4.5075 5.25ZM9.7575 10.5C9.345 10.5 9.0075 10.1625 9.0075 9.75C9.0075 9.3375 9.345 9 9.7575 9C10.17 9 10.5075 9.3375 10.5075 9.75C10.5075 10.1625 10.17 10.5 9.7575 10.5ZM12.7575 3C12.345 3 12.0075 2.6625 12.0075 2.25C12.0075 1.8375 12.345 1.5 12.7575 1.5C13.17 1.5 13.5075 1.8375 13.5075 2.25C13.5075 2.6625 13.17 3 12.7575 3Z"
                                            fill="#12AED0" />
                                    </svg>
                                </div>
                                <span
                                    class="font-body-md text-body-md text-white">{{ app()->getLocale() === 'en' ? 'Test Case & SIT/UAT Report' : 'Test Case & Laporan SIT/UAT' }}</span>
                            </div>
                            <div class="flex items-center gap-unit-md py-unit-sm">
                                <div
                                    class="w-[30px] h-[30px] rounded-[8px] bg-primary/10 flex items-center justify-center shrink-0">
                                    <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15 0H1C0.734784 0 0.48043 0.105357 0.292893 0.292893C0.105357 0.48043 0 0.734784 0 1V12C0 12.2652 0.105357 12.5196 0.292893 12.7071C0.48043 12.8946 0.734784 13 1 13H15C15.2652 13 15.5196 12.8946 15.7071 12.7071C15.8946 12.5196 16 12.2652 16 12V1C16 0.734784 15.8946 0.48043 15.7071 0.292893C15.5196 0.105357 15.2652 0 15 0ZM1 1H15V2.1H1V1ZM1 12V2.9H15V12H1Z"
                                            fill="#12AED0" />
                                    </svg>
                                </div>
                                <span
                                    class="font-body-md text-body-md text-white">{{ app()->getLocale() === 'en' ? 'Automated Test Suite' : 'Test Suite Otomatis' }}</span>
                            </div>
                            <div class="flex items-center gap-unit-md py-unit-sm">
                                <div
                                    class="w-[30px] h-[30px] rounded-[8px] bg-primary/10 flex items-center justify-center shrink-0">
                                    <svg width="16.5" height="11.61" viewBox="0 0 17 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.125 9C4.7125 9 5.2845 9.06575 5.841 9.19725C6.3975 9.32875 6.9505 9.5255 7.5 9.7875V2.4C6.9875 2.1 6.44375 1.875 5.86875 1.725C5.29375 1.575 4.7125 1.5 4.125 1.5C3.675 1.5 3.228 1.54375 2.784 1.63125C2.34 1.71875 1.912 1.85 1.5 2.025V9.45C1.9375 9.3 2.372 9.1875 2.8035 9.1125C3.235 9.0375 3.6755 9 4.125 9ZM9 9.7875C9.55 9.525 10.1033 9.32825 10.6598 9.19725C11.2163 9.06625 11.788 9.0005 12.375 9C12.825 9 13.2658 9.0375 13.6973 9.1125C14.1288 9.1875 14.563 9.3 15 9.45V2.025C14.5875 1.85 14.1593 1.71875 13.7153 1.63125C13.2713 1.54375 12.8245 1.5 12.375 1.5C11.7875 1.5 11.2063 1.575 10.6313 1.725C10.0563 1.875 9.5125 2.1 9 2.4V9.7875ZM7.7535 11.541C7.597 11.497 7.45 11.4375 7.3125 11.3625C6.825 11.075 6.3125 10.8595 5.775 10.716C5.2375 10.5725 4.6875 10.5005 4.125 10.5C3.6 10.5 3.0845 10.5687 2.5785 10.7062C2.0725 10.8437 1.588 11.0375 1.125 11.2875C0.8625 11.425 0.6095 11.4187 0.366 11.2687C0.1225 11.1187 0.0005 10.9 0 10.6125V1.575C0 1.4375 0.0345 1.30625 0.1035 1.18125C0.1725 1.05625 0.2755 0.9625 0.4125 0.9C0.9875 0.6 1.5875 0.375 2.2125 0.225C2.8375 0.0750001 3.475 0 4.125 0C4.85 0 5.5595 0.09375 6.2535 0.28125C6.9475 0.46875 7.613 0.75 8.25 1.125C8.8875 0.75 9.55325 0.46875 10.2473 0.28125C10.9413 0.09375 11.6505 0 12.375 0C13.025 0 13.6625 0.0750001 14.2875 0.225C14.9125 0.375 15.5125 0.6 16.0875 0.9C16.225 0.9625 16.3283 1.05625 16.3973 1.18125C16.4663 1.30625 16.5005 1.4375 16.5 1.575V10.6125C16.5 10.9 16.3783 11.1187 16.1348 11.2687C15.8913 11.4187 15.638 11.425 15.375 11.2875C14.9125 11.0375 14.4282 10.8437 13.9222 10.7062C13.4162 10.5687 12.9005 10.5 12.375 10.5C11.8125 10.5 11.2625 10.572 10.725 10.716C10.1875 10.86 9.675 11.0755 9.1875 11.3625C9.05 11.4375 8.90325 11.497 8.74725 11.541C8.59125 11.585 8.4255 11.6067 8.25 11.6062C8.0745 11.6057 7.90875 11.5837 7.75275 11.5402M9.75 3.582C9.75 3.4695 9.79075 3.354 9.87225 3.2355C9.95375 3.117 10.0442 3.0385 10.1437 3C10.5062 2.875 10.8688 2.78125 11.2313 2.71875C11.5938 2.65625 11.975 2.625 12.375 2.625C12.625 2.625 12.872 2.64075 13.116 2.67225C13.36 2.70375 13.6005 2.74425 13.8375 2.79375C13.95 2.81875 14.047 2.88125 14.1285 2.98125C14.21 3.08125 14.2505 3.19375 14.25 3.31875C14.25 3.53125 14.1813 3.6875 14.0438 3.7875C13.9063 3.8875 13.7312 3.9125 13.5187 3.8625C13.3437 3.825 13.1595 3.797 12.966 3.7785C12.7725 3.76 12.5755 3.7505 12.375 3.75C12.05 3.75 11.7313 3.78125 11.4188 3.84375C11.1063 3.90625 10.8062 3.9875 10.5187 4.0875C10.2937 4.175 10.1095 4.16875 9.966 4.06875C9.8225 3.96875 9.7505 3.80625 9.75 3.58125M9.75 7.70625C9.75 7.59375 9.79075 7.47825 9.87225 7.35975C9.95375 7.24125 10.0442 7.163 10.1437 7.125C10.5062 7 10.8688 6.90625 11.2313 6.84375C11.5938 6.78125 11.975 6.75 12.375 6.75C12.625 6.75 12.872 6.76575 13.116 6.79725C13.36 6.82875 13.6005 6.86925 13.8375 6.91875C13.95 6.94375 14.047 7.00625 14.1285 7.10625C14.21 7.20625 14.2505 7.31875 14.25 7.44375C14.25 7.65625 14.1813 7.8125 14.0438 7.9125C13.9063 8.0125 13.7312 8.0375 13.5187 7.9875C13.3437 7.95 13.1595 7.922 12.966 7.9035C12.7725 7.885 12.5755 7.8755 12.375 7.875C12.05 7.875 11.7313 7.90325 11.4188 7.95975C11.1063 8.01625 10.8062 8.09425 10.5187 8.19375C10.2937 8.28125 10.1095 8.27825 9.966 8.18475C9.8225 8.09125 9.7505 7.93175 9.75 7.70625ZM9.75 5.64375C9.75 5.53125 9.79075 5.41575 9.87225 5.29725C9.95375 5.17875 10.0442 5.1005 10.1437 5.0625C10.5062 4.9375 10.8688 4.84375 11.2313 4.78125C11.5938 4.71875 11.975 4.6875 12.375 4.6875C12.625 4.6875 12.872 4.70325 13.116 4.73475C13.36 4.76625 13.6005 4.80675 13.8375 4.85625C13.95 4.88125 14.047 4.94375 14.1285 5.04375C14.21 5.14375 14.2505 5.25625 14.25 5.38125C14.25 5.59375 14.1813 5.75 14.0438 5.85C13.9063 5.95 13.7312 5.975 13.5187 5.925C13.3437 5.8875 13.1595 5.8595 12.966 5.841C12.7725 5.8225 12.5755 5.813 12.375 5.8125C12.05 5.8125 11.7313 5.84375 11.4188 5.90625C11.1063 5.96875 10.8062 6.05 10.5187 6.15C10.2937 6.2375 10.1095 6.23125 9.966 6.13125C9.8225 6.03125 9.7505 5.86875 9.75 5.64375Z"
                                            fill="#12AED0" />
                                    </svg>
                                </div>
                                <span
                                    class="font-body-md text-body-md text-white">{{ app()->getLocale() === 'en' ? 'Release Readiness Checklist' : 'Checklist Kesiapan Rilis' }}</span>
                            </div>
                            <div class="flex items-center gap-unit-md pt-unit-sm">
                                <div
                                    class="w-[30px] h-[30px] rounded-[8px] bg-primary/10 flex items-center justify-center shrink-0">
                                    <svg width="14.27" height="14.26" viewBox="0 0 15 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.3843 4.94433V2.62683C12.3843 2.21433 12.0468 1.87683 11.6343 1.87683H9.31683L7.65933 0.219333C7.58995 0.149805 7.50753 0.0946447 7.4168 0.0570086C7.32607 0.0193725 7.22881 0 7.13058 0C7.03236 0 6.9351 0.0193725 6.84437 0.0570086C6.75364 0.0946447 6.67122 0.149805 6.60183 0.219333L4.94433 1.87683H2.62683C2.21433 1.87683 1.87683 2.21433 1.87683 2.62683V4.94433L0.219333 6.60183C0.149805 6.67122 0.0946447 6.75364 0.0570086 6.84437C0.0193725 6.9351 0 7.03236 0 7.13058C0 7.22881 0.0193725 7.32607 0.0570086 7.4168C0.0946447 7.50753 0.149805 7.58995 0.219333 7.65933L1.87683 9.31683V11.6343C1.87683 12.0468 2.21433 12.3843 2.62683 12.3843H4.94433L6.60183 14.0418C6.75183 14.1918 6.93933 14.2593 7.13433 14.2593C7.32933 14.2593 7.51683 14.1843 7.66683 14.0418L9.32433 12.3843H11.6418C12.0543 12.3843 12.3918 12.0468 12.3918 11.6343V9.31683L14.0493 7.65933C14.1189 7.58995 14.174 7.50753 14.2117 7.4168C14.2493 7.32607 14.2687 7.22881 14.2687 7.13058C14.2687 7.03236 14.2493 6.9351 14.2117 6.84437C14.174 6.75364 14.1189 6.67122 14.0493 6.60183L12.3918 4.94433H12.3843ZM11.1018 8.47683C11.0323 8.54691 10.9773 8.63003 10.94 8.7214C10.9027 8.81278 10.8838 8.91063 10.8843 9.00933V10.8843H9.00933C8.80683 10.8843 8.61933 10.9668 8.47683 11.1018L7.13433 12.4443L5.79183 11.1018C5.72175 11.0323 5.63864 10.9773 5.54726 10.94C5.45588 10.9027 5.35804 10.8838 5.25933 10.8843H3.38433V9.00933C3.38433 8.80683 3.30183 8.61933 3.16683 8.47683L1.82433 7.13433L3.16683 5.79183C3.23634 5.72175 3.29134 5.63864 3.32866 5.54726C3.36598 5.45589 3.3849 5.35804 3.38433 5.25933V3.38433H5.25933C5.46183 3.38433 5.64933 3.30183 5.79183 3.16683L7.13433 1.82433L8.47683 3.16683C8.61933 3.30933 8.80683 3.38433 9.00933 3.38433H10.8843V5.25933C10.8843 5.46183 10.9668 5.64933 11.1018 5.79183L12.4443 7.13433L11.1018 8.47683Z"
                                            fill="#12AED0" />
                                        <path
                                            d="M6.38406 7.56973L5.41656 6.59473L4.35156 7.65973L6.38406 9.68473L9.91656 6.15973L8.85156 5.09473L6.38406 7.56973Z"
                                            fill="#12AED0" />
                                    </svg>
                                </div>
                                <span
                                    class="font-body-md text-body-md text-white">{{ app()->getLocale() === 'en' ? 'BAST & Warranty Certificate' : 'BAST & Sertifikat Garansi' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    {{-- Footer --}}
    @include('partials.footer')
    @include('partials.lenis-scroll')

    <canvas id="company-hero-network" class="absolute inset-0 z-0 pointer-events-none"></canvas>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const currentYear = new Date().getFullYear();
            const yearSpan = document.getElementById('current-year');
            if (yearSpan) {
                yearSpan.textContent = currentYear;
            }

            // Hero Network Animation
            const canvas = document.getElementById('company-hero-network');
            const section = document.getElementById('company-hero');
            if (canvas && section) {
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
                    if (document.hidden) stop();
                    else if (inViewport) start();
                });

                // Intersection Observer to pause when scrolled out of view
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            inViewport = true;
                            start();
                        } else {
                            inViewport = false;
                            stop();
                        }
                    });
                }, {
                    threshold: 0.1
                });
                observer.observe(section);

                // Initialize
                resize();
                if (!prefersReducedMotion) {
                    start();
                } else {
                    drawFrame();
                }
            }
        });

        // Simple scroll behavior for Navbar
        window.addEventListener('scroll', function () {
            var header = document.querySelector('header.fixed');
            if (header) {
                if (window.scrollY > 50) {
                    header.classList.add('py-2', 'h-16');
                    header.classList.remove('h-20');
                } else {
                    header.classList.remove('py-2', 'h-16');
                    header.classList.add('h-20');
                }
            }
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                var target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Robust Scroll Reveal Animation with Auto-Stagger
        const observerOptions = {
            root: null,
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const revealObserver = new IntersectionObserver((entries, observer) => {
            let delay = 0;
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('is-revealed');
                    }, delay);
                    delay += 150; // Stagger elements that enter viewport simultaneously
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Select specific elements to animate, NOT the giant wrapper sections
        const revealElements = document.querySelectorAll(
            '#vision-mission .bg-primary, ' +
            '#vision-mission .bg-surface-container-low, ' +
            '#why-nakala .reason-card, ' +
            '#why-nakala .mb-unit-lg, ' +
            '#team .grid > div, ' +
            '#methodology .grid > div, ' +
            '#methodology .flex-col, ' +
            '.cta-banner'
        );

        // Add the base class to them
        revealElements.forEach(el => {
            el.classList.add('reveal-on-scroll');
            revealObserver.observe(el);
        });
    </script>

</body>

</html>
