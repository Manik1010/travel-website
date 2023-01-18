<?php 

$name = $_POST['vehicletitle'];
$brand = $_POST['brandname'];
$text = $_POST['vehicalorcview'];
$priceperday = $_POST['priceperday'];
$fueltype = $_POST['fueltype'];
$modelyear= $_POST['modelyear'];
$set= $_POST['set'];

$vimage1=$_FILES["img1"]["name"];
$vimage2=$_FILES["img2"]["name"];
$vimage3=$_FILES["img3"]["name"];
$vimage4=$_FILES["img4"]["name"];
$vimage5=$_FILES["img5"]["name"];

$airconditioner = $_POST['airconditioner'];
$powerdoorlocks = $_POST['powerdoorlocks'];
$antilockbrakingsys = $_POST['antilockbrakingsys'];
$brakeassist = $_POST['brakeassist'];
$powersteering = $_POST['powersteering'];
$driverairbag = $_POST['driverairbag'];
$passengerairbag = $_POST['passengerairbag'];
$powerwindow = $_POST['powerwindow'];
$cdplayer = $_POST['cdplayer'];
$centrallocking = $_POST['centrallocking'];
$crashcensor = $_POST['crashcensor'];
$leatherseats = $_POST['leatherseats'];
// echo $centrallocking;
// echo $powerdoorlocks;
// echo $airconditioner;
// die();

// move_uploaded_file($_FILES["img1"]["tmp_name"],"img/vehicleimages/".$_FILES["img1"]["name"]);
// move_uploaded_file($_FILES["img2"]["tmp_name"],"img/vehicleimages/".$_FILES["img2"]["name"]);
// move_uploaded_file($_FILES["img3"]["tmp_name"],"img/vehicleimages/".$_FILES["img3"]["name"]);
// move_uploaded_file($_FILES["img4"]["tmp_name"],"img/vehicleimages/".$_FILES["img4"]["name"]);
// move_uploaded_file($_FILES["img5"]["tmp_name"],"img/vehicleimages/".$_FILES["img5"]["name"]);

$tmp1 = $_FILES['img1']['tmp_name'];
$extension1 = pathinfo($_FILES['img1']['name'], PATHINFO_EXTENSION);
$target1 = 'img/vehicleimages/' . rand(1, 99999999) . '.' . $extension1;
move_uploaded_file($tmp1, $target1);

$tmp2 = $_FILES['img2']['tmp_name'];
$extension2 = pathinfo($_FILES['img2']['name'], PATHINFO_EXTENSION);
$target2 = 'img/vehicleimages/' . rand(1, 99999999) . '.' . $extension2;
move_uploaded_file($tmp2, $target2);
$tmp3 = $_FILES['img3']['tmp_name'];
$extension3 = pathinfo($_FILES['img3']['name'], PATHINFO_EXTENSION);
$target3 = 'img/vehicleimages/' . rand(1, 99999999) . '.' . $extension3;
move_uploaded_file($tmp3, $target3);
$tmp4 = $_FILES['img4']['tmp_name'];
$extension4 = pathinfo($_FILES['img4']['name'], PATHINFO_EXTENSION);
$target4 = 'img/vehicleimages/' . rand(1, 99999999) . '.' . $extension4;
move_uploaded_file($tmp4, $target4);
$tmp5 = $_FILES['img5']['tmp_name'];
$extension5 = pathinfo($_FILES['img5']['name'], PATHINFO_EXTENSION);
$target5 = 'img/vehicleimages/' . rand(1, 99999999) . '.' . $extension5;
move_uploaded_file($tmp5, $target5);

include '../../Register users/include/config.php';
$sql="INSERT INTO vehicles(id,title,brand,overview,price,fuel_type,model_year,set_capacity,image1,image2,image3,image4,image5,air_conditioner,power_doorlocks,antilock_system,brake_assist,power_steering,driver_airbag,passenger_airbag,power_windows,cd_player,central_locking,crash_sensor,leather_seats) values(NULL,'$name','$brand','$text','$priceperday','$fueltype','$modelyear', '$set', '$target1', '$target2', '$target3', '$target4', '$target5', '$airconditioner','$powerdoorlocks', '$antilockbrakingsys', '$brakeassist', '$powersteering', '$driverairbag','$passengerairbag', '$powerwindow', '$cdplayer', '$centrallocking','$crashcensor', '$leatherseats')";

mysqli_query($conn,$sql);

header('Location: all_vehical.php');

?>