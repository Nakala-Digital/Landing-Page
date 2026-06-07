<!DOCTYPE html>

<html class="light" lang="{{ app()->getLocale() }}"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>{{ app()->getLocale() === 'en' ? 'About Us | Nakala Digital' : 'Tentang Kami | Nakala Digital' }}</title>
@include('partials.seo', [
    'title' => app()->getLocale() === 'en' ? 'About Us | Nakala Digital' : 'Tentang Kami | Nakala Digital',
    'description' => app()->getLocale() === 'en' 
        ? 'Learn more about Nakala Digital, our vision, mission, and strategic regional partnership with Romulus Digital.' 
        : 'Pelajari lebih lanjut tentang Nakala Digital, visi, misi, dan kemitraan regional strategis kami bersama Romulus Digital.'
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
          colors: {
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
          borderRadius: {
            DEFAULT: "4px",
            lg: "8px",
            xl: "12px",
            "2xl": "24px",
            full: "9999px"
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
        body { font-family: 'Poppins', sans-serif; background-color: #F7FAFC; color: #334155; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .active-nav { border-bottom: 2px solid #00677d; padding-bottom: 4px; color: #00677d; }
    </style>
</head>
<body class="overflow-x-hidden">
@include('partials.navbar')
<!-- Hero Section -->
<header class="pt-unit-xl mt-20 relative bg-surface overflow-hidden">
<div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto py-unit-xl grid grid-cols-1 md:grid-cols-2 gap-gutter items-center">
<div class="space-y-unit-md z-10">
<div class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-4 py-1.5 rounded-full font-label-sm text-label-sm uppercase tracking-widest">
<span class="material-symbols-outlined text-[16px]">bolt</span>
About Us
</div>
<h1 class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-on-surface tracking-tight">
                    {{ app()->getLocale() === 'en' ? 'Local partner for AI, software, and digital solutions.' : 'Mitra lokal untuk AI, software, dan solusi digital.' }}
                </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-lg">
                    {{ app()->getLocale() === 'en'
                        ? 'Bridging local expertise with Romulus Digital\'s regional capability to empower your enterprise.'
                        : 'Menghubungkan keahlian lokal dengan kemampuan regional Romulus Digital untuk memberdayakan bisnis Anda.' }}
                </p>
<div class="pt-unit-md">
<a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}" class="inline-block bg-primary text-on-primary font-button text-button px-unit-lg py-unit-md rounded-lg shadow-lg hover:scale-105 transition-transform">
    {{ app()->getLocale() === 'en' ? 'Work With Us' : 'Bekerja Bersama Kami' }}
</a>
</div>
</div>
<div class="relative mt-unit-lg md:mt-0">
<div class="absolute -top-10 -right-10 w-64 h-64 bg-primary-fixed opacity-20 rounded-full blur-3xl"></div>
<img alt="Software Development Workflow" class="rounded-xl shadow-2xl border border-outline-variant relative z-10 object-cover w-full h-[400px]" data-alt="A group of professional software engineers..." src="https://lh3.googleusercontent.com/aida-public/AB6AXuARjNPNzkbtHKbzPJa5qHoWQBSs9eF75JXSSBiByw6ao2Np8mzZQTMNZRPe0To39pJI5eHYiWUYDcSVk5dDBOsVqo9co64wiCoq31MqgALZqldSWB_gXG2cvmMZMciEjeRuDhe9-P2E24Schimpsl_ujy1HLub-3wz8RUkB-5VVFU3NwTWBWd83OISeJweefFAsmceqnTC8Vq7JOigcRes6ICW7NG-GgiPD2U3OytBhYDdDVLA15yQ0NWOi4xoRmbZBzm57X2iv2QoO"/>
</div>
</div>
</header>
<!-- Strategic Partner Section -->
<section class="bg-midnight-navy py-unit-lg border-y border-outline-variant">
<div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto flex flex-col md:flex-row justify-between items-center gap-unit-md">
<div class="text-surface-variant font-body-md text-body-md italic opacity-80">
                {{ app()->getLocale() === 'en' ? 'Official Strategic Partner' : 'Mitra Strategis Resmi' }}
            </div>
<div class="flex items-center space-x-unit-lg">
<img alt="Romulus Digital Logo" class="h-12 w-auto object-contain bg-white rounded-md p-2 opacity-90" src="{{ asset('assets/romulus-hitam.png') }}"/>
<div class="h-8 w-px bg-outline-variant/30 hidden md:block"></div>
<p class="text-surface-container-highest font-label-sm text-label-sm max-w-[200px]">
                    {{ app()->getLocale() === 'en' ? 'Local Delivery, Regional Capability' : 'Pengiriman Lokal, Kemampuan Regional' }}
                </p>
</div>
</div>
</section>
<!-- Mission & Vision Bento Grid -->
<section class="py-unit-xl px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
<div class="mb-unit-lg">
<h2 class="font-headline-h2 text-headline-h2 text-on-surface">{{ app()->getLocale() === 'en' ? 'Our Vision & Mission' : 'Visi & Misi Kami' }}</h2>
<div class="h-1.5 w-24 bg-primary-container mt-unit-sm"></div>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
<!-- Vision -->
<div class="md:col-span-4 bg-primary text-on-primary p-unit-lg rounded-xl flex flex-col justify-between border-t-4 border-primary-fixed">
<div class="space-y-unit-md">
<span class="material-symbols-outlined text-4xl" style="font-variation-settings: 'FILL' 1;">visibility</span>
<h3 class="font-headline-h3 text-headline-h3">{{ app()->getLocale() === 'en' ? 'Vision' : 'Visi' }}</h3>
<p class="font-body-md text-body-md opacity-90">
                        {{ app()->getLocale() === 'en'
                            ? 'To be a strategic technology partner that delivers professional, meaningful, and impactful digital solutions for organizational growth in Indonesia and the regional market.'
                            : 'Menjadi mitra teknologi strategis yang menghadirkan solusi digital profesional, bermakna, dan berdampak nyata bagi pertumbuhan organisasi di Indonesia dan pasar regional.' }}
                    </p>
</div>
</div>
<!-- Mission Points -->
<div class="md:col-span-8 grid grid-cols-1 sm:grid-cols-2 gap-unit-md">
<div class="bg-surface-container-low p-unit-md border border-outline-variant hover:border-primary transition-colors flex gap-unit-md">
<div class="text-primary font-bold text-headline-h3 shrink-0">01</div>
<div>
<p class="font-body-md text-body-md font-bold">{{ app()->getLocale() === 'en' ? 'Governance & Agility' : 'Tata Kelola & Kelincahan' }}</p>
<p class="text-on-surface-variant text-label-sm">{{ app()->getLocale() === 'en' ? 'Deliver solutions with strong governance, Agile/Scrum delivery, QA discipline, and transparent communication.' : 'Memberikan solusi dengan tata kelola yang kuat, pengiriman Agile/Scrum, disiplin QA, dan komunikasi yang transparan.' }}</p>
</div>
</div>
<div class="bg-surface-container-low p-unit-md border border-outline-variant hover:border-primary transition-colors flex gap-unit-md">
<div class="text-primary font-bold text-headline-h3 shrink-0">02</div>
<div>
<p class="font-body-md text-body-md font-bold">{{ app()->getLocale() === 'en' ? 'Meaningful Products' : 'Produk Bermakna' }}</p>
<p class="text-on-surface-variant text-label-sm">{{ app()->getLocale() === 'en' ? 'Build meaningful digital products that solve real operational and business pain points.' : 'Membangun produk digital bermakna yang menyelesaikan masalah operasional dan bisnis nyata.' }}</p>
</div>
</div>
<div class="bg-surface-container-low p-unit-md border border-outline-variant hover:border-primary transition-colors flex gap-unit-md">
<div class="text-primary font-bold text-headline-h3 shrink-0">03</div>
<div>
<p class="font-body-md text-body-md font-bold">{{ app()->getLocale() === 'en' ? 'AI Automation' : 'Otomatisasi AI' }}</p>
<p class="text-on-surface-variant text-label-sm">{{ app()->getLocale() === 'en' ? 'Enable AI-powered automation and data-driven workflows for measurable business impact.' : 'Mengaktifkan otomatisasi berbasis AI dan alur kerja berbasis data untuk dampak bisnis yang terukur.' }}</p>
</div>
</div>
<div class="bg-surface-container-low p-unit-md border border-outline-variant hover:border-primary transition-colors flex gap-unit-md">
<div class="text-primary font-bold text-headline-h3 shrink-0">04</div>
<div>
<p class="font-body-md text-body-md font-bold">{{ app()->getLocale() === 'en' ? 'Long-term Partnership' : 'Kemitraan Jangka Panjang' }}</p>
<p class="text-on-surface-variant text-label-sm">{{ app()->getLocale() === 'en' ? 'Create long-term partnerships with clients, partners, and technology ecosystems.' : 'Menciptakan kemitraan jangka panjang dengan klien, mitra, dan ekosistem teknologi.' }}</p>
</div>
</div>
<div class="bg-surface-container-low p-unit-md border border-outline-variant hover:border-primary transition-colors flex gap-unit-md sm:col-span-2">
<div class="text-primary font-bold text-headline-h3 shrink-0">05</div>
<div>
<p class="font-body-md text-body-md font-bold">{{ app()->getLocale() === 'en' ? 'People Growth' : 'Pengembangan SDM' }}</p>
<p class="text-on-surface-variant text-label-sm">{{ app()->getLocale() === 'en' ? 'Grow people, capability, and sustainable digital maturity across organizations.' : 'Mengembangkan sumber daya manusia, kapabilitas, dan kematangan digital berkelanjutan di seluruh organisasi.' }}</p>
</div>
</div>
</div>
</div>
</section>
<!-- Why Nakala Section -->
<section class="bg-surface-container-highest py-unit-xl">
<div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
<div class="text-center mb-unit-xl">
<h2 class="font-headline-h2 text-headline-h2 text-on-surface">{{ app()->getLocale() === 'en' ? 'Why Nakala Digital?' : 'Mengapa Nakala Digital?' }}</h2>
<p class="text-on-surface-variant font-body-lg text-body-lg mt-unit-sm">{{ app()->getLocale() === 'en' ? '6 reasons to partner with Nakala Digital' : '6 alasan bermitra dengan Nakala Digital' }}</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<!-- Reason 1 -->
<div class="bg-surface-container-lowest p-unit-lg border border-outline-variant group hover:shadow-xl transition-all">
<div class="w-12 h-12 bg-primary-container/10 flex items-center justify-center rounded-sm mb-unit-md group-hover:bg-primary-container transition-colors">
<span class="material-symbols-outlined text-primary group-hover:text-on-primary-container">local_shipping</span>
</div>
<h4 class="font-headline-h3 text-headline-h3 mb-unit-xs">{{ app()->getLocale() === 'en' ? 'Local Delivery' : 'Pengiriman Lokal' }}</h4>
<p class="text-on-surface-variant font-body-md text-body-md">
    {{ app()->getLocale() === 'en' 
        ? 'Indonesia-based delivery team with regional technology support through our Romulus Digital partnership network.' 
        : 'Tim pengiriman berbasis Indonesia dengan dukungan teknologi regional melalui jaringan kemitraan Romulus Digital.' }}
</p>
</div>
<!-- Reason 2 -->
<div class="bg-surface-container-lowest p-unit-lg border border-outline-variant group hover:shadow-xl transition-all">
<div class="w-12 h-12 bg-primary-container/10 flex items-center justify-center rounded-sm mb-unit-md group-hover:bg-primary-container transition-colors">
<span class="material-symbols-outlined text-primary group-hover:text-on-primary-container">psychology</span>
</div>
<h4 class="font-headline-h3 text-headline-h3 mb-unit-xs">{{ app()->getLocale() === 'en' ? 'AI Mindset' : 'Pola Pikir AI' }}</h4>
<p class="text-on-surface-variant font-body-md text-body-md">
    {{ app()->getLocale() === 'en' 
        ? 'We embed AI automation and intelligent workflows where they create real operational value.' 
        : 'Kami menanamkan otomatisasi AI dan alur kerja cerdas di tempat yang menciptakan nilai operasional nyata.' }}
</p>
</div>
<!-- Reason 3 -->
<div class="bg-surface-container-lowest p-unit-lg border border-outline-variant group hover:shadow-xl transition-all">
<div class="w-12 h-12 bg-primary-container/10 flex items-center justify-center rounded-sm mb-unit-md group-hover:bg-primary-container transition-colors">
<span class="material-symbols-outlined text-primary group-hover:text-on-primary-container">verified</span>
</div>
<h4 class="font-headline-h3 text-headline-h3 mb-unit-xs">{{ app()->getLocale() === 'en' ? 'Agile/QA Focused' : 'Fokus Agile/QA' }}</h4>
<p class="text-on-surface-variant font-body-md text-body-md">
    {{ app()->getLocale() === 'en' 
        ? 'Structured sprint delivery, backlog control, SIT/UAT testing, and clear documentation at every release.' 
        : 'Pengiriman sprint terstruktur, kontrol backlog, pengujian SIT/UAT, dan dokumentasi yang jelas di setiap rilis.' }}
</p>
</div>
<!-- Reason 4 -->
<div class="bg-surface-container-lowest p-unit-lg border border-outline-variant group hover:shadow-xl transition-all">
<div class="w-12 h-12 bg-primary-container/10 flex items-center justify-center rounded-sm mb-unit-md group-hover:bg-primary-container transition-colors">
<span class="material-symbols-outlined text-primary group-hover:text-on-primary-container">hub</span>
</div>
<h4 class="font-headline-h3 text-headline-h3 mb-unit-xs">{{ app()->getLocale() === 'en' ? 'Regional Capability' : 'Kemampuan Regional' }}</h4>
<p class="text-on-surface-variant font-body-md text-body-md">
    {{ app()->getLocale() === 'en' 
        ? 'We design around real user journeys and business processes, not only technical features.' 
        : 'Kami mendesain berdasarkan perjalanan pengguna nyata dan proses bisnis, bukan hanya fitur teknis.' }}
</p>
</div>
<!-- Reason 5 -->
<div class="bg-surface-container-lowest p-unit-lg border border-outline-variant group hover:shadow-xl transition-all">
<div class="w-12 h-12 bg-primary-container/10 flex items-center justify-center rounded-sm mb-unit-md group-hover:bg-primary-container transition-colors">
<span class="material-symbols-outlined text-primary group-hover:text-on-primary-container">shield</span>
</div>
<h4 class="font-headline-h3 text-headline-h3 mb-unit-xs">{{ app()->getLocale() === 'en' ? 'Enterprise Security' : 'Keamanan Perusahaan' }}</h4>
<p class="text-on-surface-variant font-body-md text-body-md">
    {{ app()->getLocale() === 'en' 
        ? 'Every solution is designed to be practical, scalable, and measurable.' 
        : 'Setiap solusi dirancang untuk menjadi praktis, terukur, dan dapat diukur dampaknya.' }}
</p>
</div>
<!-- Reason 6 -->
<div class="bg-surface-container-lowest p-unit-lg border border-outline-variant group hover:shadow-xl transition-all">
<div class="w-12 h-12 bg-primary-container/10 flex items-center justify-center rounded-sm mb-unit-md group-hover:bg-primary-container transition-colors">
<span class="material-symbols-outlined text-primary group-hover:text-on-primary-container">speed</span>
</div>
<h4 class="font-headline-h3 text-headline-h3 mb-unit-xs">{{ app()->getLocale() === 'en' ? 'Rapid Deployment' : 'Penyebaran Cepat' }}</h4>
<p class="text-on-surface-variant font-body-md text-body-md">
    {{ app()->getLocale() === 'en' 
        ? 'Backed by Romulus Digital regional capability to scale expertise based on project needs.' 
        : 'Didukung oleh kemampuan regional Romulus Digital untuk menyesuaikan skala keahlian berdasarkan kebutuhan proyek.' }}
</p>
</div>
</div>
</div>
</section>
<!-- Footer -->
@include('partials.footer')
<script>
        // Simple scroll behavior for Navbar
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
</body></html>


