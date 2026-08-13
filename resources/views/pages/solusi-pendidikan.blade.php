<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ app()->getLocale() === 'en' ? 'Education Solutions | Nakala Digital' : 'Solusi Pendidikan | Nakala Digital' }}</title>
    @include('partials.seo', [
        'title' => app()->getLocale() === 'en' ? 'Education Solutions | Nakala Digital' : 'Solusi Pendidikan | Nakala Digital',
        'description' => app()->getLocale() === 'en'
            ? 'A digital ecosystem for schools, foundations, and higher education institutions — admissions, learning, payments, operations, and management dashboards, powered by AI Assistant.'
            : 'Ekosistem digital untuk sekolah, yayasan, dan perguruan tinggi — penerimaan, pembelajaran, pembayaran, operasional, dan dashboard manajemen, diperkuat AI Assistant.',
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
                },
            },
        }
    </script>
    <style>
        .hero-grid-pattern {
            background-image: linear-gradient(rgba(18, 174, 208, 0.15) 2px, transparent 2px),
                linear-gradient(90deg, rgba(18, 174, 208, 0.15) 2px, transparent 2px);
            background-size: 150px 150px;
        }

        .hero-fade-mask {
            -webkit-mask-image: linear-gradient(to bottom, black 0%, black 65%, transparent 88%);
            mask-image: linear-gradient(to bottom, black 0%, black 65%, transparent 88%);
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

<body
    class="bg-background text-on-background font-body-md selection:bg-primary-container selection:text-on-primary-container">
    @php
        $locale = app()->getLocale();
        $localeSuffix = $locale === 'en' ? '.en' : '';
        $cfg = config('solusi-pendidikan');
    @endphp

    @include('partials.navbar')

    <!-- Hero Section -->
    <header class="relative pt-32 pb-unit-xl overflow-x-clip bg-gradient-to-br from-surface-container-lowest via-surface to-primary/5">
        <div class="hero-fade-mask absolute inset-x-0 top-0 -bottom-40 pointer-events-none" aria-hidden="true">
            <div class="hero-grid-pattern absolute inset-0"></div>
            <div class="hero-orb absolute top-[240px] -right-[180px] h-96 w-96 rounded-full bg-[rgba(18,174,208,0.37)] blur-[160px]"></div>
            <div class="hero-orb hero-orb-delay absolute top-[640px] -left-24 h-96 w-96 rounded-full bg-[rgba(18,174,208,0.48)] blur-[160px]"></div>
        </div>

        <div class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="grid lg:grid-cols-2 gap-gutter items-center">
                <div class="z-10">
                    <div
                        class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-unit-md py-2 rounded-full font-label-sm text-label-sm uppercase tracking-widest mb-unit-md shadow-lg shadow-tertiary-fixed/20">
                        <span class="material-symbols-outlined text-[18px]">school</span>
                        {{ $cfg['hero']['badge'][$locale] }}
                    </div>
                    @php
                        $heroTitle = e($cfg['hero']['headline'][$locale]);
                        foreach (($cfg['hero']['highlight'][$locale] ?? []) as $phrase) {
                            $heroTitle = str_replace(
                                e($phrase),
                                '<span class="text-primary">' . e($phrase) . '</span>',
                                $heroTitle
                            );
                        }
                    @endphp
                    <h1
                        class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-on-background mb-6 leading-tight">
                        {!! $heroTitle !!}
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant mb-unit-lg max-w-xl">
                        {{ $cfg['hero']['summary'][$locale] }}
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('contact' . $localeSuffix) }}"
                            class="inline-flex items-center justify-center text-center bg-tertiary-fixed text-on-tertiary-fixed w-full sm:flex-1 sm:max-w-[300px] h-[50px] rounded-[20px] font-semibold text-[15px] tracking-[0.05em] shadow-lg shadow-tertiary-fixed/20 hover:shadow-xl hover:shadow-tertiary-fixed/30 hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300">
                            {{ $cfg['hero']['cta_primary'][$locale] }}
                        </a>
                        <a href="{{ route('portfolio' . $localeSuffix) }}"
                            class="inline-flex items-center justify-center text-center border border-primary/30 bg-primary/10 text-primary w-full sm:flex-1 sm:max-w-[300px] h-[50px] rounded-[20px] font-semibold text-[15px] tracking-[0.05em] hover:bg-primary hover:text-white transition-colors duration-300">
                            {{ $cfg['hero']['cta_secondary'][$locale] }}
                        </a>
                    </div>
                </div>

                <!-- Right: Ecosystem illustration -->
                <div class="relative mt-12 lg:mt-0 hidden md:block">
                    <img src="{{ asset('images/hero-solusi-pendidikan.png') }}"
                        alt="{{ $locale === 'en' ? 'Digital ecosystem for schools and universities' : 'Ekosistem digital untuk sekolah dan perguruan tinggi' }}"
                        class="w-full h-auto" />
                </div>
            </div>
        </div>
    </header>

    <!-- Pilih Kebutuhan Institusi Anda -->
    <section class="py-unit-xl bg-surface-container-lowest relative">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="text-center mb-unit-xl">
                <h2 class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 mb-4">
                    {{ $cfg['needs']['title'][$locale] }}</h2>
                <p class="max-w-2xl mx-auto font-body-lg text-body-lg text-on-surface-variant">
                    {{ $cfg['needs']['subtitle'][$locale] }}
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
                @foreach ($cfg['needs']['cards'] as $card)
                    @php
                        $isDark = $card['dark'] ?? false;
                    @endphp
                    <div class="relative {{ $isDark ? 'bg-on-background text-white' : 'bg-white border border-primary text-on-background' }} rounded-[24px] p-unit-lg shadow-sm overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 rounded-bl-[9999px] bg-primary/10" aria-hidden="true"></div>
                        @if ($card['icon'] === 'buildings')
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="w-16 h-16 mb-unit-md block {{ $isDark ? 'text-tertiary-fixed' : 'text-primary' }}"
                                aria-hidden="true">
                                <rect x="3" y="10" width="4.5" height="9"></rect>
                                <rect x="16.5" y="10" width="4.5" height="9"></rect>
                                <rect x="7.75" y="4.5" width="8.5" height="14.5"></rect>
                                <rect x="10.4" y="15.5" width="3.2" height="3.5"></rect>
                                <rect x="9.3" y="7" width="1.6" height="1.6"></rect>
                                <rect x="13.1" y="7" width="1.6" height="1.6"></rect>
                                <rect x="9.3" y="10.2" width="1.6" height="1.6"></rect>
                                <rect x="13.1" y="10.2" width="1.6" height="1.6"></rect>
                                <path d="M12 4.5V2"></path>
                                <path d="M12 2h3.2l-1.1 1.6 1.1 1.6H12z" fill="currentColor" stroke="none"></path>
                            </svg>
                        @else
                            <span class="material-symbols-outlined {{ $isDark ? 'text-tertiary-fixed' : 'text-primary' }} text-6xl mb-unit-md block">{{ $card['icon'] }}</span>
                        @endif
                        <h3 class="font-headline-h3 text-headline-h3 mb-unit-xs {{ $isDark ? 'text-white' : 'text-on-background' }}">{{ $card['title'][$locale] }}</h3>
                        <p class="mb-unit-md {{ $isDark ? 'text-white/80' : 'text-on-surface-variant' }}">{{ $card['subtitle'][$locale] }}</p>
                        <ul class="space-y-3 mb-unit-lg">
                            @foreach ($card['checklist'] as $item)
                                <li class="flex items-center gap-3">
                                    <span class="material-symbols-outlined {{ $isDark ? 'text-primary' : 'text-tertiary' }} text-[22px]">check_circle</span>
                                    <span class="{{ $isDark ? 'text-white' : 'text-on-background' }}">{{ $item[$locale] }}</span>
                                </li>
                            @endforeach
                        </ul>
                        @php
                            $needsRoute = 'kebutuhan-institusi' . $localeSuffix;
                            $needsHref = Route::has($needsRoute)
                                ? route($needsRoute, ['slug' => $card['detail_slug']])
                                : '#';
                        @endphp
                        <a href="{{ $needsHref }}"
                            class="inline-flex items-center gap-2 font-bold {{ $isDark ? 'text-tertiary-fixed' : 'text-on-background' }} hover:opacity-80 transition-opacity">
                            {{ $card['cta'][$locale] }}
                            <span class="material-symbols-outlined text-base">arrow_forward</span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Ekosistem Solusi Pendidikan -->
    <section class="py-unit-xl">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="text-center mb-unit-xl">
                <p class="font-label-sm text-label-sm uppercase tracking-[0.15em] text-primary mb-4">
                    {{ $cfg['pillars']['eyebrow'][$locale] }}</p>
                <h2 class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 mb-4">
                    {{ $cfg['pillars']['title'][$locale] }}</h2>
                <p class="max-w-2xl mx-auto font-body-lg text-body-lg text-on-surface-variant">
                    {{ $cfg['pillars']['subtitle'][$locale] }}
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
                @foreach ($cfg['pillars']['items'] as $pillar)
                    @php
                        $span = $pillar['span'] ?? 'md:col-span-5';
                        $bg = match ($pillar['bgColor']) {
                            'lime' => 'bg-tertiary-fixed text-on-surface',
                            'navy' => 'bg-on-secondary-fixed text-white',
                            'cyan' => 'bg-primary text-white',
                            default => 'bg-white border border-outline-variant/65 text-on-background',
                        };
                        $icon = match ($pillar['bgColor']) {
                            'lime' => 'text-on-surface',
                            'navy' => 'text-tertiary-fixed',
                            'cyan' => 'text-white',
                            default => 'text-primary',
                        };
                        $linkColor = match ($pillar['bgColor']) {
                            'lime' => '#031A44',
                            'navy', 'white' => '#12AED0',
                            'cyan' => '#FFFFFF',
                            default => '#12AED0',
                        };
                    @endphp
                    <a href="{{ route('solusi-pendidikan.detail' . $localeSuffix, $pillar['solution_slug']) }}"
                        class="{{ $span }} {{ $bg }} rounded-[34px] p-unit-lg flex flex-col shadow-sm hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                        <span class="material-symbols-outlined {{ $icon }} text-[60px] mb-unit-md">{{ $pillar['icon'] }}</span>
                        <h3 class="font-headline-h3 text-headline-h3 mb-unit-sm">{{ $pillar['title'][$locale] }}</h3>
                        <p class="text-[18px] leading-[150%] mb-unit-md {{ $pillar['bgColor'] === 'white' ? 'text-on-surface-variant' : ($pillar['bgColor'] === 'lime' ? 'text-on-surface/85' : 'text-white/85') }}">
                            {{ $pillar['description'][$locale] }}
                        </p>
                        <span class="mt-auto self-end inline-flex items-center gap-1 text-sm tracking-[0.05em]">
                            <span class="border-b-2 pb-0.5 leading-none" style="border-color: {{ $linkColor }}">
                                {{ $cfg['pillars']['cta'][$locale] }}
                            </span>
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- AI Assistant Preview -->
    <section class="py-unit-xl bg-on-background relative overflow-hidden">
        <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full bg-primary/10 blur-3xl pointer-events-none" aria-hidden="true"></div>
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid lg:grid-cols-2 gap-gutter items-center">
            <div class="text-white">
                <h2 class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 mb-unit-md">
                    {{ $cfg['ai_assistant']['title'][$locale] }}
                </h2>
                <p class="font-body-lg text-body-lg text-white/80 mb-unit-lg max-w-xl">
                    {{ $cfg['ai_assistant']['description'][$locale] }}
                </p>
                <div class="space-y-4">
                    @foreach ($cfg['ai_assistant']['features'] as $feature)
                        @php $featureAccent = $loop->first ? '#12AED0' : '#A7F432'; @endphp
                        <div class="flex items-center gap-4 bg-primary/10 border-l-[5px] rounded-r-xl p-unit-md"
                            style="border-left-color: {{ $featureAccent }}">
                            <span class="material-symbols-outlined {{ $loop->first ? 'text-primary' : 'text-tertiary-fixed' }} text-3xl shrink-0">{{ $feature['icon'] }}</span>
                            <div>
                                <p class="font-semibold text-white">{{ $feature['title'][$locale] }}</p>
                                <p class="text-sm text-white/75">{{ $feature['description'][$locale] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- WhatsApp-style chat mockup -->
            <div class="mt-12 lg:mt-0 max-w-sm mx-auto w-full">
                <div class="bg-[#020C1E] rounded-[40px] shadow-2xl p-3">
                    <div class="overflow-hidden rounded-[20px]">
                        <div class="bg-[#00677E] px-4 py-3 flex items-center gap-3">
                            <span class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center shrink-0" aria-hidden="true">
                                <span class="material-symbols-outlined text-white text-[22px]">smart_toy</span>
                            </span>
                            <div class="flex-1">
                                <p class="text-white font-semibold text-sm">{{ $cfg['ai_assistant']['chat']['contact'][$locale] }}</p>
                                <p class="text-[10px] text-white/80">{{ $cfg['ai_assistant']['chat']['status'][$locale] }}</p>
                            </div>
                        </div>
                        <div class="bg-[#F8FAFC] p-4 space-y-2.5 min-h-[480px]">
                            @foreach ($cfg['ai_assistant']['chat']['messages'] as $message)
                                @if ($message['author'] === 'system')
                                    <p class="text-center text-[10px] font-bold uppercase tracking-widest bg-[#E8F8C7] text-on-surface rounded-full py-1.5 px-4 w-max mx-auto">
                                        {{ $message['text'] }}
                                    </p>
                                @elseif ($message['author'] === 'user')
                                    <div class="flex justify-end">
                                        <p class="bg-[#00677E] text-white text-sm rounded-2xl rounded-tr-md px-3.5 py-2 shadow-sm max-w-[85%]">
                                            {{ $message['text'][$locale] }}
                                        </p>
                                    </div>
                                @else
                                    <div class="flex justify-start">
                                        <p class="bg-[#E2E8F0] text-on-background text-sm rounded-2xl rounded-tl-md px-3.5 py-2 shadow-sm max-w-[85%]">
                                            {{ $message['text'][$locale] }}
                                        </p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="bg-[#F1F5F9] px-4 py-2.5 flex items-center gap-2">
                            <span class="material-symbols-outlined text-on-surface-variant/50 text-xl">add_circle</span>
                            <div class="flex-1 bg-white rounded-full px-4 py-2 text-sm text-on-surface-variant/50">
                                {{ $locale === 'en' ? 'Type a message' : 'Ketik pesan' }}
                            </div>
                            <span class="material-symbols-outlined text-primary text-xl">mic</span>
                            <span class="material-symbols-outlined bg-[#00677E] text-white text-xl rounded-full p-1">send</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ekosistem Solusi Berbasis Portofolio -->
    <section class="py-unit-xl bg-surface-container-low">
        @php
            $portfolioCases = collect($cfg['portfolio']['case_ids'])
                ->map(fn ($id) => collect(config('solutions.cases'))->firstWhere('id', $id))
                ->filter()
                ->values();
        @endphp
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="text-center mb-unit-xl">
                <h2 class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 mb-4">
                    {{ $cfg['portfolio']['title'][$locale] }}</h2>
                <p class="max-w-2xl mx-auto font-body-lg text-body-lg text-on-surface-variant">
                    {{ $cfg['portfolio']['subtitle'][$locale] }}
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
                @foreach ($portfolioCases as $case)
                    <article
                        class="bg-white border border-primary/65 rounded-[24px] p-unit-lg solution-card shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                        <div class="flex h-full flex-col">
                            <span class="material-symbols-outlined text-primary text-4xl mb-unit-sm">{{ $case['icon'] }}</span>
                            <p class="font-label-sm text-label-sm uppercase tracking-widest text-primary mb-unit-xs">
                                {{ $case['category'][$locale] }}
                            </p>
                            <h3 class="font-headline-h3 text-headline-h3 mb-unit-sm text-on-background">
                                {{ $case['title'][$locale] }}
                            </h3>
                            <p class="text-on-surface-variant text-sm mb-unit-md">
                                {{ $case['blurb'][$locale] ?? $case['summary'][$locale] }}
                            </p>
                            @php
                                $accentStripe = match ($case['accent'] ?? 'cyan') {
                                    'lime' => 'border-[#A7F432]',
                                    'navy' => 'border-[#031A44]',
                                    default => 'border-[#12AED0]',
                                };
                            @endphp
                            <div class="bg-[#EFF4F7] border-l-4 pl-unit-sm pr-unit-sm py-unit-xs mb-unit-md {{ $accentStripe }}">
                                <p class="text-xs font-bold text-on-background mb-0.5">
                                    {{ $locale === 'en' ? 'Capability' : 'Kapabilitas' }}</p>
                                <p class="text-xs text-on-surface-variant">{{ $case['capability'] }}</p>
                            </div>
                            <a class="mt-auto self-end text-on-background font-bold text-sm inline-flex items-center gap-1"
                                href="{{ route('solusi-pendidikan.detail' . $localeSuffix, $case['id']) }}">
                                <span class="border-b-2 text-on-background pb-0.5 leading-none border-[#12AED0]">
                                    {{ $cfg['portfolio']['cta'][$locale] }}
                                </span>
                                <span class="material-symbols-outlined">chevron_right</span>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Partner Badge -->
    @include('partials.partner-badge')

    <!-- Pilar Layanan Kami -->
    <section class="py-unit-xl bg-surface-container-lowest">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="text-center mb-unit-xl">
                <p class="font-label-sm text-label-sm uppercase tracking-[0.15em] text-primary mb-4">
                    {{ $cfg['pillars']['eyebrow'][$locale] }}</p>
                <h2 class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 mb-4">
                    {{ $locale === 'en' ? 'Our Service Pillars' : 'Pilar Layanan Kami' }}</h2>
                <p class="max-w-2xl mx-auto font-body-lg text-body-lg text-on-surface-variant">
                    {{ $locale === 'en'
                        ? 'Comprehensive technical capabilities designed for enterprise scale and local agility.'
                        : 'Kemampuan teknis komprehensif yang dirancang untuk skala perusahaan dan kelincahan lokal.' }}
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
                @foreach (config('service-pillars.pillars') as $service)
                    @include('partials.service-card', [
                        'service' => $service,
                        'locale' => $locale,
                    ])
                @endforeach
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-unit-xl bg-primary overflow-hidden relative">
        <div class="absolute -left-32 top-0 w-96 h-96 rounded-full bg-white/10 blur-3xl pointer-events-none" aria-hidden="true"></div>
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop text-center relative z-10">
            <h2 class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-white mb-unit-md max-w-3xl mx-auto">
                {{ $cfg['cta']['title'][$locale] }}
            </h2>
            <p class="font-body-lg text-body-lg text-white/90 mb-unit-lg max-w-2xl mx-auto">
                {{ $cfg['cta']['description'][$locale] }}
            </p>
            <a href="{{ route('contact' . $localeSuffix) }}"
                    class="inline-flex items-center justify-center bg-tertiary-fixed text-on-tertiary-fixed px-10 py-4 rounded-[20px] font-button font-medium text-button uppercase tracking-[0.05em] gap-2 shadow-lg hover:-translate-y-0.5 hover:shadow-xl transition-all duration-300">
                {{ $cfg['cta']['button'][$locale] }}
            </a>
        </div>
    </section>

    @include('partials.footer')
    @include('partials.lenis-scroll')

    <script>
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header.fixed');
            if (!header) return;
            if (window.scrollY > 50) {
                header.classList.add('py-2', 'shadow-md', 'h-16');
                header.classList.remove('h-20');
            } else {
                header.classList.remove('py-2', 'shadow-md', 'h-16');
                header.classList.add('h-20');
            }
        });
    </script>
</body>

</html>