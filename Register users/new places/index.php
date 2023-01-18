<title>new places</title> 
<?php
$page = "newPlace";
include '../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:../../login system/login_form.php');
}
$b_status = $_SESSION['b_status'];
$sql = "SELECT * 
        FROM  new_places
        where view='0'
        order by id desc ";
$result = mysqli_query($conn, $sql);

$sql2 = "SELECT * 
        FROM  new_place_categories 
        ";
$result2 = mysqli_query($conn, $sql2);

include'../include/register_header.php';

?>
<section class="tourguide">

   <h1 class="heading-title">About New places</h1>
   <hr style="border: 1px solid grey; display: block;left: 20px;">
   <div class="row">
      <div class="col-md-2 sidebar" >
         <a href="index.php" class="btn-outline-dark <?php if($page=='newPlace'){echo 'active';}?>" style="margin: 0;display: block;font-size: 16px;padding: 7px;border: 1px solid black;text-decoration: none; ">All District</a>
        <?php  while ($row = mysqli_fetch_assoc($result2)){ ?>  
         <a style="margin: 0;display: block;font-size: 16px;padding: 7px;border: 1px solid black;text-decoration: none;" 
            href="<?php echo $url;?>new place categories/index.php?id=<?php echo $row['id'];?>" class="btn-outline-dark">
            <?php echo $row['name'];?>
         </a>
        
         <?php  } ?>
      </div>
      <div class="col-md-6" style="display: block;padding: 0;margin-left: 18px;">
            <h2 style="margin:0;padding: 5px;">Bangladesh
            <p style="margin:5px; padding: 10px;font-size: 16;text-align: justify;line-height: 25px;">Bangladesh's tourist attractions include historical monuments, resorts, beaches, picnic spots, forests and tribal people, wildlife of various species. Activities for tourists include angling, water skiing, river cruising, hiking, rowing, yachting, and sea bathing.Travel to Bangladesh is one of the last opportunities in South East Asia to experience travel with a true sense of adventure: Heading off the beaten track and into a country that does not have an established tourism infrastructure, especially not for foreign tourists.</p>
      </div>
      <div class="col-md-3 "style="margin-top: 5%;" >
        <?php if ($b_status==0){
            echo '<a href="<?php echo $url;?>dashboard/new places/index.php"  class="btn btn-outline-dark p-2 mb-2" style="font-size: 16px;display: block" >My places</a>
         <a href="<?php echo $url;?>dashboard/new places/create.php?back=1"  class="btn btn-outline-dark p-2 mb-2" style="font-size: 16px;display: block">add new places</a>
        
         <a href="<?php echo $url;?>dashboard/new places/add-category.php"  class="btn btn-outline-dark p-2 mb-2" style="font-size: 16px;display: block" >request district</a>
          <a href="<?php echo $url;?>dashboard/new places/add-complain.php"  class="btn btn-outline-dark p-2 mb-2" style="font-size: 16px;display: block" >complain</a>';
          }else{
                  echo ' <br><br><span class="bg-danger p-4 fw-bold text-center" style="display:block;font-size:16px;" ">Your account has been blocked! please request to admin for unblock</span>';
         }?>

      </div>
   </div>
   <?php while($data=mysqli_fetch_assoc($result)){?>
   <div class="row">
      <h3 style="margin-top: 30px;margin-left: 5px;"><?php echo $data['title'];?></h3>
      <h6 style="margin-left: 10px;"><i><strong>Published date: <?php echo $data['date'];?></strong></i></h6>
      <div class="col-md-9"><p style="margin:5px;padding: 5px;font-size: 16px;line-height: 22px;text-align: justify;">
                <?php  echo substr($data['description'],0,1000); ?>...
         <a href="single.php?id=<?php echo $data['id'];?>">more</a> </p></div>
      <div class="col-md-3"><img src="../../admin/<?php echo $data['image']; ?>" width="220px" height="150px" style="border-radius:25px;"></div>
   </div>
   <?php } ?>


   

</section>

<?php include '../include/footer.php'; ?>