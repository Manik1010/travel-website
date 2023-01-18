<?php 

$text = $_POST['data'];
$type = $_POST['type'];

// echo $brand;
// echo $type;
// die();



include 'include/config.php';
// die();
$sql = "INSERT INTO vehicles_terms(id, type, text) values(NULL,'$type', 'text')";
// die();

mysqli_query($conn,$sql);

header('Location: manage_page.php');

?>