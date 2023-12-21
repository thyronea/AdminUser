<?php
$page_title = 'User Login';
session_start();
require_once('../../private/initialize.php');
include(PRIVATE_SECURITY_PATH . '/send-user-code-process.php');
include(PRIVATE_COMPONENTS_PATH . '/header.php');
include(PRIVATE_COMPONENTS_PATH . '/navbar2.php');
include(PUBLIC_FORMS_PATH . '/user-login-form.php');
include(PRIVATE_COMPONENTS_PATH . '/footer.php');
?>
