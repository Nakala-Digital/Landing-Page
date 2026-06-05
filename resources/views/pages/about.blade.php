@extends('layouts.app')

@section('content')
    <section class="page-hero px-margin-mobile md:px-margin-desktop py-xl bg-primary-fixed border-b border-outline-variant">
        <div class="page-hero-grid">
            <div class="page-hero-copy">
                <p class="section-kicker font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['about']['eyebrow'] }}</p>
                <h1 class="font-display text-headline-lg-mobile md:text-display text-secondary-fixed mb-md">{{ $content['about']['title'] }}</h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl">{{ $content['about']['lead'] }}</p>
            </div>
            <aside class="page-hero-panel corporate-card p-md md:p-lg">
                <p class="font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['about_detail']['positioning_label'] }}</p>
                <div class="hero-signal-list">
                    <div class="hero-signal">
                        <span class="icon-badge"><span class="material-symbols-outlined">location_on</span></span>
                        <div>
                            <h2 class="font-headline-md text-headline-md text-secondary-fixed mb-xs">{{ $locale === 'id' ? 'Delivery Lokal' : 'Local Delivery' }}</h2>
                            <p class="font-body-md text-body-md text-on-surface-variant">{{ $locale === 'id' ? 'Tim berbasis Indonesia untuk komunikasi dan eksekusi yang dekat.' : 'Indonesia-based team for close communication and execution.' }}</p>
                        </div>
                    </div>
                    <div class="hero-signal">
                        <span class="icon-badge"><span class="material-symbols-outlined">verified_user</span></span>
                        <div>
                            <h2 class="font-headline-md text-headline-md text-secondary-fixed mb-xs">{{ $locale === 'id' ? 'Standar Enterprise' : 'Enterprise Standards' }}</h2>
                            <p class="font-body-md text-body-md text-on-surface-variant">{{ $locale === 'id' ? 'Governance, dokumentasi, QA, dan handover disiapkan sejak awal.' : 'Governance, documentation, QA, and handover are built in early.' }}</p>
                        </div>
                    </div>
                    <div class="hero-signal">
                        <span class="icon-badge"><span class="material-symbols-outlined">hub</span></span>
                        <div>
                            <h2 class="font-headline-md text-headline-md text-secondary-fixed mb-xs">{{ $locale === 'id' ? 'Dukungan Regional' : 'Regional Backing' }}</h2>
                            <p class="font-body-md text-body-md text-on-surface-variant">{{ $locale === 'id' ? 'Kapasitas partner dapat diskalakan sesuai scope proyek.' : 'Partner capacity can scale based on project scope.' }}</p>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-[0.85fr_1.15fr] gap-xl">
            <div>
                <span class="soft-chip font-label-sticker text-label-sticker mb-md">
                    {{ $content['about_detail']['positioning_label'] }}
                </span>
                <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-secondary-fixed mb-md">{{ $content['about_detail']['positioning_title'] }}</h2>
                <div class="space-y-sm font-body-lg text-body-lg text-on-surface-variant">
                    @foreach ($content['about_detail']['positioning_body'] as $paragraph)
                        <p>{{ $paragraph }}</p>
                    @endforeach
                </div>
                <div class="mt-lg corporate-card p-md">
                    <p class="font-label-sticker text-label-sticker text-primary mb-xs">Strategic Partner of Romulus Digital</p>
                    <p class="font-body-md text-body-md text-on-surface">{{ $content['about_detail']['romulus_note'] }}</p>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-md">
                @foreach ($content['capabilities'] as $capability)
                    <article class="corporate-card p-md">
                        <div class="flex items-start gap-sm">
                            <span class="number-badge font-label-code text-label-code">{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            <div>
                                <h3 class="font-headline-md text-headline-md text-secondary-fixed mb-xs">{{ $capability['title'] }}</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant">{{ $capability['body'] }}</p>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-surface-container-low border-y border-outline-variant">
        <div class="section-heading-panel">
            <div class="max-w-4xl">
                <p class="section-kicker font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['home']['why_label'] }}</p>
                <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-secondary-fixed">{{ $content['home']['why_title'] }}</h2>
            </div>
            <span class="soft-chip font-label-code text-label-code">{{ $locale === 'id' ? '6 alasan utama' : '6 key reasons' }}</span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-md">
            @foreach ($content['why_details'] as $item)
                <article class="corporate-card p-md">
                    <span class="material-symbols-outlined text-primary text-[40px] mb-sm block">{{ ['location_on', 'psychology', 'verified_user', 'design_services', 'trending_up', 'hub'][$loop->index] }}</span>
                    <h3 class="font-headline-md text-headline-md text-secondary-fixed mb-xs">{{ $item['title'] }}</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">{{ $item['body'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-[0.8fr_1.2fr] gap-xl">
            <div>
                <p class="font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['about']['vision_label'] }}</p>
                <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-secondary-fixed mb-md">{{ $content['about']['vision_title'] }}</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant">{{ $content['about']['vision_body'] }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                @foreach ($content['mission'] as $mission)
                    <article class="corporate-card p-md">
                        <p class="font-label-code text-label-code text-primary mb-xs">{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</p>
                        <h3 class="font-headline-md text-headline-md text-secondary-fixed">{{ $mission }}</h3>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
