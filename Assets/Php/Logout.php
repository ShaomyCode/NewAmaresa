<?php
session_start();

	// Clear all session variables
	$_SESSION = array();

	// Destroy the session
	session_destroy();

	// Redirect to Index.php
	header("Location: ../../Index.php");
	
exit();
?>