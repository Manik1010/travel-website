<?php
$id = $_GET['id'];
// echo $id;
include '../include/config.php';

$sql = "SELECT * FROM vehicles WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

$image_location1 = $data['image1'];
$image_location2 = $data['image2'];
$image_location3 = $data['image3'];
$image_location4 = $data['image4'];
$image_location5 = $data['image5'];

if (file_exists($image_location1)) {
     unlink($image_location1);
}
if (file_exists($image_location2)) {
     unlink($image_location2);
}
if (file_exists($image_location3)) {
     unlink($image_location3);
}
if (file_exists($image_location4)) {
     unlink($image_location4);
}
if (file_exists($image_location5)) {
     unlink($image_location5);
}

$sql = "DELETE FROM vehicles WHERE id = '$id' ";
mysqli_query($conn, $sql);

header('Location: all_vehical.php');

?>