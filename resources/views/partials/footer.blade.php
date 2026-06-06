<footer class="bg-inverse-surface">

    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 py-12 border-b border-white/10">

            {{-- Brand Column --}}
            <div class="lg:col-span-3 flex flex-col gap-6">
                <img class="h-16 w-auto object-contain object-left" src="{{ asset('assets/logo-nakala.png') }}" alt="Nakala Digital">
                <p class="font-body-md text-surface-variant leading-relaxed text-sm">
                    {{ app()->getLocale() === 'en' 
                        ? 'Local Delivery, Regional Capability. Your strategic bridge to high-tier digital excellence across Indonesia.' 
                        : 'Local Delivery, Regional Capability. Jembatan strategis Anda menuju keunggulan digital tingkat tinggi di seluruh Indonesia.' }}
                </p>

                {{-- Contact Info --}}
                <div class="space-y-3">
                    <div class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary text-[18px] mt-0.5">location_on</span>
                        <span class="font-body-md text-surface-variant text-sm">Pointlab Coworking Space, Graha Pos Indonesia, Jl. Banda No.30 Lantai 2 Blok C, Citarum, Bandung Wetan, Bandung City, West Java 40115</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary text-[18px]">mail</span>
                        <span class="font-body-md text-surface-variant text-sm">contact@nakala.digital</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary text-[18px]">phone</span>
                        <span class="font-body-md text-surface-variant text-sm">0822-9570-6304</span>
                    </div>
                </div>

                {{-- Socials --}}
                <div class="flex gap-3 mt-4">
                    <a href="#" class="inline-flex items-center justify-center w-10 h-10 rounded-lg border border-white/10 text-surface-variant hover:text-white hover:border-primary/60 transition-all">
                        <span class="material-symbols-outlined text-[18px]">hub</span>
                    </a>
                    <a href="#" class="inline-flex items-center justify-center w-10 h-10 rounded-lg border border-white/10 text-surface-variant hover:text-white hover:border-primary/60 transition-all">
                        <span class="material-symbols-outlined text-[18px]">mail</span>
                    </a>
                    <a href="#" class="inline-flex items-center justify-center w-10 h-10 rounded-lg border border-white/10 text-surface-variant hover:text-white hover:border-primary/60 transition-all">
                        <span class="material-symbols-outlined text-[18px]">share</span>
                    </a>
                </div>
            </div>

            {{-- Sitemap --}}
            @php
                $localeSuffix = app()->getLocale() === 'en' ? '.en' : '';
            @endphp
            <div class="lg:col-span-2 space-y-4">
                <h4 class="font-label-sm text-white uppercase tracking-widest">Sitemap</h4>
                <ul class="space-y-3">
                    <li><a class="font-body-md text-surface-variant hover:text-white transition-colors text-sm" href="{{ route('home' . $localeSuffix) }}">{{ app()->getLocale() === 'en' ? 'Home' : 'Beranda' }}</a></li>
                    <li><a class="font-body-md text-surface-variant hover:text-white transition-colors text-sm" href="{{ route('about' . $localeSuffix) }}">{{ app()->getLocale() === 'en' ? 'About Us' : 'Tentang Kami' }}</a></li>
                    <li><a class="font-body-md text-surface-variant hover:text-white transition-colors text-sm" href="{{ route('services' . $localeSuffix) }}">{{ app()->getLocale() === 'en' ? 'Our Services' : 'Layanan Kami' }}</a></li>
                    <li><a class="font-body-md text-surface-variant hover:text-white transition-colors text-sm" href="{{ route('portfolio' . $localeSuffix) }}">{{ app()->getLocale() === 'en' ? 'Project Portfolio' : 'Portofolio Projek' }}</a></li>
                    <li><a class="font-body-md text-surface-variant hover:text-white transition-colors text-sm" href="{{ route('contact' . $localeSuffix) }}">{{ app()->getLocale() === 'en' ? 'Contact' : 'Kontak' }}</a></li>
                </ul>
            </div>

            {{-- Capabilities --}}
            <div class="lg:col-span-2 space-y-4">
                <h4 class="font-label-sm text-white uppercase tracking-widest">Capabilities</h4>
                <ul class="space-y-3">
                    <li><a class="font-body-md text-surface-variant hover:text-white transition-colors text-sm" href="#">Software Development</a></li>
                    <li><a class="font-body-md text-surface-variant hover:text-white transition-colors text-sm" href="#">AI &amp; Data Analytics</a></li>
                    <li><a class="font-body-md text-surface-variant hover:text-white transition-colors text-sm" href="#">Tech Advisory</a></li>
                    <li><a class="font-body-md text-surface-variant hover:text-white transition-colors text-sm" href="#">Cloud Infrastructure</a></li>
                </ul>
            </div>

            {{-- Strategic Partner --}}
            <div class="lg:col-span-2 space-y-4">
                <h4 class="font-label-sm text-white uppercase tracking-widest">Strategic Partner</h4>
                <div class="bg-white/5 p-4 rounded-xl border border-white/10 inline-block">
                    <img alt="Romulus Digital" class="h-10 w-auto object-contain" src="{{ asset('assets/romulus-putih.png') }}"/>
                    <p class="text-[10px] text-surface-variant mt-2 uppercase tracking-wider">Official Regional Partner</p>
                </div>
            </div>

            {{-- Maps Column --}}
            <div class="lg:col-span-3 flex flex-col gap-4">
                <h4 class="font-label-sm text-white uppercase tracking-widest">Find Us</h4>
                <div class="h-[180px] rounded-xl overflow-hidden border border-white/10 ring-1 ring-white/5">
                    <iframe
                        src="https://maps.google.com/maps?q=Pointlab+Coworking+Space,+Graha+Pos+Indonesia,+Jl.+Banda+No.30+Lantai+2+Blok+C,+Citarum,+Bandung+Wetan,+Bandung+City,+West+Java+40115&output=embed&hl=id&z=16"
                        width="100%"
                        height="100%"
                        style="border:0; filter:invert(90%) hue-rotate(180deg) saturate(0.8);"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>

        {{-- Bottom: Copyright --}}
        <div class="py-6 flex flex-row justify-between gap-4 items-center">
            <span class="font-body-md text-surface-variant text-sm">© {{ date('Y') }} Nakala Digital. All Rights Reserved.</span>
            <div class="flex gap-6">
                <a class="font-body-md text-surface-variant hover:text-white text-sm transition-colors" href="#">Privacy Policy</a>
                <a class="font-body-md text-surface-variant hover:text-white text-sm transition-colors" href="#">Terms of Service</a>
                <a class="font-body-md text-surface-variant hover:text-white text-sm transition-colors" href="#">Cookie Policy</a>
            </div>
        </div>

    </div>
</footer>
