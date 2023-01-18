<?php 

session_start();
$user_id = $_SESSION['user_id'];
echo $user_id;
include('include/header.php'); 
include('include/nab.php');
include '../include/config.php';
$sql = "SELECT * FROM user_form WHERE user_type ='hotel manager' ";
$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);
// $name = $row['name'];
// echo $name;
// die();
?>

            <!-- Widget Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-6">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">All Hotel Managres</h6>
                                <h6>Addres</h6>
                            </div>
                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <div class="d-flex align-items-center border-bottom py-3">
                                
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0"><?= $row['name'] ?></h6>
                                        <small><?= $row['addres'] ?></small>
                                    </div>
                                    <span><?= $row['email'] ?></span>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Testimonial</h6>
                            <?php while ($row1 = mysqli_fetch_assoc($result1)) { ?>
                            <div class="owl-carousel testimonial-carousel">
                                <div class="testimonial-item text-center">
                                    <img class="img-fluid rounded-circle mx-auto mb-4" src="img/user.jpg" style="width: 100px; height: 100px;">
                                    <h5 class="mb-1"><?= $row1['name'] ?></h5>
                                    <p>Manager</p>
                                    <p class="mb-0">Father Name : <?= $row1['fatherName'] ?></p>
                                    <p class="mb-0">Mother Name : <?= $row1['motherName'] ?></p>
                                    <p class="mb-0">Contact Number : <?= $row1['number'] ?></p>
                                </div>
                                <div class="testimonial-item text-center">
                                    <img class="img-fluid rounded-circle mx-auto mb-4" src="img/testimonial-2.jpg" style="width: 100px; height: 100px;">
                                    <h5 class="mb-1">Client Name</h5>
                                    <p>Profession</p>
                                    <p class="mb-0">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widget End -->

<?php
include('include/footer.php');
?>