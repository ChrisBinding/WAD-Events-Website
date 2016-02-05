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
error_reporting( error_reporting() & ~E_NOTICE );
require_once('includes/conn.inc.php'); 
$stmt = $mysqli->prepare("SELECT eventName, eventID FROM events WHERE eventName LIKE ?");
$searchVariable = "%".$_GET['eventName']."%";
$stmt->bind_param('s', $searchVariable );
$stmt->execute(); 
$stmt->bind_result($eventName, $eventID); 
?>

<title>Events | Content Management</title>

<p>
<a href="list-all-events.php" class="button-style">&lt;&lt; Back to List</a>
<a href="event-insert.php" class="button-topright">Add New Event</a>
</p>

<div id="page">
<div id="content">

<section>
<form id="form1" name="form1" method="get" action="">

  
  <p><label for="eventName">Search for an Event:</label>
	<input name="eventName" type="text" id="eventName">
	<input type="submit" name="submit">
  </p>
</form>
</section>
<section>

<?php
echo "<ul>";
if(isset($_GET['eventName'])){
	while ($stmt->fetch()) {
		echo "<li><a href=\"event-details.php?eventID={$eventID}\">{$eventName}</a></li>";	
	}
echo "</ul>";
}
?>

</section>
</div>
</div>
<?php include 'template/footer.php' ?>