<!-- Partner Badge Section -->
<section class="bg-[#031A44] py-unit-lg border-y border-white/10 relative overflow-hidden">
    <!-- Decorative accent (solid, no gradient) -->
    <div class="absolute inset-0 bg-primary/10"></div>
    <div class="absolute inset-y-0 left-0 w-1.5 bg-primary"></div>

    <div
        class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop flex flex-col md:flex-row items-center justify-center gap-6 md:gap-10 relative z-10">

        <!-- Text Area -->
        <div class="flex flex-col gap-1 items-center md:items-end text-center md:text-right">
            <span class="font-label-sm text-[#A7F432] tracking-[0.2em] uppercase">
                {{ app()->getLocale() === 'en' ? 'Official Representative &' : 'Perwakilan Resmi &' }}
            </span>
            <span class="text-white/80 font-body-md text-sm">
                {{ app()->getLocale() === 'en' ? 'Strategic Delivery Partner' : 'Mitra Delivery Strategis' }}
            </span>
        </div>

        <!-- Desktop Divider Line -->
        <div class="hidden md:block w-px h-14 md:h-16 bg-white/20"></div>

        <!-- Logo Area -->
        <div class="flex items-center justify-center group">
            <div
                class="border border-white/20 rounded-lg px-6 py-3 bg-white/5 transition-all duration-300 group-hover:bg-white/10 group-hover:border-white/30">
                <img alt="Romulus Digital Logo"
                    class="h-10 md:h-12 object-contain opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-300"
                    style="filter: brightness(0) invert(1);" src="{{ asset('assets/romulus-hitam.png') }}" />
            </div>
        </div>
    </div>
</section>
