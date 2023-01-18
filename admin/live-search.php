<?php
include 'include/config.php';
$search_value = $_POST['search'];
$sql  = "SELECT * from user_form
         where (name LIKE '%$search_value%' or email LIKE '%$search_value%' 
         or user_type LIKE '%$search_value%') and user_type != 'admin' ";
$result = mysqli_query($conn,$sql);
$output = "";
if(mysqli_num_rows($result)>0){
	$output = '
         <table class="table  table-striped" style="margin-left: 1%;margin-right: 1%;">
                   <tr>
                       <th>SL no.</th>
                       <th>Name </th>
                       <th>Email</th>
                       <th>Phone</th>
                       <th>User Type</th>
                       <th>action</th>
                   </tr>
         '; 
         $i = 1;
         while($row = mysqli_fetch_assoc($result)){
         $output .= "
                     <tr>
                       <td>{$i}</td>
                       <td>{$row["name"]}</td>
                       <td>{$row["email"]}</td>
                       <td>{$row["number"]}</td>
                       <td>{$row["user_type"]}</td>
                       <td>
                       ";
                       if($row['b_status'] == 0){
                          $output .= "<a href='block_user.php?id= {$row["id"]}' class=' btn btn-sm btn-outline-danger' onclick='return confirm('Are you sure? Want to unblock this user!')'>  Block</a>";
                       }else{
                          $output .= "<a href='unblock_user.php?id={$row["id"]}' class='btn btn-sm btn-outline-success 'onclick='return confirm('Are you sure? Want to unblock this user!')' > Unblock</a>";  
                       }
              $output .= "</td>
                       
                   </tr>
                   ";
                   $i++;
          }
    $output .= "</table>";
    mysqli_close($conn);
    echo $output;
}else{
	echo"<h2 style='text-align:center;color:red'>Record no found</h2>";
}