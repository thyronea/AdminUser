<?php include('src.php');?>

<div class="tab-pane fade show active" id="home" role="tabpanel" tabindex="0">
  <div class="container">
    <div class="card border-0">
      <div class="card-body">
        <div class="col-md-3">
          <div class="row g-2">
            <div class="col">
              <div id="display-image" class="border" style="width:120px;height:120px;border-radius:50%;overflow:auto">
                <?php
                  $userID = mysqli_real_escape_string($con, $_SESSION['userID']);
                  $query = " SELECT * FROM image WHERE userID='$userID' ";
                  $result = mysqli_query($con, $query);
                  if(mysqli_num_rows($result) > 0 ) {
                    foreach($result as $pic){
                      ?>
                        <a href="image/<?=$pic['filename'];?>" target="_blank">
                          <img src="image/<?php echo $pic['filename'];?>" style="width:118px;height:118px;border-radius:50%;object-fit:cover;">
                        </a>
                      <?php
                    }
                  }
                ?>
              </div>
            </div>
            <div class="col">
              <small><a href="page/profile/index.php" style="color:black;text-decoration:none;"><?=$_SESSION['fname'];?> <?=$_SESSION['lname'];?></a></small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
