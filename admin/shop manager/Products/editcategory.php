<?php
include('../includes/header.php');

if(!isset($_SESSION['manager_name'])){
	echo"<script> location.href = '../Adminpages/loginadmin.php';</script>";
}
$id = $_GET['id'];

$viewSql = "SELECT * from shop_categories where id = '$id'";
$viewResult = mysqli_query($conn,$viewSql);
$data = mysqli_fetch_assoc($viewResult);

if(isset($_POST['submit'])){
	$title = $_POST['title'];

     
   $updatesql = "UPDATE shop_categories  SET title = '$title'
                 where id = $id";

    mysqli_query($conn, $updatesql);


    echo"<script> location.href = 'viewcategory.php';</script>";
}
?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
 <div class="card card-primary m-2">
              <div class="card-header">
                <h3 class="card-title">Edit Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="title">Category Title</label>
                    <input type="text" class="form-control" name="title" value="<?php echo $data['title'];?>">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit"class="btn btn-primary">Submit</button>
                </div>
              </form>
           </div>
           <!-- /.card -->
<?php 
 include('../includes/footer.php');
?>