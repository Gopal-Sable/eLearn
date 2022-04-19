<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['is_admin'], $_SESSION['adminEmail'])) {
    header("refresh:0.001; url=../index.php");
}


include("AdminHeader.php");
include("../DB/dbConnection.php");
$msg = $msg_err = "";
if (isset($_POST["SubmitBtn"])) {
    if (($_POST["name"]) == "" || ($_POST["desc"]) == "") {
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2"> Fill All Fields</div>';
    } else {
        $name = $_POST["name"];
        $desc = $_POST["desc"];
        $cid = $_SESSION['course_id'];
        $cname =  $_SESSION['course_name'];
        $link = $_FILES["link"]['name'];
        $link_temp = $_FILES['link']['tmp_name'];
        $folder = '../image/upload/' . $link;
        move_uploaded_file($link_temp, $folder);

        $sql = "insert into lesson(name,lesson_desc,link,course_id,course_name) value('$name','$desc','$folder','$cid','$cname')";
        if (mysqli_query($con, $sql)) {
            $msg = '';
            echo '<script>swal("Good job!", "Student Added Successfully", "success")</script>';
        } else {
            $msg = '<div class="alert alert-warning alert-dismissible col-sm-6 ml-5 mt-2"> Something Went Wrong!</div>';
        }
    }
}
mysqli_close($con);
?>
<div class="col-sm-5 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Lesson</h3>
    <form action="addLessons.php" method="post" enctype='multipart/form-data'>
        <div class="form-group">
            <label>Course ID</label>
            <input type="text" class="form-control" name="course_id" value="<?php echo $_SESSION['course_id'] ?>" readonly>
        </div>
        <div class="form-group">
            <label>Course Name</label>
            <input type="text" class="form-control" name="c_name" value="<?php echo $_SESSION['course_name'] ?>" readonly>
        </div>
        <div class="form-group">
            <label>Lesson Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="desc" class="form-control" rows="2" required></textarea>
        </div>
        <div class="form-group">
            <label>Lesson Video link</label>
            <input type="file" class="form-control" name="link" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success m-3 " id="SubmitBtn" name="SubmitBtn">Submit</button>
            <a href="Lessons.php" class="btn btn-danger m-3 ">Close</a>
        </div>
        <?php echo $msg ?>
    </form>
</div>
</div>
</div>
<?php
include("AdminFooter.php");
?>