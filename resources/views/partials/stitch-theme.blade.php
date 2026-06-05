<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    background: "#F8FBFD",
                    primary: "#00B8D9",
                    "primary-container": "#00B8D9",
                    "primary-fixed": "#ECFAFF",
                    "primary-fixed-dim": "#BEEBFA",
                    "on-primary": "#FFFFFF",
                    "on-primary-fixed": "#061A3A",
                    surface: "#FFFFFF",
                    "surface-container-lowest": "#FFFFFF",
                    "surface-container-low": "#F7FAFC",
                    "surface-container": "#FFFFFF",
                    "surface-container-high": "#EAF7FF",
                    "surface-container-highest": "#DDF3FC",
                    "surface-variant": "#D7E7EF",
                    "surface-bright": "#FFFFFF",
                    outline: "#C5D7E1",
                    "outline-variant": "#E2EDF2",
                    "on-surface": "#061A3A",
                    "on-surface-variant": "#526675",
                    "on-background": "#061A3A",
                    secondary: "#061A3A",
                    "secondary-container": "#EAF7FF",
                    "secondary-fixed": "#061A3A",
                    "secondary-fixed-dim": "#031A44",
                    "on-secondary-fixed": "#FFFFFF",
                    tertiary: "#009FE3",
                    "tertiary-container": "#EAF7FF",
                    "on-tertiary": "#FFFFFF",
                    "on-tertiary-container": "#061A3A",
                    accent: "#DFFF00",
                    "accent-coral": "#FF6B6B",
                    error: "#D92D20",
                    "on-error": "#FFFFFF"
                },
                borderRadius: {
                    card: "8px",
                    pill: "999px"
                },
                spacing: {
                    xs: "8px",
                    sm: "16px",
                    md: "24px",
                    lg: "40px",
                    xl: "80px",
                    gutter: "24px",
                    "margin-desktop": "48px",
                    "margin-mobile": "16px"
                },
                fontFamily: {
                    display: ["Poppins", "sans-serif"],
                    "headline-md": ["Poppins", "sans-serif"],
                    "headline-lg": ["Poppins", "sans-serif"],
                    "label-sticker": ["Poppins", "sans-serif"],
                    "label-code": ["Poppins", "sans-serif"],
                    "body-md": ["Poppins", "sans-serif"],
                    "body-lg": ["Poppins", "sans-serif"]
                },
                fontSize: {
                    "body-md": ["16px", { lineHeight: "26px", fontWeight: "400" }],
                    "body-lg": ["18px", { lineHeight: "30px", fontWeight: "400" }],
                    "label-sticker": ["12px", { lineHeight: "16px", letterSpacing: "0", fontWeight: "700" }],
                    "label-code": ["13px", { lineHeight: "20px", letterSpacing: "0", fontWeight: "600" }],
                    "headline-md": ["24px", { lineHeight: "32px", fontWeight: "800" }],
                    "headline-lg-mobile": ["40px", { lineHeight: "46px", fontWeight: "900" }],
                    "headline-lg": ["56px", { lineHeight: "64px", letterSpacing: "0", fontWeight: "900" }],
                    display: ["72px", { lineHeight: "78px", letterSpacing: "0", fontWeight: "900" }]
                },
                boxShadow: {
                    card: "0 18px 46px rgba(6, 26, 58, 0.10)",
                    soft: "0 10px 28px rgba(6, 26, 58, 0.08)"
                }
            }
        }
    };
</script>
<style>
    :root {
        color-scheme: light;
        --nakala-navy: #061A3A;
        --nakala-deep: #020B1F;
        --nakala-cyan: #00B8D9;
        --nakala-blue: #009FE3;
        --nakala-light: #EAF7FF;
        --nakala-soft: #F5F7FA;
        --nakala-lime: #DFFF00;
        --nakala-coral: #FF6B6B;
        --nakala-line: #D7E7EF;
        --nakala-muted: #526675;
        --nakala-shadow: 0 18px 46px rgba(6, 26, 58, 0.10);
    }

    html { scroll-behavior: smooth; }
    section[id] { scroll-margin-top: 5rem; }
    body {
        min-height: max(884px, 100dvh);
        background: #F8FBFD;
        color: var(--nakala-navy);
        text-rendering: geometricPrecision;
        -webkit-font-smoothing: antialiased;
    }

    body::before {
        content: "";
        position: fixed;
        inset: 0;
        z-index: 0;
        pointer-events: none;
        opacity: 0.36;
        background-image:
            linear-gradient(rgba(6, 26, 58, 0.055) 1px, transparent 1px),
            linear-gradient(90deg, rgba(6, 26, 58, 0.055) 1px, transparent 1px);
        background-size: 48px 48px;
        -webkit-mask-image: linear-gradient(to bottom, black, transparent 78%);
        mask-image: linear-gradient(to bottom, black, transparent 78%);
    }

    header,
    main,
    footer {
        position: relative;
        z-index: 1;
    }

    main > section {
        position: relative;
        overflow: hidden;
    }

    main > section:first-child {
        border-bottom: 1px solid rgba(6, 26, 58, 0.08);
    }

    .bg-primary-fixed {
        background-color: #ECFAFF !important;
    }

    main > section.bg-primary-fixed {
        background-image:
            linear-gradient(rgba(0, 184, 217, 0.10) 1px, transparent 1px),
            linear-gradient(90deg, rgba(0, 184, 217, 0.10) 1px, transparent 1px);
        background-size: 36px 36px;
    }

    .bg-surface-container-low {
        background-color: #F7FAFC !important;
    }

    .material-symbols-outlined {
        font-variation-settings: "FILL" 0, "wght" 520, "GRAD" 0, "opsz" 24;
    }

    .halftone-bg { background-image: none; background-color: #FFFFFF; }
    .system-line { background: #D7E7EF; }
    .rotate-label { transform: none; }
    .skew-card { transition: transform 180ms ease, border-color 180ms ease, box-shadow 180ms ease; }
    .skew-card:hover { transform: translateY(-3px); box-shadow: 0 14px 34px rgba(6, 26, 58, 0.08); }

    .hard-shadow-primary,
    .hard-shadow-secondary,
    .hard-shadow-tertiary {
        box-shadow: 0 12px 30px rgba(6, 26, 58, 0.08);
    }

    .punk-border {
        border: 1px solid #D7E7EF;
        border-radius: 8px;
    }

    .inline-logo { display: inline-flex; align-items: center; justify-content: center; overflow: hidden; }
    .inline-logo svg { display: block; width: 100%; height: 100%; }
    .site-header {
        background: rgba(255, 255, 255, 0.88) !important;
        border-bottom: 1px solid rgba(6, 26, 58, 0.10) !important;
        box-shadow: 0 14px 34px rgba(6, 26, 58, 0.08);
        -webkit-backdrop-filter: blur(18px) saturate(1.25);
        backdrop-filter: blur(18px) saturate(1.25);
    }

    .header-logo { width: 12rem; height: 3.25rem; background: transparent; padding: 0; border: none; }
    .header-logo .inline-logo { width: 100%; height: 100%; }
    .header-logo img { width: 100%; height: 100%; object-fit: contain; display: block; }
    .header-logo:focus,
    .header-logo:focus-visible,
    .header-logo:active { outline: 2px solid var(--nakala-cyan); outline-offset: 4px; box-shadow: none; }

    .white-header-link {
        color: #061A3A;
        border: 1px solid transparent;
    }
    .white-header-link:hover,
    .white-header-link.bg-primary-fixed {
        color: #061A3A;
        background: #ECFAFF !important;
        border-color: #BEEBFA;
        box-shadow: inset 0 -2px 0 var(--nakala-cyan);
    }
    .white-header-link .material-symbols-outlined {
        transition: transform 180ms ease;
    }
    .white-header-link:hover .material-symbols-outlined {
        transform: translateY(-1px);
    }

    .header-language a,
    .mobile-nav-panel a {
        transition: background-color 180ms ease, border-color 180ms ease, color 180ms ease, transform 180ms ease;
    }

    .header-language a:hover,
    .mobile-nav-panel a:hover {
        transform: translateY(-1px);
    }

    .mobile-nav summary { list-style: none; }
    .mobile-nav summary::-webkit-details-marker { display: none; }
    .mobile-nav[open] .mobile-nav-panel { animation: mobile-menu-in 150ms ease-out; }
    .mobile-nav-panel {
        width: min(22rem, calc(100vw - 2rem));
        box-shadow: var(--nakala-shadow);
    }

    .corporate-card {
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(6, 26, 58, 0.10);
        border-radius: 8px;
        background: rgba(255, 255, 255, 0.96);
        box-shadow: var(--nakala-shadow);
        transition: transform 180ms ease, box-shadow 180ms ease, border-color 180ms ease;
    }

    .corporate-card::before {
        content: "";
        position: absolute;
        inset: 0 0 auto;
        height: 3px;
        background: var(--nakala-cyan);
    }

    .corporate-card > * {
        position: relative;
    }

    .corporate-card:hover {
        transform: translateY(-4px);
        border-color: rgba(0, 184, 217, 0.38);
        box-shadow: 0 24px 56px rgba(6, 26, 58, 0.14);
    }

    .dark-band {
        background-color: #061A3A;
        background-image:
            linear-gradient(rgba(255, 255, 255, 0.055) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255, 255, 255, 0.055) 1px, transparent 1px);
        background-size: 40px 40px;
        color: #FFFFFF;
    }

    .dark-band .text-on-surface,
    .dark-band .text-on-surface-variant,
    .dark-band .text-on-background {
        color: rgba(255, 255, 255, 0.78);
    }

    .dark-band .text-white { color: #FFFFFF; }

    a.bg-primary.text-on-primary,
    a.bg-white.text-secondary-fixed,
    button.bg-primary.text-on-primary {
        transition: transform 180ms ease, box-shadow 180ms ease, background-color 180ms ease, border-color 180ms ease, color 180ms ease;
    }

    a.bg-primary.text-on-primary,
    button.bg-primary.text-on-primary {
        background: #061A3A !important;
        color: #FFFFFF !important;
        box-shadow: 0 12px 28px rgba(6, 26, 58, 0.18);
    }

    a.bg-primary.text-on-primary:hover,
    button.bg-primary.text-on-primary:hover {
        background: #00B8D9 !important;
        transform: translateY(-2px);
        box-shadow: 0 18px 36px rgba(0, 184, 217, 0.24);
    }

    a.bg-white.text-secondary-fixed:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 28px rgba(6, 26, 58, 0.10);
    }

    .home-hero {
        padding-top: clamp(56px, 7vw, 92px) !important;
        padding-bottom: clamp(56px, 7vw, 92px) !important;
    }

    .home-hero::after,
    main > section:first-child::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 5px;
        background: linear-gradient(90deg, var(--nakala-cyan), var(--nakala-lime), var(--nakala-coral));
    }

    .hero-copy {
        max-width: 760px;
    }

    .hero-product-preview {
        background: rgba(255, 255, 255, 0.92);
        box-shadow: 0 30px 70px rgba(6, 26, 58, 0.16);
    }

    .hero-window {
        border: 1px solid rgba(6, 26, 58, 0.10);
        border-radius: 8px;
        background: #FFFFFF;
        box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.75);
    }

    .hero-window img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: center;
        background: #F8FBFD;
    }

    .hero-window-main {
        aspect-ratio: 16 / 9;
    }

    .hero-window-mini {
        aspect-ratio: 16 / 10;
    }

    .metric-pill {
        border: 1px solid rgba(6, 26, 58, 0.10);
        background: #FFFFFF;
        box-shadow: 0 8px 20px rgba(6, 26, 58, 0.07);
    }

    .page-hero {
        padding-top: clamp(56px, 7vw, 88px) !important;
        padding-bottom: clamp(56px, 7vw, 88px) !important;
    }

    .page-hero-grid {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(320px, 0.48fr);
        align-items: center;
        gap: clamp(32px, 5vw, 72px);
    }

    .page-hero-copy {
        max-width: 820px;
    }

    .page-hero-panel {
        background: rgba(255, 255, 255, 0.94);
    }

    .page-hero-panel:hover {
        transform: translateY(-2px);
    }

    .hero-signal-list {
        display: grid;
        gap: 12px;
    }

    .hero-signal {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        padding: 14px;
        border: 1px solid rgba(6, 26, 58, 0.10);
        border-radius: 8px;
        background: #FFFFFF;
    }

    .icon-badge,
    .number-badge {
        width: 44px;
        height: 44px;
        display: grid;
        flex: 0 0 auto;
        place-items: center;
        border-radius: 8px;
        border: 1px solid rgba(0, 184, 217, 0.28);
        color: var(--nakala-cyan);
        background: #ECFAFF;
    }

    .number-badge {
        color: var(--nakala-navy);
        font-weight: 900;
    }

    .soft-chip {
        display: inline-flex;
        align-items: center;
        min-height: 34px;
        gap: 8px;
        border: 1px solid rgba(0, 184, 217, 0.28);
        border-radius: 999px;
        background: #FFFFFF;
        color: var(--nakala-navy);
        padding: 6px 12px;
        box-shadow: 0 8px 18px rgba(6, 26, 58, 0.06);
    }

    .section-heading-panel {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        gap: 24px;
        margin-bottom: 40px;
    }

    .dark-card {
        border: 1px solid rgba(255, 255, 255, 0.16);
        border-radius: 8px;
        background: rgba(255, 255, 255, 0.07);
        box-shadow: 0 16px 38px rgba(0, 0, 0, 0.16);
        transition: transform 180ms ease, border-color 180ms ease, background-color 180ms ease;
    }

    .dark-card:hover {
        transform: translateY(-3px);
        border-color: rgba(0, 184, 217, 0.44);
        background: rgba(255, 255, 255, 0.10);
    }

    .contact-row {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        padding: 14px;
        border: 1px solid rgba(6, 26, 58, 0.10);
        border-radius: 8px;
        background: #F7FAFC;
    }

    .team-avatar {
        background:
            linear-gradient(135deg, #ECFAFF, #FFFFFF);
        box-shadow: inset 0 0 0 1px rgba(0, 184, 217, 0.28), 0 12px 24px rgba(6, 26, 58, 0.10);
    }

    .section-kicker {
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .section-kicker::before {
        content: "";
        width: 9px;
        height: 9px;
        border-radius: 999px;
        background: var(--nakala-cyan);
        box-shadow: 0 0 0 5px rgba(0, 184, 217, 0.12);
    }

    .portfolio-media {
        background:
            linear-gradient(135deg, rgba(236, 250, 255, 0.85), rgba(255, 255, 255, 0.95)) !important;
        box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.72);
    }

    .site-footer {
        background-color: #061A3A !important;
        background-image:
            linear-gradient(rgba(255, 255, 255, 0.055) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255, 255, 255, 0.055) 1px, transparent 1px);
        background-size: 42px 42px;
    }

    @keyframes mobile-menu-in {
        from { opacity: 0; transform: translateY(-8px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 640px) {
        .header-logo { width: 8rem; height: 2.75rem; }
        .header-language { display: none; }
        .home-hero {
            padding-top: 44px !important;
            padding-bottom: 56px !important;
        }
    }

    @media (max-width: 1024px) {
        .page-hero-grid,
        .section-heading-panel {
            grid-template-columns: 1fr;
        }

        .page-hero-grid {
            align-items: start;
        }

        .section-heading-panel {
            display: grid;
        }
    }

    @media (max-width: 420px) {
        .header-logo { width: 7.25rem; height: 2.5rem; }
    }
</style>
