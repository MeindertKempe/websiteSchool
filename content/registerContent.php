<h1 class="h1">Registreer</h1>
<br>
<?php
// Define error messages
$usernameErrMsg = '<p class="errorMsg">Kies een Gebruikersnaam tussen de 4 en 127 karakters en gebruik alleen letters en cijfers.</p>';
$usernameTakenErrMsg = '<p class="errorMsg">Gebruikersnaam is al in gebruik.</p>';
$emailErrMsg = '<p class="errorMsg">Geef een gelig email adres op.</p>';
$emailTakenErrMsg = '<p class="errorMsg">Email adres is al in gebruik.</p>';
$passDiffErrMsg = '<p class="errorMsg">Geef twee keer het zelfde wachtwoord op.</p>';
$passLengthErrMsg = '<p class="errorMsg">Kies een wachtwoord tussen de 4 en 255 karakters.</p>';

// If GET value is passed print error message
if(filter_input(INPUT_GET, 'usernameErr', FILTER_SANITIZE_URL) === 'true')
{
	echo($usernameErrMsg);
}
if(filter_input(INPUT_GET, 'usernameTakenErr', FILTER_SANITIZE_URL) === 'true')
{
	echo($usernameTakenErrMsg);
}
if(filter_input(INPUT_GET, 'emailErr', FILTER_SANITIZE_URL) === 'true')
{
	echo($emailErrMsg);
}
if(filter_input(INPUT_GET, 'emailTakenErr', FILTER_SANITIZE_URL) === 'true')
{
	echo($emailTakenErrMsg);
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
	<input id="username" class="registerField" type="text" name="username" maxlength="127" 
			  minlength="4" required placeholder="Gebruikersnaam">
	<br>
	
	<input id="email" class="registerField" type="email" name="email" required placeholder="Email">
	<br>
	
	<input id="password" class="registerField" type="password" name="password"
			  maxlength="255" minlength="4"required placeholder="Wachtwoord">
	<br>
	
	<input id="confirmPassword" class="registerField" type="password" name="confirmPassword"
			  maxlength="255" minlength="4" required placeholder="Bevestig Wachtwoord">
	<br>
	
	<input class="registerButton" type="submit" value="register">
</form>
