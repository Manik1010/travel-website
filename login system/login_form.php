<?php

@include 'config.php';

session_start();


if(isset($_POST['submit'])){

   
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' && status= 1 ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['user_type'] = $row['user_type'];
         header('location:../admin/index.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_id'] = $row['id'];
         $_SESSION['tem_user_id'] = $row['id'];
         $_SESSION['b_status'] = $row['b_status'];
         header('location:../Register users/user_page.php');

      }elseif($row['user_type'] == 'event manager'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_id'] = $row['id'];
         header('location:../admin/event/index.php');

      }elseif($row['user_type'] == 'hotel manager'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_id'] = $row['id'];
         header('location:../admin/hotels/index.php');

      }elseif($row['user_type'] == 'hotel manager'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_id'] = $row['id'];
         header('location:../admin/hotels/index.php');

      }elseif($row['user_type'] == 'oficer'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_id'] = $row['id'];
         header('location:../admin/job_officer/dashboard.php');

      }elseif($row['user_type'] == 'car rant'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_id'] = $row['id'];
         header('location:../admin/car rant/index.php');

      }
     elseif($row['user_type'] == 'shop manager'){

         $_SESSION['manager_name'] = $row['name'];
         $_SESSION['user_id'] = $row['id'];
         $_SESSION['user_type'] = $row['user_type'];
         header('location:../admin/shop manager/index.php');

      }
     
   }else{
      if($row['status']==0){
         $error[] = 'wait for admin approval';
      }
      else{
         $error[] = 'incorrect email or password!';
      }
      
   }

};
include '../include/header.php';
?>



<section class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</section>

</body>
</html>