<?php
include('../../../../access/dbcon.php');
$key = mysqli_real_escape_string($con, $_SESSION["dk_token"]);

if(isset($_GET['userID'])){
  // Uses userID to retrieve user's information from other tables
  $userID = mysqli_real_escape_string($con, $_SESSION['userID']);

  // Fetches patient's first name, last name, suffix and dob
  $profile_query = "SELECT * FROM profile WHERE userID='$userID' ";
  $profile_query_run = mysqli_query($con, $profile_query);
  $profile = mysqli_fetch_assoc($profile_query_run);
  $fname = htmlspecialchars(decryptthis($profile['fname'], $key));
  $lname = htmlspecialchars(decryptthis($profile['lname'], $key));
  $role = htmlspecialchars(decryptthis($profile['role'], $key));
  $email = htmlspecialchars(decryptthis($profile['email'], $key));
}
?>
