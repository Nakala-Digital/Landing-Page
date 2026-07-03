<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ app()->getLocale() === 'en' ? 'Delivery Model | Nakala Digital' : 'Model Delivery | Nakala Digital' }}
    </title>
    @include('partials.seo', [
        'title' =>
            app()->getLocale() === 'en' ? 'Delivery Model | Nakala Digital' : 'Model Delivery | Nakala Digital',
        'description' =>
            app()->getLocale() === 'en'
                ? 'Learn how Nakala Digital delivers software projects through discovery, planning, design, development, QA, deployment, and continuous improvement.'
                : 'Pelajari cara Nakala Digital menjalankan proyek software melalui discovery, perencanaan, desain, pengembangan, QA, deployment, dan peningkatan berkelanjutan.',
    ])
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
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
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F7FAFC;
            color: #334155;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
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

<body class="bg-surface text-on-surface">
    <!-- TopNavBar -->
    @include('partials.navbar')
    <main class="pt-20">
        <!-- Hero Section -->
        <section class="relative overflow-hidden bg-on-background pt-unit-lg pb-unit-xl lg:pt-unit-xl lg:pb-32">
            <div class="absolute -top-24 -right-24 w-[420px] h-[420px] bg-primary/10 rounded-full blur-3xl"></div>
            <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-unit-lg items-center">
                    <div>
                        <div
                            class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-4 py-1.5 rounded-full font-label-sm text-label-sm uppercase tracking-widest mb-unit-md">
                            <span class="material-symbols-outlined text-[16px]">bolt</span>
                            {{ app()->getLocale() === 'en' ? 'Efficiency Redefined' : 'Efisiensi yang Didefinisikan Ulang' }}
                        </div>
                        <h1
                            class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-white mb-unit-md">
                            {{ app()->getLocale() === 'en' ? 'Agile delivery with clear quality control.' : 'Agile delivery dengan quality control yang jelas' }}
                        </h1>
                        <p class="font-body-lg text-body-lg text-white text-outline-variant mb-unit-lg max-w-xl">
                            {{ app()->getLocale() === 'en'
                                ? 'Our systematic approach bridges local responsiveness with regional quality standards, ensuring every technical milestone is backed by rigorous QA governance.'
                                : 'Pendekatan sistematis kami menghubungkan respons lokal dengan standar kualitas regional, memastikan setiap milestone teknis didukung tata kelola QA yang ketat.' }}
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <button
                                class="bg-primary-container text-on-primary-container font-button text-button px-unit-lg py-4 rounded-lg flex items-center gap-2 hover:gap-3 transition-all duration-300">
                                {{ app()->getLocale() === 'en' ? 'View Methodology' : 'Lihat Metodologi' }} <span
                                    class="material-symbols-outlined">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                    <div class="hidden lg:block relative">
                        <div class="absolute -inset-4 bg-primary/20 blur-3xl rounded-full"></div>
                        <img alt="QA Governance Dashboard"
                            class="relative rounded-xl border-4 border-white/10 shadow-2xl"
                            data-alt="A sophisticated digital dashboard interface showing software quality metrics and delivery progress. The layout features high-contrast charts in Electric Cyan and Midnight Navy against a dark, professional background. Glowing status indicators and real-time data visualizations create a sense of technical rigor and modern corporate excellence. The lighting is focused and clean, emphasizing precision and transparency in the development process."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCzcZP03Ya1ef3majVmO-lJeRWePM77IQ9jRrA2pSjclh3eb-GHlGJrhHwpD8AArV5Ooa-HJcVULWBmb_HZXxYbB_09s4MGFZrwpNWDviVxFyg30lmdFdYMvosQNthDXNUV5iMbvLhQ-QT0xq2xjRFUpv4mtEhjTseIqBZqDUyNGDD2DmyRhm6QKAuOxuE59wmeUwLILRpm47ewMnBnPQLjPxcnMULq8VtaXkI64b--vlsECInlvzedoyRAceIVkinP_SSsn27tTxzR" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Delivery Approach: End-to-End Lifecycle -->
        <section class="py-unit-xl bg-surface" id="delivery-flow">
            <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
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
                <!-- Vertical timeline: single left-rail layout keeps every phase readable and stacked cleanly on mobile, and reads top-to-bottom on desktop too -->
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
        <!-- QA Governance -->
        <section class="py-unit-xl bg-surface-container-low border-y border-outline-variant" id="qa-governance">
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
                                    class="font-body-md">{{ app()->getLocale() === 'en' ? 'Automated Test Suites' : 'Suite Test Otomatis' }}</span>
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

        <!-- Partner Badge Section -->
        @include('partials.partner-badge')
    </main>
    <!-- Footer -->
    @include('partials.footer')
    <script>
        // Subtle scroll animation for header
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header.fixed');
            if (window.scrollY > 50) {
                header.classList.add('py-2', 'h-16');
                header.classList.remove('h-20');
            } else {
                header.classList.remove('py-2', 'h-16');
                header.classList.add('h-20');
            }
        });

        // Simple smooth scroll fallback
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>
