@extends('layouts.app')

@section('content')
    <section class="page-hero">
        <div class="container">
            <p class="eyebrow">{{ $content['about']['eyebrow'] }}</p>
            <h1>{{ $content['about']['title'] }}</h1>
            <p class="lead">{{ $content['about']['lead'] }}</p>
        </div>
    </section>

    <section class="section">
        <div class="container split">
            <div>
                <h2>{{ $content['about']['company_title'] }}</h2>
                @foreach ($content['about']['company_body'] as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
            </div>
            <div class="stack">
                @foreach ($content['capabilities'] as $capability)
                    <article class="line-card">
                        <h3>{{ $capability['title'] }}</h3>
                        <p>{{ $capability['body'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section soft">
        <div class="container section-heading">
            <p class="eyebrow">{{ $content['about']['vision_label'] }}</p>
            <h2>{{ $content['about']['vision_title'] }}</h2>
            <p>{{ $content['about']['vision_body'] }}</p>
        </div>
        <div class="container card-grid two">
            @foreach ($content['mission'] as $mission)
                <article class="card compact">
                    <span class="dot"></span>
                    <h3>{{ $mission }}</h3>
                </article>
            @endforeach
        </div>
    </section>
@endsection
