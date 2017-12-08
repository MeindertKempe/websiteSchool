<?php

function getDatabase($dbName, $include)
{

/*
 * The $include variable needs to point to config/getLoginData.php
 */

	// Include file in which $username and $password are declared
	include($include);
	
	// Connect to a mySQL database and return it
	return mysqli_connect('localhost', $username, $password, $dbName);
}

?>
