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

   <form class="single-column-container" action= "returning_customer_script.php" method="post">

    <h2>Returning Customers</h2>
    <br>
    <h3><i>We remember you! Just enter your email, the date, the time and service requested. We'll take care of the rest.</i></h3>
    <br>
    <label for="required fields">* Required fields</label>
    <br>
    <!-- Eventually, pre-fill this form via cookie to remember this for future appointments -->
  	<label for="email">Email*</label><input type="text" name="email" placeholder ="name@email.com"><br/>
    <label for="date">Date*</label><input type="date" name="date"><br/>
    <label for="time">Time*</label><input type="time" name="time"><br/>
    <label for="type of service">Type of service *</label>
    <select name="service_type">
      <option value="haircut">Haircut</option>
      <option value="beardtrim">Beard trim</option>
      <option value="shave">Hot lather shave</option>
      <option value="usual">The usual</option>
    </select>
    <br>
    <label for="special instructions">Special Instructions</label>
    <br/><textarea name="specialinstructions" placeholder="Start typing..." rows="5" cols="40"></textarea><br>
  	<input type="Submit" name="SubmitThis" value="Submit">
    </form>
</div>
<br>
<img src="img/SSL_icon.png" id="SSLimage">

<?php echo $footer ?>
