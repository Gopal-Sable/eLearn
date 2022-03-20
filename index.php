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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/467cb691e7.js" crossorigin="anonymous"></script>
  <title>e-Learn</title>
</head>

<body>

  <!-- navigation start -->
  <nav class="fixed-top navbar navbar-expand-sm navbar-dark  pl-5">
    <div class="container-fluid">
      <a class="navbar-brand  " href="index.php">e-Learn</a>
      <span class="navbar-text">Learn and Inplement</span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav  custom-nav pl-5">
          <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item custom-nav-item"><a href="" class="nav-link">Courses</a></li>
          <li class="nav-item custom-nav-item"><a href="" class="nav-link">Payment</a></li>
          <li class="nav-item custom-nav-item"><a href="" class="nav-link">Myprofile</a></li>
          <li class="nav-item custom-nav-item"><a href="" class="nav-link">Logout</a></li>
          <li class="nav-item custom-nav-item"><a href="" class="nav-link">feedback</a></li>
          <li class="nav-item custom-nav-item"><a href="" class="nav-link">contact</a></li>
          <li class="nav-item custom-nav-item"><a href="" class="nav-link">feedback</a></li>
        </ul>
      </div>
    </div>
  </nav>
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
      <a href="#" class="btn btn-danger">Get Started</a>
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
  <div class="container mt-5">
    <h1 class="text-center">Popular Courses</h1>
    <!-- card -->

    <div class="card" style="width: 18rem;">
      <img src="image/1.jpg" class="card-img-top" alt="image/1.jpg">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <!-- card -->
    <div class="card-desk mt4">
      <a href="" style="text-align:left;padding:0px;margin:0px;" class="btn">
        <div class="card">
          <img src="image/1.jpg" alt=" Guitar" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Learn Guitar Easy Way</h5>
            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora temporibus debitis
              atque inventore asperiores quibusdam voluptates reprehenderit nemo possimus optio neque vitae ipsam
              perspiciatis, sit, nesciunt quam dolores, quaerat quisquam.</p>

          </div>
          <div class="card-footer">
            <p class="card-text d-inline">Price:<small>
                <del>&#8377 200</del>
              </small>
              <span class="font-weight-bolder">&#8377 200</span>
            </p><a href="" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
          </div>
        </div>
      </a>
    </div>

    
  </div>


  


  <!-- courses end -->

  <!-- contactus start -->
  <div class="container mt-4" id="Contact">
    <h2 class="text-center mb-4">Contact US</h2>
    <div class="row">
      <form action="" method="post">
        <input type="text"class="form-control" name="name" placeholder="Name"><br>
        <input type="text"class="form-control" name="Subject" placeholder="Subject"><br>
        <input type="email"class="form-control" name="email" placeholder="E-mail"><br>
        <textarea name="message"class="form-control" placeholder="How can we help you?" style="height:150px" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Send" class="btn btn-primary"><br><br>
      </form>
      <div class="col-md-4 stripe text-center">
    <h4>e-Learn</h4>
      <p>e-Learn, <br>
        Near Deogiri College, <br>
        Station Road,Aurangabad <br>
        Maharashtra-431005 <br>
        Phone:+13456879 <br>
        www.e-Learn.com
      </p>
    </div>
    <!-- 1st column end -->
    <!-- <div class="col-md-4 stripe text-white text-center"> -->
   
    </div>
  </div>

  <!-- contactus end -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>