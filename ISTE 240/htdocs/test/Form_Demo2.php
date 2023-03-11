
Form Demo Code Snippets.txt
***************************

For Form Demo #2...
---------------------------
Process the NAME
---------------------------
	// Check to make sure text has been entered...
	if(empty($_POST["name"])) {
		$error .= '<div>Please Enter your Name</div>';
	} else {
		// Scrub the text input...
		$name = clean_text($_POST["name"]);

		// Check the text input against a regular expression...
		if(!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$error .= '<div>Only letters and white space allowed</div>';
		}
	}


---------------------------
Process the EMAIL
---------------------------
	if(empty($_POST["email"])) {
		$error .= '<div>Please Enter your Email</div>';
	} else {
		$email = clean_text($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$error .= '<div>Invalid email format</div>';
		}
	}


---------------------------
Process the SUBJECT
---------------------------
	if(empty($_POST["subject"])) {
		$error .= '<div>Subject is required</div>';
	} else {
		$subject = clean_text($_POST["subject"]);
	}


---------------------------
Process the MESSAGE
---------------------------
	if(empty($_POST["message"])) {
		$error .= '<div>Message is required</div>';
	} else {
		$message = clean_text($_POST["message"]);
	}


***************************

For Form Demo #3...
---------------------------
Link to Bootstrap CSS
---------------------------
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">