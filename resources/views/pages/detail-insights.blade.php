<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ $insight['title'] }} | Nakala Digital</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1"
        rel="stylesheet" />

    <script id="tailwind-config">
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "electric-cyan": "#12AED0",
                        "midnight-navy": "#031A44",
                        "impact-lime": "#A7F432",
                        "bg-light": "#F8FAFC"
                    },
                    spacing: {
                        "margin-mobile": "20px",
                        "margin-desktop": "80px",
                        "container-max": "1280px"
                    },
                    fontFamily: {
                        sans: ["Poppins", "sans-serif"],
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-[#F8FAFC] text-[#031A44] font-sans antialiased relative">
    @include('partials.navbar')

    <!-- Background Grid Transparan -->
    <div
        class="absolute inset-0 bg-[linear-gradient(to_right,#e2e8f0_1px,transparent_1px),linear-gradient(to_bottom,#e2e8f0_1px,transparent_1px)] bg-[size:3.5rem_3.5rem] [mask-image:radial-gradient(ellipse_75%_50%_at_50%_0%,#000_80%,transparent_100%)] opacity-40 pointer-events-none">
    </div>

    <main class="pt-24 pb-24 relative z-10">
        <div class="px-margin-mobile md:px-margin-desktop max-w-4xl mx-auto space-y-8">

            <!-- 1. Gambar Banner Utama -->
            <div
                class="w-full aspect-[16/10] md:aspect-[2/1] rounded-2xl md:rounded-3xl overflow-hidden shadow-lg border border-slate-200/80 bg-white">
                <img src="{{ $insight['img'] }}" alt="{{ $insight['title'] }}"
                    class="w-full h-full object-cover object-center" />
            </div>

            <!-- 2. Section Header -->
            <div class="space-y-4 pt-2">
                <!-- Badge Lime -->
                <div
                    class="inline-flex items-center gap-1.5 bg-[#A7F432] text-[#031A44] px-3.5 py-1.5 rounded-full text-[11px] font-extrabold uppercase tracking-wider shadow-sm">
                    <span class="material-symbols-outlined text-[15px] font-bold">bolt</span>
                    {{ $insight['tag'] }}
                </div>

                <!-- Judul Utama -->
                <h1
                    class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-[#031A44] tracking-tight leading-[1.25]">
                    {{ $insight['title'] }}
                </h1>

                <!-- Tanggal -->
                <div class="flex items-center gap-2 text-xs md:text-sm text-slate-500 font-medium pt-1">
                    <span class="material-symbols-outlined text-[18px] text-[#12AED0]">calendar_today</span>
                    <span>{{ $insight['date'] }}</span>
                </div>
            </div>

            <!-- 3. Paragraf Konten Dinamis (Tepat 3 Paragraf) -->
            <div
                class="text-slate-600 text-[13px] md:text-sm leading-relaxed md:leading-[1.8] space-y-6 pt-2 font-normal text-justify md:text-left">
                @if (isset($insight['paragraphs']) && is_array($insight['paragraphs']))
                    @foreach ($insight['paragraphs'] as $paragraph)
                        <p class="first-letter:font-medium">{{ $paragraph }}</p>
                    @endforeach
                @endif
            </div>

        </div>

        <!-- BANNER CTA (Siap Mendigitalisasi Bisnis Anda?) -->
        <section class="mt-16 py-16 bg-[#F0F6FA] text-center border-t border-slate-200/60">
            <div class="max-w-3xl mx-auto px-margin-mobile">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-[#031A44] mb-3 tracking-tight">
                    Siap Mendigitalisasi <span class="text-[#12AED0]">Bisnis</span> Anda?
                </h2>
                <p class="text-slate-600 text-xs md:text-sm mb-8 leading-relaxed max-w-xl mx-auto">
                    Konsultasikan kebutuhan teknologi Anda bersama tim ahli kami untuk solusi yang tepat guna.
                </p>
                <a href="{{ route('contact' . (app()->getLocale() === 'en' ? '.en' : '')) }}"
                    class="inline-block bg-[#12AED0] hover:bg-[#0e8fae] text-white px-8 py-3 rounded-full font-bold text-xs md:text-sm shadow-md hover:shadow-lg transition-all transform hover:-translate-y-0.5 active:translate-y-0">
                    Diskusikan Proyek Anda
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')
</body>

</html>
