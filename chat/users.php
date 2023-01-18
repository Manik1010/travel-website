<?php 
  session_start();
  // include_once "php/config.php";
  // if(!isset($_SESSION['id'])){
  //   header("location: login.php"); 
  // }
  $conn = mysqli_connect('localhost','root','','travel website');
?>

<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 

            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $pass = md5($_POST['password']);
   

            $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

            $result = mysqli_query($cnn, $select);

            $row = mysqli_fetch_array($result);

            if($row['user_type'] == 'admin'){
 
               $_SESSION['admin_name'] = $row['name'];
               header('location:../admin/index.php');

            }elseif($row['user_type'] == 'user'){

             $_SESSION['user_name'] = $row['name'];
             $_SESSION['user_id'] = $row['id'];
             $_SESSION['tem_user_id'] = $row['id'];
             header('location:../Register users/user_page.php');

            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list"> 
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
