<?php
session_start();
if (!isset($_SESSION['userName'])) {
   header("Location: login.php");
}

$uname = $_SESSION['userName'];
require_once('../Models/payhistorydb.php');
require_once('../Models/ordersdb.php');

deleteneworder();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Manager Dashboard</title>
   <style>
      body {
         background-color: lavender;
         text-align: center;
         font-family: Arial, sans-serif;
      }

      header {
         background-color: #333;
         overflow: hidden;
      }

      header ul {
         list-style-type: none;
         margin: 0;
         padding: 0;
      }

      header li {
         float: left;
      }

      header a {
         display: block;
         color: white;
         text-align: center;
         padding: 14px 16px;
         text-decoration: none;
      }

      header a:hover {
         background-color: #111;
      }

      section {
         margin-top: 20px;
      }

      table {
         width: 80%;
         margin: auto;
         border-collapse: collapse;
      }

      th, td {
         padding: 10px;
         text-align: left;
         border-bottom: 1px solid #ddd;
      }

      th {
         background-color: #333;
         color: white;
      }
   </style>
</head>

<body>

   <header>
      <ul>
         <li><a href="hmanagerhome.php">Home</a></li>
         <li><a href="hmanagerprofile.php">My Profile</a></li>
         <li><a href="hall.php">My Products</a></li>
         <li><a href="hmanagerorders.php">My Orders</a></li>
         <li style="float:right"><a class="active" href="hmanagerhome.php">Back</a></li>
      </ul>
   </header>

   <section class="display-product-table">
      <table>
         <tr>
            <th>Username</th>
            <th>Product name</th>
            <th>Price</th>
            <th>Quantity</th>
         </tr>

         <?php
         $res = show();
         while ($row = mysqli_fetch_assoc($res)) {
            ?>
            <tr>
               <td><?php echo $row['uname']; ?></td>
               <td><?php echo $row['Product_name']; ?></td>
               <td><?php echo $row['price']; ?>/-</td>
               <td><?php echo $row['quantity']; ?></td>
            </tr>
            <?php
         }
         ?>
      </table>
   </section>

</body>

</html>
