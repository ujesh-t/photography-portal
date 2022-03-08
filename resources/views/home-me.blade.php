<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Trends Films!</title>
  </head>
  <body>
  

  <!--  Nav Bar -->
  <!-- As a link -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <a class="navbar-brand" href="#"><img class="img-logo" src="images/site/logo.png"/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Photos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Artist</a>
        </li>
      </ul>
    </div>

    @if (Route::has('login'))
    <div class="collapse navbar-collapse float-end">
    <ul class="navbar-nav">
      @auth
      <li class="nav-item">
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
      </li>
      @else
      <li class="nav-item"> <a href="{{ route('login') }}" class="nav-link">Log in</a> </li>
        @if (Route::has('register'))
            <li class="nav-item"> <a href="{{ route('register') }}" class="nav-link">Register</a> </li>
        @endif
      @endauth
    </ul>
    </div>
    @endif

    <a href="{{ route('photographer-register') }}" class="btn btn-warning">Become a Photographer</a>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner d-none d-sm-none d-lg-block">
    <div class="carousel-item active">
      <img src="http://placehold.jp/3d4070/ffffff/1600x400.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="http://placehold.jp/ff9999/ffffff/1600x400.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="http://placehold.jp/ffe066/ffffff/1600x400.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <a href="#" class="btn btn-danger btn-lg">Register Now</a>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> <!-- Carousal End -->

<div class="container" style="margin-top:10px;">
    <div class="row">
        <div class="col"><h5>Featured Photos</h5></div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
        <div class="col">
        <div class="card mb-3">
            <img src="images/photos/1122.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Pranav #2231 <span><i class="bi-heart float-end"></i></span></h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
        </div>
        <div class="col">
        <div class="card mb-3">
            <img src="images/photos/1123.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Pranav #2631 <span><i class="bi-heart-fill float-end"></i></span></h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
        </div>
        <div class="col">       
            <div class="card mb-3">
            <img src="images/photos/1124.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Pranav #6331 <span><i class="bi-heart-fill float-end"></i></span></h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div></div>
        <div class="col">       
            <div class="card mb-3">
            <img src="images/photos/1125.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Pranav #2731 <span><i class="bi-heart-fill float-end"></i></span></h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div></div>
    </div>
</div>





 <style>
   .img-logo {
       height: 45px;
   }

   .card-title {
       color:#8080ff;
   }
   i {
       color:#e73232;
   }
 </style>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>