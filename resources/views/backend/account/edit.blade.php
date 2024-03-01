@extends('layouts.backend')
@section('title', 'Edit Account')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2> Account Setting </h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="">Setting </a>
                </li>
                <li class="breadcrumb-item">
                    <a> Account </a>
                </li>
                <li class="breadcrumb-item active">
                    <a> Edit Account </a>
                </li>
            </ol>
        </div>
        <div class="col-md-2 mt-4 text-right">
            <a href="{{ route('accountShow', $user->id) }}" class="btn bg-custom btn-sm"> Go Back </a>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <h5> Account Edit </h5>
                        </div>
                    </div>
                    <form action="{{ route('accountInformationupdate', $user->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group my-3">
                                        <div class="mt-3">
                                            <label for="current_password" class="font-weight-bold"> Profile Photo
                                            </label><br>
                                            @if ($user->image && $user->image->exists())
                                                <img src="{{ asset('/profile/' . $user->image->path) }}"
                                                    id="preview_image_before_upload" class="img-fluid profile-img mr-5"
                                                    width="100px">
                                            @else
                                                <img src="{{ asset('/profile/profile.png') }}" alt=""
                                                    class="img-fluid profile-img mr-5" width="100px" id="preview_image_before_upload">
                                            @endif
                                            {{-- @if (Auth::user()->image == null) --}}
                                            {{-- <img src="{{asset('storage/'.$user->image->path)}}" class="rounded img-thumbnail shadow-sm" id="preview_image_before_upload"  width="100px"/> --}}
                                            {{-- @endif --}}

                                            <input type="file" id='fileInput' name="image" class="form-control">
                                            @error('image')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            @error('name')
                                                <p class="text-danger my-2"> {{ $message }} </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group my-3">
                                            <label class="font-weight-bold"> Full Name </label>
                                            <input type="text" name="name" value="{{ $user->name }}"
                                                class="form-control mt-2">
                                            @error('name')
                                                <p class="text-danger my-2"> {{ $message }} </p>
                                            @enderror
                                        </div>
                                        <div class="form-group my-3">
                                            <label  class="font-weight-bold"> E-mail Address </label>
                                            <input type="email" name="email" value="{{ $user->email }}"
                                                class="form-control mt-2">
                                            @error('email')
                                                <p class="text-danger my-2"> {{ $message }} </p>
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
