<?php
session_start();
if (!isset($_SESSION['userName'])) {
  header("Location:login.php");
}
$uname = $_SESSION['userName'];

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "projectrecipes";
$conn = new mysqli($servername, $username, $pass, $dbname);

$sql1 = "select Balance from registration where Uname = '$uname'";

$res1 = mysqli_query($conn, $sql1);


if (isset($_POST['wallet'])) {



  header('location:userpay.php');

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>signup</title>

<body style="background-color:	lavender;text-align:center">
  </head>

  <body>

    <ul>
      <li><a href="userhomepage.php">Home</a></li>
      <li><a href="usercart.php">Back</a></li>

    </ul>

    <style>
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
    </style>
    <br>
    <form method="post">

      <fieldset style="max-width: max-content;">

        <button name="wallet">From wallet balance</button>
      </fieldset>
      </center>
    </form>


    <?php
    while ($row = mysqli_fetch_assoc($res1)) {
      echo "Current balance" . $row["Balance"];
    }
    ?>



  </body>

</html>