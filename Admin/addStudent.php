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
    if (isset($_POST["SubmitBtn"])) {
      if(($_POST["name"])==""||($_POST["email"])==""||($_POST["pass"])==""||($_POST["occupation"])==""){
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2"> Fill All Fields</div>';
      }else{
        $name =$_POST["name"];
        $email = $_POST["email"];
        $pass =$_POST["pass"];
        $occupation=$_POST["occupation"];
        $sql="insert into student(name,email,pass,profession) value('$name','$email','$pass','$occupation')";
        if (mysqli_query($con,$sql)) {
            $msg='';
            echo'<script>swal("Good job!", "Student Added Successfully", "success")</script>';
        }else {
            $msg='<div class="alert alert-warning alert-dismissible col-sm-6 ml-5 mt-2"> Something Went Wrong!</div>';
        }
    
      }
    }
    mysqli_close($con);
?>
<div class="col-sm-5 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Student</h3>
    <form action="addStudent.php" method="post"enctype='multipart/form-data'>
        <div class="form-group">
            <label >Student Name</label>
            <input type="text" class="form-control" name="name" required >
        </div>
      
        <div class="form-group">
            <label >Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label >Password</label>
            <input type="password" class="form-control" name="pass" required>
        </div>
         <div class="form-group">
            <label >Occupation</label>
            <input type="text" class="form-control" name="occupation" required>
        </div>
        
        <div class="text-center">
            <button type="submit" class="btn btn-success m-3 " id="SubmitBtn" name="SubmitBtn">Submit</button>
            <a href="student.php" class="btn btn-danger m-3 ">Close</a>
        </div>
        <?php echo $msg?>        
    </form>
</div>
</div>
</div>
<?php
    include("AdminFooter.php");
?>