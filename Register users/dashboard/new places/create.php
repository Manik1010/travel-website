<?php 
 $url = 'http://localhost/travel%20website/Register%20users/';
 include '../../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

$sql = "select * from new_place_categories";
$result = mysqli_query($conn,$sql);
include '../include/all_header.php';
?>
<!-- <?php if(isset($_GET['back'])){?>
    <a href="<?php echo $url;?>new places/index.php" class="btn btn-outline-dark">Back</a>
<?php } else{?>
<a href="index.php" class="btn btn-outline-dark">Back</a>
<?php } ?> -->
<a href="index.php" class="btn btn-outline-dark">Back</a>
           <form  action="store.php" enctype="multipart/form-data" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="brands">Districts</label>
                  <select name="category_id" class="form-control">
                    <option> Select Categories </option>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                      <option value="<?= $row['id'] ?>"> <?= $row['name'] ?> </option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" name="title" placeholder="Title">
                </div>
              </div>
                <br>
               <div class="row">
                    <div class="col-md-6 ">
                      <label for="image">Image</label>
                      <input type="file" class="form-control" name="image">
                    </div><br>
                    <div class=" col-md-5 ">
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

<?php
include '../include/footer.php';
 ?>