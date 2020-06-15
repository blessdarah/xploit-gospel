@extends('layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit event
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('events.edit', $event->id) }}" >
                @csrf
                @method('PATCH')
                @include('events.form')
                <button type="submit" class="btn btn-default">Edit event</button>
            </form>
        </div>
    </div>
@endsection