<?php 

$brand = $_POST['brand'];

// echo $brand;



include '../../Register users/include/config.php';
// die();
$sql = "INSERT INTO brand(id, brand_name) values(NULL,'$brand')";
// die();

mysqli_query($conn,$sql);

header('Location: all_brand.php');

?>