<?php
$server_name = "localhost";
$uname = "root";
// $pass = "Fuzzi@#4567";
// $pass = "";
$database_name = "railway_management";
$connection = mysqli_connect($server_name, $uname);
//now check the connection
if (!$connection) {
die("Please try again! Connection Failed:" . mysqli_connect_error());
}
// mysqli_select_db($connection, $database_name);
?>