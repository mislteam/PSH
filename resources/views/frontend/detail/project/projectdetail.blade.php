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
                        <li class="text-color-primary active">Our Projects</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10">Myat Noe Thu Co., Ltd</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- END BANNER -->
    <!-- START OUR PRODUCT DETAIL-->
    <div class="container py-5 my-4">
        <div class="container">
            <div class="row pb-4">
                <div class="col-lg-8 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
                    <h2 class="text-color-dark font-weight-bold text-10 mb-2"><em>{{$project_detail->name}}</em></h2>
                    <ul class="list list-icons list-icons-style-2 list-icons-lg d-flex flex-column flex-lg-row justify-content-between">
                        <li class="font-weight-semibold text-color-dark mb-0">
                            <i class="fas fa-list text-color-dark border-color-grey-1 top-7 text-3"></i> 
                            {{$project_detail->projectcategory->name}}
                        </li>
                    </ul>
                    <img src="{{asset('storage/project_feature_image/'. $project_detail->feature_image) }}" class="img-fluid mb-3">
                    <p class="mb-0">{!!$project_detail->description!!}</p>
                    <h2 class="text-transform-none alternative-font-4 text-4-5 font-weight-bold pb-2 mb-2">Gallery</h2>
                    <div class="row">
                        @foreach(json_decode($project_detail->gallery_image) ?? [] as $image)
                        <div class="col-lg-4 d-flex align-items-stretch mb-4">
                            <span class="thumb-info thumb-info-swap-content thumb-info-centered-icons thumb-info-wrapper-direction-aware">
                                <span class="thumb-info-wrapper">                                   
                                    <div class="d-inline">
                                    <img src="{{ asset('/storage/gallery_image/' . $image) }}" class="img-fluid" alt="">
                                    </div>                                   
                                    <span class="thumb-info-wrapper-overlay">
                                        <span class="thumb-info-action">
                                            <a href="#">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-play-circle text-dark text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                        @endforeach
                    </div>							
                </div>
                <div class="col-lg-4 position-relative">
                    <aside class="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 1000, 'containerSelector': '.container', 'padding': {'top': 120}}">
                        <div class="card border-0 border-radius-0 custom-box-shadow-1 mb-5">
                            <div class="card-body p-4 my-3">
                                <h3 class="text-transform-none font-weight-bold mb-4">Project Categories</h3>
                                <ul class="custom-list-style-1 list list-unstyled font-weight-bold">
                                    @foreach ($projectcategory as $item)
                                    <li class="{{ $item->id == $project_detail->project_category_id ? 'active' : '' }}">
                                        <a href="#" class="text-decoration-none text-color-hover-primary d-flex {{ $item->id == $project_detail->project_category_id ? 'active' : 'text-dark' }}"> {{$item->name}}</a>
                                    </li>
                                    @endforeach                                    
                                </ul>
                            </div>
                        </div>
                        <div class="card bg-primary-darken border-0 border-radius-0 custom-box-shadow-1 py-4 mb-5">
                            <div class="card-body text-center py-5">
                                <h3 class="alternative-font-4 text-color-light font-weight-semibold text-4 mb-1">ARE YOU LOOKING FOR</h3>
                                <h2 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 mb-2">Projects?</h2>
                                <p class="text-color-light text-3-5 opacity-8 mb-5">Get a free consultation right now</p>
                                <ul class="list list-unstyled mb-5">
                                    <li class="mb-lg-2 mb-xl-3">
                                        <i class="icons icon-phone text-color-primary text-5-5 position-relative top-2 me-2"></i>
                                        <a href="#" class="text-color-light font-weight-bold text-decoration-none text-5">(+95) 09765432123</a>
                                    </li>
                                    <li class="mb-3">
                                        <i class="icons icon-envelope text-color-primary text-6 position-relative top-6 me-2"></i>
                                        <a href="#" class="text-color-light text-decoration-none text-4 text-lg-3 text-xl-4">info@yourcompany.com</a>
                                    </li>
                                    <li class="text-color-light text-4 text-lg-3 text-xl-4 mb-0">
                                        <i class="icons icon-calendar text-color-primary text-5 position-relative top-3 me-2"></i>
                                        Mon - Fri 9am - 6pm
                                    </li>
                                </ul>
                                <a href="contact.html" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="btn btn-primary font-weight-bold text-2 text-lg-1 text-xl-2 btn-px-5 btn-py-3">Contact Us</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- END OUR PRODUCT DETAIL-->
</div> 
@stop