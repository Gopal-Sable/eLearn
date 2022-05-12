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
<div class="container mt-5ml-4">
    <div class="row">
        <div class="jumbotron">
            <h4 class="text-center">All Course</h4>
            <?php
            if (isset($mail)) {
                $q="select o.txn_id,c.id,c.course_id,c.duration,c.course_desc,c.course_img,c.Author,c.original_price,c.price from payment AS o JOIN course AS c ON c.id=o.course_id where o.stud_id='$mail'";
                $result=$con->query($sql);
                if ($result->num_rows>0) {
                    while($row=$result->fetch_assoc()){
                        
                    }
                }
            }
            ?>
        </div>
    </div>
</div>