<?php 
include('include/header.php'); 
include('include/nab.php');

include '../include/config.php';

$sql = "SELECT * FROM hotels";
$result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);
// die();
$sql1 = "SELECT * FROM hotels";
$result1 = mysqli_query($conn, $sql1);
  
?> 
<form action="store_room.php" enctype="multipart/form-data" method="post">
	<div class="row" style="margin-left: 1%;">
        <div class="col-md-6 form-group">
            <label for="name">Hotel Name</label>
            <select name="h_name" class="form-control">
              <option> Select Hotel Name: </option>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <option value="<?= $row['h_name'] ?>"> <?= $row['h_name'] ?> </option>
              <?php } ?>
            </select>

         </div>
		<div class="col-md-6 form-group">
            <label for="room">Room Types</label>
            <select name="room_categories" class="form-control">
              <option> Select Rooms </option>
                <option value="single">Standard Single Room </option>
                <option value="twin">Deluxe Twin Room </option>
                <option value="apartment">Studio Apartment</option>
            </select>

         </div>
         
	</div>
	<br>
    <div class="row" style="margin-left: 1%;">
        <div class="col-md-6 form-group">
            <label for="location">Location</label>
            <select name="h_loaction" class="form-control">
              <option> Select Location: </option>
                <?php while ($row1 = mysqli_fetch_assoc($result1)) { ?>
                <option value="<?= $row1['h_loaction'] ?>"> <?= $row1['h_loaction'] ?> </option>
              <?php } ?>
            </select>
         </div>
        <div class="col-md-6 form-group">
                <label for="image">Room Images</label>
                <!-- <input type="file" class="form-control" name="image"> -->
                <!-- <input class="form-control" type="file" id="formFileMultiple" name="image[]" multiple /> -->
                <input type="file" name="image[]" class="form-control" multiple />


        </div><br>
    </div><br> 
    <div class="row" style="margin-left: 1%;">
        <div class="col-md-6 form-group">
                <label for="location">Bed Numbers</label>
            <input type="text" class="form-control" name="bed" style="background-color: white;" placeholder="Total Bed number">
         </div>
        <div class="col-md-6 form-group">
                <label for="location">Bed Prices</label>
            <input type="text" class="form-control" name="prices" style="background-color: white;" placeholder="Bed Prices in Dollower">
         </div>

    </div><br> 
    <div class="form-group" style="margin-left: 2%;">
        <label for="room">Description</label>
        <textarea class="form-control" name="room" rows="5" style="background-color: white;"></textarea>
    </div><br> 
    <div class="row" style="margin-left: 2%;">
        <div class="col-md-6 form-group">
        	<label for="bathroom">In the bathroom:</label><br>
        	<input type="checkbox" name="toiletries" value="Toiletries">
      		<label for="vehicle1"> Free toiletries</label><br> 	
      		<input type="checkbox" name="shower" value="Shower">
      		<label for="vehicle1"> Shower</label><br> 
      		<input type="checkbox" name="toilet" value="Toilet">
      		<label for="vehicle1"> Toilet</label><br> 
      		<input type="checkbox" name="towels" value="Towels">
      		<label for="vehicle1"> Towels</label><br> 
      		<input type="checkbox" name="slippers" value="Slippers">
      		<label for="vehicle1"> Slippers</label><br> 
      		<input type="checkbox" name="hairdryer" value="Hairdryer">
      		<label for="vehicle1"> Hairdryer</label><br> 
      		<input type="checkbox" name="paper" value="Toilet paper">
      		<label for="vehicle1"> Toilet paper</label><br> 
        </div>
        <div class="col-md-3 form-group">
            <label for="facilities" style="margin-left: 15%;">Room facilities:</label><br>
            <input type="checkbox" name="dressing" value="Dressing">
            <label for="vehicle1"> Dressing room</label><br>  
            <input type="checkbox" name="wardrobe" value="Wardrobe">
            <label for="vehicle1"> Wardrobe or closet</label><br> 
            <input type="checkbox" name="sanitiser" value="Sanitiser">
            <label for="vehicle1"> Hand sanitiser</label><br> 
            <input type="checkbox" name="tea" value="Tea">
            <label for="vehicle1"> Tea/Coffee maker</label><br> 
            <input type="checkbox" name="minibar" value="Minibar">
            <label for="vehicle1"> Minibar</label><br> 
            <input type="checkbox" name="air" value="Air">
            <label for="vehicle1"> Air conditioning</label><br> 
            <input type="checkbox" name="safety" value="Safety">
            <label for="vehicle1"> Safety deposit box</label><br> 
            <input type="checkbox" name="hypoallergenic" value="Hypoallergenic">
            <label for="vehicle1"> Hypoallergenic</label><br> 
            <input type="checkbox" name="marble" value="Marble">
            <label for="vehicle1"> Tile/marble floor</label><br> 
            <input type="checkbox" name="soundproofing" value="Soundproofing">
            <label for="vehicle1"> Soundproofing</label><br> 
            <input type="checkbox" name="fan" value="Fan">
            <label for="vehicle1"> Fan</label><br> 
            <input type="checkbox" name="carpeted" value="Carpeted">
            <label for="vehicle1"> Carpeted</label><br> 
            <input type="checkbox" name="kettle" value="Kettle">
            <label for="vehicle1"> Electric kettle</label><br> 
        </div>
        <div class="col-md-3 form-group">
            <input type="checkbox" name="cleaning" value="Cleaning shuttle">
            <label for="vehicle1"> Cleaning products</label><br>  
            <input type="checkbox" name="sofa" value="Sofa">
            <label for="vehicle1"> Sofa</label><br> 
            <input type="checkbox" name="desk" value="Desk">
            <label for="vehicle1"> Desk</label><br> 
            <input type="checkbox" name="area" value="Area">
            <label for="vehicle1"> Seating Area</label><br> 
            <input type="checkbox" name="tv" value="TV">
            <label for="vehicle1"> TV</label><br> 
            <input type="checkbox" name="telephone" value="Telephone">
            <label for="vehicle1"> Telephone</label><br> 
            <input type="checkbox" name="flat-screen" value="Flat-screen">
            <label for="vehicle1"> Flat-screen TV</label><br> 
            <input type="checkbox" name="cable" value="Cable">
            <label for="vehicle1"> Cable channels</label><br> 
            <input type="checkbox" name="terrace" value="Terrace">
            <label for="vehicle1"> Terrace</label><br> 
            <input type="checkbox" name="socket" value="Socket">
            <label for="vehicle1"> Socket near the bed</label><br> 
            <input type="checkbox" name="clothes" value="Clothes">
            <label for="vehicle1"> Clothes rack</label><br> 
            <input type="checkbox" name="wake-up" value="Wake-up">
            <label for="vehicle1"> Wake-up service</label><br> 
        </div>
    </div>

    <button type="submit" class="btn btn-primary" style="margin-left: 2%;" >Submit</button>

</form> 
<?php
include('include/footer.php');
?>