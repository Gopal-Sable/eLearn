<?php include_once("DB/dbConnection.php"); ?>
<div class="container mt-5">
  <h1 class="text-center">Popular Courses</h1>
  <div class="row">
    <?php
    // $q="select * from course LIMIT 3";
    $q = "select * from course ";
    $result = $con->query($q);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {

        echo '  
        <div class="card m-2" style="width: 18rem;">
          <img src="image/upload/' . $row['course_img'] . '" class="card-img-top" alt="image/1.jpg">
          <div class="card-body">
            <h5 class="card-title">' . $row['course_name'] . '</h5>
            <p class="card-text">' . $row['course_desc'] . '</p>
            <p class="card-text"><small class="text-muted"> - ' . $row["Author"] . ' </small></p>
                       
            <p class="card-text d-inline">Price:<small>
                <del>&#8377 ' . $row['orignal_price'] . '</del>
              </small>
              <span class="font-weight-bolder">&#8377  ' . $row['price'] . '</span>
            </p>
            <a href="coursedetails.php?id=' . $row['id'] . '" class="btn btn-primary">Enroll</a>
          </div>
          </div>  
 ';
      }
    }
    ?>
  </div>
</div>