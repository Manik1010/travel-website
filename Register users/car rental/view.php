<?php
  $v_id = $_GET['id'];
  // echo $event_id;
  $flg = $_GET['flg'];
  if(isset($_GET['res']))
  {
    $res = $_GET['res'];
    // echo $res;
  }

  // echo $flg;
  // die();
  session_start();
  $user_id = $_SESSION['user_id']; 
   // echo $user_id;
   // die();
  include '../../Register users/include/config.php';

  $sql = "SELECT *  FROM vehicles WHERE id = '$v_id';";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  include'../include/register_header.php';
  // echo $row['status'];
  // die();
 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Slide</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/slick-theme.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <style>
  

    /* Create three equal columns that floats next to each other */
    .column {
      float: left;
      width: 50%;
      padding: 10px;
      height: 300px; /* Should be removed. Only for demonstration */
    }
    /*.container2{
      margin-left: 10%;
      margin-right: 10%;
    }*/
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    .demo{
      width: 50%;
      padding: 10px;
      height: 400px;
    }
    p,span{
      font-size: 16px;
    }
</style>
</head>
<body>
  <br><br>
  <?php 

  if($flg == 1)
  {
    ?>
    <script>
        swal("Good job!", "Invalid Information!", "error");
    </script>    
    <?php
    $flg = 0;
    // echo $flg;
  }

  if($flg == 2)
  {
  ?>

    <script>
        swal("Good job!", "You booking Successfully!", "success");
    </script>

  <?php
    $flg = 0;
  }
  ?>

  <section>
    <div class="container2" style="margin-top: -40px;">
      <!-- <button>Back</button> -->
      <div class="all center">
        <img class="cl-1" src="../../admin/car rant/<?php echo $row['image1']; ?>">
        <img class="cl-1" src="../../admin/car rant/<?php echo $row['image2']; ?>">
        <img class="cl-1" src="../../admin/car rant/<?php echo $row['image3']; ?>">
        <img class="cl-1" src="../../admin/car rant/<?php echo $row['image4']; ?>">
        <img class="cl-1" src="../../admin/car rant/<?php echo $row['image5']; ?>">
      </div>
      <div class="row">
        <div class="column">
          <h2 style="text-align: center;">Beand Name: <?php echo $row['brand']; ?></h2>
          <h2><?php echo $row['title']; ?></h2>
          <p><?php echo $row['overview']; ?></p>
          <div>
            <p><img src="images/model.png" width="40" height="50">&nbsp;&nbsp;&nbsp; <?php echo $row['model_year']; ?> <img src="images/c_icon.png" width="50" height="60" style="margin-left: 80px; ">&nbsp;&nbsp;&nbsp; <?php echo $row['fuel_type']; ?>&nbsp;&nbsp;&nbsp; <img src="images/people.png" width="40" height="50" style=" border-radius: 80%; margin-left: 100px; "> &nbsp;&nbsp;&nbsp;<?php echo $row['set_capacity']; ?> Seats</p>
          </div>
          <div class="row">
            <h2 style="text-align: center;">Accessories</h2>
            <div class="demo">
                <p><img src="images/right.jpg" width="50" height="50"> <?php echo $row['air_conditioner']; ?></p>
                <p><img src="images/right.jpg" width="50" height="50"> <?php echo $row['power_doorlocks']; ?></p>
                <p><img src="images/right.jpg" width="50" height="50"> <?php echo $row['antilock_system']; ?></p>
                <p><img src="images/right.jpg" width="50" height="50"> <?php echo $row['brake_assist']; ?></p>
                <p><img src="images/right.jpg" width="50" height="50"> <?php echo $row['power_steering']; ?></p>
                <p><img src="images/right.jpg" width="50" height="50"> <?php echo $row['driver_airbag']; ?></p>
            </div>
            <div class="demo">
                <p><img src="images/right.jpg" width="50" height="50"> <?php echo $row['passenger_airbag']; ?></p>
                <p><img src="images/right.jpg" width="50" height="50"> <?php echo $row['power_windows']; ?></p>
                <p><img src="images/right.jpg" width="50" height="50"> <?php echo $row['cd_player']; ?></p>
                <p><img src="images/right.jpg" width="50" height="50"> <?php echo $row['central_locking']; ?></p>
                <p><img src="images/right.jpg" width="50" height="50"> <?php echo $row['crash_sensor']; ?></p>
                <p><img src="images/right.jpg" width="50" height="50"> <?php echo $row['leather_seats']; ?></p>
            </div>

          </div>
        </div>


        <div class="column">
          <h2 style="text-align: right;">৳<?php echo $row['price']; ?></h2>
          <p style="text-align: right;">Par Day</p>
          <div >
            <p>Share: <a href="#" class="fa fa-facebook"></a>  <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> </p></b></b>
          </div>
          <div class="main-form">
            <div class="widget_heading" >
              <h1><i class="fa fa-envelope" aria-hidden="true" style="text-align: center;" ></i>Book Here..</h1>
            </div>

            <!-- <div class="main-form"> -->
            <form method="post" action="store.php?v_id=<?php echo $v_id;?>& flg=<?php echo $flg;?>"? >
              <div style="font-size: 30px;">
                <span><b> Check in?</b></span><br>
                <input style="font-size: 15px;" type="date" name="date" class="form-control" id="date" placeholder="date" required>
                <br>
              </div>
              <div>
                <span><b>Check out?</b></span><br>
                <input style="font-size: 15px;" type="date" name="date1" class="form-control" id="date" placeholder="date" required><br>
              </div><br>
              <span><b>Your NID card number Plz?</b></span><br>
              <div class="form-group">
                <textarea style="font-size: 15px;" rows="1" class="form-control" name="nid" placeholder="NID Plz.." required></textarea>
              </div>
              <br>
              <div class="form-group">
                <textarea style="font-size: 15px;" rows="4" class="form-control" name="message" placeholder="Message" ></textarea>
              </div>
  
              <div class="form-group mt-3">
               <input style="font-size: 15px;" type="checkbox" class="" name="driver" value="1000">
               <label for="driver"> <h5>Need you a car driver?</h5> </label><br>
               <p><strong>2000৳</strong> Will be added per day</p>
             </div>

             <div class="form-group">
                <!-- <input type="submit" class="btn"  name="submit" value="Book Now"> -->
                <?php 
                 if($row['status']==0)
                 { ?>
                  <button class="btn btn-success" type="submit" value="SUBMIT">Book Now</button>
                  <?php

                 } else{ ?>
                    <h2>Not abable for 3 days</h2>
                  <?php
                }
                ?>
                <br><br><br>
                
              </div><br>

            </form>
<!-- </div> -->
         </div>
        </div>
      </div>
    </div>

  </section>

  <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
  <script type="text/javascript" src="js/slick.min.js"></script>
  <script type="text/javascript" src="js/my.js"></script>
</body>
</html>