@extends('layouts.app')

@section('content')
<div class="post-image">
    <img src="{{ asset('images/live.jpg') }}" alt="Post image" class="img-fluid">
</div>
    <div class="container container--floated">
            <div class="card">
                <div class="card-header">
                    posted on: {{ $post->created_at }} <button class="btn btn-link float-right" onclick="window.history.back()">< go back</button>
                </div>
                <div class="card-body">
                    <h3 class="card-title">{{ $post->title }}</h3>
                    {{-- post body here --}}
                    {!! $post->body !!}
                </div>
            </div>
    </div>
@endsection

@section('styles')
    <style>
        .post-image img {
            max-height: 25rem;
            object-fit: cover;
            width: 100%;
        }
    </style>
@endsection