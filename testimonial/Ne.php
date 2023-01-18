<!-- include bootstrap start -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- include bootstrap end -->
 
<!-- include font awesome -->
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
 
<!-- include slick 
<link rel="stylesheet" type="text/css" href="slick.css" />
<link rel="stylesheet" type="text/css" href="slick-theme.css" />-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"></script>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"></script>
 
<!-- include vue js -->
<!--<script src="vue.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.7.13/dist/vue.js"></script>


<!-- Carousel wrapper -->
<?php 
         $conn = mysqli_connect('localhost', 'root','','test');
         $allTesSql = "SELECT * FROM testimonials";
         $allTesResult = mysqli_query($conn, $allTesSql);
        
 ?>
     <?php while($row = mysqli_fetch_assoc($allTesResult)){?>

<div id="carouselExampleControls" class="carousel slide text-center carousel-dark" data-mdb-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="profile-pic" width="200px" src="./<?php echo $row['picture'];?>"/>
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h5 class="mb-3"><?php echo $row['name'];?></h5>
          <p><?php echo $row['designation'];?></p>

          <p class="text-muted">
            <i class="fas fa-quote-left pe-2"></i>
            <?php echo $row['comment'];?>
          </p>
        </div>
      </div>
      <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="far fa-star fa-sm"></i></li>
      </ul>
    </div>
 
  </div>
  <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls"
    data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls"
    data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php } ?>
<!-- Carousel wrapper -->

<!-- include jquery -->
<script src="jquery-3.3.1.min.js"></>
 
  <script src="slick.min.js"></script>
   
  <!-- include bootstrap JS -->
  <script src="bootstrap.min.js"></script>
   
  <!-- your JS code -->
  <script src="script.js?v=<?php echo time(); ?>"></script>