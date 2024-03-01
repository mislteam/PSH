@extends('layouts.backend')
@section('title', 'Change Password account')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2> Account Setting  </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="">Setting </a>
            </li>
            <li class="breadcrumb-item">
                <a> Account </a>
            </li>
            <li class="breadcrumb-item active">
                <a> Change Password </a>
            </li>
        </ol>
    </div>
    <div class="col-md-2 mt-4 text-right">
        <a href="{{route('accountShow',$user->id)}}" class="btn bg-custom btn-sm"> Go Back </a>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
<div class="row">
    <div class="col-lg-12">
    <div class="ibox ">
        <div class="ibox-title">
            <div class="d-flex flex-wrap justify-content-between align-items-center">
                <h5> Change Password </h5>
            </div>
        </div>
        <form action="{{ route('accountUpdate',$user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="ibox-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group my-3">
                        <label for="current_password" class="font-weight-bold"> Current Password </label>
                        <input type="password" name="current_password" class="form-control mt-2">
                        @error('current_password')
                            <p class="text-danger my-2"> {{$message}} </p>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="new_password" class="font-weight-bold"> New Password </label>
                        <input type="password" name="new_password" class="form-control mt-2">
                        @error('new_password')
                            <p class="text-danger my-2"> {{$message}} </p>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="confirm_password" class="font-weight-bold"> Confirm Password </label>
                        <input type="password" name="confirm_password" class="form-control mt-2">
                        @error('confirm_password')
                            <p class="text-danger my-2"> {{$message}} </p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 text-right">
                    <button type="submit" class="btn bg-custom btn-sm"> Update</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection