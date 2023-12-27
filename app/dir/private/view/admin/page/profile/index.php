<?php
session_start();
include('../../../../security/dbcon.php');
include('../../components/header.php');
?>
<!-- Login session -->
<?php if (isset($_SESSION["userID"])): ?>

<!-- Navtab -->
<div class="container" align="center">
  <div class="col-md-12">
    <div class="card shadow">
      <div class="card">
        Hey <?=htmlspecialchars($_SESSION['fname']); ?> <?=htmlspecialchars($_SESSION['lname']); ?>
      </div>
    </div>
  </div>
</div>

<!-- auto logout/login session -->
<?php else: ?>
<?php include('../../content/logged_out.php') ?>
<?php endif; ?>

<?php include('../../components/footer.php'); ?>
