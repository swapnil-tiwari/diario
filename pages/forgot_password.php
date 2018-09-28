<?php
session_start();
if(!($_SESSION['sendlink_check']))
 {
		 $_SESSION['sendlink_check']=FALSE;
 }
 if(!isset($_SESSION['forgotpass_email']))
  {
 		 $_SESSION['forgotpass_email']='';
  }
$error=$_GET['error'];

 ?>
<html>
<head>
	<title>Diario | Login</title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/mycss2.css">

	<link rel="stylesheet" type="text/css" href="../css/animate.css">

	<link rel="stylesheet" type="text/css" href="../css/mycss-min.css">

	<link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
</head>
<body>
	<center>
		<h1 class="header">Diario..</h1>
		<h3 style="font-weight: bold; color: #424242;">Login</h3>
		<div id="myCarousel2" class="carousel slide" data-ride="carousel" data-interval="false" data-wrap="false">
			<div class="carousel-inner">
				<div class="item">
					<div class="maincont">
									<form action="login_action.php" method="POST">
										<input type="text" name="email" placeholder="Email" class="txt-xsml">
										<input type="password" name="pass" placeholder="Password" class="txt-xsml"><br><br>
										<a href="#myCarousel2" data-slide="next" class="nxt-btn" style="margin-left: 30px;">Forgot Your Password?</a><br>
										<button type="submit" class="btn-xsml">Log In</button>
									</form>
					</div>
				</div>
				<div class="item active">
					<center><div class="maincont">
									<form action="send_link.php" method="POST">
										<center>
											<?php
											if (!$_SESSION['sendlink_check']){ echo '<input type="text" name="email" placeholder="Email" class="txt-xsml"> <center><button type="submit" class="btn-xsml">Submit</button></center>';}
                      else {
                        		if($error==1)
                                  {
                                    echo ' <h3>The given email id - <b>'.$_SESSION['forgotpass_email'].'</b> was not found in our records <br><center><a href="./login.php"><button type="button" class="btn-xsml">Back</button></a></center>';
                                  }
									else	{		echo '<h2>Password reset link has been sent to your email id- <b>'.$_SESSION['forgotpass_email'].'</b></h2>
                                                <center><a href="./login.php"><button type="button" class="btn-xsml">Back</button></a></center>';
											}
                      		}

											?>
										</center>

									</form>
					</div></center>
				</div>
		</div>
		</div>
	</center>
</body>
</html>
