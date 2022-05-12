<?php
    if(!isset($_SESSION)){
        session_start();
    }
    include("./header/header.php");
    include_once("../DB/dbConnection.php");
    if(isset($_SESSION['is_login'])){
        $mail=$_SESSION['email'];
    }else{
        header("location:../index.php");
    }
?>
<div class="col-sm-9 container mt-5 ml-4">
    <div class="row">
        <div class="jumbotron">
            <h4 class="text-center">All Course</h4>
            <?php
            if (isset($mail)) {
                $q="SELECT o.txn_id,c.id,c.course_name,c.duration,c.course_desc,c.course_img,c.Author,c.original_price,c.price FROM payment AS o JOIN course AS c ON c.id=o.course_id where o.stud_id='$mail'";
                $result=$con->query($sql);
                if ($result->num_rows>0) {
                    while($row=$result->fetch_assoc()){?>
                        <div class="bg-light mb-3">
                            <h5 class="car-header"><?php echo $row['course_name']?></h5>
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="image/upload/<?php echo $row['course_img']?>" class="card-img-top mt-4" alt="img">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="card-body">
                                        <p class="card-title"><?php echo $row['course_desc']?></p>
                                        <small class="card-text">Duration:<?php echo $row['duration']?></small><br>
                                        <small class="card-text">Instructor:<?php echo $row['Author']?></small><br>
                                        <a href="watchcourse.php?cid=<?php echo$row["course_id"]?>" class="btn btn-primary mt-5 float-right">Start Learning</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                }
            }
            ?>
        </div>
    </div>
</div>
<?php
include_once("./header/footer.php")
?>