<?php
session_start();
require_once('../Models/registrationdb.php');

if (isset($_REQUEST['back'])){

    header('location:../Views/mainhomepage.php');
}

if (isset($_REQUEST['btn'])) {
    $Fname = $_REQUEST['Firstname'];
    $Lname = $_REQUEST['Lastname'];

    $Email = $_REQUEST['Email'];
    $Uname = $_REQUEST['Username'];
    $Number = $_REQUEST['Number'];

    $Password = $_REQUEST['Password'];
    $Conpass = $_REQUEST['conPassword'];
    $Security = $_REQUEST['security'];

    $count2 = dupuname($Uname);
    $count3=dupemail($Email);
    $count4=dupsecurity($Security);


    if ($count2 > 0) {
    
        $_SESSION['error_message1']="Username already exists";
        header('location:../Views/signup.php');
    }
    if($count3 > 0){
        $_SESSION['error_message2']="Email address already exists";
        header('location:../Views/signup.php');
    }
    if ($count4 > 0) {
        $_SESSION['error_message3']="Not applicable, give another go";
        header('location:../Views/signup.php');
    }

    if(empty($Fname)){
        $_SESSION['error_message4']="First name is required";
        header('location:../Views/signup.php');
    }
    if(empty($Lname)){
        $_SESSION['error_message5']="Last name is required";
        header('location:../Views/signup.php');
    }
    if(empty($Uname)){
        $_SESSION['error_message6']="Username is required";
        header('location:../Views/signup.php');
    }
    if(empty($Email)){
        $_SESSION['error_message7']="Email is required";
        header('location:../Views/signup.php');
    }
    if(empty($Number)){
        $_SESSION['error_message8']="Phone Number is required";
        header('location:../Views/signup.php');
    }
    if(strlen($Number)!=11){
        $_SESSION['error_message8']="Phone Number must be 11 digits long";
        header('location:../Views/signup.php');
    }       
    if(empty($Password)){
        $_SESSION['error_message9']="Password is required";
        header('location:../Views/signup.php');
    }
    if(empty($Conpass)){
        $_SESSION['error_message10']="Confirm Password is required";
        header('location:../Views/signup.php');
    }
    if(empty($Security)){
        $_SESSION['error_message11']="Security word is required";
        header('location:../Views/signup.php');
    }


    if($count2==0 && $count3==0 && $count4==0)
    {
       $status=auth($Fname,$Lname,$Email,$phone,$pass,$Uname,$Number,$Password,$Security,$Conpass);
       if($status)
       {
           header('location:../Views/login.php');
           
       }
       else
       {
          header('location:../Views/signup.php');
          
       }
    }
    else{
        header('location:../Views/signup.php');
    }

}

?>