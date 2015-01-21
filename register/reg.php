<?php

require 'functions.php';
require 'PHPMailerAutoload.php';
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$name  		= $_POST['q1'];
	$email	 	= $_POST['q2'];
	$contact	= $_POST['q3'];
	$college   	= $_POST['q6'];
	$events		= $_POST['q4'];
	$acc 	   	= $_POST['q5'];
	$x = print_r($events,true);

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
	$body = '<p><strong>Exodia</strong> team is glad to see your participate in Exodia 2015.<br><br>For further quries,contact:<br>Mohit Sharma --   +91-9805557242<br>Mukarram Tailor -- +91-9413480231</p>';
	// $mail->Body    = '<br><br>For further quries,contact:<br>Main co-ordinators<br><a href"https://www.facebook.com/sharma.712.mohit?fref=ts">Mohit Sharma<a> -- +91-9805557242<br><a href"https://www.facebook.com/mukarram.tailor?fref=ts">Mukarram Tailor<a> -- +91-9413480231';
	$mail->Body = $body;
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	// $mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
	
	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
		exit;
	}	

	$mailme = new PHPMailer;

	$mailme->isSMTP();               	                      // Set mailer to use SMTP
	$mailme->Host = 'smtp.gmail.com';                       // Specify main and backup server
	$mailme->SMTPAuth = true;                               // Enable SMTP authentication
	$mailme->Username = 'exodiatechcult@gmail.com';                   // SMTP username
	$mailme->Password = 'exodia15';               // SMTP password
	$mailme->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
	$mailme->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
	$mailme->setFrom('exodiatechcult@gmail.com', 'Exodia, IIT Mandi');     //Set who the message is to be sent from
	$mailme->addAddress('exodiatechcult@gmail.com', $name);  // Add a recipient
	// $mail->addAddress('ellen@example.com');               // Name is optional
	// $mail->addCC('cc@example.com');
	// $mail->addBCC('bcc@example.com');
	$mailme->WordWrap = 50;                                 // Set word wrap to 50 characters
	// $mailme->addAttachment('/usr/labnol/file.doc');         // Add attachments
	// $mailme->addAttachment('/images/image.jpg', 'new.jpg'); // Optional name
	$mailme->isHTML(true);                                  // Set email format to HTML
	
	$mailme->Subject = "Registration";
	$mailme->Body    = 'Name: '.$name.'<br>Email: '.$email.'<br>Contact: '.$contact.'<br>College: '.$college.'<br>Evnets: '.($x).'<br>Accomodation Required: '.$acc;
	$mailme->AltBody = 'This is the body in plain text for non-HTML mailme clients';
	
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	// $mailme->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
	
	if(!$mailme->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mailme->ErrorInfo;
		exit;	
	}

	header("Location: ../");
	// <a href="https://www.facebook.com/Exodia.IITMandi">

	// <a href"https://www.facebook.com/mukarram.tailor?fref=ts">
	// <a href"https://www.facebook.com/sharma.712.mohit?fref=ts">
}

require 'regT.php';


