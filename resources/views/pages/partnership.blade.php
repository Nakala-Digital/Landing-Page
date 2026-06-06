<!DOCTYPE html>

<html class="scroll-smooth" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        {{ app()->getLocale() === 'en' ? 'Partnership | Nakala Digital & Romulus Digital' : 'Kemitraan | Nakala Digital & Romulus Digital' }}
    </title>
    @include('partials.seo', [
        'title' =>
            app()->getLocale() === 'en'
                ? 'Partnership | Nakala Digital & Romulus Digital'
                : 'Kemitraan | Nakala Digital & Romulus Digital',
        'description' =>
            app()->getLocale() === 'en'
                ? 'Understand Nakala Digital as the Indonesian representative and delivery partner for Romulus Digital regional capabilities.'
                : 'Pahami peran Nakala Digital sebagai perwakilan Indonesia dan mitra delivery untuk kapabilitas regional Romulus Digital.',
    ])
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&amp;display=swap" rel="stylesheet" />
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
                        "surface-variant": "#dee3e6",
                        "impact-lime": "#A7F432",
                        "midnight-navy": "#031A44",
                        "electric-cyan": "#12AED0"
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
                    }
                },
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }

        .bento-card {
            border: 1px solid #E5E7EB;
            transition: all 0.3s ease;
        }

        .bento-card:hover {
            border-color: #12AED0;
        }
    </style>
</head>

<body class="bg-background text-on-background font-body-md">
    @include('partials.navbar')
    <main class="pt-20">
        <!-- Hero Section -->
        <section class="relative overflow-hidden bg-midnight-navy pt-unit-lg pb-unit-xl lg:pt-unit-xl lg:pb-32">
            <div class="absolute inset-0 opacity-10 pointer-events-none">
                <div class="h-full w-full"
                    style="background-image: radial-gradient(circle, #12AED0 1px, transparent 1px); background-size: 40px 40px;">
                </div>
            </div>
            <div
                class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 lg:grid-cols-2 gap-unit-lg items-center relative z-10">
                <div class="text-white">
                    <div
                        class="inline-flex items-center px-3 py-1 bg-impact-lime text-midnight-navy font-label-sm text-label-sm uppercase tracking-widest rounded-lg mb-6">
                        {{ app()->getLocale() === 'en' ? 'Strategic Alliance' : 'Aliansi Strategis' }}
                    </div>
                    <h1
                        class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 mb-6 leading-tight">
                        {{ app()->getLocale() === 'en' ? 'Indonesia representative & delivery partner of' : 'Perwakilan Indonesia & mitra delivery untuk' }}
                        <span class="text-electric-cyan">Romulus Digital.</span>
                    </h1>
                    <p class="font-body-lg text-body-lg text-surface-variant mb-10 max-w-xl">
                        {{ app()->getLocale() === 'en'
                            ? 'Bridging local execution with regional excellence. Nakala Digital serves as the primary gateway for Romulus Digital enterprise-grade solutions in the Indonesian market.'
                            : 'Menjembatani eksekusi lokal dengan keunggulan regional. Nakala Digital menjadi pintu utama solusi enterprise-grade Romulus Digital untuk pasar Indonesia.' }}
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button
                            class="bg-electric-cyan text-white px-8 py-4 rounded-lg font-button text-button uppercase tracking-wider hover:brightness-110 transition-all flex items-center justify-center">
                            {{ app()->getLocale() === 'en' ? 'Talk to Nakala Team' : 'Bicara dengan Tim Nakala' }}
                            <span class="material-symbols-outlined ml-2" data-icon="arrow_forward">arrow_forward</span>
                        </button>
                        <button
                            class="border-2 border-surface-variant text-white px-8 py-4 rounded-lg font-button text-button uppercase tracking-wider hover:bg-white/10 transition-all flex items-center justify-center">
                            {{ app()->getLocale() === 'en' ? 'View Partnership Model' : 'Lihat Model Kemitraan' }}
                        </button>
                    </div>
                </div>
                <div class="relative group">
                    <div
                        class="absolute -inset-4 bg-electric-cyan/20 rounded-xl blur-2xl group-hover:bg-electric-cyan/30 transition-all">
                    </div>
                    <div class="relative bg-white rounded-xl overflow-hidden border border-outline-variant shadow-2xl">
                        <img alt="Partnership Hero" class="w-full h-auto object-cover"
                            data-alt="A professional high-contrast visualization of a corporate partnership between two technology firms. The scene features two modern office spaces joined by digital light trails in electric cyan and impact lime. The lighting is dramatic and technical, emphasizing precision and global connectivity. The overall mood is authoritative and future-oriented, using a palette of midnight navy and vibrant tech accents."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBqBThoqlGeMSstXWWjZvbGFO4ees1uA2ZmsZ9eMd0LpovhCFdkuz-wOgujgyaVzPphb6PBEHNCHQFG7P1D4v1wvysThgYdpbvQaFcS7M1enL88QWZNeMXhw6Ab4yWWVve9lIzscQgUATpV97k7-UUc59sY1jnPEr8_XCSyox40wg7jAeBeNndhANs7d2-jorcqDtMYYzpZ-8qzP6BCskUnChuHasKcCfoeWe--WGE_YFLHhwsdvkFlMfqWxOoQunc4FzjRLCD4ORyl" />
                    </div>
                    <!-- Partnership Badge -->
                    <div
                        class="absolute bottom-6 -left-6 bg-white p-6 shadow-xl border border-outline-variant rounded-xl hidden md:block">
                        <div class="flex flex-col items-center gap-4">
                            <span
                                class="text-xs font-bold text-outline uppercase tracking-tighter">{{ app()->getLocale() === 'en' ? 'Powered By' : 'Didukung Oleh' }}</span>
                            <div class="h-10 w-32 bg-midnight-navy rounded flex items-center justify-center px-4">
                                <span class="text-white font-bold text-lg">Romulus</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- The Value Proposition (Bento) -->
        <section class="py-unit-xl bg-surface">
            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="mb-unit-lg text-center">
                    <h2 class="font-headline-h2 text-headline-h2 text-primary mb-4">
                        {{ app()->getLocale() === 'en' ? 'Local Entry, Regional Standards' : 'Akses Lokal, Standar Regional' }}
                    </h2>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mx-auto">
                        {{ app()->getLocale() === 'en'
                            ? 'Combining Nakala deep understanding of the Indonesian business landscape with Romulus world-class engineering methodology.'
                            : 'Menggabungkan pemahaman mendalam Nakala terhadap lanskap bisnis Indonesia dengan metodologi engineering kelas dunia Romulus.' }}
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 h-auto md:h-[600px]">
                    <div
                        class="md:col-span-8 bg-white bento-card p-unit-lg rounded-xl flex flex-col justify-between border-t-4 border-t-electric-cyan">
                        <div>
                            <div class="text-electric-cyan mb-4">
                                <span class="material-symbols-outlined text-4xl" data-icon="public">public</span>
                            </div>
                            <h3 class="font-headline-h3 text-headline-h3 mb-4">
                                {{ app()->getLocale() === 'en' ? 'Regional Capability' : 'Kapabilitas Regional' }}</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant mb-6">
                                {{ app()->getLocale() === 'en'
                                    ? 'Leverage Romulus Digital proprietary software frameworks and regional technical expertise developed across APAC markets, now fully accessible through Nakala local team.'
                                    : 'Manfaatkan framework software proprietary Romulus Digital dan keahlian teknis regional yang dikembangkan di pasar APAC, kini dapat diakses melalui tim lokal Nakala.' }}
                            </p>
                        </div>
                        <img alt="Regional Standards"
                            class="rounded-lg object-cover h-48 w-full border border-outline-variant"
                            data-alt="A clean, minimalist 3D rendering of a modular software framework architecture. Floating translucent blocks in electric cyan and midnight navy represent different microservices. The background is a crisp, high-key white gallery space with soft ambient shadows. The composition is structured and architectural, reflecting technical rigor and regional scalability."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCM7eV1DaaFXRSP46HhqdQ0RLZWroEi0Jg4nQfoU_T73rHgOTvMVBVcP0UCNCkWzUhIueWcm59EZjTzEA6GXCZdi3yfqG91MVr18Ylxkjd32G8Uf1ei09Betd2wJNIn0-_vnh_4JYSxSpIk5M8qp_pB03DCkHkXmutvagxWtH-QB9ekMEvL01nSbhlkhez_Z5-WAAlPfBLiVFyI5tAsfv9b0wLhahxSukp6oULOuTWfHY8ilrdcDB4mW_drMWnGQWcweFkZbZFV-thL" />
                    </div>
                    <div
                        class="md:col-span-4 bg-midnight-navy p-unit-lg rounded-xl text-white flex flex-col justify-center">
                        <div class="text-impact-lime mb-6">
                            <span class="material-symbols-outlined text-5xl" data-icon="handshake" data-weight="fill"
                                style="font-variation-settings: 'FILL' 1;">handshake</span>
                        </div>
                        <h3 class="font-headline-h3 text-headline-h3 mb-4">
                            {{ app()->getLocale() === 'en' ? 'Strategic Delivery' : 'Delivery Strategis' }}</h3>
                        <p class="font-body-md text-body-md text-surface-variant">
                            {{ app()->getLocale() === 'en'
                                ? 'We do not just consult; we execute. Our partnership ensures that every project meets international quality benchmarks while being delivered with local agility.'
                                : 'Kami tidak hanya memberi konsultasi; kami mengeksekusi. Kemitraan ini memastikan setiap proyek memenuhi benchmark kualitas internasional dengan kelincahan delivery lokal.' }}
                        </p>
                        <hr class="my-8 border-outline opacity-30" />
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-impact-lime mt-1"
                                    data-icon="check_circle">check_circle</span>
                                <span
                                    class="text-body-md">{{ app()->getLocale() === 'en' ? '24/7 Regional Tech Support' : 'Dukungan Teknologi Regional 24/7' }}</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-impact-lime mt-1"
                                    data-icon="check_circle">check_circle</span>
                                <span
                                    class="text-body-md">{{ app()->getLocale() === 'en' ? 'On-site Indonesian Project Mgmt' : 'Manajemen Proyek Lokal Indonesia' }}</span>
                            </li>
                        </ul>
                    </div>
                    <div
                        class="md:col-span-4 bg-white bento-card p-unit-lg rounded-xl flex flex-col justify-between border border-outline-variant">
                        <div class="mb-4">
                            <span class="material-symbols-outlined text-primary text-3xl"
                                data-icon="verified">verified</span>
                        </div>
                        <h4 class="font-headline-h3 text-headline-h3 mb-2">
                            {{ app()->getLocale() === 'en' ? 'Quality Assurance' : 'Quality Assurance' }}</h4>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            {{ app()->getLocale() === 'en'
                                ? 'Every line of code passes through Romulus dual-tier validation process.'
                                : 'Setiap baris kode melewati proses validasi dua lapis dari Romulus.' }}
                        </p>
                    </div>
                    <div
                        class="md:col-span-8 bg-impact-lime p-unit-lg rounded-xl flex flex-col md:flex-row items-center gap-8 border border-outline-variant">
                        <div class="flex-1">
                            <h4 class="font-headline-h3 text-headline-h3 text-midnight-navy mb-2">
                                {{ app()->getLocale() === 'en' ? 'AI-Powered Delivery' : 'Delivery Berbasis AI' }}
                            </h4>
                            <p class="font-body-md text-body-md text-midnight-navy/80">
                                {{ app()->getLocale() === 'en'
                                    ? 'Integration of Romulus Digital proprietary AI recruitment and development tools to accelerate project timelines by 40%.'
                                    : 'Integrasi tool rekrutmen dan pengembangan AI proprietary Romulus Digital untuk mempercepat timeline proyek hingga 40%.' }}
                            </p>
                        </div>
                        <div
                            class="bg-midnight-navy p-6 rounded-lg text-impact-lime font-bold text-center w-full md:w-auto">
                            <div class="text-3xl">40%</div>
                            <div class="text-[10px] uppercase tracking-widest">
                                {{ app()->getLocale() === 'en' ? 'Efficiency Gain' : 'Kenaikan Efisiensi' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Comparison Section -->
        <section class="py-unit-xl bg-white">
            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="max-w-3xl mb-unit-lg">
                    <h2 class="font-headline-h2 text-headline-h2 text-midnight-navy mb-4">
                        {{ app()->getLocale() === 'en' ? 'Roles & Responsibilities' : 'Peran & Tanggung Jawab' }}
                    </h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant">
                        {{ app()->getLocale() === 'en'
                            ? 'Clear separation of concerns ensures project stability and excellence from inception to deployment.'
                            : 'Pembagian peran yang jelas memastikan stabilitas dan kualitas proyek sejak inisiasi hingga deployment.' }}
                    </p>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse border border-outline-variant">
                        <thead>
                            <tr class="bg-surface-container-low">
                                <th class="p-6 text-left font-headline-h3 border border-outline-variant w-1/3">
                                    {{ app()->getLocale() === 'en' ? 'Responsibility' : 'Tanggung Jawab' }}</th>
                                <th
                                    class="p-6 text-left font-headline-h3 border border-outline-variant text-primary bg-white">
                                    Nakala Digital ({{ app()->getLocale() === 'en' ? 'Local' : 'Lokal' }})</th>
                                <th
                                    class="p-6 text-left font-headline-h3 border border-outline-variant text-midnight-navy bg-white">
                                    Romulus Digital (Regional)</th>
                            </tr>
                        </thead>
                        <tbody class="font-body-md">
                            <tr>
                                <td class="p-6 border border-outline-variant font-bold bg-surface-container-low">
                                    {{ app()->getLocale() === 'en' ? 'Client Management' : 'Manajemen Klien' }}</td>
                                <td class="p-6 border border-outline-variant">
                                    {{ app()->getLocale() === 'en' ? 'On-site account managers, Indonesian language support, local contracts.' : 'Account manager on-site, dukungan bahasa Indonesia, dan kontrak lokal.' }}
                                </td>
                                <td class="p-6 border border-outline-variant text-on-surface-variant italic">
                                    {{ app()->getLocale() === 'en' ? 'Escalation path only.' : 'Hanya untuk jalur eskalasi.' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="p-6 border border-outline-variant font-bold bg-surface-container-low">
                                    {{ app()->getLocale() === 'en' ? 'Software Architecture' : 'Arsitektur Software' }}
                                </td>
                                <td class="p-6 border border-outline-variant">
                                    {{ app()->getLocale() === 'en' ? 'Requirements gathering & local system integration.' : 'Pengumpulan kebutuhan dan integrasi sistem lokal.' }}
                                </td>
                                <td class="p-6 border border-outline-variant">
                                    {{ app()->getLocale() === 'en' ? 'Core architecture design, regional security compliance benchmarks.' : 'Desain arsitektur inti dan benchmark kepatuhan keamanan regional.' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="p-6 border border-outline-variant font-bold bg-surface-container-low">
                                    {{ app()->getLocale() === 'en' ? 'Project Delivery' : 'Delivery Proyek' }}</td>
                                <td class="p-6 border border-outline-variant">
                                    {{ app()->getLocale() === 'en' ? 'Agile implementation team & local deployment.' : 'Tim implementasi agile dan deployment lokal.' }}
                                </td>
                                <td class="p-6 border border-outline-variant">
                                    {{ app()->getLocale() === 'en' ? 'CI/CD infrastructure & global DevOps standards.' : 'Infrastruktur CI/CD dan standar DevOps global.' }}
                                </td>
                            </tr>
                            <tr class="bg-primary/5">
                                <td class="p-6 border border-outline-variant font-bold">
                                    {{ app()->getLocale() === 'en' ? 'Innovation & R&D' : 'Inovasi & R&D' }}</td>
                                <td class="p-6 border border-outline-variant">
                                    {{ app()->getLocale() === 'en' ? 'Localization of features & market-specific UX research.' : 'Lokalisasi fitur dan riset UX sesuai pasar.' }}
                                </td>
                                <td class="p-6 border border-outline-variant">
                                    {{ app()->getLocale() === 'en' ? 'AI model development & proprietary framework R&D.' : 'Pengembangan model AI dan R&D framework proprietary.' }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- Recruitment Platform Showcase -->
        <section class="py-unit-xl bg-surface-container-low overflow-hidden">
            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-unit-lg items-center">
                    <div class="lg:col-span-5 order-2 lg:order-1">
                        <img alt="AI Recruitment Platform"
                            class="rounded-xl shadow-2xl border-4 border-white transform lg:-rotate-2 hover:rotate-0 transition-transform duration-500"
                            data-alt="A sleek, modern user interface of an AI-powered recruitment dashboard. The UI features high-contrast graphs, candidate profile cards with vibrant status chips in impact lime, and a clean white background. Data visualizations are rendered in electric cyan. The lighting is bright and technical, reflecting a data-driven enterprise software aesthetic. The mood is efficient, precise, and sophisticated."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAkaB78jHYVecS6V51vZ7sld7eeekTLqFp8ZJ3ZVKvMeN3_zsV1pL3B0sjJQuRCWLDHsDWzycV1MU7VP2hFOHfXt3WMnCP4LzyZrg_Q1SjCUzkPVB0XJTurGqREcVJu5yXwhUvcNGB5b4-PiMjvSDxgPQefXy57agxZRhTqSrVMPFwSdtvqPL7Zu6lJP6HtxWkVaVlJmHGO8nHyH5CTXEWhQzcOfwOoPYux4Gzqg87ghVQSBdPLEfgpLXdn_QfnKWG6DPJOKn6ajUN4" />
                    </div>
                    <div class="lg:col-span-7 order-1 lg:order-2">
                        <div class="pl-0 lg:pl-12">
                            <span
                                class="text-electric-cyan font-bold uppercase tracking-widest text-label-sm mb-4 block">{{ app()->getLocale() === 'en' ? 'Case Study' : 'Studi Kasus' }}</span>
                            <h2 class="font-headline-h2 text-headline-h2 text-midnight-navy mb-6">
                                {{ app()->getLocale() === 'en' ? 'Regional Power, Locally Applied' : 'Kekuatan Regional, Diterapkan Secara Lokal' }}
                            </h2>
                            <p class="font-body-lg text-body-lg text-on-surface-variant mb-8">
                                {{ app()->getLocale() === 'en'
                                    ? 'Our flagship collaboration: An AI-Powered Recruitment Platform built on Romulus core engine and localized by Nakala for Indonesia unique human capital landscape.'
                                    : 'Kolaborasi unggulan kami: Platform rekrutmen berbasis AI yang dibangun di atas engine inti Romulus dan dilokalkan Nakala untuk lanskap human capital Indonesia.' }}
                            </p>
                            <div class="grid grid-cols-2 gap-8 mb-8">
                                <div>
                                    <div class="text-4xl font-bold text-primary mb-1">98%</div>
                                    <div class="text-sm font-bold uppercase text-outline tracking-wider">
                                        {{ app()->getLocale() === 'en' ? 'Accuracy Rate' : 'Tingkat Akurasi' }}
                                    </div>
                                </div>
                                <div>
                                    <div class="text-4xl font-bold text-primary mb-1">10x</div>
                                    <div class="text-sm font-bold uppercase text-outline tracking-wider">
                                        {{ app()->getLocale() === 'en' ? 'Sourcing Speed' : 'Kecepatan Sourcing' }}
                                    </div>
                                </div>
                            </div>
                            <button
                                class="bg-midnight-navy text-white px-8 py-4 rounded-lg font-button text-button uppercase tracking-wider hover:bg-midnight-navy/90 transition-all">
                                {{ app()->getLocale() === 'en' ? 'View Solutions' : 'Lihat Solusi' }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Section -->
        <section class="py-unit-xl bg-white text-center">
            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="bg-primary p-unit-lg md:p-unit-xl rounded-2xl text-white relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
                    <div class="relative z-10">
                        <h2
                            class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 mb-6">
                            {{ app()->getLocale() === 'en' ? 'Ready to bridge the gap?' : 'Siap menjembatani kebutuhan Anda?' }}
                        </h2>
                        <p class="font-body-lg text-body-lg text-primary-fixed mb-10 max-w-2xl mx-auto">
                            {{ app()->getLocale() === 'en'
                                ? 'Connect with us today to learn how the Nakala-Romulus partnership can transform your technical capabilities in the Indonesian market.'
                                : 'Hubungi kami hari ini untuk memahami bagaimana kemitraan Nakala-Romulus dapat mentransformasi kapabilitas teknis Anda di pasar Indonesia.' }}
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <button
                                class="bg-impact-lime text-midnight-navy px-10 py-5 rounded-lg font-headline-h3 text-headline-h3 hover:scale-105 transition-transform shadow-xl">
                                {{ app()->getLocale() === 'en' ? 'Talk to Nakala Team' : 'Bicara dengan Tim Nakala' }}
                            </button>
                            <button
                                class="bg-midnight-navy text-white px-10 py-5 rounded-lg font-headline-h3 text-headline-h3 hover:bg-midnight-navy/90 transition-colors">
                                {{ app()->getLocale() === 'en' ? 'Discuss Partnership' : 'Diskusikan Kemitraan' }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    @include('partials.footer')
    <script>
        // Micro-interactions for header shadow on scroll
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header.fixed');
            if (window.scrollY > 20) {
                header.classList.add('shadow-md', 'h-16');
                header.classList.remove('h-20');
            } else {
                header.classList.remove('shadow-md', 'h-16');
                header.classList.add('h-20');
            }
        });

        // Hover effects for bento cards
        const bentoCards = document.querySelectorAll('.bento-card');
        bentoCards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.classList.add('scale-[1.01]');
            });
            card.addEventListener('mouseleave', () => {
                card.classList.remove('scale-[1.01]');
            });
        });
    </script>
</body>

</html>
