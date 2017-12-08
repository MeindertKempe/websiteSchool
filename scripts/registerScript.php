<?php

// Require necessary files
require('scripts/validationFunctions.php');

// Define error messages
$invalidUsernameErrMsg = '<p class="errorMsg">Kies een Gebruikersnaam tussen de 4 en 127 karakters en gebruik alleen letters en cijfers.</p>';
$invalidEmailErrMsg = '<p class="errorMsg">Geef een gelig email adres op.</p>';
$passwordDiffErrMsg = '<p class="errorMsg">Geef twee keer het zelfde wachtwoord op.</p>';
$passwordLengthErrMsg = '<p class="errorMsg">Kies een wachtwoord tussen de 4 en 255 karakters.</p>';

// Declare error variables
$invalidUsernameErr = $invalidEmailErr = $passwordDiffErr = $passwordLengthErr = '';

// Check whether the server received anything via POST
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	
	/*
	 * Check whether it passes username requirements and process it,
	 * otherwise send an error message
	 */
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

	/*
	 * Check whether it is a valid email and process it,
	 * otherwise send an error message
	 */
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
	
	/*
	 *  Check password length,
	 *  otherwise send an error message
	 */
	if(validatePassword($_POST['password'], $_POST['confirmPassword']) === 'lengthErr') 
	{
		$passwordLengthErr = $passwordLengthErrMsg;
	} 
	
	/*
	 *  Check if the password and confirmation are the same,
	 *  otherwise send an error message
	 */
	else if(validatePassword($_POST['password'], $_POST['confirmPassword']) === 'diffErr')
	{
		$passwordDiffErr = $passwordDiffErrMsg; 
	} 
	// If it passes validation process the password
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
