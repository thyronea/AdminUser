<?php
session_start();
include('../../../../access/dbcon.php');
include('../../components/header.php');
?>
<!-- Login session -->
<?php if (isset($_SESSION["engineID"])): ?>

<!-- Navtab -->
<?php include('components/admin-navtab.php'); ?>

<div class="container">
  <div class="row col-md-12">
    <div class="tab-content" id="v-pills-tabContent">


    <div class="col-md-12">
      <div class="d-flex align-items-st">
        <div class="container-fluid">
          <div class="row flex-nowrap">

          <!-- Sidebar -->
          <?php include('components/admin-sidebar.php'); ?>

          <!-- Content and Modals -->
          <main>
            <div class="row m-2">
              <div class="col-md-12">
                <div class="row col d-flex justify-content-center">
                  <!-- Header Alert -->
                  <?php include('../../components/alert.php'); ?>
                  <!-- Content -->
                  <?php include('content/activity-chart.php') ?>
                  <!-- Modals -->
                  <?php include('modal/add-user.php'); ?>
                  <?php include('modal/add-image.php'); ?>
                  <?php include('modal/edit-user.php'); ?>
                  <?php include('modal/delete-user.php'); ?>
                  <?php include('modal/send-email.php'); ?>
                  <?php include('modal/email-log.php'); ?>
                  <?php include('modal/email-clear.php'); ?>
                  <?php include('modal/activity-log.php'); ?>
                  <?php include('modal/activity-clear.php'); ?>
                  <?php include('modal/account-settings.php'); ?>
                </div>
              </div>
            </div>
          </main>
        </div>
      </div>
    </div>

    </div>
  </div>
 </div>
</div>

<!-- auto logout/login session -->
<?php else: ?>
<?php include('../../content/logged_out.php') ?>
<?php endif; ?>

<?php include('../../components/footer.php'); ?>
