<?php
$host = "sql113.infinityfree.com";
$user = "if0_39482597 ";
$pass = "Khushi0505 ";
$dbname = "if0_39482597_language_learning"; // Match this with phpMyAdmin

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
