<?php
$con=mysqli_connect("localhost","root","","e-learn");
if(!$con){
    die("Connectioin Failed");
}

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