<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    background: "#FFFFFF",
                    primary: "#00B8D9",
                    "primary-container": "#00B8D9",
                    "primary-fixed": "#EAF7FF",
                    "primary-fixed-dim": "#BEEBFA",
                    "on-primary": "#FFFFFF",
                    "on-primary-fixed": "#061A3A",
                    surface: "#FFFFFF",
                    "surface-container-lowest": "#F8FBFD",
                    "surface-container-low": "#F5F7FA",
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
                    card: "0 14px 34px rgba(6, 26, 58, 0.08)",
                    soft: "0 8px 24px rgba(6, 26, 58, 0.06)"
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
    }

    html { scroll-behavior: smooth; }
    section[id] { scroll-margin-top: 5rem; }
    body { min-height: max(884px, 100dvh); background: #FFFFFF; }

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
    .header-logo { width: 12rem; height: 3.25rem; background: transparent; padding: 0; border: none; }
    .header-logo .inline-logo { width: 100%; height: 100%; }
    .header-logo img { width: 100%; height: 100%; object-fit: contain; display: block; }
    .header-logo:focus,
    .header-logo:focus-visible,
    .header-logo:active { outline: 2px solid var(--nakala-cyan); outline-offset: 4px; box-shadow: none; }

    .white-header-link { color: #061A3A; }
    .white-header-link:hover { color: #00B8D9; }
    .mobile-nav summary { list-style: none; }
    .mobile-nav summary::-webkit-details-marker { display: none; }
    .mobile-nav[open] .mobile-nav-panel { animation: mobile-menu-in 150ms ease-out; }
    .mobile-nav-panel { width: min(22rem, calc(100vw - 2rem)); }

    .corporate-card {
        border: 1px solid #D7E7EF;
        border-radius: 8px;
        background: #FFFFFF;
        box-shadow: 0 12px 30px rgba(6, 26, 58, 0.06);
    }

    .dark-band {
        background: #061A3A;
        color: #FFFFFF;
    }

    .dark-band .text-on-surface,
    .dark-band .text-on-surface-variant,
    .dark-band .text-on-background {
        color: rgba(255, 255, 255, 0.78);
    }

    .dark-band .text-white { color: #FFFFFF; }

    @keyframes mobile-menu-in {
        from { opacity: 0; transform: translateY(-8px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 640px) {
        .header-logo { width: 8rem; height: 2.75rem; }
        .header-language { display: none; }
    }

    @media (max-width: 420px) {
        .header-logo { width: 7.25rem; height: 2.5rem; }
    }
</style>
