@extends('layouts.dashboard')

@section('content')
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="card">
            <div class="card-header">Edit album</div>
            <div class="card-body">
                 @include('album.form')
                <div class="form-group">
                    <button type="submit" class="btn btn-warning">Edit album</button>
                </div>
            </div>
        </div>
    </form>
@endsection
