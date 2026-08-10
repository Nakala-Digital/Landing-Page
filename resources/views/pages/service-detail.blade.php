@php
    $locale = app()->getLocale();
    $localeSuffix = $locale === 'en' ? '.en' : '';
    $data = $serviceData;
@endphp

<!DOCTYPE html>

<html lang="{{ $locale }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        {{ $data['title'][$locale] }} | Nakala Digital
    </title>
    @include('partials.seo', [
        'title' => $data['title'][$locale] . ' | Nakala Digital',
        'description' => $data['summary'][$locale],
    ])
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&amp;display=swap"
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
                    },
                    keyframes: {
                        "float-slow": {
                            "0%, 100%": {
                                transform: "translateY(0)"
                            },
                            "50%": {
                                transform: "translateY(-15px)"
                            }
                        },
                        "float-fast": {
                            "0%, 100%": {
                                transform: "translateY(0)"
                            },
                            "50%": {
                                transform: "translateY(-8px)"
                            }
                        }
                    },
                    animation: {
                        "float-slow": "float-slow 6s ease-in-out infinite",
                        "float-fast": "float-fast 4s ease-in-out infinite"
                    }
                }
            }
        }
    </script>
    <style>
        .hero-grid-pattern {
            background-image:
                linear-gradient(rgba(18, 174, 208, 0.10) 1px, transparent 1px),
                linear-gradient(90deg, rgba(18, 174, 208, 0.10) 1px, transparent 1px);
            background-size: 44px 44px;
            -webkit-mask-image: radial-gradient(ellipse 85% 65% at 30% 25%, black 30%, transparent 85%);
            mask-image: radial-gradient(ellipse 85% 65% at 30% 25%, black 30%, transparent 85%);
        }
    </style>
</head>

<body
    class="bg-background text-on-background font-body-md selection:bg-primary-container selection:text-on-primary-container">
    @include('partials.navbar')

    <main class="pt-20">

        {{-- Hero Section --}}
        <section
            class="relative overflow-hidden bg-gradient-to-br from-surface-container-lowest via-surface to-primary/5 pt-unit-xl pb-unit-xl border-b border-outline-variant z-0">
            <div class="hero-grid-pattern absolute inset-0 pointer-events-none" aria-hidden="true">
            </div>

            <div class="absolute -top-24 -right-24 h-96 w-96 rounded-full bg-primary/10 blur-3xl pointer-events-none">
            </div>
            <div class="absolute -bottom-32 -left-24 h-96 w-96 rounded-full bg-primary/20 blur-3xl pointer-events-none">
            </div>

            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop relative z-10">
                <a class="inline-flex items-center gap-2 text-sm font-bold uppercase tracking-widest text-primary hover:text-on-background transition-colors mb-unit-lg backdrop-blur-sm bg-white/50 px-4 py-2 rounded-full border border-outline-variant/30"
                    href="{{ route('services' . $localeSuffix) }}">
                    <span class="material-symbols-outlined text-[18px]">
                        arrow_back
                    </span>
                    {{ $locale === 'en' ? 'Back to Services' : 'Kembali ke Layanan' }}
                </a>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-unit-xl items-center relative">
                    <div class="lg:col-span-6 relative z-20">
                        <div
                            class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-unit-md py-2 rounded-[20px] font-label-sm text-label-sm uppercase tracking-widest mb-unit-md shadow-lg shadow-tertiary-fixed/20">
                            <span class="material-symbols-outlined text-[18px]">
                                {{ $data['icon'] }}
                            </span>
                            {{ $data['category'][$locale] }}
                        </div>

                        <h1
                            class="font-headline-h1 text-4xl md:text-headline-h1 md:text-[52px] md:leading-[1.1] text-on-background leading-tight mb-unit-md font-bold">
                            {{ $data['title'][$locale] }}
                        </h1>

                        <p class="text-[16px] text-on-surface-variant mb-unit-lg max-w-2xl">
                            {{ $data['summary'][$locale] }}
                        </p>
                    </div>

                    {{-- Right: Floating UI --}}
                    <div class="lg:col-span-6 relative z-10 hidden lg:block h-[500px] group"
                        style="perspective: 1000px;">
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 rounded-[20px] shadow-2xl transition-all duration-300 bg-white border border-outline-variant p-6 text-center"
                            style="transform-style: preserve-3d; will-change: transform; width: 200px;">
                            <span class="material-symbols-outlined text-primary text-6xl mb-4"
                                style="font-variation-settings: 'FILL' 1;">
                                {{ $data['icon'] }}
                            </span>
                            <p class="text-[16px] text-on-background">
                                {{ $data['title'][$locale] }}
                            </p>
                        </div>

                        @foreach ($data['pillars'] as $i => $pillar)
                            @php
                                $positions = [
                                    ['top-0 left-0', 'animate-float-slow', '0s'],
                                    ['top-1/4 -right-4', 'animate-float-fast', '-1s'],
                                    ['bottom-1/4 -left-4', 'animate-float-slow', '-2.5s'],
                                    ['bottom-0 right-0', 'animate-float-fast', '-0.5s'],
                                ];
                            @endphp
                            <div class="absolute z-20 {{ $positions[$i][0] }} bg-white border border-outline-variant rounded-xl p-4 shadow-xl flex items-center gap-3 {{ $positions[$i][1] }}"
                                style="animation-delay: {{ $positions[$i][2] }}">
                                <span
                                    class="material-symbols-outlined text-2xl {{ $i % 2 == 0 ? 'text-primary' : 'text-tertiary' }}"
                                    style="font-variation-settings: 'FILL' 1;">
                                    {{ $pillar['icon'] }}
                                </span>
                                <div>
                                    <p class="text-[16px] text-on-surface-variant uppercase tracking-wider">
                                        {{ $locale === 'en' ? 'Pillar' : 'Pilar' }}
                                    </p>
                                    <p class="text-[16px] text-on-background">
                                        {{ $pillar['name'][$locale] }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- Capability Reference Section --}}
        <section class="py-unit-xl bg-surface-container-low">
            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="mb-unit-xl max-w-2xl">
                    <span class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">
                        {{ $locale === 'en' ? 'Capability Reference' : 'Referensi Kapabilitas' }}
                    </span>
                    <h2 class="text-[28px] md:text-headline-h2 text-on-background mb-unit-md font-bold">
                        {{ $data['title'][$locale] . ' ' . ($locale === 'en' ? 'CAPABILITIES' : 'KAPABILITAS') }}
                    </h2>
                    <p class="text-[16px] text-on-surface-variant">
                        {{ $locale === 'en'
                            ? 'Each capability is developed to provide flexible, scalable solutions ready to support digital transformation across various industry sectors.'
                            : 'Setiap kapabilitas dikembangkan untuk memberikan solusi yang fleksibel, skalabel, dan siap mendukung transformasi digital di berbagai sektor industri.' }}
                    </p>
                </div>

                @php
                    $borderColors = ['border-primary', 'border-tertiary', 'border-secondary'];
                @endphp
                <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                    @foreach ($data['capabilities'] as $cap)
                        <div
                            class="bg-white p-unit-md border-l-[6px] {{ $borderColors[$loop->index % 3] }} hover:shadow-lg transition-all duration-300">
                            <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-unit-sm">
                                {{ $cap['title'][$locale] }}
                            </h3>
                            <p class="text-[16px] text-on-surface-variant leading-relaxed">
                                {{ $cap['desc'][$locale] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        @isset($data['service_models'])

            {{-- Service Model --}}
            @php
                $columns = [
                    [
                        'title' => ['en' => 'Consulting & Strategy', 'id' => 'Consulting & Strategy'],
                        'color' => '#051C37',
                    ],
                    ['title' => ['en' => 'Build & Development', 'id' => 'Build & Development'], 'color' => '#1A9BC6'],
                    ['title' => ['en' => 'Run & Support', 'id' => 'Run & Support'], 'color' => '#B0E134'],
                ];
                $chunks = array_chunk($data['service_models'], 3);
            @endphp

            <section class="py-unit-xl bg-surface-container-low">
                <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
                    <div class="mb-6 max-w-2xl">
                        <span class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">
                            {{ $locale === 'en' ? 'Service Model' : 'Model Layanan' }}
                        </span>
                        <h2 class="text-[28px] md:text-headline-h2 text-on-background mb-unit-md">
                            Model Produk & Solusi
                        </h2>
                        <p class="text-[16px] text-on-surface-variant">
                            {{ $locale === 'en'
                                ? 'Our service approach covers the entire solution development cycle, from understanding business needs, building the right technology, to providing ongoing support after implementation.'
                                : 'Pendekatan layanan kami mencakup seluruh siklus pengembangan solusi, mulai dari memahami kebutuhan bisnis, membangun teknologi yang tepat, hingga memberikan dukungan berkelanjutan setelah implementasi.' }}
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-x-unit-lg gap-y-unit-md">
                        @foreach ($chunks as $colIndex => $columnItems)
                            <div>

                                {{-- Column Header --}}
                                <div class="h-[73px] flex items-center justify-center px-unit-md mb-unit-md rounded-sm"
                                    style="background-color: {{ $columns[$colIndex]['color'] }};">
                                    <h3
                                        class="font-headline-h3 text-[24px] font-semibold uppercase text-white text-center leading-tight">
                                        {{ $columns[$colIndex]['title'][$locale] }}
                                    </h3>
                                </div>

                                {{-- Cards --}}
                                <div class="space-y-unit-sm">
                                    @foreach ($columnItems as $item)
                                        <div class="bg-white p-[20px] hover:shadow-lg transition-all duration-300 flex items-start"
                                            style="border-left: 6px solid {{ $columns[$colIndex]['color'] }};">
                                            <div class="flex-1 min-w-0">
                                                <h4
                                                    class="font-headline-h3 text-[18px] font-bold text-on-background mb-[2px]">
                                                    {{ $item['title'][$locale] }}
                                                </h4>
                                                <p class="font-body-md text-[16px] text-on-surface-variant leading-snug">
                                                    {{ $item['desc'][$locale] }}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endisset

        @if (count($portfolios) > 0)

            {{-- Portfolio Related Section --}}
            <section class="py-unit-xl bg-surface-container-low">
                <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
                    <div class="mb-8 max-w-2xl mx-auto text-center">
                        <span class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">
                            {{ $locale === 'en' ? 'Service Approach' : 'Pendekatan Layanan' }}
                        </span>
                        <h2 class="text-[28px] md:text-headline-h2 text-on-background mb-unit-md font-bold">
                            {{ $locale === 'en' ? 'Related Case Studies' : 'Studi Kasus Terkait' }}
                        </h2>
                    </div>

                    <div class="flex flex-wrap justify-center gap-8">
                        @foreach ($portfolios as $portfolio)
                            <div
                                class="group bg-surface-container-lowest border border-outline-variant rounded-[20px] overflow-hidden flex flex-col hover:shadow-lg transition-all duration-300 w-full md:w-[calc(50%-1rem)] lg:w-[calc(33.333%-1.5rem)] max-w-md">
                                <div class="w-full h-48 bg-surface-container relative overflow-hidden">
                                    <img src="{{ $portfolio['image'] }}"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                        alt="{{ $portfolio['title'][$locale] }}" />
                                </div>
                                <div class="p-6 flex flex-col flex-grow">
                                    <span
                                        class="font-label-sm text-primary uppercase tracking-widest mb-3">{{ $portfolio['category'][$locale] }}</span>
                                    <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-3">
                                        {{ $portfolio['title'][$locale] }}
                                    </h3>
                                    <p class="text-body-md text-on-surface-variant mb-6 flex-grow">
                                        {{ $portfolio['desc'][$locale] }}
                                    </p>
                                    @if (!empty($portfolio['external_url']))
                                        <a href="{{ $portfolio['external_url'] }}" target="_blank"
                                            rel="noopener noreferrer"
                                            class="text-label-sm font-bold uppercase text-on-background tracking-widest flex items-center gap-1 border-b-2 border-outline-variant w-fit pb-1 group-hover:border-primary group-hover:text-primary transition-all">
                                            {{ $locale === 'en' ? 'VIEW DETAIL' : 'LIHAT DETAIL' }}
                                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                                        </a>
                                    @else
                                        <a href="{{ route('contact' . $localeSuffix, ['project' => $portfolio['project']]) }}"
                                            class="text-label-sm font-bold uppercase text-on-background tracking-widest flex items-center gap-1 border-b-2 border-outline-variant w-fit pb-1 group-hover:border-primary group-hover:text-primary transition-all">
                                            {{ $locale === 'en' ? 'VIEW DETAIL' : 'LIHAT DETAIL' }}
                                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="flex justify-end mt-8">
                        <a href="{{ route('portfolio' . $localeSuffix) }}"
                            class="inline-flex items-center gap-3 bg-midnight-navy text-white px-unit-lg py-unit-md rounded-full font-button text-button uppercase tracking-wider hover:opacity-90 transition-all duration-300 shadow-md hover:shadow-lg">
                            {{ $locale === 'en' ? 'View All Case Studies' : 'Lihat Semua Studi Kasus' }}
                            <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </section>
        @endif

        {{-- CTA Transformation --}}
        <section class="py-unit-xl bg-primary text-center">
            <div class="max-w-2xl mx-auto px-margin-mobile relative z-10 space-y-unit-lg">
                <h2 class="text-[24px] md:text-headline-h2 whitespace-normal text-balance leading-tight font-bold text-white">
                    {{ __('messages.cta_transform_title') }}</h2>
                <p class="text-[18px] text-white/90">{{ __('messages.cta_transform_desc') }}</p>
                <div class="pt-unit-md">
                    <a href="{{ route('contact' . $localeSuffix) }}"
                        class="inline-block bg-tertiary text-on-tertiary px-8 py-4 rounded-[20px] font-button text-[18px] font-medium shadow-xl hover:scale-105 transition-transform active:scale-100">
                        {{ __('messages.cta_transform_btn') }}
                    </a>
                </div>
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
