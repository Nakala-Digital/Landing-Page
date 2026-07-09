<!-- Sticky Sub-Navigation for Company Profile -->
@php $locale = app()->getLocale(); @endphp

<nav id="company-profile-nav"
    class="fixed inset-x-0 z-40 bg-white/95 backdrop-blur-xl border-b border-outline-variant shadow-sm transition-all duration-300 invisible">
    <div
        class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop flex items-center gap-1 overflow-x-auto py-2 no-scrollbar">
        <a href="#vision-mission" data-section="vision-mission"
            class="sub-nav-link whitespace-nowrap px-3 py-1.5 text-xs font-semibold uppercase tracking-wider text-on-surface-variant hover:text-primary transition-colors">
            {{ $locale === 'en' ? 'Vision & Mission' : 'Visi & Misi' }}
        </a>
        <a href="#why-nakala" data-section="why-nakala"
            class="sub-nav-link whitespace-nowrap px-3 py-1.5 text-xs font-semibold uppercase tracking-wider text-on-surface-variant hover:text-primary transition-colors">
            {{ $locale === 'en' ? 'Why Nakala' : 'Mengapa Nakala' }}
        </a>
        <a href="#team" data-section="team"
            class="sub-nav-link whitespace-nowrap px-3 py-1.5 text-xs font-semibold uppercase tracking-wider text-on-surface-variant hover:text-primary transition-colors">
            {{ $locale === 'en' ? 'Team' : 'Tim' }}
        </a>
        <a href="#methodology" data-section="methodology"
            class="sub-nav-link whitespace-nowrap px-3 py-1.5 text-xs font-semibold uppercase tracking-wider text-on-surface-variant hover:text-primary transition-colors">
            {{ $locale === 'en' ? 'Methodology' : 'Metodologi' }}
        </a>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var subNav = document.getElementById('company-profile-nav');
        var heroSection = document.querySelector('#company-hero');

        if (subNav && heroSection) {
            var heroBottom = heroSection.offsetTop + heroSection.offsetHeight;

            window.addEventListener('scroll', function () {
                // Navbar height is deterministic: h-20 (80px) when scrollY <= 50,
                // h-16 (64px) when scrollY > 50. Reading getBoundingClientRect()
                // during its 300ms CSS transition returns an intermediate value,
                // so we compute from scroll position instead.
                var navHeight = window.scrollY > 50 ? 64 : 80;
                subNav.style.top = navHeight + 'px';

                if (window.scrollY > heroBottom - 80) {
                    subNav.classList.remove('invisible');
                } else {
                    subNav.classList.add('invisible');
                }
            });
        }

        // Active section tracking via IntersectionObserver
        var sectionIds = ['vision-mission', 'why-nakala', 'team', 'methodology'];
        var sectionElements = sectionIds.map(function (id) { return document.getElementById(id); });
        var navLinks = document.querySelectorAll('.sub-nav-link');

        var observer = new IntersectionObserver(function (entries) {
            var visibleSections = entries
                .filter(function (entry) { return entry.isIntersecting; })
                .sort(function (a, b) { return a.boundingClientRect.top - b.boundingClientRect.top; });

            if (visibleSections.length > 0) {
                var activeId = visibleSections[0].target.id;
                navLinks.forEach(function (link) {
                    if (link.getAttribute('data-section') === activeId) {
                        link.classList.add('active-nav');
                    } else {
                        link.classList.remove('active-nav');
                    }
                });
            }
        }, {
            rootMargin: '-88px 0px -50% 0px',
            threshold: 0
        });

        sectionElements.forEach(function (el) {
            if (el) observer.observe(el);
        });
    });
</script>
