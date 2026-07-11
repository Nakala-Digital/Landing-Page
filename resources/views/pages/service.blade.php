<!DOCTYPE html>

<html class="scroll-smooth" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ app()->getLocale() === 'en' ? 'Services | Nakala Digital' : 'Layanan | Nakala Digital' }}</title>
    @include('partials.seo', [
        'title' => app()->getLocale() === 'en' ? 'Services | Nakala Digital' : 'Layanan | Nakala Digital',
        'description' =>
            app()->getLocale() === 'en'
                ? 'Discover our high-tier software development, custom AI models, cloud infrastructure, and tech advisory services.'
                : 'Temukan pengembangan perangkat lunak tingkat tinggi, model AI kustom, infrastruktur cloud, dan layanan penasihat teknologi kami.',
    ])
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&amp;display=swap"
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
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }

        .service-card,
        .solution-card {
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.4s ease;
        }

        .service-card:hover,
        .solution-card:hover {
            transform: translateY(-8px);
        }
    </style>
</head>

<body
    class="bg-background text-on-background font-body-md selection:bg-primary-container selection:text-on-primary-container">
    @include('partials.navbar')
    <!-- Hero Section -->
    <header class="relative pt-32 pb-unit-xl overflow-hidden">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="grid lg:grid-cols-2 gap-gutter items-center">
                <div class="z-10">
                    <div
                        class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-4 py-1.5 rounded-full font-label-sm text-label-sm uppercase tracking-widest mb-6">
                        <span class="material-symbols-outlined text-[16px]">bolt</span>
                        {{ app()->getLocale() === 'en' ? 'Service Pillar' : 'pilar layanan' }}
                    </div>
                    <h1
                        class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-on-background mb-6 leading-tight">
                        {{ app()->getLocale() === 'en' ? 'Technology services for' : 'Layanan teknologi untuk' }} <span
                            class="text-primary">{{ app()->getLocale() === 'en' ? 'modern business needs.' : 'kebutuhan bisnis modern.' }}</span>
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant mb-unit-lg max-w-xl">
                        {{ app()->getLocale() === 'en'
                            ? 'Bridging local Indonesian context with regional software development expertise to accelerate your digital transformation journey.'
                            : 'Menjembatani konteks lokal Indonesia dengan keahlian pengembangan perangkat lunak regional untuk mempercepat perjalanan transformasi digital Anda.' }}
                    </p>
                    <div class="flex flex-wrap gap-4">
                        @php $localeSuffix = app()->getLocale() === 'en' ? '.en' : ''; @endphp
                        <a href="#solutions"
                            class="group inline-flex items-center justify-center bg-primary text-white px-8 py-4 rounded-[20px] font-button text-button uppercase tracking-widest gap-2 shadow-lg shadow-primary/20 hover:shadow-xl hover:shadow-primary/30 hover:-translate-y-0.5 hover:bg-primary/90 active:translate-y-0 transition-all duration-300">
                            {{ app()->getLocale() === 'en' ? 'Explore Solutions' : 'Jelajahi Solusi' }}
                            <span
                                class="material-symbols-outlined transition-transform duration-300 group-hover:translate-x-1">arrow_forward</span>
                        </a>
                    </div>
                </div>
                <div class="relative mt-12 lg:mt-0">
                    <div class="absolute -top-10 -right-10 w-64 h-64 bg-primary/10 rounded-full blur-3xl"></div>
                    <div class="relative rounded-[20px] overflow-hidden border-2 border-outline-variant shadow-2xl">
                        <img alt="Strategic Roadmap" class="w-full h-auto object-cover"
                            data-alt="A professional enterprise dashboard interface showing complex digital transformation roadmaps and technical architectures. The visual style is high-contrast with a midnight navy background and vibrant impact lime accents. The interface includes interactive gantt charts, KPI metrics, and system health status indicators, glowing softly against a dark, minimalist digital workspace background."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBtRUftF0rI-CVIPCyxjoSYszWuTSBLLg6xy-DYz4UO-0utBeXCW0m8_qqBw30K3sdSaJ4lhUd_rFYcG7SUOsyXI3JSfuj3d-g_Bwjohi07wdbzEz0xZJUM4ZPnF8G7BS1-NRXLEq0UnATqZ6ZVx5Dxss6tdRWtFWD0LMczPvS6B9E9zBKmXxlSiDQjoiqpMPUf1WfmfwX0lFtE1i8cKdHiz0Kce57z3MUFe6RYmqeHH4LXCHch1gM7uEM3nvECcGNTpuQxRyVC9Eyq" />
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Service Pillars Section -->
    <section class="py-unit-xl bg-surface-container-lowest">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="text-center mb-unit-xl">
                <h2
                    class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 mb-4">
                    {{ app()->getLocale() === 'en' ? 'Our Service Pillars' : 'Pilar Layanan Kami' }}</h2>
                <div class="w-24 h-1.5 bg-primary mx-auto mb-6"></div>
                <p class="max-w-2xl mx-auto font-body-lg text-body-lg text-on-surface-variant">
                    {{ app()->getLocale() === 'en'
                        ? 'Comprehensive technical capabilities designed for enterprise scale and local agility.'
                        : 'Kemampuan teknis komprehensif yang dirancang untuk skala perusahaan dan kelincahan lokal.' }}
                </p>
            </div>
            <!-- Bento Grid Services -->
            <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-gutter">
                <!-- 1. AI & GenAI -->
                <div
                    class="md:col-span-3 lg:col-span-4 bg-white border border-outline-variant p-unit-lg service-card border-t-4 border-t-primary rounded-[20px] shadow-sm hover:shadow-2xl">
                    <span class="material-symbols-outlined text-primary text-5xl mb-6" data-icon="psychology"
                        style="font-variation-settings: 'FILL' 1;">psychology</span>
                    <h3 class="font-headline-h3 text-headline-h3 mb-4">
                        {{ app()->getLocale() === 'en' ? 'AI & GenAI' : 'AI & GenAI' }}</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-6">
                        {{ app()->getLocale() === 'en' ? 'Implementing state-of-the-art Generative AI for operational efficiency and automated customer engagement.' : 'Menerapkan AI Generatif canggih untuk efisiensi operasional dan keterlibatan pelanggan otomatis.' }}
                    </p>
                    <ul class="space-y-3 font-label-sm text-label-sm text-primary uppercase tracking-wider">
                        <li class="flex items-center gap-2"><span
                                class="material-symbols-outlined scale-75">check_circle</span>
                            {{ app()->getLocale() === 'en' ? 'Custom AI Model Development' : 'Kustomisasi Model AI' }}
                        </li>
                        <li class="flex items-center gap-2"><span
                                class="material-symbols-outlined scale-75">check_circle</span>
                            {{ app()->getLocale() === 'en' ? 'Business Process Automation' : 'Otomasi Proses Bisnis' }}
                        </li>
                        <li class="flex items-center gap-2"><span
                                class="material-symbols-outlined scale-75">check_circle</span>
                            {{ app()->getLocale() === 'en' ? 'Predictive Analytics' : 'Analitik Prediktif' }}</li>
                    </ul>
                </div>
                <!-- 2. Custom Software Dev -->
                <div
                    class="md:col-span-3 lg:col-span-8 bg-on-secondary-fixed text-white p-unit-lg service-card flex flex-col md:flex-row gap-gutter rounded-[20px] shadow-sm hover:shadow-2xl">
                    <div class="flex-1">
                        <span class="material-symbols-outlined text-tertiary-fixed text-5xl mb-6"
                            data-icon="code">code</span>
                        <h3 class="font-headline-h3 text-headline-h3 mb-4">
                            {{ app()->getLocale() === 'en' ? 'Custom Software Dev' : 'Pengembangan Software Kustom' }}
                        </h3>
                        <p class="font-body-md text-body-md text-surface-variant mb-6">
                            {{ app()->getLocale() === 'en' ? 'Bespoke software solutions crafted for unique business processes and high-performance requirements.' : 'Solusi perangkat lunak khusus yang dirancang untuk proses bisnis unik dan persyaratan performa tinggi.' }}
                        </p>
                        <ul
                            class="grid grid-cols-1 sm:grid-cols-2 gap-3 font-label-sm text-label-sm text-tertiary-fixed uppercase tracking-wider">
                            <li class="flex items-center gap-2"><span
                                    class="material-symbols-outlined scale-75">check_circle</span>
                                {{ app()->getLocale() === 'en' ? 'Enterprise Applications' : 'Aplikasi Enterprise' }}
                            </li>
                            <li class="flex items-center gap-2"><span
                                    class="material-symbols-outlined scale-75">check_circle</span>
                                {{ app()->getLocale() === 'en' ? 'Scalable Platform Architecture' : 'Sistem Terukur' }}
                            </li>
                            <li class="flex items-center gap-2"><span
                                    class="material-symbols-outlined scale-75">check_circle</span>
                                {{ app()->getLocale() === 'en' ? 'System Modernization' : 'Modernisasi Sistem' }}</li>
                            <li class="flex items-center gap-2"><span
                                    class="material-symbols-outlined scale-75">check_circle</span>
                                {{ app()->getLocale() === 'en' ? 'Cloud Integration' : 'Integrasi Cloud' }}</li>
                        </ul>
                    </div>
                    <div
                        class="w-full md:w-1/3 bg-white/5 rounded-[16px] overflow-hidden border border-white/10 hidden lg:block">
                        <img class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all"
                            data-alt="A futuristic software development environment with multiple high-resolution monitors displaying complex lines of code and dark-themed UI mockups. The room is dimly lit with a professional midnight navy ambiance and neon blue accents highlighting the workspace. A high-tier workstation sits at the center, symbolizing technical rigor and precision craftsmanship in modern corporate software engineering."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgYS2YWTvwWHj4QFP28CssIPWEpvrgnPcgAF9hFVibVwA-gh3A3L5RgeltvRgoBStWyfvtsLZ3XtJ0uotY0jjB25-_bjmLmt3p_8It06RMYUzopoC0UeaxvL9LqmeTiBR8nc0YFFK3JifErMagfxj1EkMH8DhaJiuf154Ed4kp0XwEQ3Up1zBXkshsOLsYIOnBz9BI6SIwZegE5C8GqkZIkJp5cvTOwSaJC9Y_CdAgP_PH-DXqN3_Ui-zxqY-5HFoFOmltnkTKu1kf" />
                    </div>
                </div>
                <!-- 3. Tech Consulting -->
                <div
                    class="md:col-span-6 lg:col-span-6 bg-white border border-outline-variant p-unit-lg service-card rounded-[20px] shadow-sm hover:shadow-2xl">
                    <div class="flex items-start justify-between mb-6">
                        <span class="material-symbols-outlined text-primary text-5xl"
                            data-icon="query_stats">query_stats</span>
                        <span
                            class="bg-primary-container/10 text-primary px-3 py-1 rounded-full font-label-sm text-label-sm">{{ app()->getLocale() === 'en' ? 'CONSULTANCY' : 'KONSULTANSI' }}</span>
                    </div>
                    <h3 class="font-headline-h3 text-headline-h3 mb-4">
                        {{ app()->getLocale() === 'en' ? 'Tech Consulting' : 'Konsultasi Teknologi' }}</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-6">
                        {{ app()->getLocale() === 'en' ? 'Strategic advice to align technology investment with business growth and regional market expansion.' : 'Nasihat strategis untuk menyelaraskan investasi teknologi dengan pertumbuhan bisnis dan ekspansi pasar regional.' }}
                    </p>
                    <div class="grid grid-cols-2 gap-4">
                        <div
                            class="p-4 bg-surface-container rounded-[14px] hover:bg-surface-container-high transition-colors duration-300">
                            <h4 class="font-bold text-on-surface mb-1">
                                {{ app()->getLocale() === 'en' ? 'Architecture Review' : 'Tinjauan Arsitektur' }}</h4>
                            <p class="text-xs text-on-surface-variant">
                                {{ app()->getLocale() === 'en' ? 'System audits and scalability assessments.' : 'Audit sistem dan penilaian skalabilitas.' }}
                            </p>
                        </div>
                        <div
                            class="p-4 bg-surface-container rounded-[14px] hover:bg-surface-container-high transition-colors duration-300">
                            <h4 class="font-bold text-on-surface mb-1">
                                {{ app()->getLocale() === 'en' ? 'Digital Roadmap' : 'Peta Jalan Digital' }}</h4>
                            <p class="text-xs text-on-surface-variant">
                                {{ app()->getLocale() === 'en' ? 'Phased transformation strategy.' : 'Strategi transformasi bertahap.' }}
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 4. Web & Portal -->
                <div
                    class="md:col-span-3 lg:col-span-3 bg-white border border-outline-variant p-unit-lg service-card border-t-4 border-t-tertiary rounded-[20px] shadow-sm hover:shadow-2xl">
                    <span class="material-symbols-outlined text-tertiary text-5xl mb-6" data-icon="web">web</span>
                    <h3 class="font-headline-h3 text-headline-h3 mb-4">
                        {{ app()->getLocale() === 'en' ? 'Web & Portal' : 'Web & Portal' }}</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        {{ app()->getLocale() === 'en' ? 'Engaging digital interfaces and high-traffic portals for B2B and B2C segments.' : 'Antarmuka digital yang menarik dan portal trafik tinggi untuk segmen B2B dan B2C.' }}
                    </p>
                </div>
                <!-- 5. QA Governance -->
                <div
                    class="md:col-span-3 lg:col-span-3 bg-white border border-outline-variant p-unit-lg service-card border-t-4 border-t-primary rounded-[20px] shadow-sm hover:shadow-2xl">
                    <span class="material-symbols-outlined text-primary text-5xl mb-6" data-icon="verified_user"
                        style="font-variation-settings: 'FILL' 1;">verified_user</span>
                    <h3 class="font-headline-h3 text-headline-h3 mb-4">
                        {{ app()->getLocale() === 'en' ? 'QA Governance' : 'Tata Kelola QA' }}</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        {{ app()->getLocale() === 'en' ? 'Ensuring zero-defect deployment with automated testing frameworks and standards.' : 'Memastikan penerapan tanpa cacat dengan kerangka pengujian dan standar otomatis.' }}
                    </p>
                </div>
                <!-- 6. Managed Support & D365 -->
                <div
                    class="md:col-span-6 lg:col-span-12 bg-surface-container-highest border border-outline-variant p-unit-lg service-card flex flex-col md:flex-row items-center gap-unit-lg rounded-[20px] shadow-sm hover:shadow-2xl">
                    <div class="flex-1">
                        <span class="material-symbols-outlined text-primary text-5xl mb-6"
                            data-icon="support_agent">support_agent</span>
                        <h3 class="font-headline-h3 text-headline-h3 mb-4">
                            {{ app()->getLocale() === 'en' ? 'Managed Support & Dynamics 365' : 'Managed Support & Dynamics 365' }}
                        </h3>
                        <p class="font-body-lg text-body-lg text-on-surface-variant mb-6">
                            {{ app()->getLocale() === 'en' ? 'End-to-end management of Microsoft D365 ecosystems and 24/7 technical support operations.' : 'Manajemen ujung-ke-ujung ekosistem Microsoft D365 dan operasi dukungan teknis 24/7.' }}
                        </p>
                        <div class="flex flex-wrap gap-3">
                            <span
                                class="px-4 py-2 bg-white border border-outline-variant font-label-sm text-label-sm rounded-full uppercase">{{ app()->getLocale() === 'en' ? 'L1/L2/L3 Support' : 'Dukungan L1/L2/L3' }}</span>
                            <span
                                class="px-4 py-2 bg-white border border-outline-variant font-label-sm text-label-sm rounded-full uppercase">{{ app()->getLocale() === 'en' ? 'D365 Implementation' : 'Implementasi D365' }}</span>
                            <span
                                class="px-4 py-2 bg-white border border-outline-variant font-label-sm text-label-sm rounded-full uppercase">{{ app()->getLocale() === 'en' ? 'Cloud Migration' : 'Migrasi Cloud' }}</span>
                            <span
                                class="px-4 py-2 bg-white border border-outline-variant font-label-sm text-label-sm rounded-full uppercase">{{ app()->getLocale() === 'en' ? '24/7 Monitoring' : 'Pemantauan 24/7' }}</span>
                        </div>
                    </div>
                    <div
                        class="w-full md:w-1/4 aspect-square bg-primary p-6 rounded-[20px] flex flex-col justify-center items-center text-center text-white">
                        <div class="text-4xl font-bold mb-2">{{ app()->getLocale() === 'en' ? 'SLA' : 'SLA' }}</div>
                        <div class="text-sm font-label-sm uppercase tracking-widest opacity-80">
                            {{ app()->getLocale() === 'en' ? 'Flexible SLAs' : 'SLA Fleksibel' }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Solutions (merged into Layanan) -->
    <section id="solutions" class="py-unit-xl scroll-mt-24">
        @php
            $locale = app()->getLocale();
            $detailRoute = $locale === 'en' ? 'solutions.detail.en' : 'solutions.detail';
            $solutionCases = [
                [
                    'id' => 'ai-hiring',
                    'icon' => 'psychology',
                    'span' => 'md:col-span-8',
                    'featured' => true,
                    'title' => [
                        'en' => 'AI Hiring / GenAI Recruitment',
                        'id' => 'AI Hiring / Rekrutmen GenAI',
                    ],
                    'category' => [
                        'en' => 'Intelligent Talent Acquisition',
                        'id' => 'Akuisisi Talenta Cerdas',
                    ],
                    'summary' => [
                        'en' =>
                            'AI-powered recruitment platform for CV parsing, candidate scoring, automated shortlisting, scheduling, and hiring analytics.',
                        'id' =>
                            'Platform rekrutmen berbasis AI untuk parsing CV, scoring kandidat, shortlisting otomatis, penjadwalan, dan analitik rekrutmen.',
                    ],
                    'challenge' => [
                        'en' =>
                            'Recruitment teams face high CV volume, inconsistent screening, and slow time-to-hire, creating poor candidate experience and missed talent.',
                        'id' =>
                            'Tim rekrutmen menghadapi volume CV tinggi, screening tidak konsisten, dan time-to-hire lambat sehingga pengalaman kandidat menurun dan talenta potensial terlewat.',
                    ],
                    'solution' => [
                        'en' =>
                            'Automate CV screening, score candidates against job criteria, and streamline end-to-end hiring workflows.',
                        'id' =>
                            'Mengotomasi screening CV, menilai kandidat berdasarkan kriteria posisi, dan merapikan workflow rekrutmen end-to-end.',
                    ],
                    'features' => [
                        'en' => [
                            'AI CV parsing and scoring',
                            'Job-fit ranking and automated shortlisting',
                            'Interview scheduling and recruiter dashboard',
                            'Candidate status portal and analytics',
                        ],
                        'id' => [
                            'Parsing dan scoring CV berbasis AI',
                            'Ranking job-fit dan shortlisting otomatis',
                            'Penjadwalan interview dan dashboard recruiter',
                            'Portal status kandidat dan analitik',
                        ],
                    ],
                    'impact' => [
                        'en' => [
                            'Reduced CV screening time by up to 80%',
                            'More consistent, bias-reduced evaluation',
                            'Faster time-to-hire and better candidate experience',
                            'Scalable for high-volume hiring across roles',
                        ],
                        'id' => [
                            'Waktu screening CV berkurang hingga 80%',
                            'Evaluasi lebih konsisten dan minim bias',
                            'Time-to-hire lebih cepat dan pengalaman kandidat membaik',
                            'Skalabel untuk rekrutmen volume tinggi lintas posisi',
                        ],
                    ],
                    'capability' => 'AI Technology & GenAI, Custom Software Development, SaaS Platform',
                ],
                [
                    'id' => 'hrms-mahya',
                    'icon' => 'badge',
                    'span' => 'md:col-span-4',
                    'title' => [
                        'en' => 'HRMS / Mahya Platform',
                        'id' => 'HRMS / Platform Mahya',
                    ],
                    'category' => [
                        'en' => 'Employee Self-Service & HR Operations',
                        'id' => 'Employee Self-Service & Operasional HR',
                    ],
                    'summary' => [
                        'en' =>
                            'Custom HRMS platform for attendance, leave, payroll, employee profiles, manager approvals, and HR reporting.',
                        'id' =>
                            'Platform HRMS custom untuk absensi, cuti, payroll, profil karyawan, approval manager, dan pelaporan HR.',
                    ],
                    'challenge' => [
                        'en' =>
                            'HR teams manage attendance, leave, payroll, and employee data manually across spreadsheets without a centralized system.',
                        'id' =>
                            'Tim HR mengelola absensi, cuti, payroll, dan data karyawan secara manual di banyak spreadsheet tanpa sistem terpusat.',
                    ],
                    'solution' => [
                        'en' =>
                            'Mahya centralizes HR operations with self-service access, approval workflows, and an HR admin dashboard.',
                        'id' =>
                            'Mahya memusatkan operasional HR dengan akses self-service, approval workflow, dan dashboard admin HR.',
                    ],
                    'features' => [
                        'en' => [
                            'Attendance and leave management',
                            'Payroll processing and employee profiles',
                            'Approval workflows and reporting dashboard',
                            'Mobile-friendly interface',
                        ],
                        'id' => [
                            'Manajemen absensi dan cuti',
                            'Proses payroll dan profil karyawan',
                            'Approval workflow dan dashboard reporting',
                            'Interface mobile-friendly',
                        ],
                    ],
                    'impact' => [
                        'en' => [
                            'Centralized HR data with real-time visibility',
                            'Significantly reduced manual HR processing',
                            'Improved employee self-service experience',
                            'Ready for multi-entity deployment',
                        ],
                        'id' => [
                            'Data HR terpusat dengan visibilitas real-time',
                            'Proses manual HR berkurang signifikan',
                            'Pengalaman self-service karyawan meningkat',
                            'Siap untuk deployment multi-entitas',
                        ],
                    ],
                    'capability' => 'Custom Software Development, SaaS Platform, Operational Systems',
                ],
                [
                    'id' => 'hse-operations',
                    'icon' => 'health_and_safety',
                    'span' => 'md:col-span-4',
                    'title' => [
                        'en' => 'HSE / Operations Platform',
                        'id' => 'Platform HSE / Operasional',
                    ],
                    'category' => [
                        'en' => 'Health, Safety & Environment Digitalization',
                        'id' => 'Digitalisasi Health, Safety & Environment',
                    ],
                    'summary' => [
                        'en' =>
                            'Digital platform for incident reporting, safety checklists, compliance dashboards, alerts, audit trails, and role-based access.',
                        'id' =>
                            'Platform digital untuk pelaporan insiden, safety checklist, dashboard kepatuhan, alert, audit trail, dan akses berbasis role.',
                    ],
                    'challenge' => [
                        'en' =>
                            'HSE compliance and safety reporting rely on manual forms, spreadsheets, and disconnected communication channels.',
                        'id' =>
                            'Kepatuhan HSE dan pelaporan keselamatan masih bergantung pada form manual, spreadsheet, dan kanal komunikasi yang terpisah.',
                    ],
                    'solution' => [
                        'en' =>
                            'A dedicated HSE operations platform enabling digital incident reporting, safety checklist management, and compliance tracking.',
                        'id' =>
                            'Platform operasional HSE khusus untuk pelaporan insiden digital, manajemen safety checklist, dan tracking kepatuhan.',
                    ],
                    'features' => [
                        'en' => [
                            'Incident reporting and tracking',
                            'Safety checklist management',
                            'Compliance dashboard and real-time alerts',
                            'Audit trail and role-based access',
                        ],
                        'id' => [
                            'Pelaporan dan tracking insiden',
                            'Manajemen safety checklist',
                            'Dashboard kepatuhan dan alert real-time',
                            'Audit trail dan akses berbasis role',
                        ],
                    ],
                    'impact' => [
                        'en' => [
                            'Faster incident response through real-time reporting',
                            'Improved HSE compliance visibility for management',
                            'Reduced risk of unreported safety incidents',
                            'Audit-ready documentation and reporting trail',
                        ],
                        'id' => [
                            'Respons insiden lebih cepat lewat pelaporan real-time',
                            'Visibilitas kepatuhan HSE lebih baik untuk manajemen',
                            'Risiko insiden keselamatan tidak terlapor berkurang',
                            'Dokumentasi dan reporting trail siap audit',
                        ],
                    ],
                    'capability' => 'Operational Systems, Custom Software Development, QA Governance',
                ],
                [
                    'id' => 'wargakas',
                    'icon' => 'payments',
                    'span' => 'md:col-span-4',
                    'dark' => true,
                    'title' => [
                        'en' => 'Wargakas',
                        'id' => 'Wargakas',
                    ],
                    'category' => [
                        'en' => 'Residential Cash Management Platform',
                        'id' => 'Platform Manajemen Kas Lingkungan',
                    ],
                    'summary' => [
                        'en' =>
                            'Digital cash management platform for residential communities covering billing, payment tracking, finance dashboards, and resident portals.',
                        'id' =>
                            'Platform manajemen kas digital untuk lingkungan hunian dengan billing, tracking pembayaran, dashboard finansial, dan portal warga.',
                    ],
                    'challenge' => [
                        'en' =>
                            'Residential communities manage monthly dues, facility fees, and cash flow through manual collection and informal records.',
                        'id' =>
                            'Komunitas hunian mengelola iuran bulanan, biaya fasilitas, dan arus kas lewat penagihan manual dan catatan informal.',
                    ],
                    'solution' => [
                        'en' =>
                            'Wargakas enables transparent billing, payment tracking, financial reporting, and resident-facing visibility.',
                        'id' =>
                            'Wargakas menghadirkan billing transparan, tracking pembayaran, laporan finansial, dan visibilitas untuk warga.',
                    ],
                    'features' => [
                        'en' => [
                            'Resident billing and invoicing',
                            'Payment tracking and expense management',
                            'Financial dashboard',
                            'Resident portal and admin reporting',
                        ],
                        'id' => [
                            'Billing dan invoice warga',
                            'Tracking pembayaran dan manajemen pengeluaran',
                            'Dashboard finansial',
                            'Portal warga dan laporan admin',
                        ],
                    ],
                    'impact' => [
                        'en' => [
                            'Transparent and auditable community finance',
                            'Reduced manual collection effort',
                            'Improved resident trust through real-time visibility',
                            'Scalable for multiple residential clusters',
                        ],
                        'id' => [
                            'Keuangan komunitas lebih transparan dan auditable',
                            'Beban penagihan manual berkurang',
                            'Kepercayaan warga naik lewat visibilitas real-time',
                            'Skalabel untuk banyak cluster hunian',
                        ],
                    ],
                    'capability' => 'Custom Software Development, Web & Portal Development, SaaS Platform',
                ],
                [
                    'id' => 'ppdb-school',
                    'icon' => 'school',
                    'span' => 'md:col-span-4',
                    'title' => [
                        'en' => 'PPDB Website & School Portal',
                        'id' => 'Website PPDB & Portal Sekolah',
                    ],
                    'category' => [
                        'en' => 'Education Digital Transformation',
                        'id' => 'Transformasi Digital Pendidikan',
                    ],
                    'summary' => [
                        'en' =>
                            'End-to-end school admission and portal solution with online registration, document upload, verification workflow, and parent portal.',
                        'id' =>
                            'Solusi penerimaan siswa dan portal sekolah end-to-end dengan registrasi online, upload dokumen, workflow verifikasi, dan portal orang tua.',
                    ],
                    'challenge' => [
                        'en' =>
                            'Educational institutions still rely on manual paper-based admission processes, reducing transparency and parent experience during PPDB season.',
                        'id' =>
                            'Institusi pendidikan masih mengandalkan proses penerimaan manual berbasis kertas, sehingga transparansi dan pengalaman orang tua menurun saat PPDB.',
                    ],
                    'solution' => [
                        'en' =>
                            'A digital PPDB platform for online registration, document handling, real-time status tracking, and school website presence.',
                        'id' =>
                            'Platform PPDB digital untuk registrasi online, pengelolaan dokumen, tracking status real-time, dan website sekolah.',
                    ],
                    'features' => [
                        'en' => [
                            'Online registration forms',
                            'Document verification workflow',
                            'Admin dashboard and parent portal',
                            'Public school website',
                        ],
                        'id' => [
                            'Form registrasi online',
                            'Workflow verifikasi dokumen',
                            'Dashboard admin dan portal orang tua',
                            'Website publik sekolah',
                        ],
                    ],
                    'impact' => [
                        'en' => [
                            'More structured and auditable admission process',
                            'Improved parent experience with transparency',
                            'Reduced admin workload through automated workflows',
                            'SIT/UAT documentation and BAST handover delivered',
                        ],
                        'id' => [
                            'Proses penerimaan lebih terstruktur dan auditable',
                            'Pengalaman orang tua membaik lewat transparansi',
                            'Beban admin berkurang lewat workflow otomatis',
                            'Dokumentasi SIT/UAT dan BAST handover tersedia',
                        ],
                    ],
                    'capability' => 'Web & Portal Development, QA Governance, Agile Delivery',
                ],
                [
                    'id' => 'ai-coach',
                    'icon' => 'smart_toy',
                    'span' => 'md:col-span-4',
                    'title' => [
                        'en' => 'Digital Coaching / AI Coach',
                        'id' => 'Digital Coaching / AI Coach',
                    ],
                    'category' => [
                        'en' => 'Personalized Learning & Performance Development',
                        'id' => 'Pembelajaran Personal & Pengembangan Performa',
                    ],
                    'summary' => [
                        'en' =>
                            'AI-powered coaching platform for personalized learning journeys, goal tracking, progress dashboards, and on-demand conversational coaching.',
                        'id' =>
                            'Platform coaching berbasis AI untuk learning journey personal, tracking target, dashboard progres, dan coaching percakapan on-demand.',
                    ],
                    'challenge' => [
                        'en' =>
                            'Organizations struggle to deliver consistent and scalable coaching for distributed teams where human coach access is limited or costly.',
                        'id' =>
                            'Organisasi sulit menghadirkan coaching yang konsisten dan skalabel untuk tim tersebar saat akses coach manusia terbatas atau mahal.',
                    ],
                    'solution' => [
                        'en' =>
                            'Deliver personalized learning journeys and coaching interactions through conversational AI and performance tracking.',
                        'id' =>
                            'Menghadirkan learning journey personal dan interaksi coaching melalui conversational AI serta tracking performa.',
                    ],
                    'features' => [
                        'en' => [
                            'AI coaching chatbot',
                            'Personalized learning paths',
                            'Goal setting and progress dashboards',
                            'Manager visibility, content library, and reminders',
                        ],
                        'id' => [
                            'AI coaching chatbot',
                            'Learning path personal',
                            'Goal setting dan dashboard progres',
                            'Visibilitas manager, content library, dan reminder',
                        ],
                    ],
                    'impact' => [
                        'en' => [
                            'Scalable coaching without proportional cost increase',
                            'Personalized development for each employee',
                            'Improved learning engagement through AI nudges',
                            'Real-time performance visibility for managers and HR',
                        ],
                        'id' => [
                            'Coaching skalabel tanpa kenaikan biaya proporsional',
                            'Pengembangan personal untuk tiap karyawan',
                            'Engagement belajar meningkat lewat nudges AI',
                            'Visibilitas performa real-time untuk manager dan HR',
                        ],
                    ],
                    'capability' => 'AI Technology & GenAI, SaaS Platform Development, Custom Software Development',
                ],
                [
                    'id' => 'd365-support',
                    'icon' => 'account_balance',
                    'span' => 'md:col-span-4',
                    'title' => [
                        'en' => 'D365 Finance Support',
                        'id' => 'D365 Finance Support',
                    ],
                    'category' => [
                        'en' => 'Microsoft Dynamics 365 Capability Reference',
                        'id' => 'Referensi Kapabilitas Microsoft Dynamics 365',
                    ],
                    'summary' => [
                        'en' =>
                            'Local Indonesia-based support for Microsoft D365 Finance backed by Romulus Digital regional capability.',
                        'id' =>
                            'Dukungan lokal Indonesia untuk Microsoft D365 Finance dengan dukungan kapabilitas regional Romulus Digital.',
                    ],
                    'challenge' => [
                        'en' =>
                            'Enterprise clients running Microsoft ERP need local response, configuration support, reporting automation, and user adoption assistance.',
                        'id' =>
                            'Klien enterprise yang menjalankan Microsoft ERP membutuhkan respons lokal, dukungan konfigurasi, otomasi reporting, dan bantuan adopsi user.',
                    ],
                    'solution' => [
                        'en' =>
                            'D365 Finance configuration, customization support, module implementation assistance, and managed services.',
                        'id' =>
                            'Konfigurasi D365 Finance, dukungan kustomisasi, asistensi implementasi modul, dan managed services.',
                    ],
                    'features' => [
                        'en' => [
                            'D365 Finance module support',
                            'Power BI reporting integration',
                            'Power Automate workflow automation',
                            'AI Builder integration and user training',
                        ],
                        'id' => [
                            'Dukungan modul D365 Finance',
                            'Integrasi reporting Power BI',
                            'Otomasi workflow Power Automate',
                            'Integrasi AI Builder dan training user',
                        ],
                    ],
                    'impact' => [
                        'en' => [
                            'Faster response through dedicated managed service model',
                            'Bridge between Microsoft enterprise capability and local business needs',
                            'Flexible project-based or retainer engagement',
                            'Delivered with Romulus Digital certified Microsoft expertise',
                        ],
                        'id' => [
                            'Respons lebih cepat lewat model managed service khusus',
                            'Menjembatani kapabilitas Microsoft enterprise dengan kebutuhan bisnis lokal',
                            'Fleksibel untuk project-based atau retainer',
                            'Didukung expertise Microsoft tersertifikasi dari Romulus Digital',
                        ],
                    ],
                    'capability' => 'Microsoft D365 & Power Platform, Managed Support, Technology Consulting',
                ],
                [
                    'id' => 'ai-automation',
                    'icon' => 'hub',
                    'span' => 'md:col-span-4',
                    'title' => [
                        'en' => 'AI Automation & SaaS Platform',
                        'id' => 'AI Automation & Platform SaaS',
                    ],
                    'category' => [
                        'en' => 'AI Technology Capabilities',
                        'id' => 'Kapabilitas Teknologi AI',
                    ],
                    'summary' => [
                        'en' =>
                            'AI-enabled solutions for GenAI applications, document intelligence, intelligent automation, dashboard analytics, and AI SaaS products.',
                        'id' =>
                            'Solusi berbasis AI untuk aplikasi GenAI, document intelligence, intelligent automation, dashboard analytics, dan produk AI SaaS.',
                    ],
                    'challenge' => [
                        'en' =>
                            'Organizations need to automate repetitive tasks, enhance decision-making, and embed intelligence into daily operations.',
                        'id' =>
                            'Organisasi perlu mengotomasi pekerjaan repetitif, meningkatkan pengambilan keputusan, dan menanamkan intelligence ke operasional harian.',
                    ],
                    'solution' => [
                        'en' =>
                            'Design and deploy GenAI workflows, AI-assisted operations, data pipelines, dashboards, and B2B AI SaaS platforms.',
                        'id' =>
                            'Merancang dan membangun workflow GenAI, operasi berbantuan AI, data pipeline, dashboard, dan platform AI SaaS B2B.',
                    ],
                    'features' => [
                        'en' => [
                            'Conversational AI and document intelligence',
                            'Intelligent automation and smart notifications',
                            'AI SaaS platform development',
                            'Data analytics and Microsoft Power Platform integration',
                        ],
                        'id' => [
                            'Conversational AI dan document intelligence',
                            'Intelligent automation dan smart notification',
                            'Pengembangan platform AI SaaS',
                            'Analitik data dan integrasi Microsoft Power Platform',
                        ],
                    ],
                    'impact' => [
                        'en' => [
                            'Reduced repetitive manual work',
                            'Better operational decision support',
                            'Automation opportunities mapped through AI readiness assessment',
                            'Scalable AI capability for enterprise workflows',
                        ],
                        'id' => [
                            'Pekerjaan manual repetitif berkurang',
                            'Decision support operasional lebih baik',
                            'Peluang otomasi dipetakan lewat AI readiness assessment',
                            'Kapabilitas AI skalabel untuk workflow enterprise',
                        ],
                    ],
                    'capability' => 'GenAI Applications, Intelligent Automation, Data & Analytics, AI SaaS',
                ],
            ];
        @endphp

        <!-- Solutions Bento Grid -->
        <section class="py-unit-xl px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="text-center mb-unit-xl">
                <div
                    class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-4 py-1.5 rounded-full font-label-sm text-label-sm uppercase tracking-widest mb-4">
                    <span class="material-symbols-outlined text-[16px]">lightbulb</span>
                    {{ $locale === 'en' ? 'Solutions' : 'Solusi' }}
                </div>
                <h2
                    class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-background mb-unit-sm">
                    {{ $locale === 'en' ? 'Portfolio-Backed Solution Ecosystem' : 'Ekosistem Solusi Berbasis Portofolio' }}
                </h2>
                <p class="text-on-surface-variant max-w-2xl mx-auto">
                    {{ $locale === 'en'
                        ? 'Each solution below is mapped from Nakala Digital x Romulus Digital portfolio and capability references, so every detail links to real delivery areas.'
                        : 'Setiap solusi di bawah ini dipetakan dari portofolio dan kapabilitas Nakala Digital x Romulus Digital, sehingga detailnya mengarah ke area delivery yang nyata.' }}
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
                @foreach ($solutionCases as $case)
                    @php
                        $isDark = $case['dark'] ?? false;
                        $cardClass = $isDark
                            ? 'bg-on-background text-surface border border-outline'
                            : 'bg-surface border border-outline-variant';
                        $bodyTextClass = $isDark ? 'text-surface-variant' : 'text-on-surface-variant';
                        $linkClass = $isDark ? 'text-tertiary-fixed' : 'text-primary';
                    @endphp
                    <article
                        class="{{ $case['span'] }} {{ $cardClass }} rounded-[20px] p-unit-lg solution-card shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 {{ $case['featured'] ?? false ? 'border-t-4 border-t-primary' : '' }}">
                        <div class="flex h-full flex-col">
                            <span
                                class="material-symbols-outlined {{ $linkClass }} text-4xl mb-unit-sm">{{ $case['icon'] }}</span>
                            <p
                                class="font-label-sm text-label-sm uppercase tracking-widest {{ $linkClass }} mb-unit-xs">
                                {{ $case['category'][$locale] }}
                            </p>
                            <h3
                                class="font-headline-h3 text-headline-h3 mb-unit-sm {{ $isDark ? 'text-white' : 'text-on-background' }}">
                                {{ $case['title'][$locale] }}
                            </h3>
                            <p class="{{ $bodyTextClass }} text-sm mb-unit-md">
                                {{ $case['summary'][$locale] }}
                            </p>
                            <div
                                class="{{ $isDark ? 'bg-white/10 border-white/20' : 'bg-surface-container-highest/30 border-outline-variant/50' }} p-unit-sm rounded-[14px] border mb-unit-md">
                                <p class="text-xs">
                                    <strong>{{ $locale === 'en' ? 'Capability' : 'Kapabilitas' }}:</strong>
                                    {{ $case['capability'] }}
                                </p>
                            </div>
                            <a class="{{ $linkClass }} font-bold text-sm inline-flex items-center gap-1 mt-auto"
                                href="{{ route($detailRoute, $case['id']) }}">
                                {{ $locale === 'en' ? 'View Details' : 'Lihat Detail' }}
                                <span class="material-symbols-outlined text-xs">arrow_forward</span>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>
    </section>

    <!-- Partner Badge Section -->
    @include('partials.partner-badge')
    <!-- Detailed Deliverables (Horizontal Scroll / Grid) -->
    <section class="py-unit-xl overflow-hidden">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <h2 class="font-headline-h2 mb-unit-lg">
                {{ app()->getLocale() === 'en' ? 'Regional Service Excellence' : 'Keunggulan Layanan Regional' }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <div class="space-y-6">
                    <h4 class="font-headline-h3 border-l-4 border-primary pl-4">
                        {{ app()->getLocale() === 'en' ? 'Custom AI Models' : 'Model AI Kustom' }}</h4>
                    <p class="text-on-surface-variant">
                        {{ app()->getLocale() === 'en' ? 'Building proprietary neural networks tailored to Indonesian linguistic nuances and consumer behavior patterns.' : 'Membangun jaringan saraf tiruan proprietary yang disesuaikan dengan nuansa linguistik Indonesia dan pola perilaku konsumen.' }}
                    </p>
                    <img class="w-full rounded-[20px] shadow-md hover:shadow-xl transition-shadow duration-300"
                        data-alt="A clean, minimalist 3D rendering of a human brain silhouette constructed from glowing cyan fiber optic lines. The background is a crisp, sterile white, reflecting a light-mode modern aesthetic. Tiny particles of impact lime energy orbit the brain, symbolizing active generative AI and neural processing. The overall mood is sophisticated, technical, and visionary."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCnZsssdKLtkzueklGWdgMkw8L8KeHqUg-gs2up5aCh-gt1jvoqkvF_vHFYNm52kSdE_ZevSbKBpTmZKvChiwlxSfgxWcbWQBc4r0URNxka1X4pemelt9wLZFLCKVNEFVaz-F0z8atrHX7BPMv92OesIifP4KZHxihIM6Vh6WP3JcJh-KzYyUVDmN80h2wl1p3v4uzEVUxRorP99-UY1sMMUpI5eYF_HHAB870yoXwOR-lQcSJrCtTI5Z48V_xhcjUt1IewyfDEs-Tq" />
                </div>
                <div class="space-y-6">
                    <h4 class="font-headline-h3 border-l-4 border-tertiary pl-4">
                        {{ app()->getLocale() === 'en' ? 'Enterprise Portals' : 'Portal Perusahaan' }}</h4>
                    <p class="text-on-surface-variant">
                        {{ app()->getLocale() === 'en' ? 'Secure, scalable, and localized portals for regional logistics and distribution networks across Southeast Asia.' : 'Portal yang aman, skalabel, dan terlokalisasi untuk jaringan logistik dan distribusi regional di seluruh Asia Tenggara.' }}
                    </p>
                    <img class="w-full rounded-[20px] shadow-md hover:shadow-xl transition-shadow duration-300"
                        data-alt="An isometric technical illustration of a global logistics network with interconnected shipping nodes and digital data streams. The design uses a bold, high-contrast palette of impact lime and midnight navy. Glowing lines connect various stylized cityscapes, representing regional delivery capabilities and digital connectivity in a professional corporate environment."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAa-AXleTxxk8ZxGeWyDmtGbin_jeBfaYYtL7Wcn_Sed-H_MlzBcd0nfRfkVN1tLvUXOj259b0w__xuNiznSt5qU2HrVuv-5wkvki-blo_4dadmHDZkw8mAo0QJW59snMpIcWYRp49NWYI2zX-vjpP0YDf03Huzn9lWfNGa84P7CZO05bq4d6HdD2PClw54CU1LYpG2btXA7zZ7Jwn6J7CiQMW0BVdbhzJyPX9TlTmw0n9LPDImoXXFYhxtLkfDlYPWefMAaJagYDVX" />
                </div>
                <div class="space-y-6">
                    <h4 class="font-headline-h3 border-l-4 border-secondary pl-4">
                        {{ app()->getLocale() === 'en' ? 'Legacy Overhaul' : 'Perombakan Sistem Lama' }}</h4>
                    <p class="text-on-surface-variant">
                        {{ app()->getLocale() === 'en' ? 'Seamlessly transitioning monolithic systems to agile microservices without disrupting local operations.' : 'Transisi mulus dari sistem monolitik ke microservices yang lincah tanpa mengganggu operasi lokal.' }}
                    </p>
                    <img class="w-full rounded-[20px] shadow-md hover:shadow-xl transition-shadow duration-300"
                        data-alt="A conceptual visualization of digital transformation showing a crumbling grey stone structure being replaced by vibrant, glowing cyan geometric cubes. The lighting is high-key with soft shadows on a light grey background. The image represents the transition from legacy systems to modern, cloud-native architecture with a focus on technical reliability and modern corporate aesthetics."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBAOKFDTr6_voBBypZAFlVCxl67lbWO_ePQbX9a5bzWzPiT4fArb1YcGWOAIRZ6bKLN4lphcP0pYATRd6GTPm15fU31NqK04GavdGbvXYPwg6m7lEAldkmFPPrmLBMOFp3KZSpZClOMQdFdhCNK3iXoQb6OPXxXNwiaIVm-xo5IgrVMWJSlw5zzFfu4h5ixORnphUHULOTnyOF5TLHT5Ahp_1i0ky1gqOU5aVDFftYMNqdQIM11yROe0oVCY0PBazdhzkjWveX3deKd" />
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    @include('partials.footer')
    <script>
        // Micro-interactions
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                const icon = card.querySelector('.material-symbols-outlined');
                if (icon) {
                    icon.style.transform = 'scale(1.1) rotate(5deg)';
                    icon.style.transition = 'transform 0.3s ease';
                }
            });
            card.addEventListener('mouseleave', () => {
                const icon = card.querySelector('.material-symbols-outlined');
                if (icon) {
                    icon.style.transform = 'scale(1) rotate(0deg)';
                }
            });
        });

        // Simple scroll behavior for Navbar
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header.fixed');
            if (window.scrollY > 50) {
                header.classList.add('py-2', 'shadow-md', 'h-16');
                header.classList.remove('h-20');
            } else {
                header.classList.remove('py-2', 'shadow-md', 'h-16');
                header.classList.add('h-20');
            }
        });
    </script>
</body>

</html>
