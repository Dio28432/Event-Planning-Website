<?php 
require_once('db.php');

function show(){

    $conn=getConnection();

    $sql = "select * from photography";
    $res = mysqli_query($conn, $sql);
    return $res;
}

function showsearch($Search){

    $conn=getConnection();

    $sql1 = "SELECT * FROM photography WHERE name LIKE '%$Search%'";
    $res1 = mysqli_query($conn, $sql1);
    return $res1;
}
?>