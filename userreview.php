<?php
session_start();
if (!isset($_SESSION['userName'])) {
  header("Location:../Views/login.php");
}
require_once('../Models/reviewtabledb.php');
$uname = $_SESSION['userName'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rating and Review System</title>
  <style>
    body {
      background-color: lavender;
      text-align: center;
      font-family: 'Arial', sans-serif;
    }

    header {
      background-color: #333;
      color: white;
      padding: 15px;
    }

    nav {
      display: flex;
      justify-content: center;
      background-color: #333;
    }

    nav a {
      color: white;
      text-decoration: none;
      padding: 14px 16px;
      display: block;
    }

    nav a:hover {
      background-color: #111;
    }

    .container {
      margin: 20px;
    }

    h2 {
      color: #333;
    }

    form {
      margin: 20px 0;
    }

    input[type="radio"] {
      display: none;
    }

    label {
      color: #333;
      cursor: pointer;
      font-size: 20px;
    }

    label:hover {
      color: gold;
    }

    input[type="radio"]:checked+label {
      color: gold;
    }

    textarea {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      box-sizing: border-box;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    table, th, td {
      border: 1px solid #333;
    }

    th, td {
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #333;
      color: white;
    }

    .review {
      margin: 10px 0;
    }

    .star {
      color: gold;
    }

    input[type="submit"] {
      background-color: #27ae60;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #219d54;
    }
  </style>
</head>

<body>
  <header>
    <h1>Experience Review</h1>
  </header>

  <nav>
    <a href="userhomepage.php">Home</a>
  </nav>

  <div class="container">
    <h2>Submit Your Review</h2>
    <form method="post" action="../Controllers/userreviewCheckController.php">
      <input type="hidden" name="id" value="1">
      <p>Your Rating:</p>
      <input type="radio" name="rating" id="1" value="1">
      <label for="1">1</label>
      <input type="radio" name="rating" id="2" value="2">
      <label for="2">2</label>
      <input type="radio" name="rating" id="3" value="3">
      <label for="3">3</label>
      <input type="radio" name="rating" id="4" value="4">
      <label for="4">4</label>
      <input type="radio" name="rating" id="5" value="5">
      <label for="5">5</label>
      <br>
      <textarea name="review" cols="30" rows="10" placeholder="Enter your review here"
        onKeyPress="if(this.value.length==200) return false;"></textarea>
      <br>
      <input type="submit" name="submit" value="Submit Review">
    </form>

    <h2>Reviews</h2>
    <div class="review">
      <?php
      $result = userreview($uname);
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<div>';
        echo '<p>' . $row['uname'];
        echo '<span class="star">&starf;</span> ' . $row['rating'];
        echo '<br>' . $row['review'] . '</p>';
        echo '</div>';
      }
      ?>
    </div>
  </div>
</body>

</html>
