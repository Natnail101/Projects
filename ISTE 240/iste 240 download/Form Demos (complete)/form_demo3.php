<?php
//Initialize the variables
$error = '';
$name = '';
$email = '';
$subject = '';
$message = '';

//helper function to scrub incoming data
function clean_text($string) {
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}

if(isset($_POST["submit"])) {
	// Check to make sure text has been entered...
	if(empty($_POST["name"])) {
		$error .= '<div class="text-danger">Please Enter your Name</div>';
	} else {
		// Scrub the text input...
		$name = clean_text($_POST["name"]);

		// Check the text input against a regular expression...
		if(!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$error .= '<div class="text-danger">Only letters and white space allowed</div>';
		}
	}

	if(empty($_POST["email"])) {
		$error .= '<div class="text-danger">Please Enter your Email</div>';
	} else {
		$email = clean_text($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$error .= '<div class="text-danger">Invalid email format</div>';
		}
	}

	if(empty($_POST["subject"])) {
		$error .= '<div class="text-danger">Subject is required</div>';
	} else {
		$subject = clean_text($_POST["subject"]);
	}

	if(empty($_POST["message"])) {
		$error .= '<div class="text-danger">Message is required</div>';
	} else {
		$message = clean_text($_POST["message"]);
	}

	if($error == '') {

		$form_data = array(
			'name' => $name,
			'email' => $email,
			'subject' => $subject,
			'message' => $message
		);

		$file_open = fopen("data2.csv", "a");
		fputcsv($file_open, $form_data);
		$error = '<div class="text-success">Thank you for contacting us!</div>';
		$name = '';
		$email = '';
		$subject = '';
		$message = '';				
		fclose($file_open);
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Demo 3</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-3">

<h1>Form Demo v3: Styled with Bootstrap</h1>

<form method="post" action="">

	<?php echo $error; ?>

	<div class="mb-3">
		<label for="name" class="form-label">Enter Name: </label>
		<input class="form-control" type="text" name="name" id="name" value="<?php echo $name; ?>">
	</div>
	<div class="mb-3">
		<label for="email" class="form-label">Enter Email: </label>
		<input class="form-control" type="text" name="email" id="email" value="<?php echo $email; ?>">
	</div>
	<div class="mb-3">
		<label for="subject" class="form-label">Enter Subject: </label>
		<input class="form-control" type="text" name="subject" id="subject" value="<?php echo $subject; ?>">
	</div>
	<div class="mb-3">
		<label for="message" class="form-label">Enter Message</label>
		<textarea class="form-control" name="message" id="message"><?php echo $message; ?></textarea>
	</div>

	<input type="submit" name="submit" class="btn btn-primary">
</form>


</body>
</html>