<?php
session_start();
require_once('../Models/reviewtabledb.php');

if (isset($_POST['submit'])) {

    $uname = $_SESSION['userName'];
    $rating = $_POST['rating'];
    $review = $_POST['review'];

    $res=givereview($uname, $rating, $review);

    if($res){

        header('location:../Views/userreview.php');

    }

  }

?>