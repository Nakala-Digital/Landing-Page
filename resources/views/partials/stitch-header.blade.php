@php
    $homeUrl = route('home', ['locale' => $locale]);
    $navLabels = [
        'id' => ['Tentang', 'Layanan', 'Delivery', 'Portfolio', 'Tim', 'Kontak'],
        'en' => ['About', 'Services', 'Delivery', 'Portfolio', 'Team', 'Contact'],
    ];
    $labels = $navLabels[$locale] ?? $navLabels['en'];
    $navItems = [
        ['route' => 'about', 'href' => route('about', ['locale' => $locale]), 'label' => $labels[0], 'icon' => 'info'],
        ['route' => 'services', 'href' => route('services', ['locale' => $locale]), 'label' => $labels[1], 'icon' => 'design_services'],
        ['route' => 'delivery', 'href' => route('delivery', ['locale' => $locale]), 'label' => $labels[2], 'icon' => 'account_tree'],
        ['route' => 'portfolio', 'href' => route('portfolio', ['locale' => $locale]), 'label' => $labels[3], 'icon' => 'work'],
        ['route' => 'team', 'href' => route('team', ['locale' => $locale]), 'label' => $labels[4], 'icon' => 'groups'],
        ['route' => 'contact', 'href' => route('contact', ['locale' => $locale]), 'label' => $labels[5], 'icon' => 'call'],
    ];
@endphp

<header class="fixed top-0 w-full z-50 bg-white/95 text-on-primary-fixed border-b border-outline-variant shadow-soft backdrop-blur flex items-center justify-between gap-xs md:gap-sm px-margin-mobile md:px-margin-desktop h-20">
    <a class="header-logo inline-logo flex-shrink-0" href="{{ $homeUrl }}" aria-label="{{ $site['brand']['name'] }} home">
        @include('partials.logo')
    </a>

    <nav class="hidden xl:flex items-center gap-1 font-label-sticker text-label-sticker" aria-label="Main navigation">
        @foreach ($navItems as $item)
            <a class="white-header-link inline-flex items-center gap-1.5 whitespace-nowrap rounded-pill px-3 py-2 transition-colors {{ request()->routeIs($item['route']) ? 'bg-primary-fixed text-secondary-fixed' : 'hover:bg-primary-fixed' }}" href="{{ $item['href'] }}">
                <span class="material-symbols-outlined text-[18px] leading-none text-primary">{{ $item['icon'] }}</span>
                <span>{{ $item['label'] }}</span>
            </a>
        @endforeach
    </nav>

    <div class="flex items-center gap-xs flex-shrink-0">
        <div class="header-language hidden xl:flex items-center gap-1" aria-label="{{ $content['ui']['language'] }}">
            @foreach ($site['locales'] as $code => $language)
                <a class="font-label-code text-xs px-2 sm:px-2.5 py-1.5 rounded-pill border {{ $locale === $code ? 'bg-primary-container text-on-primary border-primary-container' : 'text-on-primary-fixed border-outline hover:border-primary-container' }}" href="{{ route($page['route'], ['locale' => $code]) }}">{{ $language['label'] }}</a>
            @endforeach
        </div>

        <details class="mobile-nav relative xl:hidden">
            <summary class="w-10 h-10 sm:w-11 sm:h-11 rounded-card border border-outline bg-white text-on-primary-fixed grid place-items-center cursor-pointer shadow-soft" aria-label="Open navigation menu">
                <span class="material-symbols-outlined text-[26px] leading-none">menu</span>
            </summary>
            <div class="mobile-nav-panel absolute right-0 top-[calc(100%+12px)] bg-white text-on-primary-fixed border border-outline-variant rounded-card shadow-card p-xs">
                <div class="grid grid-cols-2 gap-xs mb-xs" aria-label="{{ $content['ui']['language'] }}">
                    @foreach ($site['locales'] as $code => $language)
                        <a class="text-center font-label-code text-xs px-2 py-2 rounded-card border {{ $locale === $code ? 'bg-primary-container text-on-primary border-primary-container' : 'text-on-primary-fixed border-outline hover:border-primary-container' }}" href="{{ route($page['route'], ['locale' => $code]) }}">{{ $language['name'] }}</a>
                    @endforeach
                </div>
                <nav class="grid gap-1" aria-label="Mobile navigation">
                    @foreach ($navItems as $item)
                        <a class="flex items-center gap-sm min-h-12 px-sm rounded-card font-label-sticker text-label-sticker {{ request()->routeIs($item['route']) ? 'bg-primary-fixed text-secondary-fixed' : 'hover:bg-primary-fixed' }}" href="{{ $item['href'] }}">
                            <span class="material-symbols-outlined text-[22px] leading-none text-primary">{{ $item['icon'] }}</span>
                            <span>{{ $item['label'] }}</span>
                        </a>
                    @endforeach
                </nav>
            </div>
        </details>
    </div>
</header>
