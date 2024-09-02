<?php
session_start();
require_once('../Models/registrationdb.php');

                $uname = $_SESSION['userName'];
                

                if (isset($_POST['btn1'])) {
                    $Password = $_POST['password'];
                    $Confirmpassword = $_POST['confirmpassword'];


                    if ($Password != null && $Confirmpassword != null && $Password == $Confirmpassword) {

                        $userchangepass=userchangepass($Password,$uname);

                        if($userchangepass){

                        header("Location:../Views/login.php");

                        }

                    } else if ($Password == null && $Confirmpassword == null) {
                        echo "Please fulfill the form correctly";
                    }
                }

?>