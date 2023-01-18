<?php
include('../includes/header.php');
if(!isset($_SESSION['manager_name'])){
	echo"<script> location.href = '../Adminpages/loginadmin.php';</script>";
}
$order_id = $_GET['order_id'];
$total_pay = $_GET['total_pay'];
$sql = "SELECT *
        FROM shop_product_payments
        WHERE order_id = '$order_id'";
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
              <li class="breadcrumb-item"><a href="<?php echo indexUrl;?>">Home</a></li><b>/view payment info</b>
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
                  <h3 class="card-title">payment documents</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                      <tr>
                         <th>Total Payable amount</th>
                         <td><?php echo $total_pay;?></td>
                      </tr>              
                     
                      <tr>
                         <th>Bikash Number</th>
                         <td><?php echo $row['bikash_number'];?></td>
                      </tr>
                      <tr>
                         <th>Transaction id</th>
                         <td><?php echo $row['transaction_id'];?></td>
                      </tr>
                      <tr>
                         <th>Screenshot</th>
                         <td><img src="../<?php echo $row['screenshot'];?>" width="600"></td>
                      </tr>
                     
                    
                  </table>
                </div>
              
            </div>
            <!-- /.card -->
           <!-- /.card -->
<?php 
 include('../includes/footer.php');
?>