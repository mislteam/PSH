@extends('layouts.frontend')
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
                        <li class="text-color-primary active">Our Projects</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10">Projects</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- END BANNER -->
    <!-- START OUR PROJECTS -->
    <div class="container py-5 my-4">
        <div class="row">
            <div class="col text-center">
                <div class="appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="0">
                    <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">PSH Global</h2>
                    <h2 class="text-color-dark font-weight-extra-bold text-10 mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><em>Our Projects</em>
                    </h2>
                    <p class="font-weight-light text-color-dark mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut</p>
                </div>
            </div>
        </div>
        <div class="row pb-4">
            @foreach ($projects as $project)
            <div class="col-md-6 d-flex align-items-stretch mb-5 appear-animation"
                data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
                <a href="#" class="text-decoration-none">
                    <div class="card custom-card-style-2 border-0 border-radius-0">
                        <div class="card-img-top">
                            <img src="{{asset('storage/project_feature_image/'. $project->feature_image) }}"
                                class="img-fluid" alt="" />
                        </div>
                        <div class="card-body custom-box-shadow-2">
                            <span
                                class="d-block text-color-grey positive-ls-2 mb-0">{{$project->projectcategory->name}}</span>
                            <h4 class="text-color-dark font-weight-medium text-5-5 mb-2"><em>{{$project->name}}</em>
                            </h4>
                            <a href="{{ route('projectdetail', ['id' => $project->id]) }}">
                                <span
                                    class="custom-read-more font-weight-medium d-inline-flex justify-content-center align-items-center svg-fill-color-primary svg-stroke-color-primary">
                                    VIEW DETAILS
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

           <span>
            {{ $projects->links() }}
           </span>
        </div>
    </div>
    <!-- END OUR PROJECTS -->
</div>
@stop