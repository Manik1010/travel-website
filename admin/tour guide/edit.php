<title>Edit Tour-Guide</title>
<?php 
include '../include/config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:../login system/login_form.php');
}
$id = $_GET['id'];

$sql2 = "SELECT *
    FROM tour_guide
    WHERE id = '$id' ";

$result2 = mysqli_query($conn, $sql2);
$data = mysqli_fetch_assoc($result2);
include'../include/all_header.php';
?>

<main class="mt-5 pt-3">
      <div class="container-fluid mt-5  pt-2">
        
           <a href="index.php" class="btn btn-outline-dark">Back</a>
           <form  action="update.php?id=<?php echo $data['id'];?>" enctype="multipart/form-data" method="post">
              <div class="row">
                
                <div class="col-md-12 form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" name="title" value="<?php echo $data['title'];?>" >
                </div>
              </div>
                <br>
               <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="image">Image</label>
                      <input type="file" class="form-control" name="image">
                      <img src="../<?php echo $data['image'];?>" alt="">
                    </div><br>
                    <div class=" col-md-12  form-group">
                      <label for="date">Date:</label>
                      <input type="date" class="form-control" value="<?php echo $data['date'];?>" name="date">
                    </div><br>
                    
               </div><br>  
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control" name="description" rows="10"><?php echo $data['description'];?></textarea>
                </div><br>

               
                
               
               
                

                <button type="submit" class="btn btn-outline-primary mb-5">Submit</button>
        </form>
      </div>
</main>
<?php 
include'../include/footer.php';
 ?>
