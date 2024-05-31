@extends('layouts.backend')
@section('title', 'Our Branch Edit-Page')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="mt-3 mb-2">Edit Our Branch page</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.html">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Edit Our Branch page</strong>
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
                    <form action="{{route('ourbranch.update',$ourbranch->id)}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Title</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" value="{{$ourbranch->title}}"
                                    placeholder="Enter title" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Emial</strong></label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" value="{{$ourbranch->email}}"
                                    placeholder="Enter title" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Description</strong></label>
                            <div class="col-sm-10">
                                <textarea id="summernote" class="form-control mt-2" cols="20" rows="2"
                                    placeholder="Enter Description" name="description"
                                    required>{{$ourbranch->description}}"</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Address</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="address" value="{{$ourbranch->address}}"
                                    placeholder="Enter title" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Phone</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone" value="{{$ourbranch->phone}}"
                                    placeholder="Enter title" required>
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