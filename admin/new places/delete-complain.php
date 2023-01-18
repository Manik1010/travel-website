<?php

$id = $_GET['id'];

include '../include/config.php';



$sql = "DELETE FROM new_place_complains WHERE id = '$id' ";
mysqli_query($conn, $sql);

header('Location: all-complains.php');