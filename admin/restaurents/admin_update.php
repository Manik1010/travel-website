<?php

include '../include/config.php';


$id = $_GET['edit'];

if(isset($_POST['update_product'])){

  $rand = rand(11111, 89999999999);
   $product_name = $_POST['product_name'];
   $number = $_POST['res_number'];
   
   $image ='uploads/restaurents-img/' . $rand .$_FILES['product_image']['name'];

   $upload = '../uploads/restaurents-img/' . $rand . $_FILES['product_image']['name'];

   if(empty($product_name) || empty($number) || empty($image)){
      $message[] = 'please fill out all!';    
   }else{

      $update_data = "UPDATE restaurents SET name='$product_name', number='$number', image='$image'  WHERE id = '$id'";
      $result = mysqli_query($conn, $update_data);

      if($result){
         move_uploaded_file($_FILES['product_image']['tmp_name'], $upload);
         header('location:index.php');
      }else{
         $$message[] = 'please fill out all!'; 
      }

   }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">


<div class="admin-product-form-container centered">

   <?php
      
      $select = mysqli_query($conn, "SELECT * FROM restaurents WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the restaurant</h3>
      <input type="text" class="box" name="product_name" value="<?php echo $row['name']; ?>" placeholder="enter the restaurant name">
      <input type="text"  class="box" name="res_number" value="<?php echo $row['number']; ?>" placeholder="enter the restaurant number">
      <input type="file" class="box" name="product_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="submit" value="update restaurant" name="update_product" class="btn">
      <a href="index.php" class="btn">go back!</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>