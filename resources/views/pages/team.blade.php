@extends('layouts.app')

@section('content')
    <section class="page-hero">
        <div class="container">
            <p class="eyebrow">{{ $content['team']['eyebrow'] }}</p>
            <h1>{{ $content['team']['title'] }}</h1>
            <p class="lead">{{ $content['team']['lead'] }}</p>
        </div>
    </section>

    <section class="section">
        <div class="container card-grid three">
            @foreach ($content['team_members'] as $member)
                <article class="card profile-card">
                    <div class="avatar">{{ $member['initials'] }}</div>
                    <h2>{{ $member['name'] }}</h2>
                    <p>{{ $member['role'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="section soft">
        <div class="container section-heading">
            <p class="eyebrow">{{ $content['team']['partners_label'] }}</p>
            <h2>{{ $content['team']['partners_title'] }}</h2>
        </div>
        <div class="container card-grid three">
            @foreach ($content['partners'] as $partner)
                <article class="card compact">
                    <h3>{{ $partner }}</h3>
                </article>
            @endforeach
        </div>
    </section>
@endsection
