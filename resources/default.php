<!doctype html>
<html>
<head lang="nl">
	<?php
	include('resources/head.php')
	?>
</head>
<body onload="setTheme()">
	<div id="wrapper">
		<div id="Menu" class="box">
			<?php
			include('resources/menu.php');
			?>
		</div>
		<section id="content" class="box">
			<?php
			$currentPage = str_replace('.php', 'Content.php', basename(filter_input(INPUT_SERVER, 'PHP_SELF', FILTER_SANITIZE_URL)));
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