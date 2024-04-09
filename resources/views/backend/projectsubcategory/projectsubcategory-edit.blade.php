@extends('layouts.backend')
@section('title', 'Project-sub-category Edit-Page')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="mt-3 mb-2">Edit Project Sub Category</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.html">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Project Sub Category</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">
        <div class="form-group text-lg-start float-lg-right mt-5">
            <a href="{{route('project-sub-category.index')}}" class="btn btn-dark m-t-n-xs">Back</a>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">
                    <form action="{{route('project-sub-category.update',$projectsubcategory->id)}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Project Sub Category Name:</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="project_sub_cat_name"
                                    placeholder="Enter Project Category Name" required
                                    value="{{$projectsubcategory->name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Product Category Name:</strong></label>
                            <div class="col-sm-10">
                                <select class="form-control" name="project_cat_id">
                                    <option selected>Select Product Cateory</option>
                                    @foreach ($projectcategory as $item)
                                    <option value="{{$item->id}}" {{ $item->id ==
                                        $projectsubcategory->project_category_id ?
                                        'selected' : '' }}>{{$item->name}}</option>
                                    @endforeach
                                </select>
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