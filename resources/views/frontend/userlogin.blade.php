@extends('layouts.frontend')
@section('content')
<div role="main" class="main">
    <!-- START BANNER  -->
    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url(/frontend/img/home-slide-01.jpg); background-size: cover; background-position: center;">
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
                    <h3 class="d-block alternative-font-4 text-color-primary font-weight-medium text-4 mb-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">PSH Global</h3>
                    <h2 class="text-color-dark font-weight-bold text-9 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">Members</h2>
                </div>
                <div class="row fxt-template-layout2 custom-box-shadow-1">
                    <div class="col-lg-6 col-12 fxt-bg-color">
                        <div class="fxt-content">
                            <div class="fxt-header">
                                <div class="fxt-style-line">
                                    <h2>Login With Social</h2>
                                </div>
                                <ul class="fxt-socials list-unstyled d-block">
                                    <li class="fxt-google"><a href="{{route('googlelogin','google')}}" title="google"><i class="fab fa-google-plus-g"></i><span>Google</span></a></li>
                                    <li class="fxt-facebook"><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 fxt-none-991 fxt-bg-img px-4 py-2">
                        <img src="{{asset('frontend/img/bg2-l.jpg')}}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MEMBER -->
</div> 
@endsection