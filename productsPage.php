<?php
function component($productName,$formerPrice, $productPrice, $productImage, $description){
  $element = "
  <div class=\"divProd col-lg-3 col-md-4 col-12 text-center\">
    <div class=\"product_Image\">
      <img class=\"firstProducts\" name=\"image\" id=\"image\" src=\"$productImage\">
      <h5 class=\"product-name\" name=\"name\" id=\"name\">$productName</h5>
    </div>
    <h6>
    <div class=\"star\">
      <i class=\"fas fa-star\"></i>
      <i class=\"fas fa-star\"></i>
      <i class=\"fas fa-star\"></i>
      <i class=\"fas fa-star\"></i>
      <i class=\"fas fa-star\"></i>
    </div>
    <p class=\"card-text\" name=\"description\" id=\"description\">
      $description
    </p>
    <h4>
      <small><s class=\"text-secondary\" name=\"price1\" id=\"price1\">$formerPrice</s></small> <!--Actual price -->
      <span class=\"price\" name=\"price2\" id=\"price2\">$productPrice</span> <!--Price with a discount -->
    </h4>
    <button type=\"submit\" class=\"btn btn-warning my-3\"name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>

    </h6>
  </div>
  ";
  echo $element;
}
 ?>
