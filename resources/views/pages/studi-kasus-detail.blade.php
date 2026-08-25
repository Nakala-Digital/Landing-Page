@php
    $locale = app()->getLocale();
    $isEn = $locale === 'en';
@endphp

<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ $locale }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ $caseStudy['title'] }} | Nakala Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1"
        rel="stylesheet" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-[#F7FAFC] text-[#031A44]">
    @include('partials.navbar')

    <main class="pt-20">
        <!-- Hero Section Fleksibel (Mendukung Full BG & Split Grid) -->
        @if (($caseStudy['hero_style'] ?? '') === 'full_bg')
            <!-- NO 1 ERP Platform BISA / 360 Support -->
            <section class="relative w-full overflow-hidden bg-white min-h-[550px] lg:min-h-[620px] flex items-center">

                <!-- Gambar Utama di Sisi Kanan -->
                <div class="absolute right-0 top-0 bottom-0 w-full lg:w-[60%] bg-cover bg-center bg-no-repeat z-0"
                    style="background-image: url('{{ $caseStudy['img'] }}');">
                </div>

                <!-- Overlay Gradasi & Efek Grid Line Biru Khas Figma -->
                <div class="absolute inset-0 z-10 pointer-events-none lg:block hidden"
                    style="background:
                linear-gradient(to right, #ffffff 40%, rgba(255,255,255,0.85) 50%, rgba(255,255,255,0) 70%),
                linear-gradient(rgba(18, 174, 208, 0.07) 1px, transparent 1px),
                linear-gradient(90deg, rgba(18, 174, 208, 0.07) 1px, transparent 1px);
             background-size: 100% 100%, 60px 60px, 60px 60px;">
                </div>

                <!-- Fallback Overlay untuk Mobile -->
                <div class="absolute inset-0 bg-white/95 lg:hidden block z-10"></div>

                <!-- Konten Teks -->
                <div class="relative w-full max-w-[1280px] mx-auto px-6 md:px-16 py-12 lg:py-20 z-20">
                    <div class="grid grid-cols-1 lg:grid-cols-12">
                        <div class="lg:col-span-7 space-y-6">

                            <!-- Badge Detail Layanan -->
                            <div
                                class="inline-flex items-center gap-2 bg-[#A7F432] text-[#031A44] px-4 py-2 rounded-full text-[11px] font-extrabold uppercase tracking-wider">
                                <span class="material-symbols-outlined text-sm font-extrabold">bolt</span>
                                {{ $caseStudy['hero_badge'] }}
                            </div>

                            <!-- Judul Utama -->
                            <h1
                                class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-[#031A44] leading-[1.1] tracking-tight uppercase max-w-xl">
                                {{ $caseStudy['hero_title'] }}
                            </h1>

                            <!-- Deskripsi -->
                            <p
                                class="text-slate-600 text-sm md:text-base lg:text-[17px] leading-relaxed max-w-xl font-medium">
                                {{ $caseStudy['hero_desc'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Seksi Kapabilitas -->
            @if (!empty($caseStudy['capabilities']))
                <section class="py-16 max-w-[1280px] mx-auto px-6 md:px-16 bg-[#F7FAFC]">
                    <!-- Header -->
                    <div class="mb-10">
                        <span class="text-[11px] font-extrabold tracking-widest text-[#12AED0] uppercase block mb-1">
                            {{ $caseStudy['cap_badge'] ?? ($isEn ? 'CAPABILITY REFERENCE' : 'REFERENSI KAPABILITAS') }}
                        </span>
                        <h2 class="text-2xl md:text-4xl font-extrabold text-[#031A44] leading-tight">
                            {{ $caseStudy['title'] ?? 'Custom Software Development' }}<br />{{ $isEn ? 'Capability' : 'Kapabilitas' }}
                        </h2>
                        <p class="text-slate-600 text-xs md:text-sm mt-3 max-w-3xl leading-relaxed">
                            {{ $caseStudy['cap_desc'] ?? ($isEn ? 'Each capability is developed to provide a flexible, scalable solution ready to power digital transformation across various industry sectors.' : 'Setiap kapabilitas dikembangkan untuk memberikan solusi yang fleksibel, skalabel, dan siap mendukung transformasi digital di berbagai sektor industri.') }}
                        </p>
                    </div>

                    <!-- Grid Kotak Capabilities -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                        @foreach ($caseStudy['capabilities'] as $cap)
                            <div class="bg-[#F0F4F8]/60 p-6 rounded-r-xl border-l-4 shadow-sm hover:shadow-md transition-all flex flex-col justify-center min-h-[110px]"
                                style="border-color: {{ $cap['border_color'] ?? '#12AED0' }};">
                                <h3 class="text-base font-extrabold text-[#031A44] mb-1.5">
                                    {{ $cap['title'] }}
                                </h3>
                                <p class="text-slate-600 text-xs md:text-[13px] leading-relaxed font-medium">
                                    {{ $cap['desc'] }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endif

            <!-- Seksi Model Produk & Solusi Model -->
            @if (!empty($caseStudy['service_model']))
                <section class="py-16 max-w-[1280px] mx-auto px-6 md:px-16 bg-white border-b border-slate-100">
                    <!-- Section Header -->
                    <div class="mb-10">
                        <span class="text-[11px] font-extrabold tracking-widest text-[#12AED0] uppercase block mb-1">
                            {{ $caseStudy['service_model']['section_badge'] }}
                        </span>
                        <h2 class="text-2xl md:text-4xl font-extrabold text-[#031A44] leading-tight">
                            {{ $caseStudy['service_model']['section_title'] }}
                        </h2>
                        <p class="text-slate-600 text-xs md:text-sm mt-3 max-w-3xl leading-relaxed font-medium">
                            {{ $caseStudy['service_model']['section_desc'] }}
                        </p>
                    </div>

                    <!-- Layout 3 Kolom -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        @foreach ($caseStudy['service_model']['columns'] as $col)
                            <div class="flex flex-col gap-4">
                                <!-- Header Kolom -->
                                <div class="py-3 px-4 rounded-xl text-center font-extrabold text-xs md:text-sm tracking-wider uppercase shadow-sm"
                                    style="background-color: {{ $col['header_bg'] }}; color: {{ $col['header_text_color'] ?? '#ffffff' }};">
                                    {{ $col['category'] }}
                                </div>

                                <!-- List Item Cards -->
                                <div class="space-y-4">
                                    @foreach ($col['items'] as $item)
                                        <div class="bg-[#F0F4F8]/60 p-5 rounded-r-xl border-l-4 shadow-sm hover:shadow-md transition-all min-h-[140px] flex flex-col justify-start"
                                            style="border-color: {{ $col['border_color'] }};">
                                            <h3 class="text-sm font-extrabold text-[#031A44] mb-2 leading-snug">
                                                {{ $item['title'] }}
                                            </h3>
                                            <p class="text-slate-600 text-xs leading-relaxed font-medium">
                                                {{ $item['desc'] }}
                                            </p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endif
        @else
            <!-- NO.2 Standard Case Study Detail -->
            <section class="relative bg-white pt-12 pb-20 overflow-hidden border-b border-slate-100">

                <!-- Pattern Background Blueprint Grid (Biru Transparan Khas Figma) -->
                <div class="absolute inset-0 z-0 pointer-events-none"
                    style="background-image:
            linear-gradient(rgba(18, 174, 208, 0.08) 1px, transparent 1px),
            linear-gradient(90deg, rgba(18, 174, 208, 0.08) 1px, transparent 1px);
        background-size: 60px 60px;">
                </div>

                <div class="relative max-w-[1280px] mx-auto px-6 md:px-16 z-10">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                        <!-- KOLOM KIRI: Teks & Informasi Usaha -->
                        <div class="lg:col-span-7 space-y-6">

                            <!-- Badge Hijau Lime Atas -->
                            <div
                                class="inline-flex items-center gap-2 bg-[#A7F432] text-[#031A44] px-4 py-2 rounded-full text-[11px] font-extrabold uppercase tracking-wider">
                                <span class="material-symbols-outlined text-base">{{ $caseStudy['badge_icon'] }}</span>
                                {{ $caseStudy['hero_badge'] ?? ($isEn ? 'SERVICE DETAIL' : 'DETAIL LAYANAN') }}
                            </div>

                            <!-- Judul Utama -->
                            <h1
                                class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-[#031A44] leading-[1.15] tracking-tight">
                                {{ $caseStudy['hero_title'] ?? $caseStudy['title'] }}
                            </h1>

                            <!-- Deskripsi -->
                            <p class="text-slate-600 text-sm md:text-base leading-relaxed max-w-xl font-medium">
                                {{ $caseStudy['hero_desc'] }}
                            </p>

                            <!-- Cards "Untuk Siapa" & "Dampak Bisnis" di Bawah Teks -->
                            @if (!empty($caseStudy['untuk_siapa']) || !empty($caseStudy['dampak_singkat']))
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                                    @if (!empty($caseStudy['untuk_siapa']))
                                        <div
                                            class="bg-white/80 backdrop-blur-sm p-5 rounded-2xl border border-slate-200/80 shadow-sm">
                                            <h2
                                                class="text-[11px] font-extrabold text-[#12AED0] uppercase tracking-wider mb-2">
                                                {{ $isEn ? 'FOR WHOM' : 'UNTUK SIAPA' }}
                                            </h2>
                                            <p
                                                class="text-xs md:text-sm font-semibold text-[#031A44] leading-relaxed whitespace-pre-line">
                                                {{ $caseStudy['untuk_siapa'] }}
                                            </p>
                                        </div>
                                    @endif

                                    @if (!empty($caseStudy['dampak_singkat']))
                                        <div
                                            class="bg-white/80 backdrop-blur-sm p-5 rounded-2xl border border-slate-200/80 shadow-sm">
                                            <h2
                                                class="text-[11px] font-extrabold text-[#12AED0] uppercase tracking-wider mb-2">
                                                {{ $isEn ? 'BUSINESS IMPACT' : 'DAMPAK BISNIS' }}
                                            </h2>
                                            <p class="text-xs md:text-sm text-slate-600 font-medium leading-relaxed">
                                                {{ $caseStudy['dampak_singkat'] }}
                                            </p>
                                        </div>
                                    @endif
                                </div>
                            @endif
                        </div>

                        <!-- KOLOM KANAN: Floating Dashboard & Overlapping Cards -->
                        <div class="lg:col-span-5 relative flex justify-center items-center mt-8 lg:mt-0">
                            <div class="relative w-full max-w-[500px]">

                                <!-- Frame Window Browser Utama (Besar) -->
                                <div
                                    class="bg-white rounded-2xl shadow-2xl border border-slate-200 overflow-hidden relative z-10 transform lg:translate-x-4">
                                    <!-- Top Browser Bar -->
                                    <div
                                        class="bg-slate-100 px-4 py-2.5 border-b border-slate-200 flex items-center gap-1.5">
                                        <span class="w-2.5 h-2.5 rounded-full bg-red-400"></span>
                                        <span class="w-2.5 h-2.5 rounded-full bg-yellow-400"></span>
                                        <span class="w-2.5 h-2.5 rounded-full bg-green-400"></span>
                                    </div>
                                    <!-- Gambar Preview Utama -->
                                    <div class="aspect-[4/3] bg-slate-900 overflow-hidden">
                                        <img src="{{ asset('assets/detail.png') }}" alt="{{ $caseStudy['title'] }}"
                                            class="w-full h-full object-cover">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        @endif

        <!-- SEKSI DETAIL SOLUSI -->
        @if (isset($caseStudy['masalah']) || isset($caseStudy['solusi']) || isset($caseStudy['challenge']))
            <section class="py-16 max-w-[1280px] mx-auto px-6 md:px-16 bg-white border-b border-slate-100">
                <div class="mb-10 flex flex-col items-start">
                    <div class="flex items-center gap-2 mb-2">
                        <span
                            class="material-symbols-outlined text-[#12AED0] text-3xl font-light">{{ $caseStudy ['badge_icon'] }}</span>
                        <span class="text-[11px] font-extrabold tracking-widest text-[#12AED0] uppercase">
                            {{ $isEn ? 'SOLUTION DETAILS' : 'DETAIL SOLUSI' }}
                        </span>
                    </div>
                    <h2 class="text-2xl md:text-4xl font-extrabold text-[#031A44] leading-tight">
                        {!! $isEn
                            ? 'Implementation view <br class="hidden md:block" /> according to context'
                            : 'Tampilan implementasi <br class="hidden md:block" /> sesuai konteks' !!}
                    </h2>
                    <p class="text-slate-500 text-xs md:text-sm mt-2 max-w-2xl">
                        {{ $isEn ? 'The information below is mapped from portfolio documents and capabilities into a clearer solution page.' : 'Informasi di bawah ini dipetakan dari dokumen portofolio dan kapabilitas menjadi halaman solusi yang lebih jelas.' }}
                    </p>
                </div>

                <!-- Grid Konten 4 Kotak -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- 1. Card Masalah / Challenge -->
                    <div class="bg-[#F4FAFE] p-8 rounded-2xl border border-[#E3F2FD] flex flex-col justify-start">
                        <div class="flex items-center gap-2 text-[#031A44] font-extrabold text-base mb-4">
                            <span
                                class="material-symbols-outlined text-white bg-[#A7F432] p-1.5 rounded-xl text-lg font-bold">warning</span>
                            {{ $isEn ? 'Challenge' : 'Masalah' }}
                        </div>
                        <p class="text-slate-600 text-xs md:text-sm leading-relaxed font-medium">
                            {{ $caseStudy['masalah'] ?? $caseStudy['challenge'] }}
                        </p>
                    </div>

                    <!-- 2. Card Fitur Utama / Implementation -->
                    <div class="bg-white p-8 rounded-2xl border border-[#E2E8F0] flex flex-col justify-start">
                        <div class="flex items-center gap-2 text-[#031A44] font-extrabold text-base mb-4">
                            <span
                                class="material-symbols-outlined text-white bg-[#12AED0] p-1.5 rounded-xl text-lg font-bold">assignment</span>
                            {{ $isEn ? 'Key Features' : 'Fitur Utama' }}
                        </div>
                        @if (!empty($caseStudy['fitur_utama']))
                            <ul
                                class="grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-3 text-slate-600 text-xs md:text-sm font-medium">
                                @foreach ($caseStudy['fitur_utama'] as $fitur)
                                    <li class="flex items-start gap-2">
                                        <span
                                            class="material-symbols-outlined text-[#12AED0] text-sm mt-0.5">check_circle</span>
                                        <span>{{ $fitur }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-slate-600 text-xs md:text-sm leading-relaxed font-medium">
                                {{ $caseStudy['implementation'] ?? '-' }}
                            </p>
                        @endif
                    </div>

                    <!-- 3. Card Solusi / Solution -->
                    <div class="bg-white p-8 rounded-2xl border border-[#E2E8F0] flex flex-col justify-start">
                        <div class="flex items-center gap-2 text-[#031A44] font-extrabold text-base mb-4">
                            <span
                                class="material-symbols-outlined text-white bg-[#12AED0] p-1.5 rounded-xl text-lg font-bold">lightbulb</span>
                            {{ $isEn ? 'Solution' : 'Solusi' }}
                        </div>
                        <p class="text-slate-600 text-xs md:text-sm leading-relaxed font-medium">
                            {{ $caseStudy['solusi'] ?? $caseStudy['solution'] }}
                        </p>
                    </div>

                    <!-- 4. Card Dampak Bisnis / Impact -->
                    <div class="bg-[#F9FDEE] p-8 rounded-2xl border border-[#EEF7D4] flex flex-col justify-start">
                        <div class="flex items-center gap-2 text-[#031A44] font-extrabold text-base mb-4">
                            <span
                                class="material-symbols-outlined text-white bg-[#A7F432] p-1.5 rounded-xl text-lg font-bold">bolt</span>
                            {{ $isEn ? 'Business Impact' : 'Dampak Bisnis' }}
                        </div>
                        @if (!empty($caseStudy['dampak_bisnis']))
                            <ul
                                class="grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-3 text-slate-600 text-xs md:text-sm font-medium">
                                @foreach ($caseStudy['dampak_bisnis'] as $dampak)
                                    <li class="flex items-start gap-2">
                                        <span
                                            class="material-symbols-outlined text-[#031A44] text-sm mt-0.5">adjust</span>
                                        <span>{{ $dampak }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-slate-600 text-xs md:text-sm leading-relaxed font-medium">
                                {{ $caseStudy['impact'] ?? '-' }}
                            </p>
                        @endif
                    </div>
                </div>

                <!-- Tombol Navigasi Bawah Detail Solusi -->
                <div class="mt-8 flex justify-end">
                    <a href="{{ route('studi-kasus' . ($isEn ? '.en' : '')) }}"
                        class="bg-[#031A44] text-white px-6 py-3 rounded-xl text-xs font-bold hover:bg-slate-800 transition-colors shadow-sm">
                        {{ $isEn ? 'View Other Solutions' : 'Lihat Solusi Lainnya' }}
                    </a>
                </div>
            </section>
        @endif

        <!-- SEKSI BANNER CTA FIGMA (PALING BAWAH) -->
        <section class="bg-[#F0F4F8] py-16 px-6 border-t border-slate-100">
            <div class="max-w-[1280px] mx-auto text-center space-y-5">
                <h2 class="text-2xl md:text-4xl font-extrabold text-[#031A44] leading-tight max-w-3xl mx-auto">
                    {{ $caseStudy['cta_title_prefix'] ?? ($isEn ? 'Discuss how this solution fits your' : 'Diskusikan bagaimana solusi ini cocok untuk') }}
                    <span
                        class="text-[#12AED0]">{{ $caseStudy['cta_title_highlight'] ?? ($isEn ? 'Operations' : 'Operasional Anda') }}</span>
                </h2>
                <p class="text-slate-600 text-xs md:text-sm max-w-2xl mx-auto leading-relaxed">
                    {{ $caseStudy['cta_desc'] ?? ($isEn ? 'Nakala remains primary for local delivery, with Romulus Digital as trust layer for regional capabilities.' : 'Nakala tetap menjadi primary untuk delivery lokal, dengan Romulus Digital sebagai trust layer untuk kapabilitas regional.') }}
                </p>
                <div class="pt-2">
                    <a href="{{ route('contact' . ($isEn ? '.en' : '')) }}"
                        class="inline-block bg-[#12AED0] text-white font-bold text-xs md:text-sm px-8 py-3.5 rounded-xl shadow-md hover:bg-sky-600 transition-all">
                        {{ $isEn ? 'Start Free Consultation' : 'Mulai Konsultasi Gratis' }}
                    </a>
                </div>
            </div>
        </section>

        <!-- Seksi Studi Kasus Terkait (Dinamis Otomatis) -->
        @if (!empty($caseStudy['related_cases']))
            <section class="py-16 max-w-[1280px] mx-auto px-6 md:px-16 bg-white">
                <div class="text-center mb-10">
                    <span class="text-[11px] font-extrabold tracking-widest text-[#12AED0] uppercase block mb-1">
                        {{ $isEn ? 'SERVICE APPROACH' : 'PENDEKATAN LAYANAN' }}
                    </span>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-[#031A44]">
                        {{ $isEn ? 'Related Case Studies' : 'Studi Kasus Terkait' }}
                    </h2>
                </div>

                <!-- Grid Card Studi Kasus Terkait -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    @foreach ($caseStudy['related_cases'] as $related)
                        <div
                            class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm flex flex-col justify-between hover:shadow-md transition-all">
                            <div>
                                <div class="h-48 bg-slate-800 overflow-hidden">
                                    <img src="{{ $related['img'] }}" alt="{{ $related['title'] }}"
                                        class="w-full h-full object-cover">
                                </div>

                                <div class="p-6 space-y-2">
                                    <span class="text-[10px] font-bold tracking-widest text-[#12AED0] uppercase block">
                                        {{ $related['tag'] }}
                                    </span>
                                    <h3 class="text-lg font-bold text-[#031A44]">
                                        {{ $related['title'] }}
                                    </h3>
                                    <p class="text-xs text-slate-500 leading-relaxed line-clamp-2">
                                        {{ $related['hero_desc'] ?? ($related['desc'] ?? '') }}
                                    </p>
                                </div>
                            </div>

                            <div class="px-6 pb-6 pt-2">
                                <a href="{{ route('studi-kasus.show' . ($isEn ? '.en' : ''), ['slug' => $related['slug']]) }}"
                                    class="inline-flex items-center text-xs font-bold text-[#031A44] hover:text-[#12AED0] transition-colors">
                                    {{ $isEn ? 'View Details' : 'Lihat Detail' }} <span
                                        class="material-symbols-outlined text-sm ml-1">chevron_right</span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="text-center mt-12">
                    <a href="{{ route('studi-kasus' . ($isEn ? '.en' : '')) }}"
                        class="inline-block bg-[#031A44] text-white px-8 py-3.5 rounded-full text-xs font-bold hover:bg-slate-800 transition-colors shadow-sm">
                        {{ $isEn ? 'View All Case Studies' : 'Lihat Semua Studi Kasus' }}
                    </a>
                </div>
            </section>
        @endif
    </main>

    @include('partials.footer')
</body>

</html>
