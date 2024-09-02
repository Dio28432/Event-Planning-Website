<?php
session_start();
require_once('../Models/contactdb.php');

if (isset($_POST['submit'])){
    $name=$_POST['Name'];  
    $email=$_POST['Email'];
    $message=$_POST['Message'];


    $review=review($name,$email,$message);

                        if($review){

                        header("Location:../Views/contactus.php");

                        }

}

if (isset($_POST['back'])) {

    header("Location:../Views/mainhomepage.php");


}

?>