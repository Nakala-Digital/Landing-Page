@extends('layouts.app')

@section('content')
    <section class="page-hero">
        <div class="container">
            <p class="eyebrow">{{ $content['delivery']['eyebrow'] }}</p>
            <h1>{{ $content['delivery']['title'] }}</h1>
            <p class="lead">{{ $content['delivery']['lead'] }}</p>
        </div>
    </section>

    <section class="section">
        <div class="container section-heading">
            <p class="eyebrow">{{ $content['delivery']['agile_label'] }}</p>
            <h2>{{ $content['delivery']['agile_title'] }}</h2>
        </div>
        <div class="container timeline">
            @foreach ($content['delivery_steps'] as $step)
                <article class="timeline-item">
                    <span>{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                    <h3>{{ $step }}</h3>
                </article>
            @endforeach
        </div>
    </section>

    <section class="section soft">
        <div class="container section-heading">
            <p class="eyebrow">{{ $content['delivery']['qa_label'] }}</p>
            <h2>{{ $content['delivery']['qa_title'] }}</h2>
        </div>
        <div class="container card-grid four">
            @foreach ($content['qa_steps'] as $step)
                <article class="card compact">
                    <span>{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                    <h3>{{ $step }}</h3>
                </article>
            @endforeach
        </div>
    </section>
@endsection
