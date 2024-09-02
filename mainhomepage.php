<?php 
session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>LITMOSPHERE</title>
        <link rel ="stylesheet"href="style.css">
    </head>
    <body>

    
    <div class="banner">
        <div class="navbar">
            
            <ul>
                <li><a href ="../Views/mainhomepage.php">HOME</a></li>
                <li><a href="../Views/review.php">Reviews</a></li>
                <li><a href ="../Views/aboutus.php">ABOUT US</a></li>
                <li><a href ="../Views/contactus.php">CONTACT US</a></li>
            

                

            </ul>


    </div>

    <div class="content">
        <h1>LITMOSPHERE</h1>


        <p>YOUR ONLINE EVENT BOOKING GO TO PLACE</p>
        <div>
                <form method="post" action="../Controllers/logsignCheckController.php">
                    <button type="submit" name="login"><span></span>LOGIN</button>
                    <button type="submit" name="signup"><span></span>SIGNUP</button>
                </form>
        </div>
    </div>

        
    
    </body>
</html>