@extends('layouts.backend')
@section('title', 'News Edit Page')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="mt-3 mb-2">Edit News</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.html">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>News</strong>
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
    <form action="{{route('news.update',$new->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-content">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>News Name:</strong></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter Project Name"
                                            name="new_name" value="{{$new->name}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>News Category</strong></label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="new_category_id">
                                            <option value="">Select News Cateory</option>
                                            @foreach ($newcat as $item)
                                            <option value="{{$item->id}}" {{ $item->id == $new->new_category_id
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
                                            placeholder="Enter Body" name="new_description"
                                            required>{{$new->description}}</textarea>
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
                        <img src="{{asset('storage/new_feature_image/'. $new->feature_image) }}"
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