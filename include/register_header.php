<?php 
$url = 'http://localhost/travel%20website/Register%20users/'; 

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
    <!-- Bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   
   <link rel="stylesheet"  type="text/css" href="../css/style.css">
   <link rel="stylesheet" type="text/css" href="../login system/css/style.css">
</head>
<style type="text/css">
  .navbar-nav{
    font-size: 16px;
  }
  .navbar-nav a{
           color: black;
           margin-left: 10px;
  }
  .dropdown-menu a{
    color: black;
    margin:0;
    font-size: 16px;
  }
  .navbar-dark .navbar-nav .nav-link{
    color:white;
  }
  
</style>
<body>
   
<!-- header section starts  -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <div class="container-fluid p-3 bg-dark">
            <a href="#" class="navbar-brand " style="margin:0;padding: 0"><img src="<?php echo $url;?>../images/logo2.jfif" width="150" height="80"></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " style="margin-right: 3%" id="navbarCollapse">
                <div class="navbar-nav  ms-auto " >
                    <a href="<?php echo $url;?>user_page.php" class="nav-item btn-outline-success nav-link 
                    <?php if($page=='home'){echo 'active';}?>
                     "><b>Home</b></a>
                    <!-- } -->
                    <a href="<?php echo $url;?>packages/index.php" class="nav-item btn-outline-success nav-link <?php if($page=='packages'){echo 'active';}?> ">Packages</a>
                    <a href="<?php echo $url;?>events/index.php" class="nav-item btn-outline-success nav-link">Events</a>
                    <a href="<?php echo $url;?>hotels/index.php" class="nav-item btn-outline-success nav-link">Hotels</a>
                    <a href="<?php echo $url;?>shop/index.php" class="nav-item btn-outline-success nav-link">Shop</a>
                    <a href="<?php echo $url;?>jobs/index.php" class="nav-item btn-outline-success nav-link">Jobs</a>
                    <a href="<?php echo $url;?>new places/index.php" class="nav-item btn-outline-success nav-link">New places</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Others</a>
                        <div class="dropdown-menu">
                            <a href="<?php echo $url;?>tour guide/index.php" class="btn-dark dropdown-item">Tour guide</a>
                            <a href="<?php echo $url;?>car rental/index.php" class="btn-dark dropdown-item">Car Rental</a>
                            <a href="<?php echo $url;?>fqa/index.php" class="btn-dark dropdown-item">FAQ</a>
                            <a href="<?php echo $url;?>gallery/index.php" class=" btn-outline-success dropdown-item">Gallary</a>
                            <a href="#" class=" btn-outline-success dropdown-item">Restaurents</a>
                             <a href="<?php echo $url;?>weather/index.php" class="btn-dark dropdown-item">Weather</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown" >
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><img src="<?php echo $url;?>../images/profile.png" width="30"></a>
                        <div class="dropdown-menu">
                            <a href="<?php echo $url;?>profile/index.php" class="btn-dark dropdown-item">profile</a>
                            <a href="<?php echo $url;?>dashboard/index.php" class=" btn-outline-success dropdown-item">dashboard</a>
                            <a href="<?php echo $url;?>logout.php" class=" btn-outline-success dropdown-item">logout</a>
                        </div>
                    </div>
            </div>
        </div>
    </nav>