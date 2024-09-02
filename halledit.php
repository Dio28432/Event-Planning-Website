<?php
session_start();
if (!isset($_SESSION['userName'])) {
  header("Location:login.php");
}
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "projectrecipes";
$conn = new mysqli($servername, $username, $pass, $dbname);

$id = $_GET['id'];
$sql = "select * from hall where name='$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Document</title>

<body style="background-color:	lavender;text-align:center">
  </head>

  <body>

    <form method="post">
      <ul>
        <li><a href="hmanagerhome.php">Home</a></li>
        <li><a href="hmanagerprofile.php">My Profile</a></li>
        <li><a href="hall.php">My Products</a></li>
        <li><a href="hmanagerorders.php">My Orders</a></li>
      </ul>
    </form>

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

      li button {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        background-color: #111;
      }


      li a:hover {
        background-color: #111;
      }
    </style>

    <form method="POST" action="hallupdate.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
      <img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt="">
      <input type="hidden" name="update_p_id" value="<?php echo $row['id']; ?>">
      <input type="text" class="box" required name="update_p_name" value="<?php echo $row['name']; ?>">
      <input type="number" min="0" class="box" required name="update_p_price" value="<?php echo $row['price']; ?>">
      <input type="file" class="box" required name="update_p_image" accept="image/png, image/jpg, image/jpeg">
      <button type="submit" name="submit">Update</button>
      <a href="hall.php">Cancel</a>
    </form>



  </body>

</html>