<title>Edit package</title>
<?php 
include '../include/config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:../login system/login_form.php');
}
$id = $_GET['id'];

$sql = "SELECT *
    FROM packages
    WHERE id = '$id' ";

$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
include'../include/all_header.php';
?>
<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
<main class="mt-5 pt-3">
      <div class="container-fluid mt-5  pt-2">
        
           <a href="index.php" class="btn btn-outline-dark">Back</a> 
           <form  action="update.php?id=<?php echo $id;?>" enctype="multipart/form-data" method="post">
           	      <div class="row">
		                <div class="col-md-6 form-group">
		                  <label for="title">Title</label>
		                  <input type="text" class="form-control" name="title" value="<?php echo $data['title'];?>">
		                </div>
		                <div class="col-md-6 form-group">
		                  <label for="location">Location</label>
		                  <input type="text" class="form-control" name="location" value="<?php echo $data['location'];?>">
		                </div>
	              </div>
	              <div class="row mt-2">
		                <div class="col-md-6 form-group">
		                  <label for="Duration">Duration</label>
		                  <input type="text" class="form-control" name="duration" value="<?php echo $data['duration'];?>">
		                </div>
		                <div class="col-md-6 form-group ">
		                  <label for="tourType">Tour Type</label>
		                  <input type="text" class="form-control" name="tourType" value="<?php echo $data['tour_type'];?>">
		                </div>
	              </div>
	              <div class="row mt-2">
		                <div class="col-md-6 form-group">
		                  <label for="maxGrpSize">Max Group Size</label>
		                  <input type="number" class="form-control" name="maxGrpSize" value="<?php echo $data['max_size'];?>">
		                </div>
		                <div class="col-md-6 form-group ">
		                  <label for="General info">General Information</label>
		                  <input type="text" class="form-control" name="general_info" value="<?php echo $data['general_info'];?>">
		                </div>
	              </div>
	              <div class="row mt-4 mb-2">
	                  <h2 style="text-align: center;">Slide images</h2>
	              	  <div class="col">
	              	  	  <label for="image1">Image1</label>
	                      <input type="file" class="form-control" name="image1">
	                      <img src="../<?php echo $data['image1']; ?>"width="100">
	              	  </div>
	              	  <div class="col">
	              	  	  <label for="image2">Image2</label>
	                      <input type="file" class="form-control" name="image2">
	                      <img src="../<?php echo $data['image2']; ?>"width="100">
	              	  </div>
	              	  <div class="col">
	              	  	  <label for="image3">Image3</label>
	                      <input type="file" class="form-control" name="image3">
	                      <img src="../<?php echo $data['image3']; ?>"width="100">
	              	  </div>
	              	  
	              </div>
	              <div class="row mt-5">
	              	    <h2 style="text-align: center;">Food Menu</h2>
		                <div class="col-md-12 form-group">
		                  <label for="Breakfast">Breakfast</label>
		                  <textarea class="form-control" name="breakfast" rows="3"><?php echo $data['breakfast']; ?></textarea>
		                </div>
		                <div class="col-md-12 form-group">
		                  <label for="Snacks">Snacks</label>
		                  <input type="text"  class="form-control" name="snacks" value="<?php echo $data['snacks'];?>">
		                </div>
		                
	              </div>
	              <div class="row mt-2">
		                <div class="col-md-12 form-group ">
		                  <label for="Lunch">Lunch</label>
		                  <input type="text" class="form-control" name="lunch" value="<?php echo $data['lunch'];?>" >
		                </div>
		                <div class="col-md-12 form-group ">
		                  <label for="Dinner">Dinner</label>
		                  <input type="text" class="form-control" name="dinner" value="<?php echo $data['dinner'];?>">
		                </div>
	              </div>
	              <div class="row mt-4">
	              	    <h2 style="text-align: center;">Included/Exclude</h2>
		                <div class="col-md-6 form-group">
		                  <label for="included">INCLUDED</label>
		                  <textarea class="form-control" name="included" rows="5"><?php echo $data['included'];?></textarea>
		                </div>
		                <div class="col-md-6 form-group">
		                  <label for="Exclude">Exclude</label>
		                  <textarea class="form-control" name="exclude" rows="5"><?php echo $data['exclude'];?></textarea>
		                </div>
		          </div>
	              <div class="row mt-4">
	              	   <h4 style="text-align: center;">GROUP FARE (PER PERSON)</h4><hr>
	              	   <div class="col-md-4 form-group ">
		                  <label for="title2">Title</label>
		                  <input type="text" class="form-control" name="title2" value="<?php echo $data['title2'];?>">
		                </div>
		                <div class="col-md-2 form-group ">
		                  <label for="Dinner">Persons</label>
		                  <input type="number" class="form-control" name="persons"value="<?php echo $data['persons'];?>" >
		                </div>
		                <div class="col-md-3 form-group ">
		                  <label for="Weekend">Weekend(per persons Tk)</label>
		                  <input type="number" class="form-control" name="weekendCost" value="<?php echo $data['weekend_cost'];?>">
		                </div>
		                <div class="col-md-3 form-group ">
		                  <label for="Weekdays">Weekdays(per persons Tk)</label>
		                  <input type="number" class="form-control" name="weekdaysCost" value="<?php echo $data['weekdays_cost'];?>">
		                </div>
	              </div>
	              <div class="mb-3">
					  <label for="itinerary" class="form-label">ITINERARY</label>
					  <textarea class="form-control" id="editor" name="itinerary" rows="10"><?php echo $data['itinerary'];?></textarea>
			      </div>
	              <button type="submit" class="btn btn-outline-primary p-2 mb-5 mt-5 w-25">Submit</button>
           </form>
      </div>
</main>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<?php 
include'../include/footer.php';
 ?>