<?php

function validateUsername($username)
{
	if(preg_match('/^\w{4,127}$/', $username))
	{
		return true;
	}
	else 
	{
		return false;
	}
}

function validateEmail($email)
{
	if(filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function validatePassword($password, $confirmPassword)
{
	if((strlen($password) > 255) or (strlen($password) < 4))
	{
		return 'lengthErr';
	}
	if($password !== $confirmPassword)
	{
		return 'diffErr';
	}
	else
	{
		return true;
	}
}
?>
