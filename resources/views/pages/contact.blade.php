@extends('layouts.app')

@section('content')
    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-background halftone-bg border-b-4 border-surface-variant">
        <div class="max-w-5xl">
            <p class="font-label-code text-label-code text-primary uppercase mb-sm">{{ $content['contact']['eyebrow'] }}</p>
            <h1 class="font-display text-headline-lg-mobile md:text-display text-white mb-md">{{ $content['contact']['title'] }}</h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl">{{ $content['contact']['lead'] }}</p>
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-surface">
        <div class="grid grid-cols-1 lg:grid-cols-[0.8fr_1.2fr] gap-xl">
            <aside class="bg-background border-4 border-primary p-md hard-shadow-primary">
                <p class="font-label-code text-label-code text-primary mb-xs">NAKALA_DIGITAL</p>
                <h2 class="font-display text-headline-md text-white mb-md">{{ $site['brand']['location'] }}</h2>
                <dl class="grid gap-sm">
                    <div>
                        <dt class="font-label-code text-label-code text-secondary-fixed uppercase">{{ $content['contact']['contact_person'] }}</dt>
                        <dd class="font-body-md text-body-md text-on-surface">{{ $site['brand']['contact_person'] }}, {{ $site['brand']['contact_role'] }}</dd>
                    </div>
                    <div>
                        <dt class="font-label-code text-label-code text-secondary-fixed uppercase">{{ $content['contact']['phone'] }}</dt>
                        <dd class="font-body-md text-body-md text-on-surface"><a class="hover:text-primary" href="tel:+6282295706304">{{ $site['brand']['phone'] }}</a></dd>
                    </div>
                    <div>
                        <dt class="font-label-code text-label-code text-secondary-fixed uppercase">{{ $content['contact']['email'] }}</dt>
                        <dd class="font-body-md text-body-md text-on-surface break-words"><a class="hover:text-primary" href="mailto:{{ $site['brand']['email'] }}">{{ $site['brand']['email'] }}</a></dd>
                    </div>
                    <div>
                        <dt class="font-label-code text-label-code text-secondary-fixed uppercase">{{ $content['contact']['website'] }}</dt>
                        <dd class="font-body-md text-body-md text-on-surface"><a class="hover:text-primary" href="https://{{ $site['brand']['website'] }}">{{ $site['brand']['website'] }}</a></dd>
                    </div>
                </dl>
                <p class="font-label-code text-label-code text-tertiary mt-md uppercase">{{ $content['contact']['availability'] }}</p>
            </aside>

            <div>
                <p class="font-label-code text-label-code text-primary uppercase mb-sm">{{ $content['contact']['engagement_label'] }}</p>
                <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-white mb-lg">{{ $content['contact']['engagement_title'] }}</h2>
                <div class="grid gap-md">
                    @foreach ($content['engagement_details'] as $step)
                        <article class="bg-background border-2 border-outline-variant p-md">
                            <div class="flex items-start gap-sm">
                                <span class="w-12 h-12 grid place-items-center bg-secondary-fixed text-on-secondary-fixed border-2 border-on-secondary-fixed font-display text-headline-md flex-shrink-0">{{ $loop->iteration }}</span>
                                <div>
                                    <h3 class="font-display text-headline-md text-white mb-xs">{{ $step['title'] }}</h3>
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

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-surface-container-low border-y-4 border-surface-variant">
        <div class="mb-lg max-w-4xl">
            <p class="font-label-code text-label-code text-tertiary uppercase mb-sm">{{ $content['contact']['types_label'] }}</p>
            <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-white">{{ $content['contact']['types_title'] }}</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-md">
            @foreach ($content['engagement_type_details'] as $type)
                <article class="bg-background border-4 border-outline p-md hover:border-secondary-fixed transition-colors">
                    <h3 class="font-display text-headline-md text-secondary-fixed mb-xs">{{ $type['title'] }}</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">{{ $type['body'] }}</p>
                </article>
            @endforeach
        </div>
    </section>
@endsection
