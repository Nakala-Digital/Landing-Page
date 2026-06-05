@extends('layouts.app')

@section('content')
    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-primary-fixed border-b border-outline-variant">
        <div class="max-w-5xl">
            <p class="font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['portfolio']['eyebrow'] }}</p>
            <h1 class="font-display text-headline-lg-mobile md:text-display text-secondary-fixed mb-md">{{ $content['portfolio']['title'] }}</h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl">{{ $content['portfolio']['lead'] }}</p>
            <p class="font-label-code text-label-code text-primary mt-sm">{{ $content['portfolio']['subtitle'] }}</p>
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-white">
        <div class="grid grid-cols-1 gap-lg">
            @foreach ($content['portfolio_items'] as $project)
                <article class="corporate-card p-md md:p-lg">
                    <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-md border-b border-outline-variant pb-md mb-md">
                        <div>
                            <p class="font-label-code text-label-code text-primary mb-xs">{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</p>
                            <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-secondary-fixed mb-xs">{{ $project['name'] }}</h2>
                            <p class="font-label-code text-label-code text-on-surface-variant">{{ $project['subtitle'] }}</p>
                        </div>
                        <div class="flex flex-wrap gap-xs lg:justify-end max-w-xl">
                            @foreach ($project['relevant_capability'] as $capability)
                                <span class="rounded-pill border border-primary text-primary px-3 py-1 font-label-code text-xs">{{ $capability }}</span>
                            @endforeach
                        </div>
                    </div>

                    @if(isset($project['images']) && is_array($project['images']))
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-md mb-md">
                            @foreach($project['images'] as $img)
                                <div class="rounded-card overflow-hidden border border-outline-variant aspect-video bg-surface-container-low flex items-center justify-center p-sm">
                                    <img src="{{ asset($img) }}" alt="{{ $project['name'] }}" class="max-w-full max-h-full object-contain">
                                </div>
                            @endforeach
                        </div>
                    @elseif(isset($project['image']))
                        <div class="mb-md rounded-card overflow-hidden border border-outline-variant aspect-[21/9] md:aspect-[21/9] bg-surface-container-low flex items-center justify-center p-sm md:p-md">
                            <img src="{{ asset($project['image']) }}" alt="{{ $project['name'] }}" class="max-w-full max-h-full object-contain">
                        </div>
                    @endif

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-md mb-md">
                        <div class="bg-surface-container-low p-md rounded-card border border-outline-variant">
                            <p class="font-label-sticker text-label-sticker text-primary mb-xs">{{ $content['portfolio']['challenge'] }}</p>
                            <p class="font-body-md text-body-md text-on-surface-variant">{{ $project['challenge'] }}</p>
                        </div>
                        <div class="bg-surface-container-low p-md rounded-card border border-outline-variant">
                            <p class="font-label-sticker text-label-sticker text-primary mb-xs">{{ $content['portfolio']['solution'] }}</p>
                            <p class="font-body-md text-body-md text-on-surface-variant">{{ $project['solution'] }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-md">
                        <div>
                            <h3 class="font-headline-md text-headline-md text-secondary-fixed mb-sm">{{ $content['portfolio']['features'] }}</h3>
                            <ul class="grid gap-xs">
                                @foreach ($project['key_features'] as $feature)
                                    <li class="flex gap-xs font-body-md text-body-md text-on-surface">
                                        <span class="material-symbols-outlined text-primary text-[20px] flex-shrink-0">check_circle</span>
                                        <span>{{ $feature }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-headline-md text-headline-md text-secondary-fixed mb-sm">{{ $content['portfolio']['business_impact'] }}</h3>
                            <ul class="grid gap-xs">
                                @foreach ($project['business_impact'] as $impact)
                                    <li class="flex gap-xs font-body-md text-body-md text-on-surface">
                                        <span class="material-symbols-outlined text-primary text-[20px] flex-shrink-0">trending_up</span>
                                        <span>{{ $impact }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
@endsection
