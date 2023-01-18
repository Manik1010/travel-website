<?php 
session_start();
$page="others";
include '../include/config.php';
if(!isset($_SESSION['user_name'])){
   header('location:../../login system/login_form.php');
}
$user_id = $_SESSION['user_id'];


 $id = $_GET['id'];
 $sql = "SELECT * FROM restaurents
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
        <h1 class="text-center"> <?php echo $post['name']; ?></h1><hr>
        <img src="../../admin/<?php echo $post['image']; ?>"style = "margin-left:20%;margin-right:20%;" width="60%" height="400px;"><br><br><br>

  

      
      <div class="post-info">
        <h2><b> Top Dishes:</b></h2> 
        <div class="row">
            <div class="col-md-8">
                <h4 style="text-align: justify;line-height: 2;font-size:18px;"><?php echo nl2br($post['food_name']);?></h4>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3" style="border:1px solid black;background-color:black;color:white;padding:10px;font-size:16px;">
                 <p><img src="../../images/location.png" width="20" alt=""> <?php echo $post['location'];?></p>
                 <p><img src="../../images/phone-call.svg" width="20" alt=""> <?php echo $post['number'];?></p>
                 <a href="http://www.woondaal.com/">Visit Website</a>
            </div>
        </div>
        
     


      
      </div><br><br>
      
     
     
   
</section>

</body>
</html>