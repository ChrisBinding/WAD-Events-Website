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
$stmt = $mysqli->prepare("SELECT newsID, gameID, newsHeadline, newsSummary, newsContent, newsDate, newsImage FROM news WHERE newsID = ?");
$stmt->bind_param('i', $_GET['newsID']);
$stmt->execute(); 
$stmt->bind_result($newsID, $gameID, $newsHeadline, $newsSummary, $newsContent, $newsDate, $newsImage);
$stmt->fetch();
$stmt->close();
?>

<p>
<a href="list-all-news.php" class="button-style">&lt;&lt; Back to List</a>
<h1 class="center">Insert New Story</h1>

</p>

<div id="page">

<title>Insert New Story</title>




<!-- Form Start -->
<form name="form1" method="post" action="insertNewsRecord.php">

<input name="newsID" type="hidden" value="<?php echo $newsID; ?>">

  <p class="indent">
    <label for="newsHeadline">News Headline</label>
    <input type="text" name="newsHeadline" id="newsHeadline" value="<?php echo $newsHeadline; ?>">
  </p>

  <p class="indent">
    <label for="newsSummary">News Summary</label>
    <textarea name="newsSummary" id="newsSummary" cols="45" rows="5"><?php echo $newsSummary; ?></textarea>
  </p>

  <p class="indent">
    <label for="newsContent">News Content</label>
    <textarea name="newsContent" id="newsContent" cols="45" rows="5"><?php echo $newsContent; ?></textarea>
  </p>

  <p class="indent">
  <label for="gameName">Game Name</label>
  <select name="gameName">
  <?php
  echo "<option value ='$gameID'>Select A Game</option>";
  echo "<option value =''>-------------------------------</option>";
  $stmt = $mysqli->prepare("SELECT gameName, gameID FROM games");
  $stmt->execute();
  $stmt->bind_result($name, $id);
  while ($stmt->fetch()){
      echo "<option value='$id'>$name</option>";
  }
  $stmt->close();
  ?>
</select>
<?php echo "<a href=\"list-all-games.php\" class=\"button-editedit\">Edit Games</a>"; ?>
</p>

  <p class="indent">
    <label for="newsDate">News Date</label>
    <input type="date" name="newsDate" id="newsDate" value="<?php echo $newsDate; ?>">
  </p>

  <p class="indent">
    <label for="newsImage">News Image</label>
    <input type="text" name="newsImage" id="newsImage" value="<?php echo $newsImage; ?>">
  </p>

  <p>
    <input type="submit" name="button" id="button" value="Update" >
  </p>

</form>
</div>
<?php include 'template/footer.php' ?>