<?php include 'template/header.php' ?>

<script>
function init(){
  document.getElementsByTagName('li').item(4).setAttribute('class', 'currentPage');
  var myDate = new Date();
  var myNode = document.createElement('div');
  document.getElementById('logo').appendChild(myNode);
  myNode.innerHTML = myDate.toDateString();
}
</script>

<?php 
require_once('includes/conn.inc.php'); 
$queryEvents = "SELECT * FROM events INNER JOIN games ON events.gameID=games.gameID ORDER BY eventDateFrom";
$resultEvents = $mysqli->query($queryEvents);
?>

<title>Events | Content Management</title>

<p>
<a href="events.php" class="button-style">&lt;&lt; Back to Events</a>
<a href="event-insert.php" class="button-topright">Add New Event</a>
<a href="event-search.php" class="button-topright">Search for Event</a>
</p>

<table class="center">
<tr>
<th>Event Name</th>
<th>Event Game</th>
<th>Game Icon</th>
<th>Event City</th>
<th>Event Country</th>
<th>View</th>
<th>Edit</th>
<th>Delete</th>
</tr>

<?php  
	while($rowEvents = $resultEvents->fetch_assoc())
	{  
		echo "<tr>"; 
		echo "<td>{$rowEvents['eventName']}</td>";
		echo "<td>{$rowEvents['gameName']}</td>";
		echo "<td><img src=\"images/icons/{$rowEvents['gameIcon']}\" width=\"40\" height=\"40\"></a></td>";
		echo "<td>{$rowEvents['eventCity']}</td>";  
		echo "<td>{$rowEvents['eventCountry']}</td>";
		echo "<td><a href=\"event-details.php?eventID={$rowEvents['eventID']}\" class=\"button-tableview\">View</a></td>";  
		echo "<td><a href=\"event-edit.php?eventID={$rowEvents['eventID']}\" class=\"button-tableedit\">Edit</a></td>" ;  
		echo "<td><a href=\"event-delete.php?eventID={$rowEvents['eventID']}\" class=\"button-tabledelete\">Delete</a></td>";  
		echo "<tr>"; 
	} 
?>

</table>

<?php include 'template/footer.php' ?>