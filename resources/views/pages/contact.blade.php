@extends('layouts.app')

@section('content')
    <section class="page-hero">
        <div class="container">
            <p class="eyebrow">{{ $content['contact']['eyebrow'] }}</p>
            <h1>{{ $content['contact']['title'] }}</h1>
            <p class="lead">{{ $content['contact']['lead'] }}</p>
        </div>
    </section>

    <section class="section">
        <div class="container split">
            <div class="contact-box">
                <p class="eyebrow">Nakala Digital</p>
                <h2>{{ $site['brand']['location'] }}</h2>
                <dl>
                    <dt>{{ $content['contact']['contact_person'] }}</dt>
                    <dd>{{ $site['brand']['contact_person'] }}, {{ $site['brand']['contact_role'] }}</dd>
                    <dt>{{ $content['contact']['phone'] }}</dt>
                    <dd><a href="tel:+6282295706304">{{ $site['brand']['phone'] }}</a></dd>
                </dl>
            </div>
            <div>
                <p class="eyebrow">{{ $content['contact']['engagement_label'] }}</p>
                <h2>{{ $content['contact']['engagement_title'] }}</h2>
                <div class="stack">
                    @foreach ($content['engagement'] as $step)
                        <article class="line-card">
                            <h3>{{ $step }}</h3>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="section soft">
        <div class="container section-heading">
            <p class="eyebrow">{{ $content['contact']['types_label'] }}</p>
            <h2>{{ $content['contact']['types_title'] }}</h2>
        </div>
        <div class="container card-grid three">
            @foreach ($content['engagement_types'] as $type)
                <article class="card compact">
                    <h3>{{ $type }}</h3>
                </article>
            @endforeach
        </div>
    </section>
@endsection
