<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>signup</title>
    <body style="background-color:	lavender;text-align:center">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="navbar">
        <a href="../Views/mainhomepage.php">Back</a>
     </div>

<style>
   button[name="btn"] {
        background-color: #27ae60;
        color: white;
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button[name="btn"]:hover {
        background-color: #219d54;
    }


    .navbar {
        background-color: #333;
        overflow: hidden;
    }

    .navbar a {
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .navbar a:hover {
        background-color: #ddd;
        color: black;
    }
    .form-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: inline-block;
    }

    .form-container form {
        background-color: white;
        border: 1px solid black;
        padding: 20px;
    }

</style>
<?php
        if(isset($_SESSION['error_message1'])){
            echo "<p style='color:red;'>".$_SESSION['error_message1']."<p>";
            unset($_SESSION['error_message1']);
        }
        if(isset($_SESSION['error_message2'])){
            echo "<p style='color:red;'>".$_SESSION['error_message2']."<p>";
            unset($_SESSION['error_message2']);
            }
        if(isset($_SESSION['error_message3'])){
            echo "<p style='color:red;'>".$_SESSION['error_message3']."<p>";
            unset($_SESSION['error_message3']);
            }
    ?>

<div class="form-container">
    <form method="post" action="../Controllers/SignCheckController.php">
        <center>

        <fieldset style="max-width: max-content;">
            <legend align="center">Sign Up</legend>

          
            <label for="Fistname"></label>
            <input type="Text" name="Firstname" placeholder="First Name"  /><br /><hr>
            <span><?php if(isset($_SESSION['error_message4'])){
            echo "<p style='color:red;'>".$_SESSION['error_message4']."<p>";
            unset($_SESSION['error_message4']);
            } ?></span>
            <br>

            <label for="Lastname"></label>
            <input type="Text" name="Lastname" placeholder="Last Name"  /><br /><hr>
            <span><?php if(isset($_SESSION['error_message5'])){
            echo "<p style='color:red;'>".$_SESSION['error_message5']."<p>";
            unset($_SESSION['error_message5']);
            } ?></span>
            <br>

            <label for="Username"></label>
            <input type="Text" name="Username" placeholder="Username" /><br /><hr>
            <span><?php if(isset($_SESSION['error_message6'])){
            echo "<p style='color:red;'>".$_SESSION['error_message6']."<p>";
            unset($_SESSION['error_message6']);
            } ?></span>
            <br>

            <label for="Email"></label>
            <input type="Email" name="Email" placeholder="Email Address" /><br /><hr>
            <span><?php if(isset($_SESSION['error_message7'])){
            echo "<p style='color:red;'>".$_SESSION['error_message7']."<p>";
            unset($_SESSION['error_message7']);
            }?></span>
            <br>

            <label for="Number"></label>
            <input type="Number" name="Number" placeholder="Phone Number" /><br /><hr>
            <span><?php if(isset($_SESSION['error_message8'])){
            echo "<p style='color:red;'>".$_SESSION['error_message8']."<p>";
            unset($_SESSION['error_message8']);
            }?></span>
            <br>

            <label for="Password"></label>
            <input type="Password" name="Password" placeholder="Password" /><br /><hr>
            <span><?php if(isset($_SESSION['error_message9'])){
            echo "<p style='color:red;'>".$_SESSION['error_message9']."<p>";
            unset($_SESSION['error_message9']);
            } ?></span>
            <br>

            <label for="conPassword"></label>
            <input type="Password" name="conPassword" placeholder="Confirm Password" /><br /><hr>
            <span><?php if(isset($_SESSION['error_message10'])){
            echo "<p style='color:red;'>".$_SESSION['error_message10']."<p>";
            unset($_SESSION['error_message10']);
            } ?></span>
            <br>

            <label for="security"></label>
            <input type="text" name="security" placeholder="Write your favourite word" /><br /><hr>
            <span><?php if(isset($_SESSION['error_message11'])){
            echo "<p style='color:red;'>".$_SESSION['error_message11']."<p>";
            unset($_SESSION['error_message11']);
        } ?></span><br>

            <button name="btn">Sign Up</button><br><hr>

            <p>Already have an account?<a href="../Views/login.php">Log in</a></p>

            <?php
            if (isset($_POST['btn'])) {
                $Password = $_POST['Password'];
                $Conpass = $_POST['conPassword'];
                    if ($Password != $Conpass) {
                        echo "Password and Confirm Password don't match!";
                    }
                }

            ?>

        </fieldset>
        </center>
    </form>

</div>
    
</body>

</html>