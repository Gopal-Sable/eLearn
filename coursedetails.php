<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



  <script src="https://kit.fontawesome.com/467cb691e7.js" crossorigin="anonymous"></script>
  <title>e-Learn</title>
</head>

<body>
  <?php
  include("Nav.php");
  include_once("DB/dbConnection.php");
  if (isset($_GET['id'])) {
    $_SESSION['productId'] = $id = $_GET['id'];
    $q = "select * from course where id='$id'";
    $result = $con->query($q);
    $row = $result->fetch_assoc();
  }
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
        <img src="image/upload/<?php echo $row['course_img'] ?>" alt="" srcset="" class="card-img-top">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Course Name:<?php echo $row['course_name'] ?></h5>
          <p class="card-text">Description:<?php echo $row['course_desc'] ?> </p>
          <p class="card-text">Duration: <?php echo $row['duration'] ?></p>
          <form action="checkout.php" method="post">
            <p class="card-text d-inline">Price: <small><del>&#8377 <?php echo $row['orignal_price'] ?> </del> </small><span class="font-weight-bolder">&#8377 <?php echo $row['price'] ?></span></p>
            <input type="hidden" name="checkout" value="<?php echo $row['price'] ?>">
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
            <th scope="col">Lesson No.</th>
            <th scope="col">Lesson Name</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $num = 1;
          $q = "select * from lesson where course_id={$_GET['id']}";
          $result = $con->query($q);
          while ($row = $result->fetch_assoc()) { ?>
            <tr>
              <th scope="row"><?php echo $num ?></th>
              <td><?php echo $row['name'] ?></td>
            <tr><?php $num++;
              } ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- course details end-->

  <?php

  include("aboutFooter.php");

  ?>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</body>

</html>