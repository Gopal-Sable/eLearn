<nav class="fixed-top navbar navbar-expand-sm navbar-dark bg-dark pl-5">
  <div class="container-fluid">
    <a class="navbar-brand  " href="index.php">e-Learn</a>
    <span class="navbar-text">Learn and Inplement</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav  custom-nav pl-5">
        <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">HOME</a></li>
        <li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">COURSES</a></li>
        <li class="nav-item custom-nav-item"><a href="paymentstatus.php" class="nav-link">PAYMENT STATUS</a></li>
        <?php
        session_start();
        if (isset($_SESSION['is_login'])) {

          echo '<li class="nav-item custom-nav-item" ><a href="student/profile.php" class="nav-link">MY PROFILE</a></li>
             <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">LOGOUT</a></li>';
        } else {
          echo '
          <li class="nav-item custom-nav-item" id="signupNav"><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"
          class="nav-link">SINGUP</a></li>
           <li class="nav-item custom-nav-item" id="loginNav"><a href="" data-bs-toggle="modal" data-bs-target="#LoginModal"
          class="nav-link">LOGIN</a></li>';
        }
        ?>

        <li class="nav-item custom-nav-item"><a href="" class="nav-link">CONTACT US</a></li>
        <li class="nav-item custom-nav-item"><a href="" class="nav-link">FEEDBACK</a></li>
      </ul>
    </div>
  </div>
</nav>