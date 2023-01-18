<?php 
include 'include/config.php';

$id = $_GET['id'];
$place_id = $_GET['place_id'];

$sql = "UPDATE user_form SET b_status=1
        WHERE id = '$id'";
mysqli_query($conn, $sql);

header('Location: index.php');
