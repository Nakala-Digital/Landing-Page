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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />

    @php $localeSuffix = app()->getLocale() === 'en' ? '.en' : ''; @endphp

    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "electric-cyan": "#12AED0",
                        "midnight-navy": "#031A44",
                        "impact-lime": "#A7F432",
                        "surface-gray": "#F7FAFC",
                        "impact-lime": "#A7F432"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "full": "9999px"
                    },
                    fontFamily: {
                        poppins: ["Poppins", "sans-serif"],
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F8FAFC;
            color: #031A44;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.35s ease-out, opacity 0.25s ease-out, padding 0.25s ease-out;
            opacity: 0;
        }

        .accordion-item.active .accordion-content {
            max-height: 500px;
            opacity: 1;
            padding-top: 1rem;
            padding-bottom: 0.5rem;
        }

        .accordion-item.active .toggle-icon {
            transform: rotate(90deg);
        }

        .accordion-item.active {
            border-radius: 1.5rem !important;
        }
    </style>
</head>

<body class="bg-surface-gray text-midnight-navy">
    @include('partials.navbar')

    <main class="pt-24 pb-16">
        @php
            $isEn = app()->getLocale() === 'en';

            $faqs = [
                // Kolom 1
                [
                    'question' => $isEn
                        ? 'What services does Nakala Digital provide?'
                        : 'Layanan apa saja yang di sediakan Nakala Digital?',
                    'answer' => $isEn
                        ? 'We provide software development, AI and GenAI solutions, technology consulting, web and portal development, QA governance, and managed support for enterprise platforms including Microsoft Dynamics 365.'
                        : 'Kami menyediakan pengembangan perangkat lunak, solusi AI dan GenAI, konsultasi teknologi, pengembangan web dan portal, tata kelola QA, serta dukungan terkelola untuk platform enterprise termasuk Microsoft Dynamics 365.',
                ],
                [
                    'question' => $isEn
                        ? 'What industries do you specialize in?'
                        : 'Industri apa saja yang dilayani Nakala Digital?',
                    'answer' => $isEn
                        ? 'We serve various sectors including Banking & Financial Services, Logistics, Retail, Healthcare, and Government enterprise solutions with tailored regional compliance.'
                        : 'Kami melayani berbagai sektor seperti Layanan Keuangan & Perbankan, Logistik, Retail, Kesehatan, hingga solusi Enterprise Pemerintahan dengan penyesuaian regulasi regional.',
                ],
                [
                    'question' => $isEn
                        ? 'How does the project engagement process work?'
                        : 'Bagaimana proses keterlibatan proyek?',
                    'answer' => $isEn
                        ? 'We follow a structured end-to-end lifecycle: Discovery & Scoping, Design & Architecture, Agile Development & QA, SIT/UAT, Deployment & Go-Live, Handover, and Support & Growth.'
                        : 'Kami mengikuti siklus end-to-end yang terstruktur: Discovery & Scoping, Design & Architecture, Agile Development & QA, SIT/UAT, Deployment & Go-Live, Handover, serta Support & Growth.',
                ],
                [
                    'question' => $isEn
                        ? 'What is the estimated project timeline?'
                        : 'Berapa estimasi timeline pengerjaan?',
                    'answer' => $isEn
                        ? 'Timelines depend on scope. A focused MVP can be delivered within 8-12 weeks, while larger enterprise solutions take 4-6 months in phased deliveries.'
                        : 'Timeline tergantung lingkup proyek. MVP terfokus selesai dalam 8-12 minggu, sedangkan solusi enterprise besar dikirimkan bertahap dalam 4-6 bulan.',
                ],
                [
                    'question' => $isEn
                        ? 'Is post-launch support available?'
                        : 'Apakah tersedia dukungan setelah go-live?',
                    'answer' => $isEn
                        ? 'Yes. We provide ongoing support through flexible SLAs, covering L1 to L3 technical support, system monitoring, and feature upgrades.'
                        : 'Ya. Kami menyediakan dukungan berkelanjutan melalui SLA fleksibel, mencakup dukungan teknis L1 hingga L3, monitoring sistem, dan pembaruan fitur.',
                ],

                // Kolom 2
                [
                    'question' => $isEn
                        ? 'How does the partnership with Romulus Digital work?'
                        : 'Bagaimana model partnership dengan Romulus Digital?',
                    'answer' => $isEn
                        ? 'Nakala Digital is the primary delivery partner. Romulus Digital acts as a strategic trust layer and regional capability partner for enterprise scaling and technical depth.'
                        : 'Nakala Digital adalah mitra pengiriman utama. Romulus Digital bertindak sebagai trust layer strategis dan mitra kapabilitas regional untuk skala enterprise.',
                ],
                [
                    'question' => $isEn
                        ? 'What engagement/collaboration models are available?'
                        : 'Apa saja model kerja sama yang tersedia?',
                    'answer' => $isEn
                        ? 'We offer Flexible Time & Materials, Fixed Price Project Delivery, and Dedicated Engineering Team augmentation.'
                        : 'Kami menawarkan model Time & Materials yang fleksibel, Fixed Price Project Delivery, hingga Augmentasi Tim Dedicated Engineering.',
                ],
                [
                    'question' => $isEn ? 'How is data security handled?' : 'Bagaimana aspek data/security ditangani?',
                    'answer' => $isEn
                        ? 'We follow RBAC, strict data encryption, and secure DevSecOps practices. Our QA governance framework includes rigorous security checkpoints.'
                        : 'Kami menerapkan RBAC, enkripsi data ketat, dan praktik DevSecOps. Framework tata kelola QA kami memiliki checkpoint keamanan komprehensif.',
                ],
                [
                    'question' => $isEn
                        ? 'How can I contact the Nakala team?'
                        : 'Bagaimana cara menghubungi tim Nakala?',
                    'answer' => $isEn
                        ? 'You can reach us via contact@nakala.digital, phone at +62 822-9570-6304, or through our direct contact page for a free discovery session.'
                        : 'Anda dapat menghubungi kami di contact@nakala.digital, +62 822-9570-6304, atau halaman kontak langsung untuk sesi discovery gratis.',
                ],
            ];

            $col1 = array_slice($faqs, 0, 5);
            $col2 = array_slice($faqs, 5, 4);
        @endphp

        <!-- FAQ SECTION -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 pb-20">
            <!-- Header Section -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
                <div class="max-w-2xl">
                    <!-- Pill Badge sesuai Figma -->
                    <div
                        class="inline-flex items-center gap-1.5 bg-impact-lime text-midnight-navy px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                        <span class="material-symbols-outlined text-sm font-bold">help</span>
                        <span>FAQ</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-midnight-navy tracking-tight mb-4">
                        {{ $isEn ? 'Frequently Asked Questions' : 'Pertanyaan Umum' }}
                    </h1>
                    <p class="text-gray-600 text-base md:text-lg leading-relaxed">
                        {{ $isEn
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

                <!-- CTA Action Buttons -->
                <div class="flex items-center gap-3 self-start md:self-end">
                    <a href="{{ route('contact' . $localeSuffix) }}"
                        class="border-2 border-electric-cyan text-electric-cyan hover:bg-electric-cyan hover:text-white px-6 py-2.5 rounded-full text-sm font-bold tracking-wider uppercase transition-all duration-200">
                        {{ $isEn ? 'Start Project' : 'Mulai Proyek' }}
                    </a>
                    <a href="{{ route('insights' . $localeSuffix) }}"
                        class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-6 py-2.5 rounded-full text-sm font-bold tracking-wider uppercase transition-all duration-200">
                        {{ $isEn ? 'View Insights' : 'Lihat Insight' }}
                    </a>
                </div>
            </div>

            <!-- FAQ Accordion Grid (Kolom Kiri & Kanan) -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                <!-- Kolom 1 -->
                <div class="space-y-4">
                    @foreach ($col1 as $index => $faq)
                        <div
                            class="accordion-item border border-electric-cyan/60 bg-white rounded-full px-6 py-3.5 transition-all duration-200 shadow-sm hover:border-electric-cyan">
                            <button class="w-full flex justify-between items-center text-left focus:outline-none"
                                onclick="toggleAccordion(this)">
                                <span
                                    class="font-medium text-midnight-navy text-sm md:text-base pr-4">{{ $faq['question'] }}</span>
                                <span
                                    class="material-symbols-outlined text-electric-cyan toggle-icon transition-transform duration-200">chevron_right</span>
                            </button>
                            <div class="accordion-content">
                                <p class="text-sm text-gray-600 leading-relaxed border-t border-gray-100 pt-3">
                                    {{ $faq['answer'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Kolom 2 -->
                <div class="space-y-4">
                    @foreach ($col2 as $index => $faq)
                        <div
                            class="accordion-item border border-electric-cyan/60 bg-white rounded-full px-6 py-3.5 transition-all duration-200 shadow-sm hover:border-electric-cyan">
                            <button class="w-full flex justify-between items-center text-left focus:outline-none"
                                onclick="toggleAccordion(this)">
                                <span
                                    class="font-medium text-midnight-navy text-sm md:text-base pr-4">{{ $faq['question'] }}</span>
                                <span
                                    class="material-symbols-outlined text-electric-cyan toggle-icon transition-transform duration-200">chevron_right</span>
                            </button>
                            <div class="accordion-content">
                                <p class="text-sm text-gray-600 leading-relaxed border-t border-gray-100 pt-3">
                                    {{ $faq['answer'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
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

        <!-- SECTION INSIGHT ENGINEERING -->
        <section class="py-16 bg-surface-gray">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Title -->
                <div class="mb-10">
                    <span class="text-xs font-bold text-electric-cyan uppercase tracking-widest block mb-1">
                        {{ $isEn ? 'Solution Highlight' : 'Sorotan Solusi' }}
                    </span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-midnight-navy mb-2">
                        {{ $isEn ? 'Engineering Insights' : 'Insight Engineering' }}
        <!-- Blog Section (Bento Grid) -->
        <section class="py-unit-xl bg-surface-container-low">
            <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
                <div class="mb-unit-xl">
                    <span
                        class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">{{ app()->getLocale() === 'en' ? 'Solution Highlight' : 'Sorotan Solusi' }}</span>
                    <h2 class="font-headline-h2 text-headline-h2 text-on-surface mb-unit-sm">
                        {{ app()->getLocale() === 'en' ? 'Engineering Insights' : 'Insight Engineering' }}
                    </h2>
                    <p class="text-gray-600 max-w-3xl text-sm md:text-base">
                        {{ $isEn
                            ? 'Perspectives on software quality, regional tech trends, and the future of digital transformation in Southeast Asia.'
                            : 'Perspektif tentang kualitas software, tren teknologi regional, dan masa depan transformasi digital di Asia Tenggara.' }}
                    </p>
                </div>

                <!-- Article Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @php
                        $articles = [
                            [
                                'title' => $isEn
                                    ? 'Bridging the Gap: AI Implementation for Regional SMEs'
                                    : 'Menjembatani Gap: Implementasi AI untuk UKM Regional',
                                'category' => $isEn ? 'AI STRATEGY - LATEST INSIGHT' : 'STRATEGI AI - INSIGHT TERBARU',
                                'excerpt' => $isEn
                                    ? 'Learn how local businesses leverage tailored machine learning models to compete with global players without excessive cost.'
                                    : 'Pelajari bagaimana bisnis lokal memanfaatkan model machine learning yang disesuaikan untuk bersaing dengan pemain global tanpa biaya yang berlebihan.',
                                'image' =>
                                    'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80',
                                'url' => route('insights' . $localeSuffix),
                            ],
                            [
                                'title' => $isEn
                                    ? 'QA: The Invisible Pillar of Scaling'
                                    : 'QA: Pilar Tak Terlihat untuk Scaling',
                                'category' => 'ENGINEERING',
                                'excerpt' => $isEn
                                    ? 'Why automated testing is not just an add-on, but a fundamental necessity.'
                                    : 'Mengapa automated testing bukan sekadar tambahan, tetapi kebutuhan.',
                                'image' =>
                                    'https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=800&q=80',
                                'url' => route('insights' . $localeSuffix),
                            ],
                            [
                                'title' => $isEn
                                    ? 'Agile vs. Waterfall in Enterprise'
                                    : 'Agile vs. Waterfall di Enterprise',
                                'category' => $isEn ? 'PROCESS' : 'PROSES',
                                'excerpt' => $isEn
                                    ? 'Understanding cultural changes needed when traditional industries adopt modern agile frameworks.'
                                    : 'Memahami perubahan budaya yang dibutuhkan saat industri tradisional.',
                                'image' =>
                                    'https://images.unsplash.com/photo-1531403009284-440f080d1e12?auto=format&fit=crop&w=800&q=80',
                                'url' => route('insights' . $localeSuffix),
                            ],
                        ];
                    @endphp

                    @foreach ($articles as $article)
                        <div
                            class="bg-white border border-electric-cyan/40 rounded-2xl overflow-hidden flex flex-col shadow-sm hover:shadow-md transition-shadow">
                            <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}"
                                class="h-48 w-full object-cover">
                            <div class="p-6 flex flex-col flex-grow">
                                <span
                                    class="text-[11px] font-bold text-electric-cyan uppercase tracking-wider mb-2 block">
                                    {{ $article['category'] }}
                                </span>
                                <h3 class="font-bold text-lg text-midnight-navy mb-3 leading-snug">
                                    {{ $article['title'] }}
                                </h3>
                                <p class="text-xs text-gray-500 leading-relaxed mb-4 flex-grow">
                                    {{ $article['excerpt'] }}
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
                    @endforeach
                </div>
            </div>
        </section>

        <!-- SECTION BERKOLABORASI DENGAN YANG TERBAIK -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <div class="bg-midnight-navy text-white rounded-3xl p-8 md:p-12 text-center shadow-lg">
                <h2 class="text-2xl md:text-4xl font-extrabold text-electric-cyan mb-3">
                    {{ $isEn ? 'Collaborate with the Best' : 'Berkolaborasi dengan yang Terbaik' }}
                </h2>
                <p class="text-gray-300 text-sm md:text-base max-w-2xl mx-auto mb-10 leading-relaxed">
                    {{ $isEn
                        ? 'Our engineering philosophy is backed by world-class strategic standards so that your project meets global benchmarks.'
                        : 'Filosofi engineering kami didukung standar strategis kelas dunia agar proyek Anda memenuhi benchmark global.' }}
                </p>

                <!-- Footer Partners & Logos Container -->
                <div class="flex flex-col sm:flex-row items-center justify-center gap-6 sm:gap-12">
                    <!-- Nakala Logo Card -->
                    <div class="bg-white px-5 py-2.5 rounded-lg flex items-center justify-center shadow-sm">
                        <span class="font-bold text-midnight-navy text-lg tracking-tight">Nakala <span
                                class="text-electric-cyan">Digital</span></span>
                    </div>

                    <!-- Label Tengah -->
                    <div class="text-center">
                        <span class="text-impact-lime font-bold text-xs uppercase tracking-wider block">PERWAKILAN &
                            MITRA DELIVERY</span>
                        <span class="text-gray-400 text-[11px]">Strategis dari Romulus Digital</span>
                    </div>

                    <!-- Romulus Logo Card -->
                    <div class="bg-white px-5 py-2.5 rounded-lg flex items-center justify-center shadow-sm">
                        <span class="font-bold text-midnight-navy text-base">Romulus</span>
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

    @include('partials.footer')

    <!-- Interactive Script Accordion -->
    <script>
        function toggleAccordion(button) {
            const item = button.closest('.accordion-item');
            const isActive = item.classList.contains('active');

            // Tutup semua item lain
            document.querySelectorAll('.accordion-item').forEach(el => {
                el.classList.remove('active');
            });

            // Toggle item saat ini
            if (!isActive) {
                item.classList.add('active');
            }
        }
    </script>
    @include('partials.lenis-scroll')
</body>

</html>
