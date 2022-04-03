<?php
if (!isset($_SESSION)) {
    session_start();
}
if(!isset($_SESSION['is_admin'],$_SESSION['adminEmail'])){
    header("refresh:0.001; url=../index.php");
}

include("../DB/dbConnection.php");
include("AdminHeader.php");
?>

<div class="col-sm-9 mt-5 text-center">
    <!-- table -->
    <p class="bg-dark text-white p-2">List of Student</p>
    <?php
        $q="select * from student";
        $result=mysqli_query($con,$q);
        if($result->num_rows>0){
    ?>

    <table class="table">
        <thead>
            <tr>
                <th class="col">Student ID</th>
                <th class="col">Name</th>
                <th class="col">Email</th>
                <th class="col">Action</th>
                
            </tr>
        </thead>
        <tbody>
            <?php while($row=$result->fetch_assoc()){?>
            <tr>
                <th scope="row"><?php echo $row['id'] ?></th>
                <td><?php echo $row["name"]?></td>
                <td><?php echo $row['email']?></td>
                <td>
                    <form action="editStudent.php" class="d-inline" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id']?>">
                        <button type="submit" class="btn btn-primary mr-3"name="submit"value="submit"><i class="fas fa-pen"></i></button>
                    </form>
                    <form action="" class="d-inline" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id']?>">                        
                        <button type="submit" class="btn btn-danger"name="delete" value="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <?php
        }else{
            echo "No Data Found";
            
        }
        if (isset($_POST['delete'])) {
            $q="delete from student where id= {$_REQUEST['id']}";
            if(mysqli_query($con,$q))
            {
                echo '<meta http-equiv="refresh" content"0;URL=?deleted"/>';
               
            }else {
                echo '<script>swal("Oops..", "Something went wrong!", "error")</script>';
               
            }
        }
        
    ?>
</div>
<div>
    <a href="addStudent.php" class="btn btn-danger box"><i class="fas fa-plus fa-2x"></i></a>
</div>

<?php
include("AdminFooter.php");
?>