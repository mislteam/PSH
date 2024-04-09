@extends('layouts.backend')
@section('title', 'Product-sub-category Page')
@section('content')
@php
if(session('filter')) {
$projectcatname = session('filter')['name'];
}
@endphp
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="mt-3 mb-2">All Project Sub Category</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Projects Sub Category</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">
        <div class="form-group text-lg-start float-lg-right mt-5">
            @can('create projectsubcategory')
            <a href="{{route('project-sub-category.create')}}" class="btn btn-dark m-t-n-xs">Create Project Sub
                Category</a>
            @endcan
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">
                    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                        <thead>
                            <tr>
                                <th data-toggle="true">Project Sub Category Name</th>
                                <th class="text-right" data-sort-ignore="true">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($projectsubcategory) > 0)
                            @foreach ($projectsubcategory as $cat)
                            <tr>
                                <td>
                                    {{$cat->name}}
                                </td>
                                <td class="text-right">
                                    <div class="btn-group">
                                        @can('edit projectsubcategory')
                                        <button class="btn-white btn btn-sm">
                                            <a href="{{route('project-sub-category.edit',$cat->id)}}"
                                                class="text-dark">Edit</a>
                                        </button>
                                        @endcan
                                        @can('delete projectsubcategory')
                                        <button class="btn btn-white btn-sm text-dark"
                                            onclick="deleteForm('{{route('project-sub-category.delete')}}', {{$cat->id}})">delete</button>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="100%" class="text-danger text-center p-3 fw-bold"> No Data</td>
                            </tr>
                            @endif
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6">
                                    {{ $projectsubcategory->links('backend.layouts.pagination_ui') }}
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection