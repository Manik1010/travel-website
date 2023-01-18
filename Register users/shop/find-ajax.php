<?php 
include("../include/config.php");
$catid = $_POST['catid'];
$subcatid = $_POST['subcatid'];
    if($subcatid=='all'){
    	$sql = "SELECT * from shop_products
	        where category_id = $catid and status=1";
    }else{
    	$sql = "SELECT * from shop_products
	        where category_id = $catid and subcategory_id = $subcatid and status=1";
    }
	
	$result = mysqli_query($conn,$sql);

	$count = mysqli_num_rows($result);
    	if($count>0){
     ?>
       <div class="row" id="products" style="margin-left: 5%;margin-right: 5%;">
       <?php while($row = mysqli_fetch_assoc($result)){?>
        <div class="card" style="width: 30rem;border-radius: 25px; margin-left: 2%;margin-top: 2%;padding: 0">
          <img src="../../admin/shop manager/<?php echo $row['image'];?>" class="card-img-top" alt="..." style="border-radius: 25px 25px 0px 0px;height: 280px;padding: 0;width:295px; object-fit: cover;transition: .2s linear;">
          <div class="card-body">
          <h3><?php echo $row['productTitle'];?></h3>
            
           <p style="margin-top:2%;"> <img src="../../images2/cost.png " width="30px" height="30px">
            <b style="font-size: 14px;">Cost:  <?php echo $row['salesPrice'];?> Tk</b>
            <span style="margin-left:2%;font-size: 14px;font-weight: bold;color:red"><del style=" text-decoration: line-through;"><?php echo $row['actualPrice'];?> Tk</del> </span> <span style="float: right;font-size: 14px;font-weight: bold;background-color: green;color:white;padding: 10px;border-radius: 25px;"><?php echo $row['discount'];?>%  OFF</span>
            <p>
            
            <a href="single.php?id=<?php echo $row['id'];?>" class="btn btn-outline-dark p-3" style="display: block;margin-top: 15px;font-size:18px">More Details</a>
          </div>
        </div>
     <?php } ?> 
   </div>
    <?php
	}
	
	else{
     ?>
        <div class="row" id="products" style="margin-left: 5%;margin-right: 5%;margin-top: 2%;">
             <h4 align="center" style="color: red;">No product found</h4> 
        </div>
    <?php
	}
