@extends('layouts.dashboard')

@section('content')

    <div class="card">
        <div class="card-header py-2 d-lg-flex justify-content-lg-between align-items-lg-center">
            <span>Create new event</span> <a class="btn btn-link float-right" onclick="window.history.back()">< back</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('events.store') }}" >
                @csrf
                @method('POST')
                @include('events.form')
                <button type="submit" class="btn btn-default">Create event</button>
            </form>
        </div>
    </div>

@endsection