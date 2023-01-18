<?php

include '../../include/config.php';
$c_id = $_GET['id'];
// echo $c_id;
// die();

$sql = " DELETE FROM hotel_categories_request WHERE categories_id = '$c_id' ";

if(mysqli_query($conn, $sql)){
     header("Location:request.php");
}
else{
     echo "No Deleted";
}

?>