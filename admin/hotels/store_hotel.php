<?php
$dist_id = $_POST['dist_name'];

include '../include/config.php';

$sql = "SELECT * FROM hotel_categories WHERE categories_id = '$dist_id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
 
$dist_name = $row['dist_name'];

$rand = rand(11111, 89999999999);


 $image ='uploads/hotels-img/' . $rand .$_FILES['image']['name'];

 $upload = '../uploads/hotels-img/' . $rand . $_FILES['image']['name'];

 move_uploaded_file($_FILES['image']['tmp_name'], $upload);

 // echo $image;
 // die();
// $dist_name = $_POST['dist_name'];
$name = $_POST['name'];
$location = $_POST['location'];
$discreption = $_POST['hotel'];
$facilitie1  = $_POST['airport'];
$facilitie2  = $_POST['wif'];
$facilitie3  = $_POST['fitness'];
$facilitie4  = $_POST['non_smoking'];
$facilitie5  = $_POST['room'];
$facilitie6  = $_POST['tea'];
$facilitie7  = $_POST['breakfast'];

// echo $dist_name;
// echo $dist_id;
// echo $name;
// echo $location; 
// echo $discreption;
// echo $facilitie1;
// echo $facilitie7;
// die();
$sql1 = "INSERT INTO hotel_request(id, dist_name,h_name,h_loaction,discreption,image,facilitie1,facilitie2,facilitie3,facilitie4,facilitie5,facilitie6,facilitie7) VALUES (NULL,'$dist_name','$name','$location','$discreption','$image','$facilitie1', '$facilitie2', '$facilitie3', '$facilitie4', '$facilitie5', '$facilitie6', '$facilitie7' )";
// die();
mysqli_query($conn, $sql1);

header('Location: index.php');


?>