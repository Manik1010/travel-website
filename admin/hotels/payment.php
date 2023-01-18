<?php 
include('include/header.php'); 
include('include/nab.php');

include '../include/config.php';

$sql = "SELECT * FROM hotels";
$result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);
// die();

  
?>


<?php
include('include/footer.php');
?>