<?php
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

  $needs = 0;
  $daps = 0;
  $paws = 0;
  $orgs = 0;
  $bibs = 0;

 /*
 $conn = pg_connect("dbname=epiko user=postgres password=admin123");

 $result=pg_query($conn, "SELECT COUNT(*) FROM need");
 $needs = pg_fetch_result($result, 0, 0);

 $result=pg_query($conn, "SELECT COUNT(*) FROM dap");
 $daps = pg_fetch_result($result, 0, 0);

 $result=pg_query($conn, "SELECT COUNT(*) FROM paw");
 $paws = pg_fetch_result($result, 0, 0);

 $result=pg_query($conn, "SELECT COUNT(*) FROM org");
 $orgs = pg_fetch_result($result, 0, 0);

 $result=pg_query($conn, "SELECT COUNT(*) FROM bib");
 $bibs = pg_fetch_result($result, 0, 0);

 pg_close ($conn);

 */

 


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    <li><a href="nexus/needs" title="Climate information (data, products, services) requested by managers, decision-makers, and research scientists"><span>Needs</span></a></li>
    <li><a href="nexus/daps" title="Existing climate resources, including (but not limited to) models, reports, vulnerability assessments, visualization/web tools, etc"><span>Data, Products &amp; Services</span></a></li>
    <li><a href="nexus/paws" title="Ongoing efforts such as climate-smart/adaptation initiatives, research projects, assessments, etc"><span>Projects &amp; Activities</span></a></li>
    <li><a href="nexus/orgs" title="Partners &amp; Programs"><span>Programs &amp; Partners</span></a></li>
    <li><a href="nexus/bibs" title="Bibliography"><span>Bibliography</span></a></li>
  </ul>


 <?php include 'left.php'; ?>

 
<div id="midde-column"> <!--container that holds main text and map -->
	<div id="outermap">
     
<img src="images/map.jpg" id="nemap" width="350" height="317" border="0" usemap="#Map" />
<map name="Map" id="map">
    <area id="map-1" shape="poly" coords="70,11,70,72,79,91,95,94,114,106,131,107,132,112,164,112,177,100,180,90,188,75,193,71,198,74,206,74,210,80,210,100,217,111,235,136,278,112,304,95,349,66,350,-1,69,0,71,11,143,113" href="#">
    <area id="map-2" shape="poly" coords="143,113,144,135,140,177,163,172,180,169,174,151,181,133,194,129,208,122,219,117,209,101,209,79,202,74,191,73,181,90,169,110,142,113" href="#">
    <area id="map-3" shape="poly" coords="58,163,77,149,75,141,98,141,109,137,110,127,126,113,144,113,140,176,159,178,144,184,133,185,133,198,125,208,119,202,122,212,119,225,113,235,113,222,110,213,112,201,106,216,107,234,109,241,114,246,21,245,42,231,34,218,53,200,59,189,58,163" href="#">
    <area id="map-4" shape="poly" coords="44,244,113,246,112,260,106,272,88,283,53,311,37,284,26,273,26,269,14,268,19,261,44,244" href="#">
    <area id="map-5" shape="poly" coords="8,166,9,207,17,212,34,217,40,209,52,200,58,187,58,162,43,170,34,170,21,166,8,166" href="#">
</map>

     
 </div>


   <p><i>This website was developed through the collaborative efforts of NOAA, NALCC, NWF and EPA.</i> </p>
  
</div><!--ends middle-column-->
<div id="right-column">

 <p><strong>NEclimateUS.org</strong> (a.k.a. 'neXus') is a searchable online database that provides a gateway to climate information for the Eastern US. It summarizes needs for climate information as articulated in publications; identifies available data, products and services; and captures planned and on-going projects. The goal is to offer a tool to search for regionally relevant climate information, and to facilitate collaborative opportunities across the network of climate-focused programs and partners in the Eastern US.

NeclimateUS.org is in its early stages of development.  Content will change with time to reflect developments in climate work within the region, and in response to individual sector needs when necessary.

For detailed information about the content of NEclimateUS.org and tips for using the site, please visit <font style="background:yellow; font-style:italic"><a href="docs/aboutNEClimateUS.org.pdf" target="_blank">about NEclimateUS.org</a></font>.  
</p>
     <br/>
</div>
   
   
</div><!--ends mainContainer-->
  


<div class="secontainer"> 
 <?php include 'footer.php'; ?>
</div>





</body>
</html>