<?php include 'template/header.php' ?>

<script>
function init(){
  document.getElementsByTagName('li').item(2).setAttribute('class', 'currentPage');
  var myDate = new Date();
  var myNode = document.createElement('div');
  document.getElementById('logo').appendChild(myNode);
  myNode.innerHTML = myDate.toDateString();
}
</script>

<?php 
require_once('includes/conn.inc.php'); 
$stmt = $mysqli->prepare("SELECT newsID, gameName, newsHeadline, newsSummary, newsContent, newsDate, newsImage, gameIcon, news.gameID
							FROM news 
							INNER JOIN games 
							ON news.gameID=games.gameID 
							WHERE newsID = ?");
$stmt->bind_param('i', $_GET['newsID']);
$stmt->execute(); 
$stmt->bind_result($newsID, $gameName, $newsHeadline, $newsSummary, $newsContent, $newsDate, $newsImage, $gameIcon, $gameID);
$stmt->fetch();
$stmt->close();
?>

<title><?php echo $newsHeadline; ?></title>

<p><a href="news.php" class="button-style">&lt;&lt; Back to News</a></p>

<?php 
		echo "<p><a href=\"news-delete.php?newsID={$newsID}\" class=\"button-viewdelete\">Delete</a></p>"; 
		echo "<p><a href=\"news-edit.php?newsID={$newsID}\" class=\"button-viewedit\">Edit</a></p>";
?>

<div id="page">
<div id="content">



<?php
	$timestampDate = strtotime($newsDate);  
	$displayDate = date("D d M Y", $timestampDate);

	echo "<h1>{$newsHeadline}</h1>";
	echo "<h3><img src=\"images/icons/{$gameIcon}\" width=\"20\" height=\"20\"> <a href=\"game-details.php?gameID={$gameID}\">{$gameName}</h3></a>";
	echo "<img src=\"images/news/{$newsImage}\" width=\"750\" height=\"300\"><br>";
	echo "<br><h3>News Story</h3>";
	echo "<p>{$newsContent}</p>";
	echo "<br><h3>News Date</h3>";
	echo "<p>{$newsDate}</p>";
?>

</div>
</div>
<?php include 'template/footer.php' ?>