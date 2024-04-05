@extends('layouts.frontend')
@section('title','Client Testimonial Form');
@section('content')
<div role="main" class="main">
    <!-- START BANNER  -->
    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0"
        style="background-image: url(img/home-slide-01.jpg); background-size: cover; background-position: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                        <li><a href="{{route('home')}}" class="text-color-primary text-decoration-none">HOME</a></li>
                        <li class="text-color-primary active">Client Testimonial Form</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10">Client Testimonial Form</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- END BANNER -->
    <!-- START CUSTOMER FEEDBACK -->
    <div class="container py-5 my-5">
        <div class="row align-items-center">
            <div id="requestConsultation" class="col-lg-12">
                <div class="text-center">
                    <h3 class="d-block alternative-font-4 text-color-primary font-weight-medium text-4 mb-2 appear-animation"
                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">TESTIMONIALS &
                        REVIEWS</h3>
                    <h2 class="text-color-dark font-weight-bold text-9 pb-2 mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">Satisfied Client
                        Stories</h2>
                </div>
                <form class="contact-form custom-form-style-1 appear-animation"
                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800"
                    action="{{route('testimonialstore')}}" method="POST">
                    @csrf

                    <div class="contact-form-error alert alert-success d-none mt-4">
                        <strong>Success!</strong> Your request has been sent to us.
                    </div>

                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100"
                                class="form-control border-radius-0" name="name" id="name" required
                                placeholder="Full Name *">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="text" value="" data-msg-required="Please enter your company" maxlength="100"
                                class="form-control border-radius-0" name="company" id="phone" required
                                placeholder="Company Name *">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-4">
                            <textarea maxlength="5000" rows="9" class="form-control border-radius-0" name="review"
                                id="message" placeholder="Enter the review"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col text-lg-end mb-0">
                            <button type="submit"
                                class="btn btn-primary font-weight-bold btn-px-5 btn-py-3 appear-animation"
                                data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="350"
                                data-loading-text="Loading...">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END CUSTOMER FEEDBACK -->
</div>
@stop