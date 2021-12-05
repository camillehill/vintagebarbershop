<?php
    include("shared.php");
    echo $HTMLHeader;
    echo $header;
?>
<!-- We just need to modify the code below so that it works with our form from the booking.php file -->
<?php
  if (array_key_exists("SubmitThis", $_POST)) {

  	// data validation
  	//  - check required fields

  	//== Modify the required and expected arrays below to fit your form ========
  	$required = array('name','phonenumber','service_type','date','time','email');
  	$expected = array('name', 'phonenumber','email','service_type','specialinstructions','date','time','DOB');
  	$missing = array();

  	// use foreach loop to run through each item in the expected array
  	foreach($expected as $thisField) {
  		// setup a variable to store user input for this field name
  		$thisUserInput = $_POST[$thisField];

  		// check if this field is a required field
  		if (in_array($thisField, $required)) {
  			// check if user input of this field is empty, if yes, add this field to the missing array
  			if (empty($thisUserInput)) {
  				array_push($missing, $thisField);
  			} else {
  				// set up a variable to store the user input for this field
  				/*
  					Say $thisField contains "title", then this line
  						${$thisField} = $thisUserInput;
  					will effectively turn to
  						$title = $thisUserInput;
  					In this example, after the foreach loop, we will then have the following variables: $title, $author, $comment, and $tag, all set up and that's why we can use them to compose the $output below (line 66).

  					Also note that the names of these new variables match the form field names recorded in the $expected array.
  				*/
  				${$thisField} = $thisUserInput;
  			}
  		} else {
  			${$thisField} = $thisUserInput;
  		}
  	}


  	// after running through all expected fields, check the $missing array. if there is no required field missing, the $missing array will be empty.
  	if (empty($missing)){
  		// empty($missing) is true; user entered required information. Now we want to send them a confirmation email and show a confirmation page on the browser)
      $to="$email";
      $subject="Your Appointment with Vintage Barbershop";
      $header ="From: darin.hardin@mavs.uta.edu."."\r\n";
      $header.="MIME-Version: 1.0\r\n";
      $header.="Content-Type: text/html; charset=ISO-8859-1\r\n";
      $message="
        <html>
         <body style='border: 2px dotted black;'>
           <h1>Thanks for booking an appointment with <a href='https://ctec4309.dwh7624.uta.cloud/Current%20Assignment/Project%20Draft%2011-16/index.php'>Vintage Barbershop</a>!</h1>
           <br>
           <div style='border: 2px dotted white;'>
           <h2>Details for your appointment:</h2>
           <br>
           <h3>Date: $date</h3>
           <br>
           <h3>Time: $time</h3>
           <br>
           <h3>Service requested: $service_type </h3>
           <br>
           <h3>Special Instructions:$specialinstructions</h3>
           <br>
           <h3>Show this discount code to your barber for 20% off your first order: FH36-FBHG-S7H7A</h3>
           <br>
           <h3>Need directions? Here's our address :</h3>
           <br>
           <p><a href='https://goo.gl/maps/XBSW6icQNw2idMVR8'>26 E Debbie Ln #104, Mansfield, TX 76063</a><p>
           <br>

           <strong>See you soon! If you need to cancel or reschedule an appointment, please call us at 817-123-1234</strong>
           <br>
           <p style='color:black'>Holly, Penni, Sean, Kendra and Nick</p>
           </div>
          </body>
        </html>
         ";

      $mailSent = mail($to,$subject,$message,$header);

      if ($mailSent) {

         $emailResultMessage =  "<p>The web site admin team has been notified about your comment submission.  .... Thank you. We will ...";

      } else {
         $emailResultMessage = "<p>Something went wrong with our email system.  We are not able to send the email notification to our Web admin team regarding your comment submission.  Please try again or call 817-123-1234 to set up an appointment. ";
      }

      //Creating confirmation page and storing it in a string
  		$output = "
    		<table class='single-column-container' style='border: 1px solid black; text-align:left;'>
    		<th class='booking'>Thanks, $name! We'll see you on $date at $time.</th>
        <br>
        <br>
        <br>
        <tr><th>Show this confirmation at checkout for 20% off!</th></tr>
    				<tr><th>Date:</th><td>$date</td> </tr>
    				<tr><th>Time:</th><td>$time</td> </tr>
    				<tr><th>Service:</th><td>$service_type</td> </tr>
    				<tr><th>Special Instructions:</th><br><td>$specialinstructions</td> </tr>
    		</table>
    				";

  	} else {
  		// empty($missing) is false --> $missing array is not empty -- prepare a message for the user

  		$missingFieldList = implode(", ",$missing);
  		$output = "The following fields are missing from your post, please go back and fill them in.  Thank you. <br>
  						<b>Missing fields: $missingFieldList </b>
  					";

  	}


  } else {
  	$output = "Please book an appointment using <a href='booking_script.php'>this form</a>.";
  }


echo $output;
?>



<?php echo $footer ?>
