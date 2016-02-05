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
$stmt = $mysqli->prepare("SELECT newsID, newsHeadline FROM news WHERE newsID = ?");
$stmt->bind_param('i', $_GET['newsID']);
$stmt->execute(); 
$stmt->bind_result($newsID, $newsHeadline);
$stmt->fetch();
$stmt->close();
?>

<p>
<a href="list-all-news.php" class="button-style">&lt;&lt; Back to News</a>

</p>

<div id="page">

<title>Delete <?php echo $newsHeadline; ?></title>
<h1>Delete <?php echo $newsHeadline; ?></h1>



<form name="form1" method="post" action="deleteNewsRecord.php">

<input name="newsID" type="hidden" value="<?php echo $newsID; ?>">

<p>Are you sure you wish to delete <?php echo $newsHeadline; ?>?</p>
   <p>
    <input type="submit" name="del" id="del" value="Delete">
  </p>
</form>
<form name="form2" method="" action="list-all-news.php" id="saveForm">
    <input type="submit" name="save" id="save" value="Save">
</form>

</div>
<?php include 'template/footer.php' ?>