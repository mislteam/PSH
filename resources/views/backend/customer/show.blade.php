@extends('layouts.backend')
@section('title', 'All User View')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2> Member </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">All Members</a>
            </li>
            <li class="breadcrumb-item active">
                <a> View </a>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
                <div class="mt-4 text-right">
                    <a href="{{ url()->previous() }}" class="btn btn-dark btn-sm" > Go Back </a>
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
                        <h2 class="font-weight-bold mb-4"> {{$user->name}}</h2>

                        <div class="row">
                            <div class="col-3">
                                <p class="font-weight-bold"> Email Address : </p>
                            </div>
                            <div class="col-9">
                                <p class="float-right">{{$user->email}}</p>
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="col-3">
                                @if ($user->phone)
                                <p class="font-weight-bold"> Phone Number : </p>
                                @else
                                {{-- Phone Number :   - --}}
                                @endif
                            </div>
                            <div class="col-9">
                                @if ($user->phone)
                                <p class="float-right">{{$user->phone}}</p>
                                @else
                                {{-- Phone Number :   - --}}
                                @endif
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-3">
                                <p class="font-weight-bold"> Product Type : </p>
                            </div>
                            <div class="col-9">
                                <p class="float-right">{{$user->productType->name}}</p>
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="col-3">
                                <p class="font-weight-bold"> Township : </p>
                            </div>
                            <div class="col-9">
                                <p class="float-right">{{$user->township->name}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <p class="font-weight-bold"> Region : </p>
                            </div>
                            <div class="col-9">
                                <p class="float-right">{{$user->region->name}}</p>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-3">
                                <p class="font-weight-bold"> Approve Date : </p>
                            </div>
                            <div class="col-9">
                                <p class="float-right">{{$user->created_at->toFormattedDateString() }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <p class="font-weight-bold"> Status : </p>
                            </div>
                            <div class="col-9">
                                <p class="float-right">@if ($user->status == 0)
                                    active 
                                @else 
                                    Ban 
                                @endif</p>
                            </div>
                        </div>
                    </div>
                </div>   
                {{-- <div class="mb-3 row pt-4">
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
                    
                </div>                --}}
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
