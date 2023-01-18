<?php 
 $url = 'http://localhost/travel%20website/Register%20users/';
 include '../include/config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

 $sql = "SELECT * FROM user_form where status=0 ";
 $result = mysqli_query($conn, $sql);



include 'include/header.php';
 ?>

    <main class=" pt-3">
      <div class="container-fluid mt-5 bg-light pt-5">
         <div class="row ">
            <div class="col-md-12">
               <h4>All approval requests</h4>
            </div>
         </div>
         <div class="row ">
            <table class=" m-3 table table-striped table-bordered"> 
               <thead>
                  <tr>
                      <th>User Name</th>
                      <th>Email</th>
                      <th>User Type</th>
                      
                      <th>Action</th>
                  </tr>
                  
               </thead>
               <tbody>
                  <?php while($row=mysqli_fetch_assoc($result)){
                         ?>
                   <tr>
                    
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['user_type']; ?></td>
                      
                      <td width="310">
                        
                       
                            <a href="account_approve.php?id=<?php echo $row['id']; ?>"class=" btn btn-sm btn-outline-info" onclick="return confirm('Are you sure? Would you like to  block this user!')">approve</a>

                            <a href="account_disapprove.php?id=<?php echo $row['id']; ?>"class=" btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure? Want to unblock this user!')">disapprove</a>
                      </td>
                   </tr>
                   <?php } ?>
               </tbody>
            </table>
         </div>
      </div>
    </main>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
 
</html>
