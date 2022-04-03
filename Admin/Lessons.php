<?php
if (!isset($_SESSION)) {
    session_start();
}
if(!isset($_SESSION['is_admin'],$_SESSION['adminEmail'])){
    header("refresh:0.001; url=../index.php");
}
include("AdminHeader.php");
include("../DB/dbConnection.php");

?>
<div class="col-sm-9 mt-5 mx-3">
    <form action=""class="mt-3 form-inline d-print-none" method="post">
        <div class="form-group mr-3 col-sm-3">
            <label for="">Enter Course ID:</label>
            <input type="text" class="form-control ml-3 " id="checkid" name="checkid">
        </div>
        <button type="submit" class=" btn btn-primary">Search</button>
       </form> 
    

<?php
$sql="select id from course";
$result=$con->query($sql);
while($row=$result->fetch_assoc())
{
    if(isset($_REQUEST['checkid'])&&$_REQUEST['checkid']==$row['id'])
    {
        $q="select * from course where id={$_REQUEST['checkid']}";
        $result=$con->query($q);
        $row=$result->fetch_assoc();
        if($_REQUEST['checkid']==$row['id']){
       
        echo "<h3 class='mt-5  bg-dark text-white p-2'>Course ID:  ". $row['id'] ." Course Name: ".$row['course_name']."</h3>";
        
    }}else{
        echo "data not found";
    }
}

include("AdminFooter.php");
?>
</div>
<div>
    <a href="addLessons.php" class="btn btn-danger box"> <i class="fas fa-plus fa-2x"></i> </a>
</div>