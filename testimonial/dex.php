<!-- include bootstrap start -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- include bootstrap end -->
 
<!-- include font awesome -->
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
 
<!-- include slick 
<link rel="stylesheet" type="text/css" href="slick.css" />
<link rel="stylesheet" type="text/css" href="slick-theme.css" />-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"></script>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"></script>
 
<!-- include vue js -->
<!--<script src="vue.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.7.13/dist/vue.js"></script>
<?php 
         $conn = mysqli_connect('localhost', 'root','','test');
         $allTesSql = "SELECT * FROM testimonials";
         $allTesResult = mysqli_query($conn, $allTesSql);
        
 ?>
<div class="container" id="testimonialApp" style="margin-top: 30px;">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Testimonials</h2>
        </div>
    </div>
 
    <div class="row">
        <div class="col-md-12">
            <div class="items">
            <?php while($row = mysqli_fetch_assoc($allTesResult)){?>
                <div class="card" >
                    <div class="card-body">
                        <h4 class="card-title">
                            <img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png" />
                        </h4>
                       
                        <div class="template-demo">
                            <p>
                                <span > <?php echo $row['comment'];?></span>
 
                                <span class="show-more-text" v-on:click="loadMoreContent" v-bind:data-index="index">show more</span>
                            </p>
                        </div>
 
                        <h4 class="card-title">
                            <img src="https://img.icons8.com/ultraviolet/40/000000/quote-right.png" style="margin-left: auto;" />
                        </h4>
                         
                        <hr />
                         
                        <div class="row">
                            <div class="col-sm-3">
                                <img class="profile-pic" width="200px" src="./<?php echo $row['picture'];?>"/>
                            </div>
                             
                            <div class="col-sm-9">
                                <div class="profile">
                                    <h4 class="cust-name" ><?php echo $row['name'];?> </h4>
                                    <p class="cust-profession" ><?php echo $row['designation'];?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<script>
  var mainURL = window.location.origin + "/" + window.location.pathname + "/";
 
 var testimonialApp = new Vue({
     el: "#testimonialApp",
     data: {
         testimonials: []
     },
     methods: {
         loadMoreContent: function () {
             var node = event.target;
             var index = node.getAttribute("data-index");
  
             if (this.testimonials[index].comment.length > 50) {
                 // it needs to display less
                 node.innerHTML = "show more";
                 this.testimonials[index].comment = this.testimonials[index].comment_full.substr(0, 50);
             } else {
                 // it needs to display more
                 node.innerHTML = "show less";
                 this.testimonials[index].comment = this.testimonials[index].comment_full;
             }
         },
  
         getData: function () {
             // get this app instance
             var self = this;
           
             // call an AJAX to get all testimonials
             var ajax = new XMLHttpRequest();
             ajax.open("POST", "fetch.php", true);
           
             ajax.onreadystatechange = function () {
                 if (this.readyState == 4) { // response received
                     if (this.status == 200) { // response is successfull
                         // console.log(this.responseText);
           
                         // parse the response from JSON string to JS arrays and objects
                         var response = JSON.parse(this.responseText);
                         // console.log(response);
           
                         // if there is no error
                         if (response.status == "success") {
                             self.testimonials = response.data;
  
                             setTimeout(function () {
                                 $('.items').slick({
                                     dots: true,
                                     infinite: true,
                                     speed: 800,
                                     autoplay: false,
                                     slidesToShow: 2,
                                     slidesToScroll: 2,
                                     responsive: [{
                                             breakpoint: 1024,
                                             settings: {
                                                 slidesToShow: 3,
                                                 slidesToScroll: 3,
                                                 infinite: true,
                                                 dots: true
                                             }
                                         }, {
                                             breakpoint: 600,
                                             settings: {
                                                 slidesToShow: 2,
                                                 slidesToScroll: 2
                                             }
                                         }, {
                                             breakpoint: 480,
                                             settings: {
                                                 slidesToShow: 1,
                                                 slidesToScroll: 1
                                             }
                                         }
                                     ]
                                 });
                             }, 100);
                         } else {
                             // when there is any error
                         }
                     }
           
                     if (this.status == 500) {
                         console.log(this.responseText);
                     }
                 }
             };
           
             // create form data object
             var formData = new FormData();
           
             // actually sending the request
             ajax.send(formData);
         }
     },
     mounted: function () {
         this.getData();
     }
 });
 

 </script>

<style>
    .show-more-text {
        background-color: #72a4d5;
        color: white;
        padding: 3px 5px;
        border-radius: 5px;
        margin-left: 3px;
        cursor: pointer;
    }
    .more {
        display: none;
    }
 
    @media (max-width:991.98px) {
        .padding {
            padding: 1.5rem
        }
    }
 
    @media (max-width:767.98px) {
        .padding {
            padding: 1rem
        }
    }
 
    .padding {
        padding: 5rem
    }
 
    .card {
        position: relative;
        display: flex;
        width: 350px;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid #d2d2dc;
        border-radius: 11px;
        -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
        -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
        box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
    }
 
    .card .card-body {
        padding: 1rem 1rem
    }
 
    .card-body {
        flex: 1 1 auto;
        padding: 1.25rem
    }
 
    p {
        font-size: 0.875rem;
        margin-bottom: .5rem;
        line-height: 1.5rem
    }
 
    h4 {
        line-height: .2 !important
    }
 
    .profile {
        margin-top: 16px;
        margin-left: 11px
    }
 
    .profile-pic {
        width: 100px;
    }
 
    .cust-name {
        font-size: 18px
    }
 
    .cust-profession {
        font-size: 10px
    }
 
    .items {
        width: 90%;
        margin: 0px auto;
        margin-top: 30px
    }
 
    .slick-slide {
        margin: 10px;
        height: auto !important;
    }
</style>



<!-- include jquery -->
<script src="jquery-3.3.1.min.js"></>
 
<script src="slick.min.js"></script>
 
<!-- include bootstrap JS -->
<script src="bootstrap.min.js"></script>
 
<!-- your JS code -->
<script src="script.js?v=<?php echo time(); ?>"></script>

