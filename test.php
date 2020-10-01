<?php
session_start(); // starting a session
include('config.php'); // Database configuration file
if (isset($_POST["login"])) {
  // Getting Post Vlaues
  $username = $_POST['username'];
  $password = md5($_POST['password']); // MD5 password encryption
  $sql = "Select * from tbluser where userName ='$username' and userPassword ='$password'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  if ($row) {
    $_SESSION["userid"] = $row["id"];
    // if remember me clicked . Values will be stored in $_COOKIE  array
    if (!empty($_POST["remember"])) {
      //COOKIES for username
      setcookie("user_login", $_POST["username"], time() + (10 * 365 * 24 * 60 * 60));
      //COOKIES for password
      setcookie("userpassword", $_POST["password"], time() + (10 * 365 * 24 * 60 * 60));
    } else {
      if (isset($_COOKIE["user_login"]))
        setcookie("user_login", "");
      if (isset($_COOKIE["userpassword"]))
        setcookie("userpassword", "");
    }
    header('location:welcome.php');
  } else {
    $message = "Invalid Login";
  }
}
