<?php
    include("shared.php");
    echo $HTMLHeader;
    echo $header;
?>

<h2>Book an Appointment</h2>
<!--New Customer Form -->
<div id="outside">
 <form class="single-column-container" action= "booking_script.php" method="post">
  <h2> New Customer?</h2>
  <h4>Enter your information below for 20% off your first haircut!</h4>
  <p>* Required fields</p>
  <br>
	<label for="name">First and Last Name *</label><input type="text" name="name" placeholder = "Dak Prescott"><br/>
	<label for="email">Email *</label><input type="text" name="email" placeholder="name@email.com"><br/>
	<label for="phone-number">Phone number *</label> : <input type="text" name="phonenumber" placeholder="123-456-7890"><br/>
  <label for="date">Date *</label> <input type="date" name="date"><br/>
  <label for="time">Time *</label> <input type="time" name="time"><br/>
  <label for="date of birth">Date of birth *</label><input type="date" name ="DOB"><br/>

  <label for="type of service">Type of service *</label>
  <select name="service_type">
    <option value="haircut">Haircut</option>
    <option value="beardtrim">Beard trim</option>
    <option value="shave">Hot lather shave</option>
  </select>
  <br>
  <label for="special instructions">Special Instructions</label>
  <br/><textarea name="specialinstructions" placeholder = "Start typing....."rows="5" cols="40"></textarea><br>
  <label for="donate five dollars to mansfield food bank?">(Optional) - Check the box below to donate $5 to the Mansfield Food Bank, and we'll match your donation!</label>
  <input type="checkbox" name="donate" value="donate">
	<input type="Submit" name="SubmitThis" value="Submit">
  </form>

</div>
<br>
<img src="img/SSL_icon.png" id="SSLimage">

<?php echo $footer ?>
