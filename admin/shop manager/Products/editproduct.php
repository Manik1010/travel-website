<?php


include('../includes/header.php');

if(!isset($_SESSION['manager_name'])){
	echo"<script> location.href = '../Adminpages/loginadmin.php';</script>";
}
$id = $_GET['id'];
$productSql = "SELECT * FROM shop_products WHERE id = $id ";
$productResult = mysqli_query($conn,$productSql);
$data = mysqli_fetch_assoc($productResult);

if(isset($_POST['submit'])){
	$category_id = $_POST['category_id'];
	$subcategory_id = $_POST['subcategory_id'];

  $productTitle = mysqli_real_escape_string($conn, $_POST['productTitle']);
  $productdescription = mysqli_real_escape_string($conn, $_POST['productdescription']);
  $actual_price = $_POST['actual_price'];
  $discount = $_POST['discount'];
  $sales_price = $_POST['sales_price'];
  $total_products = $_POST['total_products'];
	$rand = rand(11111, 89999999999);

    
     
    $updatesql = "UPDATE shop_products SET  category_id ='$category_id',
                     subcategory_id = '$subcategory_id',
                     productTitle ='$productTitle',
                     productDescription ='$productdescription',
                     actualPrice ='$actual_price',
                     discount ='$discount',
                     salesPrice ='$sales_price',
                     stock = '$total_products' ";

if (!empty($_FILES['image']['name']))
{
  $rand = rand(11111, 89999999999);


  $image ='uploads/product-img/' . $rand .$_FILES['image']['name'];

  $upload = '../uploads/product-img/' . $rand . $_FILES['image']['name'];

  move_uploaded_file($_FILES['image']['tmp_name'], $upload);
    
    $updatesql .= ",image = '$image'";
  if(!empty($data['image'])){
    unlink('../' . $data['image']);
  }
}
if (!empty($_FILES['image2']['name']))
{
  $rand = rand(11111, 89999999999);


  $image2 ='uploads/product-img/' . $rand .$_FILES['image2']['name'];

  $upload2 = '../uploads/product-img/' . $rand . $_FILES['image2']['name'];

  move_uploaded_file($_FILES['image2']['tmp_name'], $upload2);
    
    $updatesql .= ",image2 = '$image2'";
  if(!empty($data['image'])){
    unlink('../' . $data['image2']);
  }
}
if (!empty($_FILES['image3']['name']))
{
  $rand = rand(11111, 89999999999);


  $image3 ='uploads/product-img/' . $rand .$_FILES['image3']['name'];

  $upload3 = '../uploads/product-img/' . $rand . $_FILES['image3']['name'];

  move_uploaded_file($_FILES['image3']['tmp_name'], $upload3);
    
    $updatesql .= ",image3 = '$image3'";
  if(!empty($data['image3'])){
    unlink('../' . $data['image3']);
  }
}

    $updatesql .= "where id = $id";
    mysqli_query($conn, $updatesql);


    echo"<script> location.href = 'viewproduct.php';</script>";
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
               <h1>Add Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo indexUrl;?>">Home</a></li><b>/Add product</b>
              <a href="<?php echo logoutUrl;?>" class="btn btn-danger" style="margin-left: 10px;">LogOut</a>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
 <div class="card card-primary m-3">
              <div class="card-header">
                <h3 class="card-title">Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  id="quickForm" action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="category_id">Category Title</label>
                     <select name = "category_id" id="catid" class="p-2 form-control" >
                        <option value="">Select Your category</option>
                        <?php
                            $categorySql = "SELECT * from shop_categories";
                            $categoryResult = mysqli_query($conn,$categorySql);
                            while($row = mysqli_fetch_assoc($categoryResult)){?>
					                  <option value="<?php echo $row['id'];?>" 
                              <?php if($row['id']== $data['category_id']){ 
                                echo "selected";}?> >
                              <?php echo $row['title'];?></option>
					              <?php } ?>
					
					           </select>
                  </div>
                  <div class="form-group" id="subcatdiv">
                    <label for="subcategory_id">Sub-Category Title</label>
                    <select name = "subcategory_id"  class="p-2 form-control" >
                        <option value="">Select Your category</option>
                        <?php
                            $subcategorySql = "SELECT * from shop_subcategories";
                            $subcategoryResult = mysqli_query($conn,$subcategorySql);
                            while($row = mysqli_fetch_assoc($subcategoryResult)){?>
                            <option value="<?php echo $row['id'];?>" 
                              <?php if($row['id']== $data['subcategory_id']){ 
                                echo "selected";}?> >
                              <?php echo $row['title'];?></option>
                        <?php } ?>
          
                     </select>
                  </div>
                  <div class="form-group">
                    <label for="title">Product Title</label>
                    <input type="text" class="form-control" name="productTitle" value="<?php echo $data['productTitle'];?>">
                  </div>
                  <div class="form-group">
                    <label for="description">Product Description</label>
                    <textarea class="form-control" id="editor" name="productdescription" rows="10"><?php echo $data['productDescription'];?></textarea>
                    
                  </div>
                  <div class="form-group">
                    <label for="total_products">Total products</label>
                    <input type="number" class="form-control" name="total_products" id="total_products" value="<?php echo $data['stock'];?>">
                  </div>
                  <div class="form-group">
                    <label for="actual_price">Actual Price</label>
                    <input type="text" class="form-control" name="actual_price" id="actualPrice"value="<?php echo $data['actualPrice'];?>">
                  </div>
                  <div class="form-group">
                    <label for="discount">Discount</label>
                    <input type="number" class="form-control" name="discount" id="discount" value="<?php echo $data['discount'];?>">
                  </div>
                  <div class="form-group">
                    <label for="sales_price">Sales Price</label>
                    <input type="text" class="form-control" name="sales_price" id="salesPrice" value="<?php echo $data['salesPrice'];?>">
                  </div>
                  
                   <h2 align="center">Product Images for slides</h2>
                  <div class="row form-group">

                    <div class="col">
                         <label for="image">product Image</label>
                         <input type="file" name="image" id="uploadfile" onchange="readURL(this);"><br>
                         <img id="blah" src="../<?php echo $data['image'];?>" width="150px" alt="this image will be stored">
                    </div>
                    <div class="col">
                         <label for="image2">product Image</label>
                         <input type="file" name="image2" id="uploadfile2" onchange="readURL2(this);"><br>
                         <img id="blah2" src="../<?php echo $data['image2'];?>" width="150px" alt="this image will be stored">
                    </div>
                    <div class="col">
                         <label for="image3">product Image</label>
                         <input type="file" name="image3" id="uploadfile3" onchange="readURL3(this);"><br>
                         <img id="blah3" src="../<?php echo $data['image3'];?>" width="150px" alt="this image will be stored">
                    </div>
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
<script>
  $(document).ready(function(){
    $("#catid").change(function(){
       var catid = $(this).val();
       
       $.ajax({
          url:'dynamicajax.php',
          type: 'POST',
          data:{
            catid: catid
          },
          success: function(data){
             $("#subcatdiv").replaceWith(data);
          },
       });
    });

    $("#actualPrice,#discount").keyup(function(){
       var main = $('#actualPrice').val();
       var disc = $('#discount').val();

       var dec = (disc / 100).toFixed(2);
       var mult = main * dec;
       var discount = main - mult;
       $('#salesPrice').val(discount);
    });
  });
</script>
<script type="text/javascript">
  function readURL(input){
    if(input.files && input.files[0]){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#blah').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  function readURL2(input){
    if(input.files && input.files[0]){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#blah2').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  function readURL3(input){
    if(input.files && input.files[0]){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#blah3').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>