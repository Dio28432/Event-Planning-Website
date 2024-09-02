<?php
session_start();
if (!isset($_SESSION['userName'])) {
   header("Location:../Views/login.php");
}

require_once('../Models/payhistorydb.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

   <title>Document</title>

<body style="background-color:	lavender;text-align:center">
   </head>

   <body>
      <ul>
         <li><a href="../Views/userhomepage.php">Home</a></li>
         <li style="float:right"><a class="active" href="../Views/userhomepage.php">Back</a></li>
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



      <section class="display-product-table">

         <table>

            <form method="post">
               <th>Username</th>
               <th>Product name</th>
               <th>Price</th>
               <th>Quantity</th>


               <?php

                  $uname = $_SESSION['userName'];

                  $res=payhistory($uname);

                  while ($row = mysqli_fetch_assoc($res)) {
                  ?>

                  <tr>
                     <td>
                        <?php echo $row['uname']; ?>
                     </td>
                     <td>
                        <?php echo $row['Product_name']; ?>
                     </td>
                     <td>
                        <?php echo $row['price']; ?>/-
                     </td>
                     <td>
                        <?php echo $row['quantity']; ?>/-
                     </td>

                  </tr>


               <?php

               }
               ?>

         </table>
         </form>

      </section>



   </body>

</html>