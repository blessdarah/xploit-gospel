@extends('layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-header">Add new banner</div>
        <div class="card-body">
            <form method="POST" action="{{ route('banner.store') }}" enctype="multipart/form-data">
                @csrf
                @include('admin.banner.form')                
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Add banner</button>
                </div>
            </form>
        </div>
    </div>
@endsection