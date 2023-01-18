<?php 
 
$url = 'http://localhost/travel website/admin/';
$rand = rand(11111, 89999999999);

$image ='uploads/event-img/'. $rand .$_FILES['image']['name'];

 $upload = '../uploads/event-img/' . $rand . $_FILES['image']['name'];

 move_uploaded_file($_FILES['image']['tmp_name'], $upload);
 
 session_start();
// echo  $_SESSION['user_name'];
$id = $_SESSION['user_id'];


$date = $_POST['date'];
$title = $_POST['title'];
$viewpermission = $_POST['location'];
$event = $_POST['event'];
$day_0 = $_POST['day0'];
$day_1 = $_POST['day1'];
$day_2 = $_POST['day2'];
$day_00 = $_POST['day00'];
$ac = $_POST['ac'];
$nonac = $_POST['nonac'];
$air = $_POST['air'];

// echo $day_00;
// echo $day_2;
// echo $ac;
// die();

// echo $viewpermission; 
// echo $id;
// die();

include '../../Register users/include/config.php';

$sql = "INSERT INTO eventrequest values(NULL,'$id','$date', '$title','$viewpermission', '$event', '$image', '$day_0', '$day_1', '$day_2', '$day_00', '$ac', '$nonac', '$air')";
// die();

mysqli_query($conn,$sql);

header('Location: allevent.php');

?>