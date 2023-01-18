<?php
include('../includes/header.php');

if(!isset($_SESSION['manager_name'])){
	echo"<script> location.href = '../Adminpages/loginadmin.php';</script>";
}
$categorySql = "SELECT * from shop_categories";
$categoryResult = mysqli_query($conn,$categorySql);

if(isset($_POST['submit'])){
	$category_title = $_POST['category_title'];
	$subcategory_title = $_POST['subcategory_title'];
	
     
    $sql = "INSERT INTO shop_subcategories(category_id, title) VALUES ('$category_title','$subcategory_title');";
    $result = mysqli_query($conn, $sql);

    
    echo"<script> location.href = 'viewsubcategory.php';</script>";
}
?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
               <h1>Add Sub-Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo indexUrl;?>">Home</a></li><b>/Add Sub-Category</b>
              <a href="<?php echo logoutUrl;?>" class="btn btn-danger" style="margin-left: 10px;">LogOut</a>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
 <div class="card card-primary m-3">
              <div class="card-header">
                <h3 class="card-title">Sub-Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Category Title</label>
                     <select name = "category_title" class="p-2 form-control" >
                        <?php while($row = mysqli_fetch_assoc($categoryResult)){?>
					        <option value="<?php echo $row['id'];?>"><?php echo $row['title'];?></option>
					    <?php } ?>
					
					</select>
                  </div>
                  <div class="form-group">
                    <label for="subcategory_title">Sub-Category Title</label>
                    <input type="text" class="form-control" name="subcategory_title" placeholder="Enter your sub-title">
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