<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        {{ app()->getLocale() === 'en' ? 'Nakala Digital | Local Delivery, Regional Capability' : 'Nakala Digital | Layanan Lokal, Kemampuan Regional' }}
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

            .stat-card:not(:last-child) {
                border-right: 1px solid #12AED0;
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

            .stat-card:not(:last-child) {
                border-right: 1px solid #12AED0;
            }

            .stat-slogan {
                font-size: 22px;
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
                padding-left: 1.5rem !important;
                padding-right: 1.5rem !important;
                padding-top: 0.75rem !important;
                padding-bottom: 0.75rem !important;
                font-size: 14px !important;
            }
        }

        /* SOCIAL PROOF - Scroll Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }

    </style>
</head>

<body class="bg-background text-on-background font-body-md selection:bg-primary-fixed selection:text-on-primary-fixed">
    @include('partials.navbar')
    <main class="pt-20">

        <!-- Hero Section -->
        <section
            class="relative overflow-hidden bg-surface-container-lowest pt-unit-lg pb-unit-xl lg:pt-unit-xl lg:pb-32 border-b border-outline-variant">
            <div
                class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 lg:grid-cols-2 gap-unit-xl items-start">
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
                        <span
                            class="font-label-sm text-primary uppercase tracking-[0.2em] font-semibold">{{ __('messages.hero_support_line') }}</span>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-unit-md pt-unit-md">
                        @php $localeSuffix = app()->getLocale() === 'en' ? '.en' : ''; @endphp
                        <a href="{{ route('contact' . $localeSuffix) }}"
                            class="inline-flex items-center justify-center text-center bg-primary-container text-on-primary-container px-10 py-5 rounded-[20px] font-button text-lg uppercase tracking-widest shadow-lg hover:translate-y-[-2px] transition-transform hero-btn">
                            {{ app()->getLocale() === 'en' ? 'Start Free Consultation' : 'Mulai Konsultasi Gratis' }}
                        </a>
                        <a href="{{ route('services' . $localeSuffix) }}"
                            class="inline-flex items-center justify-center text-center border-2 border-on-secondary-fixed text-on-secondary-fixed px-10 py-5 rounded-[20px] font-button text-lg uppercase tracking-widest hover:bg-surface-container-high transition-colors hero-btn">
                            {{ app()->getLocale() === 'en' ? 'View Our Services' : 'Lihat Layanan' }}
                        </a>
                    </div>
                </div>
                <div class="relative group">
                    <div class="absolute -inset-4 bg-primary/10 rounded-[20px] blur-3xl opacity-0 group-hover:opacity-60 transition-all duration-500 z-0"></div>
                    <div
                        class="relative overflow-hidden rounded-[20px] shadow-2xl border-4 border-white/10 transition-all duration-500 hover:shadow-[0_0_40px_rgba(18,174,208,0.3)] hover:border-primary z-10">
                        <img alt="Nakala Digital Team Photo"
                            class="relative w-full rounded-[20px] transition-all duration-700 ease-out group-hover:scale-105"
                            referrerpolicy="no-referrer"
                            data-alt="Nakala Digital team photo showcasing collaborative work environment"
                            src="https://lh3.googleusercontent.com/pw/AP1GczONjKoKyHeit5LqhDcuNS5vcyLu-2jQcLuSAGAXWKR2NCmTpWIkWZT7KNtFsSOSR9kPtBbHSueE97kPS5FrzU0AJpaDWgUalzXGu5OWuL-ih4o8xcYi" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Partner Badge Section -->
        @include('partials.partner-badge')

        <!-- Social Proof Metrics -->
        <section class="py-unit-xl bg-surface">
            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                    <div class="stat-card opacity-0 translate-y-8" style="--delay: 0s">
                        <div class="stat-slogan">󠁯Professional Delivery</div>
                    </div>
                    <div class="stat-card opacity-0 translate-y-8" style="--delay: 0.15s">
                        <div class="stat-slogan">󠁯Meaningful Solutions</div>
                    </div>
                    <div class="stat-card opacity-0 translate-y-8" style="--delay: 0.3s">
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

        {{-- Solusi Berdasarkan Industri --}}
        <section class="py-unit-xl bg-surface-container-low">
            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="text-center mb-unit-xl">
                    <span
                        class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">{{ app()->getLocale() === 'en' ? 'By Industry' : 'Berdasarkan Industri' }}</span>
                    <h2
                        class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-background mb-unit-sm">
                        {{ app()->getLocale() === 'en' ? 'Solutions for Every Industry' : 'Solusi yang Tepat untuk Setiap Industri' }}
                    </h2>
                    <p class="text-on-surface-variant max-w-2xl mx-auto">
                        {{ app()->getLocale() === 'en' ? 'From education to manufacturing — we deliver digital solutions tailored to the specific needs of your industry.' : 'Dari pendidikan hingga manufaktur kami menghadirkan solusi digital yang sesuai dengan kebutuhan spesifik industri Anda.' }}
                    </p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-gutter">
                    @php
                        $locale = app()->getLocale();
                        $detailRoute = $locale === 'en' ? 'solutions.detail.en' : 'solutions.detail';
                        $solutionsRoute = 'solutions' . ($locale === 'en' ? '.en' : '');
                        $industries = [
                            [
                                'icon' => 'school',
                                'name_en' => 'Education & Academic',
                                'name_id' => 'Pendidikan & Akademik',
                                'desc_en' =>
                                    'School portals, digital PPDB admissions, and AI-powered learning platforms.',
                                'desc_id' => 'Portal sekolah, PPDB digital, dan platform pembelajaran berbasis AI.',
                                'route_id' => 'ppdb-school',
                            ],
                            [
                                'icon' => 'account_balance',
                                'name_en' => 'Financial Services & Enterprise',
                                'name_id' => 'Keuangan & Enterprise',
                                'desc_en' => 'D365 Finance, ERP systems, and financial management solutions.',
                                'desc_id' => 'D365 Finance, sistem ERP, dan solusi manajemen keuangan.',
                                'route_id' => 'd365-support',
                            ],
                            [
                                'icon' => 'badge',
                                'name_en' => 'HR & Talent Management',
                                'name_id' => 'SDM & Pengembangan Talenta',
                                'desc_en' => 'AI-powered hiring, HRMS platforms, and talent development tools.',
                                'desc_id' => 'Rekrutmen berbasis AI, platform HRMS, dan alat pengembangan talenta.',
                                'route_id' => 'hrms-mahya',
                            ],
                            [
                                'icon' => 'precision_manufacturing',
                                'name_en' => 'Energy, Manufacturing & Operations',
                                'name_id' => 'Energi, Manufaktur & Operasi',
                                'desc_en' => 'HSE digitalization, operational automation, and compliance systems.',
                                'desc_id' => 'Digitalisasi HSE, otomasi operasional, dan sistem kepatuhan.',
                                'route_id' => 'hse-operations',
                            ],
                            [
                                'icon' => 'apartment',
                                'name_en' => 'Property & Community',
                                'name_id' => 'Properti & Komunitas',
                                'desc_en' => 'Community cash management, billing, and resident engagement platforms.',
                                'desc_id' => 'Manajemen kas komunitas, billing, dan platform keterlibatan warga.',
                                'route_id' => 'wargakas',
                            ],
                            [
                                'icon' => 'cloud',
                                'name_en' => 'Technology & SaaS',
                                'name_id' => 'Teknologi & SaaS',
                                'desc_en' => 'Custom SaaS platforms, AI automation, and end-to-end digital consulting.',
                                'desc_id' => 'Platform SaaS kustom, otomasi AI, dan konsultasi digital end-to-end.',
                                'route_id' => 'ai-automation',
                            ],
                        ];
                    @endphp
                    @foreach ($industries as $ind)
                        <article
                            class="bg-surface-container-lowest rounded-[20px] p-unit-lg border border-outline-variant hover:border-primary transition-all group flex flex-col">
                            <span
                                class="material-symbols-outlined text-primary text-4xl mb-unit-sm block">{{ $ind['icon'] }}</span>
                            <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-unit-xs">
                                {{ $locale === 'en' ? $ind['name_en'] : $ind['name_id'] }}</h3>
                            <p class="text-on-surface-variant text-sm mb-unit-md">
                                {{ $locale === 'en' ? $ind['desc_en'] : $ind['desc_id'] }}</p>
                            <a href="{{ $ind['route_id'] ? route($detailRoute, $ind['route_id']) : route($solutionsRoute) }}"
                                class="text-primary font-bold text-sm inline-flex items-center gap-1 mt-auto group-hover:gap-2 transition-all">
                                {{ app()->getLocale() === 'en' ? 'View Solutions' : 'Lihat Solusi' }}
                                <span class="material-symbols-outlined text-xs">arrow_forward</span>
                            </a>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- About / Narrative Section -->
        <section class="py-unit-xl bg-surface-container-lowest">
            <div
                class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 lg:grid-cols-2 gap-unit-xl items-center">
                <div class="order-2 lg:order-1 relative group">
                    <div class="absolute -inset-4 bg-primary/10 rounded-[20px] blur-3xl opacity-0 group-hover:opacity-60 transition-all duration-500 z-0"></div>
                    <div
                        class="relative overflow-hidden rounded-[20px] shadow-2xl border-4 border-white/10 transition-all duration-500 hover:shadow-[0_0_40px_rgba(18,174,208,0.3)] hover:border-primary z-10">
                        <img alt="Nakala Digital Team Collaboration"
                            class="relative w-full h-full object-cover rounded-[20px] transition-all duration-700 ease-out group-hover:scale-105"
                            data-alt="A diverse group of professional software engineers and digital consultants collaborating in a sleek, minimalist office environment with floor-to-ceiling glass windows. The lighting is crisp and natural, emphasizing a bright, light-mode corporate aesthetic. They are working around a large table with modern laptops, reflecting a mood of technical rigor and collaborative problem-solving. The scene uses a palette of whites, cool greys, and subtle electric cyan accents."
                            src="https://lh3.googleusercontent.com/pw/AP1GczPcLunXXRXpVzMYzap_WnPtRXnR2Jo4NuQPPUzVg8-vrx0EsyVyp6xNfw5SiwvUOFNn-0Gh09GGJ-XXv4hrLPtGXYmvPJqHKkNtw412R7dZAsqVjBG-" />
                    </div>
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
                        <div>
                            <span class="block font-headline-h3 text-on-background">100%</span>
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
                                    ? 'We provide software development, AI and GenAI solutions, technology consulting, web and portal development, QA governance, and managed support for enterprise platforms including Microsoft Dynamics 365. Each service is delivered with local context and regional capability.'
                                    : 'Kami menyediakan pengembangan perangkat lunak, solusi AI dan GenAI, konsultasi teknologi, pengembangan web dan portal, tata kelola QA, serta dukungan terkelola untuk platform enterprise termasuk Microsoft Dynamics 365. Setiap layanan diberikan dengan konteks lokal dan kapabilitas regional.' }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="accordion-item bg-white border border-outline-variant rounded-[20px] p-5 transition-all hover:border-primary shadow-sm">
                        <button class="w-full flex justify-between items-center text-left"
                            onclick="toggleAccordion(this)">
                            <span
                                class="font-headline-h3 text-lg text-on-surface">{{ app()->getLocale() === 'en' ? 'How does the project engagement process work?' : 'Bagaimana proses engagement project?' }}</span>
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
                                class="font-headline-h3 text-lg text-on-surface">{{ app()->getLocale() === 'en' ? 'Is post-launch support available?' : 'Apakah tersedia support setelah go-live?' }}</span>
                            <span
                                class="material-symbols-outlined toggle-icon transition-transform text-outline">expand_more</span>
                        </button>
                        <div class="accordion-content">
                            <p class="pt-4 font-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'Yes. We provide ongoing support through flexible SLAs, including system monitoring, maintenance, feature updates, and technical assistance. Our managed support covers L1 to L3 support, ensuring your platform remains stable and up-to-date after launch.'
                                    : 'Ya. Kami menyediakan dukungan berkelanjutan melalui SLA yang fleksibel, termasuk monitoring sistem, maintenance, pembaruan fitur, dan bantuan teknis. Dukungan terkelola kami mencakup L1 hingga L3, memastikan platform Anda tetap stabil dan terkini setelah peluncuran.' }}
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
                        class="inline-block bg-tertiary-fixed text-on-tertiary-fixed px-12 py-6 rounded-[20px] font-button text-xl uppercase tracking-widest shadow-xl hover:scale-105 transition-transform active:scale-100">
                        {{ app()->getLocale() === 'en' ? 'Schedule a Free Consultation' : 'Jadwalkan Konsultasi Gratis' }}
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    @include('partials.footer')
    @include('partials.lenis-scroll')
    <script>
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
    </script>

    <script>
        (function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationDelay = entry.target.style.getPropertyValue('--delay');
                        entry.target.classList.add('animate-fade-in-up');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.3 });
            document.querySelectorAll('.stat-card').forEach(el => observer.observe(el));
        })();
    </script>
</body>

</html>
