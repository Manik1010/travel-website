<?php 

 $id = $_GET['id'];

 include '../include/config.php';
 $sql = "SELECT *
         FROM packages
         WHERE id = $id ";
 $result = mysqli_query($conn,$sql);
 $data   = mysqli_fetch_assoc($result);

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

$updatesql = "UPDATE packages  SET title = '$title',location = '$location', duration = '$duration', tour_type ='$tourType',max_size='$maxGrpSize',general_info = '$general_info', breakfast = '$breakfast', lunch= '$lunch',snacks = '$snacks',dinner = '$dinner', included = '$included', exclude = '$exclude', title2 = '$title2', persons = '$persons', weekend_cost = '$weekendCost',weekdays_cost = '$weekdaysCost',itinerary = '$itinerary' ";

if (!empty($_FILES['image1']['name']))
{
	$rand = rand(11111, 89999999999);


	$image ='uploads/packages-img/' . $rand .$_FILES['image1']['name'];

	$upload = '../uploads/packages-img/' . $rand . $_FILES['image1']['name'];

	move_uploaded_file($_FILES['image1']['tmp_name'], $upload);
    
    $updatesql .= ",image1 = '$image'";
	if(!empty($data['image1'])){
		unlink('../' . $data['image1']);
	}
}
if (!empty($_FILES['image2']['name']))
{
	$rand = rand(11111, 89999999999);


	$image ='uploads/packages-img/' . $rand .$_FILES['image2']['name'];

	$upload = '../uploads/packages-img/' . $rand . $_FILES['image2']['name'];

	move_uploaded_file($_FILES['image2']['tmp_name'], $upload);
    
    $updatesql .= ",image2 = '$image'";
	if(!empty($data['image2'])){
		unlink('../' . $data['image2']);
	}
}
if (!empty($_FILES['image3']['name']))
{
	$rand = rand(11111, 89999999999);


	$image ='uploads/packages-img/' . $rand .$_FILES['image3']['name'];

	$upload = '../uploads/packages-img/' . $rand . $_FILES['image3']['name'];

	move_uploaded_file($_FILES['image3']['tmp_name'], $upload);
    
    $updatesql .= ",image3 = '$image'";
	if(!empty($data['image3'])){
		unlink('../' . $data['image3']);
	}
}


$updatesql .= "where id = $id";
mysqli_query($conn, $updatesql);

header('Location: index.php');

?>