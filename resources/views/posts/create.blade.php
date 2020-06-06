@extends('layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-header">Create new post <button class="btn btn-sm btn-link float-right" onclick="window.history.back()">< go back</button></div>
        <div class="card-body">
            <form method="POST" action="{{ route('posts.store') }}" >
                @csrf
                @method('POST')
                @include('posts.form')
                <button type="submit" class="btn btn-default">Create post</button>
            </form>
        </div>
    </div>

@endsection