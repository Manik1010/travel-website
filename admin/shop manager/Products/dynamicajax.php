<?php 
include("../includes/connection.php");
$catid = $_POST['catid'];
if(!empty($catid)){
	$sql = "SELECT * from shop_subcategories
	        where category_id = $catid ";
	$result = mysqli_query($conn,$sql);

	$count = mysqli_num_rows($result);

	if($count>0){
     ?>
       <div class="form-group" id="subcatdiv">
                    <label for="subcategory_id">Sub-Category Title</label>
                     <select name = "subcategory_id" id="catid" class="p-2 form-control" >
                        
                        <?php
                           
                            while($row = mysqli_fetch_assoc($result)){?>
					                  <option value="<?php echo $row['id'];?>"><?php echo $row['title'];?></option>
					              <?php } ?>
					
					           </select>
       </div>
    <?php
	}else{
     ?>
         <div class="form-group" id="subcatdiv">
                    <label for="subcategory_id">Sub-Category Title</label>
                    <input type="text" name="subcategory_id" class="form-control" disabled placeholder="please select your category">
         </div>
    <?php
	}
}