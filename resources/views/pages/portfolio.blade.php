@extends('layouts.app')

@section('content')
    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-background halftone-bg border-b-4 border-surface-variant">
        <div class="max-w-5xl">
            <p class="font-label-code text-label-code text-primary uppercase mb-sm">{{ $content['portfolio']['eyebrow'] }}</p>
            <h1 class="font-display text-headline-lg-mobile md:text-display text-white mb-md">{{ $content['portfolio']['title'] }}</h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl">{{ $content['portfolio']['lead'] }}</p>
            <p class="font-label-code text-label-code text-secondary-fixed mt-sm uppercase">{{ $content['portfolio']['subtitle'] }}</p>
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-surface">
        <div class="grid grid-cols-1 gap-lg">
            @foreach ($content['portfolio_items'] as $project)
                <article class="bg-background border-4 border-outline p-md md:p-lg hard-shadow-primary">
                    <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-md border-b-4 border-outline-variant pb-md mb-md">
                        <div>
                            <p class="font-label-code text-label-code text-primary mb-xs">CASE_STUDY_{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</p>
                            <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-white mb-xs">{{ $project['name'] }}</h2>
                            <p class="font-label-code text-label-code text-secondary-fixed uppercase">{{ $project['subtitle'] }}</p>
                        </div>
                        <div class="flex flex-wrap gap-xs lg:justify-end max-w-xl">
                            @foreach ($project['relevant_capability'] as $capability)
                                <span class="border-2 border-primary text-primary px-2 py-1 font-label-code text-xs uppercase">{{ $capability }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-md mb-md">
                        <div class="bg-surface-container p-md border-2 border-outline-variant">
                            <p class="font-label-code text-label-code text-tertiary mb-xs">{{ $content['portfolio']['challenge'] }}</p>
                            <p class="font-body-md text-body-md text-on-surface-variant">{{ $project['challenge'] }}</p>
                        </div>
                        <div class="bg-surface-container p-md border-2 border-outline-variant">
                            <p class="font-label-code text-label-code text-secondary-fixed mb-xs">{{ $content['portfolio']['solution'] }}</p>
                            <p class="font-body-md text-body-md text-on-surface-variant">{{ $project['solution'] }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-md">
                        <div>
                            <h3 class="font-display text-headline-md text-primary mb-sm">{{ $content['portfolio']['features'] }}</h3>
                            <ul class="grid gap-xs">
                                @foreach ($project['key_features'] as $feature)
                                    <li class="flex gap-xs font-body-md text-body-md text-on-surface">
                                        <span class="material-symbols-outlined text-primary text-[20px] flex-shrink-0">add_box</span>
                                        <span>{{ $feature }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-display text-headline-md text-secondary-fixed mb-sm">{{ $content['portfolio']['business_impact'] }}</h3>
                            <ul class="grid gap-xs">
                                @foreach ($project['business_impact'] as $impact)
                                    <li class="flex gap-xs font-body-md text-body-md text-on-surface">
                                        <span class="material-symbols-outlined text-secondary-fixed text-[20px] flex-shrink-0">trending_up</span>
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
