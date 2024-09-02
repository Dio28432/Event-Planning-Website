<?php 
require_once('db.php');

function payhistory($uname)
{
    $conn=getConnection();
    $sql = "select * from payhistory where Uname='$uname'";
    $res = mysqli_query($conn, $sql);
    return $res;
}

function show()
{
    $conn=getConnection();
    $sql = "select * from payhistory where Source='hall'";
    $res = mysqli_query($conn, $sql);
    return $res;
}


?>