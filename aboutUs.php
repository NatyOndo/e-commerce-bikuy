<?php
require_once("component.php");
require 'config.php';


  if(!empty($_SESSION["userId"])){
    $id = $_SESSION["userId"];
    $result = mysqli_query($conn, "SELECT * FROM registration WHERE userId = $id");
    $row = mysqli_fetch_assoc($result);
  }else{
    header("Location: aboutUs.php");
  }
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>about us</title>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/407bb34f63.js" crossorigin="anonymous"></script>

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!-- Css Stylesheets -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="css/loginAndRegistrationStyles.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;900&family=Ubuntu&display=swap" rel="stylesheet">

  <link href="https://db.onlinewebfonts.com/c/9b62dc86f936227b3f7b367bd0b6c05e?family=Tw+Cen+MT" rel="stylesheet" type="text/css" />


  <style media="screen">

body{
  background: #036D89;
}
        *, *:before, *:after {
      box-sizing: inherit;
      }

      .column {
      float: left;
      width: 33.3%;
      margin-bottom: 16px;
      padding: 0 8px;
      }

      .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      margin: 8px;
      }

      .about-section {
      padding: 50px;
      text-align: center;
      background: #036D89;
      color: white;
      }

      .container {
      padding: 0 16px;
      }

      .container::after, .row::after {
      content: "";
      clear: both;
      display: table;
      }
      .ourTeam{
        color: white;
      }
      .title {
      color: grey;
      }

      .button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #D26015;
      text-align: center;
      cursor: pointer;
      width: 100%;
      }
      .row{
        width: 70%;
        margin-left: 15%;
        background: linear-gradient(to bottom right, #036D89, #E9E9E9);
      }
      .button:hover {
      background-color: #555;
      }
      .team{
        width: 100%;
        height: 200px;
      }
      @media screen and (max-width: 650px) {
      .column {
        width: 100%;
        display: block;
      }
}
  </style>

</head>

<body>
  <!-- Top container section -->
  <div class="top_container">
    <div class="subTopContainer">
      <div class="header">
        <table>
          <tr>
            <td>

            </td>
            <td>
              <a href="index.php"><img id="logo" src="images/bikuy market logo.png" alt=""></a>
            </td>
            <td id="cart-And-Login-Container">
              <div class="cart-And-Login-Container">
                <div class="loginAndRegister">
                  <?php
                    echo $row["firstName"];

                    ?>
                </div>
                <div class="cart-icon">
                  <a class="nav-link fa fa-shopping-cart fa-2x" href="shoppingCart.html"aria-hidden="true"></a>
                </div>
              </div>

            </td>

          </tr>
        </table>
      </div>

      <?php
        require "header.php";
       ?>
    </div>
  </div>


  <!-- ***************middle container*********************************** -->

  <div class="about-section">
  <h1>Bikuy Market</h1>
  <p>Bikuy Market is an online store where yoy can find Cosmetics and some electronics products</p>
  <p>Feel safe buying with us</p>
</div>

<h2 class="ourTeam" style="text-align:center">This is aour team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img class="team" src="images/woman.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Julia</h2>
        <p class="title">CEO & Founder</p>

        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img class="team" src="images/woman2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Naty Ondo</h2>
        <p class="title">Marketing</p>

        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img class="team" src="images/man.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>

        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</body>

</html>
