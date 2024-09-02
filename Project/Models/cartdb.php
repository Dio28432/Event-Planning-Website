<?php 
require_once('db.php');

function addtocart($uname,$product_name,$product_price,$product_image,$product_quantity){

    $conn=getConnection();

    $res1=mysqli_query($conn, "INSERT INTO cart(uname, Product_name, price, image, quantity,Source) VALUES('$uname', '$product_name', '$product_price', '$product_image', '$product_quantity','items')");
    return $res1;
}

function addtocarthall($uname,$product_name,$product_price,$product_image,$product_quantity){

    $conn=getConnection();

    $res1=mysqli_query($conn, "INSERT INTO cart(uname, Product_name, price, image, quantity,Source) VALUES('$uname', '$product_name', '$product_price', '$product_image', '$product_quantity','hall')");
    return $res1;
}

function addtocartitems($uname,$product_name,$product_price,$product_image,$product_quantity){

    $conn=getConnection();

    $res1=mysqli_query($conn, "INSERT INTO cart(uname, Product_name, price, image, quantity,Source) VALUES('$uname', '$product_name', '$product_price', '$product_image', '$product_quantity','items')");
    return $res1;
}

function addtocartdecoration($uname,$product_name,$product_price,$product_image,$product_quantity){

    $conn=getConnection();

    $res1=mysqli_query($conn, "INSERT INTO cart(uname, Product_name, price, image, quantity,Source) VALUES('$uname', '$product_name', '$product_price', '$product_image', '$product_quantity','decoration')");
    return $res1;
}

function addtocartphotography($uname,$product_name,$product_price,$product_image,$product_quantity){

    $conn=getConnection();

    $res1=mysqli_query($conn, "INSERT INTO cart(uname, Product_name, price, image, quantity,Source) VALUES('$uname', '$product_name', '$product_price', '$product_image', '$product_quantity','photography')");
    return $res1;
}






?>