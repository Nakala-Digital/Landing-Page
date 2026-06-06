<footer class="bg-inverse-surface">

    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 py-12 border-b border-white/10">

            {{-- Brand Column --}}
            <div class="lg:col-span-3 flex flex-col gap-6">
                <img class="h-16 w-auto object-contain object-left -ml-3" src="{{ asset('assets/logo-nakala.png') }}"
                    alt="Nakala Digital">
                <p class="font-body-md text-surface-variant leading-relaxed text-sm pl-11 md:pl-0">
                    {{ app()->getLocale() === 'en'
                        ? 'Local Delivery, Regional Capability. Your strategic bridge to high-tier digital excellence across Indonesia.'
                        : 'Delivery Lokal, Kapabilitas Regional. Jembatan strategis Anda menuju keunggulan digital tingkat tinggi di seluruh Indonesia.' }}
                </p>

                {{-- Contact Info --}}
                <div class="space-y-3">
                    <div class="relative pl-11 md:pl-0">
                        <span
                            class="material-symbols-outlined absolute left-0 md:-left-8 top-1 text-primary text-[18px] w-5 text-center leading-none">location_on</span>
                        <span class="font-body-md text-surface-variant text-sm leading-relaxed">Pointlab Coworking
                            Space, Graha Pos
                            Indonesia, Jl. Banda No.30 Lantai 2 Blok C, Citarum, Bandung Wetan, Bandung City, West Java
                            40115</span>
                    </div>
                    <div class="relative pl-11 md:pl-0">
                        <span
                            class="material-symbols-outlined absolute left-0 md:-left-8 top-1 text-primary text-[18px] w-5 text-center leading-none">mail</span>
                        <span class="font-body-md text-surface-variant text-sm">contact@nakala.digital</span>
                    </div>
                    <div class="relative pl-11 md:pl-0">
                        <span
                            class="material-symbols-outlined absolute left-0 md:-left-8 top-1 text-primary text-[18px] w-5 text-center leading-none">phone</span>
                        <span class="font-body-md text-surface-variant text-sm">0822-9570-6304</span>
                    </div>
                </div>

                {{-- Socials --}}
                <div class="flex gap-3 mt-4">
                    <a href="https://www.linkedin.com/company/nakaladigital/posts/?feedView=all" target="_blank"
                        rel="noopener noreferrer" aria-label="Nakala Digital LinkedIn"
                        class="inline-flex items-center justify-center w-10 h-10 rounded-lg border border-white/10 text-surface-variant hover:text-white hover:border-primary/60 transition-all">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor">
                            <path
                                d="M4.98 3.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3 9h4v12H3V9Zm6.5 0h3.8v1.7h.1c.5-1 1.9-2 3.9-2 4.2 0 5 2.8 5 6.4V21h-4v-5.2c0-1.2 0-2.9-1.8-2.9s-2.1 1.4-2.1 2.8V21h-4V9Z" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/nakala.digital/" target="_blank" rel="noopener noreferrer"
                        aria-label="Nakala Digital Instagram"
                        class="inline-flex items-center justify-center w-10 h-10 rounded-lg border border-white/10 text-surface-variant hover:text-white hover:border-primary/60 transition-all">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="5" />
                            <circle cx="12" cy="12" r="4" />
                            <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Sitemap --}}
            @php
                $localeSuffix = app()->getLocale() === 'en' ? '.en' : '';
            @endphp
            <div class="lg:col-span-2 space-y-4">
                <h4 class="font-label-sm text-white uppercase tracking-widest">
                    {{ app()->getLocale() === 'en' ? 'Sitemap' : 'Peta Situs' }}</h4>
                <ul class="space-y-3">
                    <li><a class="font-body-md text-surface-variant hover:text-white transition-colors text-sm"
                            href="{{ route('home' . $localeSuffix) }}">{{ app()->getLocale() === 'en' ? 'Home' : 'Beranda' }}</a>
                    </li>
                    <li><a class="font-body-md text-surface-variant hover:text-white transition-colors text-sm"
                            href="{{ route('about' . $localeSuffix) }}">{{ app()->getLocale() === 'en' ? 'About Us' : 'Tentang Kami' }}</a>
                    </li>
                    <li><a class="font-body-md text-surface-variant hover:text-white transition-colors text-sm"
                            href="{{ route('services' . $localeSuffix) }}">{{ app()->getLocale() === 'en' ? 'Our Services' : 'Layanan Kami' }}</a>
                    </li>
                    <li><a class="font-body-md text-surface-variant hover:text-white transition-colors text-sm"
                            href="{{ route('portfolio' . $localeSuffix) }}">{{ app()->getLocale() === 'en' ? 'Project Portfolio' : 'Portofolio Projek' }}</a>
                    </li>
                    <li><a class="font-body-md text-surface-variant hover:text-white transition-colors text-sm"
                            href="{{ route('contact' . $localeSuffix) }}">{{ app()->getLocale() === 'en' ? 'Contact' : 'Kontak' }}</a>
                    </li>
                </ul>
            </div>

            {{-- Capabilities --}}
            <div class="lg:col-span-2 space-y-4">
                <h4 class="font-label-sm text-white uppercase tracking-widest">
                    {{ app()->getLocale() === 'en' ? 'Capabilities' : 'Kapabilitas' }}</h4>
                <ul class="space-y-3">
                    <li><a class="font-body-md text-surface-variant hover:text-white transition-colors text-sm"
                            href="#">{{ app()->getLocale() === 'en' ? 'Software Development' : 'Pengembangan Software' }}</a>
                    </li>
                    <li><a class="font-body-md text-surface-variant hover:text-white transition-colors text-sm"
                            href="#">{{ app()->getLocale() === 'en' ? 'AI & Data Analytics' : 'AI & Analitik Data' }}</a>
                    </li>
                    <li><a class="font-body-md text-surface-variant hover:text-white transition-colors text-sm"
                            href="#">{{ app()->getLocale() === 'en' ? 'Tech Advisory' : 'Konsultasi Teknologi' }}</a>
                    </li>
                    <li><a class="font-body-md text-surface-variant hover:text-white transition-colors text-sm"
                            href="#">{{ app()->getLocale() === 'en' ? 'Cloud Infrastructure' : 'Infrastruktur Cloud' }}</a>
                    </li>
                </ul>
            </div>

            {{-- Strategic Partner --}}
            <div class="lg:col-span-2 space-y-4">
                <h4 class="font-label-sm text-white uppercase tracking-widest">
                    {{ app()->getLocale() === 'en' ? 'Strategic Partner' : 'Mitra Strategis' }}</h4>
                <div class="bg-white/5 p-4 rounded-xl border border-white/10 inline-block">
                    <img alt="Romulus Digital" class="h-10 w-auto object-contain"
                        src="{{ asset('assets/romulus-putih.png') }}" />
                    <p class="text-[10px] text-surface-variant mt-2 uppercase tracking-wider">
                        {{ app()->getLocale() === 'en' ? 'Official Regional Partner' : 'Mitra Regional Resmi' }}
                    </p>
                </div>
            </div>

            {{-- Maps Column --}}
            <div class="lg:col-span-3 flex flex-col gap-4">
                <h4 class="font-label-sm text-white uppercase tracking-widest">
                    {{ app()->getLocale() === 'en' ? 'Find Us' : 'Temukan Kami' }}</h4>
                <div class="h-[180px] rounded-xl overflow-hidden border border-white/10 ring-1 ring-white/5">
                    <iframe
                        src="https://maps.google.com/maps?q=Pointlab+Coworking+Space,+Graha+Pos+Indonesia,+Jl.+Banda+No.30+Lantai+2+Blok+C,+Citarum,+Bandung+Wetan,+Bandung+City,+West+Java+40115&output=embed&hl=id&z=16"
                        width="100%" height="100%"
                        style="border:0; filter:invert(90%) hue-rotate(180deg) saturate(0.8);" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>

        {{-- Bottom: Copyright --}}
        <div class="py-6 flex flex-row justify-between gap-4 items-center">
            <span class="font-body-md text-surface-variant text-sm">© {{ date('Y') }} Nakala Digital.
                {{ app()->getLocale() === 'en' ? 'All Rights Reserved.' : 'Hak Cipta Dilindungi.' }}</span>
            <div class="flex gap-6">
                <a class="font-body-md text-surface-variant hover:text-white text-sm transition-colors"
                    href="#">{{ app()->getLocale() === 'en' ? 'Privacy Policy' : 'Kebijakan Privasi' }}</a>
                <a class="font-body-md text-surface-variant hover:text-white text-sm transition-colors"
                    href="#">{{ app()->getLocale() === 'en' ? 'Terms of Service' : 'Ketentuan Layanan' }}</a>
                <a class="font-body-md text-surface-variant hover:text-white text-sm transition-colors"
                    href="#">{{ app()->getLocale() === 'en' ? 'Cookie Policy' : 'Kebijakan Cookie' }}</a>
            </div>
        </div>

    </div>
</footer>
