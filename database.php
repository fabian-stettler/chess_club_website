<?php

//this file is trying to connect to connect to a specific database inside the XAMPP mysql architecture

$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "tip";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>