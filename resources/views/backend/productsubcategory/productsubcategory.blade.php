@extends('layouts.backend')
@section('title', 'Product-category Page')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="mt-3 mb-2">All Products Sub Category</h2>
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
            <a href="{{route('productsubcategory.create')}}" class="btn btn-dark m-t-n-xs">Create Product Sub
                Category</a>
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
                                <th data-toggle="true">Product Sub Category</th>
                                <th data-toggle="true">Product Category</th>
                                <th data-hide="phone">Short Description</th>
                                <th class="text-right" data-sort-ignore="true">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($subcategories) > 0)
                            @foreach ($subcategories as $subcat)
                            <tr>
                                <td>
                                    {{$subcat->name}}
                                </td>
                                <td>
                                    {{$subcat->category->name}}
                                </td>
                                <td>
                                    {{$subcat->description}}
                                </td>
                                <td class="text-right">
                                    <div class="btn-group">
                                        <button class="btn-white btn btn-sm">
                                            <a href="{{route('productsubcategory.edit',$subcat->id)}}"
                                                class="text-dark">Edit</a>
                                        </button>
                                        {{-- @can('delete users') --}}
                                        {{-- @if (!$user->hasRole('admin')) --}}
                                        {{-- <div class=""> --}}
                                            <button class="btn btn-white btn-sm text-dark"
                                                onclick="deleteForm('{{route('productsubcategory.delete')}}', {{$subcat->id}})">delete</button>
                                            {{--
                                        </div> --}}
                                        {{-- @endif --}}
                                        {{-- @endcan --}}
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
                                    {{ $subcategories->links('backend.layouts.pagination_ui') }}
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