<?php
if (!isset($_SESSION)) {
    session_start();
}
if(!isset($_SESSION['is_admin'],$_SESSION['adminEmail'])){
    header("refresh:0.0011; url=../index.php");
}
include("../DB/dbConnection.php");
include("AdminHeader.php");
$msg_err=$msg="";
if (isset($_POST['update'])) {
    $id=$_POST['ID'];
    $name=$_POST['course_name'];
    $desc=$_POST['course_desc'];
    $Author=$_POST['Author'];
    $duration=$_POST['course_duration'];
    $Oprice=$_POST['original_price'];
    $price=$_POST['price'];
    // $img=$_FILES['course_image']['name'];

    $sql="update course set course_name='$name' , course_desc='$desc' , Author='$Author' , duration='$duration' , price='$price' , orignal_price='$Oprice' where id='$id'";
    if (mysqli_query($con , $sql)==TRUE) {
        echo '<script>swal("Great" ,  "Record Updated Successfully" ,  "success")</script>';    
        header(" location:courses.php")       ;
    }else{
        $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Upadate</div>';
    }
}

if (isset($_POST['submit'])) {
    $q="select * from course where id={$_POST['id']} ";
    $result=mysqli_query($con , $q);
    $row=$result->fetch_assoc();
    

    
?>
<div class="col-sm-5 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Course</h3>
    <form action="editcourse.php" method="post"enctype='multipart/form-data'>
    <div class="form-group">
            <label >Course ID</label>
            <input type="text" class="form-control" value="<?php echo $row['id']?>" name="ID" readonly >
        </div>
        <div class="form-group">
            <label >Course Name</label>
            <input type="text" class="form-control" value="<?php echo $row['course_name']?>" name="course_name" required >
        </div>
        <div class="form-group">
            <label >Course Description</label>
            <textarea type="text" class="form-control" name="course_desc" required row=2><?php echo $row['course_desc']?></textarea>
        </div>
        <div class="form-group">
            <label >Author</label>
            <input type="text" class="form-control" value="<?php echo $row['Author']?>" name="Author" required>
        </div>
        <div class="form-group">
            <label >Course Duration</label>
            <input type="text" class="form-control" name="course_duration" value="<?php echo $row['duration']?>" required>
        </div>
        <div class="form-group">
            <label >Course Original Price</label>
            <input type="number" class="form-control" name="original_price" value="<?php echo $row['orignal_price']?>" required>
        </div>
        <div class="form-group">
            <label >Course Selling Price</label>
            <input type="number" class="form-control" name="price" value="<?php echo $row['price']?>" required>
        </div>
        <div class="form-group">
            <label >Course Image </label><small style="color:red;"><?php echo $msg_err ;?></small>
            <img src="<?php echo '../image/upload/'.$row['course_img']?>"class="img-thumbnail" alt="">
            <input type="File" class="form-control" name="course_img" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success m-3 " id="courseSubmitBtn" name="update">Update</button>
            <a href="courses.php" class="btn btn-danger m-3 ">Close</a>
        </div>
        <?php echo $msg?>        
    </form>
</div>
</div>
</div>
<?php
}

include("AdminFooter.php");
?>