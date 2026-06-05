<footer class="w-full bg-secondary-fixed text-on-secondary-fixed">
    <div class="px-margin-mobile md:px-margin-desktop py-xl grid grid-cols-1 lg:grid-cols-[1.1fr_0.9fr] gap-xl">
        <div>
            <a class="inline-flex h-14 w-52 bg-white rounded-card p-2 mb-md" href="{{ route('home', ['locale' => $locale]) }}" aria-label="{{ $site['brand']['name'] }} home">
                @include('partials.logo')
            </a>
            <p class="font-body-lg text-body-lg text-white/80 max-w-2xl mb-md">
                {{ $content['brand']['tagline'] }}
            </p>
            <p class="font-body-md text-body-md text-white/65 max-w-2xl">
                {{ $locale === 'id'
                    ? 'AI technology, software development, dan digital solutions partner berbasis Indonesia dengan dukungan strategic partner Romulus Digital.'
                    : 'Indonesia-based AI technology, software development, and digital solutions partner backed by Romulus Digital strategic partnership.' }}
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-lg">
            <div>
                <h2 class="font-label-sticker text-label-sticker text-primary mb-sm">{{ $locale === 'id' ? 'Navigasi' : 'Navigation' }}</h2>
                <nav class="grid gap-xs font-body-md text-body-md text-white/75">
                    <a class="hover:text-primary transition-colors" href="{{ route('about', ['locale' => $locale]) }}">{{ $locale === 'id' ? 'Tentang' : 'About' }}</a>
                    <a class="hover:text-primary transition-colors" href="{{ route('services', ['locale' => $locale]) }}">{{ $locale === 'id' ? 'Layanan' : 'Services' }}</a>
                    <a class="hover:text-primary transition-colors" href="{{ route('delivery', ['locale' => $locale]) }}">Delivery</a>
                    <a class="hover:text-primary transition-colors" href="{{ route('portfolio', ['locale' => $locale]) }}">Portfolio</a>
                    <a class="hover:text-primary transition-colors" href="{{ route('contact', ['locale' => $locale]) }}">{{ $locale === 'id' ? 'Kontak' : 'Contact' }}</a>
                </nav>
            </div>

            <div>
                <h2 class="font-label-sticker text-label-sticker text-primary mb-sm">{{ $locale === 'id' ? 'Kontak' : 'Contact' }}</h2>
                <div class="grid gap-md font-body-md text-body-md text-white/75">
                    <a class="flex items-start gap-sm hover:text-primary transition-colors break-words group" href="mailto:{{ $site['brand']['email'] }}">
                        <span class="material-symbols-outlined text-[20px] text-primary group-hover:text-white transition-colors">mail</span>
                        <span class="mt-0.5">{{ $site['brand']['email'] }}</span>
                    </a>
                    <a class="flex items-start gap-sm hover:text-primary transition-colors group" href="tel:+6282295706304">
                        <span class="material-symbols-outlined text-[20px] text-primary group-hover:text-white transition-colors">phone</span>
                        <span class="mt-0.5">{{ $site['brand']['phone'] }}</span>
                    </a>
                    <a class="flex items-start gap-sm hover:text-primary transition-colors group" href="https://{{ $site['brand']['website'] }}" target="_blank">
                        <span class="material-symbols-outlined text-[20px] text-primary group-hover:text-white transition-colors">language</span>
                        <span class="mt-0.5">{{ $site['brand']['website'] }}</span>
                    </a>
                    <div class="flex items-start gap-sm">
                        <span class="material-symbols-outlined text-[20px] text-primary">location_on</span>
                        <span class="leading-relaxed mt-0.5">{{ $site['brand']['location'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="border-t border-white/10 px-margin-mobile md:px-margin-desktop py-sm flex flex-col md:flex-row gap-xs md:items-center md:justify-between text-white/55 font-label-code text-label-code">
        <span>&copy;{{ date('Y') }} Nakala Digital</span>
        <span>{{ $locale === 'id' ? 'Strategic Partner of Romulus Digital' : 'Strategic Partner of Romulus Digital' }}</span>
    </div>
</footer>
