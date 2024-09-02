<?php
session_start();
if (!isset($_SESSION['userName'])) {
   header("Location:login.php");
}
require_once('../Models/halldb.php');
$uname = $_SESSION['userName'];


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

      <form method="post">
         <ul>
            <li><a href="hmanagerhome.php">Home</a></li>
            <li><a href="hmanagerprofile.php">My Profile</a></li>
            <li><a href="hall.php">My Products</a></li>
            <li><a href="hmanagerorders.php">My Orders</a></li>
         </ul>
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

         li button {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            background-color: #111;
         }


         li a:hover {
            background-color: #111;
         }
      </style>
      <center>

         <div class="container">

            <section>

               <form action="../Controllers/hallproductsCheckController.php" method="post" class="add-product-form" enctype="multipart/form-data">
                  <h3>Add a new product</h3>
                  <input type="text" name="p_name" placeholder="enter the product name" class="box" required>
                  <input type="number" name="p_price" min="0" placeholder="enter the product price" class="box"
                     required>
                  <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
                  <input type="submit" value="add the product" name="add_product" class="btn">
               </form>

            </section>
            <section class="display-product-table">

               <table>

                  <form method="post" action="../Controllers/hallproductsCheckController.php">
                     <th>Product image</th>
                     <th>Product name</th>
                     <th>Product price</th>
                     <th>Action</th>



                     <?php

                     $res=showhallproducts();
                     while ($row = mysqli_fetch_assoc($res)) {
                        ?>

                        <tr>
                           <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                           <td>
                              <?php echo $row['name']; ?>
                           </td>
                           <td>BDT
                              <?php echo $row['price']; ?>/-
                           </td>
                           <td>
                           <td><button type="submit" name="delete" value="<?php echo $row["name"]; ?>">Delete</button>
                           </td>
                           <td><button><a href="halledit.php?id=<?php echo $row['name']; ?>">Update</a></button>
                           <td>
                           </td>
                        </tr>

                        <?php
                     }
                     ?>

               </table>

            </section>



         </div>

   </body>

</html>