<?php
session_start();
require_once('../Models/registrationdb.php');


$username = $_REQUEST['username'];
$security = $_REQUEST['security'];
$email = $_REQUEST['email'];
$_SESSION['userName'] = $username;

$res=userforgotpass($username,$security,$email);

if (isset($_POST['btn1'])) {
if(empty($username)){
    $_SESSION['error_message4']="Username is required";
    header('location:../Views/userforgotpassword.php');
}
if(empty($email)){
    $_SESSION['error_message5']="Email Address is required";
    header('location:../Views/userforgotpassword.php');
}
if(empty($security)){
    $_SESSION['error_message6']="Security Key is required";
    header('location:../Views/userforgotpassword.php');
}

if (mysqli_num_rows($res) > 0) {
    while ($r = mysqli_fetch_assoc($res)) {
      $_SESSION['userName'] = $r["Uname"];

      $otp = mt_rand(1000, 9999);
      $_SESSION['otp'] = $otp;
      $to = $email;
      $_SESSION['to_email'] = $to;
      $subject = "One Time Password";
      $message = "Your LITMOSPHERE OTP: $otp";
      $headers = "From: khansajidd28@gmail.com";
      $mail = mail($to, $subject, $message, $headers);

      header("location:../Views/userforgotpasswordnext.php ");

    }
  } else {
    echo "Please check your Username,Security and Email to Try again";
  }

}

?>