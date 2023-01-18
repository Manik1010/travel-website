<?php
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

$user_id = $_SESSION['user_id'];
include '../include/config.php';

$h_id = $_GET['h_id']; 
// echo $h_id;
// die();
$sql = "SELECT * FROM ratingsystem_hotel where h_id = $h_id";
$result = mysqli_query($conn, $sql);
// $data = mysqli_fetch_assoc($result);
// $c= $data['comments'];
// echo $c;

$sql1 = "SELECT * FROM hotels where h_id = $h_id";
$result1 = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result1);
 


$sql_app = mysqli_query($conn, "select AVG(stars) as avg FROM ratingsystem_hotel where h_id = $h_id; ");
$app = mysqli_fetch_assoc($sql_app);
$store = round($app['avg'], 2);
// echo $store;
// $sql12 = "SELECT * FROM stars where id = $h_id";
// $result12 = mysqli_query($conn, $sql12);
// $row2 = mysqli_fetch_assoc($result12);

// if(!isset($row2)){
//   $s11 = "INSERT INTO stars(r_id, id, stars) values(NULL ,'$h_id','$store')";
//   mysqli_query($conn,$s11);
// }
// else{
//   // $rate = $row2['stars']; 
//   $update = round($app['avg'], 1);
//   $r_id = $row2['r_id'];
//   //echo $r_id;
//   $updatesql = "UPDATE stars  SET stars = '$update' where r_id = $r_id ";
//   mysqli_query($conn, $updatesql);
// }

$sql_five = mysqli_query($conn, "select COUNT(stars) as total FROM ratingsystem_hotel where stars = '5' AND h_id = $h_id; ");
$five_stars = mysqli_fetch_assoc($sql_five);
// echo $five_stars['total'];
$sql_four = mysqli_query($conn, "select COUNT(stars) as total FROM ratingsystem_hotel where stars = '4' AND h_id = $h_id; ");
$four_stars = mysqli_fetch_assoc($sql_four);
// echo $four_stars['total'];
$sql_three = mysqli_query($conn, "select COUNT(stars) as total FROM ratingsystem_hotel where stars = '3' AND h_id = $h_id; ");
$three_stars = mysqli_fetch_assoc($sql_three);
$sql_two = mysqli_query($conn, "select COUNT(stars) as total FROM ratingsystem_hotel where stars = '2' AND h_id = $h_id; ");
$two_stars = mysqli_fetch_assoc($sql_two);
// echo $two_stars['total'];
// die();
$sql_one = mysqli_query($conn, "select COUNT(stars) as total FROM ratingsystem_hotel where stars = '1' AND h_id = $h_id; ");
$one_stars = mysqli_fetch_assoc($sql_one);
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
    <div class="container">
    <br>
    <a class="btn btn-success" href="index.php" style="font-size: 16px;">Back</a><br><br>
    <div>
      <h3 style="text-align: center;"><?php echo $row['h_name'];?></h3> 
    </div>
    <br>
    <div class="row">
      <div class="col-sm-7">
        <div class="rating-block" style="margin-left: 350px;">
          <h4><b>Average User Rating</b></h4>
          <!-- <h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2> -->
          <h2 class="bold padding-bottom-7"><?php echo round($app['avg'], 1);?> <small>/ 5</small></h2>
          <?php 
                  $r = round($app['avg'], 1); 

                  for($i = 0; $i<$r; $i++){ ?>
                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
            <?php
               }
            ?>
            <?php
                  for($j=0; $j<4-round($app['avg'], 1); $j++){?>
                    <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>

            <?php
               }
            ?>

        </div>
      </div>
 
      <div class="col-sm-4">
        <h4><b>Rating Breakdown</b></h4>
        <div class="pull-left">
          <div class="pull-left" style="width:35px; line-height:1; ">
            <div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
          </div>
          <div class="pull-left" style="width:180px;">
            <div class="progress" style="height:9px; margin:8px 0;">
              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
              <span class="sr-only">80% Complete (danger)</span>
              </div>
            </div>
          </div>
          <div class="pull-right" style="margin-left:10px;"><?php echo $five_stars['total']?></div>
        </div>

        <div class="pull-left">
          <div class="pull-left" style="width:35px; line-height:1;">
            <div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
          </div>
          <div class="pull-left" style="width:180px;">
            <div class="progress" style="height:9px; margin:8px 0;">
              <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
              <span class="sr-only">80% Complete (danger)</span>
              </div>
            </div>
          </div>
          <div class="pull-right" style="margin-left:10px;"><?php echo $four_stars['total']?></div>
        </div>

        <div class="pull-left">
          <div class="pull-left" style="width:35px; line-height:1;">
            <div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
          </div>
          <div class="pull-left" style="width:180px;">
            <div class="progress" style="height:9px; margin:8px 0;">
              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
              <span class="sr-only">80% Complete (danger)</span>
              </div>
            </div>
          </div>
          <div class="pull-right" style="margin-left:10px;"><?php echo $three_stars['total']; ?></div>
        </div>

        <div class="pull-left">
          <div class="pull-left" style="width:35px; line-height:1;">
            <div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
          </div>
          <div class="pull-left" style="width:180px;">
            <div class="progress" style="height:9px; margin:8px 0;">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%">
              <span class="sr-only">80% Complete (danger)</span>
              </div>
            </div>
          </div>
          <div class="pull-right" style="margin-left:10px;"><?php echo $two_stars['total']; ?></div>
        </div>

        <div class="pull-left">
          <div class="pull-left" style="width:35px; line-height:1;">
            <div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
          </div>
          <div class="pull-left" style="width:180px;">
            <div class="progress" style="height:9px; margin:8px 0;">
              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
              <span class="sr-only">80% Complete (danger)</span>
              </div>
            </div>
          </div>
          <div class="pull-right" style="margin-left:10px;"><?php echo $one_stars['total']?></div>
        </div>
      </div>      
    </div>      
    
    <div class="row">
      <div class="col-sm-11">
        <hr/>
        <div class="review-block" style="margin-left: 350px;">
          <?php
            while($data = mysqli_fetch_assoc($result)){  
          ?> 
          <div class="row">
            <div class="col-sm-3">
              <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
              <div class="review-block-name"><a href="#"><?php echo $data['u_name'];?></a></div>
              <!-- <div class="review-block-date">January 29, 2016<br/>1 day ago</div> -->
              <div class="review-block-date"><?php echo $data['u_email'];?><br/><?php echo $data['u_address'];?></div>
            </div>
            <div class="col-sm-9">
              <div class="review-block-rate" style="margin-left: 200px;">
                <h3>Rating</h3>
                <?php 
                  $r = $data['stars']; 

                  for($i = 0; $i<$r; $i++){ ?>
                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                <?php
                  }
                ?>

                <?php
                  for($j=0; $j<5-$data['stars']; $j++){?>

                    <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>

               <?php
                  }
                ?>
              </div>
              <div class="review-block-title" style="text-align: center;"><?php echo $data['comments'];?></div>
            </div>
          </div><hr/>
          <?php } ?>
          <hr/>

<!--           <div class="row">
            <div class="col-sm-3">
              <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
              <div class="review-block-name"><a href="#">nktailor</a></div>
              <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
            </div>
            <div class="col-sm-9">
              <div class="review-block-rate">
                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
              </div>
              <div class="review-block-title">this was nice in buy</div>
              <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
            </div>
          </div> -->

        </div>
      </div>
    </div>
    
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
