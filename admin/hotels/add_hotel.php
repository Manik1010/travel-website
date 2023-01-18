<?php  
include('include/header.php'); 
include('include/nab.php');

include '../include/config.php';

$sql = "SELECT * FROM hotel_categories";
$result = mysqli_query($conn, $sql);

 

?>
<form action="store_hotel.php" enctype="multipart/form-data" method="post">
	<div class="row" style="margin-left: 1%;">
		<div class="col-md-6 form-group">
            <label for="brands">Categories</label>
            <select name="dist_name" class="form-control">
              <option> Select Categories </option>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <option value="<?= $row['categories_id'] ?>"> <?= $row['dist_name'] ?> </option>
              <?php } ?>
            </select>
         </div>
         <div class="col-md-6 form-group">
            <label for="title">Hotel Name</label>
            <input type="text" class="form-control" name="name" style="background-color: white;" placeholder="Hotel Name">
         </div>
	</div>
	<br>
    <div class="row" style="margin-left: 1%;">
        <div class="col-md-6 form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image"> 
        </div><br>

        <div class="col-md-6 form-group">
                <label for="location">Location</label>
            <input type="text" class="form-control" name="location" style="background-color: white;" placeholder="Hotel Location">
         </div>
    </div><br> 
    <div class="form-group" style="margin-left: 1%;">
        <label for="article">Description</label>
        <textarea class="form-control" name="hotel" rows="5" style="background-color: white;"></textarea>
    </div><br> 
    <div style="margin-left: 2%;">
    	<label for="facilities">Most popular facilities</label><br>
    	<input type="checkbox" name="airport" value="Airport shuttle">
  		<label for="vehicle1"> Airport shuttle</label><br> 	
  		<input type="checkbox" name="wif" value="Free WiF">
  		<label for="vehicle1"> Free WiF</label><br> 
  		<input type="checkbox" name="fitness" value="Fitness centre">
  		<label for="vehicle1"> Fitness centre</label><br> 
  		<input type="checkbox" name="non_smoking" value="Non-smoking rooms">
  		<label for="vehicle1"> Non-smoking rooms</label><br> 
  		<input type="checkbox" name="room" value="Room service">
  		<label for="vehicle1"> Room service</label><br> 
  		<input type="checkbox" name="tea" value="Tea/Coffee">
  		<label for="vehicle1"> Tea/coffee maker in all rooms</label><br> 
  		<input type="checkbox" name="breakfast" value="Breakfast">
  		<label for="vehicle1"> Breakfast</label><br> 
    </div>

    <button type="submit" class="btn btn-primary" style="margin-left: 1%;" >Submit</button>

</form>
<?php
include('include/footer.php');
?>