@php
    $locale = app()->getLocale();
    $localeSuffix = $locale === 'en' ? '.en' : '';

    $navItems = [
        ['label' => $locale === 'en' ? 'Home' : 'Beranda', 'route' => 'home'],
        ['label' => $locale === 'en' ? 'About' : 'Tentang Kami', 'route' => 'about'],
        ['label' => $locale === 'en' ? 'Team' : 'Tim', 'route' => 'team'],
        ['label' => $locale === 'en' ? 'Services' : 'Layanan', 'route' => 'services'],
        // ['label' => $locale === 'en' ? 'Solutions' : 'Solusi', 'route' => 'solutions'],
        ['label' => $locale === 'en' ? 'Insights' : 'Insight', 'route' => 'insights'],
        ['label' => $locale === 'en' ? 'Delivery' : 'Metodologi', 'route' => 'delivery'],
        ['label' => $locale === 'en' ? 'Portfolio' : 'Portofolio', 'route' => 'portfolio'],
        ['label' => $locale === 'en' ? 'Contact' : 'Kontak', 'route' => 'contact'],
    ];

    $activeAliases = [
        'solutions' => 'solutions.detail',
        'services' => 'service',
        'insights' => 'insights.detail',
    ];

    $isNavItemActive = function (string $route) use ($localeSuffix, $activeAliases) {
        if (request()->routeIs($route . $localeSuffix)) {
            return true;
        }

        if (isset($activeAliases[$route]) && request()->routeIs($activeAliases[$route] . $localeSuffix)) {
            return true;
        }

        return false;
    };

    $currentRouteName = request()->route() ? request()->route()->getName() : null;
    $currentParams = request()->route() ? request()->route()->parameters() : [];

    if ($locale === 'en') {
        $targetRouteName = str_replace('.en', '', $currentRouteName);
        $targetUrl = $targetRouteName ? route($targetRouteName, $currentParams) : url('/');
    } else {
        $targetRouteName = $currentRouteName ? $currentRouteName . '.en' : 'home.en';
        $targetUrl = Route::has($targetRouteName) ? route($targetRouteName, $currentParams) : url('/en');
    }
@endphp

<header
    class="fixed top-0 inset-x-0 z-50 h-20 bg-white/95 backdrop-blur-xl shadow-[0_1px_12px_rgba(0,0,0,0.06)] transition-all duration-300">
    <nav
        class="w-full max-w-[1480px] mx-auto h-full px-margin-mobile md:px-8 xl:px-10 2xl:px-12 grid grid-cols-[auto_minmax(0,1fr)_auto] items-center gap-6 xl:gap-8">

        {{-- Left: Logo --}}
        <div class="flex items-center shrink-0">
            <a class="flex items-center gap-2" href="{{ route('home' . $localeSuffix) }}" aria-label="Nakala Digital home">
                <img class="h-10 md:h-11 w-auto object-contain" src="{{ asset('assets/logo-nakala.png') }}"
                    alt="Nakala Digital">
            </a>
        </div>

        {{-- Center: Desktop Nav --}}
        <div class="hidden min-[1281px]:flex items-center justify-center gap-3 xl:gap-4 min-[1536px]:gap-5 min-w-0">
            @foreach ($navItems as $item)
                @php $active = $isNavItemActive($item['route']); @endphp
                <a class="relative whitespace-nowrap font-button text-button uppercase transition-colors pb-0.5
                        {{ $active
                            ? 'text-primary after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-primary after:rounded-full'
                            : 'text-on-surface-variant hover:text-primary' }}"
                    href="{{ route($item['route'] . $localeSuffix) }}">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>

        {{-- Right: CTA, Language Switcher, and Mobile Hamburger --}}
        <div class="flex items-center justify-end gap-3 xl:gap-4 shrink-0">

            {{-- Language Switcher (Desktop/Tablet) --}}
            <div
                class="hidden md:flex items-center bg-[#A7F432] text-[#031A44] rounded-lg px-3.5 py-2.5 text-sm font-button tracking-wider uppercase shadow-sm transition-opacity hover:opacity-95">
                <a href="{{ $locale === 'id' ? '#' : $targetUrl }}"
                    class="{{ $locale === 'id' ? 'font-bold' : 'opacity-70 hover:opacity-100 transition-opacity' }}">ID</a>
                <span class="mx-2 opacity-40">|</span>
                <a href="{{ $locale === 'en' ? '#' : $targetUrl }}"
                    class="{{ $locale === 'en' ? 'font-bold' : 'opacity-70 hover:opacity-100 transition-opacity' }}">EN</a>
            </div>

            {{-- CTA (Desktop only) --}}
            <a class="hidden min-[1281px]:inline-flex items-center justify-center bg-gradient-to-r from-primary to-primary/80 text-white px-5 py-2.5 rounded-full font-button text-button uppercase tracking-wider whitespace-nowrap shadow-md shadow-primary/25 transition-all duration-300 ease-out hover:shadow-lg hover:shadow-primary/35 hover:-translate-y-0.5 active:translate-y-0 active:shadow-sm"
                href="{{ route('contact' . $localeSuffix) }}">
                {{ $locale === 'en' ? 'Contact Us' : 'Hubungi Kami' }}
            </a>

            {{-- Mobile Hamburger --}}
            <details class="min-[1281px]:hidden relative group">
                <summary
                    class="list-none cursor-pointer inline-flex h-10 w-10 items-center justify-center rounded-lg text-primary hover:bg-slate-100 transition-colors">
                    <svg class="h-6 w-6 block group-open:hidden" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5" />
                    </svg>
                    <svg class="h-6 w-6 hidden group-open:block" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </summary>
                <div class="absolute right-0 mt-3 w-60 rounded-xl bg-white shadow-lg ring-1 ring-black/5 p-2">
                    @foreach ($navItems as $item)
                        @php $active = $isNavItemActive($item['route']); @endphp
                        <a class="block rounded-lg px-4 py-2.5 font-button text-button uppercase tracking-wider transition-colors {{ $active ? 'bg-primary/10 text-primary' : 'text-on-surface-variant hover:bg-slate-50 hover:text-primary' }}"
                            href="{{ route($item['route'] . $localeSuffix) }}">
                            {{ $item['label'] }}
                        </a>
                    @endforeach

                    {{-- Mobile Language Switcher --}}
                    <div class="mt-2 pt-2 border-t border-slate-100 flex items-center justify-between p-2">
                        <span
                            class="text-on-surface-variant font-normal text-sm">{{ $locale === 'en' ? 'Language:' : 'Bahasa:' }}</span>
                        <div
                            class="flex items-center bg-[#A7F432] text-[#031A44] rounded-lg px-3 py-1.5 text-sm font-button tracking-wider uppercase shadow-sm">
                            <a href="{{ $locale === 'id' ? '#' : $targetUrl }}"
                                class="{{ $locale === 'id' ? 'font-bold' : 'opacity-70 hover:opacity-100 transition-opacity' }}">ID</a>
                            <span class="mx-2 opacity-40">|</span>
                            <a href="{{ $locale === 'en' ? '#' : $targetUrl }}"
                                class="{{ $locale === 'en' ? 'font-bold' : 'opacity-70 hover:opacity-100 transition-opacity' }}">EN</a>
                        </div>
                    </div>

                    {{-- Mobile CTA --}}
                    <div class="mt-2 pt-2 border-t border-slate-100">
                        <a class="block text-center rounded-full px-4 py-2.5 bg-gradient-to-r from-primary to-primary/80 text-white font-button text-button uppercase tracking-wider shadow-md shadow-primary/25 transition-all duration-300 active:scale-[0.98]"
                            href="{{ route('contact' . $localeSuffix) }}">
                            {{ $locale === 'en' ? 'Contact Us' : 'Hubungi Kami' }}
                        </a>
                    </div>
                </div>
            </details>
        </div>

    </nav>
</header>
