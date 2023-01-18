<?php
include '../include/config.php'; 

 $sql2 = " SELECT COUNT(hotels.h_id) as num, hotels.dist_name as district
           FROM hotels join hotel_categories
           on hotels.dist_name = hotel_categories.dist_name
           GROUP by hotels.dist_name";
 $result = mysqli_query($conn, $sql2);

//include('include/footer.php');



if(mysqli_num_rows($result) > 0 ){
   while ($data2 = mysqli_fetch_assoc($result)) {
   
    $district_name[] = $data2['district'];
    $num_of_hotels[] = $data2['num'];
       
 }     


  $output = mysqli_fetch_all($result, MYSQLI_ASSOC);

  echo json_encode($output);

}else{
  echo "No Record Found.";
}

?>
