<?php
require 'config.php';



  if(isset($_POST["submit"])){
    $fName = $_POST["firstName"];
    $lName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $phoneNumber = $_POST["phoneNumber"];
    $duplicate = mysqli_query($conn, "SELECT * FROM registration WHERE email ='$email'");
    if(mysqli_num_rows($duplicate) > 0){
      echo "<script>
        alert('Email has already been taken');
      </script>";
    }else if (empty($_POST["firstName"]) || empty($_POST["lastName"]) || empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["phoneNumber"])) {
      echo "<script>
        alert('Please fill all the boxes');
      </script>";
    }else{
      if($password == $confirmPassword){
        $query = "INSERT INTO registration VALUES('','$fName','$lName','$email','$password','$phoneNumber')";
        mysqli_query($conn, $query);
        echo "<script>
          alert('Registration Succesful');
        </script>";
      }else{
        echo "<script>
          alert('Password does not match');
        </script>";
      }
    }
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>account/register</title>

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
              <div class="cart-And-Login-Container row">
                <div class="loginAndRegister col-lg-3 col-md-4 col-12">
                  <a class="a" href="login.php">Login </a><a class="a" href=""></a>
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
        <div class="collapse navbar-collapse col-lg-3 col-md-4 col-12" id="navbarTogglerDemo02">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">My Account</a>
            </li>
            <li class="nav-item">
              <div class="dropdown d1" id="drop">
                <button class="dropbtn">Shop</button>
                <div class="dropdown-content">

                </div>
              </div>
            </li>
          </ul>
        </div>

      </nav>
    </div>
  </div>

  <div class="middle-container-login">
    <div class="login-container">
      <div class="login-subcontainer">

      <form class="form" action="" method="post" autocomplete="off">

        <!-- *************************First name input********************************* -->
        <div class="form-outline mb-4">
          <input type="text" name="firstName" id="firstName" class="form-control"/>
          <label class="form-label" for="firstName">First name</label>

        </div>

        <!-- last name input -->
        <div class="form-outline mb-4">
          <input type="text" name="lastName" id="lastName" class="form-control"/>
          <label class="form-label" for="lastName">Last name</label></label>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" name="email" id= "email" class="form-control"/>
          <label class="form-label" for="email">Email</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
          <input type="password" name="password" id="password" class="form-control"/>
          <label class="form-label" for="password">Password</label>

        </div>

        <!-- Repeat Password input -->
        <div class="form-outline mb-4">
          <input type="password" name="confirmPassword" id="confirmPassword" class="form-control"/>
          <label class="form-label" for="confirmPassword">Confirm password</label>

        </div>

        <!-- Insert phone number -->
        <div class="form-outline mb-4">
          <input type="phone-number" id="phoneNumber" name="phoneNumber" class="form-control"/>
          <label class="form-label" for="phoneNumber">Phone number</label>

        </div>

        <!-- Submit button -->
        <div class="form-group submitButton">
        <button type="submit" name="submit"  class="btn btn-primary btn-block mb-3" value="submit">Register</button>
      </form>
      <div class="text-center">
        <p><a class="logIn-anchor" href="login.php">Login</a></p>
      </div>
      </div>
      </div>
    </div>
  </div>
</body>

</html>
