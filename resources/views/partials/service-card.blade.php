{{--
  Reusable Service Card Component

  @param  $service — Array from config('service-pillars.pillars') with icon, bgColor, title, description, slug
  @param  $locale  — Current locale ('en' or 'id')

  Background color variants (from Figma):
    white  → bg-white, text navy
    lime   → bg-tertiary-fixed (#A7F432), text navy
    navy   → bg-on-secondary-fixed (#031A44), text white
    cyan   → bg-primary (#12AED0), text white
--}}

@php
    $bgMap = [
        'white' => 'bg-white',
        'lime'  => 'bg-tertiary-fixed',
        'navy'  => 'bg-on-secondary-fixed',
        'cyan'  => 'bg-primary',
    ];
    $textMap = [
        'white' => 'text-on-surface',
        'lime'  => 'text-on-surface',
        'navy'  => 'text-white',
        'cyan'  => 'text-white',
    ];
    $descMap = [
        'white' => 'text-on-surface-variant',
        'lime'  => 'text-on-surface',
        'navy'  => 'text-white/80',
        'cyan'  => 'text-white/80',
    ];
    $iconColorMap = [
        'white' => 'text-primary',
        'lime'  => 'text-on-surface',
        'navy'  => 'text-primary',
        'cyan'  => 'text-white',
    ];

    $bgClass = $bgMap[$service['bgColor']] ?? 'bg-white';
    $textClass = $textMap[$service['bgColor']] ?? 'text-on-surface';
    $descClass = $descMap[$service['bgColor']] ?? 'text-on-surface-variant';
    $iconClass = $iconColorMap[$service['bgColor']] ?? 'text-primary';

    $title = $service['title'][$locale] ?? $service['title']['id'];
    $description = $service['description'][$locale] ?? $service['description']['id'];
    $slug = $service['slug'] ?? '#';
    $localeSuffix = app()->getLocale() === 'en' ? '.en' : '';
    // CTA text + underline colors per Figma: white card → cyan, lime → navy, navy/cyan → white
    $ctaTextMap = [
        'white' => 'text-primary',
        'lime'  => 'text-on-surface',
        'navy'  => 'text-white',
        'cyan'  => 'text-white',
    ];
    $ctaHexMap = [
        'white' => '#12AED0',
        'lime'  => '#031A44',
        'navy'  => '#FFFFFF',
        'cyan'  => '#FFFFFF',
    ];
    $ctaTextClass = $ctaTextMap[$service['bgColor']] ?? 'text-primary';
    $ctaBorderColor = $ctaHexMap[$service['bgColor']] ?? '#12AED0';
    $borderClass = (($service['bgColor'] ?? 'white') === 'white') ? 'border border-outline-variant/65' : '';
@endphp

<div class="service-card {{ $bgClass }} {{ $borderClass }} p-unit-lg rounded-[24px] shadow-sm hover:shadow-2xl transition-all duration-300 flex flex-col justify-between">
    <div>
        <span class="material-symbols-outlined {{ $iconClass }} text-5xl mb-6"
            @if(in_array($service['icon'], ['psychology', 'verified_user'])) style="font-variation-settings: 'FILL' 1;" @endif
            >{{ $service['icon'] }}</span>
        <h3 class="font-headline-h3 text-headline-h3 mb-4 {{ $textClass }}">{{ $title }}</h3>
        <p class="font-body-md text-body-md {{ $descClass }}">{{ $description }}</p>
    </div>
    <div class="mt-6 flex justify-end">
        <a href="{{ route('services.detail' . $localeSuffix, ['service' => $slug]) }}"
            class="inline-flex items-center gap-1 text-sm font-normal tracking-wider {{ $ctaTextClass }} hover:opacity-80 transition-opacity">
            <span class="border-b-2 pb-0.5" style="border-color: {{ $ctaBorderColor }}">
                {{ app()->getLocale() === 'en' ? 'Learn More' : 'Pelajari Lebih Lanjut' }}
            </span>
            <span class="material-symbols-outlined text-base">chevron_right</span>
        </a>
    </div>
</div>
