<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ app()->getLocale() === 'en' ? 'Insights | Nakala Digital' : 'Insight | Nakala Digital' }}</title>
    @include('partials.seo', [
        'title' => app()->getLocale() === 'en' ? 'Insights | Nakala Digital' : 'Insight | Nakala Digital',
        'description' =>
            app()->getLocale() === 'en'
                ? 'Read the latest insights, perspectives, and thought leadership from Nakala Digital on software development, AI, QA governance, and digital transformation.'
                : 'Baca insight, perspektif, dan pemikiran terbaru dari Nakala Digital tentang pengembangan software, AI, tata kelola QA, dan transformasi digital.',
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
                        "display-lg-mobile": ["48px", {
                            lineHeight: "1.1",
                            fontWeight: "700"
                        }],
                        "body-md": ["16px", {
                            lineHeight: "1.6",
                            fontWeight: "400"
                        }],
                        button: ["15px", {
                            lineHeight: "1.0",
                            letterSpacing: "0.05em",
                            fontWeight: "600"
                        }],
                        "headline-h1-mobile": ["36px", {
                            lineHeight: "1.2",
                            fontWeight: "700"
                        }],
                        "headline-h2": ["40px", {
                            lineHeight: "1.3",
                            fontWeight: "600"
                        }],
                        "body-lg": ["18px", {
                            lineHeight: "1.6",
                            fontWeight: "400"
                        }],
                        "headline-h2-mobile": ["28px", {
                            lineHeight: "1.3",
                            fontWeight: "600"
                        }],
                        "headline-h1": ["56px", {
                            lineHeight: "1.2",
                            fontWeight: "700"
                        }],
                        "headline-h3": ["24px", {
                            lineHeight: "1.4",
                            fontWeight: "600"
                        }],
                        "display-lg": ["72px", {
                            lineHeight: "1.1",
                            letterSpacing: "-0.02em",
                            fontWeight: "700"
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

        <!-- Hero -->
        <section class="relative min-h-[300px] md:aspect-[2560/941] flex items-center overflow-hidden bg-on-background border-b border-outline-variant">
            <div class="absolute inset-0 z-0">
                <img class="w-full h-full object-cover" src="https://raw.githubusercontent.com/zhafrannajib31-cmyk/Assets/refs/heads/main/SOLUTION%20HIGHLIGHT%20ND.png" referrerpolicy="no-referrer" />
            </div>
            <div class="relative z-10 px-margin-mobile md:px-8 lg:px-margin-desktop max-w-container-max mx-auto w-full">
                <div class="max-w-3xl">
                    <div class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-4 py-1.5 rounded-full font-label-sm font-[600] text-[15px] uppercase tracking-widest mb-unit-md">
                        <span class="material-symbols-outlined text-[16px]">bolt</span>
                        {{ app()->getLocale() === 'en' ? 'Solution Highlight' : 'Solution Highlight' }}
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
            </div>
        </section>

        <!-- Featured Insight -->
        <section class="py-unit-xl px-margin-mobile md:px-8 lg:px-margin-desktop max-w-container-max mx-auto">
            <div class="mb-unit-lg">
                <span
                    class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">{{ app()->getLocale() === 'en' ? 'Featured' : 'Unggulan' }}</span>
            </div>
            <div
                class="group cursor-pointer bg-white border border-outline-variant rounded-[20px] overflow-hidden flex flex-col lg:flex-row">
                <div class="lg:w-1/2 aspect-video lg:aspect-auto overflow-hidden">
                    <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        data-alt="A sophisticated data visualization dashboard displayed on multiple high-resolution monitors in a sleek, dimly lit command center."
                        src="https://raw.githubusercontent.com/zhafrannajib31-cmyk/Assets/refs/heads/main/STRATEGI%20AI%20ND.png" />
                </div>
                <div
                    class="lg:w-1/2 p-unit-lg flex flex-col justify-between border-t-4 lg:border-t-0 lg:border-l-4 border-primary">
                    <div>
                        <div class="flex items-center gap-unit-sm mb-unit-sm">
                            <span
                                class="text-primary font-label-sm font-[600] text-[15px] uppercase">{{ app()->getLocale() === 'en' ? 'AI Strategy' : 'Strategi AI' }}</span>
                        </div>
                        <h2
                            class="font-headline-h2 text-headline-h2-mobile lg:text-headline-h2 mb-unit-sm group-hover:text-primary transition-colors">
                            {{ app()->getLocale() === 'en' ? 'Bridging the Gap: AI Implementation for Regional Enterprises' : 'Menjembatani Gap: Implementasi AI untuk Perusahaan Regional' }}
                        </h2>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-unit-lg">
                            {{ app()->getLocale() === 'en'
                                ? 'How local businesses can leverage tailored AI solutions to compete at a regional level without enterprise-scale investment.'
                                : 'Bagaimana bisnis lokal dapat memanfaatkan solusi AI yang disesuaikan untuk bersaing di tingkat regional tanpa investasi skala enterprise.' }}
                        </p>
                    </div>
                    <a class="inline-flex items-center gap-unit-xs text-primary font-button text-button group"
                        href="{{ route('insights.detail' . (app()->getLocale() === 'en' ? '.en' : ''), 'ppdb-al-azhar') }}">
                        {{ app()->getLocale() === 'en' ? 'Read Full Insight' : 'Baca Insight Lengkap' }}
                        <span
                            class="material-symbols-outlined text-sm transition-transform group-hover:translate-x-1">arrow_forward</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Draft Topics Grid -->
        <section class="py-unit-xl bg-surface-container-low">
            <div class="px-margin-mobile md:px-8 lg:px-margin-desktop max-w-container-max mx-auto">
                <div class="mb-unit-xl max-w-3xl">
                    <span
                        class="font-label-sm text-primary uppercase tracking-[0.3em] mb-unit-sm block">{{ app()->getLocale() === 'en' ? 'Solution Highlight' : 'Sorotan Solusi' }}</span>
                    <h2 class="font-headline-h2 text-headline-h2 text-on-surface">
                        {{ app()->getLocale() === 'en' ? 'Explore by Topic' : 'Jelajahi berdasarkan Topik' }}
                    </h2>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-5">
                    <div class="lg:col-span-9">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

                            <!-- Topic 1: PPDB Al-Azhar -->
                            <a href="{{ route('insights.detail' . (app()->getLocale() === 'en' ? '.en' : ''), 'ppdb-al-azhar') }}"
                                class="block" data-category="transformasi-digital">
                                <div
                                    class="bg-white border border-outline-variant rounded-[20px] overflow-hidden group cursor-pointer flex flex-col h-full">
                                    <div class="aspect-[2/1] overflow-hidden">
                                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                            data-alt="A professional, modern corporate leadership team collaborating in a bright, glass-walled skyscraper office."
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5rmJn_X_gHoAzSSEZnz6ESHa1IXeyHJORAaIHJDh0Qw&s=10" />
                                    </div>
                                    <div class="p-unit-md flex flex-col flex-1 gap-unit-sm">
                                        <span
                                            class="text-primary font-label-sm font-[600] text-[15px] uppercase">{{ app()->getLocale() === 'en' ? 'Digital Transformation' : 'Transformasi Digital' }}</span>
                                        <h3
                                            class="font-headline-h3 text-headline-h3 group-hover:text-primary transition-colors">
                                            {{ app()->getLocale() === 'en' ? 'How to Plan a School PPDB Portal' : 'Cara Merencanakan Portal PPDB Sekolah' }}
                                        </h3>
                                        <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3">
                                            {{ app()->getLocale() === 'en'
                                                ? 'Key considerations for educational institutions planning a digital admissions portal, from requirements gathering to deployment and handover.'
                                                : 'Pertimbangan utama bagi institusi pendidikan yang merencanakan portal penerimaan digital, dari pengumpulan kebutuhan hingga deployment dan serah terima.' }}
                                        </p>
                                    </div>
                                </div>
                            </a>

                            <!-- Topic 2: QA Governance -->
                            <a href="https://brown-tarsier-106199.hostingersite.com/" target="_blank"
                                rel="noopener noreferrer" class="block" data-category="tata-kelola-qa">
                                <div
                                    class="bg-white border border-outline-variant rounded-[20px] overflow-hidden group cursor-pointer flex flex-col h-full">
                                    <div class="aspect-[2/1] overflow-hidden">
                                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                            data-alt="Close-up of a high-end mechanical keyboard with glowing cyan backlighting, reflected on a polished desk surface."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD42NUAKFSOMS26jXpuJVh1JdCeoMsY6VlRi_rrdM3ac3mhzY3P6z5HsOK5J8me2172qL97zy7cfirniG15cfFYrQvf-XXvRmsud-wmufmobzUv09P4mVKdj5Omi4erlQpHlUmGEM6AmrEdeO3jSTBz3MGV2yPiAN2IlOrdU0AsHO6t7tCbxhHgp1WH4oL27xLiZ8bSM4em19RqG4mJR-UcUbGFfHxQDyNXfMQpHyeYVh5vgZ4CKxo7xJHgCsF1cQa8WQZJyrgo4aDE" />
                                    </div>
                                    <div class="p-unit-md flex flex-col flex-1 gap-unit-sm">
                                        <span
                                            class="text-primary font-label-sm font-[600] text-[15px] uppercase">{{ app()->getLocale() === 'en' ? 'QA Governance' : 'Tata Kelola QA' }}</span>
                                        <h3
                                            class="font-headline-h3 text-headline-h3 group-hover:text-primary transition-colors">
                                            {{ app()->getLocale() === 'en' ? 'Why QA Governance Matters in Software Projects' : 'Mengapa Tata Kelola QA Penting dalam Proyek Software' }}
                                        </h3>
                                        <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3">
                                            {{ app()->getLocale() === 'en'
                                                ? 'Why quality assurance should be treated as a delivery discipline, not an afterthought, and how structured QA governance reduces project risk.'
                                                : 'Mengapa quality assurance harus diperlakukan sebagai disiplin delivery, bukan tambahan, dan bagaimana tata kelola QA yang terstruktur mengurangi risiko proyek.' }}
                                        </p>
                                    </div>
                                </div>
                            </a>

                            <!-- Topic 3: Agile Delivery -->
                            <a href="https://brown-tarsier-106199.hostingersite.com/" target="_blank"
                                rel="noopener noreferrer" class="block" data-category="pendekatan-delivery">
                                <div
                                    class="bg-white border border-outline-variant rounded-[20px] overflow-hidden group cursor-pointer flex flex-col h-full">
                                    <div class="aspect-[2/1] overflow-hidden">
                                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                            data-alt="A clean, minimalist white-walled boardroom with a large central wooden table and vibrant lime-colored chairs."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDBHjqI828y2RenV7xxVuKk-UgJK6MXYJzvugZkYSpw0etLVxb622NLRTGwc_PmoQe6cHx-uzsmMVn8xS09hzuija3wEFSqrN0BnKB_7GCgAdrmholipris-ll-9R1_43rVo55P9oZ7q93cXsToQ6t1T5G7ulD9B4u3vxenKqLjgl3B55nT8JwuxyfUiAG7PafzeoNW2A8uvZMJ3ymWVCmk6apSAUjeYGcdhQ2Q3oUFooYTrHWKU5TSUKsUBgEjBeEhxf0P9IBINHGl" />
                                    </div>
                                    <div class="p-unit-md flex flex-col flex-1 gap-unit-sm">
                                        <span
                                            class="text-primary font-label-sm font-[600] text-[15px] uppercase">{{ app()->getLocale() === 'en' ? 'Delivery Approach' : 'Pendekatan Delivery' }}</span>
                                        <h3
                                            class="font-headline-h3 text-headline-h3 group-hover:text-primary transition-colors">
                                            {{ app()->getLocale() === 'en' ? 'Agile Delivery for Digital Solutions' : 'Agile Delivery untuk Solusi Digital' }}
                                        </h3>
                                        <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3">
                                            {{ app()->getLocale() === 'en'
                                                ? 'How Agile methodology enables faster time-to-market, better quality, and stronger alignment between business goals and technical execution.'
                                                : 'Bagaimana metodologi Agile memungkinkan time-to-market yang lebih cepat, kualitas yang lebih baik, dan keselarasan yang lebih kuat antara tujuan bisnis dan eksekusi teknis.' }}
                                        </p>
                                    </div>
                                </div>
                            </a>

                            <!-- Topic 4: AI Use Cases -->
                            <a href="https://brown-tarsier-106199.hostingersite.com/" target="_blank"
                                rel="noopener noreferrer" class="block" data-category="teknologi-ai">
                                <div
                                    class="bg-white border border-outline-variant rounded-[20px] overflow-hidden group cursor-pointer flex flex-col h-full">
                                    <div class="aspect-[2/1] overflow-hidden">
                                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                            data-alt="A clean, minimalist 3D rendering of a human brain silhouette constructed from glowing cyan fiber optic lines."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCnZsssdKLtkzueklGWdgMkw8L8KeHqUg-gs2up5aCh-gt1jvoqkvF_vHFYNm52kSdE_ZevSbKBpTmZKvChiwlxSfgxWcbWQBc4r0URNxka1X4pemelt9wLZFLCKVNEFVaz-F0z8atrHX7BPMv92OesIifP4KZHxihIM6Vh6WP3JcJh-KzYyUVDmN80h2wl1p3v4uzEVUxRorP99-UY1sMMUpI5eYF_HHAB870yoXwOR-lQcSJrCtTI5Z48V_xhcjUt1IewyfDEs-Tq" />
                                    </div>
                                    <div class="p-unit-md flex flex-col flex-1 gap-unit-sm">
                                        <span
                                            class="text-primary font-label-sm font-[600] text-[15px] uppercase">{{ app()->getLocale() === 'en' ? 'AI Technology' : 'Teknologi AI' }}</span>
                                        <h3
                                            class="font-headline-h3 text-headline-h3 group-hover:text-primary transition-colors">
                                            {{ app()->getLocale() === 'en' ? 'AI Use Cases for Business Operations' : 'Use Case AI untuk Operasional Bisnis' }}
                                        </h3>
                                        <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3">
                                            {{ app()->getLocale() === 'en'
                                                ? 'Practical applications of AI across finance, HR, customer service, and operations, from document intelligence to predictive analytics.'
                                                : 'Aplikasi praktis AI di bidang keuangan, SDM, layanan pelanggan, dan operasional, dari document intelligence hingga analitik prediktif.' }}
                                        </p>
                                    </div>
                                </div>
                            </a>

                            <!-- Topic 5: Choosing Partner -->
                            <a href="https://brown-tarsier-106199.hostingersite.com/" target="_blank"
                                rel="noopener noreferrer" class="block" data-category="kemitraan">
                                <div
                                    class="bg-white border border-outline-variant rounded-[20px] overflow-hidden group cursor-pointer flex flex-col h-full">
                                    <div class="aspect-[2/1] overflow-hidden">
                                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                            data-alt="A professional, modern corporate leadership team collaborating in a bright, glass-walled skyscraper office."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuARjNPNzkbtHKbzPJa5qHoWQBSs9eF75JXSSBiByw6ao2Np8mzZQTMNZRPe0To39pJI5eHYiWUYDcSVk5dDBOsVqo9co64wiCoq31MqgALZqldSWB_gXG2cvmMZMciEjeRuDhe9-P2E24Schimpsl_ujy1HLub-3wz8RUkB-5VVFU3NwTWBWd83OISeJweefFAsmceqnTC8Vq7JOigcRes6ICW7NG-GgiPD2U3OytBhYDdDVLA15yQ0NWOi4xoRmbZBzm57X2iv2QoO" />
                                    </div>
                                    <div class="p-unit-md flex flex-col flex-1 gap-unit-sm">
                                        <span
                                            class="text-primary font-label-sm font-[600] text-[15px] uppercase">{{ app()->getLocale() === 'en' ? 'Partnership' : 'Kemitraan' }}</span>
                                        <h3
                                            class="font-headline-h3 text-headline-h3 group-hover:text-primary transition-colors">
                                            {{ app()->getLocale() === 'en' ? 'Choosing the Right Technology Partner' : 'Memilih Mitra Teknologi yang Tepat' }}
                                        </h3>
                                        <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3">
                                            {{ app()->getLocale() === 'en'
                                                ? 'A practical guide for organisations evaluating technology partners, covering capability assessment, cultural fit, and governance standards.'
                                                : 'Panduan praktis bagi organisasi yang mengevaluasi mitra teknologi, mencakup penilaian kapabilitas, kesesuaian budaya, dan standar tata kelola.' }}
                                        </p>
                                    </div>
                                </div>
                            </a>

                            <!-- Topic 6: Mahya Platform -->
                            <a href="https://salmon-octopus-221724.hostingersite.com/login" target="_blank"
                                rel="noopener noreferrer" class="block" data-category="transformasi-digital">
                                <div
                                    class="bg-white border border-outline-variant rounded-[20px] overflow-hidden group cursor-pointer flex flex-col h-full">
                                    <div class="aspect-[2/1] overflow-hidden">
                                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                            data-alt="A professional, modern corporate leadership team collaborating in a bright, glass-walled skyscraper office."
                                            src="https://berkemah.com/assets/ok.png" />
                                    </div>
                                    <div class="p-unit-md flex flex-col flex-1 gap-unit-sm">
                                        <span
                                            class="text-primary font-label-sm font-[600] text-[15px] uppercase">{{ app()->getLocale() === 'en' ? 'Digital Transformation' : 'Transformasi Digital' }}</span>
                                        <h3
                                            class="font-headline-h3 text-headline-h3 group-hover:text-primary transition-colors">
                                            {{ app()->getLocale() === 'en' ? 'Optimize HR Operations with Mahya Platform' : 'Mengoptimalkan Operasional HR dengan Mahya Platform' }}
                                        </h3>
                                        <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3">
                                            {{ app()->getLocale() === 'en'
                                                ? 'How digitizing attendance, payroll, and leave management can reduce the burden on HR admin and improve the employee experience through self-service.'
                                                : 'Bagaimana digitalisasi absensi, payroll, dan manajemen cuti dapat mengurangi beban admin HR dan meningkatkan pengalaman karyawan melalui swalayan.' }}
                                        </p>
                                    </div>
                                </div>
                            </a>

                            <!-- Topic 7: HSE & Operations Platform -->
                            <a href="https://share.google/1GabxEEzxl7HExZBK" target="_blank"
                                rel="noopener noreferrer" class="block" data-category="transformasi-digital">
                                <div
                                    class="bg-white border border-outline-variant rounded-[20px] overflow-hidden group cursor-pointer flex flex-col h-full">
                                    <div class="aspect-[2/1] overflow-hidden">
                                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                            data-alt="A professional, modern corporate leadership team collaborating in a bright, glass-walled skyscraper office."
                                            src="https://digiprimatera.co.id/uploads/posts/8e260c71175e9b3030ada7ba5d68ee24.webp" />
                                    </div>
                                    <div class="p-unit-md flex flex-col flex-1 gap-unit-sm">
                                        <span
                                            class="text-primary font-label-sm font-[600] text-[15px] uppercase">{{ app()->getLocale() === 'en' ? 'Digital Transformation' : 'Transformasi Digital' }}</span>
                                        <h3
                                            class="font-headline-h3 text-headline-h3 group-hover:text-primary transition-colors">
                                            {{ app()->getLocale() === 'en' ? 'HSE & Operations Platform' : 'Platform HSE & Operasi' }}
                                        </h3>
                                        <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3">
                                            {{ app()->getLocale() === 'en'
                                                ? 'Transition steps from paper-based HSE reporting to a digital platform for better compliance visibility and faster incident response.'
                                                : 'Langkah-langkah transisi dari pelaporan HSE berbasis kertas ke platform digital untuk visibilitas kepatuhan yang lebih baik dan respon insiden yang lebih cepat.' }}
                                        </p>
                                    </div>
                                </div>
                            </a>

                            <!-- Topic 8: WargaKas -->
                            <a href="https://brown-tarsier-106199.hostingersite.com/" target="_blank"
                                rel="noopener noreferrer" class="block" data-category="transformasi-digital">
                                <div
                                    class="bg-white border border-outline-variant rounded-[20px] overflow-hidden group cursor-pointer flex flex-col h-full">
                                    <div class="aspect-[2/1] overflow-hidden">
                                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                            data-alt="A professional, modern corporate leadership team collaborating in a bright, glass-walled skyscraper office."
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRv5Wn9wdtn9RXxZWVAsTrjA6lk3Q37jGuDa8CtQRVAXw&s=10" />
                                    </div>
                                    <div class="p-unit-md flex flex-col flex-1 gap-unit-sm">
                                        <span
                                            class="text-primary font-label-sm font-[600] text-[15px] uppercase">{{ app()->getLocale() === 'en' ? 'Digital Transformation' : 'Transformasi Digital' }}</span>
                                        <h3
                                            class="font-headline-h3 text-headline-h3 group-hover:text-primary transition-colors">
                                            {{ app()->getLocale() === 'en' ? 'Digital Solutions for Housing Cash Management' : 'Solusi Digital untuk Manajemen Kas Perumahan' }}
                                        </h3>
                                        <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3">
                                            {{ app()->getLocale() === 'en'
                                                ? 'Implementation of a digital platform to manage resident contributions, payment tracking, and transparent financial reports for complex administrators.'
                                                : 'Implementasi platform digital untuk mengelola iuran warga, pelacakan pembayaran, dan laporan keuangan yang transparan bagi pengurus komplek.' }}
                                        </p>
                                    </div>
                                </div>
                            </a>

                            <!-- Topic 9: Bisa ERP Platform -->
                            <a href="https://brown-tarsier-106199.hostingersite.com/" target="_blank"
                                rel="noopener noreferrer" class="block" data-category="transformasi-digital">
                                <div
                                    class="bg-white border border-outline-variant rounded-[20px] overflow-hidden group cursor-pointer flex flex-col h-full">
                                    <div class="aspect-[2/1] overflow-hidden">
                                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                            data-alt="A professional, modern corporate leadership team collaborating in a bright, glass-walled skyscraper office."
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwk8NxSCT-9kmE64mKV5PDRHCPxkWOMi9NZil3r19fE_WzhZ5stU7wvUY&s=10" />
                                    </div>
                                    <div class="p-unit-md flex flex-col flex-1 gap-unit-sm">
                                        <span
                                            class="text-primary font-label-sm font-[600] text-[15px] uppercase">{{ app()->getLocale() === 'en' ? 'Digital Transformation' : 'Transformasi Digital' }}</span>
                                        <h3
                                            class="font-headline-h3 text-headline-h3 group-hover:text-primary transition-colors">
                                            {{ app()->getLocale() === 'en' ? 'Integrating Business Workflow with ERP is Possible' : 'Mengintegrasikan Workflow Bisnis dengan ERP BISA' }}
                                        </h3>
                                        <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3">
                                            {{ app()->getLocale() === 'en'
                                                ? 'Building a centralized system for approval automation, asset management, and real-time reporting to accelerate corporate decision-making.'
                                                : 'Membangun sistem terpusat untuk otomasi persetujuan, manajemen aset, dan laporan real-time guna mempercepat pengambilan keputusan perusahaan.' }}
                                        </p>
                                    </div>
                                </div>
                            </a>

                            <!-- Topic 10: LMS Berkemah -->
                            <a href="https://brown-tarsier-106199.hostingersite.com/" target="_blank"
                                rel="noopener noreferrer" class="block" data-category="transformasi-digital">
                                <div
                                    class="bg-white border border-outline-variant rounded-[20px] overflow-hidden group cursor-pointer flex flex-col h-full">
                                    <div class="aspect-[2/1] overflow-hidden">
                                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                            data-alt="A professional, modern corporate leadership team collaborating in a bright, glass-walled skyscraper office."
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOnAmoiBbKUg2-hwA_Wp_2h0hr1MbH-ofdWQFXOT8HHg&s=10" />
                                    </div>
                                    <div class="p-unit-md flex flex-col flex-1 gap-unit-sm">
                                        <span
                                            class="text-primary font-label-sm font-[600] text-[15px] uppercase">{{ app()->getLocale() === 'en' ? 'Digital Transformation' : 'Transformasi Digital' }}</span>
                                        <h3
                                            class="font-headline-h3 text-headline-h3 group-hover:text-primary transition-colors">
                                            {{ app()->getLocale() === 'en' ? 'Building a Scalable Digital Learning Ecosystem' : 'Membangun Ekosistem Pembelajaran Digital yang Skalabel' }}
                                        </h3>
                                        <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3">
                                            {{ app()->getLocale() === 'en'
                                                ? 'How LMS platforms combine interactive courses, progress tracking, and certification to improve accessibility and the user learning experience.'
                                                : 'Bagaimana platform LMS menggabungkan kursus interaktif, tracking progres, dan sertifikasi untuk meningkatkan aksesibilitas serta pengalaman belajar pengguna.' }}
                                        </p>
                                    </div>
                                </div>
                            </a>

                            <!-- Topic 11: AI Hiring & Recruitment -->
                            <a href="https://brown-tarsier-106199.hostingersite.com/" target="_blank"
                                rel="noopener noreferrer" class="block" data-category="teknologi-ai">
                                <div
                                    class="bg-white border border-outline-variant rounded-[20px] overflow-hidden group cursor-pointer flex flex-col h-full">
                                    <div class="aspect-[2/1] overflow-hidden">
                                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                            data-alt="A professional, modern corporate leadership team collaborating in a bright, glass-walled skyscraper office."
                                            src="https://img.magnific.com/vektor-gratis/latar-belakang-microchip-teknologi-ai-vektor-konsep-transformasi-digital_53876-112222.jpg?semt=ais_hybrid&w=740&q=80" />
                                    </div>
                                    <div class="p-unit-md flex flex-col flex-1 gap-unit-sm">
                                        <span
                                            class="text-primary font-label-sm font-[600] text-[15px] uppercase">{{ app()->getLocale() === 'en' ? 'AI Technology' : 'Teknologi AI' }}</span>
                                        <h3
                                            class="font-headline-h3 text-headline-h3 group-hover:text-primary transition-colors">
                                            {{ app()->getLocale() === 'en' ? 'Accelerating Recruitment with AI Automation' : 'Mempercepat Rekrutmen dengan Otomasi AI' }}
                                        </h3>
                                        <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3">
                                            {{ app()->getLocale() === 'en'
                                                ? 'Using AI technology for CV parsing and candidate scoring, it helps recruitment teams work up to 80% faster with consistent evaluation.'
                                                : 'Menggunakan teknologi AI untuk parsing CV dan scoring kandidat, membantu tim rekrutmen bekerja hingga 80% lebih cepat dengan evaluasi yang konsisten.' }}
                                        </p>
                                    </div>
                                </div>
                            </a>

                            <!-- Topic 12: Digital Coaching AI -->
                            <a href="https://brown-tarsier-106199.hostingersite.com/" target="_blank"
                                rel="noopener noreferrer" class="block" data-category="teknologi-ai">
                                <div
                                    class="bg-white border border-outline-variant rounded-[20px] overflow-hidden group cursor-pointer flex flex-col h-full">
                                    <div class="aspect-[2/1] overflow-hidden">
                                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                            data-alt="A professional, modern corporate leadership team collaborating in a bright, glass-walled skyscraper office."
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIOE9f5Wn8htzv2Z9FCPoecM7KluFEJf_jx07CYlfWQw&s=10" />
                                    </div>
                                    <div class="p-unit-md flex flex-col flex-1 gap-unit-sm">
                                        <span
                                            class="text-primary font-label-sm font-[600] text-[15px] uppercase">{{ app()->getLocale() === 'en' ? 'AI Technology' : 'Teknologi AI' }}</span>
                                        <h3
                                            class="font-headline-h3 text-headline-h3 group-hover:text-primary transition-colors">
                                            {{ app()->getLocale() === 'en' ? 'AI Based Personal Training for Your Team' : 'Pelatihan Pribadi Berbasis AI untuk Tim Anda' }}
                                        </h3>
                                        <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3">
                                            {{ app()->getLocale() === 'en'
                                                ? 'Using AI technology for CV parsing and candidate scoring, it helps recruitment teams work up to 80% faster with consistent evaluation.'
                                                : 'Menggunakan teknologi AI untuk parsing CV dan scoring kandidat, membantu tim rekrutmen bekerja hingga 80% lebih cepat dengan evaluasi yang konsisten.' }}
                                        </p>
                                    </div>
                                </div>
                            </a>

                            {{-- Topic 13: D365 Finance --}}
                            <a href="{{ route('insights.detail' . (app()->getLocale() === 'en' ? '.en' : ''), 'd365-finance-automating-bank-reconciliation') }}"
                                class="block" data-category="teknologi-ai">
                                <div
                                    class="bg-white border border-outline-variant rounded-[20px] overflow-hidden group cursor-pointer flex flex-col h-full">
                                    <div class="aspect-[2/1] overflow-hidden">
                                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                            data-alt="A professional, modern corporate leadership team collaborating in a bright, glass-walled skyscraper office."
                                            src="https://romulus.digital/wp-content/uploads/al_opt_content/IMAGE/romulus.digital/wp-content/uploads/2025/06/robotic-process-automation-in-finance-3-real-world-use-cases-nividous-1024x446-1.jpg.bv_resized_desktop.jpg.bv.webp?bv_host=romulus.digital" />
                                    </div>
                                    <div class="p-unit-md flex flex-col flex-1 gap-unit-sm">
                                        <span
                                            class="text-primary font-label-sm font-[600] text-[15px] uppercase">{{ app()->getLocale() === 'en' ? 'D365 Finance' : 'Keuangan D365' }}</span>
                                        <h3
                                            class="font-headline-h3 text-headline-h3 group-hover:text-primary transition-colors">
                                            {{ app()->getLocale() === 'en' ? 'D365 Finance: Automating Bank Reconciliation for Modern Finance' : 'D365 Finance: Mengotomatiskan Rekonsiliasi Bank untuk Keuangan Modern' }}
                                        </h3>
                                        <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3">
                                            {{ app()->getLocale() === 'en'
                                                ? 'In today’s dynamic financial landscape, the integration of bank reconciliation, automation, and AI-driven tools presents a significant opportunity for finance teams to enhance their operations. Tasks that previously demanded extensive'
                                                : 'Dalam lanskap keuangan yang dinamis saat ini, integrasi rekonsiliasi bank, otomatisasi, dan alat berbasis AI menghadirkan peluang signifikan bagi tim keuangan untuk meningkatkan operasional mereka. Tugas-tugas yang sebelumnya membutuhkan banyak waktu kini dapat dilakukan dengan lebih efisien.' }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        {{-- Pagination --}}
                        <div class="flex items-center justify-center gap-4 mt-unit-lg" id="pagination">
                            <span id="prev-page"
                                class="font-body-md text-body-md text-secondary cursor-pointer hover:underline disabled:text-on-surface-variant disabled:cursor-not-allowed select-none">{{ app()->getLocale() === 'en' ? 'Previous' : 'Sebelumnya' }}</span>
                            <span id="page-numbers" class="flex items-center gap-2"></span>
                            <span id="next-page"
                                class="font-body-md text-body-md text-secondary cursor-pointer hover:underline disabled:text-on-surface-variant disabled:cursor-not-allowed select-none">{{ app()->getLocale() === 'en' ? 'Next' : 'Selanjutnya' }}</span>
                        </div>
                    </div>
                    <div class="lg:col-span-3">

                        {{-- Category Card --}}
                        <div class="border border-outline-variant rounded-[20px] p-unit-md">
                            <h3 class="font-headline-h3 text-headline-h3 mb-unit-md">
                                {{ app()->getLocale() === 'en' ? 'Categories' : 'Kategori' }}
                            </h3>
                            <ul class="space-y-unit-sm">
                                <li data-filter="all"
                                    class="font-body-md text-body-md text-primary cursor-pointer hover:underline category-filter font-bold">
                                    {{ app()->getLocale() === 'en' ? 'All' : 'Semua' }}</li>
                                <li data-filter="transformasi-digital"
                                    class="font-body-md text-body-md text-primary cursor-pointer hover:underline category-filter">
                                    {{ app()->getLocale() === 'en' ? 'Digital Transformation' : 'Transformasi Digital' }}
                                </li>
                                <li data-filter="tata-kelola-qa"
                                    class="font-body-md text-body-md text-primary cursor-pointer hover:underline category-filter">
                                    {{ app()->getLocale() === 'en' ? 'QA Governance' : 'Tata Kelola QA' }}</li>
                                <li data-filter="teknologi-ai"
                                    class="font-body-md text-body-md text-primary cursor-pointer hover:underline category-filter">
                                    {{ app()->getLocale() === 'en' ? 'AI Technology' : 'Teknologi AI' }}</li>
                                <li data-filter="pendekatan-delivery"
                                    class="font-body-md text-body-md text-primary cursor-pointer hover:underline category-filter">
                                    {{ app()->getLocale() === 'en' ? 'Delivery Approach' : 'Pendekatan Delivery' }}
                                </li>
                                <li data-filter="kemitraan"
                                    class="font-body-md text-body-md text-primary cursor-pointer hover:underline category-filter">
                                    {{ app()->getLocale() === 'en' ? 'Partnership' : 'Kemitraan' }}
                                </li>
                            </ul>
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
                        class="inline-block bg-tertiary-fixed text-on-tertiary-fixed px-12 py-6 rounded-[20px] font-button text-xl uppercase tracking-widest shadow-xl hover:scale-105 transition-transform active:scale-100">
                        {{ app()->getLocale() === 'en' ? 'Free Consultation' : 'Konsultasi Gratis' }}
                    </a>
                </div>
            </div>
        </section>
    </main>

    @include('partials.partner-badge')
    @include('partials.footer')
    @include('partials.lenis-scroll')
    <script>
        const perPage = 12;
        const cards = document.querySelectorAll('[data-category]');

        // Pagination & filter
        function filterAndPaginate() {
            const active = document.querySelector('.category-filter.font-bold');
            const filter = active ? active.dataset.filter : 'all';

            const filtered = [];
            cards.forEach(c => {
                if (filter === 'all' || c.dataset.category === filter) {
                    filtered.push(c);
                }
            });

            const totalPages = Math.ceil(filtered.length / perPage) || 1;
            if (window.currentPage === undefined) window.currentPage = 1;
            if (window.currentPage > totalPages) window.currentPage = totalPages;

            cards.forEach(c => {
                c.style.display = 'none';
            });
            const start = (window.currentPage - 1) * perPage;
            filtered.slice(start, start + perPage).forEach(c => {
                c.style.display = 'block';
            });

            document.getElementById('prev-page').classList.toggle('disabled', window.currentPage === 1);
            document.getElementById('next-page').classList.toggle('disabled', window.currentPage === totalPages);

            const numbers = document.getElementById('page-numbers');
            numbers.innerHTML = '';
            for (let i = 1; i <= totalPages; i++) {
                const span = document.createElement('span');
                span.textContent = i;
                span.className = 'font-body-md text-body-md cursor-pointer hover:underline select-none ' + (i === window
                    .currentPage ? 'font-bold text-primary' : 'text-on-surface-variant');
                span.addEventListener('click', function() {
                    window.currentPage = i;
                    filterAndPaginate();
                });
                numbers.appendChild(span);
            }
        }

        document.querySelectorAll('.category-filter').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.category-filter').forEach(el => el.classList.remove(
                    'font-bold'));
                this.classList.add('font-bold');
                window.currentPage = 1;
                filterAndPaginate();
            });
        });

        document.getElementById('prev-page').addEventListener('click', function() {
            if (window.currentPage > 1) {
                window.currentPage--;
                filterAndPaginate();
            }
        });

        document.getElementById('next-page').addEventListener('click', function() {
            const active = document.querySelector('.category-filter.font-bold');
            const filter = active ? active.dataset.filter : 'all';
            const count = [...cards].filter(c => filter === 'all' || c.dataset.category === filter).length;
            if (window.currentPage < Math.ceil(count / perPage)) {
                window.currentPage++;
                filterAndPaginate();
            }
        });

        filterAndPaginate();
    </script>
</body>

</html>
