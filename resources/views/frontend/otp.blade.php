@extends('layouts.frontend')
@section('content')
<div role="main" class="main">
    <!-- START BANNER  -->
    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0"
        style="background-image: url(img/home-slide-01.jpg); background-size: cover; background-position: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                        <li><a href="index.html" class="text-color-primary text-decoration-none">HOME</a></li>
                        <li class="text-color-primary active">Members</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10">Members</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- END BANNER -->
    <!-- START MEMBERS -->
    <div class="container py-5 my-5 ">
        <div class="row align-items-center">
            <div id="requestConsultation" class="col-lg-12">
                <div class="text-center">
                    <h3 class="d-block alternative-font-4 text-color-primary font-weight-medium text-4 mb-2 appear-animation"
                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">PSH Global</h3>
                    <h2 class="text-color-dark font-weight-bold text-9 pb-2 mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">Members</h2>
                </div>
                <div class="row fxt-template-layout2 custom-box-shadow-1">
                    <div class="col-12 fxt-bg-color">
                        <div class="fxt-content">
                            <div class="fxt-form">
                                <h2>Two-Step Verification</h2>
                                <p>We’ve sent a verification code to<span>+9*******337</span></p>
                                <label>Enter OTP Code Here</label>
                                <form method="get" id="otp-form" action="{{route('otpverifity')}}">
                                    @csrf
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <div class="fxt-form-row">
                                            <input type="integer" class="fxt-form-col otp-input form-control"
                                                maxlength="1" required="required">
                                            <input type="integer" class="fxt-form-col otp-input form-control"
                                                maxlength="1" required="required">
                                            <input type="integer" class="fxt-form-col otp-input form-control"
                                                maxlength="1" required="required">
                                            <input type="integer" class="fxt-form-col otp-input form-control"
                                                maxlength="1" required="required">
                                        </div>
                                    </div>
                                    <div class="fxt-form-btn fxt-transformY-50 fxt-transition-delay-4">
                                        <input type="submit"
                                            class="btn btn-primary font-weight-bold text-3-5 px-5 py-3 mt-3 appear-animation animated appear-animation-visible"
                                            value="Verify">
                                    </div>
                                </form>
                            </div>
                            <div class="fxt-footer">
                                <div class="fxt-transformY-50 fxt-transition-delay-7">
                                    <p>Not received your code?<button class="fxt-btn-resend" type="submit">Resend
                                            code</button><span class="text-or">OR</span><button class="fxt-btn-resend"
                                            type="submit">Call</button></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MEMBER  -->
</div>
@endsection