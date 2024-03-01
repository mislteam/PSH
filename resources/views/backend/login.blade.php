@extends('layouts.auth')
@section('title', 'Login Page')
<style>
    .login-form {
        width: 25%;
    }
    @media only screen and (max-width: 600px) {
        .login-form {
            width: 75% !important;
        }
    }
</style>
@section('content')
    <div class="text-center loginscreen animated fadeInDown d-flex justify-content-center align-items-center vh-100 bg-light">
        <div class="login-form">
            <a href="/">
                <img src="{{asset('image/logo/'.generalSetting('logo'))}}" alt="" class="img-fluid w-50">
            </a>
            <form class="m-t" role="form" action="{{route('login')}}" method="POST" id="adminLogin">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control my-3 @error('email') is-invalid @enderror" name="email" placeholder="Email Address"  name="email" value="{{ old('email') }}" autocomplete="email" autofocus required="">
                </div>
                @error('email')
                    <span class="text-danger"> {{$message}} </span>
                @enderror
                <div class="form-group">
                    <input type="password" class="form-control my-3" name="password" placeholder="Password" required="">
                </div>
                @error('password')
                    <span class="text-danger"> {{$message}} </span>
                @enderror
                @error('g-recaptcha-response')
                    <span class="text-danger"> {{$message}} </span>
                @enderror
                <button type="submit"
                data-action='adminlogin' class="btn bg-custom text-white btn-sm block full-width m-b g-recaptcha">Login Now</button>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
    function onSubmit(token) {
      document.getElementById("adminLogin").submit();
    }
  </script>
@endsection

