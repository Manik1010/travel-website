<?php

include '../../Register users/include/config.php';
$event_id = $_GET['event_id'];
// echo $event_id;

$sql = " DELETE FROM event WHERE event_id = '$event_id' ";

if(mysqli_query($conn, $sql)){
     header("Location:allevent.php");
}
else{
     echo "No Deleted";
}

?>