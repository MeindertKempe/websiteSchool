<?php

// Start session
session_start();

// Require neccesary files
require_once('../config/databaseName.php');
require_once('getDatabase.php');

// Declare database variables
$hostname = $userDBHost;
$database = $userDB;
$userTable = $userDBuserTab;
$usernameColumn = $userDBuserTabUsernameCol;
$emailColumn = $userDBuserTabEmailCol;
$passHashColumn = $userDBuserTabPassHashCol;

// Set database to variable
$db = getDatabase($hostname, $database);

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	// Assign POST data to variables and escape them
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	
	// Retrieve hash associated with username
	$result = mysqli_query($db, "SELECT * FROM $userTable WHERE $usernameColumn='$username'");
	$resultRow = mysqli_fetch_array($result);
	$passwordVerifyHash = $resultRow['password_hash'];
	
	// Check stored hash against hash of current password
	if($passwordVerifyHash === crypt($password, $passwordVerifyHash))
	{
		// Set sessions with user info
		$_SESSION['username'] = $username;
		$_SESSION['email'] = $resultRow['email'];
		
		// Send user back with confirm GET message
		header('Location: ' . $_SESSION['currentPage'] . '?login=true');
	}
	else
	{
		// Send user back with error message
		header('Location: ' . $_SESSION['currentPage'] . '?login=false');
	}
	
}
