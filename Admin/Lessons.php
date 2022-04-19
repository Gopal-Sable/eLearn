<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['is_admin'], $_SESSION['adminEmail'])) {
    header("refresh:0.001; url=../index.php");
}
include("AdminHeader.php");
include("../DB/dbConnection.php");

?>
<div class="col-sm-9 mt-5 mx-3">
    <form action="" class="mt-3 form-inline d-print-none" method="post">
        <div class="form-group mr-3 col-sm-3">
            <label for="">Enter Course ID:</label>
            <input type="text" class="form-control ml-3 " id="checkid" name="checkid">
        </div>
        <button type="submit" class=" btn btn-primary">Search</button>
    </form>


    <?php
    $sql = "select id from course";
    $result = $con->query($sql);
    while ($row = $result->fetch_assoc()) {
        if (isset($_REQUEST['checkid']) && $_REQUEST['checkid'] == $row['id']) {
            $q = "select * from course where id={$_REQUEST['checkid']}";
            $result = $con->query($q);
            $row = $result->fetch_assoc();
            if ($_REQUEST['checkid'] == $row['id']) {

                $_SESSION['course_id'] = $row['id'];
                $_SESSION['course_name'] = $row['course_name'];

                echo "<h3 class='mt-5  bg-dark text-white p-2'>Course ID:  " . $row['id'] . " Course Name: " . $row['course_name'] . "</h3>  ";
                $q = "select * from lesson where course_id={$_REQUEST['checkid']}";
                 $result = $con->query($q);
                ?>
                
                <div>
                    <a href='addLessons.php' class='btn btn-danger box'> <i class='fas fa-plus fa-2x'></i> </a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col">Lesson ID</th>
                            <th class="col">Name</th>
                            <th class="col">Description</th>
                            <th class="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row= $result->fetch_assoc()) { ?>
                            <tr>
                                <th scope="row"><?php echo $row['id'] ?></th>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['lesson_desc'] ?></td>
                                <td>
                                    <form action="editLessons.php" class="d-inline" method="post">
                                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                        <button type="submit" class="btn btn-primary mr-3" name="submit" value="submit"><i class="fas fa-pen"></i></button>
                                    </form>
                                    <form action="" class="d-inline" method="post">
                                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                        <button type="submit" class="btn btn-danger" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <?php
            }
        } else {
            echo "data not found";
        }
    }
    if (isset($_POST['delete'])) {
        $q="delete from lesson where id= {$_REQUEST['id']}";
        if(mysqli_query($con,$q))
        {
            echo '<meta http-equiv="refresh" content"0;URL=?deleted"/>';  
        }else {
            echo '<script>swal("Oops..", "Something went wrong!", "error")</script>';
           
        }
    }
    

    include("AdminFooter.php");
    ?>
</div>