<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "database123";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die(" <script> alert('Connection failed'); <script> : "  . mysqli_connect_error());
}
echo "<script> alert('Connected successfully'); </script>";
?>
