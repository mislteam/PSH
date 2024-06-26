@extends('layouts.backend')
@section('title', 'User Page')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2> User </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <a> Admin User </a>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
        @can('create users')
        <div class="mt-4 text-right">
            <a href="{{ route('userCreate') }}" class="btn bg-custom btn-sm text-white"> Create </a>
        </div>
    @endcan
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-content">
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <h5> User Table </h5>
                   
                </div>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                        <thead>
                        <tr>
                            <th> Id </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Role </th>
                            <th> Date </th>
                            <th> Action </th>
                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $id = 1;
                            @endphp
                            @foreach ($users as $user)
                                <tr class="gradeU">
                                    <td> {{ $id++ }} </td>
                                    <td> {{ $user->name }}</td>
                                    <td> {{ $user->email }}</td>
                                    <td> 
                                        @foreach ($user->getRoleNames() as $role)
                                            <span class="badge text-bg-custom">{{$role}}</span>
                                        @endforeach
                                    </td>
                                    <td> {{$user->created_at->toFormattedDateString() }} </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                        @can('view users')                            
                                            <div class="mr-2">
                                                <a href="{{ route('userView', $user->id)}}" class="btn bg-custom btn-sm"> <i class="fa fa-eye"></i> </a> 
                                            </div>
                                        @endcan
                                        @can('edit users')
                                            @if (!$user->hasRole('admin'))
                                                <div class="mr-2">
                                                    <a href="{{route('userEdit', $user->id)}}" class="btn btn-primary btn-sm" ><i class="fa fa-edit" aria-hidden="true"
                                                    data-toggle="tooltip" data-placement="top" title="ပြင်ဆင်မည်"
                                                    ></i></a>
                                                </div>
                                            @endif
                                        @endcan
                                        @can('ban users')
                                        @if (!$user->hasRole('admin'))
                                            @if ($user->status == 0)
                                                <div class="mr-2">
                                                    <button class="btn btn-info btn-sm" onclick="changeState('{{route('changeUserState')}}', {{$user->id}})"> <i class="fa fa-ban" aria-hidden="true" 
                                                    data-toggle="tooltip" data-placement="top" title="ban" 
                                                    ></i>
                                                    </button>
                                                </div>
                                            @else 
                                                <div class="mr-2">
                                                    <button class="btn btn-warning btn-sm" onclick="changeState('{{route('changeUserState')}}', {{$user->id}})"> <i class="fa fa-repeat" aria-hidden="true"
                                                    data-toggle="tooltip" data-placement="top" title="redo"     
                                                    ></i> </i>
                                                    </button>
                                                </div>
                                            @endif
                                        @endif
                                        @endcan
                                        @can('delete users')
                                        @if (!$user->hasRole('admin'))
                                            <div class="mr-2">
                                                <button class="btn btn-danger btn-sm" onclick="deleteForm('{{route('userDelete')}}', {{$user->id}})" ><i class="fa fa-trash" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="ဖျက်သိမ်းမည်" 
                                                    ></i></button>
                                            </div>
                                        @endif
                                        @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th> Id </th>
                            <th> User Name </th>
                            <th> User Role </th>
                            <th> Role </th>
                            <th> Date </th>
                            <th> Action </th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection