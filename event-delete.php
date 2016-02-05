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
$stmt = $mysqli->prepare("SELECT eventID, eventName FROM events WHERE eventID = ?");
$stmt->bind_param('i', $_GET['eventID']);
$stmt->execute(); 
$stmt->bind_result($eventID, $eventName);
$stmt->fetch();
$stmt->close();
?>

<p><a href="list-all-events.php" class="button-style">&lt;&lt; Back to List</a></p>

<div id="page">

<title>Delete <?php echo $eventName; ?></title>

<h1>Delete <?php echo $eventName; ?></h1>


<form name="form1" method="post" action="deleteEventRecord.php">

<input name="eventID" type="hidden" value="<?php echo $eventID; ?>">

<p>Are you sure you wish to delete <?php echo $eventName; ?>?</p>
   <p>
    <input type="submit" name="del" id="del" value="Delete">
  </p>
</form>
<form name="form2" method="" action="list-all-events.php" id="saveForm">
    <input type="submit" name="save" id="save" value="Save">
</form>

</div>
<?php include 'template/footer.php' ?>