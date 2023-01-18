<?php 
$h_id = $_GET['id'];
$r_id = $_GET['r_id'];
// echo $r_id;
// $now = time(); // or your date as well
// $your_date = strtotime("2022-08-1");
// $your = strtotime("2022-08-4");
// $datediff = $your - $your_date;

// echo round($datediff / (60 * 60 * 24));
// die();
// echo $h_id; 
// die();
include '../../../include/config.php';

$sql = "SELECT * FROM rooms WHERE r_id = '$r_id' ";
$result = mysqli_query($conn, $sql); 
$row = mysqli_fetch_assoc($result);
// $tk = $row['price'];
// echo $tk;
// die();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Booking-Page</title>
</head>

<body class="main_bg">
    <div class="form">
    	<div class="col-md-2">
          <a class="btn btn-success" href="#" style="font-size: 26px;">Back</a><br><br>
        </div>
        <div class="form-text">
            <h1><span><img src="art-1.png" alt=""></span>Book Now <span><img src="art-1.png" alt=""></span></h1>
            <p>Wellcome to our booking pages.</p>
        </div>
        <div class="main-form"> 
            <form method="post" action="store.php?id=<?php echo $h_id;?>">  
                <div>
                    <span>Your full name ?</span>
                    <input type="text" name="name" id="name" placeholder="Write your name here..." required>
                </div>
                <div>
                    <span>Your phone number ?</span>
                    <input type="text" name="number" id="number" placeholder="Write your number here..." >
                </div>
                <div> 
                    <span>What type of room you want?</span>
                    <select name="room" id="people" required>
                        <option  style="background: black;"><?= $row['type'] ?>  </option>
                    </select>
                </div>
                <div>
                    <span>How many rooms are you want ?</span>
                    <input type="number" name="many" id="many" placeholder="Write your room number here...">
                </div>

                <div>
                    <span>What is the date of booking?</span>
                    <input type="date" name="date" id="date" placeholder="date" required>
                </div>
                <div>
                    <span>What is the date of Check out?</span>
                    <input width="150 px" type="date" name="date1" id="date" placeholder="date" required>
                </div>
                <div style="margin-left: 180px;">
                    <span style="margin-left: 135px;;">Price</span>
                    <input style="text-align: center;" type="text" name="tk" value='<?php echo $row['price'];?>' required>
                </div>
                
                <div id="submit">
                    <input type="submit" value="SUBMIT" id="submit">
                </div>


            </form>
        </div>
    </div>
</body>

</html>