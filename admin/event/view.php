<?php 

// $id = $_GET['id'];
$eventid = $_GET['event_id'];

include '../../Register users/include/config.php';

$sql = "SELECT * FROM event WHERE event_id = '$eventid' ";

$result = mysqli_query($conn, $sql);

$data = mysqli_fetch_assoc($result);
// echo $data['img'];
// echo $data['event'];
?>
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Event-page</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
  font-size: 20px;
  /*margin-left: 10%;*/
}
p{
  margin-left: 5%;
}
h3{
  margin-left: 5%;
}
h1{
  text-decoration: underline;
}
</style>
  </head>
  <body>
    <section>
    <!-- <a class="btn btn-success" href="allevent.php">Back </a> -->
  <div class="category" style="margin-top:50px; text-align: center;">
  	   <h3>Topic : <?php echo $data['title'];?></h3>
  </div>
  <div class="row">
  	<div class="col-md-2">
      <a class="btn btn-success" href="allevent.php">Back </a>
    </div>
  	<div class="col-md-10">
  	   <img src="../<?php echo $data['img']; ?>" width="740" height="400">
  	 </div>
  </div>

  <br>
    <div class="row">
          <div class="col-md-7">
              <p style="text-align:justify; font-size: 18px;"><?php echo $data['event'];?> </p>

              <h2>Booking</h2>
              <!-- <p>Click on the buttons inside the tabbed menu:</p> -->

              <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'London')">Info</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">Itinerary</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Payment Methode</button>
              </div>

              <div id="London" class="tabcontent">
                <h1>Non Ac Bus Share Event</h1>
                <p><?php echo $data['ac'] ?> /- Per Person</p>
                <h1>Ac Bus Share Event</h1>
                <p><?php echo $data['non_ac'] ?> /- Per Person</p>
                <h1>Air Bus Share Event</h1>
                <p><?php echo $data['air'] ?> /- Per Person</p>
              </div>

              <div id="Paris" class="tabcontent">
                <h1>Itinerary</h1>
                
                <h3>DAY 0</h3>
                <p><?php echo $data['day_0'] ?> </p>
                <h3>DAY 1</h3>
                <p><?php echo $data['day_01'] ?></p>
                <h3>DAY 2</h3>
                <p><?php echo $data['day_02'] ?></p>
                <h3>DAY 00</h3>
                <p><?php echo $data['day_00'] ?> </p>
              </div>

              <div id="Tokyo" class="tabcontent">
                <h2>Bank Payment</h2>
                <p>AC Name: Tour Koro BD</p>
                <p>AC No.16411026552</p>
                <p>Dutch Bangla Bank Ltd (Mirpur Branch)</p>
                <p>Routing Number: 090263136</p><br><br>

                <h2>Mobile Payment</h2>
                <p>Bkash Marchant: 01616-490568 (Bkash Payment with Cash out Charge)<br>Bkash Personal: 01616-490568, 01877722851 (Send Money with Cash out Charge)<br>For others payment option call our Manager +8801840238946<br>Before Payment Please Call and Confirm Seat Then Pay Booking Money</p>
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
                  tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
              }
              </script> 
       
          </div>
          <div class="col-md-4"style="margin-left: 110px; font-size: 18px;">
              <h4><img src="../../images2/time.png" width="40" alt=""><b> Date and time</b></h4>
               <strong style="margin-left: 40px; font-size: 16px;" > <?php echo $data['date']; ?></strong></br> 
               <h4><img src="../../images/location.png" width="40" alt=""><b>Location</b></h4>
               <strong style="margin-left: 40px; font-size: 16px;" ><?php echo $data['viewpermission']; ?></strong>
               <br><br><br>

               <h3>Share with friends</h3>

                <!-- Facebook -->
                <a class="btn btn-primary" style="background-color: #3b5998; font-size: 18px;" href="facebook.com" role="button"><i class="fab fa-facebook-f"></i></a><br><br>

                <!-- Twitter -->
                <a class="btn btn-primary" style="background-color: #55acee; font-size: 16px;" href="#!" role="button"
                  ><i class="fab fa-twitter"></i
                ></a><br><br>
                <!-- Instagram -->
                <a class="btn btn-primary" style="background-color: #ac2bac; font-size: 16px; " href="#!" role="button"
                  ><i class="fab fa-instagram"></i
                ></a><br><br>
                <!-- Linkedin -->
                <a class="btn btn-primary" style="background-color: #0082ca; font-size: 18px;" href="#!" role="button"
                   ><i class="fab fa-linkedin-in"></i
                ></a><br>


          </div>
    </div>

</script>
    <script src="https://use.fontawesome.com/021eb02a1a.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </section>
<?php
include('includes/scripts.php');
?>

</body>
</html> 
