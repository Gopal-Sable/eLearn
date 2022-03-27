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
  <?php 
    include("Nav.php");
    ?>
    <div class="container-fluid bbg-dark">
        <div class="row">
            <img src="image/course.jpg" alt="courses" style="hieght:500px; width:100%;object-fit:cover;box-shadow:10px;">
        </div>
    </div>
    <?php
    include("Modal.php");
  ?>
  <!-- course details start -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-4">
          <img src="image/1.jpg" alt="" srcset="" class="card-img-top">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Course Name:Learn music</h5>
            <p class="card-text">Description: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id aliquam tempore, esse rerum quam suscipit. </p>
            <p class="card-text">Duration: 10 Days</p>
            <form action="" method="post">
              <p class="card-text d-inline">Price: <small><del>&#8377 2000 </del> </small><span class="font-weight-bolder">&#8377 200</span></p>
              <button class="btn btn-primary text-white font-weight-bolder float-right" name="buy">
                    Buy Now
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
        <div class="row">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">lesson No.</th>
                        <th scope="col">lesson Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Introductioin</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
  <!-- course details end-->

  <?php
  
    include("aboutFooter.php");
   
  ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>


</body>  

</html>
