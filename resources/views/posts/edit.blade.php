@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <form method="POST" action="{{ route('posts.edit', $event->id) }}" >
                @csrf
                @method('PATCH')
                @include('posts.form')
                <button type="submit" class="btn btn-default">Edit post</button>
            </form>
        </div>
    </section>
@endsection