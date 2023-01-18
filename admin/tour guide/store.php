<?php 
include '../include/config.php';
session_start();

$rand = rand(11111, 89999999999);


$image ='uploads/tour-guide-img/' . $rand .$_FILES['image']['name'];

$upload = '../uploads/tour-guide-img/' . $rand . $_FILES['image']['name'];

move_uploaded_file($_FILES['image']['tmp_name'], $upload);

$title   = $_POST['title'];
$desc    = mysqli_real_escape_string($conn, $_POST['description']);
$date    = $_POST['date'];



$sql = "INSERT INTO tour_guide(title,image,description,date) VALUES ('$title','$image','$desc','$date')";
mysqli_query($conn, $sql);

header('Location: index.php');




 ?>