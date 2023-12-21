<?php
session_start();
require_once('../private/initialize.php');
include('components/dbcon.php');
include(ADMIN_COMP_PATH . '/header.php');
?>
<!-- Login session -->
<?php if (isset($_SESSION["userID"])): ?>

<!-- Search Result -->
<?php include ('content/search-result.php'); ?>

<!-- auto logout/login session -->
<?php else: ?>
<?php include(ADMIN_COMP_PATH . '/logged_out.php') ?>
<?php endif; ?>
<?php include(ADMIN_COMP_PATH . '/footer.php'); ?>
