<div id="navTitleDiv">
	<p id="navTitle">Navigation</p>
</div>
<nav id="navMenuContainer">
	<?php
	include('resources/navMenu.php');
	?>
</nav>
<div id="themeDiv">
	<button class="themeButton" type="button" onclick="changeTheme('dark')">Dark Theme</button>
	<br />
	<button class="themeButton" type="button" onclick="changeTheme('light')">Light Theme</button>
</div>
<footer id="footer">
	<?php
	include('resources/footer.php');
	?>
</footer>