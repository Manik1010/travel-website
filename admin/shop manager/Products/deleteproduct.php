<?php 
 $id = $_GET['id'];
 include '../includes/connection.php';

$sql = "SELECT * FROM shop_products WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);


$image_location = '../' . $data['image'];




$sql = "DELETE FROM shop_products WHERE id = '$id' ";
$res = mysqli_query($conn, $sql);
if($res){
	if (file_exists($image_location)) {
	unlink($image_location);
   }

}
header('Location: viewproduct.php');