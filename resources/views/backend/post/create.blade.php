@extends('layouts.backend')
@section('title', 'Forum Category Create Page')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="mt-3 mb-2">Create Forum Category</h2>
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
    <form action="{{route('PostStore')}}" method="POST" enctype="multipart/form-data">
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
                                            name="title">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Description:</strong></label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control mt-2" cols="20" rows="5" placeholder="Enter Body"
                                            name="description" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Status:</strong></label>
                                    <div class="col-sm-10">
                                        <input type="checkbox" name="status_checkbox" id="statusCheckbox" value="1">
                                        <span>Enable Thread</span>
                                        <input type="hidden" id="hiddenStatus" name="status" value="0">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <button class="btn btn-sm btn-dark float-right text-start m-t-n-xs"
                                            type="submit"><strong>Save</strong></button>
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
    // JavaScript to synchronize the hidden field with the checkbox state
    document.getElementById('statusCheckbox').addEventListener('change', function() {
        document.getElementById('hiddenStatus').value = this.checked ? '1' : '0';
    });
</script>
@endsection