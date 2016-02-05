<?php  
	require_once('includes/conn.inc.php'); 
	$stmt = $mysqli->prepare("INSERT INTO news
						( 
							gameID,
							newsHeadline,
							newsSummary,
							newsContent, 
							newsDate, 
							newsImage
						)
					VALUES
						(
							?,
							?,
							?,
							?,
							?,
							?
						)
							");
	
	$stmt->bind_param('isssss',
							$_POST['gameName'],
							$_POST['newsHeadline'],  
							$_POST['newsSummary'],
							$_POST['newsContent'],         
							$_POST['newsDate'],                
							$_POST['newsImage']);
	$stmt->execute(); 
	$stmt->close(); 

	header("Location: list-all-news.php"); // redirect browser  
	exit; // make sure no other code executed   
?>