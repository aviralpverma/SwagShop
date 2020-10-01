<?php

$countData = json_decode(file_get_contents('php://input'));
$count = $countData->count;

include "db_connect.php";

$sql = "SELECT name,brand,price,image FROM products LIMIT $count";
$dataToSendBack = array();
if ($qryResult = mysqli_query($connect, $sql)) {
  while ($row = mysqli_fetch_assoc($qryResult)) {
    array_push($dataToSendBack, $row);
  }
  echo json_encode($dataToSendBack);
} else {
  echo "Error:" . mysqli_error($connect);
}

?>