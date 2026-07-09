<!DOCTYPE html>

<html class="light" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ app()->getLocale() === 'en' ? 'Company Profile | Nakala Digital' : 'Profil Perusahaan | Nakala Digital' }}</title>
    @include('partials.seo', [
        'title' => app()->getLocale() === 'en' ? 'Company Profile | Nakala Digital' : 'Profil Perusahaan | Nakala Digital',
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

        <!-- ============================================================ -->
        <!-- Section 1: Hero                                              -->
        <!-- ============================================================ -->
        <header id="company-hero" class="relative bg-surface overflow-hidden">
            <div
                class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto pt-unit-lg pb-unit-xl lg:pt-unit-xl lg:pb-32 grid grid-cols-1 md:grid-cols-2 gap-gutter items-center">
                <div class="space-y-unit-md z-10">
                    <div
                        class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-4 py-1.5 rounded-full font-label-sm text-label-sm uppercase tracking-widest">
                        <span class="material-symbols-outlined text-[16px]">business</span>
                        {{ app()->getLocale() === 'en' ? 'Company Profile' : 'Profil Perusahaan' }}
                    </div>
                    <h1
                        class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-on-surface tracking-tight">
                        {{ app()->getLocale() === 'en' ? 'Local partner for AI, software, and digital solutions.' : 'Mitra lokal untuk AI, software, dan solusi digital.' }}
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-lg">
                        {{ app()->getLocale() === 'en'
                            ? 'Bridging local expertise with Romulus Digital\'s regional capability to empower your enterprise.'
                            : 'Menghubungkan keahlian lokal dengan kemampuan regional Romulus Digital untuk memberdayakan bisnis Anda.' }}
                    </p>
                    <div class="pt-unit-md">
                        <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}"
                            class="inline-block bg-primary text-on-primary font-button text-button px-unit-lg py-unit-md rounded-lg shadow-lg hover:scale-105 transition-transform">
                            {{ app()->getLocale() === 'en' ? 'Start Discovery Session' : 'Mulai Sesi Discovery' }}
                        </a>
                    </div>
                </div>
                <div class="relative mt-unit-lg md:mt-0">
                    <div class="absolute -top-10 -right-10 w-64 h-64 bg-primary-fixed opacity-20 rounded-full blur-3xl">
                    </div>
                    <img alt="Software Development Workflow"
                        class="rounded-xl shadow-2xl border border-outline-variant relative z-10 object-cover w-full h-[400px]"
                        data-alt="A group of professional software engineers..."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuARjNPNzkbtHKbzPJa5qHoWQBSs9eF75JXSSBiByw6ao2Np8mzZQTMNZRPe0To39pJI5eHYiWUYDcSVk5dDBOsVqo9co64wiCoq31MqgALZqldSWB_gXG2cvmMZMciEjeRuDhe9-P2E24Schimpsl_ujy1HLub-3wz8RUkB-5VVFU3NwTWBWd83OISeJweefFAsmceqnTC8Vq7JOigcRes6ICW7NG-GgiPD2U3OytBhYDdDVLA15yQ0NWOi4xoRmbZBzm57X2iv2QoO" />
                </div>
            </div>
        </header>

        <!-- Sticky Sub-Navigation (appears on scroll) -->
        @include('partials.company-profile-nav')

        <!-- ============================================================ -->
        <!-- Section 2: Vision & Mission (Bento Grid)                     -->
        <!-- ============================================================ -->
        <section id="vision-mission" class="py-unit-xl px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto scroll-mt-28">
            <div class="mb-unit-lg">
                <span
                    class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">{{ app()->getLocale() === 'en' ? 'Solution Highlight' : 'Sorotan Solusi' }}</span>
                <h2 class="font-headline-h2 text-headline-h2 text-on-surface">
                    {{ app()->getLocale() === 'en' ? 'Vision & Mission' : 'Visi & Misi' }}</h2>
                <div class="h-1.5 w-24 bg-primary-container mt-unit-sm"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">

                <!-- Vision -->
                <div
                    class="md:col-span-4 bg-primary text-on-primary p-unit-lg rounded-xl flex flex-col justify-between border-t-4 border-primary-fixed">
                    <div class="space-y-unit-md">
                        <span class="material-symbols-outlined text-4xl"
                            style="font-variation-settings: 'FILL' 1;">visibility</span>
                        <h3 class="font-headline-h3 text-headline-h3">
                            {{ app()->getLocale() === 'en' ? 'Our Vision' : 'Visi Kami' }}
                        </h3>
                        <p class="font-body-md text-body-md opacity-90">
                            @if (app()->getLocale() === 'en')
                                To become a strategic technology partner that delivers
                                <strong>professional, meaningful, and impactful</strong> digital solutions for
                                organizational growth in Indonesia and the regional market.
                            @else
                                Menjadi mitra teknologi strategis yang menghasilkan solusi digital
                                <strong>profesional, bermakna, dan berdampak</strong> bagi pertumbuhan organisasi di
                                Indonesia serta pasar regional.
                            @endif
                        </p>
                    </div>
                </div>

                <!-- Mission Points -->
                <div class="md:col-span-8 space-y-unit-md">
                    <h3 class="font-headline-h3 text-headline-h3 text-on-surface">
                        {{ app()->getLocale() === 'en' ? 'Our Mission' : 'Misi Kami' }}
                    </h3>
                    <div
                        class="bg-surface-container-low p-unit-md border border-outline-variant hover:border-primary transition-colors flex gap-unit-md">
                        <span class="material-symbols-outlined text-primary shrink-0">arrow_forward</span>
                        <p class="text-on-surface-variant text-body-md">
                            {{ app()->getLocale() === 'en'
                                ? 'Deliver solutions with strong governance, Agile/Scrum delivery, QA discipline, and transparent communication.'
                                : 'Menghadirkan solusi dengan tata kelola yang kuat, delivery Agile/Scrum, disiplin QA, dan komunikasi yang transparan.' }}
                        </p>
                    </div>
                    <div
                        class="bg-surface-container-low p-unit-md border border-outline-variant hover:border-primary transition-colors flex gap-unit-md">
                        <span class="material-symbols-outlined text-primary shrink-0">arrow_forward</span>
                        <p class="text-on-surface-variant text-body-md">
                            {{ app()->getLocale() === 'en'
                                ? 'Build meaningful digital products that solve real operational and business pain points.'
                                : 'Membangun produk digital bermakna yang menyelesaikan masalah operasional dan bisnis yang nyata.' }}
                        </p>
                    </div>
                    <div
                        class="bg-surface-container-low p-unit-md border border-outline-variant hover:border-primary transition-colors flex gap-unit-md">
                        <span class="material-symbols-outlined text-primary shrink-0">arrow_forward</span>
                        <p class="text-on-surface-variant text-body-md">
                            {{ app()->getLocale() === 'en'
                                ? 'Enable AI-powered automation and data-driven workflows for measurable business impact.'
                                : 'Mendorong otomasi berbasis AI dan workflow berbasis data untuk dampak bisnis yang terukur.' }}
                        </p>
                    </div>
                    <div
                        class="bg-surface-container-low p-unit-md border border-outline-variant hover:border-primary transition-colors flex gap-unit-md">
                        <span class="material-symbols-outlined text-primary shrink-0">arrow_forward</span>
                        <p class="text-on-surface-variant text-body-md">
                            {{ app()->getLocale() === 'en'
                                ? 'Create long-term partnerships with clients, partners, and technology ecosystems.'
                                : 'Menciptakan kemitraan jangka panjang dengan klien, partner, dan ekosistem teknologi.' }}
                        </p>
                    </div>
                    <div
                        class="bg-surface-container-low p-unit-md border border-outline-variant hover:border-primary transition-colors flex gap-unit-md">
                        <span class="material-symbols-outlined text-primary shrink-0">arrow_forward</span>
                        <p class="text-on-surface-variant text-body-md">
                            {{ app()->getLocale() === 'en'
                                ? 'Grow people, capability, and sustainable digital maturity across organizations.'
                                : 'Menumbuhkan SDM, kapabilitas, dan kematangan digital yang berkelanjutan di seluruh organisasi.' }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================================ -->
        <!-- Section 3: Why Nakala (6-pillar grid)                         -->
        <!-- ============================================================ -->
        <section id="why-nakala" class="bg-surface-container-highest py-unit-xl scroll-mt-28">
            <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">

                <div class="mb-unit-lg text-center max-w-3xl mx-auto">
                    <span
                        class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">{{ app()->getLocale() === 'en' ? 'Capability Reference' : 'Referensi Kapabilitas' }}</span>
                    <h2 class="font-headline-h2 text-headline-h2 text-on-surface">
                        {{ app()->getLocale() === 'en' ? 'Why Nakala Digital?' : 'Mengapa Nakala Digital?' }}</h2>
                    <p class="text-on-surface-variant font-body-lg text-body-lg mt-unit-sm">
                        {{ app()->getLocale() === 'en' ? 'Delivering Excellence through 6 Core Pillars' : 'Memberikan Keunggulan melalui 6 Pilar Utama' }}
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">

                    <!-- Reason 1: Local Delivery -->
                    <div
                        class="reason-card bg-surface-container-lowest p-unit-lg border border-outline-variant group hover:shadow-xl transition-all rounded-xl">
                        <div class="reason-header flex items-center gap-4 mb-unit-md">
                            <div
                                class="w-12 h-12 shrink-0 bg-primary-container/10 flex items-center justify-center rounded-lg group-hover:bg-primary-container transition-colors">
                                <span
                                    class="material-symbols-outlined text-primary group-hover:text-on-primary-container">local_shipping</span>
                            </div>
                            <h4 class="reason-title font-headline-h3 text-headline-h3 m-0">
                                {{ app()->getLocale() === 'en' ? 'Local Delivery' : 'Pengiriman Lokal' }}</h4>
                        </div>
                        <p class="reason-desc text-on-surface-variant font-body-md text-body-md leading-relaxed">
                            {{ app()->getLocale() === 'en'
                                ? 'On-the-ground support with deep understanding of the Indonesian market landscape.'
                                : 'Dukungan langsung di lapangan dengan pemahaman mendalam tentang lanskap pasar Indonesia.' }}
                        </p>
                    </div>

                    <!-- Reason 2: AI Mindset -->
                    <div
                        class="reason-card bg-surface-container-lowest p-unit-lg border border-outline-variant group hover:shadow-xl transition-all rounded-xl">
                        <div class="reason-header flex items-center gap-4 mb-unit-md">
                            <div
                                class="w-12 h-12 shrink-0 bg-primary-container/10 flex items-center justify-center rounded-lg group-hover:bg-primary-container transition-colors">
                                <span
                                    class="material-symbols-outlined text-primary group-hover:text-on-primary-container">psychology</span>
                            </div>
                            <h4 class="reason-title font-headline-h3 text-headline-h3 m-0">
                                {{ app()->getLocale() === 'en' ? 'AI Mindset' : 'AI Mindset' }}</h4>
                        </div>
                        <p class="reason-desc text-on-surface-variant font-body-md text-body-md leading-relaxed">
                            {{ app()->getLocale() === 'en'
                                ? 'Every solution we build is future-proofed with AI-readiness from the architectural level.'
                                : 'Setiap solusi yang kami bangun terjamin masa depannya dengan kesiapan AI sejak tingkat arsitektur.' }}
                        </p>
                    </div>

                    <!-- Reason 3: Agile/QA Focused -->
                    <div
                        class="reason-card bg-surface-container-lowest p-unit-lg border border-outline-variant group hover:shadow-xl transition-all rounded-xl">
                        <div class="reason-header flex items-center gap-4 mb-unit-md">
                            <div
                                class="w-12 h-12 shrink-0 bg-primary-container/10 flex items-center justify-center rounded-lg group-hover:bg-primary-container transition-colors">
                                <span
                                    class="material-symbols-outlined text-primary group-hover:text-on-primary-container">verified</span>
                            </div>
                            <h4 class="reason-title font-headline-h3 text-headline-h3 m-0">
                                {{ app()->getLocale() === 'en' ? 'Agile/QA Focused' : 'Fokus Agile/QA' }}</h4>
                        </div>
                        <p class="reason-desc text-on-surface-variant font-body-md text-body-md leading-relaxed">
                            {{ app()->getLocale() === 'en'
                                ? 'Iterative development with rigorous automated testing to ensure rock-solid stability.'
                                : 'Pengembangan iteratif dengan pengujian otomatis yang ketat untuk memastikan stabilitas yang kokoh.' }}
                        </p>
                    </div>

                    <!-- Reason 4: Regional Capability -->
                    <div
                        class="reason-card bg-surface-container-lowest p-unit-lg border border-outline-variant group hover:shadow-xl transition-all rounded-xl">
                        <div class="reason-header flex items-center gap-4 mb-unit-md">
                            <div
                                class="w-12 h-12 shrink-0 bg-primary-container/10 flex items-center justify-center rounded-lg group-hover:bg-primary-container transition-colors">
                                <span
                                    class="material-symbols-outlined text-primary group-hover:text-on-primary-container">hub</span>
                            </div>
                            <h4 class="reason-title font-headline-h3 text-headline-h3 m-0">
                                {{ app()->getLocale() === 'en' ? 'Regional Capability' : 'Kemampuan Regional' }}</h4>
                        </div>
                        <p class="reason-desc text-on-surface-variant font-body-md text-body-md leading-relaxed">
                            {{ app()->getLocale() === 'en'
                                ? 'Backed by Romulus Digital, giving us the scale and depth of a regional tech giant.'
                                : 'Didukung oleh Romulus Digital, memberi kami skala dan kedalaman raksasa teknologi regional.' }}
                        </p>
                    </div>

                    <!-- Reason 5: Enterprise Security -->
                    <div
                        class="reason-card bg-surface-container-lowest p-unit-lg border border-outline-variant group hover:shadow-xl transition-all rounded-xl">
                        <div class="reason-header flex items-center gap-4 mb-unit-md">
                            <div
                                class="w-12 h-12 shrink-0 bg-primary-container/10 flex items-center justify-center rounded-lg group-hover:bg-primary-container transition-colors">
                                <span
                                    class="material-symbols-outlined text-primary group-hover:text-on-primary-container">shield</span>
                            </div>
                            <h4 class="reason-title font-headline-h3 text-headline-h3 m-0">
                                {{ app()->getLocale() === 'en' ? 'Enterprise Security' : 'Keamanan Perusahaan' }}</h4>
                        </div>
                        <p class="reason-desc text-on-surface-variant font-body-md text-body-md leading-relaxed">
                            {{ app()->getLocale() === 'en'
                                ? 'Adhering to international security standards (ISO/IEC 27001) for all data handling.'
                                : 'Mematuhi standar keamanan internasional (ISO/IEC 27001) untuk semua penanganan data.' }}
                        </p>
                    </div>

                    <!-- Reason 6: Rapid Deployment -->
                    <div
                        class="reason-card bg-surface-container-lowest p-unit-lg border border-outline-variant group hover:shadow-xl transition-all rounded-xl">
                        <div class="reason-header flex items-center gap-4 mb-unit-md">
                            <div
                                class="w-12 h-12 shrink-0 bg-primary-container/10 flex items-center justify-center rounded-lg group-hover:bg-primary-container transition-colors">
                                <span
                                    class="material-symbols-outlined text-primary group-hover:text-on-primary-container">speed</span>
                            </div>
                            <h4 class="reason-title font-headline-h3 text-headline-h3 m-0">
                                {{ app()->getLocale() === 'en' ? 'Rapid Deployment' : 'Deployment Cepat' }}</h4>
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

        <!-- ============================================================ -->
        <!-- Section 4: Team (CEO, COO cards + Scalable Team Model)        -->
        <!-- ============================================================ -->
        <section id="team" class="scroll-mt-28">
            <!-- Core Team Grid -->
            <div class="py-unit-xl px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
                <div class="mb-unit-xl">
                    <span
                        class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">{{ app()->getLocale() === 'en' ? 'Capability Reference' : 'Referensi Kapabilitas' }}</span>
                    <h2 class="font-headline-h2 text-headline-h2 text-on-surface mt-unit-sm mb-unit-md">
                        {{ app()->getLocale() === 'en' ? 'Core Team Nakala' : 'Tim Inti Nakala' }}
                    </h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant">
                        {{ app()->getLocale() === 'en'
                            ? 'Every project is led by Nakala Digital as the accountable, client-facing team. Our strategic partner strengthens confidence in the background without changing who owns the relationship.'
                            : 'Setiap proyek dipimpin oleh Nakala Digital sebagai tim utama yang akuntabel dan berhadapan langsung dengan klien. Mitra strategis kami memperkuat keyakinan di belakang layar tanpa mengubah siapa yang memegang relasi utama.' }}
                    </p>
                </div>
                <div class="flex flex-wrap justify-center gap-gutter">

                    <!-- CEO -->
                    <div
                        class="group bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden transition-all duration-300 hover:shadow-xl w-full md:w[calc(50%-12px)] max-w-md">
                        <div class="aspect-square relative overflow-hidden">
                            <img alt="Milzam Zihni"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                src="{{ asset('assets/team/milzam.jpeg') }}" />
                            <div class="absolute top-0 left-0 w-1 h-full bg-primary-container"></div>
                        </div>
                        <div class="p-unit-lg">
                            <p class="text-primary font-label-sm text-label-sm uppercase mb-unit-xs tracking-widest">Chief
                                Executive Officer</p>
                            <h3 class="font-headline-h3 text-headline-h3 mb-unit-md text-on-background">Milzam Zihni</h3>
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

                    <!-- COO -->
                    <div
                        class="group bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden transition-all duration-300 hover:shadow-xl w-full max-w-md">
                        <div class="aspect-square relative overflow-hidden">
                            <img alt="Raul Mahya Komaran"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                src="{{ asset('assets/team/raul.jpeg') }}" />
                            <div class="absolute top-0 left-0 w-1 h-full bg-primary-container"></div>
                        </div>
                        <div class="p-unit-lg">
                            <p class="text-primary font-label-sm text-label-sm uppercase mb-unit-xs tracking-widest">Chief
                                Operating Officer</p>
                            <h3 class="font-headline-h3 text-headline-h3 mb-unit-md text-on-background">Raul Mahya Komaran
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

            <!-- Scalable Team Model Section -->
            <section class="py-unit-xl bg-inverse-surface text-surface">
                <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-unit-xl">
                        <div class="w-full lg:w-1/2">
                            <div
                                class="bg-surface-container-lowest/10 p-unit-lg border border-surface-variant/20 rounded-xl backdrop-blur-sm">
                                <h2 class="font-headline-h2 text-headline-h2 mb-unit-lg text-primary-fixed-dim">
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
                                            class="flex h-[84px] w-full max-w-[220px] items-center justify-center rounded-lg bg-white px-5 ring-1 ring-white/20">
                                            <img alt="Nakala Digital" class="h-[56px] w-auto max-w-full object-contain"
                                                src="{{ asset('assets/logo-nakala.png') }}" />
                                        </div>
                                    </div>
                                    <div
                                        class="flex min-h-[100px] items-center justify-center bg-surface/5 p-unit-md border-l-4 border-primary-fixed-dim">
                                        <div
                                            class="flex h-[60px] w-full max-w-[160px] items-center justify-center rounded-lg border border-white/35 bg-white/5 px-4">
                                            <img alt="Romulus Digital"
                                                class="h-[36px] w-auto max-w-full object-contain opacity-70"
                                                src="{{ asset('assets/romulus-putih.png') }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <div class="relative rounded-lg overflow-hidden border border-outline shadow-2xl">
                                <img class="w-full h-full object-cover"
                                    alt="Network of interconnected nodes across a regional map of Southeast Asia"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuB47IQhwnQ_73ET9EOURjZQvNJ6YnkHUzF_sJxGQ1KPmB0cGMLjojD0IAAJtGTSYs0xl_qcmH3TyKZGCKPcEJfGBMzNxWAYWEdHIac5t0Bp8X0BKRcIpQmRrsna6yksO6lUeUut8hBTV7RVhzO6XCRLlbyk1YJvbAGz2rXdlqp7XkQ2oZCpDwRfSBImRmxU_WeiI9UCRO850c-OkCRV_blyiudN1Bji8I3z3EROaS2bMQg0Wee6O9acOQjf0XHwF_glAuUyttJDVCmh" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <!-- ============================================================ -->
        <!-- Section 5: Methodology (Delivery Lifecycle + QA Governance)   -->
        <!-- ============================================================ -->
        <section id="methodology" class="scroll-mt-28">
            <!-- Delivery Approach: End-to-End Lifecycle -->
            <section class="py-unit-xl bg-surface">
                <div class="px-margin-mobile md:px-8 lg:px-margin-desktop max-w-container-max mx-auto">
                    <div class="mb-unit-lg text-center max-w-2xl mx-auto">
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
                    <!-- Vertical timeline -->
                    <div class="relative max-w-3xl mx-auto">
                        <div class="absolute left-6 md:left-7 top-2 bottom-2 w-0.5 bg-outline-variant" aria-hidden="true">
                        </div>
                        <!-- Step 01: Discovery & Scoping -->
                        <div class="relative pl-16 md:pl-20 pb-unit-lg">
                            <div
                                class="absolute left-0 top-0 w-12 h-12 md:w-14 md:h-14 rounded-full bg-primary text-on-primary flex items-center justify-center font-headline-h3 text-headline-h3 z-10 shadow-md">
                                01
                            </div>
                            <div
                                class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
                                <span
                                    class="inline-block text-[11px] font-bold uppercase tracking-wider text-primary bg-surface px-2 py-0.5 rounded mb-2">
                                    {{ app()->getLocale() === 'en' ? 'Planning' : 'Perencanaan' }}
                                </span>
                                <div class="flex items-center gap-3 mb-2">
                                    <span class="material-symbols-outlined text-primary">explore</span>
                                    <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                                        {{ app()->getLocale() === 'en' ? 'Discovery & Scoping' : 'Discovery & Scoping' }}
                                    </h3>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                                    {{ app()->getLocale() === 'en'
                                        ? 'Stakeholder workshops, requirement gathering, feasibility study, and project roadmap definition.'
                                        : 'Workshop stakeholder, pengumpulan kebutuhan, studi kelayakan, dan definisi roadmap proyek.' }}
                                </p>
                                <div
                                    class="bg-surface p-2 rounded text-xs font-bold text-primary inline-flex items-center gap-2">
                                    <span class="material-symbols-outlined text-sm">task_alt</span>
                                    {{ app()->getLocale() === 'en' ? 'Output: PRD & Project Charter' : 'Output: PRD & Project Charter' }}
                                </div>
                            </div>
                        </div>
                        <!-- Step 02: Design & Architecture -->
                        <div class="relative pl-16 md:pl-20 pb-unit-lg">
                            <div
                                class="absolute left-0 top-0 w-12 h-12 md:w-14 md:h-14 rounded-full bg-primary text-on-primary flex items-center justify-center font-headline-h3 text-headline-h3 z-10 shadow-md">
                                02
                            </div>
                            <div
                                class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
                                <span
                                    class="inline-block text-[11px] font-bold uppercase tracking-wider text-primary bg-surface px-2 py-0.5 rounded mb-2">
                                    {{ app()->getLocale() === 'en' ? 'Planning' : 'Perencanaan' }}
                                </span>
                                <div class="flex items-center gap-3 mb-2">
                                    <span class="material-symbols-outlined text-primary">account_tree</span>
                                    <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                                        {{ app()->getLocale() === 'en' ? 'Design & Architecture' : 'Design & Architecture' }}
                                    </h3>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                                    {{ app()->getLocale() === 'en'
                                        ? 'System architecture design, technology stack selection, UX/UI prototyping, and technical specification.'
                                        : 'Desain arsitektur sistem, pemilihan tech stack, prototyping UX/UI, dan spesifikasi teknis.' }}
                                </p>
                                <div
                                    class="bg-surface p-2 rounded text-xs font-bold text-primary inline-flex items-center gap-2">
                                    <span class="material-symbols-outlined text-sm">task_alt</span>
                                    {{ app()->getLocale() === 'en' ? 'Output: Technical Design Doc & Prototype' : 'Output: Dokumen Desain Teknis & Prototype' }}
                                </div>
                            </div>
                        </div>
                        <!-- Step 03: Agile Development & QA -->
                        <div class="relative pl-16 md:pl-20 pb-unit-lg">
                            <div
                                class="absolute left-0 top-0 w-12 h-12 md:w-14 md:h-14 rounded-full bg-primary text-on-primary flex items-center justify-center font-headline-h3 text-headline-h3 z-10 shadow-md">
                                03
                            </div>
                            <div
                                class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
                                <span
                                    class="inline-block text-[11px] font-bold uppercase tracking-wider text-primary bg-surface px-2 py-0.5 rounded mb-2">
                                    {{ app()->getLocale() === 'en' ? 'Build & QA' : 'Build & QA' }}
                                </span>
                                <div class="flex items-center gap-3 mb-2">
                                    <span class="material-symbols-outlined text-primary">code</span>
                                    <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                                        {{ app()->getLocale() === 'en' ? 'Agile Development & QA' : 'Agile Development & QA' }}
                                    </h3>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                                    {{ app()->getLocale() === 'en'
                                        ? 'Sprint-based development with continuous integration, automated testing, and code review processes.'
                                        : 'Pengembangan berbasis sprint dengan integrasi berkelanjutan, automated testing, dan proses code review.' }}
                                </p>
                                <div
                                    class="bg-surface p-2 rounded text-xs font-bold text-primary inline-flex items-center gap-2">
                                    <span class="material-symbols-outlined text-sm">task_alt</span>
                                    {{ app()->getLocale() === 'en' ? 'Output: Source Code & Unit Tests' : 'Output: Source Code & Unit Tests' }}
                                </div>
                            </div>
                        </div>
                        <!-- Step 04: SIT / UAT -->
                        <div class="relative pl-16 md:pl-20 pb-unit-lg">
                            <div
                                class="absolute left-0 top-0 w-12 h-12 md:w-14 md:h-14 rounded-full bg-primary text-on-primary flex items-center justify-center font-headline-h3 text-headline-h3 z-10 shadow-md">
                                04
                            </div>
                            <div
                                class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
                                <span
                                    class="inline-block text-[11px] font-bold uppercase tracking-wider text-primary bg-surface px-2 py-0.5 rounded mb-2">
                                    {{ app()->getLocale() === 'en' ? 'Build & QA' : 'Build & QA' }}
                                </span>
                                <div class="flex items-center gap-3 mb-2">
                                    <span class="material-symbols-outlined text-primary">bug_report</span>
                                    <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                                        {{ app()->getLocale() === 'en' ? 'SIT / UAT' : 'SIT / UAT' }}</h3>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                                    {{ app()->getLocale() === 'en'
                                        ? 'System Integration Testing and User Acceptance Testing to validate functionality, performance, and business readiness.'
                                        : 'System Integration Testing dan User Acceptance Testing untuk memvalidasi fungsionalitas, performa, dan kesiapan bisnis.' }}
                                </p>
                                <div
                                    class="bg-surface p-2 rounded text-xs font-bold text-primary inline-flex items-center gap-2">
                                    <span class="material-symbols-outlined text-sm">task_alt</span>
                                    {{ app()->getLocale() === 'en' ? 'Output: SIT/UAT Sign-off' : 'Output: SIT/UAT Sign-off' }}
                                </div>
                            </div>
                        </div>
                        <!-- Step 05: Deployment & Go-Live -->
                        <div class="relative pl-16 md:pl-20 pb-unit-lg">
                            <div
                                class="absolute left-0 top-0 w-12 h-12 md:w-14 md:h-14 rounded-full bg-primary text-on-primary flex items-center justify-center font-headline-h3 text-headline-h3 z-10 shadow-md">
                                05
                            </div>
                            <div
                                class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
                                <span
                                    class="inline-block text-[11px] font-bold uppercase tracking-wider text-primary bg-surface px-2 py-0.5 rounded mb-2">
                                    {{ app()->getLocale() === 'en' ? 'Release' : 'Rilis' }}
                                </span>
                                <div class="flex items-center gap-3 mb-2">
                                    <span class="material-symbols-outlined text-primary">rocket_launch</span>
                                    <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                                        {{ app()->getLocale() === 'en' ? 'Deployment & Go-Live' : 'Deployment & Go-Live' }}
                                    </h3>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                                    {{ app()->getLocale() === 'en'
                                        ? 'Release readiness check, CI/CD pipeline execution, production deployment, and go-live verification.'
                                        : 'Pemeriksaan kesiapan rilis, eksekusi pipeline CI/CD, deployment produksi, dan verifikasi go-live.' }}
                                </p>
                                <div
                                    class="bg-surface p-2 rounded text-xs font-bold text-primary inline-flex items-center gap-2">
                                    <span class="material-symbols-outlined text-sm">task_alt</span>
                                    {{ app()->getLocale() === 'en' ? 'Output: Live Production Release' : 'Output: Rilis Produksi Aktif' }}
                                </div>
                            </div>
                        </div>
                        <!-- Step 06: Handover -->
                        <div class="relative pl-16 md:pl-20 pb-unit-lg">
                            <div
                                class="absolute left-0 top-0 w-12 h-12 md:w-14 md:h-14 rounded-full bg-primary text-on-primary flex items-center justify-center font-headline-h3 text-headline-h3 z-10 shadow-md">
                                06
                            </div>
                            <div
                                class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
                                <span
                                    class="inline-block text-[11px] font-bold uppercase tracking-wider text-primary bg-surface px-2 py-0.5 rounded mb-2">
                                    {{ app()->getLocale() === 'en' ? 'Release' : 'Rilis' }}
                                </span>
                                <div class="flex items-center gap-3 mb-2">
                                    <span class="material-symbols-outlined text-primary">handshake</span>
                                    <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                                        {{ app()->getLocale() === 'en' ? 'Handover' : 'Handover' }}</h3>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                                    {{ app()->getLocale() === 'en'
                                        ? 'BAST (Berita Acara Serah Terima), operational documentation, knowledge transfer, and user training.'
                                        : 'BAST (Berita Acara Serah Terima), dokumentasi operasional, transfer pengetahuan, dan pelatihan pengguna.' }}
                                </p>
                                <div
                                    class="bg-surface p-2 rounded text-xs font-bold text-primary inline-flex items-center gap-2">
                                    <span class="material-symbols-outlined text-sm">task_alt</span>
                                    {{ app()->getLocale() === 'en' ? 'Output: BAST & Operations Manual' : 'Output: BAST & Manual Operasional' }}
                                </div>
                            </div>
                        </div>
                        <!-- Step 07: Support & Growth -->
                        <div class="relative pl-16 md:pl-20 pb-0">
                            <div
                                class="absolute left-0 top-0 w-12 h-12 md:w-14 md:h-14 rounded-full bg-tertiary text-on-tertiary flex items-center justify-center font-headline-h3 text-headline-h3 z-10 shadow-md">
                                07
                            </div>
                            <div
                                class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
                                <span
                                    class="inline-block text-[11px] font-bold uppercase tracking-wider text-primary bg-surface px-2 py-0.5 rounded mb-2">
                                    {{ app()->getLocale() === 'en' ? 'Ongoing' : 'Berkelanjutan' }}
                                </span>
                                <div class="flex items-center gap-3 mb-2">
                                    <span class="material-symbols-outlined text-primary">trending_up</span>
                                    <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                                        {{ app()->getLocale() === 'en' ? 'Support & Growth' : 'Support & Growth' }}</h3>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                                    {{ app()->getLocale() === 'en'
                                        ? 'Ongoing maintenance, performance monitoring, feature enhancements, and continuous improvement based on user feedback and business needs.'
                                        : 'Maintenance berkelanjutan, monitoring performa, peningkatan fitur, dan perbaikan berkelanjutan berdasarkan feedback pengguna dan kebutuhan bisnis.' }}
                                </p>
                                <div
                                    class="bg-surface p-2 rounded text-xs font-bold text-primary inline-flex items-center gap-2">
                                    <span class="material-symbols-outlined text-sm">task_alt</span>
                                    {{ app()->getLocale() === 'en' ? 'Output: Growth Roadmap & SLA Reports' : 'Output: Growth Roadmap & Laporan SLA' }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- QA Governance -->
            <section class="py-unit-xl bg-surface-container-low border-y border-outline-variant">
                <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
                    <div class="text-center mb-unit-lg max-w-2xl mx-auto">
                        <span class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">
                            {{ app()->getLocale() === 'en' ? 'Our Key Differentiator' : 'Pembeda Utama Kami' }}</span>
                        <h2 class="font-headline-h2 text-headline-h2 text-on-background mb-unit-sm">
                            {{ app()->getLocale() === 'en' ? 'Guaranteed Quality, Not Just Working Software' : 'Menjamin Kualitas, Bukan Sekadar Membangun Aplikasi' }}
                        </h2>
                        <p class="text-body-lg text-on-surface-variant">
                            {{ app()->getLocale() === 'en'
                                ? 'At Nakala Digital, our commitment does not stop once the code is written. We apply strict QA Governance to ensure every digital solution we release runs stable, secure, and ready to use.'
                                : 'Di Nakala Digital, komitmen kami tidak berhenti saat kode selesai ditulis. Kami menerapkan QA Governance yang ketat untuk memastikan setiap solusi digital yang kami rilis berjalan dengan stabil, aman, dan siap pakai.' }}
                        </p>
                    </div>
                    <div class="bg-white rounded-xl shadow-sm border border-outline-variant p-unit-lg">
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-unit-lg items-start">
                            <div class="lg:col-span-1">
                                <div
                                    class="p-3 bg-primary/10 text-primary rounded-lg inline-flex items-center justify-center mb-unit-sm">
                                    <span class="material-symbols-outlined text-3xl">verified_user</span>
                                </div>
                                <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-unit-sm">
                                    {{ app()->getLocale() === 'en' ? 'A High-Standard Delivery Discipline' : 'Disiplin Pengiriman Standar Tinggi' }}
                                </h3>
                                <p class="text-body-md text-on-surface-variant">
                                    {{ app()->getLocale() === 'en'
                                        ? 'We position quality assurance as a core pillar from the start of the project to the end, not just an afterthought at the end of development.'
                                        : 'Kami memposisikan penjaminan mutu sebagai pilar utama dari awal hingga akhir proyek, bukan sekadar pelengkap di akhir proses pengembangan.' }}
                                </p>
                            </div>
                            <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                                <div class="bg-surface-container-low p-unit-md rounded border-l-4 border-primary">
                                    <h4 class="font-body-md font-semibold text-on-background mb-1">
                                        {{ app()->getLocale() === 'en' ? '1. Solid Analysis & Planning' : '1. Analisis & Perencanaan Matang' }}
                                    </h4>
                                    <p class="text-body-md text-on-surface-variant">
                                        {{ app()->getLocale() === 'en'
                                            ? 'Reviewing business requirements from the outset (Requirement Review) and preparing a comprehensive Test Planning.'
                                            : 'Melakukan peninjauan kebutuhan bisnis sejak awal (Requirement Review) serta menyusun rencana pengujian (Test Planning) yang komprehensif.' }}
                                    </p>
                                </div>
                                <div class="bg-surface-container-low p-unit-md rounded border-l-4 border-primary">
                                    <h4 class="font-body-md font-semibold text-on-background mb-1">
                                        {{ app()->getLocale() === 'en' ? '2. System & User Validation (SIT/UAT)' : '2. Validasi Sistem & Pengguna (SIT/UAT)' }}
                                    </h4>
                                    <p class="text-body-md text-on-surface-variant">
                                        {{ app()->getLocale() === 'en'
                                            ? 'Through System Integration Testing (SIT) and User Acceptance Testing (UAT) stages to ensure the system works as your business expects.'
                                            : 'Melalui tahap System Integration Testing (SIT) dan User Acceptance Testing (UAT) untuk memastikan sistem berjalan sesuai ekspektasi bisnis Anda.' }}
                                    </p>
                                </div>
                                <div class="bg-surface-container-low p-unit-md rounded border-l-4 border-primary">
                                    <h4 class="font-body-md font-semibold text-on-background mb-1">
                                        {{ app()->getLocale() === 'en' ? '3. Issue Management & Release Readiness' : '3. Manajemen Isu & Kesiapan Rilis' }}
                                    </h4>
                                    <p class="text-body-md text-on-surface-variant">
                                        {{ app()->getLocale() === 'en'
                                            ? 'Transparent Bug Tracking to ensure the entire system reaches Release Readiness status without obstacles before go-live.'
                                            : 'Pelacakan error yang transparan (Bug Tracking) guna memastikan seluruh sistem berada pada status Release Readiness (siap diluncurkan) tanpa kendala.' }}
                                    </p>
                                </div>
                                <div class="bg-surface-container-low p-unit-md rounded border-l-4 border-primary">
                                    <h4 class="font-body-md font-semibold text-on-background mb-1">
                                        {{ app()->getLocale() === 'en' ? '4. Handover & Warranty' : '4. Serah Terima & Garansi' }}
                                    </h4>
                                    <p class="text-body-md text-on-surface-variant">
                                        {{ app()->getLocale() === 'en'
                                            ? 'A formal handover backed by BAST (Berita Acara Serah Terima), accompanied by a Warranty service for your business peace of mind.'
                                            : 'Proses serah terima resmi yang didukung oleh BAST (Berita Acara Serah Terima), disertai dengan layanan Garansi (Warranty) untuk menjaga ketenangan bisnis Anda.' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Artifacts List -->
                        <div class="bg-on-background p-unit-md rounded-lg text-white mt-unit-lg">
                            <h4 class="font-headline-h3 text-headline-h3 mb-unit-md text-primary-fixed-dim">
                                {{ app()->getLocale() === 'en' ? 'QA Artifacts' : 'Artefak QA' }}</h4>
                            <ul class="space-y-4">
                                <li class="flex items-center gap-4 border-b border-white/10 pb-4">
                                    <div class="w-10 h-10 rounded bg-white/5 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-primary-fixed-dim">list_alt</span>
                                    </div>
                                    <span
                                        class="font-body-md">{{ app()->getLocale() === 'en' ? 'Requirement Traceability Matrix' : 'Matriks Traceability Kebutuhan' }}</span>
                                </li>
                                <li class="flex items-center gap-4 border-b border-white/10 pb-4">
                                    <div class="w-10 h-10 rounded bg-white/5 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-primary-fixed-dim">draw</span>
                                    </div>
                                    <span
                                        class="font-body-md">{{ app()->getLocale() === 'en' ? 'Test Cases & SIT/UAT Reports' : 'Test Case & Laporan SIT/UAT' }}</span>
                                </li>
                                <li class="flex items-center gap-4 border-b border-white/10 pb-4">
                                    <div class="w-10 h-10 rounded bg-white/5 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-primary-fixed-dim">terminal</span>
                                    </div>
                                    <span
                                        class="font-body-md">{{ app()->getLocale() === 'en' ? 'Automated Test Suites' : 'Test Suite Otomatis' }}</span>
                                </li>
                                <li class="flex items-center gap-4 border-b border-white/10 pb-4">
                                    <div class="w-10 h-10 rounded bg-white/5 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-primary-fixed-dim">menu_book</span>
                                    </div>
                                    <span
                                        class="font-body-md">{{ app()->getLocale() === 'en' ? 'Release Readiness Checklist' : 'Checklist Kesiapan Rilis' }}</span>
                                </li>
                                <li class="flex items-center gap-4">
                                    <div class="w-10 h-10 rounded bg-white/5 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-primary-fixed-dim">verified</span>
                                    </div>
                                    <span
                                        class="font-body-md">{{ app()->getLocale() === 'en' ? 'BAST & Warranty Certificate' : 'BAST & Sertifikat Garansi' }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <!-- ============================================================ -->
        <!-- Section 6: Partner Badge (once)                               -->
        <!-- ============================================================ -->
        @include('partials.partner-badge')

    </main>

    <!-- Footer -->
    @include('partials.footer')

    <script>
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
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                var target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>

</body>

</html>
