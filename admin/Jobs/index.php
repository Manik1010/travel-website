<title>Jobs</title>
<?php 
  include('../include/config.php');

  $sql = "SELECT *
          FROM job_post
          ORDER BY id_jobpost DESC";
  $result = mysqli_query($conn,$sql);
  include'../include/all_header.php';
   
?>
<main class="mt-5 pt-3">
      <div class="container-fluid mt-5  pt-2">
 <!-- Main Content--->
 <a style="float:right;"class="btn btn-info"href="create-post.php">post-job</a><br>
<table class="table table-bordered  w-100"style="background-color: white;" >
        <thead>
          
          <th> Post Name</th>
          <th> Salary</th>
          <th> Qualification</th>
          <th> Action</th>
        </thead>

      <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>

          <td> <?php echo $row['jobtitle'];?> </td>
          <td> <?php echo $row['minimumsalary'];?> - <?php echo $row['maximumsalary'];?>tk</td>
          
          <td><?php echo $row['qualification'];?> </td>
          
          <td > 
            &nbsp;
            <a href="<?php echo $url;?>jobs/view.php?id=<?= $row['id_jobpost'] ?>" class="btn btn-sm btn-outline-dark" > view </a>
             
             <a href="<?php echo $url;?>jobs/delete.php?id=<?= $row['id_jobpost'] ?>" class="btn btn-sm btn-outline-danger"  onclick="return confirm('Are you sure?')"> delete </a>
            
          </td>
        </tr>
      
         <?php } ?>
        

      </table>  
      
<?php
  include'../include/footer.php';
?>