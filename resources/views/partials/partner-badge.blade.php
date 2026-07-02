<!-- Partner Badge Section -->
<section class="bg-[#031A44] py-unit-lg border-y border-white/10 relative overflow-hidden">
    <!-- Decorative gradient -->
    <div class="absolute inset-0 bg-gradient-to-r from-primary/20 to-transparent opacity-30"></div>

    <div
        class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop flex flex-col md:flex-row items-center justify-center gap-6 md:gap-10 relative z-10">

        <!-- Nakala Logo -->
        <div class="flex items-center justify-center order-1">
            <div class="bg-white px-4 py-3 rounded-lg ring-1 ring-[#12AED0]/30 shadow-lg">
                <img alt="Nakala Digital" class="h-10 md:h-12 w-auto object-contain"
                    src="{{ asset('assets/logo-nakala.png') }}" />
            </div>
        </div>

        <!-- Desktop Divider -->
        <div class="hidden md:block w-px h-14 md:h-16 bg-white/20 order-2"></div>

        <!-- Text Area -->
        <div class="flex flex-col gap-1 items-center text-center order-3">
            <span class="font-label-sm text-[#A7F432] tracking-[0.2em] uppercase">
                {{ app()->getLocale() === 'en' ? 'Official Representative &' : 'Perwakilan Resmi &' }}
            </span>
            <span class="text-white/80 font-body-md text-sm">
                {{ app()->getLocale() === 'en' ? 'Strategic Delivery Partner' : 'Mitra Delivery Strategis' }}
            </span>
        </div>

        <!-- Desktop Divider -->
        <div class="hidden md:block w-px h-14 md:h-16 bg-white/20 order-4"></div>

        <!-- Romulus Logo -->
        <div class="flex items-center justify-center group order-5">
            <div
                class="border border-white/20 rounded-lg px-4 py-3 ring-1 bg-white/5 transition-all duration-300 group-hover:bg-white/10 group-hover:border-white/30">
                <img alt="Romulus Digital — Strategic Partner"
                    class="h-10 md:h-12 object-contain opacity-70 group-hover:opacity-100 group-hover:scale-105 transition-all duration-300"
                    style="filter: brightness(0) invert(1);" src="{{ asset('assets/romulus-hitam.png') }}" />
            </div>
        </div>
    </div>
</section>
