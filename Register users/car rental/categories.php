<?php
include '../include/config.php';
$categories_id= $_GET['categories_id'];
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
include'../include/register_header.php'; 

// echo $categories_id;
$sql = "SELECT * FROM brand where id = '$categories_id' ";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
$name = $data['brand_name'];
// echo $name;

$sql = "SELECT *  FROM vehicles where brand = '$name';";
$result1 = mysqli_query($conn, $sql);
// $sql1 = "SELECT *  FROM vehicles ;";
// $result1 = mysqli_query($conn, $sql1);
// $row1 = mysqli_fetch_assoc($result);
// $id = $row1['id'];
// if($id % 2 == 0){
//    echo "Event";
// }
// else{
//    echo "Old";
// }
// echo $id;
// die();

?>

<link rel="stylesheet" type="text/css" href="style.css">
<!-- <style>
   .card{
      position: relative;
   }
   .img-text{
      position: absolute;
      top: 50;
      color: #fff;
      padding: 10px;
   }

</style> -->
<style>
   .sidenav {
  
     width: 160px;
     position: absolute;
     z-index: 1;

     background-color: #111;
     overflow-x: hidden;
     margin-top: 3%;
     padding: 5px;
     margin-left: 70.5%;
   }

   .sidenav a {
     padding: 6px 8px 6px 16px;
     text-decoration: none;
     font-size: 16px;
     color: #818181;
     display: block;
     border: 1px solid white;
   }

   .sidenav a:hover {
     color: #f1f1f1;
     background-color: green;
   }

   .main {
     margin-left: 160px; /* Same as the width of the sidenav */
     font-size: 28px; /* Increased text to enable scrolling */
     padding: 0px 10px;
   }
</style>
<section>
    <div class="section-header text-center">
      <h2 style="font-size: 22px;">Find the Best <span>CarForYou</span></h2>
      <p style="font-size: 18px;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
    </div>
    <br>
  <div class="sidenav">
     <h3 style="color:white;text-align: center;">Select Brand</h3> 
     <a href="index.php">All Brand</a>
     <a href="categories.php?categories_id=<?php echo $categories_id;?>"><?php echo $name?></a>
  </div>
  
    <div>
      <div class="row">
         <?php while ($row1 = mysqli_fetch_assoc($result1)){ if($row1['id'] % 2 == 0){ ?>
         <div class="col-md-6 mt-6 content">
            <br><br><br><br><br><br><br>
            <div class="card" style="width:500px">
              <img class="card-img-top" src="../../admin/car rant/<?php echo $row1['image1']; ?>" alt="Card image">
              <div class="banner-text">
               <div>
                  <p><img src="images/model.png" width="40" height="50">&nbsp;&nbsp;&nbsp; <?php echo $row1['model_year'];?> <img src="images/c_icon.png" width="50" height="60" style="margin-left: 80px; ">&nbsp;&nbsp;&nbsp;<?php echo $row1['fuel_type'];?>&nbsp;&nbsp;&nbsp; <img src="images/people.png" width="40" height="50" style=" border-radius: 80%; margin-left: 100px; "> &nbsp;&nbsp;&nbsp;<?php echo $row1['set_capacity'];?> Seats</p>
               </div>
               <div>
                <h4 style="font-size: 18px; text-align: center;" class="card-title"><?php echo $row1['brand'];?> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ৳<?php echo $row1['price'];?>/Day</h4>
                <p class="card-text" style="font-size: 18px; text-align: center;"><?php echo $row1['title'];?><a href="view.php?id=<?php echo $row1['id']; ?>">Read more</a></p>
               </div> 
            </div>
           </div>
         </div>
         <?php } else {  ?>
         <div class="col-md-6 mt-6 content">
            <br><br><br><br><br><br><br>
            <div class="card" style="width:500px">
              <img class="card-img-top" src="../../admin/car rant/<?php echo $row1['image1']; ?>" alt="Card image">
              <div class="banner-text">
               <div>
                  <p><img src="images/model.png" width="40" height="50">&nbsp;&nbsp;&nbsp; <?php echo $row1['model_year'];?> <img src="images/c_icon.png" width="50" height="60" style="margin-left: 80px; ">&nbsp;&nbsp;&nbsp;<?php echo $row1['fuel_type'];?>&nbsp;&nbsp;&nbsp; <img src="images/people.png" width="40" height="50" style=" border-radius: 80%; margin-left: 100px; "> &nbsp;&nbsp;&nbsp;<?php echo $row1['set_capacity'];?> Seats</p>
               </div>
               <div>
                <h4 style="font-size: 18px; text-align: center;" class="card-title"><?php echo $row1['brand'];?> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ৳<?php echo $row1['price'];?>/Day</h4>
                <p class="card-text" style="font-size: 18px; text-align: center;"><?php echo $row1['title'];?><a href="view.php?id=<?php echo $row1['id']; ?>">Read more</a></p>
               </div> 
             </div>
            </div>
         
         </div>
         <?php } if($row1['id'] == 0){ echo "There are no Data here.."; echo $row1['id']; } } ?>
      </div>
      
   </div>
</section>

