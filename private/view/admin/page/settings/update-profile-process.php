<?php
session_start();
include('../../../../access/dbcon.php');
include('../../../../security/encrypt_decrypt.php');
$key = mysqli_real_escape_string($con, $_SESSION["dk_token"]);

if(isset($_POST['admin_update_profile']))
{
  $userID = mysqli_real_escape_string($con, $_SESSION['userID']);
  $engineID = mysqli_real_escape_string($con, $_SESSION['engineID']);
  $groupID = mysqli_real_escape_string($con, $_SESSION['groupID']);
  $fname = mysqli_real_escape_string($con, $_POST['fname']);
  $lname = mysqli_real_escape_string($con, $_POST['lname']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $role = mysqli_real_escape_string($con, $_POST['role']);
  $type = mysqli_real_escape_string($con, "Updated");
  $message = mysqli_real_escape_string($con, ": Profile");

  // Encrypt Activity Data and insert to Activities table
  $fullname = "$fname $lname";
  $act_message = "$type $fname $lname $message";
  $encrypt_fullname = encryptthis($fullname, $key);
  $encrypt_type = encryptthis($type, $key);
  $encrypt_act_message = encryptthis($act_message, $key);
  $activity = "INSERT INTO admin_log (userID, groupID, user, type, activity) VALUES (?, ?, ?, ?, ?)";
  $stmt = $con->prepare($activity);
  $stmt->bind_param("sssss", $userID, $groupID, $encrypt_fullname, $type, $encrypt_act_message);
  $stmt->execute();

  // Updates user's login email
  $admin  = "UPDATE admin SET email=?, role=? WHERE userID='$userID' ";
  $stmt = $con->prepare($admin);
  $stmt->bind_param("ss", $email, $role);
  $stmt->execute();

  // Encrypt Patient's Name, dob, email and update
  $encrypt_fname = encryptthis($fname, $key);
  $encrypt_lname = encryptthis($lname, $key);
  $encrypt_email = encryptthis($email, $key);
  $encrypt_role = encryptthis($role, $key);
  $profile  = "UPDATE profile SET fname=?, lname=?, email=?, role=? WHERE userID='$userID' ";
  $stmt = $con->prepare($profile);
  $stmt->bind_param("ssss", $encrypt_fname, $encrypt_lname, $encrypt_email, $encrypt_role);
  $stmt->execute();

  if($stmt->execute())
  {
    $_SESSION['success'] = "$fname $lname's Profile Was Successfully Updated!";
    header("Location: ../admin/index.php");
    exit(0);
  }
  else
  {
    $_SESSION['warning'] = "Unable to Update $fname $lname's Profile!";
    header("Location: ../admin/index.php");
    exit(0);
  }
}

?>
