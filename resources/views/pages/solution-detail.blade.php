@php
    $locale = app()->getLocale();
    $localeSuffix = $locale === 'en' ? '.en' : '';
    $case = $solutionCase;
    $variant = $case['variant'] ?? 'desk';
@endphp

<!DOCTYPE html>

<html lang="{{ $locale }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ $case['title'][$locale] }} | Nakala Digital</title>
    @include('partials.seo', [
        'title' => $case['title'][$locale] . ' | Nakala Digital',
        'description' => $case['summary'][$locale],
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
                    },
                    keyframes: {
                        "float-slow": {
                            "0%, 100%": { transform: "translateY(0)" },
                            "50%": { transform: "translateY(-15px)" }
                        },
                        "float-fast": {
                            "0%, 100%": { transform: "translateY(0)" },
                            "50%": { transform: "translateY(-8px)" }
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
    </style>
</head>

<body class="bg-white text-on-background font-body-md">
    @include('partials.navbar')

    <main class="pt-20">
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
                .hero-band-fade {
                    -webkit-mask-image: linear-gradient(90deg, transparent 0%, black 50%, black 100%);
                    mask-image: linear-gradient(90deg, transparent 0%, black 50%, black 100%);
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
            #hero-network {
                display: block;
            }
        </style>
        
        <section id="hero" class="relative overflow-x-clip bg-gradient-to-br from-surface-container-lowest via-surface to-primary/5 pt-unit-xl pb-unit-xl z-0">
            <!-- Dynamic Background (grid + orbs fade to white together) -->
            <div class="hero-fade-mask absolute inset-x-0 top-0 -bottom-40 pointer-events-none" aria-hidden="true">
                <div class="hero-grid-pattern absolute inset-0"></div>
                <div class="hero-orb z-10 absolute top-[240px] -right-[180px] h-96 w-96 rounded-full bg-[rgba(18,174,208,0.37)] blur-[160px]"></div>
                <div class="hero-orb hero-orb-delay z-10 absolute top-[640px] -left-24 h-96 w-96 rounded-full bg-[rgba(18,174,208,0.48)] blur-[160px]"></div>
            </div>
            <canvas id="hero-network" class="absolute inset-0 h-full w-full pointer-events-none" aria-hidden="true"></canvas>

            @if ($variant === 'pilar')
                <!-- Figma PORTOFOLIO band: not full-width (starts at ~8%, grid visible on the left), white fade into the section -->
                <div class="absolute left-[8%] top-0 w-[92%] h-[631px] pointer-events-none" aria-hidden="true">
                    <img src="{{ asset($case['hero_image'] ?? 'assets/detail-solusi-hero.webp') }}" alt=""
                        class="hero-band-fade w-full h-full object-cover object-center">
                    <!-- Mobile: fade from background (left) to transparent (3/4 right) so text stays readable
                         while the visual peeks through on the right. Desktop keeps the Figma band untouched. -->
                    <div class="absolute inset-0 lg:hidden bg-gradient-to-r from-background via-background via-75% to-transparent"></div>
                    <div class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-background to-transparent"></div>
                </div>
            @endif

            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop relative z-10">
                @if ($variant === 'pilar')
                    <div class="relative z-20 max-w-xl">
                        <div class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-unit-md py-2.5 rounded-[25px] font-semibold text-sm md:text-[18px] md:tracking-[0.05em] uppercase mb-unit-md shadow-lg shadow-tertiary-fixed/20">
                            <span class="material-symbols-outlined text-[18px] md:text-[22px]">bolt</span>
                            {{ $case['category'][$locale] }}
                        </div>

                        @php
                            $heroTitle = e($case['title'][$locale]);
                            foreach ($case['hero_highlight'][$locale] ?? [] as $phrase) {
                                $heroTitle = str_replace(e($phrase), '<span class="text-primary">' . e($phrase) . '</span>', $heroTitle);
                            }
                        @endphp
                        <h1 class="font-headline-h1 font-bold text-4xl md:text-headline-h1 md:text-[60px] md:leading-[1.1] text-on-background leading-tight mb-unit-md">
                            {!! $heroTitle !!}
                        </h1>

                        <p class="text-lg leading-relaxed text-on-surface-variant mb-unit-lg max-w-2xl">
                            {{ $case['headline'][$locale] }} {{ $case['summary'][$locale] }}
                        </p>
                    </div>
                @else
                <a class="inline-flex items-center gap-2 text-sm font-bold uppercase tracking-widest text-primary hover:text-on-background transition-colors mb-unit-lg backdrop-blur-sm bg-white/50 px-4 py-2 rounded-full border border-outline-variant/30"
                    href="{{ route('solusi-pendidikan' . $localeSuffix) }}">
                    <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                    {{ $locale === 'en' ? 'Back to Solutions' : 'Kembali ke Solusi' }}
                </a>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-unit-xl items-center relative">
                    <!-- Left Column: Content & Cards -->
                    <div class="lg:col-span-6 relative z-20">
                        <div class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-unit-md py-2 rounded-lg font-label-sm text-label-sm uppercase tracking-widest mb-unit-md shadow-lg shadow-tertiary-fixed/20">
                            <span class="material-symbols-outlined text-[18px]">{{ $case['icon'] }}</span>
                            {{ $case['category'][$locale] }}
                        </div>
                        
                        <h1 class="font-headline-h1 text-4xl md:text-headline-h1 md:text-[52px] md:leading-[1.1] text-on-background leading-tight mb-unit-md">
                            {{ $case['title'][$locale] }}
                        </h1>
                        
                        <p class="text-lg leading-relaxed text-on-surface-variant mb-unit-lg max-w-2xl">
                            {{ $case['headline'][$locale] }} {{ $case['summary'][$locale] }}
                        </p>

                        <!-- Glassmorphism Cards Container (Light Theme) -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-unit-md mt-8">
                            <!-- Card 1 -->
                            <div class="border-l-4 border-primary bg-white/70 backdrop-blur-md p-unit-md rounded-xl shadow-lg shadow-primary/5 border-t border-r border-b border-white/50 relative overflow-hidden group hover:bg-white/90 transition-all duration-300">
                                <p class="text-xs font-bold uppercase tracking-widest text-primary mb-unit-sm relative z-10">
                                    {{ $locale === 'en' ? 'Who It Helps' : 'Untuk Siapa' }}
                                </p>
                                <p class="text-on-surface-variant text-sm leading-relaxed relative z-10">
                                    {{ implode(' • ', $case['who_it_helps'][$locale]) }}
                                </p>
                            </div>
                            
                            <!-- Card 2 -->
                            <div class="border-l-4 border-tertiary-fixed bg-white/70 backdrop-blur-md p-unit-md rounded-xl shadow-lg shadow-tertiary-fixed/5 border-t border-r border-b border-white/50 relative overflow-hidden group hover:bg-white/90 transition-all duration-300">
                                <p class="text-xs font-bold uppercase tracking-widest text-primary mb-unit-sm relative z-10">
                                    {{ $locale === 'en' ? 'Business Impact' : 'Dampak Bisnis' }}
                                </p>
                                <p class="text-on-surface-variant text-sm leading-relaxed relative z-10">
                                    {{ $case['business_value'][$locale] }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Floating UI Mockups (Interactive Parallax) -->
                    <div class="lg:col-span-6 relative z-10 hidden lg:block h-[550px]" id="hero-mockup-container" style="perspective: 1000px;">
                        <div class="absolute inset-0 transition-transform duration-300 ease-out" id="hero-mockup-wrapper">
                            
                            <!-- Main Image (Back Layer) -->
                            <div class="absolute top-[10%] -right-[5%] w-[100%] rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.15)] border border-outline-variant/30 animate-float-slow hover:-translate-y-2 transition-all duration-500 bg-white" style="will-change: transform;">
                                <!-- Browser Window Dots -->
                                <div class="h-8 bg-surface-container-lowest border-b border-outline-variant/50 flex items-center px-4 gap-2">
                                    <div class="w-2.5 h-2.5 rounded-full bg-[#FF5F56]"></div>
                                    <div class="w-2.5 h-2.5 rounded-full bg-[#FFBD2E]"></div>
                                    <div class="w-2.5 h-2.5 rounded-full bg-[#27C93F]"></div>
                                </div>
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=100&w=2000&auto=format&fit=crop" class="w-full h-auto object-cover" alt="Dashboard Mockup">
                            </div>

                            <!-- Secondary Widget (Floating Middle Left) -->
                            <div class="absolute top-[35%] -left-[10%] w-[45%] rounded-xl overflow-hidden shadow-2xl border border-outline-variant/40 animate-float-fast hover:scale-105 transition-transform duration-300 bg-white z-20">
                                <!-- Another browser header for consistency -->
                                <div class="h-6 bg-surface-container-lowest border-b border-outline-variant/50 flex items-center px-3 gap-1.5">
                                    <div class="w-2 h-2 rounded-full bg-outline-variant"></div>
                                    <div class="w-2 h-2 rounded-full bg-outline-variant"></div>
                                </div>
                                <img src="https://images.unsplash.com/photo-1543286386-713bdd548da4?q=80&w=800&auto=format&fit=crop" class="w-full h-auto object-cover" alt="Analytics Widget">
                            </div>

                            <!-- Tertiary Widget/Badge (Floating Bottom Right) -->
                            <div class="absolute -bottom-[5%] right-[10%] w-[50%] z-30 bg-white p-5 rounded-2xl shadow-2xl border border-outline-variant/20 flex items-center gap-4 animate-float-slow hover:shadow-primary/20 transition-all duration-300" style="animation-delay: -2.5s;">
                                <div class="w-12 h-12 rounded-full bg-tertiary-fixed flex items-center justify-center shrink-0">
                                    <span class="material-symbols-outlined text-on-tertiary-fixed text-[24px]">trending_up</span>
                                </div>
                                <div>
                                    <p class="text-xs text-on-surface-variant font-bold uppercase tracking-wider mb-1">Performance</p>
                                    <div class="flex items-end gap-2">
                                        <p class="text-primary font-black text-2xl leading-none">+124%</p>
                                        <span class="text-[10px] font-bold text-green-600 bg-green-100 px-2 py-0.5 rounded-full">Boost</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Sparkle Decorative Element -->
                            <div class="absolute top-[5%] right-[80%] text-primary animate-float-fast" style="animation-delay: -1s;">
                                <span class="material-symbols-outlined text-[32px]">temp_preferences_custom</span>
                            </div>

                        </div>
                    </div>
                </div>
                @endif
            </div>
        </section>

        @if ($variant === 'pilar')
        <section class="px-margin-mobile md:px-margin-desktop py-unit-xl max-w-container-max mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-lg">
                <article class="relative overflow-hidden rounded-[24px] border border-[rgba(18,174,208,0.5)] bg-white p-unit-lg">
                    <span class="material-symbols-outlined absolute top-0 right-0 text-[128px] leading-none text-primary/10 pointer-events-none select-none"
                        style="font-variation-settings: 'FILL' 1">group</span>
                    <div class="relative z-10 flex items-center gap-4 mb-unit-md">
                        <span
                            class="material-symbols-outlined text-primary bg-[rgba(18,174,208,0.1)] rounded-[15px] w-[70px] h-[70px] flex items-center justify-center text-[40px] shrink-0"
                            style="font-variation-settings: 'FILL' 1">group</span>
                        <h2 class="font-headline-h3 text-headline-h3 text-on-background">
                            {{ $locale === 'en' ? 'Who It Helps' : 'Untuk Siapa' }}
                        </h2>
                    </div>
                    <ul class="relative z-10 space-y-3">
                        @foreach ($case['who_it_helps'][$locale] ?? [] as $audience)
                            <li class="flex gap-3 text-lg text-on-surface-variant">
                                <span
                                    class="material-symbols-outlined text-tertiary-fixed text-[24px] mt-0.5">check_circle</span>
                                <span>{{ $audience }}</span>
                            </li>
                        @endforeach
                    </ul>
                </article>

                <article class="relative overflow-hidden rounded-[24px] bg-secondary text-white p-unit-lg">
                    <svg class="absolute top-0 right-0 w-[110px] h-[110px] pointer-events-none select-none" viewBox="0 0 16 16"
                        fill="none" aria-hidden="true">
                        <path fill="rgba(167,244,50,0.2)"
                            d="M5 11h3v5H5zm-4 3h3v2H1zm12-2h3v4h-3zM9 9h3v7H9zm7-8.93l-5.68 4.97l-5.47-1.7L0 7.1V9l5.15-4l5.53 1.72L16 2.06z" />
                    </svg>
                    <div class="relative z-10 flex items-center gap-4 mb-unit-md">
                        <span
                            class="bg-[rgba(167,244,50,0.05)] rounded-[15px] w-[70px] h-[70px] flex items-center justify-center shrink-0">
                            <svg class="w-[40px] h-[40px]" viewBox="0 0 16 16" fill="none" aria-hidden="true">
                                <path fill="#A7F432"
                                    d="M5 11h3v5H5zm-4 3h3v2H1zm12-2h3v4h-3zM9 9h3v7H9zm7-8.93l-5.68 4.97l-5.47-1.7L0 7.1V9l5.15-4l5.53 1.72L16 2.06z" />
                            </svg>
                        </span>
                        <h2 class="font-headline-h3 text-headline-h3">
                            {{ $locale === 'en' ? 'Business Impact' : 'Dampak Bisnis' }}
                        </h2>
                    </div>
                    <ul class="relative z-10 space-y-3">
                        @if (str_contains($case['business_value'][$locale] ?? '', ' • '))
                            @foreach (explode(' • ', $case['business_value'][$locale] ?? '') as $value)
                                <li class="flex gap-3 text-lg text-white/85">
                                    <span
                                        class="material-symbols-outlined text-tertiary-fixed text-[24px] mt-0.5">check_circle</span>
                                    <span>{{ $value }}</span>
                                </li>
                            @endforeach
                        @else
                            <li class="text-lg text-white/85 leading-relaxed">{{ $case['business_value'][$locale] ?? '' }}
                            </li>
                        @endif
                    </ul>
                </article>
            </div>
        </section>
        @endif

        <section class="px-margin-mobile md:px-margin-desktop py-unit-xl max-w-container-max mx-auto">
            @if ($variant === 'pilar')
            <div class="max-w-3xl mx-auto text-center mb-unit-xl">
                <p class="font-medium text-lg tracking-[0.15em] uppercase text-primary mb-unit-md">
                    {{ $locale === 'en' ? 'Solution Detail' : 'Detail Solusi' }}
                </p>
                <h2 class="font-headline-h2 font-semibold text-3xl md:text-headline-h2 md:text-[44px] text-on-background mb-unit-md">
                    {{ $locale === 'en' ? 'Solution Detail & Features' : 'Solusi Detail & Fitur' }}
                </h2>
                <p class="text-lg text-on-surface-variant max-w-2xl mx-auto">
                    {{ $locale === 'en'
                        ? 'Understand the challenges we solve, the approach we take, the features available, and the real impact institutions feel.'
                        : 'Memahami tantangan yang kami selesaikan, pendekatan yang kami terapkan, fitur utama yang tersedia, dan dampak nyata yang dirasakan institusi pendidikan.' }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                <article class="rounded-[12px] border border-[rgba(18,174,208,0.5)] bg-white p-unit-lg">
                    <div class="flex items-center gap-3 mb-unit-md">
                        <span
                            class="material-symbols-outlined text-white bg-primary rounded-[10px] p-2 text-[24px]">warning</span>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                            {{ $locale === 'en' ? 'Problem' : 'Masalah' }}
                        </h3>
                    </div>
                    <p class="text-lg text-on-surface-variant leading-relaxed">{{ $case['challenge'][$locale] ?? '' }}</p>
                </article>

                <article class="rounded-xl border border-tertiary bg-[rgba(167,244,50,0.1)] p-unit-lg">
                    <div class="flex items-center gap-3 mb-unit-md">
                        <span
                            class="material-symbols-outlined text-[#031A44] bg-tertiary-fixed rounded-[10px] p-2 text-[24px]">lightbulb</span>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                            {{ $locale === 'en' ? 'Solution' : 'Solusi' }}
                        </h3>
                    </div>
                    <p class="text-lg text-on-surface-variant leading-relaxed">{{ $case['solution'][$locale] ?? '' }}</p>
                </article>

                <article class="rounded-[12px] border border-[rgba(18,174,208,0.5)] bg-white p-unit-lg">
                    <div class="flex items-center gap-3 mb-unit-md">
                        <span class="bg-primary rounded-[10px] w-[40px] h-[40px] flex items-center justify-center shrink-0">
                            <svg class="w-[20px] h-[20px]" viewBox="0 1 11 11" aria-hidden="true">
                                <path fill="#FFFFFF"
                                    d="M0 12h11V1H0Zm1-1V2h9v9Zm1-1h5V9H2Zm0-2h7V7H2Zm0-2h4V5H2Zm0-2h6V3H2Zm0 0" />
                            </svg>
                        </span>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                            {{ $locale === 'en' ? 'Key Features' : 'Fitur Utama' }}
                        </h3>
                    </div>
                    @php
                        $featuresSplit = $case['features_split'] ?? false;
                        $accentColors = $case['accent_colors'] ?? ['electric-cyan', 'impact-lime', 'midnight-navy'];
                        $accentCount = max(1, count($accentColors));
                    @endphp
                    @if ($featuresSplit)
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            @foreach ($case['features'][$locale] ?? [] as $feature)
                                <div
                                    class="bg-surface-container-low border-l-[5px] border-{{ $accentColors[$loop->index] ?? 'electric-cyan' }} {{ $loop->last ? 'sm:col-span-2 justify-center' : '' }} px-unit-md py-[11px] flex items-center gap-3 text-lg text-on-surface-variant">
                                    <span
                                        class="material-symbols-outlined text-primary text-[24px] shrink-0">{{ $case['feature_icons'][$loop->index] ?? 'check_circle' }}</span>
                                    <span>{{ $feature }}</span>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <ul class="space-y-3">
                            @foreach ($case['features'][$locale] ?? [] as $feature)
                                <li
                                    class="bg-surface-container-low border-l-[5px] border-{{ $accentColors[$loop->index % $accentCount] ?? 'electric-cyan' }} px-unit-md py-[11px] flex items-center gap-3 text-lg text-on-surface-variant">
                                    <span
                                        class="material-symbols-outlined text-primary text-[24px] shrink-0">{{ $case['feature_icons'][$loop->index] ?? 'check_circle' }}</span>
                                    <span>{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </article>

                <article class="rounded-[12px] bg-secondary text-white p-unit-lg">
                    <div class="flex items-center gap-3 mb-unit-md">
                        <span class="bg-tertiary-fixed rounded-[10px] p-2 flex items-center justify-center shrink-0">
                            <svg class="w-[24px] h-[24px]" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path fill="#031A44"
                                    d="m15 22l-.555.832A1 1 0 0 0 16 22zm-3-2l.555-.832a1 1 0 0 0-1.11 0zm-3 2H8a1 1 0 0 0 1.555.832zM8.75 3.537l-.08.997zm1.685-.697l-.762-.648zM6.532 5.686l-.997.08zm2.154-2.154l.08-.997zM5.84 7.435l.648.761zm.697-1.684l.997-.08zm-.747 4.772l-.648.762zm0-3.046l-.648-.762zm.747 4.772l-.997-.08zm-.697-1.684l.648-.761zm2.846 3.903l.08.997zm-2.154-2.154l.997.08zm3.903 2.846l.761-.648zm-1.684-.697l-.08-.997zm4.772.747l.762.648zm-3.046 0l-.762.648zm4.772-.747l.08-.997zm-1.684.697l-.761-.648zm3.903-2.846l.997-.08zm-2.154 2.154l-.08.997zm2.846-3.903l.648.762zm-.697 1.684l-.997.08zm.747-4.772l.648-.762zm0 3.046l-.648-.761zm-.747-4.772l-.997-.08zm.697 1.684l-.648.761zm-2.846-3.903l-.08-.997zm2.154 2.154l.997.08zM13.565 2.84l.762-.648zm1.684.697l.08.997zm-1.726-.747l-.761.648zm-3.046 0l.761.648zM9 14.458l.044-.999zm6.555 6.71l-3-2l-1.11 1.664l3 2zm-4.11-2l-3 2l1.11 1.664l3-2zm1.317-15.73l.042.05l1.523-1.296l-.042-.05zm2.567 1.096l.065-.005l-.16-1.994l-.065.005zm1.142 1.072l-.005.065l1.994.16l.005-.065zm1.041 2.59l.05.042l1.296-1.523l-.05-.042zm.05 1.566l-.05.042l1.296 1.523l.05.042zm-1.096 2.567l.005.065l1.994-.16l-.005-.065zm-1.072 1.142l-.065-.005l-.16 1.994l.065.005zm-2.59 1.041l-.042.05l1.523 1.296l.042-.05zm-1.566.05l-.042-.05l-1.523 1.296l.042.05zm-2.567-1.096l-.065.005l.16 1.994l.065-.005zm-1.142-1.072l.005-.065l-1.994-.16l-.005.065zm-1.041-2.59l-.05-.042l-1.296 1.523l.05.042zm-.05-1.566l.05-.042l-1.296-1.523l-.05.042zm1.096-2.567l-.005-.065l-1.994.16l.005.065zm1.072-1.142l.065.005l.16-1.994l-.065-.005zm2.59-1.041l.042-.05l-1.523-1.296l-.042.05zM8.671 4.534a3 3 0 0 0 2.525-1.046L9.673 2.192a1 1 0 0 1-.842.348zM7.529 5.606a1 1 0 0 1 1.077-1.077l.16-1.994a3 3 0 0 0-3.23 3.231zm-1.041 2.59a3 3 0 0 0 1.046-2.525l-1.994.16a1 1 0 0 1-.348.842zm-.05 1.566a1 1 0 0 1 0-1.524L5.142 6.715a3 3 0 0 0 0 4.57zm1.096 2.567a3 3 0 0 0-1.046-2.525l-1.296 1.523a1 1 0 0 1 .348.842zm1.072 1.142a1 1 0 0 1-1.077-1.077l-1.994-.16a3 3 0 0 0 3.231 3.23zm4.156 1.09a1 1 0 0 1-1.524 0l-1.523 1.297a3 3 0 0 0 4.57 0zm3.71-2.167a1 1 0 0 1-1.078 1.077l-.16 1.994a3 3 0 0 0 3.23-3.231zm1.04-2.59a3 3 0 0 0-1.046 2.525l1.994-.16a1 1 0 0 1 .348-.842zm.05-1.566a1 1 0 0 1 0 1.524l1.296 1.523a3 3 0 0 0 0-4.57zm-1.096-2.567a3 3 0 0 0 1.046 2.525l1.296-1.523a1 1 0 0 1-.348-.842zm-1.072-1.142a1 1 0 0 1 1.077 1.077l1.994.16a3 3 0 0 0-3.231-3.23zm-2.59-1.041a3 3 0 0 0 2.525 1.046l-.16-1.994a1 1 0 0 1-.842-.348zm1.48-1.346a3 3 0 0 0-4.569 0l1.523 1.296a1 1 0 0 1 1.524 0zm-3.088 12.37a3 3 0 0 0-2.152-1.053l-.088 1.998a1 1 0 0 1 .717.351zM9.044 13.46a3 3 0 0 0-.373.007l.16 1.994a1 1 0 0 1 .125-.003zM10 22v-7.542H8V22zm5.33-8.534a3 3 0 0 0-.374-.007l.088 1.998a1 1 0 0 1 .125.003zm-.374-.007a3 3 0 0 0-2.152 1.053l1.523 1.296a1 1 0 0 1 .717-.35zm-.956 1V22h2v-7.542z" />
                                <path stroke="#031A44" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m14 8l-3 3l-1-1" />
                            </svg>
                        </span>
                        <h3 class="font-headline-h3 text-headline-h3">
                            {{ $locale === 'en' ? 'Real Impact' : 'Dampak Nyata' }}
                        </h3>
                    </div>
                    @if (! empty($case['impact_stats'][$locale]['stats'] ?? null))
                        <ul class="space-y-unit-md">
                            @foreach ($case['impact_stats'][$locale]['stats'] as $stat)
                                <li class="flex items-center gap-unit-md">
                                    <p class="text-tertiary-fixed font-bold text-[32px] leading-none shrink-0">
                                        {{ $stat['value'] }}</p>
                                    <p class="text-lg text-white/85 leading-[29px]">
                                        {{ $stat['label'] }}</p>
                                </li>
                            @endforeach
                        </ul>
                        @if (! empty($case['impact_stats'][$locale]['callout'] ?? null))
                            <div class="mt-unit-md bg-[rgba(239,244,247,0.1)] border-l-4 border-primary px-unit-md py-unit-sm">
                                <p
                                    class="text-base leading-normal text-white">{{ $case['impact_stats'][$locale]['callout'] }}</p>
                            </div>
                        @endif
                    @else
                        <ul class="space-y-3">
                            @foreach ($case['impact'][$locale] ?? [] as $impact)
                                <li class="flex gap-3 text-lg text-white/85">
                                    <span
                                        class="material-symbols-outlined text-tertiary-fixed text-[24px] mt-0.5">arrow_forward</span>
                                    <span>{{ $impact }}</span>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </article>
            </div>
            @else
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-unit-lg">
                <div class="lg:col-span-4">
                    <div class="lg:sticky lg:top-28">
                        <span
                            class="material-symbols-outlined text-primary text-5xl mb-unit-md">{{ $case['icon'] }}</span>
                        <p class="font-label-sm text-label-sm uppercase tracking-widest text-primary mb-unit-xs">
                            {{ $locale === 'en' ? 'Solution Detail' : 'Detail Solusi' }}
                        </p>
                        <h2 class="font-headline-h2 text-3xl md:text-headline-h2 text-on-background mb-unit-md">
                            {{ $locale === 'en' ? 'Context-specific implementation view' : 'Tampilan implementasi sesuai konteks' }}
                        </h2>
                        <p class="text-on-surface-variant">
                            {{ $locale === 'en'
                                ? 'The information below is mapped from the portfolio and capabilities document into a clearer solution page.'
                                : 'Informasi di bawah ini dipetakan dari dokumen portofolio dan kapabilitas menjadi halaman solusi yang lebih jelas.' }}
                        </p>
                    </div>
                </div>

                <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                    <article class="rounded-xl border border-outline-variant bg-surface-container-low p-unit-lg">
                        <div class="flex items-center gap-3 mb-unit-md">
                            <span
                                class="material-symbols-outlined text-[#031A44] bg-tertiary-fixed rounded-lg p-2 text-[24px]">warning</span>
                            <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                                {{ $locale === 'en' ? 'Problem' : 'Masalah' }}
                            </h3>
                        </div>
                        <p class="text-on-surface-variant leading-relaxed">{{ $case['challenge'][$locale] }}</p>
                    </article>

                    <article class="rounded-xl border border-primary/40 bg-white p-unit-lg">
                        <div class="flex items-center gap-3 mb-unit-md">
                            <span
                                class="material-symbols-outlined text-white bg-primary rounded-lg p-2 text-[24px]">lightbulb</span>
                            <h3 class="font-headline-h3 text-headline-h3 text-primary">
                                {{ $locale === 'en' ? 'Solution' : 'Solusi' }}
                            </h3>
                        </div>
                        <p class="text-on-surface-variant leading-relaxed">{{ $case['solution'][$locale] }}</p>
                    </article>

                    <article class="rounded-xl border border-outline-variant bg-white p-unit-lg">
                        <div class="flex items-center gap-3 mb-unit-md">
                            <span
                                class="material-symbols-outlined text-white bg-primary rounded-lg p-2 text-[24px]">fact_check</span>
                            <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                                {{ $locale === 'en' ? 'Key Features' : 'Fitur Utama' }}
                            </h3>
                        </div>
                        <ul class="space-y-3">
                            @foreach ($case['features'][$locale] ?? [] as $feature)
                                <li class="flex gap-3 text-on-surface-variant">
                                    <span
                                        class="material-symbols-outlined text-primary text-[18px] mt-1">check_circle</span>
                                    <span>{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </article>

                    <article class="rounded-xl border border-tertiary/50 bg-tertiary-fixed/10 p-unit-lg">
                        <div class="flex items-center gap-3 mb-unit-md">
                            <span
                                class="material-symbols-outlined text-[#031A44] bg-tertiary-fixed rounded-lg p-2 text-[24px]">bolt</span>
                            <h3 class="font-headline-h3 text-headline-h3 text-on-background">
                                {{ $locale === 'en' ? 'Business Impact' : 'Dampak Bisnis' }}
                            </h3>
                        </div>
                        <ul class="space-y-3">
                            @foreach ($case['impact'][$locale] ?? [] as $impact)
                                <li class="flex gap-3 text-on-surface-variant">
                                    <span
                                        class="material-symbols-outlined text-[#031A44] text-[18px] mt-1">arrow_circle_right</span>
                                    <span>{{ $impact }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </article>
                </div>
            </div>
            @endif
        </section>

        <section class="bg-surface-container-low px-margin-mobile md:px-margin-desktop py-unit-xl">
            @php $ctaHub = route('solusi-pendidikan' . $localeSuffix); @endphp
            @if ($variant === 'pilar')
                <div class="max-w-container-max mx-auto text-center flex flex-col items-center">
                    @php
                        $ctaTitle = $locale === 'en'
                            ? 'Discuss How This Solution Fits Your Institution'
                            : 'Diskusikan Bagaimana Solusi Ini Cocok untuk Institusi Anda';
                        $ctaHighlight = $locale === 'en' ? 'Solution Fits Your Institution' : 'Solusi Ini Cocok untuk Institusi';
                        $ctaTitle = str_replace(e($ctaHighlight), '<span class="text-primary">' . e($ctaHighlight) . '</span>', e($ctaTitle));
                    @endphp
                    <h2 class="font-headline-h2 font-semibold text-3xl md:text-headline-h2 md:text-[44px] text-on-background mb-unit-md max-w-3xl">
                        {!! $ctaTitle !!}
                    </h2>
                    <div class="flex flex-col sm:flex-row gap-unit-md">
                        <a class="inline-flex items-center justify-center bg-primary text-white px-unit-lg py-[11px] rounded-[20px] text-base font-semibold tracking-[0.03em] hover:opacity-90 transition-opacity"
                            href="{{ route('contact' . $localeSuffix) }}">
                            {{ $locale === 'en' ? 'Schedule a Discovery Session' : 'Jadwalkan Sesi Discovery' }}
                        </a>
                        <a class="inline-flex items-center justify-center bg-white text-on-background border border-[#D9D9D9] px-unit-lg py-[11px] rounded-[20px] text-base font-medium tracking-[0.03em] hover:border-primary transition-colors"
                            href="{{ $ctaHub }}">
                            {{ $locale === 'en' ? 'See Other Solutions' : 'Lihat Solusi Lainnya' }}
                        </a>
                    </div>
                </div>
            @else
                <div
                    class="max-w-container-max mx-auto flex flex-col lg:flex-row gap-unit-lg items-start lg:items-center justify-between">
                    <div class="max-w-3xl">
                        <p class="font-label-sm text-label-sm uppercase tracking-widest text-primary mb-unit-sm">
                            {{ $locale === 'en' ? 'Next Step' : 'Langkah Berikutnya' }}
                        </p>
                        <h2 class="font-headline-h2 text-3xl md:text-headline-h2 text-on-background mb-unit-sm">
                            {{ $locale === 'en' ? 'Discuss how this solution fits your operation' : 'Diskusikan bagaimana solusi ini cocok untuk operasional Anda' }}
                        </h2>
                        <p class="text-on-surface-variant">
                            {{ $locale === 'en'
                                ? 'Nakala stays primary for local delivery, with Romulus Digital as a trust layer for regional capability.'
                                : 'Nakala tetap menjadi primary untuk delivery lokal, dengan Romulus Digital sebagai trust layer untuk kapabilitas regional.' }}
                        </p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-unit-md">
                        <a class="inline-flex items-center justify-center gap-2 bg-primary text-white px-unit-lg py-unit-md rounded-[20px] font-button text-button uppercase tracking-wider hover:opacity-90 transition-opacity"
                            href="{{ route('contact' . $localeSuffix) }}">
                            {{ $locale === 'en' ? 'Start Free Consultation' : 'Mulai Konsultasi Gratis' }}
                            <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                        </a>
                        <a class="inline-flex items-center justify-center gap-2 border-2 border-primary text-primary px-unit-lg py-unit-md rounded-[20px] font-button text-button uppercase tracking-wider hover:bg-primary hover:text-white transition-colors"
                            href="{{ $ctaHub }}">
                            <span class="material-symbols-outlined text-[18px]">grid_view</span>
                            {{ $locale === 'en' ? 'See Other Solutions' : 'Lihat Solusi Lainnya' }}
                        </a>
                    </div>
                </div>
            @endif
        </section>
    </main>

    @include('partials.footer')
    @include('partials.lenis-scroll')

    <script>
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header.fixed');

            if (!header) {
                return;
            }

            if (window.scrollY > 20) {
                header.classList.add('shadow-md', 'h-16');
                header.classList.remove('h-20');
            } else {
                header.classList.remove('shadow-md', 'h-16');
                header.classList.add('h-20');
            }
        });

        // 3D Parallax Interaction for Hero Mockup
        const container = document.getElementById('hero-mockup-container');
        const wrapper = document.getElementById('hero-mockup-wrapper');
        
        if (container && wrapper) {
            container.addEventListener('mousemove', (e) => {
                const rect = container.getBoundingClientRect();
                const x = e.clientX - rect.left; 
                const y = e.clientY - rect.top;  
                
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const rotateX = ((y - centerY) / centerY) * -15; // Max 15 degree rotation
                const rotateY = ((x - centerX) / centerX) * 15;
                
                wrapper.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
            });
            
            container.addEventListener('mouseleave', () => {
                wrapper.style.transform = `perspective(1000px) rotateX(0deg) rotateY(0deg)`;
            });
        }

        // Lightweight canvas particle-network (from home page)
        (function() {
            const canvas = document.getElementById('hero-network');
            const section = document.getElementById('hero');
            if (!canvas || !section) return;

            const ctx = canvas.getContext('2d', { alpha: true });
            const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            const NODE_COLORS = ['18, 174, 208', '167, 244, 50']; // brand cyan / lime
            const LINE_COLOR = '18, 174, 208';

            let width = 0;
            let height = 0;
            let dpr = 1;
            let nodes = [];
            let animationId = null;
            let inViewport = true;
            let mouse = { x: null, y: null, radius: 110 };
            let resizeTimer = null;

            function nodeCountFor(w, h) {
                const area = w * h;
                const base = Math.floor(area / 24000);
                return Math.max(14, Math.min(50, base));
            }

            function buildNodes() {
                const count = nodeCountFor(width, height);
                nodes = Array.from({ length: count }, () => ({
                    x: Math.random() * width,
                    y: Math.random() * height,
                    vx: (Math.random() - 0.5) * 0.22,
                    vy: (Math.random() - 0.5) * 0.22,
                    r: Math.random() * 1.4 + 1,
                    color: Math.random() > 0.78 ? NODE_COLORS[1] : NODE_COLORS[0],
                }));
            }

            function resize() {
                const rect = section.getBoundingClientRect();
                width = rect.width;
                height = rect.height;
                dpr = Math.min(window.devicePixelRatio || 1, 2);
                canvas.width = Math.round(width * dpr);
                canvas.height = Math.round(height * dpr);
                canvas.style.width = width + 'px';
                canvas.style.height = height + 'px';
                ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
                buildNodes();
            }

            function drawFrame() {
                ctx.clearRect(0, 0, width, height);
                const linkDistance = Math.min(150, width * 0.15);

                for (const n of nodes) {
                    ctx.beginPath();
                    ctx.arc(n.x, n.y, n.r, 0, Math.PI * 2);
                    ctx.fillStyle = `rgba(${n.color}, 0.5)`;
                    ctx.fill();
                }

                for (let i = 0; i < nodes.length; i++) {
                    for (let j = i + 1; j < nodes.length; j++) {
                        const a = nodes[i];
                        const b = nodes[j];
                        const dx = a.x - b.x;
                        const dy = a.y - b.y;
                        const dist = Math.sqrt(dx * dx + dy * dy);
                        if (dist < linkDistance) {
                            const opacity = (1 - dist / linkDistance) * 0.18;
                            ctx.beginPath();
                            ctx.moveTo(a.x, a.y);
                            ctx.lineTo(b.x, b.y);
                            ctx.strokeStyle = `rgba(${LINE_COLOR}, ${opacity})`;
                            ctx.lineWidth = 1;
                            ctx.stroke();
                        }
                    }
                }
            }

            function step() {
                for (const n of nodes) {
                    n.x += n.vx;
                    n.y += n.vy;

                    if (n.x <= 0 || n.x >= width) n.vx *= -1;
                    if (n.y <= 0 || n.y >= height) n.vy *= -1;

                    if (mouse.x !== null) {
                        const dx = n.x - mouse.x;
                        const dy = n.y - mouse.y;
                        const dist = Math.sqrt(dx * dx + dy * dy);
                        if (dist < mouse.radius && dist > 0.01) {
                            const force = (mouse.radius - dist) / mouse.radius;
                            n.x += (dx / dist) * force * 1.1;
                            n.y += (dy / dist) * force * 1.1;
                        }
                    }
                }

                drawFrame();
                animationId = requestAnimationFrame(step);
            }

            function start() {
                if (animationId || prefersReducedMotion) return;
                animationId = requestAnimationFrame(step);
            }

            function stop() {
                if (animationId) {
                    cancelAnimationFrame(animationId);
                    animationId = null;
                }
            }

            section.addEventListener('mousemove', (e) => {
                const rect = section.getBoundingClientRect();
                mouse.x = e.clientX - rect.left;
                mouse.y = e.clientY - rect.top;
            });
            section.addEventListener('mouseleave', () => {
                mouse.x = null;
                mouse.y = null;
            });

            window.addEventListener('resize', () => {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(() => {
                    resize();
                    if (prefersReducedMotion) drawFrame();
                }, 150);
            });

            document.addEventListener('visibilitychange', () => {
                if (document.hidden) {
                    stop();
                } else if (inViewport) {
                    start();
                }
            });

            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        inViewport = entry.isIntersecting;
                        if (inViewport && !document.hidden) {
                            start();
                        } else {
                            stop();
                        }
                    });
                }, { threshold: 0.05 });
                observer.observe(section);
            }

            resize();
            if (prefersReducedMotion) {
                drawFrame();
            } else {
                start();
            }
        })();
    </script>
</body>

</html>

