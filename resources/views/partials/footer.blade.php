<footer class="relative overflow-hidden bg-[#031A44] text-white border-t-4 border-[#12AED0]">
    <div class="absolute inset-x-0 top-0 h-1 bg-[#A7F432]"></div>

    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 py-12 border-b border-white/20">

            {{-- Brand Column --}}
            <div class="lg:col-span-3 flex flex-col gap-6">
                <div
                    class="inline-flex w-fit items-center rounded-lg bg-white px-4 py-3 ring-1 ring-[#12AED0]/30 shadow-[0_12px_30px_rgba(0,0,0,0.18)]">
                    <img class="h-12 md:h-14 w-auto object-contain" src="{{ asset('assets/logo-nakala.png') }}"
                        alt="Nakala Digital">
                </div>
                <p class="font-body-md text-white/75 leading-relaxed text-sm">
                    {{ app()->getLocale() === 'en'
                        ? 'Local Delivery, Regional Capability. Your strategic bridge to high-tier digital excellence across Indonesia.'
                        : 'Delivery Lokal, Kapabilitas Regional. Jembatan strategis Anda menuju keunggulan digital tingkat tinggi di seluruh Indonesia.' }}
                </p>

                {{-- Contact Info --}}
                <div class="space-y-3">
                    <div class="relative pl-8">
                        <span
                            class="material-symbols-outlined absolute left-0 top-1 text-[#12AED0] text-[18px] w-5 text-center leading-none">location_on</span>
                        <span class="font-body-md text-white/75 text-sm leading-relaxed">Pointlab Coworking
                            Space, Graha Pos
                            Indonesia, Jl. Banda No.30 Lantai 2 Blok C, Citarum, Bandung Wetan, Bandung City, West Java
                            40115</span>
                    </div>
                    <div class="relative pl-8">
                        <span
                            class="material-symbols-outlined absolute left-0 top-1 text-[#12AED0] text-[18px] w-5 text-center leading-none">mail</span>
                        <span class="font-body-md text-white/75 text-sm">contact@nakala.digital</span>
                    </div>
                    <div class="relative pl-8">
                        <span
                            class="material-symbols-outlined absolute left-0 top-1 text-[#12AED0] text-[18px] w-5 text-center leading-none">phone</span>
                        <span class="font-body-md text-white/75 text-sm">0822-9570-6304</span>
                    </div>
                </div>

                {{-- Socials --}}
                <div class="flex gap-3 mt-4">
                    <a href="https://www.linkedin.com/company/nakaladigital/posts/?feedView=all" target="_blank"
                        rel="noopener noreferrer" aria-label="Nakala Digital LinkedIn"
                        class="inline-flex items-center justify-center w-10 h-10 rounded-lg border border-white/20 text-white/75 hover:text-[#A7F432] hover:border-[#12AED0] transition-all">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor">
                            <path
                                d="M4.98 3.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3 9h4v12H3V9Zm6.5 0h3.8v1.7h.1c.5-1 1.9-2 3.9-2 4.2 0 5 2.8 5 6.4V21h-4v-5.2c0-1.2 0-2.9-1.8-2.9s-2.1 1.4-2.1 2.8V21h-4V9Z" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/nakala.digital/" target="_blank" rel="noopener noreferrer"
                        aria-label="Nakala Digital Instagram"
                        class="inline-flex items-center justify-center w-10 h-10 rounded-lg border border-white/20 text-white/75 hover:text-[#A7F432] hover:border-[#12AED0] transition-all">
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
                    <li><a class="font-body-md text-white/75 hover:text-[#A7F432] transition-colors text-sm"
                            href="{{ route('home' . $localeSuffix) }}">{{ app()->getLocale() === 'en' ? 'Home' : 'Beranda' }}</a>
                    </li>
                    <li><a class="font-body-md text-white/75 hover:text-[#A7F432] transition-colors text-sm"
                            href="{{ route('about' . $localeSuffix) }}">{{ app()->getLocale() === 'en' ? 'About Us' : 'Tentang Kami' }}</a>
                    </li>
                    <li><a class="font-body-md text-white/75 hover:text-[#A7F432] transition-colors text-sm"
                            href="{{ route('team' . $localeSuffix) }}">{{ app()->getLocale() === 'en' ? 'Team & Partnership' : 'Tim & Kemitraan' }}</a>
                    </li>
                    <li><a class="font-body-md text-white/75 hover:text-[#A7F432] transition-colors text-sm"
                            href="{{ route('services' . $localeSuffix) }}">{{ app()->getLocale() === 'en' ? 'Our Services' : 'Layanan Kami' }}</a>
                    </li>
                    <li><a class="font-body-md text-white/75 hover:text-[#A7F432] transition-colors text-sm"
                            href="{{ route('portfolio' . $localeSuffix) }}">{{ app()->getLocale() === 'en' ? 'Project Portfolio' : 'Portofolio Projek' }}</a>
                    </li>
                    <li><a class="font-body-md text-white/75 hover:text-[#A7F432] transition-colors text-sm"
                            href="{{ route('insights' . $localeSuffix) }}">{{ app()->getLocale() === 'en' ? 'Insights' : 'Insight' }}</a>
                    </li>
                    <li><a class="font-body-md text-white/75 hover:text-[#A7F432] transition-colors text-sm"
                            href="{{ route('contact' . $localeSuffix) }}">{{ app()->getLocale() === 'en' ? 'Contact' : 'Kontak' }}</a>
                    </li>
                </ul>
            </div>

            {{-- Capabilities --}}
            <div class="lg:col-span-2 space-y-4">
                <h4 class="font-label-sm text-white uppercase tracking-widest">
                    {{ app()->getLocale() === 'en' ? 'Capabilities' : 'Kapabilitas' }}</h4>
                <ul class="space-y-3">
                    <li><a class="font-body-md text-white/75 hover:text-[#A7F432] transition-colors text-sm"
                            href="#">{{ app()->getLocale() === 'en' ? 'Software Development' : 'Pengembangan Software' }}</a>
                    </li>
                    <li><a class="font-body-md text-white/75 hover:text-[#A7F432] transition-colors text-sm"
                            href="#">{{ app()->getLocale() === 'en' ? 'AI & Data Analytics' : 'AI & Analitik Data' }}</a>
                    </li>
                    <li><a class="font-body-md text-white/75 hover:text-[#A7F432] transition-colors text-sm"
                            href="#">{{ app()->getLocale() === 'en' ? 'Tech Advisory' : 'Konsultasi Teknologi' }}</a>
                    </li>
                    <li><a class="font-body-md text-white/75 hover:text-[#A7F432] transition-colors text-sm"
                            href="#">{{ app()->getLocale() === 'en' ? 'Cloud Infrastructure' : 'Infrastruktur Cloud' }}</a>
                    </li>
                </ul>
            </div>

            {{-- Strategic Partner --}}
            <div class="lg:col-span-2 space-y-4 flex flex-col items-start lg:items-center">
                <h4 class="font-label-sm text-white uppercase tracking-widest lg:text-center">
                    {{ app()->getLocale() === 'en' ? 'Strategic Partner' : 'Mitra Strategis' }}</h4>
                <div
                    class="bg-white/10 p-3 rounded-lg border border-white/20 inline-flex flex-col items-center text-center">
                    <img alt="Romulus Digital" class="h-8 w-auto object-contain opacity-70"
                        src="{{ asset('assets/romulus-putih.png') }}" />
                    <p class="text-[9px] text-white/60 mt-2 uppercase tracking-wider">
                        {{ app()->getLocale() === 'en' ? 'Strategic Partner' : 'Mitra Strategis' }}
                    </p>
                </div>
            </div>

            {{-- Maps Column --}}
            <div class="lg:col-span-3 flex flex-col gap-4">
                <h4 class="font-label-sm text-white uppercase tracking-widest">
                    {{ app()->getLocale() === 'en' ? 'Find Us' : 'Temukan Kami' }}</h4>
                <div class="h-[180px] rounded-lg overflow-hidden border border-white/20 ring-1 ring-[#12AED0]/20">
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
        <div class="py-6 flex flex-col md:flex-row justify-between gap-4 items-start md:items-center">
            <span class="font-body-md text-white/65 text-sm">&copy; {{ date('Y') }} Nakala Digital.
                {{ app()->getLocale() === 'en' ? 'All Rights Reserved.' : 'Hak Cipta Dilindungi.' }}</span>
            <div class="flex flex-wrap gap-x-6 gap-y-2">
                <a class="font-body-md text-white/65 hover:text-[#A7F432] text-sm transition-colors"
                    href="#">{{ app()->getLocale() === 'en' ? 'Privacy Policy' : 'Kebijakan Privasi' }}</a>
                <a class="font-body-md text-white/65 hover:text-[#A7F432] text-sm transition-colors"
                    href="#">{{ app()->getLocale() === 'en' ? 'Terms of Service' : 'Ketentuan Layanan' }}</a>
                <a class="font-body-md text-white/65 hover:text-[#A7F432] text-sm transition-colors"
                    href="#">{{ app()->getLocale() === 'en' ? 'Cookie Policy' : 'Kebijakan Cookie' }}</a>
            </div>
        </div>

    </div>
</footer>
