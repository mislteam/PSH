@extends('layouts.backend')
@section('title', 'Special Page')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="mt-3 mb-2">All Special</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Special</strong>
            </li>
        </ol>
    </div>
</div>
{{-- Start Specialization Page --}}
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">
                    <h4>Frontend Specialization Page</h4>
                    <hr>
                    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                        <thead>
                            <tr>
                                <th data-toggle="true">Title</th>
                                <th data-toggle="true">Description</th>
                                <th class="text-right" data-sort-ignore="true">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($specials) > 0)
                            @foreach ($specials as $item)
                            <tr>
                                <td>
                                    {{$item->title}}
                                </td>
                                <td>
                                    {{Str::limit($item->description, 100, '...')}}
                                </td>
                                <td class="text-right">
                                    <div class="btn-group">
                                        @can('edit special')
                                        <button class="btn-white btn btn-sm">
                                            <a href="{{route('special.edit',$item->id)}}" class="text-dark">Edit</a>
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
                                    {{ $specials->links('backend.layouts.pagination_ui') }}
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end Specialization Page --}}

{{-- Start Specialization Cart Page --}}
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">
                    <h4>Frontend Specialization Card Page</h4>
                    <hr>
                    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                        <thead>
                            <tr>
                                <th data-toggle="true">Title</th>
                                <th data-toggle="true">Description</th>
                                <th class="text-right" data-sort-ignore="true">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($specialcards) > 0)
                            @foreach ($specialcards as $item)
                            <tr>
                                <td>
                                    {{$item->title}}
                                </td>
                                <td>
                                    {{Str::limit($item->description, 100, '...')}}
                                </td>
                                <td class="text-right">
                                    <div class="btn-group">
                                        @can('edit special')
                                        <button class="btn-white btn btn-sm">
                                            <a href="{{route('card.edit',$item->id)}}" class="text-dark">Edit</a>
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
                                    {{ $specialcards->links('backend.layouts.pagination_ui') }}
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end Specialization Cart Page --}}
@endsection