@extends('layouts.backend')
@section('title', 'Product Page')
@section('content')
@php
    if(session('filter')) {
        $category = session('filter')['category'];
        $productname = session('filter')['name'];
        $subcat = session('filter')['subcat'];
        $brand = session('filter')['brand'];
    }
@endphp
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="mt-3 mb-2">All Products</h2>
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
            <a href="{{route('product.create')}}" class="btn btn-dark m-t-n-xs">Create Product</a>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    <div class="ibox-content m-b-sm border-bottom">
        <form action="" method="get" class="my-3">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label class="col-form-label"><strong>Product Name</strong></label>
                    <input type="text" id="product_name" name="name" value="" placeholder="Product Name"
                        class="form-control" value="{{$productname}}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label class="col-form-label"><strong>Prodcut Category</strong></label>
                    <select class="form-control" name="category">
                        <option value="">Select Product Cateory</option>
                        @foreach ($cat as $category)
                        <option value="{{$category->id}}"> {{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label class="col-form-label"><strong>Prodcut Sub Category</strong></label>
                    <select class="form-control" name="subcat">
                        <option value="">Select Product Sub Category</option>
                        @foreach ($subcategory as $subcat)
                        <option value="{{$subcat->id}}"> {{$subcat->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label class="col-form-label"><strong>Brands</strong></label>
                    <select class="form-control" name="brand">
                        <option value="">Select Brands</option>
                        @foreach ($brands as $pro_brand)
                        <option value="{{$pro_brand->id}}"> {{$pro_brand->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label class="col-form-label" for="status"></label>
                    {{-- <a href="#" class="form-control btn btn-dark btn-xs mt-2">Search</a> --}}
                    <button type="submit" class="form-control btn btn-dark btn-sm text-white mt-3">  Search </button>
                </div>
            </div>
        </div>
        </form>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">
                    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                        <thead>
                            <tr>
                                <th data-toggle="true">Product Name</th>
                                <th data-hide="phone">Product Category</th>
                                <th data-hide="phone">Product Sub Category</th>
                                <th data-hide="phone,tablet">Brands</th>
                                <th class="text-right" data-sort-ignore="true">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($products) > 0)
                            @foreach ($products as $product)
                            <tr>
                                <td>
                                    {{$product->name}}
                                </td>
                                <td>
                                    {{$product->category->name}}
                                </td>
                                <td>
                                    {{$product->subCategory->name}}
                                </td>
                                <td>
                                    {{$product->brand->name}}
                                </td>
                                <td class="text-right">
                                    <div class="btn-group">
                                        @can('edit product')
                                            <button class="btn-white btn btn-sm">
                                            <a href="{{route('product.edit',$product->id)}}" class="text-dark">Edit</a>
                                            </button>
                                        @endcan
                                        @can('delete product')
                                            <button class="btn btn-white btn-sm text-dark"
                                                onclick="deleteForm('{{route('product.delete')}}', {{$product->id}})">delete</button>
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
                                    {{ $products->links('backend.layouts.pagination_ui') }}
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