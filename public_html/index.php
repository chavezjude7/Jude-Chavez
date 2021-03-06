<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/style.css" />

		<!-- jQuery (required for Bootstap's JS plugins) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

		<script src="php-libs/script.js" type="text/javascript"></script>
		<style type="text/css">
			#wrapper { height:100%; }
		</style>
		<title>Jude-Chavez</title>
	</head>


	<body class="sfooter">
		<div class="sfooter-content">

			<div class="jumbotron">
				<div class="container-fluid">
					<h1>Jude Chavez</h1>
					<p>Get ready to dig deep!</p>
				</div>
			</div>

			<div id="grass">

			</div>

			<div class="dirt">
				<div class="container-fluid">
					<h2>Shalom!</h2>
					<h3>I'm a webdeveloping nurse</h3>
					<p id="maincontent">
						You have to dig deep to find the diamonds. I turn complex problems into beautiful solutions. I mine code so you don't have to.
					</p>

					<h3>About Me</h3>
					<h4>Liscence of Practical Nursing</h4>
					<p id="maincontent">
						Practical Nurse Certified in: IV procudures, PICC line care and maintenance, AHA AED/CPR/BLS.
					</p>
					<h4>Full Stack Web Developer</h4>
					<p id="maincontent">
						Web Developer proficient in front-end and back-end web development. Java, HTML5, CSS3, JavaScript, Angular, and MySQL
					</p>

					<img id="photo" src="images/lang.png" alt="picture of my skills" >
					<img id="angular" src="images/angular.png" alt="picture of my skills" >

					<h3>
						Talk to me!
					</h3>
				</div>

					<!--<div class="twitter-window">
						<a class="twitter-timeline" href="https://twitter.com/JudeicusMaximus" data-widget-id="705497413117587456">Tweets by @JudeicusMaximus</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div> -->

					<div class="container">
						<div class="row im-centered">
							<form id="contact-form" class="form-horizontal" method="post" action="php-libs/phpMailer.php">
									<div class="form-group">
										<label class="control-label col-xs-2" for="name">Name</label>
										<div class="col-xs-8">
											<input type="text" class="form-control" name="name" id="name" placeholder="What's you name?" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-2" for="email">Email</label>
										<div class="col-xs-8">
											<input type="email" class="form-control" name="email" id="email"
													 required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-2" for="Subject">Subject</label>
										<div class="col-xs-8">
											<input type="text" class="form-control" name="subject" id="subject"
													 placeholder="So I know what we're talking about" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-2">Message</label>
										<div class="col-xs-8">
											<textarea id="message" class="form-control" rows="3" placeholder="Let's get this conversation started!" required></textarea>
										</div>
									</div>
									<div class="form-group">
										<div>
											<button type="submit" class="btn btn-primary center-block"><i
													class="fa fa-paper-plane"></i> Submit
											</button>
										</div>
									</div>
								</form>
							<div id="output-area"></div>
						</div>
						<img id="Diamond" src="images/Diamond.png" alt="picture of diamonds" >
						<p id="maincontent">
							Let's find some diamonds!
						</p>
				</div>
			</div> <!--dirt-->
		</div><!--/.sfooter-content-->


		<footer id="rock">
			<div class="container-fluid">
				<div class="row text-center">

					<a href="https://www.linkedin.com/in/jude-chavez-87a519114" target="_blank"
						class="btn btn-social-icon btn-linkedin">
						<span class="fa fa-linkedin"></span>
					</a>

					<a href="https://twitter.com/JudeicusMaximus" target="_blank" class="btn btn-social-icon btn-twitter">
						<span class="fa fa-twitter"></span>
					</a>

					<a href="https://github.com/chavezjude7" target="_blank" class="btn btn-social-icon btn-github">
						<span class="fa fa-github"></span>
					</a>

					<a href="https://soundcloud.com/judeicusmaximus" target="_blank" class="btn btn-social-icon btn-soundcloud">
						<span class="fa fa-soundcloud"></span>
					</a>

					<a href="https://www.facebook.com/judeicusMaximus" target="_blank" class="btn btn-social-icon btn-facebook">
						<span class="fa fa-facebook"></span>
					</a>

					<a href="https://www.youtube.com/channel/UCBuoSq2gvaHA5IYaL2FVZMA" target="_blank" class="btn btn-social-icon btn-youtube">
						<span class="fa fa-youtube"></span>
					</a>

					<a href="https://www.instagram.com/judeicusmaximus/" target="_blank" class="btn btn-social-icon btn-instagram">
						<span class="fa fa-instagram"></span>
					</a>

					<a href="http://judeicusmaximus.tumblr.com" target="_blank" class="btn btn-social-icon btn-tumblr">
						<span class="fa fa-tumblr"></span>
					</a>
				</div>
			</div>
		</footer>

	</body>
</html>
