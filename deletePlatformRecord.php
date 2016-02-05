<?php  
	require_once('includes/conn.inc.php'); 
	$stmt = $mysqli->prepare("DELETE FROM platforms WHERE platformID = ?");

	$stmt->bind_param('i', $_POST['platformID']);

	$stmt->execute(); 
	$stmt->close(); 

	header("Location: list-all-platforms.php"); // redirect browser  
	exit; // make sure no other code executed   
?>