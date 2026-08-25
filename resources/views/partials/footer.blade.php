<footer class="relative overflow-hidden bg-[#031A44] text-white py-16">
    <div class="w-full max-w-[1480px] mx-auto px-6 md:px-8 xl:px-10">

        <!-- Grid Layout Utama Footer -->
        <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-12 gap-y-10 pb-16 border-b border-white/10 items-start">

            {{-- Kolom 1: Brand & Deskripsi --}}
            <div class="space-y-6">
                <div class="inline-flex bg-white px-4 py-2.5 rounded-md">
                    <img class="h-9 w-auto object-contain" src="{{ asset('assets/logo-nakala.png') }}"
                        alt="Nakala Digital">
                </div>
                <p class="text-white/80 leading-relaxed text-sm max-w-xs font-normal">
                    {{ app()->getLocale() === 'en'
                        ? 'Local Delivery, Regional Capability. Your strategic bridge to high-level digital excellence across Indonesia.'
                        : 'Delivery Lokal, Kapabilitas Regional. Jembatan strategis Anda menuju keunggulan digital tingkat tinggi di seluruh Indonesia.' }}
                </p>

                {{-- Sosial Media Ikon --}}
                <div class="flex items-center gap-4 pt-2">
                    <a href="https://www.instagram.com/nakala.digital/" target="_blank" rel="noopener noreferrer"
                        aria-label="Instagram Nakala Digital"
                        class="text-white hover:text-[#00A7D4] transition-colors">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/company/nakaladigital/" target="_blank" rel="noopener noreferrer"
                        aria-label="LinkedIn Nakala Digital"
                        class="text-white hover:text-[#00A7D4] transition-colors">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Kolom 2: Peta Situs --}}
            <div class="space-y-5">
                <h4 class="text-base font-bold text-white tracking-wide">
                    {{ app()->getLocale() === 'en' ? 'Sitemap' : 'Peta Situs' }}
                </h4>
                <ul class="space-y-3 text-sm text-white/80 font-normal">
                    <li>
                        <a class="hover:text-[#00A7D4] hover:underline transition-colors" href="{{ route(app()->getLocale() === 'en' ? 'home.en' : 'home') }}">
                            {{ app()->getLocale() === 'en' ? 'Home' : 'Beranda' }}
                        </a>
                    </li>
                    <li>
                        <a class="hover:text-[#00A7D4] hover:underline transition-colors" href="{{ route(app()->getLocale() === 'en' ? 'solutions.en' : 'solutions') }}">
                            {{ app()->getLocale() === 'en' ? 'Education Solutions' : 'Solusi Pendidikan' }}
                        </a>
                    </li>
                    <li>
                        <a class="hover:text-[#00A7D4] hover:underline transition-colors" href="{{ route(app()->getLocale() === 'en' ? 'ai-assistant.en' : 'ai-assistant') }}">
                            AI Assistant
                        </a>
                    </li>
                    <li>
                        <a class="hover:text-[#00A7D4] hover:underline transition-colors" href="{{ route(app()->getLocale() === 'en' ? 'about.en' : 'about') }}">
                            {{ app()->getLocale() === 'en' ? 'About Us' : 'Tentang Kami' }}
                        </a>
                    </li>
                    <li>
                        <a class="hover:text-[#00A7D4] hover:underline transition-colors" href="{{ route(app()->getLocale() === 'en' ? 'insights.en' : 'insights') }}">
                            Insight
                        </a>
                    </li>
                    <li>
                        <a class="hover:text-[#00A7D4] hover:underline transition-colors" href="{{ route(app()->getLocale() === 'en' ? 'studi-kasus.en' : 'studi-kasus') }}">
                            {{ app()->getLocale() === 'en' ? 'Case Study' : 'Studi Kasus' }}
                        </a>
                    </li>
                    <li>
                        <a class="hover:text-[#00A7D4] hover:underline transition-colors" href="{{ route(app()->getLocale() === 'en' ? 'contact.en' : 'contact') }}">
                            {{ app()->getLocale() === 'en' ? 'Contact' : 'Kontak' }}
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Kolom 3: Mitra Strategis & Kontak Kami --}}
            <div class="space-y-8">
                <div class="space-y-3">
                    <h4 class="text-base font-bold text-white tracking-wide">
                        {{ app()->getLocale() === 'en' ? 'Strategic Partner' : 'Mitra Strategis' }}
                    </h4>
                    <div class="space-y-2">
                        <div class="border border-white/20 rounded-xl px-4 py-2.5 inline-block bg-white/5 max-w-[150px]">
                            <img alt="Romulus Digital" class="w-full h-auto object-contain"
                                src="{{ asset('assets/romulus-putih.png') }}" />
                        </div>
                        <div class="text-[11px] text-[#00A7D4] font-bold tracking-wider uppercase">
                            {{ app()->getLocale() === 'en' ? 'STRATEGIC PARTNER' : 'MITRA STRATEGIS' }} <br>
                            <span class="text-xs font-normal text-white/70 normal-case">Romulus Digital</span>
                        </div>
                    </div>
                </div>

                <div class="space-y-3">
                    <h4 class="text-base font-bold text-white tracking-wide">
                        {{ app()->getLocale() === 'en' ? 'Contact Us' : 'Kontak Kami' }}
                    </h4>
                    <div class="space-y-2.5 text-sm font-normal">
                        <a href="mailto:contact@nakala.digital"
                            class="flex items-center gap-2 text-white/80 hover:text-[#00A7D4] hover:underline transition-colors">
                            <span class="material-symbols-outlined text-base">mail</span>
                            <span>contact@nakala.digital</span>
                        </a>
                        <a href="https://wa.me/6282295706304" target="_blank" rel="noopener noreferrer"
                            class="flex items-center gap-2 text-white/80 hover:text-[#00A7D4] hover:underline transition-colors">
                            <span class="material-symbols-outlined text-base">phone</span>
                            <span>0822-9570-6304</span>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Kolom 4: Temukan Kami (Peta Lokasi) --}}
            <div class="space-y-4">
                <h4 class="text-base font-bold text-white tracking-wide">
                    {{ app()->getLocale() === 'en' ? 'Find Us' : 'Temukan Kami' }}
                </h4>
                <div class="rounded-lg overflow-hidden border border-white/10 shadow-sm aspect-[4/3] w-full bg-slate-800">
                    <iframe
                        title="Nakala Digital Location"
                        src="https://maps.google.com/maps?q=Pointlab+Coworking+Space,+Graha+Pos+Indonesia,+Jl.+Banda+No.30+Lantai+2+Blok+C,+Citarum,+Bandung+Wetan,+Bandung+City,+West+Java+40115&output=embed&hl={{ app()->getLocale() }}&z=15"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div>
                    <a href="https://maps.google.com/?q=Pointlab+Coworking+Space,+Graha+Pos+Indonesia,+Jl.+Banda+No.30+Lantai+2+Blok+C,+Citarum,+Bandung+Wetan,+Bandung+City,+West+Java+40115"
                        target="_blank" rel="noopener noreferrer"
                        class="flex items-start gap-2 text-xs text-white/80 leading-relaxed font-normal hover:text-[#00A7D4] transition-colors group">
                        <span
                            class="material-symbols-outlined text-base text-[#00A7D4] shrink-0 mt-0.5 group-hover:scale-110 transition-transform">location_on</span>
                        <p>
                            Pointlab Coworking Space, Graha Pos Indonesia, Jl. Banda No.30 Lantai 2 Blok C, Citarum,
                            Bandung Wetan, Bandung City, West Java 40115
                        </p>
                    </a>
                </div>
            </div>

        </div>

        {{-- Row Bawah: Hak Cipta & Dokumen Legal --}}
        <div
            class="pt-6 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs font-normal text-white/80">
            <div>
                &copy; 2026 Nakala Digital. {{ app()->getLocale() === 'en' ? 'All Rights Reserved.' : 'Hak Cipta Dilindungi.' }}
            </div>
            <div class="flex items-center gap-6">
                <a class="hover:text-[#00A7D4] transition-colors" href="#">{{ app()->getLocale() === 'en' ? 'Privacy Policy' : 'Kebijakan Privasi' }}</a>
                <a class="hover:text-[#00A7D4] transition-colors" href="#">{{ app()->getLocale() === 'en' ? 'Terms of Service' : 'Ketentuan Layanan' }}</a>
                <a class="hover:text-[#00A7D4] transition-colors" href="#">{{ app()->getLocale() === 'en' ? 'Cookie Policy' : 'Kebijakan Cookie' }}</a>
            </div>
        </div>

    </div>
</footer>
