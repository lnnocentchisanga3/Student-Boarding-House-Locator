<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "boarding_house_locator";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . $conn->connect_error);
}else{
/*echo "";*/
}
?> 