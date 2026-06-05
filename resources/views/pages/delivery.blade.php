@extends('layouts.app')

@section('content')
    <section class="page-hero px-margin-mobile md:px-margin-desktop py-xl bg-primary-fixed border-b border-outline-variant">
        <div class="page-hero-grid">
            <div class="page-hero-copy">
                <p class="section-kicker font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['delivery']['eyebrow'] }}</p>
                <h1 class="font-display text-headline-lg-mobile md:text-display text-secondary-fixed mb-md">{{ $content['delivery']['title'] }}</h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl">{{ $content['delivery']['lead'] }}</p>
            </div>
            <aside class="page-hero-panel corporate-card p-md md:p-lg">
                <p class="font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['delivery']['agile_label'] }}</p>
                <div class="hero-signal-list">
                    @foreach (array_slice($content['delivery_steps'], 0, 4) as $step)
                        <div class="hero-signal">
                            <span class="number-badge font-label-code text-label-code">{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            <h2 class="font-label-sticker text-label-sticker text-secondary-fixed self-center">{{ $step }}</h2>
                        </div>
                    @endforeach
                </div>
            </aside>
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-white">
        <div class="section-heading-panel">
            <div class="max-w-4xl">
                <span class="soft-chip font-label-sticker text-label-sticker mb-md">
                    {{ $content['delivery']['agile_label'] }}
                </span>
                <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-secondary-fixed">{{ $content['delivery']['agile_title'] }}</h2>
            </div>
            <span class="soft-chip font-label-code text-label-code">{{ $locale === 'id' ? '7 tahap delivery' : '7 delivery steps' }}</span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-md">
            @foreach ($content['delivery_steps'] as $step)
                <article class="corporate-card p-md">
                    <span class="w-12 h-12 rounded-card bg-primary-fixed text-primary grid place-items-center mb-md">
                        <span class="material-symbols-outlined text-[28px]">{{ ['search', 'architecture', 'draw', 'code', 'bug_report', 'rocket_launch', 'sync'][$loop->index] }}</span>
                    </span>
                    <p class="font-label-code text-label-code text-on-surface-variant mb-xs">{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</p>
                    <h3 class="font-headline-md text-headline-md text-secondary-fixed">{{ $step }}</h3>
                </article>
            @endforeach
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-md mt-lg">
            @foreach ($content['delivery_notes'] as $note)
                <article class="corporate-card p-md">
                    <p class="font-label-code text-label-code text-primary mb-xs">{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</p>
                    <h3 class="font-headline-md text-headline-md text-secondary-fixed mb-xs">{{ $note['title'] }}</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">{{ $note['body'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-surface-container-low border-y border-outline-variant">
        <div class="section-heading-panel">
            <div class="max-w-4xl">
                <p class="section-kicker font-label-sticker text-label-sticker text-primary mb-sm">{{ $content['delivery']['qa_label'] }}</p>
                <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-secondary-fixed">{{ $content['delivery']['qa_title'] }}</h2>
            </div>
            <span class="soft-chip font-label-code text-label-code">SIT / UAT / BAST</span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
            @foreach ($content['qa_governance'] as $step)
                <article class="corporate-card p-md">
                    <p class="font-label-code text-label-code text-primary mb-xs">{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</p>
                    <h3 class="font-headline-md text-headline-md text-secondary-fixed mb-xs">{{ $step['title'] }}</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">{{ $step['body'] }}</p>
                </article>
            @endforeach
        </div>
    </section>
@endsection
