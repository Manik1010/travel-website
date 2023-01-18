<?php 

if(isset($_GET['e_id'])) {

    $e_id = $_GET['e_id'];
    // echo $e_id;
    // die();

  include '../../Register users/include/config.php';
  // die();
  $sql = "SELECT * FROM eventrequest WHERE event_id = '$e_id' ";
  $result = mysqli_query($conn, $sql);
  $data = mysqli_fetch_assoc($result);

  $u_id = $data['user_id'];
  $date = $data['date'];
  $title = $data['title']; 
  // echo $title;
  $viewpermission = $data['viewpermission'];
  $event = $data['event'];
  $img = $data['img'];
  // echo $img;
  //  die();
  $day_0 = $data['day_0'];
  $day_1 = $data['day_01'];
  $day_2 = $data['day_02'];
  $day_00 = $data['day_00'];
  $ac = $data['ac'];
  $nonac = $data['no_ac'];
  $air = $data['air'];
//   echo $day_00;
// echo $day_2;
// echo $ac;
// die();
  
  $sql = "INSERT INTO event  VALUES ('$e_id','$u_id','$date','$title','$viewpermission','$event', '$img', '$day_0', '$day_1', '$day_2', '$day_00', '$ac', '$nonac', '$air')";  
  $result = mysqli_query($conn, $sql);

  $sql2 = "DELETE FROM eventrequest WHERE event_id = '$e_id' ";
  $result = mysqli_query($conn, $sql2);

  header('Location: request.php');

}
?>
