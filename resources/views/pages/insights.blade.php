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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght=400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1"
        rel="stylesheet" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "electric-cyan": "#12AED0",
                        "midnight-navy": "#031A44",
                        "impact-lime": "#A7F432",
                        "bg-light": "#F8FAFC",
                        "card-border": "#E2E8F0"
                    },
                    spacing: {
                        gutter: "24px",
                        "margin-mobile": "20px",
                        "margin-desktop": "80px",
                        "container-max": "1280px"
                    },
                    fontFamily: {
                        sans: ["Poppins", "sans-serif"],
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Poppins', sans-serif;
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

<body class="bg-bg-light text-midnight-navy font-sans antialiased" x-data="{
    activeFilter: '',
    currentPage: 1,
    itemsPerPage: 6,
    baseUrl: '{{ url('/insights') }}',
    featuredInsights: [
        @if (isset($featuredInsights) && is_array($featuredInsights)) @foreach ($featuredInsights as $feat)
                {
                    id: {{ $feat['id'] }},
                    title: '{{ addslashes($feat['title']) }}',
                    desc: '{{ addslashes($feat['desc']) }}',
                    img: '{{ $feat['img'] }}',
                    url: '{{ $feat['url'] }}'
                },
            @endforeach
        @else
            {
                id: 101,
                title: '{{ app()->getLocale() === 'en' ? 'PPDB Digital: How AI Accelerates the Process...' : 'PPDB Digital: Bagaimana AI Mempercepat Proses...' }}',
                desc: '{{ app()->getLocale() === 'en' ? 'How AI Assistant helps educational institutions simplify the workflow...' : 'Bagaimana AI Assistant membantu institusi pendidikan menyederhanakan alur...' }}',
                img: '{{ asset('assets/ppdb-digital.png') }}',
                url: '{{ url('/insights/ppdb-digital') }}'
            },
            {
                id: 102,
                title: '{{ app()->getLocale() === 'en' ? 'AI Governance in Educational Institutions: What Needs...' : 'AI Governance di Institusi Pendidikan: Apa yang Perlu..' }}',
                desc: '{{ app()->getLocale() === 'en' ? 'Security principles, access control, and audit trails essential when adopting AI...' : 'Prinsip keamanan, kontrol akses, dan audit trail yang wajib ada saat institusi pendidikan mengadopsi AI' }}',
                img: '{{ asset('assets/ai-gov-institusi.png') }}',
                url: '{{ url('/insights/ai-governance') }}'
            },
            {
                id: 103,
                title: '{{ app()->getLocale() === 'en' ? 'QA is Not Just a Checklist: Maintaining Digital System Quality...' : 'QA Bukan Sekadar Checklist: Menjaga Kualitas Sistem Digital di Lingkungan' }}',
                desc: '{{ app()->getLocale() === 'en' ? 'Why testing discipline and release governance matter during scaling...' : 'Mengapa disiplin testing dan release governance penting saat institusi pendidikan..' }}',
                img: '{{ asset('assets/qa-checklist.png') }}',
                url: '{{ url('/insights/qa-governance') }}'
            } @endif
    ],
    insights: [{
            id: 1,
            category: 'ai-gov',
            badge: 'AI GOVERNANCE',
            slug: 'menjembatani-gap-implementasi-ai-untuk-ukm-regional',
            title: '{{ app()->getLocale() === 'en' ? 'Bridging the Gap: AI Implementation for Regional SMEs' : 'Menjembatani Gap: Implementasi AI untuk UKM Regional' }}',
            desc: '{{ app()->getLocale() === 'en' ? 'Learn how local businesses leverage tailored machine learning models to compete with global players efficiently.' : 'Pelajari bagaimana bisnis lokal memanfaatkan model machine learning yang disesuaikan untuk bersaing dengan pemain global tanpa biaya yang berlebihan.' }}',
            img: 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=600&q=80'
        },
        {
            id: 2,
            category: 'qa',
            badge: 'QA',
            slug: 'qa-pilar-tak-terlihat-untuk-scaling',
            title: '{{ app()->getLocale() === 'en' ? 'QA: The Unseen Pillar for Scaling' : 'QA: Pilar Tak Terlihat untuk Scaling' }}',
            desc: '{{ app()->getLocale() === 'en' ? 'Why automated testing is not just an add-on, but an absolute necessity as products grow rapidly.' : 'Mengapa automated testing bukan sekadar tambahan, tetapi kebutuhan mutlak saat produk berkembang pesat.' }}',
            img: 'https://images.unsplash.com/photo-1607799279861-4dd421887fb3?auto=format&fit=crop&w=600&q=80'
        },
        {
            id: 3,
            category: 'proses',
            badge: '{{ app()->getLocale() === 'en' ? 'PROCESS' : 'PROSES' }}',
            slug: 'agile-vs-waterfall-di-enterprise',
            title: '{{ app()->getLocale() === 'en' ? 'Agile vs. Waterfall in the Enterprise' : 'Agile vs. Waterfall di Enterprise' }}',
            desc: '{{ app()->getLocale() === 'en' ? 'Understanding the cultural shift needed when traditional industries migrate to adaptive management.' : 'Memahami perubahan budaya yang dibutuhkan saat industri tradisional bermigrasi ke pengelolaan adaptif.' }}',
            img: 'https://images.unsplash.com/photo-1531403009284-440f080d1e12?auto=format&fit=crop&w=600&q=80'
        },
        {
            id: 4,
            category: 'tech-event',
            badge: '{{ app()->getLocale() === 'en' ? 'EVENT TECH' : 'TEKNOLOGI EVENT' }}',
            slug: 'eventgate-semua-kebutuhan-acara-dalam-satu-platform',
            title: '{{ app()->getLocale() === 'en' ? 'EventGate: All Event Needs in One Platform' : 'EventGate: Semua Kebutuhan Acara dalam Satu Platform' }}',
            desc: '{{ app()->getLocale() === 'en' ? 'Platform for event discovery, digital ticketing, and centralized QR check-in with high reliability.' : 'Platform dari Konser.com untuk pencarian event, tiket digital, dan check-in QR terpusat dengan reliabilitas tinggi.' }}',
            img: '{{ asset('assets/eventgate-2.png') }}'
        },
        {
            id: 5,
            category: 'admin-wilayah',
            badge: '{{ app()->getLocale() === 'en' ? 'REGIONAL ADMIN' : 'ADMINISTRASI WILAYAH' }}',
            slug: 'wilayahflow-merapikan-pelaporan-rt-rw',
            title: '{{ app()->getLocale() === 'en' ? 'WilayahFlow: Streamlining Neighborhood Reporting' : 'WilayahFlow: Kerapihan Pelaporan RT/RW' }}',
            desc: '{{ app()->getLocale() === 'en' ? 'Reporting and administrative assistant with automatic recaps and secure cloud archives.' : 'Asisten pelaporan dan administrasi RT/RW dengan rekap otomatis dan arsip berbasis cloud aman.' }}',
            img: '{{ asset('assets/wilayahflow-2.png') }}'
        },
        {
            id: 6,
            category: 'ekonomi-desa',
            badge: '{{ app()->getLocale() === 'en' ? 'RURAL ECONOMY' : 'EKONOMI DESA' }}',
            slug: 'desahub-menghubungkan-ekonomi-desa',
            title: '{{ app()->getLocale() === 'en' ? 'DesaHub: Connecting the Rural Economy' : 'DesaHub: Menghubungkan Ekonomi Desa' }}',
            desc: '{{ app()->getLocale() === 'en' ? 'An integrated marketplace connecting local produce, SMEs, and village enterprises directly to city markets.' : 'Platform marketplace terintegrasi yang menghubungkan produk lokal, UMKM, dan BUMDes langsung ke pasar kota.' }}',
            img: '{{ asset('assets/desahub-2.png') }}'
        },
        {
            id: 7,
            category: 'magang',
            badge: '{{ app()->getLocale() === 'en' ? 'INTERNSHIP' : 'MAGANG' }}',
            slug: 'kick-off-al-azhar-syifa-budi-parahyangan',
            title: 'Kick Off Al Azhar Syifa Budi Parahyangan',
            desc: '{{ app()->getLocale() === 'en' ? 'First successful digital solution project developed and executed at Nakala Digital.' : 'Project solusi digital pertama yang sukses dikembangkan dan dikerjakan di Nakala Digital.' }}',
            img: '{{ asset('assets/al-azhar.png') }}'
        },
        {
            id: 8,
            category: 'magang',
            badge: '{{ app()->getLocale() === 'en' ? 'INTERNSHIP' : 'MAGANG' }}',
            slug: 'kick-off-universitas-widyatama',
            title: 'Kick Off Universitas Widyatama',
            desc: '{{ app()->getLocale() === 'en' ? 'Collaboration and internship program implementation for Widyatama University students.' : 'Kolaborasi dan pelaksanaan program magang untuk mahasiswa dari Universitas Widyatama.' }}',
            img: '{{ asset('assets/widyatama-2.png') }}'
        },
        {
            id: 9,
            category: 'magang',
            badge: '{{ app()->getLocale() === 'en' ? 'INTERNSHIP' : 'MAGANG' }}',
            slug: 'kick-off-universitas-komputer',
            title: 'Kick Off Universitas Komputer',
            desc: '{{ app()->getLocale() === 'en' ? 'Collaboration and internship program implementation for UNIKOM students.' : 'Kolaborasi dan pelaksanaan program magang untuk mahasiswa dari Universitas Komputer.' }}',
            img: '{{ asset('assets/unikom.png') }}'
        },
        {
            id: 10,
            category: 'magang',
            badge: '{{ app()->getLocale() === 'en' ? 'INTERNSHIP' : 'MAGANG' }}',
            slug: 'kick-off-politeknik-negeri-bandung',
            title: 'Kick Off Politeknik Negeri Bandung',
            desc: '{{ app()->getLocale() === 'en' ? 'Collaboration and internship program implementation for POLBAN students.' : 'Kolaborasi dan pelaksanaan program magang untuk mahasiswa dari Politeknik Negeri Bandung.' }}',
            img: '{{ asset('assets/polban.png') }}'
        }
    ],
    get filteredInsights() {
        if (this.activeFilter === '') return this.insights;
        return this.insights.filter(i => i.category === this.activeFilter);
    },
    get totalPages() {
        return Math.ceil(this.filteredInsights.length / this.itemsPerPage) || 1;
    },
    get paginatedInsights() {
        let start = (this.currentPage - 1) * this.itemsPerPage;
        let end = start + this.itemsPerPage;
        return this.filteredInsights.slice(start, end);
    }
}">

    @include('partials.navbar')

    <main class="pt-20">
        <!-- 1. HERO SECTION -->
        <section
            class="relative bg-[#F8FAFC] overflow-hidden pt-10 pb-16 md:pt-14 md:pb-24 lg:pt-16 lg:pb-28 border-b border-slate-100 flex items-center">

            <!-- Garis Grid Transparan di Background -->
            <div
                class="absolute inset-0 bg-[linear-gradient(to_right,#e2e8f0_1px,transparent_1px),linear-gradient(to_bottom,#e2e8f0_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)] opacity-25 pointer-events-none z-0">
            </div>

            <!-- KONTAINER GAMBAR (Desktop) -->
            <div
                class="absolute right-0 top-0 bottom-0 z-10 w-[55%] lg:w-[53%] xl:w-[48%] h-full pointer-events-none select-none hidden lg:block overflow-hidden">
                <div class="absolute inset-y-0 left-0 w-1/6 bg-gradient-to-r from-[#F8FAFC] to-transparent z-20"></div>
                <div class="absolute inset-x-0 bottom-0 h-1/6 bg-gradient-to-t from-[#F8FAFC] to-transparent z-20">
                </div>
                <img src="{{ asset('assets/hero_insights.png') }}" alt="Insights Digital Platform Illustration"
                    class="w-full h-full object-cover object-left-top scale-[1.02] origin-top-left" />
            </div>

            <!-- KONTEN UTAMA TEKS -->
            <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto relative z-20 w-full my-auto">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-7 space-y-5 md:space-y-6 pt-2">
                        <div
                            class="inline-flex items-center gap-2 bg-[#A7F432] text-[#031A44] px-4 py-2 rounded-xl text-xs font-extrabold uppercase tracking-wider shadow-sm w-fit">
                            <span class="material-symbols-outlined text-[16px] font-bold">description</span>
                            {{ app()->getLocale() === 'en' ? 'Education & Technology Insights' : 'INSIGHT PENDIDIKAN & TEKNOLOGI' }}
                        </div>
                        <h1
                            class="text-3xl sm:text-4xl lg:text-[42px] font-extrabold text-[#031A44] leading-[1.2] tracking-tight max-w-2xl">
                            {{ app()->getLocale() === 'en' ? 'INSIGHTS & PERSPECTIVES' : 'INSIGHT & PEMIKIRAN' }}
                        </h1>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed font-normal max-w-xl">
                            {{ app()->getLocale() === 'en'
                                ? 'Perspectives on educational technology, AI governance, software quality, and digital transformation for schools, foundations, and higher education institutions.'
                                : 'Perspektif tentang teknologi pendidikan, AI governance, kualitas software, dan transformasi digital untuk sekolah, yayasan, dan perguruan tinggi.' }}
                        </p>
                    </div>

                    <!-- Tampilan Khusus HP/Tablet -->
                    <div class="block lg:hidden col-span-1 z-10 mt-8 md:mt-12">
                        <img src="{{ asset('assets/hero_insights.png') }}" alt="Insights Digital Platform Illustration"
                            class="w-full h-auto object-contain max-h-[320px] mx-auto" />
                    </div>
                </div>
            </div>
        </section>

        <!-- ROW LOGO MITRA STRATEGIS -->
        <section class="bg-white border-b border-slate-200/80 py-6 md:py-8 relative z-20 shadow-xs">
            <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
                <div class="flex flex-col sm:flex-row items-center justify-center gap-6 sm:gap-8 text-center">

                    <!-- Logo Nakala Digital -->
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('assets/logo-nakala.png') }}" alt="Nakala Digital" class="h-7 w-auto" />
                    </div>

                    <!-- Divider -->
                    <div class="hidden sm:block text-slate-300 font-light text-xl">|</div>

                    <!-- Keterangan Mitra -->
                    <div class="text-[11px] font-bold tracking-widest text-[#47A22B] uppercase max-w-xs sm:max-w-none">
                        {{ app()->getLocale() === 'en' ? 'REPRESENTATIVE & DELIVERY PARTNER' : 'PERWAKILAN & MITRA DELIVERY' }}
                        <span
                            class="text-slate-500 block text-[11px] font-medium lowercase normal-case tracking-normal mt-0.5">
                            {{ app()->getLocale() === 'en' ? 'Strategy by Romulus Digital' : 'Strategi dari Romulus Digital' }}
                        </span>
                    </div>

                    <!-- Logo Romulus Digital -->
                    <div
                        class="bg-[#031A44] text-white px-2 py-2 rounded-md border border-slate-800 shadow-sm flex flex-col items-center justify-center min-w-[110px] leading-none">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('assets/romulus-putih.png') }}" alt="Romulus Digital"
                                class="h-11 w-auto" />
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- 2. FILTER CARDS CATEGORY -->
        <section class="py-6 bg-white border-b border-slate-100 sticky top-16 z-20 shadow-sm">
            <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto overflow-hidden">
                <div
                    class="flex items-center gap-3 overflow-x-auto no-scrollbar pb-2 md:pb-0 flex-nowrap md:flex-wrap md:justify-center">

                    <button @click="activeFilter = (activeFilter === 'edu-tech' ? '' : 'edu-tech'); currentPage = 1"
                        :class="activeFilter === 'edu-tech' ? 'bg-[#00A8CC] text-white shadow-md' :
                            'bg-[#F5F5F7] text-[#5A6A85] border border-slate-200/60 hover:bg-slate-200/50'"
                        class="px-6 py-3 rounded-2xl text-xs font-semibold tracking-wide whitespace-nowrap transition-all duration-200 shrink-0">
                        Educational Technology
                    </button>

                    <button @click="activeFilter = (activeFilter === 'ai-gov' ? '' : 'ai-gov'); currentPage = 1"
                        :class="activeFilter === 'ai-gov' ? 'bg-[#00A8CC] text-white shadow-md' :
                            'bg-[#F5F5F7] text-[#5A6A85] border border-slate-200/60 hover:bg-slate-200/50'"
                        class="px-6 py-3 rounded-2xl text-xs font-semibold tracking-wide whitespace-nowrap transition-all duration-200 shrink-0">
                        AI Governance
                    </button>

                    <button @click="activeFilter = (activeFilter === 'qa' ? '' : 'qa'); currentPage = 1"
                        :class="activeFilter === 'qa' ? 'bg-[#00A8CC] text-white shadow-md' :
                            'bg-[#F5F5F7] text-[#5A6A85] border border-slate-200/60 hover:bg-slate-200/50'"
                        class="px-6 py-3 rounded-2xl text-xs font-semibold tracking-wide whitespace-nowrap transition-all duration-200 shrink-0">
                        QA
                    </button>

                    <button @click="activeFilter = (activeFilter === 'ppdb-pmb' ? '' : 'ppdb-pmb'); currentPage = 1"
                        :class="activeFilter === 'ppdb-pmb' ? 'bg-[#00A8CC] text-white shadow-md' :
                            'bg-[#F5F5F7] text-[#5A6A85] border border-slate-200/60 hover:bg-slate-200/50'"
                        class="px-6 py-3 rounded-2xl text-xs font-semibold tracking-wide whitespace-nowrap transition-all duration-200 shrink-0">
                        PPDB/PMB
                    </button>

                    <button
                        @click="activeFilter = (activeFilter === 'digital-transform' ? '' : 'digital-transform'); currentPage = 1"
                        :class="activeFilter === 'digital-transform' ? 'bg-[#00A8CC] text-white shadow-md' :
                            'bg-[#F5F5F7] text-[#5A6A85] border border-slate-200/60 hover:bg-slate-200/50'"
                        class="px-6 py-3 rounded-2xl text-xs font-semibold tracking-wide whitespace-nowrap transition-all duration-200 shrink-0">
                        {{ app()->getLocale() === 'en' ? 'Digital Transformation' : 'Transformasi Digital' }}
                    </button>

                </div>
            </div>
        </section>

        <!-- ARTIKEL UNGGULAN SECTION -->
        <section class="py-12 bg-[#F8FAFC]">
            <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">

                <!-- Judul Section -->
                <div class="text-center mb-10">
                    <h2 class="text-2xl md:text-3xl font-extrabold text-[#031A44] tracking-tight">
                        {{ app()->getLocale() === 'en' ? 'Featured Articles' : 'Artikel Unggulan' }}
                    </h2>
                </div>

                @php
                    $isEn = app()->getLocale() === 'en';

                    $featuredInsights = [
                        [
                            'img' => asset('assets/ppdb-artikel.png'),
                            'title' => $isEn
                                ? 'PPDB Digital: How AI Speeds Up the Process...'
                                : 'PPDB Digital: Bagaimana AI Mempercepat Proses...',
                            'desc' => $isEn
                                ? 'How AI Assistant helps educational institutions simplify registration workflows...'
                                : 'Bagaimana AI Assistant membantu institusi pendidikan menyederhanakan alur...',
                            'url' => url('/insights/ppdb-digital'),
                        ],
                        [
                            'img' => asset('assets/ai-governance-artikel.png'),
                            'title' => $isEn
                                ? 'AI Governance in Educational Institutions: What You Need...'
                                : 'AI Governance di Institusi Pendidikan: Apa yang Perlu...',
                            'desc' => $isEn
                                ? 'Security principles, access control, and audit trails required when adoption takes place...'
                                : 'Prinsip keamanan, kontrol akses, dan audit trail yang wajib ada saat institusi pendidikan mengadopsi AI...',
                            'url' => url('/insights/ai-governance'),
                        ],
                        [
                            'img' => asset('assets/qa-checklist-artikel.png'),
                            'title' => $isEn
                                ? 'QA is Not Just a Checklist: Maintaining Digital System Quality...'
                                : 'QA Bukan Sekadar Checklist: Menjaga Kualitas Sistem Digital di Lingkungan...',
                            'desc' => $isEn
                                ? 'Why testing discipline and release governance matter when scaling...'
                                : 'Mengapa disiplin testing dan release governance penting saat institusi pendidikan...',
                            'url' => url('/insights/qa-checklist'),
                        ],
                    ];
                @endphp

                <!-- Grid 3 Kolom Native Blade -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ($featuredInsights as $feat)
                        <div
                            class="bg-white border border-[#E2E8F0] rounded-[24px] overflow-hidden shadow-sm flex flex-col justify-between group hover:shadow-md transition-all duration-300">
                            <div>
                                <!-- Container Gambar -->
                                <div
                                    class="w-full aspect-[16/10] overflow-hidden bg-slate-50 border-b border-slate-100">
                                    <img src="{{ $feat['img'] }}"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                        alt="{{ $feat['title'] }}" />
                                </div>

                                <!-- Content -->
                                <div class="p-6">
                                    <h3
                                        class="font-bold text-lg text-[#031A44] mb-3 leading-snug tracking-tight group-hover:text-electric-cyan transition-colors line-clamp-2">
                                        {{ $feat['title'] }}
                                    </h3>
                                    <p class="text-slate-500 text-sm leading-relaxed line-clamp-3">
                                        {{ $feat['desc'] }}
                                    </p>
                                </div>
                            </div>

                            <!-- Button Link -->
                            <div class="px-6 pb-6 pt-2 flex justify-end">
                                <a href="{{ $feat['url'] }}"
                                    class="inline-flex items-center gap-1 text-[#031A44] font-medium text-xs border-b border-[#031A44] pb-0.5 hover:text-electric-cyan hover:border-electric-cyan transition-all">
                                    <span>{{ $isEn ? 'Read Article' : 'Baca Artikel' }}</span>
                                    <span class="material-symbols-outlined text-xs">chevron_right</span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>

        <!-- 4. MAIN INSIGHT GRID SECTION -->
        <section class="py-12 md:py-16 bg-slate-50/80">
            <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">

                <div class="flex flex-col sm:flex-row items-start sm:items-end justify-between gap-4 mb-8">
                    <div>
                        <span class="text-electric-cyan font-bold text-xs uppercase tracking-wider block mb-1">
                            {{ app()->getLocale() === 'en' ? 'SOLUTION HIGHLIGHTS' : 'SOROTAN SOLUSI' }}
                        </span>
                        <h2 class="text-2xl md:text-3xl font-extrabold text-midnight-navy tracking-tight">
                            {{ app()->getLocale() === 'en' ? 'Explore More Insights' : 'Jelajahi Insight Lainnya' }}
                        </h2>
                    </div>

                    <div class="relative min-w-[200px]">
                        <select x-model="activeFilter" @change="currentPage = 1"
                            class="w-full appearance-none bg-[#F5F5F7] hover:bg-slate-200/60 text-slate-700 rounded-xl px-4 py-2.5 text-xs font-medium tracking-wide border border-slate-200/60 shadow-sm focus:outline-none focus:ring-2 focus:ring-electric-cyan pr-10 cursor-pointer transition-all">
                            <option value="">{{ app()->getLocale() === 'en' ? 'All Insights' : 'Semua Insight' }}
                            </option>
                            <option value="ai-gov">AI Governance</option>
                            <option value="qa">QA</option>
                            <option value="proses">{{ app()->getLocale() === 'en' ? 'Process' : 'Proses' }}</option>
                            <option value="tech-event">
                                {{ app()->getLocale() === 'en' ? 'Event Technology' : 'Teknologi Event' }}</option>
                            <option value="admin-wilayah">
                                {{ app()->getLocale() === 'en' ? 'Regional Admin' : 'Administrasi Wilayah' }}</option>
                            <option value="ekonomi-desa">
                                {{ app()->getLocale() === 'en' ? 'Rural Economy' : 'Ekonomi Desa' }}</option>
                            <option value="magang">{{ app()->getLocale() === 'en' ? 'Internship' : 'Magang' }}</option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-slate-400">
                            <span class="material-symbols-outlined text-sm font-bold">chevron_right</span>
                        </div>
                    </div>
                </div>

                <!-- Dynamic Grid Items -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <template x-for="item in paginatedInsights" :key="item.id">
                        <div
                            class="bg-white border border-slate-200/70 rounded-[24px] overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
                            <div>
                                <a :href="baseUrl + '/' + item.slug"
                                    class="block w-full aspect-[16/10] overflow-hidden bg-slate-100 relative">
                                    <img :src="item.img"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                        :alt="item.title" />
                                </a>
                                <div class="p-6">
                                    <span
                                        class="text-[10px] text-electric-cyan font-bold uppercase tracking-wider block mb-2"
                                        x-text="item.badge"></span>

                                    <a :href="baseUrl + '/' + item.slug" class="block">
                                        <h3 class="font-bold text-base text-midnight-navy mb-3 leading-snug tracking-tight group-hover:text-electric-cyan transition-colors"
                                            x-text="item.title"></h3>
                                    </a>
                                    <p class="text-slate-500 text-xs leading-relaxed line-clamp-3" x-text="item.desc">
                                    </p>
                                </div>
                            </div>

                            <div class="px-6 pb-6 pt-2 flex justify-end">
                                <a :href="baseUrl + '/' + item.slug"
                                    class="inline-flex items-center gap-1 text-electric-cyan text-xs font-semibold hover:underline transition-all">
                                    <span
                                        x-text="item.category === 'magang' ? '{{ app()->getLocale() === 'en' ? 'View Details' : 'Lihat Detail' }}' : '{{ app()->getLocale() === 'en' ? 'Read More' : 'Baca Selengkapnya' }}'"></span>
                                    <span class="material-symbols-outlined text-xs">chevron_right</span>
                                </a>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- Empty State -->
                <div x-show="filteredInsights.length === 0"
                    class="text-center py-16 text-slate-400 text-sm bg-white rounded-2xl border border-dashed border-slate-200 mt-6">
                    {{ app()->getLocale() === 'en' ? 'No insights available in this category.' : 'Tidak ada insight dalam kategori ini.' }}
                </div>

                <!-- Pagination Kontrol -->
                <div class="flex items-center justify-center gap-4 mt-12" x-show="totalPages > 1">
                    <button @click="currentPage = Math.max(1, currentPage - 1)" :disabled="currentPage === 1"
                        :class="currentPage === 1 ? 'border-slate-200 text-slate-300 cursor-not-allowed bg-white' :
                            'border-cyan-200 text-electric-cyan hover:bg-cyan-50 bg-white'"
                        class="w-10 h-10 rounded-xl border flex items-center justify-center transition-all shadow-sm">
                        <span class="material-symbols-outlined text-lg">chevron_left</span>
                    </button>

                    <div class="flex items-center gap-2.5 px-2">
                        <template x-for="page in totalPages" :key="page">
                            <button @click="currentPage = page"
                                :class="currentPage === page ? 'w-2.5 h-2.5 bg-electric-cyan' :
                                    'w-2 h-2 bg-slate-300 hover:bg-slate-400'"
                                class="rounded-full transition-all duration-300">
                            </button>
                        </template>
                    </div>

                    <button @click="currentPage = Math.min(totalPages, currentPage + 1)"
                        :disabled="currentPage === totalPages"
                        :class="currentPage === totalPages ? 'border-slate-200 text-slate-300 cursor-not-allowed bg-white' :
                            'border-cyan-200 text-electric-cyan hover:bg-cyan-50 bg-white'"
                        class="w-10 h-10 rounded-xl border flex items-center justify-center transition-all shadow-sm">
                        <span class="material-symbols-outlined text-lg">chevron_right</span>
                    </button>
                </div>

            </div>
        </section>

        <!-- 5. CTA SECTION -->
        <section class="py-16 bg-gradient-to-b from-slate-100 to-cyan-50 text-center border-t border-slate-200">
            <div class="max-w-2xl mx-auto px-margin-mobile">
                <h2 class="text-2xl md:text-3xl font-extrabold text-midnight-navy mb-3 tracking-tight">
                    {{ app()->getLocale() === 'en' ? 'Want to contribute or suggest a topic?' : 'Ingin berkontribusi atau menyarankan topik?' }}
                </h2>
                <p class="text-slate-600 text-xs md:text-sm mb-8 leading-relaxed max-w-lg mx-auto">
                    {{ app()->getLocale() === 'en'
                        ? 'We are building this library of insights to help organisations make better technology decisions.'
                        : 'Kami membangun perpustakaan insight ini untuk membantu organisasi membuat keputusan teknologi yang lebih baik.' }}
                </p>
                <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}"
                    class="inline-block bg-electric-cyan text-white px-8 py-3.5 rounded-full font-bold text-xs uppercase tracking-wider shadow-md hover:bg-cyan-600 transition-all hover:scale-105 active:scale-95">
                    {{ app()->getLocale() === 'en' ? 'Discuss Your Project' : 'Diskusikan Proyek Anda' }}
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')
</body>

</html>
