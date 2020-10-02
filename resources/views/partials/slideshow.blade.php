<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
  </ol>
  <div class="carousel-inner animate__animated animate__fadeIn">
    @include('partials.bg-image-carousel', ['image' => 35, 'class' => "active"])
    @include('partials.bg-image-carousel', ['image' => 36])
    @include('partials.bg-image-carousel', ['image' => 37])
    @include('partials.bg-image-carousel', ['image' => 218])
    @include('partials.bg-image-carousel', ['image' => 219])
    @include('partials.bg-image-carousel', ['image' => 220])
    @include('partials.bg-image-carousel', ['image' => 221])
  </div>
  <div class="signature">
    <img src="@asset('images/potpis-255.png')" srcset="
    @asset('images/potpis-1020.png') 1088w,
    @asset('images/potpis-510.png') 500w,
    @asset('images/potpis-255.png') 1w" alt="logo" class="animate__animated animate__fadeInUp"/><h2 class="signature-description text-center text-uppercase animate__animated animate__fadeInLeft  animate__delay-1s">{{ get_bloginfo('description', 'display') }}</h2>
  </div>
  <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->
</div>
