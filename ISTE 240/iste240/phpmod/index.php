<?php 
	$currentPage = "Welcome"; 
	$customCSS = '
	<link rel="stylesheet" href="sss/sss.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="css/home.css">
	';
?>

<!DOCTYPE html>

<html lang="en">

<?php include "inc/head.php"; ?>

<body>
<div class="container">

<?php include "inc/header.php"; ?>

<?php include "inc/nav.php"; ?>

	<section class="lead inner-container">

		<h2 class="full-width">Welcome to The World of William Shakespeare</h2>

		<div class="slider">
			<img src="images/shake1.gif" alt="Shakes">
			<img src="images/shake2.jpg" alt="Shakes">
		</div>

		<div id="accordion">
			<h3>About Shakespeare</h3>
			<p>William Shakespeare (26 April 1564 (baptised) 23 April 1616) was an English poet, playwright and actor, widely regarded as the greatest writer in the English language and the world's pre-eminent dramatist. He is often called England's national poet and the "Bard of Avon".</p>

			<h3>More About Shakespeare</h3>
			<p>His extant works, including some collaborations, consist of about 38 plays, 154 sonnets, two long narrative poems, and a few other verses, the authorship of some of which is uncertain. His plays have been translated into every major living language and are performed more often than those of any other playwright.</p>			
		</div>
		    
	</section><!--.lead-->

	<footer>
		<p>All content stolen shamelessly from <a target="_blank" href="https://en.wikipedia.org/wiki/William_Shakespeare">the WikiPedia page on Shakespeare</a>.</p>
	</footer>

</div><!-- .container -->

<?php include "inc/scripts.php"; ?>

<script src="sss/sss.js"></script>
<script>
$('.slider').sss();
</script>

<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>
$( "#accordion" ).accordion({
	heightStyle: "content"
});
</script>
</body>
</html>