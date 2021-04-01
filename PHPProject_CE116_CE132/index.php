<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Online FeedBack Form</title>
  </head>
  <body>

    <?php  include 'partials/_header.php'; ?>

    <!-- Slider starts -->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slider-2.jfif" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1><u>University FeedBack Form</u></h1>
        <h4><i>Your Passion is our Satisfaction</i></h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slider-3.jfif" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slider-1.jfif" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
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
</div>

<div class="card text-center container my-5">
        <div class="card-header my-3">
        </div>
        <div class="card-body ">
            <h5 class="card-title">View FeedBacks of Students</h5>
            <p class="card-text">Get reviews of students who gained experience about their universities.</p>
            <a href="comments.php" class="btn btn-outline-danger">View FeedBack</a>
        </div>
        <div class="card-footer text-muted my-3">
        </div>
    </div>

<div class="bg-dark text-secondary px-4 py-5  text-center">
<div class="py-5">

    <img src="img/aboutus.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">

  <h1 class="display-5 fw-bold text-white"><i><u>ABOUT US</u></i></h1>
  <div class="col-lg-6 mx-auto">
    <p class="fs-5 mb-4">The Opening of this University FeedBack System was to give to the point overview about all the universities and colleges and to give a comparison over the Performance, Campus and Faculty Management of their respective firm.</p>
  </div>

</div>
</div>

    <?php  include 'partials/_footer.php'; ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
