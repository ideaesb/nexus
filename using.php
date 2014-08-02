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
<title>Contact Sheet</title>
<link rel="stylesheet" type="text/css" href="css/home.css" />
<link href='http://fonts.googleapis.com/css?family=Rosario:400,400italic' rel='stylesheet' type='text/css'>
<script src="js/analyticstracking.js" type="text/javascript"></script>
</head>
<body>

<div id="mainContainer"> <!--keeps everything in one box -->
  
 <?php include 'nav.php'; ?>

<div style="padding-top:35px;padding-right:50px;">

<h2 style="padding-bottom:10px;">Using NExUS</h2>

<p>Site visitors can search <strong>NEclimateUS.org</strong> (NExUS) for region-specific climate information to assist in research, planning and adaptation work. Entries focus primarily on the states and provinces bordering the Gulf of Maine and Northwest Atlantic (stretching from South Carolina up to New Brunswick and Nova Scotia). The resources in this database allow municipal and regional managers to learn from the experience of others and organize collaborative approaches to regional climate challenges.</p>

<p>Resources appear in the following categories:</p>
<ul style="padding-left:210px;padding-right:20px;font-size:90%;">
<li>Reports and Tools (e.g., finished reports, research studies, vulnerability assessments, adaptation plans, visualization tools, mapping and modeling tools); </li>
<li>Ongoing Activities (such as monitoring or assessments);</li>
<li>Organizations (agencies, nonprofits and institutions doing climate-related work);</li>
<li>Needs (for further research or products as identified primarily in reports); and</li>
<li>Bibliography (references for written documents).</li>
</ul>

<p>You can search by geographic region (look under Area of Applicability), sector, or a particular scientific discipline or type of product. If you’re looking for a specific type of report or tool (e.g., a vulnerability assessment, state adaptation plan), it may be best to type that into the primary &quot;keyword search&quot;.</p>

<p>To update informational listings, please use the <a href="email.php">Contact Us</a>  page.</p>

</div>




 <?php include 'footer.php'; ?>
   
</div><!--ends mainContainer-->
  





</body>
</html>