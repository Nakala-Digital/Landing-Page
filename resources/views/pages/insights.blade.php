<!DOCTYPE html>

<html class="scroll-smooth" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ app()->getLocale() === 'en' ? 'Insights | Nakala Digital' : 'Insight | Nakala Digital' }}</title>
    @include('partials.seo', [
        'title' => app()->getLocale() === 'en' ? 'Insights | Nakala Digital' : 'Insight | Nakala Digital',
        'description' => app()->getLocale() === 'en'
            ? 'Read the latest insights, perspectives, and thought leadership from Nakala Digital on software development, AI, QA governance, and digital transformation.'
            : 'Baca insight, perspektif, dan pemikiran terbaru dari Nakala Digital tentang pengembangan software, AI, tata kelola QA, dan transformasi digital.',
    ])
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
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
        }
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-background text-on-background font-body-md">
    @include('partials.navbar')
    <main class="pt-20">
        <!-- Hero -->
        <section class="relative bg-surface-container-lowest overflow-hidden py-unit-xl border-b border-outline-variant">
            <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
                <div class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-4 py-1.5 rounded-full font-label-sm text-label-sm uppercase tracking-widest mb-unit-md">
                    <span class="material-symbols-outlined text-[16px]">bolt</span>
                    {{ app()->getLocale() === 'en' ? 'Solution Highlight' : 'Sorotan Solusi' }}
                </div>
                <h1 class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-on-background max-w-3xl mb-unit-md">
                    {{ app()->getLocale() === 'en' ? 'Insights & Thought Leadership' : 'Insight & Pemikiran' }}
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    {{ app()->getLocale() === 'en'
                        ? 'Perspectives on software excellence, AI adoption, QA governance, and digital transformation from the Nakala Digital team.'
                        : 'Perspektif tentang keunggulan software, adopsi AI, tata kelola QA, dan transformasi digital dari tim Nakala Digital.' }}
                </p>
            </div>
        </section>

        <!-- Featured Insight -->
        <section class="py-unit-xl px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="mb-unit-lg">
                <span class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">{{ app()->getLocale() === 'en' ? 'Featured' : 'Unggulan' }}</span>
            </div>
            <div class="group cursor-pointer bg-white border border-outline-variant rounded-xl overflow-hidden flex flex-col md:flex-row">
                <div class="md:w-1/2 aspect-video md:aspect-auto overflow-hidden">
                    <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        data-alt="A sophisticated data visualization dashboard displayed on multiple high-resolution monitors in a sleek, dimly lit command center."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDR535vuudX7lTS7e4rlJh7a9-gVx5AUk-xOXNnnCSBtfb5s7pPif-MixNqR0pMjjojGO_pBwl-VJfRc7i9aneEF3eIqu__3s4_IH1bqYRQmOL9gQCYRooxu7z0_FSjKu97jX8mCvGQzUKtFn12bVzeHbWzoKYiF8rv_pyukmlVamh3S8_Hhyj6uYihaF8rR1ZHEW7QbcWv5lNaab6a7LRWDZ_DRm5-olpTDLSAecUuoW7Top-3b5NwJmCEQZJYjM5nHV33VJnRxhhU" />
                </div>
                <div class="md:w-1/2 p-unit-lg flex flex-col justify-between border-t-4 md:border-t-0 md:border-l-4 border-primary">
                    <div>
                        <div class="flex items-center gap-unit-sm mb-unit-sm">
                            <span class="text-primary font-label-sm text-label-sm uppercase">{{ app()->getLocale() === 'en' ? 'AI Strategy' : 'Strategi AI' }}</span>
                        </div>
                        <h2 class="font-headline-h2 text-headline-h2-mobile md:text-headline-h2 mb-unit-sm group-hover:text-primary transition-colors">
                            {{ app()->getLocale() === 'en' ? 'Bridging the Gap: AI Implementation for Regional Enterprises' : 'Menjembatani Gap: Implementasi AI untuk Perusahaan Regional' }}
                        </h2>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-unit-lg">
                            {{ app()->getLocale() === 'en'
                                ? 'How local businesses can leverage tailored AI solutions to compete at a regional level without enterprise-scale investment.'
                                : 'Bagaimana bisnis lokal dapat memanfaatkan solusi AI yang disesuaikan untuk bersaing di tingkat regional tanpa investasi skala enterprise.' }}
                        </p>
                    </div>
                    <a class="inline-flex items-center gap-unit-xs text-primary font-button text-button group" href="#">
                        {{ app()->getLocale() === 'en' ? 'Read Full Insight' : 'Baca Insight Lengkap' }}
                        <span class="material-symbols-outlined text-sm transition-transform group-hover:translate-x-1">arrow_forward</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Draft Topics Grid -->
        <section class="py-unit-xl bg-surface-container-low">
            <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
                <div class="mb-unit-xl max-w-3xl">
                    <span class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">{{ app()->getLocale() === 'en' ? 'Solution Highlight' : 'Sorotan Solusi' }}</span>
                    <h2 class="font-headline-h2 text-headline-h2 text-on-surface">
                        {{ app()->getLocale() === 'en' ? 'Explore by Topic' : 'Jelajahi berdasarkan Topik' }}
                    </h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                    <!-- Topic 1: PPDB -->
                    <div class="bg-white border border-outline-variant rounded-xl overflow-hidden group cursor-pointer">
                        <div class="aspect-video overflow-hidden">
                            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                data-alt="A modern school building entrance with digital registration kiosks, symbolizing digital transformation in education."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDDjYUTUCC8m9pWJV1Nh4-wfC7b_EnyzOndB687zN9tswDCzugWKa7flgq88mWrxhsuTqXISszLc4vHwwmIJDodtShYhudRKPZTlsxnZSUGE7R86SczAsnAtxagjJwT_-ljISfkY062sdTH4SzslCEMqZjvPJEfTvP6lir7632rS6vTPThWJtCw6Lqzpu5iOuEMPxZDLqkSE5-23lqGK_g3TZf4N4FoCijbLArqzIk7JBB5PCJBnbvvOCaYl_PkFj2uCyqa06v7khIs" />
                        </div>
                        <div class="p-unit-md">
                            <span class="text-primary font-label-sm text-label-sm uppercase">{{ app()->getLocale() === 'en' ? 'Digital Transformation' : 'Transformasi Digital' }}</span>
                            <h3 class="font-headline-h3 text-headline-h3 mt-unit-sm mb-unit-sm group-hover:text-primary transition-colors">
                                {{ app()->getLocale() === 'en' ? 'How to Plan a School PPDB Portal' : 'Cara Merencanakan Portal PPDB Sekolah' }}
                            </h3>
                            <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3">
                                {{ app()->getLocale() === 'en'
                                    ? 'Key considerations for educational institutions planning a digital admission portal, from requirement gathering to deployment and handover.'
                                    : 'Pertimbangan utama bagi institusi pendidikan yang merencanakan portal penerimaan digital, dari pengumpulan kebutuhan hingga deployment dan serah terima.' }}
                            </p>
                        </div>
                    </div>

                    <!-- Topic 2: QA Governance -->
                    <div class="bg-white border border-outline-variant rounded-xl overflow-hidden group cursor-pointer">
                        <div class="aspect-video overflow-hidden">
                            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                data-alt="Close-up of a high-end mechanical keyboard with glowing cyan backlighting, reflected on a polished desk surface."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD42NUAKFSOMS26jXpuJVh1JdCeoMsY6VlRi_rrdM3ac3mhzY3P6z5HsOK5J8me2172qL97zy7cfirniG15cfFYrQvf-XXvRmsud-wmufmobzUv09P4mVKdj5Omi4erlQpHlUmGEM6AmrEdeO3jSTBz3MGV2yPiAN2IlOrdU0AsHO6t7tCbxhHgp1WH4oL27xLiZ8bSM4em19RqG4mJR-UcUbGFfHxQDyNXfMQpHyeYVh5vgZ4CKxo7xJHgCsF1cQa8WQZJyrgo4aDE" />
                        </div>
                        <div class="p-unit-md">
                            <span class="text-primary font-label-sm text-label-sm uppercase">{{ app()->getLocale() === 'en' ? 'QA Governance' : 'Tata Kelola QA' }}</span>
                            <h3 class="font-headline-h3 text-headline-h3 mt-unit-sm mb-unit-sm group-hover:text-primary transition-colors">
                                {{ app()->getLocale() === 'en' ? 'Why QA Governance Matters in Software Projects' : 'Mengapa Tata Kelola QA Penting dalam Proyek Software' }}
                            </h3>
                            <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3">
                                {{ app()->getLocale() === 'en'
                                    ? 'Why quality assurance should be treated as a delivery discipline, not an afterthought, and how structured QA governance reduces project risk.'
                                    : 'Mengapa quality assurance harus diperlakukan sebagai disiplin delivery, bukan tambahan, dan bagaimana tata kelola QA yang terstruktur mengurangi risiko proyek.' }}
                            </p>
                        </div>
                    </div>

                    <!-- Topic 3: Agile Delivery -->
                    <div class="bg-white border border-outline-variant rounded-xl overflow-hidden group cursor-pointer">
                        <div class="aspect-video overflow-hidden">
                            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                data-alt="A clean, minimalist white-walled boardroom with a large central wooden table and vibrant lime-colored chairs."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDBHjqI828y2RenV7xxVuKk-UgJK6MXYJzvugZkYSpw0etLVxb622NLRTGwc_PmoQe6cHx-uzsmMVn8xS09hzuija3wEFSqrN0BnKB_7GCgAdrmholipris-ll-9R1_43rVo55P9oZ7q93cXsToQ6t1T5G7ulD9B4u3vxenKqLjgl3B55nT8JwuxyfUiAG7PafzeoNW2A8uvZMJ3ymWVCmk6apSAUjeYGcdhQ2Q3oUFooYTrHWKU5TSUKsUBgEjBeEhxf0P9IBINHGl" />
                        </div>
                        <div class="p-unit-md">
                            <span class="text-primary font-label-sm text-label-sm uppercase">{{ app()->getLocale() === 'en' ? 'Delivery Approach' : 'Pendekatan Delivery' }}</span>
                            <h3 class="font-headline-h3 text-headline-h3 mt-unit-sm mb-unit-sm group-hover:text-primary transition-colors">
                                {{ app()->getLocale() === 'en' ? 'Agile Delivery for Digital Solutions' : 'Agile Delivery untuk Solusi Digital' }}
                            </h3>
                            <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3">
                                {{ app()->getLocale() === 'en'
                                    ? 'How Agile methodology enables faster time-to-market, better quality, and stronger alignment between business goals and technical execution.'
                                    : 'Bagaimana metodologi Agile memungkinkan time-to-market yang lebih cepat, kualitas yang lebih baik, dan keselarasan yang lebih kuat antara tujuan bisnis dan eksekusi teknis.' }}
                            </p>
                        </div>
                    </div>

                    <!-- Topic 4: AI Use Cases -->
                    <div class="bg-white border border-outline-variant rounded-xl overflow-hidden group cursor-pointer">
                        <div class="aspect-video overflow-hidden">
                            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                data-alt="A clean, minimalist 3D rendering of a human brain silhouette constructed from glowing cyan fiber optic lines."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCnZsssdKLtkzueklGWdgMkw8L8KeHqUg-gs2up5aCh-gt1jvoqkvF_vHFYNm52kSdE_ZevSbKBpTmZKvChiwlxSfgxWcbWQBc4r0URNxka1X4pemelt9wLZFLCKVNEFVaz-F0z8atrHX7BPMv92OesIifP4KZHxihIM6Vh6WP3JcJh-KzYyUVDmN80h2wl1p3v4uzEVUxRorP99-UY1sMMUpI5eYF_HHAB870yoXwOR-lQcSJrCtTI5Z48V_xhcjUt1IewyfDEs-Tq" />
                        </div>
                        <div class="p-unit-md">
                            <span class="text-primary font-label-sm text-label-sm uppercase">{{ app()->getLocale() === 'en' ? 'AI Technology' : 'Teknologi AI' }}</span>
                            <h3 class="font-headline-h3 text-headline-h3 mt-unit-sm mb-unit-sm group-hover:text-primary transition-colors">
                                {{ app()->getLocale() === 'en' ? 'AI Use Cases for Business Operations' : 'Use Case AI untuk Operasional Bisnis' }}
                            </h3>
                            <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3">
                                {{ app()->getLocale() === 'en'
                                    ? 'Practical applications of AI across finance, HR, customer service, and operations, from document intelligence to predictive analytics.'
                                    : 'Aplikasi praktis AI di bidang keuangan, SDM, layanan pelanggan, dan operasional, dari document intelligence hingga analitik prediktif.' }}
                            </p>
                        </div>
                    </div>

                    <!-- Topic 5: Choosing Partner -->
                    <div class="bg-white border border-outline-variant rounded-xl overflow-hidden group cursor-pointer">
                        <div class="aspect-video overflow-hidden">
                            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                data-alt="A professional, modern corporate leadership team collaborating in a bright, glass-walled skyscraper office."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuARjNPNzkbtHKbzPJa5qHoWQBSs9eF75JXSSBiByw6ao2Np8mzZQTMNZRPe0To39pJI5eHYiWUYDcSVk5dDBOsVqo9co64wiCoq31MqgALZqldSWB_gXG2cvmMZMciEjeRuDhe9-P2E24Schimpsl_ujy1HLub-3wz8RUkB-5VVFU3NwTWBWd83OISeJweefFAsmceqnTC8Vq7JOigcRes6ICW7NG-GgiPD2U3OytBhYDdDVLA15yQ0NWOi4xoRmbZBzm57X2iv2QoO" />
                        </div>
                        <div class="p-unit-md">
                            <span class="text-primary font-label-sm text-label-sm uppercase">{{ app()->getLocale() === 'en' ? 'Partnership' : 'Kemitraan' }}</span>
                            <h3 class="font-headline-h3 text-headline-h3 mt-unit-sm mb-unit-sm group-hover:text-primary transition-colors">
                                {{ app()->getLocale() === 'en' ? 'Choosing the Right Technology Partner' : 'Memilih Mitra Teknologi yang Tepat' }}
                            </h3>
                            <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3">
                                {{ app()->getLocale() === 'en'
                                    ? 'A practical guide for organisations evaluating technology partners, covering capability assessment, cultural fit, and governance standards.'
                                    : 'Panduan praktis bagi organisasi yang mengevaluasi mitra teknologi, mencakup penilaian kapabilitas, kesesuaian budaya, dan standar tata kelola.' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-unit-xl bg-on-secondary-fixed text-center">
            <div class="max-w-2xl mx-auto px-margin-mobile space-y-unit-lg">
                <h2 class="font-headline-h1-mobile text-headline-h1-mobile text-white">
                    {{ app()->getLocale() === 'en' ? 'Want to contribute or suggest a topic?' : 'Ingin berkontribusi atau menyarankan topik?' }}
                </h2>
                <p class="font-body-lg text-secondary-fixed">
                    {{ app()->getLocale() === 'en' ? 'We are building this library of insights to help organisations make better technology decisions.' : 'Kami membangun perpustakaan insight ini untuk membantu organisasi membuat keputusan teknologi yang lebih baik.' }}
                </p>
                <div class="pt-unit-md">
                    <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}"
                        class="inline-block bg-tertiary-fixed text-on-tertiary-fixed px-12 py-6 rounded-lg font-button text-xl uppercase tracking-widest shadow-xl hover:scale-105 transition-transform active:scale-100">
                        {{ app()->getLocale() === 'en' ? 'Get in Touch' : 'Hubungi Kami' }}
                    </a>
                </div>
            </div>
        </section>
    </main>
    @include('partials.footer')
    <script>
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header.fixed');
            if (window.scrollY > 50) {
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
