<!doctype html>
<html lang="{{ $locale }}">
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
    <link rel="alternate icon" href="{{ asset($site['brand']['logo_png']) }}">

    <link rel="stylesheet" href="{{ asset('css/site.css') }}">

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
    @stack('schema')
</head>
<body>
    <header class="site-header">
        <div class="container nav">
            <a class="brand" href="{{ route('home', ['locale' => $locale]) }}" aria-label="{{ $site['brand']['name'] }} home">
                @include('partials.logo')
            </a>
            <div class="nav-shell">
                <nav class="nav-links" aria-label="Main navigation">
                    @foreach ($site['navigation'] as $item)
                        <a href="{{ route($item['route'], ['locale' => $locale]) }}" @class(['active' => request()->routeIs($item['route'])])>
                            @include('partials.icon', ['name' => $item['icon']])
                            <span>{{ $item['labels'][$locale] }}</span>
                        </a>
                    @endforeach
                </nav>
            </div>
            <div class="nav-actions">
                <div class="language-switch" aria-label="{{ $content['ui']['language'] }}">
                    @foreach ($site['locales'] as $code => $language)
                        <a href="{{ route($page['route'], ['locale' => $code]) }}" @class(['active' => $locale === $code])>{{ $language['label'] }}</a>
                    @endforeach
                </div>
                <a class="nav-cta" href="{{ route('contact', ['locale' => $locale]) }}">
                    @include('partials.icon', ['name' => 'phone'])
                    <span>{{ $content['ui']['contact'] }}</span>
                </a>
                <details class="mobile-menu">
                    <summary aria-label="Open navigation menu">
                        @include('partials.icon', ['name' => 'menu'])
                    </summary>
                    <div class="mobile-panel">
                        <nav class="mobile-links" aria-label="Mobile navigation">
                            @foreach ($site['navigation'] as $item)
                                <a href="{{ route($item['route'], ['locale' => $locale]) }}" @class(['active' => request()->routeIs($item['route'])])>
                                    @include('partials.icon', ['name' => $item['icon']])
                                    <span>{{ $item['labels'][$locale] }}</span>
                                </a>
                            @endforeach
                        </nav>
                    </div>
                </details>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container footer-grid">
            <div>
                <strong>{{ $site['brand']['name'] }}</strong>
                <p>{{ $content['brand']['tagline'] }}</p>
            </div>
            <div>
                <span>{{ $site['brand']['location'] }}</span>
                <a href="tel:+6282295706304">{{ $site['brand']['phone'] }}</a>
            </div>
        </div>
    </footer>
</body>
</html>
