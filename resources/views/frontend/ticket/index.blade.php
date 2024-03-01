@extends('layouts.frontend')
@section('title', 'Support Ticket')
@section('content')
@section('style')
    <style>
        .ticket-table th{
            font-size: 18px;
        }
        .ticket-table td{
            font-size: 14px;
        }
    </style>
@endsection
    @include('frontend.layouts.parts.general-banner', ['title' => "Ticket"])
    <div class="container my-3" style="min-height : 50vh" >
        <div class="d-flex justify-content-between my-3">
            <div>
                <h3 class="fw-bold translate"> All Support Tickets </h3>
            </div>
            <div>
                <div class="text-end">
                    <a href="{{route('user.ticketCreate')}}" class="btn btn-sm bg-custom text-white mb-3 w-100">  
                        <span class="translate">Create Ticket</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered ticket-table">
                <thead>
                    <tr>
                        <th class="translate"> Ticket No </th>
                        <th class="translate"> Ticket Title </th>
                        <th class="translate"> Date </th>
                        <th class="translate"> Status </th>
                        <th class="text-center"> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tickets as $item)
                        <tr>
                            <td> # {{$item->id}} </td>
                            <td> {{$item->subject}} </td>
                            <td> {{$item->created_at->toFormattedDateString()}} </td>
                            <td> {{$item->status}} </td>
                            <td class="text-center">  
                                <a href="{{route('user.ticketView', $item->id)}}" class="btn btn-sm btn-light shadow-lg"> 
                                    <i class="fa-regular fa-eye me-2"></i> View
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="100%" class="text-center text-danger translate"> No Data </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-end">
            {{$tickets->links('frontend.layouts.pagination_ui')}}
        </div>
    </div>
@endsection