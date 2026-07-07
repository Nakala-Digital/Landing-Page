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
                ? 'Explore Nakala Digital solutions for AI hiring, HRMS, HSE operations, vendor portals, engagement, education, and performance coaching.'
                : 'Jelajahi solusi Nakala Digital untuk AI hiring, HRMS, operasional HSE, portal vendor, engagement, edukasi, dan coaching performa.',
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
                        "headline-h1-mobile": ["28px", {
                            "lineHeight": "1.3",
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
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .solution-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        /* MOBILE (< 768px) */
        @media (max-width: 767px) {
            .hero-title {
                font-size: 22px !important;
                line-height: 1.3 !important;
            }

            .hero-title + p {
                font-size: 15px !important;
            }
        }

        /* TABLET (768px - 1024px) */
        @media (min-width: 768px) and (max-width: 1024px) {
            .hero-title {
                font-size: 36px !important;
                line-height: 1.2 !important;
            }

            .hero-title + p {
                font-size: 16px !important;
            }

            .hero-image-wrap {
                align-self: flex-start;
                margin-top: 56px;
            }
        }
    </style>
</head>

<body class="bg-background text-on-background font-body-md">
    @include('partials.navbar')
    <main class="pt-20">

        <!-- Hero Section -->
        <section
            class="pt-unit-lg pb-unit-xl lg:pt-unit-xl lg:pb-32 px-margin-mobile md:px-margin-desktop bg-surface-container-low overflow-hidden">
            <div class="max-w-container-max mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-gutter items-center">
                <div class="relative z-10">
                    <div
                        class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-4 py-1.5 rounded-full font-label-sm text-label-sm uppercase tracking-widest mb-unit-lg">
                        <span class="material-symbols-outlined text-[16px]">bolt</span>
                        {{ app()->getLocale() === 'en' ? 'Tailored Digital Excellence' : 'Keunggulan Digital yang Disesuaikan' }}
                    </div>
                    <h1
                        class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-on-background mb-unit-md leading-tight hero-title">
                        {{ app()->getLocale() === 'en' ? 'Digital solutions' : 'Solusi digital' }} <span
                            class="text-primary">{{ app()->getLocale() === 'en' ? 'tailored' : 'yang disesuaikan' }}</span>
                        {{ app()->getLocale() === 'en' ? 'to business needs' : 'dengan kebutuhan bisnis' }}
                    </h1>
                    <p
                        class="font-body-lg text-body-lg text-on-surface-variant mb-unit-lg max-w-xl lg:max-w-2xl leading-relaxed text-balance">
                        {{ app()->getLocale() === 'en'
                            ? 'Digital solutions ready to adapt to your business needs, improving operational efficiency and sustainable growth.'
                            : 'Solusi digital yang siap disesuaikan dengan kebutuhan bisnis Anda, meningkatkan efisiensi operasional dan pertumbuhan berkelanjutan.' }}
                    </p>
                    <div class="flex flex-wrap gap-unit-md">
                        <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}"
                            class="flex-1 bg-primary text-on-primary px-unit-lg py-unit-md rounded-lg font-button text-button md:leading-relaxed inline-flex items-center justify-center">{{ app()->getLocale() === 'en' ? 'Explore Solutions' : 'Jelajahi Solusi' }}</a>
                        <a href="{{ route('portfolio' . (app()->getLocale() === 'en' ? '.en' : '')) }}"
                            class="flex-1 border-2 border-on-secondary-fixed text-on-secondary-fixed px-unit-lg py-unit-md rounded-lg font-button text-button md:leading-relaxed inline-flex items-center justify-center">{{ app()->getLocale() === 'en' ? 'View Case Studies' : 'Lihat Studi Kasus' }}</a>
                    </div>
                </div>
                <div class="relative hero-image-wrap">
                    <div class="absolute -top-20 -right-20 w-80 h-80 bg-primary/5 rounded-full blur-3xl"></div>
                    <img alt="Platform Mockup"
                        class="rounded-xl shadow-2xl border border-outline-variant relative z-10 w-full object-cover h-[400px] hero-image"
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
            $locale = app()->getLocale();
            $detailRoute = $locale === 'en' ? 'solutions.detail.en' : 'solutions.detail';
            $solutionCases = config('solutions.cases');
        @endphp

        <!-- Solutions Bento Grid -->
        <section class="py-unit-xl px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="text-center mb-unit-xl">
                <h2
                    class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-background mb-unit-sm">
                    {{ $locale === 'en' ? 'Solutions Built for Real Business Challenges' : 'Solusi untuk Tantangan Bisnis Nyata' }}
                </h2>
                <p class="text-on-surface-variant max-w-2xl mx-auto">
                    {{ $locale === 'en'
                        ? 'From HR to finance to education — practical digital solutions that solve real operational problems and drive measurable impact.'
                        : 'Dari HR hingga keuangan hingga pendidikan solusi digital praktis yang memecahkan masalah operasional nyata dan memberikan dampak terukur.' }}
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
                @php $localeSuffix = app()->getLocale() === 'en' ? '.en' : ''; @endphp
                <a class="flex items-center gap-unit-md p-unit-sm text-on-surface-variant hover:bg-surface-container-high rounded-lg transition-colors"
                    href="{{ route('home' . $localeSuffix) }}">
                    <span class="material-symbols-outlined">home</span>
                    {{ app()->getLocale() === 'en' ? 'Home' : 'Beranda' }}
                </a>
                <a class="flex items-center gap-unit-md p-unit-sm bg-primary-container text-on-primary-container font-bold rounded-lg transition-colors"
                    href="{{ route('solutions' . $localeSuffix) }}">
                    <span class="material-symbols-outlined">lightbulb</span>
                    {{ app()->getLocale() === 'en' ? 'Solutions' : 'Solusi' }}
                </a>
                <a class="flex items-center gap-unit-md p-unit-sm text-on-surface-variant hover:bg-surface-container-high rounded-lg transition-colors"
                    href="{{ route('portfolio' . $localeSuffix) }}">
                    <span class="material-symbols-outlined">work</span>
                    {{ app()->getLocale() === 'en' ? 'Portfolio' : 'Portofolio' }}
                </a>
                <a class="flex items-center gap-unit-md p-unit-sm text-on-surface-variant hover:bg-surface-container-high rounded-lg transition-colors"
                    href="{{ route('contact' . $localeSuffix) }}">
                    <span class="material-symbols-outlined">mail</span>
                    {{ app()->getLocale() === 'en' ? 'Contact' : 'Kontak' }}
                </a>
            </nav>
            <a href="{{ route('contact' . $localeSuffix) }}"
                class="bg-primary text-on-primary w-full py-unit-md rounded-lg font-button text-button mt-auto block text-center">{{ app()->getLocale() === 'en' ? 'Start Free Consultation' : 'Mulai Konsultasi Gratis' }}</a>
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
