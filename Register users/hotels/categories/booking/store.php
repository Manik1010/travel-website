<?php
session_start();
$user_id = $_SESSION['user_id'];
$h_id = $_GET['id'];
// $r_id = $_GET['r_id'];

// echo $h_id;
// echo $r_id;
// die();
$name = $_POST['name'];
$number = $_POST['number'];
// echo $name;
// echo $number;
$type = $_POST['room'];
$many = $_POST['many'];
$tk = $_POST['tk'];
// echo $tk;
// echo $many;
// die();
// echo $time;
$date = $_POST['date'];
$date1 = $_POST['date1'];
// echo $date;
// echo $date1;
// die();

include '../../../include/config.php';

$sql = "SELECT * FROM hotels WHERE h_id = $h_id ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$h_name = $row['h_name'];
// echo $h_name;
// die();
$sql = "INSERT INTO booking_info (h_id,h_name,u_id,name, phone, date1, date2, r_type,number_room,tk) VALUES ('$h_id','$h_name', '$user_id', '$name', '$number', '$date', '$date1', '$type','$many','$tk')";
$result = mysqli_query($conn, $sql);
header('Location:../hotel.php?h_id='.$h_id);
?>