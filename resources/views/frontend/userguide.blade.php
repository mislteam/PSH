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
                        <li class="text-color-primary active">User Supports</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10">User Supports</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- END BANNER -->
    <!-- START OUR PRODUCT -->
    <div class="container py-5 my-4">
        <div class="row">
            <div class="col text-center">
                <div class="appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="0">
                    <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">Products</h2>
                    <h2 class="text-color-dark font-weight-extra-bold text-10 mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><em>User Support</em>
                    </h2>
                    <p class="font-weight-light text-color-dark mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <form class="contact-form custom-form-style-1 appear-animation form-inline"
                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800" action=""
                    method="POST">
                    <div class="contact-form-success alert alert-success d-none mt-4">
                        <strong>Success!</strong> Your request has been sent to us.
                    </div>

                    <div class="contact-form-error alert alert-danger d-none mt-4">
                        <strong>Error!</strong> There was an error sending your request.
                        <span class="mail-error-message text-1 d-block"></span>
                    </div>

                    <div class="row d-flex mb-2">
                        <div class="form-group col mb-3">
                            <input type="text" value="" data-msg-required="Enter Products Name" maxlength="100"
                                class="form-control border-radius-0" name="name" id="name" required
                                placeholder="Enter Product Name">
                        </div>
                        <div class="form-group col-lg-2 mb-0">
                            <button type="submit"
                                class="btn btn-primary font-weight-bold btn-px-5 btn-py-3 appear-animation"
                                data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="350"
                                data-loading-text="Loading...">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row row-gutter-sm py-2">
            @foreach ($products->sortByDesc('created_at')->take(3) as $item)
            <div class="d-flex align-items-center col-md-6 col-lg-4 mb-4 appear-animation"
                data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
                <a href="#" class="text-decoration-none">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                        <img src="{{asset('storage/product_guide_image/'. $item->product_feature_image)}}"
                            class="card-img-top border-radius-0" alt="John Doe Image" />
                        <div class="card-body text-center">
                            <h2
                                class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-1 line-height-4">
                                {{$item->name}}</h2>
                            <a href="{{route('userguidedetail', $item->id)}}">
                                <span
                                    class="custom-read-more d-inline-flex justify-content-center align-items-center text-3 font-weight-medium svg-fill-color-primary">
                                    VIEW More
                                    <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17"
                                        xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <polygon stroke="#777" stroke-width="0.1" fill="#777"
                                            points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 " />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- END OUR PRODUCT -->
</div>
@stop