@extends('layouts.frontend')
@section('title', 'Notification')
@section('content')
   <div class="container">
        <div class="d-flex justify-content-center align-items-center  min-vh-100">
            <div class="p-2 bg-light shadow-lg w-100 rounded">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>
                                {{$notify->subject}}
                            </div>
                            <div>
                                <small> {{$notify->created_at->toFormattedDateString()}} </small>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        {{$notify->description}}
                    </div>
                    <div class="card-footer">
                        <div class="text-end">
                            <a href="{{route('user.account')}}" class="btn bg-custom btn-sm text-white"> Back </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
@endsection