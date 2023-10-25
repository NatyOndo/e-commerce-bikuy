<?php
require 'config.php';

  if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM registration WHERE email = '$email'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
      if($password == $row["password"]){
        $_SESSION["login"] = true;
        $_SESSION["userId"] = $row["userId"];
        header("Location: index.php");
      }else{
        echo "<script>
          alert('Incorect password');
        </script>";
      }
    } else{
      echo "<script>
        alert('User not registered');
      </script>";
    }
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

  <!-- ***************middle container*********************************** -->

  <div class="middle-container-login">
    <div class="login-container">
      <div class="login-subcontainer">
        <form method="post" autocomplete="off">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="email" name="email" class="form-control" />
            <label class="form-label" for="email">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="password" name="password" class="form-control" />
            <label class="form-label" for="password">Password</label>
          </div>

          <!-- Submit button -->
          <button type="submit" id="submit"name="submit"  class="btn btn-primary btn-block mb-4">LogIn</button>

          <!-- Register buttons -->
          <div class="text-center">
            <p>Not a member? <a class="logIn-anchor" href="register.php">Register</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
