<?php 
include '../include/config.php';
session_start();

$id = $_GET['id'];
$sql = "update new_place_complains
        set status='reject'
        WHERE id = '$id'";
mysqli_query($conn, $sql);


header('Location: all-complains.php');




 ?>