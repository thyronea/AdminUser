<?php
session_start();
include('dbcon.php');
include(VENDOR_MAILER_PATH . '/PHPMailer/src/Exception.php');
include(VENDOR_MAILER_PATH . '/PHPMailer/src/PHPMailer.php');
include(VENDOR_MAILER_PATH . '/PHPMailer/src/SMTP.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$is_invalid = false;

// Provider login
if(isset($_POST['admin_send_code']))
{
  $email = mysqli_real_escape_string($con, $_POST['email']);

  // Retrieves userID and passes to status_query to verify password
  $login_query = "SELECT * FROM admin WHERE email='$email' ";
  $login_query_run = mysqli_query($con, $login_query);
  $user = mysqli_fetch_assoc($login_query_run);
  $userID = htmlspecialchars($user["userID"]);

  // Retrieves account status for login verification
  $status_query = "SELECT * FROM token WHERE userID='$userID' ";
  $status_query_run = mysqli_query($con, $status_query);
  $status_token = mysqli_fetch_assoc($status_query_run);
  $key = htmlspecialchars($status_token["dk_token"]); // Used for data encryption and decryption

  // Retrieves ID from profile - Use to identify email receiver
  include('encrypt_decrypt.php');
  $profile_query = "SELECT * FROM profile WHERE userID='$userID' ";
  $profile_query_run = mysqli_query($con, $profile_query);
  $profile = mysqli_fetch_assoc($profile_query_run);
  $fname = htmlspecialchars(decryptthis($profile["fname"], $key));

  if($status_token['status'] == "1")
  {
    $vcode = rand(1000,9999); // Generates random verification token
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $subject = htmlspecialchars("Login Verification");
    $message = htmlspecialchars("
    Hello $fname,

    Your login verification code is: $vcode

    If you did not attempt to login, please contact admin.

    ");

    // Send email confirmation
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = "thyrone.antonio@gmail.com";
    $mail->Password = "mhopftvkjlemevgn";

    $mail->setFrom($email);
    $mail->addAddress($email);

    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();

    // stores vcode in token table for login verification
    $update_vcode = "UPDATE token SET v_code='$vcode' WHERE userID='$userID' ";
    $update_vcode_run = mysqli_query($con, $update_vcode);

    if($update_vcode_run)
    {
      $_SESSION['success'] = "Code was sent to your email";
      header("Location: /public/page/admin-login-verification.php"); // If user type is "Admin", go to admin page
      exit(0);
    }
    else
    {
      $_SESSION['warning'] = "Please register or verify your email address!";
      header("Location: /public/page/sign-in.php");
      exit(0);
    }
  }
  else
  {
    $_SESSION['warning'] = "Please register or verify your email address!";
    header("Location: /public/page/sign-in.php");
    exit(0);
  }
  $is_invalid = true; // send invalid login message if password is incorrect
}



// Patient login
if(isset($_POST['patient_login_btn']))
{
  $login = mysqli_real_escape_string($con, $_POST['login_btn']);
  $email = htmlspecialchars($_POST['email']);
  $login = htmlspecialchars($_POST['login']);
  $query2 = "SELECT * FROM patients WHERE email='$email' ";
  $query_run2 = mysqli_query($con, $query2);

  $user = mysqli_fetch_assoc($query_run2);
  if($user['account_status'] == "Verified")
  {
    if(password_verify($_POST["password"], $user["password"])) // verify password
    {
      session_start();
      $_SESSION["patient_id"] = $user["patientID"];
      $_SESSION["fname"] = $user["fname"];
      $_SESSION["lname"] = $user["lname"];
      $_SESSION["email"] = $user["email"];
      $_SESSION["role"] = $user["role"];

      if($_SESSION["role"] == 'Patient')  // If user type is "Patient", go to patient's dashboard
      {
        header("Location: /HC/public/index.php");
        exit(0);
      }
    }
  }
    else
    {
      $_SESSION['warning'] = "Please register or verify your email address!";
      header("Location: ../../public/pages/patient-login.php");
      exit(0);
    }
  $is_invalid = true; // send invalid login message if password is incorrect
}
?>
