@php
    $locale = app()->getLocale();
    $localeSuffix = $locale === 'en' ? '.en' : '';

    $navItems = [
        ['label' => $locale === 'en' ? 'Home' : 'Beranda', 'route' => 'home'],
        ['label' => $locale === 'en' ? 'About' : 'Tentang Kami', 'route' => 'about'],
        ['label' => $locale === 'en' ? 'Services' : 'Layanan', 'route' => 'services'],
        ['label' => $locale === 'en' ? 'Solutions' : 'Solusi', 'route' => 'solutions'],
        ['label' => $locale === 'en' ? 'Delivery' : 'Metodologi', 'route' => 'delivery'],
        ['label' => $locale === 'en' ? 'Portfolio' : 'Portofolio', 'route' => 'portfolio'],
        ['label' => $locale === 'en' ? 'Contact' : 'Kontak', 'route' => 'contact'],
    ];

    $currentRouteName = request()->route() ? request()->route()->getName() : null;
    $currentParams = request()->route() ? request()->route()->parameters() : [];

    // Determine opposite locale route
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
        class="max-w-container-max mx-auto h-full px-margin-mobile md:px-margin-desktop flex items-center justify-between gap-4 xl:gap-6">

        {{-- Left: Logo --}}
        <div class="flex items-center shrink-0">
            <a class="flex items-center gap-2" href="{{ route('home' . $localeSuffix) }}"
                aria-label="Nakala Digital home">
                <img class="h-10 md:h-11 w-auto object-contain" src="{{ asset('assets/logo-nakala.png') }}"
                    alt="Nakala Digital">
            </a>
        </div>

        {{-- Center: Desktop Nav --}}
        <div class="hidden lg:flex items-center justify-center gap-4 xl:gap-6 flex-1">
            @foreach ($navItems as $item)
                @php
                    $active =
                        request()->routeIs($item['route'] . $localeSuffix) ||
                        ($item['route'] === 'services' && request()->routeIs('service' . $localeSuffix));
                @endphp
                <a class="relative whitespace-nowrap font-button text-button uppercase tracking-wide xl:tracking-wider transition-colors pb-0.5
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
            <div class="hidden md:flex items-center bg-[#A7F432] text-[#021943] rounded-lg px-3 py-2 text-sm font-button tracking-wider uppercase shadow-sm transition-colors hover:opacity-90">
                <a href="{{ $locale === 'id' ? '#' : $targetUrl }}"
                    class="{{ $locale === 'id' ? 'font-bold' : 'opacity-70 hover:opacity-100 transition-opacity' }}">ID</a>
                <span class="mx-2 opacity-40">|</span>
                <a href="{{ $locale === 'en' ? '#' : $targetUrl }}"
                    class="{{ $locale === 'en' ? 'font-bold' : 'opacity-70 hover:opacity-100 transition-opacity' }}">EN</a>
            </div>

            {{-- CTA (Desktop only) --}}
            <a class="hidden lg:inline-flex items-center justify-center bg-primary text-white px-5 py-2.5 rounded-lg font-button text-button uppercase tracking-wider hover:opacity-90 transition-opacity whitespace-nowrap"
                href="{{ route('contact' . $localeSuffix) }}">
                {{ $locale === 'en' ? 'Discuss Project' : 'Konsultasi' }}
            </a>

            {{-- Mobile Hamburger --}}
            <details class="lg:hidden relative">
                <summary
                    class="list-none cursor-pointer inline-flex h-10 w-10 items-center justify-center rounded-lg text-primary hover:bg-slate-100 transition-colors">
                    <span class="material-symbols-outlined">menu</span>
                </summary>
                <div class="absolute right-0 mt-3 w-56 rounded-xl bg-white shadow-lg ring-1 ring-black/5 p-2">
                    @foreach ($navItems as $item)
                        @php
                            $active =
                                request()->routeIs($item['route'] . $localeSuffix) ||
                                ($item['route'] === 'services' && request()->routeIs('service' . $localeSuffix));
                        @endphp
                        <a class="block rounded-lg px-4 py-2.5 font-button text-button uppercase tracking-wider transition-colors {{ $active ? 'bg-primary/10 text-primary' : 'text-on-surface-variant hover:bg-slate-50 hover:text-primary' }}"
                            href="{{ route($item['route'] . $localeSuffix) }}">
                            {{ $item['label'] }}
                        </a>
                    @endforeach

                    {{-- Mobile Language Switcher --}}
                    <div class="mt-2 pt-2 border-t border-slate-100 flex items-center justify-between p-2">
                        <span class="text-on-surface-variant font-normal text-sm">{{ app()->getLocale() === 'en' ? 'Language:' : 'Bahasa:' }}</span>
                        <div class="flex items-center bg-[#A7F432] text-[#021943] rounded-lg px-3 py-1.5 text-sm font-button tracking-wider uppercase shadow-sm">
                            <a href="{{ $locale === 'id' ? '#' : $targetUrl }}"
                                class="{{ $locale === 'id' ? 'font-bold' : 'opacity-70 hover:opacity-100 transition-opacity' }}">ID</a>
                            <span class="mx-2 opacity-40">|</span>
                            <a href="{{ $locale === 'en' ? '#' : $targetUrl }}"
                                class="{{ $locale === 'en' ? 'font-bold' : 'opacity-70 hover:opacity-100 transition-opacity' }}">EN</a>
                        </div>
                    </div>

                    <div class="mt-2 pt-2 border-t border-slate-100">
                        <a class="block text-center rounded-lg px-4 py-2.5 bg-primary text-white font-button text-button uppercase tracking-wider hover:opacity-90 transition-opacity"
                            href="{{ route('contact' . $localeSuffix) }}">
                            {{ $locale === 'en' ? 'Discuss Project' : 'Konsultasi' }}
                        </a>
                    </div>
                </div>
            </details>
        </div>

    </nav>
</header>
