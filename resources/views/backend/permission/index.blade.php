@extends('layouts.backend')
@section('title', 'Permissions')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2> Settings </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="">Settings </a>
            </li>
            <li class="breadcrumb-item active">
                <a> Permissions </a> 
            </li>
        </ol>
    </div>
    <div class="col-md-2 mt-4 text-right">
        <a href="{{ route('userCreate') }}" class="btn bg-custom btn-sm"> Add Admin </a>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">  
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <h5> User Roles  </h5>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                <tr>
                    <th> Id </th>
                    <th> Name </th>
                    <th> Action</th>
                </tr>
                </thead>
                <tbody>
                    @php
                        $id = 1;
                    @endphp
                    @foreach ($roles as $role)
                        <tr class="gradeU">
                            <td> {{ $id++ }} </td>
                            <td> {{ $role->name }}</td>
                            <td>
                                @can('edit permissions')
                                    @if ($role->name != 'super-admin')
                                        <div>
                                            <a href="{{route('permissionEdit', $role->id)}}" class="btn bg-custom btn-sm" ><i class="fa fa-edit" aria-hidden="true"
                                            data-toggle="tooltip" data-placement="top" title="ပြင်ဆင်မည်"
                                            ></i></a>
                                        </div>
                                    @endif
                                @endcan                               
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection