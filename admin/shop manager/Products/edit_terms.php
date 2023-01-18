<title>edit Terms & conditions</title>
<?php
include('../includes/header.php');
$user_type = $_SESSION['user_type'];
$id = $_GET['id'];
$datasql = "SELECT * FROM terms_conditions
            WHERE id='$id'";
$dataResult = mysqli_query($conn,$datasql);
$data = mysqli_fetch_assoc($dataResult);

if(!isset($_SESSION['manager_name'])){
	echo"<script> location.href = '../Adminpages/loginadmin.php';</script>";
}
if(isset($_POST['submit'])){
	$p_medhod = $_POST['p_medhod'];
	$p_rules = $_POST['p_rules'];
     
    $sql = "UPDATE terms_conditions SET payment_method='$p_medhod',terms_conditions='$p_rules'
            WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
  
    echo"<script> location.href = 'view_term_condition.php';</script>";
}
?>
<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
               <h1>Edit Term & condition </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo indexUrl;?>">Home</a></li><b>/Edit terms & conditions</b>
              <a href="<?php echo logoutUrl;?>" class="btn btn-danger" style="margin-left: 10px;">LogOut</a>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
 <div class="card card-primary m-2">
              <div class="card-header">
                <h3 class="card-title">Terms & conditions</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Payment Method</label>
                    <input type="text" class="form-control" name="p_medhod" value="<?php echo $data['payment_method'];?>">
                  </div>
                 <div class="form-group">
                    <label for="description">Payment Rules</label>
                    <textarea class="form-control" id="editor" name="p_rules" rows="10"> <?php echo $data['terms_conditions'];?></textarea>
                    
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
<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>