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
                        <li class="text-color-primary active">Technical Support</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10">SETRA WeighbridgeTon-30 Scale (I Beam)</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- END BANNER -->
    <!-- START OUR PRODUCT DETAIL-->
    <div class="container py-5 my-4">
        <div class="container">
            <div class="row pb-4">
                <div class="col mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus"
                    data-appear-animation-delay="200">
                    <h2 class="text-color-dark font-weight-bold text-10 mb-2"><em>{{$techguidedetail->name}}</em></h2>
                    <ul
                        class="list list-icons list-icons-style-2 list-icons-lg d-flex flex-column flex-lg-row justify-content-between">
                        <li class="font-weight-semibold text-color-dark mb-0">
                            <i class="fas fa-list text-color-dark border-color-grey-1 top-7 text-3"></i>
                            {{$productdetail->name}}
                        </li>
                    </ul>
                    <p class="mb-0">{!!$techguidedetail->description!!}</p>
                    {{-- <div class="row">
                        <div class="col-lg-4 d-flex align-items-stretch mb-4">
                            <span
                                class="thumb-info thumb-info-swap-content thumb-info-centered-icons thumb-info-wrapper-direction-aware">
                                <span class="thumb-info-wrapper">
                                    <img src="img/gallery.jpg" class="img-fluid" alt="">
                                    <span class="thumb-info-wrapper-overlay">
                                        <span class="thumb-info-action">
                                            <a href="#">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                        class="fas fa-play-circle text-dark text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-stretch mb-4">
                            <span
                                class="thumb-info thumb-info-swap-content thumb-info-centered-icons thumb-info-wrapper-direction-aware">
                                <span class="thumb-info-wrapper">
                                    <img src="img/gallery.jpg" class="img-fluid" alt="">
                                    <span class="thumb-info-wrapper-overlay">
                                        <span class="thumb-info-action">
                                            <a href="#">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                        class="fas fa-play-circle text-dark text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-stretch mb-4">
                            <span
                                class="thumb-info thumb-info-swap-content thumb-info-centered-icons thumb-info-wrapper-direction-aware">
                                <span class="thumb-info-wrapper">
                                    <img src="img/gallery.jpg" class="img-fluid" alt="">
                                    <span class="thumb-info-wrapper-overlay">
                                        <span class="thumb-info-action">
                                            <a href="#">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                        class="fas fa-play-circle text-dark text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-stretch mb-4">
                            <span
                                class="thumb-info thumb-info-swap-content thumb-info-centered-icons thumb-info-wrapper-direction-aware">
                                <span class="thumb-info-wrapper">
                                    <img src="img/gallery.jpg" class="img-fluid" alt="">
                                    <span class="thumb-info-wrapper-overlay">
                                        <span class="thumb-info-action">
                                            <a href="#">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                        class="fas fa-play-circle text-dark text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-stretch mb-4">
                            <span
                                class="thumb-info thumb-info-swap-content thumb-info-centered-icons thumb-info-wrapper-direction-aware">
                                <span class="thumb-info-wrapper">
                                    <img src="img/gallery.jpg" class="img-fluid" alt="">
                                    <span class="thumb-info-wrapper-overlay">
                                        <span class="thumb-info-action">
                                            <a href="#">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                        class="fas fa-play-circle text-dark text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-stretch mb-4">
                            <span
                                class="thumb-info thumb-info-swap-content thumb-info-centered-icons thumb-info-wrapper-direction-aware">
                                <span class="thumb-info-wrapper">
                                    <img src="img/gallery.jpg" class="img-fluid" alt="">
                                    <span class="thumb-info-wrapper-overlay">
                                        <span class="thumb-info-action">
                                            <a href="#">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                        class="fas fa-play-circle text-dark text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- END OUR PRODUCT DETAIL-->
</div>
@stop