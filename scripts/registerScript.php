<?php

// Require necessary files
require_once('../config/userDBName.php');
require_once('validationFunctions.php');
require_once('getDatabase.php');

// Declare error variables
$passDiffErr = $passLengthErr = $emailErr = $emailTakenErr = $usernameErr = $usernameTakenErr = false;
$passDiffErrMsg = $passLengthErrMsg = $emailErrMsg = $emailTakenErrMsg = $usernameErrMsg = $usernameTakenErrMsg = '';

// Declare variables which indicate validation state
$usernameValidate = $emailValidate = $passValidate = false;

// Declare database variables
$hostname = $userDBHost;
$database = $userDB;
$userTable = $userDBuserTab;
$usernameColumn = $userDBuserTabUsernameCol;
$emailColumn = $userDBuserTabEmailCol;
$passHashColumn = $userDBuserTabPassHashCol;
$saltColumn = $userDBuserTabSaltCol;
$roundsColumn = $userDBuserTabRoundsCol;

// Set database to variable
$db = getDatabase($hostname, $database);

// Check whether the server received anything via POST
if($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	
	// Assign POST data to variables
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];
	
	/*
	 * Check whether it passes username requirements and assign a variable to true,
	 * otherwise send an error message
	 */
	if(validateUsername($username, $db, $userTable, $usernameColumn) === true)
	{
		$usernameValidate = true;
	}
	else if(validateUsername($username, $db, $userTable, $usernameColumn) === 'usernameTakenErr')
	{
		$usernameTakenErr = true;
	}
	else
	{
		$usernameErr = true;
	}

	/*
	 * Check whether it is a valid email and assign a variable to true,
	 * otherwise send an error message
	 */
	if(validateEmail($email, $db, $userTable, $emailColumn) === true)
	{
		$emailValidate = true;
	} 
	else if(validateEmail($email, $db, $userTable, $emailColumn) === 'emailTakenErr')
	{
		$emailTakenErr = true;
	}
	else 
	{
		$emailErr = true;
	}
	
	/*
	 *  Check password length,
	 *  otherwise send an error message
	 */
	if(validatePassword($password, $confirmPassword) === 'passLengthErr') 
	{
		$passLengthErr = true;
	} 
	/*
	 *  Check if the password and confirmation are the same,
	 *  otherwise send an error message
	 */
	else if(validatePassword($password, $confirmPassword) === 'passDiffErr')
	{
		$passDiffErr = true;
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
	exit;
}

// Check for errors, if so send user back with messages and exit the program
if($passDiffErr || $passLengthErr || $emailErr || $emailTakenErr || $usernameErr || $usernameTakenErr)
{
	if($passDiffErr)
	{
		$passDiffErrMsg = '&passDiffErr=true';
	}
	if($passLengthErr)
	{
		$passLengthErrMsg = '&passLengthErr=true';
	}
	if($emailErr)
	{
		$emailErrMsg = '&emailErr=true';
	}
	if($emailTakenErr)
	{
		$emailTakenErrMsg = '&emailTakenErr=true';
	}
	if($usernameErr)
	{
		$usernameErrMsg = '&usernameErr=true';
	}
	if($usernameTakenErr)
	{
		$usernameTakenErrMsg = '&usernameTakenErr=true';
	}
	header('Location: ../register.php?' . 'error=true' . $passDiffErrMsg . $passLengthErrMsg . 
			$emailErrMsg . $emailTakenErrMsg . $usernameErrMsg . $usernameTakenErrMsg);
	exit;
}

if($usernameValidate && $emailValidate && $passValidate)
{
	
	/*
	 * Process users data and send user to register page, 
	 * with succes message.
	 */
	
	// Escape data to be inserted into sql database
	$username = mysqli_real_escape_string($db, $username);
	$email = mysqli_real_escape_string($db, $email);
	
	// Generate salt
	$salt  = base64_encode(openssl_random_pseudo_bytes(16));
	
	// Set number of rounds for crypt to use
	$rounds = 10000;
	
	// Generate hash using crypt
	$passHash = crypt($password, '$6$rounds=' . $rounds . '$' . $salt . '$');
	
	// Send user info to database
	mysqli_query($db, "INSERT INTO $userTable "
			. "($userDBuserTabUsernameCol, $userDBuserTabEmailCol, "
			. "$userDBuserTabPassHashCol, $userDBuserTabSaltCol, $userDBuserTabRoundsCol)"
			. " VALUES ('$username', '$email', '$passHash', '$salt', '$rounds')");
	
	// Send user back to register page with succes message
	header('Location: ../register.php?succes=true');
	exit;
}
