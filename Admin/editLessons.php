<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['is_admin'], $_SESSION['adminEmail'])) {
    header("refresh:0.0011; url=../index.php");
}
include("../DB/dbConnection.php");
include("AdminHeader.php");
$msg_err = $msg = "";
if (isset($_POST['update'])) {
    $id = $_POST['ID'];
    $name = $_POST['name'];
    $desc = $_POST['lesson_desc'];


    $sql = "update lesson set name='$name' , course_desc='$desc' , Author='$Author' , duration='$duration' , price='$price' , orignal_price='$Oprice' where id='$id'";
    if (mysqli_query($con, $sql) == TRUE) {
        echo '<script>swal("Great" ,  "Record Updated Successfully" ,  "success")</script>';
        header(" location:courses.php");
    } else {
        $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Upadate</div>';
    }
}

if (isset($_POST['submit'])) {
    $q = "select * from lesson where id={$_POST['id']} ";
    $result = mysqli_query($con, $q);
    $row = $result->fetch_assoc();



?>
    <div class="col-sm-5 mt-5 mx-3 jumbotron">
        <h3 class="text-center">Update Lesson</h3>
        <form action="editcourse.php" method="post" enctype='multipart/form-data'>
            <div class="form-group">
                <label>Lesson ID</label>
                <input type="text" class="form-control" value="<?php echo $row['id'] ?>" name="ID" readonly>
            </div>
            <div class="form-group">
                <label>Lesson Name</label>
                <input type="text" class="form-control" value="<?php echo $row['name'] ?>" name="name" required>
            </div>
            <div class="form-group">
                <label>Lesson Description</label>
                <textarea type="text" class="form-control" name="desc" required row=2><?php echo $row['lesson_desc'] ?></textarea>
            </div>

            <div class="form-group">
                <label>Lesson Video Link </label><small style="color:red;"><?php echo $msg_err; ?></small>
                <video src="<?php echo $row['link'] ?>" class="img-thumbnail" alt="">
                    <input type="File" class="form-control" name="link" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success m-3 " id="courseSubmitBtn" name="update">Update</button>
                <a href="courses.php" class="btn btn-danger m-3 ">Close</a>
            </div>
            <?php echo $msg ?>
        </form>
    </div>
    </div>
    </div>
<?php
}

include("AdminFooter.php");
?>