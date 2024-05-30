@extends('layouts.backend')
@section('title', 'Contact-Us Page')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="mt-3 mb-2">Contact Us Detial</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Contact Us Detial</strong>
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
                                <th data-toggle="true">Email</th>
                                <th data-toggle="true">Phone No</th>
                                <th data-toggle="true">Address</th>
                                <th data-toggle="true">Hour</th>
                                <th class="text-right" data-sort-ignore="true">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($contact) > 0)
                            @foreach ($contact as $item)
                            <tr>
                                <td>
                                    {{$item->email}}
                                </td>
                                <td>
                                    {{$item->phone}}
                                </td>
                                <td>
                                    {{$item->address}}
                                </td>
                                <td>
                                    {{$item->hours}}
                                </td>
                                <td class="text-right">
                                    <div class="btn-group">
                                        @can('edit contact')
                                        <button class="btn-white btn btn-sm">
                                            <a href="{{route('contact.edit',$item->id)}}"
                                                class="text-dark">Edit</a>
                                        </button>
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
                                    {{ $contact->links('backend.layouts.pagination_ui') }}
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