<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Solutions | Nakala Digital - Local Delivery, Regional Capability</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&amp;display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind Configuration -->
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
                        "surface-variant": "#dee3e6"
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
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .solution-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>

<body class="bg-background text-on-background font-body-md">
    @include('partials.navbar')
    <main class="pt-20">
        <!-- Hero Section -->
        <section class="py-unit-xl px-margin-mobile md:px-margin-desktop bg-surface-container-low overflow-hidden">
            <div class="max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-2 gap-gutter items-center">
                <div class="relative z-10">
                    <div
                        class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-4 py-1.5 rounded-full font-label-sm text-label-sm uppercase tracking-widest mb-unit-lg">
                        <span class="material-symbols-outlined text-[16px]">bolt</span>
                        Tailored Digital Excellence
                    </div>
                    <h1
                        class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-on-background mb-unit-md leading-tight">
                        Digital solutions <span class="text-primary">tailored</span> to business needs.
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant mb-unit-lg max-w-xl">
                        Solusi digital yang siap disesuaikan dengan kebutuhan bisnis Anda, meningkatkan efisiensi
                        operasional dan pertumbuhan berkelanjutan.
                    </p>
                    <div class="flex flex-wrap gap-unit-md">
                        <button
                            class="bg-primary text-on-primary px-unit-lg py-unit-md rounded-lg font-button text-button">Explore
                            Solutions</button>
                        <button
                            class="border-2 border-on-secondary-fixed text-on-secondary-fixed px-unit-lg py-unit-md rounded-lg font-button text-button">View
                            Case Studies</button>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute -top-20 -right-20 w-80 h-80 bg-primary/5 rounded-full blur-3xl"></div>
                    <img alt="Platform Mockup"
                        class="rounded-xl shadow-2xl border border-outline-variant relative z-10 w-full object-cover h-[400px]"
                        data-alt="A high-fidelity digital dashboard mockup shown on a clean white laptop screen, positioned at an elegant angle. The interface features complex data visualizations, sleek navigation menus, and clean enterprise aesthetics in a professional light-mode setting. Soft daylight illuminates the scene from the side, creating subtle shadows and a premium, corporate tech-focused atmosphere. The overall composition is minimalist and authoritative."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFPWsSqZB8hiKpSGVy_jWZ7eEnJr7EoYxNuzzHplwocf1eYr5cwAoKX5T-P5RJtbVCsEMouFek11870Wr_jvct94bNTnwXnvYLGXjZdX9oFZlppC0yur0ddxU6aTXprqINg9_hiu_opgd9Z8APaLpqliC3kHbpZUK9TWErcf_Br2WV8h6XCOaNfwHxNbTe6Vds4dyKn5bO4IetclTUlApRCpMNNAWu6wFswHjcwQts3eZ4ejMzcP0dEnrHXbYrhYQlDOsTIE-5cIJA" />
                    <div
                        class="absolute -bottom-8 -left-8 bg-surface-container-highest p-unit-md rounded-lg border border-outline-variant shadow-lg hidden md:block">
                        <div class="flex items-center gap-unit-sm text-primary">
                            <span class="material-symbols-outlined">trending_up</span>
                            <span class="font-bold">+45% Efficiency</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Solutions Bento Grid -->
        <section class="py-unit-xl px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="text-center mb-unit-xl">
                <h2
                    class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 text-on-background mb-unit-sm">
                    Core Enterprise Ecosystem</h2>
                <p class="text-on-surface-variant max-w-2xl mx-auto">From AI-driven hiring to local community
                    management, we
                    provide a spectrum of capabilities designed for regional scalability.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
                <!-- 1. AI Hiring (Large Card) -->
                <div
                    class="md:col-span-8 bg-surface border border-outline-variant rounded-xl p-unit-lg solution-card transition-all border-t-4 border-t-primary">
                    <div class="flex flex-col md:flex-row gap-unit-lg h-full">
                        <div class="md:w-1/2">
                            <span class="material-symbols-outlined text-primary text-4xl mb-unit-sm"
                                data-icon="psychology">psychology</span>
                            <h3 class="font-headline-h3 text-headline-h3 mb-unit-sm text-on-background">AI Hiring
                                Platform
                            </h3>
                            <p class="text-on-surface-variant mb-unit-md text-sm">Automating talent acquisition with
                                bias-free screening and predictive performance modeling.</p>
                            <div class="space-y-2 mb-unit-lg">
                                <div class="flex items-start gap-unit-sm">
                                    <span
                                        class="material-symbols-outlined text-primary text-sm mt-1">check_circle</span>
                                    <p class="text-sm"><strong>Problem:</strong> Slow candidate screening cycles.</p>
                                </div>
                                <div class="flex items-start gap-unit-sm">
                                    <span
                                        class="material-symbols-outlined text-primary text-sm mt-1">check_circle</span>
                                    <p class="text-sm"><strong>Solution:</strong> NLP-based resume parsing &amp;
                                        scoring.
                                    </p>
                                </div>
                                <div class="flex items-start gap-unit-sm">
                                    <span
                                        class="material-symbols-outlined text-primary text-sm mt-1">check_circle</span>
                                    <p class="text-sm"><strong>Impact:</strong> 60% reduction in time-to-hire.</p>
                                </div>
                            </div>
                            <a class="text-primary font-bold text-sm inline-flex items-center gap-1" href="#">View
                                Details <span class="material-symbols-outlined text-xs">arrow_forward</span></a>
                        </div>
                        <div
                            class="md:w-1/2 bg-surface-container-low rounded-lg overflow-hidden border border-outline-variant/30 flex items-center justify-center">
                            <img class="w-full h-full object-cover"
                                data-alt="A sophisticated AI hiring dashboard interface showing candidate matching percentages, heatmaps of skills, and automated interview scheduling tools. The UI is clean, using a light mode palette with electric cyan accents and midnight navy text. High-contrast outlines define the various data widgets, conveying technical rigor and modern software excellence."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD7Df_CytLZx8Hfke85ZmdVdvxDVz9n6xF39xLUwmaC4fXIfA3JSp1f-yQ41MrdaZRwnWl2gGOteMVocGRZeHBm8sYtBgZNdFj9AEnk98fPAr6Wqt_Djvq1jx4pzu8wEZEW8jttTsw6vie33CysSvhjH1NMTYzJb0UkiNv1N305AumrgnYbwcsN4HhYbUQs962WPqqfsnsdHgCh7hJ7gRUcskJPNDRdpeBi6QZbQ-nEmbo85HCAoEu02tu_2O3mAGk_gYciaWbvzLLc" />
                        </div>
                    </div>
                </div>
                <!-- 2. HRMS (Compact Card) -->
                <div
                    class="md:col-span-4 bg-surface border border-outline-variant rounded-xl p-unit-lg solution-card transition-all">
                    <span class="material-symbols-outlined text-primary text-4xl mb-unit-sm"
                        data-icon="badge">badge</span>
                    <h3 class="font-headline-h3 text-headline-h3 mb-unit-sm">Next-Gen HRMS</h3>
                    <p class="text-on-surface-variant text-sm mb-unit-md">Unified workforce management from payroll to
                        performance.</p>
                    <div
                        class="bg-surface-container-highest/30 p-unit-sm rounded border border-outline-variant/50 mb-unit-md">
                        <p class="text-xs font-bold text-primary-container">IMPACT: +40% retention rate</p>
                    </div>
                    <a class="text-primary font-bold text-sm inline-flex items-center gap-1" href="#">Details
                        <span class="material-symbols-outlined text-xs">arrow_forward</span></a>
                </div>
                <!-- 3. HSE Operations (Medium Card) -->
                <div
                    class="md:col-span-4 bg-surface border border-outline-variant rounded-xl p-unit-lg solution-card transition-all">
                    <span class="material-symbols-outlined text-primary text-4xl mb-unit-sm"
                        data-icon="health_and_safety">health_and_safety</span>
                    <h3 class="font-headline-h3 text-headline-h3 mb-unit-sm">HSE Operations</h3>
                    <p class="text-on-surface-variant text-sm mb-unit-md">Safety compliance and incident reporting for
                        industrial scale.</p>
                    <p class="text-xs mb-unit-sm"><strong>Solution:</strong> Real-time field reporting app.</p>
                    <a class="text-primary font-bold text-sm inline-flex items-center gap-1" href="#">Details
                        <span class="material-symbols-outlined text-xs">arrow_forward</span></a>
                </div>
                <!-- 4. VMS (Medium Card) -->
                <div
                    class="md:col-span-4 bg-surface border border-outline-variant rounded-xl p-unit-lg solution-card transition-all">
                    <span class="material-symbols-outlined text-primary text-4xl mb-unit-sm"
                        data-icon="local_shipping">local_shipping</span>
                    <h3 class="font-headline-h3 text-headline-h3 mb-unit-sm">VMS Portal</h3>
                    <p class="text-on-surface-variant text-sm mb-unit-md">Vendor Management System to optimize regional
                        supply chains.</p>
                    <p class="text-xs mb-unit-sm"><strong>Impact:</strong> 25% cost saving in procurement.</p>
                    <a class="text-primary font-bold text-sm inline-flex items-center gap-1" href="#">Details
                        <span class="material-symbols-outlined text-xs">arrow_forward</span></a>
                </div>
                <!-- 5. Customer Engagement (Medium Card) -->
                <div
                    class="md:col-span-4 bg-surface border border-outline-variant rounded-xl p-unit-lg solution-card transition-all border-t-4 border-t-primary">
                    <span class="material-symbols-outlined text-primary text-4xl mb-unit-sm"
                        data-icon="forum">forum</span>
                    <h3 class="font-headline-h3 text-headline-h3 mb-unit-sm">Omni-Channel Engagement</h3>
                    <p class="text-on-surface-variant text-sm mb-unit-md">Consolidating customer touchpoints into a
                        single
                        narrative.</p>
                    <a class="text-primary font-bold text-sm inline-flex items-center gap-1" href="#">Details
                        <span class="material-symbols-outlined text-xs">arrow_forward</span></a>
                </div>
                <!-- 6. Education Portal (Compact Card) -->
                <div
                    class="md:col-span-4 bg-surface border border-outline-variant rounded-xl p-unit-lg solution-card transition-all">
                    <span class="material-symbols-outlined text-primary text-4xl mb-unit-sm"
                        data-icon="school">school</span>
                    <h3 class="font-headline-h3 text-headline-h3 mb-unit-sm">Education Hub</h3>
                    <p class="text-on-surface-variant text-sm">LMS and student portals for regional capability
                        development.
                    </p>
                </div>
                <!-- 7. WargaKas (Medium Card - Highlight) -->
                <div
                    class="md:col-span-4 bg-on-background text-surface border border-outline rounded-xl p-unit-lg solution-card transition-all">
                    <div
                        class="inline-block bg-tertiary text-on-tertiary px-unit-sm py-unit-xs rounded text-[10px] font-bold mb-unit-sm uppercase tracking-widest">
                        Local Focus</div>
                    <h3 class="font-headline-h3 text-headline-h3 mb-unit-sm">WargaKas</h3>
                    <p class="text-surface-variant text-sm mb-unit-md">Community financial tracking and local
                        governance
                        automation.</p>
                    <div class="flex items-center gap-unit-sm text-tertiary-fixed">
                        <span class="material-symbols-outlined">payments</span>
                        <span class="text-xs">Digitalizing local community treasury</span>
                    </div>
                </div>
                <!-- 8. AI Coach (Medium Card) -->
                <div
                    class="md:col-span-4 bg-surface border border-outline-variant rounded-xl p-unit-lg solution-card transition-all">
                    <span class="material-symbols-outlined text-primary text-4xl mb-unit-sm"
                        data-icon="smart_toy">smart_toy</span>
                    <h3 class="font-headline-h3 text-headline-h3 mb-unit-sm">AI Performance Coach</h3>
                    <p class="text-on-surface-variant text-sm mb-unit-md">Real-time coaching insights for regional
                        leadership teams.</p>
                    <p class="text-xs mb-unit-sm"><strong>Problem:</strong> Fragmented training feedback.</p>
                    <a class="text-primary font-bold text-sm inline-flex items-center gap-1" href="#">Details
                        <span class="material-symbols-outlined text-xs">arrow_forward</span></a>
                </div>
            </div>
        </section>
        <!-- Strategic Partner Section -->
        <section class="py-unit-xl bg-inverse-surface text-surface overflow-hidden">
            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="flex flex-col md:flex-row items-center justify-between gap-unit-xl">
                    <div class="max-w-xl">
                        <h2 class="font-headline-h2 text-headline-h2 mb-unit-md">Global Standard, <span
                                class="text-primary-fixed-dim">Local Knowledge.</span></h2>
                        <p class="text-surface-variant font-body-lg mb-unit-lg">Our strategic alliance with Romulus
                            Digital
                            empowers us to deliver regional capability with unparalleled technical depth while
                            maintaining
                            Indonesian delivery excellence.</p>
                        <div class="flex gap-unit-lg">
                            <div class="flex flex-col">
                                <span class="text-3xl font-bold text-tertiary-fixed">150+</span>
                                <span class="text-xs uppercase tracking-widest text-surface-variant">Experts
                                    Regionally</span>
                            </div>
                            <div class="w-px h-12 bg-outline opacity-30"></div>
                            <div class="flex flex-col">
                                <span class="text-3xl font-bold text-tertiary-fixed">24/7</span>
                                <span class="text-xs uppercase tracking-widest text-surface-variant">Support
                                    Coverage</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-surface p-unit-xl rounded-2xl border-4 border-on-secondary-fixed shadow-2xl relative">
                        <div
                            class="absolute -top-4 -left-4 bg-primary px-unit-md py-unit-xs rounded text-[10px] font-bold uppercase tracking-widest text-white">
                            Strategic Partner</div>
                        <img alt="Romulus Digital Logo" class="h-16 w-auto object-contain opacity-90"
                            src="{{ asset('assets/romulus-hitam.png') }}" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Detailed Solution Breakdown (Problem/Solution/Impact) -->
        <section class="py-unit-xl px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-xl items-center mb-unit-xl">
                <div class="order-2 md:order-1">
                    <div class="flex items-center gap-unit-sm mb-unit-sm">
                        <span class="w-8 h-1 bg-primary"></span>
                        <span class="font-label-sm text-label-sm uppercase tracking-tighter text-primary">Case
                            Spotlight</span>
                    </div>
                    <h2 class="font-headline-h2 text-headline-h2 mb-unit-md text-on-background">Enterprise HSE
                        Operations
                    </h2>
                    <div class="space-y-unit-md mb-unit-lg">
                        <div class="p-unit-md bg-surface-container-low border border-outline-variant rounded-lg">
                            <h4 class="font-bold text-on-background flex items-center gap-2 mb-1">
                                <span class="material-symbols-outlined text-error text-[20px]">warning</span> Problem
                            </h4>
                            <p class="text-sm text-on-surface-variant">Industrial safety audits were performed manually
                                on
                                paper, leading to 72-hour lag times in reporting hazards and significant non-compliance
                                risks.</p>
                        </div>
                        <div class="p-unit-md bg-surface-container border border-primary/20 rounded-lg">
                            <h4 class="font-bold text-primary flex items-center gap-2 mb-1">
                                <span class="material-symbols-outlined text-[20px]">lightbulb</span> Solution
                            </h4>
                            <p class="text-sm text-on-surface-variant">Digitized inspection workflows with real-time
                                photo
                                evidence, geo-tagging, and automated escalation protocols for critical safety breaches.
                            </p>
                        </div>
                        <div class="p-unit-md bg-tertiary-container/10 border border-tertiary/20 rounded-lg">
                            <h4 class="font-bold text-tertiary flex items-center gap-2 mb-1">
                                <span class="material-symbols-outlined text-[20px]">bolt</span> Impact
                            </h4>
                            <p class="text-sm text-on-surface-variant">Zero reporting lag, 100% compliance record
                                maintained across 12 regional sites, and a 30% drop in preventable workplace incidents.
                            </p>
                        </div>
                    </div>
                    <button
                        class="bg-primary text-on-primary px-unit-lg py-unit-md rounded-lg font-button text-button shadow-lg">Request
                        Solution Demo</button>
                </div>
                <div class="order-1 md:order-2">
                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-primary translate-x-4 translate-y-4 rounded-xl -z-10 transition-transform group-hover:translate-x-2 group-hover:translate-y-2">
                        </div>
                        <img alt="HSE App Mockup" class="rounded-xl border-2 border-on-background shadow-xl w-full"
                            data-alt="A detailed view of a mobile safety inspection application. The screen shows high-contrast forms, photo upload widgets with metadata, and a live status tracking bar in lime green. The phone is held by a professional in a clean industrial setting. The photography style is sharp, focused, and highlights the software's functional clarity against a softly blurred background."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBEMuMhs4oA9eK9UbmQnQRytSDCqQfD1XGwZs7_yRkCj31bAjyfIAolc4At7yr7tLI7WbRp53DCCsOR4pUvBPph0fTs9ewOaYD5IOiBSaCIlI6Yiny8gLYT1vxbaILxZCunlybwokv-Qw8DiCR1T9c4OehVU0h9e7PWZyoLhwW4npdDV1GcTLZu18P50hOB2er6TPuNSrRyOrdk2tGgXX7PUrirwxOiAt2710F5JxpdOI3gt66QkNvxll8y5Hz4ExD7DKFXJ-nLZsH_" />
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    @include('partials.footer')
    <!-- SideNavBar (Mobile Trigger Hidden) -->
    <div class="fixed inset-y-0 left-0 z-50 transform -translate-x-full lg:hidden bg-surface dark:bg-on-background h-full w-72 shadow-xl border-r border-outline-variant transition-transform duration-300"
        id="side-nav">
        <div class="p-unit-lg flex flex-col h-full">
            <div class="font-headline-h3 text-headline-h3 font-bold text-primary mb-1">Nakala Digital</div>
            <p class="text-[10px] uppercase text-on-surface-variant font-bold mb-unit-xl">Local Delivery, Regional
                Capability</p>
            <nav class="flex-grow space-y-unit-sm">
                <a class="flex items-center gap-unit-md p-unit-sm text-on-surface-variant hover:bg-surface-container-high rounded-lg transition-colors"
                    href="#">
                    <span class="material-symbols-outlined">home</span> Home
                </a>
                <a class="flex items-center gap-unit-md p-unit-sm bg-primary-container text-on-primary-container font-bold rounded-lg transition-colors"
                    href="#">
                    <span class="material-symbols-outlined">lightbulb</span> Solutions
                </a>
                <a class="flex items-center gap-unit-md p-unit-sm text-on-surface-variant hover:bg-surface-container-high rounded-lg transition-colors"
                    href="#">
                    <span class="material-symbols-outlined">work</span> Portfolio
                </a>
                <a class="flex items-center gap-unit-md p-unit-sm text-on-surface-variant hover:bg-surface-container-high rounded-lg transition-colors"
                    href="#">
                    <span class="material-symbols-outlined">mail</span> Contact
                </a>
            </nav>
            <button
                class="bg-primary text-on-primary w-full py-unit-md rounded-lg font-button text-button mt-auto">Discuss
                Project</button>
        </div>
    </div>
    <script>
        // Simple scroll behavior for Navbar
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header.fixed');
            if (window.scrollY > 20) {
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
