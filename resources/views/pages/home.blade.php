<!DOCTYPE html>

<html class="scroll-smooth" lang="{{ app()->getLocale() }}"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>{{ app()->getLocale() === 'en' ? 'Nakala Digital | Local Delivery, Regional Capability' : 'Nakala Digital | Layanan Lokal, Kemampuan Regional' }}</title>
@include('partials.seo', [
    'title' => app()->getLocale() === 'en' ? 'Nakala Digital | Local Delivery, Regional Capability' : 'Nakala Digital | Layanan Lokal, Kemampuan Regional',
    'description' => app()->getLocale() === 'en' 
        ? 'AI, Software Development & Digital Solutions Partner for Business Growth. Your strategic partner in Indonesia with regional expertise.' 
        : 'Mitra Solusi Digital, Pengembangan Perangkat Lunak & AI untuk Pertumbuhan Bisnis Anda.'
])
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "electric-cyan": "#12AED0",
              "midnight-navy": "#031A44",
              "impact-lime": "#A7F432",
              "primary": "#12AED0",
              "primary-container": "#12AED0",
              "on-primary": "#ffffff",
              "on-primary-container": "#ffffff",
              "on-secondary-fixed": "#031A44",
              "tertiary-fixed": "#A7F432",
              "on-tertiary-fixed": "#031A44",
              "on-background": "#334155",
              "on-surface-variant": "#64748b",
              "inverse-surface": "#031A44",
              "background": "#F7FAFC",
              "surface": "#F7FAFC",
              "surface-container-lowest": "#ffffff",
              "surface-container-low": "#f1f5f9",
              "surface-container": "#e2e8f0",
              "surface-container-high": "#e2e8f0",
              "surface-container-highest": "#cbd5e1",
              "outline": "#94a3b8",
              "outline-variant": "#e2e8f0",
              "primary-fixed-dim": "#56d6f9",
              "on-surface": "#334155",
              "surface-variant": "#e2e8f0",
              "on-error": "#ffffff",
              "error": "#ba1a1a",
              "error-container": "#ffdad6",
              "on-error-container": "#93000a",
              "on-tertiary": "#ffffff",
              "tertiary": "#426900",
              "tertiary-fixed-dim": "#90db0e",
              "secondary": "#4b5d8a",
              "on-secondary": "#ffffff",
              "secondary-container": "#b9cbff",
              "on-secondary-container": "#435582",
              "secondary-fixed": "#d9e2ff",
              "secondary-fixed-dim": "#b3c6f9",
              "on-secondary-fixed-variant": "#334671",
              "surface-tint": "#12AED0",
              "surface-dim": "#d5dbdd",
              "surface-bright": "#f5fafd",
              "inverse-primary": "#56d6f9",
              "inverse-on-surface": "#ecf1f4",
              "on-primary-fixed": "#001f27",
              "on-primary-fixed-variant": "#004e5f",
              "primary-fixed": "#b2ebff",
              "on-tertiary-fixed-variant": "#314f00",
              "on-tertiary-container": "#253e00",
              "tertiary-container": "#73b100"
            },
            borderRadius: {
              DEFAULT: "4px",
              lg: "8px",
              xl: "12px",
              "2xl": "24px",
              full: "9999px"
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
              "display-lg-mobile": ["Poppins"],
              "body-md": ["Poppins"],
              button: ["Poppins"],
              "headline-h1-mobile": ["Poppins"],
              "headline-h2": ["Poppins"],
              "body-lg": ["Poppins"],
              "headline-h2-mobile": ["Poppins"],
              "headline-h1": ["Poppins"],
              "headline-h3": ["Poppins"],
              "display-lg": ["Poppins"],
              "label-sm": ["Poppins"]
            },
            fontSize: {
              "display-lg-mobile": ["48px", { lineHeight: "1.1", fontWeight: "700" }],
              "body-md": ["16px", { lineHeight: "1.6", fontWeight: "400" }],
              button: ["15px", { lineHeight: "1.0", letterSpacing: "0.05em", fontWeight: "600" }],
              "headline-h1-mobile": ["36px", { lineHeight: "1.2", fontWeight: "700" }],
              "headline-h2": ["40px", { lineHeight: "1.3", fontWeight: "600" }],
              "body-lg": ["18px", { lineHeight: "1.6", fontWeight: "400" }],
              "headline-h2-mobile": ["28px", { lineHeight: "1.3", fontWeight: "600" }],
              "headline-h1": ["56px", { lineHeight: "1.2", fontWeight: "700" }],
              "headline-h3": ["24px", { lineHeight: "1.4", fontWeight: "600" }],
              "display-lg": ["72px", { lineHeight: "1.1", letterSpacing: "-0.02em", fontWeight: "700" }],
              "label-sm": ["12px", { lineHeight: "1.0", fontWeight: "700" }]
            }
          }
        }
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }
        .bento-item {
            border: 1px solid #E5E7EB;
            transition: all 0.3s ease;
        }
        .bento-item:hover {
            border-color: #12AED0;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md selection:bg-primary-fixed selection:text-on-primary-fixed">
@include('partials.navbar')
<main class="pt-20">
<!-- Hero Section -->
<section class="relative overflow-hidden bg-white py-unit-xl lg:py-32 border-b border-outline-variant">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 lg:grid-cols-2 gap-unit-xl items-center">
<div class="space-y-unit-lg z-10">
<div class="inline-flex items-center gap-2 bg-impact-lime text-midnight-navy px-4 py-1.5 rounded-full font-label-sm text-label-sm uppercase tracking-widest">
{{ app()->getLocale() === 'en' ? 'INDONESIA TECH PARTNER' : 'MITRA TEKNOLOGI INDONESIA' }}
</div>
<h1 class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-midnight-navy max-w-2xl">
                        {{ app()->getLocale() === 'en' ? 'Nakala Digital' : 'Nakala Digital' }}
</h1>
<p class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-electric-cyan max-w-xl">
                        {{ app()->getLocale() === 'en' ? 'Indonesia AI Technology, Software Development & Digital Solutions Partner' : 'Mitra AI Technology, Pengembangan Software & Solusi Digital Indonesia' }}
</p>
<p class="font-body-lg text-body-lg text-body-text max-w-xl">
                        {{ app()->getLocale() === 'en'
                            ? 'We help organizations build professional, meaningful, and impactful digital solutions through technology consulting, AI, custom software, QA governance, and delivery excellence.'
                            : 'Kami membantu organisasi membangun solusi digital yang profesional, bermakna, dan berdampak melalui konsultasi teknologi, AI, software kustom, tata kelola QA, dan keunggulan pengiriman.' }}
                    </p>
<div class="flex flex-col sm:flex-row gap-unit-md pt-unit-md">
@php $localeSuffix = app()->getLocale() === 'en' ? '.en' : ''; @endphp
<a href="{{ route('contact' . $localeSuffix) }}" class="inline-flex items-center justify-center bg-electric-cyan text-white px-10 py-5 rounded-lg font-button text-lg uppercase tracking-widest shadow-lg hover:bg-electric-cyan/90 transition-colors">
                            {{ app()->getLocale() === 'en' ? 'Discuss Your Project' : 'Diskusikan Proyek Anda' }}
                        </a>
<a href="{{ route('services' . $localeSuffix) }}" class="inline-flex items-center justify-center border-2 border-midnight-navy text-midnight-navy px-10 py-5 rounded-lg font-button text-lg uppercase tracking-widest hover:bg-midnight-navy hover:text-white transition-colors">
                            {{ app()->getLocale() === 'en' ? 'Explore Services' : 'Jelajahi Layanan' }}
                        </a>
</div>
<div class="flex items-center gap-3 pt-unit-sm">
<span class="font-label-sm text-body-text uppercase tracking-widest text-sm">{{ app()->getLocale() === 'en' ? 'Representative & Strategic Delivery Partner of' : 'Representative & Strategic Delivery Partner dari' }}</span>
<img alt="Romulus Digital" class="h-8 w-auto object-contain opacity-80" src="{{ asset('assets/romulus-hitam.png') }}"/>
</div>
</div>
<div class="relative">
<img alt="AI Dashboard Visualization" class="relative rounded-2xl shadow-xl border border-outline-variant w-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdAJsV3r7YbZ2WLV8HysYxDcgC09shBxz2HJ-L9ziBmit0_beLik2uLipeqEcSm9h5oRtYrp81qEN_Ihx3sqMZADJzKvtHVNv0gwnsDYOnW4nBjc_-sTG4TVEJCTAlXHoJsQV3QrgUh8sBOeWXG09W_itrv5BDyw2rdaHr9mRe8JORt7XcJ6e0gZQBFvbLPG09QhqnaRAvX1m85IW87-9UQUK60uuGFvPTkf7qufJinQhj0LLnucDKM7bkS1DbWzrEDTjwN9agOJnZ"/>
</div>
</div>
</section>
<!-- Partner Badge Section -->
<section class="bg-on-secondary-fixed py-unit-lg border-y border-outline">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop flex flex-col md:flex-row items-center justify-between gap-unit-md">
<span class="font-label-sm text-secondary-fixed tracking-[0.2em] uppercase text-center md:text-left">Representative &amp; Strategic Delivery Partner</span>
<div class="bg-surface-container-lowest/10 p-unit-md rounded-xl border border-white/10 hover:border-primary-fixed-dim transition-colors group">
<img alt="Romulus Digital Logo" class="h-12 object-contain opacity-90 group-hover:opacity-100 transition-opacity bg-white rounded-md p-2" src="{{ asset('assets/romulus-hitam.png') }}"/>
</div>
</div>
</section>
<!-- Social Proof Metrics -->
<section class="py-unit-xl bg-surface">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="grid grid-cols-2 md:grid-cols-4 gap-gutter">
<div class="text-center p-unit-lg border-r border-outline-variant last:border-0">
<div class="font-display-lg-mobile md:text-[64px] font-bold text-primary mb-unit-xs">8+</div>
<div class="font-label-sm text-on-surface-variant uppercase tracking-widest">{{ __('messages.metric_projects') }}</div>
</div>
<div class="text-center p-unit-lg border-r border-outline-variant last:border-0">
<div class="font-display-lg-mobile md:text-[64px] font-bold text-primary mb-unit-xs">3+</div>
<div class="font-label-sm text-on-surface-variant uppercase tracking-widest">{{ __('messages.metric_expertise') }}</div>
</div>
<div class="text-center p-unit-lg border-r border-outline-variant last:border-0">
<div class="font-display-lg-mobile md:text-[64px] font-bold text-primary mb-unit-xs">3</div>
<div class="font-label-sm text-on-surface-variant uppercase tracking-widest">{{ __('messages.metric_hubs') }}</div>
</div>
<div class="text-center p-unit-lg">
<div class="font-display-lg-mobile md:text-[64px] font-bold text-primary mb-unit-xs">24/7</div>
<div class="font-label-sm text-on-surface-variant uppercase tracking-widest">{{ __('messages.metric_support') }}</div>
</div>
</div>
</div>
</section>
<!-- Capabilities Bento Grid -->
<section class="py-unit-xl bg-surface-container-low">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="mb-unit-xl max-w-2xl">
<h2 class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-background mb-unit-md">{{ __('messages.cap_title') }}</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">{{ __('messages.cap_desc') }}</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
<!-- Bento Item 1 -->
<div class="md:col-span-8 bg-surface-container-lowest p-unit-lg rounded-lg border border-outline-variant flex flex-col justify-between group hover:border-primary-container transition-all">
<div class="space-y-unit-md">
<span class="material-symbols-outlined text-primary text-4xl" data-weight="fill">settings_suggest</span>
<h3 class="font-headline-h3 text-headline-h3">{{ __('messages.cap_software') }}</h3>
<p class="font-body-md text-on-surface-variant max-w-md">{{ __('messages.cap_software_desc') }}</p>
</div>
<div class="mt-unit-lg">
<ul class="grid grid-cols-2 gap-unit-sm">
<li class="flex items-center gap-unit-xs text-on-surface-variant"><span class="material-symbols-outlined text-primary text-sm">check_circle</span> {{ app()->getLocale() === 'en' ? 'Web Apps' : 'Aplikasi Web' }}</li>
<li class="flex items-center gap-unit-xs text-on-surface-variant"><span class="material-symbols-outlined text-primary text-sm">check_circle</span> {{ app()->getLocale() === 'en' ? 'Mobile Native' : 'Mobile Native' }}</li>
<li class="flex items-center gap-unit-xs text-on-surface-variant"><span class="material-symbols-outlined text-primary text-sm">check_circle</span> {{ app()->getLocale() === 'en' ? 'API Integration' : 'Integrasi API' }}</li>
<li class="flex items-center gap-unit-xs text-on-surface-variant"><span class="material-symbols-outlined text-primary text-sm">check_circle</span> {{ app()->getLocale() === 'en' ? 'Legacy Migration' : 'Migrasi Sistem' }}</li>
</ul>
</div>
</div>
<!-- Bento Item 2 -->
<div class="md:col-span-4 bg-on-secondary-fixed p-unit-lg rounded-lg text-on-secondary border border-transparent hover:border-primary-fixed-dim transition-all">
<div class="h-full flex flex-col justify-between">
<div class="space-y-unit-md">
<span class="material-symbols-outlined text-tertiary-fixed text-4xl">psychology</span>
<h3 class="font-headline-h3 text-headline-h3">{{ __('messages.cap_ai') }}</h3>
<p class="font-body-md text-secondary-fixed">{{ __('messages.cap_ai_desc') }}</p>
</div>
<div class="bg-surface-container-lowest/10 p-unit-md rounded mt-unit-lg">
<span class="font-label-sm text-tertiary-fixed uppercase">{{ app()->getLocale() === 'en' ? 'Strategic Focus' : 'Fokus Strategis' }}</span>
</div>
</div>
</div>
<!-- Bento Item 3 -->
<div class="md:col-span-4 bg-surface-container-highest p-unit-lg rounded-lg border border-outline-variant group hover:bg-surface-container-lowest transition-all">
<span class="material-symbols-outlined text-primary text-4xl mb-unit-md">query_stats</span>
<h3 class="font-headline-h3 text-headline-h3 mb-unit-sm">{{ __('messages.cap_consulting') }}</h3>
<p class="font-body-md text-on-surface-variant">{{ __('messages.cap_consulting_desc') }}</p>
</div>
<!-- Bento Item 4 -->
<div class="md:col-span-8 bg-midnight-navy p-unit-lg rounded-lg text-white relative overflow-hidden flex items-center">
<div class="z-10 space-y-unit-md">
<h3 class="font-headline-h2-mobile text-white">{{ __('messages.cap_local_title') }}</h3>
<p class="font-body-lg text-primary-fixed max-w-lg">{{ __('messages.cap_local_desc') }}</p>
</div>
<div class="absolute right-[-10%] top-[-10%] opacity-10">
<span class="material-symbols-outlined text-[300px]">language</span>
</div>
</div>
</div>
</div>
</section>
<!-- About / Narrative Section -->
<section class="py-unit-xl bg-surface-container-lowest">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 lg:grid-cols-2 gap-unit-xl items-center">
<div class="order-2 lg:order-1">
<img alt="Nakala Digital Team Collaboration" class="rounded-lg shadow-xl grayscale hover:grayscale-0 transition-all duration-700" data-alt="A diverse group of professional software engineers and digital consultants collaborating in a sleek, minimalist office environment with floor-to-ceiling glass windows. The lighting is crisp and natural, emphasizing a bright, light-mode corporate aesthetic. They are working around a large table with modern laptops, reflecting a mood of technical rigor and collaborative problem-solving. The scene uses a palette of whites, cool greys, and subtle electric cyan accents." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIkKof9jfTV3ZLWx_WT91Cn9j9BwU7L7iRjUW8s1_CpNFUfxi-TxWpYXf4MN9di_-4rUJf_qv_npecCOhWJGdWvG-oJ9ed48cN99fs4UaCdjYRQmYsUgEjNPeA54mlQTk71PJzoRl54GfT46lqT1VAFHs063ifm6xPl595wy6lf2epw0d4JJRnhAVc7P-QdGRxKrS_qvU4NK1q6jvMKydHVH4hwGa-RIzInomT87uNg9wwwpDupaYwgxaNy0SKFyD7MXIVWIGO_g8O"/>
</div>
<div class="order-1 lg:order-2 space-y-unit-lg">
<span class="font-label-sm text-primary uppercase tracking-[0.3em]">{{ __('messages.who_badge') }}</span>
<h2 class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-background">{{ __('messages.who_title') }}</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">
                        {{ __('messages.who_desc1') }}
                    </p>
<p class="font-body-md text-body-md text-on-surface-variant">
                        {{ __('messages.who_desc2') }}
                    </p>
<div class="grid grid-cols-2 gap-unit-md border-l-4 border-primary pl-unit-md">
<div>
<span class="block font-headline-h3 text-on-background">100%</span>
<span class="font-label-sm text-on-surface-variant uppercase">{{ __('messages.who_local_commit') }}</span>
</div>
<div>
<span class="block font-headline-h3 text-on-background">ISO</span>
<span class="font-label-sm text-on-surface-variant uppercase">{{ __('messages.who_iso') }}</span>
</div>
</div>
</div>
</div>
</section>
<!-- Final CTA -->
<section class="py-unit-xl bg-on-secondary-fixed text-center relative overflow-hidden">
<div class="absolute inset-0 opacity-5">
<div class="grid grid-cols-6 h-full">
<div class="border-r border-white"></div>
<div class="border-r border-white"></div>
<div class="border-r border-white"></div>
<div class="border-r border-white"></div>
<div class="border-r border-white"></div>
<div></div>
</div>
</div>
<div class="max-w-2xl mx-auto px-margin-mobile relative z-10 space-y-unit-lg">
<h2 class="font-headline-h1-mobile text-headline-h1-mobile text-white">{{ __('messages.final_cta_title') }}</h2>
<p class="font-body-lg text-secondary-fixed">{{ __('messages.final_cta_desc') }}</p>
<div class="pt-unit-md">
<a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}" class="inline-block bg-tertiary-fixed text-on-tertiary-fixed px-12 py-6 rounded-lg font-button text-xl uppercase tracking-widest shadow-xl hover:scale-105 transition-transform active:scale-100">
                        {{ __('messages.final_cta_btn') }}
                    </a>
</div>
</div>
</section>
</main>
<!-- Footer -->
@include('partials.footer')
<script>
        // Simple scroll header effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header.fixed');
            if (window.scrollY > 20) {
                header.classList.add('h-16');
                header.classList.remove('h-20');
            } else {
                header.classList.remove('h-16');
                header.classList.add('h-20');
            }
        });
    </script>
</body></html>


