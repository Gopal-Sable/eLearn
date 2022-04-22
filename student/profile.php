<?php
if (!isset($_SESSION)) {
    session_start();
}
include("header/header.php");
include("../DB/dbConnection.php");
if (isset($_SESSION['is_login'])) {
    $mail = $_SESSION['email'];
} else {
    header("refresh:0.001; url=../index.php");
}
$q = "select * from student where email='$mail'";
$result = $con->query($sql);
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $id = $row['id'];
    $name = $row['name'];
    $prof = $row['profession'];
}
?>
<div class="col-sm-6 mt-5">
    <form action="" class="mx-5">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" value="<?php echo $name ?>" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" value="<?php echo $mail ?>" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="">Occupation</label>
            <input type="text" value="<?php echo $prof ?>" class="form-control" readonly>
        </div>
    </form>
</div> 