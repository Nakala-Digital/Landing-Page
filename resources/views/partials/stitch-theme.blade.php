<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;700;900&family=JetBrains+Mono:wght@500;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script>
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    background: "#131313",
                    primary: "#82cfff",
                    "primary-container": "#00aeef",
                    "primary-fixed": "#c6e7ff",
                    "primary-fixed-dim": "#82cfff",
                    "on-primary": "#00344b",
                    "on-primary-fixed": "#001e2d",
                    surface: "#131313",
                    "surface-container-lowest": "#0e0e0e",
                    "surface-container-low": "#1c1b1b",
                    "surface-container": "#201f1f",
                    "surface-container-high": "#2a2a2a",
                    "surface-container-highest": "#353534",
                    "surface-variant": "#353534",
                    "surface-bright": "#393939",
                    outline: "#87929b",
                    "outline-variant": "#3e4850",
                    "on-surface": "#e5e2e1",
                    "on-surface-variant": "#bdc8d1",
                    "on-background": "#e5e2e1",
                    secondary: "#ffffff",
                    "secondary-container": "#d2f000",
                    "secondary-fixed": "#d2f000",
                    "secondary-fixed-dim": "#b8d300",
                    "on-secondary-fixed": "#191e00",
                    tertiary: "#ffb1c5",
                    "tertiary-container": "#ff75a2",
                    "on-tertiary": "#650030",
                    "on-tertiary-container": "#760039",
                    error: "#ffb4ab",
                    "on-error": "#690005"
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
                    display: ["Bebas Neue", "Impact", "sans-serif"],
                    "headline-md": ["Bebas Neue", "Impact", "sans-serif"],
                    "headline-lg": ["Bebas Neue", "Impact", "sans-serif"],
                    "label-sticker": ["Bebas Neue", "Impact", "sans-serif"],
                    "label-code": ["JetBrains Mono", "monospace"],
                    "body-md": ["Inter", "sans-serif"],
                    "body-lg": ["Inter", "sans-serif"]
                },
                fontSize: {
                    "body-md": ["16px", { lineHeight: "24px", fontWeight: "400" }],
                    "body-lg": ["18px", { lineHeight: "28px", fontWeight: "400" }],
                    "label-sticker": ["14px", { lineHeight: "14px", letterSpacing: "0.1em", fontWeight: "400" }],
                    "label-code": ["14px", { lineHeight: "20px", letterSpacing: "0.05em", fontWeight: "500" }],
                    "headline-md": ["32px", { lineHeight: "32px", fontWeight: "400" }],
                    "headline-lg-mobile": ["48px", { lineHeight: "44px", fontWeight: "400" }],
                    "headline-lg": ["64px", { lineHeight: "60px", letterSpacing: "0.02em", fontWeight: "400" }],
                    display: ["120px", { lineHeight: "100px", letterSpacing: "0", fontWeight: "400" }]
                }
            }
        }
    };
</script>
<style>
    .halftone-bg { background-image: radial-gradient(#353534 1px, transparent 1px); background-size: 8px 8px; }
    .hard-shadow-primary { box-shadow: 6px 6px 0 0 #82cfff; }
    .hard-shadow-secondary { box-shadow: 6px 6px 0 0 #d2f000; }
    .hard-shadow-tertiary { box-shadow: 6px 6px 0 0 #ff75a2; }
    .punk-border { border: 4px solid #353534; }
    .system-line { background: repeating-linear-gradient(90deg, #87929b, #87929b 10px, transparent 10px, transparent 20px); }
    .rotate-label { transform: rotate(-2deg); }
    .inline-logo { display: inline-flex; align-items: center; justify-content: center; overflow: hidden; }
    .inline-logo svg { display: block; width: 100%; height: 100%; }
    .header-logo { width: 12rem; height: 3.5rem; background: transparent; padding: 0; border: none; }
    .header-logo .inline-logo { width: 100%; height: 100%; }
    .header-logo img { width: 100%; height: 100%; object-fit: contain; display: block; }
    .header-logo:focus,
    .header-logo:focus-visible,
    .header-logo:active { outline: none; box-shadow: none; }
    .white-header-link { color: #001e2d; }
    .white-header-link:hover { color: #00658d; }
    .mobile-nav summary { list-style: none; }
    .mobile-nav summary::-webkit-details-marker { display: none; }
    .mobile-nav[open] .mobile-nav-panel { animation: mobile-menu-in 150ms ease-out; }
    .mobile-nav-panel { width: min(22rem, calc(100vw - 2rem)); }
    .skew-card { transition: transform 180ms ease; }
    .skew-card:hover { transform: translate(-4px, -4px); }
    html { scroll-behavior: smooth; }
    section[id] { scroll-margin-top: 5rem; }
    body { min-height: max(884px, 100dvh); }
    @keyframes mobile-menu-in {
        from { opacity: 0; transform: translateY(-8px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @media (max-width: 640px) {
        .header-logo { width: 9.25rem; height: 3rem; }
    }
</style>
