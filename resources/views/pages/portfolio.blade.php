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
            <div id="portfolio-filter" class="mb-unit-lg flex justify-start md:justify-end">
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

            <div id="portfolio-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach (config('portfolio.items') as $item)
                    <div data-category="{{ $item['category'] }}" class="portfolio-card group bg-surface-container-lowest border border-primary rounded-[20px] overflow-hidden flex flex-col hover:shadow-lg transition-all duration-300">
                        <div class="w-full h-[249px] bg-surface-container relative overflow-hidden">
                            <img src="{{ $item['image'] }}" data-alt="{{ $item['alt'][app()->getLocale()] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="{{ $item['alt'][app()->getLocale()] }}" loading="lazy" />
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <span class="font-label-sm text-primary uppercase tracking-widest mb-3">{{ $item['category_label'][app()->getLocale()] }}</span>
                            <h3 class="font-headline-h3 text-headline-h3 text-on-background mb-3">{{ $item['title'][app()->getLocale()] }}</h3>
                            <p class="text-body-md text-on-surface-variant mb-8 flex-grow">{{ $item['summary'][app()->getLocale()] }}</p>
                            <div class="bg-surface-container-low border-l-[5px] border-primary px-4 py-3">
                                <p class="font-body-md text-body-md text-on-background">{{ $item['metric'][app()->getLocale()] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
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

            function scrollToPortfolioSection() {
                const grid = document.getElementById('portfolio-grid');
                if (!grid) return;
                const header = document.querySelector('header.fixed');
                const headerH = header ? header.offsetHeight : 80;
                const y = grid.getBoundingClientRect().top + window.scrollY - headerH + 16;
                if (window.lenis) {
                    window.lenis.scrollTo(y, { duration: 1.2 });
                } else {
                    window.scrollTo({ top: y, behavior: 'smooth' });
                }
            }

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
                            scrollToPortfolioSection();
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
                        scrollToPortfolioSection();
                    }
                });
            }

            if(btnNext) {
                btnNext.addEventListener('click', function() {
                    const count = [...cards].filter(c => currentFilter === 'all' || c.dataset.category === currentFilter).length;
                    if (window.currentPage < Math.ceil(count / perPage)) {
                        window.currentPage++;
                        filterAndPaginate();
                        scrollToPortfolioSection();
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






