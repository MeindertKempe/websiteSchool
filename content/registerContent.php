<h1 class="h1">Register</h1>
<br>
<?php
// Define error messages
$usernameErrMsg = '<p class="errorMsg">Kies een Gebruikersnaam tussen de 4 en 127 karakters en gebruik alleen letters en cijfers.</p>';
$emailErrMsg = '<p class="errorMsg">Geef een gelig email adres op.</p>';
$passDiffErrMsg = '<p class="errorMsg">Geef twee keer het zelfde wachtwoord op.</p>';
$passLengthErrMsg = '<p class="errorMsg">Kies een wachtwoord tussen de 4 en 255 karakters.</p>';

if(filter_input(INPUT_GET, 'usernameErr', FILTER_SANITIZE_URL) === 'true')
{
	echo($usernameErrMsg);
}
if(filter_input(INPUT_GET, 'emailErr', FILTER_SANITIZE_URL) === 'true')
{
	echo($emailErrMsg);
}
if(filter_input(INPUT_GET, 'passDiffErr', FILTER_SANITIZE_URL) === 'true')
{
	echo($passDiffErrMsg);
}
if(filter_input(INPUT_GET, 'passLengthErr', FILTER_SANITIZE_URL) === 'true')
{
	echo($passLengthErrMsg);
}

?>

<form action="scripts/registerScript.php" method="post">
	<label class="loginText" for="username">Username:</label><!--
	--><input id="username" class="loginField" type="text" name="username" maxlength="127" minlength="4">
	<br>
	
	<label class="loginText" for="email">Email:</label><!--
	--><input id="email" class="loginField" type="email" name="email">
	<br>
	
	<label class="loginText" for="password">Password:</label><!--
	--><input id="password" class="loginField" type="password" name="password" 
		   maxlength="255" minlength="4"><br>
	
	<label class="loginText" for="confirmPassword">Confirm password:</label><!--
	--><input id="confirmPassword" class="loginField" type="password" name="confirmPassword" 
		   maxlength="255" minlength="4"><br>
	
	<input class="loginButton" type="submit" value="register">
</form>
