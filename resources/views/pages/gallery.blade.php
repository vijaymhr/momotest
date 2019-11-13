@extends('layouts.app')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('https://resources.stuff.co.nz/content/dam/images/1/x/6/t/2/i/image.related.StuffLandscapeSixteenByNine.1420x800.1x6jh5.png/1569818371468.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate text-center mb-4">
          <h1 class="mb-2 bread">Gallery</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Menu <i class="ion-ios-arrow-forward"></i></span></p>
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
      <img class="img-fluid" src="https://static01.nyt.com/images/2018/11/14/dining/14HUNGRY-slide-TWXA/14HUNGRY-slide-TWXA-jumbo.jpg" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
      <img class="img-fluid" src="http://d2np4vr8r37sds.cloudfront.net/31457-Kepakchi-REP-Pork-momo-researchingparis.wordpress.jpg" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
      <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIbX7ktVxYn1FpxJncE4oZ-wcxO8zLy9VHXAcnZddi9ceU9pGf&s" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 2">
      <img class="img-fluid" src="https://images1.dallasobserver.com/imager/u/original/11557554/peak_chilimomo_alisonmclean_01.jpg" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 2">
      <img class="img-fluid" src="https://www.tripsavvy.com/thmb/4heCW6-mOwU6687urIpgwDCXniI=/705x496/filters:no_upscale():max_bytes(150000):strip_icc()/momoiam-5953f91d3df78c1d429b1d85.jpg" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
      <img class="img-fluid" src="https://res.cloudinary.com/swiggy/image/upload/f_auto,q_auto,fl_lossy/noo5hybllorl3hycvxqr" alt="Card image cap">
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