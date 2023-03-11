

<?php
	// NOTICE: this part of this HTML document is just one PHP tag
	//  This script doesn't output anything to the user's browser
	//  so there is no DOCTYPE or any of the usual HTML things
	//  in this part

	// **********************************
	// SECTION ONE: set all the variables
	// **********************************

	// set some variables
	$emailFrom = "rkostin@gmail.com"; // use YOUR email for both lines 12 and 13
	$emailTo = "rkostin@gmail.com";
	$subject = "Lab 12 - HTML Forms";

	// for the following lines of code, grab the data being passed 
	//   from the method="post" in the HTML form and hold it in a variable

	// the words inside each $_POST[] must match a name="" attribute from the 
	//   HTML form EXACTLY...

	// these are from the text INPUT fields...
	$name = Trim(stripslashes($_POST['name'])); 
	$email = Trim(stripslashes($_POST['email'])); 
	$phone = Trim(stripslashes($_POST['phone'])); 
	// ...used more input fields? Then copy these lines (above)
	//   and make more

	// these are from the INPUT type="checkbox" fields...
	$articulateCheck = $_POST['articulateCheck']; 
	$smartCheck = $_POST['smartCheck']; 
	$politicsCheck = $_POST['politicsCheck']; 
	$lookerCheck = $_POST['lookerCheck']; 
	// ...used more checkboxes? Then copy these lines (above)
	//   and make more

	// this is from all the INPUT type="radio" fields...
	$favoriteSelect = $_POST['favoriteSelect']; 
	// notice: no matter how many radio buttons, there's only one answer

	// this is from the TEXTAREA field...
	$howfell = Trim(stripslashes($_POST['howfell'])); 

	// **********************************
	// SECTION TWO: build the email body
	// **********************************

	$body = ""; // initialize the variable, then start concatenating
				// backslash-n means new-line in emails

	$body .= "Name:\n";	//...a label
	$body .= $name;			//...a variable
	$body .= "\n\n";		//...a new line

	$body .= "Email:\n";	//...a label
	$body .= $email;		//...a variable
	$body .= "\n\n";		//...a new line

	$body .= "Telephone:\n";//...a label
	$body .= $phone;		//...a variable
	$body .= "\n\n";		//...a new line
	// ...used more input fields? Then copy these lines (above)
	//   and make more

	// Do your checkboxes this way...
	$body .= "What things do you like about Shakespeare?: \n";	// a heading for your checkbox section

	if (isset($articulateCheck)) {			// a checkbox variable
		$body .= $articulateCheck . "\n";	// the same checkbox variable
	}
	if (isset($smartCheck)) {				// a checkbox variable
		$body .= $smartCheck . "\n";		// the same checkbox variable
	}
	if (isset($politicsCheck)) {			// a checkbox variable
		$body .= $politicsCheck . "\n";		// the same checkbox variable
	}
	if (isset($lookerCheck)) {				// a checkbox variable
		$body .= $lookerCheck . "\n";		// the same checkbox variable
	}
	$body .= "\n";
	// ...used more checkbox fields? Then copy these lines (above)
	//   and make more

	// This is for your radio buttons (always just one answer)...
	$body .= "What is your favorite Shakespeare Play?: \n";	// a heading for your radio button section
	$body .= $favoriteSelect;				// the (one) radio button variable
	$body .= "\n\n";

	// This is for your TEXTAREA
	$body .= "Tell us how you fell in love with Shakespeare: \n";	// a heading for your text area
	$body .= $howfell;						// the variable for your text area
	$body .= "\n";

	// **********************************
	// SECTION THREE: send the email
	// **********************************
	// You won't need to edit anything here...

	// send email 
	mail($emailTo, $subject, $body, "From: <$emailFrom>");


	//end the PHP block here...
?>
<!-- **********************************
	 SECTION FOUR: thank the user in HTML;
	 Below, there needs to be an HTML 
	 webpage with a customized message 
	 for the user
	 ********************************** -->
<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Thank You | Shakespeare</title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/navigation.css">
</head>

<body>
<div class="container">

	<header>
		<h1>William Shakespeare</h1>
		<div class="subtitle">That guy who wrote things</div>
	</header>

<?php include "inc/nav.php"; ?>

	<main class="full-width">

		<h2>Thank You <?php echo $name; ?></h2>

		<p>Now away with thee!  <a href="contact.php">Back to the contact page</a>.</p>

	</main>

</div><!-- .container -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="js/menu-highlighter.js"></script>
</body>
</html>