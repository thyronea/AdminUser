<div class="card shadow" style="width:35rem">
  <div class="card-body">
    <form class="" action="update-profile-process.php" method="post">
      <div class="row mt-2 g-2">
        <!-- user image -->
        <div class="col" align="center">
          <div id="display-image" class="border" style="width:170px;height:170px;border-radius:50%;overflow:auto">
            <?php
              $userID = mysqli_real_escape_string($con, $_SESSION['userID']);
              $query = " SELECT * FROM image WHERE userID='$userID' ";
              $result = mysqli_query($con, $query);
              if(mysqli_num_rows($result) > 0 ) {
                foreach($result as $pic){
                  ?>
                    <a href="../../image/<?=$pic['filename'];?>" target="_blank">
                      <img src="../../image/<?php echo $pic['filename'];?>" style="width:168px;height:168px;border-radius:50%;overflow:auto">
                    </a>
                  <?php
                }
              }
            ?>
          </div>
          <a type="button" class="mt-2 mb-3" data-bs-toggle="modal" data-bs-target="#add_user_image" style="color:black;"><i class="bi bi-camera"></i></a>
        </div>
        <!-- user profile -->
        <div class="col">
          <!-- Patient's Name --->
          <div class="col mb-2">
            <input type="text" name="fname" class="form-control form-select-sm" value="<?=$fname;?>" placeholder="First Name" required>
          </div>
          <div class="col mb-2">
            <input type="text" name="lname" class="form-control form-select-sm" value="<?=$lname;?>" placeholder="Last Name" required>
          </div>
          <div class="col mb-2">
            <input type="text" name="email" class="form-control form-select-sm" value="<?=$email;?>" placeholder="Email" required>
          </div>
          <div class="col mb-2">
            <select class="form-select form-select-sm" name="role">
              <option value="<?=$role;?>"><?=$role;?></option>
              <option disabled>Select Role</option>
              <option value="Admin">Admin</option>
              <option value="User">User</option>
            </select>
          </div>
        </div>
      </div>

      <div class="modal-footer col d-flex justify-content-center form-group mt-4">
        <button type="submit" name="admin_update_profile" class="focus-ring btn btn-outline-secondary btn-sm">Update</button>
      </div>
    </form>
  </div>
</div>
