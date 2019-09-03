<?php 
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "Characters";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if (!$conn){
die("Connection is not established:" . mysqli_connect_error());
}

?>