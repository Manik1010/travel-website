<?php

$id = $_GET['id'];

include '../../include/config.php';


$sql = "update new_place_complains set view='1' WHERE id = '$id' ";
mysqli_query($conn, $sql);

header('Location: all-complains.php');