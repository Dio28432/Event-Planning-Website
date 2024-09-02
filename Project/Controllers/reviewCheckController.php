<?php
session_start();
require_once('../Models/reviewtabledb.php');


    $showreview=showreview();

    $reviews=[];

    while($review=mysqli_fetch_assoc($showreview))
    {
        array_push($reviews,$review);

    }
    echo json_encode($reviews);
  
?>