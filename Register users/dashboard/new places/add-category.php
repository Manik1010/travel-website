<title>request-category</title>
<?php 
 $url = 'http://localhost/travel%20website/Register%20users/';
 include '../../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
$user_id = $_SESSION['user_id'];


include '../include/all_header.php';
?>
<div class="container-fluid  bg-light pt-2">
      	 <a href="all-requests.php" class="btn btn-outline-dark">Back</a>
          <h2>Add Category</h2>
           <form action="store-category.php" method="POST" >
           	    <div class="mb-3">
				  <label for="district_name" class="form-label">District Name</label>
				  <input type="text" class="form-control" name="district_name" placeholder="district name"> 
				</div>
				<div class="mb-3">
				  <label for="description" class="form-label">Description</label>
				  <textarea class="form-control" name="description" rows="6"></textarea>
				</div>
				 <button type="submit" class="btn btn-outline-primary">Submit</button>
           </form>
            
</div>
<?php
include '../include/footer.php';
 ?>