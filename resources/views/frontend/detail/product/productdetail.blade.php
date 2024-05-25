@extends('layouts.frontend')
@php
$specification = json_decode($productdetail['specification'], true);
// dd(auth()->user());
@endphp
@section('content')
<div role="main" class="main">
    <!-- START BANNER  -->
    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0"
        style="background-image: url(/frontend/img/home-slide-01.jpg); background-size: cover; background-position: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                        <li><a href="index.html" class="text-color-primary text-decoration-none">HOME</a></li>
                        <li class="text-color-primary active">Our Products</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10">{{$productdetail->name}}</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- END BANNER -->
    <!-- START OUR PRODUCT DETAIL-->
    <div class="container py-5 my-4">
        <div class="container">
            <div class="row pb-4">
                <div class="col-lg-8 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus"
                    data-appear-animation-delay="200">
                    <h2 class="text-color-dark font-weight-bold text-10 mb-2"><em>{{$productdetail->name}}</em></h2>
                    <ul
                        class="list list-icons list-icons-style-2 list-icons-lg d-flex flex-column flex-lg-row justify-content-between">
                        <li class="font-weight-semibold text-color-dark mb-0">
                            <i class="fas fa-list text-color-dark border-color-grey-1 top-7 text-3"></i>
                            {{$productdetail->category->name}}
                        </li>
                        <li class="font-weight-semibold text-color-dark my-2 my-lg-0">
                            <i class="fas fa-list text-color-dark border-color-grey-1 top-7 text-3"></i>
                            {{$productdetail->subCategory->name}}
                        </li>
                        <li class="font-weight-semibold text-color-dark mb-0">
                            <i class="fas fa-list text-color-dark border-color-grey-1 top-7 text-3"></i>
                            {{$productdetail->brand->name}}
                        </li>
                    </ul>
                    <img src="{{asset('storage/product_guide_image/'. $productdetail->product_feature_image) }}"
                        class="img-fluid mb-3">
                    <h3 class="text-transform-none alternative-font-4 text-4-5 font-weight-bold mb-2">Specification</h3>
                    <ul class="list list-icons list-primary">
                        @foreach ($specification as $key => $value)
                        <li class="appear-animation animated fadeInUp appear-animation-visible"
                            data-appear-animation="fadeInUp" data-appear-animation-delay="0"
                            style="animation-delay: 0ms;"><i class="fas fa-check"></i> {{$key}} : {{$value}}</li>
                        @endforeach

                    </ul>
                    <h3 class="text-transform-none alternative-font-4 text-4-5 font-weight-bold mb-2">Product Detail
                    </h3>
                    <p class="pb-3">{!!$productdetail->description!!}</p>
                    {{-- <div class="lightbox"
                        data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                        <div class="row pb-3">
                            <div class="col-lg-8 mb-lg-0">
                                <a class="d-flex img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0 custom-box-shadow-1"
                                    href="img/generic-2-wide.jpg"
                                    style="background-image: url(img/generic-2-wide.jpg); background-size: cover; background-position: center; min-height: 300px;"></a>
                            </div>
                            <div class="col-lg-4 ps-lg-0">
                                <a class="d-flex img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0 custom-box-shadow-1"
                                    href="img/generic-4-portrait.jpg"
                                    style="background-image: url(img/generic-4-portrait.jpg); background-size: cover; background-position: center; min-height: 300px;"></a>
                            </div>
                        </div>
                    </div>
                    <h2 class="text-transform-none alternative-font-4 text-4-5 font-weight-bold mb-2">SETRA Weighing
                        Terminal (Analog Weigh Terminal)</h2>
                    <p class="pb-2 mb-4">
                        Model 216 EXPRESS
                        High brightness red LED digital display
                        RS 232 Communication interface
                        Build in Dot Matrix printer
                    </p>
                    <h2 class="text-transform-none alternative-font-4 text-4-5 font-weight-bold mb-2">SETRA Weighing
                        Terminal (Analog Weigh Terminal)</h2>
                    <p class="pb-2 mb-4">
                        Alloy steel & stainless structure;
                        Bellows hermetically sealed by laser, nickel plated, waterproof and anti-corrosion, suitable for
                        multiform environments;
                        Suitable for truck scale, electronic scale and other weighing devices;
                        Defend grade : IP66
                    </p>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id
                        nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum.
                        Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. Lorem ipsum dolor
                        sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est
                        consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh
                        gravida, accumsan libero luctus, molestie nunc.</p>
                    <p class="pb-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero
                        id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum.
                        Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.</p>
                    <p class="pb-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero
                        id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum.
                        Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.</p>
                    <p class="pb-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero
                        id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum.
                        Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. Lorem ipsum dolor
                        sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est
                        consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh
                        gravida, accumsan libero luctus, molestie nunc.</p> --}}

                    <div class="pb-2 mb-4">
                        <h3 class="text-transform-none alternative-font-4 text-4-5 font-weight-bold mb-2">Product Guide
                            (PDF)</h3>
                        <ul class="list list-icons list-primary">
                            <li class="appear-animation animated fadeInUp appear-animation-visible"
                                data-appear-animation="fadeInUp" data-appear-animation-delay="0"
                                style="animation-delay: 0ms;">
                                <a href="{{asset('/storage/product_pdf/'. $productdetail->product_pdf)}}"
                                    class="text-color-dark">
                                    <i class="fa fa-file-pdf"></i> {{$productdetail->product_pdf}}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="pb-2 mb-4">
                        <h3 class="text-transform-none alternative-font-4 text-4-5 font-weight-bold mb-2">Product Guide
                            (Links)</h3>
                        <ul class="list list-icons list-primary">
                            <li class="appear-animation animated fadeInUp appear-animation-visible"
                                data-appear-animation="fadeInUp" data-appear-animation-delay="0"
                                style="animation-delay: 0ms;">
                                <a href="{{$productdetail->product_video_link}}" class="text-color-dark">
                                    <i class="fa-brands fa-youtube"></i> {{$productdetail->product_video_link}}
                                </a>
                            </li>
                        </ul>
                    </div>
                    @if (auth()->user() !== null)
                    <div class="pb-2 mb-4">
                        <h3 class="text-transform-none alternative-font-4 text-4-5 font-weight-bold mb-2">Product Guide
                            (PDF) Member Only</h3>
                        <ul class="list list-icons list-primary">
                            <li class="appear-animation animated fadeInUp appear-animation-visible"
                                data-appear-animation="fadeInUp" data-appear-animation-delay="0"
                                style="animation-delay: 0ms;">
                                <a href="{{asset('/storage/product_guide_pdf/'. $productdetail->product_guide_pdf)}}" class="text-color-dark">
                                    <i class="fa fa-file-pdf"></i> {{ $productdetail->product_guide_pdf}}
                                </a>
                            </li>
                        </ul>
                    </div>
                    @endif

                    @if (auth()->user() !== null)
                    <div class="pb-2 mb-4">
                        <h3 class="text-transform-none alternative-font-4 text-4-5 font-weight-bold mb-2">Product Guide
                            (Links) Member Only</h3>
                        <ul class="list list-icons list-primary">
                            <li class="appear-animation animated fadeInUp appear-animation-visible"
                                data-appear-animation="fadeInUp" data-appear-animation-delay="0"
                                style="animation-delay: 0ms;">
                                <a href="{{asset('/storage/product_guide_video/'. $productdetail->product_guide_video)}}" class="text-color-dark">
                                    <i class="fa-brands fa-youtube"></i> {{ $productdetail->product_guide_video}}
                                </a>
                            </li>
                        </ul>
                    </div>
                    @endif
                    <div class="mb-4">
                        <h3 class="text-transform-none alternative-font-4 text-4-5 font-weight-bold pb-2 mb-2">Support
                        </h3>
                        <div class="custom-accordion-style-1 custom-accordion-style-1-grey accordion accordion-modern pb-2 mb-4"
                            id="FAQAccordion">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed"
                                            data-bs-toggle="collapse" href="#collapseFAQOne">
                                            User Support
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFAQOne" class="collapse" data-bs-parent="#FAQAccordion">
                                    <div class="card-body ps-4">
                                        <strong>{{$user_supp->name}}</strong>
                                        <p class="mb-0">{!!$user_supp->description!!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed"
                                            data-bs-toggle="collapse" href="#collapseFAQTwo">
                                            Technical Support
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFAQTwo" class="collapse" data-bs-parent="#FAQAccordion">
                                    <div class="card-body ps-4">
                                        <strong>{{$tech_supp->name}}</strong>
                                        <p class="mb-0">{!!$tech_supp->description!!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 position-relative">
                    <aside class="sidebar" data-plugin-sticky
                        data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 120}}">
                        <div class="card border-0 border-radius-0 custom-box-shadow-1 px-2 mb-5">
                            <div class="card-body p-4 my-3">
                                <h3 class="text-transform-none font-weight-bold mb-4">Product Categories</h3>
                                <ul class="custom-list-style-1 list list-unstyled font-weight-bold">
                                    @foreach ($product_category as $item)
                                    <li class="{{ $item->id == $productdetail->product_category_id ? 'active' : '' }}">
                                        <a href="{{$item->id}}"
                                            class="text-decoration-none text-color-hover-primary d-flex {{ $item->id == $productdetail->product_category_id ? 'active' : 'text-dark' }}">
                                            {{$item->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
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