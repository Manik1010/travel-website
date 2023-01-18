<?php 

 $id = $_GET['v_id']; 
 // echo $id;
 // die();
include '../include/config.php';
$sql = "SELECT *
         FROM vehicles
         WHERE id = $id ";
$result = mysqli_query($conn,$sql);
$data   = mysqli_fetch_assoc($result);

// echo $data['image2'];
// die();

$vehicletitle   = $_POST['vehicletitle'];
$brandname = $_POST['brandname'];
$overview = $_POST['overview'];
$priceperday = $_POST['priceperday'];

$fueltype   = $_POST['fueltype'];
$modelyear = $_POST['modelyear'];
$set = $_POST['set'];

$airconditioner = $_POST['airconditioner'];
$powerdoorlocks   = $_POST['powerdoorlocks'];
$antilockbrakingsys = $_POST['antilockbrakingsys'];
$brakeassist = $_POST['brakeassist'];
$powersteering   = $_POST['powersteering'];
$driverairbag = $_POST['driverairbag'];
$passengerairbag = $_POST['passengerairbag'];
$powerwindow   = $_POST['powerwindow'];
$cdplayer = $_POST['cdplayer'];
$centrallocking = $_POST['centrallocking'];
$crashcensor   = $_POST['crashcensor'];
$leatherseats = $_POST['leatherseats'];

// echo $centrallocking;
// echo $crashcensor;
// echo $leatherseats;

$updatesql = "UPDATE vehicles  SET title = '$vehicletitle', brand = '$brandname', overview = '$overview', price ='$priceperday',fuel_type='$fueltype',model_year = '$modelyear', set_capacity = '$set', air_conditioner= '$airconditioner',power_doorlocks = '$powerdoorlocks',antilock_system = '$antilockbrakingsys', brake_assist = '$brakeassist', power_steering = '$powersteering', driver_airbag = '$driverairbag', passenger_airbag = '$passengerairbag', power_windows = '$powerwindow',cd_player = '$cdplayer',central_locking = '$centrallocking', crash_sensor = '$crashcensor', leather_seats = '$leatherseats' ";
    




if (!empty($_FILES['img1']['name']))
{
    $rand = rand(11111, 89999999999);


    $image ='img/vehicleimages/' . $rand .$_FILES['img1']['name'];

    $upload = 'img/vehicleimages/' . $rand . $_FILES['img1']['name'];

    move_uploaded_file($_FILES['img1']['tmp_name'], $upload);
    
    $updatesql .= ",image1 = '$image'";
    if(!empty($data['image1'])){
        unlink($data['image1']);
    }
}
if (!empty($_FILES['img2']['name']))
{
    $rand = rand(11111, 89999999999);


    $image ='img/vehicleimages/' . $rand .$_FILES['img2']['name'];

    $upload = 'img/vehicleimages/' . $rand . $_FILES['img2']['name'];

    move_uploaded_file($_FILES['img2']['tmp_name'], $upload);
    
    $updatesql .= ",image2 = '$image'";
    if(!empty($data['image2'])){
        unlink($data['image2']);
    }
}
if (!empty($_FILES['img3']['name']))
{
    $rand = rand(11111, 89999999999);


    $image ='img/vehicleimages/' . $rand .$_FILES['img3']['name'];

    $upload = 'img/vehicleimages/' . $rand . $_FILES['img3']['name'];

    move_uploaded_file($_FILES['img3']['tmp_name'], $upload);
    
    $updatesql .= ",image3 = '$image'";
    if(!empty($data['image3'])){
        unlink($data['image3']);
    }
}
if (!empty($_FILES['img4']['name']))
{
    $rand = rand(11111, 89999999999);


    $image ='img/vehicleimages/' . $rand .$_FILES['img4']['name'];

    $upload = 'img/vehicleimages/' . $rand . $_FILES['img4']['name'];

    move_uploaded_file($_FILES['img4']['tmp_name'], $upload);
    
    $updatesql .= ",image4 = '$image'";
    if(!empty($data['image4'])){
        unlink($data['image4']);
    }
}
if (!empty($_FILES['img5']['name']))
{
    $rand = rand(11111, 89999999999);


    $image ='img/vehicleimages/' . $rand .$_FILES['img5']['name'];

    $upload = 'img/vehicleimages/' . $rand . $_FILES['img5']['name'];

    move_uploaded_file($_FILES['img5']['tmp_name'], $upload);
    
    $updatesql .= ",image5 = '$image'";
    if(!empty($data['image5'])){
        unlink($data['image5']);
    }
}

$updatesql .= "where id = $id";
mysqli_query($conn, $updatesql);

header('Location: all_vehical.php');

?>