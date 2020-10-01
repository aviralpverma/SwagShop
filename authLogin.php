<?php
session_start();
if (empty($_POST['emailAddrs']) || empty($_POST['passWord'])) {
  header("Location:login.php?err='Please enter all the fields!'");
} else {

  $email = $_POST['emailAddrs'];
  $password = $_POST['passWord'];
  $remember = $_POST['remember'];

  // echo $remember;

  include "db_connect.php";

  $sql = "SELECT count(*) AS count FROM users WHERE email='" . $email . "' AND password='" . $password . "'";

  $result = mysqli_query($connect, $sql);
  $row = mysqli_fetch_array($result);
  $count = $row['count'];

  if ($count > 0) {
    $_SESSION['currentUserEmail'] = $email;
    if (!empty($_POST['remember'])) {
      setcookie("userEmail", $email, time() + 60 * 60 * 24 * 7);
      setcookie("userPassword", $password, time() + 60 * 60 * 24 * 7);
    } else {
      if (isset($_COOKIE['userEmail'])) {
        setcookie("userEmail", $email, time()-1);
      }
      if(isset($_COOKIE['userPassword'])) {
        setcookie("userPassword", $password, time()-1);
      }
    }
    // echo "Successful Login!";
    header("Location:profile.php");
  } else {
    header("Location:login.php?err='The email or password entered is incorrect!");
  }
}

  // if($email == "admin@gmail.com" && $password == "admin123") {
  //   $_SESSION["currentUserEmail"] = "admin@gmail.com";
  //   header("Location:profile.php?user=".$email);
  // } else {
  //   header("Location:login.php");
  // }

  // $row = 1;
  // if (($handle = fopen("userData.csv", "r")) !== FALSE) {
  //     while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
  //         $num = count($data);
  //         echo "<p> $num fields in line $row: <br /></p>\n";
  //         $row++;
  //         for ($c=0; $c < $num; $c++) {
  //             echo $data[$c] . "<br />\n";
  //         }
  //     }
  //     fclose($handle);
  // }

  // $flag = FALSE;
  // if(($handle = fopen("userData.csv","r")) != FALSE) {
  //   while(($data = fgetcsv($handle,1000,",")) != FALSE) {
  //     if($data[0] == $email && $data[4] == $password) {
  //       $flag = TRUE;
  //     }
  //   }
  //   fclose($handle);
  // }

  // if($flag == TRUE) {
  //   $_SESSION['currentUserEmail'] = $email;
  //   header("Location:profile.php");
  // } else {
  //   header("location:login.php");
  // }
