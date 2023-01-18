<?php 
include("../include/config.php");
$catid = $_POST['catid'];
if(!empty($catid)){
	$sql = "SELECT * from shop_subcategories
	        where category_id = $catid ";
	$result = mysqli_query($conn,$sql);

	$count = mysqli_num_rows($result);

if($count>0){
     ?>
       <div class="col-md-4" id="subcatdiv" style=" margin-left:2%;border:1px solid;border-radius:20px;padding-left: 10px; padding-right: 10px;font-size: 16px;">
                    
                     <select name = "subcategory_id" id="subcatid" style="padding: 10px;background-color: white;" >
                        <option value="all" >all</option>
                        <?php
                           
                            while($row = mysqli_fetch_assoc($result)){?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row['title'];?></option>
                        <?php } ?>
          
                     </select>
       </div>
    <?php
  }else{
     ?>
         <div class="col-md-6" id="subcatdiv" style=" margin-left:2%;border:1px solid;border-radius:20px;padding-left: 10px; padding-right: 10px;font-size: 16px;">
            <label for="sub-categories" style="padding: 2px;"><b>Select Sub-Categories</b>:</label>
            <input type="text" name="subcategory_id"  disabled placeholder="please select category">
          </div>
    <?php
  }
}