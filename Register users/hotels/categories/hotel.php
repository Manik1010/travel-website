<?php 
session_start();
$user_id = $_SESSION['user_id'];

include'../../include/register_header.php';
include '../../include/config.php'; 

$h_id = $_GET['h_id']; 

$sql = "SELECT * FROM hotels WHERE h_id = '$h_id' ";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
$dist = $data['dist_name'];
// echo $user_id;
// die(); 

$sql1 = "SELECT * FROM rooms WHERE h_id = '$h_id' ";
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql1);
$value = mysqli_fetch_assoc($result2);
// $h_name = $value['h_name']; 
// echo $id;
// die();

 // $sql2 = "SELECT * FROM multiple_images WHERE h_name = '$h_name' ";
$sql2 = "SELECT * FROM multiple_images ";
 $res = mysqli_query($conn, $sql2);
$res1 = mysqli_query($conn, $sql2);
 $test = mysqli_fetch_assoc($res);
//  $r_id = $test['r_id'];
 // echo $r_id;
 // die();
$s1 = "SELECT * FROM user_form WHERE id = $user_id;";
$r1 = mysqli_query($conn, $s1);
$data1 = mysqli_fetch_assoc($r1);
// $u_id = $data1['name'];
// echo $u_id;

$sql11 = "SELECT * FROM stars where id = $h_id";
$result11 = mysqli_query($conn, $sql11);
$data11 = mysqli_fetch_assoc($result11);
// $c= $data11['id'];
// echo $c;
// die();
$sql111 = "SELECT * FROM ratingsystem_hotel where h_id = $h_id AND u_id = $user_id";
$result111 = mysqli_query($conn, $sql111);
$data111 = mysqli_fetch_assoc($result111);

// $c= $data111['stars'];
// echo $c;
// die();
$sql_app = mysqli_query($conn, "select AVG(stars) as avg FROM ratingsystem_hotel where h_id = $h_id; ");
$app = mysqli_fetch_assoc($sql_app);
$store = round($app['avg'], 2);
// echo $store;
// die();
$sql12 = "SELECT * FROM stars where id = $h_id";
$result12 = mysqli_query($conn, $sql12);
$row2 = mysqli_fetch_assoc($result12);

if(!isset($row2)){
  $s11 = "INSERT INTO stars(r_id, id, stars) values(NULL ,'$h_id','$store')";
  mysqli_query($conn,$s11);
}
else{
  // $rate = $row2['stars']; 
  $update = round($app['avg'], 1);
  $r_id = $row2['r_id'];
  //echo $r_id;
  $updatesql = "UPDATE stars  SET stars = '$update' where r_id = $r_id ";
  mysqli_query($conn, $updatesql);
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
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
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  height: 70%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
  }
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
.container1{
  width: 400px;
  background-color: #111;
  padding: 20px 30px;
  border: 1px solid #444;
  border-radius: 5px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.container1 .post{
  display: none;
}
.container1 .text{
  font-size: 25px;
  color: #666;
  font-weight: 500;
}
.container1 .edit{
  position: absolute;
  right: 10px;
  top: 5px;
  font-size: 16px;
  color: #666;
  font-weight: 500;
  cursor: pointer;
}
.container1 .edit:hover{
  text-decoration: underline;
}
.container1 .star-widget input{
  display: none;
}
.star-widget label{
  font-size: 40px;
  color: #444;
  padding: 10px;
  float: right;
  transition: all 0.2s ease;
}
input:not(:checked) ~ label:hover,
input:not(:checked) ~ label:hover ~ label{
  color: #fd4;
}
input:checked ~ label{
  color: #fd4;
}
.container form{
  display: none;
}
input:checked ~ form{
  display: block;
}
form header{
  width: 100%;
  font-size: 25px;
  color: #fe7;
  font-weight: 500;
  margin: 5px 0 20px 0;
  text-align: center;
  transition: all 0.2s ease;
}
form .textarea{
  height: 100px;
  width: 100%;
  overflow: hidden;
}
form .textarea textarea{
  height: 100%;
  width: 100%;
  outline: none;
  color: #eee;
  border: 1px solid #333;
  background: #222;
  padding: 10px;
  font-size: 17px;
  resize: none;
}
.textarea textarea:focus{
  border-color: #444;
}
form .btn{
  height: 60px;
  width: 100%;
  margin: 15px 0;
}
form .btn button{
  height: 100%;
  width: 100%;
  border: 1px solid #444;
  outline: none;
  background: #222;
  color: #999;
  font-size: 17px;
  font-weight: 500;
  text-transform: uppercase;
  cursor: pointer;
  transition: all 0.3s ease;
}
form .btn button:hover{
  background: #1b1b1b;
}
</style>
<br><br>
  <section>
  <div class="category" style=" text-align: center;"> 
      <h3 style="font-size: 22px;">Hotel : <?php echo $data['h_name'];?> </h3>
  </div>

    <div class="row">
        <div class="col-md-2">
          <a class="btn btn-success" href="index.php?categories_id=<?php echo $data['h_id'];?>" style="font-size: 16px;">Back</a><br><br> 

        </div>
        <div class="col-md-10">
           <img src="../../../admin/<?php echo $data['image']; ?>" width="940" height="400">
        </div> 
    </div>
    <br>
    <div class="row">

          <div class="col-md-7">
              <p style="text-align:justify; font-size: 18px;"><?php echo $data['discreption'];?> </p>
              <br><br>
              <h3>Location:</h3>
              <img style="margin-left: 45px;" src="../../../images/location.png" width="20">&nbsp;&nbsp;<strong><?php echo $data['h_loaction']?></strong>
              <br><br>
              <div>
                  <h3>Most popular facilities</h3>
                  <p><img src="logo/Airport shuttle.jpeg" width="40" height="50">&nbsp;&nbsp;&nbsp; <?php echo $data['facilitie1']; ?></p>
                  <p><img src="logo/wifi.jpeg" width="40" height="50">&nbsp;&nbsp;&nbsp;<?php echo $data['facilitie2']; ?></p>
                  <p><img src="logo/Fitness centre.jpeg" width="40" height="50">&nbsp;&nbsp;&nbsp;<?php echo $data['facilitie3']; ?></p>
                  <p><img src="logo/Non-smoking rooms.png" width="40" height="50">&nbsp;&nbsp;&nbsp;<?php echo $data['facilitie4']; ?></p>
                  <p><img src="logo/Room service.png" width="40" height="50">&nbsp;&nbsp;&nbsp;<?php echo $data['facilitie5']; ?></p>
                  <p><img src="logo/Tea_Coffee.jpeg" width="40" height="50">&nbsp;&nbsp;&nbsp;<?php echo $data['facilitie6']; ?></p>
                  <p><img src="logo/breakfast.jpg" width="40" height="50">&nbsp;&nbsp;&nbsp;<?php echo $data['facilitie7']; ?></p>
              </div>
              
          </div>
          <div class="col-md-4"style="margin-left: 110px; font-size: 18px;">
              <h4><img src="../../images2/time.png" width="40" alt=""><b> Google Map in <?php echo $dist;?> </b></h4>
              <?php
              if($dist == 'Dhaka'){ ?>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233667.8223908687!2d90.27923710646988!3d23.78088745708454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2z4Kai4Ka-4KaV4Ka-!5e0!3m2!1sbn!2sbd!4v1659204753712!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              <?php
              }
              ?>
              <?php
              if($dist == 'Shylet'){ ?>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57903.12952433289!2d91.82596217862815!3d24.899837316974704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375054d3d270329f%3A0xf58ef93431f67382!2z4Ka44Ka_4Kay4KeH4Kaf!5e0!3m2!1sbn!2sbd!4v1659205282224!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              <?php
              }
              ?>
              <?php
              if($dist == 'Brashal'){ ?>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117788.14661070508!2d90.28376320475977!3d22.695526237889965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37553407fbece487%3A0x5d069b9599d4414a!2z4Kas4Kaw4Ka_4Ka24Ka-4Kay!5e0!3m2!1sbn!2sbd!4v1659205374342!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              <?php
              }
              ?>
              <?php
              if($dist == 'Khulna'){ ?>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235318.05018354137!2d89.392411936824!3d22.845240624445257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff9071cb47152f%3A0xf04b212290718952!2z4KaW4KeB4Kay4Kao4Ka-!5e0!3m2!1sbn!2sbd!4v1659554162185!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              <?php
              }
              ?>
              <div class="row">
                  <form method="post">
                    <?php if(isset($data111)){ ?>
                    <br>
                      <div>
                          <h3 style="text-align: center;"><b>Hotel Rating</b></h3>
                      </div>
                   
                      <div class="rateyo" id= "rating" name="u_rating" style="margin-left: 150px;"
                           data-rateyo-rating="<?php echo $data111['stars'];  ?>">
                           
                      </div>
                   
                      <span class='result' style="margin-left: 200px;"><?php echo $data111['stars']  ?></span>
                      <input type="hidden" name="u_rating" value="<?php echo $data111['stars'];?>">
                      <!-- <input type="hidden" name="r_id" value="<?php echo $data11['id'];?>"> -->
                      </div>
                      <div>
                           <label>Comment</label>
                          <input type="text" name="u_comment" value="<?php echo $data111['comments'];?>">
                      </div>
                   
                      <div><input type="submit" name="add" style="margin-left: 170px;"> </div>
                    <?php } else{ ?>
                      <br>
                      <div>
                          <h3 style="text-align: center;"><b>Hotel Rating</b></h3>
                      </div>
                   
                      <div class="rateyo" id= "rating" name="rat" style="margin-left: 150px;"
                           data-rateyo-rating="4"
                           data-rateyo-num-stars="5"
                           data-rateyo-score="3">
                      </div>
                   
                      <span class='result' style="margin-left: 200px;">0</span>
                      <input type="hidden" name="rating" >
                   
                      </div>
                      <div>
                           <label>Comment</label>
                          <input type="text" name="comment">
                      </div>
                   
                      <div><input type="submit" name="add" style="margin-left: 170px;"> </div>
                    <?php } ?>
                   
                  </form>
              </div>
          </div>
    </div>
    <div class="container-fluid mt-5  pt-2" style="margin-left: 2%; margin-right: 5%;">
            <br>
            <table class="table">
              <thead>
                <tr style="background-color: hotpink;">
                  <th>Sleeps</th>
                  <th>Room Types</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  while($row = mysqli_fetch_assoc($result1)){
                  //Here start while loop  
                ?> 
                <tr>
                  <td > 
                    <?php if($row['type'] == "single"){?><img src="logo/one.png" width="50" height="50"><?php } ?>
                    <?php if($row['type'] == "twin"){?><img src="logo/two.png" width="50" height="50"><?php } ?>
                    <?php if($row['type'] == "apartment"){?><img src="logo/three.png" width="50" height="50"><?php } ?>

                  </td> 

                  <td>
                    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><?php echo $row['type'];?></button>
                    <!-- <button id="id01" class="MetroBtn" onClick="myFunc(this.id);"><?php echo $row['type'];?></button> -->
                  </td>

                  <td>
                    <a href="booking/index.php?id=<?php echo $h_id;?>&r_id=<?php echo $row['r_id']; ?>" class="btn btn-danger">Booking Info.</a> 
                  </td>  
                </tr>
                <?php
                  // Here End while loop
                }
                ?>
              </tbody>
            </table>
      
        </div>
  
</section>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
   
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <!-- <img src="logo/one.png" alt="Avatar" class="avatar" style="width: 10%;"> -->
    </div>
    <section>
      <div class="row">
        <div class="col-md-8">
          <!-- <h3>Manik Molla</h3> -->

          <div class="container">
            <?php
                while($d = mysqli_fetch_assoc($res)){
                //Here start while loop  
                  // echo $d['r_id'];
                  // echo $check;
                  // if($check == $d['r_id']){


            ?> 

            <div class="mySlides">
              <div class="numbertext">1 / 6</div>
              <img src="../../../admin/hotels/upload/<?php echo $d['image_name']; ?>" style="width:100%">
            </div>
            <?php
            // }
              }
            ?>
              <a class="prev" onclick="plusSlides(-1)">❮</a>
              <a class="next" onclick="plusSlides(1)">❯</a>

              <div class="caption-container">
                <p id="caption"></p>
              </div>

              <div class="row">
              <?php
                  while($d1 = mysqli_fetch_assoc($res1)){
                  //Here start while loop  
              ?> 
                <div class="column">
                  <img class="demo cursor" src="../../../admin/hotels/upload/<?php echo $d1['image_name']; ?>" style="width:40%" onclick="currentSlide(1)" alt="Room Imases">
                </div>
              <?php
                }
              ?>

                  </div>
                </div>

                <script>
                let slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                  showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                  showSlides(slideIndex = n);
                }

                function showSlides(n) {
                  let i;
                  let slides = document.getElementsByClassName("mySlides");
                  let dots = document.getElementsByClassName("demo");
                  let captionText = document.getElementById("caption");
                  if (n > slides.length) {slideIndex = 1}
                  if (n < 1) {slideIndex = slides.length}
                  for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                  }
                  for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";
                  dots[slideIndex-1].className += " active";
                  captionText.innerHTML = dots[slideIndex-1].alt;
                }
                </script>
                <br><br>
                <div class="row">
                  <h3 style="left: 10px;">In your private bathroom:</h3>
                  <div class="col-md-6">
                    <!-- <h3>In your private bathroom:</h3> -->
                    <p><img src="logo/right.jpg" width="50" height="50"> <?php echo $value['b1']; ?></p>
                    <p><img src="logo/right.jpg" width="50" height="50"> <?php echo $value['b2']; ?></p>
                    <p><img src="logo/right.jpg" width="50" height="50"> <?php echo $value['b3']; ?></p>
                    <p><img src="logo/right.jpg" width="50" height="50"> <?php echo $value['b4']; ?></p>
                  </div>
                  <div class="col-md-6">
                    <br><br>
                    <p><img src="logo/right.jpg" width="50" height="50"> <?php echo $value['b5']; ?></p>
                    <p><img src="logo/right.jpg" width="50" height="50"> <?php echo $value['b6']; ?></p>
                    <p><img src="logo/right.jpg" width="50" height="50"> <?php echo $value['b7']; ?></p>
                  </div>

                </div>
        </div>
        <div class="col-md-4">
          <div>
            <h1><?php echo $value['h_name']; ?></h1><br><br>
            <h3>Room Type:<?php echo $value['type']; ?> </h3><br><br>
            <h3>Room Price:<?php echo $value['price']; ?> </h3><br>
            <p><?php echo $value['discreption']; ?></p><br>
          </div>
          <div class="row">
            <h3 style="right: 10px;"> Room facilities:</h3>
            <div class="col-md-6">
              
              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r1']; ?></p>
              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r2']; ?></p>
              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r3']; ?></p>
              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r4']; ?></p>
              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r5']; ?></p>
              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r6']; ?></p>
              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r7']; ?></p>
              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r8']; ?></p>

              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r9']; ?></p>
              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r10']; ?></p>
              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r11']; ?></p>
              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r12']; ?></p>
              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r13']; ?></p>
            </div>
            <div class="col-md-6">
              <br><br>
              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r14']; ?></p>
              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r15']; ?></p>
              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r16']; ?></p>
              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r17']; ?></p><p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r1']; ?></p>
              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r18']; ?></p>
              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r19']; ?></p>
              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r20']; ?></p>
              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r21']; ?></p>
              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r22']; ?></p>
              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r23']; ?></p>
              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r24']; ?></p>
              <p><img src="logo/right1.jpeg" width="30" height="30"> <?php echo $value['r25']; ?></p>
            </div>
          </div>
        </div>
        
      </div>
    </section>
  </form>
</div>

<script>
// Get the modal
</script>
</script>
    <script src="https://use.fontawesome.com/021eb02a1a.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<script>
 
 
    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });
</script>

  </body>
</html>
<?php

 // $conn = mysqli_connect('localhost','root','','ratingsystem');

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(isset($_POST["u_comment"])){
    $u_comment = $_POST["u_comment"];
    //$comment = $data111['comments'];
    // echo $h_id;
    // echo $u_comment;
    // echo $h_name;
    // die();
    
   $updatesql = "UPDATE ratingsystem_hotel  SET comments = '$u_comment' ";
   $updatesql .= "where h_id = $h_id AND u_id = $user_id ";
   mysqli_query($conn, $updatesql);
  }
  else{


    $comment = $_POST["comment"];
    $rating = $_POST["rating"];
    $name = $data1['name'];
    $email = $data1['email'];
    $address = $data1['addres'];
    // echo $address;
    // echo $name;
    // echo $rating;
    // die();


 
    $sql = "INSERT INTO ratingsystem_hotel (u_id,u_name, u_email, u_address, h_id,stars,comments) VALUES ('$user_id','$name','$email','$address', '$h_id', '$rating','$comment')";
    if (mysqli_query($conn, $sql))
    {
        echo "Your are successfully ratting";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
}
?>