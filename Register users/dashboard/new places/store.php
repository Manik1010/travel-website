<?php 
 $url = 'http://localhost/travel%20website/admin/';
 include '../../include/config.php';
session_start();
$rand = rand(11111, 89999999999);


$image ='uploads/new-places-img/' . $rand .$_FILES['image']['name'];

$upload = '../../../admin/uploads/new-places-img/' . $rand . $_FILES['image']['name'];

move_uploaded_file($_FILES['image']['tmp_name'], $upload);

$title   = $_POST['title'];
$desc    = mysqli_real_escape_string($conn, $_POST['description']);
$date    = $_POST['date'];
$category_id = $_POST['category_id'];
$user_id = $_SESSION['user_id'];


$sql = "INSERT INTO new_places(title,user_id,category_id,image,description,date) VALUES ('$title',$user_id,'$category_id','$image','$desc','$date')";
mysqli_query($conn, $sql);

header('Location: index.php');




 ?>