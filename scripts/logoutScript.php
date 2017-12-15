<?php

// Start session
session_start();

// Unset login session
unset($_SESSION['username']);
unset($_SESSION['email']);

// Send user back with confirm logout message
header('Location: ' . $_SESSION['currentPage'] . '?logout=true');
