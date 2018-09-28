<?php
session_start();
require ("add_diarypages.php");
if(!isset($_SESSION['login_check']))
{
	header("Location:../index.php");
}
if(!isset($_SESSION["diary_data"]))
 {
		 $_SESSION["diary_data"]='';
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Diario | Diary</title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="../js/jquery.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="../css/mycss.css">

	<link rel="stylesheet" type="text/css" href="../css/animate.css">

	<link rel="stylesheet" type="text/css" href="../css/mycss-min.css">

	<link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded" rel="stylesheet">
</head>
<body>
		<div class="nav-bar">
			<button class="toggle-btn" onclick="show()" id="show"><i class="fa fa-bars fa-1x" aria-hidden="true"></i></button>

			<div class="nav-body-initial" id="navbar">
				<ul>
					<li>
						<a href="add.php" data-toggle="tooltip" data-placement="right" title="Add New Note">
							<button class="nav-icon">+</button>
						</a>
					</li>
					<li>
						<a href="diary.php" data-toggle="tooltip" data-placement="right" title="Your Personal Diary">
							<button class="nav-icon">
								<i class="fa fa-book" aria-hidden="true"></i>
							</button>
						</a>
					</li>
					<li>
						<a href="#" data-toggle="tooltip" data-placement="right" title="Reminder">
							<button class="nav-icon">
								<i class="fa fa-bell-o" aria-hidden="true"></i>
							</button>
						</a>
					</li>
					<li>
						<a href="#" data-toggle="tooltip" data-placement="right" title="Search Your Document">
							<button class="nav-icon">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button>
						</a>
					</li>
					<li>
						<a href="#" data-toggle="tooltip" data-placement="right" title="All your Content">
							<button class="nav-icon">
								<i class="fa fa-tasks" aria-hidden="true"></i>
							</button>
						</a>
					</li>
					<li>
						<a href="#" data-toggle="tooltip" data-placement="right" title="Share">
							<button class="nav-icon">
								<i class="fa fa-share-alt" aria-hidden="true"></i>
							</button>
						</a>
					</li>
					<li>
						<a href="logout.php" data-toggle="tooltip" data-placement="right" title="Logout">
							<button class="nav-icon">
								<i class="fa fa-sign-out" aria-hidden="true"></i>
							</button>
						</a>
					</li>
					<li>
						<a href="#" data-toggle="tooltip" data-placement="right" title="Trash">
							<button class="nav-icon">
								<i class="fa fa-trash-o" aria-hidden="true"></i>
							</button>
						</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-9 main-body">
				<div class="col-sm-6 add-new-page">
					<h1>Add A New <font style="color: rgb(0,104,139)">Diary Entry</font></h1>
					<form action="save_diary.php" method="POST">
						<input type="date" name="date" class="input-date" value="" >
						<br>
						<textarea class="diary-entry" name="diary-content" placeholder="Dear Diary..">
						</textarea>
						<button class="btn-save" type="submit">Save</button>
						<button class="btn-mic"><img src="../images/mic.png"></button>
					</form>
				</div>

				<div class="col-sm-6 view-diary">

					<div class="diary-cont" style="overflow-x:hidden;overflow-y;scroll;">
						<?php echo nl2br($_SESSION['diary_data']) ;?>
						<!--<div>

							<h2>04/10/2017</h2>
							<hr>
							<p>
								Content of the diary goes her. the user can write anything about his daily life.blashavlafj
								eiroh;re erihg qiueri hierhgi erig ierg ergqer igher giher gerhg erghrifnv rvhqer gqheg weoufweu uerhk sfh eohfe feo fep	i
								w-0ef weof 	eoo herihg;ehrgiir d sgdlvjjdfih ger erg er9ug qe gidkjvbkcnx;a uaf h r hvdri hvperhg her gerh gerh giperhigeuf[uqw fo;hq hr grehgerhgiwrhgir]
								<hr>
							</p>
						</div>-->

					</div>
					 Search for a date <input type="date" name="search_date" class="date">
					 <input type="submit" name="submit" class="date-search" value="Search">
				</div>
			</div>

			<div class="col-sm-3 preview">
				<h1>Sticky<font style="color: rgb(0,104,139)">Notes</font></h1>
				<p class="count">0 items in the collection</p>
				<button type="button" class="btn-xxsml" data-toggle="modal" data-target="#addstickynote">Add +</button>
				<hr style="border: 0.05em solid #DEDEDE; margin-left: -25px;">
				<div class="content">
					No items were found in the collection.<br>
					Click the ADD button to add items to your collection
				</div>
				<hr style="border: 0.02em solid #DEDEDE; margin-left: -25px;">
				<h1><font style="color: rgb(0,104,139)">Notifications</font></h1>
				<p class="count">2 New notifications</p>
				<hr style="border: 0.05em solid #DEDEDE; margin-left: -25px;">
				<div class="content">
					<div class="content-list">
						<h4>Title of the notification.</h4>
						<button class="close"><i class="fa fa-times" aria-hidden="true"></i></button>
						<p>
							The main content of the notification goes here. It breifs the about the notification.
						</p>
					</div>


					<div class="content-list">
						<h4>Title of the notification.</h4>
						<button class="close"><i class="fa fa-times" aria-hidden="true"></i></button>
						<p>
							The main content of the notification goes here. It breifs the about the notification.
						</p>
					</div>
				</div>
			</div>

			<div id="addstickynote" class="modal fade" role="dialog">
  			<div class="modal-dialog">

    			<div class="modal-content">

      				<div class="modal-body">
        				<h1>Add a New <font style="color: rgb(0,104,139);">Sticky Note</font></h1>
        				<form action="newsticky.php" method="POST">
        					<input type="text" name="title" class="stickyinput" placeholder="Title..."><br>
        					<textarea type="text" name="body" class="stickyinput-lg" placeholder="Your Message Here..."> </textarea> <br>
        				</form>
      				</div>
    			</div>
  			</div>
		</div>

</body>
<script type="text/javascript">
	function show()
	{
	var a= document.getElementById('navbar');

	if (a.className=="nav-body-initial")
	{
		a.className="";
		a.className="nav-body-hidden";
	}
	else if(a.className=="nav-body-hidden")
	{
		a.className="";
		a.className="nav-body-visible";
	}
	else if(a.className=="nav-body-visible")
	{
		a.className="";
		a.className="nav-body-hidden";
	}
	}
	var d=new Date();
	var yy=d.getFullYear();
	var mm=d.getMonth();
	var dd=d.getDate();
	document.getElementsByClassName('input-date').value=yy+"-"+mm+"-"+dd;


</script>
</html>
