@extends('layouts.app')

@section('content')
@php
    $serviceIcons = ['psychology', 'code_blocks', 'handshake', 'language', 'verified_user', 'support_agent'];
    $aiIcons = ['psychology', 'person_search', 'school', 'precision_manufacturing', 'cloud_sync', 'analytics', 'bolt', 'forum'];
@endphp

    <section class="page-hero px-margin-mobile md:px-margin-desktop py-xl bg-primary-fixed border-b border-outline-variant">
        <div class="page-hero-grid">
            <div class="page-hero-copy">
                <p class="section-kicker font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['services']['eyebrow'] }}</p>
                <h1 class="font-display text-headline-lg-mobile md:text-display text-secondary-fixed mb-md">{{ $content['services']['title'] }}</h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl">{{ $content['services']['lead'] }}</p>
            </div>
            <aside class="page-hero-panel corporate-card p-md md:p-lg">
                <p class="font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['services']['pillars_label'] }}</p>
                <div class="grid gap-xs">
                    @foreach (array_slice($content['service_pillars'], 0, 6) as $pillar)
                        <div class="hero-signal">
                            <span class="icon-badge"><span class="material-symbols-outlined">{{ $serviceIcons[$loop->index] }}</span></span>
                            <h2 class="font-label-sticker text-label-sticker text-secondary-fixed self-center">{{ $pillar }}</h2>
                        </div>
                    @endforeach
                </div>
            </aside>
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-white">
        <div class="section-heading-panel">
            <div class="max-w-4xl">
                <p class="section-kicker font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['services']['pillars_label'] }}</p>
                <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-secondary-fixed">{{ $content['services']['pillars_title'] }}</h2>
            </div>
            <span class="soft-chip font-label-code text-label-code">{{ $locale === 'id' ? 'End-to-end capability' : 'End-to-end capability' }}</span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-md">
            @foreach ($content['service_pillar_details'] as $pillar)
                <article class="corporate-card p-md">
                    <span class="w-12 h-12 rounded-card bg-primary-fixed text-primary grid place-items-center mb-md">
                        <span class="material-symbols-outlined text-[28px]">{{ $serviceIcons[$loop->index] }}</span>
                    </span>
                    <h3 class="font-headline-md text-headline-md text-secondary-fixed mb-sm">{{ $pillar['title'] }}</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">{{ $pillar['body'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-surface-container-low border-y border-outline-variant">
        <div class="grid grid-cols-1 lg:grid-cols-[0.75fr_1.25fr] gap-xl">
            <div>
                <p class="section-kicker font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['services']['ai_label'] }}</p>
                <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-secondary-fixed mb-md">{{ $content['services']['ai_title'] }}</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant">{{ $content['services']['ai_body'] }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                @foreach ($content['ai_capability_details'] as $capability)
                    <article class="corporate-card p-md">
                        <span class="material-symbols-outlined text-primary text-[34px] mb-sm block">{{ $aiIcons[$loop->index] }}</span>
                        <h3 class="font-headline-md text-headline-md text-secondary-fixed mb-xs">{{ $capability['title'] }}</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">{{ $capability['body'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-white">
        <div class="mb-lg max-w-4xl">
            <p class="section-kicker font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['services']['solutions_label'] }}</p>
            <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-secondary-fixed">{{ $content['services']['solutions_title'] }}</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
            @foreach ($content['solution_details'] as $solution)
                <article class="corporate-card p-md">
                    <h3 class="font-headline-md text-headline-md text-secondary-fixed mb-xs">{{ $solution['title'] }}</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">{{ $solution['body'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl dark-band text-on-secondary-fixed">
        <div class="mb-lg max-w-4xl">
            <p class="font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['services']['model_label'] }}</p>
            <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-white">{{ $content['services']['model_title'] }}</h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-md">
            @foreach ($content['model_details'] as $model)
                <article class="dark-card p-md">
                    <h3 class="font-headline-md text-headline-md text-white mb-sm">{{ $model['title'] }}</h3>
                    <p class="font-body-md text-body-md text-white/70 mb-md">{{ $model['body'] }}</p>
                    <ul class="grid gap-xs">
                        @foreach ($model['items'] as $item)
                            <li class="flex gap-xs font-body-md text-body-md text-white/80">
                                <span class="material-symbols-outlined text-primary text-[20px] flex-shrink-0">check_circle</span>
                                <span>{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </article>
            @endforeach
        </div>
    </section>
@endsection
