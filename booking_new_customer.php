<?php
    include("shared.php");
    echo $HTMLHeader;
    echo $header;
?>

<h2>Book an Appointment</h2>
<!--New Customer Form -->
<div id="outside">
 <form action= "booking_script.php" method="post">
  <h2> New Customer?</h2>
  <h4>Enter your information below for 20% off your first haircut!</h4>
  <br>
  * Required fields
  <br>
	Name * : <input type="text" name="name"><br/>
	Email : <input type="text" name="email"><br/>
	Phone number * : <input type="text" name="phonenumber"><br/>
  Date*: <input type="date" name="date"><br/>
  Time*: <input type="time" name="time"><br/>
  Date of birth: <input type="date" name ="DOB"><br/>

  Type of service * :
  <select name="service_type">
    <option value="haircut">Haircut</option>
    <option value="beardtrim">Beard trim</option>
    <option value="shave">Hot lather shave</option>
  </select>
  <br>
	Special Instructions :
  <br/><textarea name="specialinstructions" rows="5" cols="40"></textarea><br>
	<input type="Submit" name="SubmitThis" value="Submit">
  </form>

</div>
<br>
<img src="img/SSL_icon.png" id="SSLimage">

<?php echo $footer ?>
