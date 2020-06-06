@extends('layouts.app')

@section('content')
    <div class="container container--floated">
        <h3>All posts</h3>
        <hr>
            <div class="card">
                <div class="card-header">
                <img src="{{ asset('posts/') . $post->image }}" alt="{{ $post->title }}" class="card-img-top">
                </div>
                <div class="card-body">
                    <h3 class="card-title">{{ $post->title }}</h3>
                    <p class="card-text">{{ $post->short_description }}</p>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-primary">read more</a>
                </div>
            </div>
    </div>
@endsection