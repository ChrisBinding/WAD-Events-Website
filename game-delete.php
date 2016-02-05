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
$stmt = $mysqli->prepare("SELECT gameID, gameName FROM games WHERE gameID = ?");
$stmt->bind_param('i', $_GET['gameID']);
$stmt->execute(); 
$stmt->bind_result($gameID, $gameName);
$stmt->fetch();
$stmt->close();
?>

<p><a href="list-all-games.php" class="button-style">&lt;&lt; Back to List</a></p>

<div id="page">

<title>Delete <?php echo $gameName; ?></title>

<h1>Delete <?php echo $gameName; ?></h1>


<form name="form1" method="post" action="deleteGameRecord.php">

<input name="gameID" type="hidden" value="<?php echo $gameID; ?>">

<p>Are you sure you wish to delete <?php echo $gameName; ?>?</p>
   <p>
    <input type="submit" name="del" id="del" value="Delete">
  </p>
</form>
<form name="form2" method="" action="list-all-games.php" id="saveForm">
    <input type="submit" name="save" id="save" value="Save">
</form>

</div>
<?php include 'template/footer.php' ?>