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

<title>E-Sports Events | Events</title>
<?php 
require_once('includes/conn.inc.php'); 
$queryEvents = "SELECT * FROM events INNER JOIN games ON events.gameID=games.gameID ORDER BY eventDateFrom";
$resultEvents = $mysqli->query($queryEvents);
?>



<div id="page">
    <div id="content">
      <h2>events</h2>
      <p><img src="images/events_banner.jpg" width="750" height="400" alt=""></p>
      <p>Welcome to the Events page! Here, you can see some featured events highlighted below for your attention.</p>
      <p>To get more information on each of the different events below, click the event's link below to be redirected to it's individual information page.</p>
    </div>
    <div class="sidebar">
      <div>
        <h2>Did you know?</h2>
        <ul class="style2">
          <li class="first">
            <h3><a href="list-all-events.php">Events - Content Management System</a></h3>
            <p><img src="images/events_cms.png" width="300" height="130" border="2" alt="The Compendium 2014"></p>
            <p>You can click the 'List all Events' button located to be redirected to the Content Management System (CMS).</p>
            <p>Once there, you can view, edit and even create new events in an easy tabular format.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- <?php include 'game-search.php' ?> -->

<p><a href="list-all-events.php" class="button-topright">List All Events</a></p><br><br>

<div class="three-column-line1">
<h1>Featured Events</h1><br>
    <?php 
        $x = 1;
        while(($rowEvents = $resultEvents->fetch_assoc()) && ($x < 7) )
        {
            echo "<div class=\"box\">";
            echo "<h2><a href=\"event-details.php?eventID={$rowEvents['eventID']}\">{$rowEvents['eventName']}</a></h2>";
            echo "<p><img src=\"images/events/{$rowEvents['eventImage']}\" width=\"300\" height=\"150\" alt=\"League of Legends Banner\"></p>";
            echo "<h3><img src=\"images/icons/{$rowEvents['gameIcon']}\" width=\"20\" height=\"20\"> <a href=\"game-details.php?gameID={$rowEvents['gameID']}\">{$rowEvents['gameName']}</h3></a>";
            echo "<p>{$rowEvents['eventSummary']}</p>";
            echo "</div>";
            ++$x;
        }
      

    ?>
    
  </div>
  

  <?php include 'template/footer.php' ?>