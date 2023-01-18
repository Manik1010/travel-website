<title>Create-package</title>
<?php 
include '../include/config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:../login system/login_form.php');
}

include'../include/all_header.php';?>
<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
<main class="mt-5 pt-3">
      <div class="container-fluid mt-5  pt-2">
        
           <a href="index.php" class="btn btn-outline-dark">Back</a><br><br>
           <h2>Create a Package</h2><hr>
            <form  action="store.php" enctype="multipart/form-data" method="post">
              <div class="row">
	                <div class="col-md-6 form-group">
	                  <label for="title">Title</label>
	                  <input type="text" class="form-control" name="title" placeholder="Title">
	                </div>
	                <div class="col-md-6 form-group">
	                  <label for="location">Location</label>
	                  <input type="text" class="form-control" name="location" placeholder="location">
	                </div>
              </div>
              <div class="row mt-2">
	                <div class="col-md-6 form-group">
	                  <label for="Duration">Duration</label>
	                  <input type="text" class="form-control" name="duration" placeholder="duration">
	                </div>
	                <div class="col-md-6 form-group ">
	                  <label for="tourType">Tour Type</label>
	                  <input type="text" class="form-control" name="tourType" placeholder="Tour Type">
	                </div>
              </div>
              <div class="row mt-2">
	                <div class="col-md-6 form-group">
	                  <label for="maxGrpSize">Max Group Size</label>
	                  <input type="number" class="form-control" name="maxGrpSize" placeholder="max group size">
	                </div>
	                <div class="col-md-6 form-group ">
	                  <label for="General info">General Information</label>
	                  <input type="text" class="form-control" name="general_info" >
	                </div>
              </div>
              <div class="row mt-4 mb-2">
                  <h2 style="text-align: center;">Slide images</h2>
              	  <div class="col">
              	  	  <label for="image1">Image</label>
                      <input type="file" class="form-control" name="image1">
              	  </div>
              	  <div class="col">
              	  	  <label for="image2">Image</label>
                      <input type="file" class="form-control" name="image2">
              	  </div>
              	  <div class="col">
              	  	  <label for="image3">Image</label>
                      <input type="file" class="form-control" name="image3">
              	  </div>
              	  
              </div>
              <div class="row mt-5">
              	    <h2 style="text-align: center;">Food Menu</h2>
	                <div class="col-md-12 form-group">
	                  <label for="Breakfast">Breakfast</label>
	                  <textarea class="form-control" name="breakfast" rows="3"></textarea>
	                </div>
	                <div class="col-md-12 form-group">
	                  <label for="Snacks">Snacks</label>
	                  <input type="text"  class="form-control" name="snacks">
	                </div>
	                
              </div>
              <div class="row mt-2">
	                <div class="col-md-12 form-group ">
	                  <label for="Lunch">Lunch</label>
	                  <input type="text" class="form-control" name="lunch" >
	                </div>
	                <div class="col-md-12 form-group ">
	                  <label for="Dinner">Dinner</label>
	                  <input type="text" class="form-control" name="dinner" >
	                </div>
              </div>
              <div class="row mt-4">
              	    <h2 style="text-align: center;">Included/Exclude</h2>
	                <div class="col-md-6 form-group">
	                  <label for="included">INCLUDED</label>
	                  <textarea class="form-control" name="included" rows="5"></textarea>
	                </div>
	                <div class="col-md-6 form-group">
	                  <label for="Exclude">Exclude</label>
	                  <textarea class="form-control" name="exclude" rows="5"></textarea>
	                </div>
	          </div>
              <div class="row mt-4">
              	   <h4 style="text-align: center;">GROUP FARE (PER PERSON)</h4><hr>
              	   <div class="col-md-4 form-group ">
	                  <label for="title2">Title</label>
	                  <input type="text" class="form-control" name="title2" >
	                </div>
	                <div class="col-md-2 form-group ">
	                  <label for="Dinner">Persons</label>
	                  <input type="number" class="form-control" name="persons" placeholder="num. of persons" >
	                </div>
	                <div class="col-md-3 form-group ">
	                  <label for="Weekend">Weekend(per persons Tk)</label>
	                  <input type="number" class="form-control" name="weekendCost" >
	                </div>
	                <div class="col-md-3 form-group ">
	                  <label for="Weekdays">Weekdays(per persons Tk)</label>
	                  <input type="number" class="form-control" name="weekdaysCost" >
	                </div>
              </div><br><br>
              <div class="mb-3">
				  <label for="itinerary" class="form-label">ITINERARY</label>
				  <textarea class="form-control" id="editor" name="itinerary" rows="10"></textarea>
			  </div>
              <button type="submit" class="btn btn-outline-primary mb-5 mt-5 w-100">Submit</button>
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
