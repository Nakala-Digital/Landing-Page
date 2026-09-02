<!-- Partner Badge Section -->
<section class="bg-white py-unit-md sm:py-unit-lg relative overflow-hidden">
    <!-- Decorative gradient -->
    <div class="absolute inset-0 bg-gradient-to-r from-primary/20 to-transparent opacity-30"></div>

    <div
        class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop flex flex-col md:flex-row items-center justify-center gap-4 sm:gap-6 md:gap-10 relative z-10">

        <!-- Nakala Digital Card -->
        <div
            class="bg-white border border-black/10 rounded-2xl shadow-lg flex items-center justify-center order-1 w-[148px] h-[67px] p-2">
            <img alt="Nakala Digital" class="max-w-full max-h-full w-auto h-auto object-contain"
                src="{{ asset('assets/logo-nakala.png') }}" />
        </div>

        <!-- Text Area -->
        <div class="flex flex-col gap-1 items-center text-center order-2">
            <span class="font-label-sm text-[#A7F432] tracking-[0.2em] uppercase whitespace-nowrap">
                {{ app()->getLocale() === 'en' ? 'Official Representative & Delivery Partner' : 'Perwakilan & Mitra Delivery' }}
            </span>
            <span class="text-[#031A44]/80 font-body-md text-sm">
                {{ app()->getLocale() === 'en' ? 'Strategic Partner of Romulus Digital' : 'Strategis dari Romulus Digital' }}
            </span>
        </div>

        <!-- Romulus Digital Card -->
        <div
            class="bg-[#031A44] border border-white/10 rounded-2xl shadow-lg flex items-center justify-center order-3 w-[148px] h-[67px] p-2">
            <img alt="Romulus Digital — Strategic Partner" class="max-w-full max-h-full w-auto h-auto object-contain"
                style="filter: brightness(0) invert(1);" src="{{ asset('assets/romulus-hitam.png') }}" />
        </div>
    </div>
</section>
