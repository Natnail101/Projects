<?php
	//set the servername
	$servername = "localhost";
	//set the server username
	$username = "ntt7381";
	// set the server password (you must put password here if your using live server)
	$password = 'Chablis6+tiliaceae';
	// set the table name
	$dbname = "ntt7381"; 

	$db = new mysqli($servername, $username, $password, $dbname);

	if ($db->connect_errno) {
	  echo "Failed to connect to MySQL: " . $db->connect_error;
	  exit();
	}

	// Include functions file
	require_once 'functions.php';
?>