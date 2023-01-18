<?php

include '../../Register users/include/config.php';
$c_id = $_GET['id']; 
// echo $c_id;
// die();

$sql = " DELETE FROM hotel_categories WHERE categories_id = '$c_id' ";

if(mysqli_query($conn, $sql)){
     header("Location: watting_categories.php");
}
else{
     echo "No Deleted";
}

?>