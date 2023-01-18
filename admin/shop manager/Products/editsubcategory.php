<?php
include('../includes/header.php');

if(!isset($_SESSION['manager_name'])){
	echo"<script> location.href = '../Adminpages/loginadmin.php';</script>";
}
$categorySql = "SELECT * from shop_categories";
$categoryResult = mysqli_query($conn,$categorySql);
$id = $_GET['id'];
$editsql = "SELECT *
            FROM shop_subcategories
            where id = '$id'";
$editresult = mysqli_query($conn,$editsql);
$data = mysqli_fetch_assoc($editresult);

if(isset($_POST['submit'])){
	$category_id = $_POST['category_title'];
	$subcategory_title = $_POST['subcategory_title'];
	$description = $_POST['description'];
	


	$rand = rand(11111, 89999999999);


    $image ='uploadPicture/' . $rand .$_FILES['image']['name'];

    $upload = '../uploadPicture/' . $rand . $_FILES['image']['name'];
     
    $updatesql = "UPDATE shop_subcategories SET category_id='$category_id',title='$subcategory_title',description='$description'";

if (!empty($_FILES['image']['name']))
{
  $rand = rand(11111, 89999999999);


  $image ='uploads/subcategory-img/' . $rand .$_FILES['image']['name'];

  $upload = '../uploads/subcategory-img/' . $rand . $_FILES['image']['name'];

  move_uploaded_file($_FILES['image']['tmp_name'], $upload);
    
    $updatesql .= ",image = '$image'";
  if(!empty($data['image'])){
    unlink('../' . $data['image']);
  }
}

    $updatesql .= "where id = $id";
    mysqli_query($conn, $updatesql);


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
                        <?php while ($row = mysqli_fetch_assoc($categoryResult)) { ?>
                       <?php if($row['id'] == $data['category_id']) {?>
                           <option value="<?= $row['id'] ?>" selected> <?= $row['title'] ?> </option>
                       <?php } else{?>
                           <option value="<?= $row['id'] ?>"> <?= $row['title'] ?> </option>
                        <?php }?>
                    <?php } ?>
					
					</select>
                  </div>
                  <div class="form-group">
                    <label for="subcategory_title">Sub-Category Title</label>
                    <input type="text" class="form-control" name="subcategory_title" value="<?php echo $data['title'];?>">
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" value="<?php echo $data['description'];?>">
                  </div>
                  <div class="form-group">
                    <label for="image">Sub-Category Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <img src="../<?php echo $data['image'];?>" width="100">
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