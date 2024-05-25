@extends('layouts.backend')
@section('title', 'Product Type Page')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="mt-3 mb-2">Product Type</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.html">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Product Type</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">
        <div class="form-group text-lg-start float-lg-right mt-5">
            <a href="{{route('producttype.create')}}" class="btn btn-dark m-t-n-xs">Create Product Type</a>
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
                                <th data-hide="phone">Product Type Name</th>
                                <th class="text-right" data-sort-ignore="true">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($product_type) > 0)
                            @foreach ($product_type as $type)
                            <tr>
                                <td>{{$type->name}}</td>
                                <td class="text-right">
                                    <div class="btn-group">
                                        @can('edit producttype')
                                        <button class="btn-white btn btn-sm">
                                            <a href="{{route('producttype.edit',$type->id)}}" class="text-dark">Edit</a>
                                        </button>
                                        @endcan
                                        @can('delete producttype')
                                        <button class="btn btn-white btn-sm text-dark"
                                            onclick="deleteForm('{{route('producttype.delete')}}', {{$type->id}})">delete</button>
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
                                    {{ $product_type->links('backend.layouts.pagination_ui') }}
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