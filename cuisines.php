<?php
session_start();
if (!isset($_SESSION['userName'])) {
    header("Location:login.php");
}

$uname = $_SESSION['userName'];
require_once('../Models/itemsdb.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <ul>
        <li><a href="userhomepage.php">Home</a></li>
        <li><a href="usercart.php">My Cart</a></li>
        <li style="float:right"><a class="active" href="../Views/userhomepage.php">Back</a></li>
    </ul>
    <h2>Search</h2>

    <form method="post" action="../Views/cuisinesearch.php">
        <label for="search">Search:</label><br>
        <input type="text" id="search" name="search"><br>
        <Button type="submit" name="sear">Search </Button>

    </form>

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



        :root {
            --blue: #3498db;
            --red: #e74c3c;
            --orange: #f39c12;
            --black: #333;
            --white: #fff;
            --light-bg: #eee;
            --box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
            --border: 2px solid var(--black);
        }

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
        }




        body {
            background-color: var(--light-bg);
        }


        .container {
            padding: 0 20px;
            margin: 0 auto;
            max-width: 1200px;
            padding-bottom: 70px;
        }

        .container .products .box-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
        }

        .container .products .box-container .box {
            text-align: center;
            border-radius: 5px;
            box-shadow: var(--box-shadow);
            border: var(--border);
            position: relative;
            padding: 20px;
            background-color: var(--white);
            width: 350px;
        }

        .container .products .box-container .box img {
            height: 250px;
        }

        .container .products .box-container .box .name {
            font-size: 20px;
            color: var(--black);
            padding: 5px 0;
        }

        .container .products .box-container .box .price {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 5px 10px;
            border-radius: 5px;
            background-color: var(--orange);
            color: var(--white);
            font-size: 25px;
        }

        .container .products .box-container .box input[type="number"] {
            margin: 10px 0;
            width: 100%;
            border: var(--border);
            border-radius: 5px;
            font-size: 20px;
            color: var(--black);
            padding: 12px 14px
        }

        .container .products .box-container .box .btn {
            margin: 10px 0;
            width: 100%;
            padding: 5px 10px;
            background-color: var(--blue);
            color: var(--white);
            font-size: 25px;
        }
    </style>

    <div class="container">

        <div class="products">

            <h1 class="heading">latest products</h1>



            <div class="box-container">


                <?php

                $res=show();
                while ($fetch_product = mysqli_fetch_assoc($res)) {
                    ?>
                    <form method="post" class="box" action="../Controllers/cuisinesCheckController.php">
                        <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" height="100" alt="">
                        <div class="name">
                            <?php echo $fetch_product['name']; ?>
                        </div>
                        <div class="price">BDT
                            <?php echo $fetch_product['price']; ?>/-
                        </div>
                        <input type="number" min="1" name="product_quantity" value="1">
                        <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                        <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                        <input type="submit" value="add to cart" name="add_to_cart" class="btn">
                        <input type="submit" value="add to wishlist" name="add_to_wishlist" class="btn">

                    </form>
                    <?php
                }
                ?>

            </div>

        </div>

    </div>
</body>

</html>