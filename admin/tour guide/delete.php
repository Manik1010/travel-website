<?php

$id = $_GET['id'];

include '../include/config.php';



$sql = "SELECT * FROM tour_guide WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
$image_location = '../' . $data['image'];

if (file_exists($image_location)) {
	unlink($image_location);
}



$sql = "DELETE FROM tour_guide WHERE id = '$id' ";
mysqli_query($conn, $sql);

header('Location: index.php');