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
        ['label' => $locale === 'en' ? 'Education Solutions' : 'Solusi Pendidikan', 'route' => 'solusi-pendidikan'],
        ['label' => $locale === 'en' ? 'Services & Solutions' : 'Layanan & Solusi', 'route' => 'services'],
        ['label' => $locale === 'en' ? 'Insights' : 'Insight', 'route' => 'insights'],
        ['label' => $locale === 'en' ? 'Portfolio' : 'Portofolio', 'route' => 'portfolio'],
        ['label' => $locale === 'en' ? 'Contact' : 'Kontak', 'route' => 'contact'],
    ];

    $isAboutActive = request()->routeIs(
        'company-profile' . $localeSuffix,
        'about' . $localeSuffix,
        'team' . $localeSuffix,
        'delivery' . $localeSuffix,
        'team.leadership' . $localeSuffix
    );

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
        <div class="hidden min-[1281px]:flex items-center justify-center gap-3 xl:gap-4 min-[1536px]:gap-5 min-w-0">

            {{-- Home --}}
            <a class="relative whitespace-nowrap font-button text-button uppercase transition-colors pb-0.5
                    {{ request()->routeIs('home' . $localeSuffix)
                        ? 'text-primary after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-primary after:rounded-full'
                        : 'text-on-surface-variant hover:text-primary' }}"
                href="{{ route('home' . $localeSuffix) }}">
                {{ $locale === 'en' ? 'Home' : 'Beranda' }}
            </a>

            {{-- About Us Dropdown (Hover on Desktop) --}}
            <div class="relative group" data-dropdown="about">
                <div class="flex items-center gap-0.5 py-4 -my-4">
                    <a href="{{ route('company-profile' . $localeSuffix) }}"
                        class="relative whitespace-nowrap font-button text-button uppercase transition-colors pb-0.5
                            {{ $isAboutActive
                                ? 'text-primary after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-primary after:rounded-full'
                                : 'text-on-surface-variant hover:text-primary' }}">
                        {{ $locale === 'en' ? 'About Us' : 'Tentang Kami' }}
                    </a>
                    <button aria-expanded="false" data-dropdown-trigger
                        class="flex items-center justify-center w-5 h-5 text-on-surface-variant hover:text-primary transition-colors">
                        <span class="material-symbols-outlined text-base transition-transform group-hover:rotate-180" data-chevron>expand_more</span>
                    </button>
                </div>
                {{-- Invisible bridge to prevent hover loss --}}
                <div class="absolute top-full left-0 w-full h-4"></div>
                <div data-dropdown-menu role="menu"
                    class="absolute top-[calc(100%+0.5rem)] left-0 w-56 bg-white rounded-[20px] shadow-lg ring-1 ring-black/5 p-2 
                        max-h-0 overflow-hidden opacity-0 scale-95 pointer-events-none transition-all duration-200 ease-out
                        group-hover:max-h-screen group-hover:opacity-100 group-hover:scale-100 group-hover:pointer-events-auto group-hover:overflow-visible">
                    <a href="{{ route('company-profile' . $localeSuffix) . '#vision-mission' }}"
                        role="menuitem"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-[20px] text-on-surface-variant hover:text-primary hover:bg-primary/5 transition-colors font-button text-sm">
                        <span class="material-symbols-outlined text-lg text-primary shrink-0">visibility</span>
                        {{ $locale === 'en' ? 'Vision & Mission' : 'Visi & Misi' }}
                    </a>
                    <a href="{{ route('company-profile' . $localeSuffix) . '#why-nakala' }}"
                        role="menuitem"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-[20px] text-on-surface-variant hover:text-primary hover:bg-primary/5 transition-colors font-button text-sm">
                        <span class="material-symbols-outlined text-lg text-primary shrink-0">star</span>
                        {{ $locale === 'en' ? 'Why Nakala' : 'Mengapa Nakala' }}
                    </a>
                    <a href="{{ route('company-profile' . $localeSuffix) . '#team' }}"
                        role="menuitem"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-[20px] text-on-surface-variant hover:text-primary hover:bg-primary/5 transition-colors font-button text-sm">
                        <span class="material-symbols-outlined text-lg text-primary shrink-0">groups</span>
                        {{ $locale === 'en' ? 'Team' : 'Tim' }}
                    </a>
                    <a href="{{ route('company-profile' . $localeSuffix) . '#methodology' }}"
                        role="menuitem"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-[20px] text-on-surface-variant hover:text-primary hover:bg-primary/5 transition-colors font-button text-sm">
                        <span class="material-symbols-outlined text-lg text-primary shrink-0">account_tree</span>
                        {{ $locale === 'en' ? 'Methodology' : 'Metodologi' }}
                    </a>
                </div>
            </div>

            @foreach ($navItems as $item)
                @php
                    $active =
                        request()->routeIs($item['route'] . $localeSuffix) ||
                        ($item['route'] === 'solusi-pendidikan' && request()->routeIs(
                            'solusi-pendidikan.detail' . $localeSuffix,
                            'solutions' . $localeSuffix,
                            'solutions.detail' . $localeSuffix
                        )) ||
                        ($item['route'] === 'services' && request()->routeIs(
                            'service' . $localeSuffix,
                            'services.detail' . $localeSuffix,
                            'layanan.detail' . $localeSuffix
                        )) ||
                        ($item['route'] === 'insights' && request()->routeIs('insights.detail' . $localeSuffix));
                @endphp
                <a class="relative whitespace-nowrap font-button text-button uppercase transition-colors pb-0.5
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
                class="hidden md:flex items-center bg-[#A7F432] text-[#031A44] rounded-[20px] px-3 py-2 text-sm font-button tracking-wider uppercase shadow-sm transition-colors hover:opacity-90">
                <a href="{{ $locale === 'id' ? '#' : $targetUrl }}"
                    class="{{ $locale === 'id' ? 'font-black text-[#031A44]' : 'opacity-60 hover:opacity-100 transition-opacity' }}">ID</a>
                <span class="mx-2 opacity-40">|</span>
                <a href="{{ $locale === 'en' ? '#' : $targetUrl }}"
                    class="{{ $locale === 'en' ? 'font-black text-[#031A44]' : 'opacity-60 hover:opacity-100 transition-opacity' }}">EN</a>
            </div>

            {{-- CTA (Menggunakan warna Cyan Solid #00A7D4 & rounded-full sesuai figma) --}}
            <a class="hidden min-[1281px]:inline-flex items-center justify-center bg-[#00A7D4] text-white px-6 py-2 rounded-full font-sans font-bold text-xs uppercase tracking-wider whitespace-nowrap transition-all hover:bg-[#0092ba]"
            {{-- CTA (Desktop only) --}}
            <a class="hidden min-[1281px]:inline-flex items-center justify-center bg-primary text-white px-4 py-2.5 rounded-[20px] font-button text-button uppercase tracking-wider hover:opacity-90 transition-opacity whitespace-nowrap"
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
                    class="list-none cursor-pointer inline-flex h-10 w-10 items-center justify-center rounded-[20px] text-primary hover:bg-slate-100 transition-colors">
                    <span class="material-symbols-outlined">menu</span>
                </summary>
                <div class="absolute right-0 mt-3 w-56 rounded-[20px] bg-white shadow-lg ring-1 ring-black/5 p-2">
                    {{-- Home (mobile) --}}
                    <a class="block rounded-[20px] px-4 py-2.5 font-button text-button uppercase tracking-wider transition-colors
                            {{ request()->routeIs('home' . $localeSuffix) ? 'bg-primary/10 text-primary' : 'text-on-surface-variant hover:bg-slate-50 hover:text-primary' }}"
                        href="{{ route('home' . $localeSuffix) }}">
                        {{ $locale === 'en' ? 'Home' : 'Beranda' }}
                    </a>

                    {{-- About Us (mobile sub-menu) --}}
                    <div class="relative" data-dropdown="about-mobile">
                        <div class="flex items-center justify-between rounded-[20px] px-4 py-2.5 font-button text-button uppercase tracking-wider transition-colors
                            {{ $isAboutActive ? 'bg-primary/10 text-primary' : 'text-on-surface-variant' }}">
                            <a href="{{ route('company-profile' . $localeSuffix) }}"
                                class="flex-1 {{ $isAboutActive ? 'text-primary' : 'text-on-surface-variant hover:text-primary' }}">
                                {{ $locale === 'en' ? 'About Us' : 'Tentang Kami' }}
                            </a>
                            <button onclick="toggleDropdown(this)" aria-expanded="false" data-dropdown-trigger
                                class="flex items-center justify-center w-6 h-6 text-on-surface-variant hover:text-primary transition-colors">
                                <span class="material-symbols-outlined text-sm transition-transform" data-chevron>expand_more</span>
                            </button>
                        </div>
                        <div data-dropdown-menu role="menu"
                            class="ml-3 mt-1 space-y-1 border-l-2 border-primary/20 pl-2
                                max-h-0 overflow-hidden opacity-0 scale-95 pointer-events-none transition-all duration-200 ease-out origin-top">
                            <a href="{{ route('company-profile' . $localeSuffix) . '#vision-mission' }}"
                                role="menuitem"
                                class="flex items-center gap-3 rounded-[20px] px-3 py-2 text-sm font-button transition-colors text-on-surface-variant hover:text-primary hover:bg-slate-50">
                                <span class="material-symbols-outlined text-lg text-primary shrink-0">visibility</span>
                                {{ $locale === 'en' ? 'Vision & Mission' : 'Visi & Misi' }}
                            </a>
                            <a href="{{ route('company-profile' . $localeSuffix) . '#why-nakala' }}"
                                role="menuitem"
                                class="flex items-center gap-3 rounded-[20px] px-3 py-2 text-sm font-button transition-colors text-on-surface-variant hover:text-primary hover:bg-slate-50">
                                <span class="material-symbols-outlined text-lg text-primary shrink-0">star</span>
                                {{ $locale === 'en' ? 'Why Nakala' : 'Mengapa Nakala' }}
                            </a>
                            <a href="{{ route('company-profile' . $localeSuffix) . '#team' }}"
                                role="menuitem"
                                class="flex items-center gap-3 rounded-[20px] px-3 py-2 text-sm font-button transition-colors text-on-surface-variant hover:text-primary hover:bg-slate-50">
                                <span class="material-symbols-outlined text-lg text-primary shrink-0">groups</span>
                                {{ $locale === 'en' ? 'Team' : 'Tim' }}
                            </a>
                            <a href="{{ route('company-profile' . $localeSuffix) . '#methodology' }}"
                                role="menuitem"
                                class="flex items-center gap-3 rounded-[20px] px-3 py-2 text-sm font-button transition-colors text-on-surface-variant hover:text-primary hover:bg-slate-50">
                                <span class="material-symbols-outlined text-lg text-primary shrink-0">account_tree</span>
                                {{ $locale === 'en' ? 'Methodology' : 'Metodologi' }}
                            </a>
                        </div>
                    </div>

                    @foreach ($navItems as $item)
                        @php $active = $isNavItemActive($item['route']); @endphp
                        <a class="block rounded-lg px-4 py-2.5 font-sans font-bold text-xs uppercase tracking-wider transition-colors {{ $active ? 'bg-[#00A7D4]/10 text-[#00A7D4]' : 'text-[#031A44] hover:bg-slate-50 hover:text-[#00A7D4]' }}"
                        @php
                            $active =
                                request()->routeIs($item['route'] . $localeSuffix) ||
                                ($item['route'] === 'solusi-pendidikan' && request()->routeIs(
                                    'solusi-pendidikan.detail' . $localeSuffix,
                                    'solutions' . $localeSuffix,
                                    'solutions.detail' . $localeSuffix
                                )) ||
                                ($item['route'] === 'services' && request()->routeIs(
                                    'service' . $localeSuffix,
                                    'services.detail' . $localeSuffix,
                                    'layanan.detail' . $localeSuffix
                                )) ||
                                ($item['route'] === 'insights' && request()->routeIs('insights.detail' . $localeSuffix));
                        @endphp
                        <a class="block rounded-[20px] px-4 py-2.5 font-button text-button uppercase tracking-wider transition-colors {{ $active ? 'bg-primary/10 text-primary' : 'text-on-surface-variant hover:bg-slate-50 hover:text-primary' }}"
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
                            class="flex items-center bg-[#A7F432] text-[#031A44] rounded-[20px] px-3 py-1.5 text-sm font-button tracking-wider uppercase shadow-sm">
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
                        <a class="block text-center rounded-[20px] px-4 py-2.5 bg-primary text-white font-button text-button uppercase tracking-wider hover:opacity-90 transition-opacity"
                            href="{{ route('contact' . $localeSuffix) }}">
                            {{ $locale === 'en' ? 'Contact Us' : 'Hubungi Kami' }}
                        </a>
                    </div>
                </div>
            </details>
        </div>

    </nav>
</header>

<script>
    function openDropdown(container) {
        var menu = container.querySelector('[data-dropdown-menu]');
        var chevron = container.querySelector('[data-chevron]');
        var trigger = container.querySelector('[data-dropdown-trigger]');
        if (menu) {
            menu.classList.remove('max-h-0', 'overflow-hidden', 'opacity-0', 'scale-95', 'pointer-events-none');
            menu.classList.add('max-h-screen', 'opacity-100', 'scale-100', 'pointer-events-auto');
        }
        if (chevron) chevron.classList.add('rotate-180');
        if (trigger) trigger.setAttribute('aria-expanded', 'true');
    }

    function closeDropdown(container) {
        var menu = container.querySelector('[data-dropdown-menu]');
        var chevron = container.querySelector('[data-chevron]');
        var trigger = container.querySelector('[data-dropdown-trigger]');
        if (menu) {
            menu.classList.remove('max-h-screen', 'opacity-100', 'scale-100', 'pointer-events-auto');
            menu.classList.add('max-h-0', 'overflow-hidden', 'opacity-0', 'scale-95', 'pointer-events-none');
        }
        if (chevron) chevron.classList.remove('rotate-180');
        if (trigger) trigger.setAttribute('aria-expanded', 'false');
    }

    function isDropdownOpen(container) {
        var menu = container.querySelector('[data-dropdown-menu]');
        return menu && menu.classList.contains('opacity-100');
    }

    function toggleDropdown(button) {
        var container = button.closest('[data-dropdown]');
        if (isDropdownOpen(container)) {
            closeDropdown(container);
        } else {
            // Close any other open dropdowns first
            document.querySelectorAll('[data-dropdown]').forEach(function(el) {
                if (el !== container && isDropdownOpen(el)) {
                    closeDropdown(el);
                }
            });
            openDropdown(container);
        }
    }

    // Close dropdown on outside click
    document.addEventListener('click', function(e) {
        document.querySelectorAll('[data-dropdown]').forEach(function(el) {
            if (!el.contains(e.target) && isDropdownOpen(el)) {
                closeDropdown(el);
            }
        });
    });

    // Close dropdown on Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            document.querySelectorAll('[data-dropdown]').forEach(function(el) {
                if (isDropdownOpen(el)) {
                    closeDropdown(el);
                }
            });
        }
    });
</script>
