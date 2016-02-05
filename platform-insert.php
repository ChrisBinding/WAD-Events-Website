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
                                platformID, 
                                platformName 

                                FROM platforms
                                WHERE platformID = ?");

$stmt->bind_param('i', $_GET['platformID, platformName']);
$stmt->execute(); 
$stmt->bind_result(
                  $platformID, 
                  $platformName);
$stmt->fetch();
$stmt->close();
?>

<title>Create New Platform</title>

<p><a href="list-all-platforms.php" class="button-style">&lt;&lt; Back to List</a></p>

<?php echo "<p><a href=\"platform-delete.php?platformID={$platformID}\" class=\"button-viewdelete\">Delete</a></p>"; ?>

<h1 class="center">Create New Platform</h1><br>

<div id="page">

<!-- Form Start -->
<form name="form1" method="post" action="insertPlatformRecord.php">

<!-- Invisible eventID input -->
<input name="platformID" type="hidden" value="<?php echo $platformID; ?>">

  <p class="indent">
    <label for="platformName">Platform Name</label>
    <input type="text" name="platformName" id="platformName" value="<?php echo $platformName; ?>">
  </p>

  <p>
    <input type="submit" name="button" id="button" value="Update" >
  </p>

</form>
</div>
<?php include 'template/footer.php' ?>