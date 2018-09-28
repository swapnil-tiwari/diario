<html>
<head>
	<title>Diario | Home</title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/mycss.css">

	<link rel="stylesheet" type="text/css" href="css/animate.css">

	<link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=La+Belle+Aurore" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Lily+Script+One" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/mycss-min.css">

	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>

	<script>
              new WOW().init();
    </script>
</head>
<body>
		<div class="bg">
			<h1>Diario..</h1>
			<img src="images/underline.png" class="underline"><img src="images/underline.png" class="underline inverted">
			<p class="sub-head">the diary that writes your voice...</p>

			<a href="#gettingstarted"><button class="btn-sml">Get Started</button></a>
			<a href="pages/login.php"><button class="btn-sml">Login</button></a>
			<br>
			<a href="#intro" style="color: white">
				<button class="taker"><i class="fa fa-angle-double-down fa-2x" aria-hidden="true"></i></button>
			</a>
		</div>

		<div class="intro">
			<div class="section1" id="intro">
				<div class="row">
					<div class="col-sm-6 left">
						<h1>Say Hello To <font style="color: rgb(0,104,139);">Diario..</font></h1>
						<h1>Your Personal assistant, writer, organizer and what not..</h1>
						<center><h1 style="color:rgb(0,104,139)">
							<i class="fa fa-quote-left" aria-hidden="true"></i>
							Hello!
							<i class="fa fa-quote-right" aria-hidden="true"></i>
						</h1></center>
					</div>
					<div class="col-sm-6 right" id="gettingstarted">
						<h4>Get Started For Free</h4>
						<form action="./pages/register.php" method="POST">
							<input type="text" name="username" placeholder="Full Name" class="txt-xsml" required>
							<input type="text" name="email" placeholder="Email" class="txt-xsml" required>
							<input type="password" name="pass" placeholder="Password" class="txt-xsml" required>
							<button type="submit" class="btn-xsml" name="submit">Sign Up For Free</button>
						</form>
					<!--	<hr style="border:0.05em solid #D1D1D1; width: 70%;margin-left:20px;">
						<center style="color: #b5b5b5;margin-left: -100px;">or</center>
						<h4>Login</h4>
						<form action="login.php" method="POST">
							<input type="text" name="email" placeholder="Email" class="txt-xsml">
							<input type="password" name="pass" placeholder="Password" class="txt-xsml">
							<button type="submit" class="btn-xsml">Log In</button>

						</form>-->
					</div>
				</div>
			</div>

			<div class="section2">
				<div class="row">
					<div class="col-sm-6 left">
						<img src="images/mic.png" class="mic-img wow fadeInLeftBig" data-wow-delay="1s">
					</div>
					<div class="col-sm-6 right">
						<h2 class="wow fadeInRightBig">Write Just By Your <font style="color:rgb(0,104,139) ">Voice</font></h2>
						<p class="wow fadeInRightBig">
							Tired of Typing? No Worries! We got Your back.<br>
							Just speak and leave the rest with us.
							<br>
							<a href="#intro"><button class="getstarted">Get Started</button></a>
						</p>
					</div>
				</div>
			</div>

			<div class="section3">
				<div class="row">
					<div class="col-sm-6 left wow fadeInLeftBig">
						<h2>Set Reminder and Never Miss out <font style="color:rgb(0,104,139)">Anytime</font></h2>
						<p>
							Set The reminder for the event or meeting and we will <br>remind you for the same and never get late.
						<br>
						<a href="#intro"><button class="getstarted">Get Started</button></a>
						</p>
					</div>
					<div class="col-sm-6 right">
						<img src="images/clock.png" class="clk-img wow fadeInRightBig" data-wow-delay="1s">
					</div>
				</div>
			</div>

			<div class="section4">
				<div class="row">
					<div class="col-sm-6 left">
						<img src="images/notebook.png" class="notebook-img wow fadeInLeftBig" data-wow-delay="1s">
					</div>
					<div class="col-sm-6 right">
						<h2 class="wow fadeInLeftBigs">Write Anything <font style="color:rgb(0,104,139) ">You Want To</font></h2>
						<p class="wow fadeInLeftBig">
							No matter What your Profession is.<br>
							We make Your task a lot easier and Available all the time.
							<br>
							<a href="#intro"><button class="getstarted">Get Started</button></a>
						</p>
					</div>
				</div>
			</div>


		</div>

		<div class="footer">
			<div class="btn-group">
				<a href="#"><button class="social fb"><i class="fa fa-facebook" aria-hidden="true"></i></button></a>
				<a href="#"><button class="social insta"><i class="fa fa-instagram" aria-hidden="true"></i></button></a>
				<a href="#"><button class="social twitter"><i class="fa fa-twitter" aria-hidden="true"></i></button></a>
				<a href="#"><button class="social utube"><i class="fa fa-youtube-play" aria-hidden="true"></i></button></a>
			</div>
			<p>ALL RIGHTS RESERVED. &copy;2017 Diario.com</p>
		</div>

</body>

<script type="text/javascript">
	$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});


</script>
</html>
