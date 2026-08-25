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
                </div>
            </div>
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
</body>

</html>
