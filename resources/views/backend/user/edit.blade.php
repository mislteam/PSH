@extends('layouts.backend')
@section('title', 'Edit Admin User')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2> Edit Admin User </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('userIndex') }}"> Edit Admin User </a>
            </li>
        </ol>
    </div>
    <div class="col-md-2 mt-4 text-right">
        <a href="{{route('userIndex')}}" class="btn bg-custom btn-sm"> Go Back </a>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-content">
                    <form action="{{route('userUpdate', $user->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group my-3 row">
                                    <label for="name" class="font-weight-bold col-sm-2"> Name </label>
                                    <input type="text" name="name" class="form-control mt-2 col-sm-10"
                                        value="{{$user->name}}">
                                    @error('name')
                                    <p class="text-danger my-2"> {{$message}} </p>
                                    @enderror
                                </div>
                                <div class="form-group my-3 row">
                                    <label for="email" class="font-weight-bold col-sm-2"> Email </label>
                                    <input type="email" name="email" class="form-control mt-2 col-sm-10"
                                        value="{{$user->email}}">
                                    @error('email')
                                    <p class="text-danger my-2"> {{$message}} </p>
                                    @enderror
                                </div>
                                <div class="form-group my-3 row">
                                    <label for="role" class="font-weight-bold col-sm-2"> Role </label>
                                    <select name="role" class="form-control col-sm-10">
                                        @foreach ($roles as $role)
                                        <option value="{{$role->id}}" class="text-uppercase" {{$user->
                                            hasAnyRole($role->name) ? 'selected' : ''}} >
                                            <span> {{$role->name}} </span>
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                    <p class="text-danger my-2"> {{$message}} </p>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Prodcut Type</strong></label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="product_type" required>
                                            <option value="" selected disabled>Select Prodcut Type</option>
                                            @foreach ($producttype as $item)
                                            <option value="{{$item->id}}" {{$item->id ==  $user->product_type_id ? 'selected':''}}>{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <button type="submit" class="btn bg-custom btn-sm float-right"> Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection