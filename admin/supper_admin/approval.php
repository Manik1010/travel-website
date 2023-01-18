<?php  

if(isset($_GET['id'])) {

    $categories_id = $_GET['id'];
    // echo $categories_id;
    // die();

  include '../../include/config.php';
  // die();
  $sql = "SELECT * FROM hotel_categories_request WHERE categories_id = '$categories_id' ";
  $result = mysqli_query($conn, $sql);
  $data = mysqli_fetch_assoc($result);

  $dist_name = $data['dist_name'];
  // echo $dist_name;
  // die();

  
  $sql = "INSERT INTO hotel_categories  VALUES ('$categories_id','$dist_name')";  
  $result = mysqli_query($conn, $sql);

  $sql2 = "DELETE FROM hotel_categories_request WHERE categories_id = '$categories_id' ";
  $result = mysqli_query($conn, $sql2);

  header('Location: request.php');

}
?>
