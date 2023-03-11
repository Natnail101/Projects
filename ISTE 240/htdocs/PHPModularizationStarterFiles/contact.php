<?php 
	$currentPage = "About Shakespear"; 
	$costumCSS ='css/forms.css';	
?>


<!DOCTYPE html>

<html lang="en">

<body>
<div class="container">

	<header>
		<h1>William Shakespeare</h1>
		<div class="subtitle">That guy who wrote things</div>
	</header>

<?php include "inc/nav.php"; ?>

<form method="post" action="form-processor.php" class="full-width">

	<label for="name">Thy Name: </label>
	<input type="text" name="name" id="name">
	<br><br>

	<label for="email">Thy Email: </label>
	<input type="email" name="email" id="email">
	<br><br>

	<label for="phone">Thy Number of Thy Notepad (phone): </label>
	<input type="tel" name="phone" id="phone">
	<br>
	<br>

	<fieldset>
		<legend>Shake Facts About You</legend>
		
		<h2>What things do you like about Shakespeare?</h2>

		<input type="checkbox" name="articulateCheck" id="articulateCheck" value="Articulate">
		<label for="articulateCheck">Articulate</label>
		<br>
	
		<input type="checkbox" name="smartCheck" id="smartCheck" value="Smart">
		<label for="smartCheck">Smart</label>
		<br>
	
		<input type="checkbox" name="politicsCheck" id="politicsCheck" value="Politically Incorrect">
		<label for="politicsCheck">Politically Incorrect</label>
		<br>
	
		<input type="checkbox" name="lookerCheck" id="lookerCheck" value="Good looking">
		<label for="lookerCheck">Good looking</label>
		<br>

		<h2>What is your favorite Shakespeare Play?</h2>

		<input type="radio" name="favoriteSelect" id="tempestSelect" value="The Tempest">
		<label for="tempestSelect">The Tempest</label>
		<br>
	
		<input type="radio" name="favoriteSelect" id="gentlemenSelect" value="Two Gentlemen of Verona">
		<label for="gentlemenSelect">Two Gentlemen of Verona</label>
		<br>
	
		<input type="radio" name="favoriteSelect" id="merrySelect" value="The Merry Wives of Windsor">
		<label for="merrySelect">The Merry Wives of Windsor</label>
		<br>
	
		<input type="radio" name="favoriteSelect" id="measureSelect" value="Measure for Measure">
		<label for="measureSelect">Measure for Measure</label>
		<br>
	
	</fieldset>
	<br>

	<label for="howfell">Tell us how you fell in love with Shakespeare</label>
	<br>
	<textarea name="howfell" id="howfell"></textarea>
	<br>
	<br>

	<input type="submit" value="Away with thee">

</form>


</div><!-- .container -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="js/menu-highlighter.js"></script>
</body>
</html>