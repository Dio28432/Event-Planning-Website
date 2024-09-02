<?php
session_start();
require_once('../Models/wishlistdb.php');
require_once('../Models/cartdb.php');

if (isset($_POST['add_to_cart'])) {

    $uname = $_SESSION['userName'];

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];


    $add=addtocartphotography($uname,$product_name,$product_price,$product_image,$product_quantity);

    if($add){

        header('location:../Views/photography.php');
    }

}

if (isset($_POST['add_to_wishlist'])) {

    $uname = $_SESSION['userName'];

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];


    $add=addtowishlistphotography($uname,$product_name,$product_price,$product_image,$product_quantity);

    if($add){

        header('location:../Views/photography.php');
    }

}

?>