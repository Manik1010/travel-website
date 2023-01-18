<?php
    include '../include/config.php';
    // die();
    // connect with database
    $conn = mysqli_connect('localhost','root','','travel website');
 
    // fetch all FAQs from database
    $sql = "SELECT * FROM faqs";
    $statement = mysqli_query($conn,$sql);
    
    
   
?>

<!-- include CSS -->
<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css" />
 
<!-- include JS -->
<!--<script src="js/jquery-3.3.1.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!--<script src="js/bootstrap.js"></script>-->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php include'../include/register_header.php';?>
<h1 style="margin-top: 20px; margin-left: 600px; ">Frequently Asked Questions for Tour Koro</h1>
<!-- show all FAQs in a panel -->
<div class="container" style="margin-top:-100px; margin-bottom: 50px;">

    <div class="row">
        <div class="col-md-12 accordion_one">
            <div class="panel-group">
                <?php while ($faq=mysqli_fetch_assoc($statement)){?>
                    <div class="panel panel-default">
 
                        <!-- button to show the question -->
                        <div class="panel-heading" style="font-size: 30px;">
                            <h4 class="panel-title">
                                <b><a data-toggle="collapse" data-parent="#accordion_oneLeft" href="#faq-<?php echo $faq['id']; ?>" aria-expanded="false" class="collapsed">
                                    <?php echo $faq['question']; ?>
                                </a></b>
                            </h4>
                        </div>
 
                        <!-- accordion for answer -->
                        <div id="faq-<?php echo $faq['id']; ?>" class="panel-collapse collapse" aria-expanded="false" role="tablist" style="height: 0px;">
                            <div class="panel-body" style="font-size: 16px;">
                                <div class="text-accordion">
                                    <?php echo $faq['answer']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }  ?>
            </div>
        </div>
    </div>
</div>



<style>
    .accordion_one .panel-group {
    border: 1px solid #f1f1f1;
    margin-top: 100px
}
a:link {
    text-decoration: none
}
.accordion_one .panel {
    background-color: transparent;
    box-shadow: none;
    border-bottom: 0px solid transparent;
    border-radius: 0;
    margin: 0
}
.accordion_one .panel-default {
    border: 0
}
.accordion-wrap .panel-heading {
    padding: 0px;
    border-radius: 0px
}
h4 {
    font-size: 18px;
    line-height: 24px
}
.accordion_one .panel .panel-heading a.collapsed {
    color: #999999;
    display: block;
    padding: 12px 30px;
    border-top: 0px
}
.accordion_one .panel .panel-heading a {
    display: block;
    padding: 12px 30px;
    background: #fff;
    color: #313131;
    border-bottom: 1px solid #f1f1f1
}
.accordion-wrap .panel .panel-heading a {
    font-size: 14px
}
.accordion_one .panel-group .panel-heading+.panel-collapse>.panel-body {
    border-top: 0;
    padding-top: 0;
    padding: 25px 30px 30px 35px;
    background: #fff;
    color: #999999
}
.img-accordion {
    width: 81px;
    float: left;
    margin-right: 15px;
    display: block
}
.accordion_one .panel .panel-heading a.collapsed:after {
    content: "\2b";
    color: #999999;
    background: #f1f1f1
}
.accordion_one .panel .panel-heading a:after,
.accordion_one .panel .panel-heading a.collapsed:after {
    font-family: 'FontAwesome';
    font-size: 15px;
    width: 36px;
    line-height: 48px;
    text-align: center;
    background: #F1F1F1;
    float: left;
    margin-left: -31px;
    margin-top: -12px;
    margin-right: 15px
}
.accordion_one .panel .panel-heading a:after {
    content: "\2212"
}
.accordion_one .panel .panel-heading a:after,
.accordion_one .panel .panel-heading a.collapsed:after {
    font-family: 'FontAwesome';
    font-size: 15px;
    width: 36px;
    height: 48px;
    line-height: 48px;
    text-align: center;
    background: #F1F1F1;
    float: left;
    margin-left: -31px;
    margin-top: -12px;
    margin-right: 15px
}
    </style>