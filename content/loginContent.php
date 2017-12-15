<?php 

// Start session
session_start();

if(empty($_SESSION['username']))
{
	echo('	<h1 class="h1">Login</h1>
			<br>
			<form action="scripts/loginScript.php" method="post">
				<input id="username" class="loginField" type="text" name="username" required 
					   placeholder="Gebruikersnaam"><br>
				<input id="password" class="loginField" type="password" name="password" required 
					   placeholder="Wachtwoord"><br>
				<input class="loginButton" type="submit" value="login">
			</form>');
}
else
{
	echo('<h1 class="h1">Logout</h1><br>');
	echo('<p>Logged in as:</p>');
	echo($_SESSION['username']);
	echo('<br>');
	echo('<a href="scripts/logoutScript.php">Logout</a>');
}

?>

