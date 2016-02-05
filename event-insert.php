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
$stmt = $mysqli->prepare("SELECT 
                                eventID, 
                                eventName, 
                                eventDescription,  
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
                                eventSummary,
                                eventImage,
                                eventURL

                                FROM events
                                WHERE eventID = ?");

$stmt->bind_param('i', $_GET['eventID']);
$stmt->execute(); 
$stmt->bind_result(
                  $eventID, 
                  $eventName, 
                  $eventDescription,
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
                  $eventStartTime, 
                  $eventAddedDate, 
                  $eventSummary, 
                  $eventImage, 
                  $eventURL);
$stmt->fetch();
$stmt->close();
?>

<title>Insert New Event</title>

<p><a href="list-all-events.php" class="button-style">&lt;&lt; Back to List</a></p>

<h1 class="center">Create New Event</h1><br>

<div id="page">

<!-- Form Start -->
<form name="form1" method="post" action="insertEventRecord.php">

<!-- Invisible eventID input -->
<input name="eventID" type="hidden" value="<?php echo $eventID; ?>">

  <p class="indent">
    <label for="eventName">Event Name</label>
    <input type="text" name="eventName" id="eventName" value="<?php echo $eventName; ?>">
  </p>

<p class="indent">
  <label for="gameName">Event Game</label>
  <select name="gameName">
  <?php
  echo "<option value ='1'>Select Game</option>";
  echo "<option value ='1'>-----------------------------------------</option>";
  $stmt = $mysqli->prepare("SELECT gameName, gameID FROM games");
  $stmt->execute();
  $stmt->bind_result($name, $id);
  while ($stmt->fetch()){
      echo "<option value='$id'>$name</option>";
  }

  $stmt->close();
  ?>
</select>
<?php echo "<a href=\"list-all-games.php\" class=\"button-editedit\">Edit Games</a>"; ?>
</p>

  <p class="indent">
    <label for="eventVenue">Event Venue</label>
    <input type="text" name="eventVenue" id="eventVenue" value="<?php echo $eventVenue; ?>">
  </p>

  <p class="indent">
    <label for="eventCity">Event City</label>
    <input type="text" name="eventCity" id="eventCity" value="<?php echo $eventCity; ?>">
  </p>

  <p class="indent">
    <label for="eventCountry">Event Country</label>
    <input type="text" name="eventCountry" id="eventCountry" value="<?php echo $eventCountry; ?>">
  </p>

  <p class="indent">
    <label for="eventAddress">Event Address</label>
    <input type="text" name="eventAddress" id="eventAddress" value="<?php echo $eventAddress; ?>">
  </p>
  
  <p class="indent">
    <label for="eventPrizePool">Event Prizepool</label>
    <input type="number" name="eventPrizePool" id="eventPrizePool" value="<?php echo $eventPrizePool; ?>">
  </p>

  <p class="indent">
    <label for="eventTicketCost">Event Ticket Cost</label>
    <input type="number" name="eventTicketCost" id="eventTicketCost" value="<?php echo $eventTicketCost; ?>">
  </p>

  <p class="indent">
    <label for="eventTeams">Event Teams</label>
    <input type="text" name="eventTeams" id="eventTeams" value="<?php echo $eventTeams; ?>">
  </p>

  <p class="indent">
    <label for="eventStartTime">Event Start Time</label>
    <input type="time" name="eventStartTime" id="eventStartTime" value="<?php echo $eventStartTime; ?>">
  </p>

  <p class="indent">
    <label for="eventDateFrom">Event Start Date</label>
    <input type="date" name="eventDateFrom" id="eventDateFrom" value="<?php echo $eventDateFrom; ?>">
  </p>

  <p class="indent">
    <label for="eventDateUntil">Event End Date</label>
    <input type="date" name="eventDateUntil" id="eventDateUntil" value="<?php echo $eventDateUntil; ?>">
  </p>

   <p class="indent">
    <label for="eventAddedDate">Event Added Date</label>
    <input type="date" name="eventAddedDate" id="eventAddedDate" value="<?php echo $eventAddedDate; ?>">
  </p>

   <p class="indent">
    <label for="eventAuthor">Info Author</label>
    <input type="text" name="eventAuthor" id="eventAuthor" value="<?php echo $eventAuthor; ?>">
  </p>

  <p class="indent">
    <label for="eventURL">Event Website</label>
    <input type="text" name="eventURL" id="eventURL" value="<?php echo $eventURL; ?>">
  </p>

  <p class="indent">
    <label for="eventDescription">Event Description</label>
    <textarea name="eventDescription" id="eventDescription" cols="45" rows="5"><?php echo $eventDescription; ?></textarea>
  </p>

  <p class="indent">
    <label for="eventSummary">Event Summary</label>
    <textarea name="eventSummary" id="eventSummary" cols="45" rows="5"><?php echo $eventSummary; ?></textarea>
  </p>

  <p class="indent">
    <label for="eventImage">Event Image</label>
    <input type="text" name="eventImage" id="eventImage" value="<?php echo $eventImage; ?>">
  </p>

  <p>
    <input type="submit" name="button" id="button" value="Update" >
  </p>

</form>
</div>
<?php include 'template/footer.php' ?>