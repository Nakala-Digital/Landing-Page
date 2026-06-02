@extends('layouts.app')

@section('content')
    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-background halftone-bg border-b-4 border-surface-variant">
        <div class="max-w-5xl">
            <p class="font-label-code text-label-code text-primary uppercase mb-sm">{{ $content['delivery']['eyebrow'] }}</p>
            <h1 class="font-display text-headline-lg-mobile md:text-display text-white mb-md">{{ $content['delivery']['title'] }}</h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl">{{ $content['delivery']['lead'] }}</p>
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-surface">
        <div class="mb-lg max-w-4xl">
            <span class="inline-block bg-secondary-fixed text-on-secondary-fixed px-sm py-1 border-2 border-on-secondary-fixed font-label-sticker text-label-sticker mb-md rotate-label">
                {{ $content['delivery']['agile_label'] }}
            </span>
            <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-white">{{ $content['delivery']['agile_title'] }}</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-md">
            @foreach ($content['delivery_steps'] as $step)
                <article class="bg-background border-4 border-outline p-md relative overflow-hidden">
                    <span class="font-display text-[90px] leading-none text-outline-variant/40 absolute -top-4 -right-2">0{{ $loop->iteration }}</span>
                    <span class="material-symbols-outlined text-primary text-[36px] mb-md relative z-10">{{ ['search', 'architecture', 'draw', 'code', 'bug_report', 'rocket_launch', 'sync'][$loop->index] }}</span>
                    <h3 class="font-display text-headline-md text-white relative z-10">{{ $step }}</h3>
                </article>
            @endforeach
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-md mt-lg">
            @foreach ($content['delivery_notes'] as $note)
                <article class="bg-surface-container border-4 border-primary p-md hard-shadow-primary">
                    <p class="font-label-code text-label-code text-primary mb-xs">DELIVERY_NOTE_0{{ $loop->iteration }}</p>
                    <h3 class="font-display text-headline-md text-secondary-fixed mb-xs">{{ $note['title'] }}</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">{{ $note['body'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-surface-container-low border-y-4 border-surface-variant">
        <div class="mb-lg max-w-4xl">
            <p class="font-label-code text-label-code text-tertiary uppercase mb-sm">{{ $content['delivery']['qa_label'] }}</p>
            <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-white">{{ $content['delivery']['qa_title'] }}</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
            @foreach ($content['qa_governance'] as $step)
                <article class="bg-background border-2 border-outline-variant p-md hover:border-tertiary transition-colors">
                    <p class="font-label-code text-label-code text-tertiary mb-xs">QUALITY_GATE_0{{ $loop->iteration }}</p>
                    <h3 class="font-display text-headline-md text-white mb-xs">{{ $step['title'] }}</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">{{ $step['body'] }}</p>
                </article>
            @endforeach
        </div>
    </section>
@endsection
