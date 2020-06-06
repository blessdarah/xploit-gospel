@extends('layouts.app')

@section('content')
    <div class="page-banner">
        <img src="{{ asset('images/sax.jpg') }}" alt="hero image" class="img-fluid page-banner-image">
        <h3 class="page-banner-title text-white">Xploit our Events</h3>
    </div>
    <div class="container container--floated">
        @foreach ($events as $event)
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title"><a href="{{ route('events.show', $event->id) }}">{{ $event->name }}</a></h3>
                    <p class="card-text">{{ $event->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection