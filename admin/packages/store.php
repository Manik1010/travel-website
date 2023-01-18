<?php 
include '../include/config.php';

 

 $rand = rand(11111, 89999999999); 

 $image1 ='uploads/packages-img/' . $rand .$_FILES['image1']['name'];

 $upload1 = '../uploads/packages-img/' . $rand . $_FILES['image1']['name'];

 $image2 ='uploads/packages-img/' . $rand .$_FILES['image2']['name'];

 $upload2 = '../uploads/packages-img/' . $rand . $_FILES['image2']['name'];

 $image3 ='uploads/packages-img/' . $rand .$_FILES['image3']['name'];

 $upload3 = '../uploads/packages-img/' . $rand . $_FILES['image3']['name'];
 

 move_uploaded_file($_FILES['image1']['tmp_name'], $upload1);
 move_uploaded_file($_FILES['image2']['tmp_name'], $upload2);
 move_uploaded_file($_FILES['image3']['tmp_name'], $upload3);


$title   = $_POST['title'];

$location   = mysqli_real_escape_string($conn, $_POST['location']);

$duration    = $_POST['duration'];

$tourType    = $_POST['tourType'];
$maxGrpSize = $_POST['maxGrpSize'];
$general_info = $_POST['general_info'];
$breakfast    = mysqli_real_escape_string($conn, $_POST['breakfast']);
$lunch        = mysqli_real_escape_string($conn, $_POST['lunch']);
$snacks       = mysqli_real_escape_string($conn, $_POST['snacks']);
$dinner       = mysqli_real_escape_string($conn, $_POST['dinner']);
$included     = mysqli_real_escape_string($conn, $_POST['included']);
$exclude      = mysqli_real_escape_string($conn, $_POST['exclude']);
$title2       = $_POST['title2'];
$persons      = $_POST['persons'];
$weekendCost  = $_POST['weekendCost'];
$weekdaysCost = $_POST['weekdaysCost'];
$itinerary    = $_POST['itinerary'];

$sql = "INSERT INTO packages(title,location,duration,tour_type,max_size,general_info,breakfast,lunch,snacks,dinner,included,exclude,title2,persons,weekend_cost,weekdays_cost,image1,image2,image3,itinerary) VALUES ('$title','$location','$duration','$tourType','$maxGrpSize','$general_info','$breakfast','$lunch','$snacks','$dinner','$included','$exclude','$title2','$persons','$weekendCost','$weekdaysCost','$image1','$image2','$image3','$itinerary')";
mysqli_query($conn, $sql);

header('Location: index.php');