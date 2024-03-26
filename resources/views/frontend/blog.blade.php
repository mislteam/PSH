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
                        <li class="text-color-primary active">Our Blog</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10">News</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- END BANNER -->
    <!-- START OUR NEWS & BLOG -->
    <div class="container py-5 my-4">
        <div class="row">
            <div class="col text-center">
                <div class="appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="0">
                    <h3 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">OUR BLOG</h3>
                    <h2 class="text-transform-none text-color-dark font-weight-bold text-10 negative-ls-1 mb-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">News & Articles</h2>
                    <p class="font-weight-light text-color-dark mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut</p>
                </div>
            </div>
        </div>
        <div class="row row-gutter-sm pb-2 mb-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">
            @foreach ($news as $new)
            <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center my-3">
                <article>
                    <div class="card border-0 border-radius-0 custom-box-shadow-1">
                        <div class="card-img-top">
                            <a href="#">
                                <img class="card-img-top border-radius-0 hover-effect-2" src="{{asset('storage/new_feature_image/'. $new->feature_image) }}" alt="Card Image">
                            </a>
                        </div>
                        <div class="card-body bg-light p-4 z-index-1">
                            <p class="text-uppercase text-color-default text-1 mb-1 pt-1">
                                <time pubdate datetime="2024-01-10">{{$new->created_at->format('d M Y')}}</time>
                                <span class="opacity-3 d-inline-block px-2">|</span> 
                                News
                            </p>
                            <div class="card-body p-0">
                                <h4 class="card-title alternative-font-4 font-weight-semibold text-5 mb-3"><a class="text-color-dark text-color-hover-primary text-decoration-none font-weight-bold text-3" href="#">{{$new->name}}</a></h4>
                                <p class="card-text mb-2">{!! strlen($new->description) > 100 ? substr($new->description, 0, 100) . '...' : $new->description !!}</p>
                                <a href="{{route('newdetail',['id' => $new->id])}}" class="custom-read-more-link d-inline-flex align-items-center font-weight-semibold text-3 text-decoration-none svg-fill-color-primary svg-stroke-color-primary ps-0">
                                    READ MORE
                                    <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <polygon stroke="#777" stroke-width="0.1" fill="#777" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach
                <span class="my-3 text-center">
                    {{ $news->links() }}
                </span>            
        </div>
    </div>
    <!-- END OUR NEWS & BLOG -->
</div> 
@stop