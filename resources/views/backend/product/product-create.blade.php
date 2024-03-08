@extends('layouts.backend')
@section('title', 'Product Page')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="mt-3 mb-2">Create Products</h2>
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
            <a href="product.html" class="btn btn-primary m-t-n-xs">Back</a>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    <div class="row">
        <div class="col-lg-9">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Product Name:</strong></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="product_name" placeholder="Enter Product Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Prodcut Category</strong></label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="product_cat" >
                                            <option selected>Select Product Cateory</option>
                                            @foreach ($cat as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Prodcut Sub Category</strong></label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="product_subcat">
                                            <option selected>Select Product Sub Cateory</option>
                                            @foreach ($subcat as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Prodcut Brands</strong></label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="product_brand">
                                            <option selected>Select Brands</option>
                                            @foreach ($brand as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Prodcut
                                            Specification</strong></label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-5 form-group">
                                                <input type="text" class="form-control" placeholder="Title">
                                            </div>
                                            <div class="col-sm-5 form-group">
                                                <input type="text" class="form-control" placeholder="Value">
                                            </div>
                                            <div class="col-sm-2 form-group">
                                                <button class="form-control btn btn-sm btn-primary" type="submit"
                                                    disabled><strong>Delete</strong></button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group text-end float-right">
                                                    <button class="btn btn-primary m-t-n-xs text-start float-right"
                                                        type="submit"><strong>Add ++</strong></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Product Description:</strong></label>
                                    <div class="col-sm-10">
                                        <textarea id="summernote" class="form-control mt-2" cols="20"
                                            rows="5" placeholder="Enter Body" name="product_des"></textarea>
                                    </div>
                                </div>
                                <label class="col-form-label"><strong>Document File:</strong></label>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>PDF File:</strong></label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input id="inputGroupFile01" type="file" class="custom-file-input" name="product_pdf">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Video Link:</strong></label>
                                    <div class="col-sm-10 form-group">
                                        <input type="text" class="form-control" placeholder="Enter your youtube link" name="product_video_link">
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
                    <div class="input-group">
                        <div class="custom-file">
                            <input id="inputGroupFile01" type="file" class="custom-file-input" name="product_guide_image">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><b>Guide Document (PDF)</b></h5>
                </div>
                <div class="ibox-content">
                    <div class="input-group">
                        <div class="custom-file">
                            <input id="inputGroupFile01" type="file" class="custom-file-input" name="product_guide_pdf">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><b>Guide Document (Video File)</b></h5>
                </div>
                <div class="ibox-content">
                    <div class="form-group">
                        <select class="form-control">
                            <option selected>Select Video Type</option>
                            <option>Youtube Link</option>
                            <option>Video file Upload</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <button class="btn btn-sm btn-primary float-right text-start m-t-n-xs"
                        type="submit"><strong>Save</strong></button>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>
@endsection