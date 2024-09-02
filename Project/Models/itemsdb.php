<?php 
require_once('db.php');

function show(){

    $conn=getConnection();

    $sql = "select * from items";
    $res = mysqli_query($conn, $sql);
    return $res;
}

function showsearch($Search){

    $conn=getConnection();

    $sql1 = "SELECT * FROM items WHERE name LIKE '%$Search%'";
    $res1 = mysqli_query($conn, $sql1);
    return $res1;
}

?>