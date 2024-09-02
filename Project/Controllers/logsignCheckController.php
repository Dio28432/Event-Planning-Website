<?php
session_start();

if (isset($_POST['login'])){

    header("Location:../Views/login.php");
}
if (isset($_POST['signup'])){

    header("Location:../Views/signup.php");
}

?>