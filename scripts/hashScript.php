<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	session_start();
	// Assign input to variables
	$input = filter_input(INPUT_POST, 'input', FILTER_SANITIZE_STRING);
	$algorithm = filter_input(INPUT_POST, 'algorithm', FILTER_SANITIZE_STRING);
	
	$_SESSION['hashInput'] = $input;
	$_SESSION['hashAlgorithm'] = $algorithm;
	if(!empty($input) && !empty($algorithm))
	{
		$output = hash($algorithm, $input, false);
		$_SESSION['hashOutput'] = $output;
	}
	header('Location: ' . $_SESSION['currentPage']);
}
