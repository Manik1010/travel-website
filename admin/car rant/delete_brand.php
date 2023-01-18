<?php
$id = $_GET['id'];
// echo $id;
// die();
include '../../Register users/include/config.php';


$sql = " DELETE FROM brand WHERE id = '$id' ";

if(mysqli_query($conn, $sql)){
     header("Location:all_brand.php");
}
else{
     echo "No Deleted";
}

?>