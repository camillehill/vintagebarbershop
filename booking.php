<?php
    include("shared.php");
    echo $HTMLHeader;
    echo $header;
?>

<h1>Book an Appointment</h1>
<!--New Customer Form -->
* Required fields
 <form action= "booking_script.php" method="post">
  <h2> New Customer? Enter your information below for 20% your first haircut!</h2>
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

  <!-- Returning customer form >>
  Will need its own php script, not booking_script.php
  -->
  * Required fields
   <form action= "new_customer_script.php" method="post">
    <h2> Returning Customers</h2>

  	Phone number * : <input type="text" name="phonenumber"><br/>
    Date*: <input type="date" name="date"><br/>
    Time*: <input type="time" name="time"><br/>
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



<?php echo $footer ?>
