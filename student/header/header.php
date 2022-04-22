<?php
include_once('../DB/dbConnection.php');
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['is_login'])) {
    $Email = $_SESSION['email'];
}
if (isset($Email)) {
    $sql = "select * from student where email='$Email'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    $img = $row['img'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"> </script>
    <script src="https://kit.fontawesome.com/467cb691e7.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background-color:#225470;">
        <a href="profile.php" class="navbar-brand col-sm-3 col-md-2 mr-0">eLearn</a>
    </nav>
    <div style="margin-top:40px;" class="container-fluid mb-5">
        <div class="row">
            <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-3">
                            <img src="" alt="">
                        </li>
                        <li class="nav-item">
                            <a href="profile.php" class="nav-link">
                                <i class="fas fa-user"></i>Profile <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="myCourse.php" class="nav-link">
                                <i class="fab fa-accessible-icon"></i>My Courses
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="feedback.php" class="nav-link">
                                <i class="fab fa-accessible-icon"></i>Feedback
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="../logout.php" class="nav-link">
                                <i class="fas fa-sign-out-alt"></i>Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>