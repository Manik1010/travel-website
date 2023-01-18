<title>view terms & condition</title>
<?php
include('../includes/header.php');
if(!isset($_SESSION['manager_name'])){
	echo"<script> location.href = '../Adminpages/loginadmin.php';</script>";
}
$sql = "SELECT * FROM terms_conditions
        WHERE user_type = 'shop manager'";
$result = mysqli_query($conn,$sql);

?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
               <h1>View all terms & conditions</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo indexUrl;?>">Home</a></li><b>/view terms & conditions</b>
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
                <h3 class="card-title">all Terms & conditions</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th >No.</th>
                      <th>Payment Method</th>
                      <th>Payment Rules</th>
                     
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                     $i = 1;
                     while($row = mysqli_fetch_assoc($result)){?>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td><?php echo $row['payment_method'];?></td>
                      <td><?php echo $row['terms_conditions'];?></td>
                     
                      <td width="160px">
                        <a href="delete_terms.php?id=<?php echo $row['id'];?>" onclick="return confirm('Do you want to delete element')" class="btn btn-danger" ><i class="far fa fa-trash"></i></a>
                        <a href="edit_terms.php?id=<?php echo $row['id'];?>"  class="btn btn-info"  ><i class="far fa fa-edit"></i></a>
                      </td>
                    </tr>
                   <?php } ?>
                  </tbody>
                </table>
              </div>
             
            </div>
            <!-- /.card -->
           <!-- /.card -->
<?php 
 include('../includes/footer.php');
?>
