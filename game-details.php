<?php include 'template/header.php' ?>

<script>
function init(){
  document.getElementsByTagName('li').item(1).setAttribute('class', 'currentPage');
  var myDate = new Date();
  var myNode = document.createElement('div');
  document.getElementById('logo').appendChild(myNode);
  myNode.innerHTML = myDate.toDateString();
}
</script>


<?php 
require_once('includes/conn.inc.php'); 
$stmt = $mysqli->prepare("SELECT gameID, gameName, gameDescription, gameCertificate, gameImage, gameDeveloper, platformName, metacriticScore, releaseDate, twitterID, twitterURL 
							FROM games 
							INNER JOIN platforms 
							ON games.platformID=platforms.platformID 
							WHERE gameID = ?");
$stmt->bind_param('i', $_GET['gameID']);
$stmt->execute(); 
$stmt->bind_result($gameID, $gameName, $gameDescription, $gameCertificate, $gameImage, $gameDeveloper, $platformName, $metacriticScore, $releaseDate, $twitterID, $twitterURL);
$stmt->fetch();
$stmt->close();
?>

<p><a href="list-all-games.php" class="button-style">&lt;&lt; Back to List</a></p>
<title><?php echo $gameName; ?> Details</title>

<?php 
		echo "<p><a href=\"game-delete.php?gameID={$gameID}\" class=\"button-viewdelete\">Delete</a></p>"; 
		echo "<p><a href=\"game-edit.php?gameID={$gameID}\" class=\"button-viewedit\">Edit</a></p>";
?>

<div id="page">
<div id="content">



<?php
	$timestampDate = strtotime($releaseDate);  
	$displayDate = date("D d M Y", $timestampDate);

	echo "<h1>{$gameName}</h1>";
	echo "<img src=\"images/covers/{$gameImage}\" width=\"750\" height=\"300\">";
	echo "<br><h3>ESRB Rating:</h3>";
	echo "<img src=\"images/esrb/{$gameCertificate}.png\" class=\"rightImg\">";
	echo "<p>{$gameCertificate}</p>";
	echo "<h3>Metacritic Score:</h3>";
	echo "<img src=\"images/metacritic/{$metacriticScore}.png\" width=\"40\" height=\"40\">";
	echo "<p>{$metacriticScore}</p>";
	echo "<h3>Developer:</h3>";
	echo "<p>{$gameDeveloper}</p>";
	echo "<h3>E-Sports Platform:</h3>";
	echo "<p>{$platformName}</p>";
	echo "<h3>Release Date:</h3>";
	echo "<p>{$displayDate}</p>";
	echo "<h3>Description:</h3>";
	echo "<p>{$gameDescription}</p>";
?>

</div>

    <div class="sidebar">
      <div>
        <h2>Recent Tweets</h2>
        <a class="twitter-timeline" href="<?php echo "{$twitterURL}" ?>" data-widget-id="<?php echo "{$twitterID}" ?>">Tweets by <?php echo "{$gameName}" ?></a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </ul>
      </div>
    </div>


</div>
<?php include 'template/footer.php' ?>