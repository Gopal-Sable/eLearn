<?php
if (!isset($_SESSION)) {
    session_start();
}
if(!isset($_SESSION['is_admin'],$_SESSION['adminEmail'])){
    header("refresh:0.001; url=../index.php");
}


    include("AdminHeader.php");
    include("../DB/dbConnection.php");
    $msg=$msg_err="";
    if (isset($_POST["courseSubmitBtn"])) {
      if(($_POST["course_name"])==""||($_POST["course_desc"])==""||($_POST["Author"])==""||($_POST["course_duration"])==""||($_POST["original_price"])==""||($_POST["price"])==""){
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2"> Fill All Fields</div>';
      }else{
        $course_name =$_POST["course_name"];
        $course_desc = $_POST["course_desc"];
        $Author =$_POST["Author"];
        $course_duration=$_POST["course_duration"];
        $original_price=$_POST["original_price"];
        $price=$_POST["price"];
        
        // $course_img=$_FILES['course_img']['name'];
        // $temp=$_FILES['course_img']['temp_name'];
        // $img_folder="../image/courseImg/".$course_img;
        // move_uploaded_file($temp,$img_folder);
        $NewImageName= "";
         //image upload
         $output_dir = "../image/upload";/* Path for file upload */
         $RandomNum   = time();
         $ImageName      = str_replace(' ','-',strtolower($_FILES['course_img']['name']));
         $ImageType      = $_FILES['course_img']['type'];
       
         $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
         $ImageExt       = str_replace('.','',$ImageExt);
         $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
         $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
         $ret[$NewImageName]= $output_dir.$NewImageName;
         
         /* Try to create the directory if it does not exist */
               if (!file_exists($output_dir))
               {
                 @mkdir($output_dir, 0777);
               }               
               if(empty($NewImageName)){
                 $msg_err="please upload Image";
               }  
        if (empty($msg_err)) { 
            $sql="insert into course(course_name,course_desc,Author,course_img,duration,price,orignal_price) value('$course_name','$course_desc','$Author','$NewImageName','$course_duration','$price','$original_price')";
            if (mysqli_query($con,$sql)) {
                move_uploaded_file($_FILES["course_img"]["tmp_name"],$output_dir."/".$NewImageName );
                $msg='';
                echo'<script>swal("Good job!", "Course Added Successfully", "success")</script>';
            }else {
                $msg='<div class="alert alert-warning alert-dismissible col-sm-6 ml-5 mt-2"> Something Went Wrong!</div>';
            }
        }
      }
    }
    mysqli_close($con);
?>
<div class="col-sm-5 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Course</h3>
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