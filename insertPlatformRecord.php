<?php  
	require_once('includes/conn.inc.php'); 
	$stmt = $mysqli->prepare("INSERT INTO platforms
						( 
							platformName
						)
					VALUES
						(
							?
						)
							");
	
	$stmt->bind_param('s',
							$_POST['platformName']
					 );

	$stmt->execute(); 
	$stmt->close(); 

	header("Location: list-all-platforms.php"); // redirect browser  
	exit; // make sure no other code executed   
?>