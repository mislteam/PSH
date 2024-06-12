@extends('layouts.backend')
@section('title', 'Activity Log Page')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Setting </h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Activity Log</a>
                </li>
                <li class="breadcrumb-item active">
                    <a> Activity Log </a>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <h5> Activity Log</h5>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th> No </th>
                                        <th> Name </th>
                                        <th> Activity Log </th>
                                        <th> Date & Times  </th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    @if (count($activitylog) > 0)
                                    @php
                                    $id = 1;
                                    @endphp
                                   @foreach ($activitylog as $items)
                                   <tr class="gradeU">
                                       <td> {{ $id++ }} </td>
                                       <td> {{ $items->user->name }}</td>
                                       <td> {{ $items->activity }}</td>
                                       <td> {{ $items->created_at->format('d/m/Y (h:i A)') }} </td>
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
                                        <th> No </th>
                                        <th> Name </th>
                                        <th> Activity Log </th>
                                        <th> Date & Times  </th>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="float-right">
                                {{ $activitylog->links('backend.layouts.pagination_ui') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
