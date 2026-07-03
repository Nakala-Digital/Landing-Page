<!DOCTYPE html>

<html class="scroll-smooth" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Portfolio | Nakala Digital</title>
    @include('partials.seo', [
        'title' => 'Portfolio | Nakala Digital',
        'description' =>
            'Explore client-neutral capability references for software development, AI, enterprise support, and digital solution conversations.',
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
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .bento-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .bento-card:hover {
            transform: translateY(-4px);
            border-color: #12AED0;
        }

        .glass-header {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
    </style>
</head>

<body
    class="bg-background text-on-background font-body-md selection:bg-primary-container selection:text-on-primary-container">
    <!-- TopNavBar -->
    @include('partials.navbar')
    <main class="pt-20">
        <!-- Hero Section -->
        <section
            class="relative bg-surface-container-lowest overflow-hidden py-unit-xl border-b border-outline-variant">
            <div
                class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto flex flex-col items-start gap-unit-md relative z-10">
                <div
                    class="inline-flex items-center gap-unit-sm bg-tertiary-fixed text-on-tertiary-fixed px-unit-md py-unit-xs rounded-full font-label-sm text-label-sm uppercase tracking-widest">
                    <span class="material-symbols-outlined text-xs">book</span>
                    <span>{{ app()->getLocale() === 'en' ? 'Capability Reference' : 'Referensi Kapabilitas' }}</span>
                </div>
                <h1
                    class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-on-background max-w-3xl leading-tight">
                    {!! app()->getLocale() === 'en'
                        ? 'Capability references for <span class="text-primary">digital solutions.</span>'
                        : 'Referensi kapabilitas untuk <span class="text-primary">solusi digital.</span>' !!}
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    {{ app()->getLocale() === 'en' ? 'Client-neutral solution highlights prepared to support sales conversations, focused on capability, problem context, solution approach, and business value.' : 'Sorotan solusi yang netral untuk mendukung percakapan sales, berfokus pada kapabilitas, konteks problem, pendekatan solusi, dan value bisnis.' }}
                </p>
            </div>
            <!-- Decorative Elements -->
            <div class="absolute right-0 top-0 w-1/3 h-full opacity-5 pointer-events-none">
                <svg class="w-full h-full text-primary fill-current" viewbox="0 0 100 100">
                    <rect fill="none" height="80" stroke="currentColor" stroke-width="0.5" width="80" x="10"
                        y="10"></rect>
                    <rect fill="none" height="60" stroke="currentColor" stroke-width="0.5" width="60" x="20"
                        y="20"></rect>
                    <path d="M0 50 L100 50 M50 0 L50 100" stroke="currentColor" stroke-width="0.2"></path>
                </svg>
            </div>
        </section>
        <!-- Bento Grid Portfolio Section -->
        <section class="py-unit-xl px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 md:gap-8">
                <!-- 1. PPDB -->
                <div
                    class="md:col-span-8 group bento-card bg-surface-container-lowest border border-outline-variant/30 ring-1 ring-outline-variant/10 overflow-hidden rounded-2xl">
                    <div class="accent-strip bg-primary"></div>
                    <div class="flex flex-col md:flex-row h-full">
                        <div class="w-full md:w-1/2 p-unit-lg flex flex-col justify-between">
                            <div>
                                <span
                                    class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary uppercase tracking-widest bg-primary/10 px-unit-sm py-1 rounded-full mb-unit-md">{{ app()->getLocale() === 'en' ? 'Capability Reference' : 'Referensi Kapabilitas' }}</span>
                                <h3 class="font-headline-h3 text-headline-h3 mb-unit-md">PPDB / LMS</h3>
                                <p class="text-on-surface-variant text-body-md mb-unit-lg">
                                    <span
                                        class="font-bold text-on-surface">{{ app()->getLocale() === 'en' ? 'Problem:' : 'Masalah:' }}</span>
                                    {{ app()->getLocale() === 'en' ? 'Admission and learning operations often rely on disconnected forms, spreadsheets, and manual validation.' : 'Operasional penerimaan dan pembelajaran sering bergantung pada formulir, spreadsheet, dan validasi manual yang terpisah.' }}
                                </p>
                                <div class="space-y-unit-sm border-t border-outline-variant pt-unit-md">
                                    <p class="text-label-sm uppercase font-bold text-outline">
                                        {{ app()->getLocale() === 'en' ? 'Solution' : 'Solusi' }}</p>
                                    <p class="text-on-surface">
                                        {{ app()->getLocale() === 'en' ? 'Secure PPDB and LMS workflow for registration, content delivery, status tracking, and admin review.' : 'Workflow PPDB dan LMS yang aman untuk registrasi, distribusi materi, pelacakan status, dan review admin.' }}
                                    </p>
                                    <p class="text-label-sm uppercase font-bold text-outline">
                                        {{ app()->getLocale() === 'en' ? 'Value' : 'Value' }}</p>
                                    <p class="text-primary font-bold">
                                        {{ app()->getLocale() === 'en' ? 'Clearer academic operations and stakeholder-ready reporting.' : 'Operasional akademik lebih jelas dan laporan yang siap untuk stakeholder.' }}
                                    </p>
                                </div>
                            </div>
                            <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=ppdb-lms"
                                class="mt-unit-lg text-primary font-button flex items-center gap-unit-xs group-hover:gap-unit-sm transition-all w-fit">{{ app()->getLocale() === 'en' ? 'Discuss Capability' : 'Diskusikan Kapabilitas' }}
                                <span class="material-symbols-outlined text-lg">arrow_forward</span></a>
                        </div>
                        <div class="w-full md:w-1/2 relative bg-surface-container h-64 md:h-auto overflow-hidden">
                            <img class="portfolio-img absolute inset-0 w-full h-full object-cover"
                                data-alt="A high-fidelity software mockup of a modern Indonesian public school admission dashboard. The UI is clean, using Nakala Digital's brand blue and white palette. In the background, a soft-focused modern school building is visible under bright daylight. The lighting is high-key, communicating transparency and institutional trust. Professional corporate high-contrast style with sharp edges."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDDjYUTUCC8m9pWJV1Nh4-wfC7b_EnyzOndB687zN9tswDCzugWKa7flgq88mWrxhsuTqXISszLc4vHwwmIJDodtShYhudRKPZTlsxnZSUGE7R86SczAsnAtxagjJwT_-ljISfkY062sdTH4SzslCEMqZjvPJEfTvP6lir7632rS6vTPThWJtCw6Lqzpu5iOuEMPxZDLqkSE5-23lqGK_g3TZf4N4FoCijbLArqzIk7JBB5PCJBnbvvOCaYl_PkFj2uCyqa06v7khIs" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-midnight-navy/40 via-transparent to-transparent md:bg-gradient-to-l">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 2. HRMS -->
                <div
                    class="md:col-span-4 group bento-card bg-surface-container-lowest border border-outline-variant/30 ring-1 ring-outline-variant/10 rounded-2xl p-unit-lg flex flex-col justify-between overflow-hidden">
                    <div class="accent-strip bg-tertiary"></div>
                    <div class="mb-unit-xl">
                        <span
                            class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary uppercase tracking-widest bg-primary/10 px-unit-sm py-1 rounded-full mb-unit-md">{{ app()->getLocale() === 'en' ? 'Capability Reference' : 'Referensi Kapabilitas' }}</span>
                        <h3 class="font-headline-h3 text-headline-h3 mb-unit-md">HRMS / Mahya</h3>
                        <p class="text-on-surface-variant text-body-md mb-unit-md">
                            <span
                                class="font-bold text-on-surface">{{ app()->getLocale() === 'en' ? 'Problem:' : 'Masalah:' }}</span>
                            {{ app()->getLocale() === 'en' ? 'HR teams need cleaner employee records, attendance visibility, approval flows, and payroll-ready inputs.' : 'Tim HR membutuhkan data karyawan yang rapi, visibilitas kehadiran, alur approval, dan input payroll yang siap digunakan.' }}
                        </p>
                    </div>
                    <div>
                        <div class="bg-surface p-unit-md rounded-lg border-t-4 border-primary mb-unit-md">
                            <p class="font-label-sm text-outline uppercase mb-1">
                                {{ app()->getLocale() === 'en' ? 'Solution' : 'Solusi' }}</p>
                            <p class="text-body-md">
                                {{ app()->getLocale() === 'en' ? 'Centralized HRMS for employee data, attendance, leave requests, approvals, and operational records.' : 'HRMS terpusat untuk data karyawan, kehadiran, pengajuan cuti, approval, dan catatan operasional.' }}
                            </p>
                            <p class="font-label-sm text-outline uppercase mt-unit-sm mb-1">
                                {{ app()->getLocale() === 'en' ? 'Value' : 'Value' }}</p>
                            <p class="text-body-md font-bold text-primary">
                                {{ app()->getLocale() === 'en' ? 'Better HR visibility, less manual follow-up, and stronger workforce governance.' : 'Visibilitas HR lebih baik, follow-up manual lebih sedikit, dan tata kelola SDM lebih kuat.' }}
                            </p>
                        </div>
                        <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=hrms-mahya"
                            class="text-primary font-button flex items-center gap-unit-xs group-hover:gap-unit-sm transition-all w-fit">{{ app()->getLocale() === 'en' ? 'Discuss Capability' : 'Diskusikan Kapabilitas' }}
                            <span class="material-symbols-outlined text-lg">arrow_forward</span></a>
                    </div>
                </div>
                <!-- 3. HSE -->
                <div
                    class="md:col-span-4 group bento-card bg-inverse-surface text-inverse-on-surface rounded-2xl p-unit-lg flex flex-col items-start gap-unit-md overflow-hidden">
                    <div class="accent-strip bg-tertiary-fixed"></div>
                    <span
                        class="bg-primary px-unit-md py-1 rounded-full font-label-sm text-white uppercase tracking-widest">{{ app()->getLocale() === 'en' ? 'Capability Reference' : 'Referensi Kapabilitas' }}</span>
                    <h3 class="font-headline-h3 text-headline-h3">HSE Platform</h3>
                    <p class="text-surface-variant text-body-md">
                        <span class="font-bold text-white">{{ app()->getLocale() === 'en' ? 'Problem:' : 'Masalah:' }}</span>
                        {{ app()->getLocale() === 'en' ? 'Safety observations, incident notes, evidence, and corrective actions are difficult to trace when handled manually.' : 'Observasi safety, catatan insiden, bukti, dan tindakan korektif sulit ditelusuri saat dikelola manual.' }}
                    </p>
                    <div class="space-y-unit-sm">
                        <p class="text-surface-variant">
                            <span class="font-bold text-tertiary">{{ app()->getLocale() === 'en' ? 'Solution:' : 'Solusi:' }}</span>
                            {{ app()->getLocale() === 'en' ? 'Digital reporting, evidence capture, action ownership, and follow-up monitoring.' : 'Pelaporan digital, dokumentasi bukti, kepemilikan tindakan, dan monitoring tindak lanjut.' }}
                        </p>
                        <p class="text-surface-variant">
                            <span class="font-bold text-tertiary">{{ app()->getLocale() === 'en' ? 'Value:' : 'Value:' }}</span>
                            {{ app()->getLocale() === 'en' ? 'Safer operations, clearer accountability, and audit-ready safety documentation.' : 'Operasional lebih aman, akuntabilitas lebih jelas, dan dokumentasi safety yang siap diaudit.' }}
                        </p>
                    </div>
                    <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=hse-safety-tracker"
                        class="mt-auto text-tertiary font-button flex items-center gap-unit-xs group-hover:gap-unit-sm transition-all w-fit">{{ app()->getLocale() === 'en' ? 'Discuss Capability' : 'Diskusikan Kapabilitas' }}
                        <span class="material-symbols-outlined text-lg">arrow_forward</span></a>
                </div>
                <!-- 4. WargaKas -->
                <div
                    class="md:col-span-8 group bento-card bg-surface-container-lowest border border-outline-variant/30 ring-1 ring-outline-variant/10 overflow-hidden rounded-2xl">
                    <div class="accent-strip bg-tertiary-fixed-dim"></div>
                    <div class="flex flex-col md:flex-row-reverse h-full">
                        <div class="w-full md:w-1/2 p-unit-lg flex flex-col justify-between">
                            <div>
                                <span
                                    class="inline-flex items-center gap-1 font-label-sm text-label-sm text-tertiary-fixed-dim uppercase tracking-widest bg-tertiary-fixed/20 px-unit-sm py-1 rounded-full mb-unit-md">{{ app()->getLocale() === 'en' ? 'Solution Highlight' : 'Sorotan Solusi' }}</span>
                                <h3 class="font-headline-h3 text-headline-h3 mb-unit-md">WargaKas</h3>
                                <p class="text-on-surface-variant text-body-md mb-unit-lg">
                                    <span
                                        class="font-bold text-on-surface">{{ app()->getLocale() === 'en' ? 'Problem:' : 'Masalah:' }}</span>
                                    {{ app()->getLocale() === 'en' ? 'Community finance teams need transparent records for dues, shared funds, member updates, and admin controls.' : 'Tim keuangan komunitas membutuhkan catatan transparan untuk iuran, dana bersama, update anggota, dan kontrol admin.' }}
                                </p>
                                <div class="space-y-unit-sm border-t border-outline-variant pt-unit-md">
                                    <p class="text-label-sm uppercase font-bold text-outline">
                                        {{ app()->getLocale() === 'en' ? 'Solution' : 'Solusi' }}</p>
                                    <p class="text-on-surface">
                                        {{ app()->getLocale() === 'en' ? 'Digital ledger and collection workflow with role-based access for admins and members.' : 'Ledger digital dan workflow penagihan dengan akses berbasis peran untuk admin dan anggota.' }}
                                    </p>
                                    <p class="text-label-sm uppercase font-bold text-outline">
                                        {{ app()->getLocale() === 'en' ? 'Value' : 'Value' }}</p>
                                    <p class="text-primary font-bold">
                                        {{ app()->getLocale() === 'en' ? 'Trusted shared-fund records and simpler routine cash management.' : 'Catatan dana bersama yang lebih tepercaya dan pengelolaan kas rutin yang lebih sederhana.' }}
                                    </p>
                                </div>
                            </div>
                            <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=wargakas-mobile"
                                class="mt-unit-lg text-primary font-button flex items-center gap-unit-xs group-hover:gap-unit-sm transition-all w-fit">{{ app()->getLocale() === 'en' ? 'Discuss Capability' : 'Diskusikan Kapabilitas' }}
                                <span class="material-symbols-outlined text-lg">arrow_forward</span></a>
                        </div>
                        <div class="w-full md:w-1/2 relative bg-surface-container h-64 md:h-auto overflow-hidden">
                            <img class="portfolio-img absolute inset-0 w-full h-full object-cover"
                                data-alt="A close-up shot of a smartphone displaying a sleek fintech application interface with bright lime green accents. The phone is held by a person in a modern urban workspace in Jakarta, with city lights blurred in the background. The lighting is vibrant and energetic, reflecting a tech-forward society. The UI design follows a rigid grid system and high-contrast color blocks."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDm2M0616JH6aYKMatKLlBn00XRFjy4muiu-AVHkmEZ4mquHBJyzTCnQv2hU8dpPeQy5zaZNyvF-cdieQKwEP-94c7rEDufUZ2V4UpOgBaSoSz-Uhzl77W8KZddcIgMsuRvxigMf-6eUAh2Bl7I9W_1pHTebLZIuPnf_TBOnz5I3AZJTd9IIw10cDh-RZD4Z5jgBiw2psnyRQHORyLQ63m97Fp3aIIFvzqCDQFwRcv7Mo3lPB-YWwYVDI2jZzLGSUMR6axa51Nr_cQa" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-midnight-navy/40 via-transparent to-transparent md:bg-gradient-to-r">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 5. AI Hiring -->
                <div
                    class="md:col-span-6 group bento-card bg-surface-container-lowest border border-outline-variant/30 ring-1 ring-outline-variant/10 rounded-2xl p-unit-lg flex flex-col overflow-hidden">
                    <div class="accent-strip bg-tertiary-fixed"></div>
                    <div class="flex flex-wrap justify-between items-start gap-unit-sm mb-unit-lg">
                        <h3 class="font-headline-h3 text-headline-h3">AI Hiring</h3>
                        <span
                            class="bg-tertiary-fixed text-on-tertiary-fixed px-unit-md py-1 rounded-full font-label-sm uppercase shrink-0 ml-unit-sm">{{ app()->getLocale() === 'en' ? 'Solution Highlight' : 'Sorotan Solusi' }}</span>
                    </div>
                    <p class="text-on-surface-variant text-body-md mb-unit-lg">
                        <span
                            class="font-bold text-on-surface">{{ app()->getLocale() === 'en' ? 'Problem:' : 'Masalah:' }}</span>
                        {{ app()->getLocale() === 'en' ? 'Recruitment teams spend significant time reviewing applications and matching candidates to role requirements.' : 'Tim rekrutmen membutuhkan banyak waktu untuk meninjau lamaran dan mencocokkan kandidat dengan kebutuhan posisi.' }}
                    </p>
                    <div class="bg-surface-container p-unit-md rounded-lg border border-outline-variant mb-unit-md">
                        <p class="font-label-sm uppercase text-primary">
                            {{ app()->getLocale() === 'en' ? 'Solution' : 'Solusi' }}</p>
                        <p class="text-body-md">
                            {{ app()->getLocale() === 'en' ? 'AI-assisted screening with fit summaries, shortlist workflows, and human review checkpoints.' : 'Screening berbantuan AI dengan ringkasan kecocokan, workflow shortlist, dan checkpoint review manusia.' }}
                        </p>
                        <p class="font-label-sm uppercase text-primary mt-unit-sm">
                            {{ app()->getLocale() === 'en' ? 'Value' : 'Value' }}</p>
                        <p class="text-body-md font-bold">
                            {{ app()->getLocale() === 'en' ? 'Faster preparation for early-stage hiring discussions with explainable review outputs.' : 'Persiapan diskusi hiring tahap awal lebih cepat dengan output review yang dapat dijelaskan.' }}
                        </p>
                    </div>
                    <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=ai-hiring-assistant"
                        class="mt-auto text-primary font-button flex items-center gap-unit-xs group-hover:gap-unit-sm transition-all w-fit">{{ app()->getLocale() === 'en' ? 'Discuss Capability' : 'Diskusikan Kapabilitas' }}
                        <span class="material-symbols-outlined text-lg">arrow_forward</span></a>
                </div>
                <!-- 6. AI Coach -->
                <div
                    class="md:col-span-6 bento-card bg-gradient-to-br from-primary/[0.06] to-surface-container-lowest border border-primary/20 ring-1 ring-primary/10 rounded-2xl p-unit-lg overflow-hidden relative group flex flex-col">
                    <div class="accent-strip bg-primary"></div>
                    <div class="mb-unit-xl text-center md:text-left relative z-10">
                        <span
                            class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary uppercase tracking-widest bg-primary/10 px-unit-sm py-1 rounded-full mb-unit-md">{{ app()->getLocale() === 'en' ? 'Solution Highlight' : 'Sorotan Solusi' }}</span>
                        <h3 class="font-headline-h3 text-headline-h3 mb-unit-md">AI Coach</h3>
                        <p class="text-on-surface-variant text-body-md mb-unit-md">
                            <span
                                class="font-bold text-on-surface">{{ app()->getLocale() === 'en' ? 'Problem:' : 'Masalah:' }}</span>
                            {{ app()->getLocale() === 'en' ? 'Teams need more personalized learning guidance, while coaching capacity is often limited.' : 'Tim membutuhkan panduan belajar yang lebih personal, sementara kapasitas coaching sering terbatas.' }}
                        </p>
                        <div class="bg-surface p-unit-md rounded-lg border border-outline-variant mb-unit-md text-left">
                            <p class="font-label-sm uppercase text-primary mb-1">
                                {{ app()->getLocale() === 'en' ? 'Solution' : 'Solusi' }}</p>
                            <p class="text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en' ? 'AI coach for contextual prompts, learning recommendations, practice feedback, and progress notes.' : 'AI coach untuk prompt kontekstual, rekomendasi pembelajaran, feedback latihan, dan catatan progres.' }}
                            </p>
                            <p class="font-label-sm uppercase text-primary mt-unit-sm mb-1">
                                {{ app()->getLocale() === 'en' ? 'Value' : 'Value' }}</p>
                            <p class="text-body-md text-on-surface font-bold">
                                {{ app()->getLocale() === 'en' ? 'Continuous development and more consistent learning support across teams.' : 'Pengembangan berkelanjutan dan bantuan belajar yang lebih konsisten di berbagai tim.' }}
                            </p>
                        </div>
                        <p class="text-on-surface-variant text-body-md mb-unit-md">
                            {{ app()->getLocale() === 'en' ? 'Designed as a discussion-ready learning support reference.' : 'Dirancang sebagai referensi dukungan pembelajaran yang siap didiskusikan.' }}
                        </p>
                        <div class="flex gap-unit-sm justify-center md:justify-start">
                            <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white">
                                <span class="material-symbols-outlined text-sm">smart_toy</span></div>
                            <div class="w-8 h-8 rounded-full bg-secondary flex items-center justify-center text-white">
                                <span class="material-symbols-outlined text-sm">school</span></div>
                        </div>
                    </div>
                    <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=personalized-ai-coach"
                        class="relative z-10 mt-auto text-primary font-button flex items-center justify-center md:justify-start gap-unit-xs group-hover:gap-unit-sm transition-all w-fit mx-auto md:mx-0">{{ app()->getLocale() === 'en' ? 'Discuss Capability' : 'Diskusikan Kapabilitas' }}
                        <span class="material-symbols-outlined text-lg">arrow_forward</span></a>
                    <div
                        class="absolute -right-10 -bottom-10 opacity-10 group-hover:scale-110 transition-transform duration-500 pointer-events-none">
                        <span class="material-symbols-outlined text-[160px]"
                            style="font-variation-settings: 'FILL' 1;">psychology</span>
                    </div>
                </div>
                <!-- 7. D365 Support -->
                <div
                    class="md:col-span-4 group bento-card bg-surface-container-lowest border border-outline-variant/30 ring-1 ring-outline-variant/10 rounded-2xl p-unit-lg flex flex-col overflow-hidden">
                    <div class="accent-strip bg-secondary"></div>
                    <div class="flex items-center gap-unit-sm mb-unit-md">
                        <span class="w-10 h-10 shrink-0 rounded-full bg-primary/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">hub</span>
                        </span>
                        <h3 class="font-headline-h3 text-headline-h3">D365 Support</h3>
                    </div>
                    <span
                        class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary uppercase tracking-widest bg-primary/10 px-unit-sm py-1 rounded-full mb-unit-md w-fit">{{ app()->getLocale() === 'en' ? 'Capability Reference' : 'Referensi Kapabilitas' }}</span>
                    <p class="text-on-surface-variant text-body-md mb-unit-lg">
                        <span
                            class="font-bold text-on-surface">{{ app()->getLocale() === 'en' ? 'Problem:' : 'Masalah:' }}</span>
                        {{ app()->getLocale() === 'en' ? 'Enterprise teams need dependable support for D365 issues, change requests, integrations, and continuity.' : 'Tim enterprise membutuhkan dukungan andal untuk isu D365, change request, integrasi, dan kontinuitas.' }}
                    </p>
                    <div class="bg-surface-container p-unit-md rounded-lg border border-outline-variant mb-unit-md">
                        <p class="font-label-sm uppercase">
                            {{ app()->getLocale() === 'en' ? 'Solution' : 'Solusi' }}</p>
                        <p class="text-body-md font-bold">
                            {{ app()->getLocale() === 'en' ? 'Managed support for ticket triage, documentation, issue coordination, and enhancement planning.' : 'Dukungan terkelola untuk triage tiket, dokumentasi, koordinasi isu, dan perencanaan enhancement.' }}
                        </p>
                        <p class="font-label-sm uppercase mt-unit-sm">
                            {{ app()->getLocale() === 'en' ? 'Value' : 'Value' }}</p>
                        <p class="text-body-md font-bold text-primary">
                            {{ app()->getLocale() === 'en' ? 'More stable daily operations and more maintainable business-critical systems.' : 'Operasional harian lebih stabil dan sistem bisnis kritikal lebih mudah dipelihara.' }}
                        </p>
                    </div>
                    <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=dynamics-365-support"
                        class="mt-auto text-primary font-button flex items-center gap-unit-xs group-hover:gap-unit-sm transition-all w-fit">{{ app()->getLocale() === 'en' ? 'Discuss Capability' : 'Diskusikan Kapabilitas' }}
                        <span class="material-symbols-outlined text-lg">arrow_forward</span></a>
                </div>
                <!-- 8. Web & Portal Development -->
                <div
                    class="md:col-span-8 group bento-card bg-surface-container-lowest border border-outline-variant/30 ring-1 ring-outline-variant/10 rounded-2xl p-unit-lg flex flex-col md:flex-row gap-unit-lg items-center overflow-hidden">
                    <div class="accent-strip bg-primary"></div>
                    <div class="flex-1 order-2 md:order-1">
                        <span
                            class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary uppercase tracking-widest bg-primary/10 px-unit-sm py-1 rounded-full mb-unit-md">{{ app()->getLocale() === 'en' ? 'Capability Reference' : 'Referensi Kapabilitas' }}</span>
                        <h3 class="font-headline-h3 text-headline-h3 mb-unit-md">Web &amp; Portal Development</h3>
                        <p class="text-on-surface-variant text-body-md mb-unit-md">
                            <span
                                class="font-bold text-on-surface">{{ app()->getLocale() === 'en' ? 'Problem:' : 'Masalah:' }}</span>
                            {{ app()->getLocale() === 'en' ? 'Business teams need portals that unify content, service requests, user access, and operational visibility.' : 'Tim bisnis membutuhkan portal yang menyatukan konten, permintaan layanan, akses pengguna, dan visibilitas operasional.' }}
                        </p>
                        <div class="flex flex-wrap gap-unit-sm mb-unit-md">
                            <span
                                class="px-unit-sm py-1 bg-surface-variant text-on-surface-variant text-label-sm rounded-full">{{ app()->getLocale() === 'en' ? 'Portal Workflow' : 'Workflow Portal' }}</span>
                            <span
                                class="px-unit-sm py-1 bg-surface-variant text-on-surface-variant text-label-sm rounded-full">{{ app()->getLocale() === 'en' ? 'Admin Access' : 'Akses Admin' }}</span>
                            <span
                                class="px-unit-sm py-1 bg-surface-variant text-on-surface-variant text-label-sm rounded-full">{{ app()->getLocale() === 'en' ? 'Integration Ready' : 'Siap Integrasi' }}</span>
                        </div>
                        <div class="bg-surface p-unit-md rounded-lg border border-outline-variant mb-unit-md">
                            <p class="font-label-sm uppercase text-primary mb-1">
                                {{ app()->getLocale() === 'en' ? 'Solution' : 'Solusi' }}</p>
                            <p class="text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en' ? 'Responsive web and portal development with admin workflows, authentication, integrations, and reporting-ready structure.' : 'Pengembangan web dan portal responsif dengan workflow admin, autentikasi, integrasi, dan struktur yang siap pelaporan.' }}
                            </p>
                            <p class="font-label-sm uppercase text-primary mt-unit-sm mb-1">
                                {{ app()->getLocale() === 'en' ? 'Value' : 'Value' }}</p>
                            <p class="text-body-md font-bold text-on-surface">
                                {{ app()->getLocale() === 'en' ? 'Self-service workflows and clearer digital communication for users, partners, or internal teams.' : 'Workflow self-service dan komunikasi digital yang lebih jelas untuk pengguna, partner, atau tim internal.' }}
                            </p>
                        </div>
                        <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=web-portal-development"
                            class="text-primary font-button flex items-center gap-unit-xs group-hover:gap-unit-sm transition-all w-fit">{{ app()->getLocale() === 'en' ? 'Discuss Capability' : 'Diskusikan Kapabilitas' }}
                            <span class="material-symbols-outlined text-lg">arrow_forward</span></a>
                    </div>
                    <div
                        class="w-full md:w-64 h-48 bg-surface rounded-xl border border-outline-variant overflow-hidden order-1 md:order-2 shrink-0">
                        <img class="portfolio-img w-full h-full object-cover"
                            data-alt="A clean web portal interface with organized content modules, request forms, and admin navigation in a professional blue and white visual style."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZEGho0ZXWrYACNka0PrjLxslCBfj6LJo_mRI11PKgIGzp7ZdJx9giE7_K1sBpy2rF1Fw3Mq2nm5HF_OmUXqzEfuv3hKFoiEn7bVmO_zDOTQ2q-I8jkbO3sTTAB9fDGG9MX8IicOtokZ7m-9U9TCCti7Bv_U6Q93v0a212AnnU4Ge19za8WEH5UWl0L4yLu9SR16ctsrQmu9wRkJHNcYVMWQdduV5oBVHKKk3_amJXnevYkcLQfRkr-P0Wk3dPrLxMZB8J8nirVrlu" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Partner Badge Section -->
        @include('partials.partner-badge')
        <!-- CTA Section -->
        <section class="py-unit-xl px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto text-center">
            <h2
                class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 mb-unit-lg">
                {!! app()->getLocale() === 'en'
                    ? 'Ready to discuss your <span class="text-primary">solution needs?</span>'
                    : 'Siap mendiskusikan <span class="text-primary">kebutuhan solusi Anda?</span>' !!}</h2>
            <div class="flex flex-col md:flex-row gap-unit-md justify-center">
                <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}"
                    class="bg-primary text-on-primary px-unit-xl py-unit-md rounded-lg font-button uppercase hover:scale-105 transition-transform inline-block">{{ app()->getLocale() === 'en' ? 'Discuss Your Project' : 'Diskusikan Proyek Anda' }}</a>
                <a href="{{ route('services' . (app()->getLocale() === 'en' ? '.en' : '')) }}"
                    class="border-2 border-on-background text-on-background px-unit-xl py-unit-md rounded-lg font-button uppercase hover:bg-on-background hover:text-surface transition-colors inline-block">{{ app()->getLocale() === 'en' ? 'View Our Services' : 'Lihat Layanan' }}</a>
            </div>
        </section>
    </main>
    <!-- Footer -->
    @include('partials.footer')
    <script>
        // Micro-interactions
        document.querySelectorAll('.bento-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                // Potential for lightweight JS effects if needed
            });
        });

        // Simple scroll spy for header opacity
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
