@extends('layouts.app')

@section('content')
    <section class="page-hero">
        <div class="container">
            <p class="eyebrow">{{ $content['portfolio']['eyebrow'] }}</p>
            <h1>{{ $content['portfolio']['title'] }}</h1>
            <p class="lead">{{ $content['portfolio']['lead'] }}</p>
        </div>
    </section>

    <section class="section">
        <div class="container card-grid two">
            @foreach ($content['portfolio_items'] as $project)
                <article class="card project-card">
                    <h2>{{ $project['name'] }}</h2>
                    <dl>
                        <dt>{{ $content['portfolio']['challenge'] }}</dt>
                        <dd>{{ $project['challenge'] }}</dd>
                        <dt>{{ $content['portfolio']['solution'] }}</dt>
                        <dd>{{ $project['solution'] }}</dd>
                        <dt>{{ $content['portfolio']['impact'] }}</dt>
                        <dd>{{ $project['impact'] }}</dd>
                    </dl>
                </article>
            @endforeach
        </div>
    </section>
@endsection
