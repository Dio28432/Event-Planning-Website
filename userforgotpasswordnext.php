<?php
session_start();
if (!isset($_SESSION['userName'])) {
	header("Location:../Views/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Forgot Password</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<style>
		body {
			background-color: lavender;
			text-align: center;
			margin: 0;
			font-family: Arial, sans-serif;
		}

		.navbar {
			background-color: #333;
			overflow: hidden;
		}

		.navbar a {
			float: left;
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		.navbar a:hover {
			background-color: #ddd;
			color: black;
		}

		form {
			max-width: 400px;
			margin: 20px auto;
			padding: 20px;
			background-color: #fff;
			border: 1px solid #000;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		input {
			width: 100%;
			padding: 10px;
			margin: 8px 0;
			box-sizing: border-box;
		}

		input[type="submit"] {
			background-color: #27ae60;
			color: white;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color:  #219d54;
		}

		h1 {
			margin-bottom: 20px;
		}
	</style>
</head>

<body>
	<div class="navbar">
		<a href="../Views/login.php">Login</a>
	</div>

	<form method="post" action="../Controllers/userforgotpasswordnextCheckController.php">
		<h1>Forgot Password</h1>
		<?php echo "OTP sent successfully"; ?>
		<input type="text" name="OTP" placeholder="OTP" required><br>
		<input type="submit" name='submit' value='Submit'>
	</form>

	<form method="post">
		<input type="submit" name='exit' value='Exit'>
	</form>

</body>

</html>
