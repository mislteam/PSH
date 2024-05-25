@extends('layouts.backend')
@section('title', 'All User View')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2> Trades </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('wallet/{wallet}') }}">Customer</a>
            </li>
            <li class="breadcrumb-item active">
                <a> View </a>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
                <div class="mt-4 text-right">
                    <a href="{{ url()->previous() }}" class="btn btn-sm" style="background-color: #2196F3;color:white"> Go Back </a>
                </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-content">
                <div class="table-responsive">      
                    <div class="col-12">
                        <h3 class="font-weight-bold my-4">User Information</h3>
                        <p class="font-weight-bold">Name : {{$user->name}}</p>
                        <p class="font-weight-bold"> Email : {{$user->email}}</p>
                        <p class="font-weight-bold">
                        @if ($user->phone)
                        Phone Number : {{$user->phone}}
                        @else
                        Phone Number :   -
                        @endif  
                        </p>
                        <p class="font-weight-bold">
                        {{$user->productType->name}}</p>
                        <div class="mb-3 row p-1">
                            <span class="col-6 font-weight-bold">Approve Date: {{$user->created_at->toFormattedDateString() }}</span> 
                            <span class="col-6 text-right font-weight-bold">
                                Status: @if ($user->status == 0)
                                            active
                                        @else
                                            Ban
                                        @endif
                            </span>
                        </div>
                    </div>
                </div>   
                <div class="mb-3 row pt-4">
                    @if ($user->front_img != 'front-img.png' )
                    <span class="col-4">
                        <img src="{{asset('uploads/'. $user->front_img)}}" class="w-75 h-100">
                    </span>
                    @else
                        <span></span>    
                    @endif
                     
                    @if ($user->back_img != "back-img.png")
                    <span class="col-4">
                        <img src="{{asset('uploads/'. $user->back_img)}}" class="w-75 h-100">
                    </span> 
                    @else
                        <span></span>
                    @endif
                    
                </div>               
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
