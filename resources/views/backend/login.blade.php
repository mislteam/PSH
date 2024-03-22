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
     <div id="preloader" class="preloader">
	        <div class='inner'>
	            <div class='line1'></div>
	            <div class='line2'></div>
	            <div class='line3'></div>
	        </div>
	    </div>
		<section class="fxt-template-animation fxt-template-layout6" data-bg-image="{{asset('assets/img/login-bg.jpg')}}">
			<div class="fxt-header">
				<a href="{{route('home')}}" class="fxt-logo"><img src="{{asset('image/logo/'.generalSetting('logo'))}}" alt="Logo"></a>
			</div>
			<div class="fxt-content">
				<div class="fxt-form">
					<h2 class="text-center">Admin Login</h2>
					<form action="{{route('login')}}" method="POST" id="adminLogin">
                        @csrf
						<div class="form-group">
							<div class="">
								<input type="email" class="form-control" name="email" placeholder="Email Address">
							</div>
                            @error('email')
                                <span class="text-danger"> {{$message}} </span>
                            @enderror
						</div>
						<div class="form-group">
							<div class="fxt-transformY-50 fxt-transition-delay-4">
								<input type="password" class="form-control" name="password" placeholder="Password">
							</div>
                            @error('password')
                                <span class="text-danger"> {{$message}} </span>
                            @enderror
                            @error('g-recaptcha-response')
                                <span class="text-danger"> {{$message}} </span>
                            @enderror
						</div>
						<div class="form-group text-center">
                            <button type="submit"
                            data-action='adminlogin' class="fxt-btn-fill">Login</button>
						</div>
						
					</form>
				</div>
			</div>
		</section>
@endsection
@section('script')
    <script>
    function onSubmit(token) {
      document.getElementById("adminLogin").submit();
    }
  </script>
@endsection

