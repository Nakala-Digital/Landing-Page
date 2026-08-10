<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Portfolio | Nakala Digital</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface-tint": "#12AED0",
                        "outline-variant": "#12AED0",
                        "primary": "#12AED0",
                        "midnight-navy": "#031A44",
                        "background": "#F7FAFC",
                        "on-background": "#031A44",
                        "on-surface-variant": "#4A5568",
                        "surface-container": "#F0F4F8",
                        "card-bg": "#FFFFFF",
                        "card-border": "#C7E2E9"
                    },
                    borderRadius: {
                        "xl": "1rem",
                        "2xl": "1.25rem",
                        "full": "9999px"
                    },
                    fontFamily: {
                        sans: ["Poppins", "sans-serif"]
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .portfolio-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .portfolio-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px -10px rgba(18, 174, 208, 0.15);
        }
    </style>
</head>

<body class="bg-background text-on-background selection:bg-primary selection:text-white">

    <!-- TopNavBar -->
    @include('partials.navbar')

    <main class="pt-20">
        <!-- Hero Section -->
        <section class="relative bg-white overflow-hidden py-16 border-b border-card-border/40">
            <div class="px-6 md:px-20 max-w-7xl mx-auto flex flex-col items-start gap-4 relative z-10">
                <div
                    class="inline-flex items-center gap-2 bg-[#E6F7FA] text-primary px-4 py-1 rounded-full text-xs font-bold uppercase tracking-wider">
                    <span class="material-symbols-outlined text-sm">book</span>
                    <span>{{ app()->getLocale() === 'en' ? 'Capability Reference' : 'Referensi Kapabilitas' }}</span>
                </div>
                <h1 class="text-3xl md:text-5xl font-bold text-midnight-navy max-w-3xl leading-tight">
                    {!! app()->getLocale() === 'en'
                        ? 'Portfolio and case studies of <span class="text-primary">digital solutions.</span>'
                        : 'Portofolio dan studi kasus <span class="text-primary">solusi digital.</span>' !!}
                </h1>
                <p class="text-base md:text-lg text-on-surface-variant max-w-2xl">
                    {{ app()->getLocale() === 'en'
                        ? 'Nakala Digital bridging local delivery with regional capability. Explore how we\'ve empowered institutions and enterprises across Indonesia.'
                        : 'Nakala Digital menjembatani delivery lokal dengan kapabilitas regional. Jelajahi bagaimana kami telah memberdayakan institusi dan perusahaan di seluruh Indonesia.' }}
                </p>
            </div>
        </section>

        <!-- Filter & Portfolio Grid Section -->
        <section class="py-12 px-6 md:px-20 max-w-7xl mx-auto">

            <!-- Dropdown Filter Kategori -->
            <div class="flex justify-end mb-8 relative z-30">
                <div class="relative w-full sm:w-72">
                    <button id="dropdownToggle" type="button"
                        class="w-full bg-[#F3F6F8] border border-primary text-[#3A4D62] text-sm font-medium rounded-xl px-4 py-3 text-left flex justify-between items-center focus:outline-none shadow-sm">
                        <span id="selectedCategoryText">Semua Portofolio</span>
                        <span class="material-symbols-outlined text-primary text-xl transition-transform duration-200"
                            id="dropdownIcon">expand_more</span>
                    </button>

                    <!-- Menu List Filter -->
                    <div id="dropdownMenu"
                        class="hidden absolute right-0 mt-2 w-full bg-white border border-primary rounded-2xl shadow-xl py-2 z-50">
                        <button onclick="selectCategory('all', 'Semua Portofolio')"
                            class="w-full text-left px-5 py-2.5 text-sm font-medium text-[#3A4D62] hover:bg-slate-50 transition-colors">Semua
                            Portofolio</button>
                        <button onclick="selectCategory('ai-technology', 'AI Technology')"
                            class="w-full text-left px-5 py-2.5 text-sm font-medium text-[#3A4D62] hover:bg-slate-50 transition-colors">AI
                            Technology</button>
                        <button onclick="selectCategory('software', 'Software')"
                            class="w-full text-left px-5 py-2.5 text-sm font-medium text-[#3A4D62] hover:bg-slate-50 transition-colors">Software</button>
                        <button onclick="selectCategory('web-portal', 'Web/Portal')"
                            class="w-full text-left px-5 py-2.5 text-sm font-medium text-[#3A4D62] hover:bg-slate-50 transition-colors">Web/Portal</button>
                        <button onclick="selectCategory('operational-systems', 'Operational Systems')"
                            class="w-full text-left px-5 py-2.5 text-sm font-medium text-[#3A4D62] hover:bg-slate-50 transition-colors">Operational
                            Systems</button>
                        <button onclick="selectCategory('managed-support', 'Managed Support')"
                            class="w-full text-left px-5 py-2.5 text-sm font-medium text-[#3A4D62] hover:bg-slate-50 transition-colors">Managed
                            Support</button>
                    </div>
                </div>
            </div>

            <!-- Grid Portofolio (Maksimal 6 per halaman) -->
            <div id="portfolioGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 min-h-[500px]">

                <!-- Card 1: AI Hiring -->
                <div class="project-card portfolio-card bg-white border border-[#BCE3EC] rounded-2xl overflow-hidden flex flex-col justify-between"
                    data-category="ai-technology">
                    <div>
                        <div class="h-48 w-full overflow-hidden">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDDjYUTUCC8m9pWJV1Nh4-wfC7b_EnyzOndB687zN9tswDCzugWKa7flgq88mWrxhsuTqXISszLc4vHwwmIJDodtShYhudRKPZTlsxnZSUGE7R86SczAsnAtxagjJwT_-ljISfkY062sdTH4SzslCEMqZjvPJEfTvP6lir7632rS6vTPThWJtCw6Lqzpu5iOuEMPxZDLqkSE5-23lqGK_g3TZf4N4FoCijbLArqzIk7JBB5PCJBnbvvOCaYl_PkFj2uCyqa06v7khIs"
                                alt="AI Hiring" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <span class="text-[11px] font-bold text-primary tracking-widest uppercase block mb-2">AI
                                Technology</span>
                            <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=ai-hiring"
                                class="block group">
                                <h3
                                    class="text-xl font-bold text-midnight-navy mb-3 group-hover:text-primary transition-colors">
                                    AI Hiring / Gen AI Recruitment Platform</h3>
                            </a>
                            <p class="text-sm text-on-surface-variant leading-relaxed mb-6">
                                Sistem akuisisi talenta cerdas yang memanfaatkan model kecerdasan buatan (AI) khusus
                                untuk mengotomatisasi penyaringan dan pencocokan kandidat dengan presisi tinggi.
                            </p>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="bg-[#F0F4F8] border-l-4 border-primary px-4 py-2.5 rounded-r-md">
                            <span class="text-xs font-medium text-midnight-navy">80% Screening CV Lebih Cepat</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2: AI Coach -->
                <div class="project-card portfolio-card bg-white border border-[#BCE3EC] rounded-2xl overflow-hidden flex flex-col justify-between"
                    data-category="ai-technology">
                    <div>
                        <div class="h-48 w-full overflow-hidden">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDm2M0616JH6aYKMatKLlBn00XRFjy4muiu-AVHkmEZ4mquHBJyzTCnQv2hU8dpPeQy5zaZNyvF-cdieQKwEP-94c7rEDufUZ2V4UpOgBaSoSz-Uhzl77W8KZddcIgMsuRvxigMf-6eUAh2Bl7I9W_1pHTebLZIuPnf_TBOnz5I3AZJTd9IIw10cDh-RZD4Z5jgBiw2psnyRQHORyLQ63m97Fp3aIIFvzqCDQFwRcv7Mo3lPB-YWwYVDI2jZzLGSUMR6axa51Nr_cQa"
                                alt="AI Coach" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <span class="text-[11px] font-bold text-primary tracking-widest uppercase block mb-2">AI
                                Technology</span>
                            <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=ai-coach"
                                class="block group">
                                <h3
                                    class="text-xl font-bold text-midnight-navy mb-3 group-hover:text-primary transition-colors">
                                    Digital Coaching / AI Coach</h3>
                            </a>
                            <p class="text-sm text-on-surface-variant leading-relaxed mb-6">
                                Platform coaching berbasis AI yang memberi setiap karyawan learning journey personal,
                                tanpa menambah biaya sebanding jumlah pengguna.
                            </p>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="bg-[#F0F4F8] border-l-4 border-primary px-4 py-2.5 rounded-r-md">
                            <span class="text-xs font-medium text-midnight-navy">24/7 Akses Coaching on-Demand</span>
                        </div>
                    </div>
                </div>

                <!-- Card 3: ERP Platform -->
                <div class="project-card portfolio-card bg-white border border-[#BCE3EC] rounded-2xl overflow-hidden flex flex-col justify-between"
                    data-category="software">
                    <div>
                        <div class="h-48 w-full overflow-hidden">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZEGho0ZXWrYACNka0PrjLxslCBfj6LJo_mRI11PKgIGzp7ZdJx9giE7_K1sBpy2rF1Fw3Mq2nm5HF_OmUXqzEfuv3hKFoiEn7bVmO_zDOTQ2q-I8jkbO3sTTAB9fDGG9MX8IicOtokZ7m-9U9TCCti7Bv_U6Q93v0a212AnnU4Ge19za8WEH5UWl0L4yLu9SR16ctsrQmu9wRkJHNcYVMWQdduV5oBVHKKk3_amJXnevYkcLQfRkr-P0Wk3dPrLxMZB8J8nirVrlu"
                                alt="ERP Platform" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <span
                                class="text-[11px] font-bold text-primary tracking-widest uppercase block mb-2">Software</span>
                            <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=erp-bisa"
                                class="block group">
                                <h3
                                    class="text-xl font-bold text-midnight-navy mb-3 group-hover:text-primary transition-colors">
                                    ERP Platform BISA</h3>
                            </a>
                            <p class="text-sm text-on-surface-variant leading-relaxed mb-6">
                                Sistem ERP terintegrasi yang menyatukan alur kerja, data, dan pelaporan lintas
                                departemen dalam satu platform.
                            </p>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="bg-[#F0F4F8] border-l-4 border-primary px-4 py-2.5 rounded-r-md">
                            <span class="text-xs font-medium text-midnight-navy">5+ Modul Terintegrasi</span>
                        </div>
                    </div>
                </div>

                <!-- Card 4: LMS Berkemah -->
                <div class="project-card portfolio-card bg-white border border-[#BCE3EC] rounded-2xl overflow-hidden flex flex-col justify-between"
                    data-category="software">
                    <div>
                        <div class="h-48 w-full overflow-hidden">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDDjYUTUCC8m9pWJV1Nh4-wfC7b_EnyzOndB687zN9tswDCzugWKa7flgq88mWrxhsuTqXISszLc4vHwwmIJDodtShYhudRKPZTlsxnZSUGE7R86SczAsnAtxagjJwT_-ljISfkY062sdTH4SzslCEMqZjvPJEfTvP6lir7632rS6vTPThWJtCw6Lqzpu5iOuEMPxZDLqkSE5-23lqGK_g3TZf4N4FoCijbLArqzIk7JBB5PCJBnbvvOCaYl_PkFj2uCyqa06v7khIs"
                                alt="LMS Berkemah" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <span
                                class="text-[11px] font-bold text-primary tracking-widest uppercase block mb-2">Software</span>
                            <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=lms-berkemah"
                                class="block group">
                                <h3
                                    class="text-xl font-bold text-midnight-navy mb-3 group-hover:text-primary transition-colors">
                                    LMS Berkemah</h3>
                            </a>
                            <p class="text-sm text-on-surface-variant leading-relaxed mb-6">
                                Platform pembelajaran digital yang menggabungkan kursus online, program psikologi, dan
                                sistem membership dalam satu ekosistem belajar.
                            </p>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="bg-[#F0F4F8] border-l-4 border-primary px-4 py-2.5 rounded-r-md">
                            <span class="text-xs font-medium text-midnight-navy">1 Ekosistem Belajar Terpadu</span>
                        </div>
                    </div>
                </div>

                <!-- Card 5: PPDB Website -->
                <div class="project-card portfolio-card bg-white border border-[#BCE3EC] rounded-2xl overflow-hidden flex flex-col justify-between"
                    data-category="web-portal">
                    <div>
                        <div class="h-48 w-full overflow-hidden">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDm2M0616JH6aYKMatKLlBn00XRFjy4muiu-AVHkmEZ4mquHBJyzTCnQv2hU8dpPeQy5zaZNyvF-cdieQKwEP-94c7rEDufUZ2V4UpOgBaSoSz-Uhzl77W8KZddcIgMsuRvxigMf-6eUAh2Bl7I9W_1pHTebLZIuPnf_TBOnz5I3AZJTd9IIw10cDh-RZD4Z5jgBiw2psnyRQHORyLQ63m97Fp3aIIFvzqCDQFwRcv7Mo3lPB-YWwYVDI2jZzLGSUMR6axa51Nr_cQa"
                                alt="PPDB Portal" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <span
                                class="text-[11px] font-bold text-primary tracking-widest uppercase block mb-2">Web/Portal</span>
                            <a href="https://brown-tarsier-106199.hostingersite.com/" target="_blank"
                                rel="noopener noreferrer" class="block group">
                                <h3
                                    class="text-xl font-bold text-midnight-navy mb-3 group-hover:text-primary transition-colors">
                                    Website PPDB & School Portal</h3>
                            </a>
                            <p class="text-sm text-on-surface-variant leading-relaxed mb-6">
                                Mengembangkan platform penerimaan digital dengan skalabilitas tinggi yang dirancang
                                khusus untuk memproses pendaftaran bervolume besar.
                            </p>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="bg-[#F0F4F8] border-l-4 border-primary px-4 py-2.5 rounded-r-md">
                            <span class="text-xs font-medium text-midnight-navy">100% Proses Terdigitalisasi</span>
                        </div>
                    </div>
                </div>

                <!-- Card 6: HRMS Platform -->
                <div class="project-card portfolio-card bg-white border border-[#BCE3EC] rounded-2xl overflow-hidden flex flex-col justify-between"
                    data-category="operational-systems">
                    <div>
                        <div class="h-48 w-full overflow-hidden">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZEGho0ZXWrYACNka0PrjLxslCBfj6LJo_mRI11PKgIGzp7ZdJx9giE7_K1sBpy2rF1Fw3Mq2nm5HF_OmUXqzEfuv3hKFoiEn7bVmO_zDOTQ2q-I8jkbO3sTTAB9fDGG9MX8IicOtokZ7m-9U9TCCti7Bv_U6Q93v0a212AnnU4Ge19za8WEH5UWl0L4yLu9SR16ctsrQmu9wRkJHNcYVMWQdduV5oBVHKKk3_amJXnevYkcLQfRkr-P0Wk3dPrLxMZB8J8nirVrlu"
                                alt="HRMS Platform" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <span
                                class="text-[11px] font-bold text-primary tracking-widest uppercase block mb-2">Operational
                                Systems</span>
                            <a href="https://salmon-octopus-221724.hostingersite.com/login" target="_blank"
                                rel="noopener noreferrer" class="block group">
                                <h3
                                    class="text-xl font-bold text-midnight-navy mb-3 group-hover:text-primary transition-colors">
                                    HRMS / Mahya Platform</h3>
                            </a>
                            <p class="text-sm text-on-surface-variant leading-relaxed mb-6">
                                Sistem HR terpusat untuk absensi, cuti, dan payroll, menggantikan pencatatan manual di
                                spreadsheet dengan akses self-service karyawan.
                            </p>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="bg-[#F0F4F8] border-l-4 border-primary px-4 py-2.5 rounded-r-md">
                            <span class="text-xs font-medium text-midnight-navy">24/7 Akses Self-Service
                                Karyawan</span>
                        </div>
                    </div>
                </div>

                <!-- Card 7: HSE & Operations -->
                <div class="project-card portfolio-card bg-white border border-[#BCE3EC] rounded-2xl overflow-hidden flex flex-col justify-between"
                    data-category="operational-systems">
                    <div>
                        <div class="h-48 w-full overflow-hidden">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDDjYUTUCC8m9pWJV1Nh4-wfC7b_EnyzOndB687zN9tswDCzugWKa7flgq88mWrxhsuTqXISszLc4vHwwmIJDodtShYhudRKPZTlsxnZSUGE7R86SczAsnAtxagjJwT_-ljISfkY062sdTH4SzslCEMqZjvPJEfTvP6lir7632rS6vTPThWJtCw6Lqzpu5iOuEMPxZDLqkSE5-23lqGK_g3TZf4N4FoCijbLArqzIk7JBB5PCJBnbvvOCaYl_PkFj2uCyqa06v7khIs"
                                alt="HSE Platform" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <span
                                class="text-[11px] font-bold text-primary tracking-widest uppercase block mb-2">Operational
                                Systems</span>
                            <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=hse-platform"
                                class="block group">
                                <h3
                                    class="text-xl font-bold text-midnight-navy mb-3 group-hover:text-primary transition-colors">
                                    HSE & Operations Platform</h3>
                            </a>
                            <p class="text-sm text-on-surface-variant leading-relaxed mb-6">
                                Solusi digital Kesehatan, Keselamatan, dan Lingkungan (HSE) yang komprehensif,
                                dilengkapi pemantauan bahaya real-time.
                            </p>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="bg-[#F0F4F8] border-l-4 border-primary px-4 py-2.5 rounded-r-md">
                            <span class="text-xs font-medium text-midnight-navy">Real-Time Respon Insiden
                                Digital</span>
                        </div>
                    </div>
                </div>

                <!-- Card 8: D365 Support -->
                <div class="project-card portfolio-card bg-white border border-[#BCE3EC] rounded-2xl overflow-hidden flex flex-col justify-between"
                    data-category="managed-support">
                    <div>
                        <div class="h-48 w-full overflow-hidden">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDm2M0616JH6aYKMatKLlBn00XRFjy4muiu-AVHkmEZ4mquHBJyzTCnQv2hU8dpPeQy5zaZNyvF-cdieQKwEP-94c7rEDufUZ2V4UpOgBaSoSz-Uhzl77W8KZddcIgMsuRvxigMf-6eUAh2Bl7I9W_1pHTebLZIuPnf_TBOnz5I3AZJTd9IIw10cDh-RZD4Z5jgBiw2psnyRQHORyLQ63m97Fp3aIIFvzqCDQFwRcv7Mo3lPB-YWwYVDI2jZzLGSUMR6axa51Nr_cQa"
                                alt="D365 Support" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <span
                                class="text-[11px] font-bold text-primary tracking-widest uppercase block mb-2">Managed
                                Support</span>
                            <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=d365-support"
                                class="block group">
                                <h3
                                    class="text-xl font-bold text-midnight-navy mb-3 group-hover:text-primary transition-colors">
                                    D365 Finance Support & Managed Services</h3>
                            </a>
                            <p class="text-sm text-on-surface-variant leading-relaxed mb-6">
                                Merancang dan memigrasikan infrastruktur sistem lama yang kompleks ke dalam ekosistem
                                Microsoft Dynamics 365 terpadu.
                            </p>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="bg-[#F0F4F8] border-l-4 border-primary px-4 py-2.5 rounded-r-md">
                            <span class="text-xs font-medium text-midnight-navy">5 Negara Asia Tenggara</span>
                        </div>
                    </div>
                </div>

                <!-- Card 9: 360 Finance Support -->
                <div class="project-card portfolio-card bg-white border border-[#BCE3EC] rounded-2xl overflow-hidden flex flex-col justify-between"
                    data-category="managed-support">
                    <div>
                        <div class="h-48 w-full overflow-hidden">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZEGho0ZXWrYACNka0PrjLxslCBfj6LJo_mRI11PKgIGzp7ZdJx9giE7_K1sBpy2rF1Fw3Mq2nm5HF_OmUXqzEfuv3hKFoiEn7bVmO_zDOTQ2q-I8jkbO3sTTAB9fDGG9MX8IicOtokZ7m-9U9TCCti7Bv_U6Q93v0a212AnnU4Ge19za8WEH5UWl0L4yLu9SR16ctsrQmu9wRkJHNcYVMWQdduV5oBVHKKk3_amJXnevYkcLQfRkr-P0Wk3dPrLxMZB8J8nirVrlu"
                                alt="360 Finance Support" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <span
                                class="text-[11px] font-bold text-primary tracking-widest uppercase block mb-2">Managed
                                Support</span>
                            <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}?project=360-finance"
                                class="block group">
                                <h3
                                    class="text-xl font-bold text-midnight-navy mb-3 group-hover:text-primary transition-colors">
                                    360 Finance Support & Managed Services</h3>
                            </a>
                            <p class="text-sm text-on-surface-variant leading-relaxed mb-6">
                                Dasbor analitik omnichannel yang menyinkronkan penjualan e-commerce, sentimen sosial,
                                dan lalu lintas ritel.
                            </p>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="bg-[#F0F4F8] border-l-4 border-primary px-4 py-2.5 rounded-r-md">
                            <span class="text-xs font-medium text-midnight-navy">Operasional lebih efisien lewat modul
                                terstruktur</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Interaktif Pagination Controls -->
            <div id="paginationControls" class="flex items-center justify-center gap-4 mt-12">
                <button type="button" onclick="changePage(-1)" id="btnPrevPage"
                    class="w-10 h-10 rounded-xl border border-primary text-primary flex items-center justify-center hover:bg-primary/10 transition-colors disabled:opacity-40 disabled:cursor-not-allowed">
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>
                <div id="paginationDots" class="flex items-center gap-2">
                    <!-- Dynamic Dots generated by JS -->
                </div>
                <button type="button" onclick="changePage(1)" id="btnNextPage"
                    class="w-10 h-10 rounded-xl border border-primary text-primary flex items-center justify-center hover:bg-primary/10 transition-colors disabled:opacity-40 disabled:cursor-not-allowed">
                    <span class="material-symbols-outlined">chevron_right</span>
                </button>
            </div>

        </section>

        <!-- Partner Badge Section -->
        @include('partials.partner-badge')

        <!-- CTA Section -->
        <section class="py-16 px-6 md:px-20 max-w-7xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-midnight-navy mb-8">
                {!! app()->getLocale() === 'en'
                    ? 'Ready to build your <span class="text-primary">next success story?</span>'
                    : 'Siap Membangun Kisah <br/><span class="text-primary">Sukses Anda?</span>' !!}
            </h2>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}"
                    class="bg-primary text-white px-8 py-3.5 rounded-full font-semibold shadow-md hover:bg-primary/90 transition-all text-sm">
                    {{ app()->getLocale() === 'en' ? 'Free Consultation' : 'Mulai Konsultasi Gratis' }}
                </a>
                <a href="{{ route('services' . (app()->getLocale() === 'en' ? '.en' : '')) }}"
                    class="bg-white border border-slate-200 text-midnight-navy px-8 py-3.5 rounded-full font-semibold hover:bg-slate-50 transition-all text-sm">
                    {{ app()->getLocale() === 'en' ? 'View Services' : 'Lihat Layanan' }}
                </a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Interactive Script untuk Dropdown & Pagination 6 Grid -->
    <script>
        const itemsPerPage = 6;
        let currentPage = 1;
        let currentCategory = 'all';

        const dropdownToggle = document.getElementById('dropdownToggle');
        const dropdownMenu = document.getElementById('dropdownMenu');
        const dropdownIcon = document.getElementById('dropdownIcon');
        const selectedCategoryText = document.getElementById('selectedCategoryText');

        // Toggle dropdown
        dropdownToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            const isHidden = dropdownMenu.classList.contains('hidden');
            if (isHidden) {
                dropdownMenu.classList.remove('hidden');
                dropdownIcon.style.transform = 'rotate(180deg)';
            } else {
                dropdownMenu.classList.add('hidden');
                dropdownIcon.style.transform = 'rotate(0deg)';
            }
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', () => {
            dropdownMenu.classList.add('hidden');
            dropdownIcon.style.transform = 'rotate(0deg)';
        });

        function getFilteredCards() {
            const allCards = Array.from(document.querySelectorAll('.project-card'));
            if (currentCategory === 'all') {
                return allCards;
            }
            return allCards.filter(card => card.getAttribute('data-category') === currentCategory);
        }

        function renderPagination() {
            const filteredCards = getFilteredCards();
            const totalPages = Math.ceil(filteredCards.length / itemsPerPage);

            // Hide all cards first
            document.querySelectorAll('.project-card').forEach(card => card.style.display = 'none');

            // Show cards for current page
            const startIndex = (currentPage - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;
            filteredCards.slice(startIndex, endIndex).forEach(card => {
                card.style.display = 'flex';
            });

            // Update Pagination Dots
            const dotsContainer = document.getElementById('paginationDots');
            dotsContainer.innerHTML = '';

            if (totalPages <= 1) {
                document.getElementById('paginationControls').style.display = 'none';
                return;
            } else {
                document.getElementById('paginationControls').style.display = 'flex';
            }

            for (let i = 1; i <= totalPages; i++) {
                const dot = document.createElement('span');
                dot.className =
                    `w-2.5 h-2.5 rounded-full cursor-pointer transition-colors ${i === currentPage ? 'bg-primary' : 'bg-slate-300'}`;
                dot.onclick = () => {
                    currentPage = i;
                    renderPagination();
                };
                dotsContainer.appendChild(dot);
            }

            // Update prev/next button states
            document.getElementById('btnPrevPage').disabled = (currentPage === 1);
            document.getElementById('btnNextPage').disabled = (currentPage === totalPages);
        }

        function changePage(direction) {
            const filteredCards = getFilteredCards();
            const totalPages = Math.ceil(filteredCards.length / itemsPerPage);

            currentPage += direction;
            if (currentPage < 1) currentPage = 1;
            if (currentPage > totalPages) currentPage = totalPages;

            renderPagination();
        }

        function selectCategory(category, label) {
            currentCategory = category;
            currentPage = 1; // Reset ke halaman 1 setiap ganti kategori
            selectedCategoryText.innerText = label;
            dropdownMenu.classList.add('hidden');
            dropdownIcon.style.transform = 'rotate(0deg)';

            renderPagination();
        }

        // Initialize display on load
        document.addEventListener('DOMContentLoaded', () => {
            renderPagination();
        });
    </script>
</body>

</html>
