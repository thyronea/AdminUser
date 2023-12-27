<!-- Main Content -->
<div class="container">
  <div class="row flex-nowrap">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="col-md-12">

        <!-- Header Alert -->
        <?php include('components/alert.php'); ?>
        <!-- Sidebar Menu Button -->
        <a href="#" data-bs-target="#sidebar" data-bs-toggle="collapse" class="border-none text-decoration-none" style="color: black;"><i class="bi bi-list bi-lg py-2 p-2"></i></a>

        <div class="d-flex align-items-st">
          <div class="container-fluid">
            <div class="row flex-nowrap">

              <!-- Sidebar -->
              <?php include('components/sidebar.php'); ?>
              <!-- Complete Profile Modal Alert -->
              <?php include('modal/complete-profile/main.php'); ?>
              <?php include('modal/complete-profile/alert-process.php'); ?>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
