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
$queryNews = "SELECT * FROM news INNER JOIN games ON news.gameID=games.gameID";
$resultNews = $mysqli->query($queryNews);
?>

<title>News | Content Management</title>

<p>
<a href="news.php" class="button-style">&lt;&lt; Back to News</a>
<a href="news-insert.php" class="button-topright">Add New Story</a>
</p>

<br><br>
<table class="center">
<tr>
<th>News Headline</th>
<th>Game</th>
<th>View</th>
<th>Edit</th>
<th>Delete</th>
</tr>

<?php  
  while($rowNews = $resultNews->fetch_assoc())
  {  
    echo "<tr>"; 
    echo "<td>{$rowNews['newsHeadline']}</td>";  
    echo "<td>{$rowNews['gameName']}</td>";
    echo "<td><a href=\"news-details.php?newsID={$rowNews['newsID']}\" class=\"button-tableview\">View</a></td>";  
    echo "<td><a href=\"news-edit.php?newsID={$rowNews['newsID']}\" class=\"button-tableedit\">Edit</a></td>" ;  
    echo "<td><a href=\"news-delete.php?newsID={$rowNews['newsID']}\" class=\"button-tabledelete\">Delete</a></td>";  
    echo "<tr>"; 
  } 
?>

</table>

<?php include 'template/footer.php' ?>