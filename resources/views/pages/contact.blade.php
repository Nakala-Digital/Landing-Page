<!DOCTYPE html>

<html class="scroll-smooth" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ app()->getLocale() === 'en' ? 'Contact Us | Nakala Digital' : 'Hubungi Kami | Nakala Digital' }}</title>
    @include('partials.seo', [
        'title' => app()->getLocale() === 'en' ? 'Contact Us | Nakala Digital' : 'Hubungi Kami | Nakala Digital',
        'description' =>
            app()->getLocale() === 'en'
                ? 'Get in touch with Nakala Digital to discuss your next software or AI project.'
                : 'Hubungi Nakala Digital untuk mendiskusikan projek software, AI, atau transformasi digital Anda selanjutnya.',
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
                        "midnight-navy": "#031A44",
                        "electric-cyan": "#12AED0",
                        "impact-lime": "#A7F432"
                    },
                    "borderRadius": {
                        "DEFAULT": "4px",
                        "lg": "4px",
                        "xl": "8px",
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
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }

        .form-input-focus:focus {
            border-color: #12AED0;
            border-width: 2px;
            ring-color: transparent;
        }
    </style>
</head>

<body class="bg-background text-on-background font-body-md">
    @include('partials.navbar')
    <main class="pt-20">
        <!-- Hero Section -->
        <section class="relative bg-midnight-navy text-white py-unit-xl overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <img class="w-full h-full object-cover"
                    data-alt="A sophisticated architectural photograph of a modern high-tech office building at dusk with sharp glass lines and cool blue lighting. The atmosphere is professional and authoritative, reflecting the corporate identity of a premium digital partner. Deep navy shadows contrast with illuminated office windows, creating a sense of scale and technical precision in a minimalist urban setting."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-mtSPaRJvm3MMZPT-yRQF923u69JQwGRSDLW7GDzfw2tcz6oO2ynBG2d3_t5zdC_FBhlDRkk-9y3yY0JzS7rFvDQexsa7JZ4DRXeLMKL3t8M_43QD85Q-KSarD1-hJij4pKrrGna1weJMejvO10fBODl8EPk73DVv7OQBLJwQXTl9U_ge9briz4frpYKGM4ClHfPi877YhqVyyUBk63suAmUwBIjUo6e152x2G6-iiaTAIBE4ERjWSwCn8L_S_2obDvQb9129h-Yv" />
            </div>
            <div class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-unit-lg">
                <div
                    class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-4 py-1.5 rounded-full font-label-sm text-label-sm uppercase tracking-widest mb-unit-md">
                    <span class="material-symbols-outlined text-[16px]">public</span>
                    {{ app()->getLocale() === 'en' ? 'Local & Regional' : 'Lokal & Regional' }}
                </div>
                <h1
                    class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-white max-w-3xl mb-unit-md">
                    {{ app()->getLocale() === 'en' ? "Let's build the digital future together" : 'Mari bangun masa depan digital bersama' }}
                </h1>
                <p class="font-body-lg text-body-lg text-surface-variant max-w-2xl">
                    {{ app()->getLocale() === 'en' ? 'Nakala Digital brings regional capability with a local touch. Tell us about your project.' : 'Nakala Digital menghadirkan kapabilitas regional dengan sentuhan lokal. Ceritakan tentang proyek Anda.' }}
                </p>
            </div>
        </section>
        <!-- Content & Form Section -->
        <section class="py-unit-xl max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
                <!-- Info Panel (Left) -->
                <div class="lg:col-span-4 space-y-unit-lg">
                    <div class="p-unit-lg bg-white border border-outline-variant border-t-4 border-t-electric-cyan">
                        <h3 class="font-headline-h3 text-headline-h3 mb-unit-md">
                            {{ app()->getLocale() === 'en' ? 'Contact Information' : 'Informasi Kontak' }}</h3>
                        <div class="space-y-unit-md">
                            <div class="flex items-start gap-unit-md">
                                <span class="material-symbols-outlined text-electric-cyan" data-icon="mail">mail</span>
                                <div>
                                    <p class="font-label-sm uppercase text-on-surface-variant">
                                        {{ app()->getLocale() === 'en' ? 'Email' : 'Email' }}</p>
                                    <p class="font-body-lg">contact@nakala.digital</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-unit-md">
                                <span class="material-symbols-outlined text-electric-cyan"
                                    data-icon="phone">phone</span>
                                <div>
                                    <p class="font-label-sm uppercase text-on-surface-variant">
                                        {{ app()->getLocale() === 'en' ? 'Phone' : 'Telepon' }}</p>
                                    <p class="font-body-lg">+6282295706304</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-unit-md">
                                <span class="material-symbols-outlined text-electric-cyan"
                                    data-icon="location_on">location_on</span>
                                <div>
                                    <p class="font-label-sm uppercase text-on-surface-variant">
                                        {{ app()->getLocale() === 'en' ? 'Office' : 'Kantor' }}</p>
                                    <p class="font-body-lg">Pointlab Coworking Space, Graha Pos Indonesia, Jl. Banda
                                        No.30 Lantai 2 Blok C, Citarum,<br>Bandung Wetan, Bandung City, West Java 40115
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start gap-unit-md">
                                <span class="material-symbols-outlined text-electric-cyan"
                                    data-icon="calendar_month">calendar_month</span>
                                <div>
                                    <p class="font-label-sm uppercase text-on-surface-variant">
                                        {{ app()->getLocale() === 'en' ? 'Discovery Session' : 'Sesi Discovery' }}
                                    </p>
                                    <p class="font-body-lg">
                                        {{ app()->getLocale() === 'en' ? 'Free strategy consultation' : 'Konsultasi strategi gratis' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- WhatsApp CTA -->
                    <div
                        class="p-unit-lg bg-white border border-outline-variant shadow-sm border-l-4 border-l-primary flex flex-col gap-unit-md">
                        <div class="flex items-center gap-unit-md">
                            <div
                                class="w-12 h-12 bg-primary/10 text-primary rounded-full flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[24px]">forum</span>
                            </div>
                            <div>
                                <p class="font-label-sm uppercase tracking-widest text-on-surface-variant mb-1">
                                    {{ app()->getLocale() === 'en' ? 'Quick Response' : 'Respons Cepat' }}</p>
                                <p class="font-headline-h3 text-xl font-bold text-on-surface">
                                    {{ app()->getLocale() === 'en' ? 'Chat via WhatsApp' : 'Chat via WhatsApp' }}</p>
                            </div>
                        </div>
                        <a href="https://wa.me/6282295706304" target="_blank" rel="noopener noreferrer"
                            class="mt-2 w-full flex items-center justify-center gap-2 text-center bg-primary text-white px-6 py-3 rounded font-button text-button uppercase tracking-widest hover:opacity-90 transition-opacity">
                            {{ app()->getLocale() === 'en' ? 'Message Us' : 'Hubungi Kami' }}
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>

                    <!-- Engagement Model -->
                    <div class="p-unit-lg bg-surface-container-low border border-outline-variant">
                        <h4 class="font-headline-h3 text-headline-h3 mb-unit-md">
                            {{ app()->getLocale() === 'en' ? 'Our Model' : 'Model Kami' }}</h4>
                        <div class="relative pl-6 space-y-unit-lg border-l-2 border-outline-variant">
                            <div class="relative">
                                <span class="absolute -left-[31px] top-0 bg-electric-cyan w-4 h-4 rounded-full"></span>
                                <p class="font-button text-button text-primary">01. Discovery &amp; Scoping</p>
                                <p class="text-on-surface-variant text-sm">
                                    {{ app()->getLocale() === 'en' ? 'Defining project goals, scope, and solution proposal.' : 'Menentukan tujuan proyek, ruang lingkup, dan proposal solusi.' }}
                                </p>
                            </div>
                            <div class="relative">
                                <span class="absolute -left-[31px] top-0 bg-electric-cyan w-4 h-4 rounded-full"></span>
                                <p class="font-button text-button text-primary">02. Design &amp; Architecture</p>
                                <p class="text-on-surface-variant text-sm">
                                    {{ app()->getLocale() === 'en' ? 'Wireframes, system design, and delivery plan.' : 'Wireframes, desain sistem, dan rencana pengiriman.' }}
                                </p>
                            </div>
                            <div class="relative">
                                <span class="absolute -left-[31px] top-0 bg-electric-cyan w-4 h-4 rounded-full"></span>
                                <p class="font-button text-button text-primary">03. Agile Dev &amp; QA</p>
                                <p class="text-on-surface-variant text-sm">
                                    {{ app()->getLocale() === 'en' ? 'Sprint-based development with QA testing.' : 'Pengembangan berbasis Sprint dengan pengujian QA.' }}
                                </p>
                            </div>
                            <div class="relative">
                                <span class="absolute -left-[31px] top-0 bg-electric-cyan w-4 h-4 rounded-full"></span>
                                <p class="font-button text-button text-primary">04. Handover &amp; Support</p>
                                <p class="text-on-surface-variant text-sm">
                                    {{ app()->getLocale() === 'en' ? 'Formal handover, SLA support, and growth roadmap.' : 'Serah terima formal, dukungan SLA, dan peta jalan.' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact Form (Right) -->
                <div class="lg:col-span-8 flex flex-col gap-unit-xs">
                    <span
                        class="font-label-sm text-primary uppercase tracking-[0.3em] block">{{ app()->getLocale() === 'en' ? 'Contact Form' : 'Formulir Kontak' }}</span>
                    <div class="bg-white p-unit-lg md:p-unit-xl border border-outline-variant shadow-sm">
                        <form class="space-y-unit-md" id="contactForm">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                                <div class="space-y-1">
                                    <label
                                        class="font-label-sm text-on-surface-variant uppercase">{{ app()->getLocale() === 'en' ? 'Full Name' : 'Nama Lengkap' }}</label>
                                    <input
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest"
                                        placeholder="{{ app()->getLocale() === 'en' ? 'e.g. John Doe' : 'Contoh: Budi Santoso' }}"
                                        type="text" />
                                </div>
                                <div class="space-y-1">
                                    <label
                                        class="font-label-sm text-on-surface-variant uppercase">{{ app()->getLocale() === 'en' ? 'Company' : 'Perusahaan' }}</label>
                                    <input
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest"
                                        placeholder="{{ app()->getLocale() === 'en' ? 'e.g. Acme Corp' : 'Contoh: PT ABC' }}"
                                        type="text" />
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                                <div class="space-y-1">
                                    <label
                                        class="font-label-sm text-on-surface-variant uppercase">{{ app()->getLocale() === 'en' ? 'Position' : 'Jabatan' }}</label>
                                    <input
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest"
                                        placeholder="{{ app()->getLocale() === 'en' ? 'e.g. CTO' : 'Contoh: CTO / Direktur' }}"
                                        type="text" />
                                </div>
                                <div class="space-y-1">
                                    <label
                                        class="font-label-sm text-on-surface-variant uppercase">{{ app()->getLocale() === 'en' ? 'Email Address' : 'Alamat Email' }}</label>
                                    <input
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest"
                                        placeholder="john@company.com" type="email" />
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                                <div class="space-y-1">
                                    <label
                                        class="font-label-sm text-on-surface-variant uppercase">{{ app()->getLocale() === 'en' ? 'Phone Number' : 'Nomor Telepon' }}</label>
                                    <input
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest"
                                        placeholder="+62..." type="tel" />
                                </div>
                                <div class="space-y-1">
                                    <label
                                        class="font-label-sm text-on-surface-variant uppercase">{{ app()->getLocale() === 'en' ? 'Project Type' : 'Jenis Proyek' }}</label>
                                    <select
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest">
                                        <option>{{ app()->getLocale() === 'en' ? 'Website / Portal' : 'Website / Portal' }}</option>
                                        <option>{{ app()->getLocale() === 'en' ? 'Mobile Application' : 'Aplikasi Mobile' }}</option>
                                        <option>{{ app()->getLocale() === 'en' ? 'AI / Automation Solution' : 'Solusi AI / Otomatisasi' }}</option>
                                        <option>{{ app()->getLocale() === 'en' ? 'Custom Business System' : 'Sistem Bisnis Kustom' }}</option>
                                        <option>{{ app()->getLocale() === 'en' ? 'QA / Software Testing' : 'QA / Pengujian Software' }}</option>
                                        <option>{{ app()->getLocale() === 'en' ? 'Other / Not Sure Yet' : 'Lainnya / Belum Yakin' }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                                <div class="space-y-1">
                                    <label
                                        class="font-label-sm text-on-surface-variant uppercase">{{ app()->getLocale() === 'en' ? 'Budget Range' : 'Rentang Anggaran' }}</label>
                                    <select
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest">
                                        <option>{{ app()->getLocale() === 'en' ? '< Rp 50 Million' : '< Rp 50 Juta' }}</option>
                                        <option>{{ app()->getLocale() === 'en' ? 'Rp 50 - 200 Million' : 'Rp 50 - 200 Juta' }}</option>
                                        <option>{{ app()->getLocale() === 'en' ? 'Rp 200 - 500 Million' : 'Rp 200 - 500 Juta' }}</option>
                                        <option>{{ app()->getLocale() === 'en' ? 'Rp 500 Million - 1 Billion' : 'Rp 500 Juta - 1 Miliar' }}</option>
                                        <option>{{ app()->getLocale() === 'en' ? '> Rp 1 Billion' : '> Rp 1 Miliar' }}</option>
                                        <option>{{ app()->getLocale() === 'en' ? 'Not Sure Yet' : 'Belum Yakin' }}</option>
                                    </select>
                                </div>
                                <div class="space-y-1">
                                    <label
                                        class="font-label-sm text-on-surface-variant uppercase">{{ app()->getLocale() === 'en' ? 'Timeline' : 'Lini Masa' }}</label>
                                    <select
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest">
                                        <option>
                                            {{ app()->getLocale() === 'en' ? 'ASAP (Within 1 mo)' : 'Secepatnya (Dalam 1 bln)' }}
                                        </option>
                                        <option>{{ app()->getLocale() === 'en' ? '1-3 Months' : '1-3 Bulan' }}</option>
                                        <option>{{ app()->getLocale() === 'en' ? '3-6 Months' : '3-6 Bulan' }}</option>
                                        <option>
                                            {{ app()->getLocale() === 'en' ? 'Ongoing partnership' : 'Kerjasama Berkelanjutan' }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="space-y-1">
                                <label
                                    class="font-label-sm text-on-surface-variant uppercase">{{ app()->getLocale() === 'en' ? 'Message / Project Details' : 'Pesan / Detail Proyek' }}</label>
                                <textarea class="w-full border-outline-variant rounded p-3 min-h-[120px] form-input-focus bg-surface-container-lowest"
                                    placeholder="{{ app()->getLocale() === 'en' ? 'Tell us about your technical challenges...' : 'Ceritakan tentang tantangan teknis Anda...' }}"></textarea>
                            </div>
                            <div class="pt-unit-md">
                                <button
                                    class="bg-primary text-white px-8 py-4 rounded font-button text-button uppercase tracking-widest hover:bg-on-surface-variant transition-colors"
                                    type="submit">
                                    {{ app()->getLocale() === 'en' ? 'Submit Inquiry' : 'Kirim Pertanyaan' }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Partner Badge Section -->
        @include('partials.partner-badge')

    </main>
    <!-- Footer -->
    @include('partials.footer')
    <script>
        document.getElementById('contactForm').addEventListener('submit', (e) => {
            e.preventDefault();
            const f = e.target;
            const inputs = f.querySelectorAll('input, select, textarea');
            const data = {};
            inputs.forEach(el => {
                const label = el.closest('.space-y-1')?.querySelector('label')?.innerText || el.placeholder;
                data[label] = el.value;
            });

            const btn = f.querySelector('button');
            const originalText = btn.innerHTML;
            const isEn = window.location.pathname.startsWith('/en');
            btn.innerHTML = isEn ? 'Opening Email...' : 'Membuka Email...';
            btn.disabled = true;

            const subjectText = isEn ? 'Project Inquiry | Nakala Digital' : 'Pertanyaan Projek | Nakala Digital';
            const subject = encodeURIComponent(subjectText);
            const body = encodeURIComponent(
                Object.entries(data)
                .filter(([k, v]) => v)
                .map(([k, v]) => `${k}: ${v}`)
                .join('\n')
            );
            window.location.href = `mailto:contact@nakala.digital?subject=${subject}&body=${body}`;

            setTimeout(() => {
                btn.innerHTML = originalText;
                btn.disabled = false;
            }, 3000);
        });

        window.addEventListener('scroll', () => {
            const header = document.querySelector('header.fixed');
            if (window.scrollY > 50) {
                header.classList.add('py-2', 'h-16');
                header.classList.remove('h-20');
            } else {
                header.classList.remove('py-2', 'h-16');
                header.classList.add('h-20');
            }
        });
    </script>
</body>

</html>
