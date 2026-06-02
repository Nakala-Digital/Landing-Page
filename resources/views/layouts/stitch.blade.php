<!doctype html>
<html class="dark" lang="{{ $locale }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $page['title'] }}</title>
    <meta name="description" content="{{ $page['description'] }}">
    <meta name="keywords" content="{{ $page['keywords'] }}">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ route($page['route'], ['locale' => $locale]) }}">
    @foreach ($site['locales'] as $code => $language)
        <link rel="alternate" hreflang="{{ $code }}" href="{{ route($page['route'], ['locale' => $code]) }}">
    @endforeach
    <link rel="alternate" hreflang="x-default" href="{{ route($page['route'], ['locale' => $site['default_locale']]) }}">

    <meta property="og:site_name" content="{{ $site['brand']['name'] }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $page['title'] }}">
    <meta property="og:description" content="{{ $page['description'] }}">
    <meta property="og:url" content="{{ route($page['route'], ['locale' => $locale]) }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $page['title'] }}">
    <meta name="twitter:description" content="{{ $page['description'] }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset($site['brand']['logo']) }}">
    <link rel="alternate icon" type="image/png" href="{{ asset($site['brand']['logo_png']) }}">

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
                        "tertiary": "#ffb1c5",
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
                        display: ["120px", { lineHeight: "100px", letterSpacing: "-0.02em", fontWeight: "400" }]
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
        .header-logo img { width: 100%; height: 100%; object-fit: contain; display: block; }
        .header-logo:focus,
        .header-logo:focus-visible,
        .header-logo:active { outline: none; box-shadow: none; }
        .white-header-link { color: #001e2d; }
        .white-header-link:hover { color: #00658d; }
        .skew-card { transition: transform 180ms ease; }
        .skew-card:hover { transform: translate(-4px, -4px); }
        body { min-height: max(884px, 100dvh); }
    </style>
    @php
        $organizationSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => $site['brand']['name'],
            'description' => $content['brand']['description'],
            'telephone' => $site['brand']['phone'],
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Bandung',
                'addressCountry' => 'ID',
            ],
            'url' => route('home', ['locale' => $locale]),
        ];
    @endphp
    <script type="application/ld+json">{!! json_encode($organizationSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}</script>
</head>
<body class="bg-background text-on-background selection:bg-secondary-fixed selection:text-on-secondary-fixed font-body-md overflow-x-hidden">
    <header class="fixed top-0 w-full z-50 bg-white text-on-primary-fixed border-b-4 border-primary-container shadow-[4px_4px_0px_0px_#d2f000] flex items-center justify-between px-margin-mobile md:px-margin-desktop h-20">
        <div class="flex items-center gap-sm">
            <span class="material-symbols-outlined text-headline-md md:hidden text-on-primary-fixed">menu</span>
            <a class="header-logo inline-logo" href="{{ route('home', ['locale' => $locale]) }}" aria-label="{{ $site['brand']['name'] }} home">
                <img src="{{ asset($site['brand']['logo_png']) }}" alt="{{ $site['brand']['name'] }} logo" class="w-full h-full object-contain" />
            </a>
        </div>
        <nav class="hidden lg:flex gap-lg font-label-sticker text-label-sticker tracking-widest">
            <a class="white-header-link bg-secondary-fixed px-2 py-1 border-2 border-on-primary-fixed hover:skew-x-2 transition-transform" href="#mission">01 MISSION</a>
            <a class="white-header-link hover:text-inverse-primary transition-colors hover:skew-x-2" href="#service-pillars">02 SERVICES</a>
            <a class="white-header-link hover:text-inverse-primary transition-colors hover:skew-x-2" href="#agile-delivery">03 WORKFLOW</a>
            <a class="white-header-link hover:text-inverse-primary transition-colors hover:skew-x-2" href="{{ route('team', ['locale' => $locale]) }}">04 CREW</a>
            <a class="white-header-link hover:text-inverse-primary transition-colors hover:skew-x-2" href="{{ route('contact', ['locale' => $locale]) }}">05 CONNECT</a>
        </nav>
        <div class="flex items-center gap-xs">
            @foreach ($site['locales'] as $code => $language)
                <a class="font-label-code text-xs px-2 py-1 border-2 {{ $locale === $code ? 'bg-primary-container text-on-primary border-primary-container' : 'text-on-primary-fixed border-on-primary-fixed' }}" href="{{ route($page['route'], ['locale' => $code]) }}">{{ $language['label'] }}</a>
            @endforeach
        </div>
    </header>

    @yield('content')

    <footer class="w-full relative overflow-hidden bg-surface-container-lowest border-t-4 border-surface-variant flex flex-col items-center p-margin-mobile pb-xl text-center space-y-md">
        <h2 class="font-display text-headline-md text-primary">NAKALA DIGITAL</h2>
        <div class="flex gap-lg flex-wrap justify-center font-label-code text-label-code text-outline">
            <a class="hover:text-secondary-fixed-dim transition-all" href="{{ route('services', ['locale' => $locale]) }}">SERVICE_PROTOCOL</a>
            <a class="hover:text-secondary-fixed-dim transition-all" href="{{ route('contact', ['locale' => $locale]) }}">CONNECT_CHANNEL</a>
        </div>
        <p class="font-label-code text-label-code text-tertiary">&copy;{{ date('Y') }} NAKALA DIGITAL // ARCHIPELAGO_OS</p>
        <div class="absolute bottom-4 left-4 flex gap-1">
            <div class="w-2 h-2 bg-primary"></div>
            <div class="w-2 h-2 bg-secondary-fixed"></div>
            <div class="w-2 h-2 bg-tertiary"></div>
        </div>
    </footer>

    <div class="fixed bottom-10 right-10 z-50 pointer-events-none hidden md:block">
        <div class="bg-tertiary-container text-on-tertiary-container px-3 py-1 font-label-sticker border-2 border-on-tertiary-container rotate-[15deg] shadow-lg">
            HIGH VOLTAGE TECH
        </div>
    </div>
</body>
</html>
