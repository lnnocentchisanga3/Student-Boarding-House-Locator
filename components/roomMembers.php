<?php
 require '../config/config.php';
session_start();
$id = $_GET['roomId'];

$query = mysqli_query($conn, "SELECT * FROM `reservation` JOIN users ON reservation.s_id = users.user_id  WHERE room_id = '$id' AND reservation.status = 'approved' ");


if (mysqli_num_rows($query) == null) {
    echo "This room has got no Tenants";
}else{
    echo '<ol class="col-md-12 py-2 mx-2">';
    while ($row = mysqli_fetch_array($query)) {
        echo '
            <li class="py-2">'.$row['fname'].' '.$row['lname'].' <span class="float-right"><i class="fa fa-phone"></i> <a href="tel:'.$row['phone'].'">'.$row['phone'].'</a></span></li>
            <hr>
            ';
    }
    echo '</ol>';
}

?>


 		