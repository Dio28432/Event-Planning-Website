<?php
session_start();
if (!isset($_SESSION['userName'])) {
    header("Location:login.php");
}
$uname = $_SESSION['userName'];
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "projectrecipes";
$conn = new mysqli($servername, $username, $pass, $dbname);
$grand_total = 0;

$sql = "select * from cart";
$res = mysqli_query($conn, $sql);


if (isset($_POST['update_cart'])) {
    $update_quantity = $_POST['cart_quantity'];
    $update_uname = $_POST['cart_uname'];
    mysqli_query($conn, "UPDATE cart SET quantity = '$update_quantity' WHERE Product_name = '$update_uname'") or die('query failed');
}

if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM cart WHERE Product_name = '$remove_id'") or die('query failed');
    header('location:usercart.php');
}
if (isset($_GET['delete_all'])) {
    mysqli_query($conn, "DELETE FROM cart WHERE uname = '$uname'") or die('query failed');
    header('location:usercart.php');
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<body style="background-color:	lavender;text-align:center">
    </head>

    <body>
        <ul>
            <li><a href="userhomepage.php">Home</a></li>
            <li><a href="usercart.php">My Cart</a></li>
            <li style="float:right"><a class="active" href="userhomepage.php">Back</a></li>
        </ul>
        <style>
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }

            li {
                float: left;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }


            li a:hover {
                background-color: #111;
            }
        </style>

        <div class="shopping-cart">

            <h1 class="heading"> cart</h1>

            <table>

                <th>image</th>
                <th>name</th>
                <th>price</th>
                <th>quantity</th>
                <th>total price</th>
                <th>action</th>


                <?php
                $cart_query = mysqli_query($conn, "SELECT * FROM cart WHERE uname = '$uname'");


                while ($fetch_cart = mysqli_fetch_assoc($cart_query)) {
                    ?>
                    <tr>
                        <td><img src="images/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
                        <td>
                            <?php echo $fetch_cart['Product_name']; ?>
                        </td>
                        <td>Bdt
                            <?php echo $fetch_cart['price']; ?>/-
                        </td>
                        <td>
                            <form method="post">
                                <input type="hidden" name="cart_uname" value="<?php echo $fetch_cart['Product_name']; ?>">
                                <input type="number" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
                                <input type="submit" name="update_cart" value="update" class="btn">
                            </form>
                        </td>
                        <td>Bdt
                            <?php
                            echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']);
                            $grand_total += $sub_total;
                            $_SESSION['grand_total'] = $grand_total; ?>/-
                        </td>

                        <td><a href="usercart.php?remove=<?php echo $fetch_cart['Product_name']; ?>"
                                onclick="return confirm('Remove this from cart?');" class="delete-btn">Remove</a>
                        </td>

                    </tr>
                    <?php

                }

                ?>
                <tr class="table-bottom">
                    <td colspan="4">Grand total :</td>
                    <td>Bdt
                        <?php echo $grand_total; ?>/-
                    </td>
                    <td><a href="usercart.php?delete_all" onclick="return confirm('Delete all from cart?');"
                            class="delete-btn <?php echo ($grand_total > 1) ? '' : 'disabled'; ?>">Empty the Cart</a>
                    </td>
                </tr>
            </table>


            <div class="cart-btn">
                <a href="userpayment.php" class="btn <?php echo ($grand_total > 1) ? '' : 'disabled'; ?>">Proceed to
                    Checkout</a>
            </div>



    </body>

</html>