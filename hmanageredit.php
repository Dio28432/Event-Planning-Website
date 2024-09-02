<?php
session_start();
if (!isset($_SESSION['userName'])) {
  header("Location: login.php");
}
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "projectrecipes";
$conn = new mysqli($servername, $username, $pass, $dbname);

$Uname = $_SESSION['userName'];
$sql = "select * from registration where Uname='$Uname'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Information</title>

  <style>
    body {
      background-color: lavender;
      text-align: center;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a:hover {
      background-color: #111;
    }

    center {
      margin-top: 20px;
    }

    h2 {
      color: #333;
    }

    form {
      display: inline-block;
      text-align: left;
    }

    input[type="text"] {
      width: 200px;
      padding: 8px;
      margin: 5px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #111;
      color: white;
      padding: 10px 15px;
      border: none;
      text-decoration: none;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #555;
    }

    a {
      color: #333;
      text-decoration: none;
      margin-left: 10px;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>

  <ul>
    <li><a href="hmanagerhome.php">Home</a></li>
    <li><a href="hmanagerprofile.php">My Profile</a></li>
    <li><a href="hall.php">My Products</a></li>
    <li><a href="hmanagerorders.php">My Orders</a></li>
  </ul>

  <center>
    <h2>Update Information</h2>
    <form method="POST" action="hmanagerupdate.php">
      First Name: <input type="text" name="fname" value="<?php echo $row['Fname']; ?>"><br>
      Last Name: <input type="text" name="lname" value="<?php echo $row['Lname']; ?>"><br>
      Email: <input type="text" name="email" value="<?php echo $row['Email']; ?>"><br>
      Phone: <input type="text" name="phone" value="<?php echo $row['Phone']; ?>"><br>
      <input type="submit" name="submit">
      <a href="hmanagerprofile.php">Back</a>
    </form>
  </center>
</body>

</html>
