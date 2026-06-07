<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Delivery Model | Nakala Digital</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
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
        .bento-grid { display: grid; grid-template-columns: repeat(12, 1fr); gap: 24px; }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-surface text-on-surface">
<!-- TopNavBar -->
@include('partials.navbar')
<main class="pt-20">
<!-- Hero Section -->
<section class="relative overflow-hidden bg-midnight-navy py-unit-xl lg:py-32">
<div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-primary via-transparent to-transparent"></div>
<div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto relative z-10">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-unit-lg items-center">
<div>
<div class="inline-flex items-center gap-2 bg-tertiary-fixed text-on-tertiary-fixed px-4 py-1.5 rounded-full font-label-sm text-label-sm uppercase tracking-widest mb-unit-md">
<span class="material-symbols-outlined text-[16px]">bolt</span>
INDONESIA TECH PARTNER
</div>
<h1 class="font-headline-h1-mobile md:font-headline-h1 text-headline-h1-mobile md:text-headline-h1 text-white mb-unit-md">
                            {{ app()->getLocale() === 'en' ? 'Structured delivery with clear quality governance.' : 'Pengiriman terstruktur dengan tata kelola kualitas yang jelas.' }}
                        </h1>
<p class="font-body-lg text-body-lg text-outline-variant mb-unit-lg max-w-xl">
                            Our systematic approach bridges local responsiveness with regional quality standards, ensuring every technical milestone is backed by rigorous QA governance.
                        </p>
<div class="flex flex-wrap gap-4">
<button class="bg-primary-container text-on-primary-container font-button text-button px-unit-lg py-4 rounded-lg flex items-center gap-2 hover:gap-3 transition-all duration-300">
                                View Methodology <span class="material-symbols-outlined">arrow_forward</span>
</button>
</div>
</div>
<div class="hidden lg:block relative">
<div class="absolute -inset-4 bg-primary/20 blur-3xl rounded-full"></div>
<img alt="QA Governance Dashboard" class="relative rounded-xl border-4 border-white/10 shadow-2xl" data-alt="A sophisticated digital dashboard interface showing software quality metrics and delivery progress. The layout features high-contrast charts in Electric Cyan and Midnight Navy against a dark, professional background. Glowing status indicators and real-time data visualizations create a sense of technical rigor and modern corporate excellence. The lighting is focused and clean, emphasizing precision and transparency in the development process." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCzcZP03Ya1ef3majVmO-lJeRWePM77IQ9jRrA2pSjclh3eb-GHlGJrhHwpD8AArV5Ooa-HJcVULWBmb_HZXxYbB_09s4MGFZrwpNWDviVxFyg30lmdFdYMvosQNthDXNUV5iMbvLhQ-QT0xq2xjRFUpv4mtEhjTseIqBZqDUyNGDD2DmyRhm6QKAuOxuE59wmeUwLILRpm47ewMnBnPQLjPxcnMULq8VtaXkI64b--vlsECInlvzedoyRAceIVkinP_SSsn27tTxzR"/>
</div>
</div>
</div>
</section>
<!-- Delivery Steps (7 Steps) -->
<section class="py-unit-xl bg-surface">
<div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
<div class="mb-unit-lg text-center max-w-2xl mx-auto">
<h2 class="font-headline-h2 text-headline-h2 text-on-background mb-4">Our End-to-End Lifecycle</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Seven critical stages of refinement to ensure your digital product meets institutional standards from day one.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-unit-md">
<!-- Step 1 -->
<div class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
<div class="text-primary-container font-headline-h2 mb-2">01</div>
<h3 class="font-headline-h3 text-headline-h3 text-on-background mb-2">Discovery</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">In-depth stakeholder workshops to define product vision and technical feasibility.</p>
<div class="bg-surface p-2 rounded text-xs font-bold text-primary flex items-center gap-2">
<span class="material-symbols-outlined text-sm">description</span> Output: PRD &amp; Product Roadmap
                        </div>
</div>
<!-- Step 2 -->
<div class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
<div class="text-primary-container font-headline-h2 mb-2">02</div>
<h3 class="font-headline-h3 text-headline-h3 text-on-background mb-2">Planning</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">Resource allocation, sprint scheduling, and architectural design patterns.</p>
<div class="bg-surface p-2 rounded text-xs font-bold text-primary flex items-center gap-2">
<span class="material-symbols-outlined text-sm">account_tree</span> Output: Technical Design Doc
                        </div>
</div>
<!-- Step 3 -->
<div class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
<div class="text-primary-container font-headline-h2 mb-2">03</div>
<h3 class="font-headline-h3 text-headline-h3 text-on-background mb-2">Design</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">High-fidelity UI mockups and UX prototyping with iterative feedback loops.</p>
<div class="bg-surface p-2 rounded text-xs font-bold text-primary flex items-center gap-2">
<span class="material-symbols-outlined text-sm">palette</span> Output: Interactive Prototype
                        </div>
</div>
<!-- Step 4 -->
<div class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
<div class="text-primary-container font-headline-h2 mb-2">04</div>
<h3 class="font-headline-h3 text-headline-h3 text-on-background mb-2">Development</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">Clean code execution using industry-leading stacks and security best practices.</p>
<div class="bg-surface p-2 rounded text-xs font-bold text-primary flex items-center gap-2">
<span class="material-symbols-outlined text-sm">code</span> Output: Source Code (Git)
                        </div>
</div>
<!-- Step 5 -->
<div class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
<div class="text-primary-container font-headline-h2 mb-2">05</div>
<h3 class="font-headline-h3 text-headline-h3 text-on-background mb-2">QA Testing</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">Rigorous SIT and UAT phases to identify and resolve blockers before launch.</p>
<div class="bg-surface p-2 rounded text-xs font-bold text-primary flex items-center gap-2">
<span class="material-symbols-outlined text-sm">bug_report</span> Output: QA &amp; SIT Report
                        </div>
</div>
<!-- Step 6 -->
<div class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group">
<div class="text-primary-container font-headline-h2 mb-2">06</div>
<h3 class="font-headline-h3 text-headline-h3 text-on-background mb-2">Deployment</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">Phased rollout to production environments with CI/CD automation.</p>
<div class="bg-surface p-2 rounded text-xs font-bold text-primary flex items-center gap-2">
<span class="material-symbols-outlined text-sm">rocket_launch</span> Output: Live Production Site
                        </div>
</div>
<!-- Step 7 -->
<div class="bg-white p-unit-md border border-outline-variant rounded-lg hover:border-primary transition-colors group col-span-1 md:col-span-2">
<div class="text-primary-container font-headline-h2 mb-2">07</div>
<h3 class="font-headline-h3 text-headline-h3 text-on-background mb-2">Improvement</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">Post-launch monitoring, performance tuning, and ongoing feature updates based on real user data.</p>
<div class="bg-surface p-2 rounded text-xs font-bold text-primary flex items-center gap-2">
<span class="material-symbols-outlined text-sm">trending_up</span> Output: Optimization Backlog
                        </div>
</div>
</div>
</div>
</section>
<!-- QA Governance & Artifacts (Bento Layout) -->
<section class="py-unit-xl bg-surface-container-low border-y border-outline-variant">
<div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
<div class="mb-unit-lg">
<h2 class="font-headline-h2 text-headline-h2 text-on-background">QA Governance &amp; Deliverables</h2>
<p class="text-on-surface-variant max-w-xl">We don't just build; we certify. Every project follows a strict governance framework that produces tangible technical artifacts.</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
<!-- Governance Column -->
<div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-unit-md">
<div class="bg-white border-l-4 border-primary p-unit-md rounded shadow-sm">
<div class="flex items-center gap-3 mb-2">
<span class="material-symbols-outlined text-primary">fact_check</span>
<h4 class="font-headline-h3 text-headline-h3 text-on-background">Requirement Review</h4>
</div>
<p class="text-body-md text-on-surface-variant">Validation of functional and non-functional requirements before development starts.</p>
</div>
<div class="bg-white border-l-4 border-primary p-unit-md rounded shadow-sm">
<div class="flex items-center gap-3 mb-2">
<span class="material-symbols-outlined text-primary">assignment</span>
<h4 class="font-headline-h3 text-headline-h3 text-on-background">Test Planning</h4>
</div>
<p class="text-body-md text-on-surface-variant">Strategic SIT (System Integration Testing) and UAT (User Acceptance Testing) protocols.</p>
</div>
<div class="bg-white border-l-4 border-primary p-unit-md rounded shadow-sm">
<div class="flex items-center gap-3 mb-2">
<span class="material-symbols-outlined text-primary">security_update_warning</span>
<h4 class="font-headline-h3 text-headline-h3 text-on-background">Bug Tracking</h4>
</div>
<p class="text-body-md text-on-surface-variant">Centralized tracking of issues with priority-based resolution workflows.</p>
</div>
<div class="bg-white border-l-4 border-primary p-unit-md rounded shadow-sm">
<div class="flex items-center gap-3 mb-2">
<span class="material-symbols-outlined text-primary">handshake</span>
<h4 class="font-headline-h3 text-headline-h3 text-on-background">BAST / Handover</h4>
</div>
<p class="text-body-md text-on-surface-variant">Final certification and official handover with complete operational documentation.</p>
</div>
</div>
<!-- Artifacts List -->
<div class="bg-midnight-navy p-unit-md rounded-lg text-white">
<h4 class="font-headline-h3 text-headline-h3 mb-unit-md text-primary-fixed-dim">Project Artifacts</h4>
<ul class="space-y-4">
<li class="flex items-center gap-4 border-b border-white/10 pb-4">
<div class="w-10 h-10 rounded bg-white/5 flex items-center justify-center">
<span class="material-symbols-outlined text-primary-fixed-dim">list_alt</span>
</div>
<span class="font-body-md">Comprehensive Backlog</span>
</li>
<li class="flex items-center gap-4 border-b border-white/10 pb-4">
<div class="w-10 h-10 rounded bg-white/5 flex items-center justify-center">
<span class="material-symbols-outlined text-primary-fixed-dim">draw</span>
</div>
<span class="font-body-md">UI Mockups &amp; Flowcharts</span>
</li>
<li class="flex items-center gap-4 border-b border-white/10 pb-4">
<div class="w-10 h-10 rounded bg-white/5 flex items-center justify-center">
<span class="material-symbols-outlined text-primary-fixed-dim">terminal</span>
</div>
<span class="font-body-md">Technical Test Cases</span>
</li>
<li class="flex items-center gap-4 border-b border-white/10 pb-4">
<div class="w-10 h-10 rounded bg-white/5 flex items-center justify-center">
<span class="material-symbols-outlined text-primary-fixed-dim">menu_book</span>
</div>
<span class="font-body-md">Operations Manual (SOP)</span>
</li>
<li class="flex items-center gap-4">
<div class="w-10 h-10 rounded bg-white/5 flex items-center justify-center">
<span class="material-symbols-outlined text-primary-fixed-dim">verified</span>
</div>
<span class="font-body-md">SIT/UAT Sign-off Documents</span>
</li>
</ul>
</div>
</div>
</div>
</section>
<!-- Partner Banner -->
<section class="py-unit-lg bg-white border-b border-outline-variant">
<div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto flex flex-col md:flex-row items-center justify-between gap-unit-md">
<div class="flex items-center gap-4">
<span class="text-on-surface-variant font-label-sm uppercase tracking-widest">Our Strategic Partner</span>
<div class="h-8 w-px bg-outline-variant hidden md:block"></div>
</div>
<div class="flex items-center bg-midnight-navy px-6 py-4 rounded-lg">
<div class="bg-white px-4 py-2 rounded-md"><img class="h-9 w-auto object-contain" src="{{ asset('assets/romulus-hitam.png') }}" alt="Romulus Digital"></div>
<span class="text-outline-variant ml-4 font-body-md">Regional Excellence Alliance</span>
</div>
<div class="text-on-surface-variant font-body-md italic">
                    "Bridging Local Delivery with Regional Capability"
                </div>
</div>
</section>
</main>
<!-- Footer -->
@include('partials.footer')
<script>
        // Subtle scroll animation for header
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

        // Simple smooth scroll fallback
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body></html>


