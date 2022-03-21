<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



  <script src="https://kit.fontawesome.com/467cb691e7.js" crossorigin="anonymous"></script>
  <title>e-Learn</title>
</head>

<body>

  <!-- navigation start -->
 <?php
 include("Nav.php");
 ?>
  <!-- navigation end -->

  <!-- Viedo background start -->

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
      <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Get Started</a>
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
include("courses.php");
?>

  <!-- courses end -->
<?php require_once "contactus.php";
include_once("testimonial.php");
include_once("socialSides.php");
include_once("aboutFooter.php");

?>
  <!-- contactus start -->
  

  <!-- contactus end -->
  <!-- testimonial start -->
  
  <!-- testimonial end -->
  <!-- social sides start -->
  
  <!-- social sides end -->
  <!-- about start -->
 
  
  <!-- about end -->
  <!-- registration model -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Student Registration</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- registration form start -->
          <form id="registration form">
            <div class="form-group">
              <i class="fas fa-user"></i>
              <label for="studname" class="pl-2 font-weight-bold">Name</label>
              <input type="text" class="form-control" id="studname" name="studname" placeholder="Name">
            </div>
            <div class="form-group">
              <i class="fas fa-envelope"></i>
              <label for="stuemail" class="pl-2 font-weight-bold">Email</label>
              <input type="email" class="form-control" id="studemail" name="studemail" placeholder="Email">
              <small class="form-text">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <i class="fas fa-key"></i>
              <label for="pass" class="pl-2 font-weight-bold">New Password</label>
              <input type="password" class="form-control" id="pass" name="pass">
            </div>
          </form>
          <!-- registration form end -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Sign Up</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- registration model end -->
  <!-- login Modal -->
  <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="LoginModalLabel">Student Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- login form start -->
          <form id="loginform">
            <div class="form-group">
              <i class="fas fa-envelope"></i>
              <label for="stuemail" class="pl-2 font-weight-bold">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <i class="fas fa-key"></i>
              <label for="pass" class="pl-2 font-weight-bold">Password</label>
              <input type="password" class="form-control" id="lpass" name="lpass">
            </div>
          </form>
          <!-- Login form end -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="loginbtn">Login</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancle</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Login model end -->


  <!-- Admin Modal -->
  <div class="modal fade" id="AdminModal" tabindex="-1" aria-labelledby="AdminModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="AdminModalLabel">Admin Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- login form start -->
          <form id="loginform">
            <div class="form-group">
              <i class="fas fa-envelope"></i>
              <label for="stuemail" class="pl-2 font-weight-bold">Email</label>
              <input type="email" class="form-control" id="Adminemail" name="Adminemail" placeholder="Email">
            </div>
            <div class="form-group">
              <i class="fas fa-key"></i>
              <label for="pass" class="pl-2 font-weight-bold">Password</label>
              <input type="password" class="form-control" id="Adminpass" name="Adminpass">
            </div>
          </form>
          <!-- Login form end -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="Adminbtn">Login</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancle</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Admin model end -->


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

</body>

</html>