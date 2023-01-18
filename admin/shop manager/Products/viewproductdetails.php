<?php
include('../includes/header.php');
if(!isset($_SESSION['manager_name'])){
	echo"<script> location.href = '../Adminpages/loginadmin.php';</script>";
}
$id = $_GET['id'];
$sql = "SELECT shop_categories.title as catTitle, shop_subcategories.title as subcatTitle, shop_products.*
        FROM shop_categories JOIN shop_subcategories
        ON shop_categories.id = shop_subcategories.category_id
        JOIN shop_products 
        ON shop_subcategories.id = shop_products.subcategory_id
        where shop_products.id = '$id'";
$result = mysqli_query($conn,$sql);
$row  = mysqli_fetch_assoc($result);
?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
               <h1>View all products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo indexUrl;?>">Home</a></li><b>/view products</b>
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
                  <h3 class="card-title">all Products</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                                     
                     
                      <tr>
                         <th>Category</th>
                         <td><?php echo $row['catTitle'];?></td>
                      </tr>
                      <tr>
                         <th>Sub category</th>
                         <td><?php echo $row['subcatTitle'];?></td>
                      </tr>
                      <tr>
                         <th>Product Title</th>
                         <td><?php echo $row['productTitle'];?></td>
                      </tr>
                      <tr>
                         <th>Actual Price</th>
                         <td><?php echo $row['actualPrice'];?></td>
                      </tr>
                      <tr>
                         <th>Discount</th>
                         <td><?php echo $row['discount'];?>%</td>
                      </tr>
                      <tr>
                         <th>Sales Price</th>
                         <td><?php echo $row['salesPrice'];?></td>
                      </tr>
                      <tr>
                         <th>Product Images</th>
                         <div class="row">
                            <div class="col">
                                  <td><img src="../<?php echo $row['image'];?>" width="60"></td>
                            </div>
                            <div class="col">
                                  <td><img src="../<?php echo $row['image2'];?>" alt="not found image2" width="60"></td>
                            </div>
                            <div class="col">
                                  <td><img src="../<?php echo $row['image3'];?>" alt="not found image3"width="60"></td>
                            </div>
                         </div>
                      </tr>
                  </table>
                </div>
              
            </div>
            <!-- /.card -->
           <!-- /.card -->
<?php 
 include('../includes/footer.php');
?>