<!DOCTYPE html>
<?php

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('America/New_York');

require 'email/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "nexus.inquiry@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "noaa2014gom05";

//Set who the message is to be sent from
$mail->setFrom('nexus.inquiry@gmail.com', 'Nexus Inquiry');

//Set an alternative reply-to address
$mail->addReplyTo('nexus.inquiry@gmail.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('uday.kari@noaa.gov', 'Uday Kari');
$mail->addAddress('uday.kari@gmail.com', 'Uday Kari');
$mail->addAddress('marina@gulfofmaine.org', 'Marina Schauffler');
$mail->addAddress('ellen.l.mecray@noaa.gov', 'Ellen Mecray');

//Set the subject line
$mail->Subject = 'NEclimateUS.org Inquiry';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

//Replace the plain text body with one created manually


//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

/* These are the variable that tell the subject of the email and where the email will be sent.*/

//$emailSubject = 'Customer Has a Question!';
//$mailto = 'you@youremail.com';

/* These will gather what the user has typed into the fieled. */

$nameField = $_POST['name'];
$emailField = $_POST['email'];
$questionField = $_POST['question'];

/* This takes the information and lines it up the way you want it to be sent in the email. */

$mail->Body = $questionField;

$headers = "From: $emailField\r\n"; // This takes the email and displays it as who this email is from.
$headers .= "Content-type: text/html\r\n"; // This tells the server to turn the coding into the text.

$mail->Header = $headers;

// stop the vomit
$mail->SMTPDebug = false;
$mail->do_debug = 0;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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


<?php
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
?>
</div><!--ends middle-column-->

<div id="right-column">
<?php include 'right.php'; ?>
</div>
   
   
</div><!--ends mainContainer-->
  


<div class="secontainer"> 
 <?php include 'footer.php'; ?>
</div>





</body>
</html>
</html>
