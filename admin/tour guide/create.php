<?php 
include '../include/config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:../login system/login_form.php');
}
$sql = "select * from new_place_categories";
$result = mysqli_query($conn,$sql);
include'../include/all_header.php';?>
<main class="mt-5 pt-3">
      <div class="container-fluid mt-5  pt-2">
        
           <a href="index.php" class="btn btn-outline-dark">Back</a>
           <form  action="store.php" enctype="multipart/form-data" method="post">
              <div class="row">
                
                <div class="col-md-12 form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" name="title" placeholder="Title">
                </div>
              </div>
                <br>
               <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="image">Image</label>
                      <input type="file" class="form-control" name="image">
                    </div><br>
                    <div class=" col-md-12  form-group">
                      <label for="date">Date:</label>
                      <input type="date" class="form-control" name="date">
                    </div><br>
                    
               </div><br>  
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control" name="description" rows="10"></textarea>
                </div><br>

               
                
               
               
                

                <button type="submit" class="btn btn-outline-primary mb-5">Submit</button>
        </form>
      </div>
</main>
<?php 
include'../include/footer.php';
 ?>
