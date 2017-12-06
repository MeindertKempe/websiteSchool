<meta charset="UTF-8">
<title>
	<?php
		if($title !== null){
			echo($title);
		} else {
			echo('error');
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
		$currentPage = basename($_SERVER['PHP_SELF'], '.php');
		echo('#'.$currentPage.' {
			background-color: #004800;
		}');
	?>
</style>