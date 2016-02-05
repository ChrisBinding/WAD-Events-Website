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
$stmt = $mysqli->prepare("SELECT platformID, platformName FROM platforms WHERE platformID = ?");
$stmt->bind_param('i', $_GET['platformID']);
$stmt->execute(); 
$stmt->bind_result($platformID, $platformName);
$stmt->fetch();
$stmt->close();
?>

<p><a href="list-all-platforms.php" class="button-style">&lt;&lt; Back to List</a></p>

<div id="page">

<title>Delete <?php echo $platformName; ?></title>

<h1>Delete <?php echo $platformName; ?></h1>


<form name="form1" method="post" action="deletePlatformRecord.php">
<input name="platformID" type="hidden" value="<?php echo $platformID; ?>">
<p>Are you sure you wish to delete <?php echo $platformName; ?>?</p>
   <p>
    <input type="submit" name="del" id="del" value="Delete">
  </p>
</form>
<form name="form2" method="" action="list-all-platforms.php" id="saveForm">
    <input type="submit" name="save" id="save" value="Save">
</form>

</div>
<?php include 'template/footer.php' ?>