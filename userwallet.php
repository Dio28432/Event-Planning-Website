<?php
session_start();

$uname = $_SESSION['userName'];
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "projectrecipes";
$conn = new mysqli($servername, $username, $pass, $dbname);

$sql1 = "select Balance from registration where Uname = '$uname'";

$res1 = mysqli_query($conn, $sql1);

if (!isset($_SESSION['userName'])) {
  header("Location:login.php");
}


if (isset($_POST['btn'])) {
  $Balance = $_POST['amount'];
  $Cardnum = $_POST['cardnumber'];
  $expire = $_POST['expiredate'];
  $ccv = $_POST['ccv'];
  $pin = $_POST['pin'];

  if ($Balance != null && $Cardnum != null && $expire != null && $ccv != null && $pin != null) { {
      $sql2 = "UPDATE registration SET Balance = Balance + '$Balance' WHERE Uname='$uname'";
      mysqli_query($conn, $sql2);
      echo "Balance added successfully";
      header("Refresh:0");

    }

  }


} else if (isset($_POST['home'])) {
  header("Location:userhomepage.php");
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



        Amount to add:<input type="Number" name="amount" /><br />
        <br>

        Card Number:<input type="Number" name="cardnumber" onKeyPress="if(this.value.length==16) return false;" /><br />
        <br>

        Expire date:<input type="Text" name="expiredate" onKeyPress="if(this.value.length==5) return false;" /><br />
        <br>

        CCV:<input type="Number" name="ccv" onKeyPress="if(this.value.length==3) return false;" /><br />
        <br>

        PIN:<input type="Number" name="pin" onKeyPress="if(this.value.length==4) return false;" /><br />
        <br>

        <button name="btn">Add</button>


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