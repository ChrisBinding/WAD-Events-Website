<?php  
	require_once('includes/conn.inc.php'); 
	$stmt = $mysqli->prepare("DELETE FROM events WHERE eventID = ?");

	$stmt->bind_param('i', $_POST['eventID']);

	$stmt->execute(); 
	$stmt->close(); 

	header("Location: list-all-events.php"); // redirect browser  
	exit; // make sure no other code executed   
?>