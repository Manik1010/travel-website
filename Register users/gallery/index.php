<title>Gallery</title>
<?php
include '../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:../../login system/login_form.php');
}
include'../include/register_header.php';
?>
<section class="gallerypage">
   <h1 style="font-size: 24px;color: blueviolet;text-align: center;">Traveling Place images</h1>
   
   <div class="gallery">
      <a href="../../images/img-1.jpg" > <img src="../../images/img-1.jpg"> </a> 
      <a href="../../images/img-2.jpg"> <img src="../../images/img-2.jpg"></a>
      <a href="../../images/img-3.jpg"><img src="../../images/img-3.jpg"></a>
      <a href="../../images/img-4.jpg"><img src="../../images/img-4.jpg"></a>
      <a href="../../images/img-5.jpg"><img src="../../images/img-5.jpg"></a>
      <a href="../../images/img-6.jpg"><img src="../../images/img-6.jpg"></a>
      <a href="../../images/img-7.jpg"><img src="../../images/img-7.jpg"></a>
      <a href="../../images/img-8.jpg"><img src="../../images/img-8.jpg"></a>
      <a href="../../images/img-1.jpg" > <img src="../../images/img-1.jpg"> </a> 
      <a href="../../images/img-2.jpg"> <img src="../../images/img-2.jpg"></a>
      <a href="../../images/img-3.jpg"><img src="../../images/img-3.jpg"></a>
      <a href="../../images/img-4.jpg"><img src="../../images/img-4.jpg"></a>
      <a href="../../images/img-5.jpg"><img src="../../images/img-5.jpg"></a>
      <a href="../../images/img-6.jpg"><img src="../../images/img-6.jpg"></a>
      <a href="../../images/img-7.jpg"><img src="../../images/img-7.jpg"></a>
      <a href="../../images/img-8.jpg"><img src="../../images/img-8.jpg"></a>
   </div>
   
    
</section>


<?php include'../include/footer.php'; ?>