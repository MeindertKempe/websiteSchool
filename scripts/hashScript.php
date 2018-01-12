<?php
// Assign input to variables
if($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	session_start();
	$input = filter_input(INPUT_POST, 'input', FILTER_SANITIZE_STRING);
	$algorithm = filter_input(INPUT_POST, 'algorithm', FILTER_SANITIZE_STRING);
	$_SESSION['input'] = $input;
	$_SESSION['algorithm'] = $algorithm;
	if(!empty($input) && !empty($algorithm))
	{
		$output = hash($algorithm, $input, false);
		$_SESSION['output'] = $output;
	}
	header('Location: ' . $_SESSION['currentPage']);
}
