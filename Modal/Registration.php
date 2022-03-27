<?php

?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Student Registration</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- registration form start -->
          <form id="registration" action="" method="POST">
            <div class="form-group">
              <i class="fas fa-user"></i>
              <label for="studname" class="pl-2 font-weight-bold">Name</label><small id="Msg1"></small>
              <input type="text" class="form-control" id="studname" name="studname" required placeholder="Name">
            </div>
            <div class="form-group">
              <i class="fas fa-envelope"></i>
              <label for="stuemail" class="pl-2 font-weight-bold">Email</label><small id="Msg2"></small>
              <input type="email" class="form-control" id="studemail" name="studemail"required placeholder="Email">
              <small class="form-text">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <i class="fas fa-key"></i>
              <label for="pass" class="pl-2 font-weight-bold">New Password</label><small id="Msg3"></small>
              <input type="password" class="form-control" id="pass" name="pass" autocomplete="off" required>
            </div>
            
          </form>
            <!-- registration form end -->
          </div>
          <div class="modal-footer">
            <span id="SuccessMsg"></span>
            <button type="submit" name="done" onclick="addUser()" class="btn btn-primary">Sign Up</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
  <!-- registration model end -->