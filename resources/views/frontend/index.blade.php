@extends('layouts.frontend')
@section('content')
<div class="body">
    <div role="main" class="main">
        <!-- START HOME SLIDER -->
        <div class="owl-carousel-wrapper" style="height: 845px;">
            <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover show-dots-xs show-dots-sm show-dots-md nav-style-1 nav-inside nav-inside-plus nav-light nav-lg nav-font-size-lg show-nav-hover mb-0"
                data-plugin-options="{'responsive': {'0': {'items': 1, 'dots': true, 'nav': false}, '479': {'items': 1, 'dots': true}, '768': {'items': 1, 'dots': true}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': false, 'dotsVerticalOffset': '-235px', 'nav': true, 'navVerticalOffset': '70px', 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 7000, 'autoplayHoverPause': true, 'rewind': true}">

                <!-- Carousel Slide 1 -->
                <div class="position-relative overlay overlay-show overlay-op-9 overflow-hidden pt-4"
                    data-dynamic-height="['845px','845px','845px','750px','750px']" style="height: 845px;">
                    <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0"
                        data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s"
                        data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show
                        style="background-image: url(/frontend/img/home-slide-01.jpg); background-size: cover; background-position: center;">
                    </div>
                    <div class="container position-relative z-index-3 h-100">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-lg-8 text-center">
                                <h1 class="text-color-light font-weight-bold line-height-1 text-12 text-md-14 positive-ls-3 mb-3 appear-animation"
                                    data-appear-animation="blurIn" data-appear-animation-delay="1000"
                                    data-plugin-options="{'minWindowWidth': 0}">PSH Global</h1>
                                <h2 class="alternative-font-4 text-color-light font-weight-semibold line-height-3 text-5 positive-ls-1 mb-2 appear-animation"
                                    data-appear-animation="blurIn" data-appear-animation-delay="1300"
                                    data-plugin-options="{'minWindowWidth': 0}"><span class="text-color-primary">PYEI
                                        SONE HEINGROUP OF COMPANIES</span></h2>
                                <p class="text-color-light opacity-6 text-3-5 mb-4" data-plugin-animated-letters
                                    data-plugin-options="{'startDelay': 2200, 'minWindowWidth': 0}">More Than 50 Years
                                    Combined Experience Serving Businesses</p>
                                <a href="about.html"
                                    class="btn btn-primary font-weight-bold text-3-5 px-5 py-3 mt-3 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="3300">About
                                    Us</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Slide 2 -->
                <div class="position-relative overlay overlay-show overlay-op-9 overflow-hidden pt-4"
                    data-dynamic-height="['845px','845px','845px','750px','750px']" style="height: 845px;">
                    <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0"
                        data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s"
                        data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show
                        style="background-image: url(/frontend/img/home-slide-01.jpg); background-size: cover; background-position: center;">
                    </div>
                    <div class="container position-relative z-index-3 h-100">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-lg-8 text-center">
                                <h1 class="text-color-light font-weight-bold line-height-1 text-12 text-md-14 positive-ls-3 mb-3 appear-animation"
                                    data-appear-animation="blurIn" data-appear-animation-delay="1000"
                                    data-plugin-options="{'minWindowWidth': 0}">PSH Global</h1>
                                <h2 class="alternative-font-4 text-color-light font-weight-semibold line-height-3 text-5 positive-ls-1 mb-2 appear-animation"
                                    data-appear-animation="blurIn" data-appear-animation-delay="1300"
                                    data-plugin-options="{'minWindowWidth': 0}"><span class="opacity-9">Our
                                        Products</span></h2>
                                <p class="text-color-light opacity-6 text-3-5 mb-4" data-plugin-animated-letters
                                    data-plugin-options="{'startDelay': 2200, 'minWindowWidth': 0}">More Than 50 Years
                                    Combined Experience Serving Businesses</p>
                                <a href="#"
                                    class="btn btn-primary font-weight-bold text-3-5 px-5 py-3 mt-3 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="3300">More
                                    Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- END HOME SLIDER -->
        <!-- START ABOUT SECTION -->
        <div class="container py-5 my-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">About Us</h2>
                    <h2 class="text-color-dark font-weight-extra-bold text-10 mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><em>Pyi Sone Hein
                            Group Of Companies</em></h2>
                    <p class="font-weight-light text-color-dark mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">We duly incorporated
                        under the Myanmar Citizen's Investment Law of the Uion of Myanmar. Company changed to corporate
                        identy by the merger of Pyei Sone Hein Company Limited and ZIN 9 Company Limited in 2009.</p>
                    <a href="about.html" class="btn btn-primary font-weight-bold text-3-5 px-5 py-3 appear-animation"
                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">About Us</a>
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
                            <img src="{{asset('frontend/img/psh-about.jpg')}}"
                                class="img-fluid position-relative z-index-1 appear-animation"
                                data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="900" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END ABOUT SECTION -->
        <!-- START ABOUT COUNTER SECTION -->
        <section class="section overlay overlay-show overlay-op-9 border-0 m-0 appear-animation"
            data-appear-animation="fadeIn" data-appear-animation-delay="300"
            style="background-image: url({{asset('frontend/img/home-slide-01.jpg')}}); background-size: cover; background-position: center;">
            <div class="container py-1">
                <div class="row counters counters-sm">
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1" data-to="50"
                                data-append="+"
                                data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
                            <label class="text-color-light font-weight-bold text-4 mb-0">Dealers</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1" data-to="250"
                                data-append="+"
                                data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
                            <label class="text-color-light font-weight-bold text-4 mb-0">Staff Members</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                        <div class="counter">
                            <strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1" data-to="5000"
                                data-append="+"
                                data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
                            <label class="text-color-light font-weight-bold text-4 mb-0">Satiesfied Clients</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter">
                            <strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1" data-to="100"
                                data-append="+"
                                data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
                            <label class="text-color-light font-weight-bold text-4 mb-0">Products</label>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END ABOUT COUNTER SECTION -->
        <!-- START OUR SPECIALIZATIONS -->
        <div class="container py-5 my-5">
            <div class="row">
                <div class="col text-center">
                    <div class="appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="0">
                        <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">PSH Global
                        </h2>
                        <h2 class="text-color-dark font-weight-extra-bold text-10 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><em>Our
                                Specializations</em></h2>
                        <p class="font-weight-light text-color-dark mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">We are providing
                            end to end industrial solutions for Retail Fueling & Petroleum Equipment sector, Electronic
                            Weighing System, Toll Management System, Industrial Software Solutions and System
                            Integration Engineering. Our engineering team is organized with experienced and systematic
                            well trained engineers and technicians. We are delivering quality products, latest
                            technologies and innovative solutions to our clients.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1 appear-animation animated fadeInUp appear-animation-visible"
                        data-appear-animation="blurIn" data-appear-animation-delay="0" style="animation-delay: 0ms;">
                        <div class="card-body text-center px-4 py-5">
                            <i class="fa-3x fa-solid fa-chart-line pb-4"></i>
                            <h2
                                class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">
                                Trading - Electronic Weighing Scales</h2>
                            <p class="font-weight-light text-color-dark line-height-7 mb-2">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1 appear-animation animated fadeInUp appear-animation-visible"
                        data-appear-animation="blurIn" data-appear-animation-delay="0" style="animation-delay: 0ms;">
                        <div class="card-body text-center px-4 py-5">
                            <i class="fa-3x fa-solid fa-chart-line pb-4"></i>
                            <h2
                                class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">
                                Trading - Digitalization Equipments</h2>
                            <p class="font-weight-light text-color-dark line-height-7 mb-2">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1 appear-animation animated fadeInUp appear-animation-visible"
                        data-appear-animation="blurIn" data-appear-animation-delay="0" style="animation-delay: 0ms;">
                        <div class="card-body text-center px-4 py-5">
                            <i class="fa-3x fa-solid fa-chart-line pb-4"></i>
                            <h2
                                class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">
                                Trading - Road Safety Materials</h2>
                            <p class="font-weight-light text-color-dark line-height-7 mb-2">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1 appear-animation animated fadeInUp appear-animation-visible"
                        data-appear-animation="blurIn" data-appear-animation-delay="300"
                        style="animation-delay: 300ms;">
                        <div class="card-body text-center px-4 py-5">
                            <i class="fa-3x fa-solid fa-chart-line pb-4"></i>
                            <h2
                                class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">
                                Trading - Petroleum Equipments</h2>
                            <div class="d-block d-md-flex">
                                <p class="font-weight-light text-color-dark line-height-7 mb-2">Lorem ipsum dolor sit
                                    amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt
                                    ut...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1 appear-animation animated fadeInUp appear-animation-visible"
                        data-appear-animation="blurIn" data-appear-animation-delay="300"
                        style="animation-delay: 300ms;">
                        <div class="card-body text-center px-4 py-5">
                            <i class="fa-3x fa-solid fa-scale-balanced pb-4"></i>
                            <h2
                                class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">
                                Electronic Weighing Scales</h2>
                            <p class="font-weight-light text-color-dark line-height-7 mb-2">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1 appear-animation animated fadeInUp appear-animation-visible"
                        data-appear-animation="blurIn" data-appear-animation-delay="300"
                        style="animation-delay: 300ms;">
                        <div class="card-body text-center px-4 py-5">
                            <i class="fa-3x fa-solid fa-briefcase pb-4"></i>
                            <h2
                                class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">
                                Electronic Toll Management System</h2>
                            <p class="font-weight-light text-color-dark line-height-7 mb-2">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1 appear-animation animated fadeInUp appear-animation-visible"
                        data-appear-animation="blurIn" data-appear-animation-delay="600"
                        style="animation-delay: 600ms;">
                        <div class="card-body text-center px-4 py-5">
                            <i class="fa-3x fa-solid fa-briefcase pb-4"></i>
                            <h2
                                class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">
                                Software & System Engineering</h2>
                            <p class="font-weight-light text-color-dark line-height-7 mb-2">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1 appear-animation animated fadeInUp appear-animation-visible"
                        data-appear-animation="blurIn" data-appear-animation-delay="600"
                        style="animation-delay: 600ms;">
                        <div class="card-body text-center px-4 py-5">
                            <i class="fa-3x fa-solid fa-briefcase pb-4"></i>
                            <h2
                                class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">
                                Electronic & Electrical Engineering</h2>
                            <p class="font-weight-light text-color-dark line-height-7 mb-2">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1 appear-animation animated fadeInUp appear-animation-visible"
                        data-appear-animation="blurIn" data-appear-animation-delay="600"
                        style="animation-delay: 600ms;">
                        <div class="card-body text-center px-4 py-5">
                            <i class="fa-3x fa-solid fa-briefcase pb-4"></i>
                            <h2
                                class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">
                                Renewable Energy and Energy Solutions</h2>
                            <p class="font-weight-light text-color-dark line-height-7 mb-2">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OUR SPECIALIZATIONS -->
        <!-- START OUR BRANDS -->
        <section class="section overlay overlay-show overlay-op-9 border-0 m-0"
            style="background-image: url(img/home-slide-01.jpg); background-size: cover; background-position: center;">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h3 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2 appear-animation"
                            data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">PSH Global
                        </h3>
                        <h2 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 mb-0 appear-animation"
                            data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">Our Brands
                        </h2>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-wrapper position-relative z-index-3 appear-animation"
                data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600" style="height: 373px;">
                <div class="owl-carousel owl-theme dots-horizontal-center custom-dots-style-1 mb-0"
                    data-plugin-options="{'responsive': {'576': {'items': 2}, '768': {'items': 2}, '992': {'items': 3}, '1200': {'items': 4}, '1440': {'items': 5}}, 'margin': 20, 'stagePadding': 20, 'loop': true, 'nav': false, 'dots': true, 'autoplay': true, 'autoplayTimeout': 7000}">
                    <div class="py-5">
                        <a href="#" class="text-decoration-none">
                            <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                                <img src="{{asset('frontend/img/brands/setra.jpg')}}"
                                    class="card-img-top border-radius-0" alt="John Doe Image" />
                            </div>
                        </a>
                    </div>
                    <div class="py-5">
                        <a href="#" class="text-decoration-none">
                            <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                                <img src="{{asset('frontend/img/brands/metro.jpg')}}"
                                    class="card-img-top border-radius-0" alt="John Doe Image" />
                            </div>
                        </a>
                    </div>
                    <div class="py-5">
                        <a href="#" class="text-decoration-none">
                            <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                                <img src="{{asset('frontend/img/brands/shinpo.jpg')}}"
                                    class="card-img-top border-radius-0" alt="John Doe Image" />
                            </div>
                        </a>
                    </div>
                    <div class="py-5">
                        <a href="#" class="text-decoration-none">
                            <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                                <img src="{{asset('frontend/img/brands/tqm.jpg')}}" class="card-img-top border-radius-0"
                                    alt="John Doe Image" />
                            </div>
                        </a>
                    </div>
                    <div class="py-5">
                        <a href="#" class="text-decoration-none">
                            <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                                <img src="{{asset('frontend/img/brands/setra-scale.jpg')}}"
                                    class="card-img-top border-radius-0" alt="John Doe Image" />
                            </div>
                        </a>
                    </div>
                    <div class="py-5">
                        <a href="#" class="text-decoration-none">
                            <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                                <img src="{{asset('frontend/img/brands/zin.jpg')}}" class="card-img-top border-radius-0"
                                    alt="John Doe Image" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END OUR BRANDS -->
        <!-- START OUR PRODUCT CATEGROY -->
        <div class="container py-5 my-5">
            <div class="row">
                <div class="col text-center">
                    <div class="appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="0">
                        <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">PSH Global
                        </h2>
                        <h2 class="text-color-dark font-weight-extra-bold text-10 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><em>Our
                                Products</em></h2>
                        <p class="font-weight-light text-color-dark mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Lorem ipsum dolor
                            sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1 appear-animation animated fadeInUp appear-animation-visible"
                        data-appear-animation="blurIn" data-appear-animation-delay="0" style="animation-delay: 0ms;">
                        <div class="card-body text-center px-4 py-4">
                            <img class="img-fluid card-img-top border mb-4"
                                src="{{asset('frontend/img/products/electronic-weighing-scale.jpg')}}" alt="" />
                            <h2
                                class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">
                                Electronic Weighing Scale</h2>
                            <a href="#">
                                <span
                                    class="custom-read-more d-inline-flex justify-content-center align-items-center text-3 font-weight-medium svg-fill-color-primary">
                                    More Detail
                                    <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17"
                                        xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <polygon stroke="#777" stroke-width="0.1" fill="#777"
                                            points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 ">
                                        </polygon>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1 appear-animation animated fadeInUp appear-animation-visible"
                        data-appear-animation="blurIn" data-appear-animation-delay="0" style="animation-delay: 0ms;">
                        <div class="card-body text-center px-4 py-4">
                            <img class="img-fluid card-img-top border mb-4"
                                src="{{asset('frontend/img/products/petroleun-equipments.jpg')}}" alt="" />
                            <h2
                                class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">
                                Petroleum Equipment</h2>
                            <a href="#">
                                <span
                                    class="custom-read-more d-inline-flex justify-content-center align-items-center text-3 font-weight-medium svg-fill-color-primary">
                                    More Detail
                                    <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17"
                                        xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <polygon stroke="#777" stroke-width="0.1" fill="#777"
                                            points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 ">
                                        </polygon>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1 appear-animation animated fadeInUp appear-animation-visible"
                        data-appear-animation="blurIn" data-appear-animation-delay="0" style="animation-delay: 0ms;">
                        <div class="card-body text-center px-4 py-4">
                            <img class="img-fluid card-img-top border mb-4"
                                src="{{asset('frontend/img/products/toll-management.jpg')}}" alt="" />
                            <h2
                                class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">
                                Toll Plaza & Management System</h2>
                            <a href="#">
                                <span
                                    class="custom-read-more d-inline-flex justify-content-center align-items-center text-3 font-weight-medium svg-fill-color-primary">
                                    More Detail
                                    <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17"
                                        xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <polygon stroke="#777" stroke-width="0.1" fill="#777"
                                            points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 ">
                                        </polygon>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1 appear-animation animated fadeInUp appear-animation-visible"
                        data-appear-animation="blurIn" data-appear-animation-delay="0" style="animation-delay: 0ms;">
                        <div class="card-body text-center px-4 py-4">
                            <img class="img-fluid card-img-top border mb-4"
                                src="{{asset('frontend/img/products/software.jpg')}}" alt="" />
                            <h2
                                class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">
                                Software Solutions</h2>
                            <a href="#">
                                <span
                                    class="custom-read-more d-inline-flex justify-content-center align-items-center text-3 font-weight-medium svg-fill-color-primary">
                                    More Detail
                                    <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17"
                                        xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <polygon stroke="#777" stroke-width="0.1" fill="#777"
                                            points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 ">
                                        </polygon>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1 appear-animation animated fadeInUp appear-animation-visible"
                        data-appear-animation="blurIn" data-appear-animation-delay="0" style="animation-delay: 0ms;">
                        <div class="card-body text-center px-4 py-4">
                            <img class="img-fluid card-img-top border mb-4"
                                src="{{asset('frontend/img/products/gate-automation-system.jpg')}}" alt="" />
                            <h2
                                class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">
                                Door & Gate Automation</h2>
                            <a href="#">
                                <span
                                    class="custom-read-more d-inline-flex justify-content-center align-items-center text-3 font-weight-medium svg-fill-color-primary">
                                    More Detail
                                    <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17"
                                        xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <polygon stroke="#777" stroke-width="0.1" fill="#777"
                                            points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 ">
                                        </polygon>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1 appear-animation animated fadeInUp appear-animation-visible"
                        data-appear-animation="blurIn" data-appear-animation-delay="0" style="animation-delay: 0ms;">
                        <div class="card-body text-center px-4 py-4">
                            <img class="img-fluid card-img-top border mb-4"
                                src="{{asset('frontend/img/products/digitalization-equipment.jpg')}}" alt="" />
                            <h2
                                class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">
                                Digitalization Equipment</h2>
                            <a href="#">
                                <span
                                    class="custom-read-more d-inline-flex justify-content-center align-items-center text-3 font-weight-medium svg-fill-color-primary">
                                    More Detail
                                    <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17"
                                        xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <polygon stroke="#777" stroke-width="0.1" fill="#777"
                                            points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 ">
                                        </polygon>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1 appear-animation animated fadeInUp appear-animation-visible"
                        data-appear-animation="blurIn" data-appear-animation-delay="0" style="animation-delay: 0ms;">
                        <div class="card-body text-center px-4 py-4">
                            <img class="img-fluid card-img-top border mb-4"
                                src="{{asset('frontend/img/products/counting-machine.jpg')}}" alt="" />
                            <h2
                                class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">
                                Money Counting Machine</h2>
                            <a href="#">
                                <span
                                    class="custom-read-more d-inline-flex justify-content-center align-items-center text-3 font-weight-medium svg-fill-color-primary">
                                    More Detail
                                    <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17"
                                        xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <polygon stroke="#777" stroke-width="0.1" fill="#777"
                                            points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 ">
                                        </polygon>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1 appear-animation animated fadeInUp appear-animation-visible"
                        data-appear-animation="blurIn" data-appear-animation-delay="0" style="animation-delay: 0ms;">
                        <div class="card-body text-center px-4 py-4">
                            <img class="img-fluid card-img-top border mb-4"
                                src="{{asset('frontend/img/products/industrial-boiler.jpg')}}" alt="" />
                            <h2
                                class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">
                                Industrial Boiler</h2>
                            <a href="#">
                                <span
                                    class="custom-read-more d-inline-flex justify-content-center align-items-center text-3 font-weight-medium svg-fill-color-primary">
                                    More Detail
                                    <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17"
                                        xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <polygon stroke="#777" stroke-width="0.1" fill="#777"
                                            points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 ">
                                        </polygon>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OUR PRODUCT CATEGORY -->
        <!-- START OUR CUSTOMER -->
        <section class="section overlay overlay-show overlay-op-9 border-0 m-0"
            style="background-image: url(img/home-slide-01.jpg); background-size: cover; background-position: center;">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h3 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2 appear-animation"
                            data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">PSH Global
                        </h3>
                        <h2 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 mb-0 appear-animation"
                            data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">Our Customers
                        </h2>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-wrapper position-relative z-index-3 appear-animation"
                data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600" style="height: 373px;">
                <div class="owl-carousel owl-theme dots-horizontal-center custom-dots-style-1 mb-0"
                    data-plugin-options="{'responsive': {'576': {'items': 2}, '768': {'items': 2}, '992': {'items': 3}, '1200': {'items': 4}, '1440': {'items': 5}}, 'margin': 20, 'stagePadding': 20, 'loop': true, 'nav': false, 'dots': true, 'autoplay': true, 'autoplayTimeout': 7000}">
                    <div class="py-5">
                        <a href="#" class="text-decoration-none">
                            <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                                <img src="{{asset('frontend/img/customers/ag.jpg')}}"
                                    class="card-img-top border-radius-0" alt="John Doe Image" />
                            </div>
                        </a>
                    </div>
                    <div class="py-5">
                        <a href="#" class="text-decoration-none">
                            <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                                <img src="{{asset('frontend/img/customers/kyal-sin-win.jpg')}}"
                                    class="card-img-top border-radius-0" alt="" />
                            </div>
                        </a>
                    </div>
                    <div class="py-5">
                        <a href="#" class="text-decoration-none">
                            <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                                <img src="{{asset('frontend/img/customers/max-cement.jpg')}}"
                                    class="card-img-top border-radius-0" alt="" />
                            </div>
                        </a>
                    </div>
                    <div class="py-5">
                        <a href="#" class="text-decoration-none">
                            <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                                <img src="{{asset('frontend/img/customers/max-engery.jpg')}}"
                                    class="card-img-top border-radius-0" alt="" />
                            </div>
                        </a>
                    </div>
                    <div class="py-5">
                        <a href="#" class="text-decoration-none">
                            <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                                <img src="{{asset('frontend/img/customers/mcs.jpg')}}"
                                    class="card-img-top border-radius-0" alt="" />
                            </div>
                        </a>
                    </div>
                    <div class="py-5">
                        <a href="#" class="text-decoration-none">
                            <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                                <img src="img/customers/mmtm.jpg" class="card-img-top border-radius-0" alt="" />
                            </div>
                        </a>
                    </div>
                    <div class="py-5">
                        <a href="#" class="text-decoration-none">
                            <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                                <img src="{{asset('frontend/img/customers/mnt.jpg')}}"
                                    class="card-img-top border-radius-0" alt="" />
                            </div>
                        </a>
                    </div>
                    <div class="py-5">
                        <a href="#" class="text-decoration-none">
                            <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                                <img src="{{asset('frontend/img/customers/scg.jpg')}}"
                                    class="card-img-top border-radius-0" alt="" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END OUR CUSTOMERS -->
        <!-- START NEWS -->
        <div class="container py-5 my-5">
            <div class="row">
                <div class="col text-center">
                    <h3 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-1 appear-animation"
                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">OUR BLOG</h3>
                    <h2 class="text-transform-none text-color-dark font-weight-bold text-10 negative-ls-1 mb-2 appear-animation"
                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">News & Articles
                    </h2>
                    <p class="font-weight-light text-color-dark mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut</p>
                </div>
            </div>
            <div class="row row-gutter-sm pb-2 mb-5 appear-animation" data-appear-animation="fadeInUpShorterPlus"
                data-appear-animation-delay="600">
                <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center">
                    <article>
                        <div class="card border-0 border-radius-0 custom-box-shadow-1">
                            <div class="card-img-top">
                                <a href="#">
                                    <img class="card-img-top border-radius-0 hover-effect-2"
                                        src="{{asset('frontend/img/home-slide-01.jpg')}}" alt="Card Image">
                                </a>
                            </div>
                            <div class="card-body bg-light p-4 z-index-1">
                                <p class="text-uppercase text-color-default text-1 mb-1 pt-1">
                                    <time pubdate datetime="2024-01-10">10 Jan 2024</time>
                                    <span class="opacity-3 d-inline-block px-2">|</span>
                                    News
                                </p>
                                <div class="card-body p-0">
                                    <h4 class="card-title alternative-font-4 font-weight-semibold text-5 mb-3"><a
                                            class="text-color-dark text-color-hover-primary text-decoration-none font-weight-bold text-3"
                                            href="#">Lorem ipsum dolor sit a met</a></h4>
                                    <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Nunc viverra lorem ipsum erat orci, ac auctor...</p>
                                    <a href="blog-detail.html"
                                        class="custom-read-more-link d-inline-flex align-items-center font-weight-semibold text-3 text-decoration-none svg-fill-color-primary svg-stroke-color-primary ps-0">
                                        READ MORE
                                        <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17"
                                            xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <polygon stroke="#777" stroke-width="0.1" fill="#777"
                                                points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 " />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center">
                    <article>
                        <div class="card border-0 border-radius-0 custom-box-shadow-1">
                            <div class="card-img-top">
                                <a href="#">
                                    <img class="card-img-top border-radius-0 hover-effect-2"
                                        src="{{asset('frontend/img/home-slide-01.jpg')}}" alt="Card Image">
                                </a>
                            </div>
                            <div class="card-body bg-light p-4 z-index-1">
                                <p class="text-uppercase text-color-default text-1 mb-1 pt-1">
                                    <time pubdate datetime="2024-01-10">10 Jan 2024</time>
                                    <span class="opacity-3 d-inline-block px-2">|</span>
                                    CSR Activity
                                </p>
                                <div class="card-body p-0">
                                    <h4 class="card-title alternative-font-4 font-weight-semibold text-5 mb-3"><a
                                            class="text-color-dark text-color-hover-primary text-decoration-none font-weight-bold text-3"
                                            href="#">Lorem ipsum dolor sit a met</a></h4>
                                    <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Nunc viverra lorem ipsum erat orci, ac auctor...</p>
                                    <a href="#"
                                        class="custom-read-more-link d-inline-flex align-items-center font-weight-semibold text-3 text-decoration-none svg-fill-color-primary svg-stroke-color-primary ps-0">
                                        READ MORE
                                        <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17"
                                            xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <polygon stroke="#777" stroke-width="0.1" fill="#777"
                                                points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 " />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col text-center appear-animation" data-appear-animation="fadeInUpShorterPlus"
                    data-appear-animation-delay="600" data-plugin-options="{'accY': -250}">
                    <a href="blog.html" class="btn btn-primary font-weight-bold px-5 btn-py-3">VIEW BLOG</a>
                </div>
            </div>
        </div>
        <!-- END NEWS -->
    </div>
</div>
@endsection