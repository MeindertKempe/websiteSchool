<?php

/*
 * You need to set the $chdir variable so that it goes to the webroot
 * 
 * You also need to specify the table before including this script
 */

chdir($chdir);
include('config/getlogindata.php');
$db = mysqli_connect('localhost', $username, $password, $table);
?>
