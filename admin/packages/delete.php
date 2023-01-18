<?php

$id = $_GET['id'];

include '../include/config.php';



$sql = "SELECT * FROM packages WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
$image_location1 = '../' . $data['image1'];
$image_location2 = '../' . $data['image2'];
$image_location2 = '../' . $data['image3'];

if (file_exists($image_location1)) {
	unlink($image_location1);
}
if (file_exists($image_location2)) {
	unlink($image_location2);
}
if (file_exists($image_location3)) {
	unlink($image_location3);
}


$sql = "DELETE FROM packages WHERE id = '$id' ";
mysqli_query($conn, $sql);

header('Location: index.php');