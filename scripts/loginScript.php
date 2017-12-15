<?php

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
$saltColumn = $userDBuserTabSaltCol;
$roundsColumn = $userDBuserTabRoundsCol;

// Set database to variable
$db = getDatabase($hostname, $database);

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	// Assign POST data to variables and escape them
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	
	$result = mysqli_query($db, "SELECT * FROM $userTable WHERE $usernameColumn='$username'");
	$resultRow = mysqli_fetch_array($result);
	$passwordVerifyHash = $resultRow['password_hash'];
	
	if($passwordVerifyHash === crypt($password, $passwordVerifyHash))
	{
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['email'] = $resultRow['email'];
		header('Location: ../login.php');
	}
	else
	{
		header('Location: ../login.php?failed=true');
	}
	
}
