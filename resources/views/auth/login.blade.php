@extends('layouts.plain')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center no-gutters">
        {{-- empty column --}}
        <div class="col-md-5 bg-primary shadow">
            <img src="{{ asset('images/sax.jpg') }}" alt="" class="img-fluid h-100">
        </div>
        <div class="col-md-6 col-lg-5 shadow">
            <div class="card border-0 py-lg-5 px-3">
                <div class="card-body">
                    <h3 class="font-weight-600">Login to account</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group ">
                            <label for="password">{{ __('Password') }}</label>

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror  
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a><br>
                            @endif
                             <button type="submit" class="btn btn-primary btn-block px-5">
                                {{ __('Login') }}
                            </button>
                            <p class="text-center mt-3">Don't have an account? <a href="{{url('register') }}">Signup</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
