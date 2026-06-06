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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&amp;display=swap"
        rel="stylesheet" />
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
                    <span class="material-symbols-outlined text-[16px]">bolt</span>
                    Global Reach
                </div>
                <h1
                    class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 max-w-3xl mb-unit-md">
                    Mari bangun masa depan digital bersama.
                </h1>
                <p class="font-body-lg text-body-lg text-surface-variant max-w-2xl">
                    Let us build the digital future together. Nakala Digital provides regional capability with a local
                    touch.
                </p>
            </div>
        </section>
        <!-- Content & Form Section -->
        <section class="py-unit-xl max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
                <!-- Info Panel (Left) -->
                <div class="lg:col-span-4 space-y-unit-lg">
                    <div class="p-unit-lg bg-white border border-outline-variant border-t-4 border-t-electric-cyan">
                        <h3 class="font-headline-h3 text-headline-h3 mb-unit-md">Contact Information</h3>
                        <div class="space-y-unit-md">
                            <div class="flex items-start gap-unit-md">
                                <span class="material-symbols-outlined text-electric-cyan" data-icon="mail">mail</span>
                                <div>
                                    <p class="font-label-sm uppercase text-on-surface-variant">Email</p>
                                    <p class="font-body-lg">contact@nakala.digital</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-unit-md">
                                <span class="material-symbols-outlined text-electric-cyan"
                                    data-icon="phone">phone</span>
                                <div>
                                    <p class="font-label-sm uppercase text-on-surface-variant">Phone</p>
                                    <p class="font-body-lg">0822-9570-6304</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-unit-md">
                                <span class="material-symbols-outlined text-electric-cyan"
                                    data-icon="location_on">location_on</span>
                                <div>
                                    <p class="font-label-sm uppercase text-on-surface-variant">Office</p>
                                    <p class="font-body-lg">Pointlab Coworking Space, Graha Pos Indonesia,<br />Jl.
                                        Banda No.30 Lantai 2 Blok C,<br />Citarum, Bandung Wetan, Bandung
                                        City,<br />West Java 40115</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Engagement Model -->
                    <div class="p-unit-lg bg-surface-container-low border border-outline-variant">
                        <h4 class="font-headline-h3 text-headline-h3 mb-unit-md">Our Model</h4>
                        <div class="relative pl-6 space-y-unit-lg border-l-2 border-outline-variant">
                            <div class="relative">
                                <span class="absolute -left-[31px] top-0 bg-electric-cyan w-4 h-4 rounded-full"></span>
                                <p class="font-button text-button text-primary">01. Discovery</p>
                                <p class="text-on-surface-variant text-sm">Defining goals and scope.</p>
                            </div>
                            <div class="relative">
                                <span class="absolute -left-[31px] top-0 bg-electric-cyan w-4 h-4 rounded-full"></span>
                                <p class="font-button text-button text-primary">02. Design</p>
                                <p class="text-on-surface-variant text-sm">UX research and UI drafting.</p>
                            </div>
                            <div class="relative">
                                <span class="absolute -left-[31px] top-0 bg-electric-cyan w-4 h-4 rounded-full"></span>
                                <p class="font-button text-button text-primary">03. Agile Dev</p>
                                <p class="text-on-surface-variant text-sm">Sprint-based high-quality code.</p>
                            </div>
                            <div class="relative">
                                <span class="absolute -left-[31px] top-0 bg-electric-cyan w-4 h-4 rounded-full"></span>
                                <p class="font-button text-button text-primary">04. Handover</p>
                                <p class="text-on-surface-variant text-sm">Deployment and maintenance.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Strategic Partner Badge -->
                    <div class="p-unit-md bg-midnight-navy text-white rounded-lg flex items-center justify-between">
                        <div>
                            <p class="text-[10px] uppercase tracking-widest text-surface-variant">Strategic Partner</p>
                            <p class="font-bold text-lg">Romulus Digital</p>
                        </div>
                        <img class="h-10 w-auto object-contain" src="{{ asset('assets/romulus-putih.png') }}"
                            alt="Romulus Digital">
                    </div>
                </div>
                <!-- Contact Form (Right) -->
                <div class="lg:col-span-8">
                    <div class="bg-white p-unit-lg md:p-unit-xl border border-outline-variant shadow-sm">
                        <form class="space-y-unit-md" id="contactForm">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                                <div class="space-y-1">
                                    <label class="font-label-sm text-on-surface-variant uppercase">Full Name</label>
                                    <input
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest"
                                        placeholder="e.g. John Doe" type="text" />
                                </div>
                                <div class="space-y-1">
                                    <label class="font-label-sm text-on-surface-variant uppercase">Company</label>
                                    <input
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest"
                                        placeholder="e.g. Acme Corp" type="text" />
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                                <div class="space-y-1">
                                    <label class="font-label-sm text-on-surface-variant uppercase">Position</label>
                                    <input
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest"
                                        placeholder="e.g. CTO" type="text" />
                                </div>
                                <div class="space-y-1">
                                    <label class="font-label-sm text-on-surface-variant uppercase">Email Address</label>
                                    <input
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest"
                                        placeholder="john@company.com" type="email" />
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                                <div class="space-y-1">
                                    <label class="font-label-sm text-on-surface-variant uppercase">Phone Number</label>
                                    <input
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest"
                                        placeholder="+62..." type="tel" />
                                </div>
                                <div class="space-y-1">
                                    <label class="font-label-sm text-on-surface-variant uppercase">Project Type</label>
                                    <select
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest">
                                        <option>Enterprise Web App</option>
                                        <option>Mobile App (iOS/Android)</option>
                                        <option>Cloud Infrastructure</option>
                                        <option>AI/ML Solutions</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                                <div class="space-y-1">
                                    <label class="font-label-sm text-on-surface-variant uppercase">Budget Range</label>
                                    <select
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest">
                                        <option>$10k - $25k</option>
                                        <option>$25k - $50k</option>
                                        <option>$50k+</option>
                                        <option>Not sure yet</option>
                                    </select>
                                </div>
                                <div class="space-y-1">
                                    <label class="font-label-sm text-on-surface-variant uppercase">Timeline</label>
                                    <select
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest">
                                        <option>ASAP (Within 1 mo)</option>
                                        <option>1-3 Months</option>
                                        <option>3-6 Months</option>
                                        <option>Ongoing partnership</option>
                                    </select>
                                </div>
                            </div>
                            <div class="space-y-1">
                                <label class="font-label-sm text-on-surface-variant uppercase">Message / Project
                                    Details</label>
                                <textarea class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest"
                                    placeholder="Tell us about your technical challenges..." rows="4"></textarea>
                            </div>
                            <div class="pt-unit-md">
                                <button
                                    class="w-full md:w-auto bg-electric-cyan text-white font-button text-button uppercase px-12 py-4 rounded hover:bg-primary transition-all shadow-md"
                                    type="submit">
                                    Submit Inquiry
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- Footer -->
    @include('partials.footer')
    <script>
        // Micro-interactions
        document.getElementById('contactForm').addEventListener('submit', (e) => {
            e.preventDefault();
            const btn = e.target.querySelector('button');
            const originalText = btn.innerHTML;
            btn.innerHTML = 'Sending...';
            btn.disabled = true;

            setTimeout(() => {
                btn.innerHTML = 'Message Sent';
                btn.classList.replace('bg-electric-cyan', 'bg-impact-lime');
                btn.classList.replace('text-white', 'text-midnight-navy');
                setTimeout(() => {
                    btn.innerHTML = originalText;
                    btn.classList.replace('bg-impact-lime', 'bg-electric-cyan');
                    btn.classList.replace('text-midnight-navy', 'text-white');
                    btn.disabled = false;
                    e.target.reset();
                }, 3000);
            }, 1500);
        });

        // Navbar scroll effect
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
