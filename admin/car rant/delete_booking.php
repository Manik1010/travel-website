<?php
$id = $_GET['id'];
// echo $id;
// die();
include '../../Register users/include/config.php';


$sql = " DELETE FROM pemant_car WHERE id = '$id' ";

if(mysqli_query($conn, $sql)){
     header("Location:booking.php");
}
else{
     echo "No Deleted";
}

?>