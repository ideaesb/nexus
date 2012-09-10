<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/home.css" />
<link href='http://fonts.googleapis.com/css?family=Rosario:400,400italic' rel='stylesheet' type='text/css'>


<script src="js/jquery.js" type="text/javascript"></script>


<script type='text/javascript'>

function preload(arrayOfImages) {
    $(arrayOfImages).each(function(){
        $('<img/>')[0].src = this;
        // Alternatively you could use:
        // (new Image()).src = this;
    });
}

// Usage:

preload([
    'images/map.jpg',
    'images/map-1.jpg',
    'images/map-2.jpg',
    'images/map-3.jpg',
    'images/map-4.jpg',
    'images/map-5.jpg'
]);


$(document).ready(function() {

//set off state 
var nav_off = "images/map.jpg";

// functions for over and off
function over(image) {
    $("#nemap").attr("src", image);
}
function off() {
    $("#nemap").attr("src", nav_off);
}

$("#map area").hover(
    function () {
        var button = $(this).attr("id");
        over("images/" + button + ".jpg");
    },
    function () {
        off();
    });

});
</script>




</head>



<body>




<div id="mainContainer"> <!--keeps everything in one box -->
  
<div id="header">
  <img src="images/bluelogo.jpg" />
</div>

  <ul id="nav">
    <li id="nav-1"><a href="index.php"><span>&nbsp; HOME </span></a></li>
    <li><a href="/needs" title="Needs"><span>Needs</span></a></li>
    <li><a href="/dps" title="Data Products Services"><span>Data, Products &amp; Services</span></a></li>
    <li><a href="/pna" title="Projects Activities"><span>Projects &amp; Activities</span></a></li>
    <li><a href="/programs" title="Partners"><span>Programs &amp; Partners</span></a></li>
    <li><a href="/bibs" title="Bibliography"><span>Bibliography</span></a></li>
  </ul>


 <?php include 'left.php'; ?>

 
<div id="midde-column"> <!--container that holds main text and map -->
	<div id="outermap">
     
<img src="images/map.jpg" id="nemap" width="350" height="317" border="0" usemap="#Map" />
<map name="Map" id="map">
    <area id="map-1" shape="poly" coords="70,11,70,72,79,91,95,94,114,106,131,107,132,112,164,112,177,100,180,90,188,75,193,71,198,74,206,74,210,80,210,100,217,111,235,136,278,112,304,95,349,66,350,-1,69,0,71,11,143,113" href="1">
    <area id="map-2" shape="poly" coords="143,113,144,135,140,177,163,172,180,169,174,151,181,133,194,129,208,122,219,117,209,101,209,79,202,74,191,73,181,90,169,110,142,113" href="2">
    <area id="map-3" shape="poly" coords="58,163,77,149,75,141,98,141,109,137,110,127,126,113,144,113,140,176,159,178,144,184,133,185,133,198,125,208,119,202,122,212,119,225,113,235,113,222,110,213,112,201,106,216,107,234,109,241,114,246,21,245,42,231,34,218,53,200,59,189,58,163" href="3">
    <area id="map-4" shape="poly" coords="44,244,113,246,112,260,106,272,88,283,53,311,37,284,26,273,26,269,14,268,19,261,44,244" href="4">
    <area id="map-5" shape="poly" coords="8,166,9,207,17,212,34,217,40,209,52,200,58,187,58,162,43,170,34,170,21,166,8,166" href="5">
</map>

     
 </div>


   <p><i>This website was developed through the collaborative efforts of NOAA, NWF/ NALCC and NESCAUM</i> </p>
  
</div><!--ends middle-column-->
<div id="right-column">

 <p><strong>NEclimateUS.org</strong> (a.k.a. 'neXus') is a website serving as a gateway to a broad range of information related to climate in the Eastern US. It provides summaries of climate needs; information on the available resources including data, products and services; as well as planned and on-going climate-smart projects. Through it's searchable web-based platform, this diverse information is able to connect to a network of climate-focused programs and partners. </p>
<p>The primary goals of this web portal are to recognize the needs of multiple users to raise the awareness of data providers to these needs in support of cohesive future research and efforts. Additionally, it is intended to serve as a shared resource for a wide audience, including research scientists, service providers, fish and wildlife managers, and decision-makers. As such, NEclimateUS.org has been built through the collaboration of and contributions from a family of agencies, institutions, and organizations to achieve these objectives. </p>
     <br/>
</div>
   
   
</div><!--ends mainContainer-->
  


<div class="secontainer"> 
 <?php include 'footer.php'; ?>
</div>





</body>
</html>