@php
    $locale = app()->getLocale();
    $currentUrl = request()->url();

    // Construct alternate URLs
    $currentRouteName = request()->route() ? request()->route()->getName() : null;
    $currentParams = request()->route() ? request()->route()->parameters() : [];

    if ($locale === 'en') {
        $idRouteName = str_replace('.en', '', $currentRouteName);
        $alternateIdUrl = $idRouteName && Route::has($idRouteName) ? route($idRouteName, $currentParams) : url('/');
        $alternateEnUrl = $currentUrl;
    } else {
        $enRouteName = $currentRouteName ? $currentRouteName . '.en' : 'home.en';
        $alternateIdUrl = $currentUrl;
        $alternateEnUrl = Route::has($enRouteName) ? route($enRouteName, $currentParams) : url('/en');
    }
@endphp

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
    rel="stylesheet">

<style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }
</style>

<!-- SEO Meta Tags -->
<meta name="description" content="{{ $description }}">
<meta name="robots" content="index, follow">
<link rel="canonical" href="{{ $currentUrl }}">

<!-- Favicons -->
<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}?v=4">
<link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}?v=4">

<!-- Alternate Languages -->
<link rel="alternate" hreflang="id" href="{{ $alternateIdUrl }}">
<link rel="alternate" hreflang="en" href="{{ $alternateEnUrl }}">
<link rel="alternate" hreflang="x-default" href="{{ $alternateIdUrl }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ $currentUrl }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:image" content="{{ asset('assets/logo-nakala.png') }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ $currentUrl }}">
<meta property="twitter:title" content="{{ $title }}">
<meta property="twitter:description" content="{{ $description }}">
<meta property="twitter:image" content="{{ asset('assets/logo-nakala.png') }}">
