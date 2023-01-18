<?php

     include '../include/config.php';
     session_start();
      $package_id = $_GET['id'];
      $date    = $_POST['date'];
      $guests  = $_POST['guests'];
      
      $user_id = $_SESSION['user_id'];
      $tour_guide = 0;
      if(isset($_POST['tour_guide'])){
      	$tour_guide = $_POST['tour_guide'];
      }

      
      
      $request = " insert into package_booking_details(user_id,package_id,date,num_of_guests,tour_guide) values('$user_id','$package_id','$date', '$guests','$tour_guide') ";
      mysqli_query($conn, $request);

      header('location:single.php?id='.$package_id); 

 
?>