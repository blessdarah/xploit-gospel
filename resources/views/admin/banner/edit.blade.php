@extends('layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-header">Edit banner</div>
        <div class="card-body">
            <form method="POST" action="{{ route('banner.store') }}">
                @csrf
                @method('PATCH')
                @include('admin.banner.form')                
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Edit banner</button>
                </div>
            </form>
        </div>
    </div>
@endsection