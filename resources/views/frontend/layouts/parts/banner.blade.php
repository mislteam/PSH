<style>
    .carousel-item img {
        height: 700px;
        object-fit: cover;
        object-position: center;
    }
</style>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride= "carousel" >
    <div class="carousel-indicators">
      @foreach ($banners as $index => $banner)
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$index}}" class="{{$index == 0 ? 'active' : ""}}" aria-current="true" aria-label="Slide 1"></button>
      @endforeach
    </div>
    <div class="carousel-inner">
      @forelse ($banners as $index => $banner)         
        <div class="carousel-item {{$index == 0 ? "active" : ""}}">
            <img src="{{asset("/homeslidebanner/".$banner->image)}}" class="d-block w-100" alt="banner-img">
            <div class="carousel-caption d-block">
            <h1 class="translate"> {{$banner->title}} </h1>
            </div>
        </div>
      @empty
      <div class="carousel-item active">
          <img src="{{asset("/default-img/slide.jpg")}}" class="d-block w-100" alt="banner-img">
          <div class="carousel-caption d-block">
          <h1> Default Banner Image </h1>
          </div>
      </div>
      @endforelse   
    </div>
    @if (count($banners) > 1)
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    @endif
</div>