<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Exodia'15 | IIT Mandi</title>
	<meta name="description" content="Minimal Form Interface: Simplistic, single input view form" />
	<meta name="keywords" content="form, minimal, interface, single input, big form, responsive form, transition" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr.custom.js"></script>
</head>
<body style="overflow:hidden">
	<audio autoplay>
		<source src="../exodia.mp3" type="audio/mpeg" />
		Your browser does not support the audio element.
	</audio>
	<div class="container">
		<div class="codrops-top clearfix">
			<a class="codrops-icon codrops-icon-prev" href="../"><span>Back to Home</span></a>
		</div>
		<header class="codrops-header">
			<h1>S.A.P. Registration form<span>Student Ambassador Program</span></h1>	
		</header>
		<section>
			<form id="theForm" class="simform" autocomplete="off" method="post">
				<div class="simform-inner">
					<ol class="questions">
						<li>
							<span><label for="q1">What's your name?</label></span>
							<!-- <textarea id="q4" name="q4" placeholder="Describe here"></textarea> -->
							<input id="q1" name="q1" type="text" required/>
						</li>
						<li>
							<span><label for="q2">What's your email address?</label></span>
							<input id="q2" name="q2" type="email"/>
						</li>
						<li>
							<span><label for="q3">What's your contact number?</label></span>
							<input id="q3" name="q3" type="number" placeholder="+91xxxxxxxxxx" min="7000000000" max="9999999999" required/>
						</li>
						<li>
							<span><label for="q4">What's your college name?</label></span>
							<input id="q4" name="q4" type="text"/>
						</li>
						<li>
							<span><label for="q5">What's your fB handle?</label></span>
							<input id="q5" name="q5" type="text"/>
						</li>
						<li>
							<span><label for="q6">In one line tell us, why should we choose you?</label></span>
							<input id="q6" name="q6" type="text"/>
						</li>
					</ol><!-- /questions -->
					<button class="submit" type="submit">Send answers</button>
					<div class="controls">
						<button class="next"></button>
						<div class="progress"></div>
						<span class="number">
							<span class="number-current"></span>
							<span class="number-total"></span>
						</span>
						<span class="error-message"></span>
					</div><!-- / controls -->
				</div><!-- /simform-inner -->
				<span class="final-message"></span>
			</form><!-- /simform -->			
		</section>
	</div><!-- /container -->
	<script src="js/classie.js"></script>
	<script src="js/stepsForm.js"></script>
	<script>
		var theForm = document.getElementById( 'theForm' );

		new stepsForm( theForm, {
			onSubmit : function( form ) {
					// hide form
					classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );

					/*
					form.submit()
					or
					AJAX request (maybe show loading indicator while we don't have an answer..)
					*/

					// let's just simulate something...
					var messageEl = theForm.querySelector( '.final-message' );
					messageEl.innerHTML = 'Thank you ! We\'ll contact you soon.';
					classie.addClass( messageEl, 'show' );
					window.setTimeout(function(){
						window.location.href = "sap.php";
					}, 1000);

				}
			} );
	</script>
</body>
</html>