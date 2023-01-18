<?php 
include '../include/config.php';

$post_id = $_POST['post_id'];
$user_id = $_POST['user_id'];
$allCommentSql = "SELECT user_form.name as name,new_place_comments.*
				  FROM new_place_comments JOIN user_form
			   	  ON new_place_comments.user_id = user_form.id
				  WHERE new_place_comments.post_id= '$post_id'
				  order by new_place_comments.id desc";

$allCommentResult = mysqli_query($conn,$allCommentSql);
$output = "";
while($row = mysqli_fetch_assoc($allCommentResult)){
    $output .= "<div class='comment mt-2' style='border: 1px solid black;padding: 10px;'>
                      <b>{$row['name']}</b><span class='time ' style='margin-left: 20px;font-size: 14px;'>{$row['createdOn']}</span>
                      <div class='message p-2'> {$row['comment']}</div>";
                 if($row['user_id'] == $user_id){ 
                   $output  .= "<button class='btn btn-link edit-btn' data-bs-toggle='modal'data-bs-target='#editModal' data-eid='{$row["id"]}' style='font-size: 14px;text-decoration: none;'>edit</button>
                      <button class='btn btn-link delete-btn' data-id='{$row["id"]}' style='font-size: 14px;text-decoration: none;'>delete</button>";
                   } 
                $output  .= "</div>";
}
echo  $output;