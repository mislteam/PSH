@extends('layouts.backend')
@section('title', 'Home about Edit-Page')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="mt-3 mb-2">Edit Home about page</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.html">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Edit  Home about page</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">
        <div class="form-group text-lg-start float-lg-right mt-5">
            <a href="{{url()->previous()}}" class="btn btn-dark m-t-n-xs">Back</a>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">
                    <form action="{{route('homeabout.update',$homeabout->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Title</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" value="{{$homeabout->title}}" placeholder="Enter title" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Description</strong></label>
                            <div class="col-sm-10">
                                <textarea class="form-control mt-2" cols="20" rows="2"
                                    placeholder="Enter Description" name="description" required>{{$homeabout->description}}"</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Background Image</strong></label>
                            <div class="col-sm-10">
                                <img src="{{asset('storage/home-about-image/'. $homeabout->about_img) }}"
                                class="rounded img-thumbnail shadow-sm w-25 h-auto" alt="about_img"  />
                                <input type="file" class="form-control" name="about_img"
                                    placeholder="Enter New Category Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>URL Link</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="link" value="{{$homeabout->link}}" placeholder="Enter URL Link"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button class="btn btn-sm btn-dark float-right text-start m-t-n-xs"
                                    type="submit"><strong>Update</strong></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection