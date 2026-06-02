@extends('layouts.app')

@section('content')
    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-background halftone-bg border-b-4 border-surface-variant">
        <div class="max-w-5xl">
            <p class="font-label-code text-label-code text-primary uppercase mb-sm">{{ $content['about']['eyebrow'] }}</p>
            <h1 class="font-display text-headline-lg-mobile md:text-display text-white mb-md">{{ $content['about']['title'] }}</h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl">{{ $content['about']['lead'] }}</p>
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-surface">
        <div class="grid grid-cols-1 lg:grid-cols-[0.85fr_1.15fr] gap-xl">
            <div>
                <span class="inline-block bg-secondary-fixed text-on-secondary-fixed px-sm py-1 border-2 border-on-secondary-fixed font-label-sticker text-label-sticker mb-md rotate-label">
                    {{ $content['about_detail']['positioning_label'] }}
                </span>
                <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-primary mb-md">{{ $content['about_detail']['positioning_title'] }}</h2>
                <div class="space-y-sm font-body-lg text-body-lg text-on-surface-variant">
                    @foreach ($content['about_detail']['positioning_body'] as $paragraph)
                        <p>{{ $paragraph }}</p>
                    @endforeach
                </div>
                <div class="mt-lg border-4 border-primary bg-surface-container p-md hard-shadow-primary">
                    <p class="font-label-code text-label-code text-primary mb-xs">ROMULUS_DIGITAL_BACKING</p>
                    <p class="font-body-md text-body-md text-on-surface">{{ $content['about_detail']['romulus_note'] }}</p>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-md">
                @foreach ($content['capabilities'] as $capability)
                    <article class="bg-surface-container border-4 border-outline p-md hard-shadow-secondary">
                        <p class="font-label-code text-label-code text-secondary-fixed mb-xs">0{{ $loop->iteration }} / CORE_CAPABILITY</p>
                        <h3 class="font-display text-headline-md text-white mb-xs">{{ $capability['title'] }}</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">{{ $capability['body'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-surface-container-low border-y-4 border-surface-variant">
        <div class="mb-lg max-w-4xl">
            <p class="font-label-code text-label-code text-tertiary uppercase mb-sm">{{ $content['home']['why_label'] }}</p>
            <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-white">{{ $content['home']['why_title'] }}</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-md">
            @foreach ($content['why_details'] as $item)
                <article class="bg-background border-2 border-outline-variant p-md hover:border-primary transition-colors">
                    <span class="material-symbols-outlined text-primary text-[40px] mb-sm block">{{ ['location_on', 'psychology', 'verified_user', 'design_services', 'trending_up', 'hub'][$loop->index] }}</span>
                    <h3 class="font-display text-headline-md text-secondary-fixed mb-xs">{{ $item['title'] }}</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">{{ $item['body'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-background">
        <div class="grid grid-cols-1 lg:grid-cols-[0.8fr_1.2fr] gap-xl">
            <div>
                <p class="font-label-code text-label-code text-primary uppercase mb-sm">{{ $content['about']['vision_label'] }}</p>
                <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-white mb-md">{{ $content['about']['vision_title'] }}</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant">{{ $content['about']['vision_body'] }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                @foreach ($content['mission'] as $mission)
                    <article class="border-4 border-outline bg-surface-container p-md">
                        <p class="font-label-code text-label-code text-primary mb-xs">MISSION_{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</p>
                        <h3 class="font-display text-headline-md text-white">{{ $mission }}</h3>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
