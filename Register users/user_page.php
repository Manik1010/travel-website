<?php
$page="home";
include '../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}


include'../include/register_header.php'; 
?>


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

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="../images2/icon-1.jpg" alt="">
         <h3>Special package</h3>
      </div>

      <div class="box">
         <img src="../images2/sylhet2.jpg" alt="">
         <h3>tour guide</h3>
      </div>

      <div class="box">
         <img src="../images2/mosq.jpg" alt="">
         <h3>hotels</h3>
      </div>

      <div class="box">
         <img src="../images/shop.jpg" alt="">
         <h3>Shoping</h3>
      </div>

      <div class="box">
         <img src="../images2/waterfoll.jpg" alt="">
         <h3>Events</h3>
      </div>

      <div class="box">
         <img src="../images/car.jpg" alt="">
         <h3>Booking Car</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="../images2/tea.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>We are rady to searve our good searvices.We can give you all searvices for a good tour.</p>
      <p> you can find A to Z all information in this website .</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="../images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Eid ul Fitor</h3>
            <p>We are rady to searve our good searvices.We can give you all searvices for a good tour.</p>
      <p> you can find A to Z all information in this website .</p>
       <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="../images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>adventure & tour</h3>
            <p>We are rady to searve our good searvices.We can give you all searvices for a good tour.</p>
      <p> you can find A to Z all information in this website .</p>
       <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="../images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Boishakhi tour</h3>
            <p>We are rady to searve our good searvices.We can give you all searvices for a good tour.</p>
      <p> you can find A to Z all information in this website .</p>
       <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>upto 50% off</h3>
      <p>We are rady to searve our good searvices.We can give you all searvices for a good tour.</p>
      <p> you can find A to Z all information in this website .</p>
       <a href="book.php" class="btn">book now</a>
   </div>
</section>

<!-- home offer section ends -->


<?php include'../include/footer.php';?>














