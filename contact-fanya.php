<?php

// For Home Page Course Enquiry Form
include_once('class.phpmailer.php');

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
	
    //$to = "basant.kumar@dotsquares.com";
	$to = "fanya.uxd@gmail.com";

/*	$headers = "From: $email\r\n" .
			 "Content-Type:text/html\r\n";*/
    $subject = "Contact us: enquiry";

    $html = <<<_END
<!DOCTYPE HTML PUBLIC"-//IETF//DTD HTML//EN">
<html>
<head>
<title>FANYA - Contact Request</title>
</head>
<body bgcolor="FFFFFF">
<table border='0' width='700'>
<tr><td colspan='2'>--------------------------------------------------------------------------------------------------</td></tr>
<tr><th colspan='2'>FANYA - Contact Request</th></tr>
<tr><td colspan='2'>--------------------------------------------------------------------------------------------------</td></tr>
<tr><td width='200'><b>First Name: </b></td><td>$name</td></tr>
<tr><td width='200'><b>Email: </b></td><td>$email</td></tr>
<tr><td width='200'><b>Message: </b></td><td>$message</td></tr>
<tr><td colspan='2'>--------------------------------------------------------------------------------------------------</td></tr>
<tr><td colspan='2'>--------------------------------------------------------------------------------------------------</td></tr>
</table>
</body>
</html>      
_END;




//Create a new PHPMailer instance
$mail = new PHPMailer;
//Set who the message is to be sent from
$mail->setFrom($email, $name);
//Set an alternative reply-to address
$mail->addReplyTo('fanya.uxd@gmail.com', 'Fanya');
//Set who the message is to be sent to
$mail->addAddress($to, 'Fanya.biz');
//Set the subject line
$mail->Subject = $subject;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($html);
//Replace the plain text body with one created manually
//$mail->AltBody = '';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}



    //   mail($to,$subject,$html,$headers);
       header("Location: thanks.html#section-contact");
     exit;
?>