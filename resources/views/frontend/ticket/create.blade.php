@extends('layouts.frontend')
@section('title', 'Support Ticket')
@section('style')
@endsection
@section('content')
@include('frontend.layouts.parts.general-banner', ['title' => "Ticket Create"])
<div class="container my-3">
    <div class="d-flex justify-content-between my-3">
        <div>
            <h3 class="fw-bold translate"> Create Ticket </h3>
        </div>
        <div>
            <div class="text-end">
                <a href="{{url()->previous()}}" class="btn btn-sm bg-custom text-white mb-3 w-100">
                    <span class="translate">Back</span>
                </a>
            </div>
        </div>
    </div>

    {{-- Form starts --}}
    <div class="form-inputs border border-1 p-3 my-3">
        <form onsubmit="formSubmit(event, '{{route('user.ticketStore')}}')" enctype="multipart/form-data">
            <div class="row my-3">
                <div class="col-md-4">
                    <p class="translate"> Ticket Title </p>
                </div>
                <div class="col-md-8">
                    <input type="text" placeholder="Enter Ticket Title" name="subject" class="form-control" required>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-4">
                    <p class="translate"> Message </p>
                </div>
                <div class="col-md-8">
                    <textarea name="description" id="" cols="10" rows="5" class="form-control"
                        placeholder="Enter Message" required></textarea>
                </div>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-sm bg-custom text-white mt-2"> <span
                        class="translate">Create</span> </button>
            </div>
        </form>
    </div>
    {{-- Form ends --}}
</div>
@endsection