@php
    $locale = app()->getLocale();
    $localeSuffix = $locale === 'en' ? '.en' : '';
    $data = $article;

    $heroClass =
        $article['slug'] === 'ppdb-al-azhar'
            ? 'w-full h-auto mx-auto md:float-left md:mr-6 mb-4 md:max-h-[300px] md:w-auto'
            : 'w-full max-w-4xl';
@endphp

<!DOCTYPE html>
<html lang="{{ $locale }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ $data['title'][$locale] }} | Nakala Digital</title>
    @include('partials.seo', [
        'title' => $data['title'][$locale] . ' | Nakala Digital',
        'description' => strip_tags($data['content'][$locale]),
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
                        "headline-h1": ["50px", {
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
        .article-content h2 {
            color: #031A44;
            font-family: 'Poppins', sans-serif;
            font-size: 25px;
            font-weight: 600;
            line-height: 1.3;
            margin-top: 20px;
            margin-bottom: 15px;
        }

        @media (min-width: 768px) {
            .article-content h2 {
                font-size: 25px;
                line-height: 1.25;
            }
        }

        .article-content h3 {
            color: #031A44;
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
            font-weight: 600;
            line-height: 1.5;
            margin-top: 20px;
            margin-bottom: 15px;
        }

        .article-content p {
            color: #031A44;
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        .article-content ul,
        .article-content ol {
            padding-left: 24px;
            margin-bottom: 12px;
        }

        .article-content li {
            color: #031A44;
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 8px;
        }

        .article-content strong {
            color: #031A44;
            font-weight: 700;
        }

        .article-content a {
            color: #12AED0;
            text-decoration: none;
        }

        .article-content a:hover {
            text-decoration: underline;
        }

        .article-content img {
            border-radius: 0.5rem;
            border: 1px solid #12AED0;
            max-width: 100%;
            height: auto;
            margin: 24px 0;
        }

        .article-content img[align="left"],
        .article-content img[style*="float: left"],
        .article-content img[style*="float:left"] {
            float: left;
            margin: 8px 24px 16px 0;
            max-width: 50%;
        }

        .article-content img[align="right"],
        .article-content img[style*="float: right"],
        .article-content img[style*="float:right"] {
            float: right;
            margin: 8px 0 16px 24px;
            max-width: 50%;
        }

        .article-content blockquote {
            border-left: 4px solid #12AED0;
            color: #031A44;
            background: #eff4f7;
            padding: 16px;
            border-radius: 0 0.5rem 0.5rem 0;
            margin: 24px 0;
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            line-height: 1.6;
        }

        .article-content hr {
            border-color: #12AED0;
            margin: 32px 0;
        }

        @media (max-width: 640px) {
            .article-content h2 {
                font-size: 20px;
            }

            .article-content p {
                font-size: 14px;
                line-height: 1.6;
            }

            .article-content li {
                font-size: 14px;
            }
        }
    </style>
</head>

<body class="bg-background text-on-background font-body-md">
    @include('partials.navbar')

    <main class="pt-20">

        {{-- Article Content --}}
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-unit-lg md:py-unit-xl">

            {{-- Back Button --}}
            <a class="inline-flex items-center gap-2 text-sm font-bold uppercase tracking-widest text-primary hover:text-on-background transition-colors mb-unit-lg"
                href="{{ route('insights' . $localeSuffix, ['portal' => $portal]) }}">
                <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                {{ $locale === 'en' ? 'Back to Insights' : 'Kembali ke Insight' }}
            </a>

            {{-- Badge Category --}}
            <div class="flex items-center gap-unit-sm mb-unit-md">
                <span class="text-primary font-label-sm font-[600] text-[15px] uppercase tracking-[0.5em]">
                    {{ $article['category'][$locale] }}
                </span>
            </div>

            {{-- Title --}}
            <h1
                class="font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-on-background max-w-4xl mb-unit-md">
                {{ $article['title'][$locale] }}
            </h1>

            {{-- Date & Author --}}
            <div
                class="flex flex-wrap items-center gap-x-4 gap-y-1 text-on-surface-variant font-body-md text-body-md mb-unit-lg">
                <span class="flex items-center gap-1">
                    <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                    {{ \Carbon\Carbon::parse($article['date'])->locale($locale)->isoFormat('D MMMM YYYY') }}
                </span>
            </div>

            {{-- Hero Image --}}
            <img class="{{ $heroClass }} rounded-3xl mb-unit-md" src="{{ $article['image'] }}"
                alt="{{ $article['title'][$locale] }}" />

            {{-- Article --}}
            <div class="article-content max-w-4xl">
                {!! $article['content'][$locale] !!}
            </div>

            {{-- RIGHT: Sidebar --}}
            <aside class="lg:col-span-4 space-y-unit-lg">
            </aside>
        </div>

        {{-- CTA Section --}}
        <section class="bg-on-secondary-fixed text-center py-unit-xl">
            <div class="max-w-2xl mx-auto px-margin-mobile space-y-unit-lg">
                <h2 class="font-headline-h1-mobile text-headline-h1-mobile text-white">
                    {{ $locale === 'en' ? 'Want to discuss D365 Finance solutions?' : 'Ingin mendiskusikan solusi D365 Finance?' }}
                </h2>
                <p class="font-body-lg text-secondary-fixed">
                    {{ $locale === 'en'
                        ? 'Our team of certified Microsoft Dynamics 365 experts is ready to help you optimize your financial operations.'
                        : 'Tim ahli Microsoft Dynamics 365 bersertifikasi kami siap membantu Anda mengoptimalkan operasional keuangan.' }}
                </p>
                <div class="pt-unit-md">
                    <a href="{{ route('contact' . $localeSuffix) }}"
                        class="inline-block bg-tertiary-fixed text-on-tertiary-fixed px-12 py-6 rounded-[20px] font-button text-xl uppercase tracking-widest shadow-xl hover:scale-105 transition-transform active:scale-100">
                        {{ $locale === 'en' ? 'Free Consultation' : 'Konsultasi Gratis' }}
                    </a>
                </div>
            </div>
        </section>
    </main>

    @include('partials.partner-badge')
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

