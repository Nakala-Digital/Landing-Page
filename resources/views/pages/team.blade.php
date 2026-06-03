@extends('layouts.app')

@section('content')
    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-primary-fixed border-b border-outline-variant">
        <div class="max-w-5xl">
            <p class="font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['team']['eyebrow'] }}</p>
            <h1 class="font-display text-headline-lg-mobile md:text-display text-secondary-fixed mb-md">{{ $content['team']['title'] }}</h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl">{{ $content['team']['lead'] }}</p>
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-md">
            @foreach ($content['team_members'] as $member)
                <article class="corporate-card p-md">
                    <div class="w-20 h-20 rounded-card bg-primary-fixed text-primary grid place-items-center font-headline-md text-headline-md mb-md">
                        {{ $member['initials'] }}
                    </div>
                    <h2 class="font-headline-md text-headline-md text-secondary-fixed mb-xs">{{ $member['name'] }}</h2>
                    <p class="font-label-code text-label-code text-primary mb-md">{{ $member['role'] }}</p>
                    <ul class="grid gap-xs">
                        @foreach ($member['focus'] as $focus)
                            <li class="flex gap-xs font-body-md text-body-md text-on-surface-variant">
                                <span class="material-symbols-outlined text-primary text-[20px] flex-shrink-0">check_circle</span>
                                <span>{{ $focus }}</span>
                            </li>
                        @endforeach
                    </ul>
                </article>
            @endforeach
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-surface-container-low border-y border-outline-variant">
        <div class="grid grid-cols-1 lg:grid-cols-[0.85fr_1.15fr] gap-xl items-start">
            <div>
                <p class="font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['team']['model_label'] }}</p>
                <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-secondary-fixed mb-md">{{ $content['team']['model_title'] }}</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant">{{ $content['team']['model_body'] }}</p>
            </div>
            <div class="corporate-card p-md">
                <p class="font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['team']['partners_label'] }}</p>
                <h3 class="font-headline-md text-headline-md text-secondary-fixed mb-md">{{ $content['team']['partners_title'] }}</h3>
                <div class="flex flex-wrap gap-xs">
                    @foreach ($content['partners'] as $partner)
                        <span class="rounded-pill border border-primary text-primary px-3 py-2 font-label-code text-label-code">{{ $partner }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
