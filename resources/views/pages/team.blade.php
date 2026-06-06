<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        {{ app()->getLocale() === 'en' ? 'Team & Leadership | Nakala Digital' : 'Tim & Kepemimpinan | Nakala Digital' }}
    </title>
    @include('partials.seo', [
        'title' =>
            app()->getLocale() === 'en'
                ? 'Team & Leadership | Nakala Digital'
                : 'Tim & Kepemimpinan | Nakala Digital',
        'description' =>
            app()->getLocale() === 'en'
                ? 'Meet Nakala Digital leadership and our scalable local core team backed by regional capability.'
                : 'Kenali pemimpin Nakala Digital dan model tim inti lokal yang didukung kapabilitas regional.',
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
                        class="inline-block bg-tertiary-fixed text-on-tertiary-fixed px-unit-md py-1 rounded-sm font-label-sm text-label-sm uppercase mb-unit-md">{{ app()->getLocale() === 'en' ? 'Leadership' : 'Kepemimpinan' }}</span>
                    <h1 class="font-headline-h1 text-headline-h1 text-on-primary mb-unit-lg leading-tight">
                        {{ app()->getLocale() === 'en' ? 'Led by a core team focused on' : 'Dipimpin oleh tim inti yang fokus pada' }}
                        <span
                            class="text-primary-fixed-dim">{{ app()->getLocale() === 'en' ? 'delivery and client success.' : 'delivery dan keberhasilan klien.' }}</span>
                    </h1>
                    <p class="font-body-lg text-body-lg text-surface-variant max-w-xl">
                        {{ app()->getLocale() === 'en'
                            ? 'Our leadership bridges the gap between ambitious Indonesian digital transformations and regional excellence through technical rigor.'
                            : 'Kepemimpinan kami menjembatani transformasi digital Indonesia yang ambisius dengan standar keunggulan regional melalui ketelitian teknis.' }}
                    </p>
                </div>
            </div>
        </section>
        <!-- Team Grid -->
        <section class="py-unit-xl px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                <!-- CEO -->
                <div
                    class="group bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="aspect-square relative overflow-hidden">
                        <img alt="Milzam Zihni"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFAsfsa6P1YYclmp7aF-GpRB-04AotnuSYhuc9f1J2G-aLKx9XO9m4YKmUn6sFhoinSGTCN-8p8tl4zcJ-ouW6vrgx2iK27KUV5nsr9Schd-E8sR_pu3GicLs3wCPluIT1Lp6g-17MbFONWNpFQLBOaMBwThZuXkZcXRX7reRhWbrRKXe81eESGSdNlWTI8wj_rPvJ_NywnEaUB43yoWMcjY7cE-UJv7F7EgY6NSZ_nHcilCGHxZsjHvz-cqrL_G_QmwHF7NZW9GG7" />
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
                        <img alt="Rinaldy Pasya"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDiFKP1OJ8jf5cPc5w3S1VUe3cuCgYIXOSNJP6KdNjWFaC-UWj2MhmO-H1nRVWW4PxEjgj-BcoziYiJjj1eMM4hJcN7cYcuNi42ycmznAcLGd3txgp2FavENE2zNwP9oK3fI0pKI1IsqND0mcTwZjP0KI94_ltLp_Ns5YD-S9Ixbv2l1AIan3NnpiM5HRRQctk0ahLB4IpBNP7LKuwJDlKm9zj7ZVpCEmPO6o5m_R1NuPn_wd1D2e93Ca2fD_N2w6H3LG8vwIs7tpoW" />
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
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDImAaxRi9mPzOXVVCwBbXw7hk8WpHOqYuPYwBcrOKm7r5tBwOoKDOLkHZ7I88EzGIcoPgalcuB5qwtkWIH4sQCabFwHx1xjVHhQC5YpXeqNc5CjJH_n6xwV7IC-kvujctxgGzOAjOYehlGzJaISbItDsrXKjKKjTBV79Sh20VQM5_gSrDVd9pptkz_3NPb26fZbiLVIcQNYhhAbdOET0PRXaBWOyFUnAI_UN3AMX8nya_fBioyjTWhyRacIyZAwy0aJ7ouc6i3HzSc" />
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
                                {{ app()->getLocale() === 'en' ? 'Local core team with regional resource activation.' : 'Tim inti lokal dengan aktivasi resource regional.' }}
                            </h2>
                            <p class="font-body-lg text-body-lg text-surface-variant mb-unit-lg">
                                {{ app()->getLocale() === 'en'
                                    ? 'We combine the deep cultural context of a local Indonesian presence with the immense scalability of a regional resource network. Our model ensures you get personalized attention from the core leadership while having access to a specialized talent pool for complex deployments.'
                                    : 'Kami menggabungkan konteks lokal Indonesia yang kuat dengan skalabilitas jaringan resource regional. Model ini memastikan Anda mendapat perhatian langsung dari leadership inti sekaligus akses ke talenta spesialis untuk deployment yang kompleks.' }}
                            </p>
                            <div class="grid grid-cols-2 gap-unit-md">
                                <div class="bg-surface/5 p-unit-md border-l-4 border-tertiary">
                                    <p class="font-headline-h3 text-headline-h3 text-white">100%</p>
                                    <p class="font-label-sm text-label-sm uppercase text-surface-variant">
                                        {{ app()->getLocale() === 'en' ? 'Local Core Focus' : 'Fokus Tim Inti Lokal' }}
                                    </p>
                                </div>
                                <div class="bg-surface/5 p-unit-md border-l-4 border-primary-fixed-dim">
                                    <p class="font-headline-h3 text-headline-h3 text-white">
                                        {{ app()->getLocale() === 'en' ? 'Flexible Scale' : 'Skala Fleksibel' }}
                                    </p>
                                    <p class="font-label-sm text-label-sm uppercase text-surface-variant">
                                        {{ app()->getLocale() === 'en' ? 'Regional Network' : 'Jaringan Regional' }}
                                    </p>
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
        <section class="py-unit-lg bg-surface-container-low border-y border-outline-variant">
            <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto flex flex-col items-center">
                <span
                    class="font-label-sm text-label-sm uppercase text-on-surface-variant mb-unit-sm tracking-widest">{{ app()->getLocale() === 'en' ? 'Our Strategic Regional Partner' : 'Mitra Regional Strategis Kami' }}</span>
                <div class="flex items-center justify-center bg-inverse-surface p-unit-md rounded-xl">
                    <img alt="Romulus Digital Logo" class="h-12 w-auto object-contain bg-white rounded-md p-2"
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
