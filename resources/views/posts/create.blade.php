@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <form method="POST" action="{{ route('posts.store') }}" >
                @csrf
                @method('POST')
                @include('posts.form')
                <button type="submit" class="btn btn-default">Create post</button>
            </form>
        </div>
    </section>
@endsection