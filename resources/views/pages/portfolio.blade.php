<!DOCTYPE html>

<html lang="en">

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
            box-shadow: 0 10px 40px -10px rgba(18, 174, 208, 0.15);
            border-color: rgba(18, 174, 208, 0.5);
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
        <section class="relative min-h-[400px] md:min-h-[500px] overflow-hidden bg-[#eef8fb] border-b border-outline-variant flex items-center">
            
            <!-- Right Aligned Cropped Background Image -->
            <div class="absolute inset-y-0 right-0 w-full md:w-[65%] z-0">
                <!-- Object-right keeps the right side (graphic) visible and crops the left side (text) -->
                <img class="w-full h-full object-cover object-right" src="https://raw.githubusercontent.com/zhafrannajib31-cmyk/Assets/refs/heads/main/PORTOFOLIO%20ND.png" referrerpolicy="no-referrer" />
                <!-- Gradient to smoothly blend the image with the solid background color on the left -->
                <div class="absolute inset-0 bg-gradient-to-r from-[#eef8fb] via-[#eef8fb]/50 to-transparent hidden md:block"></div>
                <!-- Overlay for mobile readability -->
                <div class="absolute inset-0 bg-[#eef8fb]/80 md:hidden"></div>
            </div>

            <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto flex flex-col items-start gap-unit-md relative z-10 w-full py-unit-xl">
                <div class="max-w-3xl flex flex-col items-start gap-unit-md relative">
                    <div
                        class="inline-flex items-center gap-unit-sm bg-tertiary-fixed text-on-tertiary-fixed px-unit-md py-unit-xs rounded-full font-label-sm text-label-sm uppercase tracking-widest shadow-sm">
                        <span class="material-symbols-outlined text-xs">book</span>
                        <span>{{ app()->getLocale() === 'en' ? 'Capability Reference' : 'Referensi Kapabilitas' }}</span>
                    </div>
                    <h1
                        class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-slate-900 max-w-3xl leading-tight">
                        {!! app()->getLocale() === 'en'
                            ? 'Portfolio and case studies of <span class="text-primary">digital solutions</span>'
                            : 'Portofolio dan studi kasus <span class="text-primary">solusi digital</span>' !!}
                    </h1>
                    <p class="font-body-lg text-body-lg text-slate-700 max-w-2xl">
                        {{ app()->getLocale() === 'en' ? 'Nakala Digital bridging local delivery with regional capability. Explore how we\'ve empowered institutions and enterprises across Indonesia with technical rigor and high-impact software solutions.' : 'Nakala Digital menjembatani delivery lokal dengan kapabilitas regional. Jelajahi bagaimana kami telah memberdayakan institusi dan perusahaan di seluruh Indonesia dengan ketelitian teknis dan solusi perangkat lunak berdampak tinggi.' }}
                    </p>
                </div>
            </div>
        </section>
        <!-- Grid Portfolio Section -->
        <section class="py-unit-xl px-margin-mobile md:px-8 xl:px-margin-desktop max-w-container-max mx-auto">
            <!-- Category Filters -->
            <div class="mb-unit-lg flex justify-start md:justify-end">
                <div class="relative w-full md:w-64" data-dropdown="category-filter">
                    <button onclick="toggleDropdown(this)" aria-expanded="false" data-dropdown-trigger
                        class="w-full flex items-center justify-between bg-white border border-outline-variant text-on-surface-variant font-button text-sm px-4 py-3 rounded-[20px] focus:outline-none focus:ring-2 focus:ring-primary/50 cursor-pointer shadow-sm">
                        <span id="selected-category-label">{{ app()->getLocale() === 'en' ? 'All Portfolio' : 'Semua Portofolio' }}</span>
                        <span class="material-symbols-outlined text-base transition-transform" data-chevron>expand_more</span>
                    </button>
                    <div data-dropdown-menu role="menu"
                        class="absolute z-50 top-full left-0 right-0 mt-2 bg-white rounded-[20px] shadow-lg ring-1 ring-black/5 p-2 
                            max-h-0 overflow-hidden opacity-0 scale-95 pointer-events-none transition-all duration-200 ease-out">
                        <button class="category-option w-full flex items-center px-3 py-2.5 rounded-[20px] text-on-surface-variant hover:text-primary hover:bg-primary/5 transition-colors font-button text-sm" data-filter="all">
                            {{ app()->getLocale() === 'en' ? 'All Portfolio' : 'Semua Portofolio' }}
                        </button>
                        <button class="category-option w-full flex items-center px-3 py-2.5 rounded-[20px] text-on-surface-variant hover:text-primary hover:bg-primary/5 transition-colors font-button text-sm" data-filter="enterprise">
                            Enterprise
                        </button>
                        <button class="category-option w-full flex items-center px-3 py-2.5 rounded-[20px] text-on-surface-variant hover:text-primary hover:bg-primary/5 transition-colors font-button text-sm" data-filter="digital">
                            Digital
                        </button>
                        <button class="category-option w-full flex items-center px-3 py-2.5 rounded-[20px] text-on-surface-variant hover:text-primary hover:bg-primary/5 transition-colors font-button text-sm" data-filter="creative">
                            {{ app()->getLocale() === 'en' ? 'Creative' : 'Kreatif' }}
                        </button>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- 1. PPDB -->
                <div data-category="enterprise" class="portfolio-card group bg-surface-container-lowest border border-outline-variant rounded-[20px] overflow-hidden flex flex-col hover:shadow-lg transition-all duration-300">
                    <div class="w-full h-56 bg-surface-container relative overflow-hidden">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDDjYUTUCC8m9pWJV1Nh4-wfC7b_EnyzOndB687zN9tswDCzugWKa7flgq88mWrxhsuTqXISszLc4vHwwmIJDodtShYhudRKPZTlsxnZSUGE7R86SczAsnAtxagjJwT_-ljISfkY062sdTH4SzslCEMqZjvPJEfTvP6lir7632rS6vTPThWJtCw6Lqzpu5iOuEMPxZDLqkSE5-23lqGK_g3TZf4N4FoCijbLArqzIk7JBB5PCJBnbvvOCaYl_PkFj2uCyqa06v7khIs" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="PPDB" />
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <span class="font-label-sm text-primary uppercase tracking-widest mb-3">Enterprise</span>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-3">PPDB Online System</h3>
                        <p class="text-body-md text-on-surface-variant mb-8 flex-grow">
                            {{ app()->getLocale() === 'en' ? 'Developing a highly scalable digital admission platform engineered to process high-volume registrations with secure document verification and real-time transparency.' : 'Mengembangkan platform penerimaan digital dengan skalabilitas tinggi yang dirancang khusus untuk memproses pendaftaran bervolume besar, dilengkapi verifikasi dokumen yang aman dan transparansi real-time.' }}
                        </p>
                        <a href="https://brown-tarsier-106199.hostingersite.com/" target="_blank" rel="noopener noreferrer" class="text-label-sm font-bold uppercase text-on-background tracking-widest flex items-center gap-1 border-b-2 border-outline-variant w-fit pb-1 group-hover:border-primary group-hover:text-primary transition-all">
                            {{ app()->getLocale() === 'en' ? 'VIEW DETAIL' : 'LIHAT DETAIL' }} <span class="material-symbols-outlined text-sm">chevron_right</span>
                        </a>
                    </div>
                </div>

                <!-- 2. HRMS -->
                <div data-category="enterprise" class="portfolio-card group bg-surface-container-lowest border border-outline-variant rounded-[20px] overflow-hidden flex flex-col hover:shadow-lg transition-all duration-300">
                    <div class="w-full h-56 bg-surface-container relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="HRMS" />
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <span class="font-label-sm text-primary uppercase tracking-widest mb-3">Enterprise</span>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-3">Cloud HRMS</h3>
                        <p class="text-body-md text-on-surface-variant mb-8 flex-grow">
                            {{ app()->getLocale() === 'en' ? 'An enterprise-grade Human Resource Management System designed to centralize payroll, automate attendance tracking, and optimize workforce performance at scale.' : 'Sistem Manajemen Sumber Daya Manusia (HRMS) skala enterprise yang dirancang untuk mensentralisasi penggajian, melacak kehadiran secara otomatis, dan mengoptimalkan performa karyawan.' }}
                        </p>
                        <a href="https://salmon-octopus-221724.hostingersite.com/login" target="_blank" rel="noopener noreferrer" class="text-label-sm font-bold uppercase text-on-background tracking-widest flex items-center gap-1 border-b-2 border-outline-variant w-fit pb-1 group-hover:border-primary group-hover:text-primary transition-all">
                            {{ app()->getLocale() === 'en' ? 'VIEW DETAIL' : 'LIHAT DETAIL' }} <span class="material-symbols-outlined text-sm">chevron_right</span>
                        </a>
                    </div>
                </div>

                <!-- 3. HSE -->
                <div data-category="enterprise" class="portfolio-card group bg-surface-container-lowest border border-outline-variant rounded-[20px] overflow-hidden flex flex-col hover:shadow-lg transition-all duration-300">
                    <div class="w-full h-56 bg-surface-container relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="HSE" />
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <span class="font-label-sm text-primary uppercase tracking-widest mb-3">Enterprise</span>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-3">HSE Safety Tracker</h3>
                        <p class="text-body-md text-on-surface-variant mb-8 flex-grow">
                            {{ app()->getLocale() === 'en' ? 'A comprehensive occupational health and safety digital solution featuring real-time hazard monitoring and automated compliance reporting for industrial operations.' : 'Solusi digital Kesehatan, Keselamatan, dan Lingkungan (HSE) yang komprehensif, dilengkapi pemantauan bahaya real-time dan pelaporan kepatuhan otomatis untuk operasional industri.' }}
                        </p>
                        <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=hse-safety-tracker" class="text-label-sm font-bold uppercase text-on-background tracking-widest flex items-center gap-1 border-b-2 border-outline-variant w-fit pb-1 group-hover:border-primary group-hover:text-primary transition-all">
                            {{ app()->getLocale() === 'en' ? 'VIEW DETAIL' : 'LIHAT DETAIL' }} <span class="material-symbols-outlined text-sm">chevron_right</span>
                        </a>
                    </div>
                </div>

                <!-- 4. AI Hiring -->
                <div data-category="digital" class="portfolio-card group bg-surface-container-lowest border border-outline-variant rounded-[20px] overflow-hidden flex flex-col hover:shadow-lg transition-all duration-300">
                    <div class="w-full h-56 bg-surface-container relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="AI Hiring" />
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <span class="font-label-sm text-primary uppercase tracking-widest mb-3">Digital</span>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-3">AI Hiring Assistant</h3>
                        <p class="text-body-md text-on-surface-variant mb-8 flex-grow">
                            {{ app()->getLocale() === 'en' ? 'An intelligent talent acquisition system leveraging custom AI models to automate candidate screening, scoring, and matching with unparalleled precision.' : 'Sistem akuisisi talenta cerdas yang memanfaatkan model kecerdasan buatan (AI) khusus untuk mengotomatisasi penyaringan dan pencocokan kandidat dengan presisi tinggi.' }}
                        </p>
                        <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=ai-hiring-assistant" class="text-label-sm font-bold uppercase text-on-background tracking-widest flex items-center gap-1 border-b-2 border-outline-variant w-fit pb-1 group-hover:border-primary group-hover:text-primary transition-all">
                            {{ app()->getLocale() === 'en' ? 'VIEW DETAIL' : 'LIHAT DETAIL' }} <span class="material-symbols-outlined text-sm">chevron_right</span>
                        </a>
                    </div>
                </div>

                <!-- 5. AI Coach -->
                <div data-category="digital" class="portfolio-card group bg-surface-container-lowest border border-outline-variant rounded-[20px] overflow-hidden flex flex-col hover:shadow-lg transition-all duration-300">
                    <div class="w-full h-56 bg-surface-container relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="AI Coach" />
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <span class="font-label-sm text-primary uppercase tracking-widest mb-3">Digital</span>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-3">Personalized AI Coach</h3>
                        <p class="text-body-md text-on-surface-variant mb-8 flex-grow">
                            {{ app()->getLocale() === 'en' ? 'A dynamic corporate learning platform utilizing advanced Large Language Models (LLMs) to deliver adaptive reskilling pathways and interactive feedback.' : 'Platform pembelajaran korporat dinamis yang menggunakan Large Language Models (LLMs) tingkat lanjut untuk menghadirkan alur pelatihan adaptif dan umpan balik interaktif.' }}
                        </p>
                        <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=personalized-ai-coach" class="text-label-sm font-bold uppercase text-on-background tracking-widest flex items-center gap-1 border-b-2 border-outline-variant w-fit pb-1 group-hover:border-primary group-hover:text-primary transition-all">
                            {{ app()->getLocale() === 'en' ? 'VIEW DETAIL' : 'LIHAT DETAIL' }} <span class="material-symbols-outlined text-sm">chevron_right</span>
                        </a>
                    </div>
                </div>

                <!-- 6. Dynamics 365 -->
                <div data-category="creative" class="portfolio-card group bg-surface-container-lowest border border-outline-variant rounded-[20px] overflow-hidden flex flex-col hover:shadow-lg transition-all duration-300">
                    <div class="w-full h-56 bg-surface-container relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Dynamics 365" />
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <span class="font-label-sm text-primary uppercase tracking-widest mb-3">{{ app()->getLocale() === 'en' ? 'Creative' : 'Kreatif' }}</span>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-3">Dynamics 365 Support</h3>
                        <p class="text-body-md text-on-surface-variant mb-8 flex-grow">
                            {{ app()->getLocale() === 'en' ? 'Seamlessly architecting and migrating complex legacy infrastructures into a unified Microsoft Dynamics 365 ecosystem to drive enterprise transformation.' : 'Merancang dan memigrasikan infrastruktur sistem lama yang kompleks ke dalam ekosistem Microsoft Dynamics 365 terpadu untuk mendorong transformasi perusahaan secara menyeluruh.' }}
                        </p>
                        <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=dynamics-365-support" class="text-label-sm font-bold uppercase text-on-background tracking-widest flex items-center gap-1 border-b-2 border-outline-variant w-fit pb-1 group-hover:border-primary group-hover:text-primary transition-all">
                            {{ app()->getLocale() === 'en' ? 'VIEW DETAIL' : 'LIHAT DETAIL' }} <span class="material-symbols-outlined text-sm">chevron_right</span>
                        </a>
                    </div>
                </div>

                <!-- 7. 360 Customer -->
                <div data-category="creative" class="portfolio-card group bg-surface-container-lowest border border-outline-variant rounded-[20px] overflow-hidden flex flex-col hover:shadow-lg transition-all duration-300">
                    <div class="w-full h-56 bg-surface-container relative overflow-hidden">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZEGho0ZXWrYACNka0PrjLxslCBfj6LJo_mRI11PKgIGzp7ZdJx9giE7_K1sBpy2rF1Fw3Mq2nm5HF_OmUXqzEfuv3hKFoiEn7bVmO_zDOTQ2q-I8jkbO3sTTAB9fDGG9MX8IicOtokZ7m-9U9TCCti7Bv_U6Q93v0a212AnnU4Ge19za8WEH5UWl0L4yLu9SR16ctsrQmu9wRkJHNcYVMWQdduV5oBVHKKk3_amJXnevYkcLQfRkr-P0Wk3dPrLxMZB8J8nirVrlu" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="360 Customer" />
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <span class="font-label-sm text-primary uppercase tracking-widest mb-3">{{ app()->getLocale() === 'en' ? 'Creative' : 'Kreatif' }}</span>
                        <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-3">360&deg; Customer Engagement</h3>
                        <p class="text-body-md text-on-surface-variant mb-8 flex-grow">
                            {{ app()->getLocale() === 'en' ? 'An omnichannel analytics dashboard orchestrating e-commerce sales, social sentiment, and retail traffic to empower data-driven marketing strategies.' : 'Dasbor analitik omnichannel yang menyinkronkan penjualan e-commerce, sentimen sosial, dan lalu lintas ritel untuk memperkuat strategi pemasaran berbasis data yang akurat.' }}
                        </p>
                        <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=360-customer-engagement" class="text-label-sm font-bold uppercase text-on-background tracking-widest flex items-center gap-1 border-b-2 border-outline-variant w-fit pb-1 group-hover:border-primary group-hover:text-primary transition-all">
                            {{ app()->getLocale() === 'en' ? 'VIEW DETAIL' : 'LIHAT DETAIL' }} <span class="material-symbols-outlined text-sm">chevron_right</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Pagination UI -->
            <div id="portfolio-pagination" class="mt-12 flex items-center justify-center gap-4">
                <button id="prev-page" class="w-10 h-10 flex items-center justify-center rounded-full border border-outline-variant text-on-surface-variant hover:bg-primary/10 hover:text-primary transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                    <span class="material-symbols-outlined text-sm">arrow_back_ios_new</span>
                </button>
                <div id="page-numbers" class="flex gap-3"></div>
                <button id="next-page" class="w-10 h-10 flex items-center justify-center rounded-full border border-outline-variant text-on-surface-variant hover:bg-primary/10 hover:text-primary transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                    <span class="material-symbols-outlined text-sm">arrow_forward_ios</span>
                </button>
            </div>
        </section>
        <!-- Partner Badge Section -->
        @include('partials.partner-badge')
        <!-- CTA Section -->
        <section class="py-unit-xl px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto text-center">
            <h2
                class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-background mb-unit-lg">
                {!! app()->getLocale() === 'en'
                    ? 'Ready to build your <span class="text-primary">next success story?</span>'
                    : 'Siap membangun <span class="text-primary">kisah sukses Anda selanjutnya?</span>' !!}</h2>
            <div class="flex flex-col md:flex-row gap-unit-md justify-center">
                <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}"
                    class="bg-primary text-on-primary px-unit-xl py-unit-md rounded-[20px] font-button uppercase hover:scale-105 transition-transform inline-block">{{ app()->getLocale() === 'en' ? 'Start Free Consultation' : 'Mulai Konsultasi Gratis' }}</a>
                <a href="{{ route('services' . (app()->getLocale() === 'en' ? '.en' : '')) }}"
                    class="border-2 border-on-background text-on-background px-unit-xl py-unit-md rounded-[20px] font-button uppercase hover:bg-on-background hover:text-surface transition-colors inline-block">{{ app()->getLocale() === 'en' ? 'View Our Services' : 'Lihat Layanan' }}</a>
            </div>
        </section>
    </main>
    <!-- Footer -->
    @include('partials.footer')
    @include('partials.lenis-scroll')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const perPage = 6;
            const cards = document.querySelectorAll('.portfolio-card');
            let currentFilter = 'all';

            function filterAndPaginate() {
                const filtered = [];
                cards.forEach(c => {
                    if (currentFilter === 'all' || c.dataset.category === currentFilter) {
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
                    c.style.display = 'flex';
                    c.style.opacity = '0';
                    setTimeout(() => c.style.opacity = '1', 50);
                });

                const prevBtn = document.getElementById('prev-page');
                const nextBtn = document.getElementById('next-page');
                if(prevBtn) prevBtn.disabled = window.currentPage === 1;
                if(nextBtn) nextBtn.disabled = window.currentPage === totalPages;

                const numbers = document.getElementById('page-numbers');
                if (numbers) {
                    numbers.innerHTML = '';
                    for (let i = 1; i <= totalPages; i++) {
                        const span = document.createElement('span');
                        span.textContent = i;
                        span.className = 'font-body-md text-body-md cursor-pointer hover:underline select-none ' + 
                            (i === window.currentPage ? 'font-bold text-primary' : 'text-on-surface-variant');
                        span.addEventListener('click', function() {
                            window.currentPage = i;
                            filterAndPaginate();
                            const section = document.querySelector('.grid-cols-1').parentElement;
                            const y = section.getBoundingClientRect().top + window.scrollY - 100;
                            window.scrollTo({top: y, behavior: 'smooth'});
                        });
                        numbers.appendChild(span);
                    }
                }
                
                const pag = document.getElementById('portfolio-pagination');
                if (pag) {
                    pag.style.display = filtered.length > 0 ? 'flex' : 'none';
                }
            }

            const categoryOptions = document.querySelectorAll('.category-option');
            categoryOptions.forEach(option => {
                option.addEventListener('click', function() {
                    currentFilter = this.dataset.filter;
                    document.getElementById('selected-category-label').innerText = this.innerText.trim();
                    const dropdownContainer = this.closest('[data-dropdown]');
                    if (dropdownContainer && typeof closeDropdown === 'function') {
                        closeDropdown(dropdownContainer);
                    }
                    window.currentPage = 1;
                    filterAndPaginate();
                });
            });

            const btnPrev = document.getElementById('prev-page');
            const btnNext = document.getElementById('next-page');
            
            if(btnPrev) {
                btnPrev.addEventListener('click', function() {
                    if (window.currentPage > 1) {
                        window.currentPage--;
                        filterAndPaginate();
                        const section = document.querySelector('.grid-cols-1').parentElement;
                        const y = section.getBoundingClientRect().top + window.scrollY - 100;
                        window.scrollTo({top: y, behavior: 'smooth'});
                    }
                });
            }

            if(btnNext) {
                btnNext.addEventListener('click', function() {
                    const count = [...cards].filter(c => currentFilter === 'all' || c.dataset.category === currentFilter).length;
                    if (window.currentPage < Math.ceil(count / perPage)) {
                        window.currentPage++;
                        filterAndPaginate();
                        const section = document.querySelector('.grid-cols-1').parentElement;
                        const y = section.getBoundingClientRect().top + window.scrollY - 100;
                        window.scrollTo({top: y, behavior: 'smooth'});
                    }
                });
            }

            if (cards.length > 0) {
                filterAndPaginate();
            }
        });
    </script>

</body>

</html>






