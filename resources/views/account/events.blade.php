@extends('layouts.dashboard')

@section('content')
    <div class="text-lg-right">
        <a href="{{ route('events.create') }}" class="btn btn-sm btn-success mr-lg-0">+ add event</a>
        <hr class="mt-3">
    </div>
    @if ($events->count() > 0)
        @foreach ($events as $event)
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"><a href="{{ route('events.show', $event->id) }}">{{ $event->name }}</a></h3>
                        <p class="card-text">{{ $event->description }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('events.edit', $event->id) }}" class="d-inline-block badge badge-success">edit</a>

                        <form class="d-inline-block form-inline" method="post" action="{{ route('events.destroy', $event->id) }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-sm btn-danger small">
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="alert alert-dark" role="alert">
            No events have been created yet
        </div>
    @endif

@endsection