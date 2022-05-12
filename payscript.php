
<?php
include_once("DB/dbConnection.php");
// if (isset($_POST['payment_id'],$_POST['ant'],$_POST['name'])) {
$name = $_POST['name'];
$amt = $_POST['amt'];
$status = "completed";
$payid = $_POST['payment_id'];
$time = date('y-m-d h:i:s');
$stud = $_POST['stud'];
$course = $_POST['course'];
echo $name . $amt . $status . $payid . $time . $stud . $course;
//    $q="insert into payment(name,status,amount,added_on,txn_id) values('$name','$status','$amt','$time','$payid')";
//    mysqli_query($con,$q);
// }
?>