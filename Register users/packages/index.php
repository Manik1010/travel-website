<title>Packages</title>
<?php
$page="packages";
include '../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
$sql = "SELECT *
        from packages";
$result = mysqli_query($conn,$sql);
include'../include/register_header.php';
?>

<div class="heading" style="background:url(../images/tea.png) no-repeat">
   <h1>packages</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

  

   <div class="box-container">
      <?php while($row = mysqli_fetch_assoc($result)){ ?>
      <div class="box">
         <div class="image">
            <img src="../../admin/<?php echo $row['image1'];?>" alt="">
         </div>
         <div class="content">
            <h3><?php echo $row['title'];?></h3>
            
           <p> <img src="../../images2/cost.png " width="30px" height="30px"><b>Cost:  <?php echo $row['weekdays_cost'];?>tk</b><p>
            <p> <img src="../../images2/time.png " width="30px" height="30px"><b>Time:  <?php echo $row['duration'];?></b><p>
            <a href="single.php?id=<?php echo $row['id'];?>" class="btn btn-outline-dark w-100" style="font-size: 16px;">More Details</a>
         </div>
      </div>

      <?php } ?>
      

   </div>

  

</section>




<?php include'../include/footer.php';?>














