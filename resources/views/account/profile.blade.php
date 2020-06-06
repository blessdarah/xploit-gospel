@extends('layouts.dashboard')

@section('content')
    <div class="card card-body profile-image mb-3">
        <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid">
    </div>

    <form method="POST" action="{{route('profile.update', Auth::user()->id)}}">
        @csrf
        @method('PATCH')
        {{-- user defined details --}}
        <div class="card card-body">
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="username">Username</label>
                    <input id="username" class="form-control" type="text" name="name" value="{{ Auth::user()->name }}">
                </div>

                <div class="form-group col-6">
                    <label for="email">Email address</label>
                    <input id="email" class="form-control" type="email" name="email" value="{{ Auth::user()->email }}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-6">
                    <label for="password">New password</label>
                <input type="password" class="form-control" name="password" id="password" value="{{ Auth::user()->password }}">
                </div>

                <div class="form-group col-6">
                    <label for="image">Profile image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
            </div>
        </div>

        {{-- about user area --}}
        <div class="card card-body my-4">
            <label for="about">Something about you</label>
            <textarea name="about" id="about" cols="30" rows="6" class="form-control">{{ Auth::user()->profile->about ?? '' }}</textarea>
        </div>

        {{-- profile details --}}
        <div class="card card-body my-4">
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="facebook">Facebook url</label>
                    <input id="facebook" class="form-control" type="url" name="facebook" value="{{ Auth::user()->profile->facebook ?? '' }}">
                </div>

                <div class="form-group col-6">
                    <label for="twitter">Twitter url</label>
                    <input id="twitter" class="form-control" type="url" name="twitter" value="{{ Auth::user()->profile->twitter ?? '' }}">
                </div>

                <div class="form-group col-6">
                    <label for="instagram">Instagram url</label>
                    <input id="instagram" class="form-control" type="url" name="instagram" value="{{ Auth::user()->profile->instagram ?? '' }}">
                </div>

                <div class="form-group col-6">
                    <label for="whatsapp">Whatsapp number</label>
                    <input id="whatsapp" class="form-control" type="tel" name="whatsapp" value="{{ Auth::user()->profile->whatsapp ?? '' }}">
                </div>
            </div>
        </div>

        {{-- submit section --}}
        <div class="card card-body my-4 flex-row">
            <button onclick="window.history.back()" class="btn btn-sm btn-link mr-3">Cancel</button>
            <button type="submit" class="btn btn-sm btn-success px-3 py-2 shadow" >Update profile</button>
        </div>
    </form>
@endsection

@section('styles')
    .profile-image {
        width: 18rem;
    }
@endsection