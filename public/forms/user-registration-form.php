<?php
session_start();
date_default_timezone_set('America/Los_Angeles');
$today = date('Y') . '-' . date('m') . '-' . date('d');
?>

<!-- Register Form -->
<div class="mt-5">
  <div class="container" align="center">
    <div class="row justify-content-center">
      <div class="col-md-4">

        <!-- Header Alert -->
        <?php include('../../private/messages/alert.php'); ?>

        <div class="card">
          <div class="card-body shadow">
            <!-- registration form -->
            <form action="../../private/access/user-registration.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3" align="center">
                  <h4>User Registration</h4>
                  <small>Already have an account? <a class="text-decoration-none" href="/public/page/sign-in.php">Sign in</a></small><br>
                  <hr class="mb-4">
                </div>
                <div class="main-form">
                  <div class="row col-md-6">
                    <div class="col">
                      <input type="date" name="date" class="form-control form-control-sm" value="<?php echo $today; ?>" hidden required>
                    </div>
                    <div class="col">
                      <input type="" name="time" class="form-control form-control-sm" value="<?php echo date("h:i A"); ?>" hidden required>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="hidden" name="userID" id="userID" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="engineID" id="engineID" class="form-control">
                    </div>
                    <div class="form-group">
                      <input type="text" name="groupID" id="groupID" hidden>
                    </div>
                  </div>
                    <div class="col-md-10" style="text-align: left">
                      <div class="row g-2 mb-2">
                        <div class="col">
                          <input class="form-control form-control-sm" type="text" name="fname" placeholder="First Name" required>
                        </div>
                        <div class="col">
                          <input class="form-control form-control-sm" type="text" name="lname" placeholder="Last Name" required>
                        </div>
                      </div>
                      <div class="row g-2 mb-2">
                        <div class="col">
                          <input class="form-control form-control-sm" type="text" name="email" placeholder="Email Address">
                        </div>
                        <div class="form-group mb-2" hidden>
                          <label>Role</label>
                          <input type="text" name="role" value="User" required>
                        </div>
                      </div>
                      <hr>
                      <div class="text-center">
                        <small><label>Password Format</label></small>
                        <a tabindex="0" role="button" style="color:red"
                        data-bs-toggle="popover"
                        data-bs-trigger="focus"
                        data-bs-content="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters.">
                          <b>!</b>
                        </a>
                      </div>
                      <div class="row g-2 mb-2">
                        <div class="col">
                          <input class="form-control form-control-sm mt-2" type="password" name="password" onChange="onChange()" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password" required>
                        </div>
                        <div class="col">
                          <input class="form-control form-control-sm mt-2" type="password" name="cpassword" onChange="onChange()" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Confirm Password" required>
                        </div>
                      </div>

                      <hr style="border-top: 1px solid;">

                      <div class="form-group mb-1" align="center">
                        <small><p>
                          By creating an account, you agree to our <a class="text-decoration-none" href="<?php echo url_for('/pages/privacy-policy.php'); ?>" target=”_blank”>Privacy Policy</a> and <a class="text-decoration-none" href="<?php echo url_for('/pages/terms.php'); ?>" target=”_blank”>Terms of Use</a>.
                        </p></small>
                        <button type="submit" name="register_user" class="btn btn-outline-secondary btn-sm">Register</button>
                      </div>

                    </div>
                </div>

            </form>

          </div>
        </div>

      </div>
    </div>
  </div>
</div>
