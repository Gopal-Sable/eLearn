<?php
// // session_start();

// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//     header("location: b.php");
//     exit;
// }
// // Include config file
// require_once "../DB/dbConnection.php";
 
// // Define variables and initialize with empty values
// $email = $password = "";
// $email_err = $password_err = $login_err = "";
// if($_SERVER["REQUEST_METHOD"] == "POST"){
 
//     // Check if email is empty
//     if(empty(trim($_POST["email"]))){
//         $email_err = "Please enter email.";
//     } else{
//         $email = trim($_POST["email"]);
//     }
    
//     // Check if password is empty
//     if(empty(trim($_POST["lpass"]))){
//         $password_err = "Please enter your password.";
//     } else{
//         $password = trim($_POST["lpass"]);
//     }
    
//     // Validate credentials
//     if(empty($email_err) && empty($password_err)){
//         // Prepare a select statement
//         $sql = "SELECT id, email, pass FROM student WHERE email = ?";
        
//         if($stmt = mysqli_prepare($con, $sql)){
//             // Bind variables to the prepared statement as parameters
//             mysqli_stmt_bind_param($stmt, "s", $param_username);
            
//             // Set parameters
//             $param_username = $email;
            
//             // Attempt to execute the prepared statement
//             if(mysqli_stmt_execute($stmt)){
//                 // Store result
//                 mysqli_stmt_store_result($stmt);
                
//                 // Check if email exists, if yes then verify password
//                 if(mysqli_stmt_num_rows($stmt) == 1){                    
//                     // Bind result variables
//                     mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
//                     if(mysqli_stmt_fetch($stmt)){
//                         if(password_verify($password, $hashed_password)){
                             
                           
//                             // Password is correct, so start a new session
//                             session_start();
                            
//                             // Store data in session variables
//                             $_SESSION["loggedin"] = true;
//                             $_SESSION["id"] = $id;
//                             $_SESSION["email"] = $email;
                         

//                             // Redirect user to welcome page
                            
//                             header("location: b.php");
                            
//                         } else{
//                             // Password is not valid, display a generic error message
//                             $login_err = "Invalid email or password.";
//                         }
//                     }
//                 } else{
//                     // Username doesn't exist, display a generic error message
//                     $login_err = "Invalid email or password.";
//                 }
//             } else{
//                 echo "Oops! Something went wrong. Please try again later.";
//             }

//             // Close statement
//             mysqli_stmt_close($stmt);
//         }
//     }
//     // Close connection
//     mysqli_close($con);
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>LOGIN</h2>       
        </div>    
        <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>"  method="post" >
       <div>
       <?php 
            if(!empty($login_err)){
                echo '<div style="color:red" >' . $login_err . '</div>';
            }        
            ?>
 
 <!-- login Modal -->
 <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="LoginModalLabel">Student Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="loginform" action="Modal/Login.php" method="post">
        <div class="modal-body">
          <!-- login form start -->
            <div class="form-group">
              <i class="fas fa-envelope"></i>
              <label for="stuemail" class="pl-2 font-weight-bold">Email</label>
              <input type="email" class="form-control" id="email" name="email" required placeholder="Email">
            </div>
            <div class="form-group">
              <i class="fas fa-key"></i>
              <label for="pass" class="pl-2 font-weight-bold">Password</label>
              <input type="password" class="form-control" id="lpass" autocomplete="off" name="lpass" required>
            </div>
            <!-- Login form end -->
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" id="loginbtn">Login</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancle</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Login model end -->