<?php
session_start();
if (!isset($_SESSION['userName'])) {
   header("Location:../Views/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <title>Home</title>
   <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css"
      rel="stylesheet"
    />

<body style="background-color:	white;text-align:center">


   </head>

   <body>
      <form method="post">
         <nav>
         <div class="nav__logo"><a href="#">Lits.co</a></div>
            <ul class="nav__links">
               
         
            <li class="link"><a href="userhomepage.php">Home</a></li>
            <li class="link"><a href="preferences.php">Services</a>
            <div class="dropdown_menu">
                  <ul>
                     <li class="link"><a href="../Views/cuisines.php">Cuisines</a></li>
                     <li class="link"><a href="../Views/photography.php">Photography</a></li>
                     <li class="link"><a href="../Views/venue.php">Venues</a></li>
                     <li class="link"><a href="../Views/decoration.php">Decorations</a></li>
                  </ul>
               </div>
            </li>
            <li class="link"><a href="../Views/userprofile.php">My Profile</a></li>
            <li class="link"><a href="userwish.php">My Wishlist</a></li>
            <li class="link"><a href="userpaymenthistory.php">Payment History</a></li>
            <li class="link"><a href="walletmethod.php">My Wallet</a></li>
            <li class="link"><a href="userreview.php">Give review</a></li>
            <li class="link"><a href="usercart.php">My Cart</a></li>
            <li class="link"><button type="submit" name="logout" class="logout-button">Log out</button></li>
         
         </ul>
         
</nav>

      </form>
      <header>
      <div class="section__container">
        <div class="header__content">
        <center>
         <br><b>
            <?php
            if (isset($_SESSION['userName'])) {

               echo '<span class="welcome-message">Welcome ' . $_SESSION['userName'] . '</span>';
            } else {
               header("Location:../Views/login.php");
            }

            ?>
      </center>
          <h1>Litmoshphere</h1>
          <p>
            Elevate your events with our expert touch,
            Crafting unforgettable moments that mean so much.
            From dazzling celebrations to cultural marvels,
            We turn your visions into extraordinary realities.
          </p>
          <form method="post">
          <button type="submit" name="usermsg" >Contact Us</button>
</form>
        </div>
      </div>
    </header>
    
      <?php
       if (isset($_POST['logout'])) {
         session_destroy();
         header("location:../Views/mainhomepage.php");
      }

      ?>
      <?php
       if (isset($_POST['usermsg'])) {
        
         header("location: usermsg.php");
      }

      ?>

<section class="journey__container">
      <div class="section__container">
        <h2 class="section__title">Plan Your Dreams Today</h2>
        <p class="section__subtitle">Most popular services offered by us!</p>

               <div class="journey__grid">
            <div class="country__card">
               <img src="corpev.png" alt="country" />
               <div class="country__name">
                     <span>Corporate Events</span>
               </div>
            </div>
            <div class="country__card">
               <img src="out.png" alt="country" />
               <div class="country__name">
                     <span>Outdoor Events</span>
               </div>
            </div>
            <div class="country__card">
               <img src="rh.png" alt="country" />
               <div class="country__name">
                     <span>Royal halls</span>
               </div>
            </div>
            <div class="country__card">
               <img src="fd.png" alt="country" />
               <div class="country__name">
                     <span>Traditional food</span>
               </div>
            </div>
            <div class="country__card">
               <img src="ddds.png" alt="country" />
               <div class="country__name">
                     <span>Wedding photography</span>
               </div>
            </div>
            <div class="country__card">
               <img src="bd.png" alt="country" />
               <div class="country__name">
                     <span>Birthday party</span>
               </div>
            </div>
         </div>

      </div>
    </section>

      <div>
         <section class="category">

            <h1 class="title">Services</h1>

            <div class="box-container">

               <a href="Cuisines.php?category=cuisines" class="box">
                  <img src="fork.png" alt="">
                  <h3>Cuisines</h3>
               </a>

               <a href="venue.php?category=venue" class="box">
                  <img src="hall.png" alt="">
                  <h3>Venues</h3>
               </a>

               <a href="photography.php?category=photography" class="box">
                  <img src="Photography.png" alt="">
                  <h3>Photography</h3>
               </a>

               <a href="decoration.php?category=decoration" class="box">
                  <img src="decoration.png" alt="">
                  <h3>Decorations</h3>
               </a>

         </section>
      </div>
      <div>

         <section class="category-profile">

            <h1 class="title">Profile</h1>

            <div class="box-container">

               <a href="userprofile.php?category=userprofile" class="box">
                  <img src="user.png" alt="">
                  <h3>My Profile</h3>
               </a>

               <a href="walletmethod.php?category=wallet" class="box">
                  <img src="wallet.png" alt="">
                  <h3>My Wallet</h3>
               </a>

               <a href="userwish.php?category=wishlist" class="box">
                  <img src="wishlist.png" alt="">
                  <h3>My Wishlist</h3>
               </a>

               <a href="usercart.php?category=cart" class="box">
                  <img src="cart.png" alt="">
                  <h3>My Cart</h3>
               </a>

         </section>
      </div>

      <footer>
      <div class="section__container">
        <h4>Lits.co</h4>
        <div class="social__icons">
          <span><i class="ri-facebook-fill"></i></span>
          <span><i class="ri-twitter-fill"></i></span>
          <span><i class="ri-instagram-line"></i></span>
          <span><i class="ri-linkedin-fill"></i></span>
        </div>
        <p>
        Events reveal the beauty in simplicity, showcasing the profound impact of each moment.
        </p>
      </div>
    </footer>
      <style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,500&display=swap");

:root {
  --primary-color: #669ccb;
  --primary-color-dark: #5681a7;
  --secondary-color: #e8f1fa;
  --text-dark: #282d31;
  --text-light: #767268;
  --extra-light: #f3f4f6;

  --max-width: 1200px;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.section__container {
  padding: 5rem 1rem;
  max-width: var(--max-width);
  margin: auto;
}

.section__title {
  font-size: 2rem;
  font-weight: 500;
  color: var(--primary-color);
  margin-bottom: 1rem;
  text-align: center;
}

.section__subtitle {
  font-size: 1rem;
  font-style: italic;
  color: var(--primary-color);
  margin-bottom: 5rem;
  text-align: center;
}

img {
  width: 100%;
}

body {
  font-family: "Roboto", sans-serif;
}

nav {
  position: absolute;
  top: 0;
  left: 50%;
  transform: translateX(-50%);
  padding: 2rem 1rem;
  width: 100%;
  max-width: var(--max-width);
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.nav__logo a {
  text-decoration: none;
  color: var(--extra-light);
  font-size: 1.5rem;
}

.nav__links {
  display: flex;
  list-style: none;
  align-items: center;
  gap: 2rem;
}

.link a{
  color: var(--extra-light);
  text-transform: uppercase;
  cursor: pointer;
  transition: 0.3s;
}

.link:hover a{
  color: var(--primary-color);
}



.dropdown_menu li{
            display: block;
         }

.dropdown_menu {
            display: none;
            position: absolute;
            background-color:  var(--primary-color); 
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
         }
.dropdown_menu a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
            transition: 0.3s;
}

.dropdown_menu a:hover {
            background-color: var(--primary-color);
            color: var(--extra-light);
}
li:hover .dropdown_menu {
            display : block;
          background-color: var(--extra-light);          
}




header {
  height: 100vh;
  background-image: linear-gradient(
      rgba(45, 92, 132, 0.5),
      rgba(45, 92, 132, 0.5)
    ),
    url("bg.jpg");
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
}

header .section__container {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.header__content {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 2rem;
  color: var(--extra-light);
}

.header__content h1 {
  font-size: 5rem;
  font-weight: 400;
  line-height: 6rem;
}

.header__content p {
  text-align: center;
  margin-bottom: 25px;
}

.header__content button {
  padding: 1rem 2rem;
  outline: none;
  border: none;
  border-radius: 5px;
  background-color: var(--primary-color);
  color: var(--extra-light);
  font-size: 1rem;
  cursor: pointer;
  transition: 0.3s;
}

.header__content button:hover {
  background-color: var(--primary-color-dark);
}
.welcome-message {
    font-size: 18px;
}

.logout-button {
  padding: 0.5rem 1rem;
  outline: none;
  border: none;
  border-radius: 5px;
  background-color: var(--primary-color);
  color: var(--extra-light);
  font-size: 1rem;
  cursor: pointer;
  transition: 0.3s;
}

.logout-button:hover {
  background-color: var(--primary-color-dark);
}

.journey__container {
  background-color: var(--secondary-color);
}

.journey__grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1rem;
}

.country__card {
  background-color: var(--extra-light);
}

.country__name {
  padding: 1rem;
  text-align: left;
  display: flex;
  align-items: center;
  gap: 0.5rem;
  color: var(--text-light);
  cursor: pointer;
}
.country__card img {
    width: 100%;
    max-width: 100%;
    height: auto;
}

.country__name span {
  font-style: italic;
}
            .category .title {
            
            margin-top: 20px;
            margin-bottom: 20px;
            }

         .category .box-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(1rem, 1fr));
            gap: 1rem;
            align-items: flex-start;
            
         }

 
         .category .box-container .box img {
            width: 100%;
            height: 5rem;
            object-fit: contain;
         }

    

         .category .box-container .box h3 {
            font-size: 1rem;
            margin-top: 1.5rem;
            color: var(--black);
            text-transform: capitalize;
         }

         .category .box-container .box:hover {
            background-color: var(--black);
         }

         .category .box-container .box:hover img {
            filter: invert(1);
         }

         .category-profile .box-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(1rem, 1fr));
            gap: 1rem;
            align-items: flex-start;
         }


         .category-profile .box-container .box img {
            width: 100%;
            height: 5rem;
            object-fit: contain;
         }

         .category-profile .box-container .box h3 {
            font-size: 1rem;
            margin-top: 1.5rem;
            color: var(--black);
            padding: 2rem;
            text-transform: capitalize;
         }

         .category-profile .box-container .box:hover {
            background-color: var(--black);
         }

         .category-profile .box-container .box:hover img {
            filter: invert(1);
         }
                  footer {
         background-color: var(--text-dark);
         color: var(--secondary-color);
         }

         footer .section__container {
         display: grid;
         gap: 2rem;
         text-align: center;
         padding: 2rem;
         }

         footer h4 {
         font-size: 1.5rem;
         font-weight: 500;
         }

         .social__icons {
         display: flex;
         align-items: center;
         justify-content: center;
         gap: 1rem;
         }

         .social__icons i {
         padding: 5px;
         font-size: 1.2rem;
         cursor: pointer;
         }

         footer p {
         font-style: italic;
         }

      </style>



     

    <?php
      if (isset($_POST['logout'])) {
         session_destroy();
         header("location:../Views/login.php");
      }

      ?>



   </body>

</html>