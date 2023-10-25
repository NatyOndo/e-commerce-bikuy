<?php
require_once("productsPage.php");
require 'config.php';


  if(!empty($_SESSION["userId"])){
    $id = $_SESSION["userId"];
    $result = mysqli_query($conn, "SELECT * FROM registration WHERE userId = $id");
    $row = mysqli_fetch_assoc($result);
  }else{
    header("Location: myaccount.php");
  }
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>account/Login</title>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/407bb34f63.js" crossorigin="anonymous"></script>

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!-- Css Stylesheets -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="css/myAccount.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;900&family=Ubuntu&display=swap" rel="stylesheet">

  <link href="https://db.onlinewebfonts.com/c/9b62dc86f936227b3f7b367bd0b6c05e?family=Tw+Cen+MT" rel="stylesheet" type="text/css" />
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
                <div class="loginAndRegister">
                  <a class="a" href="login.php" >Logout</a>
                </div>
              </div>

            </td>

          </tr>
        </table>
      </div>

      <!-- Navigation Bar -->

      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="myaccount.php">My Account</a>
            </li>
            <li class="nav-item">
              <div class="dropdown d1" id="drop">
                <button class="dropbtn">Shop</button>
                <div class="dropdown-content">
                  <a href="shop2.php">Cosmetics</a>
                  <a href="shop.php">Electronics</a>
                </div>
              </div>
            </li>
          </ul>
        </div>

      </nav>
    </div>
  </div>
<!-- **********************************middle container************************ -->
  <div class="row ma">
    <div class="myAccount col-lg-3 col-md-4 col-12">
      <h4>Orders</h4>
      <br>
      <p>
        <a href="#" class="a2">Orders</a>
      </p>
      <p>
        <a href="#" class="a2">Invoices</a>
      </p>
    </div>
    <hr>
    <div class="myAccount col-lg-3 col-md-4 col-12">
      <h4>Personal details</h4>
      <p><a href="#" class="a2">Personal Information</a></p>
      <p><a href="#" class="a2">Address book</a></p>
    </div>


  </div>


</body>

</html>
