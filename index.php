<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"> </script>
  <script src="https://kit.fontawesome.com/467cb691e7.js" crossorigin="anonymous"></script>
  <title>e-Learn</title>
</head>

<body>

  <!-- navigation start -->
  <?php
  include("DB/dbConnection.php");
  include("Nav.php");
  ?>
  <!-- navigation end -->
  <div class="container-fluid remove-vid-marg">
    <div class="vid-parent ">
      <video playsinline autoplay muted loop>
        <source src="video/banvid.mp4">
      </video>
      <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
      <h1>Welcome to e-Learn</h1>
      <small class="my-content">Learn and Implement</small><br>
      <?php
      if (!isset($_SESSION['is_login'])) {
        echo ' <a href="#" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Get Started</a>';
      } else {
        echo '
          <a href="student/profile.php" class="btn btn-primary mt-3" >My Profile</a>';
      }
      ?>
    </div>
  </div>
  <!-- Viedo background end -->

  <!-- text banner start -->
  <div class="container-fluid bg-danger txt-banner">
    <div class="row bottom-banner">
      <div class="col-sm">
        <h5><i class="fas fa-book-open mr-3"></i>100+ Online Courses</h5>
      </div>
      <div class="col-sm">
        <h5><i class="fas fa-users mr-3"></i>Expert Instructors</h5>
      </div>
      <div class="col-sm">
        <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
      </div>
      <div class="col-sm">
        <h5><i class="fas fa-rupee-sign mr-3"></i>Money Back Guarantee*</h5>
      </div>

    </div>
  </div>

  <!-- text banner end -->
  <!-- courses start -->

  <?php
  include("courseSection.php");
  ?>

  <!-- courses end -->
  <?php require_once "contactus.php";
  include_once("testimonial.php");
  include_once("socialSides.php");
  include_once("aboutFooter.php");
  include("Modal.php");

  ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="js/ajaxrequest.js"></script>
  <script src="Admin/AdminAjax.js"></script>
</body>

</html>