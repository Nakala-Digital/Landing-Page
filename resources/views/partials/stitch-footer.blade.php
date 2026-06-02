<footer class="w-full relative overflow-hidden bg-surface-container-lowest border-t-4 border-surface-variant flex flex-col items-center p-margin-mobile pb-xl text-center space-y-md">
    <h2 class="font-display text-headline-md text-primary">NAKALA DIGITAL</h2>
    <div class="flex gap-lg flex-wrap justify-center font-label-code text-label-code text-outline">
        <a class="hover:text-secondary-fixed-dim transition-all" href="{{ route('services', ['locale' => $locale]) }}">SERVICE_PROTOCOL</a>
        <a class="hover:text-secondary-fixed-dim transition-all" href="{{ route('contact', ['locale' => $locale]) }}">CONNECT_CHANNEL</a>
    </div>
    <p class="font-label-code text-label-code text-tertiary">&copy;{{ date('Y') }} NAKALA DIGITAL // ARCHIPELAGO_OS</p>
    <div class="absolute bottom-4 left-4 flex gap-1">
        <div class="w-2 h-2 bg-primary"></div>
        <div class="w-2 h-2 bg-secondary-fixed"></div>
        <div class="w-2 h-2 bg-tertiary"></div>
    </div>
</footer>

<div class="fixed bottom-10 right-10 z-50 pointer-events-none hidden md:block">
    <div class="bg-tertiary-container text-on-tertiary-container px-3 py-1 font-label-sticker border-2 border-on-tertiary-container rotate-[15deg] shadow-lg">
        HIGH VOLTAGE TECH
    </div>
</div>
