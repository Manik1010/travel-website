<?php

include '../../Register users/include/config.php';
$id = $_GET['id']; 
// echo $c_id;
// die();

$sql = " DELETE FROM booking_info WHERE id = '$id' ";
mysqli_query($conn, $sql);

header("Location: booking.php");

?>