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
<title>E-Sports Events | Games</title>
<?php 
require_once('includes/conn.inc.php'); 
$queryGames = "SELECT * FROM games";
$resultGames = $mysqli->query($queryGames);
?>



<div id="page">
    <div id="content">
      <h2>The Games That Make E-Sports</h2>
      <p><img src="images/games_banner.png" width="750" height="200" alt=""></p>
      <p>Weather you like First Person Shooter (FPS) games, like Counter Strike: Global Offensive and Call of Duty, MoBA games, like League of Legends and DotA 2 or even card games like Hearthstone: Heroes of Warcraft - there is always a sport that will appeal to you.</p>
      <p>To get more information on each of the different games that are detailed on this website, click the relevent links below to be redirected to each game's individual information and explaination page.</p>
    </div>
    <div class="sidebar">
      <div>
        <h2>Did you know?</h2>
        <ul class="style2">
          <li class="first">
            <h3><a href="#">The DotA 2 International 2014</a></h3>
            <p><img src="images/compendium.png" width="300" height="100" alt="The Compendium 2014"></p>
            <p>The International 2014 for DotA 2 had a total prize pool of $10,923,995 mostly raised by the community themselves, through the purchase of a digital item in the game called 'The Compendium'.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- <?php include 'game-search.php' ?> -->
<p><a href="list-all-games.php" class="button-topright">Edit Games</a></p><br><br>
<div class="three-column-line1">

    <?php 
        
        while($rowGames = $resultGames->fetch_assoc())
        {
            echo "<div class=\"box\">";
            echo "<h2><a href=\"game-details.php?gameID={$rowGames['gameID']}\">{$rowGames['gameName']}</a></h2>";
            echo "<p><img src=\"images/covers/{$rowGames['gameImage']}\" width=\"300\" height=\"150\" alt=\"League of Legends Banner\"></p>";
            echo "<p>{$rowGames['gameSummary']}</p>";
            echo "</div>";
        }
      

    ?>
    
  </div>
  

  <?php include 'template/footer.php' ?>