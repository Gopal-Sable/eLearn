<?php
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

?>