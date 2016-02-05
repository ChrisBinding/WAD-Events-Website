<?php  
	require_once('includes/conn.inc.php'); 
	$stmt = $mysqli->prepare("INSERT INTO games
						( 
							gameName,
							gameDescription, 
							gameCertificate, 
							gameImage, 
							gameDeveloper,
							platformID,
							metacriticScore,
							gameIcon,
							twitterID,
							twitterURL,
							gameSummary,
							releaseDate
						)
					VALUES
						(
							?,
							?,
							?,
							?,
							?,
							?,
							?,
							?,
							?,
							?,
							?,
							?
						)
							");
	
	$stmt->bind_param('sssssiisssss',
							$_POST['gameName'],
							$_POST['gameDescription'],       
							$_POST['gameCertificate'],         
							$_POST['gameImage'],                  
							$_POST['gameDeveloper'],
							$_POST['platformName'],
							$_POST['metacriticScore'],
							$_POST['gameIcon'],
							$_POST['twitterID'],
							$_POST['twitterURL'],
							$_POST['gameSummary'],
							$_POST['releaseDate']
					 );

	$stmt->execute(); 
	$stmt->close(); 

	header("Location: list-all-games.php"); // redirect browser  
	exit; // make sure no other code executed   
?>