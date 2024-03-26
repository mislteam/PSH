@extends('layouts.backend')
@section('title', 'Feedback Page')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="mt-3 mb-2">Customer Feedback Form</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.html">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Customer Feedback Form</strong>
            </li>
        </ol>
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
                                <th data-toggle="true">Name</th>
                                <th data-hide="phone">E-Mail Address</th>
                                <th data-hide="phone">Series Number</th>
                                <th data-hide="phone">Product Type</th>
                                <th data-hide="phone">Date</th>
                                <th class="text-right" data-sort-ignore="true">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($services) > 0)
                            @foreach ($services as $service)
                            <tr>
                                <td>{{$service->name}}</td>
                                <td>{{$service->email}}</td>
                                <td>{{$service->series_number}}</td>
                                <td>{{$service->product_type}}</td>
                                <td>{{$service->created_at->format('d M Y') }}</td>
                                <td class="text-right">
                                    <div class="btn-group">
                                        <a href="{{ route('feedback.view', $service->id) }}"
                                            class="btn-white btn btn-xs">View</a>
                                        <button class="btn btn-white btn-sm text-dark"
                                            onclick="deleteForm('{{route('feedback.delete')}}', {{$service->id}})">delete</button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="100%" class="text-danger text-center"> No Data</td>
                            </tr>
                            @endif
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6">
                                    {{ $services->links('backend.layouts.pagination_ui') }}
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop