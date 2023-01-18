<title>Restaurents</title> 
<?php
$page = "Others";
include '../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:../../login system/login_form.php');
}
$id =  $_GET['id'];

$sql = "SELECT * 
        FROM  restaurents
        where category_id = '$id'
        order by id desc ";
$result = mysqli_query($conn, $sql);

$sql2 = "SELECT * 
        FROM  restaurent_categories 
        ";
$result2 = mysqli_query($conn, $sql2);

$sql = "SELECT *
        from restaurent_categories
        where id = '$id'";
 $result3 = mysqli_query($conn,$sql);
 $data   = mysqli_fetch_assoc($result3);

include'../include/register_header.php';

?>
<section class="restaurents">
    <div class="row">
   <div class="col-md-2 sidebar" >
         <a href="index.php" class="btn-outline-dark <?php if($page=='newPlace'){echo 'active';}?>" style="margin: 0;display: block;font-size: 16px;padding: 7px;border: 1px solid black;text-decoration: none; ">All District</a>
        <?php  while ($row = mysqli_fetch_assoc($result2)){ ?>  
         <a style="margin: 0;display: block;font-size: 16px;padding: 7px;border: 1px solid black;text-decoration: none;" 
            href="category.php?id=<?php echo $row['id'];?>" class="btn-outline-dark">
            <?php echo $row['name'];?>
         </a>
        
         <?php  } ?>
      </div>
    
  <!-- <form>
    <select name="users" class="w-25"onchange="showUser(this.value)" style="font-size: 24px;">
       <option> Select Categories </option>
       
    </select>
  </form> -->
  <div class="col-md-9">
  <h1 class="section-heading text-uppercase text-center">Top Restaurents! in <strong><?php echo $data['name'];?></strong></h1>
   <h3 class="section-subheading text-muted text-center">Here you can see all Restaurents.</h3>

   <!-- Ai kane tor -->




<!-- slidshow start-->




        
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <!-- <h2 class="section-heading text-uppercase">Top Restaurents!</h2>
                    <h3 class="section-subheading text-muted">Here you can see all Restaurents.</h3> -->
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->

                        

                 <?php while($row = mysqli_fetch_assoc($result)){ ?>
                                            

                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                               
                                <img class="img-fluid" src="../../admin/<?php echo $row['image']; ?>" style="height:150px;width:200px;border-radius:25px;" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                            <a href="display.php?id=<?php echo $row['id'];?>"><div class="portfolio-caption-heading" style="font-size:20px;"><?php echo $row['name']; ?></div></a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">

                    <?php } ?>
                      
                        <!-- Portfolio item 6-->
                       
            </div>
  </div>
  </div>
        </section>

<?php include '../include/footer.php'; ?>