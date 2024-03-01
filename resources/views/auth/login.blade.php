@extends('layouts.auth')
@section('title', 'Login Page')
@section('content')
    <div class="text-center loginscreen animated fadeInDown d-flex justify-content-center align-items-center vh-100 bg-light">
        <div class="auth-container w-25">
            <a href="/">
                <img src="{{asset('image/logo/'.generalSetting('logo'))}}" alt="" class="img-fluid w-50">
            </a>
            <h3 class="font-weight-bold mt-3"> Login </h3>
            @include('general.session_message')
            <form class="m-t" role="form" action="{{route('login')}}" method="POST" id="loginForm">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control rounded my-3 @error('email') is-invalid @enderror" name="email" placeholder="Username"  name="email" value="{{ old('email') }}" autocomplete="email" autofocus required="">
                </div>
                @error('email')
                    <span class="text-danger"> {{$message}} </span>
                @enderror
                <div class="form-group">
                    <input type="password" class="form-control rounded my-3" name="password" placeholder="Password" required="">
                </div>
                @error('password')
                    <span class="text-danger"> {{$message}} </span>
                @enderror
                <button 
                type="submit"
                class="btn text-white btn-sm block full-width m-b g-recaptcha bg-custom">Login</button>
                
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                <h3> No Account yet? Sign Up</h3>
                <a href="{{route('register')}}" class="btn btn-sm bg-custom text-white w-100"> Register </a>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
    function onSubmit(token) {
      document.getElementById("loginForm").submit();
    }
  </script>
@endsection

