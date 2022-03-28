 
 <!-- login Modal -->
 <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="LoginModalLabel">Student Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="loginform" action="" method="post">
            <div class="form-group">
              <i class="fas fa-envelope"></i>
              <label for="stuemail" class="pl-2 font-weight-bold">Email</label>
              <input type="email" class="form-control" id="email" name="email" required placeholder="Email">
            </div>
            <div class="form-group">
              <i class="fas fa-key"></i>
              <label for="pass" class="pl-2 font-weight-bold">Password</label>
              <input type="password" class="form-control" id="lpass" autocomplete="off" name="lpass" required>
            </div>
          </form>
          </div>
          <div class="modal-footer">
            <small id="logStatus"></small>
            <button type="submit" onclick="Login()" class="btn btn-primary" id="loginbtn">Login</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancle</button>
          </div>
      </div>
    </div>
  </div>
  <!-- Login model end -->