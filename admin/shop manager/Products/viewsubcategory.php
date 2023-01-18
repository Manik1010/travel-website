<?php
include('../includes/header.php');
if(!isset($_SESSION['manager_name'])){
	echo"<script> location.href = '../Adminpages/loginadmin.php';</script>";
}
$sql = "SELECT shop_categories.title as c_title, shop_subcategories.*
        FROM shop_categories JOIN shop_subcategories
        ON shop_subcategories.category_id = shop_categories.id";
$result = mysqli_query($conn,$sql);

?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
               <h1>View all sub-Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo indexUrl;?>">Home</a></li><b>/view sub-Category</b>
              <a href="<?php echo logoutUrl;?>" class="btn btn-danger" style="margin-left: 10px;">LogOut</a>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
 <div class="card card-primary m-2">
              
              <!-- /.card-header -->
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">all Sub-category</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th >No.</th>
                      <th>Category</th>
                      <th>Sub category</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                     $i = 1;
                     while($row = mysqli_fetch_assoc($result)){?>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td><?php echo $row['c_title'];?></td>
                      <td><?php echo $row['title'];?></td>
                      
                      <td>
                        <a href="deletesubcategory.php?id=<?php echo $row['id'];?>"  class="btn btn-danger">Delete</a>
                        <a href="editsubcategory.php?id=<?php echo $row['id'];?>"  class="btn btn-info" >Edit</a>
                      </td>
                    </tr>
                   <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
           <!-- /.card -->
<?php 
 include('../includes/footer.php');
?>