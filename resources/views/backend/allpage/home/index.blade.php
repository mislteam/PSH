@extends('layouts.backend')
@section('title', 'About Counter Page')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>All Page </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <a> All Frontend Home About Counter</a>
            </li>
        </ol>
    </div>
</div>
{{-- start frontend home slide --}}
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <h5> Frontend Home Slide</h5>
                        <div class="form-group text-lg-start float-lg-right mt-2">
                            @can('create allpage')
                            <a href="{{route('home.create')}}" class="btn btn-dark m-t-n-xs">Create Home Slide</a>
                            @endcan
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th> Title </th>
                                    <th> Sub Title </th>
                                    <th> Description </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @if (count($homepage) > 0)
                                @php
                                $id = 1;
                                @endphp
                                @foreach ($homepage as $home)
                                <tr class="gradeU">
                                    <td> {{ $home->title }} </td>
                                    <td> {{ $home->sub_title }} </td>
                                    <td> {!! Str::limit($home->description, 100, '...') !!} </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            @can('edit allpage')
                                            <div class="mr-2">
                                                <a href="{{route('home.edit',$home->id)}}"
                                                    class="btn btn-outline-light text-dark shadow-lg"><i
                                                        class="fa fa-edit" aria-hidden="true" data-toggle="tooltip"
                                                        data-placement="top" title="ကြည့်မည်"></i> Edit</a>
                                            </div>
                                            @endcan
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
                                    <th> Title </th>
                                    <th> Sub Title </th>
                                    <th> Description </th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="float-right">
                            {{ $homepage->links('backend.layouts.pagination_ui') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end frontend home slide --}}

{{-- start frontend home about --}}
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <h5> Frontend Home About Us</h5>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th> Title </th>
                                    <th> Description </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @if (count($homeabout) > 0)
                                @php
                                $id = 1;
                                @endphp
                                @foreach ($homeabout as $about)
                                <tr class="gradeU">
                                    <td> {{ $about->title }} </td>
                                    <td> {!! Str::limit($about->description, 100, '...') !!} </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            @can('edit allpage')
                                            <div class="mr-2">
                                                <a href="{{route('homeabout.edit',$about->id)}}"
                                                    class="btn btn-outline-light text-dark shadow-lg"><i
                                                        class="fa fa-edit" aria-hidden="true" data-toggle="tooltip"
                                                        data-placement="top" title="ကြည့်မည်"></i> Edit</a>
                                            </div>
                                            @endcan
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
                                    <th> Title </th>
                                    <th> Description </th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="float-right">
                            {{ $homeabout->links('backend.layouts.pagination_ui') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end frontend home about --}}

{{-- start frontend home ABOUT COUNTER SECTION --}}
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <h5> Frontend Home About Counter</h5>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th> Title </th>
                                    <th> Description </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @if (count($aboutcounter) > 0)
                                @php
                                $id = 1;
                                @endphp
                                @foreach ($aboutcounter as $counter)
                                <tr class="gradeU">
                                    <td> {{ $counter->title }} </td>
                                    <td> {{$counter->value}}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            @can('edit allpage')
                                            <div class="mr-2">
                                                <a href="{{route('aboutcounter.edit',$counter->id)}}"
                                                    class="btn btn-outline-light text-dark shadow-lg"><i
                                                        class="fa fa-edit" aria-hidden="true" data-toggle="tooltip"
                                                        data-placement="top" title="ကြည့်မည်"></i> Edit</a>
                                            </div>
                                            @endcan
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
                                    <th> Title </th>
                                    <th> Description </th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="float-right">
                            {{ $aboutcounter->links('backend.layouts.pagination_ui') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- start frontend home ABOUT COUNTER SECTION --}}
@endsection