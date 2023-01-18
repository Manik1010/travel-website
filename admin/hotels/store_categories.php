<?php 
$dist_name = $_POST['name'];

// echo $name;


include '../../Register users/include/config.php';
// die();
$sql = "INSERT INTO hotel_categories_request values(NULL,'$dist_name')";
// die();

mysqli_query($conn,$sql);

header('Location: watting_categories.php');

?>