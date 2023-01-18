<?php
include 'include/config.php';
$sql = "SELECT *
        from packages
        limit 3";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Tour Koro.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="contact-us.html">Contact Us</a>
      <a href="login system/login_form.php">Login</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images2/s1.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <p>We are rady to searve our good searvices.We can give you all searvices for a good tour.</p>
      <p> you can find A to Z all information in this website .</p>
      <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images2/s2.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover the new places</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
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
         <img src="images2/kuakata_sentmartin.jpg" alt="">
         <h3>Packages</h3>
      </div>

      <div class="box">
         <img src="images2/sylhet2.jpg" alt="">
         <h3>Events</h3>
      </div>

      <div class="box">
         <img src="images2/shoes.jpg" alt="">
         <h3>Shoping</h3>
      </div>

      <div class="box">
         <img src="images2/waterfoll.jpg" alt="">
         <h3>New places</h3>
      </div>

      <div class="box">
         <img src="images2/Dhaka.jpg" alt="">
         <h3>Hotels</h3>
      </div>

      <div class="box">
         <img src="images2/res.jpg" alt="">
         <h3>Restaurents</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images2/tea.jpg" alt="">
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

<section class="packages">

  <h1 class="heading-title" >OUR Packages</h1>

   <div class="box-container">
      <?php while($row = mysqli_fetch_assoc($result)){ ?>
      <div class="box">
         <div class="image">
            <img src="admin/<?php echo $row['image1'];?>" alt="">
         </div>
         <div class="content">
            <h3><?php echo $row['title'];?></h3>
            
           <p> <img src="images2/cost.png " width="30px" height="30px"><b>Cost:  <?php echo $row['weekdays_cost'];?>tk</b><p>
            <p> <img src="images2/time.png " width="30px" height="30px"><b>Time:  <?php echo $row['duration'];?></b><p>
            <a href="single.php?id=<?php echo $row['id'];?>" class="btn" style="font-size: 16px;">More Details</a>
         </div>
      </div>

      <?php } ?>
      

   </div>

  

</section>















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +88 01737283186 </a>
         <a href="#"> <i class="fas fa-phone"></i>  +88 01737283186  </a>
         <a href="#"> <i class="fas fa-envelope"></i>  abdurrahimsgm@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> sylhet, bangladesh - 3031 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>three friends web designer</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
int main (){
    int a=500,b=100;
    float c=10.5,d=25.5;
    char ch= 'm';
    printf("sum=%d\n",a+b);
    printf("sub=%d\n",a-b);
    printf("mul=%d\n",a*b);
    printf("div=%d\n",a/b);
    printf("sum=%f\n",c+d);
    printf("sub=%f\n",c-d);
    printf("char=%c",ch);
return 0;
}
