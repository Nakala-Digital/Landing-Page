@php
    $locale = app()->getLocale();
    $localeSuffix = $locale === 'en' ? '.en' : '';
    $case = $solutionCase;
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
                    }
                }
            }
        }
    </script>
    </style>
</head>

<body class="bg-background text-on-background font-body-md">
    @include('partials.navbar')

    <main class="pt-20">
        <section class="bg-inverse-surface text-white">
            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-unit-xl">
                <a class="inline-flex items-center gap-2 text-sm font-bold uppercase tracking-widest text-tertiary-fixed hover:text-white transition-colors mb-unit-lg"
                    href="{{ route('solutions' . $localeSuffix) }}">
                    <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                    {{ $locale === 'en' ? 'Back to Solutions' : 'Kembali ke Solusi' }}
                </a>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-unit-lg items-end">
                    <div class="lg:col-span-8">
                        <div
                            class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-unit-md py-2 rounded-lg font-label-sm text-label-sm uppercase tracking-widest mb-unit-md">
                            <span class="material-symbols-outlined text-[18px]">{{ $case['icon'] }}</span>
                            {{ $case['category'][$locale] }}
                        </div>
                        <h1 class="font-headline-h1 text-4xl md:text-headline-h1 text-white leading-tight mb-unit-md">
                            {{ $case['title'][$locale] }}
                        </h1>
                        <p class="text-lg leading-relaxed text-inverse-on-surface max-w-3xl">
                            {{ $case['headline'][$locale] }} {{ $case['summary'][$locale] }}
                        </p>
                    </div>

                    <aside class="lg:col-span-4 space-y-unit-md">
                        <div class="border-l-4 border-primary bg-white/10 p-unit-lg rounded-xl">
                            <p class="text-xs font-bold uppercase tracking-widest text-tertiary-fixed mb-unit-sm">
                                {{ $locale === 'en' ? 'Who It Helps' : 'Untuk Siapa' }}
                            </p>
                            <p class="text-inverse-on-surface leading-relaxed">
                                {{ implode(' Â· ', $case['who_it_helps'][$locale]) }}
                            </p>
                        </div>
                        <div class="border-l-4 border-tertiary-fixed bg-white/10 p-unit-lg rounded-xl">
                            <p class="text-xs font-bold uppercase tracking-widest text-tertiary-fixed mb-unit-sm">
                                {{ $locale === 'en' ? 'Business Impact' : 'Dampak Bisnis' }}
                            </p>
                            <p class="text-inverse-on-surface leading-relaxed">
                                {{ $case['business_value'][$locale] }}
                            </p>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <section class="px-margin-mobile md:px-margin-desktop py-unit-xl max-w-container-max mx-auto">
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
                            @foreach ($case['features'][$locale] as $feature)
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
                            @foreach ($case['impact'][$locale] as $impact)
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
        </section>

        <section class="bg-surface-container-low px-margin-mobile md:px-margin-desktop py-unit-xl">
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
                <a class="inline-flex items-center justify-center gap-2 bg-primary text-white px-unit-lg py-unit-md rounded-[20px] font-button text-button uppercase tracking-wider hover:opacity-90 transition-opacity"
                    href="{{ route('contact' . $localeSuffix) }}">
                    {{ $locale === 'en' ? 'Start Free Consultation' : 'Mulai Konsultasi Gratis' }}
                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')

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
    </script>
</body>

</html>

