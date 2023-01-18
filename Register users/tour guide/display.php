<?php 
session_start();
$page="others";
include '../include/config.php';
if(!isset($_SESSION['user_name'])){
   header('location:../../login system/login_form.php');
}
$user_id = $_SESSION['user_id'];


 $id = $_GET['id'];

 $sql = "SELECT * FROM tour_guide
         where id = $id";
 $result = mysqli_query($conn, $sql);
 $post   = mysqli_fetch_assoc($result);
 
 
;
// fetch all posts from database
// return them as an associative array called $posts

include'../include/register_header.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Restaurent-details</title>
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
        <img src="../../admin/<?php echo $post['image']; ?>"style = "margin-left:20%;margin-right:20%;" width="60%" height="400px;"><br><br><br>

  

      
      <div class="post-info">
        <h2><b> Tour Guide:</b></h2> 
        <div class="row">
           
                <h4 style="text-align: justify;line-height: 2;font-size:18px;"><?php echo nl2br($post['description']);?></h4>
          
           
        </div>
        
     


      
      </div><br><br>
      
     
     
   
</section>

</body>
</html>