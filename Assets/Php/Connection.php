<?php
	
	// Database connection settings
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'amaresadb';

	$conn = new mysqli($servername,$username,$password,$dbname);

	if($conn){
		
	}else{
		die(mysqli_error($conn));
	}
?>

<!-- 
		echo "string";
		sleep(15);
		exit();	
header('Location: ../../index.html');
 -->