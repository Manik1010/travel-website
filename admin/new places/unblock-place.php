<?php 
include '../include/config.php';
session_start();

$id = $_GET['id'];
$place_id = $_GET['place_id'];
$sql = "update new_place_complains
        set action=0,status='updated'
        WHERE id = '$id'";
mysqli_query($conn, $sql);
$sql2 = "update new_places
        set view=0
        WHERE id = '$place_id'";
mysqli_query($conn, $sql2);
header('Location: all-complains.php');




 ?>