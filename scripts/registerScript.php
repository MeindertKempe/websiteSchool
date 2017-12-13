<?php

// Require necessary files
require('validationFunctions.php');

// Declare error variables
$usernameErr = $emailErr = $passDiffErr = $passLengthErr = '';

// Declare variables which indicate validation state

$usernameValidate = $emailValidate = $passValidate = false;

// Check whether the server received anything via POST
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	// Assign POST data to variables
	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];
	
	/*
	 * Check whether it passes username requirements and assign a variable to true,
	 * otherwise send an error message
	 */
	if(validateUsername($username) === true)
	{
		$usernameValidate = true;
	}
	else
	{
		header('Location: ../register.php?usernameErr=true');
		exit;
	}

	/*
	 * Check whether it is a valid email and assign a variable to true,
	 * otherwise send an error message
	 */
	if(validateEmail($email) === true)
	{
		$emailValidate = true;
	} 
	else 
	{
		header('Location: ../register.php?emailErr=true');
		exit;
	}
	
	/*
	 *  Check password length,
	 *  otherwise send an error message
	 */
	if(validatePassword($password, $confirmPassword) === 'passLengthErr') 
	{
		header('Location: ../register.php?passLengthErr=true');
		exit;
	} 
	
	/*
	 *  Check if the password and confirmation are the same,
	 *  otherwise send an error message
	 */
	else if(validatePassword($password, $confirmPassword) === 'passDiffErr')
	{
		header('Location: ../register.php?passDiffErr=true');
		exit; 
	} 
	// If it passes validation assign a variable to true,
	else if(validatePassword($password, $confirmPassword) === true)
	{
		$passValidate = true;
	}
}
else
{
	/*
	 * If no data has been send over post send user to register page,
	 * to prevent people from calling this script without sending data.
	 */
	 header('Location: ../register.php');
}

if($usernameValidate && $emailValidate && $passValidate)
{
	/*
	 * Process users data and send user to register page, 
	 * with succes message.
	 */
	header('Location: ../register.php?succes=true');
}

