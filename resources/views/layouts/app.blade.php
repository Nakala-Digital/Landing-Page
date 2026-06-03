<!doctype html>
<html lang="{{ $locale }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $page['title'] }}</title>
    <meta name="description" content="{{ $page['description'] }}">
    <meta name="keywords" content="{{ $page['keywords'] }}">
    <meta name="robots" content="index, follow">
    @php
        $publicUrl = rtrim($site['public_url'], '/');
        $currentPublicUrl = $publicUrl.route($page['route'], ['locale' => $locale], false);
        $logoPngPublicUrl = $publicUrl.'/'.ltrim($site['brand']['logo_png'], '/');
    @endphp
    <link rel="canonical" href="{{ $currentPublicUrl }}">
    @foreach ($site['locales'] as $code => $language)
        <link rel="alternate" hreflang="{{ $code }}" href="{{ $publicUrl.route($page['route'], ['locale' => $code], false) }}">
    @endforeach
    <link rel="alternate" hreflang="x-default" href="{{ $publicUrl.route($page['route'], ['locale' => $site['default_locale']], false) }}">

    <meta property="og:site_name" content="{{ $site['brand']['name'] }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $page['title'] }}">
    <meta property="og:description" content="{{ $page['description'] }}">
    <meta property="og:url" content="{{ $currentPublicUrl }}">
    <meta property="og:image" content="{{ $logoPngPublicUrl }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $page['title'] }}">
    <meta name="twitter:description" content="{{ $page['description'] }}">
    <meta name="twitter:image" content="{{ $logoPngPublicUrl }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset($site['brand']['logo']) }}">
    <link rel="alternate icon" type="image/png" href="{{ asset($site['brand']['logo_png']) }}">

    @include('partials.stitch-theme')

    @include('partials.seo-schema')
    @stack('schema')
</head>
<body class="bg-background text-on-background selection:bg-primary selection:text-on-primary font-body-md overflow-x-hidden">
    @include('partials.stitch-header')

    <main class="pt-20">
        @yield('content')
    </main>

    @include('partials.stitch-footer')
</body>
</html>
