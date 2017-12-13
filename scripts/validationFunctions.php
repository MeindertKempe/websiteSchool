<?php

function validateUsername($username)
{
	// Validate username using regex and return true or false
	if(!preg_match('/^\w{4,127}$/', $username))
	{
		return 'usernameErr';
	}
	else 
	{
		return true;
	}
}

function validateEmail($email)
{
	// Validate email using built in email validation and return true or false
	if(empty(filter_var($email, FILTER_VALIDATE_EMAIL)))
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

?>
