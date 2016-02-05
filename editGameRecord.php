<?php  
	require_once('includes/conn.inc.php'); 
	$stmt = $mysqli->prepare("UPDATE games SET 
							gameName = ?,
							gameDescription = ?,
							platformID = ?,
							gameCertificate = ?, 
							gameImage = ?, 
							gameDeveloper = ?,
							metacriticScore = ?,
							gameIcon = ?,
							twitterID = ?,
							twitterURL = ?,
							gameSummary = ?,
							releaseDate = ?
							WHERE gameID = ?");
	
	$stmt->bind_param('ssisssisssssi',
							$_POST['gameName'],
							$_POST['gameDescription'],  
							$_POST['platformName'],
							$_POST['gameCertificate'],         
							$_POST['gameImage'],                
							$_POST['gameDeveloper'],
							$_POST['metacriticScore'],
							$_POST['gameIcon'],
							$_POST['twitterID'],
							$_POST['twitterURL'],
							$_POST['gameSummary'],
							$_POST['releaseDate'],
							$_POST['gameID']);

	$stmt->execute(); 
	$stmt->close(); 

	header("Location: list-all-games.php"); // redirect browser  
	exit; // make sure no other code executed   
?>