<?php
require_once("productsPage.php");

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/styles.css">
  <title>bikuymarket.com</title>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/407bb34f63.js" crossorigin="anonymous"></script>

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!-- Css Stylesheets -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

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
              <a href="home.php"><img id="logo" src="images/bikuy market logo.png" alt=""></a>
            </td>
            <td id="cart-And-Login-Container">
              <div class="cart-And-Login-Container">
                <div class="loginAndRegister">
                  <a class="a" href="login.php">Login </a><a class="a" href="">/</a>
                  <a class="a" href="register.php">Register</a>
                </div>
                <div class="cart-icon">
                  <a class="nav-link fa fa-shopping-cart fa-2x" href="shoppingCart.html"aria-hidden="true"></a>
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
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">My Account</a>
            </li>
            <li class="nav-item">
              <!-- creating the dropdown list -->
              <div class="dropdown d1" id="drop">
                <button class="dropbtn">Shop</button>
                <div class="dropdown-content">
                  <a href="login.php">Cosmetics</a>
                  <a href="login.php">Electronics</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <!-- Search bar in navigation bar -->

        <div class="form-group ml-auto col-md-4 col-12">
          <div class="dropdown">
            <div class="default-option">
              Categories
            </div>
            <div class="dropdown-list">
              <ul>
                <li><i>&nbsp</i>Electrinics</li>
                <li><i>&nbsp</i>Cosmetics</li>
              </ul>
            </div>
          </div>

          <div class="search">
            <input type="text" class="search-input" placeholder="Search for products...">
          </div>
        <button class="search-btn" id="search-btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>

        </div>

      </nav>
    </div>
  </div>

  <!-- Middle container Section-->

  <div class="imgHeader">
    <div class="col-md-12 col-12">
      <img id="imageHead" src="images/head.jpg" alt="">
    </div>
    <div class="middle_container">

      <!-- **************************products************************************************************************ -->

      <div class="products_container">

        <div class="new">
          <h1 id="new">New</h1>
        </div>
        <!-- ********************* Section 1*********************************************************** -->
        <section class="products1 row mx-auto container-fluid">
          <?php
            component("Ice cream maker","R1000", "R850", "./images/ice-cream-maker.png","Enjoy a delicious home made ice cream");
            component("Body scrub","R450", "R400", "./images/blueBodyScrub.webp","Ocean Breeze body scrub");
            component("Toshiba red headphones","R500", "R350", "./images/toshibaRedHeadphones.jpg","Very comfortable");
            component("Makeup brushes","R600", "R570", "./images/makeupBrushes.png", "Soft brushes");
           ?>

      </div>

      </section>

      <!-- ********************* Section 2*********************************************************** -->
      <section class="products1 row mx-auto container-fluid">
        <div class="products2_title">
          <h1>TODAY'S DEALS</h1>
        </div>
        <div class="products1 row mx-auto container-fluid">
          <?php
            component("St. Ives Face Scrub","R800", "R725", "./images/faceSbrub.jpg", "Fresh skin face scrub 150ml");
            component("Surface laptop","R7500", "R5800", "./images/surfaceLaptop.jpg", "intel core i5");
            component("Infrared thermometer","R225", "R150", "./images/infrared-thermometer.jpg", "Control your body temperature");
            component("Gentle magic soap","R60", "R52", "./images/gentleMagicSoap.jpg", "100 ml");
           ?>

           <?php
             component("Air firer","R700", "R570", "./images/airfrier.webp", "This air firer is from Amazon");
             component("Body Lotion","300", "R270", "./images/BodyLotion.jpg", "With Olive oil & aloe vera");
             component("Aloe vera sheet mask","R250", "R200", "./images/aloeVeraSheetMask.jpg", "With aloe vera");
             component("Smart cup warmer","R620", "R530", "./images/smartCupWarmer.jpg", "Warm your cup while working");
            ?>

        </div>

      </section>

      <!-- ********************* Section 3 *********************************************************** -->
      <section class="products1 row mx-auto container-fluid">
        <div class="products3_title">
          <h1>TODAY'S DEALS</h1>
        </div>
        <div class="products1 row mx-auto container-fluid">
          <?php
            component("Smart watch","R850", "R670", "./images/smartWatch.jpg", "TFitbit versa peach/ Rose gold aluminium");
            component("Car cooler and warmer cup","R600", "R580", "./images/carCoolerWarmerCup.jpg", "Keep your cup at any temperature");
            component("Body Scrub","R200", "R170", "./images/bodyScrub.webp", "Get a soft touch");
            component("Vitamin C","500", "R350", "./images/VitaminCFace.webp", "Soft skin");
           ?>


        </div>

      </section>



      <!-- ********************* Section 4 *********************************************************** -->

      <section class="products1 row mx-auto container-fluid">
        <div class="products3_title">
          <h1>TODAY'S DEALS</h1>
        </div>
        <div class="products1 row mx-auto container-fluid">
          <?php
            component("Makari Body Milk","R2000", "R1700", "./images\MakariBodyLotion.jpg", "Intense Tone boosting");
            component("Marula Body oil","R300", "R230", "./images/MarulaBodyOil.webp", "Body oil");
            component("Coconut body lotion","R200", "R150", "./images/coconutBodyLotion.png", "Coconut properties");
            component("Body lotion","R300", "R280", "./images/BodyLotion.jpg", "Enjoy a soft skin");
           ?>

           <?php
             component("Smart watch","R850", "R670", "./images/smartWatch.jpg", "TFitbit versa peach/ Rose gold aluminium");
             component("Speaker","R570", "R400", "./images/speaker.jpg","Enjoy a good sound quality");
             component("Toshiba red headphones","R500", "R350", "./images/toshibaRedHeadphones.jpg","Very comfortable");
             component("Blender","R800", "R570", "./images/blender.jpg", "The best blender");
            ?>

        </div>

      </section>

      <!-- ********************* Section 5 *********************************************************** -->
      <section class="products1 row mx-auto container-fluid">
        <div class="products3_title">
          <h1>TODAY'S DEALS</h1>
        </div>
        <div class="products1 row mx-auto container-fluid">
          <?php
            component("Ice cream maker","R1000", "R850", "./images/ice-cream-maker.png","Enjoy a delicious home made ice cream");
            component("Speaker","R570", "R400", "./images/speaker.jpg","Enjoy a good sound quality");
            component("St. Ives Face Scrub","R800", "R725", "./images/faceSbrub.jpg", "Fresh skin face scrub 150ml");
            component("Gentle magic soap","R60", "R52", "./images/gentleMagicSoap.jpg", "100 ml");
           ?>

        </div>

      </section>

      <!-- ********************* Section 6 *********************************************************** -->

      <section class="products1 row mx-auto container-fluid">
        <div class="products3_title">
          <h1>TODAY'S DEALS</h1>
        </div>
        <div class="products1 row mx-auto container-fluid">
          <?php
            component("Gaming Keyboeard","R1200", "R725", "./images/RGBgamingKeyboard.jpg", "RGB Keyboad");
            component("Surface laptop","R7500", "R5800", "./images/surfaceLaptop.jpg", "intel core i5");
            component("ps4 Remote","R550", "R400", "./images/remote.jpg", "Wireless remote");
            component("Infrared thermometer","R225", "R150", "./images/infrared-thermometer.jpg", "Control your body temperature");
           ?>



        </div>
      </section>

      <section class="blankSpace">
      hhhh
    </section>
    </div>
  </div>

  <!-- **************************Bottom Section********************************** -->
  <footer>
  <section class="bottom">
    <div class="">
      <h1>Follow us</h1>
    </div>
    <div class="Bottom_description_container">
      <div class="Bottom_description_container row">
        <div class="Bottom_description_container_children col-lg-3 col-md-4 col-12">
          <h2>Company</h2>
          <p>About us</p>
          <p>Terms and conditions</p>
        </div>
        <div class="Bottom_description_container_children col-lg-3 col-md-4 col-12">
          <h2>Account</h2>
          <p>Personal details</p>
        </div>
        <div class="Bottom_description_container_children col-lg-3 col-md-4 col-12">
          <h2>Help</h2>
          <p>Contact Us</p>
          <p>Pickup points</p>
        </div>
        <div class="Bottom_description_container_children col-lg-3 col-md-4 col-12">
          <h2>Shop</h2>
          <p>Cosmetics</p>
          <p>Electronics</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bottom2 py-4">
    <div class="paymentIcons-Container">
      <a href=""><i class="fa fa-cc-visa fa-4x paymentMeth" aria-hidden="true"></i></a>
      <a href=""><i class="fa fa-cc-mastercard fa-4x paymentMeth" aria-hidden="true"></i></a>
      <a href=""><i class="fa fa-paypal fa-4x paymentMeth" aria-hidden="true"></i></a>
    </div>

  </section>
  <section class="bottom3">
    <div class="">
      BIKUYMARKET LTD.
    </div>
  </section>
  </footer>
    <script src="javascript.js"></script>
</body>

</html>
