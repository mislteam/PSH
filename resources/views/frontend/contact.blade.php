@extends('layouts.frontend')
@section('content')
<div role="main" class="main">
    <!-- START BANNER  -->
    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url(/frontend/img/home-slide-01.jpg); background-size: cover; background-position: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                        <li><a href="{{route('home')}}" class="text-color-primary text-decoration-none">HOME</a></li>
                        <li class="text-color-primary active">Contact Us</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10">Contact Us</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- END BANNER -->
    <!-- START CONTACT US -->
    <section class="section border-0 py-0 m-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row py-5 my-5">
                        <div class="col-md-6">
                            <h2 class="font-weight-bold text-color-dark text-6 text-lg-5 text-xl-7 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Get In Touch</h2>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                                <h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Work Inquiries</h3>
                                @foreach ($contact as $item)
                                <div class="mb-4">
                                    <a href="#" class="text-color-dark text-decoration-none text-4">{{$item->phone}}</a>,<br>
                                    {{-- <a href="#" class="text-color-dark text-decoration-none text-4">(+95) 9-4431 45270</a>,<br>
                                    <a href="#" class="text-color-dark text-decoration-none text-4">(+95) 1 515203</a>,<br>
                                    <a href="#" class="text-color-dark text-decoration-none text-4">(+95 ) 1537530</a> --}}
                                </div>
                                @endforeach
                            </div>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                                <h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Assistance Hours</h3>
                                @foreach ($contact as $item)
                                <p>{{$item->hours}}</p>
                                {{-- <p>Mon - Sat 9:00am - 8:00pm<br> Sunday - CLOSED</p> --}}
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="font-weight-bold text-color-dark text-6 text-lg-5 text-xl-7 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">Head Office</h2>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1300">
                                <h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Address</h3>
                                @foreach ($contact as $item)
                                <p>
                                  {{$item->address}}
                                </p>
                                @endforeach
                            </div>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">
                                <h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Email</h3>
                                @foreach ($contact as $item)
                                <a href="#" class="text-color-default text-color-hover-primary text-decoration-underline mb-4">{{$item->email}}</a>
                                @endforeach
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 fluid-col-lg-5 p-0">
                    <div class="fluid-col h-100">
                        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                        <div id="googlemaps" class="google-map h-100 m-0" style="min-height: 400px;"></div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container py-5 my-5">
        <div class="row align-items-center">
            <div id="requestConsultation" class="col-lg-12">
                <div class="text-center">
                    <h3 class="d-block alternative-font-4 text-color-primary font-weight-medium text-4 mb-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">Contact Us</h3>
                    <h2 class="text-color-dark font-weight-bold text-9 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">Send A Message</h2>
                </div>
                <form class="contact-form custom-form-style-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800" action="" method="POST">
                    <div class="contact-form-success alert alert-success d-none mt-4">
                        <strong>Success!</strong> Your request has been sent to us.
                    </div>

                    <div class="contact-form-error alert alert-danger d-none mt-4">
                        <strong>Error!</strong> There was an error sending your request.
                        <span class="mail-error-message text-1 d-block"></span>
                    </div>

                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control border-radius-0" name="name" id="name" required placeholder="Name *">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control border-radius-0" name="email" id="email" required placeholder="E-mail *">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="text" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control border-radius-0" name="phone" id="phone" required placeholder="Phone *">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-4">
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="9" class="form-control border-radius-0" name="message" id="message" required placeholder="Message *"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col text-lg-end mb-0">
                            <button type="submit" class="btn btn-primary font-weight-bold btn-px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="350" data-loading-text="Loading...">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @foreach ($ourbranch as $item)
    <section class=" @if($loop->odd) section @endif" m-0 border-0 py-2">
        <div class="container py-5 my-3">
            <div class="row">
                <div class="col text-center">
                    <div class="appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="0">
                        <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">Our Branch</h2>
                        <h2 class="text-color-dark font-weight-extra-bold text-10 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><em>{{$item->title}}</em></h2>
                        <p class="font-weight-light text-color-dark mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">{{$item->description}}</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card border-radius-0 bg-color-light box-shadow-1 box-shadow-1-hover appear-animation animated fadeInUp appear-animation-visible w-100 w-100" data-appear-animation="blurIn" data-appear-animation-delay="0" style="animation-delay: 0ms;">
                        <div class="card-body p-relative ">
                            <div class="feature-box feature-box-primary">
                                <div class="feature-box-icon">
                                    <i class="fa fa-location-dot"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2">Address</h4>
                                    <p class="mb-0">{{$item->address}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card border-radius-0 bg-color-light box-shadow-1 appear-animation animated fadeInUp appear-animation-visible w-100" data-appear-animation="blurIn" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                        <div class="card-body p-relative ">
                            <div class="feature-box feature-box-primary">
                                <div class="feature-box-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2">Phone Number</h4>
                                    <p class="mb-0">
                                        {{$item->phone}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card border-radius-0 bg-color-light box-shadow-1 box-shadow-1-hover appear-animation animated fadeInUp appear-animation-visible w-100 w-100" data-appear-animation="blurIn" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                        <div class="card-body p-relative ">
                            <div class="feature-box feature-box-primary">
                                <div class="feature-box-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2">E-mail Address</h4>
                                    <p class="mb-0">
                                        {{$item->email}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!-- END CONTACT US -->
</div> 
@endsection