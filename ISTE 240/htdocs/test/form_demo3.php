<?php 

// initialize the variables

$error = " ";
$name = " ";
$email = " ";
$subject = " ";
$message = " ";


// isset($_GET["submit"]) ? writeData() : NULL;

// function writeData() {
// 	$text1 = $_GET["text1"];
// 	$text2= $_GET["text2"];

// 	$form_data = array(
// 		'text1' => $text1,
// 		'text2' => $text2
// 	);

// 	$file_open = fopen("data.csv", "a");
// 	fputcsv($file_open, $form_data);
// 	fclose($file_open);
// }
// helper the function to scrub the incoming data
function clean_text($string){   
    $string = trim($string);
    $string = stripcslashes($string);
    $string = htmlspecialchars($string);

    return $string;

}
if (isset($_POST["submit"])){
    // Check to make sure text has been entered...
	if(empty($_POST["name"])) {
		$error .= '<div>Please Enter your Name</div>';
    } 
    else {
		// Scrub the text input...
		$name = clean_text($_POST["name"]);

		// Check the text input against a regular expression...
		if(!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$error .= '<div>Only letters and white space allowed</div>';
		}
	}
    
    if(empty($_POST["email"])) {
		$error .= '<div>Please Enter your Email</div>';
	} else {
		$email = clean_text($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$error .= '<div>Invalid email format</div>';
		}
    }
    
    if(empty($_POST["subject"])) {
		$error .= '<div>Subject is required</div>';
	} else {
		$subject = clean_text($_POST["subject"]);
	}

    if(empty($_POST["message"])) {
		$error .= '<div>Message is required</div>';
	} else {
		$message = clean_text($_POST["message"]);
    }
    
    if ($error == '') {

        $form_data = array(
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message
        );
    
        $file_open = fopen("data2.csv", "a");
        fputcsv($file_open, $form_data);
        $error = " <div>Thank you for contacting us</div>";
        $name = " ";
        $email = " ";
        $subject = " ";
        $message = " ";
        fclose($file_open);
        
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
	<title>Form Demo 1</title>
</head>
<body>

<form method="post" action="">

<?php echo $error; ?>

	<div>
		<label for="name">Enter Name: </label>
		<input type="text" name="name" id="name" value="<?php echo $name; ?>">
	</div>
	<div>
		<label for="email">Enter Email: </label>
		<input type="text" name="email" id="email" value="<?php echo $email; ?>">
	</div>
	<div>
		<label for="subject">Enter Subject: </label>
		<input type="text" name="subject" id="subject" value="<?php echo?>">
	</div>
	<div>
		<label for="message">Enter Message</label>
		<textarea name="message" id="message"><?php echo $message; ?></textarea>
	</div>

	<input type="submit" name="submit">
</form>


</body>
</html>