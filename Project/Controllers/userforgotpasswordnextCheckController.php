<?php
session_start();
require_once('../Models/registrationdb.php');

$uname = $_SESSION['userName'];
$to = $_SESSION['to_email'];
$otp = $_SESSION['otp'];

if ($_SESSION['otp'] === null) {
	header('Location:../Views/login.php');
} else if (isset($_POST['exit'])) {
	header('Location:../Views/login.php');
	unset($_SESSION['otp']);
}
if (isset($_POST['submit'])) {
	$otpEntered = $_POST['OTP'];
	if ($otpEntered == $otp) {
		header("location:../Views/userchangepassword.php");
		unset($_SESSION['otp']);
	} else {
		echo "OTP does not match";
	}
}

?>