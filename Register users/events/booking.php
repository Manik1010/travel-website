<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>EventBooking</title>
	<link rel="stylesheet" href="booking.css">
</head>
<body>
	<section>
		<div>
      <h1 style="text-align: center;">EVENT BOOKING</h1>
			<form action="reservation.php" method="post">
      <div class="elem-group">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="visitor_name" pattern=[A-Z\sa-z]{3,20} required>
      </div>
      <div class="elem-group">
        <label for="email">Your E-mail</label>
        <input type="email" id="email" name="visitor_email"  required>
      </div>
      <div class="elem-group">
        <label for="email">Event Name</label>
        <input type="email" id="email" name="visitor_email" placeholder="SUNDARBANS Trip With TGB
"  required>
      </div>
      <div class="elem-group">
        <label for="phone">Your Phone</label>
        <input type="tel" id="phone" name="visitor_phone" required>
      </div>
      <hr>
      <div class="elem-group inlined">
        <label for="adult">Adults</label>
        <input type="number" id="adult" name="total_adults"  min="1" required>
      </div>
      <div class="elem-group inlined">
        <label for="child">Children</label>
        <input type="number" id="child" name="total_children" min="0" required>
      </div>
  <button type="submit" style="margin-left: 190px;">BookNow</button>
</form>
		</div>
	</section>
</body>
</html>
<script>
var currentDateTime = new Date();
var year = currentDateTime.getFullYear();
var month = (currentDateTime.getMonth() + 1);
var date = (currentDateTime.getDate() + 1);

if(date < 10) {
  date = '0' + date;
}
if(month < 10) {
  month = '0' + month;
}

var dateTomorrow = year + "-" + month + "-" + date;
var checkinElem = document.querySelector("#checkin-date");
var checkoutElem = document.querySelector("#checkout-date");

checkinElem.setAttribute("min", dateTomorrow);

checkinElem.onchange = function () {
    checkoutElem.setAttribute("min", this.value);
}
</script>