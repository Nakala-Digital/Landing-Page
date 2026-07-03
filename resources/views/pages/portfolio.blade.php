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
        @php
            $locale = app()->getLocale();
            $localeSuffix = $locale === 'en' ? '.en' : '';
            $portfolioItems = [
                [
                    'badge' => ['en' => 'Capability Reference', 'id' => 'Referensi Kapabilitas'],
                    'title' => 'PPDB / LMS',
                    'project' => 'ppdb-lms',
                    'problem' => [
                        'en' => 'Admission and learning operations often rely on disconnected forms, spreadsheets, and manual validation.',
                        'id' => 'Operasional penerimaan dan pembelajaran sering bergantung pada formulir, spreadsheet, dan validasi manual yang terpisah.',
                    ],
                    'solution' => [
                        'en' => 'Secure PPDB and LMS workflow for registration, content delivery, status tracking, and admin review.',
                        'id' => 'Workflow PPDB dan LMS yang aman untuk registrasi, distribusi materi, pelacakan status, dan review admin.',
                    ],
                    'value' => [
                        'en' => 'Clearer academic operations and stakeholder-ready reporting.',
                        'id' => 'Operasional akademik lebih jelas dan laporan yang siap untuk stakeholder.',
                    ],
                ],
                [
                    'badge' => ['en' => 'Capability Reference', 'id' => 'Referensi Kapabilitas'],
                    'title' => 'HRMS / Mahya',
                    'project' => 'hrms-mahya',
                    'problem' => [
                        'en' => 'HR teams need cleaner employee records, attendance visibility, approval flows, and payroll-ready inputs.',
                        'id' => 'Tim HR membutuhkan data karyawan yang rapi, visibilitas kehadiran, alur approval, dan input payroll yang siap digunakan.',
                    ],
                    'solution' => [
                        'en' => 'Centralized HRMS for employee data, attendance, leave requests, approvals, and operational records.',
                        'id' => 'HRMS terpusat untuk data karyawan, kehadiran, pengajuan cuti, approval, dan catatan operasional.',
                    ],
                    'value' => [
                        'en' => 'Better HR visibility, less manual follow-up, and stronger workforce governance.',
                        'id' => 'Visibilitas HR lebih baik, follow-up manual lebih sedikit, dan tata kelola SDM lebih kuat.',
                    ],
                ],
                [
                    'badge' => ['en' => 'Capability Reference', 'id' => 'Referensi Kapabilitas'],
                    'title' => 'HSE Platform',
                    'project' => 'hse-platform',
                    'problem' => [
                        'en' => 'Safety observations, incident notes, evidence, and corrective actions are difficult to trace when handled manually.',
                        'id' => 'Observasi safety, catatan insiden, bukti, dan tindakan korektif sulit ditelusuri saat dikelola manual.',
                    ],
                    'solution' => [
                        'en' => 'Digital reporting, evidence capture, action ownership, and follow-up monitoring.',
                        'id' => 'Pelaporan digital, dokumentasi bukti, kepemilikan tindakan, dan monitoring tindak lanjut.',
                    ],
                    'value' => [
                        'en' => 'Safer operations, clearer accountability, and audit-ready safety documentation.',
                        'id' => 'Operasional lebih aman, akuntabilitas lebih jelas, dan dokumentasi safety yang siap diaudit.',
                    ],
                ],
                [
                    'badge' => ['en' => 'Solution Highlight', 'id' => 'Sorotan Solusi'],
                    'title' => 'WargaKas',
                    'project' => 'wargakas-mobile',
                    'problem' => [
                        'en' => 'Community finance teams need transparent records for dues, shared funds, member updates, and admin controls.',
                        'id' => 'Tim keuangan komunitas membutuhkan catatan transparan untuk iuran, dana bersama, update anggota, dan kontrol admin.',
                    ],
                    'solution' => [
                        'en' => 'Digital ledger and collection workflow with role-based access for admins and members.',
                        'id' => 'Ledger digital dan workflow penagihan dengan akses berbasis peran untuk admin dan anggota.',
                    ],
                    'value' => [
                        'en' => 'Trusted shared-fund records and simpler routine cash management.',
                        'id' => 'Catatan dana bersama yang lebih tepercaya dan pengelolaan kas rutin yang lebih sederhana.',
                    ],
                ],
                [
                    'badge' => ['en' => 'Solution Highlight', 'id' => 'Sorotan Solusi'],
                    'title' => 'AI Hiring',
                    'project' => 'ai-hiring-assistant',
                    'problem' => [
                        'en' => 'Recruitment teams spend significant time reviewing applications and matching candidates to role requirements.',
                        'id' => 'Tim rekrutmen membutuhkan banyak waktu untuk meninjau lamaran dan mencocokkan kandidat dengan kebutuhan posisi.',
                    ],
                    'solution' => [
                        'en' => 'AI-assisted screening with fit summaries, shortlist workflows, and human review checkpoints.',
                        'id' => 'Screening berbantuan AI dengan ringkasan kecocokan, workflow shortlist, dan checkpoint review manusia.',
                    ],
                    'value' => [
                        'en' => 'Faster preparation for early-stage hiring discussions with explainable review outputs.',
                        'id' => 'Persiapan diskusi hiring tahap awal lebih cepat dengan output review yang dapat dijelaskan.',
                    ],
                ],
                [
                    'badge' => ['en' => 'Solution Highlight', 'id' => 'Sorotan Solusi'],
                    'title' => 'AI Coach',
                    'project' => 'personalized-ai-coach',
                    'problem' => [
                        'en' => 'Teams need more personalized learning guidance, while coaching capacity is often limited.',
                        'id' => 'Tim membutuhkan panduan belajar yang lebih personal, sementara kapasitas coaching sering terbatas.',
                    ],
                    'solution' => [
                        'en' => 'AI coach for contextual prompts, learning recommendations, practice feedback, and progress notes.',
                        'id' => 'AI coach untuk prompt kontekstual, rekomendasi pembelajaran, feedback latihan, dan catatan progres.',
                    ],
                    'value' => [
                        'en' => 'Continuous development and more consistent learning support across teams.',
                        'id' => 'Pengembangan berkelanjutan dan bantuan belajar yang lebih konsisten di berbagai tim.',
                    ],
                ],
                [
                    'badge' => ['en' => 'Capability Reference', 'id' => 'Referensi Kapabilitas'],
                    'title' => 'D365 Support',
                    'project' => 'dynamics-365-support',
                    'problem' => [
                        'en' => 'Enterprise teams need dependable support for D365 issues, change requests, integrations, and continuity.',
                        'id' => 'Tim enterprise membutuhkan dukungan andal untuk isu D365, change request, integrasi, dan kontinuitas.',
                    ],
                    'solution' => [
                        'en' => 'Managed support for ticket triage, documentation, issue coordination, and enhancement planning.',
                        'id' => 'Dukungan terkelola untuk triage tiket, dokumentasi, koordinasi isu, dan perencanaan enhancement.',
                    ],
                    'value' => [
                        'en' => 'More stable daily operations and more maintainable business-critical systems.',
                        'id' => 'Operasional harian lebih stabil dan sistem bisnis kritikal lebih mudah dipelihara.',
                    ],
                ],
                [
                    'badge' => ['en' => 'Capability Reference', 'id' => 'Referensi Kapabilitas'],
                    'title' => 'Web & Portal Development',
                    'project' => 'web-portal-development',
                    'problem' => [
                        'en' => 'Business teams need portals that unify content, service requests, user access, and operational visibility.',
                        'id' => 'Tim bisnis membutuhkan portal yang menyatukan konten, permintaan layanan, akses pengguna, dan visibilitas operasional.',
                    ],
                    'solution' => [
                        'en' => 'Responsive web and portal development with admin workflows, authentication, integrations, and reporting-ready structure.',
                        'id' => 'Pengembangan web dan portal responsif dengan workflow admin, autentikasi, integrasi, dan struktur yang siap pelaporan.',
                    ],
                    'value' => [
                        'en' => 'Self-service workflows and clearer digital communication for users, partners, or internal teams.',
                        'id' => 'Workflow self-service dan komunikasi digital yang lebih jelas untuk pengguna, partner, atau tim internal.',
                    ],
                ],
            ];
        @endphp
        <!-- Bento Grid Portfolio Section -->
        <section class="py-unit-xl px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                @foreach ($portfolioItems as $item)
                    <article
                        class="group bento-card bg-surface-container-lowest border border-outline-variant/30 ring-1 ring-outline-variant/10 rounded-2xl p-unit-lg flex flex-col min-h-[460px]">
                        <span
                            class="inline-flex items-center bg-tertiary-fixed text-on-tertiary-fixed px-unit-md py-unit-xs rounded-full font-label-sm text-label-sm uppercase tracking-widest mb-unit-md w-fit">
                            {{ $item['badge'][$locale] }}
                        </span>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-surface mb-unit-md">
                            {{ $item['title'] }}
                        </h3>
                        <div class="space-y-unit-md text-on-surface-variant text-body-md">
                            <p>
                                <span class="font-bold text-on-surface">{{ $locale === 'en' ? 'Problem:' : 'Masalah:' }}</span>
                                {{ $item['problem'][$locale] }}
                            </p>
                            <div class="space-y-unit-sm border-t border-outline-variant pt-unit-md">
                                <p class="text-label-sm uppercase font-bold text-outline">
                                    {{ $locale === 'en' ? 'Solution' : 'Solusi' }}
                                </p>
                                <p class="text-on-surface">
                                    {{ $item['solution'][$locale] }}
                                </p>
                                <p class="text-label-sm uppercase font-bold text-outline mt-unit-sm">
                                    Value
                                </p>
                                <p class="text-primary font-bold">
                                    {{ $item['value'][$locale] }}
                                </p>
                            </div>
                        </div>
                        <a href="{{ route('contact' . $localeSuffix) }}?project={{ $item['project'] }}"
                            class="mt-auto pt-unit-lg text-primary font-button flex items-center gap-unit-xs group-hover:gap-unit-sm transition-all w-fit">
                            {{ $locale === 'en' ? 'Discuss Capability' : 'Diskusikan Kapabilitas' }}
                            <span class="material-symbols-outlined text-lg">arrow_forward</span>
                        </a>
                    </article>
                @endforeach
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
