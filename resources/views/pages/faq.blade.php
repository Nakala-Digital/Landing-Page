<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        {{ app()->getLocale() === 'en' ? 'Frequently Asked Questions | Nakala Digital' : 'Pertanyaan Umum (FAQ) | Nakala Digital' }}
    </title>
    @include('partials.seo', [
        'title' =>
            app()->getLocale() === 'en'
                ? 'Frequently Asked Questions | Nakala Digital'
                : 'Pertanyaan Umum (FAQ) | Nakala Digital',
        'description' =>
            app()->getLocale() === 'en'
                ? 'Find answers to frequently asked questions about Nakala Digital software development, AI solutions, technology consulting, and how we partner with businesses in Indonesia.'
                : 'Temukan jawaban atas pertanyaan umum tentang layanan pengembangan software, solusi AI, konsultasi teknologi Nakala Digital, dan cara kami bermitra dengan bisnis di Indonesia.',
    ])
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    @php $localeSuffix = app()->getLocale() === 'en' ? '.en' : ''; @endphp
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
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "full": "9999px"
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
</head>

<body class="bg-surface text-on-surface">
    @include('partials.navbar')
    <main class="pt-20">
        <!-- FAQ Section -->
        <section
            class="pt-unit-lg pb-unit-xl lg:pt-unit-xl lg:pb-32 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="mb-unit-xl flex flex-col md:flex-row md:items-end justify-between gap-unit-md">
                <div class="max-w-2xl">
                    <span
                        class="bg-tertiary-fixed text-on-tertiary-fixed px-unit-sm py-1 rounded-[20px] font-label-sm text-label-sm uppercase mb-unit-sm inline-block">{{ app()->getLocale() === 'en' ? 'FAQ' : 'FAQ' }}</span>
                    <h2 class="font-headline-h2 text-headline-h2 text-on-background mb-unit-sm">
                        {{ app()->getLocale() === 'en' ? 'Common Queries' : 'Pertanyaan Umum' }}</h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant">
                        {{ app()->getLocale() === 'en'
                            ? 'Everything you need to know about partnering with Nakala Digital for your next enterprise venture.'
                            : 'Semua yang perlu Anda ketahui tentang kerja sama dengan Nakala Digital untuk inisiatif enterprise berikutnya.' }}
                    </p>
                </div>
                <div class="hidden md:flex flex-wrap gap-unit-sm">
                    <a href="{{ route('contact' . $localeSuffix) }}"
                        class="inline-block border-2 border-primary text-primary px-unit-lg py-unit-sm rounded-[20px] font-button text-button hover:bg-primary hover:text-white transition-all">
                        {{ app()->getLocale() === 'en' ? 'Start a Project' : 'Mulai Proyek' }}
                    </a>
                    <a href="{{ route('insights' . $localeSuffix) }}"
                        class="inline-block border-2 border-on-secondary-fixed text-on-secondary-fixed px-unit-lg py-unit-sm rounded-[20px] font-button text-button hover:bg-on-secondary-fixed hover:text-white transition-all">
                        {{ app()->getLocale() === 'en' ? 'View Insights' : 'Lihat Insight' }}
                    </a>
                </div>
            </div>
            @include('partials.faq-accordion', [
                'items' => collect([
                    ['question' => __('messages.faq_services_q'), 'answer' => __('messages.faq_services_a')],
                    ['question' => __('messages.faq_industries_q'), 'answer' => __('messages.faq_industries_a')],
                    ['question' => __('messages.faq_engagement_q'), 'answer' => __('messages.faq_engagement_a')],
                    ['question' => __('messages.faq_timeline_q'), 'answer' => __('messages.faq_timeline_a')],
                    ['question' => __('messages.faq_support_q'), 'answer' => __('messages.faq_support_a')],
                    ['question' => __('messages.faq_romulus_q'), 'answer' => __('messages.faq_romulus_a')],
                    ['question' => __('messages.faq_engagement_models_q'), 'answer' => __('messages.faq_engagement_models_a')],
                    ['question' => __('messages.faq_security_q'), 'answer' => __('messages.faq_security_a')],
                    ['question' => __('messages.faq_contact_q'), 'answer' => __('messages.faq_contact_a')],
                ]),
                'columns' => 2,
                'itemClass' => 'border border-primary bg-surface p-unit-md rounded-[25px] px-6 transition-all',
                'questionClass' => 'font-medium text-lg text-on-surface',
                'answerClass' => 'pt-unit-md font-body-md text-body-md text-on-surface-variant',
            ])
        </section>
        <!-- Blog Section (Bento Grid) -->
        <section class="py-unit-xl bg-surface-container-low">
            <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
                <div class="mb-unit-xl">
                    <span
                        class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">{{ app()->getLocale() === 'en' ? 'Solution Highlight' : 'Sorotan Solusi' }}</span>
                    <h2 class="font-headline-h2 text-headline-h2 text-on-surface mb-unit-sm">
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
                            class="relative overflow-hidden bg-white border border-outline-variant rounded-[20px] h-full flex flex-col">
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
                                    <span
                                        class="text-outline text-label-sm">{{ app()->getLocale() === 'en' ? 'Latest Insight' : 'Insight Terbaru' }}</span>
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
                                    href="{{ route('insights' . $localeSuffix) }}">
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
                            class="bg-white border border-outline-variant rounded-[20px] overflow-hidden h-full flex flex-col">
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
                            class="bg-white border border-outline-variant rounded-[20px] overflow-hidden h-full flex flex-col">
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
                        class="md:col-span-8 bg-on-secondary-fixed text-white rounded-[20px] p-unit-lg flex flex-col md:flex-row items-center justify-between gap-unit-lg">
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
                            class="flex-shrink-0 bg-white/10 backdrop-blur-md p-unit-md rounded-[20px] border border-white/20">
                            <!-- Visualizing the Romulus Digital strategic partner badge as requested in Style Guidance -->
                            <div class="flex flex-col items-center">
                                <span
                                    class="text-[10px] uppercase tracking-widest text-primary-fixed mb-1">{{ app()->getLocale() === 'en' ? 'Strategic Partner' : 'Mitra Strategis' }}</span>
                                <div class="bg-white rounded-[20px] px-4 py-2"><img class="h-9 w-auto object-contain"
                                        src="{{ asset('assets/romulus-hitam.png') }}" alt="Romulus Digital"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-unit-xl pt-unit-md">
                    <a href="{{ route('insights' . $localeSuffix) }}"
                        class="inline-flex items-center gap-unit-xs text-primary font-button text-button group hover:underline">
                        <span class="material-symbols-outlined text-sm">visibility</span>
                        {{ app()->getLocale() === 'en' ? 'View All Insights' : 'Lihat Semua Insight' }}
                        <span
                            class="material-symbols-outlined text-sm transition-transform group-hover:translate-x-1">arrow_forward</span>
                    </a>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    @include('partials.footer')
    @include('partials.lenis-scroll')
</body>

</html>
