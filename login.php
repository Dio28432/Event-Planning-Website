<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
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

    .form-container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      display: inline-block;
    }

    form {
      background-color: #fff;
      border: 1px solid #000;
      padding: 20px;
      max-width: 400px;
      margin: 0 auto;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    legend {
      text-align: center;
      font-weight: bold;
      font-size: 1.2em;
    }

    label {
      display: none;
    }

    input {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color:#27ae60 ;
      color: white;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #219d54;
    }

    p {
      margin: 10px 0;
    }

    a {
      color: #1e90ff;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="navbar">
    <a href="../Views/mainhomepage.php">Back</a>
  </div>

  <div class="form-container">
    <form method="post" action="../Controllers/loginCheckController.php">
      <fieldset>
        <legend>Login</legend>

        <label for="username"></label>
        <input type="text" name="username" id="uname" placeholder="Username" required><br>

        <label for="password"></label>
        <input type="password" name="password" id="password" placeholder="Password" required><br>

        <input type="submit" name="btn1" value="Login" onclick="return validate()">
        <p>Don't have an account? <a href="../Views/signup.php">Sign Up</a></p>
        <a href="../Views/userforgotpassword.php">Forgot password?</a>
      </fieldset>
    </form>
  </div>

  <script>
    function validate() {
       id = document.getElementById('uname').value;
       password = document.getElementById('password').value;

      if (id == "") {
        alert('Username is required');
        return false;
      }

      if (password == "") {
        alert('Password is required');
        return false;
      }

      return true;
    }
  </script>
</body>

</html>
