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
  	$required = array('title', 'author','comment','city');
  	$expected = array('title', 'author','comment','tag', 'city','backgroundColor','email');
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
  		// empty($missing) is true --> no missing field, proceed with business processes (in this example, display all user input.)

  		// deal with array input, ex. $tag
  		$tagStr = implode(", ", $tag);

  		// print_r ($tag); // enable this line will print the $tag array, so you can see what's been stored in the $tag array.  It may help you to debug.

  		// process author name and email
  		if (!empty($email)) {
  			$author = "<a href='mailto:$email'>$author</a>";
  		}

  		$output = "
  		<table style='background-color: $backgroundColor; border: 1px solid black; text-align:left;'>
  		<th>Your Message</th>
  				<tr style='border: 1px solid black;'><th>Author:</th> <td style='border: 1px solid black;'>$author</td> </tr>
  				<tr style='border: 1px solid black;'><th>Title:</th> <td style='border: 1px solid black;'>$title</td> </tr>
  				<tr style='border: 1px solid black;'><th>Tag:</th> <td style='border: 1px solid black;'>$tagStr</td> </tr>
  				<tr style='border: 1px solid black;'><th>Comment:</th> <br><td style='border: 1px solid black;'>$comment</td> </tr>
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
  	$output = "Please post your message using <a href='post_form_3.php'>this form</a>.";
  }



?>



<?php echo $footer ?>