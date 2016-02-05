<?php  
	require_once('includes/conn.inc.php'); 
	$stmt = $mysqli->prepare("DELETE FROM news WHERE newsID = ?");

	$stmt->bind_param('i', $_POST['newsID']);

	$stmt->execute(); 
	$stmt->close(); 

	header("Location: list-all-news.php"); // redirect browser  
	exit; // make sure no other code executed   
?>