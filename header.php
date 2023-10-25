<header id="header">
  <nav class="navbar navbar-expand-md navbar-dark">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link " href="index.php"><i class="fas fa-store"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="myaccount.php"><i class="fas fa-id-card"></i> My Account</a>
        </li>
        <li class="nav-item">
          <!-- creating the dropdown list -->
          <div class="dropdown d1" id="drop">
            <button class="dropbtn">Shop</button>
            <div class="dropdown-content">
              <a href="shop2.php">Cosmetics</a>
              <a href="shop.php">Electronics</a>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge number"></span></a>
        </li>
      </ul>
    </div>
  </nav>
  </nav>
</header>
