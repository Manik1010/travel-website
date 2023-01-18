<?php

//To Handle Session Variables on This Page
session_start();


//Including Database Connection From db.php file to avoid rewriting in all files
include '../../include/config.php';
?>
<!DOCTYPE html>
<html lang="en">
W
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Job Portal</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 
</head>

<body>

    <!-- NAVIGATION BAR -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../index.php">Job Portal</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../logout.php">Logout</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="list-group">
                    <a href="dashboard.php" class="list-group-item active">Dashboard</a>
                    <a href="user.php" class="list-group-item">Users</a>
                    <a href="company.php" class="list-group-item">Alumni</a>
                    <a href="job-posts.php" class="list-group-item">Job Posts</a>
                </div>
            </div>
            <div class="col-md-6">
                <?php
          $sql = "SELECT * FROM company WHERE active='2'";
          $result = $conn->query($sql);
          if($result->num_rows > 0) {
            echo '<h3>Total Pending Accounts: ' . $result->num_rows . '</h3>'; 
          }
        ?>
                <table class="table">
                    <thead>
                        <th>SNo</th>
                        <th>Alumni Name</th>
                        <th>Head Office</th>
                        <th>Contact Number</th>
                        <th>Alumni Type</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php
                $sql = "SELECT * FROM company WHERE active='2'";
                $result = $conn->query($sql);
                if($result->num_rows > 0) {
                  $i = 0;
                  while($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo ++$i; ?></td>
                            <td><?php echo $row['companyname']; ?></td>
                            <td><?php echo $row['headofficecity']; ?></td>
                            <td><?php echo $row['contactno']; ?></td>
                            <td><?php echo $row['companytype']; ?></td>
                            <td><a href="reject-company.php?id=<?php echo $row['id_company']; ?>">Reject</a> <a
                                    href="approve-company.php?id=<?php echo $row['id_company']; ?>">Approve</a></td>
                        </tr>
                        <?php
                  }
                }
              ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>

</body>

</html>