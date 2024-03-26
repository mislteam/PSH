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
                        <li class="text-color-primary active">Our Products</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10">Electronic Weighing Scales</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- END BANNER -->
    <!-- START OUR PRODUCT CATEGROY -->
    <div class="container py-5 my-5">
        <div class="row">
            <div class="col text-center">
                <div class="appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="0">
                    <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">PSH Global</h2>
                    <h2 class="text-color-dark font-weight-extra-bold text-10 mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><em>Electronic
                            Weighing Scale</em></h2>
                    <p class="font-weight-light text-color-dark mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            @foreach ($subcategories as $item)
            <div class="col-lg-4 d-flex align-items-stretch my-3">
                <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1 appear-animation animated fadeInUp appear-animation-visible"
                    data-appear-animation="blurIn" data-appear-animation-delay="0" style="animation-delay: 0ms;">
                    <div class="card-body text-center px-4 py-4">
                        <img class="img-fluid card-img-top border mb-4"
                            src="{{asset('storage/subcategory_images/'.$item->subcategory_image) }}" alt="" />
                        <h2
                            class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">
                            {{$item->name}}</h2>
                        <a href="{{route('brand', $item->id)}}">
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
            @endforeach

        </div>
    </div>
    <!-- END OUR PRODUCT CATEGORY -->
</div>
@stop