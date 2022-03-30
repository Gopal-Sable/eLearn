<?php
if (!isset($_SESSION)) {
    session_start();
  }
  $con=mysqli_connect("localhost","root","","e-learn");
  if(!$con){
      die("Connectioin Failed");
  }
//Admin login verification
if(!isset($_SESSION['is_admin'])){
    if (isset($_POST["email"],$_POST["pass"])) {
      $email=$_POST["email"];
      $pass=$_POST["pass"];
  
      $sql="select admin_email,admin_pass from Admin where admin_email='".$email."' AND admin_pass='".$pass."'";
      $result = $con->query($sql);
      $row=$result->num_rows;
      if($row === 1){
        $_SESSION['is_admin']=true;
        $_SESSION['adminEmail']=$email;
        echo json_encode($row);
  
      }else if($row === 0){
        echo json_encode($row);
      }
    }
  }
?>