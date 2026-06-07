<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        {{ app()->getLocale() === 'en' ? 'Team & Partnership | Nakala Digital' : 'Tim & Kemitraan | Nakala Digital' }}
    </title>
    @include('partials.seo', [
        'title' =>
            app()->getLocale() === 'en'
                ? 'Team & Partnership | Nakala Digital'
                : 'Tim & Kemitraan | Nakala Digital',
        'description' =>
            app()->getLocale() === 'en'
                ? "Meet Nakala Digital's core team, with Romulus Digital as a strategic partner and trust layer for regional capability."
                : 'Kenali tim inti Nakala Digital, dengan Romulus Digital sebagai mitra strategis dan trust layer untuk kapabilitas regional.',
    ])
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&amp;display=swap" rel="stylesheet" />
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
                        "background": "#f5fafd",
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
                        "surface-bright": "#f5fafd",
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
                        "surface": "#f5fafd",
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
                        "display-lg": ["Poppins"],
                        "body-md": ["Poppins"],
                        "button": ["Poppins"],
                        "headline-h1": ["Poppins"],
                        "headline-h2": ["Poppins"],
                        "headline-h3": ["Poppins"],
                        "label-sm": ["Poppins"]
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

<body class="bg-background text-on-background">
    @include('partials.navbar')
    <main class="pt-20">
        <!-- Hero Section -->
        <section class="relative h-[614px] flex items-center overflow-hidden bg-on-background">
            <div class="absolute inset-0 z-0">
                <img class="w-full h-full object-cover opacity-30 grayscale"
                    data-alt="A professional, modern corporate leadership team collaborating in a bright, glass-walled skyscraper office. The lighting is crisp and natural, emphasizing a high-contrast aesthetic with deep shadows and brilliant highlights. The scene conveys an atmosphere of technical rigor and authoritative stability, utilizing the brand's primary cyan and midnight navy tones in the environment."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAYiQ6EWSs-v_Koo9kKVlSZqFcZHkDo9PGRA2PVOm0bs7Fw3FYndqUib3o2t1vn2_8JgWwLq6uy-bjjfqX6n5Mzy2XXC80XGnlaXgk-50WavX-yq4gIwuZzOKp_tjtOW6hmD_OpaItlNrgkDgXJN8ME4IyOb8m4hTRkSADs134S1S7x7AoscAEYgSeLBezN82-rYCJLQ9wIQDwQkNVuRSBX71QkKRT4CZDC42SE-CJBVDMI21bMCNmplDs4M1KqPqjPIzgNAtPu7Q1T" />
            </div>
            <div class="relative z-10 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto w-full">
                <div class="max-w-3xl">
                    <span
                        class="inline-block bg-tertiary-fixed text-on-tertiary-fixed px-unit-md py-1 rounded-sm font-label-sm text-label-sm uppercase mb-unit-md">{{ app()->getLocale() === 'en' ? 'Team & Partnership' : 'Tim & Kemitraan' }}</span>
                    <h1 class="font-headline-h1 text-headline-h1 text-on-primary mb-unit-lg leading-tight">
                        {{ app()->getLocale() === 'en' ? 'Core Team Nakala,' : 'Tim inti Nakala,' }}
                        <span
                            class="text-primary-fixed-dim">{{ app()->getLocale() === 'en' ? 'strengthened by Romulus Digital.' : 'diperkuat oleh Romulus Digital.' }}</span>
                    </h1>
                    <p class="font-body-lg text-body-lg text-surface-variant max-w-xl">
                        {{ app()->getLocale() === 'en'
                            ? 'Nakala remains the primary delivery partner for every client engagement. Romulus Digital supports as a strategic trust layer, bringing regional credibility, reference, and capability when the work needs additional scale.'
                            : 'Nakala tetap menjadi partner utama dalam setiap engagement klien. Romulus Digital mendukung sebagai trust layer strategis yang memberi kredibilitas, referensi, dan kapabilitas regional saat pekerjaan membutuhkan skala tambahan.' }}
                    </p>
                </div>
            </div>
        </section>
        <!-- Team Grid -->
        <section class="py-unit-xl px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="max-w-3xl mb-unit-lg">
                <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary">
                    {{ app()->getLocale() === 'en' ? 'Nakala Primary' : 'Nakala Primary' }}
                </span>
                <h2 class="font-headline-h2 text-headline-h2 text-on-background mt-unit-sm mb-unit-md">
                    {{ app()->getLocale() === 'en' ? 'Core Team Nakala' : 'Tim Inti Nakala' }}
                </h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant">
                    {{ app()->getLocale() === 'en'
                        ? 'Every project is led by Nakala Digital as the accountable, client-facing team. Our strategic partner strengthens confidence in the background without changing who owns the relationship.'
                        : 'Setiap proyek dipimpin oleh Nakala Digital sebagai tim utama yang akuntabel dan berhadapan langsung dengan klien. Mitra strategis kami memperkuat keyakinan di belakang layar tanpa mengubah siapa yang memegang relasi utama.' }}
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                <!-- CEO -->
                <div
                    class="group bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="aspect-square relative overflow-hidden">
                        <img alt="Milzam Zihni"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                            src="{{ asset('assets/team/milzam.jpeg') }}" />
                        <div class="absolute top-0 left-0 w-1 h-full bg-primary-container"></div>
                    </div>
                    <div class="p-unit-lg">
                        <p class="text-primary font-label-sm text-label-sm uppercase mb-unit-xs tracking-widest">CEO</p>
                        <h3 class="font-headline-h3 text-headline-h3 mb-unit-md text-on-background">Milzam Zihni</h3>
                        <div class="space-y-unit-sm">
                            <div
                                class="flex items-center gap-unit-sm text-on-surface-variant font-body-md text-body-md">
                                <span class="material-symbols-outlined text-primary"
                                    style="font-variation-settings: 'FILL' 1;">handshake</span>
                                <span>{{ app()->getLocale() === 'en' ? 'Client Engagement' : 'Engagement Klien' }}</span>
                            </div>
                            <div
                                class="flex items-center gap-unit-sm text-on-surface-variant font-body-md text-body-md">
                                <span class="material-symbols-outlined text-primary"
                                    style="font-variation-settings: 'FILL' 1;">verified</span>
                                <span>{{ app()->getLocale() === 'en' ? 'Quality Assurance' : 'Quality Assurance' }}</span>
                            </div>
                            <div
                                class="flex items-center gap-unit-sm text-on-surface-variant font-body-md text-body-md">
                                <span class="material-symbols-outlined text-primary"
                                    style="font-variation-settings: 'FILL' 1;">task_alt</span>
                                <span>{{ app()->getLocale() === 'en' ? 'Project Delivery' : 'Delivery Proyek' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CTO -->
                <div
                    class="group bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="aspect-square relative overflow-hidden">
                        <div
                            class="flex h-full w-full items-center justify-center bg-surface-container-low text-primary">
                            <div
                                class="flex h-24 w-24 items-center justify-center rounded-full border border-outline-variant bg-surface-container-lowest">
                                <span class="material-symbols-outlined text-5xl">person</span>
                            </div>
                        </div>
                        <div class="absolute top-0 left-0 w-1 h-full bg-primary-container"></div>
                    </div>
                    <div class="p-unit-lg">
                        <p class="text-primary font-label-sm text-label-sm uppercase mb-unit-xs tracking-widest">CTO</p>
                        <h3 class="font-headline-h3 text-headline-h3 mb-unit-md text-on-background">Rinaldy Pasya</h3>
                        <div class="space-y-unit-sm">
                            <div
                                class="flex items-center gap-unit-sm text-on-surface-variant font-body-md text-body-md">
                                <span class="material-symbols-outlined text-primary"
                                    style="font-variation-settings: 'FILL' 1;">architecture</span>
                                <span>{{ app()->getLocale() === 'en' ? 'Tech Architecture' : 'Arsitektur Teknologi' }}</span>
                            </div>
                            <div
                                class="flex items-center gap-unit-sm text-on-surface-variant font-body-md text-body-md">
                                <span class="material-symbols-outlined text-primary"
                                    style="font-variation-settings: 'FILL' 1;">terminal</span>
                                <span>{{ app()->getLocale() === 'en' ? 'Engineering Excellence' : 'Keunggulan Engineering' }}</span>
                            </div>
                            <div
                                class="flex items-center gap-unit-sm text-on-surface-variant font-body-md text-body-md">
                                <span class="material-symbols-outlined text-primary"
                                    style="font-variation-settings: 'FILL' 1;">speed</span>
                                <span>{{ app()->getLocale() === 'en' ? 'System Scalability' : 'Skalabilitas Sistem' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COO -->
                <div
                    class="group bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="aspect-square relative overflow-hidden">
                        <img alt="Raul Mahya Komaran"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                            src="{{ asset('assets/team/raul.jpeg') }}" />
                        <div class="absolute top-0 left-0 w-1 h-full bg-primary-container"></div>
                    </div>
                    <div class="p-unit-lg">
                        <p class="text-primary font-label-sm text-label-sm uppercase mb-unit-xs tracking-widest">COO</p>
                        <h3 class="font-headline-h3 text-headline-h3 mb-unit-md text-on-background">Raul Mahya Komaran
                        </h3>
                        <div class="space-y-unit-sm">
                            <div
                                class="flex items-center gap-unit-sm text-on-surface-variant font-body-md text-body-md">
                                <span class="material-symbols-outlined text-primary"
                                    style="font-variation-settings: 'FILL' 1;">settings_suggest</span>
                                <span>{{ app()->getLocale() === 'en' ? 'Operational Strategy' : 'Strategi Operasional' }}</span>
                            </div>
                            <div
                                class="flex items-center gap-unit-sm text-on-surface-variant font-body-md text-body-md">
                                <span class="material-symbols-outlined text-primary"
                                    style="font-variation-settings: 'FILL' 1;">groups_2</span>
                                <span>{{ app()->getLocale() === 'en' ? 'Stakeholder Follow-up' : 'Tindak Lanjut Stakeholder' }}</span>
                            </div>
                            <div
                                class="flex items-center gap-unit-sm text-on-surface-variant font-body-md text-body-md">
                                <span class="material-symbols-outlined text-primary"
                                    style="font-variation-settings: 'FILL' 1;">description</span>
                                <span>{{ app()->getLocale() === 'en' ? 'Documentation & Compliance' : 'Dokumentasi & Kepatuhan' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Scalable Team Model Section -->
        <section class="py-unit-xl bg-inverse-surface text-surface">
            <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
                <div class="flex flex-col lg:flex-row items-center gap-unit-xl">
                    <div class="w-full lg:w-1/2">
                        <div
                            class="bg-surface-container-lowest/10 p-unit-lg border border-surface-variant/20 rounded-xl backdrop-blur-sm">
                            <h2 class="font-headline-h2 text-headline-h2 mb-unit-lg text-primary-fixed-dim">
                                {{ app()->getLocale() === 'en' ? 'Nakala leads delivery. Romulus strengthens trust.' : 'Nakala memimpin delivery. Romulus memperkuat trust.' }}
                            </h2>
                            <p class="font-body-lg text-body-lg text-surface-variant mb-unit-lg">
                                {{ app()->getLocale() === 'en'
                                    ? 'This partnership model keeps accountability clear: Nakala is the primary team your project works with day to day, while Romulus Digital acts as a strategic partner behind the scenes for regional insight, technical confidence, and additional specialist access.'
                                    : 'Model kemitraan ini menjaga akuntabilitas tetap jelas: Nakala adalah tim utama yang bekerja langsung dengan proyek Anda setiap hari, sementara Romulus Digital berperan sebagai mitra strategis di belakang layar untuk insight regional, keyakinan teknis, dan akses spesialis tambahan.' }}
                            </p>
                            <div class="grid grid-cols-2 gap-unit-md">
                                <div
                                    class="flex min-h-[120px] items-center bg-surface/5 p-unit-md border-l-4 border-tertiary">
                                    <div class="rounded-lg bg-white px-4 py-3 ring-1 ring-white/20">
                                        <img alt="Nakala Digital"
                                            class="h-10 md:h-12 w-auto object-contain"
                                            src="{{ asset('assets/logo-nakala.png') }}" />
                                    </div>
                                </div>
                                <div
                                    class="flex min-h-[120px] items-center bg-surface/5 p-unit-md border-l-4 border-primary-fixed-dim">
                                    <img alt="Romulus Digital"
                                        class="h-10 md:h-12 w-auto object-contain"
                                        src="{{ asset('assets/romulus-putih.png') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <div class="relative rounded-lg overflow-hidden border border-outline shadow-2xl">
                            <img class="w-full h-full object-cover"
                                data-alt="A clean, minimalist abstract visualization representing a network of interconnected nodes across a regional map of Southeast Asia. The design uses high-contrast white lines on a deep navy background, with Electric Cyan highlights marking key hubs. The overall aesthetic is professional, technical, and modern, reflecting a scalable corporate resource model."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB47IQhwnQ_73ET9EOURjZQvNJ6YnkHUzF_sJxGQ1KPmB0cGMLjojD0IAAJtGTSYs0xl_qcmH3TyKZGCKPcEJfGBMzNxWAYWEdHIac5t0Bp8X0BKRcIpQmRrsna6yksO6lUeUut8hBTV7RVhzO6XCRLlbyk1YJvbAGz2rXdlqp7XkQ2oZCpDwRfSBImRmxU_WeiI9UCRO850c-OkCRV_blyiudN1Bji8I3z3EROaS2bMQg0Wee6O9acOQjf0XHwF_glAuUyttJDVCmh" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Romulus Strategic Partner Badge -->
        <section class="bg-[#031A44] py-unit-lg border-y border-white/10 relative overflow-hidden">
            <!-- Decorative gradient -->
            <div class="absolute inset-0 bg-gradient-to-r from-primary/20 to-transparent opacity-30"></div>

            <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto flex flex-col md:flex-row items-center justify-center gap-6 md:gap-10 relative z-10">
                <div class="text-center md:text-right">
                    <span class="font-label-sm text-[#A7F432] tracking-[0.2em] uppercase">
                        {{ app()->getLocale() === 'en' ? 'Strategic Partner & Trust Layer' : 'Mitra Strategis & Trust Layer' }}
                    </span>
                    <p class="mt-2 max-w-sm text-sm leading-relaxed text-white/70">
                        {{ app()->getLocale() === 'en'
                            ? 'Nakala Digital remains primary. Romulus Digital reinforces regional confidence.'
                            : 'Nakala Digital tetap primary. Romulus Digital memperkuat kepercayaan regional.' }}
                    </p>
                </div>

                <!-- Desktop Divider Line -->
                <div class="hidden md:block w-px h-10 md:h-12 bg-white/20"></div>

                <!-- Logo Area -->
                <div class="flex items-center justify-center group">
                    <img alt="Romulus Digital Logo"
                        class="h-12 md:h-14 object-contain opacity-60 group-hover:opacity-100 group-hover:scale-105 transition-all duration-300"
                        style="filter: brightness(0) invert(1);"
                        src="{{ asset('assets/romulus-hitam.png') }}" />
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    @include('partials.footer')
    <script>
        // Micro-interaction for scroll effects
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header.fixed');
            if (window.scrollY > 50) {
                header.classList.add('py-2', 'shadow-md', 'h-16');
                header.classList.remove('h-20');
            } else {
                header.classList.remove('py-2', 'shadow-md', 'h-16');
                header.classList.add('h-20');
            }
        });

        // Hover animation for team cards handled by Tailwind group-hover
    </script>
</body>

</html>
