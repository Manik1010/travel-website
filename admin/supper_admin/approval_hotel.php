<?php  

if(isset($_GET['id'])) {

    $hotel_id = $_GET['id'];
    // echo $hotel_id;
    // die();

  include '../../include/config.php';
  // die();
  $sql = "SELECT * FROM hotel_request WHERE id = '$hotel_id' ";
  $result = mysqli_query($conn, $sql);
  $data = mysqli_fetch_assoc($result);

$dist_name = $data['dist_name'];
$name = $data['h_name'];
$location = $data['h_loaction'];
$discreption = $data['discreption'];
$facilitie1  = $data['facilitie1'];
$facilitie2  = $data['facilitie2'];
$facilitie3  = $data['facilitie3'];
$facilitie4  = $data['facilitie4'];
$facilitie5  = $data['facilitie5'];
$facilitie6  = $data['facilitie6'];
$facilitie7  = $data['facilitie4'];
$image = $data['image'];
// echo $dist_name;
// echo $name;
// echo $location;
// echo $discreption;
// echo $facilitie1;
// echo $facilitie7;
// echo $image;
//   die();

  
$sql1 = "INSERT INTO hotels (h_id,dist_name,h_name,h_loaction,image,discreption,facilitie1,facilitie2,facilitie3,facilitie4,facilitie5,facilitie6,facilitie7) VALUES ('$hotel_id','$dist_name','$name','$location','$image','$discreption','$facilitie1', '$facilitie2', '$facilitie3', '$facilitie4', '$facilitie5', '$facilitie6', '$facilitie7' )";
$result1 = mysqli_query($conn, $sql1);


  $sql2 = "DELETE FROM hotel_request WHERE id = '$hotel_id' ";
  $result2 = mysqli_query($conn, $sql2);

  header('Location: hotel_request.php');

}
?>
