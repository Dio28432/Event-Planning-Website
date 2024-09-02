<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Review</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap');
    @import url('https://use.fontawesome.com/releases/v5.8.2/css/all.css');

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

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

    body {
      font-family: 'Roboto', sans-serif;
      background-color: #E8F1FA;
      text-align: center;
    }

    ul {
      list-style-type: none;
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

    h2 {
      
      margin: 20px;
      font-size: 3rem;
      -webkit-text-fill-color: transparent;
      -webkit-background-clip: text;
      background: radial-gradient(#ADD8E6,#669ccb);
      -webkit-text-stroke: 2px #000;
    }


    .reviews {
      max-width: 800px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      grid-gap: 20px;
    }

    .review {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    .review p {
      font-size: 1.2rem;
      line-height: 1.5;
    }

    .review span {
      color: yellow;
      font-size: 2rem;
    }

    .review p:first-of-type {
      font-weight: bold;
    }

    .review p:last-of-type {
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

   
  </style>
</head>

<body>
  <ul>
    <li><a href="../Views/mainhomepage.php">Home</a></li>
  </ul>
  <h2>Reviews</h2>
  <button name="btn" onclick="getreview()">Show All Reviews</button>
  <button name="btn" onclick="closereview()">Close Reviews</button>
  <div class="reviews" id="reviews"></div>

  <script>
    function getreview() {

      xhttp = new XMLHttpRequest();
      xhttp.open('GET', '../Controllers/reviewCheckController.php', true);
      xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

           reviews = JSON.parse(this.responseText);
           reviewContent = "";
          for (i = 0; i < reviews.length; i++) {
            reviewContent += `<div class="review"><p>${reviews[i].uname}</p><p><span class="fas fa-star"></span> ${reviews[i].rating}</p><p>${reviews[i].review}</p></div>`;
          }
          document.getElementById('reviews').innerHTML = reviewContent;
        }
      }

      xhttp.send();
    }
    function closereview(){

      document.getElementById('reviews').innerHTML = '';
    }
    

  </script>
</body>

</html>
