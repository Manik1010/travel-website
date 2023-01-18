<?php 
include '../include/config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:../login system/login_form.php');
}
include'../include/all_header.php';?>
<main class="mt-5 pt-3">
      <div class="container-fluid mt-5 bg-light pt-2">
      	 <a href="index.php" class="btn btn-outline-dark">Back</a>
          <h2>Add Category</h2>
           <form action="store.php" method="POST" >
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
</main>
<?php 
include'../include/footer.php';
 ?>
