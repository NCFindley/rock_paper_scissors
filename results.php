<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
</head>
<body>

<?php 
	include("functions.php");
	$player1 = $_GET["weapon1"];
	$comp = randomWep(); ?>

		<h1><?php echo findWinner($player1, $comp); ?></h1>
	<a href="index.php"> Try Again</a>
</body>
</html>