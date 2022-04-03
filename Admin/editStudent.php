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
    $name =$_POST["name"];
    $email = $_POST["email"];
    $pass =$_POST["pass"];
    $occupation=$_POST["occupation"];

    $sql="update student set name='$name' , pass='$pass' , email='$email',profession='$occupation' where id='$id'";
    if (mysqli_query($con , $sql)) {
        echo '<script>swal("Great" ,  "Record Updated Successfully" ,  "success")</script>';    
        header(" location:courses.php")       ;
    }else{
        $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Upadate</div>';
    }
}

if (isset($_POST['submit'])) {
    $q="select * from student where id={$_POST['id']} ";
    $result=mysqli_query($con , $q);
    $row=$result->fetch_assoc();
    

    
?>
<div class="col-sm-5 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Student Info</h3>
    <form action="editStudent.php" method="post" enctype='multipart/form-data'>
    <div class="form-group">
            <label >Student ID</label>
            <input type="text" class="form-control" value="<?php echo $row['id']?>" name="ID" readonly >
        </div>
        <div class="form-group">
            <label >Student Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $row['name']?>" required >
        </div>
      
        <div class="form-group">
            <label >Email</label>
            <input type="email" class="form-control" name="email" value="<?php echo $row['email']?>" required>
        </div>
        <div class="form-group">
            <label >Password</label>
            <input type="password" class="form-control" name="pass" value="<?php echo $row['pass']?>" required>
        </div>
         <div class="form-group">
            <label >Occupation</label>
            <input type="text" class="form-control" name="occupation" value="<?php echo $row['profession']?>" required>
        </div>
        
        <div class="text-center">
            <button type="submit" class="btn btn-success m-3 " id="SubmitBtn" name="update">Update</button>
            <a href="student.php" class="btn btn-danger m-3 ">Close</a>
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