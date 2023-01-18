<?php
include '../../Register users/include/config.php';

$barSql = "SELECT YEAR(date) as y, MONTH(date) as m, COUNT(event_id) as num FROM event GROUP by m";
$barResult = mysqli_query($conn,$barSql);

 while ($barData = mysqli_fetch_assoc($barResult)) {
    
    $month_name[] = date("F", mktime(0, 0, 0, $barData['m'], 10));
    // // echo json_encode($month_name);
    $num_events[] = $barData['num'];
    // var_dump($barData);
    // echo $barData;
    // echo json_encode($package_bookings);
    $y_event[] = $barData['y'];
    // echo json_encode($y_bookings);
    
 }

echo json_encode($month_name);
echo json_encode($package_bookings);


die();
$conn = mysqli_connect("localhost","root","","testing") or die("Connection Failed");

$sql = "SELECT distinct(city) FROM students";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

if(mysqli_num_rows($result) > 0 ){
  $output = mysqli_fetch_all($result, MYSQLI_ASSOC);

  echo json_encode($output);

}else{
  echo "No Record Found.";
}

?>
