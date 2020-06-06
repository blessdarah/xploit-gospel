@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <form method="POST" action="{{ route('events.edit', $event->id) }}" >
                @csrf
                @method('PATCH')
                @include('events.form')
                <button type="submit" class="btn btn-default">Edit event</button>
            </form>
        </div>
    </section>
@endsection