@extends('layouts.backend')
@section('title', 'Product-category Edit-Page')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="mt-3 mb-2">Edit Product Category</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.html">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Products</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">
        <div class="form-group text-lg-start float-lg-right mt-5">
            <a href="{{route('productcategory.index')}}" class="btn btn-dark m-t-n-xs">Back</a>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">
                    <form action="{{route('productcategory.update', $category->id)}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Product Category Name:</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cat_name"
                                    placeholder="Enter Product Category Name" value="{{$category->name}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Product Category
                                    Description:</strong></label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="9" name="cat_description" maxlength="5000"
                                    placeholder="Enter the Category Description"
                                    required>{{$category->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-sm-2 col-form-label"><strong>Product Category Image:</strong></label>
                            <div class="col-sm-10">
                                <img src="{{asset('storage/category_images/'.$category->category_image) }}"
                                    class="rounded img-thumbnail shadow-sm" alt="cat" id="preview_image_before_upload"/>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input id="inputGroupFile01" type="file" name="cat_image"
                                            class="custom-file-input"
                                            accept="image/jpeg, image/png, image/webp, image/jpeg" id='fileInput'>
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
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection