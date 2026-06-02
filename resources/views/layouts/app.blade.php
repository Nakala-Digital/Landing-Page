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
    <link rel="alternate icon" type="image/png" href="{{ asset($site['brand']['logo_png']) }}">

    @include('partials.stitch-theme')

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
<body class="bg-background text-on-background selection:bg-secondary-fixed selection:text-on-secondary-fixed font-body-md overflow-x-hidden">
    @include('partials.stitch-header')

    <main class="pt-20">
        @yield('content')
    </main>

    @include('partials.stitch-footer')
</body>
</html>
