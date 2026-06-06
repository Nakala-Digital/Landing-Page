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
                        "surface-tint": "#00677d",
                        "on-error": "#ffffff",
                        "outline-variant": "#bcc8ce",
                        "on-tertiary-fixed": "#112000",
                        "on-secondary-fixed": "#021943",
                        "surface-dim": "#d5dbdd",
                        "secondary-container": "#b9cbff",
                        "primary-fixed-dim": "#56d6f9",
                        "tertiary-fixed": "#abf837",
                        "error": "#ba1a1a",
                        "on-secondary-container": "#435582",
                        "background": "#f5fafd",
                        "on-secondary": "#ffffff",
                        "surface-container-low": "#eff4f7",
                        "on-tertiary-container": "#253e00",
                        "on-primary-fixed": "#001f27",
                        "on-primary": "#ffffff",
                        "outline": "#6d797e",
                        "inverse-primary": "#56d6f9",
                        "surface-container": "#e9eff1",
                        "on-error-container": "#93000a",
                        "secondary-fixed-dim": "#b3c6f9",
                        "surface-bright": "#f5fafd",
                        "surface-container-highest": "#dee3e6",
                        "primary-fixed": "#b2ebff",
                        "primary-container": "#12aed0",
                        "primary": "#00677d",
                        "on-primary-container": "#003c4a",
                        "on-surface-variant": "#3d494d",
                        "on-primary-fixed-variant": "#004e5f",
                        "on-tertiary-fixed-variant": "#314f00",
                        "on-background": "#171c1f",
                        "on-secondary-fixed-variant": "#334671",
                        "tertiary-container": "#73b100",
                        "on-surface": "#171c1f",
                        "tertiary": "#426900",
                        "surface": "#f5fafd",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "surface-container-high": "#e4e9ec",
                        "secondary-fixed": "#d9e2ff",
                        "error-container": "#ffdad6",
                        "inverse-surface": "#2c3133",
                        "tertiary-fixed-dim": "#90db0e",
                        "secondary": "#4b5d8a",
                        "inverse-on-surface": "#ecf1f4",
                        "surface-variant": "#dee3e6"
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
            background-color: #f5fafd;
            color: #171c1f;
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
        <section class="relative overflow-hidden bg-on-background py-unit-xl lg:py-32">
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
                            {{ app()->getLocale() === 'en' ? 'Agile delivery with clear quality control.' : 'Agile delivery dengan quality control yang jelas.' }}
                        </h1>
                        <p class="font-body-lg text-body-lg text-outline-variant mb-unit-lg max-w-xl">
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
        <!-- Delivery Steps (7 Steps) -->
        <section class="py-unit-xl bg-surface">
            <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
                <div class="mb-unit-lg text-center max-w-2xl mx-auto">
                    <h2 class="font-headline-h2 text-headline-h2 text-on-background mb-4">
                        {{ app()->getLocale() === 'en' ? 'Our End-to-End Lifecycle' : 'Lifecycle End-to-End Kami' }}
                    </h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        {{ app()->getLocale() === 'en'
                            ? 'Seven critical stages of refinement to ensure your digital product meets institutional standards from day one.'
                            : 'Tujuh tahap penting untuk memastikan produk digital Anda memenuhi standar institusional sejak hari pertama.' }}
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-unit-md">
                    <!-- Step 1 -->
                    <div
                        class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
                        <div class="text-primary-container font-headline-h2 mb-2">01</div>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-2">
                            {{ app()->getLocale() === 'en' ? 'Discovery' : 'Penggalian Kebutuhan' }}</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                            {{ app()->getLocale() === 'en'
                                ? 'In-depth stakeholder workshops to define product vision and technical feasibility.'
                                : 'Workshop mendalam bersama stakeholder untuk menetapkan visi produk dan kelayakan teknis.' }}
                        </p>
                        <div class="bg-surface p-2 rounded text-xs font-bold text-primary flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">description</span>
                            {{ app()->getLocale() === 'en' ? 'Output: PRD & Product Roadmap' : 'Output: PRD & Roadmap Produk' }}
                        </div>
                    </div>
                    <!-- Step 2 -->
                    <div
                        class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
                        <div class="text-primary-container font-headline-h2 mb-2">02</div>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-2">
                            {{ app()->getLocale() === 'en' ? 'Planning' : 'Perencanaan' }}</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                            {{ app()->getLocale() === 'en'
                                ? 'Resource allocation, sprint scheduling, and architectural design patterns.'
                                : 'Alokasi resource, penjadwalan sprint, dan rancangan pola arsitektur.' }}
                        </p>
                        <div class="bg-surface p-2 rounded text-xs font-bold text-primary flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">account_tree</span>
                            {{ app()->getLocale() === 'en' ? 'Output: Technical Design Doc' : 'Output: Dokumen Desain Teknis' }}
                        </div>
                    </div>
                    <!-- Step 3 -->
                    <div
                        class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
                        <div class="text-primary-container font-headline-h2 mb-2">03</div>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-2">
                            {{ app()->getLocale() === 'en' ? 'Design' : 'Desain' }}</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                            {{ app()->getLocale() === 'en'
                                ? 'High-fidelity UI mockups and UX prototyping with iterative feedback loops.'
                                : 'Mockup UI high-fidelity dan prototyping UX dengan siklus feedback iteratif.' }}
                        </p>
                        <div class="bg-surface p-2 rounded text-xs font-bold text-primary flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">palette</span>
                            {{ app()->getLocale() === 'en' ? 'Output: Interactive Prototype' : 'Output: Prototype Interaktif' }}
                        </div>
                    </div>
                    <!-- Step 4 -->
                    <div
                        class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
                        <div class="text-primary-container font-headline-h2 mb-2">04</div>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-2">
                            {{ app()->getLocale() === 'en' ? 'Development' : 'Pengembangan' }}</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                            {{ app()->getLocale() === 'en'
                                ? 'Clean code execution using industry-leading stacks and security best practices.'
                                : 'Eksekusi clean code menggunakan stack terdepan dan praktik keamanan terbaik.' }}
                        </p>
                        <div class="bg-surface p-2 rounded text-xs font-bold text-primary flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">code</span>
                            {{ app()->getLocale() === 'en' ? 'Output: Source Code (Git)' : 'Output: Source Code (Git)' }}
                        </div>
                    </div>
                    <!-- Step 5 -->
                    <div
                        class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
                        <div class="text-primary-container font-headline-h2 mb-2">05</div>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-2">
                            {{ app()->getLocale() === 'en' ? 'QA Testing' : 'Testing QA' }}</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                            {{ app()->getLocale() === 'en'
                                ? 'Rigorous SIT and UAT phases to identify and resolve blockers before launch.'
                                : 'Tahap SIT dan UAT yang ketat untuk menemukan dan menyelesaikan hambatan sebelum rilis.' }}
                        </p>
                        <div class="bg-surface p-2 rounded text-xs font-bold text-primary flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">bug_report</span>
                            {{ app()->getLocale() === 'en' ? 'Output: QA & SIT Report' : 'Output: Laporan QA & SIT' }}
                        </div>
                    </div>
                    <!-- Step 6 -->
                    <div
                        class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
                        <div class="text-primary-container font-headline-h2 mb-2">06</div>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-2">
                            {{ app()->getLocale() === 'en' ? 'Deployment' : 'Rilis' }}</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                            {{ app()->getLocale() === 'en'
                                ? 'Phased rollout to production environments with CI/CD automation.'
                                : 'Rollout bertahap ke production environment dengan otomasi CI/CD.' }}
                        </p>
                        <div class="bg-surface p-2 rounded text-xs font-bold text-primary flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">rocket_launch</span>
                            {{ app()->getLocale() === 'en' ? 'Output: Live Production Site' : 'Output: Situs Production Aktif' }}
                        </div>
                    </div>
                    <!-- Step 7 -->
                    <div
                        class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group col-span-1 md:col-span-2">
                        <div class="text-primary-container font-headline-h2 mb-2">07</div>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-2">
                            {{ app()->getLocale() === 'en' ? 'Improvement' : 'Peningkatan' }}</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                            {{ app()->getLocale() === 'en'
                                ? 'Post-launch monitoring, performance tuning, and ongoing feature updates based on real user data.'
                                : 'Monitoring pasca-rilis, tuning performa, dan pembaruan fitur berkelanjutan berdasarkan data pengguna nyata.' }}
                        </p>
                        <div class="bg-surface p-2 rounded text-xs font-bold text-primary flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">trending_up</span>
                            {{ app()->getLocale() === 'en' ? 'Output: Optimization Backlog' : 'Output: Backlog Optimasi' }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- QA Governance & Artifacts (Bento Layout) -->
        <section class="py-unit-xl bg-surface-container-low border-y border-outline-variant">
            <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
                <div class="mb-unit-lg">
                    <h2 class="font-headline-h2 text-headline-h2 text-on-background">
                        {{ app()->getLocale() === 'en' ? 'QA Governance & Deliverables' : 'Tata Kelola QA & Deliverable' }}
                    </h2>
                    <p class="text-on-surface-variant max-w-xl">
                        {{ app()->getLocale() === 'en'
                            ? 'We do not just build; we certify. Every project follows a strict governance framework that produces tangible technical artifacts.'
                            : 'Kami tidak hanya membangun; kami memvalidasi. Setiap proyek mengikuti framework tata kelola ketat yang menghasilkan artefak teknis nyata.' }}
                    </p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
                    <!-- Governance Column -->
                    <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                        <div class="bg-white border-l-4 border-primary p-unit-md rounded shadow-sm">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="material-symbols-outlined text-primary">fact_check</span>
                                <h4 class="font-headline-h3 text-headline-h3 text-on-background">
                                    {{ app()->getLocale() === 'en' ? 'Requirement Review' : 'Review Kebutuhan' }}</h4>
                            </div>
                            <p class="text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'Validation of functional and non-functional requirements before development starts.'
                                    : 'Validasi kebutuhan fungsional dan non-fungsional sebelum pengembangan dimulai.' }}
                            </p>
                        </div>
                        <div class="bg-white border-l-4 border-primary p-unit-md rounded shadow-sm">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="material-symbols-outlined text-primary">assignment</span>
                                <h4 class="font-headline-h3 text-headline-h3 text-on-background">
                                    {{ app()->getLocale() === 'en' ? 'Test Planning' : 'Perencanaan Testing' }}</h4>
                            </div>
                            <p class="text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'Strategic SIT (System Integration Testing) and UAT (User Acceptance Testing) protocols.'
                                    : 'Protokol SIT (System Integration Testing) dan UAT (User Acceptance Testing) yang terstruktur.' }}
                            </p>
                        </div>
                        <div class="bg-white border-l-4 border-primary p-unit-md rounded shadow-sm">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="material-symbols-outlined text-primary">security_update_warning</span>
                                <h4 class="font-headline-h3 text-headline-h3 text-on-background">
                                    {{ app()->getLocale() === 'en' ? 'Bug Tracking' : 'Pelacakan Bug' }}</h4>
                            </div>
                            <p class="text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'Centralized tracking of issues with priority-based resolution workflows.'
                                    : 'Pelacakan isu terpusat dengan alur penyelesaian berbasis prioritas.' }}
                            </p>
                        </div>
                        <div class="bg-white border-l-4 border-primary p-unit-md rounded shadow-sm">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="material-symbols-outlined text-primary">handshake</span>
                                <h4 class="font-headline-h3 text-headline-h3 text-on-background">
                                    {{ app()->getLocale() === 'en' ? 'BAST / Handover' : 'BAST / Serah Terima' }}</h4>
                            </div>
                            <p class="text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'Final certification and official handover with complete operational documentation.'
                                    : 'Sertifikasi akhir dan serah terima resmi dengan dokumentasi operasional lengkap.' }}
                            </p>
                        </div>
                    </div>
                    <!-- Artifacts List -->
                    <div class="bg-on-background p-unit-md rounded-lg text-white">
                        <h4 class="font-headline-h3 text-headline-h3 mb-unit-md text-primary-fixed-dim">
                            {{ app()->getLocale() === 'en' ? 'Project Artifacts' : 'Artefak Proyek' }}</h4>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-4 border-b border-white/10 pb-4">
                                <div class="w-10 h-10 rounded bg-white/5 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary-fixed-dim">list_alt</span>
                                </div>
                                <span
                                    class="font-body-md">{{ app()->getLocale() === 'en' ? 'Comprehensive Backlog' : 'Backlog Komprehensif' }}</span>
                            </li>
                            <li class="flex items-center gap-4 border-b border-white/10 pb-4">
                                <div class="w-10 h-10 rounded bg-white/5 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary-fixed-dim">draw</span>
                                </div>
                                <span
                                    class="font-body-md">{{ app()->getLocale() === 'en' ? 'UI Mockups & Flowcharts' : 'Mockup UI & Flowchart' }}</span>
                            </li>
                            <li class="flex items-center gap-4 border-b border-white/10 pb-4">
                                <div class="w-10 h-10 rounded bg-white/5 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary-fixed-dim">terminal</span>
                                </div>
                                <span
                                    class="font-body-md">{{ app()->getLocale() === 'en' ? 'Technical Test Cases' : 'Skenario Test Teknis' }}</span>
                            </li>
                            <li class="flex items-center gap-4 border-b border-white/10 pb-4">
                                <div class="w-10 h-10 rounded bg-white/5 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary-fixed-dim">menu_book</span>
                                </div>
                                <span
                                    class="font-body-md">{{ app()->getLocale() === 'en' ? 'Operations Manual (SOP)' : 'Panduan Operasional (SOP)' }}</span>
                            </li>
                            <li class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded bg-white/5 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary-fixed-dim">verified</span>
                                </div>
                                <span
                                    class="font-body-md">{{ app()->getLocale() === 'en' ? 'SIT/UAT Sign-off Documents' : 'Dokumen Sign-off SIT/UAT' }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Partner Banner -->
        <section class="py-unit-lg bg-white border-b border-outline-variant">
            <div
                class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto flex flex-col md:flex-row items-center justify-between gap-unit-md">
                <div class="flex items-center gap-4">
                    <span class="text-on-surface-variant font-label-sm uppercase tracking-widest">
                        {{ app()->getLocale() === 'en' ? 'Our Strategic Partner' : 'Mitra Strategis Kami' }}</span>
                    <div class="h-8 w-px bg-outline-variant hidden md:block"></div>
                </div>
                <div class="flex items-center bg-on-background px-6 py-4 rounded-lg">
                    <div class="bg-white px-4 py-2 rounded-md"><img class="h-9 w-auto object-contain"
                            src="{{ asset('assets/romulus-hitam.png') }}" alt="Romulus Digital"></div>
                    <span
                        class="text-outline-variant ml-4 font-body-md">{{ app()->getLocale() === 'en' ? 'Regional Excellence Alliance' : 'Aliansi Keunggulan Regional' }}</span>
                </div>
                <div class="text-on-surface-variant font-body-md italic">
                    "{{ app()->getLocale() === 'en' ? 'Bridging Local Delivery with Regional Capability' : 'Menjembatani Delivery Lokal dengan Kapabilitas Regional' }}"
                </div>
            </div>
        </section>
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
