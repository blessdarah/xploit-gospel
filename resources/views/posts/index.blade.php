@extends('layouts.app')

@section('content')
    <div class="page-banner">
        <img src="{{ asset('images/sax.jpg') }}" alt="hero image" class="img-fluid page-banner-image">
        <h3 class="page-banner-title text-white">Xploit our posts</h3>
    </div>
    <div class="container container--floated">
        @foreach ($posts as $post)
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title"><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h3>
                    <p class="card-text">{{ $post->short_description }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection