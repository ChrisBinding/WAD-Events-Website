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
$queryNews = "SELECT * FROM news INNER JOIN games ON news.gameID=games.gameID ORDER BY newsDate DESC";
$resultNews = $mysqli->query($queryNews);
?>

<title>E-Sports Events | News</title>

<div id="page">
    <div id="content">
      <h2>Latest E-Sports News</h2>
    </div>
</div>
 

  <!-- <?php include 'game-search.php' ?> -->
<p><a href="list-all-news.php" class="button-topright">Edit News</a></p>
<div class="news-grid">

    <?php 
        
        while($rowNews = $resultNews->fetch_assoc())
        {
            echo "<div class=\"box\">";
            echo "<h1><a href=\"news-details.php?newsID={$rowNews['newsID']}\">{$rowNews['newsHeadline']}</a></h1>";
            echo "<h3><img src=\"images/icons/{$rowNews['gameIcon']}\" width=\"20\" height=\"20\"> <a href=\"game-details.php?gameID={$rowNews['gameID']}\">{$rowNews['gameName']}</h3></a>";
            echo "<p><img src=\"images/news/{$rowNews['newsImage']}\" width=\"800\" height=\"300\" alt=\"News Story Banner\"></p>";
            echo "<p>{$rowNews['newsSummary']}</p>";
            echo "</div>";
        }
      

    ?>
   
  </div>

  <?php include 'template/footer.php' ?>