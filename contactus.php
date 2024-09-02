<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Our Contact Details</title>
    <body style="background-color:	lavender;text-align:center">
</head>
<body>
    
    <h1>Our Contact Details</h1>
        <p><h2>We are happy to hear from you. You can reach us by any of the following methods:</h2></p>
    <ul>
       <b>  <li>Office Address: 221/4, Baridhara, Dhaka, Bangladesh</li>
            <li>Phone: +880 18201 53496</li>
            <li>Email: litmosphere@gmail.com</li>
    </ul>

    <form method="post" action="../Controllers/contactusCheckController.php">
        <h2> Leave us a message for detailed information! </h2>
    <label for="Name">Enter your Name:</label>
    <input type="text"  name="Name"><br><br>
    <label for="Email">Enter your Email:</label>
    <input type="email"  name="Email"><br><br><br>
    <textarea name="Message"  cols="30" rows="10" placeholder="Enter your message here" onKeyPress="if(this.value.length==200) return false;"></textarea>
        <br>
        <input type="submit" name="submit" value="Submit">
    <button name="back">Back</button>
    </form>
    
</body>
</html>