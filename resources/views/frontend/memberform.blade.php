@extends('layouts.frontend')
@section('content')
<div role="main" class="main">
    <!-- START BANNER  -->
    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url(img/home-slide-01.jpg); background-size: cover; background-position: center;">
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
                <form class="custom-form-style-1" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800" action="{{route('updatememberinfo',$user->id)}}" method="POST">
                    @csrf
                    <div class="contact-form-error alert alert-success d-none mt-4">
                        <strong>Success!</strong> Your request has been sent to us.
                        <span class="mail-error-message text-1 d-block"></span>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="text" value="{{$user->name}}" data-msg-required="Please enter your name" maxlength="100" class="form-control border-radius-0" name="name" id="name" required placeholder="Name *">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="text" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control border-radius-0" name="phone" id="phone" required placeholder="Phone *">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <select class="form-control" name="product_type" required>
                                <option value="" selected disabled>Select Prodcut Type</option>
                                @foreach ($producttype as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>	
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <select class="form-control">
                                <option selected>Select Township</option>
                                <option>Tamwe</option>
                                <option>Botataung</option>
                            </select>
                        </div>	
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <select class="form-control">
                                <option selected>Select State/Region</option>
                                <option>Yangon</option>
                                <option>Mandalay</option>
                            </select>
                        </div>	
                    </div>
                    <div class="row">
                        <div class="form-group col text-lg-end mb-0">
                            <button type="submit" class="btn btn-primary font-weight-bold btn-px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="350" data-loading-text="Loading...">Submit</button>
                        </div>
                    </div>
                </form>
                {{-- <form action="{{route('updatememberinfo',$user->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="text" value="{{$user->name}}" data-msg-required="Please enter your name" maxlength="100" class="form-control border-radius-0" name="name" id="name" required placeholder="Name *">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="text" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control border-radius-0" name="phone" id="phone" required placeholder="Phone *">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <select class="form-control" name="product_type" required>
                                <option value="" selected disabled>Select Prodcut Type</option>
                                @foreach ($producttype as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>	
                    </div>
                    <input type="submit" class="btn btn-primary font-weight-bold btn-px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" value="submit">
                </form> --}}
            </div>
        </div>
    </div>
    <!-- END MEMBER  -->
</div> 
@endsection