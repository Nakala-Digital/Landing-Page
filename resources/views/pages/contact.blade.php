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
                        "electric-cyan": "#12AED0",
                        "midnight-navy": "#031A44",
                        "impact-lime": "#A7F432",
                        "primary": "#12AED0",
                        "primary-container": "#12AED0",
                        "on-primary": "#ffffff",
                        "on-primary-container": "#ffffff",
                        "on-secondary-fixed": "#031A44",
                        "tertiary-fixed": "#A7F432",
                        "on-tertiary-fixed": "#031A44",
                        "on-background": "#334155",
                        "on-surface-variant": "#64748b",
                        "inverse-surface": "#031A44",
                        "background": "#F7FAFC",
                        "surface": "#F7FAFC",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-low": "#f1f5f9",
                        "surface-container": "#e2e8f0",
                        "surface-container-high": "#e2e8f0",
                        "surface-container-highest": "#cbd5e1",
                        "outline": "#94a3b8",
                        "outline-variant": "#e2e8f0",
                        "primary-fixed-dim": "#56d6f9",
                        "on-surface": "#334155",
                        "surface-variant": "#e2e8f0",
                        "on-error": "#ffffff",
                        "error": "#ba1a1a",
                        "error-container": "#ffdad6",
                        "on-error-container": "#93000a",
                        "on-tertiary": "#ffffff",
                        "tertiary": "#426900",
                        "tertiary-fixed-dim": "#90db0e",
                        "secondary": "#4b5d8a",
                        "on-secondary": "#ffffff",
                        "secondary-container": "#b9cbff",
                        "on-secondary-container": "#435582",
                        "secondary-fixed": "#d9e2ff",
                        "secondary-fixed-dim": "#b3c6f9",
                        "on-secondary-fixed-variant": "#334671",
                        "surface-tint": "#12AED0",
                        "surface-dim": "#d5dbdd",
                        "surface-bright": "#f5fafd",
                        "inverse-primary": "#56d6f9",
                        "inverse-on-surface": "#ecf1f4",
                        "on-primary-fixed": "#001f27",
                        "on-primary-fixed-variant": "#004e5f",
                        "primary-fixed": "#b2ebff",
                        "on-tertiary-fixed-variant": "#314f00",
                        "on-tertiary-container": "#253e00",
                        "tertiary-container": "#73b100"
                    },
                    "borderRadius": {
                        "DEFAULT": "4px",
                        "lg": "8px",
                        "xl": "12px",
                        "2xl": "24px",
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
<<<<<<< HEAD
<body class="bg-background text-on-background font-body-md">
@include('partials.navbar')
<main class="pt-20">
<!-- Hero Section -->
<section class="relative bg-midnight-navy text-white py-unit-xl overflow-hidden">
<div class="absolute inset-0 opacity-10">
<img class="w-full h-full object-cover" data-alt="A sophisticated architectural photograph of a modern high-tech office building at dusk with sharp glass lines and cool blue lighting. The atmosphere is professional and authoritative, reflecting the corporate identity of a premium digital partner. Deep navy shadows contrast with illuminated office windows, creating a sense of scale and technical precision in a minimalist urban setting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-mtSPaRJvm3MMZPT-yRQF923u69JQwGRSDLW7GDzfw2tcz6oO2ynBG2d3_t5zdC_FBhlDRkk-9y3yY0JzS7rFvDQexsa7JZ4DRXeLMKL3t8M_43QD85Q-KSarD1-hJij4pKrrGna1weJMejvO10fBODl8EPk73DVv7OQBLJwQXTl9U_ge9briz4frpYKGM4ClHfPi877YhqVyyUBk63suAmUwBIjUo6e152x2G6-iiaTAIBE4ERjWSwCn8L_S_2obDvQb9129h-Yv"/>
</div>
<div class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-unit-lg">
<div class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-4 py-1.5 rounded-full font-label-sm text-label-sm uppercase tracking-widest mb-unit-md">
<span class="material-symbols-outlined text-[16px]">bolt</span>
INDONESIA TECH PARTNER
</div>
<h1 class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 max-w-3xl mb-unit-md">
                    Mari bangun masa depan digital bersama.
                </h1>
<p class="font-body-lg text-body-lg text-surface-variant max-w-2xl">
                    Let us build the digital future together. Nakala Digital provides regional capability with a local touch.
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
<span class="material-symbols-outlined text-electric-cyan" data-icon="phone">phone</span>
<div>
<p class="font-label-sm uppercase text-on-surface-variant">Phone</p>
<p class="font-body-lg">+62 22 1234 5678</p>
</div>
</div>
<div class="flex items-start gap-unit-md">
<span class="material-symbols-outlined text-electric-cyan" data-icon="location_on">location_on</span>
<div>
<p class="font-label-sm uppercase text-on-surface-variant">Office</p>
<p class="font-body-lg">Jl. Asia Afrika No. 123<br/>Bandung, Indonesia 40111</p>
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
<img class="h-10 w-auto object-contain" src="{{ asset('assets/romulus-hitam.png') }}" alt="Romulus Digital">
</div>
</div>
<!-- Contact Form (Right) -->
<div class="lg:col-span-8">
<div class="bg-white p-unit-lg md:p-unit-xl border border-outline-variant shadow-sm">
<form class="space-y-unit-md" id="contactForm">
<div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md">
<div class="space-y-1">
<label class="font-label-sm text-on-surface-variant uppercase">Full Name</label>
<input class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest" placeholder="e.g. John Doe" type="text"/>
</div>
<div class="space-y-1">
<label class="font-label-sm text-on-surface-variant uppercase">Company</label>
<input class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest" placeholder="e.g. Acme Corp" type="text"/>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md">
<div class="space-y-1">
<label class="font-label-sm text-on-surface-variant uppercase">Position</label>
<input class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest" placeholder="e.g. CTO" type="text"/>
</div>
<div class="space-y-1">
<label class="font-label-sm text-on-surface-variant uppercase">Email Address</label>
<input class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest" placeholder="john@company.com" type="email"/>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md">
<div class="space-y-1">
<label class="font-label-sm text-on-surface-variant uppercase">Phone Number</label>
<input class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest" placeholder="+62..." type="tel"/>
</div>
<div class="space-y-1">
<label class="font-label-sm text-on-surface-variant uppercase">Project Type</label>
<select class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest">
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
<select class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest">
<option>$10k - $25k</option>
<option>$25k - $50k</option>
<option>$50k+</option>
<option>Not sure yet</option>
</select>
</div>
<div class="space-y-1">
<label class="font-label-sm text-on-surface-variant uppercase">Timeline</label>
<select class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest">
<option>ASAP (Within 1 mo)</option>
<option>1-3 Months</option>
<option>3-6 Months</option>
<option>Ongoing partnership</option>
</select>
</div>
</div>
<div class="space-y-1">
<label class="font-label-sm text-on-surface-variant uppercase">Message / Project Details</label>
<textarea class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest" placeholder="Tell us about your technical challenges..." rows="4"></textarea>
</div>
<div class="pt-unit-md">
<button class="w-full md:w-auto bg-electric-cyan text-white font-button text-button uppercase px-12 py-4 rounded hover:bg-primary transition-all shadow-md" type="submit">
                                    Submit Inquiry
                                </button>
</div>
</form>
</div>
</div>
</div>
</section>
=======
>>>>>>> a66a9cf7b758d2a0cba1ee6c01dceb6dbebafded

<body class="bg-background text-on-background font-body-md">
    @include('partials.navbar')
    <main class="pt-20">
        <!-- Hero Section -->
        <section
            class="relative bg-midnight-navy text-white pt-unit-lg pb-unit-xl lg:pt-unit-xl lg:pb-32 overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <img class="w-full h-full object-cover"
                    data-alt="A sophisticated architectural photograph of a modern high-tech office building at dusk with sharp glass lines and cool blue lighting. The atmosphere is professional and authoritative, reflecting the corporate identity of a premium digital partner. Deep navy shadows contrast with illuminated office windows, creating a sense of scale and technical precision in a minimalist urban setting."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-mtSPaRJvm3MMZPT-yRQF923u69JQwGRSDLW7GDzfw2tcz6oO2ynBG2d3_t5zdC_FBhlDRkk-9y3yY0JzS7rFvDQexsa7JZ4DRXeLMKL3t8M_43QD85Q-KSarD1-hJij4pKrrGna1weJMejvO10fBODl8EPk73DVv7OQBLJwQXTl9U_ge9briz4frpYKGM4ClHfPi877YhqVyyUBk63suAmUwBIjUo6e152x2G6-iiaTAIBE4ERjWSwCn8L_S_2obDvQb9129h-Yv" />
            </div>
            <div class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-unit-lg">
                <div
                    class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-4 py-1.5 rounded-full font-label-sm text-label-sm uppercase tracking-widest mb-unit-md">
                    <span class="material-symbols-outlined text-[16px]">bolt</span>
                    {{ app()->getLocale() === 'en' ? 'Global Reach' : 'Jangkauan Global' }}
                </div>
                <h1
                    class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 max-w-3xl mb-unit-md">
                    {{ app()->getLocale() === 'en' ? 'Let us build the digital future together.' : 'Mari bangun masa depan digital bersama.' }}
                </h1>
                <p class="font-body-lg text-body-lg text-surface-variant max-w-2xl">
                    {{ app()->getLocale() === 'en'
                        ? 'Nakala Digital provides regional capability with a local touch.'
                        : 'Nakala Digital menghadirkan kapabilitas regional dengan sentuhan lokal.' }}
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
                                    <p class="font-label-sm uppercase text-on-surface-variant">Email</p>
                                    <p class="font-body-lg">contact@nakala.digital</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-unit-md">
                                <span class="material-symbols-outlined text-electric-cyan"
                                    data-icon="phone">phone</span>
                                <div>
                                    <p class="font-label-sm uppercase text-on-surface-variant">
                                        {{ app()->getLocale() === 'en' ? 'Phone' : 'Telepon' }}</p>
                                    <p class="font-body-lg">0822-9570-6304</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-unit-md">
                                <span class="material-symbols-outlined text-electric-cyan"
                                    data-icon="location_on">location_on</span>
                                <div>
                                    <p class="font-label-sm uppercase text-on-surface-variant">
                                        {{ app()->getLocale() === 'en' ? 'Office' : 'Kantor' }}</p>
                                    <p class="font-body-lg">Pointlab Coworking Space, Graha Pos Indonesia,<br />Jl.
                                        Banda No.30 Lantai 2 Blok C,<br />Citarum, Bandung Wetan, Bandung
                                        City,<br />West Java 40115</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Engagement Model -->
                    <div class="p-unit-lg bg-surface-container-low border border-outline-variant">
                        <h4 class="font-headline-h3 text-headline-h3 mb-unit-md">
                            {{ app()->getLocale() === 'en' ? 'Our Model' : 'Model Kerja Kami' }}</h4>
                        <div class="relative pl-6 space-y-unit-lg border-l-2 border-outline-variant">
                            <div class="relative">
                                <span class="absolute -left-[31px] top-0 bg-electric-cyan w-4 h-4 rounded-full"></span>
                                <p class="font-button text-button text-primary">01. Discovery</p>
                                <p class="text-on-surface-variant text-sm">
                                    {{ app()->getLocale() === 'en' ? 'Defining goals and scope.' : 'Menentukan tujuan dan ruang lingkup.' }}
                                </p>
                            </div>
                            <div class="relative">
                                <span class="absolute -left-[31px] top-0 bg-electric-cyan w-4 h-4 rounded-full"></span>
                                <p class="font-button text-button text-primary">
                                    {{ app()->getLocale() === 'en' ? '02. Design' : '02. Desain' }}</p>
                                <p class="text-on-surface-variant text-sm">
                                    {{ app()->getLocale() === 'en' ? 'UX research and UI drafting.' : 'Riset UX dan rancangan UI.' }}
                                </p>
                            </div>
                            <div class="relative">
                                <span class="absolute -left-[31px] top-0 bg-electric-cyan w-4 h-4 rounded-full"></span>
                                <p class="font-button text-button text-primary">03. Agile Dev</p>
                                <p class="text-on-surface-variant text-sm">
                                    {{ app()->getLocale() === 'en' ? 'Sprint-based high-quality code.' : 'Kode berkualitas tinggi berbasis sprint.' }}
                                </p>
                            </div>
                            <div class="relative">
                                <span class="absolute -left-[31px] top-0 bg-electric-cyan w-4 h-4 rounded-full"></span>
                                <p class="font-button text-button text-primary">
                                    {{ app()->getLocale() === 'en' ? '04. Handover' : '04. Serah Terima' }}</p>
                                <p class="text-on-surface-variant text-sm">
                                    {{ app()->getLocale() === 'en' ? 'Deployment and maintenance.' : 'Deployment dan pemeliharaan.' }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Strategic Partner Badge -->
                    <div class="p-unit-md bg-midnight-navy text-white rounded-lg flex items-center justify-between">
                        <div>
                            <p class="text-[10px] uppercase tracking-widest text-surface-variant">
                                {{ app()->getLocale() === 'en' ? 'Strategic Partner' : 'Mitra Strategis' }}</p>
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
                                    <label
                                        class="font-label-sm text-on-surface-variant uppercase">{{ app()->getLocale() === 'en' ? 'Full Name' : 'Nama Lengkap' }}</label>
                                    <input
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest"
                                        placeholder="{{ app()->getLocale() === 'en' ? 'e.g. John Doe' : 'contoh: Budi Santoso' }}"
                                        type="text" />
                                </div>
                                <div class="space-y-1">
                                    <label
                                        class="font-label-sm text-on-surface-variant uppercase">{{ app()->getLocale() === 'en' ? 'Company' : 'Perusahaan' }}</label>
                                    <input
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest"
                                        placeholder="{{ app()->getLocale() === 'en' ? 'e.g. Acme Corp' : 'contoh: PT Contoh Digital' }}"
                                        type="text" />
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                                <div class="space-y-1">
                                    <label
                                        class="font-label-sm text-on-surface-variant uppercase">{{ app()->getLocale() === 'en' ? 'Position' : 'Jabatan' }}</label>
                                    <input
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest"
                                        placeholder="{{ app()->getLocale() === 'en' ? 'e.g. CTO' : 'contoh: CTO' }}"
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
                                        <option>
                                            {{ app()->getLocale() === 'en' ? 'Enterprise Web App' : 'Aplikasi Web Enterprise' }}
                                        </option>
                                        <option>
                                            {{ app()->getLocale() === 'en' ? 'Mobile App (iOS/Android)' : 'Aplikasi Mobile (iOS/Android)' }}
                                        </option>
                                        <option>
                                            {{ app()->getLocale() === 'en' ? 'Cloud Infrastructure' : 'Infrastruktur Cloud' }}
                                        </option>
                                        <option>{{ app()->getLocale() === 'en' ? 'AI/ML Solutions' : 'Solusi AI/ML' }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md">
                                <div class="space-y-1">
                                    <label
                                        class="font-label-sm text-on-surface-variant uppercase">{{ app()->getLocale() === 'en' ? 'Budget Range' : 'Rentang Budget' }}</label>
                                    <select
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest">
                                        <option>$10k - $25k</option>
                                        <option>$25k - $50k</option>
                                        <option>$50k+</option>
                                        <option>{{ app()->getLocale() === 'en' ? 'Not sure yet' : 'Belum yakin' }}
                                        </option>
                                    </select>
                                </div>
                                <div class="space-y-1">
                                    <label
                                        class="font-label-sm text-on-surface-variant uppercase">{{ app()->getLocale() === 'en' ? 'Timeline' : 'Timeline' }}</label>
                                    <select
                                        class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest">
                                        <option>
                                            {{ app()->getLocale() === 'en' ? 'ASAP (Within 1 mo)' : 'Secepatnya (dalam 1 bulan)' }}
                                        </option>
                                        <option>{{ app()->getLocale() === 'en' ? '1-3 Months' : '1-3 Bulan' }}</option>
                                        <option>{{ app()->getLocale() === 'en' ? '3-6 Months' : '3-6 Bulan' }}</option>
                                        <option>
                                            {{ app()->getLocale() === 'en' ? 'Ongoing partnership' : 'Kerja sama berkelanjutan' }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="space-y-1">
                                <label class="font-label-sm text-on-surface-variant uppercase">
                                    {{ app()->getLocale() === 'en' ? 'Message / Project Details' : 'Pesan / Detail Proyek' }}</label>
                                <textarea class="w-full border-outline-variant rounded p-3 form-input-focus bg-surface-container-lowest"
                                    placeholder="{{ app()->getLocale() === 'en' ? 'Tell us about your technical challenges...' : 'Ceritakan tantangan teknis Anda...' }}"
                                    rows="4"></textarea>
                            </div>
                            <div class="pt-unit-md">
                                <button
                                    class="w-full md:w-auto bg-electric-cyan text-white font-button text-button uppercase px-12 py-4 rounded hover:bg-primary transition-all shadow-md"
                                    type="submit">
                                    {{ app()->getLocale() === 'en' ? 'Submit Inquiry' : 'Kirim Inquiry' }}
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
            const sendingText = @json(app()->getLocale() === 'en' ? 'Sending...' : 'Mengirim...');
            const sentText = @json(app()->getLocale() === 'en' ? 'Message Sent' : 'Pesan Terkirim');
            const btn = e.target.querySelector('button');
            const originalText = btn.innerHTML;
            btn.innerHTML = sendingText;
            btn.disabled = true;

            setTimeout(() => {
                btn.innerHTML = sentText;
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
<<<<<<< HEAD
</body></html>


=======
</body>

</html>
>>>>>>> a66a9cf7b758d2a0cba1ee6c01dceb6dbebafded
