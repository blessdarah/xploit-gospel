@extends('layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-header">Edit banner</div>
        <div class="card-body">
            <form method="POST" action="{{ route('banner.update', $banner->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                @include('admin.banner.form')                
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Update banner</button>
                </div>
            </form>
        </div>
    </div>
@endsection