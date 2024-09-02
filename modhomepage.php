<?php
session_start();
if (!isset($_SESSION['userName'])) {
   header("Location:login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
   <title>Moderator</title>

<body style="background-color:	lavender;text-align:center">
   </head>

   <body>
      <form method="POST">
         <ul>
            <li><a href="modhomepage.php">Home</a></li>
            <li><a href="modempinfo.php">Show Employee Info</a></li>
            <li><a href="moduserinfo.php">Show User Info</a></li>
            <li><a href="modprofile.php">My Profile</a></li>
            <li><a href="modmessages.php">Messages</a></li>
            <li><button name="logout">Log out</button></li>
         </ul>
      </form>
      <?php
      if (isset($_POST['logout'])) {
         session_destroy();
         header("location:login.php");

      }
      ?>
      <center>
         <br><b>
            <?php
            if (isset($_SESSION['userName'])) {
               echo "Welcome " . $_SESSION['userName'];
            }
            ?>

            <div>

               <section class="category-profile">


                  <div class="box-container">

                     <a href="modprofile.php?category=userprofile" class="box">
                        <img src="user.png" alt="">
                        <h3>My Profile</h3>
                     </a>

                     <a href="modempinfo.php?category=product" class="box">
                        <img src="empinfo.png" alt="">
                        <h3>Employee Info</h3>
                     </a>

                     <a href="moduserinfo.php?category=order" class="box">
                        <img src="userinfo.png" alt="">
                        <h3>User Info</h3>
                     </a>

                     <a href="modmessages.php?category=order" class="box">
                        <img src="message.png" alt="">
                        <h3>Messages</h3>
                     </a>

               </section>
            </div>

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

               .category-profile .box-container {
                  display: grid;
                  grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
                  gap: 1rem;
                  align-items: flex-start;
               }


               .category-profile .box-container .box img {
                  width: 100%;
                  height: 12rem;
                  margin-top: 5rem;
                  object-fit: contain;
               }

               .category-profile .box-container .box h3 {
                  font-size: 1rem;
                  margin-top: 2rem;
                  color: var(--black);
                  text-transform: capitalize;
               }

               .category-profile .box-container .box:hover {
                  background-color: var(--black);
               }

               .category-profile .box-container .box:hover img {
                  filter: invert(1);
               }
            </style>


   </body>

</html>