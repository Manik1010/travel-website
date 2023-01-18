<?php 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>AddEvent-page</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <style>
    .row{
    	height: 100%;
    }
     /*   Nab _ bar style  -----> */
      .nav-link{
        color: white;
        font-size: 16px;
        display: block;
      }
        .nav-link:hover{
          background-color: #19b7e3;
          color: black;
        }
        .menu{
          margin-left: 0px;
          padding-bottom: 30px;
        }

        /* End */
		
</style>
  </head>  
  <body>
  <div class="container">
  <div class="col-sm-12 content">
      <!-- <a class="btn btn-success" href="index.php">Back </a> -->
      <form action="store.php" enctype="multipart/form-data" method="post">
        <div class="row">    
          <div class="col-md-12 form-group">
            <label for="title">Event Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title">
          </div>
        </div>
          <br>
         <div class="row">
              <div class="col-md-6 form-group">
                <label for="restricted">Location:</label>
                <input type="text" class="form-control" name="location" placeholder="Location">
              </div><br>
              <div class="col-md-6 form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image">
              </div>
          </div><br>  
          <div class="form-group">
            <label for="event">Event Descripations</label>
            <textarea class="form-control" name="event" rows="5"></textarea>
          </div><br>
          <div class="form-group">
            <label for="itinerary">Event Itinerary</label>
            <textarea class="form-control" name="day0" rows="1" placeholder="Day 0"></textarea>
            <textarea class="form-control" name="day1" rows="1" placeholder="Day 01"></textarea>
            <textarea class="form-control" name="day2" rows="1" placeholder="Day 02"></textarea>
            <textarea class="form-control" name="day00" rows="1" placeholder="Day 00"></textarea>

          </div><br>
          <div class="form-group">
            <label for="info">Event Price.</label>
            <textarea class="form-control" name="ac" rows="1" placeholder="Ac Bus"></textarea>
            <textarea class="form-control" name="nonac" rows="1" placeholder="Non Ac Bus"></textarea>
            <textarea class="form-control" name="air" rows="1" placeholder="Air"></textarea>
          </div><br>
         
          <div class="form-group">
            <label for="date">Date:</label>
            <input type="date"  name="date" >
            <button type="submit" name="submit" class="btn btn-primary" style="margin-left: 7%;">Submit</button>
          </div><br>

          <!-- <button type="submit" name="submit" class="btn btn-primary">Submit</button> -->
  </form>

  </div>
</div>
  
 <!-- JavaScript Bundle with Popper -->
<?php
include('includes/scripts.php');
?>
</body>
</html>