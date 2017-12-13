<?php

function getDatabase($hostname, $dbName)
{

/*
 * The $include variable needs to point to config/getLoginData.php
 */

	// Include file in which $username and $password are declared
	chdir('../');
	include('config/getLoginData');
	
	// Connect to a mySQL database and return it
	return mysqli_connect($hostname, $username, $password, $dbName);
}
