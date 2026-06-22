<!DOCTYPE html>

<html class="scroll-smooth" lang="{{ app()->getLocale() }}"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>{{ app()->getLocale() === 'en' ? 'Services | Nakala Digital' : 'Layanan | Nakala Digital' }}</title>
@include('partials.seo', [
    'title' => app()->getLocale() === 'en' ? 'Services | Nakala Digital' : 'Layanan | Nakala Digital',
    'description' => app()->getLocale() === 'en' 
        ? 'Discover our high-tier software development, custom AI models, cloud infrastructure, and tech advisory services.' 
        : 'Temukan pengembangan perangkat lunak tingkat tinggi, model AI kustom, infrastruktur cloud, dan layanan penasihat teknologi kami.'
])
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                        "display-lg-mobile": ["48px", {"lineHeight": "1.1", "fontWeight": "700"}],
                        "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "button": ["15px", {"lineHeight": "1.0", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "headline-h1-mobile": ["36px", {"lineHeight": "1.2", "fontWeight": "700"}],
                        "headline-h2": ["40px", {"lineHeight": "1.3", "fontWeight": "600"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "headline-h2-mobile": ["28px", {"lineHeight": "1.3", "fontWeight": "600"}],
                        "headline-h1": ["56px", {"lineHeight": "1.2", "fontWeight": "700"}],
                        "headline-h3": ["24px", {"lineHeight": "1.4", "fontWeight": "600"}],
                        "display-lg": ["72px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "label-sm": ["12px", {"lineHeight": "1.0", "fontWeight": "700"}]
                    }
                },
            },
        }
    </script>
<style>
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }
        .service-card {
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .service-card:hover {
            transform: translateY(-8px);
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md selection:bg-primary-container selection:text-on-primary-container">
@include('partials.navbar')
<!-- Hero Section -->
<header class="relative pt-32 pb-unit-xl overflow-hidden">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="grid lg:grid-cols-2 gap-gutter items-center">
<div class="z-10">
<div class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-4 py-1.5 rounded-full font-label-sm text-label-sm uppercase tracking-widest mb-6">
<span class="material-symbols-outlined text-[16px]">bolt</span>
{{ app()->getLocale() === 'en' ? 'Service Pillar' : 'Service Pillar' }}
</div>
<h1 class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-on-background mb-6 leading-tight">
                        {{ app()->getLocale() === 'en' ? 'Technology services for' : 'Layanan teknologi untuk' }} <span class="text-primary">{{ app()->getLocale() === 'en' ? 'modern business needs.' : 'kebutuhan bisnis modern.' }}</span>
</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-unit-lg max-w-xl">
                        {{ app()->getLocale() === 'en'
                            ? 'Bridging local Indonesian context with regional software development expertise to accelerate your digital transformation journey.'
                            : 'Menjembatani konteks lokal Indonesia dengan keahlian pengembangan perangkat lunak regional untuk mempercepat perjalanan transformasi digital Anda.' }}
                    </p>
<div class="flex flex-wrap gap-4">
@php $localeSuffix = app()->getLocale() === 'en' ? '.en' : ''; @endphp
<a href="{{ route('solutions' . $localeSuffix) }}" class="inline-flex items-center justify-center bg-primary text-white px-8 py-4 rounded-lg font-button text-button uppercase tracking-widest gap-2">
                            {{ app()->getLocale() === 'en' ? 'Explore Solutions' : 'Jelajahi Solusi' }}
                            <span class="material-symbols-outlined">arrow_forward</span>
</a>
</div>
</div>
<div class="relative mt-12 lg:mt-0">
<div class="absolute -top-10 -right-10 w-64 h-64 bg-primary/10 rounded-full blur-3xl"></div>
<div class="relative rounded-xl overflow-hidden border-2 border-outline-variant shadow-2xl">
<img alt="Strategic Roadmap" class="w-full h-auto object-cover" data-alt="A professional enterprise dashboard interface showing complex digital transformation roadmaps and technical architectures. The visual style is high-contrast with a midnight navy background and vibrant impact lime accents. The interface includes interactive gantt charts, KPI metrics, and system health status indicators, glowing softly against a dark, minimalist digital workspace background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBtRUftF0rI-CVIPCyxjoSYszWuTSBLLg6xy-DYz4UO-0utBeXCW0m8_qqBw30K3sdSaJ4lhUd_rFYcG7SUOsyXI3JSfuj3d-g_Bwjohi07wdbzEz0xZJUM4ZPnF8G7BS1-NRXLEq0UnATqZ6ZVx5Dxss6tdRWtFWD0LMczPvS6B9E9zBKmXxlSiDQjoiqpMPUf1WfmfwX0lFtE1i8cKdHiz0Kce57z3MUFe6RYmqeHH4LXCHch1gM7uEM3nvECcGNTpuQxRyVC9Eyq"/>
</div>
</div>
</div>
</div>
</header>
<!-- Service Pillars Section -->
<section class="py-unit-xl bg-surface-container-lowest">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="text-center mb-unit-xl">
<h2 class="font-headline-h2-mobile md:font-headline-h2 text-headline-h2-mobile md:text-headline-h2 mb-4">{{ app()->getLocale() === 'en' ? 'Our Service Pillars' : 'Pilar Layanan Kami' }}</h2>
<div class="w-24 h-1.5 bg-primary mx-auto mb-6"></div>
<p class="max-w-2xl mx-auto font-body-lg text-body-lg text-on-surface-variant">
    {{ app()->getLocale() === 'en' 
        ? 'Comprehensive technical capabilities designed for enterprise scale and local agility.' 
        : 'Kemampuan teknis komprehensif yang dirancang untuk skala perusahaan dan kelincahan lokal.' }}
</p>
</div>
<!-- Bento Grid Services -->
<div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-gutter">
<!-- 1. AI & GenAI -->
<div class="md:col-span-3 lg:col-span-4 bg-white border border-outline-variant p-unit-lg service-card border-t-4 border-t-primary">
<span class="material-symbols-outlined text-primary text-5xl mb-6" data-icon="psychology" style="font-variation-settings: 'FILL' 1;">psychology</span>
<h3 class="font-headline-h3 text-headline-h3 mb-4">AI &amp; GenAI</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-6">Implementing state-of-the-art Generative AI for operational efficiency and automated customer engagement.</p>
<ul class="space-y-3 font-label-sm text-label-sm text-primary uppercase tracking-wider">
<li class="flex items-center gap-2"><span class="material-symbols-outlined scale-75">check_circle</span> {{ app()->getLocale() === 'en' ? 'Custom AI Model Development' : 'Kustomisasi Model AI' }}</li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined scale-75">check_circle</span> {{ app()->getLocale() === 'en' ? 'Business Process Automation' : 'Otomasi Proses Bisnis' }}</li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined scale-75">check_circle</span> {{ app()->getLocale() === 'en' ? 'Predictive Analytics' : 'Analitik Prediktif' }}</li>
</ul>
</div>
<!-- 2. Custom Software Dev -->
<div class="md:col-span-3 lg:col-span-8 bg-on-secondary-fixed text-white p-unit-lg service-card flex flex-col md:flex-row gap-gutter">
<div class="flex-1">
<span class="material-symbols-outlined text-tertiary-fixed text-5xl mb-6" data-icon="code">code</span>
<h3 class="font-headline-h3 text-headline-h3 mb-4">Custom Software Dev</h3>
<p class="font-body-md text-body-md text-surface-variant mb-6">Bespoke software solutions crafted for unique business processes and high-performance requirements.</p>
<ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 font-label-sm text-label-sm text-tertiary-fixed uppercase tracking-wider">
<li class="flex items-center gap-2"><span class="material-symbols-outlined scale-75">check_circle</span> {{ app()->getLocale() === 'en' ? 'Enterprise Applications' : 'Aplikasi Enterprise' }}</li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined scale-75">check_circle</span> {{ app()->getLocale() === 'en' ? 'Scalable Platform Architecture' : 'Sistem Terukur' }}</li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined scale-75">check_circle</span> {{ app()->getLocale() === 'en' ? 'System Modernization' : 'Modernisasi Sistem' }}</li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined scale-75">check_circle</span> {{ app()->getLocale() === 'en' ? 'Cloud Integration' : 'Integrasi Cloud' }}</li>
</ul>
</div>
<div class="w-full md:w-1/3 bg-white/5 rounded-lg overflow-hidden border border-white/10 hidden lg:block">
<img class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all" data-alt="A futuristic software development environment with multiple high-resolution monitors displaying complex lines of code and dark-themed UI mockups. The room is dimly lit with a professional midnight navy ambiance and neon blue accents highlighting the workspace. A high-tier workstation sits at the center, symbolizing technical rigor and precision craftsmanship in modern corporate software engineering." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgYS2YWTvwWHj4QFP28CssIPWEpvrgnPcgAF9hFVibVwA-gh3A3L5RgeltvRgoBStWyfvtsLZ3XtJ0uotY0jjB25-_bjmLmt3p_8It06RMYUzopoC0UeaxvL9LqmeTiBR8nc0YFFK3JifErMagfxj1EkMH8DhaJiuf154Ed4kp0XwEQ3Up1zBXkshsOLsYIOnBz9BI6SIwZegE5C8GqkZIkJp5cvTOwSaJC9Y_CdAgP_PH-DXqN3_Ui-zxqY-5HFoFOmltnkTKu1kf"/>
</div>
</div>
<!-- 3. Tech Consulting -->
<div class="md:col-span-6 lg:col-span-6 bg-white border border-outline-variant p-unit-lg service-card">
<div class="flex items-start justify-between mb-6">
<span class="material-symbols-outlined text-primary text-5xl" data-icon="query_stats">query_stats</span>
<span class="bg-primary-container/10 text-primary px-3 py-1 rounded font-label-sm text-label-sm">CONSULTANCY</span>
</div>
<h3 class="font-headline-h3 text-headline-h3 mb-4">Tech Consulting</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-6">Strategic advice to align technology investment with business growth and regional market expansion.</p>
<div class="grid grid-cols-2 gap-4">
<div class="p-4 bg-surface-container rounded-lg">
<h4 class="font-bold text-on-surface mb-1">Architecture Review</h4>
<p class="text-xs text-on-surface-variant">System audits and scalability assessments.</p>
</div>
<div class="p-4 bg-surface-container rounded-lg">
<h4 class="font-bold text-on-surface mb-1">Digital Roadmap</h4>
<p class="text-xs text-on-surface-variant">Phased transformation strategy.</p>
</div>
</div>
</div>
<!-- 4. Web & Portal -->
<div class="md:col-span-3 lg:col-span-3 bg-white border border-outline-variant p-unit-lg service-card border-t-4 border-t-tertiary">
<span class="material-symbols-outlined text-tertiary text-5xl mb-6" data-icon="web">web</span>
<h3 class="font-headline-h3 text-headline-h3 mb-4">Web &amp; Portal</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Engaging digital interfaces and high-traffic portals for B2B and B2C segments.</p>
</div>
<!-- 5. QA Governance -->
<div class="md:col-span-3 lg:col-span-3 bg-white border border-outline-variant p-unit-lg service-card border-t-4 border-t-primary">
<span class="material-symbols-outlined text-primary text-5xl mb-6" data-icon="verified_user" style="font-variation-settings: 'FILL' 1;">verified_user</span>
<h3 class="font-headline-h3 text-headline-h3 mb-4">QA Governance</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Ensuring zero-defect deployment with automated testing frameworks and standards.</p>
</div>
<!-- 6. Managed Support & D365 -->
<div class="md:col-span-6 lg:col-span-12 bg-surface-container-highest border border-outline-variant p-unit-lg service-card flex flex-col md:flex-row items-center gap-unit-lg">
<div class="flex-1">
<span class="material-symbols-outlined text-primary text-5xl mb-6" data-icon="support_agent">support_agent</span>
<h3 class="font-headline-h3 text-headline-h3 mb-4">Managed Support &amp; Dynamics 365</h3>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-6">End-to-end management of Microsoft D365 ecosystems and 24/7 technical support operations.</p>
<div class="flex flex-wrap gap-3">
<span class="px-4 py-2 bg-white border border-outline-variant font-label-sm text-label-sm rounded uppercase">L1/L2/L3 Support</span>
<span class="px-4 py-2 bg-white border border-outline-variant font-label-sm text-label-sm rounded uppercase">D365 Implementation</span>
<span class="px-4 py-2 bg-white border border-outline-variant font-label-sm text-label-sm rounded uppercase">Cloud Migration</span>
<span class="px-4 py-2 bg-white border border-outline-variant font-label-sm text-label-sm rounded uppercase">24/7 Monitoring</span>
</div>
</div>
<div class="w-full md:w-1/4 aspect-square bg-primary p-6 rounded-xl flex flex-col justify-center items-center text-center text-white">
<div class="text-4xl font-bold mb-2">{{ app()->getLocale() === 'en' ? 'SLA' : 'SLA' }}</div>
<div class="text-sm font-label-sm uppercase tracking-widest opacity-80">{{ app()->getLocale() === 'en' ? 'Flexible SLAs' : 'SLA Fleksibel' }}</div>
</div>
</div>
</div>
</div>
</section>
<!-- Partner Badge Section -->
@include('partials.partner-badge')
<!-- Detailed Deliverables (Horizontal Scroll / Grid) -->
<section class="py-unit-xl overflow-hidden">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<h2 class="font-headline-h2 mb-unit-lg">Regional Service Excellence</h2>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
<div class="space-y-6">
<h4 class="font-headline-h3 border-l-4 border-primary pl-4">Custom AI Models</h4>
<p class="text-on-surface-variant">Building proprietary neural networks tailored to Indonesian linguistic nuances and consumer behavior patterns.</p>
<img class="w-full rounded-lg" data-alt="A clean, minimalist 3D rendering of a human brain silhouette constructed from glowing cyan fiber optic lines. The background is a crisp, sterile white, reflecting a light-mode modern aesthetic. Tiny particles of impact lime energy orbit the brain, symbolizing active generative AI and neural processing. The overall mood is sophisticated, technical, and visionary." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCnZsssdKLtkzueklGWdgMkw8L8KeHqUg-gs2up5aCh-gt1jvoqkvF_vHFYNm52kSdE_ZevSbKBpTmZKvChiwlxSfgxWcbWQBc4r0URNxka1X4pemelt9wLZFLCKVNEFVaz-F0z8atrHX7BPMv92OesIifP4KZHxihIM6Vh6WP3JcJh-KzYyUVDmN80h2wl1p3v4uzEVUxRorP99-UY1sMMUpI5eYF_HHAB870yoXwOR-lQcSJrCtTI5Z48V_xhcjUt1IewyfDEs-Tq"/>
</div>
<div class="space-y-6">
<h4 class="font-headline-h3 border-l-4 border-tertiary pl-4">Enterprise Portals</h4>
<p class="text-on-surface-variant">Secure, scalable, and localized portals for regional logistics and distribution networks across Southeast Asia.</p>
<img class="w-full rounded-lg" data-alt="An isometric technical illustration of a global logistics network with interconnected shipping nodes and digital data streams. The design uses a bold, high-contrast palette of impact lime and midnight navy. Glowing lines connect various stylized cityscapes, representing regional delivery capabilities and digital connectivity in a professional corporate environment." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAa-AXleTxxk8ZxGeWyDmtGbin_jeBfaYYtL7Wcn_Sed-H_MlzBcd0nfRfkVN1tLvUXOj259b0w__xuNiznSt5qU2HrVuv-5wkvki-blo_4dadmHDZkw8mAo0QJW59snMpIcWYRp49NWYI2zX-vjpP0YDf03Huzn9lWfNGa84P7CZO05bq4d6HdD2PClw54CU1LYpG2btXA7zZ7Jwn6J7CiQMW0BVdbhzJyPX9TlTmw0n9LPDImoXXFYhxtLkfDlYPWefMAaJagYDVX"/>
</div>
<div class="space-y-6">
<h4 class="font-headline-h3 border-l-4 border-secondary pl-4">Legacy Overhaul</h4>
<p class="text-on-surface-variant">Seamlessly transitioning monolithic systems to agile microservices without disrupting local operations.</p>
<img class="w-full rounded-lg" data-alt="A conceptual visualization of digital transformation showing a crumbling grey stone structure being replaced by vibrant, glowing cyan geometric cubes. The lighting is high-key with soft shadows on a light grey background. The image represents the transition from legacy systems to modern, cloud-native architecture with a focus on technical reliability and modern corporate aesthetics." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBAOKFDTr6_voBBypZAFlVCxl67lbWO_ePQbX9a5bzWzPiT4fArb1YcGWOAIRZ6bKLN4lphcP0pYATRd6GTPm15fU31NqK04GavdGbvXYPwg6m7lEAldkmFPPrmLBMOFp3KZSpZClOMQdFdhCNK3iXoQb6OPXxXNwiaIVm-xo5IgrVMWJSlw5zzFfu4h5ixORnphUHULOTnyOF5TLHT5Ahp_1i0ky1gqOU5aVDFftYMNqdQIM11yROe0oVCY0PBazdhzkjWveX3deKd"/>
</div>
</div>
</div>
</section>
<!-- Footer -->
@include('partials.footer')
<script>
        // Micro-interactions
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                const icon = card.querySelector('.material-symbols-outlined');
                if(icon) {
                    icon.style.transform = 'scale(1.1) rotate(5deg)';
                    icon.style.transition = 'transform 0.3s ease';
                }
            });
            card.addEventListener('mouseleave', () => {
                const icon = card.querySelector('.material-symbols-outlined');
                if(icon) {
                    icon.style.transform = 'scale(1) rotate(0deg)';
                }
            });
        });

        // Simple scroll behavior for Navbar
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
    </script>
</body></html>
