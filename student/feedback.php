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
$q = "select id from student where email='$mail'";
$result = $con->query($q);
$row = $result->fetch_assoc();
$id = $row['id'];

if (isset($_POST['feedBtn'])) {
    $feedback = $_POST['feedback'];
    $sql = "insert into feedback(feedback,stu_id)values('$feedback','$id')";
    if ($con->query($sql)) {
        $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Submitted Successfully</div>';
    }
}
?>
<div class="col-sm-9 mt-5">
    <form action="" class="mx-5" method="post">
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" value="<?php echo $id ?>" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="">Write Feedback</label>
            <textarea name="feedback" class="form-control" row="2"></textarea>
        </div>
        <button type="submit" name="feedBtn" class="btn btn-primary">Submit</button>
        <?php if (isset($msg)) {
            echo $msg;
        } ?>
    </form>
</div>