<?php
$id = $_GET['id'];
// echo $id;
// die();
$conn = mysqli_connect('localhost', 'root','','travel website');

$sql = " DELETE FROM testimonials WHERE id = '$id' ";

if(mysqli_query($conn, $sql)){
     header("Location:delete.php");
}
else{
     echo "No Deleted";
}

?>