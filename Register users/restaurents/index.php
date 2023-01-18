<title>Restaurents</title>
<?php
$page="others";
include '../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
 $sql = "SELECT *
        from restaurent_categories";
 $result = mysqli_query($conn,$sql);
 
include'../include/register_header.php';
?>
<div class="container-lg my-3">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol>
        
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/1.jfif" height="450px" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="img/2.jfif" height="450px" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="img/3.jfif" height="450px" class="d-block w-100" alt="Slide 3">
            </div>
        </div>

        <!-- Carousel controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>


<!-- packages section starts  -->

<section class="restaurents">
<div class="row">
   <div class="col-md-2 sidebar" >
         <a href="index.php" class="btn-outline-dark <?php if($page=='newPlace'){echo 'active';}?>" style="margin: 0;display: block;font-size: 16px;padding: 7px;border: 1px solid black;text-decoration: none; ">All District</a>
        <?php  while ($row = mysqli_fetch_assoc($result)){ ?>  
         <a style="margin: 0;display: block;font-size: 16px;padding: 7px;border: 1px solid black;text-decoration: none;" 
            href="category.php?id=<?php echo $row['id'];?>" class="btn-outline-dark">
            <?php echo $row['name'];?>
         </a>
        
         <?php  } ?>
      </div>
    
  <!-- <form>
    <select name="users" class="w-25"onchange="showUser(this.value)" style="font-size: 24px;">
       <option> Select Categories </option>
       
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                       
                      <option value="<?= $row['id'] ?>"> <?= $row['name'] ?> </option>
                       
                    <?php } ?>
    </select>
  </form> -->
  <div class="col-md-9">
  <h1 class="section-heading text-uppercase text-center">Top Restaurents! in <strong>All districts</strong></h1>
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

                        <?php

                         $select = mysqli_query($conn, "SELECT * FROM restaurents");
                         
                      ?>

                   <?php while($row = mysqli_fetch_assoc($select)){ ?>
                                            

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
  
        </section>

 </div> 
                   </div>
                   </section>
<!-- end -->
   




<?php include'../include/footer.php';?>

