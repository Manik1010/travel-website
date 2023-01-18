<?php 
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:../../login system/login_form.php');
}
$user_id = $_SESSION['user_id'];

$block_status = $_SESSION['b_status'];


include '../include/config.php';

// lets assume a user is logged in with id $


// if user clicks like or dislike button
if (isset($_POST['action'])) {
  $post_id = $_POST['post_id'];
  $action  = $_POST['action'];
  switch ($action) {
    case 'like':
         $sql="INSERT INTO rating_info (user_id, post_id, rating_action) 
             VALUES ($user_id, $post_id, 'like') 
             ON DUPLICATE KEY UPDATE rating_action='like'";
         break;
    case 'dislike':
          $sql="INSERT INTO rating_info (user_id, post_id, rating_action) 
               VALUES ($user_id, $post_id, 'dislike') 
             ON DUPLICATE KEY UPDATE rating_action='dislike'";
         break;
    case 'unlike':
        $sql="DELETE FROM rating_info WHERE user_id=$user_id AND post_id=$post_id";
        break;
    case 'undislike':
          $sql="DELETE FROM rating_info WHERE user_id=$user_id AND post_id=$post_id";
      break;
    default:
      break;
  }

  // execute query to effect changes in the database ...
  mysqli_query($conn, $sql);
  echo getRating($post_id);
  exit(0);
}

// Get total number of likes for a particular post
function getLikes($id)
{
  global $conn;
  $sql = "SELECT COUNT(*) FROM rating_info 
        WHERE post_id = $id AND rating_action='like'";
  $rs = mysqli_query($conn, $sql);
  $result = mysqli_fetch_array($rs);
  return $result[0];
}

// Get total number of dislikes for a particular post
function getDislikes($id)
{
  global $conn;
  $sql = "SELECT COUNT(*) FROM rating_info 
        WHERE post_id = $id AND rating_action='dislike'";
  $rs = mysqli_query($conn, $sql);
  $result = mysqli_fetch_array($rs);
  return $result[0];
}

// Get total number of likes and dislikes for a particular post
function getRating($id)
{
  global $conn;
  $rating = array();
  $likes_query    = "SELECT COUNT(*) FROM rating_info
                     WHERE post_id = $id AND rating_action='like'";
  $dislikes_query = "SELECT COUNT(*) FROM rating_info 
             WHERE post_id = $id AND rating_action='dislike'";
  $likes_rs = mysqli_query($conn, $likes_query);
  $dislikes_rs = mysqli_query($conn, $dislikes_query);
  $likes = mysqli_fetch_array($likes_rs);
  $dislikes = mysqli_fetch_array($dislikes_rs);
  $rating = [
    'likes' => $likes[0],
    'dislikes' => $dislikes[0]
  ];
  return json_encode($rating);
}

// Check if user already likes post or not
function userLiked($post_id)
{
  global $conn;
  global $user_id;
  $sql = "SELECT * FROM rating_info WHERE user_id=$user_id 
        AND post_id=$post_id AND rating_action='like'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    return true;
  }else{
    return false;
  }
}

// Check if user already dislikes post or not
function userDisliked($post_id)
{
  global $conn;
  global $user_id;
  $sql = "SELECT * FROM rating_info WHERE user_id=$user_id 
        AND post_id=$post_id AND rating_action='dislike'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    return true;
  }else{
    return false;
  }
}

 $id = $_GET['id'];
 $sql = "SELECT * FROM new_places
         where id = $id";
 $result = mysqli_query($conn, $sql);
 $post   = mysqli_fetch_assoc($result);
 
 
 $sql2 = "SELECT id from new_place_comments
          where post_id='$id'";
 $result2= mysqli_query($conn,$sql2);
 $numComments = mysqli_num_rows($result2);
// fetch all posts from database
// return them as an associative array called $posts

include'../include/register_header.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>New place-details</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
 <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
  
  <style type="text/css">
       .post-info{
        
        padding: 10px;
        
       }
       .fa {
          font-size: 1.2em;
        }
        .fa-thumbs-down, .fa-thumbs-o-down {
          transform:rotateY(180deg);
        }

        i {
          color: black;
        }
       
  </style>
</head>
<body>
  <section>
    <a href="index.php" class="btn btn-outline-dark" style="font-size:14px;">back</a>
        <h1 class="text-center"> <?php echo $post['title']; ?></h1><hr>
        <img src="../../admin/<?php echo $post['image']; ?>" width="99.9%"><br><br><br>

  

      
      <div class="post-info">
        <h2><b> Description:</b></h2> 
        <h4 style="text-align: justify;line-height: 2;"><?php echo $post['description'];?></h4>
     
      <!-- if user likes post, style button differently -->
        <i style="font-size: 24px;" <?php if (userLiked($post['id'])){ ?>
            class="fa fa-thumbs-up like-btn"
          <?php }else{ ?>
            class="fa fa-thumbs-o-up like-btn"
          <?php } ?>
          data-id="<?php echo $post['id'] ?>"></i>
        <span class="likes" style="font-size: 20px;"><?php echo getLikes($post['id']); ?></span>
        
        &nbsp;&nbsp;&nbsp;&nbsp;

      <!-- if user dislikes post, style button differently -->
        <i style="font-size: 24px;"
          <?php if (userDisliked($post['id'])){?>
            class="fa fa-thumbs-down dislike-btn"
          <?php }else{?>
            class="fa fa-thumbs-o-down dislike-btn"
          <?php } ?>
          data-id="<?php echo $post['id'] ?>"></i>
        <span class="dislikes" style="font-size: 20px;"><?php echo getDislikes($post['id']); ?></span>
      </div><br><br>
      <div class="row" >
        <form id="commentBox">
          <h2>Add comment:</h2>
          <textarea rows="3" required class="form-control" id="comment" style="font-size: 16px;"></textarea>
        </form>
          

      </div>
       <button class="btn-info p-2 m-2 " style="float: right;width: 150px;font-size: 16px;" id="commentBtn">Add comment</button><br><br>
      <div class="row mt-5">
         <div class="col-md-12">
            <h2><b id="numComments"><?php echo $numComments; ?> Comments</b></h2><hr>
            <div class="userComments" style="font-size: 16px;">
                
              
                 
            </div>
         </div>
      </div>
     <div id="modal">
        <div class="modal" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel"  aria-hidden="true" >
            <div class="modal-dialog" >
                <div class="modal-content" id="modal-form" >
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px;">Edit Comment</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class='modal-body' id="body-info">
                         
                    </div>
                   
                </div>
            </div>
        </div>
     </div>
   
</section>
  <script src="like-dislike.js"></script>
  <script type="text/javascript">

      $(document).ready(function(){
        var curNumComments = <?php echo $numComments;?>;
        
        var post_id = <?php echo $id;?>;
        function loadComments(){
             var user_id = <?php echo $user_id;?>;
             $.ajax({
               url:'all-comments.php',
               type: "POST",
               data: {
                       user_id: user_id,
                       post_id: post_id
                    },
               success:function(data){
                $(".userComments").html(data);

               }
           });
          }
         loadComments();
        
         $("#commentBtn").on("click",function(){
             var comment = $("#comment").val();
             var user_id = <?php echo $user_id;?>;
             var block_status = <?php echo $block_status;?>;
             if(block_status == 0){
                 if(comment==""){
                    alert("please write message.");
                 }else{
                    $.ajax({
                        url: "comment.php",
                        type: "POST",
                        data: {
                           user_id: user_id,
                           post_id: post_id,
                           comment: comment
                        },
                        success:function(data){
                          if(data==1){
                            curNumComments++;
                            $("#numComments").text(curNumComments + " Comments");
                            loadComments();
                            $("#commentBox").trigger("reset");
                            
                          }else{
                            alert("failed");
                          }
                        }
                    });
                 }
             }else{
               alert("Your account is blocked! Please request admin to unblock");
             }
             
            
         });
         //Delete Comment
          $(document).on("click",".delete-btn",function(){
              if(confirm("Do you really want to delete this record?")){
                  var commentId = $(this).data("id"); 
                  
                var element = this;
                $.ajax({
                    url:"delete-comment.php",
                    type: "POST",
                    data:{
                      id:commentId
                    },
                    success:function(data){
                       if(data==1){
                         curNumComments--;
                         $("#numComments").text(curNumComments + " Comments");
                         $(element).closest("div").fadeOut();
                       }
                    }
                });
              }
             
          });
          //Edit Comment load data
          $(document).on("click",".edit-btn",function(){

            var commentId = $(this).data("eid"); // .edit-btn holo = this
           
              $.ajax({
                    url:"load-update-form.php",
                    type: "POST",
                    data:{
                      id:commentId
                    },
                    success:function(data){
                      $("#body-info").html(data);
                    }
              });
          });
          //Update comment
          $(document).on("click","#edit-submit",function(){
               var commentId = $("#edit-id").val();
               var editComment   = $("#edit-comment").val();
               

               $.ajax({
                   url: 'comment-update.php',
                   type: "POST",
                   data: {
                       id: commentId,
                       comment:editComment
                   },
                   success:function(data){
                       if(data==1){
                         
                          loadComments();
                       }else{
                        alert("failed");
                       }
                      
                   }
               });
          });
      });
  </script>

</body>
</html>