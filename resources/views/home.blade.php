@extends('layouts.dashboard')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
           Welcome to your dashboard
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="card-title display-2 mb-0">18</h3>
                    <p><strong>Posts</strong></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="card-title display-2 mb-0">20</h3>
                    <p><strong>Followers</strong></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="card-title display-2 mb-0">3</h3>
                    <p><strong>Albums</strong></p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="card-title display-2 mb-0">21</h3>
                    <p><strong>Uploads</strong></p>
                </div>
            </div>
        </div>
    </div>

    {{-- latest updates --}}
    <hr>
    <h3>Recent updates</h3>
    <ul class="list-group">
        <a class="list-group-item list-group-item-action" href="#">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim corporis minus voluptates iusto, reprehenderit ducimus ullam nesciunt quaerat non impedit?</p>
        </a>
        <a class="list-group-item list-group-item-action" href="#" tabindex="-1" aria-disabled="true">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, possimus?</p>
        </a>
    </ul>
@endsection
