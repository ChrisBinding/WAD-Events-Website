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
$queryPlatforms = "SELECT * FROM platforms";
$resultPlatforms = $mysqli->query($queryPlatforms);
?>

<title>Platforms | Content Management</title>

<p>
<a href="games.php" class="button-style">&lt;&lt; Back to Games</a>
<a href="platform-insert.php" class="button-topright">Add New Platform</a>
</p>

<br><br>
<table class="center">
<tr>
<th>Platform Name</th>
<th>Delete</th>
</tr>

<?php  
	while($rowPlatforms = $resultPlatforms->fetch_assoc())
	{  
		echo "<tr>"; 
		echo "<td>{$rowPlatforms['platformName']}</td>";  
		echo "<td><a href=\"platform-delete.php?platformID={$rowPlatforms['platformID']}\" class=\"button-tabledelete\">Delete</a></td>";  
		echo "<tr>"; 
	} 
?>

</table>

<?php include 'template/footer.php' ?>