<?php
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Contact</title>
<link rel="stylesheet" type="text/css" href="../css/home.css" />
<link href='http://fonts.googleapis.com/css?family=Rosario:400,400italic' rel='stylesheet' type='text/css'>


<script src="../js/jquery.js" type="text/javascript"></script>

</head>
<body>

<div id="mainContainer"> <!--keeps everything in one box -->
  
<div id="header">
  <img src="../images/bluelogo.jpg" />
</div>

  <ul id="nav">
    <li id="nav-1"><a href="../index.php"><span>&nbsp; HOME </span></a></li>
    <li><a href="../nexus/needs" title="Climate information (data, products, services) requested by managers, decision-makers, and research scientists"><span>Needs</span></a></li>
    <li><a href="../nexus/daps" title="Existing climate resources, including (but not limited to) models, reports, vulnerability assessments, visualization/web tools, etc"><span>Data, Products &amp; Services</span></a></li>
    <li><a href="../nexus/paws" title="Ongoing efforts such as climate-smart/adaptation initiatives, research projects, assessments, etc"><span>Projects &amp; Activities</span></a></li>
    <li><a href="../nexus/orgs" title="Partners &amp; Programs"><span>Programs &amp; Partners</span></a></li>
    <li><a href="../nexus/bibs" title="Bibliography"><span>Bibliography</span></a></li>
  </ul>


 <?php include '../left.php'; ?>

 
<div id="midde-column"> <!--container that holds main text and map -->


<form id="form1" name="form1" method="post" action="form_mailer.php">
<table width="455" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="175" height="44" align="center"><label for"name">name</label></td>
    <td width="280"><input name="name" type="text" id="name" size="30" />
      </td>
  </tr>
  <tr>
    <td height="45" align="center"><label for="email">email</label></td>
    <td><input name="email" type="text" id="email" size="30" /></td>
  </tr>
  <tr>
    <td height="41" align="center"><label for="question">question</label></td>
    <td><textarea name="question" cols="30" rows="5" id="question"></textarea></td>
  </tr>
  <tr>
    <td height="38">&nbsp;</td>
    <td><label>
      <input type="submit" name="Submit" id="Submit" value="Submit" />
    </label></td>
  </tr>
</table>

</form>


  
</div><!--ends middle-column-->
   
</div><!--ends mainContainer-->
  


<div class="secontainer"> 
 <?php include '../footer.php'; ?>
</div>

</body>
</html>