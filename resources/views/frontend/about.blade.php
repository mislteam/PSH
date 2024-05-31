@extends('layouts.frontend')
@section('content')
<div role="main" class="main">
    <!-- START BANNER  -->
    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0"
        style="background-image: url(/frontend/img/home-slide-01.jpg); background-size: cover; background-position: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                        <li><a href="{{route('home')}}" class="text-color-primary text-decoration-none">HOME</a></li>
                        <li class="text-color-primary active">ABOUT US</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10">About Us</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- END BANNER -->
    <!-- START ABOUT SECTION -->
    <section class="border-0 m-0">
        <div class="container py-5 my-3">
            <div class="row py-2">
                <div class="col">
                    <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">PSH Global</h2>
                    <h2 class="text-color-dark font-weight-extra-bold text-10 mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><em>Company
                            Policy</em></h2>
                </div>
            </div>
            <div class="row">
                <p class="font-weight-bold line-height-9 text-5 mb-4 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">"Client Satisfaction
                    is our Success"</p>

                <div class="col-lg-4">
                    @foreach ($companypolicy->slice(0, -2) as $item)
                    <h3 class="alternative-font-4 text-color-primary text-4-5 font-weight-bold mb-1">{{$item->title}}
                    </h3>
                    <p class="mb-4">
                        {{$item->description}}
                    </p>
                    @endforeach
                </div>
                <div class="col-lg-4">
                    @foreach ($companypolicy->skip(2)->chunk($companypolicy->count() - 2) as $chunk)
                    @foreach ($chunk->take(ceil(($companypolicy->count() - 2) / 2)) as $item)
                    <h3 class="alternative-font-4 text-color-primary text-4-5 font-weight-bold mb-1">{{$item->title}}
                    </h3>
                    <p class="mb-4">
                        {{$item->description}}
                    </p>
                    @endforeach
                    @endforeach
                </div>
                <div class="col-lg-4">
                    @foreach ($companypolicy->skip(2)->chunk($companypolicy->count() - 2) as $chunk)
                    @foreach ($chunk->skip(ceil(($companypolicy->count() - 2) / 2)) as $item)
                    <h3 class="alternative-font-4 text-color-primary text-4-5 font-weight-bold mb-1">{{$item->title}}
                    </h3>
                    <p class="mb-4">
                        {!!$item->description!!}
                    </p>
                    @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="section border-0 m-0 py-2">
        <div class="container py-5 my-3">
            <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">PSH Global</h2>
            @foreach ($company->take(1) as $item)
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="text-color-dark font-weight-extra-bold text-10 mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <em>{{$item->title}}</em></h2>
                    <p class="font-weight-light text-color-dark mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        {!!$item->description!!}</p>
                </div>
                <div class="col-md-9 col-lg-6 ps-lg-5">
                    <div class="position-relative">
                        <div class="custom-shape-1 appear-animation" data-appear-animation="fadeInUpShorterPlus"
                            data-appear-animation-delay="1100">
                            <div class="position-absolute top-0 left-0 right-0 bottom-0 bg-primary"
                                data-plugin-float-element
                                data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                            </div>
                        </div>
                        <div data-plugin-float-element
                            data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                            <img src="{{asset('storage/company_img/'. $item->company_img)}}"
                                class="img-fluid position-relative z-index-1 appear-animation"
                                data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="900" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- END ABOUT SECTION -->
    <!-- START COMPANY DETAILS -->
    <section class="section overlay overlay-show overlay-op-9 border-0 m-0 appear-animation"
        data-appear-animation="fadeIn" data-appear-animation-delay="300"
        style="background-image: url(/frontend/img/home-slide-01.jpg); background-size: cover; background-position: center;">
        <div class="container pt-5 pb-3">
            <div class="row">
                <div class="col text-center">
                    <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">OUR DIFFERENCE
                    </h2>
                    <h3 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 pb-3 mb-5">
                        Company Details</h3>
                </div>
            </div>
            <div class="row justify-content-center mb-4">
                @foreach ($companydetail as $item)
                <div class="col-lg-11 text-center">
                    <p class="text-color-light text-4 mb-0">{{$item->description}}</p>
                </div>
                @endforeach
            </div>
            <div class="row counters counters-sm py-5">
                @foreach ($companydetail as $item)
                <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="counter">
                        <strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1"
                            data-to="{{$item->value}}" data-append="+"
                            data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
                        <label class="text-color-light font-weight-bold text-4 mb-0">{{$item->title}}</label>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- END COMPANY DETAILS -->
    <!-- START FOUNDER MESSAGE -->
    <section class="border-0 m-0 py-2">
        <div class="container py-5 my-3">
            <div class="row align-items-center justify-content-center">
                <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">PSH Global</h2>
                @foreach ($companyfounder as $item)
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="text-color-dark font-weight-extra-bold text-10 mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <em>{{$item->title}}</em></h2>
                    <p class="font-weight-light text-color-dark mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        {{$item->description}}
                    </p>
                    <p class="positive-ls-3 text-color-grey mb-3 appear-animation animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                        style="animation-delay: 600ms;">{{$item->name}}
                    </p>
                </div>

                <div class="col-md-9 col-lg-6 ps-lg-5">
                    <div class="position-relative">
                        <div class="custom-shape-1 appear-animation" data-appear-animation="fadeInUpShorterPlus"
                            data-appear-animation-delay="1100">
                            <div class="position-absolute top-0 left-0 right-0 bottom-0 bg-primary"
                                data-plugin-float-element
                                data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                            </div>
                        </div>
                        <div data-plugin-float-element
                            data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                            <img src="{{asset('storage/founder_img/'.$item->founder_img)}}"
                                class="img-fluid position-relative z-index-1 appear-animation"
                                data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="900" alt="" />
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- END FOUNDER MESSAGE  -->
    <!-- START COMPANY TIMELINE -->
    <section class="section border-0 m-0 py-2">
        <div class="container py-5 my-3">
            <div class="row">
                <div class="col text-center">
                    <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">PSH Global</h2>
                    <h2 class="text-color-dark font-weight-extra-bold text-10 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><em>Milestone of our
                            company</em></h2>
                </div>
            </div>
            <div class="process process-vertical pt-4 pb-0">
                @php
                $id = 1;
                @endphp
                @foreach ($milestone as $item)
                <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                    <div class="process-step-circle">
                        <strong class="process-step-circle-content">{{ $id++ }}</strong>
                    </div>
                    <div class="process-step-content">
                        <strong class="d-block text-color-primary text-7 my-2">{{$item->year}}</strong>
                        <p class="custom-font-secondary font-weight-bold text-color-dark text-4 mb-2">{{$item->title}}
                        </p>
                        <p class="mb-0">
                            {!!$item->description!!}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- END COMPANY TIMELINE -->
    <!-- START CLIENT TESTIMONIAL -->
    <section class="section overlay overlay-show overlay-op-9 border-0 m-0 appear-animation"
        data-appear-animation="fadeIn" data-appear-animation-delay="300"
        style="background-image: url(/frontend/img/home-slide-01.jpg); background-size: cover; background-position: center;">
        <div class="container pt-5 pb-3">
            <div class="row">
                <div class="col text-center">
                    <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">TESTIMONIALS &
                        REVIEWS</h2>
                    <h3 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 pb-3 mb-5">
                        Satisfied Client Stories</h3>
                    <p class="custom-font-secondary text-color-light custom-font-size-1 font-weight-extra-bold">“</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center px-lg-0">
                    <div class="owl-carousel owl-theme dots-horizontal-center custom-dots-style-1 dots-light mb-0"
                        data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': false, 'dots': true, 'autoplay': false, 'autoplayTimeout': 7000}">
                        @foreach ($testimonials as $item)
                        @if ($item->status == 1)
                        <div>
                            <p class="text-color-light text-6 custom-font-secondary line-height-4 opacity-8 pb-2 mb-0">“ {{$item->review}} ”</p>
                            <div class="divider divider-primary divider-small mt-2 mb-4 pb-2">
                                <hr class="my-4 mx-auto">
                            </div>
                            <strong class="d-block text-color-light text-4 mb-4">{{$item->fullname}} -
                                {{$item->companyname}}</strong>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CLIENT tESTIMONIAL -->
    <!-- START COMPANY LISTS -->
    
            @foreach ($company->skip(1) as $item)
                @if ($loop->iteration % 2 != 0)
                <section class="border-0 m-0 py-2">
                    <div class="container py-5 my-3">
                    <section class="border-0 m-0 py-2">
                        <div class="container py-5 my-3">
                            <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">Companies</h2>
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-6 mb-5 mb-lg-0">
                                    <h2 class="text-color-dark font-weight-extra-bold text-10 mb-4 appear-animation"
                                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                        <em>{{$item->title}}</em></h2>
                                    <p class="font-weight-light text-color-dark mb-4 appear-animation"
                                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                        {!!$item->description!!}
                                    </p>
                                </div>
                                <div class="col-md-9 col-lg-6 ps-lg-5">
                                    <div class="position-relative">
                                        <div class="custom-shape-1 appear-animation" data-appear-animation="fadeInUpShorterPlus"
                                            data-appear-animation-delay="1100">
                                            <div class="position-absolute top-0 left-0 right-0 bottom-0 bg-primary"
                                                data-plugin-float-element
                                                data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                                            </div>
                                        </div>
                                        <div data-plugin-float-element
                                            data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                                            <img src="{{asset('storage/company_img/'.$item->company_img)}}"
                                                class="img-fluid position-relative z-index-1 appear-animation"
                                                data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="900"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    </div>
                </section>
                @else
                <section class=" @if($loop->odd) section @endif border-0 m-0 py-2">
                    <div class="container py-5 my-3">
                    <section class="border-0 m-0 py-2">
                        <div class="container py-5 my-3"> 
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-9 col-lg-6 ps-lg-5">
                                    <div class="position-relative">
                                        <div class="custom-shape-1 appear-animation" data-appear-animation="fadeInUpShorterPlus"
                                            data-appear-animation-delay="1100">
                                            <div class="position-absolute top-0 left-0 right-0 bottom-0 bg-primary"
                                                data-plugin-float-element
                                                data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                                            </div>
                                        </div>
                                        <div data-plugin-float-element
                                            data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                                            <img src="{{asset('storage/company_img/'.$item->company_img)}}"
                                                class="img-fluid position-relative z-index-1 appear-animation"
                                                data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="900"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-5 mb-lg-0">
                                    <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">Companies</h2>
                                    <h2 class="text-color-dark font-weight-extra-bold text-10 mb-4 appear-animation"
                                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                        <em>{{$item->title}}</em></h2>
                                    <p class="font-weight-light text-color-dark mb-4 appear-animation"
                                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                        {!!$item->description!!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
                @endif
            @endforeach
        
    <!-- END COMPANY LISTS -->
</div>
@endsection