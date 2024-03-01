@php
$banner = App\Models\Banner::latest("id")->where('location', 'all')->where('status', 1)->first();
@endphp
<div class="banner-img position-relative" style="margin-bottom : 3em ">
    {{-- banner text  --}}
    <div class="position-absolute top-50 start-50 translate-middle z-100">
        <h1 class="text-white text-center translate"> {{$title}} </h1>
    </div>
    @if ($banner)
        @if (file_exists('homeslidebanner/'.$banner->image))         
            <img src="{{asset("/homeslidebanner/" .$banner->image)}}" alt="all-banner-img" class="general-banner-img">
        @else
            <img src="{{asset("/default-img/banner.jpg")}}" alt="all-banner-img" class="general-banner-img">
        @endif
    @else 
        <img src="{{asset("/default-img/banner.jpg")}}" alt="all-banner-img" class="general-banner-img">
    @endif
</div>