@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eaque dolores consequuntur totam natus enim beatae illo aperiam quis cum.</p>
                </div>
                <div class="card-footer">
                    {{-- TODO: route to album details --}}
                    <a href="#">Album title here</a>
                    <p class="small">5 tracks</p>
                </div>
            </div>
        </div>
    </div>
@endsection