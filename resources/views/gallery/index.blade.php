@extends('app.dashboard')

@section('content')
    <div class="col-md-6">
        <div class="card mb-3 shadow-sm--hover album-card">
            
            <img src="{{ asset('images/sax.jpg') }}" alt="album image" class="card-img-top">
            <div class="card-footer">
                <a href="" class="text-primary">Album title here</a>
                <p class="small mb-0">Release date: June 30th 2019</p>
                <p class="text-danger font-weight-600 small mb-0">5 tracks</p>
            </div>
            <div class="btn-group dropleft options">
                <button id="options" class="btn btn-white shadow-lg btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle dropdown</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="options">
                    <a class="dropdown-item" href="#">Update</a>
                    <a class="dropdown-item" href="#">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection