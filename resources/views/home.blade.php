@extends("master")

@section("content")


<div class="custom-carousel">

<div class="col-sm-12">

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
    
  </div>

  <!-- The slideshow/carousel -->

  <div class="carousel-inner">

  <div class="carousel-item active">
      <img src="https://www.spart5.net/cms/lib/SC01000802/Centricity/Domain/308/IMG_7392.jpg" class="d-block w-100" height="300px">
    </div>
    
    <div class="carousel-item">
      <img src="https://assets.penguinrandomhouse.com/wp-content/uploads/2021/10/29003902/PRH_BiggestBooks_Dec__1200x628-mobile_HPmodule.jpg" class="d-block w-100" height="300px">
    </div>
    <div class="carousel-item">
      <img src="https://assets.penguinrandomhouse.com/wp-content/uploads/2022/03/28133404/PRH_April-Big-Books_1200x628-mobile-header.jpg" class="d-block w-100" height="300px">
    </div>
    <div class="carousel-item">
      <img src="https://images.gr-assets.com/misc/1650576655-1650576655_goodreads_misc.png" class="d-block w-100" height="300px">
    </div>
    <div class="carousel-item">
      <img src="https://blog.wob.com/wp-content/uploads/2022/06/Webp.net-resizeimage-5.png" class="d-block w-100" height="300px">
    </div>
    <div class="carousel-item">
      <img src="https://m.media-amazon.com/images/I/71emzHoA17L._SL1500_.jpg" class="d-block w-100" height="300px">
    </div>
  </div>


  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
  
</div>
</div>

