@extends('layouts.app')

@section('content')
    <section class="page-hero">
        <div class="container">
            <p class="eyebrow">{{ $content['services']['eyebrow'] }}</p>
            <h1>{{ $content['services']['title'] }}</h1>
            <p class="lead">{{ $content['services']['lead'] }}</p>
        </div>
    </section>

    <section class="section">
        <div class="container section-heading">
            <p class="eyebrow">{{ $content['services']['pillars_label'] }}</p>
            <h2>{{ $content['services']['pillars_title'] }}</h2>
        </div>
        <div class="container card-grid three">
            @foreach ($content['service_pillars'] as $pillar)
                <article class="card compact">
                    <span class="dot"></span>
                    <h3>{{ $pillar }}</h3>
                </article>
            @endforeach
        </div>
    </section>

    <section class="section soft">
        <div class="container section-heading">
            <p class="eyebrow">{{ $content['services']['ai_label'] }}</p>
            <h2>{{ $content['services']['ai_title'] }}</h2>
            <p>{{ $content['services']['ai_body'] }}</p>
        </div>
        <div class="container card-grid four">
            @foreach ($content['ai_capabilities'] as $capability)
                <article class="card compact">
                    <h3>{{ $capability }}</h3>
                </article>
            @endforeach
        </div>
    </section>

    <section class="section">
        <div class="container split">
            <div>
                <p class="eyebrow">{{ $content['services']['solutions_label'] }}</p>
                <h2>{{ $content['services']['solutions_title'] }}</h2>
            </div>
            <div class="stack">
                @foreach ($content['solutions'] as $solution)
                    <article class="line-card">
                        <h3>{{ $solution }}</h3>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section soft">
        <div class="container section-heading">
            <p class="eyebrow">{{ $content['services']['model_label'] }}</p>
            <h2>{{ $content['services']['model_title'] }}</h2>
        </div>
        <div class="container card-grid three">
            @foreach ($content['models'] as $model)
                <article class="card">
                    <h3>{{ $model['title'] }}</h3>
                    <ul class="clean-list">
                        @foreach ($model['items'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </article>
            @endforeach
        </div>
    </section>
@endsection
