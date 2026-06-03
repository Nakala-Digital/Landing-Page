@extends('layouts.stitch')

@section('content')
@php
    $serviceIcons = ['psychology', 'code_blocks', 'handshake', 'language', 'verified_user', 'support_agent'];
    $solutionIcons = ['groups', 'storefront', 'school', 'account_balance_wallet', 'inventory_2', 'security', 'account_balance', 'restaurant', 'badge', 'health_and_safety', 'web', 'record_voice_over'];
    $deliveryIcons = ['search', 'fact_check', 'draw', 'code', 'bug_report', 'rocket_launch', 'support_agent'];
    $solutionHighlights = $content['solution_highlights'] ?? array_map(fn ($item) => $item['name'], $content['portfolio_items'] ?? []);
@endphp

<main class="pt-20">
    <section class="px-margin-mobile md:px-margin-desktop py-lg bg-primary-fixed" id="cover">
        <div class="grid grid-cols-1 lg:grid-cols-[1.05fr_0.95fr] gap-xl items-center">
            <div>
                <div class="inline-flex items-center gap-xs rounded-pill bg-white border border-outline px-sm py-xs text-secondary-fixed font-label-sticker text-label-sticker mb-md shadow-soft">
                    <span class="w-2 h-2 rounded-full bg-primary"></span>
                    <span>{{ $content['home']['eyebrow'] }}</span>
                </div>

                <div class="w-56 max-w-full h-16 mb-md">
                    @include('partials.logo')
                </div>

                <h1 class="font-display text-[42px] leading-[48px] md:text-[58px] md:leading-[64px] xl:text-[64px] xl:leading-[70px] text-secondary-fixed max-w-5xl mb-md">
                    {{ $locale === 'id'
                        ? 'Mitra AI, Software Development & Digital Solutions'
                        : 'AI Technology, Software Development & Digital Solutions Partner' }}
                </h1>

                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl mb-lg">
                    {{ $content['home']['lead'] }}
                </p>

                <div class="flex flex-col sm:flex-row gap-sm mb-lg">
                    <a class="inline-flex min-h-12 items-center justify-center gap-xs rounded-pill bg-primary text-on-primary px-md py-sm font-label-sticker text-label-sticker shadow-soft hover:bg-tertiary transition-colors" href="{{ route('contact', ['locale' => $locale]) }}">
                        <span class="material-symbols-outlined text-[20px]">forum</span>
                        <span>{{ $locale === 'id' ? 'Mulai Diskusi' : 'Get in Touch' }}</span>
                    </a>
                    <a class="inline-flex min-h-12 items-center justify-center gap-xs rounded-pill bg-white text-secondary-fixed border border-outline px-md py-sm font-label-sticker text-label-sticker hover:border-primary hover:text-primary transition-colors" href="{{ route('services', ['locale' => $locale]) }}">
                        <span class="material-symbols-outlined text-[20px]">design_services</span>
                        <span>{{ $locale === 'id' ? 'Lihat Layanan' : 'Explore Services' }}</span>
                    </a>
                </div>

                <p class="font-label-code text-label-code text-secondary-fixed/70">
                    Strategic Partner of Romulus Digital
                </p>
            </div>

            <div class="corporate-card p-md md:p-lg">
                <div class="flex items-center justify-between gap-sm border-b border-outline-variant pb-sm mb-md">
                    <div>
                        <p class="font-label-sticker text-label-sticker text-primary mb-xs">
                            {{ $locale === 'id' ? 'Capability Overview' : 'Capability Overview' }}
                        </p>
                        <h2 class="font-headline-md text-headline-md text-secondary-fixed">
                            {{ $locale === 'id' ? 'Teknologi yang siap dipakai bisnis.' : 'Technology built for business use.' }}
                        </h2>
                    </div>
                    <span class="material-symbols-outlined text-primary text-[42px]">hub</span>
                </div>

                <div class="grid gap-sm">
                    @foreach ($content['capabilities'] as $capability)
                        <article class="rounded-card border border-outline-variant bg-surface-container-low p-sm">
                            <div class="flex gap-sm">
                                <span class="material-symbols-outlined text-primary text-[28px] flex-shrink-0">{{ ['architecture', 'code_blocks', 'psychology'][$loop->index] }}</span>
                                <div>
                                    <h3 class="font-label-sticker text-label-sticker text-secondary-fixed mb-xs">{{ $capability['title'] }}</h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant">{{ $capability['body'] }}</p>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-white" id="about">
        <div class="grid grid-cols-1 lg:grid-cols-[0.9fr_1.1fr] gap-xl items-start">
            <div>
                <p class="font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['about']['eyebrow'] }}</p>
                <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-secondary-fixed mb-md">
                    {{ $content['about_detail']['positioning_title'] }}
                </h2>
                <div class="space-y-sm font-body-lg text-body-lg text-on-surface-variant">
                    @foreach ($content['about_detail']['positioning_body'] as $paragraph)
                        <p>{{ $paragraph }}</p>
                    @endforeach
                </div>
            </div>

            <div class="grid gap-md">
                @foreach ($content['philosophy'] as $pillar)
                    <article class="corporate-card p-md">
                        <div class="flex items-start gap-sm">
                            <span class="w-12 h-12 rounded-card bg-primary-fixed text-primary grid place-items-center flex-shrink-0">
                                <span class="material-symbols-outlined">{{ ['workspace_premium', 'tips_and_updates', 'trending_up'][$loop->index] }}</span>
                            </span>
                            <div>
                                <h3 class="font-headline-md text-headline-md text-secondary-fixed mb-xs">{{ $pillar['title'] }}</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant">{{ $pillar['body'] }}</p>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-surface-container-low" id="services-overview">
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-md mb-lg">
            <div class="max-w-4xl">
                <p class="font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['services']['pillars_label'] }}</p>
                <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-secondary-fixed mb-sm">
                    {{ $content['services']['pillars_title'] }}
                </h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant">{{ $content['services']['lead'] }}</p>
            </div>
            <a class="inline-flex min-h-12 items-center justify-center gap-xs rounded-pill bg-primary text-on-primary px-md py-sm font-label-sticker text-label-sticker hover:bg-tertiary transition-colors" href="{{ route('services', ['locale' => $locale]) }}">
                <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                <span>{{ $locale === 'id' ? 'Detail Layanan' : 'Service Details' }}</span>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-md">
            @foreach ($content['service_pillar_details'] as $pillar)
                <article class="corporate-card p-md h-full">
                    <div class="flex items-start justify-between gap-sm mb-md">
                        <span class="w-12 h-12 rounded-card bg-primary-fixed text-primary grid place-items-center">
                            <span class="material-symbols-outlined text-[28px]">{{ $serviceIcons[$loop->index] }}</span>
                        </span>
                        <span class="font-label-code text-label-code text-on-surface-variant">{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-secondary-fixed mb-sm">{{ $pillar['title'] }}</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">{{ $pillar['body'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-white" id="solutions">
        <div class="grid grid-cols-1 lg:grid-cols-[0.75fr_1.25fr] gap-xl items-start">
            <div class="lg:sticky lg:top-28">
                <p class="font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['services']['solutions_label'] }}</p>
                <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-secondary-fixed mb-md">
                    {{ $locale === 'id' ? 'Capability konkret untuk kebutuhan market Indonesia.' : 'Concrete capabilities for real market needs.' }}
                </h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant mb-md">
                    {{ $locale === 'id'
                        ? 'Area solusi ditampilkan sebagai capability dan direction, sehingga tetap informatif tanpa klaim client berlebihan.'
                        : 'Solution areas are presented as capabilities and market directions, keeping the portfolio informative without overstated client claims.' }}
                </p>
                <a class="inline-flex items-center gap-xs text-primary font-label-sticker text-label-sticker hover:text-tertiary transition-colors" href="{{ route('portfolio', ['locale' => $locale]) }}">
                    <span>{{ $locale === 'id' ? 'Lihat Portfolio' : 'View Portfolio' }}</span>
                    <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-sm">
                @foreach ($solutionHighlights as $solution)
                    <article class="rounded-card border border-outline-variant bg-surface-container-low p-sm">
                        <div class="flex gap-sm">
                            <span class="w-10 h-10 rounded-card bg-white text-primary grid place-items-center flex-shrink-0 border border-outline-variant">
                                <span class="material-symbols-outlined text-[22px]">{{ $solutionIcons[$loop->index % count($solutionIcons)] }}</span>
                            </span>
                            <h3 class="font-label-sticker text-label-sticker text-secondary-fixed">{{ $solution }}</h3>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl dark-band" id="delivery-process">
        <div class="max-w-4xl mb-lg">
            <p class="font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['delivery']['agile_label'] }}</p>
            <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-white mb-sm">
                {{ $content['delivery']['agile_title'] }}
            </h2>
            <p class="font-body-lg text-body-lg text-white/75">{{ $content['delivery']['lead'] }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-7 gap-sm">
            @foreach ($content['delivery_steps'] as $step)
                <article class="rounded-card border border-white/15 bg-white/5 p-sm">
                    <span class="w-11 h-11 rounded-card bg-primary text-on-primary grid place-items-center mb-sm">
                        <span class="material-symbols-outlined text-[24px]">{{ $deliveryIcons[$loop->index] }}</span>
                    </span>
                    <p class="font-label-code text-label-code text-white/50 mb-xs">{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</p>
                    <h3 class="font-label-sticker text-label-sticker text-white">{{ $step }}</h3>
                </article>
            @endforeach
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-primary-fixed" id="partnership">
        <div class="corporate-card p-md md:p-lg grid grid-cols-1 lg:grid-cols-[0.9fr_1.1fr] gap-lg items-center">
            <div>
                <p class="font-label-sticker text-label-sticker text-primary mb-sm">Strategic Partnership</p>
                <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-secondary-fixed mb-md">
                    Strategic Partner of Romulus Digital
                </h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant">
                    {{ $content['about_detail']['romulus_note'] }}
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-sm">
                @foreach (array_slice($content['partners'], 0, 3) as $partner)
                    <div class="rounded-card border border-outline-variant bg-surface-container-low p-md text-center">
                        <span class="material-symbols-outlined text-primary text-[32px] mb-sm block">{{ ['handshake', 'public', 'cloud'][$loop->index] }}</span>
                        <h3 class="font-label-sticker text-label-sticker text-secondary-fixed">{{ $partner }}</h3>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-white" id="contact-cta">
        <div class="dark-band rounded-card p-md md:p-lg grid grid-cols-1 lg:grid-cols-[1fr_auto] gap-lg items-center">
            <div>
                <p class="font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['contact']['eyebrow'] }}</p>
                <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-white mb-sm">
                    {{ $locale === 'id' ? 'Diskusikan kebutuhan digital organisasi Anda.' : 'Discuss your organization’s digital needs.' }}
                </h2>
                <p class="font-body-lg text-body-lg text-white/75 max-w-3xl">{{ $content['contact']['lead'] }}</p>
            </div>
            <div class="grid gap-xs">
                <a class="inline-flex min-h-12 items-center justify-center gap-xs rounded-pill bg-primary text-on-primary px-md py-sm font-label-sticker text-label-sticker hover:bg-tertiary transition-colors" href="{{ route('contact', ['locale' => $locale]) }}">
                    <span class="material-symbols-outlined text-[20px]">forum</span>
                    <span>{{ $locale === 'id' ? 'Hubungi Tim' : 'Discuss Your Project' }}</span>
                </a>
                <p class="font-label-code text-label-code text-white/60 text-center">{{ $site['brand']['email'] }}</p>
                <p class="font-label-code text-label-code text-white/60 text-center">{{ $site['brand']['location'] }}</p>
            </div>
        </div>
    </section>
</main>
@endsection
