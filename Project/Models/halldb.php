<?php 
require_once('db.php');

function show(){

    $conn=getConnection();

    $sql = "select * from hall";
    $res = mysqli_query($conn, $sql);
    return $res;
}

function showsearch($Search){

    $conn=getConnection();

    $sql1 = "SELECT * FROM hall WHERE name LIKE '%$Search%'";
    $res1 = mysqli_query($conn, $sql1);
    return $res1;
}

function showhallproducts(){

    $conn=getConnection();

    $sql = "select * from hall";
    $res2 = mysqli_query($conn, $sql);
    return $res2;
}

function deletehallproduct($p_name){

    $conn=getConnection();

    $sql2 = "Delete from hall where name='$p_name'";
    $res2=mysqli_query($conn, $sql2);
    return $res2;
}

function addhallproduct($p_name,$p_price, $p_image){

    $conn=getConnection();

    $insert_query = mysqli_query($conn, "INSERT INTO hall(name, price, image) VALUES('$p_name', '$p_price', '$p_image')") or die('query failed');
    return $insert_query;
}

?>