<?php
session_start();
if (!isset($_SESSION['userName'])) {
   header("Location: login.php");
}
require_once('../Models/registrationdb.php');
$uname = $_SESSION['userName'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Manager Profile</title>

   <style>
      body {
         background-color: lavender;
         text-align: center;
         font-family: Arial, sans-serif;
         margin: 0;
         padding: 0;
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

      th,
      td {
         padding: 10px;
         text-align: left;
         border-bottom: 1px solid #ddd;
      }

      th {
         background-color: #333;
         color: white;
      }

      button {
         background-color: #555;
         color: white;
         padding: 10px 15px;
         border: none;
         text-decoration: none;
         cursor: pointer;
      }

      button:hover {
         background-color:#111 ;
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
      </ul>
   </header>

   <section class="display-product-table">
      <table>
         <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
         </tr>

         <?php
         $res = hallmanagerprofile($uname);

         while ($row = mysqli_fetch_assoc($res)) {
            ?>
            <tr>
               <td><?php echo $row['Fname']; ?></td>
               <td><?php echo $row['Lname']; ?></td>
               <td><?php echo $row['Email']; ?></td>
               <td><?php echo $row['Phone']; ?></td>
               <td><a href="hmanageredit.php"><button>Update</button></a></td>
            </tr>
            <?php
         }
         ?>
      </table>
   </section>

</body>

</html>
