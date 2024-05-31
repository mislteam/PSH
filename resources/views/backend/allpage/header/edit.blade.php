@extends('layouts.backend')
@section('title', 'Header Edit-Page')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="mt-3 mb-2">Edit Header page</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.html">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Edit Header page</strong>
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
                    <form action="{{route('header.update',$header->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Phone</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone" value="{{$header->phone}}"
                                    placeholder="Enter title" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>email</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email" value="{{$header->email}}"
                                    placeholder="Enter title" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Open Hour</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="open_hour" value="{{$header->open_hour}}"
                                    placeholder="Enter title" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Instagram Link</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="ig_link" value="{{$header->ig_link}}"
                                    placeholder="Enter title" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Twitter Link</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="twitter_link"
                                    value="{{$header->twitter_link}}" placeholder="Enter title" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Facebook Link</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="fb_link" value="{{$header->fb_link}}"
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