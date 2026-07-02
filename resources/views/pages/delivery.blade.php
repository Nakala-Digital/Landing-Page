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
    ? 'Learn how Nakala Digital delivers software projects through discovery, planning, design, development, QA,
    deployment, and continuous improvement.'
    : 'Pelajari cara Nakala Digital menjalankan proyek software melalui discovery, perencanaan, desain, pengembangan,
    QA, deployment, dan peningkatan berkelanjutan.',
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
            <div
                class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-primary via-transparent to-transparent">
            </div>
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
                            {{ app()->getLocale() === 'en' ? 'Agile delivery with clear quality control' : 'Agile delivery dengan quality control yang jelas' }}
                        </h1>
                        <p class="font-body-lg text-body-lg text-outline-variant mb-unit-lg max-w-xl">
                            {{ app()->getLocale() === 'en'
                                ? 'A systematic approach that combines local response with high quality standards, ensuring that each stage of development is carried out with strict quality control.'
                                : 'Pendekatan sistematis yang menggabungkan respons lokal dengan standar kualitas tinggi, memastikan setiap tahapan pengembangan berjalan dengan pengawasan kualitas yang ketat.' }}
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
        <section class="py-unit-xl bg-surface">
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
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-unit-md">
                    <!-- Step 1: Discovery & Scoping -->
                    <div
                        class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
                        <div class="text-primary-container font-headline-h2 mb-2">01</div>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-2">
                            {{ app()->getLocale() === 'en' ? 'Discovery & Scoping' : 'Discovery & Scoping' }}
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                            {{ app()->getLocale() === 'en'
                                ? 'Stakeholder workshops, requirement gathering, feasibility study, and project roadmap definition.'
                                : 'Workshop stakeholder, pengumpulan kebutuhan, studi kelayakan, dan definisi roadmap proyek.' }}
                        </p>
                        <div class="bg-surface p-2 rounded text-xs font-bold text-primary flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">description</span>
                            {{ app()->getLocale() === 'en' ? 'Output: PRD & Project Charter' : 'Output: PRD & Project Charter' }}
                        </div>
                    </div>
                    <!-- Step 2: Design & Architecture -->
                    <div
                        class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
                        <div class="text-primary-container font-headline-h2 mb-2">02</div>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-2">
                            {{ app()->getLocale() === 'en' ? 'Design & Architecture' : 'Design & Architecture' }}
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                            {{ app()->getLocale() === 'en'
                                ? 'System architecture design, technology stack selection, UX/UI prototyping, and technical specification.'
                                : 'Desain arsitektur sistem, pemilihan tech stack, prototyping UX/UI, dan spesifikasi teknis.' }}
                        </p>
                        <div class="bg-surface p-2 rounded text-xs font-bold text-primary flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">account_tree</span>
                            {{ app()->getLocale() === 'en' ? 'Output: Technical Design Doc & Prototype' : 'Output: Dokumen Desain Teknis & Prototype' }}
                        </div>
                    </div>
                    <!-- Step 3: Agile Development & QA -->
                    <div
                        class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
                        <div class="text-primary-container font-headline-h2 mb-2">03</div>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-2">
                            {{ app()->getLocale() === 'en' ? 'Agile Development & QA' : 'Agile Development & QA' }}
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                            {{ app()->getLocale() === 'en'
                                ? 'Sprint-based development with continuous integration, automated testing, and code review processes.'
                                : 'Pengembangan berbasis sprint dengan integrasi berkelanjutan, automated testing, dan proses code review.' }}
                        </p>
                        <div class="bg-surface p-2 rounded text-xs font-bold text-primary flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">code</span>
                            {{ app()->getLocale() === 'en' ? 'Output: Source Code & Unit Tests' : 'Output: Source Code & Unit Tests' }}
                        </div>
                    </div>
                    <!-- Step 4: SIT / UAT -->
                    <div
                        class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
                        <div class="text-primary-container font-headline-h2 mb-2">04</div>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-2">
                            {{ app()->getLocale() === 'en' ? 'SIT / UAT' : 'SIT / UAT' }}
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                            {{ app()->getLocale() === 'en'
                                ? 'System Integration Testing and User Acceptance Testing to validate functionality, performance, and business readiness.'
                                : 'System Integration Testing dan User Acceptance Testing untuk memvalidasi fungsionalitas, performa, dan kesiapan bisnis.' }}
                        </p>
                        <div class="bg-surface p-2 rounded text-xs font-bold text-primary flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">bug_report</span>
                            {{ app()->getLocale() === 'en' ? 'Output: SIT/UAT Sign-off' : 'Output: SIT/UAT Sign-off' }}
                        </div>
                    </div>
                    <!-- Step 5: Deployment & Go-Live -->
                    <div
                        class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
                        <div class="text-primary-container font-headline-h2 mb-2">05</div>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-2">
                            {{ app()->getLocale() === 'en' ? 'Deployment & Go-Live' : 'Deployment & Go-Live' }}
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                            {{ app()->getLocale() === 'en'
                                ? 'Release readiness check, CI/CD pipeline execution, production deployment, and go-live verification.'
                                : 'Pemeriksaan kesiapan rilis, eksekusi pipeline CI/CD, deployment produksi, dan verifikasi go-live.' }}
                        </p>
                        <div class="bg-surface p-2 rounded text-xs font-bold text-primary flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">rocket_launch</span>
                            {{ app()->getLocale() === 'en' ? 'Output: Live Production Release' : 'Output: Rilis Produksi Aktif' }}
                        </div>
                    </div>
                    <!-- Step 6: Handover -->
                    <div
                        class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
                        <div class="text-primary-container font-headline-h2 mb-2">06</div>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-2">
                            {{ app()->getLocale() === 'en' ? 'Handover' : 'Handover' }}
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                            {{ app()->getLocale() === 'en'
                                ? 'BAST (Berita Acara Serah Terima), operational documentation, knowledge transfer, and user training.'
                                : 'BAST (Berita Acara Serah Terima), dokumentasi operasional, transfer pengetahuan, dan pelatihan pengguna.' }}
                        </p>
                        <div class="bg-surface p-2 rounded text-xs font-bold text-primary flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">handshake</span>
                            {{ app()->getLocale() === 'en' ? 'Output: BAST & Operations Manual' : 'Output: BAST & Manual Operasional' }}
                        </div>
                    </div>
                    <!-- Step 7: Support & Growth -->
                    <div
                        class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group col-span-1 md:col-span-2">
                        <div class="text-primary-container font-headline-h2 mb-2">07</div>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-2">
                            {{ app()->getLocale() === 'en' ? 'Support & Growth' : 'Support & Growth' }}
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                            {{ app()->getLocale() === 'en'
                                ? 'Ongoing maintenance, performance monitoring, feature enhancements, and continuous improvement based on user feedback and business needs.'
                                : 'Maintenance berkelanjutan, monitoring performa, peningkatan fitur, dan perbaikan berkelanjutan berdasarkan feedback pengguna dan kebutuhan bisnis.' }}
                        </p>
                        <div class="bg-surface p-2 rounded text-xs font-bold text-primary flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">trending_up</span>
                            {{ app()->getLocale() === 'en' ? 'Output: Growth Roadmap & SLA Reports' : 'Output: Growth Roadmap & Laporan SLA' }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- QA Governance -->
        <section class="py-unit-xl bg-surface-container-low border-y border-outline-variant">
            <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
                <div class="mb-unit-lg">
                    <span class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">QA
                        Governance</span>
                    <h2 class="font-headline-h2 text-headline-h2 text-on-background">
                        {{ app()->getLocale() === 'en' ? 'Quality Assurance as a Delivery Discipline' : 'Quality Assurance sebagai Disiplin Delivery' }}
                    </h2>
                    <p class="text-on-surface-variant max-w-xl">
                        {{ app()->getLocale() === 'en'
                            ? 'Our QA framework ensures every deliverable meets institutional standards before reaching your users. This is not an afterthought; it is embedded in every phase.'
                            : 'Framework QA kami memastikan setiap deliverable memenuhi standar institusional sebelum mencapai pengguna Anda. Ini bukan tambahan; ini tertanam di setiap fase.' }}
                    </p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
                    <!-- Governance Grid -->
                    <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                        <div class="bg-white border-l-4 border-primary p-unit-md rounded shadow-sm">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="material-symbols-outlined text-primary">fact_check</span>
                                <h4 class="font-headline-h3 text-headline-h3 text-on-background">
                                    {{ app()->getLocale() === 'en' ? 'Requirement Review' : 'Review Kebutuhan' }}
                                </h4>
                            </div>
                            <p class="text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'Validation of functional and non-functional requirements before development begins, ensuring clarity and completeness.'
                                    : 'Validasi kebutuhan fungsional dan non-fungsional sebelum pengembangan dimulai, memastikan kejelasan dan kelengkapan.' }}
                            </p>
                        </div>
                        <div class="bg-white border-l-4 border-primary p-unit-md rounded shadow-sm">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="material-symbols-outlined text-primary">assignment</span>
                                <h4 class="font-headline-h3 text-headline-h3 text-on-background">
                                    {{ app()->getLocale() === 'en' ? 'Test Planning' : 'Perencanaan Testing' }}
                                </h4>
                            </div>
                            <p class="text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'Strategic SIT (System Integration Testing) and UAT (User Acceptance Testing) protocols with defined test cases and success criteria.'
                                    : 'Protokol SIT (System Integration Testing) dan UAT (User Acceptance Testing) yang strategis dengan test case dan kriteria sukses yang terdefinisi.' }}
                            </p>
                        </div>
                        <div class="bg-white border-l-4 border-primary p-unit-md rounded shadow-sm">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="material-symbols-outlined text-primary">bug_report</span>
                                <h4 class="font-headline-h3 text-headline-h3 text-on-background">
                                    {{ app()->getLocale() === 'en' ? 'Bug Tracking' : 'Pelacakan Bug' }}
                                </h4>
                            </div>
                            <p class="text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'Centralized issue tracking with priority-based resolution workflows and regular status reporting.'
                                    : 'Pelacakan isu terpusat dengan alur penyelesaian berbasis prioritas dan pelaporan status berkala.' }}
                            </p>
                        </div>
                        <div class="bg-white border-l-4 border-primary p-unit-md rounded shadow-sm">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="material-symbols-outlined text-primary">checklist</span>
                                <h4 class="font-headline-h3 text-headline-h3 text-on-background">
                                    {{ app()->getLocale() === 'en' ? 'Release Readiness' : 'Kesiapan Rilis' }}
                                </h4>
                            </div>
                            <p class="text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'Pre-deployment checklist including regression testing, performance benchmarking, and security validation before go-live.'
                                    : 'Checklist pra-deployment mencakup regression testing, benchmarking performa, dan validasi keamanan sebelum go-live.' }}
                            </p>
                        </div>
                        <div class="bg-white border-l-4 border-primary p-unit-md rounded shadow-sm">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="material-symbols-outlined text-primary">handshake</span>
                                <h4 class="font-headline-h3 text-headline-h3 text-on-background">
                                    {{ app()->getLocale() === 'en' ? 'BAST / Handover' : 'BAST / Serah Terima' }}
                                </h4>
                            </div>
                            <p class="text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'Formal handover with Berita Acara Serah Terima (BAST), complete operational documentation, and user training.'
                                    : 'Serah terima resmi dengan Berita Acara Serah Terima (BAST), dokumentasi operasional lengkap, dan pelatihan pengguna.' }}
                            </p>
                        </div>
                        <div class="bg-white border-l-4 border-primary p-unit-md rounded shadow-sm">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="material-symbols-outlined text-primary">verified</span>
                                <h4 class="font-headline-h3 text-headline-h3 text-on-background">
                                    {{ app()->getLocale() === 'en' ? 'Warranty' : 'Garansi' }}
                                </h4>
                            </div>
                            <p class="text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'Post-launch warranty period covering defect resolution, performance monitoring, and priority support for identified issues.'
                                    : 'Periode garansi pasca-luncuran mencakup resolusi defect, monitoring performa, dan dukungan prioritas untuk isu yang teridentifikasi.' }}
                            </p>
                        </div>
                    </div>
                    <!-- Artifacts List -->
                    <div class="bg-on-background p-unit-md rounded-lg text-white">
                        <h4 class="font-headline-h3 text-headline-h3 mb-unit-md text-primary-fixed-dim">
                            {{ app()->getLocale() === 'en' ? 'QA Artifacts' : 'Artefak QA' }}
                        </h4>
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