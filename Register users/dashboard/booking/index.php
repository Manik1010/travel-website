<title> all booking details</title>
<?php 
 $page = "newPlace";
 $url = 'http://localhost/travel%20website/Register%20users/';
 include '../../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
} 

$user_id = $_SESSION['user_id'];


$sql = " SELECT package_booking_details.id as book_id,packages.*
         FROM package_booking_details JOIN packages
         ON package_booking_details.package_id = packages.id
         WHERE user_id = $user_id
         ORDER BY package_booking_details.id DESC
       ";
$result = mysqli_query($conn,$sql);

$sql2 = "SELECT user_form.name as name,user_form.number as number,package_booking_details.*      
         FROM package_booking_details JOIN user_form 
         ON package_booking_details.user_id = user_form.id
          ORDER BY package_booking_details.id DESC";
$result2 = mysqli_query($conn,$sql2);

$s = "SELECT * FROM booking_info WHERE u_id = $user_id ORDER BY id DESC";

$res = mysqli_query($conn,$s);
$res2 = mysqli_query($conn,$s);

$sqlterm = "SELECT * FROM package_terms_conditions ORDER by id DESC LIMIT 1 ";
$resTerm = mysqli_query($conn,$sqlterm);
$terms = mysqli_fetch_assoc($resTerm);

$ss = "SELECT * FROM booking_info_car WHERE u_id = $user_id ORDER BY id DESC";
$ress = mysqli_query($conn,$ss);
$ress2 = mysqli_query($conn,$ss);
// $res2 = mysqli_query($conn,$s);

// echo $r['id'];
//die();
include '../include/all_header.php';
?>
<style type="text/css">
	.activated{
         background-color: green;
	}
	.tab{
		margin-left: 30%;
		margin-right: 30%;
	}
	.tab button{
		border-radius: 25px;
		font-size: 18px;
	}
  .accordion-flush .accordion-item .accordion-button {
    border-radius: 0;
    border: 1px solid;
    margin: 5px;
    }
    .accordion-body{
      background-color: lightgray;
      border: 1px solid black;
      margin-left: 3%;
      margin-right: 2%;
      margin-bottom: 2%;
    }
</style>
<div class="row">
  <div class="col-md-10">
      <h2>Welcome To Tour koro</h2>
      <h6>You can see your booking progress </h6>
  </div>

</div>

<div class="row">

              <div class="tab">
                <button class="tablinks activated" onclick="openCity(event, 'London')">Package</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">Hotels</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Events</button>
                <button class="tablinks" onclick="openCity(event, 'BD')">CarRant</button>
              </div> 
 
              <div id="London" class="tabcontent">
                <h1 class="mt-5 ">Package Booking List</h1>
                  <!-- start modal For Terms & Condition-->
                    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content" style="width: 800px;">
                          <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Payment Methods (Only <?php echo $terms['payment_method']?>)</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            
                             <?php echo $terms['terms_conditions'];?>
                          
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          
                          </div>
                        </div>
                      </div>
                    </div>

                 <!-- End Modal -->
                 
                  <div class="accordion accordion-flush " id="accordionFlushExample<?php echo $row['book_id'];?>" >
                    <?php while ($row = mysqli_fetch_assoc($result)){?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?php echo $row['book_id'];?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <div class="info">
                                  <h5 style="color: #067CD2;">Booking No #<?php echo $row['book_id'];?>

                                      <?php 
                                            $book_id = $row['book_id'];
                                            $countsql = "SELECT * FROM package_payment_details WHERE user_id = $user_id and book_id = $book_id";
                                             $resultcount= mysqli_query($conn,$countsql);
                                             $data = mysqli_fetch_assoc($resultcount);
                                             if(isset($data['status'])){
                                              if($data['status']=='pending'){
                                                  echo '<span style="right: 5%;border-radius: 25px;background-color: black; padding: 10px;color: #fff;position: absolute;">pending</span>';
                                             }
                                             elseif ($data['status']=='success') {
                                                    echo '<span style="right: 5%;border-radius: 25px;background-color: green; padding: 10px;color: #fff;position: absolute;">Successfull</span>';
                                             }
                                             elseif ($data['status']=='rejected') {
                                                    echo '<span style="right: 5%;border-radius: 25px;background-color: red; padding: 10px;color: #fff;position: absolute;">Rejected</span>';
                                             }
                                             }
                                             
                                             else{
                                                  echo '<span style="right: 5%;border-radius: 25px;background-color: #FECACA; padding: 10px;color: #C53968;position: absolute;">comfirmed</span>';
                                             }
                                      ?>
                                         
                                  </h5>

                                  <h6 class="mt-3"> <?php echo $row['title'];?></h6>
                                  <p><img src="../../../images2/time.png" width="20"> <?php echo $row['duration'];?>&nbsp;&nbsp;&nbsp;&nbsp; <img src="../../../images/location.png" width="20"> <?php echo $row['location'];?></p>
                                  
                                    </div> 
                                 </button>
                            </h2>
                            <div id="flush-collapseOne<?php echo $row['book_id'];?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample<?php echo $row['book_id'];?>">

                                <div class="row accordion-body">
                                   <div class="col-md-8">
                                      <?php $row2 = mysqli_fetch_assoc($result2) ;?>
                                      <h5>General Information</h5>
                                      <p><img src="../../../images/user.svg" width="20">  <?php echo $row2['name'];?></p>
                                      <p><img src="../../../images/teamwork.svg" width="20"> <?php echo $row2['num_of_guests'];?></p>
                                      <p><img src="../../../images/phone-call.svg" width="20">  <?php echo $row2['number'];?></p>
                                      <p><img src="../../../images/date.png" width="20"> 
                                         <?php $date=date_create($row2['date']); 
                                                echo date_format($date,"D d M Y ");
                                          ?>
                                      </p>
                                   </div>
                                   <div class="col-md-4">
                                    <h5 style="float: right;color: #067CD2;">pricing</h5><br><br>
                                    <p>Package  <span style="float: right;font-weight: 600;font-size: 1rem;"><?php echo $row['tour_type'];?></span> </p> 

                                    <p>Price <span style="float: right;font-weight: 600;font-size: 1rem;"><?php echo $row['weekdays_cost']*$row2['num_of_guests'];?> ৳</span></p>
                                    <p>Tour guide <span style="float: right;font-weight: 600;font-size: 1rem;"><?php echo $row2['tour_guide'];?> ৳</span></p>
                                    <hr>
                                    <h5>Total Amount <span style="float: right;font-weight: 600;font-size: 1rem;"><?php echo $row['weekdays_cost']*$row2['num_of_guests'] + $row2['tour_guide'];?> ৳</span></h5><br>
                                  <?php 
                                       if(isset($data['status'])){
                                         if($data['status']=='success' ){?>
                                         
                                   <?php }}else{?>
                                          <form action="payment_documents.php?book_id=<?php echo $row['book_id'];?>" method="POST">
                                        <input type="checkbox"  name="condition" value="yes" required >
                                        <input hidden name="package_id" value="<?php echo $row['id'];?>">
                                      
                                        <label for="condition"> I agree with all <button class="btn btn-info"data-bs-toggle="modal" data-bs-target="#exampleModal">Terms & Conditions</button>  of Tour koro</label><br><br>
                                        <button type="Submit"class="btn btn-success w-75 p-2"  >Payment Documents</button> 

                                    </form>
                                  <?php }?>
                                   </div>   
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                  
                  </div>
              
              </div>

            <div id="Paris" class="tabcontent" style="display: none;">
                <h1 class="mt-5 ">Hotel Booking List</h1>
                <div class="accordion accordion-flush " id="accordionFlushExample" >
                    <?php while ($r = mysqli_fetch_assoc($res)){?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?php echo $r['id'];?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <div class="info">
                                        <h5 style="color: #067CD2;">Booking No #<?php echo $r['id'];?><span style="right: 5%;border-radius: 25px;background-color: #FECACA; padding: 10px;color: #C53968;position: absolute;">confirmed</span> </h5>

                                        <h6 class="mt-3"> <?php echo $r['h_name'];?></h6>
                                        <p><img src="../../../images2/time.png" width="20"> <?php echo $r['date1'];?>&nbsp;&nbsp;&nbsp;&nbsp;<h5>You must be payment before this time plz..</h5> </p>
                                              
                                    </div> 
                                 </button>
                            </h2>
                            <div id="flush-collapseOne<?php echo $r['id'];?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">

                                <div class="row accordion-body">
                                   <div class="col-md-8">
                                      <?php $r2 = mysqli_fetch_assoc($res2) ;?>
                                        <h5>General Information:</h5>
                                        <p>Name:  <?php echo $r2['name'];?></p>
                                        <p>Hotel Name: <?php echo $r2['h_name'];?></p>
                                        <p>Room Type:  <?php echo $r2['r_type'];?></p>
                                        <h5>Chack in date:</h5>
                                        <p><img src="../../../images/date.png" width="20"> 
                                        <?php $date=date_create($r2['date1']); 
                                              echo date_format($date,"D d M Y ");
                                        ?>
                                        </p>
                                        <h5>Chack out date:</h5>
                                        <p><img src="../../../images/date.png" width="20"> 
                                        <?php $date=date_create($r2['date2']); 
                                              echo date_format($date,"D d M Y ");
                                        ?>
                                        </p>
                                        <p>So you want this room for:  <?php
                                         echo $r2['r_type'];
                                         $now = time(); // or your date as well
                                         $d1 = strtotime($r2['date1']);
                                         $d2 = strtotime($r2['date2']);
                                         // echo $d1;

                                         $datediff = $d2 - $d1;
                                         // echo $datediff;
                                         // die();

                                         echo round($datediff / (60 * 60 * 24));
                                       ?> days</p>
                                   </div>
                                   <div class="col-md-4">
                                        <h5 style="float: right;color: #067CD2;">pricing</h5><br><br>
                                        <p><span style="float: right;font-weight: 600;font-size: 1rem;"><?php echo $row['r_type'];?><h5>Booking Information:</h5></span> </p> 
                                        <p>Room  <span style="float: right;font-weight: 600;font-size: 1rem;">Standand</span></p> 
                                        <p>Number of Days <span style="float: right;font-weight: 600;font-size: 1rem;"><?php echo round($datediff / (60 * 60 * 24));?></span></p>
                                        <p>Price <span style="float: right;font-weight: 600;font-size: 1rem;"><?php echo $r2['tk'];?> ৳</span></p>
                                        <p>Number of Room <span style="float: right;font-weight: 600;font-size: 1rem;"><?php echo $r2['number_room'];?></span></p>
                                        <hr>
                                        <h5>Total Amount <span style="float: right;font-weight: 600;font-size: 1rem;"><?php echo $r2['tk'] * $r2['number_room'] * round($datediff / (60 * 60 * 24));?> ৳</span></h5><br>

                                        <input type="checkbox"  name="condition" value="yes" required >
                                        <label for="condition">  I agree with all Terms & Conditions, Refund Policy and Privacy Policy of Tour koro<a href="https://aws.amazon.com/route53/domain-registration-agreement/">View</a></label><br><br>

                                        <a href="payment.php?id=<?php echo $r2['id']; ?>&tk=<?php echo $r2['tk'] * $r2['number_room']; ?>" class="btn btn-success w-50 p-2">Pay Now</a>
                                   </div>   
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                  
                  </div>
            </div>
            <div id="Tokyo" class="tabcontent" style="display: none;">
              <h1 class="mt-5 ">Event Booking List</h1>
               
                No resort found
            </div>
            
          </div>


          <div id="BD" class="tabcontent" style="display: none;">
            <h1 class="mt-5 ">Car Booking List</h1>
               <div class="accordion accordion-flush " id="accordionFlushExample" >
                    <?php while ($rs = mysqli_fetch_assoc($ress)){?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">

                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?php echo $rs['id'];?>" aria-expanded="false" aria-controls="flush-collapseOne">

                                    <div class="info">
                                        <h5 style="color: #067CD2;">Booking No #<?php echo $rs['id'];?><span style="right: 5%;border-radius: 25px;background-color: #FECACA; padding: 10px;color: #C53968;position: absolute;">confirmed</span> </h5>
                                        <?php 
                                        //if()
                                            // $c_id = $rs['v_id'];
                                            // $car_sql = "SELECT * FROM vehicles WHERE id = '$c_id' ; ";
                                            // $res_car = mysqli_query($conn, $car_sql);
                                            // $row_car = mysqli_fetch_assoc($res_car);
                                            // //echo $row_car['status'];
                                            // if($row_car['status']==1){
                                            // echo '<span style="right: 5%;border-radius: 25px;background-color: red; padding: 10px;color: #fff;position: absolute;">Rejected</span>';
                                            // }
                                        ?>

                                        <h6 class="mt-3"> Brand Name: <?php echo $rs['brand'];?></h6>
                                        <h6 class="mt-3"> Car Name: <?php echo $rs['b_name'];?></h6>
                                        <p><img src="../../../images2/time.png" width="20"> <?php echo $rs['day_00'];?>&nbsp;&nbsp;&nbsp;&nbsp;<h5>You must be payment before this time plz..</h5> </p>
                                              
                                    </div> 
                                 </button>
                            </h2>
                            <div id="flush-collapseOne<?php echo $rs['id'];?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">

                                <div class="row accordion-body">
                                   <div class="col-md-8">
                                        <h5>General Information:</h5>
                                        <p>Brand Name:  <?php echo $rs['brand'];?></p>
                                        <p>Car Name: <?php echo $rs['b_name'];?></p>
                                        <p>Fuel Type:  <?php echo $rs['fuel'];?></p>
                                        <p>User Email:  <?php echo $rs['u_email'];?></p>
                                        <p>NID Card:  <?php echo $rs['nid'];?></p>
                                        <h5>Chack in date:</h5>
                                        <p><img src="../../../images/date.png" width="20"> 
                                        <?php $date=date_create($rs['day_0']);
                                            echo date_format($date,"D d M Y "); 

                                        ?>
                                        </p>

                                        <h5>Chack out date:</h5>
                                        <p><img src="../../../images/date.png" width="20"> 
                                        <?php $date=date_create($rs['day_00']); 
                                              $date1 = date_format($date,"D d M Y ");

                                              //$date1 = "Fri 8 Oct 2022";
                                              echo $date1;
                                        ?>

<?php
$t=time();
//echo($t . "<br>");
//echo(date("Y-m-d",$t));
$today = date_create(date("Y-m-d",$t));
$today1 = date_format($today,"D d M Y ");
// echo $today1;
if($today1>$date1){
    $c_id = $rs['v_id'];

    $updatesql = "UPDATE vehicles  SET status = '0' where id = '$c_id'; ";
    mysqli_query($conn, $updatesql);

    $sql = " DELETE FROM booking_info_car WHERE v_id = '$c_id'; ";
    mysqli_query($conn, $sql);

}
else{
    echo "Manik";
}


?>

                                        </p>
                                        <p>So you want this car for:  <?php
                                         //echo $rs['r_type'];
                                         $now = time(); // or your date as well
                                         $d1 = strtotime($rs['day_0']);
                                         $d2 = strtotime($rs['day_00']);
                                         //echo $d1;

                                         $datediff = $d2 - $d1;
                                         //echo $datediff;
                                         // die();

                                         echo round($datediff / (60 * 60 * 24));
                                       ?> days</p>
                                   </div>
                                   <div class="col-md-4">
                                        <h5 style="float: right;color: #067CD2;">pricing</h5><br><br>
                                        <p><span style="float: right;font-weight: 600;font-size: 1rem;"><?php echo $rs['brand'];?><h5>Booking Information:</h5></span> </p> 
                                        <p><?php echo $rs['b_name'];?>  <span style="float: right;font-weight: 600;font-size: 1rem;">Standand</span></p> 
                                        <p>Number of Days <span style="float: right;font-weight: 600;font-size: 1rem;"><?php echo round($datediff / (60 * 60 * 24));?></span></p>
                                        <p>Price for per day <span style="float: right;font-weight: 600;font-size: 1rem;"><?php echo $rs['price'];?> ৳</span></p>
                                        <p>Need driver or not <span style="float: right;font-weight: 600;font-size: 1rem;"><?php echo $rs['driver'];?> ৳</span></p>
                                        <hr>
                                        <?php $ms = $rs['price'] * round($datediff / (60 * 60 * 24)) + $rs['driver']; ?>
                                        <h5>Total Amount <span style="float: right;font-weight: 600;font-size: 1rem;"><?php echo $ms;?> ৳</span></h5><br>
                                        
                                        <form action="payment_car.php?b_id=<?php echo $rs['id'];?>& tk=<?php echo$ms; ?>" method="POST">
                                            <input type="checkbox"  name="condition" value="yes" required >
                                          
                                            <label for="condition"> I agree with all <a href="http://localhost/travel%20website/Register%20users/car%20rental/view_trams.php" target="_blank">Terms</a> & <a href="http://localhost/travel%20website/Register%20users/car%20rental/view_conditions.php" target="_blank">Conditions</a>  of Tour koro</label><br><br>
                                            <button type="Submit1"class="btn btn-success w-75 p-2"  >Pay Now</button> 
                                            <!-- class="btn btn-info"data-bs-toggle="modal" data-bs-target="#exampleModal" -->

                                        </form>

                                   </div>   
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                  
                  </div>
            </div>

              <script>
              function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                  tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                  tablinks[i].className = tablinks[i].className.replace(" activated", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " activated";
              }
              </script>
            
          </div>
<?php
include '../include/footer.php';
 ?>