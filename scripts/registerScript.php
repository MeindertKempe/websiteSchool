<?php
include('scripts/validationFunctions.php');

$invalidUsernameErrMsg = '<p class="errorMsg">Kies een Gebruikersnaam tussen de 4 en 127 karakters en gebruik alleen letters en cijfers.</p>';
$invalidEmailErrMsg = '<p class="errorMsg">Geef een gelig email adres op.</p>';
$passwordDiffErrMsg = '<p class="errorMsg">Geef twee keer het zelfde wachtwoord op.</p>';
$passwordLengthErrMsg = '<p class="errorMsg">Kies een wachtwoord tussen de 4 en 255 karakters.</p>';

$invalidUsernameErr = $invalidEmailErr = $passwordDiffErr = $passwordLengthErr = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	if(validateUsername($_POST['username']))
	{
		/*
		 * SQL processing here
		 */
		echo('succes username <br>');
	}
	else
	{
		$invalidUsernameErr = $invalidUsernameErrMsg;
	}

	if(validateEmail($_POST['email']))
	{
		/*
		 * SQL processing here
		 */
		echo('succes email <br>');
	} 
	else 
	{
		$invalidEmailErr =$invalidEmailErrMsg;
	}
	
	if(validatePassword($_POST['password'], $_POST['confirmPassword']) === 'lengthErr') 
	{
		$passwordLengthErr = $passwordLengthErrMsg;
	} 
	else if(validatePassword($_POST['password'], $_POST['confirmPassword']) === 'diffErr')
	{
		$passwordDiffErr = $passwordDiffErrMsg; 
	} 
	else if(validatePassword($_POST['password'], $_POST['confirmPassword']))
	{
		/*
		 * Salting and hashing here 
		 *
		 * SQL processing here
		 */
		echo('succes password');
	}
}
?>
