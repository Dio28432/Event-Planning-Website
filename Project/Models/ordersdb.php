<?php 
require_once('db.php');


function getneworder(){

    $conn=getConnection();

    $sql = "select * from orders";
    $res = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($res)){
        return true;
    }else{
        return false;
    }
}
function deleteneworder(){

    $conn=getConnection();

    $sql = "delete from orders where 1";
    $res = mysqli_query($conn, $sql);
}

?>