<?php
session_start();
$u_id = $_SESSION['user_id'];
$v_id = $_GET['v_id'];
$flg = $_GET['flg'];
// echo $flg;
// die();
$msg = $_POST['message'];
$date = $_POST['date']; 
$date1 = $_POST['date1'];
// $driver = $_POST['driver'];
$nid = $_POST['nid'];

// echo $date;
// echo $date1;
include '../include/config.php';
$d1 = strtotime($date);
$d2 = strtotime($date1);
$datediff = $d2 - $d1;
$res = round($datediff / (60 * 60 * 24));
// echo $res;
// die();

if($date1<$date)
{
    // echo "Manik";
    //echo "<div id='demo'></div>";
    // echo '
    // <script>
    //     swal("Good job!", "You clicked the button!", "error");
    // </script>';
    $flg = 1;
    //echo $flg;
    // die();
    header('Location:view.php?id='.$v_id.'&flg='.$flg);
    // header('Location:view.php?id='.$v_id.'&flg='.$flg.'&res='.$res);
}
else
{
$flg = 2;
include '../../Register users/include/config.php';

$updatesql = "UPDATE vehicles  SET status = '1' where id = '$v_id'; ";
mysqli_query($conn, $updatesql);
// die();

$driver = 0; 
if(isset($_POST['driver'])){
    $driver = $_POST['driver'];
}
// echo $driver;

$sql = "SELECT * FROM user_form WHERE id = $u_id ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$number = $row['number'];
$email = $row['email'];
// echo $email;
// echo $number;

// echo $v_id;
// echo $user_id;
// die();
$sql1 = "SELECT * FROM vehicles WHERE id = $v_id ";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);
$brand = $row1['brand'];
$b_name = $row1['title'];
$price = $row1['price'];
$set = $row1['set_capacity'];
$fuel= $row1['fuel_type'];
// echo $brand;
// echo $price;

$sql = "INSERT INTO booking_info_car (u_id, v_id, brand, b_name, price, driver, sets, fuel, u_name, u_number, u_email, day_0, day_00, mag, nid) VALUES ('$u_id','$v_id','$brand', '$b_name', '$price', '$driver', '$set', '$fuel', '$name', '$number', '$email', '$date', '$date1', '$msg', '$nid')";
$result = mysqli_query($conn, $sql);
 header('Location:view.php?id='.$v_id.'&flg='.$flg);
}
?>
