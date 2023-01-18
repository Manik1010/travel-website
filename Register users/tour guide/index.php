<title>tour guide</title>
<?php
include '../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:../../login system/login_form.php');
}

include'../include/register_header.php';
$sql = "select * from tour_guide";
$result = mysqli_query($conn,$sql);
?>
<section class="tourguide">

   <h1 class="heading-title">Tour Guide</h1>
   <hr style="border: 1px solid grey; display: block;left: 20px;">

   <?php while($row=mysqli_fetch_assoc($result)){?>
   <div class="row">
      <h3 style="margin-top: 30px;margin-left: 16px;"><?php echo $row['title'];?></h3>
      
      <div class="col-md-9"><p style="margin:5px;padding: 5px;font-size: 16px;line-height: 22px;text-align: justify;"><?php echo $row['description'];?> <a href="display.php?id=<?php echo $row['id'];?>">more</a></p></div>
      <div class="col-md-3"><img src="../../admin/<?php echo $row['image'];?>"width="250px" height="200px" style="border-radius:25px;"></div>
   </div>
   <?php } ?>
  

   

</section>

<?php include '../include/footer.php'; ?>