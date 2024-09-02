<?php
session_start();
require_once('../Models/registrationdb.php');

if (isset($_REQUEST['back'])){

  header('location:../Views/mainhomepage.php');
}

if (isset($_REQUEST['btn1'])) {
    $Uname = $_REQUEST['username'];
    $Password = $_REQUEST['password'];
    $Designation1 = "General User";
    $Designation2 = "Moderator";
    $Designation3 = "Admin";
    $Designation4 = "Catering";
    $Designation5 = "Photographer";
    $Designation6 = "Decorator";
    $Designation7 = "HallManager";

    $count=logincount($Uname,$Password);
    $count2=logincount2($Uname,$Designation1);
    $count3=logincount3($Uname,$Designation2);
    $count4=logincount2($Uname,$Designation3);
    $count5=logincount2($Uname,$Designation4);
    $count6=logincount2($Uname,$Designation5);
    $count7=logincount9($Uname);
    $count8=logincount2($Uname,$Designation6);
    $count9=logincount2($Uname,$Designation7);

    if ($count == 1 && $count2 == 1 && $count7 != 1) {

        $_SESSION['userName'] = $Uname;
        echo "Login Successful!";
        header("Location:../Views/userhomepage.php");
      } else if ($count == 1 && $count3 == 1) {
        $_SESSION['userName'] = $Uname;
        echo "Login Successful!";
        header("Location:../Views/modhomepage.php");

      } else if ($count == 1 && $count4 == 1) {
        $_SESSION['userName'] = $Uname;
        echo "Login Successful!";
        header("Location:../Views/adminhomepage.php");

      } else if ($count == 1 && $count5 == 1) {
        $_SESSION['userName'] = $Uname;
        echo "Login Successful!";
        header("Location:../Views/catererhomepage.php");

      } else if ($count == 1 && $count6 == 1) {
        $_SESSION['userName'] = $Uname;
        echo "Login Successful!";
        header("Location:../Views/photohomepage.php");

      } else if ($count == 1 && $count8 == 1) {
        $_SESSION['userName'] = $Uname;
        echo "Login Successful!";
        header("Location:../Views/decoratorhomepage.php");

      } else if ($count == 1 && $count9 == 1) {
        $_SESSION['userName'] = $Uname;
        echo "Login Successful!";
        header("Location:../Views/hmanagerhome.php");

      } else if ($count != 1) {
        echo "Login failed! Please try again";
      } else if ($count7 == 1) {
        echo "Your account has been Restricted";
      }
    }
    if (isset($_POST['back'])) {

        header("Location:../Views/mainhomepage.php");
    
    }

?>