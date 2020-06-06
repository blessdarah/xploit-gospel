@extends('layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-header">Edit post <button class="btn btn-sm btn-link float-right" onclick="window.history.back()">< go back</button></div>
        <div class="card-body">
            <form method="POST" action="{{ route('posts.update', $post->id) }}" >
                @csrf
                @method('PATCH')
                @include('posts.form')
                <button type="submit" class="btn btn-default">Edit post</button>
            </form>
        </div>
    </div>
@endsection