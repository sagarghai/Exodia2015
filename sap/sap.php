<?php

require 'PHPMailerAutoload.php';
session_start();

// if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$name  		= $_POST['q1'];
	$email	 	= $_POST['q2'];
	$contact	= $_POST['q3'];
	$college   	= $_POST['q4'];
	$fb			= $_POST['q5'];
	$one_liner 	= $_POST['q6'];

	$mail = new PHPMailer;

	$mail->isSMTP();               	                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'exodiatechcult@gmail.com';                   // SMTP username
	$mail->Password = 'exodia15';               // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
	$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
	$mail->setFrom('exodiatechcult@gmail.com', 'Exodia, IIT Mandi');     //Set who the message is to be sent from
	// $mail->addReplyTo('labnol@gmail.com', 'First Last');  //Set an alternative reply-to address
	$mail->addAddress($email, $name);  // Add a recipient
	// $mail->addAddress('ellen@example.com');               // Name is optional
	// $mail->addCC('cc@example.com');
	// $mail->addBCC('bcc@example.com');
	$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	// $mail->addAttachment('/usr/labnol/file.doc');         // Add attachments
	// $mail->addAttachment('/images/image.jpg', 'new.jpg'); // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML
	
	$mail->Subject = 'Thanks for registering.';
	$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	// $mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
	
	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
		exit;
	}
	
	header("Location: ../");
}

// require 'sapT.php';
