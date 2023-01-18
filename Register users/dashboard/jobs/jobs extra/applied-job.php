<?php 
include'../include/all_header.php';

 ?>

    <main class="mt-5 pt-3">
      <div class="container-fluid mt-2 pt-5">
        <div class="row ">
          <div class="col-md-12">
            <h4>My Applied Jobs are:</h4>
          </div>
        </div>

        <table class="table table-bordered  w-100"style="background-color: white;" >
        <thead>
          
          <th> Post Name</th>
          <th> Salary</th>
          <th> Action</th>
        </thead>

      <?php //while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>

          <td> <?php //echo $row['jobtitle'];?> </td>
          <td> <?php //echo $row['minimumsalary'];?> - <?php //echo $row['maximumsalary'];?>tk</td>
          
          
          
          <td style="width:150px"> 
            &nbsp;
            <a href="<?php //echo $url;?>jobs/view.php?id=<?php //echo $id; ?>&jobid=<?//= $row['id_jobpost'] ?>" class="btn btn-sm btn-outline-primary" style="width: 100px;"> view </a>&nbsp;&nbsp;
            
          </td>
        </tr>
      
         <?php //} ?>
        

      </table>  
      
        
        
<?php include '../include/footer.php';?>
