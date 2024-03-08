@extends('layouts.backend')
@section('title', 'Technical Support EditPage')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="mt-3 mb-2">Edit Technical Support</h2>
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
            <a href="{{route('techsupport.index')}}" class="btn btn-dark m-t-n-xs">Back</a>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">
                    <form action="{{route('techsupport.update',$techsupp->id)}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Title:</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="techsupp_name" placeholder="Enter Title"
                                    value="{{$techsupp->name}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Product Name:</strong></label>
                            <div class="col-sm-10">
                                <select class="form-control" name="product_id" required>
                                    <option selected>Select Product Name</option>
                                    @foreach ($product as $item)
                                    <option value="{{$item->id}}" {{ $item->id == $techsupp->product_id ?'selected' : ''
                                        }}>
                                        {{$item->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Description:</strong></label>
                            <div class="col-sm-10">
                                <div class="summernote">
                                    <textarea id="summernote" class="form-control mt-2" cols="20" rows="5"
                                        placeholder="Enter Body" name="techsupp_des"
                                        required>{{$techsupp->description}}</textarea>

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
@stop