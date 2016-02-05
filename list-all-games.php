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
$queryGames = "SELECT * FROM games INNER JOIN platforms ON games.platformID=platforms.platformID";
$resultGames = $mysqli->query($queryGames);
?>

<title>Games | Content Management</title>

<p>
<a href="games.php" class="button-style">&lt;&lt; Back to Games</a>
<a href="game-insert.php" class="button-topright">Add New Game</a>
</p>

<br><br>
<table class="center">
<tr>
<th>Game Title</th>
<th>Game Developer</th>
<th>ESRB Rating</th>
<th>Metacritic Rating</th>
<th>Competition Platform</th>
<th>View</th>
<th>Edit</th>
<th>Delete</th>
</tr>

<?php  
	while($rowGames = $resultGames->fetch_assoc())
	{  
		echo "<tr>"; 
		echo "<td>{$rowGames['gameName']}</td>";  
		echo "<td>{$rowGames['gameDeveloper']}</td>";
		echo "<td><img src=\"images/esrb/{$rowGames['gameCertificate']}.png\" width=\"40\" height=\"40\"></a></td>";
		echo "<td><img src=\"images/metacritic/{$rowGames['metacriticScore']}.png\" width=\"40\" height=\"40\"></a></td>";
		echo "<td>{$rowGames['platformName']}</td>";
		echo "<td><a href=\"game-details.php?gameID={$rowGames['gameID']}\" class=\"button-tableview\">View</a></td>";  
		echo "<td><a href=\"game-edit.php?gameID={$rowGames['gameID']}\" class=\"button-tableedit\">Edit</a></td>" ;  
		echo "<td><a href=\"game-delete.php?gameID={$rowGames['gameID']}\" class=\"button-tabledelete\">Delete</a></td>";  
		echo "<tr>"; 
	} 
?>

</table>

<?php include 'template/footer.php' ?>