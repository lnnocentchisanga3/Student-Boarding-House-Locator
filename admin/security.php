<?php
require '../config/config.php';
session_start();


/*if($conn){

    echo 'conected';
}*/

if(!$_SESSION['userid']){
    header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php?action=loginagain");
}
?>