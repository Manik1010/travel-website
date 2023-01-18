<?php

include '../../include/config.php';
$h_id = $_GET['id'];
// echo $c_id;
// die();

$sql = " DELETE FROM hotel_request WHERE id = '$h_id' ";

if(mysqli_query($conn, $sql)){
     header("Location:hotel_request.php");
}
else{
     echo "No Deleted";
}

?>