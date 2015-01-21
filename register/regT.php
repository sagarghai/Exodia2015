<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Exodia'15 | IIT Mandi</title>
	<meta name="description" content="Exodia" />
	<meta name="keywords" content="Exodia" />
	<meta name="author" content="Exodia" />
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" type="text/css" href="css/cs-select.css" />
	<link rel="stylesheet" type="text/css" href="css/cs-skin-boxes.css" />
	<script src="js/modernizr.custom.js"></script>
</head>
<body>
	<div class="container">
		 <div class="codrops-top clearfix">
			<a class="codrops-icon codrops-icon-prev" href="../index.html"><span>Back to Home</span></a>
		</div> 

		<div class="fs-form-wrap" id="fs-form-wrap">
			<div class="fs-title">
				
				 
				<h1>Event Registration Form</h1>
			</div>
			<form id="myform" class="fs-form fs-form-full" autocomplete="off" method="post">
				<ol class="fs-fields">
					<li>
						<label class="fs-field-label fs-anim-upper" for="q1">What's your name?</label>
						<input class="fs-anim-lower" id="q1" name="q1" type="text" placeholder="Naam toh suna hi hoga" required/>
					</li>
					<li>
						<label class="fs-field-label fs-anim-upper" for="q2" data-info="We won't send you spam, we promise...">What's your email address?</label>
						<input class="fs-anim-lower" id="q2" name="q2" type="email" placeholder="participant@anything.in" required/>
					</li>
					<li>
						<label class="fs-field-label fs-anim-upper" for="q3">What's your contact number?</label>
						<input class="fs-anim-lower" id="q3" name="q3" type="number" placeholder="+91xxxxxxxxxx" min="7000000000" max="9999999999" required/>
					</li>
					<li>
						<label class="fs-field-label fs-anim-upper" for="q6">What's your college name?</label>
						<input class="fs-anim-lower" id="q6" name="q6" type="text" placeholder="XYZ International, HYD" required/>
					</li>
					<li data-input-trigger>
						<label class="fs-field-label fs-anim-upper" for="q4" data-info="This will help us know what kind of service you need">Choose the event(s) you want to participate in?</label>
						<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
							<span><input id="q4a" name="q4[]" type="checkbox" value="Bandslam"/><label for="q4a" class="radio-bandslam">Bandslam</label></span>
							<span><input id="q4b" name="q4[]" type="checkbox" value="MrMissExodia"/><label for="q4b" class="radio-miss">Mr. &amp; Miss Exodia</label></span>
							<span><input id="q4c" name="q4[]" type="checkbox" value="Pronite"/><label for="q4c" class="radio-pronite">Pronite</label></span>
							<span><input id="q4d" name="q4[]" type="checkbox" value="YouTubeCOllab"/><label for="q4d" class="radio-ytc">YouTube Collab</label></span>
							<span><input id="q4e" name="q4[]" type="checkbox" value="ExoIdol"/><label for="q4e" class="radio-idol">Exodia Idol</label></span>
							<span><input id="q4f" name="q4[]" type="checkbox" value="BigStink"/><label for="q4f" class="radio-big">Big Stink</label></span>
							<span><input id="q4g" name="q4[]" type="checkbox" value="Coutour"/><label for="q4g" class="radio-coutour">Coutour</label></span>
							<span><input id="q4h" name="q4[]" type="checkbox" value="Instrumania"/><label for="q4h" class="radio-instrumania">Instrumania</label></span>
						</div>
					</li>
					<li data-input-trigger>
						<label class="fs-field-label fs-anim-upper" for="q5" data-info="This will help us know what kind of service you need">Would you be needing accomodation?</label>
						<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
							<span><input id="q5b" name="q5" type="radio" value="yes"/><label for="q5b" class="radio-yeah">Yeah, ofcourse!</label></span>
							<span><input id="q5c" name="q5" type="radio" value="no"/><label for="q5c" class="radio-naah">Naah, I'm fine!</label></span>
						</div>
					</li>
				</ol><!-- /fs-fields -->
				<button class="fs-submit" type="submit">Register</button>
			</form><!-- /fs-form -->
		</div><!-- /fs-form-wrap -->

	</div><!-- /container -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	<script src="js/fullscreenForm.js"></script>
	<script>
		(function() {
			var formWrap = document.getElementById( 'fs-form-wrap' );

			[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
				new SelectFx( el, {
					stickyPlaceholder: false,
					onChange: function(val){
						document.querySelector('span.cs-placeholder').style.backgroundColor = val;
					}
				});
			} );

			new FForm( formWrap, {
				onReview : function() {
						classie.add( document.body, 'overview' ); // for demo purposes only
					}
				} );
		})();
	</script>
</body>
</html>