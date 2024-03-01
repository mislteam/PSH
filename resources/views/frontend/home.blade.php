@php
    $services = [
        'service' => "fa-solid fa-headphones-simple", 
        'help'=> "fa-solid fa-circle-question", 
        'saving' => "fa-solid fa-gift",
    ];
@endphp
@extends('layouts.frontend')
@section('title',"Home")
@section('content')
    {{-- banner starts  --}}
    @include('frontend.layouts.parts.banner')
    {{-- banner ends  --}}
    <div class="py-5" style="background-color: #F3F3F4">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                @foreach ($services as $index => $item)          
                    <div class="col-md-3 col-6" data-aos="fade-up" data-aos-duration="500">
                        <div class="text-center bg-light py-5 rounded shadow-lg helper-icon w-md-75">
                            <a href="{{route('service_saving', $index)}}" class="text-decoration-none text-dark">
                                <div class="">
                                    <i class="{{$item}}"></i> <br>
                                    <div class="my-2">
                                        <h5 class="text-capitalize translate"> {{$index}} </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-duration="500">
                    <div class="text-center bg-light py-5 rounded shadow-lg helper-icon w-md-75 d-flex justify-content-center align-items-center">
                        <a href="{{route('user.ticket')}}" class="text-decoration-none text-dark">
                            <div class="">
                                <i class="fa-solid fa-envelope"></i> <br>
                                <div class="my-2">
                                    <h5 class="text-capitalize translate"> Tickets </h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="root" style="min-height : 50vh"></div>
    @viteReactRefresh
    @vite('resources/js/home/app.jsx')
@endsection
