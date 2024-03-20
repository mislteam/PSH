@extends('layouts.backend')
@section('title', 'Project-edit Page')
@section('content')
@php
$info = collect(json_decode($project->gallery_image));
@endphp
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="mt-3 mb-2">Edit Project</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.html">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Projects</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">
        <div class="form-group text-lg-start float-lg-right mt-5">
            <a href="projects.html" class="btn btn-dark m-t-n-xs">Back</a>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    <form action="{{route('project.update',$project->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-content">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Project Name:</strong></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter Project Name"
                                            name="project_name" value="{{$project->name}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Project Category</strong></label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="project_category_id">
                                            <option value="">Select Project Cateory</option>
                                            @foreach ($procat as $item)
                                            <option value="{{$item->id}}" {{ $item->id == $project->project_category_id
                                                ?
                                                'selected' : '' }}>{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Product Description:</strong></label>
                                    <div class="col-sm-10">
                                        <textarea id="summernote" class="form-control mt-2" cols="20" rows="5"
                                            placeholder="Enter Body" name="project_description"
                                            required>{{$project->description}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5><b>Feature Image</b></h5>
                    </div>
                    <div class="ibox-content">
                        <img src="{{asset('storage/project_feature_image/'. $project->feature_image) }}"
                            class="rounded img-thumbnail shadow-sm" alt="feature_image" />
                        <div class="input-group">
                            <div class="custom-file">
                                <input id="inputGroupFile01" type="file" name="feature_image" class="custom-file-input"
                                    accept="image/jpeg, image/png, image/webp, image/jpeg">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ibox">
                    <div class="ibox-title">
                        <h5><b>Gallery Image</b></h5>
                    </div>
                    <div class="ibox-content">
                        @foreach(json_decode($project->gallery_image) ?? [] as $image)
                        <div class="d-inline">
                            <img src="{{ asset('/storage/gallery_image/' . $image) }}"
                                class="rounded img-thumbnail shadow-sm w-25 " alt="Gallery Image" />
                        </div>
                        @endforeach
                        <div class="input-group mt-3">
                            <div class="custom-file">
                                <input id="inputGroupFile01" type="file" name="gallery_image[]"
                                    class="custom-file-input" accept="image/jpeg, image/png, image/webp, image/jpeg"
                                    multiple>
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <button class="btn btn-sm btn-dark float-right text-start m-t-n-xs"
                            type="submit"><strong>Update</strong></button>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>
@endsection