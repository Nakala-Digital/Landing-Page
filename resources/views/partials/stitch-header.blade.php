@php
    $homeUrl = route('home', ['locale' => $locale]);
    $navLabels = [
        'id' => ['01 MISI', '02 LAYANAN', '03 ALUR', '04 TIM', '05 KONTAK'],
        'en' => ['01 MISSION', '02 SERVICES', '03 WORKFLOW', '04 CREW', '05 CONNECT'],
    ];
    $labels = $navLabels[$locale] ?? $navLabels['en'];
    $navItems = [
        ['href' => $homeUrl.'#mission', 'label' => $labels[0], 'icon' => 'flag'],
        ['href' => $homeUrl.'#service-pillars', 'label' => $labels[1], 'icon' => 'design_services'],
        ['href' => $homeUrl.'#agile-delivery', 'label' => $labels[2], 'icon' => 'account_tree'],
        ['href' => route('team', ['locale' => $locale]), 'label' => $labels[3], 'icon' => 'groups'],
        ['href' => route('contact', ['locale' => $locale]), 'label' => $labels[4], 'icon' => 'call'],
    ];
@endphp

<header class="fixed top-0 w-full z-50 bg-white text-on-primary-fixed border-b-4 border-primary-container shadow-[4px_4px_0px_0px_#d2f000] flex items-center justify-between gap-sm px-margin-mobile md:px-margin-desktop h-20">
    <a class="header-logo inline-logo flex-shrink-0" href="{{ $homeUrl }}" aria-label="{{ $site['brand']['name'] }} home">
        @include('partials.logo')
    </a>

    <nav class="hidden lg:flex items-center gap-md font-label-sticker text-label-sticker tracking-widest" aria-label="Main navigation">
        @foreach ($navItems as $item)
            <a class="white-header-link inline-flex items-center gap-1.5 whitespace-nowrap hover:skew-x-2 transition-transform {{ $loop->first ? 'bg-secondary-fixed px-2 py-1 border-2 border-on-primary-fixed' : '' }}" href="{{ $item['href'] }}">
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

        <details class="mobile-nav relative lg:hidden">
            <summary class="w-11 h-11 border-2 border-on-primary-fixed bg-white text-on-primary-fixed grid place-items-center cursor-pointer" aria-label="Open navigation menu">
                <span class="material-symbols-outlined text-[26px] leading-none">menu</span>
            </summary>
            <div class="mobile-nav-panel absolute right-0 top-[calc(100%+12px)] bg-white text-on-primary-fixed border-4 border-primary-container shadow-[6px_6px_0px_0px_#d2f000] p-xs">
                <nav class="grid gap-1" aria-label="Mobile navigation">
                    @foreach ($navItems as $item)
                        <a class="flex items-center gap-sm min-h-12 px-sm border-2 border-transparent font-label-sticker text-label-sticker tracking-widest hover:border-on-primary-fixed hover:bg-secondary-fixed" href="{{ $item['href'] }}">
                            <span class="material-symbols-outlined text-[22px] leading-none">{{ $item['icon'] }}</span>
                            <span>{{ $item['label'] }}</span>
                        </a>
                    @endforeach
                </nav>
            </div>
        </details>
    </div>
</header>
