<!doctype html>
<html lang="nl">
<head>
	<?php
	include('resources/head.php');
	
	// Start session for rest of page
	session_start();
	
	// Save current page in session
	$_SESSION['currentPage'] = filter_input(INPUT_SERVER, 'PHP_SELF', FILTER_SANITIZE_URL);
	?>
</head>
<body onload="setTheme()">
	<div id="wrapper">
		<div id="Menu" class="box">
			<?php
			include('resources/menu.php');
			?>
		</div>
		<div id="loginMenu" class="box">
			<?php
			include('resources/loginMenu.php');
			?>
		</div>
		<section id="content" class="box">
			<?php
			/*
			 * Get the name of the current page and transform it
			 * into a path linking to a content/*Content.php file
			 */
			$currentPage = str_replace('.php', 'Content.php', basename(filter_input(INPUT_SERVER, 'PHP_SELF', FILTER_SANITIZE_URL)));
			/*
			 * Check whether this file exists, if yes include it,
			 * otherwise print an error
			 */
			if (file_exists(getcwd() . '/content/' . $currentPage))
			{
				include('content/' . $currentPage);
			} 
			else 
			{
				echo('Page does not exist.');
			}
			?>
		</section>
	</div>
</body>
</html>
