@extends('layouts.backend')
@section('title', 'Customer Page')
@section('content')
@php
    if(session('filter')) {
        $name = session('filter')['name'];
        $perpage = session('filter')['perpage'];
        $email = session('filter')['email'];
        $status = session('filter')['status'];
    }

    $page_no = [5, 10, 15, 20];
@endphp
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>All Users </h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    <a> Users </a>
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
                            <h5> User Lists</h5>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <div class="customer-filter">
                                <form action="" method="get" class="my-3">
                                    <div class="customer-search d-flex justify-content-between align-items-center">
                                        <input type="text" name="name" class="form-control mr-2" placeholder="Enter Name" value="{{ $name }}">
                                        <input type="email" name="email" class="form-control mr-2" value="{{ $email }}" placeholder="Enter Email">
                                        <select name="status" id="" class="form-control form-selected mr-2 text-capitalize">
                                                <option value="" {{ $status == "" ? "selected": '' }}> All</option>
                                                <option value="0" {{ $status == 0 ? "selected": '' }}>Active</option>
                                                <option value="1" {{ $status == 1 ? "selected": '' }}>Ban</option>
                                            {{-- @endforeach --}}
                                        </select>
                                        <button type="submit" class="btn bg-custom btn-sm text-white">  Search </button>
                                    </div>
                                </form>
                            </div>
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th> User Id </th>
                                        <th> Customer Name </th>
                                        <th> Email </th>
                                        <th> Date </th>
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    @if (count($customer) > 0)
                                    @php
                                    $id = 1;
                                    @endphp
                                   @foreach ($customer as $user)
                                   <tr class="gradeU">
                                       <td> {{ $user->user_id }} </td>
                                       <td> {{ $user->name }}</td>
                                       <td> {{ $user->email }} </td>
                                       <td> {{ $user->created_at }} </td>
                                       <td>
                                          @if ($user->status == 0)
                                             active 
                                          @else
                                            Ban
                                          @endif
                                       </td>
                                       <td>
                                           <div class="d-flex align-items-center">
                                               @can('view users')
                                                   <div class="mr-2">
                                                       <a href="{{ route('customer.show', $user->id) }}"
                                                           class="btn btn-outline-light text-dark shadow-lg"><i class="fa fa-eye"
                                                               aria-hidden="true" data-toggle="tooltip"
                                                               data-placement="top" title="ကြည့်မည်"></i> View</a>
                                                   </div>
                                               @endcan
                                               @can('ban users')
                                                   @if (!$user->hasRole('admin'))
                                                       @if ($user->status == 0)
                                                           <div class="mr-2">
                                                               <button class="btn btn-outline-light text-dark shadow-lg"
                                                                   onclick="changeState('{{ route('changeUserState') }}', {{ $user->id }})">
                                                                   <i class="fa fa-ban" aria-hidden="true"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="ban"></i> Ban
                                                               </button>
                                                           </div>
                                                       @else
                                                           <div class="mr-2">
                                                               <button class="btn btn-danger btn-sm"
                                                                   onclick="changeState('{{ route('changeUserState') }}', {{ $user->id }})">
                                                                   <i class="fa fa-repeat" aria-hidden="true"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="redo"></i> UnBan
                                                               </button>
                                                           </div>
                                                       @endif
                                                   @endif
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
                                        <th> User Id </th>
                                        <th> Customer Name </th>
                                        <th> Email </th>
                                        <th> Date </th>
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="float-right">
                                {{ $customer->links('backend.layouts.pagination_ui') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
