<?php 
require_once('db.php');

function review($name,$email,$message){

    $conn=getConnection();

    mysqli_query($conn, "INSERT INTO contact(uname,email,message) VALUES('$name', '$email', '$message')");
    $res=mysqli_query($conn, "INSERT INTO contact(uname,email,message) VALUES('$name', '$email', '$message')");
    return $res;


}

?>