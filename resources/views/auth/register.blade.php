@extends('layouts.auth')
@section('title', "Register")
@section('style')
    <style>
    .custom-file-upload {
        display: inline-block;
        position: relative;
        border: 1px solid rgb(236, 211, 211);
        padding: 5px;
        height: 100px;
        width: 100%;
      }

      .image-container {
        display: none;
      }

      .image-container img {
        position: absolute;
        top: 0;
        right: 0;
        height: 100px;
        width: 100%;
        object-fit: cover;
      }

      .custom-label {
        background-color: grey;
        color: #fff;
        padding: 5px 20px;
        cursor: pointer;
      }

      .input-file {
        display: none;
      }

      .remove-image {
        position: absolute;
        top: 0;
        right: 0;
      }
    </style>
@endsection
@section('content')
@if (session('error'))
    <p>{{session('error')}}</p>
@endif
<div class="text-center loginscreen animated fadeInDown d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="auth-container w-25">
        <a href="/">
            <img src="{{asset('image/logo/'.generalSetting('logo'))}}" alt="" class="img-fluid w-50">
        </a>
        <h3 class="font-weight-bold mt-3"> Register Account </h3>
        @include('general.session_message')
        <form class="m-t" role="form" action="{{route('register')}}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- name starts  --}}
            <div class="form-group">
                <input type="text" class="form-control rounded my-3 @error('name') is-invalid @enderror" name="name" placeholder="Full Name"  value="{{ old('name') }}"  autofocus required="">
            </div>
            @error('name')
                <span class="text-danger"> {{$message}} </span>
            @enderror
            {{-- name ends  --}}

            {{-- email starts  --}}
            <div class="form-group">
                <input type="email" class="form-control rounded my-3 @error('email') is-invalid @enderror" name="email" placeholder="E-Mail Address" value="{{ old('email') }}"  autofocus required="">
            </div>
            @error('email')
                <span class="text-danger"> {{$message}} </span>
            @enderror
            {{-- email ends  --}}

            {{-- phone starts --}}
            <div class="form-group">
                <input type="text" class="form-control rounded my-3 @error('phone') is-invalid @enderror" name="phone" placeholder="Phone Number" value="{{ old('phone') }}"  autofocus required="">
            </div>
            @error('phone')
                <span class="text-danger"> {{$message}} </span>
            @enderror
            {{-- phone ends  --}}

            {{-- Nrc/passport/driving license starts --}}
            <div class="form-group">
                <input type="text" class="form-control rounded my-3 @error('id_number') is-invalid @enderror" name="id_number" placeholder="NRC/Passport/Driving License" value="{{ old('id_number') }}"  autofocus required="">
            </div>
            @error('id_number')
                <span class="text-danger"> {{$message}} </span>
            @enderror
            {{-- Nrc/passport/driving license  ends  --}}

            {{-- Nrc/passport/driving license img starts  --}}
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <div class="custom-file-upload fond-weight-bold">
                            <div class="img-upload-form">
                              <h6 class="text-center">NRC/Passport/Driving license</h6>
                              <h6 class="text-center">Front</h6>
                              <label for="file-upload1" class="custom-label">
                                <i class="fa fa-cloud-upload"></i> Upload Image
                              </label>
                            </div>
                            <div class="image-container">
                              <img class="preview-image" src="#" alt="Preview" />
                              <button type="button" class="btn btn-danger btn-sm remove-image">X</button>
                            </div>
                            <input
                              type="file"
                              id="file-upload1"
                              class="input-file"
                              accept="image/*"
                              name="front-img"
                              required
                            />
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="custom-file-upload fond-weight-bold">
                            <div class="img-upload-form">
                              <h6 class="text-center">NRC/Passport/Driving license</h6>
                              <h6 class="text-center">Back</h6>
                              <label for="file-upload2" class="custom-label">
                                <i class="fa fa-cloud-upload"></i> Upload Image
                              </label>
                            </div>
                            <div class="image-container">
                              <img class="preview-image" src="#" alt="Preview" />
                              <button type="button" class="btn btn-danger btn-sm remove-image">X</button>
                            </div>
                            <input
                              type="file"
                              id="file-upload2"
                              class="input-file"
                              accept="image/*"
                              name="back-img"
                              required
                            />
                          </div>
                    </div>
                </div>
            </div>
            {{-- Nrc/passport/driving license img ends  --}}

            <div class="form-group">
                <input type="password" class="form-control rounded my-3" name="password" placeholder="Password" required="">
            </div>
            @error('password')
                <span class="text-danger"> {{$message}} </span>
            @enderror

            <div class="form-group">
                <input type="password" class="form-control rounded my-3" name="confirm_password" placeholder="Confirm Password" required="">
            </div>
            @error('confirm_password')
                <span class="text-danger"> {{$message}} </span>
            @enderror

            <div class="text-left">
                <input type="checkbox" name="terms&policy" id="" required>
                <label for=""> 
                  <a href="{{route('service_saving', "terms&policy")}}"> Agree the terms and policy </a>
                </label>
            </div>
            <button type="submit" class="btn text-white btn-sm block full-width m-b bg-custom"> Register Now  </button>
            <h5 class="my-3 text-center"> Already have an account </h5>
            <a href="{{route('login')}}" class="btn bg-dark text-white w-100 btn-sm"> Login </a>
        </form>
    </div>
</div>
@endsection
