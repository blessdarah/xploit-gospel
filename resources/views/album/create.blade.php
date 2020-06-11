@extends('layouts.dashboard')

@section('content')
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">Create album</div>
            <div class="card-body">
                 @include('album.form')
                <div class="form-group">
                    <button type="submit" class="btn btn-warning">Create album</button>
                </div>
            </div>
        </div>
    </form>
@endsection
