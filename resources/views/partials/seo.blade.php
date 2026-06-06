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

<!-- SEO Meta Tags -->
<meta name="description" content="{{ $description }}">
<meta name="robots" content="index, follow">
<link rel="canonical" href="{{ $currentUrl }}">

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
