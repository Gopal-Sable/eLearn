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
  <div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form action="" method="post">
      <div class="form-group row">
        <label for="" class="offset-sm-3 col-form-label">Order ID:</label>
        <div>
          <input type="text" name="txn_id" id="" class="form-control mx-3">
        </div>
        <div>
          <input type="submit" value="View" class="btn btn-primary m-4">
        </div>
      </div>
    </form>
  </div>

  <?php
  echo '<div class="container">';
  include("contactus.php");
  echo "</div>";
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
