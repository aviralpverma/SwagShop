<?php
  session_start();
?>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#">
    <img src="images/logo2.png" width="120" height="50" alt="" loading="lazy">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="catalog.php">Products</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Fashion Blog</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <?php
        if(!(isset($_SESSION['currentUserEmail']))) {
          echo "<li class='nav-item active'>
                  <a class='nav-link' href='login.php'>Login</a>
                </li>";
          echo "<li class='nav-item active'>
                  <a class='nav-link' href='register.php'>SignUp</a>
                </li>";
        }
        if(isset($_SESSION['currentUserEmail'])) {

          include "getUserDetails.php";

          echo "<li class='nav-item active'>
                  <a class='nav-link' href='profile.php'><strong>".$name."</strong></a>
                </li>";
          echo "<li class='nav-item active'>
                  <a class='nav-link' href='#'>Cart</a>
                </li>";
        }
      ?>
    </ul>
  </div>
</nav>