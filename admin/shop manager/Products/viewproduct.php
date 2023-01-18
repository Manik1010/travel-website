<?php
include('../includes/header.php');
if(!isset($_SESSION['manager_name'])){
	echo"<script> location.href = '../Adminpages/loginadmin.php';</script>";
}
$sql = "SELECT shop_categories.title as catTitle, shop_subcategories.title as subcatTitle, shop_products.*
        FROM shop_categories JOIN shop_subcategories
        ON shop_categories.id = shop_subcategories.category_id
        JOIN shop_products 
        ON shop_subcategories.id = shop_products.subcategory_id";
$result = mysqli_query($conn,$sql);

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
                  <thead>                  
                    <tr>
                      <th >No.</th>
                      <th>Category</th>
                      <th>Sub category</th>
                      <th>Product Title</th>
                      <th>Total product</th>
                      <th>Actual Price</th>
                      <th>Discount</th>
                      <th>Sales Price</th>
                      <th>Status</th>
                      <th>Product Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                     $i = 1;
                     while($row = mysqli_fetch_assoc($result)){?>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td><?php echo $row['catTitle'];?></td>
                      <td><?php echo $row['subcatTitle'];?></td>
                      <td><?php echo $row['productTitle'];?></td>
                      <td><?php echo $row['stock'];?></td>
                      <td><?php echo $row['actualPrice'];?></td>
                      <td><?php echo $row['discount'];?>%</td>
                      <td><?php echo $row['salesPrice'];?></td>
                      <td>
                          <center>
                                 <div class="custom-control custom-switch">
                                  <input class="custom-control-input "
                                   <?php if($row['status']=='1'){
                                     echo "checked";
                                   } ?>
                                   onclick ="toggleStatus(<?php echo $row['id'];?>)"
                                   type="checkbox" id="<?php echo $row['id'];?>">
                                  <label class="custom-control-label" for="<?php echo $row['id']?>"></label>
                                </div>
                          </center>
                         
                      </td>
                      <td><img src="../<?php echo $row['image'];?>" width="60"></td>
                      <td width="160px">
                        <a href="deleteproduct.php?id=<?php echo $row['id'];?>" onclick="return confirm('Do you want to delete element')" class="btn btn-danger" ><i class="far fa fa-trash"></i></a>
                        <a href="editproduct.php?id=<?php echo $row['id'];?>"  class="btn btn-info"  ><i class="far fa fa-edit"></i></a>
                        <a href="viewproductdetails.php?id=<?php echo $row['id'];?>"  class="btn btn-dark"  ><i class="far fa fa-eye"></i></a>
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
<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" ></script>
<script >

  function toggleStatus(id){
    var id = id;
    console.log(id);
    $.ajax({
       url: 'toggle.php',
       type: "POST",
       data: { pid: id},
       success: function(data){
         if(data=='1'){
           swal("Done!","Status is ON","success");
         }else{
           swal("Done!","Status is OFF","success");
         }
       }
    });
  }
</script>