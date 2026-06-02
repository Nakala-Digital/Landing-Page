@extends('layouts.stitch')

@section('content')
<main class="pt-20">
    <section class="min-h-screen flex flex-col justify-center items-start px-margin-mobile md:px-margin-desktop relative halftone-bg overflow-hidden" id="cover">
        <div class="absolute top-20 right-0 w-1/2 h-px bg-primary"></div>
        <div class="absolute top-24 right-10 w-1/3 h-px bg-primary opacity-50"></div>
        <div class="z-10 mt-xl">
            <div class="inline-block bg-secondary-fixed text-on-secondary-fixed font-label-sticker text-label-sticker px-4 py-1 rotate-[-2deg] mb-md border-2 border-on-secondary-fixed">
                INDONESIA TECH PARTNER
            </div>
            <h1 class="font-display text-headline-lg-mobile md:text-display text-white mb-2 leading-none">
                NAKALA DIGITAL
            </h1>
            <div class="h-2 w-full max-w-2xl bg-tertiary-container mb-md"></div>
            <p class="font-headline-md text-headline-md text-primary max-w-3xl mb-sm">
                INDONESIA AI TECHNOLOGY, SOFTWARE DEVELOPMENT &amp; DIGITAL SOLUTIONS PARTNER
            </p>
            <p class="font-label-code text-label-code text-outline mb-lg uppercase">
                Professional Delivery. Meaningful Solutions. Impactful Growth.
            </p>
            <a href="{{ route('contact', ['locale' => $locale]) }}" class="group relative inline-flex px-lg py-md bg-primary text-on-primary font-label-sticker text-label-sticker border-2 border-on-primary transition-all hover:-translate-x-1 hover:-translate-y-1">
                <span class="absolute inset-0 bg-secondary-fixed translate-x-1 translate-y-1 -z-10 group-hover:translate-x-2 group-hover:translate-y-2 transition-transform"></span>
                LET'S BUILD TOGETHER
            </a>
        </div>
        <div class="absolute bottom-0 right-0 p-margin-desktop hidden lg:block opacity-20">
            <span class="font-display text-[200px] leading-none text-surface-variant select-none">NKLA_OS</span>
        </div>
    </section>

    <section class="py-xl px-margin-mobile md:px-margin-desktop bg-surface border-t-4 border-surface-variant" id="about">
        <div class="flex flex-col md:flex-row gap-xl items-start">
            <div class="w-full md:w-1/2">
                <div class="bg-tertiary text-on-tertiary inline-block px-4 py-1 font-label-sticker text-label-sticker mb-md">02 SECTION</div>
                <h2 class="font-headline-lg-mobile md:text-headline-lg text-secondary-fixed mb-lg">ABOUT NAKALA DIGITAL</h2>
                <p class="font-body-lg text-body-lg text-on-surface mb-md border-l-4 border-primary pl-md">
                    We are a local delivery partner backed by the regional excellence of <span class="text-primary-fixed-dim font-bold underline">Romulus Digital</span>. Bridging professional standards with Indonesian market agility.
                </p>
            </div>
            <div class="w-full md:w-1/2 grid grid-cols-1 gap-md">
                @foreach ($content['capabilities'] as $capability)
                    <div @class([
                        'border-4 border-outline p-md relative bg-surface-container',
                        'hard-shadow-primary' => $loop->iteration === 1,
                        'hard-shadow-tertiary translate-x-0 md:translate-x-4' => $loop->iteration === 2,
                        'hard-shadow-secondary' => $loop->iteration === 3,
                    ])>
                        <div class="flex items-center gap-xs mb-xs">
                            <span @class([
                                'material-symbols-outlined',
                                'text-primary' => $loop->iteration === 1,
                                'text-tertiary' => $loop->iteration === 2,
                                'text-secondary-fixed' => $loop->iteration === 3,
                            ])>{{ ['terminal', 'code', 'bolt'][$loop->index] }}</span>
                            <h3 @class([
                                'font-headline-md text-headline-md uppercase',
                                'text-tertiary' => $loop->iteration === 2,
                                'text-secondary-fixed' => $loop->iteration === 3,
                            ])>{{ $capability['title'] }}</h3>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant">{{ $capability['body'] }}</p>
                        @if ($loop->first)
                            <div class="absolute top-0 right-0 bg-secondary-fixed text-on-secondary-fixed text-[10px] px-2 py-0.5">V.01</div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-xl px-margin-mobile md:px-margin-desktop bg-background overflow-hidden" id="philosophy">
        <h2 class="font-headline-lg-mobile md:text-headline-lg text-white mb-xl text-center">03 BRAND PHILOSOPHY</h2>
        <div class="flex flex-col items-center justify-center space-y-[-4px]">
            <div class="w-full max-w-xs h-32 bg-tertiary flex flex-col items-center justify-center border-4 border-white relative z-30 hard-shadow-tertiary hover:-translate-y-2 transition-transform cursor-default">
                <span class="font-label-sticker text-label-sticker text-on-tertiary">03. PEAK</span>
                <h3 class="font-headline-md text-headline-md text-on-tertiary">IMPACTFUL GROWTH</h3>
            </div>
            <div class="w-full max-w-lg h-32 bg-primary flex flex-col items-center justify-center border-4 border-white relative z-20 hard-shadow-primary hover:-translate-y-2 transition-transform cursor-default">
                <span class="font-label-sticker text-label-sticker text-on-primary">02. CORE</span>
                <h3 class="font-headline-md text-headline-md text-on-primary">MEANINGFUL SOLUTIONS</h3>
            </div>
            <div class="w-full max-w-3xl h-32 bg-secondary-fixed flex flex-col items-center justify-center border-4 border-white relative z-10 hard-shadow-secondary hover:-translate-y-2 transition-transform cursor-default">
                <span class="font-label-sticker text-label-sticker text-on-secondary-fixed">01. FOUNDATION</span>
                <h3 class="font-headline-md text-headline-md text-on-secondary-fixed uppercase">Professional Delivery</h3>
            </div>
        </div>
        <div class="mt-xl text-center">
            <p class="font-label-code text-label-code text-outline uppercase tracking-widest">Architectural execution through systemic precision</p>
        </div>
    </section>

    <section class="py-xl px-margin-mobile md:px-margin-desktop bg-surface-container-low border-y-4 border-surface-variant relative" id="mission">
        <div class="absolute top-0 left-10 w-px h-full bg-surface-variant"></div>
        <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-xl">
            <div>
                <h2 class="font-headline-md text-headline-md text-tertiary mb-md">04 VISION &amp; MISSION</h2>
                <div class="bg-primary text-on-primary inline-block p-4 rotate-1 mb-md border-2 border-white">
                    <h3 class="font-display text-headline-lg-mobile md:text-headline-lg leading-tight uppercase">
                        To Empower Indonesia's Digital Future through Raw Technical Excellence.
                    </h3>
                </div>
            </div>
            <div class="space-y-md">
                @foreach (array_slice($content['mission'], 0, 3) as $mission)
                    <div class="flex items-start gap-md">
                        <div @class([
                            'mt-2 w-12 h-12 flex-shrink-0 border-4 flex items-center justify-center font-display text-headline-md',
                            'bg-secondary-fixed border-on-secondary-fixed text-on-secondary-fixed' => $loop->iteration === 1,
                            'bg-tertiary border-on-tertiary text-on-tertiary' => $loop->iteration === 2,
                            'bg-primary border-on-primary text-on-primary' => $loop->iteration === 3,
                        ])>X</div>
                        <div>
                            <span class="bg-white text-background px-2 py-1 font-label-code text-label-code mb-2 inline-block">MISSION_0{{ $loop->iteration }}</span>
                            <p class="font-body-lg text-body-lg">{{ $mission }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-xl px-margin-mobile md:px-margin-desktop bg-background halftone-bg" id="why">
        <div class="flex justify-between items-end mb-xl border-b-4 border-primary pb-sm">
            <h2 class="font-headline-lg-mobile md:text-headline-lg text-white">05 WHY NAKALA?</h2>
            <span class="font-label-code text-label-code text-primary hidden md:block">SYSTEM_REPORT: ADVANTAGES.LOG</span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-md">
            @foreach ($content['why'] as $item)
                <div class="bg-background border-2 border-primary p-gutter hover:bg-surface-container transition-colors relative group">
                    <div @class([
                        'absolute -top-3 left-4 px-2 font-label-sticker',
                        'bg-secondary-fixed text-on-secondary-fixed' => $loop->odd,
                        'bg-tertiary text-on-tertiary' => $loop->even,
                    ])>{{ strtoupper(str_replace([' & ', ', '], '_', $item)) }}</div>
                    <span class="material-symbols-outlined text-[48px] text-primary mb-md block">{{ ['location_on', 'psychology', 'verified_user', 'design_services', 'trending_up', 'hub'][$loop->index] }}</span>
                    <h3 class="font-headline-md text-headline-md mb-xs">{{ $item }}</h3>
                    <p class="font-body-md text-on-surface-variant">Professional execution with a disruptive, practical, and impact-driven technology mindset.</p>
                    <div class="absolute bottom-2 right-2 w-2 h-2 bg-primary group-hover:animate-ping"></div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl bg-surface border-y-4 border-surface-variant" id="services-overview">
        <div class="grid grid-cols-1 lg:grid-cols-[0.78fr_1.22fr] gap-xl items-start">
            <div class="lg:sticky lg:top-28">
                <div class="mb-md inline-flex items-center gap-xs bg-secondary-fixed text-on-secondary-fixed px-sm py-1 border-2 border-on-secondary-fixed font-label-sticker text-headline-md rotate-label">
                    <span class="material-symbols-outlined text-[28px]">design_services</span>
                    <span>06 SERVICE PILLARS</span>
                </div>
                <h2 class="font-display text-headline-lg-mobile md:text-headline-lg text-white mb-md">
                    {{ $content['services']['pillars_title'] }}
                </h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant mb-lg">
                    {{ $content['services']['lead'] }}
                </p>
                <a class="inline-flex items-center gap-xs bg-primary text-on-primary border-2 border-on-primary px-md py-sm font-label-sticker text-label-sticker hover:-translate-y-1 transition-transform" href="{{ route('services', ['locale' => $locale]) }}">
                    <span class="material-symbols-outlined text-[22px]">arrow_forward</span>
                    <span>{{ $locale === 'id' ? 'LIHAT DETAIL LAYANAN' : 'VIEW SERVICE DETAILS' }}</span>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                @foreach ($content['service_pillar_details'] as $pillar)
                    @php
                        $icons = ['psychology', 'code_blocks', 'language', 'settings_suggest', 'verified_user', 'support_agent'];
                        $accents = [
                            'border-primary hard-shadow-primary text-primary',
                            'border-secondary-fixed hard-shadow-secondary text-secondary-fixed',
                            'border-tertiary hard-shadow-tertiary text-tertiary',
                            'border-primary-fixed hard-shadow-primary text-primary-fixed',
                            'border-outline hard-shadow-secondary text-outline',
                            'border-primary-container hard-shadow-primary text-primary',
                        ];
                    @endphp
                    <article class="min-h-[220px] bg-background border-4 p-md flex flex-col {{ $accents[$loop->index] }}">
                        <div class="flex items-start justify-between gap-sm mb-md">
                            <span class="material-symbols-outlined text-[42px] leading-none">{{ $icons[$loop->index] }}</span>
                            <span class="font-label-code text-label-code text-on-surface-variant">0{{ $loop->iteration }}</span>
                        </div>
                        <h3 class="font-display text-headline-md text-white mb-sm">{{ $pillar['title'] }}</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-auto">{{ $pillar['body'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl" id="ai-technology">
        <div class="flex flex-col md:flex-row gap-lg">
            <div class="md:w-1/3">
                <div class="bg-primary-container text-on-primary p-sm inline-block font-label-sticker text-headline-md mb-md rotate-2">
                    07 AI TECHNOLOGY
                </div>
                <p class="font-body-lg text-on-surface-variant border-l-4 border-primary pl-md">
                    Harnessing neural networks and large language models to re-engineer business processes. From advisory to implementation.
                </p>
            </div>
            <div class="md:w-2/3 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-md">
                @foreach ($content['ai_capabilities'] as $capability)
                    <div @class([
                        'bg-surface-container-high border-2 p-md skew-card transition-all',
                        'border-primary hard-shadow-primary' => $loop->iteration % 3 === 1,
                        'border-secondary-fixed hard-shadow-secondary' => $loop->iteration % 3 === 2,
                        'border-tertiary hard-shadow-tertiary' => $loop->iteration % 3 === 0,
                    ])>
                        <span @class([
                            'material-symbols-outlined mb-sm',
                            'text-primary' => $loop->iteration % 3 === 1,
                            'text-secondary-fixed' => $loop->iteration % 3 === 2,
                            'text-tertiary' => $loop->iteration % 3 === 0,
                        ])>{{ ['psychology', 'person_search', 'school', 'precision_manufacturing', 'cloud_sync', 'analytics', 'bolt', 'forum'][$loop->index] }}</span>
                        <h4 @class([
                            'font-label-sticker text-label-sticker uppercase',
                            'text-primary' => $loop->iteration % 3 === 1,
                            'text-secondary-fixed' => $loop->iteration % 3 === 2,
                            'text-tertiary' => $loop->iteration % 3 === 0,
                        ])>{{ str_replace(' ', '_', $capability) }}</h4>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop bg-surface-container-lowest py-xl border-y-4 border-surface-variant" id="digital-solutions">
        <div class="mb-lg flex justify-between items-end">
            <div class="bg-tertiary text-on-tertiary p-sm font-label-sticker text-headline-md -rotate-1">
                08 DIGITAL SOLUTIONS
            </div>
            <div class="font-label-code text-outline text-label-code hidden md:block">
                [SYSTEM_VER: 4.0.2] // ARCH_TYPE: MICRO_SERVICES
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-xl">
            @foreach ($content['solutions'] as $solution)
                <div class="group relative">
                    <div class="absolute inset-0 {{ ['bg-primary-container', 'bg-secondary-container', 'bg-tertiary-container', 'bg-surface-variant'][$loop->index] }} {{ $loop->odd ? '-rotate-2' : 'rotate-1' }} opacity-10 group-hover:opacity-20 transition-opacity"></div>
                    <div class="punk-border p-md relative z-10 bg-background">
                        <div class="flex items-center justify-between mb-sm border-b-2 border-outline-variant pb-xs">
                            <h3 class="font-display text-headline-md">{{ strtoupper(str_replace(' ', '_', $solution)) }}</h3>
                            <span class="{{ ['bg-secondary-fixed text-on-secondary-fixed', 'bg-tertiary text-on-tertiary', 'bg-primary text-on-primary', 'bg-surface-bright text-on-surface'][$loop->index] }} px-2 font-label-sticker">{{ ['LIVE', 'STABLE', 'LMS_ENABLED', 'MIDDLEWARE'][$loop->index] }}</span>
                        </div>
                        <p class="font-body-md text-on-surface mb-md">Enterprise-ready platform architecture with operational clarity and maintainable delivery.</p>
                        <div class="bg-surface-container p-xs font-label-code text-primary text-xs flex gap-sm overflow-hidden whitespace-nowrap">
                            <span>&gt; deploy --env production</span>
                            <span class="opacity-50">| module.id: NKLA_v4</span>
                            <span class="opacity-30">| status: ok</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl" id="solution-model">
        <div class="mb-lg inline-block bg-primary text-on-primary px-sm py-1 font-label-sticker text-headline-md rotate-label">
            09 SOLUTION MODEL
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-0 border-4 border-outline-variant">
            @foreach ($content['models'] as $model)
                <div class="p-lg border-b-4 md:border-b-0 @if(!$loop->last) md:border-r-4 @endif border-outline-variant group hover:bg-surface-container transition-colors relative overflow-hidden">
                    <span @class([
                        'font-display text-[120px] leading-none text-outline-variant/30 absolute -top-8 -right-4 transition-colors',
                        'group-hover:text-primary' => $loop->iteration === 1,
                        'group-hover:text-secondary-fixed' => $loop->iteration === 2,
                        'group-hover:text-tertiary' => $loop->iteration === 3,
                    ])>0{{ $loop->iteration }}</span>
                    <div class="relative z-10">
                        <div @class([
                            'p-1 inline-block font-label-sticker mb-md',
                            'bg-primary text-on-primary' => $loop->iteration === 1,
                            'bg-secondary-fixed text-on-secondary-fixed' => $loop->iteration === 2,
                            'bg-tertiary text-on-tertiary' => $loop->iteration === 3,
                        ])>{{ strtoupper(explode(' ', $model['title'])[0]) }}</div>
                        <h3 class="font-display text-headline-md mb-sm">{{ strtoupper(str_replace([' & ', ' '], ['_', '_'], $model['title'])) }}</h3>
                        <p class="font-body-md text-on-surface-variant">{{ implode(' / ', $model['items']) }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="px-margin-mobile md:px-margin-desktop py-xl overflow-x-hidden" id="agile-delivery">
        <div class="mb-lg inline-block bg-secondary-fixed text-on-secondary-fixed px-sm py-1 font-label-sticker text-headline-md rotate-label">
            10 AGILE DELIVERY
        </div>
        <div class="relative py-xl">
            <div class="absolute top-1/2 left-0 w-full h-1 bg-outline-variant hidden md:block"></div>
            <div class="grid grid-cols-1 md:grid-cols-6 gap-md relative z-10">
                @foreach (array_slice($content['delivery_steps'], 0, 6) as $step)
                    <div class="flex flex-col items-center text-center">
                        <div @class([
                            'bg-background border-4 p-sm mb-sm relative',
                            'border-primary hard-shadow-primary' => $loop->iteration % 3 === 1,
                            'border-secondary-fixed hard-shadow-secondary' => $loop->iteration % 3 === 2,
                            'border-tertiary hard-shadow-tertiary' => $loop->iteration % 3 === 0,
                        ])>
                            <span @class([
                                'material-symbols-outlined text-headline-md',
                                'text-primary' => $loop->iteration % 3 === 1,
                                'text-secondary-fixed' => $loop->iteration % 3 === 2,
                                'text-tertiary' => $loop->iteration % 3 === 0,
                            ])>{{ ['search', 'architecture', 'draw', 'code', 'bug_report', 'rocket_launch'][$loop->index] }}</span>
                            <div @class([
                                'absolute -top-4 -right-2 px-1 font-label-code text-[10px]',
                                'bg-primary text-on-primary' => $loop->iteration % 3 === 1,
                                'bg-secondary-fixed text-on-secondary-fixed' => $loop->iteration % 3 === 2,
                                'bg-tertiary text-on-tertiary' => $loop->iteration % 3 === 0,
                            ])>P0{{ $loop->iteration }}</div>
                        </div>
                        <h4 class="font-label-sticker text-on-surface uppercase">{{ $step }}</h4>
                    </div>
                @endforeach
            </div>
            <div class="mt-lg border-t-4 border-primary-fixed relative">
                <div class="absolute -top-3 right-0 w-0 h-0 border-t-[12px] border-t-transparent border-b-[12px] border-b-transparent border-l-[20px] border-l-primary-fixed"></div>
                <div class="p-xs font-label-code text-primary text-[10px] tracking-[0.5em] uppercase opacity-50">Iterative cycle triggered on every sprint delivery</div>
            </div>
        </div>
    </section>
</main>
@endsection
