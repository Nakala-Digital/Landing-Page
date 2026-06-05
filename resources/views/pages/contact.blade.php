@extends('layouts.app')

@section('content')
    <section class="page-hero px-margin-mobile md:px-margin-desktop py-xl bg-primary-fixed border-b border-outline-variant">
        <div class="page-hero-grid">
            <div class="page-hero-copy">
                <p class="section-kicker font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['contact']['eyebrow'] }}</p>
                <h1 class="font-display text-headline-lg-mobile md:text-display text-secondary-fixed mb-md">{{ $content['contact']['title'] }}</h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl">{{ $content['contact']['lead'] }}</p>
            </div>
            <aside class="page-hero-panel corporate-card p-md md:p-lg">
                <p class="font-label-sticker text-label-sticker text-primary mb-sm">{{ $locale === 'id' ? 'Kontak Cepat' : 'Quick Contact' }}</p>
                <div class="grid gap-xs">
                    <a class="contact-row hover:text-primary transition-colors" href="mailto:{{ $site['brand']['email'] }}">
                        <span class="icon-badge"><span class="material-symbols-outlined">mail</span></span>
                        <span class="font-body-md text-body-md break-words">{{ $site['brand']['email'] }}</span>
                    </a>
                    <a class="contact-row hover:text-primary transition-colors" href="tel:+6282295706304">
                        <span class="icon-badge"><span class="material-symbols-outlined">phone</span></span>
                        <span class="font-body-md text-body-md">{{ $site['brand']['phone'] }}</span>
                    </a>
                    <div class="contact-row">
                        <span class="icon-badge"><span class="material-symbols-outlined">schedule</span></span>
                        <span class="font-body-md text-body-md text-on-surface-variant">{{ $content['contact']['availability'] }}</span>
                    </div>
                </div>
            </aside>
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-[0.8fr_1.2fr] gap-xl">
            <aside class="corporate-card p-md">
                <p class="font-label-sticker text-label-sticker text-primary mb-xs">Nakala Digital</p>
                <h2 class="font-headline-md text-headline-md text-secondary-fixed mb-md">{{ $locale === 'id' ? 'Bandung, Indonesia' : 'Bandung, Indonesia' }}</h2>
                <p class="font-body-md text-body-md text-on-surface-variant mb-md">{{ $site['brand']['location'] }}</p>
                <div class="grid gap-sm">
                    <div class="contact-row">
                        <span class="icon-badge"><span class="material-symbols-outlined">person</span></span>
                        <div>
                            <p class="font-label-code text-label-code text-primary">{{ $content['contact']['contact_person'] }}</p>
                            <p class="font-body-md text-body-md text-on-surface">{{ $site['brand']['contact_person'] }}, {{ $site['brand']['contact_role'] }}</p>
                        </div>
                    </div>
                    <div class="contact-row">
                        <span class="icon-badge"><span class="material-symbols-outlined">call</span></span>
                        <div>
                            <p class="font-label-code text-label-code text-primary">{{ $content['contact']['phone'] }}</p>
                            <p class="font-body-md text-body-md text-on-surface"><a class="hover:text-primary" href="tel:+6282295706304">{{ $site['brand']['phone'] }}</a></p>
                        </div>
                    </div>
                    <div class="contact-row">
                        <span class="icon-badge"><span class="material-symbols-outlined">alternate_email</span></span>
                        <div>
                            <p class="font-label-code text-label-code text-primary">{{ $content['contact']['email'] }}</p>
                            <p class="font-body-md text-body-md text-on-surface break-words"><a class="hover:text-primary" href="mailto:{{ $site['brand']['email'] }}">{{ $site['brand']['email'] }}</a></p>
                        </div>
                    </div>
                    <div class="contact-row">
                        <span class="icon-badge"><span class="material-symbols-outlined">language</span></span>
                        <div>
                            <p class="font-label-code text-label-code text-primary">{{ $content['contact']['website'] }}</p>
                            <p class="font-body-md text-body-md text-on-surface"><a class="hover:text-primary" href="https://{{ $site['brand']['website'] }}">{{ $site['brand']['website'] }}</a></p>
                        </div>
                    </div>
                </div>
            </aside>

            <div>
                <p class="section-kicker font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['contact']['engagement_label'] }}</p>
                <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-secondary-fixed mb-lg">{{ $content['contact']['engagement_title'] }}</h2>
                <div class="grid gap-md">
                    @foreach ($content['engagement_details'] as $step)
                        <article class="corporate-card p-md">
                            <div class="flex items-start gap-sm">
                                <span class="w-12 h-12 rounded-card grid place-items-center bg-primary-fixed text-primary font-headline-md text-headline-md flex-shrink-0">{{ $loop->iteration }}</span>
                                <div>
                                    <h3 class="font-headline-md text-headline-md text-secondary-fixed mb-xs">{{ $step['title'] }}</h3>
                                    <p class="font-body-md text-body-md text-on-surface-variant mb-xs">{{ $step['body'] }}</p>
                                    <p class="font-label-code text-label-code text-primary">{{ $step['output'] }}</p>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-surface-container-low border-y border-outline-variant">
        <div class="mb-lg max-w-4xl">
            <p class="font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['contact']['types_label'] }}</p>
            <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-secondary-fixed">{{ $content['contact']['types_title'] }}</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-md">
            @foreach ($content['engagement_type_details'] as $type)
                <article class="corporate-card p-md">
                    <h3 class="font-headline-md text-headline-md text-secondary-fixed mb-xs">{{ $type['title'] }}</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">{{ $type['body'] }}</p>
                </article>
            @endforeach
        </div>
    </section>
@endsection
