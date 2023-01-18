<title>Restaurents</title>
<?php 
include '../include/config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:../login system/login_form.php');
}
$district_categories = "select * from restaurent_categories";
$districts=mysqli_query($conn,$district_categories);
include'../include/all_header.php';
if(isset($_POST['add_product'])){
   $rand = rand(11111, 89999999999);
   $category_id = $_POST['category_id'];
   $food_name   =  mysqli_real_escape_string($conn, $_POST['food_name']);
   $product_name = $_POST['product_name'];
   $number = $_POST['res_number'];
   $location = $_POST['res_location'];
   $image ='uploads/restaurents-img/' . $rand .$_FILES['product_image']['name'];

   $upload = '../uploads/restaurents-img/' . $rand . $_FILES['product_image']['name'];

   
   if(empty($product_name) || empty($number) || empty($image)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO restaurents(name,food_name,category_id, number,location, image) VALUES('$product_name','$food_name','$category_id', '$number','$location', '$image')";
      $result = mysqli_query($conn,$insert);
      if($result){
         move_uploaded_file($_FILES['product_image']['tmp_name'], $upload);

         $message[] = 'added successfully';
      }else{
         $message[] = 'could not add';
      }
   }

};
if(isset($_GET['delete'])){
	

   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM restaurents WHERE id = $id");
   header('location:index.php');
};
?>
<style type="text/css">
	

.message{
   display: block;
   background: var(--bg-color);
   padding:1.5rem 1rem;
   font-size: 2rem;
   color:var(--black);
   margin-bottom: 2rem;
   text-align: center;
}


.admin-product-form-container.centered{
   display: flex;
   align-items: center;
   justify-content: center;
   min-height: 100vh;
   
}

.admin-product-form-container form{
   max-width: 50rem;
   margin:0 auto;
   padding:2rem;
   font-size: 16px;
   border-radius: .5rem;
   background: var(--bg-color);
}

.admin-product-form-container form h3{
   text-transform: uppercase;
   color:var(--black);
   margin-bottom: 1rem;
   text-align: center;
   font-size: 2.5rem;
}

.admin-product-form-container form .box{
   width: 100%;
   border-radius: .5rem;
   padding:1.2rem 1.5rem;
   font-size: 1.7rem;
   margin:1rem 0;
   background: var(--white);
   text-transform: none;
}

.product-display{
   margin:2rem 0;
}

.product-display .product-display-table{
   width: 100%;
   text-align: center;
}

.product-display .product-display-table thead{
   background: var(--bg-color);
}

.product-display .product-display-table th{
   padding:1rem;
   font-size: 2rem;
}


.product-display .product-display-table td{
   padding:1rem;
   font-size: 2rem;
   border-bottom: var(--border);
}

.product-display .product-display-table .btn:first-child{
   margin-top: 0;
}

.product-display .product-display-table .btn:last-child{
   background: crimson;
}

.product-display .product-display-table .btn:last-child:hover{
   background: var(--black);
}









@media (max-width:991px){

   html{
      font-size: 55%;
   }

}

@media (max-width:768px){

   .product-display{
      overflow-y:scroll;
   }

   .product-display .product-display-table{
      width: 80rem;
   }

}

@media (max-width:450px){

   html{
      font-size: 50%;
   }

}
</style>
<main class="mt-5 pt-3">
      <div class="container-fluid mt-5  pt-2">
        
         
         

 <div class="admin-product-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a new restaurant</h3>
         <label for="brands">Districts</label>
                  <select name="category_id" class="form-control">
                    <option> Select district </option>
                    <?php while ($row = mysqli_fetch_assoc($districts)) { ?>
                      <option value="<?= $row['id'] ?>"> <?= $row['name'] ?> </option>
                    <?php } ?>
                  </select><br>
         <input type="text" placeholder="enter restaurant name" name="product_name" class="form-control"><br>
         <textarea type="text" placeholder="enter food items" name="food_name" class="form-control" rows="5"></textarea><br>
         <input type="text" placeholder="enter restaurant number" name="res_number" class="form-control"><br>
         <input type="text" placeholder="enter restaurant location" name="res_location" class="form-control"><br>
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="form-control"><br>
         <input type="submit" class="btn btn-success w-25" name="add_product" value="add restaurant">
      </form>

   </div>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM restaurents");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>restaurant picture</th>
            <th>Rastaurant name</th>
            <th>Contact number</th>
            <th>Action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><img src="../<?php echo $row['image'];?>" height="100" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['number']; ?></td>
            <td width="200px;">
               <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn btn-outline-info"> <i class="fas fa-edit" ></i> edit </a>
               <!-- <a href="admin_page.php?delete=#" class="btn"> <i class="fas fa-trash"></i>delete </a> -->
                <a href="index.php?delete=<?php echo $row['id']; ?>" class="btn btn-outline-dark"> <i class="fas fa-edit" ></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>
   </main>
<?php 
include'../include/footer.php';
 ?>
