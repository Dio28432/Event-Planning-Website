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

$update_p_name = $_POST['update_p_name'];
$update_p_price = $_POST['update_p_price'];
$update_p_image = $_FILES['update_p_image']['name'];
$p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
$p_image_folder = 'uploaded_img/' . $p_image;

$sql = "update hall set name = '$update_p_name', price = '$update_p_price', image = '$update_p_image' where name = '$id'";
$update_query = mysqli_query($conn, $sql);
if ($update_query) {
  move_uploaded_file($p_image_tmp_name, $p_image_folder);
  echo "product add succesfully";

}

header('location:hall.php');

?>