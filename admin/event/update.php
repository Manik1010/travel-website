<?php 

 $event_id = $_GET['event_id']; 

 // echo $event_id;
 // die();

 include '../../Register users/include/config.php';

 $sql = "SELECT * FROM event WHERE event_id = $event_id";
 $result = mysqli_query($conn,$sql);
 $data   = mysqli_fetch_assoc($result);
 
$title   = $_POST['title'];
$event = $_POST['event'];
$date    = $_POST['date'];
$viewpermission = $_POST['location'];

// echo $title;
// echo $date;
// echo $viewpermission;
// die();
$day_0 = $_POST['day0'];
$day_1 = $_POST['day1'];
$day_2 = $_POST['day2'];
$day_00 = $_POST['day00'];
$ac = $_POST['ac'];
$nonac = $_POST['nonac'];
$air = $_POST['air'];

// echo $day_00;
// echo $day_2;
// echo $ac;
// echo $nonac;
// die();
$updatesql = "UPDATE event  SET title = '$title',viewPermission = '$viewpermission', event = '$event', date ='$date', day_0='$day_0', day_01 = '$day_1', day_02 = '$day_2', day_00 = '$day_00', ac = '$ac', non_ac = '$nonac', air = '$air' ";

if (!empty($_FILES['image']['name']))
{
	$rand = rand(11111, 89999999999);


	$image ='uploads/event-img/'. $rand .$_FILES['image']['name'];

 	$upload = '../uploads/event-img/' . $rand . $_FILES['image']['name'];

	move_uploaded_file($_FILES['image']['tmp_name'], $upload);
    
    $updatesql .= ",image = '$image'";
	if(!empty($data['image'])){
		unlink('../' . $data['image']);
	}
}

$updatesql .= "where event_id = $event_id ";
mysqli_query($conn, $updatesql);

header('Location: allevent.php');

?>