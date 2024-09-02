<?php
session_start();
if (!isset($_SESSION['userName'])) {
    header("Location:login.php");
}
$uname = $_SESSION['userName'];
$grand_total = $_SESSION['grand_total'];

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "projectrecipes";
$conn = new mysqli($servername, $username, $pass, $dbname);

$sql1 = "select Balance from registration where Uname = '$uname'";

$res1 = mysqli_query($conn, $sql1);





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>pay</title>

<body style="background-color:	lavender;text-align:center">
    </head>

    <body>


        <ul>
            <li><a href="userhomepage.php">Home</a></li>
            <li><a href="userpayment.php">Back</a></li>

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
        <br>

        <form method="post">

            <fieldset style="max-width: max-content;">
                <table>

                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total price</th>



                    <?php

                    $uname = $_SESSION['userName'];
                    $servername = "localhost";
                    $username = "root";
                    $pass = "";
                    $dbname = "projectrecipes";
                    $conn = new mysqli($servername, $username, $pass, $dbname);

                    $sql1 = "select Balance from registration where Uname = '$uname'";

                    $res1 = mysqli_query($conn, $sql1);
                    while ($row = mysqli_fetch_assoc($res1)) {
                        $Balance = $row["Balance"];
                        echo "Current balance" . $row["Balance"];
                    }
                    $cart_query = mysqli_query($conn, "SELECT * FROM cart WHERE uname = '$uname'");
                    $grand_total = 0;

                    while ($fetch_cart = mysqli_fetch_assoc($cart_query)) {
                        ?>
                        <tr>
                            <td><img src="images/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
                            <td>
                                <?php echo $fetch_cart['Product_name']; ?>
                            </td>
                            <td>$
                                <?php echo $fetch_cart['price']; ?>/-
                            </td>
                            <td>
                                <form action="" method="post">
                                    <input type="hidden" name="cart_uname"
                                        value="<?php echo $fetch_cart['Product_name']; ?>">
                                    <input type="number" name="cart_quantity"
                                        value="<?php echo $fetch_cart['quantity']; ?>">
                                    <input type="submit" name="update_cart" value="update" class="btn">
                                </form>
                            </td>
                            <td>Bdt
                                <?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-
                            </td>


                        </tr>
                        <?php
                        $grand_total += $sub_total;
                    }

                    ?>
                    <tr class="table-bottom">
                        <td colspan="4">Grand total :</td>
                        <td>Bdt
                            <?php echo $grand_total; ?>/-
                        </td>

                    </tr>

                </table>

                <button name="pay">Pay</button>
                <?php
                if (isset($_POST['pay'])) {

                    if ($grand_total == 0) {
                        echo 'Your Cart is Empty';
                    } else if ($Balance >= $grand_total) {
                        $newbalance = $Balance - $grand_total;
                        echo 'Payment successful';
                        $sql2 = "UPDATE registration SET Balance = '$newbalance' WHERE Uname='$uname'";
                        $sql3 = "INSERT INTO payhistory SELECT * FROM cart WHERE Uname='$uname'";
                        $sql5 = "INSERT INTO orders(NewOrder) values('true')";
                        $sql4 = "DELETE FROM cart WHERE Uname='$uname'";

                        mysqli_query($conn, $sql2);
                        mysqli_query($conn, $sql3);
                        mysqli_query($conn, $sql5);
                        mysqli_query($conn, $sql4);


                    } else if ($Balance < $grand_total) {
                        echo 'Insufficient balance';

                    }


                }
                ?>

            </fieldset>
            </center>
        </form>

        <?php
        while ($row = mysqli_fetch_assoc($res1)) {
            $Balance = $row["Balance"];
            echo "Current balance" . $row["Balance"];
        }
        ?>



    </body>

</html>