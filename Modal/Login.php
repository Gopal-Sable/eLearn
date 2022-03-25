 <!-- login Modal -->
 <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="LoginModalLabel">Student Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- login form start -->
          <form id="loginform">
            <div class="form-group">
              <i class="fas fa-envelope"></i>
              <label for="stuemail" class="pl-2 font-weight-bold">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <i class="fas fa-key"></i>
              <label for="pass" class="pl-2 font-weight-bold">Password</label>
              <input type="password" class="form-control" id="lpass" name="lpass">
            </div>
          </form>
          <!-- Login form end -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="loginbtn">Login</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancle</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Login model end -->