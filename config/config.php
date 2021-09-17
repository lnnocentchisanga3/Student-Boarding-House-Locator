<?php
$server = "localhost";
$user = "root";
$pwd = "";
$database = "student_boarding_house_locator";

if (mysqli_connect($server,$user,$pwd,$database)) {
	/*echo "db connected";*/
}else{
	echo "Not connected";
}

?>