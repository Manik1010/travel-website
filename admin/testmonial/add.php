<?php include'../include/all_header.php'; ?>

<!-- include bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
<!-- include vue js -->
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
 
<!-- container for vue js app -->
<div class="container" style="margin-top: 150px; margin-bottom: 50px;" id="addTestimonialApp">
    <div class="row">
        <!-- center align form -->
        <div class="offset-md-3 col-md-6">
            <h2 style="margin-bottom: 30px;">Add Testimonial</h2>
  
            <!-- form to add testimonial -->
            <form action="store.php" method="post" enctype="multipart/form-data">
 
                <!-- picture of user -->
                <div class="form-group">
                    <label>Picture</label>
                    <input type="file" name="picture" accept="image/*" class="form-control" />
                </div>
 
                <!-- name of user -->
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" />
                </div>
 
                <!-- designation of user -->
                <div class="form-group">
                    <label>Designation</label>
                    <input type="text" name="designation" class="form-control" />
                </div>
 
                <!-- comment -->
                <div class="form-group">
                    <label>Comment</label>
                    <textarea name="comment" class="form-control"></textarea>
                </div>
 
                <!-- submit button -->
                <input type="submit" name="submit" class="btn btn-info" value="Add Testimonial" />
            </form>
        </div>
    </div>


  
</div>


<script>
    // initialize vue js app
    var addTestimonialApp = new Vue({
        el: "#addTestimonialApp", // id of container div
        data: {
            // all values used in this app
            testimonials: []
        },
        // all methods
        methods: {
            // [delete method]
            // method to delete testimonial
deleteTestimonial: function () {
    // get this app instance
    var self = this;
  
    // get form
    var form = event.target;
  
    // call an AJAX to delete the testimonial
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "delete.php", true);
  
    ajax.onreadystatechange = function () {
        if (this.readyState == 4) { // response received
            if (this.status == 200) { // response is successfull
                // console.log(this.responseText);
  
                // parse the response from JSON string to JS arrays and objects
                var response = JSON.parse(this.responseText);
                console.log(response);
  
                // remove from local array if deleted from server
                if (response.status == "success") {
                    for (var a = 0; a < self.testimonials.length; a++) {
                        var testimonial = self.testimonials[a];
                        if (testimonial.id == form.id.value) {
                            self.testimonials.splice(a, 1);
                            break;
                        }
                    }
                } else {
                    // display an error message
                    alert(response.message);
                }
            }
  
            if (this.status == 500) {
                console.log(this.responseText);
            }
        }
    };
  
    // append form in form data object
    var formData = new FormData(form);
  
    // call AJAX with form data
    ajax.send(formData);
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
},
            // [other methods goes here]
 
             // called when form is submitted
            store: function () {
                // get this app instance
                var self = this;
                var form = event.target;
              
                // call an AJAX to create a new entry in testimonials
                var ajax = new XMLHttpRequest();
                ajax.open("POST", "store.php", true);
              
                ajax.onreadystatechange = function () {
                    if (this.readyState == 4) { // response received
                        if (this.status == 200) { // response is successfull
                            // console.log(this.responseText);
              
                            // parse the response from JSON string to JS arrays and objects
                            var response = JSON.parse(this.responseText);
                            // console.log(response);
 
                            alert(response.message);
              
                            // if there is no error
                            if (response.status == "success") {
                                self.testimonials.unshift(response.testimonial);
                                form.reset();
                            } else {
                                // when there is any error
                            }
                        }
              
                        if (this.status == 500) {
                            console.log(this.responseText);
                        }
                    }
                };
              
                // create form data object and form to it
                var formData = new FormData(form);
              
                // actually sending the request
                ajax.send(formData);
            },
        },
 
        // [mount code goes here]
        mounted: function () {
    this.getData();
}
    });
</script>
