<?php
$host = "localhost"; /* Host name */
$mysqluser = "admin"; /* User */
$mysqlpassword = "22avi@mysql"; /* Password */
$dbname = "swagshop"; /* Database name */

$connect = mysqli_connect($host, $mysqluser, $mysqlpassword, $dbname);
if (!$connect) {
  die("Connection Failed!:" . mysqli_connect_error($connect));
}
  // echo "Connection successful!";
