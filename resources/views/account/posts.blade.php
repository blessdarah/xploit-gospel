@extends('layouts.dashboard')

@section('content')
    {{-- button to add a new post --}}
    <a href="{{ route('posts.create') }}" class="btn btn-lg btn-success rounded-pill add-post" title="Add new post">+</a>
    @foreach ($posts as $post)
    <div class="card mb-3">
        <div class="card-header">
            {{-- Dropdown for the post --}}
            <div class="dropdown">
                <button id="options" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">more</button>
                <div class="dropdown-menu" aria-labelledby="options">
                    <a class="dropdown-item" href="{{ route('posts.show', $post->id) }}">read post</a>
                    <a class="dropdown-item" href="{{ route('posts.edit', $post->id) }}">edit</a>
                    <a class="dropdown-item" href="#">delete</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title mb-0">{{ $post->title }}</h5>
            <p class="text-muted small">{{ $post->created_at }}</p>
            <hr class="my-3">
            <p class="card-text">{{ $post->body }}</p>
        </div>
    </div>  
    @endforeach


    <div class="card mb-3">
        <div class="card-header">
            <div class="dropdown">
                <button id="options" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">more</button>
                <div class="dropdown-menu" aria-labelledby="options">
                    <a class="dropdown-item" href="#">edit</a>
                    <a class="dropdown-item" href="#">delete</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title mb-0">Post title</h5>
            <p class="text-muted small">January 20th 2020</p>
            <hr class="my-3">
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, deleniti minus. Esse adipisci dignissimos unde dolore ipsum facere enim repudiandae modi animi, nam ratione corrupti, vero aliquid temporibus nostrum explicabo.</p>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">
            <div class="dropdown">
                <button id="options" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">more</button>
                <div class="dropdown-menu" aria-labelledby="options">
                    <a class="dropdown-item" href="{{ route('posts.edit', Auth::user()->id) }}">edit</a>
                    <a class="dropdown-item" href="#">delete</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title mb-0">Post title</h5>
            <p class="text-muted small">January 20th 2020</p>
            <hr class="my-3">
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, deleniti minus. Esse adipisci dignissimos unde dolore ipsum facere enim repudiandae modi animi, nam ratione corrupti, vero aliquid temporibus nostrum explicabo.</p>
        </div>
    </div>
@endsection

@section('styles')
    .add-post {
        width: 40px;
        height: 40px;
        text-align: center;
        padding: 0;
        line-height: 40px;
        font-size: 2rem;
        position: fixed;
        top: 2%;
        right: 11%;
        z-index: 100;
    }
@endsection