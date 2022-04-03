<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js">  </script>
    <script src="https://kit.fontawesome.com/467cb691e7.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-dark fixedtop p-0 shadow" style="background-color: #225470;" >
        <a href="adminDashboard.php" class="navbar-brand col-sm-3 col-md-2 mr-0">E-Learn <small class="text-white">Admin Area</small></a>
    </nav>
    <!-- side bar -->
    <div class="container-fluid mb-5" >
        <div class="row">
            <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="px-2  nav-item">
                            <a href="adminDashboard.php" class="nav-link">
                                <i class="px-2  fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                        <li class="px-2  nav-item">
                            <a href="courses.php" class="nav-link">
                                <i class="px-2  fab fa-accessible-icon"></i>Courses
                            </a>
                        </li>
                        <li class="px-2  nav-item">
                            <a href="Lessons.php" class="nav-link">
                                <i class="px-2  fab fa-accessible-icon"></i>Lessons
                            </a>
                        </li>
                        <li class="px-2  nav-item">
                            <a href="student.php" class="nav-link">
                                <i class="px-2  fas fa-users"></i>Students
                            </a>
                        </li>
                        <li class="px-2  nav-item">
                            <a href="#" class="nav-link">
                                <i class="px-2  fas fa-table"></i>Sell Report
                            </a>
                        </li>
                        <li class="px-2  nav-item">
                            <a href="#" class="nav-link">
                                <i class="px-2  fas fa-table"></i>Payment Status
                            </a>
                        </li>
                        <li class="px-2  nav-item">
                            <a href="#" class="nav-link">
                                <i class="px-2  fab fa-accessible-icon"></i>Feedback
                            </a>
                        </li>
                        <li class="px-2  nav-item">
                            <a href="../logout.php" class="nav-link">
                                <i class="px-2  fas fa-sign-out-alt"></i>Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>