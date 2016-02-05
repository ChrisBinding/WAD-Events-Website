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
$stmt = $mysqli->prepare("SELECT gameID, gameName, gameDescription, gameCertificate, gameImage, gameDeveloper, platformName, games.platformID, metacriticScore, releaseDate, gameIcon, twitterID, twitterURL, gameSummary FROM games INNER JOIN platforms ON games.platformID=platforms.platformID  WHERE gameID = ?");
$stmt->bind_param('i', $_GET['gameID']);
$stmt->execute(); 
$stmt->bind_result($gameID, $gameName, $gameDescription, $gameCertificate, $gameImage, $gameDeveloper, $platformName, $platformID, $metacriticScore, $releaseDate, $gameIcon, $twitterID, $twitterURL, $gameSummary);
$stmt->fetch();
$stmt->close();
?>

<title>Edit <?php echo $gameName; ?></title>

<p><a href="list-all-games.php" class="button-style">&lt;&lt; Back to List</a></p>

<?php echo "<p><a href=\"game-delete.php?gameID={$gameID}\" class=\"button-viewdelete\">Delete</a></p>"; ?>

<h1 class="center">Edit: <?php echo $gameName;?></h1>


<div id="page">

<!-- Form Start -->
<form name="form1" method="post" action="editGameRecord.php">

<!-- Invisible gameID input -->
<input name="gameID" type="hidden" value="<?php echo $gameID; ?>">

  <p class="indent">
    <label for="gameName">Game Name</label>
    <input type="text" name="gameName" id="gameName" value="<?php echo $gameName; ?>">
  </p>

  <p class="indent">
    <label for="gameDeveloper">Game Developer</label>
    <input type="text" name="gameDeveloper" id="gameDeveloper" value="<?php echo $gameDeveloper; ?>">
  </p>

  <p class="indent">
    <label for="releaseDate">Release Date</label>
    <input type="date" name="releaseDate" id="releaseDate" value="<?php echo $releaseDate; ?>">
  </p>

  <p class="indent">
  <label for="platformName">Game Platform</label>
  <select name="platformName">
  <?php
  echo "<option value ='$platformID'>$platformName</option>";
  echo "<option value =''>-------------------------------</option>";
  $stmt = $mysqli->prepare("SELECT platformName, platformID FROM platforms");
  $stmt->execute();
  $stmt->bind_result($name, $id);
  while ($stmt->fetch()){
      echo "<option value='$id'>$name</option>";
  }

  $stmt->close();
  ?>
</select>
<?php echo "<a href=\"list-all-platforms.php\" class=\"button-editedit\">Edit Platforms</a>"; ?>
</p>

  <p class="indent">
    <label for="metacriticScore">Metacritic Score</label>
    <input type="number" name="metacriticScore" id="metacriticScore" value="<?php echo $metacriticScore; ?>">
  </p>

  <p class="indent">
    <label for="gameImage">Game Image</label>
    <input type="text" name="gameImage" id="gameImage" value="<?php echo $gameImage; ?>">
  </p>

  <p class="indent">
    <label for="gameIcon">Game Icon</label>
    <input type="text" name="gameIcon" id="gameIcon" value="<?php echo $gameIcon; ?>">
  </p>

  <p class="indent">
    <label for="twitterID">Twitter Widget ID#</label>
    <input type="text" name="twitterID" id="twitterID" value="<?php echo $twitterID; ?>">
  </p>

  <p class="indent">
    <label for="twitterURL">Twitter URL</label>
    <input type="text" name="twitterURL" id="twitterURL" value="<?php echo $twitterURL; ?>">
  </p>

  <p class="indent">
    <label for="gameSummary">Game Summary</label>
    <textarea name="gameSummary" id="gameSummary" cols="45" rows="5"><?php echo $gameSummary; ?></textarea>
  </p>

  <p class="indent">
    <label for="gameDescription">Game Description</label>
    <textarea name="gameDescription" id="gameDescription" cols="45" rows="5"><?php echo $gameDescription; ?></textarea>
  </p>

 <p class="indent">
    <label for="gameCertificate">ESRB Rating:</label><br>
    
    <input type="radio" name="gameCertificate" value="Everyone" id="gameCertificate_Everyone" <?php if($gameCertificate == 'Everyone'){echo "checked";}?>>
    <label for="gameCertificate_Everyone">Everyone</label><br>

    <input type="radio" name="gameCertificate" value="Teen" id="gameCertificate_Teen" <?php if($gameCertificate == 'Teen'){echo "checked";}?>>
    <label for="gameCertificate_Teen">Teen</label><br>

    <input type="radio" name="gameCertificate" value="Mature" id="gameCertificate_Mature" <?php if($gameCertificate == 'Mature'){echo "checked";}?>>
    <label for="gameCertificate_Mature">Mature</label><br> 

  </p>

  <p>
    <input type="submit" name="button" id="button" value="Update" >
  </p>

</form>
</div>
<?php include 'template/footer.php' ?>