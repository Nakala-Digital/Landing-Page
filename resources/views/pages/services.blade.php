@extends('layouts.app')

@section('content')
    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-background halftone-bg border-b-4 border-surface-variant">
        <div class="max-w-5xl">
            <p class="font-label-code text-label-code text-primary uppercase mb-sm">{{ $content['services']['eyebrow'] }}</p>
            <h1 class="font-display text-headline-lg-mobile md:text-display text-white mb-md">{{ $content['services']['title'] }}</h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl">{{ $content['services']['lead'] }}</p>
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-surface">
        <div class="mb-lg max-w-4xl">
            <span class="inline-block bg-secondary-fixed text-on-secondary-fixed px-sm py-1 border-2 border-on-secondary-fixed font-label-sticker text-label-sticker mb-md rotate-label">
                {{ $content['services']['pillars_label'] }}
            </span>
            <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-white">{{ $content['services']['pillars_title'] }}</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-md">
            @foreach ($content['service_pillar_details'] as $pillar)
                <article class="bg-surface-container border-4 border-outline p-md hard-shadow-primary">
                    <p class="font-label-code text-label-code text-primary mb-xs">SERVICE_{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</p>
                    <h3 class="font-display text-headline-md text-white mb-sm">{{ $pillar['title'] }}</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">{{ $pillar['body'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-surface-container-low border-y-4 border-surface-variant">
        <div class="grid grid-cols-1 lg:grid-cols-[0.75fr_1.25fr] gap-xl">
            <div>
                <p class="font-label-code text-label-code text-tertiary uppercase mb-sm">{{ $content['services']['ai_label'] }}</p>
                <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-white mb-md">{{ $content['services']['ai_title'] }}</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant">{{ $content['services']['ai_body'] }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                @foreach ($content['ai_capability_details'] as $capability)
                    <article class="bg-background border-2 border-outline-variant p-md hover:border-tertiary transition-colors">
                        <span class="material-symbols-outlined text-tertiary text-[34px] mb-sm block">{{ ['psychology', 'person_search', 'school', 'precision_manufacturing', 'cloud_sync', 'analytics', 'bolt', 'forum'][$loop->index] }}</span>
                        <h3 class="font-display text-headline-md text-white mb-xs">{{ $capability['title'] }}</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">{{ $capability['body'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-background">
        <div class="mb-lg max-w-4xl">
            <p class="font-label-code text-label-code text-primary uppercase mb-sm">{{ $content['services']['solutions_label'] }}</p>
            <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-white">{{ $content['services']['solutions_title'] }}</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
            @foreach ($content['solution_details'] as $solution)
                <article class="punk-border bg-surface-container p-md">
                    <h3 class="font-display text-headline-md text-secondary-fixed mb-xs">{{ $solution['title'] }}</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">{{ $solution['body'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-surface-container-lowest border-t-4 border-surface-variant">
        <div class="mb-lg max-w-4xl">
            <span class="inline-block bg-primary text-on-primary px-sm py-1 border-2 border-on-primary font-label-sticker text-label-sticker mb-md rotate-label">
                {{ $content['services']['model_label'] }}
            </span>
            <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-white">{{ $content['services']['model_title'] }}</h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-md">
            @foreach ($content['model_details'] as $model)
                <article class="bg-background border-4 border-outline p-md hard-shadow-secondary">
                    <p class="font-label-code text-label-code text-secondary-fixed mb-xs">MODEL_0{{ $loop->iteration }}</p>
                    <h3 class="font-display text-headline-md text-white mb-sm">{{ $model['title'] }}</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-md">{{ $model['body'] }}</p>
                    <ul class="grid gap-xs">
                        @foreach ($model['items'] as $item)
                            <li class="flex gap-xs font-body-md text-body-md text-on-surface">
                                <span class="material-symbols-outlined text-primary text-[20px] flex-shrink-0">check</span>
                                <span>{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </article>
            @endforeach
        </div>
    </section>
@endsection
