@extends('layouts.backend')
@section('title', 'Customer Detail Page')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2> Setting </h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#"> setting </a>
                </li>
                <li class="breadcrumb-item active">
                    <a> Account setting </a>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <h5> Account Information </h5>
                        </div>
                    </div>
                    <div class="ibox-content py-5 px-3">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex">
                                    @if ($user->image && $user->image->exists())
                                        <img src="{{ asset('/profile/' . $user->image->path) }}"
                                            id="preview_image_before_upload" class="img-fluid profile-img mr-5"
                                            width="100px">
                                    @else
                                        <img src="{{ asset('/profile/profile.png') }}" alt=""
                                            class="img-fluid profile-img mr-5" width="200px">
                                    @endif
                                    <div class="user-information">
                                        <p><span class="font-weight-bold"> Name </span> : {{ $user->name }}</p>
                                        <p><span class="font-weight-bold"> Email </span> : {{ $user->email }}</p>
                                        <a href="{{ route('accountChangePasswordPage', $user->id) }}"
                                            class="btn btn-sm bg-custom text-white">
                                            Change Password
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="d-flex justify-content-end">

                                    <a href="{{ route('accountEdit', $user->id) }}" class="btn btn-sm bg-custom text-white">
                                        Edit Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
