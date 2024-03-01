@extends('layouts.frontend')
@section('title', 'Account Setting')
@section('style')
    <style>
        .account-container p {
            font-size: 14px;
            line-height: 0.7em;
        }
    </style>
@endsection
@section('content')
    @include('frontend.layouts.parts.general-banner', ['title' => "Account Setting"])
    <div class="container my-3 account-container" style="min-height : 50vh">
        <div class="row">
            <div class="col-md-8">
                <h5 class="my-3 fw-bold translate"> Account Information </h5>
                <p> <span class="fw-bold translate"> Name :</span> {{auth()->user()->name}} </p>
                <p> <span class="fw-bold translate"> E-Mail Address :</span> {{auth()->user()->email}} </p>
                <p> <span class="fw-bold translate"> Phone Number :</span> {{auth()->user()->phone ?? "-"}} </p>
                <p> <span class="fw-bold translate"> NRC/Passport/Driving License :</span> {{auth()->user()->idNumber}} </p>
                <div class="d-flex justify-content-between flex-wrap">
                    @if (file_exists(public_path('/uploads'.'/'.auth()->user()->front_img)))                    
                    <img src="{{asset('/uploads'.'/'.auth()->user()->front_img)}}" alt="" class="img-fluid">
                    @endif

                    @if (file_exists(public_path('/uploads'.'/'.auth()->user()->back_img))) 
                    <img src="{{asset('/uploads'.'/'.auth()->user()->back_img)}}" alt="" class="img-fluid mt-md-0 mt-3">
                    @endif
                    
                </div>
            </div>
            <div class="col-md-4 mt-md-0 mt-3">
                <div class="text-md-end">
                    <div class="d-flex">
                        <a href="{{route('user.accountEdit')}}" class="col-6 btn bg-custom btn-sm me-2 text-white translate"> Edit Profile </a>
                        <a href="{{route('user.changePassword')}}" class="col-6 btn bg-custom btn-sm me-2 text-white translate"> Change Password </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 my-3">
                <h5 class="fw-bold translate"> Transaction </h5>
                <a href="{{route('user.transaction')}}" class="btn btn-sm bg-custom text-white mt-3 translate"> View Transaction </a>
            </div>
        </div>
    </div>
@endsection