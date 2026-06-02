@php
    $homeUrl = route('home', ['locale' => $locale]);
    $navLabels = [
        'id' => ['01 TENTANG', '02 LAYANAN', '03 DELIVERY', '04 PORTFOLIO', '05 TIM', '06 KONTAK'],
        'en' => ['01 ABOUT', '02 SERVICES', '03 DELIVERY', '04 PORTFOLIO', '05 TEAM', '06 CONTACT'],
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

<header class="fixed top-0 w-full z-50 bg-white text-on-primary-fixed border-b-4 border-primary-container shadow-[4px_4px_0px_0px_#d2f000] flex items-center justify-between gap-sm px-margin-mobile md:px-margin-desktop h-20">
    <a class="header-logo inline-logo flex-shrink-0" href="{{ $homeUrl }}" aria-label="{{ $site['brand']['name'] }} home">
        @include('partials.logo')
    </a>

    <nav class="hidden xl:flex items-center gap-sm font-label-sticker text-label-sticker tracking-widest" aria-label="Main navigation">
        @foreach ($navItems as $item)
            <a class="white-header-link inline-flex items-center gap-1.5 whitespace-nowrap px-2 py-1 border-2 transition-transform hover:skew-x-2 {{ request()->routeIs($item['route']) ? 'bg-secondary-fixed border-on-primary-fixed' : 'border-transparent hover:border-primary-container' }}" href="{{ $item['href'] }}">
                <span class="material-symbols-outlined text-[17px] leading-none">{{ $item['icon'] }}</span>
                <span>{{ $item['label'] }}</span>
            </a>
        @endforeach
    </nav>

    <div class="flex items-center gap-xs flex-shrink-0">
        <div class="flex items-center gap-1" aria-label="{{ $content['ui']['language'] }}">
            @foreach ($site['locales'] as $code => $language)
                <a class="font-label-code text-xs px-2 py-1 border-2 {{ $locale === $code ? 'bg-primary-container text-on-primary border-primary-container' : 'text-on-primary-fixed border-on-primary-fixed' }}" href="{{ route($page['route'], ['locale' => $code]) }}">{{ $language['label'] }}</a>
            @endforeach
        </div>

        <details class="mobile-nav relative xl:hidden">
            <summary class="w-11 h-11 border-2 border-on-primary-fixed bg-white text-on-primary-fixed grid place-items-center cursor-pointer" aria-label="Open navigation menu">
                <span class="material-symbols-outlined text-[26px] leading-none">menu</span>
            </summary>
            <div class="mobile-nav-panel absolute right-0 top-[calc(100%+12px)] bg-white text-on-primary-fixed border-4 border-primary-container shadow-[6px_6px_0px_0px_#d2f000] p-xs">
                <nav class="grid gap-1" aria-label="Mobile navigation">
                    @foreach ($navItems as $item)
                        <a class="flex items-center gap-sm min-h-12 px-sm border-2 font-label-sticker text-label-sticker tracking-widest {{ request()->routeIs($item['route']) ? 'border-on-primary-fixed bg-secondary-fixed' : 'border-transparent hover:border-on-primary-fixed hover:bg-secondary-fixed' }}" href="{{ $item['href'] }}">
                            <span class="material-symbols-outlined text-[22px] leading-none">{{ $item['icon'] }}</span>
                            <span>{{ $item['label'] }}</span>
                        </a>
                    @endforeach
                </nav>
            </div>
        </details>
    </div>
</header>
