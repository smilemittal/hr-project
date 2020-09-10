@extends('layouts.app')
@section('styles')
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/login-register.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- END: Custom CSS-->
@endsection
@section('content')
<div class="card border-grey border-lighten-3 px-1 py-1 m-0">
    <div class="card-header border-0">
        <div class="text-center mb-1">
            <img src="app-assets/images/logo/logo.png" alt="branding logo">
        </div>
        <div class="font-large-1  text-center">
            Member Login
        </div>
    </div>
    <div class="card-content">

        <div class="card-body">
            <form class="form-horizontal" action="{{ route('login') }}" novalidate>
                        @csrf
                <fieldset class="form-group position-relative has-icon-left">
                    <input type="email" id="user-name" placeholder="Your email" class="form-control round @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <div class="form-control-position">
                        <i class="ft-user"></i>
                    </div>
                </fieldset>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <fieldset class="form-group position-relative has-icon-left">
                    <input type="password" id="user-password" placeholder="Enter Password"  class="form-control round @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <div class="form-control-position">
                        <i class="ft-lock"></i>
                    </div>
                </fieldset>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                @if (Route::has('password.request'))
                <div class="form-group row">
                    <div class="col-md-6 col-12 text-center text-sm-left">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a href="{{ route('password.request') }}" class="card-link">Forgot Password?</a></div>
                </div>
                @endif
                <div class="form-group text-center">
                    <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1">Login</button>
                </div>

            </form>
        </div>
        <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-2 "><span>OR Sign Up Using</span></p>
        <div class="text-center">
            <a href="#" class="btn btn-social-icon round mr-1 mb-1 btn-facebook"><span class="ft-facebook"></span></a>
            <a href="#" class="btn btn-social-icon round mr-1 mb-1 btn-twitter"><span class="ft-twitter"></span></a>
            <a href="#" class="btn btn-social-icon round mr-1 mb-1 btn-instagram"><span class="ft-instagram"></span></a>
        </div>

        <p class="card-subtitle text-muted text-right font-small-3 mx-2 my-1"><span>Don't have an account ? <a href="register.html" class="card-link">Sign Up</a></span></p>
    </div>
</div>

@endsection

@section('scripts')
 <!-- BEGIN: Page JS-->
 <script src="{{asset('app-assets/js/scripts/forms/form-login-register.js')}}" type="text/javascript"></script>
    <!-- END: Page JS-->
@endsection