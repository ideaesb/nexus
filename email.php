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
</head>
<body>

<div id="mainContainer"> <!--keeps everything in one box -->
  
 <?php include 'nav.php'; ?>

 
<div id="midde-column"> <!--container that holds main text and map -->

<form id="form1" name="form1" method="post" action="gmail.php">
<table  border="0" cellspacing="0" cellpadding="0">
  <tr>
   <td colspan="2" style="padding-top:10px;padding-left:10px;padding-bottom:10px;">
     NExUS is still in development and the sponsoring partners welcome your feedback. To submit potential resources for the database, update existing listings, or suggest improvements to enhance the site’s utility, please contact us:
   </td>
  </tr>

  <tr>
    <td width="50" height="44" align="center"><label for="name">Name</label></td>
    <td><input name="name" type="text" id="name" size="30" /></td>
  </tr>
  <tr>
    <td height="45" align="center"><label for="email">Email</label></td>
    <td><input name="email" type="text" id="email" size="30" /></td>
  </tr>
  <tr>
    <td height="41" align="center"><label for="question">Question</label></td>
    <td><textarea name="question" cols="30" rows="7" id="question"></textarea></td>
  </tr>
  <tr>
    <td height="38">&nbsp;</td>
    <td><label>
      <input type="submit" name="Submit" id="Submit" value="Send" />
    </label></td>
  </tr>
</table>

</form>



</div><!--ends middle-column-->

<div id="right-column">
<?php include 'right.php'; ?>
</div>
   


 <?php include 'footer.php'; ?>
   
</div><!--ends mainContainer-->
  





</body>
</html>