<?php

$id = $_GET['id'];

include '../../include/config.php';







$sql = "DELETE FROM new_place_category_requests WHERE id = '$id' ";
mysqli_query($conn, $sql);

header('Location: all-requests.php');