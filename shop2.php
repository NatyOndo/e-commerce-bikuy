<?php
require "config.php";
require_once("component.php");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cosmetics</title>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/407bb34f63.js" crossorigin="anonymous"></script>

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Css Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/singleProduct.css">
    <link rel="stylesheet" href="css/shopStyles.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;900&family=Ubuntu&display=swap" rel="stylesheet">

    <link href="https://db.onlinewebfonts.com/c/9b62dc86f936227b3f7b367bd0b6c05e?family=Tw+Cen+MT" rel="stylesheet" type="text/css" />

    <!-- adding the javascript file -->
      <script src="singleProduct.js"></script>

  </head>
  <body>

    <?php
      require "header.php";
     ?>

  <!-- **************************Middle Section********************************** -->

  <section class="products_container">
    <div class="container">
      <div id="message"></div>
      <div class="row text-center py-5">
        <div class="shopSectionDescription">
          <p>Cosmetics</p>
        </div>

        <?php
          include 'config.php';
          $stmt = $conn->prepare('SELECT prodName,price1,price2,prodImage,prodDescription,prodId  FROM products where category ="Cosmetics"');
          $stmt->execute();
          $result = $stmt->get_result();
          while ($row = $result->fetch_assoc()):
        ?>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
          <div class="card-deck">
            <div class="card p-2 border-secondary mb-2">
              <img src="<?= $row['prodImage'] ?>" class="card-img-top prodImage" height="250">
              <div class="card-body p-1">
                <h4 class="card-title text-center "><?= $row['prodName'] ?></h4>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i> <!--this class specifies an empty star -->
                <h6 class="card-text">
                  <?= $row['prodDescription'] ?>
                </h6>
                <h5 class="card-text text-center "><i class="fas fa fa-zar">R</i>&nbsp;&nbsp;<?= number_format($row['price2'],2) ?></h5>

              </div>
              <div class="card-footer p-1">
                <form action="" class="form-submit">
                  <div class="row p-2">
                    <div class="col-md-6 py-1 pl-4">
                      <b>Quantity : </b>
                    </div>
                    <div class="col-md-6">
                      <input type="number" class="form-control pqty" value="<?= $row['prodDescription'] ?>">
                    </div>
                  </div>
                  <input type="hidden" class="pid" value="<?= $row['prodId'] ?>">
                  <input type="hidden" class="pname" value="<?= $row['prodName'] ?>">
                  <input type="hidden" class="pprice" value="<?= $row['price2'] ?>">
                  <input type="hidden" class="pimage" value="<?= $row['prodImage'] ?>">
                  <input type="hidden" class="pcode" value="<?= $row['prodDescription'] ?>">
                  <button class="btn btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                    cart</button>
                </form>
              </div>
            </div>
          </div>
        </div>
         <?php endwhile; ?>

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

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
  </body>

  </html>
