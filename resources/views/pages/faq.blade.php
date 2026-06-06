<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        {{ app()->getLocale() === 'en' ? 'FAQ & Engineering Insights | Nakala Digital' : 'FAQ & Insight Engineering | Nakala Digital' }}
    </title>
    @include('partials.seo', [
        'title' =>
            app()->getLocale() === 'en'
                ? 'FAQ & Engineering Insights | Nakala Digital'
                : 'FAQ & Insight Engineering | Nakala Digital',
        'description' =>
            app()->getLocale() === 'en'
                ? 'Find common questions, engagement details, and engineering insights from Nakala Digital.'
                : 'Temukan pertanyaan umum, detail kerja sama, dan insight engineering dari Nakala Digital.',
    ])
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&amp;display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
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
                        "surface-tint": "#00677d",
                        "on-error": "#ffffff",
                        "outline-variant": "#bcc8ce",
                        "on-tertiary-fixed": "#112000",
                        "on-secondary-fixed": "#021943",
                        "surface-dim": "#d5dbdd",
                        "secondary-container": "#b9cbff",
                        "primary-fixed-dim": "#56d6f9",
                        "tertiary-fixed": "#abf837",
                        "error": "#ba1a1a",
                        "on-secondary-container": "#435582",
                        "background": "#f5fafd",
                        "on-secondary": "#ffffff",
                        "surface-container-low": "#eff4f7",
                        "on-tertiary-container": "#253e00",
                        "on-primary-fixed": "#001f27",
                        "on-primary": "#ffffff",
                        "outline": "#6d797e",
                        "inverse-primary": "#56d6f9",
                        "surface-container": "#e9eff1",
                        "on-error-container": "#93000a",
                        "secondary-fixed-dim": "#b3c6f9",
                        "surface-bright": "#f5fafd",
                        "surface-container-highest": "#dee3e6",
                        "primary-fixed": "#b2ebff",
                        "primary-container": "#12aed0",
                        "primary": "#00677d",
                        "on-primary-container": "#003c4a",
                        "on-surface-variant": "#3d494d",
                        "on-primary-fixed-variant": "#004e5f",
                        "on-tertiary-fixed-variant": "#314f00",
                        "on-background": "#171c1f",
                        "on-secondary-fixed-variant": "#334671",
                        "tertiary-container": "#73b100",
                        "on-surface": "#171c1f",
                        "tertiary": "#426900",
                        "surface": "#f5fafd",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "surface-container-high": "#e4e9ec",
                        "secondary-fixed": "#d9e2ff",
                        "error-container": "#ffdad6",
                        "inverse-surface": "#2c3133",
                        "tertiary-fixed-dim": "#90db0e",
                        "secondary": "#4b5d8a",
                        "inverse-on-surface": "#ecf1f4",
                        "surface-variant": "#dee3e6"
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
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5fafd;
            color: #171c1f;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .accordion-item.active .accordion-content {
            max-height: 500px;
        }

        .accordion-item.active .toggle-icon {
            transform: rotate(180deg);
        }
    </style>
</head>

<body class="bg-surface text-on-surface">
    @include('partials.navbar')
    <main class="pt-20">
        <!-- FAQ Section -->
        <section class="py-unit-xl px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="mb-unit-xl flex flex-col md:flex-row md:items-end justify-between gap-unit-md">
                <div class="max-w-2xl">
                    <span
                        class="bg-tertiary-fixed text-on-tertiary-fixed px-unit-sm py-1 rounded-sm font-label-sm text-label-sm uppercase mb-unit-sm inline-block">{{ app()->getLocale() === 'en' ? 'Support & Logistics' : 'Dukungan & Logistik' }}</span>
                    <h2 class="font-headline-h2 text-headline-h2 text-on-background mb-unit-sm">
                        {{ app()->getLocale() === 'en' ? 'Common Queries' : 'Pertanyaan Umum' }}</h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant">
                        {{ app()->getLocale() === 'en'
                            ? 'Everything you need to know about partnering with Nakala Digital for your next enterprise venture.'
                            : 'Semua yang perlu Anda ketahui tentang kerja sama dengan Nakala Digital untuk inisiatif enterprise berikutnya.' }}
                    </p>
                </div>
                <div class="hidden md:block">
                    <button
                        class="border-2 border-on-secondary-fixed text-on-secondary-fixed px-unit-lg py-unit-sm rounded font-button text-button hover:bg-on-secondary-fixed hover:text-white transition-all">
                        {{ app()->getLocale() === 'en' ? 'View Documentation' : 'Lihat Dokumentasi' }}
                    </button>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
                <!-- Accordion Column 1 -->
                <div class="space-y-unit-sm">
                    <div
                        class="accordion-item border border-outline-variant bg-surface-container-lowest p-unit-md rounded transition-all hover:border-primary">
                        <button class="w-full flex justify-between items-center text-left"
                            onclick="toggleAccordion(this)">
                            <span
                                class="font-headline-h3 text-headline-h3 text-on-surface">{{ app()->getLocale() === 'en' ? 'What is the typical project timeframe?' : 'Berapa lama durasi proyek biasanya?' }}</span>
                            <span class="material-symbols-outlined toggle-icon transition-transform">expand_more</span>
                        </button>
                        <div class="accordion-content">
                            <p class="pt-unit-md font-body-md text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'MVP development typically spans 8-12 weeks. Enterprise-scale solutions require a detailed roadmapping phase, often delivering core modules within 4-6 months using our agile sprint methodology.'
                                    : 'Pengembangan MVP biasanya berlangsung 8-12 minggu. Solusi skala enterprise membutuhkan fase roadmapping yang detail, dengan modul inti umumnya dikirim dalam 4-6 bulan menggunakan metodologi agile sprint kami.' }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="accordion-item border border-outline-variant bg-surface-container-lowest p-unit-md rounded transition-all hover:border-primary">
                        <button class="w-full flex justify-between items-center text-left"
                            onclick="toggleAccordion(this)">
                            <span
                                class="font-headline-h3 text-headline-h3 text-on-surface">{{ app()->getLocale() === 'en' ? 'Can you integrate AI into legacy systems?' : 'Apakah AI bisa diintegrasikan ke sistem legacy?' }}</span>
                            <span class="material-symbols-outlined toggle-icon transition-transform">expand_more</span>
                        </button>
                        <div class="accordion-content">
                            <p class="pt-unit-md font-body-md text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'Yes. We specialize in "modernization by integration," building API wrappers and machine learning layers that sit atop your existing infrastructure to unlock new capabilities without total system replacement.'
                                    : 'Bisa. Kami berpengalaman dalam "modernisasi lewat integrasi", dengan membangun API wrapper dan layer machine learning di atas infrastruktur yang sudah ada sehingga kapabilitas baru bisa aktif tanpa mengganti seluruh sistem.' }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="accordion-item border border-outline-variant bg-surface-container-lowest p-unit-md rounded transition-all hover:border-primary">
                        <button class="w-full flex justify-between items-center text-left"
                            onclick="toggleAccordion(this)">
                            <span
                                class="font-headline-h3 text-headline-h3 text-on-surface">{{ app()->getLocale() === 'en' ? 'What maintenance support is provided?' : 'Dukungan maintenance apa yang disediakan?' }}</span>
                            <span class="material-symbols-outlined toggle-icon transition-transform">expand_more</span>
                        </button>
                        <div class="accordion-content">
                            <p class="pt-unit-md font-body-md text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'We offer three tiers of SLAs, ranging from essential security patching to 24/7 dedicated engineering support with guaranteed 2-hour response times for critical enterprise outages.'
                                    : 'Kami menyediakan tiga tier SLA, mulai dari patch keamanan dasar sampai dukungan engineering dedicated 24/7 dengan waktu respons 2 jam untuk gangguan enterprise yang kritis.' }}
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Accordion Column 2 -->
                <div class="space-y-unit-sm">
                    <div
                        class="accordion-item border border-outline-variant bg-surface-container-lowest p-unit-md rounded transition-all hover:border-primary">
                        <button class="w-full flex justify-between items-center text-left"
                            onclick="toggleAccordion(this)">
                            <span
                                class="font-headline-h3 text-headline-h3 text-on-surface">{{ app()->getLocale() === 'en' ? 'How do you handle enterprise security?' : 'Bagaimana Nakala menangani keamanan enterprise?' }}</span>
                            <span class="material-symbols-outlined toggle-icon transition-transform">expand_more</span>
                        </button>
                        <div class="accordion-content">
                            <p class="pt-unit-md font-body-md text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'Our codebases undergo rigorous SOC2 compliance checks. We implement end-to-end encryption, role-based access controls (RBAC), and conduct regular third-party penetration testing.'
                                    : 'Codebase kami melalui pemeriksaan compliance yang ketat. Kami menerapkan end-to-end encryption, role-based access control (RBAC), dan penetration testing pihak ketiga secara berkala.' }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="accordion-item border border-outline-variant bg-surface-container-lowest p-unit-md rounded transition-all hover:border-primary">
                        <button class="w-full flex justify-between items-center text-left"
                            onclick="toggleAccordion(this)">
                            <span
                                class="font-headline-h3 text-headline-h3 text-on-surface">{{ app()->getLocale() === 'en' ? 'What tech stack do you recommend?' : 'Tech stack apa yang direkomendasikan?' }}</span>
                            <span class="material-symbols-outlined toggle-icon transition-transform">expand_more</span>
                        </button>
                        <div class="accordion-content">
                            <p class="pt-unit-md font-body-md text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'While we are tech-agnostic, we often leverage React/Next.js for interfaces, Python/Go for backends, and AWS or Azure for scalable cloud infrastructure to ensure long-term stability.'
                                    : 'Kami tech-agnostic, tetapi sering menggunakan React/Next.js untuk interface, Python/Go untuk backend, serta AWS atau Azure untuk infrastruktur cloud yang scalable dan stabil jangka panjang.' }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="accordion-item border border-outline-variant bg-surface-container-lowest p-unit-md rounded transition-all hover:border-primary">
                        <button class="w-full flex justify-between items-center text-left"
                            onclick="toggleAccordion(this)">
                            <span
                                class="font-headline-h3 text-headline-h3 text-on-surface">{{ app()->getLocale() === 'en' ? 'Are your engagement models flexible?' : 'Apakah model kerja samanya fleksibel?' }}</span>
                            <span class="material-symbols-outlined toggle-icon transition-transform">expand_more</span>
                        </button>
                        <div class="accordion-content">
                            <p class="pt-unit-md font-body-md text-body-md text-on-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'Absolutely. We offer Fixed-Price for well-defined scopes, Time & Materials for evolving R&D, and Dedicated Team models for long-term product evolution.'
                                    : 'Fleksibel. Kami menyediakan Fixed-Price untuk scope yang jelas, Time & Materials untuk R&D yang berkembang, dan Dedicated Team untuk evolusi produk jangka panjang.' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Section (Bento Grid) -->
        <section class="py-unit-xl bg-surface-container-low">
            <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
                <div class="text-center mb-unit-xl">
                    <h2 class="font-headline-h2 text-headline-h2 text-on-background mb-unit-sm">
                        {{ app()->getLocale() === 'en' ? 'Engineering Insights' : 'Insight Engineering' }}
                    </h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl mx-auto">
                        {{ app()->getLocale() === 'en'
                            ? 'Perspectives on software excellence, regional tech trends, and the future of digital transformation in Southeast Asia.'
                            : 'Perspektif tentang kualitas software, tren teknologi regional, dan masa depan transformasi digital di Asia Tenggara.' }}
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
                    <!-- Featured Post -->
                    <div class="md:col-span-8 group cursor-pointer">
                        <div
                            class="relative overflow-hidden bg-white border border-outline-variant rounded-lg h-full flex flex-col">
                            <div class="aspect-video overflow-hidden">
                                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="A sophisticated data visualization dashboard displayed on multiple high-resolution monitors in a sleek, dimly lit command center. The lighting is dominated by Electric Cyan and Midnight Navy tones, creating a high-tech corporate atmosphere. The scene captures the essence of enterprise AI and digital intelligence, with a clean, sharp focus on technical rigor and regional capability."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDR535vuudX7lTS7e4rlJh7a9-gVx5AUk-xOXNnnCSBtfb5s7pPif-MixNqR0pMjjojGO_pBwl-VJfRc7i9aneEF3eIqu__3s4_IH1bqYRQmOL9gQCYRooxu7z0_FSjKu97jX8mCvGQzUKtFn12bVzeHbWzoKYiF8rv_pyukmlVamh3S8_Hhyj6uYihaF8rR1ZHEW7QbcWv5lNaab6a7LRWDZ_DRm5-olpTDLSAecUuoW7Top-3b5NwJmCEQZJYjM5nHV33VJnRxhhU" />
                            </div>
                            <div class="p-unit-lg flex-1 border-t-4 border-primary-container">
                                <div class="flex items-center gap-unit-sm mb-unit-sm">
                                    <span
                                        class="text-primary font-label-sm text-label-sm uppercase">{{ app()->getLocale() === 'en' ? 'AI Strategy' : 'Strategi AI' }}</span>
                                    <span class="text-outline text-label-sm">&middot;</span>
                                    <span class="text-outline text-label-sm">May 12, 2024</span>
                                </div>
                                <h3
                                    class="font-headline-h2 text-headline-h2-mobile md:text-headline-h2 mb-unit-sm group-hover:text-primary transition-colors">
                                    {{ app()->getLocale() === 'en' ? 'Bridging the Gap: AI Implementation for Regional SMEs' : 'Menjembatani Gap: Implementasi AI untuk UKM Regional' }}
                                </h3>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-unit-lg">
                                    {{ app()->getLocale() === 'en'
                                        ? 'Discover how local businesses are leveraging tailored machine learning models to compete with global players without the Silicon Valley price tag.'
                                        : 'Pelajari bagaimana bisnis lokal memanfaatkan model machine learning yang disesuaikan untuk bersaing dengan pemain global tanpa biaya yang berlebihan.' }}
                                </p>
                                <a class="inline-flex items-center gap-unit-xs text-primary font-button text-button group"
                                    href="#">
                                    {{ app()->getLocale() === 'en' ? 'Read Full Insight' : 'Baca Insight Lengkap' }}
                                    <span
                                        class="material-symbols-outlined text-sm transition-transform group-hover:translate-x-1">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Side Post 1 -->
                    <div class="md:col-span-4 group cursor-pointer">
                        <div
                            class="bg-white border border-outline-variant rounded-lg overflow-hidden h-full flex flex-col">
                            <div class="aspect-square overflow-hidden">
                                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="Close-up of a high-end mechanical keyboard with glowing cyan backlighting, reflected on a polished desk surface. Beside it, a tablet displays a complex line of code with green and white accents. The mood is precise, orderly, and professional, emphasizing the meticulous nature of quality assurance and technical development."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD42NUAKFSOMS26jXpuJVh1JdCeoMsY6VlRi_rrdM3ac3mhzY3P6z5HsOK5J8me2172qL97zy7cfirniG15cfFYrQvf-XXvRmsud-wmufmobzUv09P4mVKdj5Omi4erlQpHlUmGEM6AmrEdeO3jSTBz3MGV2yPiAN2IlOrdU0AsHO6t7tCbxhHgp1WH4oL27xLiZ8bSM4em19RqG4mJR-UcUbGFfHxQDyNXfMQpHyeYVh5vgZ4CKxo7xJHgCsF1cQa8WQZJyrgo4aDE" />
                            </div>
                            <div class="p-unit-md">
                                <div class="flex items-center gap-unit-sm mb-unit-xs">
                                    <span
                                        class="text-tertiary font-label-sm text-label-sm uppercase">{{ app()->getLocale() === 'en' ? 'Engineering' : 'Engineering' }}</span>
                                </div>
                                <h4
                                    class="font-headline-h3 text-headline-h3 mb-unit-sm group-hover:text-primary transition-colors">
                                    {{ app()->getLocale() === 'en' ? 'QA: The Invisible Pillar of Scaling' : 'QA: Pilar Tak Terlihat untuk Scaling' }}
                                </h4>
                                <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2">
                                    {{ app()->getLocale() === 'en'
                                        ? "Why automated testing isn't just a luxury, but a survival requirement for modern software architecture."
                                        : 'Mengapa automated testing bukan sekadar tambahan, tetapi kebutuhan penting untuk arsitektur software modern.' }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Side Post 2 -->
                    <div class="md:col-span-4 group cursor-pointer">
                        <div
                            class="bg-white border border-outline-variant rounded-lg overflow-hidden h-full flex flex-col">
                            <div class="aspect-square overflow-hidden">
                                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="A clean, minimalist white-walled boardroom with a large central wooden table and vibrant lime-colored chairs. High-contrast natural sunlight streams through large windows, illuminating a wall of colorful sticky notes used for agile planning. The aesthetic is modern corporate, balancing energy with structured professionalism."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDBHjqI828y2RenV7xxVuKk-UgJK6MXYJzvugZkYSpw0etLVxb622NLRTGwc_PmoQe6cHx-uzsmMVn8xS09hzuija3wEFSqrN0BnKB_7GCgAdrmholipris-ll-9R1_43rVo55P9oZ7q93cXsToQ6t1T5G7ulD9B4u3vxenKqLjgl3B55nT8JwuxyfUiAG7PafzeoNW2A8uvZMJ3ymWVCmk6apSAUjeYGcdhQ2Q3oUFooYTrHWKU5TSUKsUBgEjBeEhxf0P9IBINHGl" />
                            </div>
                            <div class="p-unit-md">
                                <div class="flex items-center gap-unit-sm mb-unit-xs">
                                    <span
                                        class="text-secondary font-label-sm text-label-sm uppercase">{{ app()->getLocale() === 'en' ? 'Process' : 'Proses' }}</span>
                                </div>
                                <h4
                                    class="font-headline-h3 text-headline-h3 mb-unit-sm group-hover:text-primary transition-colors">
                                    {{ app()->getLocale() === 'en' ? 'Agile vs. Waterfall in Enterprise' : 'Agile vs. Waterfall di Enterprise' }}
                                </h4>
                                <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2">
                                    {{ app()->getLocale() === 'en'
                                        ? 'Navigating the cultural shifts required when transitioning traditional industries to modern development workflows.'
                                        : 'Memahami perubahan budaya yang dibutuhkan saat industri tradisional beralih ke workflow development modern.' }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Partner Callout (Style Guidance: Strategic Partner Badge) -->
                    <div
                        class="md:col-span-8 bg-on-secondary-fixed text-white rounded-lg p-unit-lg flex flex-col md:flex-row items-center justify-between gap-unit-lg">
                        <div class="text-center md:text-left">
                            <h3 class="font-headline-h2 text-headline-h3 text-primary-fixed mb-unit-xs">
                                {{ app()->getLocale() === 'en' ? 'Collaborate with the Best' : 'Berkolaborasi dengan yang Terbaik' }}
                            </h3>
                            <p class="font-body-md text-body-md text-surface-variant">
                                {{ app()->getLocale() === 'en'
                                    ? 'Our engineering philosophy is backed by world-class strategic standards, ensuring your project meets global benchmarks.'
                                    : 'Filosofi engineering kami didukung standar strategis kelas dunia agar proyek Anda memenuhi benchmark global.' }}
                            </p>
                        </div>
                        <div
                            class="flex-shrink-0 bg-white/10 backdrop-blur-md p-unit-md rounded-lg border border-white/20">
                            <!-- Visualizing the Romulus Digital strategic partner badge as requested in Style Guidance -->
                            <div class="flex flex-col items-center">
                                <span
                                    class="text-[10px] uppercase tracking-widest text-primary-fixed mb-1">{{ app()->getLocale() === 'en' ? 'Strategic Partner' : 'Mitra Strategis' }}</span>
                                <div class="bg-white rounded-lg px-4 py-2"><img class="h-9 w-auto object-contain"
                                        src="{{ asset('assets/romulus-hitam.png') }}" alt="Romulus Digital"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    @include('partials.footer')
    <script>
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
