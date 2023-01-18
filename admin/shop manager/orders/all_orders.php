<?php
include('../includes/header.php');
if(!isset($_SESSION['manager_name'])){
	echo"<script> location.href = '../Adminpages/loginadmin.php';</script>";
}
$sql = "SELECT shop_product_payments.*, shop_product_order.*,shop_products.image, shop_products.productTitle,shop_products.salesPrice FROM shop_product_payments JOIN shop_product_order ON shop_product_order.id = shop_product_payments.order_id JOIN shop_products ON shop_product_order.product_id=shop_products.id
  where shop_product_payments.status='pending'
";
$result = mysqli_query($conn,$sql);

?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
               <h1>View all orders</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo indexUrl;?>">Home</a></li><b>/All orders</b>
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
                <h3 class="card-title">all orders</h3>
                <a href="success_orderlist.php" class="btn btn-success" style="float:right;" >success orderlist</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th >Order No.</th>
                      <th>Product title</th>
                      <th>product img</th>
                      
                      <th>quantity</th>
                      <th>price</th>
                      <th>Address</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                     $i = 1;

                     while($row = mysqli_fetch_assoc($result)){
                         $total_pay =  $row['salesPrice']*$row['quantity'] ;
                      ?>
                    <tr>
                      <td><?php echo $row['order_id'];?></td>
                      <td><?php echo $row['productTitle'];?></td>
                      <td><img src="../<?php echo $row['image'];?>" width="60"></td>
                      <td><?php echo $row['quantity'];?></td>
                      <td><?php echo $row['salesPrice']; ?> tk</td>
                      <td><?php echo $row['address'];?></td>
                      <td width="215px">
                        <a href="disapprove_order.php?id=<?php echo $row['order_id'];?>" class="btn btn-danger" onclick="return confirm('Are you sure? Want to cancel the customer product order!')"  >disapprove</a>
                        <a href="approve_order.php?id=<?php echo $row['order_id'];?>"  class="btn btn-info" onclick="return confirm('Are you sure? Would you like to confirm the customer products order?!')" >approve</a>
                        <a href="view_payment_details.php?order_id=<?php echo $row['order_id'];?>&total_pay=<?php echo $total_pay;?>"  class="btn btn-dark mt-1 w-100" >payment info</a>
                      </td>
                    </tr>
                   <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
             
            </div>
            <!-- /.card -->
           <!-- /.card -->
<?php 
 include('../includes/footer.php');
?>