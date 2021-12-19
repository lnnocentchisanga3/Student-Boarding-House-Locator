<?php
require '../config/config.php';
session_start();


/*if($conn){

    echo 'conected';
}*/

if(!$_SESSION['userid']){
    header("location: ../auth-login.php?action=loginagain");
}
?>