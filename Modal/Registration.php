<?php
    $con=mysqli_connect("localhost","root","","e-learn");
	if(!$con){
		die("Connectioin Failed");
	}
	$name=$email=$pass="";
    if (isset($_POST['done'])) {    
        $name=$_POST['studname'];
        $email=$_POST['studemail'];
        $pass=$_POST['pass'];
        if (isset($name)&& isset($email)&&isset($pass)) {
            $q="INSERT INTO student(name,email,pass) values('$name','$email','$pass')";
            // $que=mysqli_query($con,$q);
            $query=mysqli_query($con,$q);
			// echo "<script> alert('Rgistration Successful')</script>";
			?>
			 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
			 	swal("Good job!", "You clicked the button!", "success");
         console.log("ckljdkf");
			 </script>
			//
			<?php

			// echo '<script>swal("Good job!", "You clicked the button!", "success")</script>';
		   header("refresh:0.1; url=../index.php"); 
        }
        else{
			echo "Something went wrong please try later";
        }
    }

mysqli_close($con);
?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Student Registration</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
		<form id="registration form" action="Modal/Registration.php" method="POST">
        <div class="modal-body">
          <!-- registration form start -->
            <div class="form-group">
              <i class="fas fa-user"></i>
              <label for="studname" class="pl-2 font-weight-bold">Name</label>
              <input type="text" class="form-control" id="studname" name="studname" required placeholder="Name">
            </div>
            <div class="form-group">
              <i class="fas fa-envelope"></i>
              <label for="stuemail" class="pl-2 font-weight-bold">Email</label>
              <input type="email" class="form-control" id="studemail" name="studemail"required placeholder="Email">
              <small class="form-text">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <i class="fas fa-key"></i>
              <label for="pass" class="pl-2 font-weight-bold">New Password</label>
              <input type="password" class="form-control" id="pass" name="pass" required>
            </div>
			
			<!-- registration form end -->
        </div>
        <div class="modal-footer">
			<button type="submit" name="done" class="btn btn-primary">Sign Up</button>
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
	</form>
      </div>
    </div>
  </div>
  <!-- registration model end -->