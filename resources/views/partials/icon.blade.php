<svg class="icon-svg" viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    @switch($name)
        @case('home')
            <path d="m3 10.5 9-7 9 7"></path>
            <path d="M5 10v10h14V10"></path>
            <path d="M9 20v-6h6v6"></path>
            @break
        @case('info')
            <circle cx="12" cy="12" r="9"></circle>
            <path d="M12 10v6"></path>
            <path d="M12 7h.01"></path>
            @break
        @case('layers')
            <path d="m12 3 9 5-9 5-9-5 9-5Z"></path>
            <path d="m3 13 9 5 9-5"></path>
            <path d="m3 18 9 5 9-5"></path>
            @break
        @case('check')
            <circle cx="12" cy="12" r="9"></circle>
            <path d="m8 12 2.5 2.5L16 9"></path>
            @break
        @case('briefcase')
            <path d="M10 6V5a2 2 0 0 1 2-2h0a2 2 0 0 1 2 2v1"></path>
            <rect x="3" y="6" width="18" height="14" rx="2"></rect>
            <path d="M3 12h18"></path>
            @break
        @case('users')
            <path d="M16 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2"></path>
            <circle cx="9.5" cy="7" r="4"></circle>
            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            @break
        @case('phone')
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.79 19.79 0 0 1 3.09 5.18 2 2 0 0 1 5.11 3h3a2 2 0 0 1 2 1.72c.12.9.32 1.77.59 2.61a2 2 0 0 1-.45 2.11L9 10.69a16 16 0 0 0 4.31 4.31l1.25-1.25a2 2 0 0 1 2.11-.45c.84.27 1.71.47 2.61.59A2 2 0 0 1 22 16.92Z"></path>
            @break
        @case('menu')
            <path d="M4 7h16"></path>
            <path d="M4 12h16"></path>
            <path d="M4 17h16"></path>
            @break
    @endswitch
</svg>
