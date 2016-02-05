<?php include 'template/header.php' ?>

<?php 
require_once('includes/conn.inc.php'); 
$stmt = $mysqli->prepare("SELECT gameID, gameImage FROM games WHERE gameID = ?");
$stmt->bind_param('i', $_GET['gameID']);
$stmt->execute(); 
$stmt->bind_result($gameID, $gameImage);
$stmt->fetch();
$stmt->close();
?>

<script src="scripts/jquery.min.js"></script>
<script src="scripts/jssor.slider.mini.js"></script>
<script>
        jQuery(document).ready(function ($) {
            var options = {
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
        });
    </script>

<script>
function init(){
  document.getElementsByTagName('li').item(0).setAttribute('class', 'currentPage');
  var myDate = new Date();
  var myNode = document.createElement('div');
  document.getElementById('logo').appendChild(myNode);
  myNode.innerHTML = myDate.toDateString();
}
</script>

<title>E-Sports Events | Home</title>
<div id="page">
    <div id="content">

    <h2>Welcome To E-Sports</h2>

<!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 700px;
        height: 300px; ">

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 700px; height: 300px;
            overflow: hidden;">
            <div><img u="image" src="images/cup2_banner.png" /></div>
            <div><img u="image" src="images/lol_banner.jpg" /></div>
            <div><img u="image" src="images/hearthstone_banner.jpg" /></div>
            <div><img u="image" src="images/international_banner.png" /></div>
            <div><img u="image" src="images/csgo_banner2.jpg" /></div>
            <div><img u="image" src="images/codaw_banner.jpg" /></div>
            <div><img u="image" src="images/events_banner.jpg" /></div>
        </div>
        
        <!-- Arrow Navigator Skin Begin -->
        <style>
            .jssora03l, .jssora03r, .jssora03ldn, .jssora03rdn
            {
              position: absolute;
              cursor: pointer;
              display: block;
                background: url(images/a04.png) no-repeat;
                overflow:hidden;
            }
            .jssora03l { background-position: -3px -33px; }
            .jssora03r { background-position: -63px -33px; }
            .jssora03l:hover { background-position: -123px -33px; }
            .jssora03r:hover { background-position: -183px -33px; }
            .jssora03ldn { background-position: -243px -33px; }
            .jssora03rdn { background-position: -303px -33px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora03l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora03r" style="width: 55px; height: 55px; top: 123px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">bootstrap slider</a>
    </div>
    <!-- Jssor Slider End -->
      <br>
      <p>Electronic sports (also known as esports) is a term for organised video game competitions, especially between professionals. The most common video game genres associated with electronic sports are real-time strategy, fighting, first-person shooter, and multiplayer online battle arena.</p>
      <p>Although esports have long been a part of video game culture, competitions have seen a large surge in popularity in recent years. While competitions before around the year 2000 were largely between amateurs, the proliferation of professional competitions and growing viewership now supports a significant number of professional players and teams, and many video game developers now build features into their games designed to facilitate such competition.</p>
      <p>Tournaments such as the The International, the Evolution Championship Series, and the Intel Extreme Masters provide both live broadcasts of the competition, and cash prizes to competitors.</p>
      <p>Whatever you interest in videogames, there is an e-sport for you. And if you're passionate about a particualar game, or indeed team - what better way to experience them play than to be right there at the event in person, watching them live. The atmosphere there is simular to what you would experience at a conventional sports game - with fans cheering on their favoured team as they watch the action unfold live infront of them.</p>
      <p></p>
    </div>
    
<div class="sidebar">
      <div>
        <h2>Top Games Right Now</h2>
        <ul class="style2">
          <li class="first">
            <h3><a href="#">1. League of Legends</a></h3>
            <p>Watch the world's top teams battle it out on Summoner's Rift at many different locations around the world!</p>
          </li>
          <li>
            <h3><a href="#">2. DotA 2</a></h3>
            <p>From the mighty International, all the down to smaller, local LAN's - experience amazing DotA plays at a location near you!</p>
          </li>
          <li>
            <h3><a href="#">3. Counter Strike: Global Offensive</a></h3>
            <p>Don't miss a frag, the best CS:GO teams battle it out at many locations around the world throughout the year - and one's bound to be near you!</p>
          </li>
          <li>
            <h3><a href="#">4. Hearthstone</a></h3>
            <p>An addictive mix of stratergy and RNG combine to make Hearthstone an intense E-Sport to watch - go along and watch live at an event near you!</p>
          </li>
        </ul>
      </div>
    </div>

  </div>
<?php include 'template/footer.php' ?>