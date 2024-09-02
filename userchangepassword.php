<?php
session_start();
if (!isset($_SESSION['userName'])) {
    header("Location: login.php");
}
$uname = $_SESSION['userName'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Change Password</title>
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

        button {
            background-color: #27ae60;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #219d54;
        }

        fieldset {
            text-align: left;
            border: none;
        }

        legend {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <a href="login.php">Login</a>
    </div>

    <form method="post" action="../Controllers/userchangepasswordCheckController.php">
        <fieldset>
            <legend>Change Password</legend>
            Password: <input type="password" name="password" required><br>
            <hr>
            Confirm Password: <input type="password" name="confirmpassword" required><br>
            <hr>
            <button name="btn1">Submit</button>
        </fieldset>
    </form>

</body>

</html>
