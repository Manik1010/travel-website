<?php 
include '../include/config.php';
  $commentId = $_POST['id'];
  
$sql  = "SELECT * from new_place_comments where id = '$commentId'";
$result = mysqli_query($conn,$sql);

$output = "";
if(mysqli_num_rows($result)>0){
	$data = mysqli_fetch_assoc($result);
         
         $output .= "
                    
				        <div class= 'mb-3'>
						   <textarea id='edit-comment' class='form-control' rows='10'style='font-size: 16px;'>{$data['comment']}</textarea>
						  <input  id='edit-id' hidden value='{$data['id']}' >
						</div>
						
						<div class='modal-footer'>
					        <button type='button' class='btn btn-primary' id='edit-submit' data-bs-dismiss='modal' style='font-size: 16px;' >Edit</button>
					        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal' style='font-size: 16px;'>Close</button>
	        
	                    </div>
				     
                   ";
          
  
    mysqli_close($conn);
    echo $output;
}else{
	echo"<h2>Record no found</h2>";
}
?>
