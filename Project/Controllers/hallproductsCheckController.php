<?php
session_start();
require_once('../Models/halldb.php');

if (isset($_POST['delete'])) {
    $p_name = $_POST['delete'];

    $res=deletehallproduct($p_name);

    if($res){

        header("Location:../Views/hall.php");
    }
    
 }

 if (isset($_POST['add_product'])) {
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_image = $_FILES['p_image']['name'];
    $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
    $p_image_folder = 'uploaded_img/' . $p_image;

    $insert_query=addhallproduct($p_name,$p_price, $p_image);
 
 
    if ($insert_query) {
       move_uploaded_file($p_image_tmp_name, $p_image_folder);
       echo "product added succesfully";
       header("Location:../Views/hall.php");
 
    }
 
 }



?>