<!DOCTYPE html>

<html class="scroll-smooth" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Portfolio | Nakala Digital</title>
    @include('partials.seo', [
        'title' => 'Portfolio | Nakala Digital',
        'description' =>
            'Explore our portfolio of software development, AI, and digital solutions projects delivered with regional capability.',
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
        <section class="relative bg-surface-container-lowest overflow-hidden py-unit-xl border-b border-outline-variant">
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
        <!-- Bento Grid Portfolio Section -->
        <section class="py-unit-xl px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
                <!-- 1. PPDB -->
                <div
                    class="md:col-span-8 group bento-card bg-surface-container-lowest border border-outline-variant overflow-hidden rounded-xl">
                    <div class="flex flex-col md:flex-row h-full">
                        <div class="w-full md:w-1/2 p-unit-lg flex flex-col justify-between">
                            <div>
                                <span
                                    class="font-label-sm text-label-sm text-primary uppercase tracking-widest block mb-unit-sm">{{ app()->getLocale() === 'en' ? 'Public Sector' : 'Sektor Publik' }}</span>
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
                                class="mt-unit-lg text-primary font-button flex items-center gap-unit-xs group-hover:translate-x-2 transition-transform">{{ app()->getLocale() === 'en' ? 'View Details' : 'Lihat Detail' }}
                                <span class="material-symbols-outlined">arrow_forward</span></a>
                        </div>
                        <div class="w-full md:w-1/2 relative bg-surface-container h-64 md:h-auto overflow-hidden">
                            <img class="absolute inset-0 w-full h-full object-cover"
                                data-alt="A high-fidelity software mockup of a modern Indonesian public school admission dashboard. The UI is clean, using Nakala Digital's brand blue and white palette. In the background, a soft-focused modern school building is visible under bright daylight. The lighting is high-key, communicating transparency and institutional trust. Professional corporate high-contrast style with sharp edges."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDDjYUTUCC8m9pWJV1Nh4-wfC7b_EnyzOndB687zN9tswDCzugWKa7flgq88mWrxhsuTqXISszLc4vHwwmIJDodtShYhudRKPZTlsxnZSUGE7R86SczAsnAtxagjJwT_-ljISfkY062sdTH4SzslCEMqZjvPJEfTvP6lir7632rS6vTPThWJtCw6Lqzpu5iOuEMPxZDLqkSE5-23lqGK_g3TZf4N4FoCijbLArqzIk7JBB5PCJBnbvvOCaYl_PkFj2uCyqa06v7khIs" />
                        </div>
                    </div>
                </div>
                <!-- 2. HRMS -->
                <div
                    class="md:col-span-4 group bento-card bg-surface-container-lowest border border-outline-variant rounded-xl p-unit-lg flex flex-col justify-between">
                    <div class="mb-unit-xl">
                        <span
                            class="font-label-sm text-label-sm text-primary uppercase tracking-widest block mb-unit-sm">{{ app()->getLocale() === 'en' ? 'Capability Reference' : 'Referensi Kapabilitas' }}</span>
                        <h3 class="font-headline-h3 text-headline-h3 mb-unit-md">Cloud HRMS</h3>
                        <p class="text-on-surface-variant text-body-md mb-unit-md">
                            {{ app()->getLocale() === 'en' ? 'Centralizing payroll, attendance, and performance for distributed workforces in SE Asia.' : 'Memsentralisasi penggajian, kehadiran, dan kinerja untuk tenaga kerja terdistribusi di Asia Tenggara.' }}
                        </p>
                    </div>
                    <div>
                        <div class="bg-surface p-unit-md border-t-4 border-primary mb-unit-md">
                            <p class="font-label-sm text-outline uppercase mb-1">
                                {{ app()->getLocale() === 'en' ? 'Solution' : 'Solusi' }}</p>
                            <p class="text-body-md">
                                {{ app()->getLocale() === 'en' ? 'Automated compliance & tax localization.' : 'Kepatuhan & lokalisasi pajak otomatis.' }}
                            </p>
                        </div>
                        <a href="https://salmon-octopus-221724.hostingersite.com/login" target="_blank"
                            rel="noopener noreferrer"
                            class="text-primary font-button flex items-center gap-unit-xs group-hover:translate-x-2 transition-transform">{{ app()->getLocale() === 'en' ? 'View Details' : 'Lihat Detail' }}
                            <span class="material-symbols-outlined">arrow_forward</span></a>
                    </div>
                </div>
                <!-- 3. HSE -->
                <div
                    class="md:col-span-4 bento-card bg-inverse-surface text-inverse-on-surface rounded-xl p-unit-lg flex flex-col items-start gap-unit-md">
                    <span
                        class="bg-primary px-unit-md py-1 rounded font-label-sm text-white">{{ app()->getLocale() === 'en' ? 'Industrial' : 'Industri' }}</span>
                    <h3 class="font-headline-h3 text-headline-h3">HSE Safety Tracker</h3>
                    <p class="text-surface-variant text-body-md">
                        {{ app()->getLocale() === 'en' ? 'Digitizing workplace safety reports and real-time hazard monitoring for mining operations.' : 'Mendigitalisasi laporan keselamatan kerja dan pemantauan bahaya secara real-time untuk operasi pertambangan.' }}
                    </p>
                    <div class="flex items-center gap-unit-sm mt-auto">
                        <span class="material-symbols-outlined text-primary" data-icon="shield">shield</span>
                        <span
                            class="font-bold">{{ app()->getLocale() === 'en' ? 'Proactive Safety Management' : 'Manajemen Keselamatan Proaktif' }}</span>
                    </div>
                    <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=hse-safety-tracker"
                        class="mt-unit-md text-tertiary font-button flex items-center gap-unit-xs group-hover:gap-unit-sm transition-all w-fit">{{ app()->getLocale() === 'en' ? 'View Details' : 'Lihat Detail' }}
                        <span class="material-symbols-outlined text-lg">arrow_forward</span></a>
                </div>
                <!-- 4. WargaKas -->
                <div
                    class="md:col-span-8 group bento-card bg-surface-container-lowest border border-outline-variant overflow-hidden rounded-xl">
                    <div class="flex flex-col md:flex-row-reverse h-full">
                        <div class="w-full md:w-1/2 p-unit-lg flex flex-col justify-between">
                            <div>
                                <span
                                    class="font-label-sm text-label-sm text-tertiary uppercase tracking-widest block mb-unit-sm">{{ app()->getLocale() === 'en' ? 'Community Fintech' : 'Fintech Komunitas' }}</span>
                                <h3 class="font-headline-h3 text-headline-h3 mb-unit-md">WargaKas Mobile</h3>
                                <p class="text-on-surface-variant text-body-md mb-unit-lg">
                                    {{ app()->getLocale() === 'en' ? 'Enabling transparent financial management for community-based organizations with digital payment integration.' : 'Memungkinkan pengelolaan keuangan yang transparan untuk organisasi berbasis komunitas dengan integrasi pembayaran digital.' }}
                                </p>
                                <div class="space-y-unit-sm border-t border-outline-variant pt-unit-md">
                                    <p class="text-label-sm uppercase font-bold text-outline">
                                        {{ app()->getLocale() === 'en' ? 'Solution' : 'Solusi' }}</p>
                                    <p class="text-on-surface">
                                        {{ app()->getLocale() === 'en' ? 'Integrated QRIS payments & real-time ledger.' : 'Pembayaran QRIS terintegrasi & buku besar real-time.' }}
                                    </p>
                                </div>
                            </div>
                            <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=wargakas-mobile"
                                class="mt-unit-lg text-primary font-button flex items-center gap-unit-xs group-hover:gap-unit-sm transition-all w-fit">{{ app()->getLocale() === 'en' ? 'View Details' : 'Lihat Detail' }}
                                <span class="material-symbols-outlined text-lg">arrow_forward</span></a>
                        </div>
                        <div class="w-full md:w-1/2 relative bg-surface-container h-64 md:h-auto overflow-hidden">
                            <img class="absolute inset-0 w-full h-full object-cover"
                                data-alt="A close-up shot of a smartphone displaying a sleek fintech application interface with bright lime green accents. The phone is held by a person in a modern urban workspace in Jakarta, with city lights blurred in the background. The lighting is vibrant and energetic, reflecting a tech-forward society. The UI design follows a rigid grid system and high-contrast color blocks."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDm2M0616JH6aYKMatKLlBn00XRFjy4muiu-AVHkmEZ4mquHBJyzTCnQv2hU8dpPeQy5zaZNyvF-cdieQKwEP-94c7rEDufUZ2V4UpOgBaSoSz-Uhzl77W8KZddcIgMsuRvxigMf-6eUAh2Bl7I9W_1pHTebLZIuPnf_TBOnz5I3AZJTd9IIw10cDh-RZD4Z5jgBiw2psnyRQHORyLQ63m97Fp3aIIFvzqCDQFwRcv7Mo3lPB-YWwYVDI2jZzLGSUMR6axa51Nr_cQa" />
                        </div>
                    </div>
                </div>
                <!-- 5. AI Hiring -->
                <div
                    class="md:col-span-6 bento-card bg-surface-container-lowest border border-outline-variant rounded-xl p-unit-lg">
                    <div class="flex justify-between items-start mb-unit-lg">
                        <h3 class="font-headline-h3 text-headline-h3">AI Hiring Assistant</h3>
                        <span
                            class="bg-tertiary-fixed text-on-tertiary-fixed px-unit-md py-1 rounded-full font-label-sm uppercase">AI
                            Powered</span>
                    </div>
                    <p class="text-on-surface-variant text-body-md mb-unit-lg">
                        {{ app()->getLocale() === 'en' ? 'Automating candidate screening and matching using custom AI models trained on industry-specific requirements.' : 'Mengotomatiskan screening dan pencocokan kandidat menggunakan model AI kustom yang dilatih pada kebutuhan industri spesifik.' }}
                    </p>
                    <div class="bg-surface-container p-unit-md rounded border border-outline-variant">
                        <p class="font-label-sm uppercase text-primary">
                            {{ app()->getLocale() === 'en' ? 'Business Value' : 'Nilai Bisnis' }}</p>
                        <p class="text-body-md">
                            {{ app()->getLocale() === 'en' ? 'Streamlined recruitment process with AI-powered candidate screening and matching.' : 'Proses rekrutmen yang efisien dengan screening dan pencocokan kandidat berbasis AI.' }}
                        </p>
                    </div>
                    <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=ai-hiring-assistant"
                        class="mt-unit-md text-primary font-button flex items-center gap-unit-xs group-hover:gap-unit-sm transition-all w-fit">{{ app()->getLocale() === 'en' ? 'View Details' : 'Lihat Detail' }}
                        <span class="material-symbols-outlined text-lg">arrow_forward</span></a>
                </div>
                <!-- 6. AI Coach -->
                <div
                    class="md:col-span-6 bento-card bg-surface-container-lowest border border-outline-variant rounded-xl p-unit-lg overflow-hidden relative group">
                    <div class="mb-unit-xl text-center md:text-left">
                        <span
                            class="font-label-sm text-label-sm text-primary uppercase tracking-widest block mb-unit-sm">{{ app()->getLocale() === 'en' ? 'Solution Highlight' : 'Sorotan Solusi' }}</span>
                        <h3 class="font-headline-h3 text-headline-h3 mb-unit-md">Personalized AI Coach</h3>
                        <p class="text-on-surface-variant text-body-md mb-unit-md">
                            {{ app()->getLocale() === 'en' ? 'Adaptive learning pathways for corporate reskilling, leveraging LLMs for real-time feedback.' : 'Jalur pembelajaran adaptif untuk reskilling perusahaan, memanfaatkan LLM untuk umpan balik real-time.' }}
                        </p>
                        <div class="flex gap-unit-sm">
                            <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white">
                                <span class="material-symbols-outlined text-sm">smart_toy</span></div>
                            <div class="w-8 h-8 rounded-full bg-secondary flex items-center justify-center text-white">
                                <span class="material-symbols-outlined text-sm">school</span></div>
                        </div>
                    </div>
                    <div
                        class="absolute -right-10 -bottom-10 opacity-10 group-hover:scale-110 transition-transform duration-500">
                        <span class="material-symbols-outlined text-[160px]"
                            style="font-variation-settings: 'FILL' 1;">psychology</span>
                    </div>
                    <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=personalized-ai-coach"
                        class="relative z-10 mt-auto text-primary font-button flex items-center justify-center md:justify-start gap-unit-xs group-hover:gap-unit-sm transition-all w-fit mx-auto md:mx-0">{{ app()->getLocale() === 'en' ? 'View Details' : 'Lihat Detail' }}
                        <span class="material-symbols-outlined text-lg">arrow_forward</span></a>
                </div>
                <!-- 7. D365 Support -->
                <div
                    class="md:col-span-4 bento-card bg-surface-container-lowest border border-outline-variant rounded-xl p-unit-lg">
                    <div class="flex items-center gap-unit-sm mb-unit-md">
                        <span class="material-symbols-outlined text-primary">hub</span>
                        <h3 class="font-headline-h3 text-headline-h3">Dynamics 365 Support</h3>
                    </div>
                    <p class="text-on-surface-variant text-body-md mb-unit-lg">
                        {{ app()->getLocale() === 'en' ? 'Challenge: Integrating complex legacy data into a modern MS Dynamics ecosystem for a regional conglomerate.' : 'Tantangan: Mengintegrasikan data legacy kompleks ke dalam ekosistem MS Dynamics modern untuk konglomerat regional.' }}
                    </p>
                    <div class="bg-surface-container p-unit-md rounded border border-outline-variant">
                        <p class="font-label-sm uppercase">
                            {{ app()->getLocale() === 'en' ? 'Regional Capability' : 'Kapabilitas Regional' }}</p>
                        <p class="text-body-md font-bold">
                            {{ app()->getLocale() === 'en' ? 'Managed D365 support with regional capability.' : 'Dukungan D365 terkelola dengan kapabilitas regional.' }}
                        </p>
                    </div>
                    <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=dynamics-365-support"
                        class="mt-unit-md text-primary font-button flex items-center gap-unit-xs group-hover:gap-unit-sm transition-all w-fit">{{ app()->getLocale() === 'en' ? 'View Details' : 'Lihat Detail' }}
                        <span class="material-symbols-outlined text-lg">arrow_forward</span></a>
                </div>
                <!-- 8. 360 Customer Engagement -->
                <div
                    class="md:col-span-8 bento-card bg-surface-container-lowest border border-outline-variant rounded-xl p-unit-lg flex flex-col md:flex-row gap-unit-lg items-center">
                    <div class="flex-1">
                        <span
                            class="font-label-sm text-label-sm text-primary uppercase tracking-widest block mb-unit-sm">{{ app()->getLocale() === 'en' ? 'Retail & Commerce' : 'Ritel & Komersial' }}</span>
                        <h3 class="font-headline-h3 text-headline-h3 mb-unit-md">360&deg; Customer Engagement</h3>
                        <p class="text-on-surface-variant text-body-md mb-unit-md">
                            {{ app()->getLocale() === 'en' ? 'A unified dashboard connecting online sales, social media sentiment, and physical store traffic for data-driven marketing.' : 'Dasbor terpadu yang menghubungkan penjualan online, sentimen media sosial, dan lalu lintas toko fisik untuk pemasaran berbasis data.' }}
                        </p>
                        <div class="flex flex-wrap gap-unit-sm">
                            <span
                                class="px-unit-sm py-1 bg-surface-variant text-on-surface-variant text-label-sm rounded">{{ app()->getLocale() === 'en' ? 'Omnichannel' : 'Omnichannel' }}</span>
                            <span
                                class="px-unit-sm py-1 bg-surface-variant text-on-surface-variant text-label-sm rounded">{{ app()->getLocale() === 'en' ? 'Sentiment Analysis' : 'Analisis Sentimen' }}</span>
                            <span
                                class="px-unit-sm py-1 bg-surface-variant text-on-surface-variant text-label-sm rounded">{{ app()->getLocale() === 'en' ? 'Predictive Analytics' : 'Analitik Prediktif' }}</span>
                        </div>
                        <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=360-customer-engagement"
                            class="mt-unit-md text-primary font-button flex items-center gap-unit-xs group-hover:gap-unit-sm transition-all w-fit">{{ app()->getLocale() === 'en' ? 'View Details' : 'Lihat Detail' }}
                            <span class="material-symbols-outlined text-lg">arrow_forward</span></a>
                    </div>
                    <div
                        class="w-full md:w-64 h-48 bg-surface rounded-xl border border-outline-variant overflow-hidden">
                        <img class="w-full h-full object-cover"
                            data-alt="A sophisticated data visualization dashboard showing multiple charts, world maps, and real-time metric counters. The color scheme is professional, featuring deep navy and electric cyan highlights. The workspace is high-end, with a glimpse of a clean glass desk and minimalist office decor. The mood is analytical and authoritative, representing regional technical capability."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZEGho0ZXWrYACNka0PrjLxslCBfj6LJo_mRI11PKgIGzp7ZdJx9giE7_K1sBpy2rF1Fw3Mq2nm5HF_OmUXqzEfuv3hKFoiEn7bVmO_zDOTQ2q-I8jkbO3sTTAB9fDGG9MX8IicOtokZ7m-9U9TCCti7Bv_U6Q93v0a212AnnU4Ge19za8WEH5UWl0L4yLu9SR16ctsrQmu9wRkJHNcYVMWQdduV5oBVHKKk3_amJXnevYkcLQfRkr-P0Wk3dPrLxMZB8J8nirVrlu" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Partner Badge Section -->
        @include('partials.partner-badge')
        <!-- CTA Section -->
        <section class="py-unit-xl px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto text-center">
            <h2
                class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 mb-unit-lg">
                {!! app()->getLocale() === 'en'
                    ? 'Ready to build your <span class="text-primary">next success story?</span>'
                    : 'Siap membangun <span class="text-primary">kisah sukses Anda selanjutnya?</span>' !!}</h2>
            <div class="flex flex-col md:flex-row gap-unit-md justify-center">
                <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}"
                    class="bg-primary text-on-primary px-unit-xl py-unit-md rounded-lg font-button uppercase hover:scale-105 transition-transform inline-block">{{ app()->getLocale() === 'en' ? 'Start Free Consultation' : 'Mulai Konsultasi Gratis' }}</a>
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
