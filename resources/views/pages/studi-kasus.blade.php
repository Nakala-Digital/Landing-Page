@php
    $locale = app()->getLocale();
    $isEn = $locale === 'en';
@endphp

<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ $locale }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ $isEn ? 'Case Study | Nakala Digital' : 'Studi Kasus | Nakala Digital' }}</title>
    @include('partials.seo', [
        'title' => $isEn ? 'Case Study | Nakala Digital' : 'Studi Kasus | Nakala Digital',
        'description' => $isEn
            ? 'Read the latest case studies, perspectives, and thought leadership from Nakala Digital on software development, AI, QA governance, and digital transformation.'
            : 'Baca studi kasus, perspektif, dan pemikiran terbaru dari Nakala Digital tentang pengembangan software, AI, tata kelola QA, dan transformasi digital.',
    ])
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <!-- Alpine.js Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />

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
                        full: "9999px"
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
    </style>
</head>

<body class="bg-background text-on-background">
    @include('partials.navbar')

    <main class="pt-20 bg-[#F8FAFC]">
        <!-- Hero Section Studi Kasus -->
        <section
            class="relative bg-[#F8FAFC] overflow-hidden pt-8 pb-12 md:pt-12 md:pb-16 lg:pt-12 lg:pb-20 border-b border-slate-100 min-h-[520px] flex flex-col justify-between">

            <!-- Garis Grid Transparan di Background -->
            <div
                class="absolute inset-0 bg-[linear-gradient(to_right,#e2e8f0_1px,transparent_1px),linear-gradient(to_bottom,#e2e8f0_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)] opacity-25 pointer-events-none z-0">
            </div>

            <!-- KONTAINER GAMBAR absolute -->
            <div
                class="absolute right-0 top-0 bottom-0 z-10 w-[55%] lg:w-[53%] xl:w-[48%] h-[calc(100%-140px)] max-h-[480px] pointer-events-none select-none hidden lg:block overflow-hidden">
                <div class="absolute inset-y-0 left-0 w-1/6 bg-gradient-to-r from-[#F8FAFC] to-transparent z-20"></div>
                <div class="absolute inset-x-0 bottom-0 h-1/5 bg-gradient-to-t from-[#F8FAFC] to-transparent z-20">
                </div>
                <img src="{{ asset('assets/hero_studi.png') }}" alt="Studi Kasus Digital Platform Illustration"
                    class="w-full h-full object-cover object-left-top scale-[1.02] origin-top-left" />
            </div>

            <!-- KONTEN UTAMA TEKS & FOOTER LOGO -->
            <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto relative z-20 w-full my-auto">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-7 space-y-5 md:space-y-6 pt-2">
                        <div
                            class="inline-flex items-center gap-2 bg-[#A7F432] text-[#031A44] px-4 py-2 rounded-xl text-xs font-extrabold uppercase tracking-wider shadow-sm w-fit">
                            <span class="material-symbols-outlined text-[16px] font-bold">book</span>
                            {{ $isEn ? 'Case Study EDUCATION & ENTERPRISE' : 'Studi Kasus PENDIDIKAN & ENTERPRISE' }}
                        </div>
                        <h1
                            class="text-3xl sm:text-4xl lg:text-[42px] font-extrabold text-[#031A44] leading-[1.2] tracking-tight max-w-2xl">
                            {!! $isEn
                                ? 'Case Study: Real Impact of <span class="text-[#12AED0]">Digital Transformation</span> for Education & Enterprise'
                                : 'Studi Kasus: Dampak Nyata <span class="text-[#12AED0]">Transformasi Digital</span> untuk Institusi Pendidikan dan Enterprise' !!}
                        </h1>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed font-normal max-w-xl">
                            {{ $isEn
                                ? 'Nakala Digital bridges local delivery with regional capabilities. Explore how we empower institutions and enterprises across Indonesia with technical precision and high-impact software solutions.'
                                : 'Nakala Digital menjembatani delivery lokal dengan kapabilitas regional. Jelajahi bagaimana kami telah memberdayakan institusi dan perusahaan di seluruh Indonesia dengan ketelitian teknis dan solusi perangkat lunak berdampak tinggi.' }}
                        </p>
                    </div>

                    <!-- Tampilan Khusus HP/Tablet -->
                    <div class="block lg:hidden col-span-1 z-10 mt-4">
                        <img src="{{ asset('assets/hero_studi.png') }}" alt="Studi Kasus Digital Platform Illustration"
                            class="w-full h-auto object-contain" />
                    </div>
                </div>

                <!-- Row Logo Mitra Strategis -->
                <div
                    class="mt-12 lg:mt-16 pt-6 flex flex-col sm:flex-row items-center justify-center gap-6 sm:gap-8 text-center border-t border-slate-200/60 relative z-20">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('assets/logo-nakala.png') }}" alt="Nakala Digital" class="h-7 w-auto" />
                    </div>
                    <div class="hidden sm:block text-slate-300 font-light text-xl">|</div>
                    <div class="text-[11px] font-bold tracking-widest text-[#47A22B] uppercase max-w-xs sm:max-w-none">
                        {{ $isEn ? 'REPRESENTATIVE & DELIVERY PARTNER' : 'PERWAKILAN & MITRA DELIVERY' }}
                        <span
                            class="text-slate-500 block text-[11px] font-medium lowercase normal-case tracking-normal mt-0.5">
                            {{ $isEn ? 'Strategy by Romulus Digital' : 'Strategi dari Romulus Digital' }}
                        </span>
                    </div>
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

        <!-- Section Eksplorasi Semua Studi Kasus -->
        <section class="py-16 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto"
            x-data="{
                activeFilter: 'semua',
                currentPage: 1,
                pageSize: 6,
                baseUrl: '{{ url($isEn ? '/en/studi-kasus' : '/studi-kasus') }}',
                items: [{
                        id: 1,
                        slug: 'lms-berkemah',
                        title: 'LMS Berkemah',
                        tag: 'SOFTWARE',
                        category: 'education',
                        img: '{{ asset('assets/studi_kasus/lms_berkemah.png') }}',
                        challenge: '{{ $isEn ? 'Learners struggle to find structured & practical learning resources' : 'Pembelajar sulit menemukan sumber belajar yang terstruktur & praktis' }}',
                        solution: '{{ $isEn ? 'An LMS platform combining online courses, psychology programs & membership' : 'Platform LMS yang menggabungkan kursus online, program psikologi & membership' }}',
                        implementation: '{{ $isEn ? 'Interactive courses, progress tracking, online assessment, certificates, payment integration' : 'Interactive courses, progress tracking, assessment online, sertifikat, payment integration' }}',
                        impact: '{{ $isEn ? 'Increased learner engagement' : 'Engagement pembelajar meningkat' }}'
                    },
                    {
                        id: 2,
                        slug: 'website-ppdb-school-portal',
                        title: 'Website PPDB & School Portal',
                        tag: 'WEB/PORTAL',
                        category: 'education',
                        img: '{{ asset('assets/studi_kasus/ppdb.png') }}',
                        challenge: '{{ $isEn ? 'Manual registration, document management & status tracking slowed down admissions' : 'Pendaftaran manual, pengelolaan dokumen & tracking status memperlambat admisi' }}',
                        solution: '{{ $isEn ? 'End-to-end digital PPDB platform with real-time registration & tracking' : 'Platform PPDB digital end-to-end dengan pendaftaran & tracking real-time' }}',
                        implementation: '{{ $isEn ? 'Online forms, document verification workflow, admin dashboard, parent portal' : 'Formulir online, workflow verifikasi dokumen, dashboard admin, parent portal' }}',
                        impact: '{{ $isEn ? 'More structured & auditable admission process' : 'Proses admisi lebih terstruktur & auditable' }}'
                    },
                    {
                        id: 3,
                        slug: 'digital-coaching-ai-coach',
                        title: 'Digital Coaching / AI Coach',
                        tag: 'AI TECHNOLOGY',
                        category: 'enterprise',
                        img: '{{ asset('assets/studi_kasus/digital_coaching.png') }}',
                        challenge: '{{ $isEn ? 'Difficult to deliver consistent & scalable coaching for distributed teams' : 'Sulit memberikan coaching konsisten & scalable untuk tim yang tersebar' }}',
                        solution: '{{ $isEn ? 'AI-driven coaching platform with personalized & interactive learning journeys on-demand' : 'Platform coaching AI-driven dengan learning journey personal & interaktif on-demand' }}',
                        implementation: '{{ $isEn ? 'AI coaching chatbot, learning path, goal tracking, progress dashboard, manager visibility' : 'AI coaching chatbot, learning path, goal tracking, dashboard progres, manager visibility' }}',
                        impact: '{{ $isEn ? 'Scalable coaching without proportional cost increases' : 'Coaching scalable tanpa kenaikan biaya proporsional' }}'
                    },
                    {
                        id: 4,
                        slug: 'ai-hiring-recruitment-platform',
                        title: 'AI Hiring / Gen AI Recruitment Platform',
                        tag: 'SOFTWARE',
                        category: 'enterprise',
                        img: '{{ asset('assets/studi_kasus/ai_hiring.png') }}',
                        challenge: '{{ $isEn ? 'High CV volume, inconsistent screening, slow time-to-hire' : 'Volume CV tinggi, screening tidak konsisten, time-to-hire lambat' }}',
                        solution: '{{ $isEn ? 'AI-based recruitment platform to automate candidate screening & scoring' : 'Platform rekrutmen berbasis AI untuk otomatisasi screening & scoring kandidat' }}',
                        implementation: '{{ $isEn ? 'AI CV parsing, job-fit ranking, automated shortlisting & scheduling, analytics dashboard' : 'AI CV parsing, job-fit ranking, shortlist & scheduling otomatis, dashboard analitik' }}',
                        impact: '{{ $isEn ? 'More consistent candidate evaluation' : 'Evaluasi kandidat lebih konsisten' }}'
                    },
                    {
                        id: 5,
                        slug: 'crm-ai-admissions',
                        title: 'CRM AI Admissions',
                        tag: 'WEB/PORTAL',
                        category: 'education',
                        img: '{{ asset('assets/studi_kasus/crm_ai.png') }}',
                        challenge: '{{ $isEn ? 'Delayed applicant intake process (PPDB/PMB) across foundations' : 'Proses penerimaan pendaftar (PPDB/PMB) pada yayasan terhambat' }}',
                        solution: '{{ $isEn ? 'Integrated admission management platform equipped with AI Assistant' : 'Platform manajemen admisi terpadu yang dilengkapi AI Assistant' }}',
                        implementation: '{{ $isEn ? 'Implementation of AI recommendation algorithms for prospect analysis & registration automation' : 'Penerapan algoritma AI recommendation untuk analisis prospek & otomatisasi pendaftaran' }}',
                        impact: '{{ $isEn ? '50% Faster Applicant Response' : 'Respon Pendaftar 50% Lebih Cepat' }}'
                    },
                    {
                        id: 6,
                        slug: 'hrms-mahya-platform',
                        title: 'HRMS / Mahya Platform',
                        tag: 'OPERATING SYSTEM',
                        category: 'enterprise',
                        img: '{{ asset('assets/studi_kasus/hrms.png') }}',
                        challenge: '{{ $isEn ? 'HR operations (attendance, leave, payroll) were manually handled via spreadsheets' : 'Operasional HR (absensi, cuti, payroll) masih manual via spreadsheet' }}',
                        solution: '{{ $isEn ? 'Centralized HR system with employee self-service features' : 'Sistem HR terpusat berbasis self-service untuk karyawan' }}',
                        implementation: '{{ $isEn ? 'Self-service portal for attendance, leave requests, and payroll calculation' : 'Portal mandiri untuk absensi, pengajuan cuti, dan kalkulasi payroll' }}',
                        impact: '{{ $isEn ? '24/7 Employee Self-Service Access' : '24/7 Akses Self-Service Karyawan' }}'
                    },
                    {
                        id: 7,
                        slug: 'erp-platform-bisa',
                        title: 'ERP Platform BISA',
                        tag: 'SOFTWARE',
                        category: 'enterprise',
                        img: '{{ asset('assets/studi_kasus/erp.png') }}',
                        challenge: '{{ $isEn ? 'Operations, approvals, and cross-department data were inefficient & hard to monitor' : 'Operasional, approval, dan data lintas departemen tidak efisien & sulit dipantau' }}',
                        solution: '{{ $isEn ? 'Integrated ERP centralizing workflows, master data, and reporting' : 'ERP terintegrasi yang memusatkan workflow, master data & pelaporan' }}',
                        implementation: '{{ $isEn ? 'Centralized data migration, approval workflow, HCM & payroll, asset management, executive dashboard' : 'Migrasi data terpusat, workflow approval, HCM & payroll, asset management, dashboard eksekutif' }}',
                        impact: '{{ $isEn ? 'Faster business processes' : 'Proses bisnis lebih cepat' }}'
                    },
                    {
                        id: 8,
                        slug: 'd365-finance-support',
                        title: 'D365 Finance Support & Managed Services',
                        tag: 'MANAGED SUPPORT',
                        category: 'enterprise',
                        img: '{{ asset('assets/studi_kasus/d365.png') }}',
                        challenge: '{{ $isEn ? 'Needed local support for implementation & maintenance of D365 Finance system' : 'Butuh dukungan lokal untuk implementasi & maintenance sistem D365 Finance' }}',
                        solution: '{{ $isEn ? 'Local D365 managed support backed by Romulus Digital regional capability' : 'Managed support D365 berbasis lokal dengan dukungan regional Romulus Digital' }}',
                        implementation: '{{ $isEn ? 'Configuration & customization of D365 Finance, integration with Power BI/Power Automate/AI Builder' : 'Konfigurasi & kustomisasi D365 Finance, integrasi Power BI/Power Automate/AI Builder' }}',
                        impact: '{{ $isEn ? 'Multi-market support across 5 Southeast Asian countries' : 'Dukungan multi-market di 5 negara Asia Tenggara' }}'
                    },
                    {
                        id: 9,
                        slug: 'hse-operations-platform',
                        title: 'HSE & Operations Platform',
                        tag: 'OPERATING SYSTEM',
                        category: 'enterprise',
                        img: '{{ asset('assets/studi_kasus/hse.png') }}',
                        challenge: '{{ $isEn ? 'HSE reporting & operational safety were manual & fragmented' : 'Pelaporan HSE & keselamatan operasional masih manual & terpisah-pisah' }}',
                        solution: '{{ $isEn ? 'Dedicated HSE platform for digital incident reporting & compliance tracking' : 'Platform HSE khusus untuk pelaporan insiden digital & compliance tracking' }}',
                        implementation: '{{ $isEn ? 'Incident tracking, safety checklist, compliance dashboard, real-time alert, audit trail' : 'Incident tracking, safety checklist, compliance dashboard, alert real-time, audit trail' }}',
                        impact: '{{ $isEn ? 'Faster incident response' : 'Respons insiden lebih cepat' }}'
                    },
                    {
                        id: 10,
                        slug: '360-finance-support',
                        title: '360 Finance Support & Managed Services',
                        tag: 'MANAGED SUPPORT',
                        category: 'enterprise',
                        img: '{{ asset('assets/studi_kasus/360_finance.png') }}',
                        challenge: '{{ $isEn ? 'Needed system modernization for online & offline customer engagement during pandemic' : 'Perlu modernisasi sistem untuk engagement pelanggan online & offline saat pandemi' }}',
                        solution: '{{ $isEn ? 'Omni-channel digital platform with integrated POS, kiosk, e-commerce & CRM' : 'Platform digital omni-channel dengan POS, kios, e-commerce & CRM terintegrasi' }}',
                        implementation: '{{ $isEn ? 'Built on Microsoft Power Platform & Dynamics 365, iteratively developed every 2-4 months' : 'Dibangun di atas Microsoft Power Platform & Dynamics 365, dikembangkan bertahap tiap 2-4 bulan' }}',
                        impact: '{{ $isEn ? 'More efficient transaction tracking' : 'Tracking transaksi lebih efisien' }}'
                    }
                ],

                get filteredItems() {
                    if (this.activeFilter === 'semua') return this.items;
                    return this.items.filter(i => i.category === this.activeFilter);
                },
                get totalPages() {
                    return Math.ceil(this.filteredItems.length / this.pageSize) || 1;
                },
                get paginatedItems() {
                    let start = (this.currentPage - 1) * this.pageSize;
                    return this.filteredItems.slice(start, start + this.pageSize);
                },
                nextPage() {
                    if (this.currentPage < this.totalPages) this.currentPage++;
                },
                prevPage() {
                    if (this.currentPage > 1) this.currentPage--;
                },
                goToPage(p) {
                    this.currentPage = p;
                }
            }">

            <!-- Header & Filter Dropdown -->
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-10">
                <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 tracking-tight">
                    {{ $isEn ? 'Explore All Case Studies' : 'Eksplorasi Semua Studi Kasus' }}
                </h2>
                <div class="relative inline-block">
                    <select x-model="activeFilter" @change="currentPage = 1"
                        class="appearance-none bg-white border border-slate-200 text-slate-700 text-sm font-medium py-2.5 pl-4 pr-10 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#12AED0]/20 cursor-pointer min-w-[180px]">
                        <option value="semua">{{ $isEn ? 'All Portfolios' : 'Semua Portofolio' }}</option>
                        <option value="education">Education</option>
                        <option value="enterprise">Enterprise / AI</option>
                    </select>
                    <span
                        class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none text-sm">
                        keyboard_arrow_down
                    </span>
                </div>
            </div>

            <!-- Grid Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <template x-for="card in paginatedItems" :key="card.id">
                    <div
                        class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col justify-between">
                        <div>
                            <!-- Link Gambar Card -->
                            <a :href="baseUrl + '/' + card.slug"
                                class="block h-48 w-full overflow-hidden bg-slate-100 relative group">
                                <img :src="card.img" :alt="card.title"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                            </a>
                            <div class="p-6 space-y-4">
                                <span class="text-[11px] font-bold tracking-widest text-[#0284C7] uppercase block"
                                    x-text="card.tag"></span>

                                <!-- Link Judul Card -->
                                <a :href="baseUrl + '/' + card.slug" class="block">
                                    <h3 class="text-xl font-bold text-slate-900 hover:text-[#12AED0] transition-colors"
                                        x-text="card.title"></h3>
                                </a>

                                <div class="space-y-3 text-xs leading-relaxed text-slate-600">
                                    <div>
                                        <div class="font-bold text-slate-800 flex items-center gap-1.5 mb-1">
                                            <span
                                                class="material-symbols-outlined text-[15px] text-slate-500">help_outline</span>
                                            {{ $isEn ? 'Challenge' : 'Tantangan' }}
                                        </div>
                                        <p x-text="card.challenge"></p>
                                    </div>
                                    <div>
                                        <div class="font-bold text-slate-800 flex items-center gap-1.5 mb-1">
                                            <span
                                                class="material-symbols-outlined text-[15px] text-slate-500">lightbulb</span>
                                            {{ $isEn ? 'Solution' : 'Solusi' }}
                                        </div>
                                        <p x-text="card.solution"></p>
                                    </div>
                                    <div>
                                        <div class="font-bold text-slate-800 flex items-center gap-1.5 mb-1">
                                            <span
                                                class="material-symbols-outlined text-[15px] text-slate-500">settings</span>
                                            {{ $isEn ? 'Implementation' : 'Implementasi' }}
                                        </div>
                                        <p x-text="card.implementation"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 pb-6 pt-2 space-y-3">
                            <div class="bg-[#F0F4F8] text-[#1E293B] border-l-4 border-[#84CC16] px-4 py-3 text-sm font-normal text-left"
                                x-text="card.impact">
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Pagination Bar Interaktif -->
            <div class="mt-12 flex justify-center items-center gap-3" x-show="totalPages > 1">
                <button @click="prevPage()" :disabled="currentPage === 1"
                    :class="currentPage === 1 ? 'opacity-40 cursor-not-allowed border-slate-200 text-slate-300' :
                        'border-[#12AED0] text-[#12AED0] hover:bg-cyan-50'"
                    class="w-9 h-9 rounded-lg border bg-white flex items-center justify-center transition-all shadow-sm">
                    <span class="material-symbols-outlined text-base font-bold">chevron_left</span>
                </button>

                <div class="flex items-center gap-2 px-1">
                    <template x-for="p in totalPages" :key="p">
                        <button @click="goToPage(p)"
                            :class="currentPage === p ? 'w-5 bg-[#12AED0]' : 'w-2 bg-slate-300 hover:bg-slate-400'"
                            class="h-2 rounded-full transition-all duration-300"></button>
                    </template>
                </div>

                <button @click="nextPage()" :disabled="currentPage === totalPages"
                    :class="currentPage === totalPages ? 'opacity-40 cursor-not-allowed border-slate-200 text-slate-300' :
                        'border-[#12AED0] text-[#12AED0] hover:bg-cyan-50'"
                    class="w-9 h-9 rounded-lg border bg-white flex items-center justify-center transition-all shadow-sm">
                    <span class="material-symbols-outlined text-base font-bold">chevron_right</span>
                </button>
            </div>
        </section>

        <!-- Bottom CTA Section -->
        <section class="py-20 bg-[#eff4f7] border-t border-slate-100 text-center">
            <div class="max-w-2xl mx-auto px-margin-mobile space-y-8">
                <h2 class="text-3xl md:text-[38px] font-extrabold text-[#031A44] tracking-tight leading-tight">
                    {!! $isEn
                        ? 'Ready to Build Your <br class="sm:hidden" /> <span class="text-[#12AED0]">Success Story?</span>'
                        : 'Siap Membangun Kisah <br class="sm:hidden" /> <span class="text-[#12AED0]">Sukses Anda?</span>' !!}
                </h2>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-2">
                    <a href="{{ route('contact' . ($isEn ? '.en' : '')) }}"
                        class="w-full sm:w-auto bg-[#12AED0] text-white font-semibold px-8 py-3.5 rounded-full text-[15px] hover:opacity-90 transition-all shadow-sm">
                        {{ $isEn ? 'Start Free Consultation' : 'Mulai Konsultasi Gratis' }}
                    </a>
                    <a href="{{ route('solutions' . ($isEn ? '.en' : '')) }}"
                        class="w-full sm:w-auto bg-white border border-slate-200 text-[#031A44] font-semibold px-8 py-3.5 rounded-full text-[15px] hover:bg-slate-50 transition-all shadow-sm">
                        {{ $isEn ? 'View Solutions' : 'Lihat Layanan' }}
                    </a>
                </div>
            </div>
        </section>
    </main>

    @include('partials.footer')

    <script>
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header.fixed');
            if (header) {
                if (window.scrollY > 50) {
                    header.classList.add('shadow-md', 'h-16');
                    header.classList.remove('h-20');
                } else {
                    header.classList.remove('shadow-md', 'h-16');
                    header.classList.add('h-20');
                }
            }
        });
    </script>
</body>

</html>
