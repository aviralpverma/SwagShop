<?php

// function saveUserData($email,$name,$mobile,$gender,$password) {
//   $file = fopen("userData.csv",'a');
//   fwrite($file,$email.",".$name.",".$mobile.",".$gender.",".$password."\n");
//   fclose($file);
// }

// Simple form submit method -

// if(empty($_POST['emailAddrs']) || empty($_POST['name']) || empty($_POST['mobile']) || empty($_POST['gender']) || empty($_POST['password']) || empty($_POST['passwordCon'])) {
//   header("Location:register.php");
// } else if ($_POST['password'] != $_POST['passwordCon']) {
//   header("Location:register.php");
// } else {
//   $email = $_POST['emailAddrs'];
//   $name = $_POST['name'];
//   $mobile = $_POST['mobile'];
//   $gender = $_POST['gender'];
//   $password = $_POST['password'];

//   include "db_connect.php";

//   $sql = "INSERT INTO users (email, name, mobile, gender, password) VALUES ('".$email."', '".$name."', '".$mobile."', '".$gender."', '".$password."')";

//   if(mysqli_query($connect,$sql)) {
//     echo "Data Insertion Successful!";
//   } else {
//     echo "Error:".mysqli_error($connect);
//   }

//   // saveUserData($email,$name,$mobile,$gender,$password);

//   header("Location:login.php");
// }

// AJAX Method to post data -

$data = file_get_contents("php://input");
$data = json_decode($data);

$email = $data->email;
$name = $data->name;
$mobile = $data->mobile;
$gender =$data->gender;
$password = $data->password;

if(empty($email) || empty($name) || empty($mobile) || empty($gender) || empty($password)) {
  echo "Please enter all the fields";
} else {

  include_once "db_connect.php";

  $sql = "SELECT count(*) as 'count' FROM users WHERE email = '".$email."'";
  if($qryResult = mysqli_query($connect,$sql)) {
    $row = mysqli_fetch_array($qryResult);
    $count = $row['count'];

    if($count > 0) {
      echo "This email already exists!";
    } else {
      $sql = "INSERT INTO users (email, name, mobile, gender, password) VALUES ('".$email."', '".$name."', '".$mobile."', '".$gender."', '".$password."')";
      if(mysqli_query($connect,$sql)) {
        // header("location:login.php");
        echo "Successfully registered! Please login now!";
      } else {
        echo "Error:".mysqli_error($connect);
      }
    }
  } else {
    echo "Error:".mysqli_error($connect);
  }
}
  
?>