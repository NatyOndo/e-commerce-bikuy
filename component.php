<?php
function component($productName,$formerPrice, $productPrice, $productImage, $description,$productid){
  $element = "
  <div class=\"col-md-3 col-sm-6 my-3 my-md-0 py-3\">
    <form class=\"form-submit\" action=\"shop.php\" method=\"post\">
      <div class=\"card shadow\">
        <div>
          <img class=\"prodImage\"src=\"$productImage\" alt=\"image1\" class=\"img-fluid card-img-top\">
        </div>
        <div class=\"card-body\">
          <h5 class=\"card-title\">$productName</h5>
          <h6>
            <i class=\"fas fa-star\"></i>
            <i class=\"fas fa-star\"></i>
            <i class=\"fas fa-star\"></i>
            <i class=\"fas fa-star\"></i>
            <i class=\"far fa-star\"></i> <!--this class specifies an empty star -->
            <p class=\"card-text\">
              $description
            </p>
            <h5>
              <small><s class=\"text-secondary\">R$formerPrice</s></small> <!--Actual price -->
              <span class=\"price\" >R$productPrice</span> <!--Price with a discount -->
            </h5>
            <div class=\"col-md-6 py-1 pl-4\">
              <b>Quantity : </b>
            </div>
            <div class=\"col-md-6\">
              <input type=\"number\" class=\"form-control pqty\" value=\"<?= $description?>\">
            </div>

            <button type=\"submit\" class=\"btn btn-warning my-3 addItemBtn\" name=\"add\" >Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
            <input type=\"hidden\" name=\"product_id\" value=\"$productid\" />
          </h6>
        </div>
      </div>
    </form>
  </div>

  ";
  echo $element;
}
 ?>
