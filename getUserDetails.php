<?php
  session_start();
  include "db_connect.php";

  $sql = "SELECT email,name,mobile,gender,password FROM users WHERE email='".$_SESSION['currentUserEmail']."'";

  if($qryResult = mysqli_query($connect,$sql)) {
    $row = mysqli_fetch_array($qryResult);
    $email = $row['email'];
    $name = $row['name'];
    $mobile = $row['mobile'];
    $gender = $row['gender'];
    $password = $row['password'];
  } else {
    echo "Error:".mysqli_error($connect);
  }
?>