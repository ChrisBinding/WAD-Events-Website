<?php  
	require_once('includes/conn.inc.php'); 
	$stmt = $mysqli->prepare("DELETE FROM games WHERE gameID = ?");

	$stmt->bind_param('i', $_POST['gameID']);

	$stmt->execute(); 
	$stmt->close(); 

	header("Location: list-all-games.php"); // redirect browser  
	exit; // make sure no other code executed   
?>