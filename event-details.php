<?php include 'template/header.php' ?>

<script>
function init(){
  document.getElementsByTagName('li').item(3).setAttribute('class', 'currentPage');
  var myDate = new Date();
  var myNode = document.createElement('div');
  document.getElementById('logo').appendChild(myNode);
  myNode.innerHTML = myDate.toDateString();
}
</script>

<?php 
require_once('includes/conn.inc.php'); 
$stmt = $mysqli->prepare("SELECT 
							eventID, 
							eventName, 
							gameName, 
							gameIcon, 
							eventDescription,
							eventImage, 
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
							eventAddedDate, 
							eventURL 
							FROM events 
							INNER JOIN games 
							ON events.gameID=games.gameID 
							WHERE eventID = ?");

$stmt->bind_param('i', $_GET['eventID']);
$stmt->execute(); 
$stmt->bind_result( $eventID, 
					$eventName, 
					$gameName, 
					$gameIcon, 
					$eventDescription,
					$eventImage,
					$eventVenue,
					$eventCity,
					$eventCountry,
					$eventAddress,
					$eventPrizePool,
					$eventAuthor,
					$eventTicketCost,
					$eventTeams,
					$eventDateFrom,
					$eventDateUntil,
					$eventAddedDate,
					$eventURL
				   );
$stmt->fetch();
$stmt->close();
?>

<title><?php echo $eventName; ?></title>

<p><a href="list-all-events.php" class="button-style">&lt;&lt; Back to List</a></p>


<?php 
		echo "<p><a href=\"event-delete.php?eventID={$eventID}\" class=\"button-viewdelete\">Delete</a></p>"; 
		echo "<p><a href=\"event-edit.php?eventID={$eventID}\" class=\"button-viewedit\">Edit</a></p>";
		echo "<h1 class=\"center\">{$eventName}</h1>";
?>

<div id="page">
<div id="content">

<?php
	$timestampDateFrom = strtotime($eventDateFrom);  
	$displayDateFrom = date("D d M Y", $timestampDateFrom);

	$timestampDateUntil = strtotime($eventDateUntil);  
	$displayDateUntil = date("D d M Y", $timestampDateUntil);

	$timestampDateAdded = strtotime($eventAddedDate);  
	$displayDateAdded = date("D d M Y", $timestampDateAdded);


	echo "<img class=\"eventimage\" src=\"images/events/{$eventImage}\" width=\"600\" height=\"400\">";

	echo "<h3>Event Game: </h3>";
	echo "<img src=\"images/icons/{$gameIcon}\" width=\"40\" height=\"40\"> {$gameName}";

	echo "<h3>Event Venue: </h3>";
	echo "<p>{$eventVenue}</p>";

	echo "<h3>Event Location: </h3>";
	echo "<p>{$eventAddress}</p>";

	echo "<h3>Event Website: </h3>";
	echo "<p><a href=\"{$eventURL}\">External Link</a></p>";
	
	echo "<h3>Event Description: </h3>";
	echo "<p>{$eventDescription}</p>";

	echo "<h3>Event Prize Pool: </h3>";
	echo "<p>$ {$eventPrizePool}</p>";

	echo "<h3>Event Ticket Cost: </h3>";
	echo "<p>$ {$eventTicketCost}</p>";

	echo "<h3>Event Dates: </h3>";
	echo "<p>{$displayDateFrom} -> {$displayDateUntil}</p>";

	echo "<h3>Event Added To Website: </h3>";
	echo "<p>{$displayDateAdded}</p>";

	echo "<h3>Event Added By: </h3>";
	echo "<p>{$eventAuthor}</p>";
?>

</div>
</div>
<?php include 'template/footer.php' ?>