<?php 
echo "Wellcome";
die();
session_start();
$user_id = $_SESSION['user_id'];
// echo $user_id;
$h_id = $_GET['id'];
$h_id = $_GET['value'];
 echo $h_id;
 die();
$dis = $_POST['text'];
 // echo $dis;
// $star = $_POST['rate'];
// echo $star;

include '../../include/config.php'; 

$sql = "SELECT * FROM hotels WHERE h_id = '$h_id' ";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
$h_name = $data['h_name'];
// echo $h_name;
// die();


// $sql = "INSERT INTO rating_info_hotels (rating_id,u_id,h_name,s,discripation) VALUES (NULL,'$user_id', '$h_name', '$star', '$dis')";

$sql = "INSERT INTO rating_info_hotels (rating_id,u_id,h_name,discripation) VALUES (NULL,'$user_id', '$h_name', '$dis')";


$result = mysqli_query($conn, $sql);
header('Location:hotel.php?h_id='.$h_id);

?>