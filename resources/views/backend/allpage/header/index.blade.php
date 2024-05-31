@extends('layouts.backend')
@section('title', 'Company Detial Page')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="mt-3 mb-2">Footer</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Footer</strong>
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
                                <th data-toggle="true">Phone</th>
                                <th data-toggle="true">Eamil</th>
                                <th data-toggle="true">Open Hour</th>
                                <th data-toggle="true">Instagram_link</th>
                                <th data-toggle="true">Twitter_link</th>
                                <th data-toggle="true">Facebook_link</th>
                                <th class="text-right" data-sort-ignore="true">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($header) > 0)
                            @foreach ($header as $item)
                            <tr>
                                <td>
                                    {{$item->phone}}
                                </td>
                                <td>
                                    {{$item->email}}
                                </td>
                                <td>
                                    {{$item->open_hour}}
                                </td>
                                <td>
                                    {{$item->ig_link}}
                                </td>
                                <td>
                                    {{$item->twitter_link}}
                                </td>
                                <td>
                                    {{$item->fb_link}}
                                </td>
                                <td class="text-right">
                                    <div class="btn-group">
                                        @can('edit footer')
                                        <button class="btn-white btn btn-sm">
                                            <a href="{{route('header.edit',$item->id)}}" class="text-dark">Edit</a>
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
                                    {{ $header->links('backend.layouts.pagination_ui') }}
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