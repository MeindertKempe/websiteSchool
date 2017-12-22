<?php 

$loginErrMsg = '<p class="errorMsg">Foute gebruikersnaam of wachtwoord</p>';

// If login session is set echo user info else echo login form
if(isset($_SESSION['username']))
{
	echo('<h1 class="h1">Profiel</h1><br>');
	echo('<p>Naam:</p>');
	echo('<p>' . $_SESSION['username'] . '</p>');
	echo('<p>Email:</p>');
	echo('<p>' . $_SESSION['email'] . '</p>');
	echo('<br>');
	echo('	<form action="scripts/logoutScript.php" method="post">
				<input class="loginButton" type="submit" value="logout">
			</form>');
	echo('<br>');
}
else
{
	echo('	<h2 class="h2">Login</h2>');
	
	if(filter_input(INPUT_GET, 'login', FILTER_SANITIZE_URL) === 'false')
	{
		echo($loginErrMsg);
	}
	
	echo('	<form action="scripts/loginScript.php" method="post">
				<input id="username" class="loginField" type="text" name="username" required 
					   placeholder="Gebruikersnaam"><br>
				<input id="password" class="loginField" type="password" name="password" required 
					   placeholder="Wachtwoord"><br>
				<input class="loginButton" type="submit" value="login">
			</form>
			<a href="register.php">Of registreer</a>');
}

