<?php
// Variables for sending email to me from contact form
$to = 'ammon@sumnercreations.com';
$userEmail = $_POST['email'];
$name = $_POST['name'];
$headers =  "From: $userEmail"; 
$subject = "Email from Sumner Creations Contact Page";
 
$fields = array(); 
$fields{"name"} = "Name"; 
$fields{"email"} = "Email"; 
$fields{"subject"} = "Subject"; 
$fields{"message"} = "Message"; 
 
$body = "Contact Information:\n\n"; foreach($fields as $a => $b){ 	$body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); } 

// Variables to send thank you auto-reply email
$headersAutoreply = "From: noreply@sumnercreations.com"; 
$subjectAutoreply = "Thank you for contacting Sumner Creations!"; 
$bodyAutoreply = "Thank you for contacting me.  I will get back to you as soon as possible, usually within 24 hours. If you have any more questions, please consult my website at www.sumnercreations.com";

// If there is no email for the user then we can't send them an email so notify them.
if($userEmail == '')
	{
		print "Email not sent.  There was no email address.";
 	} 
else {
	// Send email to me
	$send = mail($to, $subject, $body, $headers);
	// Send autoreply thank you email 
	$sendAutoreply = mail($userEmail, $subjectAutoreply, $bodyAutoreply, $headersAutoreply); 


//DEBUGGING:
	 /*
$send = 'To: ' . $to .'<br />'. 'Subject: ' . $subject .'<br />'. 'Body: ' . $body .'<br />'. 'Headers: ' . $headers; 
	 $sendAutoreply = 'To: ' . $userEmail .'<br />'. 'Subject: ' . $subjectAutoreply .'<br />'. 'Body: ' . $bodyAutoreply .'<br />'. 'Headers: ' . $headersAutoreply;
	 
	 echo 'Contact Form email: <br />' . $send .'<br /><br />';
	 echo 'Auto-reply email: <br />' . $sendAutoreply;
*/

	// If the email was sent, redirect the user to the thank you page.
	if($send) 
		 {
		 	header( "Location: http://www.sumnercreations.com/thankyou.html" );
		 }else // Otherwise notify them that the email was not sent and provide them options.
		 	{
		 		print "We encountered an error sending your mail, please notify team@plaidtie.net";
		 	} 
	}
?>
