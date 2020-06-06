@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <form method="POST" action="{{ route('events.store') }}" >
                @csrf
                @method('POST')
                @include('events.form')
                <button type="submit" class="btn btn-default">Create event</button>
            </form>
        </div>
    </section>
@endsection