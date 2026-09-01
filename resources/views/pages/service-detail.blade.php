@php
    $locale = app()->getLocale();
    $localeSuffix = $locale === 'en' ? '.en' : '';
    $p = $pillar;
@endphp

<!DOCTYPE html>
<html lang="{{ $locale }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ $p['title'][$locale] }} | Nakala Digital</title>
    @include('partials.seo', [
        'title' => $p['title'][$locale] . ' | Nakala Digital',
        'description' => $p['hero_description'][$locale],
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
                        "body-md": ["Poppins"],
                        button: ["Poppins"],
                        "headline-h1": ["Poppins"],
                        "headline-h2": ["Poppins"],
                        "headline-h3": ["Poppins"],
                        "label-sm": ["Poppins"]
                    },
                    fontSize: {
                        "body-md": ["16px", {
                            lineHeight: "1.6",
                            fontWeight: "400"
                        }],
                        button: ["15px", {
                            lineHeight: "1.0",
                            letterSpacing: "0.05em",
                            fontWeight: "600"
                        }],
                        "headline-h1": ["56px", {
                            lineHeight: "1.15",
                            fontWeight: "700"
                        }],
                        "headline-h2": ["40px", {
                            lineHeight: "1.25",
                            fontWeight: "600"
                        }],
                        "headline-h3": ["24px", {
                            lineHeight: "1.35",
                            fontWeight: "600"
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
    <style>
        .hero-grid-pattern {
            background-image:
                linear-gradient(rgba(18, 174, 208, 0.15) 2px, transparent 2px),
                linear-gradient(90deg, rgba(18, 174, 208, 0.15) 2px, transparent 2px);
            background-size: 150px 150px;
        }
        .hero-fade-mask {
            -webkit-mask-image: linear-gradient(to bottom, black 0%, black 65%, transparent 88%);
            mask-image: linear-gradient(to bottom, black 0%, black 65%, transparent 88%);
        }
        @media (min-width: 1024px) {
            .hero-image-mask {
                -webkit-mask-image: linear-gradient(90deg, transparent 19%, black 54%, black 100%);
                mask-image: linear-gradient(90deg, transparent 19%, black 54%, black 100%);
            }
        }
        .hero-orb {
            animation: hero-orb-float 14s ease-in-out infinite;
        }
        .hero-orb-delay {
            animation-delay: -7s;
        }
        @keyframes hero-orb-float {
            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }
            50% {
                transform: translate(24px, -24px) scale(1.05);
            }
        }
    </style>
</head>

<body class="bg-background text-on-background font-body-md">
    @include('partials.navbar')

    <main class="pt-20">

        {{-- ============================================================
             SECTION A: HERO
             ============================================================ --}}
        <section id="hero" class="relative overflow-x-clip bg-gradient-to-br from-surface-container-lowest via-surface to-primary/5 pt-unit-xl pb-unit-xl z-0">
            {{-- Dynamic Background (grid + orbs, matching the Detail Solusi hero) --}}
            <div class="hero-fade-mask absolute inset-x-0 top-0 -bottom-40 pointer-events-none" aria-hidden="true">
                <div class="hero-grid-pattern absolute inset-0"></div>
                <div class="hero-orb z-10 absolute top-[240px] -right-[180px] h-96 w-96 rounded-full bg-[rgba(18,174,208,0.37)] blur-[160px]"></div>
                <div class="hero-orb hero-orb-delay z-10 absolute top-[640px] -left-24 h-96 w-96 rounded-full bg-[rgba(18,174,208,0.48)] blur-[160px]"></div>
            </div>

            {{-- Hero image: Figma 'image 22' full-bleed background — left fade via mask (19% -> 54%), bottom fade to page bg --}}
            <div class="hero-image-mask absolute inset-y-0 right-0 w-full lg:w-[79%] pointer-events-none" aria-hidden="true">
                <img src="{{ asset($p['hero_image']) }}" alt="" class="w-full h-full object-cover object-right" loading="lazy">
                <div class="absolute inset-0 lg:hidden bg-gradient-to-r from-background via-background via-75% to-transparent"></div>
                <div class="absolute inset-x-0 bottom-0 h-[20%] bg-gradient-to-t from-background to-transparent"></div>
            </div>

            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop relative z-10">
                {{-- Back Button --}}
                <a class="inline-flex items-center gap-2 text-sm font-bold uppercase tracking-widest text-primary hover:text-on-background transition-colors mb-unit-lg backdrop-blur-sm bg-white/50 px-4 py-2 rounded-full border border-outline-variant/30"
                    href="{{ route('services' . $localeSuffix) }}">
                    <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                    {{ $locale === 'en' ? 'Back to Services' : 'Kembali ke Layanan' }}
                </a>

                <div class="relative">
                    {{-- Left Column: Content --}}
                    <div class="relative z-20 max-w-xl lg:max-w-2xl">
                        {{-- Breadcrumb Pill --}}
                        <div class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-unit-md py-2 rounded-[999px] font-label-sm text-label-sm uppercase tracking-widest mb-unit-md shadow-lg shadow-tertiary-fixed/20">
                            <span class="material-symbols-outlined text-[18px]">bolt</span>
                            {{ $locale === 'en' ? 'Service Detail' : 'Detail Layanan' }}
                        </div>

                        {{-- Title (Figma: fully uppercase) --}}
                        <h1 class="uppercase font-headline-h1 font-bold text-4xl md:text-headline-h1 md:text-[52px] md:leading-[1.1] text-on-background leading-tight mb-unit-md">
                            {{ $p['title'][$locale] }}
                        </h1>

                        {{-- Description --}}
                        <p class="text-lg leading-relaxed text-on-surface-variant mb-unit-lg max-w-2xl">
                            {{ $p['hero_description'][$locale] }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ============================================================
             SECTION B: CAPABILITIES
             ============================================================ --}}
        <section class="px-margin-mobile md:px-margin-desktop py-unit-xl max-w-container-max mx-auto">
            {{-- Section Label --}}
            <p class="font-label-sm text-label-sm uppercase tracking-[0.15em] text-primary mb-unit-sm">
                {{ $locale === 'en' ? 'Capability Reference' : 'Referensi Kapabilitas' }}
            </p>

            {{-- Heading --}}
            <h2 class="font-headline-h2 font-semibold text-3xl md:text-headline-h2 text-on-background mb-unit-md">
                {{ $p['title'][$locale] }} {{ $locale === 'en' ? 'Capabilities' : 'Kapabilitas' }}
            </h2>

            {{-- Intro --}}
            <p class="text-on-surface-variant max-w-3xl mb-unit-lg">
                {{ $p['capabilities_intro'][$locale] }}
            </p>

            {{-- Capability Cards Grid (Figma: 2 columns, blocky cards, 8px left accent; mirrored pattern: cyan, lime, navy | navy, lime, cyan) --}}
            @php
                $basePattern = ['border-electric-cyan', 'border-impact-lime', 'border-midnight-navy'];
                $mirroredPattern = array_merge($basePattern, array_reverse($basePattern));
            @endphp
            <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                @foreach ($p['capabilities'] as $index => $cap)
                    <div class="bg-surface-container-low p-unit-lg border-l-8 {{ $mirroredPattern[$index % count($mirroredPattern)] }}">
                        <h3 class="font-headline-h3 text-[22px] font-semibold text-on-background mb-2">
                            {{ $cap['title'][$locale] }}
                        </h3>
                        <p class="text-body-md text-on-surface-variant">
                            {{ $cap['description'][$locale] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- ============================================================
             SECTION C: SERVICE MODEL (Static — identical across all 6 pages)
             ============================================================ --}}
        <section class="px-margin-mobile md:px-margin-desktop py-unit-xl max-w-container-max mx-auto">
            {{-- Section Label --}}
            <p class="font-label-sm text-label-sm uppercase tracking-[0.15em] text-primary mb-unit-sm">
                {{ $locale === 'en' ? 'Service Model' : 'Model Layanan' }}
            </p>

            {{-- Heading --}}
            <h2 class="font-headline-h2 font-semibold text-3xl md:text-headline-h2 text-on-background mb-unit-md">
                {{ $locale === 'en' ? 'Product & Solution Model' : 'Model Produk & Solusi Model' }}
            </h2>

            {{-- Intro --}}
            <p class="text-on-surface-variant max-w-3xl mb-unit-lg">
                {{ $locale === 'en'
                    ? 'Our service approach covers the entire solution development cycle, from understanding business needs, building the right technology, to providing ongoing support after implementation.'
                    : 'Pendekatan layanan kami mencakup seluruh siklus pengembangan solusi, mulai dari memahami kebutuhan bisnis, membangun teknologi yang tepat, hingga memberikan dukungan berkelanjutan setelah implementasi.' }}
            </p>

            {{-- 3-Column Layout: Row-based rendering for equal row heights --}}
            @php
                $consulting = [
                    ['title' => ['en' => 'Technology Consulting', 'id' => 'Konsultasi Teknologi'], 'desc' => ['en' => 'Helping organizations align digital transformation strategy, design solution architecture, and select the right technology to achieve business goals.', 'id' => 'Membantu organisasi menyusun strategi transformasi digital, merancang arsitektur solusi, dan memilih teknologi yang tepat untuk mencapai tujuan bisnis.']],
                    ['title' => ['en' => 'Experience-Led Design', 'id' => 'Desain Berpusat pada Pengalaman Pengguna'], 'desc' => ['en' => 'Designing solutions by understanding user needs through research, wireframes, and interfaces focused on user requirements.', 'id' => 'Merancang pengalaman pengguna melalui riset, wireframe, dan desain antarmuka yang berfokus pada kebutuhan pengguna.']],
                    ['title' => ['en' => 'AI Readiness Assessment', 'id' => 'Evaluasi Kesiapan AI'], 'desc' => ['en' => 'Evaluating organizational readiness to adopt AI and identifying automation opportunities that deliver business value.', 'id' => 'Mengevaluasi kesiapan organisasi dalam mengadopsi AI serta mengidentifikasi peluang otomatisasi yang memberikan nilai bisnis.']],
                ];
                $build = [
                    ['title' => ['en' => 'Custom Software Development', 'id' => 'Pengembangan Perangkat Lunak Kustom'], 'desc' => ['en' => 'Building web, mobile, SaaS, and enterprise applications that are secure, flexible, and easy to develop.', 'id' => 'Mengembangkan aplikasi web, mobile, SaaS, dan sistem enterprise yang aman, fleksibel, dan mudah dikembangkan.']],
                    ['title' => ['en' => 'AI & Generative AI Platform', 'id' => 'Platform AI & Generative AI'], 'desc' => ['en' => 'Building AI and generative AI-based platforms that integrate, process documents, and improve business productivity.', 'id' => 'Membangun platform berbasis AI dan Generative AI untuk mengotomatisasi proses, mengolah dokumen, dan meningkatkan produktivitas bisnis.']],
                    ['title' => ['en' => 'Operational Systems', 'id' => 'Sistem Operasional'], 'desc' => ['en' => 'Developing operational systems that automate business processes more efficiently and in an integrated manner.', 'id' => 'Mengembangkan sistem operasional yang membantu organisasi mengelola proses bisnis secara lebih efisien dan terintegrasi.']],
                ];
                $run = [
                    ['title' => ['en' => 'QA / Quality Assurance Governance', 'id' => 'Tata Kelola Jaminan Kualitas (QA) / Tata Kelola QA'], 'desc' => ['en' => 'Implementing software governance through comprehensive testing, QA governance, and structured release processes.', 'id' => 'Memastikan kualitas perangkat lunak melalui pengujian menyeluruh, tata kelola QA, dan proses rilis yang terstruktur.']],
                    ['title' => ['en' => 'Managed Support Services', 'id' => 'Layanan Dukungan Terkelola'], 'desc' => ['en' => 'Providing support and maintenance services to ensure business systems run optimally after implementation.', 'id' => 'Menyediakan layanan dukungan dan pemeliharaan sistem agar operasional bisnis tetap berjalan optimal setelah implementasi.']],
                    ['title' => ['en' => 'Microsoft Dynamics 365 & Power Platform', 'id' => 'Microsoft Dynamics 365 & Power Platform'], 'desc' => ['en' => 'Implementation of Microsoft Dynamics 365 and Power Platform integration to improve business productivity and efficiency.', 'id' => 'Mendukung implementasi Microsoft Dynamics 365 dan integrasi Power Platform untuk meningkatkan produktivitas dan efisiensi bisnis.']],
                ];
                $columns = [$consulting, $build, $run];
                $headers = [
                    ['label' => 'Consulting & Strategy', 'bg' => 'bg-midnight-navy', 'text' => 'text-white'],
                    ['label' => 'Build & Development', 'bg' => 'bg-electric-cyan', 'text' => 'text-white'],
                    ['label' => 'Run & Support', 'bg' => 'bg-impact-lime', 'text' => 'text-midnight-navy'],
                ];
                // Cross-paired borders: Col0(navy)→lime, Col1(cyan)→navy, Col2(lime)→cyan
                $colBorders = ['border-impact-lime', 'border-midnight-navy', 'border-electric-cyan'];
            @endphp
            <div class="grid grid-cols-1 md:grid-cols-3 gap-x-unit-md gap-y-2.5">
                {{-- Headers Row (mobile: order groups each header with its 3 cards below it) --}}
                @foreach ($headers as $hIndex => $h)
                    <div class="{{ $h['bg'] }} {{ $h['text'] }} text-center py-5 uppercase text-2xl font-semibold mb-2 order-{{ $hIndex * 4 + 1 }} md:order-none">
                        {{ $h['label'] }}
                    </div>
                @endforeach
                {{-- Card Rows (equal height per row) --}}
                @for ($row = 0; $row < 3; $row++)
                    @foreach ($columns as $colIndex => $col)
                        <div class="bg-surface-container-low p-unit-md border-l-8 {{ $colBorders[$colIndex] }} order-{{ $colIndex * 4 + $row + 2 }} md:order-none">
                            <h4 class="font-semibold text-lg text-on-background mb-1">{{ $col[$row]['title'][$locale] }}</h4>
                            <p class="text-base text-on-surface-variant">{{ $col[$row]['desc'][$locale] }}</p>
                        </div>
                    @endforeach
                @endfor
            </div>
        </section>

        {{-- ============================================================
             SECTION D: CASE STUDIES
             ============================================================ --}}
        @if ($caseStudies->isNotEmpty())
        <section class="bg-surface-container-low px-margin-mobile md:px-margin-desktop py-unit-xl">
            <div class="max-w-container-max mx-auto">
                {{-- Section Label --}}
                <p class="font-label-sm text-label-sm uppercase tracking-[0.15em] text-primary mb-unit-sm text-center">
                    {{ $locale === 'en' ? 'Service Approach' : 'Pendekatan Layanan' }}
                </p>

                {{-- Heading --}}
                <h2 class="font-headline-h2 font-semibold text-3xl md:text-headline-h2 text-on-background mb-unit-lg text-center">
                    {{ $locale === 'en' ? 'Related Case Studies' : 'Studi Kasus Terkait' }}
                </h2>

                {{-- Case Study Cards --}}
                @php
                    $caseCount = $caseStudies->count();
                    $gridCols = $caseCount >= 3 ? 'md:grid-cols-3' : ($caseCount === 2 ? 'md:grid-cols-2' : 'md:grid-cols-1 max-w-xl mx-auto');
                @endphp
                <div class="grid grid-cols-1 {{ $gridCols }} gap-unit-lg mb-unit-lg">
                    @foreach ($caseStudies as $case)
                        <a href="{{ route('solutions.detail' . $localeSuffix, ['solution' => $case['id']]) }}"
                            class="group bg-white rounded-[20px] border border-electric-cyan overflow-hidden hover:shadow-xl transition-all duration-300 flex flex-col">
                            {{-- Card Image / Placeholder --}}
                            <div class="h-[249px] overflow-hidden bg-gradient-to-br from-primary/10 via-surface-container-low to-tertiary-fixed/10 flex items-center justify-center">
                                @if (!empty($case['image']))
                                    <img src="{{ $case['image'] }}" alt="{{ $case['title'][$locale] }}"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                @else
                                    <span class="material-symbols-outlined text-6xl text-primary/30">case_study</span>
                                @endif
                            </div>

                            {{-- Card Content --}}
                            <div class="p-unit-lg flex flex-col flex-1">
                                {{-- Category Label (Figma: cyan text, no pill) --}}
                                <span class="block text-sm font-semibold tracking-[0.05em] text-primary mb-2">
                                    {{ $pillar['case_studies_label'][$locale] ?? $case['category'][$locale] }}
                                </span>

                                {{-- Title --}}
                                <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-2">
                                    {{ $case['title'][$locale] }}
                                </h3>

                                {{-- Description --}}
                                <p class="text-on-surface-variant text-base leading-relaxed flex-1">
                                    {{ $case['summary'][$locale] }}
                                </p>

                                {{-- CTA --}}
                                <div class="mt-4 flex justify-end">
                                    <span class="inline-flex items-center gap-1 text-sm font-normal tracking-wider text-on-surface hover:opacity-80 transition-opacity">
                                        <span class="border-b-2 border-electric-cyan pb-0.5">
                                            {{ $locale === 'en' ? 'View Detail' : 'Lihat Detail' }}
                                        </span>
                                        <span class="material-symbols-outlined text-base">chevron_right</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

                {{-- "Lihat Semua" Button (Figma Group 94: navy, radius 15, no arrow, sentence case) --}}
                <div class="flex justify-end">
                    <a href="{{ route('portfolio' . $localeSuffix) }}"
                        class="inline-flex items-center justify-center bg-midnight-navy text-white px-unit-lg py-3 rounded-[15px] text-lg font-medium border border-white/50 shadow-[0_1px_4px_rgba(0,0,0,0.25)] hover:opacity-90 transition-opacity">
                        {{ $locale === 'en' ? 'View All Case Studies' : 'Lihat Semua Studi Kasus' }}
                    </a>
                </div>
            </div>
        </section>
        @endif

        {{-- ============================================================
             SECTION E: CTA BANNER
             ============================================================ --}}
        <section class="bg-electric-cyan px-margin-mobile md:px-margin-desktop py-unit-xl">
            <div class="max-w-container-max mx-auto text-center">
                <h2 class="font-headline-h2 font-semibold text-3xl md:text-headline-h2 text-white mb-unit-md">
                    {{ $locale === 'en' ? 'Ready to Start Your Digital Transformation?' : 'Siap Mulai Transformasi Digital?' }}
                </h2>
                <p class="text-white/90 text-lg mb-unit-lg max-w-2xl mx-auto">
                    {{ $locale === 'en'
                        ? 'Consult your technology needs with our expert team and start your digital transformation journey today.'
                        : 'Konsultasikan kebutuhan teknologi Anda dengan tim ahli kami dan mulai langkah transformasi digital Anda hari ini.' }}
                </p>
                <a href="{{ route('contact' . $localeSuffix) }}"
                    class="inline-flex items-center justify-center gap-2 bg-impact-lime text-midnight-navy px-unit-lg py-3 rounded-[20px] text-base font-semibold tracking-[0.03em] hover:opacity-90 transition-opacity">
                    {{ $locale === 'en' ? 'Start Free Consultation' : 'Mulai Konsultasi Gratis' }}
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')
    @include('partials.lenis-scroll')

    <script>
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header.fixed');
            if (!header) return;
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
