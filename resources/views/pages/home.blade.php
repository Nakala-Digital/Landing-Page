<!DOCTYPE html>

<html class="scroll-smooth" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        {{ app()->getLocale() === 'en' ? 'Nakala Digital | Local Delivery, Regional Capability' : 'Nakala Digital | Layanan Lokal, Kemampuan Regional' }}
    </title>
    @include('partials.seo', [
        'title' =>
            app()->getLocale() === 'en'
                ? 'Nakala Digital | Local Delivery, Regional Capability'
                : 'Nakala Digital | Layanan Lokal, Kemampuan Regional',
        'description' =>
            app()->getLocale() === 'en'
                ? 'AI, Software Development & Digital Solutions Partner for Business Growth. Your strategic partner in Indonesia with regional expertise.'
                : 'Mitra Solusi Digital, Pengembangan Perangkat Lunak & AI untuk Pertumbuhan Bisnis Anda.',
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
            display: inline-block;
            vertical-align: middle;
        }

        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }

        .bento-item {
            border: 1px solid #12AED0;
            transition: all 0.3s ease;
        }

        .bento-item:hover {
            border-color: #12AED0;
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.35s ease-out;
        }

        .accordion-item.active .accordion-content {
            max-height: 600px;
        }

        .accordion-item.active .toggle-icon {
            transform: rotate(180deg);
        }
    </style>
</head>

<body class="bg-background text-on-background font-body-md selection:bg-primary-fixed selection:text-on-primary-fixed">
    @include('partials.navbar')
    <main class="pt-20">
        <!-- Hero Section -->
        <section
            class="relative overflow-hidden bg-surface-container-lowest pt-unit-lg pb-unit-xl lg:pt-unit-xl lg:pb-32 border-b border-outline-variant">
            <div
                class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 lg:grid-cols-2 gap-unit-xl items-center">
                <div class="space-y-unit-lg z-10">
                    <div
                        class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-4 py-1.5 rounded-full font-label-sm text-label-sm uppercase tracking-widest">
                        <span class="material-symbols-outlined text-[16px]">bolt</span>
                        {{ __('messages.hero_badge') }}
                    </div>
                    <h1
                        class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-on-background max-w-2xl">
                        @php $heroHighlight = app()->getLocale() === 'en' ? 'Local Delivery, Regional Capability' : 'Pengiriman Lokal, Kemampuan Regional'; @endphp
                        {!! str_replace(
                            $heroHighlight,
                            '<span class="text-primary">' . $heroHighlight . '</span>',
                            __('messages.hero_title'),
                        ) !!}
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
                        {{ __('messages.hero_desc') }}
                    </p>
                    <div class="flex items-center gap-3 pt-2">
                        <div
                            class="inline-flex items-center gap-2 border border-outline-variant bg-surface-container px-4 py-2 rounded-full">
                            <img alt="Romulus Digital" class="h-4 object-contain"
                                src="{{ asset('assets/romulus-birumuda.png') }}" />
                            <span class="font-label-sm text-on-surface-variant text-xs tracking-[0.12em] uppercase">
                                {{ __('messages.hero_support_line') }}
                            </span>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-unit-md pt-unit-md">
                        @php $localeSuffix = app()->getLocale() === 'en' ? '.en' : ''; @endphp
                        <a href="{{ route('contact' . $localeSuffix) }}"
                            class="inline-flex items-center justify-center text-center bg-primary-container text-on-primary-container px-10 py-5 rounded-lg font-button text-lg uppercase tracking-widest shadow-lg hover:translate-y-[-2px] transition-transform">
                            {{ app()->getLocale() === 'en' ? 'Discuss Your Project' : 'Diskusikan Proyek Anda' }}
                        </a>
                        <a href="{{ route('services' . $localeSuffix) }}"
                            class="inline-flex items-center justify-center text-center border-2 border-on-secondary-fixed text-on-secondary-fixed px-10 py-5 rounded-lg font-button text-lg uppercase tracking-widest hover:bg-surface-container-high transition-colors">
                            {{ app()->getLocale() === 'en' ? 'View Our Services' : 'Lihat Layanan' }}
                        </a>
                    </div>
                </div>
                <div class="relative group">
                    <div
                        class="absolute -inset-4 bg-primary/10 rounded-xl blur-3xl opacity-50 group-hover:opacity-75 transition-opacity">
                    </div>
                    <img alt="AI Dashboard Visualization"
                        class="relative rounded-lg shadow-2xl border-4 border-surface-container-high w-full"
                        data-alt="A sophisticated dark-themed AI technology dashboard with complex data visualizations, glowing cyan line graphs, and hexagonal grid patterns. The UI is clean and modern, representing enterprise-level analytics. Soft volumetric lighting highlights the depth of the interface against a deep midnight navy background, conveying precision and high-tier technical capability."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdAJsV3r7YbZ2WLV8HysYxDcgC09shBxz2HJ-L9ziBmit0_beLik2uLipeqEcSm9h5oRtYrp81qEN_Ihx3sqMZADJzKvtHVNv0gwnsDYOnW4nBjc_-sTG4TVEJCTAlXHoJsQV3QrgUh8sBOeWXG09W_itrv5BDyw2rdaHr9mRe8JORt7XcJ6e0gZQBFvbLPG09QhqnaRAvX1m85IW87-9UQUK60uuGFvPTkf7qufJinQhj0LLnucDKM7bkS1DbWzrEDTjwN9agOJnZ" />
                </div>
            </div>
        </section>
        <!-- Partner Badge Section -->
        @include('partials.partner-badge')
        <!-- Social Proof Metrics -->
        <section class="py-unit-xl bg-surface">
            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-gutter">
                    <div class="text-center p-unit-lg border-r border-outline-variant last:border-0">
                        <div class="font-display-lg-mobile md:text-[64px] font-bold text-primary mb-unit-xs">8+</div>
                        <div class="font-label-sm text-on-surface-variant uppercase tracking-widest">
                            {{ __('messages.metric_projects') }}</div>
                    </div>
                    <div class="text-center p-unit-lg border-r border-outline-variant last:border-0">
                        <div class="font-display-lg-mobile md:text-[64px] font-bold text-primary mb-unit-xs">3+</div>
                        <div class="font-label-sm text-on-surface-variant uppercase tracking-widest">
                            {{ __('messages.metric_expertise') }}</div>
                    </div>
                    <div class="text-center p-unit-lg border-r border-outline-variant last:border-0">
                        <div class="font-display-lg-mobile md:text-[64px] font-bold text-primary mb-unit-xs">3</div>
                        <div class="font-label-sm text-on-surface-variant uppercase tracking-widest">
                            {{ __('messages.metric_hubs') }}</div>
                    </div>
                    <div class="text-center p-unit-lg">
                        <div class="font-display-lg-mobile md:text-[64px] font-bold text-primary mb-unit-xs">24/7</div>
                        <div class="font-label-sm text-on-surface-variant uppercase tracking-widest">
                            {{ __('messages.metric_support') }}</div>
                    </div>
                </div>
            </div>
        </section>

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
                        ? 'Portfolio and case studies of <span class="text-primary">digital solutions.</span>'
                        : 'Portofolio dan studi kasus <span class="text-primary">solusi digital.</span>' !!}
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    {{ app()->getLocale() === 'en' ? 'Nakala Digital bridging local delivery with regional capability. Explore how we\'ve empowered institutions and enterprises across Indonesia with technical rigor and high-impact software solutions.' : 'Nakala Digital menjembatani delivery lokal dengan kapabilitas regional. Jelajahi bagaimana kami telah memberdayakan institusi dan perusahaan di seluruh Indonesia dengan ketelitian teknis dan solusi perangkat lunak berdampak tinggi.' }}
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

        <!-- Capabilities Bento Grid -->
        <section class="py-unit-xl bg-surface-container-low">
            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="mb-unit-xl max-w-2xl">
                    <span
                        class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">{{ app()->getLocale() === 'en' ? 'Capability Reference' : 'Referensi Kapabilitas' }}</span>
                    <h2
                        class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-background mb-unit-md">
                        {{ __('messages.cap_title') }}</h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant">{{ __('messages.cap_desc') }}</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
                    <!-- Bento Item 1 -->
                    <div
                        class="md:col-span-8 bg-surface-container-lowest p-unit-lg rounded-lg border border-outline-variant flex flex-col justify-between group hover:border-primary-container transition-all">
                        <div class="space-y-unit-md">
                            <span class="material-symbols-outlined text-primary text-4xl"
                                data-weight="fill">settings_suggest</span>
                            <h3 class="font-headline-h3 text-headline-h3">{{ __('messages.cap_software') }}</h3>
                            <p class="font-body-md text-on-surface-variant max-w-md">
                                {{ __('messages.cap_software_desc') }}</p>
                        </div>
                        <div class="mt-unit-lg">
                            <ul class="grid grid-cols-2 gap-unit-sm">
                                <li class="flex items-center gap-unit-xs text-on-surface-variant"><span
                                        class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                    {{ app()->getLocale() === 'en' ? 'Web Apps' : 'Aplikasi Web' }}</li>
                                <li class="flex items-center gap-unit-xs text-on-surface-variant"><span
                                        class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                    {{ app()->getLocale() === 'en' ? 'Mobile Native' : 'Mobile Native' }}</li>
                                <li class="flex items-center gap-unit-xs text-on-surface-variant"><span
                                        class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                    {{ app()->getLocale() === 'en' ? 'API Integration' : 'Integrasi API' }}</li>
                                <li class="flex items-center gap-unit-xs text-on-surface-variant"><span
                                        class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                    {{ app()->getLocale() === 'en' ? 'Legacy Migration' : 'Migrasi Sistem' }}</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Bento Item 2 -->
                    <div
                        class="md:col-span-4 bg-on-secondary-fixed p-unit-lg rounded-lg text-on-secondary border border-transparent hover:border-primary-fixed-dim transition-all">
                        <div class="h-full flex flex-col justify-between">
                            <div class="space-y-unit-md">
                                <span class="material-symbols-outlined text-tertiary-fixed text-4xl">psychology</span>
                                <h3 class="font-headline-h3 text-headline-h3">{{ __('messages.cap_ai') }}</h3>
                                <p class="font-body-md text-secondary-fixed">{{ __('messages.cap_ai_desc') }}</p>
                            </div>
                            <div class="bg-surface-container-lowest/10 p-unit-md rounded mt-unit-lg">
                                <span
                                    class="font-label-sm text-tertiary-fixed uppercase">{{ app()->getLocale() === 'en' ? 'Strategic Focus' : 'Fokus Strategis' }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- Bento Item 3 -->
                    <div
                        class="md:col-span-4 bg-[#A7F432] text-[#031A44] p-unit-lg rounded-lg border border-outline-variant group hover:opacity-90 transition-all">
                        <span class="material-symbols-outlined text-[#031A44] text-4xl mb-unit-md">query_stats</span>
                        <h3 class="font-headline-h3 text-headline-h3 mb-unit-sm">{{ __('messages.cap_consulting') }}
                        </h3>
                        <p class="font-body-md opacity-90">{{ __('messages.cap_consulting_desc') }}</p>
                    </div>
                    <!-- Bento Item 4 -->
                    <div
                        class="md:col-span-8 bg-primary p-unit-lg rounded-lg text-white relative overflow-hidden flex items-center">
                        <div class="z-10 space-y-unit-md">
                            <h3 class="font-headline-h2-mobile text-white">{{ __('messages.cap_local_title') }}</h3>
                            <p class="font-body-lg text-white/90 max-w-lg">{{ __('messages.cap_local_desc') }}</p>
                        </div>
                        <div class="absolute right-[-10%] top-[-10%] opacity-10">
                            <span class="material-symbols-outlined text-[300px]">language</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio Section: Capability Reference -->
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
                                    class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary uppercase tracking-widest bg-primary/10 px-unit-sm py-1 rounded-full mb-unit-md">{{ app()->getLocale() === 'en' ? 'Public Sector' : 'Sektor Publik' }}</span>
                                <h3 class="font-headline-h3 text-headline-h3 mb-unit-md">PPDB Online System</h3>
                                <p class="text-on-surface-variant text-body-md mb-unit-lg">
                                    {{ app()->getLocale() === 'en' ? 'Building a reliable digital admission system that handles high-volume registration, document verification, and transparent selection processes.' : 'Membangun sistem penerimaan digital yang andal untuk menangani registrasi volume tinggi, verifikasi dokumen, dan proses seleksi yang transparan.' }}
                                </p>
                                <div class="space-y-unit-sm border-t border-outline-variant pt-unit-md">
                                    <p class="text-label-sm uppercase font-bold text-outline">
                                        {{ app()->getLocale() === 'en' ? 'Impact' : 'Dampak' }}</p>
                                    <p class="text-primary font-bold">
                                        {{ app()->getLocale() === 'en' ? 'High-availability platform with scalable admission processing.' : 'Platform dengan ketersediaan tinggi dan pemrosesan pendaftaran yang skalabel.' }}
                                    </p>
                                </div>
                            </div>
                            <a href="https://brown-tarsier-106199.hostingersite.com/" target="_blank"
                                rel="noopener noreferrer"
                                class="mt-unit-lg text-primary font-button flex items-center gap-unit-xs group-hover:gap-unit-sm transition-all w-fit">{{ app()->getLocale() === 'en' ? 'View Details' : 'Lihat Detail' }}
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
                        <h3 class="font-headline-h3 text-headline-h3 mb-unit-md">Cloud HRMS</h3>
                        <p class="text-on-surface-variant text-body-md mb-unit-md">
                            {{ app()->getLocale() === 'en' ? 'Centralizing payroll, attendance, and performance for distributed workforces in SE Asia.' : 'Memsentralisasi penggajian, kehadiran, dan kinerja untuk tenaga kerja terdistribusi di Asia Tenggara.' }}
                        </p>
                    </div>
                    <div>
                        <div class="bg-surface p-unit-md rounded-lg border-t-4 border-primary mb-unit-md">
                            <p class="font-label-sm text-outline uppercase mb-1">
                                {{ app()->getLocale() === 'en' ? 'Solution' : 'Solusi' }}</p>
                            <p class="text-body-md">
                                {{ app()->getLocale() === 'en' ? 'Automated compliance & tax localization.' : 'Kepatuhan & lokalisasi pajak otomatis.' }}
                            </p>
                        </div>
                        <a href="https://salmon-octopus-221724.hostingersite.com/login" target="_blank"
                            rel="noopener noreferrer"
                            class="text-primary font-button flex items-center gap-unit-xs group-hover:gap-unit-sm transition-all w-fit">{{ app()->getLocale() === 'en' ? 'View Details' : 'Lihat Detail' }}
                            <span class="material-symbols-outlined text-lg">arrow_forward</span></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- /Portfolio Section: Capability Reference -->
        </section>


        <!-- About / Narrative Section -->
        <section class="py-unit-xl bg-surface-container-lowest">
            <div
                class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 lg:grid-cols-2 gap-unit-xl items-center">
                <div class="order-2 lg:order-1">
                    <img alt="Nakala Digital Team Collaboration"
                        class="rounded-lg shadow-xl grayscale hover:grayscale-0 transition-all duration-700"
                        data-alt="A diverse group of professional software engineers and digital consultants collaborating in a sleek, minimalist office environment with floor-to-ceiling glass windows. The lighting is crisp and natural, emphasizing a bright, light-mode corporate aesthetic. They are working around a large table with modern laptops, reflecting a mood of technical rigor and collaborative problem-solving. The scene uses a palette of whites, cool greys, and subtle electric cyan accents."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIkKof9jfTV3ZLWx_WT91Cn9j9BwU7L7iRjUW8s1_CpNFUfxi-TxWpYXf4MN9di_-4rUJf_qv_npecCOhWJGdWvG-oJ9ed48cN99fs4UaCdjYRQmYsUgEjNPeA54mlQTk71PJzoRl54GfT46lqT1VAFHs063ifm6xPl595wy6lf2epw0d4JJRnhAVc7P-QdGRxKrS_qvU4NK1q6jvMKydHVH4hwGa-RIzInomT87uNg9wwwpDupaYwgxaNy0SKFyD7MXIVWIGO_g8O" />
                </div>
                <div class="order-1 lg:order-2 space-y-unit-lg">
                    <span
                        class="font-label-sm text-primary uppercase tracking-[0.3em]">{{ app()->getLocale() === 'en' ? 'Solution Highlight' : 'Sorotan Solusi' }}</span>
                    <h2
                        class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-background">
                        {{ __('messages.who_title') }}</h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant">
                        {{ __('messages.who_desc1') }}
                    </p>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        {{ __('messages.who_desc2') }}
                    </p>
                    <div class="grid grid-cols-2 gap-unit-md border-l-4 border-primary pl-unit-md">
                        <div>
                            <span class="block font-headline-h3 text-on-background">100%</span>
                            <span
                                class="font-label-sm text-on-surface-variant uppercase">{{ __('messages.who_local_commit') }}</span>
                        </div>
                        <div>
                            <span class="block font-headline-h3 text-on-background">ISO</span>
                            <span
                                class="font-label-sm text-on-surface-variant uppercase">{{ __('messages.who_iso') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ Section -->
        <section class="py-unit-xl bg-surface">
            <div class="max-w-4xl mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="text-center mb-unit-lg">
                    <h2 class="font-headline-h2 text-headline-h2 text-on-background mb-unit-xs">
                        {{ app()->getLocale() === 'en' ? 'Common Queries' : 'Pertanyaan Umum' }}
                    </h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant">
                        {{ app()->getLocale() === 'en' ? 'Need more info? Check our FAQ.' : 'Butuh informasi lebih? Cek FAQ kami.' }}
                    </p>
                </div>
                <div class="space-y-4">
                    <div
                        class="accordion-item bg-white border border-outline-variant rounded-xl p-5 transition-all hover:border-primary shadow-sm">
                        <button class="w-full flex justify-between items-center text-left"
                            onclick="toggleAccordion(this)">
                            <span
                                class="font-headline-h3 text-lg text-on-surface">{{ app()->getLocale() === 'en' ? 'What services does Nakala Digital provide?' : 'Layanan apa saja yang disediakan Nakala Digital?' }}</span>
                            <span
                                class="material-symbols-outlined toggle-icon transition-transform text-outline">expand_more</span>
                        </button>
                        <div class="accordion-content">
                            <p class="pt-4 font-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'We provide software development, AI and GenAI solutions, technology consulting, web and portal development, QA governance, and managed support for enterprise platforms including Microsoft Dynamics 365. Each service is delivered with local context and regional capability.'
                                    : 'Kami menyediakan pengembangan perangkat lunak, solusi AI dan GenAI, konsultasi teknologi, pengembangan web dan portal, tata kelola QA, serta dukungan terkelola untuk platform enterprise termasuk Microsoft Dynamics 365. Setiap layanan diberikan dengan konteks lokal dan kapabilitas regional.' }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="accordion-item bg-white border border-outline-variant rounded-xl p-5 transition-all hover:border-primary shadow-sm">
                        <button class="w-full flex justify-between items-center text-left"
                            onclick="toggleAccordion(this)">
                            <span
                                class="font-headline-h3 text-lg text-on-surface">{{ app()->getLocale() === 'en' ? 'How does the project engagement process work?' : 'Bagaimana proses engagement project?' }}</span>
                            <span
                                class="material-symbols-outlined toggle-icon transition-transform text-outline">expand_more</span>
                        </button>
                        <div class="accordion-content">
                            <p class="pt-4 font-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'We follow a structured end-to-end lifecycle: Discovery & Scoping, Design & Architecture, Agile Development & QA, SIT/UAT, Deployment & Go-Live, Handover, and Support & Growth. Every stage includes documentation and quality checkpoints so you maintain full visibility throughout the project.'
                                    : 'Kami mengikuti siklus end-to-end yang terstruktur: Discovery & Scoping, Design & Architecture, Agile Development & QA, SIT/UAT, Deployment & Go-Live, Handover, serta Support & Growth. Setiap tahap mencakup dokumentasi dan checkpoint kualitas sehingga Anda memiliki visibilitas penuh selama proyek berlangsung.' }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="accordion-item bg-white border border-outline-variant rounded-xl p-5 transition-all hover:border-primary shadow-sm">
                        <button class="w-full flex justify-between items-center text-left"
                            onclick="toggleAccordion(this)">
                            <span
                                class="font-headline-h3 text-lg text-on-surface">{{ app()->getLocale() === 'en' ? 'What is the estimated project timeline?' : 'Berapa estimasi timeline pengerjaan?' }}</span>
                            <span
                                class="material-symbols-outlined toggle-icon transition-transform text-outline">expand_more</span>
                        </button>
                        <div class="accordion-content">
                            <p class="pt-4 font-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'Timelines depend on project scope and complexity. A focused MVP can typically be delivered within 8-12 weeks. Larger enterprise solutions are delivered in phases, with core modules typically available within 4-6 months. We provide a detailed timeline during the Discovery & Scoping phase.'
                                    : 'Timeline tergantung pada lingkup dan kompleksitas proyek. MVP yang terfokus biasanya dapat selesai dalam 8-12 minggu. Solusi enterprise yang lebih besar dikirimkan secara bertahap, dengan modul inti biasanya tersedia dalam 4-6 bulan. Kami memberikan timeline detail selama fase Discovery & Scoping.' }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="accordion-item bg-white border border-outline-variant rounded-xl p-5 transition-all hover:border-primary shadow-sm">
                        <button class="w-full flex justify-between items-center text-left"
                            onclick="toggleAccordion(this)">
                            <span
                                class="font-headline-h3 text-lg text-on-surface">{{ app()->getLocale() === 'en' ? 'Is post-launch support available?' : 'Apakah tersedia support setelah go-live?' }}</span>
                            <span
                                class="material-symbols-outlined toggle-icon transition-transform text-outline">expand_more</span>
                        </button>
                        <div class="accordion-content">
                            <p class="pt-4 font-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'Yes. We provide ongoing support through flexible SLAs, including system monitoring, maintenance, feature updates, and technical assistance. Our managed support covers L1 to L3 support, ensuring your platform remains stable and up-to-date after launch.'
                                    : 'Ya. Kami menyediakan dukungan berkelanjutan melalui SLA yang fleksibel, termasuk monitoring sistem, maintenance, pembaruan fitur, dan bantuan teknis. Dukungan terkelola kami mencakup L1 hingga L3, memastikan platform Anda tetap stabil dan terkini setelah peluncuran.' }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="accordion-item bg-white border border-outline-variant rounded-xl p-5 transition-all hover:border-primary shadow-sm">
                        <button class="w-full flex justify-between items-center text-left"
                            onclick="toggleAccordion(this)">
                            <span
                                class="font-headline-h3 text-lg text-on-surface">{{ app()->getLocale() === 'en' ? 'How does the partnership with Romulus Digital work?' : 'Bagaimana model partnership dengan Romulus Digital?' }}</span>
                            <span
                                class="material-symbols-outlined toggle-icon transition-transform text-outline">expand_more</span>
                        </button>
                        <div class="accordion-content">
                            <p class="pt-4 font-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'Nakala Digital remains the primary delivery partner for every client engagement. Romulus Digital serves as a strategic trust layer and regional capability partner, providing additional technical depth, reference, and capacity when projects require larger scale or specialised expertise. This means you get local responsiveness with regional backing.'
                                    : 'Nakala Digital tetap menjadi mitra pengiriman utama untuk setiap engagement klien. Romulus Digital berperan sebagai trust layer strategis dan mitra kapabilitas regional, memberikan kedalaman teknis tambahan, referensi, dan kapasitas saat proyek membutuhkan skala lebih besar atau keahlian khusus. Ini berarti Anda mendapatkan respons lokal dengan dukungan regional.' }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="accordion-item bg-white border border-outline-variant rounded-xl p-5 transition-all hover:border-primary shadow-sm">
                        <button class="w-full flex justify-between items-center text-left"
                            onclick="toggleAccordion(this)">
                            <span
                                class="font-headline-h3 text-lg text-on-surface">{{ app()->getLocale() === 'en' ? 'How is data security handled?' : 'Bagaimana aspek data/security ditangani?' }}</span>
                            <span
                                class="material-symbols-outlined toggle-icon transition-transform text-outline">expand_more</span>
                        </button>
                        <div class="accordion-content">
                            <p class="pt-4 font-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'We follow industry-standard security practices including role-based access control (RBAC), data encryption, and secure development lifecycle. Our QA governance framework includes security review checkpoints at every stage. For specific compliance requirements, we work with clients to align with their existing security policies and standards.'
                                    : 'Kami mengikuti praktik keamanan standar industri termasuk role-based access control (RBAC), enkripsi data, dan siklus pengembangan yang aman. Framework tata kelola QA kami mencakup checkpoint review keamanan di setiap tahap. Untuk kebutuhan kepatuhan spesifik, kami bekerja sama dengan klien untuk menyelaraskan dengan kebijakan keamanan yang sudah ada.' }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="accordion-item bg-white border border-outline-variant rounded-xl p-5 transition-all hover:border-primary shadow-sm">
                        <button class="w-full flex justify-between items-center text-left"
                            onclick="toggleAccordion(this)">
                            <span
                                class="font-headline-h3 text-lg text-on-surface">{{ app()->getLocale() === 'en' ? 'How can I contact the Nakala team?' : 'Bagaimana cara menghubungi tim Nakala?' }}</span>
                            <span
                                class="material-symbols-outlined toggle-icon transition-transform text-outline">expand_more</span>
                        </button>
                        <div class="accordion-content">
                            <p class="pt-4 font-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'You can reach us via email at contact@nakala.digital, by phone at +62 822-9570-6304, or through the contact form on our website. We typically respond within one business day. For project discussions, we offer a free discovery session to understand your needs and provide initial recommendations.'
                                    : 'Anda dapat menghubungi kami melalui email di contact@nakala.digital, melalui telepon di +62 822-9570-6304, atau melalui form kontak di website kami. Kami biasanya merespon dalam satu hari kerja. Untuk diskusi proyek, kami menawarkan sesi discovery gratis untuk memahami kebutuhan Anda dan memberikan rekomendasi awal.' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Final CTA -->
        <section class="py-unit-xl bg-primary text-center relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
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
                <h2 class="font-headline-h1-mobile text-headline-h1-mobile text-white">
                    {{ __('messages.final_cta_title') }}</h2>
                <p class="font-body-lg text-white/90">{{ __('messages.final_cta_desc') }}</p>
                <div class="pt-unit-md">
                    <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}"
                        class="inline-block bg-tertiary-fixed text-on-tertiary-fixed px-12 py-6 rounded-lg font-button text-xl uppercase tracking-widest shadow-xl hover:scale-105 transition-transform active:scale-100">
                        {{ app()->getLocale() === 'en' ? 'Schedule a Discovery Session' : 'Jadwalkan Sesi Discovery' }}
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

        // FAQ Accordion functionality
        function toggleAccordion(button) {
            const item = button.closest('.accordion-item');
            const isActive = item.classList.contains('active');

            // Close all items
            document.querySelectorAll('.accordion-item').forEach(el => {
                el.classList.remove('active');
            });

            // Toggle clicked item
            if (!isActive) {
                item.classList.add('active');
            }
        }

        // Initialize first FAQ as open
        document.addEventListener('DOMContentLoaded', () => {
            const firstItem = document.querySelector('.accordion-item');
            if (firstItem) firstItem.classList.add('active');
        });
    </script>
</body>

</html>
