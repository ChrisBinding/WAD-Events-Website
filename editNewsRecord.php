<?php  
	require_once('includes/conn.inc.php'); 
	$stmt = $mysqli->prepare("UPDATE news SET 
							gameID = ?,
							newsHeadline = ?,
							newsSummary = ?,
							newsContent = ?, 
							newsDate = ?, 
							newsImage = ?
							WHERE newsID = ?");
	
	$stmt->bind_param('isssssi',
							$_POST['gameName'],
							$_POST['newsHeadline'],  
							$_POST['newsSummary'],
							$_POST['newsContent'],         
							$_POST['newsDate'],                
							$_POST['newsImage'],
							$_POST['newsID']);

	$stmt->execute(); 
	$stmt->close(); 

	header("Location: list-all-news.php"); // redirect browser  
	exit; // make sure no other code executed   
?>