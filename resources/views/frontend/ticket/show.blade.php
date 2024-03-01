@extends('layouts.frontend')
@section('title', 'Support Ticket')
@section('style')
    <style>
        .ticket-container p {
            font-size: 14px;
            line-height: 0.7em;
        }
    </style>
@endsection
@section('content')
    @include('frontend.layouts.parts.general-banner', ['title' => "Ticket Show"])
    <div class="container my-3 ticket-container">
        <div class="d-flex justify-content-between mt-3">
            <div>
                <h3 class="fw-bold"> {{$ticket->subject}} </h3>
                <p> <span class="fw-bold"> Ticket Number :</span> #{{$ticket->id}} </p>
                <p> <span class="fw-bold"> Customer :</span> {{$ticket->created_by->name}} </p>
            </div>
            <div>
                <div class="text-end">
                    <a href="{{route('user.ticket')}}" class="btn btn-sm bg-custom text-white mb-3 w-100">  
                        Back
                    </a>
                </div>
            </div>
        </div>
        <div class="d-flex flex-wrap justify-content-between mb-3">
            <p> <span class="fw-bold"> E-Mail Address :</span> {{auth()->user()->email}} </p>
            <p> <span class="fw-bold"> Status :</span> {{$ticket->status}} </p>
        </div>

        {{-- ticket reply starts --}}
        <form onsubmit="formSubmit(event, '{{route('user.ticketReply', $ticket->id)}}')">
            <div class="row mx-auto">
                <div class="col-md-9">
                    <textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder=" Reply Message" required></textarea>
                </div>
                <div class="col-md-3 border p-2 rounded mt-md-0 mt-3">
                    <h5 class="fw-bold"> Status </h5>
                    <select name="status" id="status" class="form-control" data-id="{{$ticket->id}}">
                        <option value="open" {{$ticket->status == "open" ? "selected" : ""}}> Open </option>
                        <option value="closed" {{$ticket->status == "closed" ? "selected" : ""}}> Closed </option>
                    </select>
                    <div class="text-end my-3">
                        <button type="submit" class="btn bg-custom btn-sm text-white"> Reply </button>
                    </div>
                </div>
            </div>           
        </form>
        <div class="row mx-auto">
            <div class="col-12 border py-2 px-4 rounded my-2">
                <h5 class="text-capitalize"> {{ $ticket->created_by->name }} </h5>
                <p> Post on {{$ticket->created_at}} </p>
                <p class="lh-lg"> {{$ticket->description}} </p>
            </div>
            @foreach ($ticket->replys as $reply)            
                <div class="col-12 border p-2 px-4 my-2 rounded">
                    <h5 class="text-capitalize"> {{$reply->user->name}} </h5>
                    <p> Post on {{$reply->created_at}} </p>
                    <p class="lh-lg"> {{$reply->reply}} </p>
                </div>
            @endforeach
            
        </div>
        {{-- ticket reply ends  --}}
    </div>
@endsection
