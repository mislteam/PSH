@extends('layouts.backend')
@section('title', 'Create User')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2> Admin  </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">
                <a> Create </a>
            </li>
        </ol>
    </div>
    <div class="col-md-2 mt-4 text-right">
        <a href="{{ route('userIndex') }}" class="btn bg-custom btn-sm"> Go Back </a>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
<div class="row">
    <div class="col-lg-12">
    <div class="ibox ">
        {{-- <div class="ibox-title">
            <div class="d-flex flex-wrap justify-content-between align-items-center">
                <h5> Add New Admin </h5>
            </div>
        </div> --}}
        <div class="ibox-content">
            <form action="{{route('userStore')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group my-3 row">
                        <label for="name" class="font-weight-bold col-sm-2"> Name </label>
                        <input type="text" name="name" class="form-control mt-2 col-sm-10" placeholder="Enter Your Name">
                        @error('name')
                            <p class="text-danger my-2"> {{$message}} </p>
                        @enderror
                    </div>
                    <div class="form-group my-3 row">
                        <label for="email" class="font-weight-bold col-sm-2"> Email </label>
                        <input type="email" name="email" class="form-control mt-2 col-sm-10" placeholder="Enter Your Email">
                        @error('email')
                            <p class="text-danger my-2"> {{$message}} </p>
                        @enderror
                    </div>
                    
                    <div class="form-group my-3 row">
                        <label for="password" class="font-weight-bold col-sm-2"> Password </label>
                        <input type="password" name="password" class="form-control mt-2 col-sm-10" placeholder="***********">
                        @error('password')
                            <p class="text-danger my-2"> {{$message}} </p>
                        @enderror
                    </div>
                    <div class="form-group my-3 row">
                        <label for="confirm_password" class="font-weight-bold col-sm-2"> Confirm Password  </label>
                        <input type="password" name="confirm_password" class="form-control mt-2 col-sm-10" placeholder="***********"/> 
                        @error('confirm_password')
                            <p class="text-danger my-2"> {{$message}} </p>
                        @enderror
                    </div>
                    <div class="form-group my-3 row">
                        <label for="role" class="font-weight-bold col-sm-2"> Role  </label>
                        <select name="role" class="form-control col-sm-10">
                            @foreach ($roles as $role)
                                <option value="{{$role->id}}" class="text-uppercase"> 
                                    <span > {{$role->name}} </span> 
                                </option>
                            @endforeach
                        </select>
                        @error('email')
                            <p class="text-danger my-2"> {{$message}} </p>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12">
                    <button type="submit" class="btn bg-custom btn-sm float-right"> Save</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection