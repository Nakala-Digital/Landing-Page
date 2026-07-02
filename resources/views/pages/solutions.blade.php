<!DOCTYPE html>

<html class="light" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ app()->getLocale() === 'en' ? 'Solutions | Nakala Digital' : 'Solusi | Nakala Digital' }}</title>
    @include('partials.seo', [
    'title' => app()->getLocale() === 'en' ? 'Solutions | Nakala Digital' : 'Solusi | Nakala Digital',
    'description' =>
    app()->getLocale() === 'en'
    ? 'Explore Nakala Digital solutions for AI hiring, HRMS, HSE operations, vendor portals, engagement, education, and
    performance coaching.'
    : 'Jelajahi solusi Nakala Digital untuk AI hiring, HRMS, operasional HSE, portal vendor, engagement, edukasi, dan
    coaching performa.',
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
                    "headline-h1-mobile": ["64px", {
                        "lineHeight": "1.2",
                        "fontWeight": "700"
                    }],
                    "headline-h2": ["40px", {
                        "lineHeight": "1.5",
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
    </script>
    <style>
    .material-symbols-outlined {
        font-variation-settings: 'FILL'0, 'wght'400, 'GRAD'0, 'opsz'24;
    }

    .solution-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    </style>
</head>

<body class="bg-background text-on-background font-body-md">
    @include('partials.navbar')
    <main class="pt-20">

        <!-- Hero Section -->
        <section
            class="pt-unit-lg pb-unit-xl lg:pt-unit-xl lg:pb-32 px-margin-mobile md:px-margin-desktop bg-surface-container-low overflow-hidden">
            <div class="max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-2 gap-gutter items-center">
                <div class="relative z-10">
                    <div
                        class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-4 py-1.5 rounded-full font-label-sm text-label-sm uppercase tracking-widest mb-unit-lg">
                        <span class="material-symbols-outlined text-[16px]">bolt</span>
                        {{ app()->getLocale() === 'en' ? 'Tailored Digital Excellence' : 'Keunggulan Digital yang Disesuaikan' }}
                    </div>
                    <h1
                        class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-on-background mb-unit-md leading-tight">
                        {{ app()->getLocale() === 'en' ? 'Digital solutions' : 'Solusi digital' }} <span
                            class="text-primary">{{ app()->getLocale() === 'en' ? 'tailored' : 'yang disesuaikan' }}</span>
                        {{ app()->getLocale() === 'en' ? 'to business needs' : 'dengan kebutuhan bisnis' }}
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant mb-unit-lg max-w-xl">
                        {{ app()->getLocale() === 'en'
                            ? 'Digital solutions ready to adapt to your business needs, improving operational efficiency and sustainable growth.'
                            : 'Solusi digital yang siap disesuaikan dengan kebutuhan bisnis Anda, meningkatkan efisiensi operasional dan pertumbuhan berkelanjutan.' }}
                    </p>
                    <div class="flex flex-wrap gap-unit-md">
                        <button
                            class="bg-primary text-on-primary px-unit-lg py-unit-md rounded-lg font-button text-button">{{ app()->getLocale() === 'en' ? 'Explore Solutions' : 'Jelajahi Solusi' }}</button>
                        <button
                            class="border-2 border-on-secondary-fixed text-on-secondary-fixed px-unit-lg py-unit-md rounded-lg font-button text-button">{{ app()->getLocale() === 'en' ? 'View Case Studies' : 'Lihat Studi Kasus' }}</button>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute -top-20 -right-20 w-80 h-80 bg-primary/5 rounded-full blur-3xl"></div>
                    <img alt="Platform Mockup"
                        class="rounded-xl shadow-2xl border border-outline-variant relative z-10 w-full object-cover h-[400px]"
                        data-alt="A high-fidelity digital dashboard mockup shown on a clean white laptop screen, positioned at an elegant angle. The interface features complex data visualizations, sleek navigation menus, and clean enterprise aesthetics in a professional light-mode setting. Soft daylight illuminates the scene from the side, creating subtle shadows and a premium, corporate tech-focused atmosphere. The overall composition is minimalist and authoritative."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFPWsSqZB8hiKpSGVy_jWZ7eEnJr7EoYxNuzzHplwocf1eYr5cwAoKX5T-P5RJtbVCsEMouFek11870Wr_jvct94bNTnwXnvYLGXjZdX9oFZlppC0yur0ddxU6aTXprqINg9_hiu_opgd9Z8APaLpqliC3kHbpZUK9TWErcf_Br2WV8h6XCOaNfwHxNbTe6Vds4dyKn5bO4IetclTUlApRCpMNNAWu6wFswHjcwQts3eZ4ejMzcP0dEnrHXbYrhYQlDOsTIE-5cIJA" />
                    <div
                        class="absolute bottom-unit-md left-unit-md z-20 hidden md:flex items-center gap-unit-sm rounded-lg border border-primary/40 bg-midnight-navy/95 px-unit-md py-unit-sm shadow-xl backdrop-blur">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-lg bg-tertiary-fixed text-on-tertiary-fixed">
                            <span class="material-symbols-outlined text-[22px]">trending_up</span>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold uppercase tracking-widest text-tertiary-fixed">
                                {{ app()->getLocale() === 'en' ? 'Operational Lift' : 'Peningkatan Operasi' }}
                            </p>
                            <span
                                class="font-bold text-white">{{ app()->getLocale() === 'en' ? '+45% Efficiency' : '+45% Efisiensi' }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @php
        <<<<<<< HEAD $locale=app()->getLocale();
            $detailRoute = $locale === 'en' ? 'solutions.detail.en' : 'solutions.detail';
            $solutionCases = config('solutions.cases');
            =======
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
            'en' => 'An AI-based recruitment platform that helps screen candidates, speed up the selection process,
            schedule
            interviews, and analyze recruitment.',
            'id' => 'Platform rekrutmen berbasis AI yang membantu menyaring kandidat, mempercepat proses seleksi,
            penjadwalan wawancara, dan analisis rekrutmen.',
            ],
            'challenge' => [
            'en' => 'Recruitment teams face high CV volume, inconsistent screening, and slow time-to-hire, creating poor
            candidate experience and missed talent.',
            'id' => 'Tim rekrutmen menghadapi volume CV tinggi, screening tidak konsisten, dan time-to-hire lambat
            sehingga
            pengalaman kandidat menurun dan talenta potensial terlewat.',
            ],
            'solution' => [
            'en' => 'Automate CV screening, score candidates against job criteria, and streamline end-to-end hiring
            workflows.',
            'id' => 'Mengotomasi screening CV, menilai kandidat berdasarkan kriteria posisi, dan merapikan workflow
            rekrutmen end-to-end.',
            ],
            'features' => [
            'en' => ['AI CV parsing and scoring', 'Job-fit ranking and automated shortlisting', 'Interview scheduling
            and
            recruiter dashboard', 'Candidate status portal and analytics'],
            'id' => ['Parsing dan scoring CV berbasis AI', 'Ranking job-fit dan shortlisting otomatis', 'Penjadwalan
            interview dan dashboard recruiter', 'Portal status kandidat dan analitik'],
            ],
            'impact' => [
            'en' => ['Reduced CV screening time by up to 80%', 'More consistent, bias-reduced evaluation', 'Faster
            time-to-hire and better candidate experience', 'Scalable for high-volume hiring across roles'],
            'id' => ['Waktu screening CV berkurang hingga 80%', 'Evaluasi lebih konsisten dan minim bias', 'Time-to-hire
            lebih cepat dan pengalaman kandidat membaik', 'Skalabel untuk rekrutmen volume tinggi lintas posisi'],
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
            'en' => 'Custom HRMS platform for attendance, leave, payroll, employee profiles, manager approvals, and HR
            reporting.',
            'id' => 'Platform HRMS custom untuk absensi, cuti, payroll, profil karyawan, approval manager, dan pelaporan
            HR.',
            ],
            'challenge' => [
            'en' => 'HR teams manage attendance, leave, payroll, and employee data manually across spreadsheets without
            a
            centralized system.',
            'id' => 'Tim HR mengelola absensi, cuti, payroll, dan data karyawan secara manual di banyak spreadsheet
            tanpa
            sistem terpusat.',
            ],
            'solution' => [
            'en' => 'Mahya centralizes HR operations with self-service access, approval workflows, and an HR admin
            dashboard.',
            'id' => 'Mahya memusatkan operasional HR dengan akses self-service, approval workflow, dan dashboard admin
            HR.',
            ],
            'features' => [
            'en' => ['Attendance and leave management', 'Payroll processing and employee profiles', 'Approval workflows
            and
            reporting dashboard', 'Mobile-friendly interface'],
            'id' => ['Manajemen absensi dan cuti', 'Proses payroll dan profil karyawan', 'Approval workflow dan
            dashboard
            reporting', 'Interface mobile-friendly'],
            ],
            'impact' => [
            'en' => ['Centralized HR data with real-time visibility', 'Significantly reduced manual HR processing',
            'Improved employee self-service experience', 'Ready for multi-entity deployment'],
            'id' => ['Data HR terpusat dengan visibilitas real-time', 'Proses manual HR berkurang signifikan',
            'Pengalaman
            self-service karyawan meningkat', 'Siap untuk deployment multi-entitas'],
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
            'en' => 'Digital platform for incident reporting, safety checklists, compliance dashboards, alerts, audit
            trails, and role-based access.',
            'id' => 'Platform digital untuk pelaporan insiden, safety checklist, dashboard kepatuhan, alert, audit
            trail,
            dan akses berbasis role.',
            ],
            'challenge' => [
            'en' => 'HSE compliance and safety reporting rely on manual forms, spreadsheets, and disconnected
            communication
            channels.',
            'id' => 'Kepatuhan HSE dan pelaporan keselamatan masih bergantung pada form manual, spreadsheet, dan kanal
            komunikasi yang terpisah.',
            ],
            'solution' => [
            'en' => 'A dedicated HSE operations platform enabling digital incident reporting, safety checklist
            management,
            and compliance tracking.',
            'id' => 'Platform operasional HSE khusus untuk pelaporan insiden digital, manajemen safety checklist, dan
            tracking kepatuhan.',
            ],
            'features' => [
            'en' => ['Incident reporting and tracking', 'Safety checklist management', 'Compliance dashboard and
            real-time
            alerts', 'Audit trail and role-based access'],
            'id' => ['Pelaporan dan tracking insiden', 'Manajemen safety checklist', 'Dashboard kepatuhan dan alert
            real-time', 'Audit trail dan akses berbasis role'],
            ],
            'impact' => [
            'en' => ['Faster incident response through real-time reporting', 'Improved HSE compliance visibility for
            management', 'Reduced risk of unreported safety incidents', 'Audit-ready documentation and reporting
            trail'],
            'id' => ['Respons insiden lebih cepat lewat pelaporan real-time', 'Visibilitas kepatuhan HSE lebih baik
            untuk
            manajemen', 'Risiko insiden keselamatan tidak terlapor berkurang', 'Dokumentasi dan reporting trail siap
            audit'],
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
            'en' => 'Digital cash management platform for residential communities covering billing, payment tracking,
            finance dashboards, and resident portals.',
            'id' => 'Platform manajemen kas digital untuk lingkungan hunian dengan billing, tracking pembayaran,
            dashboard
            finansial, dan portal warga.',
            ],
            'challenge' => [
            'en' => 'Residential communities manage monthly dues, facility fees, and cash flow through manual collection
            and
            informal records.',
            'id' => 'Komunitas hunian mengelola iuran bulanan, biaya fasilitas, dan arus kas lewat penagihan manual dan
            catatan informal.',
            ],
            'solution' => [
            'en' => 'Wargakas enables transparent billing, payment tracking, financial reporting, and resident-facing
            visibility.',
            'id' => 'Wargakas menghadirkan billing transparan, tracking pembayaran, laporan finansial, dan visibilitas
            untuk
            warga.',
            ],
            'features' => [
            'en' => ['Resident billing and invoicing', 'Payment tracking and expense management', 'Financial dashboard',
            'Resident portal and admin reporting'],
            'id' => ['Billing dan invoice warga', 'Tracking pembayaran dan manajemen pengeluaran', 'Dashboard
            finansial',
            'Portal warga dan laporan admin'],
            ],
            'impact' => [
            'en' => ['Transparent and auditable community finance', 'Reduced manual collection effort', 'Improved
            resident
            trust through real-time visibility', 'Scalable for multiple residential clusters'],
            'id' => ['Keuangan komunitas lebih transparan dan auditable', 'Beban penagihan manual berkurang',
            'Kepercayaan
            warga naik lewat visibilitas real-time', 'Skalabel untuk banyak cluster hunian'],
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
            'en' => 'End-to-end school admission and portal solution with online registration, document upload,
            verification
            workflow, and parent portal.',
            'id' => 'Solusi penerimaan siswa dan portal sekolah end-to-end dengan registrasi online, upload dokumen,
            workflow verifikasi, dan portal orang tua.',
            ],
            'challenge' => [
            'en' => 'Educational institutions still rely on manual paper-based admission processes, reducing
            transparency
            and parent experience during PPDB season.',
            'id' => 'Institusi pendidikan masih mengandalkan proses penerimaan manual berbasis kertas, sehingga
            transparansi
            dan pengalaman orang tua menurun saat PPDB.',
            ],
            'solution' => [
            'en' => 'A digital PPDB platform for online registration, document handling, real-time status tracking, and
            school website presence.',
            'id' => 'Platform PPDB digital untuk registrasi online, pengelolaan dokumen, tracking status real-time, dan
            website sekolah.',
            ],
            'features' => [
            'en' => ['Online registration forms', 'Document verification workflow', 'Admin dashboard and parent portal',
            'Public school website'],
            'id' => ['Form registrasi online', 'Workflow verifikasi dokumen', 'Dashboard admin dan portal orang tua',
            'Website publik sekolah'],
            ],
            'impact' => [
            'en' => ['More structured and auditable admission process', 'Improved parent experience with transparency',
            'Reduced admin workload through automated workflows', 'SIT/UAT documentation and BAST handover delivered'],
            'id' => ['Proses penerimaan lebih terstruktur dan auditable', 'Pengalaman orang tua membaik lewat
            transparansi',
            'Beban admin berkurang lewat workflow otomatis', 'Dokumentasi SIT/UAT dan BAST handover tersedia'],
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
            'en' => 'AI-powered coaching platform for personalized learning journeys, goal tracking, progress
            dashboards,
            and on-demand conversational coaching.',
            'id' => 'Platform coaching berbasis AI untuk learning journey personal, tracking target, dashboard progres,
            dan
            coaching percakapan on-demand.',
            ],
            'challenge' => [
            'en' => 'Organizations struggle to deliver consistent and scalable coaching for distributed teams where
            human
            coach access is limited or costly.',
            'id' => 'Organisasi sulit menghadirkan coaching yang konsisten dan skalabel untuk tim tersebar saat akses
            coach
            manusia terbatas atau mahal.',
            ],
            'solution' => [
            'en' => 'Deliver personalized learning journeys and coaching interactions through conversational AI and
            performance tracking.',
            'id' => 'Menghadirkan learning journey personal dan interaksi coaching melalui conversational AI serta
            tracking
            performa.',
            ],
            'features' => [
            'en' => ['AI coaching chatbot', 'Personalized learning paths', 'Goal setting and progress dashboards',
            'Manager
            visibility, content library, and reminders'],
            'id' => ['AI coaching chatbot', 'Learning path personal', 'Goal setting dan dashboard progres', 'Visibilitas
            manager, content library, dan reminder'],
            ],
            'impact' => [
            'en' => ['Scalable coaching without proportional cost increase', 'Personalized development for each
            employee',
            'Improved learning engagement through AI nudges', 'Real-time performance visibility for managers and HR'],
            'id' => ['Coaching skalabel tanpa kenaikan biaya proporsional', 'Pengembangan personal untuk tiap karyawan',
            'Engagement belajar meningkat lewat nudges AI', 'Visibilitas performa real-time untuk manager dan HR'],
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
            'en' => 'Local Indonesia-based support for Microsoft D365 Finance backed by Romulus Digital regional
            capability.',
            'id' => 'Dukungan lokal Indonesia untuk Microsoft D365 Finance dengan dukungan kapabilitas regional Romulus
            Digital.',
            ],
            'challenge' => [
            'en' => 'Enterprise clients running Microsoft ERP need local response, configuration support, reporting
            automation, and user adoption assistance.',
            'id' => 'Klien enterprise yang menjalankan Microsoft ERP membutuhkan respons lokal, dukungan konfigurasi,
            otomasi reporting, dan bantuan adopsi user.',
            ],
            'solution' => [
            'en' => 'D365 Finance configuration, customization support, module implementation assistance, and managed
            services.',
            'id' => 'Konfigurasi D365 Finance, dukungan kustomisasi, asistensi implementasi modul, dan managed
            services.',
            ],
            'features' => [
            'en' => ['D365 Finance module support', 'Power BI reporting integration', 'Power Automate workflow
            automation',
            'AI Builder integration and user training'],
            'id' => ['Dukungan modul D365 Finance', 'Integrasi reporting Power BI', 'Otomasi workflow Power Automate',
            'Integrasi AI Builder dan training user'],
            ],
            'impact' => [
            'en' => ['Faster response through dedicated managed service model', 'Bridge between Microsoft enterprise
            capability and local business needs', 'Flexible project-based or retainer engagement', 'Delivered with
            Romulus
            Digital certified Microsoft expertise'],
            'id' => ['Respons lebih cepat lewat model managed service khusus', 'Menjembatani kapabilitas Microsoft
            enterprise dengan kebutuhan bisnis lokal', 'Fleksibel untuk project-based atau retainer', 'Didukung
            expertise
            Microsoft tersertifikasi dari Romulus Digital'],
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
            'en' => 'AI-enabled solutions for GenAI applications, document intelligence, intelligent automation,
            dashboard
            analytics, and AI SaaS products.',
            'id' => 'Solusi berbasis AI untuk aplikasi GenAI, document intelligence, intelligent automation, dashboard
            analytics, dan produk AI SaaS.',
            ],
            'challenge' => [
            'en' => 'Organizations need to automate repetitive tasks, enhance decision-making, and embed intelligence
            into
            daily operations.',
            'id' => 'Organisasi perlu mengotomasi pekerjaan repetitif, meningkatkan pengambilan keputusan, dan
            menanamkan
            intelligence ke operasional harian.',
            ],
            'solution' => [
            'en' => 'Design and deploy GenAI workflows, AI-assisted operations, data pipelines, dashboards, and B2B AI
            SaaS
            platforms.',
            'id' => 'Merancang dan membangun workflow GenAI, operasi berbantuan AI, data pipeline, dashboard, dan
            platform
            AI SaaS B2B.',
            ],
            'features' => [
            'en' => ['Conversational AI and document intelligence', 'Intelligent automation and smart notifications',
            'AI
            SaaS platform development', 'Data analytics and Microsoft Power Platform integration'],
            'id' => ['Conversational AI dan document intelligence', 'Intelligent automation dan smart notification',
            'Pengembangan platform AI SaaS', 'Analitik data dan integrasi Microsoft Power Platform'],
            ],
            'impact' => [
            'en' => ['Reduced repetitive manual work', 'Better operational decision support', 'Automation opportunities
            mapped through AI readiness assessment', 'Scalable AI capability for enterprise workflows'],
            'id' => ['Pekerjaan manual repetitif berkurang', 'Decision support operasional lebih baik', 'Peluang otomasi
            dipetakan lewat AI readiness assessment', 'Kapabilitas AI skalabel untuk workflow enterprise'],
            ],
            'capability' => 'GenAI Applications, Intelligent Automation, Data & Analytics, AI SaaS',
            ],
            ];
            >>>>>>> 2803b4f (Hacker-Style Wording, Validate Brand Color,Why Nakala)
            @endphp

            <!-- Solutions Bento Grid -->
            <section class="py-unit-xl px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
                <div class="text-center mb-unit-xl">
                    <h2
                        class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-background mb-unit-sm">
                        <<<<<<< HEAD
                            {{ $locale === 'en' ? 'Solutions Built for Real Business Challenges' : 'Solusi untuk Tantangan Bisnis Nyata' }}
                            </h2>
                            <p class="text-on-surface-variant max-w-2xl mx-auto">
                                {{ $locale === 'en'
                        ? 'From HR to finance to education — practical digital solutions that solve real operational problems and drive measurable impact.'
                        : 'Dari HR hingga keuangan hingga pendidikan solusi digital praktis yang memecahkan masalah operasional nyata dan memberikan dampak terukur.' }}
                                =======
                                {{ $locale === 'en' ? 'Portfolio-Backed Solution Ecosystem' : 'Ekosistem Solusi Berbasis Portofolio' }}
                    </h2>
                    <p class="text-on-surface-variant max-w-2xl mx-auto">
                        {{ $locale === 'en'
                        ? 'Each solution below is built from the Nakala Digital x Romulus Digital portfolio and expertise, so every detail leads to a real implementation.'
                        : 'Setiap solusi di bawah ini disusun dari portofolio dan keahlian Nakala Digital x Romulus Digital, sehingga setiap detail mengarah pada implementasi yang nyata.' }}
                        >>>>>>> 2803b4f (Hacker-Style Wording, Validate Brand Color,Why Nakala)
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
                    @foreach ($solutionCases as $case)
                    <<<<<<< HEAD @php $isDark=$case['dark'] ?? false; $cardClass=$isDark
                        ? 'bg-on-background text-surface border border-outline'
                        : 'bg-surface border border-outline-variant' ; $bodyTextClass=$isDark ? 'text-surface-variant'
                        : 'text-on-surface-variant' ; $linkClass=$isDark ? 'text-tertiary-fixed' : 'text-primary' ;
                        @endphp <article
                        class="{{ $case['span'] }} {{ $cardClass }} rounded-xl p-unit-lg solution-card transition-all {{ $case['featured'] ?? false ? 'border-t-4 border-t-primary' : '' }}">
                        <div class="flex h-full flex-col">
                            <span
                                class="material-symbols-outlined {{ $linkClass }} text-4xl mb-unit-sm">{{ $case['icon'] }}</span>
                            <p
                                class="font-label-sm text-label-sm uppercase tracking-widest {{ $linkClass }} mb-unit-xs">
                                {{ $case['category'][$locale] }}
                            </p>
                            <h3
                                class="font-headline-h3 text-headline-h3 {{ $isDark ? 'text-white' : 'text-on-background' }}">
                                {{ $case['title'][$locale] }}
                            </h3>
                            <p class="{{ $bodyTextClass }} text-sm mb-unit-md">
                                {{ $case['headline'][$locale] }} {{ $case['summary'][$locale] }}
                            </p>
                            <div
                                class="{{ $isDark ? 'bg-white/10 border-white/20' : 'bg-surface-container-highest/30 border-outline-variant/50' }} p-unit-sm rounded border mb-unit-md">
                                <p class="text-xs">
                                    <strong>{{ $locale === 'en' ? 'For' : 'Untuk' }}:</strong>
                                    {{ implode(' · ', $case['who_it_helps'][$locale]) }}
                                </p>
                            </div>
                            <a class="{{ $linkClass }} font-bold text-sm inline-flex items-center gap-1 mt-auto"
                                href="{{ route($detailRoute, $case['id']) }}">
                                {{ $locale === 'en' ? 'View Details' : 'Lihat Detail' }}
                                <span class="material-symbols-outlined text-xs">arrow_forward</span>
                            </a>
                            =======
                            @php
                            $isDark = $case['dark'] ?? false;
                            $cardClass = $isDark
                            ? 'bg-on-background text-surface border border-outline'
                            : 'bg-surface border border-outline-variant';
                            $bodyTextClass = $isDark ? 'text-surface-variant' : 'text-on-surface-variant';
                            $linkClass = $isDark ? 'text-tertiary-fixed' : 'text-primary';
                            @endphp
                            <article
                                class="{{ $case['span'] }} {{ $cardClass }} rounded-xl p-unit-lg solution-card transition-all {{ ($case['featured'] ?? false) ? 'border-t-4 border-t-primary' : '' }}">
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
                                        class="{{ $isDark ? 'bg-white/10 border-white/20' : 'bg-surface-container-highest/30 border-outline-variant/50' }} p-unit-sm rounded border mb-unit-md">
                                        <p class="text-xs">
                                            <strong>{{ $locale === 'en' ? 'Capability' : 'Kapabilitas' }}:</strong>
                                            {{ $case['capability'] }}
                                        </p>
                                        >>>>>>> 2803b4f (Hacker-Style Wording, Validate Brand Color,Why Nakala)
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

            <!-- Partner Badge Section -->
            @include('partials.partner-badge')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- SideNavBar (Mobile Trigger Hidden) -->
    <div class="fixed inset-y-0 left-0 z-50 transform -translate-x-full lg:hidden bg-surface dark:bg-on-background h-full w-72 shadow-xl border-r border-outline-variant transition-transform duration-300"
        id="side-nav">
        <div class="p-unit-lg flex flex-col h-full">
            <div class="font-headline-h3 text-headline-h3 font-bold text-primary mb-1">Nakala Digital</div>
            <p class="text-[10px] uppercase text-on-surface-variant font-bold mb-unit-xl">
                {{ app()->getLocale() === 'en' ? 'Local Delivery, Regional Capability' : 'Delivery Lokal, Kapabilitas Regional' }}
            </p>
            <nav class="flex-grow space-y-unit-sm">
                <a class="flex items-center gap-unit-md p-unit-sm text-on-surface-variant hover:bg-surface-container-high rounded-lg transition-colors"
                    href="#">
                    <span class="material-symbols-outlined">home</span>
                    {{ app()->getLocale() === 'en' ? 'Home' : 'Beranda' }}
                </a>
                <a class="flex items-center gap-unit-md p-unit-sm bg-primary-container text-on-primary-container font-bold rounded-lg transition-colors"
                    href="#">
                    <span class="material-symbols-outlined">lightbulb</span>
                    {{ app()->getLocale() === 'en' ? 'Solutions' : 'Solusi' }}
                </a>
                <a class="flex items-center gap-unit-md p-unit-sm text-on-surface-variant hover:bg-surface-container-high rounded-lg transition-colors"
                    href="#">
                    <span class="material-symbols-outlined">work</span>
                    {{ app()->getLocale() === 'en' ? 'Portfolio' : 'Portofolio' }}
                </a>
                <a class="flex items-center gap-unit-md p-unit-sm text-on-surface-variant hover:bg-surface-container-high rounded-lg transition-colors"
                    href="#">
                    <span class="material-symbols-outlined">mail</span>
                    {{ app()->getLocale() === 'en' ? 'Contact' : 'Kontak' }}
                </a>
            </nav>
            <button
                class="bg-primary text-on-primary w-full py-unit-md rounded-lg font-button text-button mt-auto">{{ app()->getLocale() === 'en' ? 'Start Free Consultation' : 'Mulai Konsultasi Gratis' }}</button>
        </div>
    </div>
    <script>
    // Simple scroll behavior for Navbar
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
    </script>
</body>

</html>