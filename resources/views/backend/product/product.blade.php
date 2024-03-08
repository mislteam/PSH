@extends('layouts.backend')
@section('title', 'Product Page')
@section('content')
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
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label class="col-form-label"><strong>Product Name</strong></label>
                    <input type="text" id="product_name" name="product_name" value="" placeholder="Product Name"
                        class="form-control">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label class="col-form-label"><strong>Prodcut Category</strong></label>
                    <select class="form-control">
                        <option selected>Select Product Cateory</option>
                        <option>Electronic Weighing Scale</option>
                        <option>Category 2</option>
                        <option>Category 3</option>
                        <option>Category 4</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label class="col-form-label"><strong>Prodcut Sub Category</strong></label>
                    <select class="form-control">
                        <option selected>Select Product Sub Category</option>
                        <option>Truck Scale</option>
                        <option>Sub Category 2</option>
                        <option>Sub Category 3</option>
                        <option>Sub Category 4</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label class="col-form-label"><strong>Brands</strong></label>
                    <select class="form-control">
                        <option selected>Select Brands</option>
                        <option>Setra</option>
                        <option>Brand 2</option>
                        <option>Brand 3</option>
                        <option>Brand 4</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label class="col-form-label" for="status"></label>
                    <a href="#" class="form-control btn btn-dark btn-xs mt-2">Search</a>
                </div>
            </div>
        </div>
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