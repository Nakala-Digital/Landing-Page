<!DOCTYPE html>

<html class="scroll-smooth" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ app()->getLocale() === 'en' ? 'Insights | Nakala Digital' : 'Insight | Nakala Digital' }}</title>
    @include('partials.seo', [
        'title' => app()->getLocale() === 'en' ? 'Insights | Nakala Digital' : 'Insight | Nakala Digital',
        'description' =>
            app()->getLocale() === 'en'
                ? 'Read the latest insights, perspectives, and thought leadership from Nakala Digital on software development, AI, QA governance, and digital transformation.'
                : 'Baca insight, perspektif, dan pemikiran terbaru dari Nakala Digital tentang pengembangan software, AI, tata kelola QA, dan transformasi digital.',
    ])
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
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
                    borderRadius: {
                        DEFAULT: "0.125rem",
                        lg: "0.25rem",
                        xl: "0.5rem",
                        full: "0.75rem"
                    },
                    spacing: {
                        gutter: "24px",
                        "unit-xl": "64px",
                        "unit-lg": "32px",
                        "margin-mobile": "20px",
                        "margin-desktop": "80px",
                        "unit-xs": "4px",
                        "container-max": "1280px",
                        "unit-md": "16px",
                        "unit-sm": "8px"
                    },
                    fontFamily: {
                        "display-lg-mobile": ["Poppins"],
                        "body-md": ["Poppins"],
                        button: ["Poppins"],
                        "headline-h1-mobile": ["Poppins"],
                        "headline-h2": ["Poppins"],
                        "body-lg": ["Poppins"],
                        "headline-h2-mobile": ["Poppins"],
                        "headline-h1": ["Poppins"],
                        "headline-h3": ["Poppins"],
                        "display-lg": ["Poppins"],
                        "label-sm": ["Poppins"]
                    },
                    fontSize: {
                        "display-lg-mobile": ["48px", {
                            lineHeight: "1.1",
                            fontWeight: "700"
                        }],
                        "body-md": ["16px", {
                            lineHeight: "1.6",
                            fontWeight: "400"
                        }],
                        button: ["15px", {
                            lineHeight: "1.0",
                            letterSpacing: "0.05em",
                            fontWeight: "600"
                        }],
                        "headline-h1-mobile": ["36px", {
                            lineHeight: "1.2",
                            fontWeight: "700"
                        }],
                        "headline-h2": ["40px", {
                            lineHeight: "1.3",
                            fontWeight: "600"
                        }],
                        "body-lg": ["18px", {
                            lineHeight: "1.6",
                            fontWeight: "400"
                        }],
                        "headline-h2-mobile": ["28px", {
                            lineHeight: "1.3",
                            fontWeight: "600"
                        }],
                        "headline-h1": ["56px", {
                            lineHeight: "1.2",
                            fontWeight: "700"
                        }],
                        "headline-h3": ["24px", {
                            lineHeight: "1.4",
                            fontWeight: "600"
                        }],
                        "display-lg": ["72px", {
                            lineHeight: "1.1",
                            letterSpacing: "-0.02em",
                            fontWeight: "700"
                        }],
                        "label-sm": ["12px", {
                            lineHeight: "1.0",
                            fontWeight: "700"
                        }]
                    }
                }
            }
        }
    </script>
    </style>
</head>

<body class="bg-background text-on-background font-body-md">
    @include('partials.navbar')
    <main class="pt-20">

        <!-- Hero -->
        <section class="relative bg-surface-container-lowest overflow-hidden py-unit-xl border-b border-outline-variant">
            <div class="px-margin-mobile md:px-8 lg:px-margin-desktop max-w-container-max mx-auto">
                <div
                    class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-4 py-1.5 rounded-full font-label-sm font-[600] text-[15px] uppercase tracking-widest mb-unit-md">
                    <span class="material-symbols-outlined text-[16px]">bolt</span>
                    {{ app()->getLocale() === 'en' ? 'Solution Highlight' : 'Sorotan Solusi' }}
                </div>
                <h1
                    class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-on-background max-w-3xl mb-unit-md">
                    {{ app()->getLocale() === 'en' ? 'Insights & Thought Leadership' : 'Insight & Pemikiran' }}
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    {{ app()->getLocale() === 'en'
                        ? 'Perspectives on software excellence, AI adoption, QA governance, and digital transformation from the Nakala Digital team.'
                        : 'Perspektif tentang keunggulan software, adopsi AI, tata kelola QA, dan transformasi digital dari tim Nakala Digital.' }}
                </p>
            </div>
        </section>

        <!-- Featured Insight -->
        <section class="py-unit-xl px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="mb-unit-lg flex items-center gap-4">
                <!-- Menambahkan garis dekoratif kecil di samping tulisan 'Featured' -->
                <span class="h-[2px] w-8 bg-primary rounded-full hidden sm:block"></span>
                <span class="font-label-sm text-primary uppercase tracking-[0.3em] block">
                    {{ app()->getLocale() === 'en' ? 'Featured' : 'Unggulan' }}
                </span>
            </div>

            <!-- Menambahkan transisi shadow, posisi transform, dan menghapus border kaku -->
            <div
                class="group cursor-pointer bg-gradient-to-br from-white to-slate-50 shadow-md hover:shadow-xl rounded-2xl overflow-hidden flex flex-col md:flex-row transition-all duration-300 transform hover:-translate-y-1">

                <!-- Area Gambar dengan Overlay -->
                <div class="md:w-1/2 aspect-video md:aspect-auto overflow-hidden relative">
                    <div
                        class="absolute inset-0 bg-slate-900/10 group-hover:bg-transparent transition-colors duration-500 z-10">
                    </div>
                    <img class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                        data-alt="A sophisticated data visualization dashboard displayed on multiple high-resolution monitors in a sleek, dimly lit command center."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDR535vuudX7lTS7e4rlJh7a9-gVx5AUk-xOXNnnCSBtfb5s7pPif-MixNqR0pMjjojGO_pBwl-VJfRc7i9aneEF3eIqu__3s4_IH1bqYRQmOL9gQCYRooxu7z0_FSjKu97jX8mCvGQzUKtFn12bVzeHbWzoKYiF8rv_pyukmlVamh3S8_Hhyj6uYihaF8rR1ZHEW7QbcWv5lNaab6a7LRWDZ_DRm5-olpTDLSAecUuoW7Top-3b5NwJmCEQZJYjM5nHV33VJnRxhhU" />
                </div>

                <!-- Area Teks dengan Border Kiri/Atas yang Lebih Smooth -->
                <div
                    class="md:w-1/2 p-unit-lg md:p-12 flex flex-col justify-between border-t-4 md:border-t-0 md:border-l-4 border-primary/80 group-hover:border-primary transition-colors duration-300">
                    <div>
                        <!-- Badge Kategori -->
                        <div class="flex items-center gap-unit-sm mb-unit-sm">
                            <span
                                class="text-primary bg-primary/10 px-3 py-1 rounded-full font-label-sm text-xs uppercase tracking-wider">
                                {{ app()->getLocale() === 'en' ? 'AI Strategy' : 'Strategi AI' }}
                            </span>
                        </div>

                        <!-- Judul Utama -->
                        <h2
                            class="font-bold leading-tight mb-unit-sm text-slate-800 group-hover:text-primary transition-colors duration-300 text-[clamp(1.5rem,3.5vw,2.5rem)]">
                            {{ app()->getLocale() === 'en'
                                ? 'Bridging the Gap: AI Implementation for Regional Enterprises'
                                : 'Menjembatani Gap: Implementasi AI untuk Perusahaan Regional' }}
                        </h2>

                        <!-- Deskripsi -->
                        <p class="font-body-md text-body-md text-slate-600 mb-unit-lg leading-relaxed">
                            {{ app()->getLocale() === 'en'
                                ? 'How local businesses can leverage tailored AI solutions to compete at a regional level without enterprise-scale investment.'
                                : 'Bagaimana bisnis lokal dapat memanfaatkan solusi AI yang disesuaikan untuk bersaing di tingkat regional tanpa investasi skala enterprise.' }}
                        </p>
                    </div>

                    <!-- Link Tombol / CTA -->
                    <a class="inline-flex items-center gap-2 text-primary font-button text-button group/btn font-semibold"
                        href="#">
                        <span
                            class="relative after:absolute after:bottom-0 after:left-0 after:h-[2px] after:w-0 group-hover/btn:after:w-full after:bg-primary after:transition-all after:duration-300 pb-0.5">
                            {{ app()->getLocale() === 'en' ? 'Read Full Insight' : 'Baca Insight Lengkap' }}
                        </span>
                        <span
                            class="material-symbols-outlined text-sm transition-transform duration-300 group-hover/btn:translate-x-1.5">
                            arrow_forward
                        </span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Draft Topics Grid -->
        <section class="py-unit-xl bg-surface-container-low">
            <div class="px-margin-mobile md:px-8 lg:px-margin-desktop max-w-container-max mx-auto">
                <div class="mb-unit-xl max-w-3xl">
                    <span
                        class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">{{ app()->getLocale() === 'en' ? 'Solution Highlight' : 'Sorotan Solusi' }}</span>
                    <h2 class="font-headline-h2 text-headline-h2 text-on-surface">
                        {{ app()->getLocale() === 'en' ? 'Explore by Topic' : 'Jelajahi berdasarkan Topik' }}
                    </h2>
                </div>
                
                <!-- Category Filters -->
                <div class="flex flex-wrap gap-4 mb-unit-lg">
                    <button class="category-filter font-bold text-primary font-button uppercase tracking-wider px-4 py-2 border border-outline-variant rounded-[20px] hover:bg-primary/10 transition-colors" data-filter="all">{{ app()->getLocale() === 'en' ? 'All' : 'Semua' }}</button>
                    <button class="category-filter text-on-surface-variant font-button uppercase tracking-wider px-4 py-2 border border-outline-variant rounded-[20px] hover:bg-primary/10 transition-colors" data-filter="event">{{ app()->getLocale() === 'en' ? 'Event' : 'Acara' }}</button>
                    <button class="category-filter text-on-surface-variant font-button uppercase tracking-wider px-4 py-2 border border-outline-variant rounded-[20px] hover:bg-primary/10 transition-colors" data-filter="administration">{{ app()->getLocale() === 'en' ? 'Administration' : 'Administrasi' }}</button>
                    <button class="category-filter text-on-surface-variant font-button uppercase tracking-wider px-4 py-2 border border-outline-variant rounded-[20px] hover:bg-primary/10 transition-colors" data-filter="economy">{{ app()->getLocale() === 'en' ? 'Economy' : 'Ekonomi' }}</button>
                    <button class="category-filter text-on-surface-variant font-button uppercase tracking-wider px-4 py-2 border border-outline-variant rounded-[20px] hover:bg-primary/10 transition-colors" data-filter="project">{{ app()->getLocale() === 'en' ? 'Project' : 'Proyek' }}</button>
                    <button class="category-filter text-on-surface-variant font-button uppercase tracking-wider px-4 py-2 border border-outline-variant rounded-[20px] hover:bg-primary/10 transition-colors" data-filter="internship">{{ app()->getLocale() === 'en' ? 'Internship' : 'Magang' }}</button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
                    <!-- Topic 0a: EventGate (Konser.com) -->
                    <div data-category="event"
                        class="bg-white border border-outline-variant rounded-[20px] overflow-hidden group shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="h-48 w-full relative overflow-hidden bg-surface-container">
                            <div
                                class="absolute inset-0 bg-black opacity-0 group-hover:opacity-20 transition-opacity duration-500 z-10">
                            </div>
                            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                data-alt="EventGate digital ticketing and event management platform asset preview."
                                src="{{ asset('assets/eventgate-2.png') }}" />
                        </div>
                        <div class="p-unit-md">
                            <span
                                class="text-primary font-label-sm text-label-sm uppercase">{{ app()->getLocale() === 'en' ? 'Event Technology' : 'Teknologi Event' }}</span>
                            <h3
                                class="font-headline-h3 text-headline-h3 mt-unit-sm mb-unit-sm group-hover:text-primary transition-colors">
                                {{ app()->getLocale() === 'en' ? 'EventGate: One Platform for Every Event Need' : 'EventGate: Semua Kebutuhan Acara dalam Satu Platform' }}
                            </h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'Platform by Konser.com centralising event discovery, digital ticketing, and QR check-in.'
                                    : 'Platform dari Konser.com untuk pencarian event, tiket digital, dan check-in QR terpusat.' }}
                            </p>
                        </div>
                    </div>
                    <!-- Topic 0b: WilayahFlow -->
                    <div data-category="administration"
                        class="bg-white border border-outline-variant rounded-[20px] overflow-hidden group shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="h-48 w-full relative overflow-hidden bg-surface-container">
                            <div
                                class="absolute inset-0 bg-black opacity-0 group-hover:opacity-20 transition-opacity duration-500 z-10">
                            </div>
                            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                data-alt="WilayahFlow administration and reporting platform asset preview."
                                src="{{ asset('assets/wilayahflow-2.png') }}" />
                        </div>
                        <div class="p-unit-md">
                            <span
                                class="text-primary font-label-sm text-label-sm uppercase">{{ app()->getLocale() === 'en' ? 'Regional Administration' : 'Administrasi Wilayah' }}</span>
                            <h3
                                class="font-headline-h3 text-headline-h3 mt-unit-sm mb-unit-sm group-hover:text-primary transition-colors">
                                {{ app()->getLocale() === 'en' ? 'WilayahFlow: Tidying Up RT/RW Reporting' : 'WilayahFlow: Merapikan Pelaporan RT/RW' }}
                            </h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'Reporting and administration assistant for RT/RW with automatic recaps and digital archiving.'
                                    : 'Asisten pelaporan dan administrasi RT/RW dengan rekap otomatis dan arsip digital.' }}
                            </p>
                        </div>
                    </div>

                    <!-- Topic 0c: DesaHub -->
                    <div data-category="economy"
                        class="bg-white border border-outline-variant rounded-[20px] overflow-hidden group shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="h-48 w-full relative overflow-hidden bg-surface-container">
                            <div
                                class="absolute inset-0 bg-black opacity-0 group-hover:opacity-20 transition-opacity duration-500 z-10">
                            </div>
                            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                data-alt="DesaHub marketplace and village economy digital system platform asset preview."
                                src="{{ asset('assets/desahub-2.png') }}" />
                        </div>
                        <div class="p-unit-md">
                            <span
                                class="text-primary font-label-sm text-label-sm uppercase">{{ app()->getLocale() === 'en' ? 'Village Economy' : 'Ekonomi Desa' }}</span>
                            <h3
                                class="font-headline-h3 text-headline-h3 mt-unit-sm mb-unit-sm group-hover:text-primary transition-colors">
                                {{ app()->getLocale() === 'en' ? 'DesaHub: Connecting the Village Economy' : 'DesaHub: Menghubungkan Ekonomi Desa' }}
                            </h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'Integrated marketplace platform connecting local products, UMKM, and BUMDes.'
                                    : 'Platform marketplace terintegrasi yang menghubungkan produk lokal, UMKM, dan BUMDes.' }}
                            </p>
                        </div>
                    </div>

                    <!-- Kick Off Al Azhar Syifa Budi Parahyangan -->
                    <div data-category="project"
                        class="bg-white border border-outline-variant rounded-[20px] overflow-hidden group shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="h-48 w-full relative overflow-hidden bg-surface-container">
                            <div
                                class="absolute inset-0 bg-black opacity-0 group-hover:opacity-20 transition-opacity duration-500 z-10">
                            </div>
                            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                data-alt="Kick off Al Azhar Syifa Budi Parahyangan digital school portal preparation project documentation."
                                src="{{ asset('assets/al-azhar.png') }}" />
                        </div>
                        <div class="p-unit-md">
                            <span
                                class="text-primary font-label-sm text-label-sm uppercase">{{ app()->getLocale() === 'en' ? 'First Project' : 'Project Pertama' }}</span>
                            <h3
                                class="font-headline-h3 text-headline-h3 mt-unit-sm mb-unit-sm group-hover:text-primary transition-colors">
                                {{ app()->getLocale() === 'en' ? 'Kick Off Al Azhar Syifa Budi Parahyangan' : 'Kick Off Al Azhar Syifa Budi Parahyangan' }}
                            </h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'The first digital solution project successfully developed and executed by Nakala Digital.'
                                    : 'Project solusi digital pertama yang sukses dikembangkan dan dikerjakan di Nakala Digital.' }}
                            </p>
                        </div>
                    </div>

                    <!-- Kick Off Universitas Widyatama -->
                    <div data-category="internship"
                        class="bg-white border border-outline-variant rounded-[20px] overflow-hidden group shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="h-48 w-full relative overflow-hidden bg-surface-container">
                            <div
                                class="absolute inset-0 bg-black opacity-0 group-hover:opacity-20 transition-opacity duration-500 z-10">
                            </div>
                            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                data-alt="Kick Off Universitas Widyatama collaborative project launch preview."
                                src="{{ asset('assets/widyatama-2.png') }}" />
                        </div>
                        <div class="p-unit-md">
                            <span
                                class="text-primary font-label-sm text-label-sm uppercase">{{ app()->getLocale() === 'en' ? 'Internship' : 'Magang' }}</span>
                            <h3
                                class="font-headline-h3 text-headline-h3 mt-unit-sm mb-unit-sm group-hover:text-primary transition-colors">
                                {{ app()->getLocale() === 'en' ? 'Kick Off Universitas Widyatama' : 'Kick Off Universitas Widyatama' }}
                            </h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'Collaboration and implementation of internship programs for students from Universitas Widyatama.'
                                    : 'Kolaborasi dan pelaksanaan program magang untuk mahasiswa dari Universitas Widyatama.' }}
                            </p>
                        </div>
                    </div>

                    <!-- Kick Off Universitas Komputer (Unikom) -->
                    <div data-category="internship"
                        class="bg-white border border-outline-variant rounded-[20px] overflow-hidden group shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="h-48 w-full relative overflow-hidden bg-surface-container">
                            <div
                                class="absolute inset-0 bg-black opacity-0 group-hover:opacity-20 transition-opacity duration-500 z-10">
                            </div>
                            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                data-alt="Kick Off Universitas Komputer digital transformation initiation asset preview."
                                src="{{ asset('assets/unikom.png') }}" />
                        </div>
                        <div class="p-unit-md">
                            <span
                                class="text-primary font-label-sm text-label-sm uppercase">{{ app()->getLocale() === 'en' ? 'Internship' : 'Magang' }}</span>
                            <h3
                                class="font-headline-h3 text-headline-h3 mt-unit-sm mb-unit-sm group-hover:text-primary transition-colors">
                                {{ app()->getLocale() === 'en' ? 'Kick Off Universitas Komputer' : 'Kick Off Universitas Komputer' }}
                            </h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'Collaboration and implementation of internship programs for students from Universitas Komputer.'
                                    : 'Kolaborasi dan pelaksanaan program magang untuk mahasiswa dari Universitas Komputer.' }}
                            </p>
                        </div>
                    </div>

                    <!-- Kick Off Polban -->
                    <div data-category="internship"
                        class="bg-white border border-outline-variant rounded-[20px] overflow-hidden group shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="h-48 w-full relative overflow-hidden bg-surface-container">
                            <div
                                class="absolute inset-0 bg-black opacity-0 group-hover:opacity-20 transition-opacity duration-500 z-10">
                            </div>
                            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                data-alt="Kick Off Politeknik Negeri Bandung project launch asset."
                                src="{{ asset('assets/polban.png') }}" />
                        </div>
                        <div class="p-unit-md">
                            <span
                                class="text-primary font-label-sm text-label-sm uppercase">{{ app()->getLocale() === 'en' ? 'Internship' : 'Magang' }}</span>
                            <h3
                                class="font-headline-h3 text-headline-h3 mt-unit-sm mb-unit-sm group-hover:text-primary transition-colors">
                                {{ app()->getLocale() === 'en' ? 'Kick Off Politeknik Negeri Bandung' : 'Kick Off Politeknik Negeri Bandung' }}
                            </h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'Collaboration and implementation of internship programs for students from Politeknik Negeri Bandung.'
                                    : 'Kolaborasi dan pelaksanaan program magang untuk mahasiswa dari Politeknik Negeri Bandung.' }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Pagination UI -->
                <div class="mt-12 flex items-center justify-center gap-4">
                    <button id="prev-page" class="w-10 h-10 flex items-center justify-center rounded-full border border-outline-variant text-on-surface-variant hover:bg-primary/10 hover:text-primary transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                        <span class="material-symbols-outlined text-sm">arrow_back_ios_new</span>
                    </button>
                    <div id="page-numbers" class="flex gap-3"></div>
                    <button id="next-page" class="w-10 h-10 flex items-center justify-center rounded-full border border-outline-variant text-on-surface-variant hover:bg-primary/10 hover:text-primary transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                        <span class="material-symbols-outlined text-sm">arrow_forward_ios</span>
                    </button>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-unit-xl bg-on-secondary-fixed text-center">
            <div class="max-w-2xl mx-auto px-margin-mobile space-y-unit-lg">
                <h2 class="font-headline-h1-mobile text-headline-h1-mobile text-white">
                    {{ app()->getLocale() === 'en' ? 'Want to contribute or suggest a topic?' : 'Ingin berkontribusi atau menyarankan topik?' }}
                </h2>
                <p class="font-body-lg text-secondary-fixed">
                    {{ app()->getLocale() === 'en' ? 'We are building this library of insights to help organisations make better technology decisions.' : 'Kami membangun perpustakaan insight ini untuk membantu organisasi membuat keputusan teknologi yang lebih baik.' }}
                </p>
                <div class="pt-unit-md">
                    <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}"
                        class="inline-block bg-tertiary-fixed text-on-tertiary-fixed px-12 py-6 rounded-[20px] font-button text-xl uppercase tracking-widest shadow-xl hover:scale-105 transition-transform active:scale-100">
                        {{ app()->getLocale() === 'en' ? 'Free Consultation' : 'Konsultasi Gratis' }}
                    </a>
                </div>
            </div>
        </section>
    </main>

    @include('partials.partner-badge')
    @include('partials.footer')
    <script>
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header.fixed');
            if (window.scrollY > 50) {
                header.classList.add('shadow-md', 'h-16');
                header.classList.remove('h-20');
            } else {
                header.classList.remove('shadow-md', 'h-16');
                header.classList.add('h-20');
            }
        });

        const perPage = 12;
        const cards = document.querySelectorAll('[data-category]');

        // Pagination & filter
        function filterAndPaginate() {
            const active = document.querySelector('.category-filter.font-bold');
            const filter = active ? active.dataset.filter : 'all';

            const filtered = [];
            cards.forEach(c => {
                if (filter === 'all' || c.dataset.category === filter) {
                    filtered.push(c);
                }
            });

            const totalPages = Math.ceil(filtered.length / perPage) || 1;
            if (window.currentPage === undefined) window.currentPage = 1;
            if (window.currentPage > totalPages) window.currentPage = totalPages;

            cards.forEach(c => {
                c.style.display = 'none';
            });
            const start = (window.currentPage - 1) * perPage;
            filtered.slice(start, start + perPage).forEach(c => {
                c.style.display = 'block';
            });

            document.getElementById('prev-page').classList.toggle('disabled', window.currentPage === 1);
            document.getElementById('next-page').classList.toggle('disabled', window.currentPage === totalPages);

            const numbers = document.getElementById('page-numbers');
            numbers.innerHTML = '';
            for (let i = 1; i <= totalPages; i++) {
                const span = document.createElement('span');
                span.textContent = i;
                span.className = 'font-body-md text-body-md cursor-pointer hover:underline select-none ' + (i === window
                    .currentPage ? 'font-bold text-primary' : 'text-on-surface-variant');
                span.addEventListener('click', function() {
                    window.currentPage = i;
                    filterAndPaginate();
                });
                numbers.appendChild(span);
            }
        }

        document.querySelectorAll('.category-filter').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.category-filter').forEach(el => el.classList.remove(
                    'font-bold'));
                this.classList.add('font-bold');
                window.currentPage = 1;
                filterAndPaginate();
            });
        });

        document.getElementById('prev-page').addEventListener('click', function() {
            if (window.currentPage > 1) {
                window.currentPage--;
                filterAndPaginate();
            }
        });

        document.getElementById('next-page').addEventListener('click', function() {
            const active = document.querySelector('.category-filter.font-bold');
            const filter = active ? active.dataset.filter : 'all';
            const count = [...cards].filter(c => filter === 'all' || c.dataset.category === filter).length;
            if (window.currentPage < Math.ceil(count / perPage)) {
                window.currentPage++;
                filterAndPaginate();
            }
        });

        filterAndPaginate();
    </script>
</body>

</html>

