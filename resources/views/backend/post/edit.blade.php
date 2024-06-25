@extends('layouts.backend')
@section('title', 'Edit Forum Category Page')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="mt-3 mb-2">Edit Forum Category</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.html">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Forum System</strong>
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
    <form action="{{route('PostUpdate',$post->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-content">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Title:</strong></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter News Name"
                                            name="title" value="{{$post->title}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Description:</strong></label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control mt-2" cols="20" rows="5" placeholder="Enter Body"
                                            name="description" required>{{$post->description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Status:</strong></label>
                                    <div class="col-sm-10">
                                        <input type="checkbox" name="status" id="statusCheckbox" value="1" {{
                                            $post->status ? 'checked' : '' }}><span>Enable Thread</span>
                                        <!-- Hidden field to ensure a value is always sent for 'status' -->
                                        <input type="hidden" name="status" id="hiddenStatus"
                                            value="{{ $post->status ? '1' : '0' }}">
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
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    document.getElementById('statusCheckbox').addEventListener('change', function() {
        document.getElementById('hiddenStatus').value = this.checked ? '1' : '0';
    });
</script>
@endsection