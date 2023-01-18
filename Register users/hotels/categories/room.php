<?php 

// session_start();
// $r_id = $_SESSION['r_id'];
// echo $r_id;
// die();
include'../../include/register_header.php';
include '../../include/config.php';


$h_name= $_GET['h_name'];
echo $h_name;
$h_id = $_GET['h_id'];
echo $h_id;
// die();

$sql = "SELECT * FROM multiple_images where h_name = '$h_name' ";
$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql);


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Room</title>
  <link rel="stylesheet" href="style.css">
 
</head>

<body>
<!-- Container for the image gallery --> 

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(../images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <p>We are rady to searve our good searvices.We can give you all searvices for a good tour.</p>
      <p> you can find A to Z all information in this website .</p>
      <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(../images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover the new places</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(../images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your tour worthwhile</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>
<script src="javascript.js"></script>
</body>
</html> 