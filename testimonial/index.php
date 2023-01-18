<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
    <meta charset="UTF-8">
    <title>How to create Testimonial Carousel using Bootstrap5</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
<?php 
         $conn = mysqli_connect('localhost', 'root','','travel website');
         $allTesSql = "SELECT * FROM testimonials";
         $allTesResult = mysqli_query($conn, $allTesSql);
        
 ?>

    <section>
        <div class="container">
            
       <h1 class="btn btn-edit text-danger " style="float:center;font-size:30px;"> Testimonial</h1>
       <h3 class="section-header "><span>Read what my clients are saying to whom I've helped to make a difference in their life.</span></h3>
       <p>.......<mark>Worda from people</mark>....... </p>
            
            <br>
            <div class="testimonials">
            <?php while($row = mysqli_fetch_assoc($allTesResult)){?>   
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                         
                  <div class="carousel-inner">
         
                    <div class="carousel-item active">
                    <div class="single-item">
                
                  
                          <div class="row">
                              <div class="col-md-5">
                                  <div class="profile">
                                      <div class="img-area">
                                          <img src="../admin/testmonial/<?php echo $row['picture'];?>" width="120px" height="120px" alt="">
                                      </div>
                                      <div class="bio">
                                  
                        
                                <h3><?php echo $row['name'];?></h3>
                                <h3><?php echo $row['designation'];?></h3>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="content">
                                      <p><span><i class="fa fa-quote-left"></i></span><?php echo $row['comment'];?></p>
                                      <p class="socials">
                                          <i class="fa fa-twitter"></i>
                                          <i class="fa fa-behance"></i>
                                          <i class="fa fa-pinterest"></i>
                                          <i class="fa fa-dribbble"></i>
                                          <i class="fa fa-vimeo"></i>
                                      </p>
                                  </div>
                              </div>
                          </div>
                        
                      </div>
                    </div>
                    
                  
                  </div>
               
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                  <?php } ?> 
                </div>
               
            </div>
           
           
        </div>
    </section>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>