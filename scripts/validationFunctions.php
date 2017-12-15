<?php

function validateUsername($username, $db, $userTable, $userColumn)
{
	// Escape input
	$username = mysqli_real_escape_string($db, $username);
	
	// Get number of username valuables in database that equal username input
	$result = mysqli_query($db, "SELECT * FROM $userTable WHERE $userColumn='$username'");
	$resultRows = mysqli_num_rows($result);
	
	// Validate username using regex and return true or false
	if($resultRows !== 0)
	{
		return 'usernameTakenErr';
	}
	else if(!preg_match('/^\w{4,127}$/', $username))
	{
		return 'usernameErr';
	}
	else 
	{
		return true;
	}
}

function validateEmail($email, $db, $userTable, $emailColumn)
{
	// Escape input
	$email = mysqli_real_escape_string($db, $email);
	
	// Get number of email valuables in database that equal email input
	$result = mysqli_query($db, "SELECT * FROM $userTable WHERE $emailColumn='$email'");
	$resultRows = mysqli_num_rows($result);
	
	// Validate email using built in email validation and return true or false
	if($resultRows !== 0 )
	{
		return 'emailTakenErr';
	}
	else if(empty(filter_var($email, FILTER_VALIDATE_EMAIL)))
	{
		return 'emailErr';
	}
	else
	{
		return true;
	}
}

function validatePassword($password, $confirmPassword)
{
	/*
	 * Check the length of the password if too long or short,
	 * otherwise return error
	 */
	if((strlen($password) > 255) or (strlen($password) < 4))
	{
		return 'passLengthErr';
	}
	/*
	 * Check whether the password and confirmation are the same,
	 * otherwise return error
	 */
	if($password !== $confirmPassword)
	{
		return 'passDiffErr';
	}
	// If it passes the tests return true
	else
	{
		return true;
	}
}
