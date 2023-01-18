<?php
$page="packages";
include '../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
$block_status = $_SESSION['b_status'];

$id = $_GET['id'];
$sql = "SELECT *
        from packages
        where id = '$id'";
$result = mysqli_query($conn,$sql);
$data   = mysqli_fetch_assoc($result);
include'../include/register_header.php';
?>
<!-- header section ends -->
<style >
.carousel-control-next-icon, .carousel-control-prev-icon {
    display: inline-block;
    width: 36px;
    height: 50px;
    background-color: black;
    background-repeat: no-repeat;
    background-position: 50%;
    background-size: 100% 100%;
}
body {
    margin: 0;
    font-family: var(--bs-font-sans-serif);
    font-size: 1.5rem;
    font-weight: 400;
    line-height: 2;
    color: #212529;
    background-color: #fff;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
}
</style>
<section class="home"style="margin:5%;">
   <a href="index.php" class="btn btn-outline-dark" style="font-size:14px;">back</a>
   <h1 ><?php echo $data['title'];?></h1>
   <p><img src="../../images/location.png" width="20" height="20"><b><?php echo $data['location'];?></b></p><hr style="border: 1px solid grey;">
   <div class="row"style ="margin-left: 5%;" >

      <div class="col">
         <h3>Duration</h3>
         <h5 style="color: green;"><?php echo $data['duration'];?></h5>
      </div>

      <div class="col">
         <h3>Tour Type</h3>
         <h5 style="color: green;"><?php echo $data['tour_type'];?></h5>
      </div>

      <div class="col">
         <h3>Max Group Size</h3>
         <h5 style="color: green;"><?php echo $data['max_size'];?></h5>
      </div>

      <div class="col">
         <h3>follow us</h3>
         <a href="#"  style="font-size: 1.2rem;"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"  style="font-size: 1.2rem;> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"  style="font-size: 1.2rem;> <i class="fab fa-instagram"></i> instagram </a>
         
      </div>

   </div>
   
   <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../../admin/<?php echo $data['image1'] ?>" class="d-block w-100" height="520"alt="...">
          </div>
          <div class="carousel-item">
            <img src="../../admin/<?php echo $data['image2'] ?>" class="d-block w-100" height="520" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../../admin/<?php echo $data['image3'] ?>" class="d-block w-100" height="520"  alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
   </div>
   <h1>GENERAL INFORMATION</h1>
   <h5 class="mt-3"><?php echo $data['general_info'];?></h5>
   <h1>FOOD MENU</h1>
   <table class="table table-bordered" style="font-size: 14px;">
       
           <tr >
               <th>Breakfast</th>
               <td class="p-3"><?php echo nl2br($data['breakfast']);?></td>
           </tr>
            <tr>
               <th>Lunch</th>
               <td class="p-3"><?php echo $data['lunch'];?>
              </td>
           </tr>
            <tr>
               <th>Snacks</th>
               <td class="p-3">
                  <?php echo $data['snacks'];?>
              </td>
           </tr>
            <tr>
               <th>Dinner</th>
               <td class="p-3"><?php echo $data['dinner'];?>
               </td>
           </tr>
       
   </table>
   <div class="row"> 
       <h1> INCLUDED/EXCLUDE </h1>
       <div class="col">   
             <ul style="font-size: 12px;"> 
                  <?php echo  nl2br($data['included']);?>
            </ul>
       </div> 
       <div class="col">   
             <ul  style="font-size: 12px;"> 
                 <?php echo  nl2br($data['exclude']);?>
             </ul>
       </div>   
   </div>   
   <h1>GROUP FARE (PER PERSON)</h1>
   <div class="p-2 bg-light text-white rounded text-center">
     <table class="table " style="font-size: 16px;">
         <thead>
             <tr>
                <th>Title</th>
                <th>Persons</th>
                <th>Weekend</th>
                <th>Weekdays</th>
             </tr>
         </thead>
         <tbody>
              <tr>
                 <td><?php echo $data['title2'];?></td>
                 <td><?php echo $data['persons'];?> persons</td>
                 <td><?php echo $data['weekend_cost'];?>৳</td>
                 <td><?php echo $data['weekdays_cost'];?>৳</td>
              </tr>
              
         </tbody>
     </table>
   </div>
   <h1>ITINERARY</h1>
    <p>
       <?php echo $data['itinerary'];?>

    </p>
   
   <h1>NOTES</h1>
   <h4 class="bg-warning p-2">Note: We use local and seasonal items as such it is expected there would be variation or changes in the menu someday depending on availability.</h4>
</section>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="book_form.php?id=<?php echo $id;?>" method="post" class="book-form">

      <div class="flex">
          <div class="inputBox">
            <span>Date :</span>
            <input type="date" name="date">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests"  min="6" max="<?php echo $data['max_size'];?>" name="guests">
         </div><br>
         
         
      </div>
      <div class="form-group mt-3">
             <input type="checkbox" class="" name="tour_guide" value="200">
             <label for="tour_guide"> <h5>Need tour guide?</h5> </label><br>
             <p><strong>200৳</strong> will be added</p>
      </div>
      <?php 
         if($block_status == 0){
            echo '<button type="submit"  class="btn btn-info w-25 p-3" style="font-size: 25px;margin-left: 35%;margin-right: 35%;" > Book Now</button>';
         }
         else{
            echo ' <span class="bg-danger p-4 fw-bold text-center" style="margin-left:25%;">Your account has been blocked! please request to admin for unblock</span>';
         }
      ?>
     

   </form>

</section>

<!-- booking section ends -->


<?php include'../include/footer.php';?>