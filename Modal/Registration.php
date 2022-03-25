<?php
    include("DB/dbConnection.php");
    if (isset($_POST['signup'])) {
        $name=$_POST['studname'];
        $email=$_POST['studemail'];
        $pass=$_POST['pass'];
        if (isset($name)&& isset($email)&&isset($pass)) {
            $q="INSERT INTO student(name,email,pass) values('$name','$email','$pass')";
            $que=mysqli_query($con,$q);
            $query=mysqli_query($con,$q);
            header('location:Login.php');
        }
        else{
            header('location:../index.php');
        }
    }
?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Student Registration</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- registration form start -->
          <form id="registration form" action="Registration.php" method="POST">
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
          <button type="submit" onclick="addUser()"name="signup" class="btn btn-primary">Sign Up</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- registration model end -->