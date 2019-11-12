@extends('layouts.app')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('https://resources.stuff.co.nz/content/dam/images/1/x/6/t/2/i/image.related.StuffLandscapeSixteenByNine.1420x800.1x6jh5.png/1569818371468.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate text-center mb-4">
          <h1 class="mb-2 bread">Gallery</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Menu <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>



<div style="margin-top:20px">
<!-- Grid row -->
  <!-- Grid row -->
  
  <!-- Grid row -->
  <div class="gallery" id="gallery">
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 2">
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain1.jpg" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.jpg" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 2">
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 2">
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.jpg" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
  </div>
  <!-- Grid row -->


<style> .gallery {
    -webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 3;
    -webkit-column-width: 33%;
    -moz-column-width: 33%;
    column-width: 33%; }
    .gallery .pics {
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease; }
    .gallery .animation {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1); }
    
    @media (max-width: 450px) {
    .gallery {
    -webkit-column-count: 1;
    -moz-column-count: 1;
    column-count: 1;
    -webkit-column-width: 100%;
    -moz-column-width: 100%;
    column-width: 100%;
    }
    }
    
    @media (max-width: 400px) {
    .btn.filter {
    padding-left: 1.1rem;
    padding-right: 1.1rem;
    }
    }
    </style>
 
<script>
    $(function() {
var selectedClass = "";
$(".filter").click(function(){
selectedClass = $(this).attr("data-rel");
$("#gallery").fadeTo(100, 0.1);
$("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
setTimeout(function() {
$("."+selectedClass).fadeIn().addClass('animation');
$("#gallery").fadeTo(300, 1);
}, 300);
});
});
</script>
</div>


@endsection