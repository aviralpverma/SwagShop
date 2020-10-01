<?php
// Simple Post Method to recieve data -

// if(empty($_POST['proName']) || empty($_POST['brandName']) || empty($_POST['proPrice']) || empty($_POST['proGender']) || empty($_POST['proSize']) || empty($_POST['proClr']) || empty($_POST['proType']) || empty($_POST['imgPath']) || empty($_POST['proDsc'])) {
//   header("location:addProducts.php");
// } else {
//   $proName = $_POST['proName'];
//   $brandName = $_POST['brandName'];
//   $proPrice = $_POST['proPrice'];
//   $proGender = $_POST['proGender'];
//   $proSize = $_POST['proSize'];
//   $proClr = $_POST['proClr'];
//   $proType = $_POST['proType'];
//   $imgPath = $_POST['imgPath'];
//   $proDsc = $_POST['proDsc'];

//   include "db_connect.php";

//   $sql = "INSERT INTO products (name, brand, price, gender, size, color, type, image, dsc) VALUES ('".$proName."','".$brandName."','".$proPrice."','".$proGender."','".$proSize."','".$proClr."','".$proType."','".$imgPath."','".$proDsc."')";

//   if(mysqli_query($connect,$sql)) {
//     echo "Data Insertion Successful!";
//   } else {
//     echo "Error:".mysqli_error($connect);
//   }

//   header("Location:addProducts.php");
// }

// AJAX Method to recieve data -

$data = file_get_contents('php://input');
$data = json_decode($data);

$proName = $data->name;
$brandName = $data->brand;
$proPrice = $data->price;
$proGender = $data->gender;
$proSize = $data->size;
$proClr = $data->color;
$proType = $data->type;
$imgPath = $data->image;
$proDsc = $data->dsc;

include "db_connect.php";

$sql = "INSERT INTO products (name, brand, price, gender, size, color, type, image, dsc) VALUES ('" . $proName . "','" . $brandName . "','" . $proPrice . "','" . $proGender . "','" . $proSize . "','" . $proClr . "','" . $proType . "','" . $imgPath . "','" . $proDsc . "')";

if (mysqli_query($connect, $sql)) {
  echo "Data Insertion Successful!";
} else {
  echo "Error:" . mysqli_error($connect);
}
