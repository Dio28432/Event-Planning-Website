<?php
require_once('db.php');

function showreview(){
    $conn=getConnection();

    $query = "SELECT * FROM reviewtable";
    $result = mysqli_query($conn, $query);  
    return $result;
}

function userreview($uname){
        $conn=getConnection();

        $query = "SELECT * FROM reviewtable WHERE uname = '$uname'";
        $result = mysqli_query($conn, $query);
        return $result;
}

function givereview($uname, $rating, $review){
        $conn=getConnection();
        
        $result=mysqli_query($conn, "INSERT INTO reviewtable(uname,rating,review) VALUES('$uname', '$rating', '$review')");
        return $result;
}

?>