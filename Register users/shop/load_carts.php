<?php 
session_start();
include '../include/config.php';

$block_status = $_SESSION['b_status'];
$user_id = $_POST['user_id'];
$sql = "SELECT shop_products.* , shop_cart.id as sid,shop_cart.product_id as pid
        FROM shop_products join shop_cart
        on shop_products.id = shop_cart.product_id
        where shop_cart.user_id = '$user_id'";
$result = mysqli_query($conn,$sql);

$total_items = mysqli_num_rows($result);
?>

<input id="total_items" hidden value="<?php echo $total_items;?>">
<?php
while($row = mysqli_fetch_assoc($result)){ ?>
			<div class="row">
				<div class="col-md-2" >
					 <img src="../../admin/shop manager/<?php echo $row['image'];?>" width="120">
				</div>
				<div class="col" >
					 <span id ="title"><a href="single.php?id=<?php echo $row['id'];?>"><?php echo $row['productTitle'];?></a></span><br>
					 <span >৳ <?php echo $row['salesPrice'];?></span><br>
					 <span ><del style=" text-decoration: line-through;color:red;">৳  <?php echo $row['actualPrice'];?></del></span><br>
					 <span>- <?php echo $row['discount'];?>%</span><br><br>

					 
					 <span>
                       
					 	Quantity: <input type="number" id="quantity<?php echo $row['pid'];?>" min='1' value="1">
					   
					 </span>
                    
					 <span id="action">
					 	<button id="remove" data-rid='<?php echo $row["sid"];?>' class="btn btn-outline-danger">remove</button>
					 	<?php if($block_status == 0){?>
                            <button data-pid='<?php echo $row["pid"];?>' id="buy" class="btn btn-outline-success ">Order now</button>
					 	<?php }?>
					 	
					 </span>
					<
				</div>
				
			</div>
		<?php }?>
