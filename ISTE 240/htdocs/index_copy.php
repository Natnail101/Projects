<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Simple PHP Demo</title>
</head>
<body>
	<h1>Simple PHP Demo</h1>

<p>
<?php
	// Set the timezone or PHP will assume UTC
	date_default_timezone_set('US/Eastern');

	// String literal...
	echo "It is ";
	echo date('h:i:s A');
	
	echo " on ";
	echo date('l');
	
	echo " the ";
	echo date('jS \of F\, Y');

	// Concatenation in PHP uses a "." (dot)
	echo " (" . date_default_timezone_get() . ")";
?>
</p>

<!-- Notice that PHP can be interwoven into the HTML -->
<p>
	This is text in HTML. 
<?php
	echo "	And this an echo statement in PHP.
	<br><br>

	";

	// Here is a variable and the assignment operator...
	$hour = date("H");

	if ($hour < "20") { // Hour 20 == 8:00 PM
		echo "Have a good day!";
	} else {
		echo "Have a good night!";
	}
?>

</p>

</body>
</html>