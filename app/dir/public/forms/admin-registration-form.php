<!-- Register Form -->
<div class="mt-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">

        <!-- Header Alert -->
        <?php include('../../../private/messages/alert.php'); ?>

        <div class="card">
          <div class="card-body shadow">
            <!-- registration form -->
            <form class="" action="" method="POST">
              <div class="mb-3" align="center">
                <h4>Admin Registration</h4>
                <small>Already have an account? <a class="text-decoration-none" href="/public/page/access/sign-in.php">Sign in</a></small><br>
                <hr class="mb-4">
              </div>
              <div class="form-group mb-1">
                <input type="text" name="userID" id="userID" hidden>
              </div>
              <div class="form-group mb-1">
                <input type="text" name="engineID" id="engineID" hidden>
              </div>
              <div class="form-group mb-1">
                <input type="text" name="groupID" id="groupID" hidden>
              </div>
              <div class="row g-2">
                <div class="col form-group mb-2">
                  <input type="text" name="fname" placeholder="First Name" class="form-control form-control-sm text-center" required>
                </div>
                <div class="col form-group mb-2">
                  <input type="text" name="lname" placeholder="Last Name" class="form-control form-control-sm text-center" required>
                </div>
              </div>
              <div class="form-group mb-2">
                <input type="email" name="email" placeholder="Email" class="form-control form-control-sm text-center" required>
              </div>
              <div class="form-group mb-2" hidden>
                <label>Role</label>
                <input type="text" name="role" value="Admin" required>
              </div>
              <div class="form-group mt-3 mb-2" align="center">
                <small><label>Password Format</label></small>
                  <a tabindex="0" role="button" style="color:red"
                  data-bs-toggle="popover"
                  data-bs-trigger="focus"
                  data-bs-content="Must contain at least one number, one uppercase and lowercase letter, and at least 8 or more characters."
                  ><b>!</b></a>
                <input type="password" name="password" placeholder="Password" onChange="onChange()" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control form-control-sm text-center"
                required>
              </div>
              <div class="form-group mb-4">
                <input type="password" name="confirm" placeholder="Confirm Password" onChange="onChange()" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control form-control-sm text-center"
                required>
              </div>
              <hr style="border-top: 1px solid;">

              <div class="form-group mb-1" align="center">
                <small><p>
                  By creating an account, you agree to our <a class="text-decoration-none" href="../../page/privacy-policy/index.php">Privacy Policy</a> and <a class="text-decoration-none" href="../../page/terms/index.php">Terms of Use</a>.
                </p></small>
                <button type="submit" name="register_btn" class="btn btn-outline-secondary btn-sm">Register</button>
              </div>
            </form>

          </div>
        </div>

      </div>
    </div>
  </div>
</div>
