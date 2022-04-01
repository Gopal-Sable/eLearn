<?php
include("../DB/dbConnection.php");
include("AdminHeader.php");
$msg_err=$msg="";
if (isset($_POST['submit'])) {
    $q="select * from course where id={$_POST['id']} ";
    $result=mysqli_query($con,$q);
    if($result->num_rows>0){

    }}
?>
<div class="col-sm-5 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Course</h3>
    <form action="addCourse.php" method="post"enctype='multipart/form-data'>
        <div class="form-group">
            <label >Course Name</label>
            <input type="text" class="form-control" name="course_name" required >
        </div>
        <div class="form-group">
            <label >Course Description</label>
            <textarea type="text" class="form-control" name="course_desc" required row=2></textarea>
        </div>
        <div class="form-group">
            <label >Author</label>
            <input type="text" class="form-control" name="Author" required>
        </div>
        <div class="form-group">
            <label >Course Duration</label>
            <input type="text" class="form-control" name="course_duration" required>
        </div>
        <div class="form-group">
            <label >Course Original Price</label>
            <input type="number" class="form-control" name="original_price" required>
        </div>
        <div class="form-group">
            <label >Course Selling Price</label>
            <input type="number" class="form-control" name="price" required>
        </div>
        <div class="form-group">
            <label >Course Image</label><small style="color:red;"><?php echo $msg_err ;?></small>
            <input type="File" class="form-control" name="course_img" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success m-3 " id="courseSubmitBtn" name="courseSubmitBtn">Submit</button>
            <a href="courses.php" class="btn btn-danger m-3 ">Close</a>
        </div>
        <?php echo $msg?>        
    </form>
</div>
</div>
</div>
<?php
include("AdminFooter.php");
?>