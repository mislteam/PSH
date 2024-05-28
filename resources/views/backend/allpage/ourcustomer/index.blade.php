@extends('layouts.backend')
@section('title', 'OurCustomer Page')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="mt-3 mb-2">All Our Customer</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Our Customer</strong>
            </li>
        </ol>
    </div>
</div>
{{-- Start OurCustomer Page --}}
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <h4>Frontend Our Customer Page</h4>
                        <div class="form-group text-lg-start float-lg-right mt-3">
                            <a href="{{route('ourcustomer.create')}}" class="btn btn-dark m-t-n-xs">Create Our
                                Customer</a>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                        <thead>
                            <tr>
                                <th data-toggle="true">Title</th>
                                <th data-toggle="true">Link</th>
                                <th class="text-right" data-sort-ignore="true">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($ourcustomers) > 0)
                            @foreach ($ourcustomers as $item)
                            <tr>
                                <td>
                                    {{$item->title}}
                                </td>
                                <td>
                                    {{$item->link}}
                                </td>
                                <td class="text-right">
                                    <div class="btn-group">
                                        @can('edit ourcustomer')
                                        <button class="btn-white btn btn-sm">
                                            <a href="{{route('ourcustomer.edit',$item->id)}}" class="text-dark">Edit</a>
                                        </button>
                                        @endcan
                                        @can('delete ourcustomer')
                                        <button class="btn btn-white btn-sm text-dark"
                                            onclick="deleteForm('{{route('ourcustomer.delete')}}', {{$item->id}})">delete</button>
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
                                    {{ $ourcustomers->links('backend.layouts.pagination_ui') }}
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end OurCustomer Page --}}
@endsection