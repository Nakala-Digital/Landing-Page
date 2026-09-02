@php
    $locale = app()->getLocale();
    $localeSuffix = $locale === 'en' ? '.en' : '';

    $navItemsBefore = [
        ['label' => $locale === 'en' ? 'Education Solutions' : 'Solusi Pendidikan', 'route' => 'services'],
        ['label' => 'AI Assistant', 'route' => 'ai-assistant'],
    ];

    $navItemsAfter = [
        ['label' => $locale === 'en' ? 'Insights' : 'Insight', 'route' => 'insights'],
        ['label' => $locale === 'en' ? 'Case Studies' : 'Studi Kasus', 'route' => 'portfolio'],
        ['label' => $locale === 'en' ? 'Contact' : 'Kontak', 'route' => 'contact'],
    ];

    $isAboutActive = request()->routeIs(
        'company-profile' . $localeSuffix,
        'about' . $localeSuffix,
        'team' . $localeSuffix,
        'delivery' . $localeSuffix,
        'team.leadership' . $localeSuffix,
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
        <div class="hidden lg:flex items-center justify-center gap-3 xl:gap-4 min-[1536px]:gap-5 min-w-0">

            {{-- Home --}}
            <a class="relative whitespace-nowrap font-button text-button uppercase transition-colors pb-0.5
                    {{ request()->routeIs('home' . $localeSuffix)
                        ? 'text-primary after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-primary after:rounded-full'
                        : 'text-on-surface-variant hover:text-primary' }}"
                href="{{ route('home' . $localeSuffix) }}">
                {{ $locale === 'en' ? 'Home' : 'Beranda' }}
            </a>

            @foreach ($navItemsBefore as $item)
                @php
                    $url = isset($item['anchor'])
                        ? route($item['route'] . $localeSuffix) . $item['anchor']
                        : route($item['route'] . $localeSuffix);
                    $active =
                        ($item['route'] === 'services' &&
                            request()->routeIs(
                                'services' . $localeSuffix,
                                'service' . $localeSuffix,
                                'solutions' . $localeSuffix,
                                'solutions.detail' . $localeSuffix,
                            )) ||
                        ($item['route'] === 'ai-assistant' &&
                            request()->routeIs('ai-assistant' . $localeSuffix)) ||
                        (isset($item['anchor']) && request()->routeIs('home' . $localeSuffix));
                @endphp
                <a class="relative whitespace-nowrap font-button text-button uppercase transition-colors pb-0.5
                        {{ $active
                            ? 'text-primary after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-primary after:rounded-full'
                            : 'text-on-surface-variant hover:text-primary' }}"
                    href="{{ $url }}">
                    {{ $item['label'] }}
                </a>
            @endforeach

            {{-- About Us --}}
            <a class="relative whitespace-nowrap font-button text-button uppercase transition-colors pb-0.5
                    {{ $isAboutActive
                        ? 'text-primary after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-primary after:rounded-full'
                        : 'text-on-surface-variant hover:text-primary' }}"
                href="{{ route('company-profile' . $localeSuffix) }}">
                {{ $locale === 'en' ? 'About Us' : 'Tentang Kami' }}
            </a>

            @foreach ($navItemsAfter as $item)
                @php
                    $active =
                        request()->routeIs($item['route'] . $localeSuffix) ||
                        ($item['route'] === 'insights' && request()->routeIs('insights.detail' . $localeSuffix));
                @endphp
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
                class="hidden md:flex items-center bg-[#A7F432] text-[#031A44] rounded-[20px] px-3 py-2 text-sm font-button tracking-wider uppercase shadow-sm transition-colors hover:opacity-90">
                <a href="{{ $locale === 'id' ? '#' : $targetUrl }}"
                    class="{{ $locale === 'id' ? 'font-bold' : 'opacity-70 hover:opacity-100 transition-opacity' }}">ID</a>
                <span class="mx-2 opacity-40">|</span>
                <a href="{{ $locale === 'en' ? '#' : $targetUrl }}"
                    class="{{ $locale === 'en' ? 'font-bold' : 'opacity-70 hover:opacity-100 transition-opacity' }}">EN</a>
            </div>

            {{-- CTA (Desktop only) --}}
            <a class="hidden xl:inline-flex items-center justify-center bg-primary text-white px-4 py-2.5 rounded-[20px] font-button text-button uppercase tracking-wider hover:opacity-90 transition-opacity whitespace-nowrap"
                href="{{ route('contact' . $localeSuffix) }}">
                {{ $locale === 'en' ? 'Contact Us' : 'Hubungi Kami' }}
            </a>

            {{-- Mobile Hamburger --}}
            <details class="lg:hidden relative group">
                <summary
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

                    @foreach ($navItemsBefore as $item)
                        @php
                            $url = isset($item['anchor'])
                                ? route($item['route'] . $localeSuffix) . $item['anchor']
                                : route($item['route'] . $localeSuffix);
                            $active =
                                ($item['route'] === 'services' &&
                                    request()->routeIs(
                                        'services' . $localeSuffix,
                                        'service' . $localeSuffix,
                                        'solutions' . $localeSuffix,
                                        'solutions.detail' . $localeSuffix,
                                    )) ||
                                ($item['route'] === 'ai-assistant' &&
                                    request()->routeIs('ai-assistant' . $localeSuffix)) ||
                                (isset($item['anchor']) && request()->routeIs('home' . $localeSuffix));
                        @endphp
                        <a class="block rounded-[20px] px-4 py-2.5 font-button text-button uppercase tracking-wider transition-colors {{ $active ? 'bg-primary/10 text-primary' : 'text-on-surface-variant hover:bg-slate-50 hover:text-primary' }}"
                            href="{{ $url }}">
                            {{ $item['label'] }}
                        </a>
                    @endforeach

                    {{-- About Us (mobile) --}}
                    <a class="block rounded-[20px] px-4 py-2.5 font-button text-button uppercase tracking-wider transition-colors {{ $isAboutActive ? 'bg-primary/10 text-primary' : 'text-on-surface-variant hover:bg-slate-50 hover:text-primary' }}"
                        href="{{ route('company-profile' . $localeSuffix) }}">
                        {{ $locale === 'en' ? 'About Us' : 'Tentang Kami' }}
                    </a>

                    @foreach ($navItemsAfter as $item)
                        @php
                            $active =
                                request()->routeIs($item['route'] . $localeSuffix) ||
                                ($item['route'] === 'insights' &&
                                    request()->routeIs('insights.detail' . $localeSuffix));
                        @endphp
                        <a class="block rounded-[20px] px-4 py-2.5 font-button text-button uppercase tracking-wider transition-colors {{ $active ? 'bg-primary/10 text-primary' : 'text-on-surface-variant hover:bg-slate-50 hover:text-primary' }}"
                            href="{{ route($item['route'] . $localeSuffix) }}">
                            {{ $item['label'] }}
                        </a>
                    @endforeach

                    {{-- Mobile Language Switcher --}}
                    <div class="mt-2 pt-2 border-t border-slate-100 flex items-center justify-between p-2">
                        <span
                            class="text-on-surface-variant font-normal text-sm">{{ $locale === 'en' ? 'Language:' : 'Bahasa:' }}</span>
                        <div
                            class="flex items-center bg-[#A7F432] text-[#031A44] rounded-[20px] px-3 py-1.5 text-sm font-button tracking-wider uppercase shadow-sm">
                            <a href="{{ $locale === 'id' ? '#' : $targetUrl }}"
                                class="{{ $locale === 'id' ? 'font-bold' : 'opacity-70 hover:opacity-100 transition-opacity' }}">ID</a>
                            <span class="mx-2 opacity-40">|</span>
                            <a href="{{ $locale === 'en' ? '#' : $targetUrl }}"
                                class="{{ $locale === 'en' ? 'font-bold' : 'opacity-70 hover:opacity-100 transition-opacity' }}">EN</a>
                        </div>
                    </div>

                    {{-- Mobile CTA --}}
                    <div class="mt-2 pt-2 border-t border-slate-100">
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
