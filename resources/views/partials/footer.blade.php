<footer
    class="relative overflow-hidden bg-gradient-to-br from-[#031A44] via-[#042255] to-[#031A44] text-white border-t border-[#12AED0]/30">

    {{-- Dotted background pattern top-right --}}
    <div class="absolute top-0 right-0 w-80 h-80 opacity-[0.04]"
        style="background-image: radial-gradient(circle, #12AED0 1px, transparent 1px); background-size: 16px 16px;">
    </div>

    {{-- Cyan glow accent --}}
    <div
        class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[1px] bg-gradient-to-r from-transparent via-[#12AED0]/50 to-transparent">
    </div>

    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8 py-14 lg:py-16 items-start">

            {{-- COLUMN 1: Brand Information --}}
            <div class="lg:col-span-3 flex flex-col gap-6">
                <div
                    class="inline-flex w-fit items-center rounded-xl bg-white/95 px-5 py-3.5 shadow-[0_8px_32px_rgba(18,174,208,0.15)] border border-white/10">
                    <img class="h-10 md:h-12 w-auto object-contain" src="{{ asset('assets/logo-nakala.png') }}"
                        alt="Nakala Digital">
                </div>
                <p class="font-body-md text-white/60 leading-relaxed text-sm max-w-sm">
                    {{ app()->getLocale() === 'en'
                        ? 'Local Delivery, Regional Capability. Your strategic bridge to high-tier digital excellence across Indonesia.'
                        : 'Delivery Lokal, Kapabilitas Regional. Jembatan strategis Anda menuju keunggulan digital tingkat tinggi di seluruh Indonesia.' }}
                </p>

                {{-- Contact Info --}}
                <div class="space-y-3.5">
                    <div class="relative pl-9">
                        <span
                            class="material-symbols-outlined absolute left-0 top-0.5 text-[#12AED0] text-[18px] w-5 text-center leading-none">location_on</span>
                        <span class="font-body-md text-white/60 text-sm leading-relaxed">Pointlab Coworking
                            Space, Graha Pos
                            Indonesia, Jl. Banda No.30 Lantai 2 Blok C, Citarum, Bandung Wetan, Bandung City, West Java
                            40115</span>
                    </div>
                    <div class="relative pl-9">
                        <span
                            class="material-symbols-outlined absolute left-0 top-0.5 text-[#12AED0] text-[18px] w-5 text-center leading-none">mail</span>
                        <a href="mailto:contact@nakala.digital"
                            class="font-body-md text-white/60 text-sm hover:text-[#12AED0] transition-colors duration-300">contact@nakala.digital</a>
                    </div>
                    <div class="relative pl-9">
                        <span
                            class="material-symbols-outlined absolute left-0 top-0.5 text-[#12AED0] text-[18px] w-5 text-center leading-none">phone</span>
                        <a href="tel:+6282295706304"
                            class="font-body-md text-white/60 text-sm hover:text-[#12AED0] transition-colors duration-300">0822-9570-6304</a>
                    </div>
                </div>

                {{-- Socials --}}
                <div class="flex gap-3 mt-2">
                    <a href="https://www.linkedin.com/company/nakaladigital/posts/?feedView=all" target="_blank"
                        rel="noopener noreferrer" aria-label="Nakala Digital LinkedIn"
                        class="inline-flex items-center justify-center w-10 h-10 rounded-xl border border-white/10 bg-white/5 text-white/60 hover:text-white hover:bg-[#12AED0]/20 hover:border-[#12AED0]/40 transition-all duration-300">
                        <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor">
                            <path
                                d="M4.98 3.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3 9h4v12H3V9Zm6.5 0h3.8v1.7h.1c.5-1 1.9-2 3.9-2 4.2 0 5 2.8 5 6.4V21h-4v-5.2c0-1.2 0-2.9-1.8-2.9s-2.1 1.4-2.1 2.8V21h-4V9Z" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/nakala.digital/" target="_blank" rel="noopener noreferrer"
                        aria-label="Nakala Digital Instagram"
                        class="inline-flex items-center justify-center w-10 h-10 rounded-xl border border-white/10 bg-white/5 text-white/60 hover:text-white hover:bg-[#12AED0]/20 hover:border-[#12AED0]/40 transition-all duration-300">
                        <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" aria-hidden="true" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="5" />
                            <circle cx="12" cy="12" r="4" />
                            <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- COLUMN 2: Site Map Navigation --}}
            @php
                $localeSuffix = app()->getLocale() === 'en' ? '.en' : '';
            @endphp
            <div class="lg:col-span-2 flex flex-col gap-5">
                <h4 class="font-label-sm text-white uppercase tracking-[0.2em] text-xs font-semibold">
                    {{ app()->getLocale() === 'en' ? 'Sitemap' : 'Peta Situs' }}</h4>
                <ul class="space-y-3">
                    <li><a class="font-body-md text-white/55 hover:text-[#12AED0] transition-colors duration-300 text-sm inline-flex items-center gap-2 group"
                            href="{{ route('home' . $localeSuffix) }}">
                            <span class="w-0 h-[1px] bg-[#12AED0] group-hover:w-3 transition-all duration-300"></span>
                            {{ app()->getLocale() === 'en' ? 'Home' : 'Beranda' }}
                        </a>
                    </li>
                    <li><a class="font-body-md text-white/55 hover:text-[#12AED0] transition-colors duration-300 text-sm inline-flex items-center gap-2 group"
                            href="{{ route('services' . $localeSuffix) }}">
                            <span class="w-0 h-[1px] bg-[#12AED0] group-hover:w-3 transition-all duration-300"></span>
                            {{ app()->getLocale() === 'en' ? 'Education Solutions' : 'Solusi Pendidikan' }}
                        </a>
                    </li>
                    <li><a class="font-body-md text-white/55 hover:text-[#12AED0] transition-colors duration-300 text-sm inline-flex items-center gap-2 group"
                            href="{{ route('ai-assistant' . $localeSuffix) }}">
                            <span class="w-0 h-[1px] bg-[#12AED0] group-hover:w-3 transition-all duration-300"></span>
                            AI Assistant
                        </a>
                    </li>
                    <li><a class="font-body-md text-white/55 hover:text-[#12AED0] transition-colors duration-300 text-sm inline-flex items-center gap-2 group"
                            href="{{ route('company-profile' . $localeSuffix) }}">
                            <span class="w-0 h-[1px] bg-[#12AED0] group-hover:w-3 transition-all duration-300"></span>
                            {{ app()->getLocale() === 'en' ? 'About Us' : 'Tentang Kami' }}
                        </a>
                    </li>
                    <li><a class="font-body-md text-white/55 hover:text-[#12AED0] transition-colors duration-300 text-sm inline-flex items-center gap-2 group"
                            href="{{ route('insights' . $localeSuffix) }}">
                            <span class="w-0 h-[1px] bg-[#12AED0] group-hover:w-3 transition-all duration-300"></span>
                            {{ app()->getLocale() === 'en' ? 'Insights' : 'Insight' }}
                        </a>
                    </li>
                    <li><a class="font-body-md text-white/55 hover:text-[#12AED0] transition-colors duration-300 text-sm inline-flex items-center gap-2 group"
                            href="{{ route('portfolio' . $localeSuffix) }}">
                            <span class="w-0 h-[1px] bg-[#12AED0] group-hover:w-3 transition-all duration-300"></span>
                            {{ app()->getLocale() === 'en' ? 'Case Studies' : 'Studi Kasus' }}
                        </a>
                    </li>
                    <li><a class="font-body-md text-white/55 hover:text-[#12AED0] transition-colors duration-300 text-sm inline-flex items-center gap-2 group"
                            href="{{ route('contact' . $localeSuffix) }}">
                            <span class="w-0 h-[1px] bg-[#12AED0] group-hover:w-3 transition-all duration-300"></span>
                            {{ app()->getLocale() === 'en' ? 'Contact' : 'Kontak' }}
                        </a>
                    </li>
                </ul>
            </div>

            {{-- COLUMN 3: Strategic Partner Card --}}
            <div class="lg:col-span-3 flex flex-col gap-5">
                <h4 class="font-label-sm text-white uppercase tracking-[0.2em] text-xs font-semibold">
                    {{ app()->getLocale() === 'en' ? 'Strategic Partner' : 'Mitra Strategis' }}</h4>
                <div
                    class="flex items-center rounded-xl border border-white/10 bg-white/[0.03] shadow-[0_4px_24px_rgba(0,0,0,0.15)] p-6">
                    <div class="flex flex-col items-center text-center w-full gap-3">
                        <div
                            class="rounded-xl px-5 py-3.5 border border-white/10 shadow-[0_8px_32px_rgba(18,174,208,0.15)] inline-flex items-center">
                            <img alt="Romulus Digital" class="h-10 md:h-12 w-auto object-contain"
                                src="{{ asset('assets/romulus-putih.png') }}" />
                        </div>
                        <div>
                            <p class="text-[10px] text-white/50 uppercase tracking-widest font-semibold">
                                {{ app()->getLocale() === 'en' ? 'Strategic Partner' : 'Mitra Strategis' }}
                            </p>
                            <p class="text-[11px] text-[#12AED0]/70 mt-1">Romulus Digital</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- COLUMN 4: Google Maps Card --}}
            <div class="lg:col-span-4 flex flex-col gap-5">
                <h4 class="font-label-sm text-white uppercase tracking-[0.2em] text-xs font-semibold">
                    {{ app()->getLocale() === 'en' ? 'Find Us' : 'Temukan Kami' }}</h4>
                <div
                    class="h-[220px] rounded-xl overflow-hidden border border-white/10 bg-white/[0.03] shadow-[0_4px_24px_rgba(0,0,0,0.15)]">
                    <iframe
                        src="https://maps.google.com/maps?q=Pointlab+Coworking+Space,+Graha+Pos+Indonesia,+Jl.+Banda+No.30+Lantai+2+Blok+C,+Citarum,+Bandung+Wetan,+Bandung+City,+West+Java+40115&output=embed&hl=id&z=16"
                        width="100%" height="100%"
                        style="border:0; filter:invert(90%) hue-rotate(180deg) saturate(0.8);" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>

        {{-- Copyright Bar --}}
        <div
            class="py-6 border-t border-white/[0.07] flex flex-col md:flex-row justify-between gap-4 items-start md:items-center">
            <span class="font-body-md text-white/45 text-xs">&copy; {{ date('Y') }} Nakala Digital.
                {{ app()->getLocale() === 'en' ? 'All Rights Reserved.' : 'Hak Cipta Dilindungi.' }}</span>
            <div class="flex flex-wrap gap-x-6 gap-y-2">
                <a class="font-body-md text-white/45 hover:text-[#12AED0] text-xs transition-colors duration-300"
                    href="#">{{ app()->getLocale() === 'en' ? 'Privacy Policy' : 'Kebijakan Privasi' }}</a>
                <a class="font-body-md text-white/45 hover:text-[#12AED0] text-xs transition-colors duration-300"
                    href="#">{{ app()->getLocale() === 'en' ? 'Terms of Service' : 'Ketentuan Layanan' }}</a>
                <a class="font-body-md text-white/45 hover:text-[#12AED0] text-xs transition-colors duration-300"
                    href="#">{{ app()->getLocale() === 'en' ? 'Cookie Policy' : 'Kebijakan Cookie' }}</a>
            </div>
        </div>
    </div>
</footer>
