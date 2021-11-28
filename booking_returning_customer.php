<?php
    include("shared.php");
    echo $HTMLHeader;
    echo $header;
?>

<h2>Book an Appointment</h2>
<!--New Customer Form -->
<div id="outside">
  <!-- Returning customer form >>
  Will need its own php script, not booking_script.php
  -->

   <form action= "returning_customer_script.php" method="post">

    <h2>Returning Customers</h2>
    <br>
    <h3><i>We remember you! Just enter your phone number and the date, time and service requested. We'll take care of the rest.</i></h3>
    <br>
    * Required fields
    <br>

  	Phone number * : <input type="text" name="phonenumber"><br/>
    Date*: <input type="date" name="date"><br/>
    Time*: <input type="time" name="time"><br/>
    Type of service * :
    <select name="service_type">
      <option value="haircut">Haircut</option>
      <option value="beardtrim">Beard trim</option>
      <option value="shave">Hot lather shave</option>
      <option value="usual">The usual</option>
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
