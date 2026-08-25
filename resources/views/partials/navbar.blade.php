@php
    $locale = app()->getLocale();
    $localeSuffix = $locale === 'en' ? '.en' : '';

    // DISAMAKAN DENGAN FIGMA
    $navItems = [
        ['label' => $locale === 'en' ? 'Home' : 'Beranda', 'route' => 'home'],
        ['label' => $locale === 'en' ? 'Education Solutions' : 'Solusi Pendidikan', 'route' => 'solutions'],
        ['label' => $locale === 'en' ? 'AI Assistant' : 'AI Assistant', 'route' => 'ai-assistant'],
        ['label' => $locale === 'en' ? 'About Us' : 'Tentang Kami', 'route' => 'about'],
        ['label' => $locale === 'en' ? 'Insight' : 'Insight', 'route' => 'insights'],
        ['label' => $locale === 'en' ? 'Case Study' : 'Studi Kasus', 'route' => 'studi-kasus'],
        ['label' => $locale === 'en' ? 'Contact' : 'Kontak', 'route' => 'contact'],
    ];

    $activeAliases = [
        'solutions' => 'solutions.detail',
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
    class="fixed top-0 inset-x-0 z-50 h-20 bg-white shadow-[0_1px_12px_rgba(0,0,0,0.03)] transition-all duration-300">
    <nav
        class="w-full max-w-[1480px] mx-auto h-full px-6 md:px-8 xl:px-10 grid grid-cols-[auto_minmax(0,1fr)_auto] items-center gap-6 xl:gap-8">

        {{-- Left: Logo --}}
        <div class="flex items-center shrink-0">
            <a class="flex items-center gap-2" href="{{ route('home' . $localeSuffix) }}" aria-label="Nakala Digital home">
                <img class="h-10 md:h-11 w-auto object-contain" src="{{ asset('assets/logo-nakala.png') }}"
                    alt="Nakala Digital">
            </a>
        </div>

        {{-- Center: Desktop Nav --}}
        <div class="hidden min-[1281px]:flex items-center justify-center gap-4 xl:gap-6 min-w-0">
            @foreach ($navItems as $item)
                @php $active = $isNavItemActive($item['route']); @endphp
                {{-- Modifikasi style active state agar teks berwarna cyan dan garis bawah lebih tebal presisi --}}
                <a class="relative whitespace-nowrap font-sans font-bold text-xs uppercase transition-colors pb-3 pt-2
                        {{ $active
                            ? 'text-[#00A7D4] after:absolute after:bottom-0 after:left-0 after:w-full after:h-[3px] after:bg-[#00A7D4]'
                            : 'text-[#031A44] hover:text-[#00A7D4]' }}"
                    href="{{ route($item['route'] . $localeSuffix) }}">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>

        {{-- Right: CTA, Language Switcher, and Mobile Hamburger --}}
        <div class="flex items-center justify-end gap-3 xl:gap-4 shrink-0">

            {{-- Language Switcher (Menggunakan rounded-full agar berbentuk kapsul sesuai figma) --}}
            <div
                class="hidden md:flex items-center bg-[#A7F432] text-[#031A44] rounded-full px-5 py-2 text-xs font-bold tracking-wider uppercase">
                <a href="{{ $locale === 'id' ? '#' : $targetUrl }}"
                    class="{{ $locale === 'id' ? 'font-black text-[#031A44]' : 'opacity-60 hover:opacity-100 transition-opacity' }}">ID</a>
                <span class="mx-2 opacity-40">|</span>
                <a href="{{ $locale === 'en' ? '#' : $targetUrl }}"
                    class="{{ $locale === 'en' ? 'font-black text-[#031A44]' : 'opacity-60 hover:opacity-100 transition-opacity' }}">EN</a>
            </div>

            {{-- CTA (Menggunakan warna Cyan Solid #00A7D4 & rounded-full sesuai figma) --}}
            <a class="hidden min-[1281px]:inline-flex items-center justify-center bg-[#00A7D4] text-white px-6 py-2 rounded-full font-sans font-bold text-xs uppercase tracking-wider whitespace-nowrap transition-all hover:bg-[#0092ba]"
                href="{{ route('contact' . $localeSuffix) }}">
                {{ $locale === 'en' ? 'Contact Us' : 'Hubungi Kami' }}
            </a>

            {{-- Mobile Hamburger --}}
            <details class="min-[1281px]:hidden relative group">
                <summary
                    class="list-none cursor-pointer inline-flex h-10 w-10 items-center justify-center rounded-lg text-[#031A44] hover:bg-slate-100 transition-colors">
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
                        <a class="block rounded-lg px-4 py-2.5 font-sans font-bold text-xs uppercase tracking-wider transition-colors {{ $active ? 'bg-[#00A7D4]/10 text-[#00A7D4]' : 'text-[#031A44] hover:bg-slate-50 hover:text-[#00A7D4]' }}"
                            href="{{ route($item['route'] . $localeSuffix) }}">
                            {{ $item['label'] }}
                        </a>
                    @endforeach

                    {{-- Mobile Language Switcher --}}
                    <div class="mt-2 pt-2 border-t border-slate-100 flex items-center justify-between p-2">
                        <span
                            class="text-[#031A44] font-medium text-xs">{{ $locale === 'en' ? 'Language:' : 'Bahasa:' }}</span>
                        <div
                            class="flex items-center bg-[#A7F432] text-[#031A44] rounded-full px-4 py-1.5 text-xs font-bold tracking-wider uppercase">
                            <a href="{{ $locale === 'id' ? '#' : $targetUrl }}"
                                class="{{ $locale === 'id' ? 'font-black' : 'opacity-60' }}">ID</a>
                            <span class="mx-2 opacity-40">|</span>
                            <a href="{{ $locale === 'en' ? '#' : $targetUrl }}"
                                class="{{ $locale === 'en' ? 'font-black' : 'opacity-60' }}">EN</a>
                        </div>
                    </div>

                    {{-- Mobile CTA --}}
                    <div class="mt-2 pt-2 border-t border-slate-100">
                        <a class="block text-center rounded-full px-4 py-2.5 bg-[#00A7D4] text-white font-sans font-bold text-xs uppercase tracking-wider browser-default"
                            href="{{ route('contact' . $localeSuffix) }}">
                            {{ $locale === 'en' ? 'Contact Us' : 'Hubungi Kami' }}
                        </a>
                    </div>
                </div>
            </details>
        </div>

    </nav>
</header>
