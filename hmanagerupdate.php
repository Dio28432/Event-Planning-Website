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

$Uname = $_SESSION['userName'];

$Fname = $_POST['fname'];
$Lname = $_POST['lname'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];

$sql = "update registration set Fname='$Fname', Lname='$Lname', Email='$Email',Phone='$Phone' where Uname='$Uname'";
mysqli_query($conn, $sql);

header('location:hmanagerprofile.php');
?>