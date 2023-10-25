<?php
 $msg = "";
 //if upload button is pressed
 if(isset($_POST['upload'])){

   //Get all the databse data from the ForM
   $prodName =$_POST['prodName'];
   $price1 =$_POST['price1'];
   $price2 =$_POST['price2'];
   $image = $_FILES["image"]['name'];
   $prodDescription =$_POST['prodDescription'];
   $category =$_POST['category'];

   //The path to store the upload images
   $target = "./images/".basename($_FILES['image']['name']);

   //connect to the databse
   $db = mysqli_connect('localhost', 'root','','e_commerce');



   $sql = "INSERT INTO products(prodName,price1,price2,prodImage,prodDescription,category) VALUES
   ('$prodName', '$price1','$price2','$image','$prodDescription','$category')";
   mysqli_query($db, $sql);//Stores the submitted data into the table rpoducts.


   //Moving the uploaded product to the folder: images
   if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
     $msg = "Product uploaded succesfully";
   }else{
     $msg = 'There was a problem uploading the product';
   }
 }
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Elctronics</title>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/407bb34f63.js" crossorigin="anonymous"></script>

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Css Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/adminStyles.css">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;900&family=Ubuntu&display=swap" rel="stylesheet">

    <link href="https://db.onlinewebfonts.com/c/9b62dc86f936227b3f7b367bd0b6c05e?family=Tw+Cen+MT" rel="stylesheet" type="text/css" />

    <!-- adding the javascript file -->
      <script src="singleProduct.js"></script>

  </head>
  <body>
    <header id="header">
      <nav class="navbar navbar-expand-md navbar-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link " href=""><i class=""></i> Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="uploadProducts.php"><i class=""></i> Upload</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href=""><i class=""></i> Delete</a>
            </li>
          </ul>
        </div>
      </nav>
      </nav>
    </header>


    <div id="content">
    <form class="" action="admin.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="size" value="1000000">
      <div class="">
        <label for="">Product name</label><br><br>
        <input type="text" name="prodName" value=""><br><br>
        <label for="">Initial price</label><br>
        <input type="text" name="price1" value=""><br><br>
        <label for="">Sell price</label><br><br>
        <input type="text" name="price2" value=""><br><br>
        <label for="">Upload image</label><br><br>
        <input type="file" name="image" value=""><br><br>
        <label for="">Insert Description</label><br><br>
        <input type="text" name="prodDescription" value=""><br><br>
        <label for="">Product category</label><br><br>
        <input type="text" name="category" value=""><br><br>
      </div>
      <div class="">
        <input type="submit" name="upload" value="Upload product">
      </div>
    </form>
    </div>



</body>

</html>
