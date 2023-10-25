<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Product Details</title>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/407bb34f63.js" crossorigin="anonymous"></script>

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Css Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/singleProduct.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;900&family=Ubuntu&display=swap" rel="stylesheet">

    <link href="https://db.onlinewebfonts.com/c/9b62dc86f936227b3f7b367bd0b6c05e?family=Tw+Cen+MT" rel="stylesheet" type="text/css" />

    <!-- adding the javascript file -->
      <script src="singleProduct.js"></script>

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
                    <a class="a" href="loginh.php">Login </a><a class="a" href="">/</a>
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

        <nav class="navbar navbar-expand-lg navbar-dark py-2">
          <div class="collapse navbar-collapse col-lg-3 col-md-4 col-12" id="navbarTogglerDemo02">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">My Account</a>
              </li>
              <li class="nav-item">
                <div class="dropdown d1" id="drop">
                  <button class="dropbtn">Shop</button>
                  <div class="dropdown-content">
                    <a href="shop2.php">Cosmetics</a>
                    <a href="shop1.php">Electronics</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>

        </nav>
      </div>
    </div>

<!--****************************** Middle container************************** -->
    <section class="container sProduct-middle-container row my-5 pt-5">  <!-- my-5= margin top and bottom 5/ padding top 5 -->
       <div class="row mt-5">
        <div class="col-lg-5 col-md-12 col-12"> <!-- large screen 5, middle 12, small 12 -->
          <img class="img-fluid w-100 pb-1" id="main-img"src="images/vans.jpg" alt="">
          <div class="small-img-group">
            <div class="small-img-col">
              <div class="smallSingleImage">
                <img src="images/shoes.jpg" width="100%" class="small-img" alt="">
              </div>
            </div>
            <div class="small-img-col">
              <div class="smallSingleImage">
                <img src="images/vans.jpg" width="100%" class="small-img" alt="">
              </div>
            </div>
            <div class="small-img-col">
              <div class="smallSingleImage">
                <img src="images/shoes.jpg" width="100%" class="small-img" alt="">
              </div>
            </div>
            <div class="small-img-col">
              <div class="smallSingleImage">
                <img src="images/vans.jpg" width="100%" class="small-img" alt="">
              </div>
            </div>
          </div>
        </div>
        <!-- description -->
        <div class="col-lg-6 col-md-12 col-12">
          <h6>Home / Sneakers</h6>
          <h3 class="py-4">Vans red Sneakers</h3>
          <h2>R750.12</h2>
          <select class="my-3">
            <option> Select Size</option>
            <option> 37</option>
            <option> 38</option>
            <option> 39</option>
            <option> 40</option>
          </select>
          <input type="number" value="1">
          <button class="buy-btn">Add to cart</button>
          <h4 class="mt-5 mb-5">Product details</h4>
          <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type
            specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged</span>

        </div>
      </div>
    </section>
    <!-- ************************Related products section************************************ -->
    <section class="products-container">
      <div class="container text-center mt-5 py-5">
        <h3>Related Products</h3>
        <hr class="mx-auto">
      </div>
      <div class="products-container2 row mx-auto container-fluid">
        <div class="product text-center col-lg-3 col-md-4 col-12">
          <div class="product-img">
            <img clas="img-fluid mb-3" src="images/clock.jpg" alt="">
          </div>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="product-name">Clock</h5>
          <h4 class="product-price">R250.00</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
          <div class="product-img">
            <img clas="img-fluid mb-3" src="images/blender.jpg" alt="">
          </div>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="product-name">Blender</h5>
          <h4 class="product-price">R999.00</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
          <div class="product-img">
            <img clas="img-fluid mb-3" src="images/headphone.jpg" alt="">
          </div>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="product-name">Headphones</h5>
          <h4 class="product-price">R375.00</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
          <div class="product-img">
            <img clas="img-fluid mb-3" src="images/shoes.jpg" alt="">
          </div>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="product-name">Shoes</h5>
          <h4 class="product-price">R550.00</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
      </div>
    </section>

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
        <a href="checkout.php"><i class="fa fa-cc-visa fa-4x paymentMeth" aria-hidden="true"></i></a>
        <a href="checkout.php"><i class="fa fa-cc-mastercard fa-4x paymentMeth" aria-hidden="true"></i></a>
        <a href="https://www.paypal.com/za/signin"><i class="fa fa-paypal fa-4x paymentMeth" aria-hidden="true"></i></a>
      </div>

    </section>
    <section class="bottom3">
      <div class="">
        BIKUYMARKET LTD.
      </div>
    </section>
    </footer>
  </body>

  </html>
