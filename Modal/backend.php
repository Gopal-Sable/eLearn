<?php
if (!isset($_SESSION)) {
  session_start();
}
$con=mysqli_connect("localhost","root","","e-learn");
if(!$con){
    die("Connectioin Failed");
}

//email validate already exist
if (isset($_POST['checkemail'],$_POST['studemail'])) {
  $mail=$_POST['studemail'];
  $q="select email from student where email='".$mail."'";
  $result=$con->query($q);
  $row =$result->num_rows;
  echo json_encode($row);
}
//insert student

 if(isset($_POST['signup']) && isset($_POST['studname']) && isset($_POST['studemail']) &&isset($_POST['pass']) )
 {
    $studname=$_POST['studname'];
    $studemail=$_POST['studemail'];
    $pass=$_POST['pass'];
    $q="INSERT INTO student(name,email,pass) VALUES('$studname','$studemail','$pass')";
    if($con->query($q)==TRUE){
      echo json_encode("ok");
    }
    else{
        echo json_encode("failed");
    }

 }

//student login verification
if(!isset($_SESSION['is_login'])){
  if (isset($_POST["email"],$_POST["pass"])) {
    $email=$_POST["email"];
    $pass=$_POST["pass"];

    $sql="select email,pass from student where email='".$email."' AND pass='".$pass."'";
    $result = $con->query($sql);
    $row=$result->num_rows;
    if($row === 1){
      $_SESSION['is_login']=true;
      $_SESSION['email']=$email;
      echo json_encode($row);

    }else if($row === 0){
      echo json_encode($row);
    }
  }
}
?>
