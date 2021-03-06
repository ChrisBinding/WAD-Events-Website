<?php  
	require_once('includes/conn.inc.php'); 
	$stmt = $mysqli->prepare("INSERT INTO events
						( 
							eventName,
							eventDescription, 
							gameID, 
							eventVenue, 
							eventCity,
							eventCountry,
							eventAddress,
							eventPrizePool,
							eventAuthor,
							eventTicketCost,
							eventTeams,
							eventDateFrom,
							eventDateUntil,
                            eventStartTime,
                            eventAddedDate,
                            eventURL,
                            eventSummary,
							eventImage
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
							?,
							?,
							?,
							?,
							?,
							?,
							?
						)
							");
	
	$stmt->bind_param('ssissssisissssssss',
							$_POST['eventName'],
							$_POST['eventDescription'],       
							$_POST['gameName'],         
							$_POST['eventVenue'],                  
							$_POST['eventCity'],
							$_POST['eventCountry'],
							$_POST['eventAddress'],
							$_POST['eventPrizePool'],
							$_POST['eventAuthor'],
							$_POST['eventTicketCost'],
							$_POST['eventTeams'],
							$_POST['eventDateFrom'],
							$_POST['eventDateUntil'],
							$_POST['eventStartTime'],
							$_POST['eventAddedDate'],
							$_POST['eventURL'],
							$_POST['eventSummary'],
							$_POST['eventImage']);

	$stmt->execute(); 
	$stmt->close(); 

	header("Location: list-all-events.php"); // redirect browser  
	exit; // make sure no other code executed   
?>