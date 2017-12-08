<meta charset="UTF-8">
<title>
	<?php
	// Check whether a title exists and echo it other wise echo nothing
	if($title !== null)
	{
		echo($title);
	}
	else
	{
		echo('');
	}
	?>
</title>
<meta name="author" content="Meindert Kempe">
<link rel="icon" type="image/png" href="images/wheelOfTime.png" />
<link rel="stylesheet" type="text/css" href="css/common.php">
<link rel="stylesheet" type="text/css" href="css/dark.php" title="dark">
<link rel="stylesheet" type="text/css" href="css/light.php" title="light">
<script src="scripts/theme.js"></script>
<style>
	<?php 
	/*
	 * Get the filename of the current page and strip the .php extension
	 * then echo css code to change the color of the navigation button of 
	 * the current page to a darker color
	 */
	$currentPage = basename(filter_input(INPUT_SERVER, 'PHP_SELF', FILTER_SANITIZE_URL), '.php');
	echo('#'.$currentPage.' {
		background-color: #004800;
	}');
	?>
</style>
