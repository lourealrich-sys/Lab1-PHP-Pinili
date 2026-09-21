<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "assessment_db";
$port = 3307;
 
$conn = mysqli_connect($host, $user, $pass, $dbname, $port);
 
if (!$conn) {
  die("Database connection failed: " . mysqli_connect_error());
}
?>