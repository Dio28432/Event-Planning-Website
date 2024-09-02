<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <style>
    body {
      background-color: lavender;
      text-align: center;
      font-family: Arial, sans-serif;
    }

    header {
      background-color: #333;
      padding: 10px;
      color: white;
    }

    nav {
      display: flex;
      justify-content: space-between;
      padding: 10px;
      background-color: #333;
    }

    nav a {
      color: white;
      text-decoration: none;
      padding: 10px;
      border-radius: 5px;
    }

    nav a:hover {
      background-color: #111;
    }

    form {
      max-width: 400px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
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

    span {
      color: red;
      display: block;
      margin-top: 10px;
    }
  </style>
</head>

<body>

  <header>
    <h1>Forgot Password</h1>
  </header>

  <nav>
    <a href="login.php">Back</a>
  </nav>

  <form method="post" action="../Controllers/userforgotpasswordCheckController.php">
    <fieldset>
      <legend>Forgot Password</legend>

      <label for="username"></label>
      <input type="text" name="username" placeholder="Username" />

      <span><?php if (isset($_SESSION['error_message4'])) {
            echo "<p style='color:red;'>" . $_SESSION['error_message4'] . "<p>";
            unset($_SESSION['error_message4']);
        } ?></span>

      <label for="security"></label>
      <input type="text" name="security" placeholder="Favourite word" />

      <span><?php if (isset($_SESSION['error_message6'])) {
            echo "<p style='color:red;'>" . $_SESSION['error_message6'] . "<p>";
            unset($_SESSION['error_message6']);
        } ?></span>

      <label for="email"></label>
      <input type="email" name="email" placeholder="Email Address" />

      <span><?php if (isset($_SESSION['error_message5'])) {
            echo "<p style='color:red;'>" . $_SESSION['error_message5'] . "<p>";
            unset($_SESSION['error_message5']);
        } ?></span>

      <button type="submit" name="btn1">Submit</button>
    </fieldset>
  </form>

</body>

</html>
