<?php 
require_once('db.php');

function wishlist($uname)
{
    $conn=getConnection();
    $sql = "select * from wishlist where Uname='$uname'";
    $res = mysqli_query($conn, $sql);
    return $res;
}

function removewishlist($product_price){

    $conn=getConnection();

    mysqli_query($conn, "DELETE FROM wishlist WHERE price = $product_price");
    $res1=mysqli_query($conn, "DELETE FROM wishlist WHERE price = $product_price");
    return $res1;
}

function addtowishlist($uname,$product_name,$product_price,$product_image,$product_quantity){

    $conn=getConnection();

    $res1=mysqli_query($conn, "INSERT INTO wishlist(uname, Product_name, price, image, quantity, Source) VALUES('$uname', '$product_name', '$product_price', '$product_image', '$product_quantity','hall')");
    return $res1;
}

function addtowishlistitems($uname,$product_name,$product_price,$product_image,$product_quantity){

    $conn=getConnection();

    $res1=mysqli_query($conn, "INSERT INTO wishlist(uname, Product_name, price, image, quantity, Source) VALUES('$uname', '$product_name', '$product_price', '$product_image', '$product_quantity','items')");
    return $res1;
}

function addtowishlistdecoration($uname,$product_name,$product_price,$product_image,$product_quantity){

    $conn=getConnection();

    $res1=mysqli_query($conn, "INSERT INTO wishlist(uname, Product_name, price, image, quantity, Source) VALUES('$uname', '$product_name', '$product_price', '$product_image', '$product_quantity','decoration')");
    return $res1;
}
function addtowishlistphotography($uname,$product_name,$product_price,$product_image,$product_quantity){

    $conn=getConnection();

    $res1=mysqli_query($conn, "INSERT INTO wishlist(uname, Product_name, price, image, quantity, Source) VALUES('$uname', '$product_name', '$product_price', '$product_image', '$product_quantity','photography')");
    return $res1;
}




?>