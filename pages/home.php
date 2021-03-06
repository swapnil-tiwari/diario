<?php
session_start();
if(!isset($_SESSION['login_check']))
{
	header("Location:../index.php");
}
require ("add_notes.php");
if(!isset($_SESSION["data"]))
	{
			$_SESSION["data"]='';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Diario | Home</title>

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
						<a href="#" data-toggle="tooltip" data-placement="right" title="Logout">
							<button class="nav-icon" onclick="location.href='logout.php';">
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
				<h1>Hello, <font style="color: rgb(0,104,139)"><?php echo $_SESSION['username']?> </font></h1>
				<div class="row">
					<div class="col-sm-4 notes-container" style="overflow-x:hidden;overflow-y:scroll;max-height:550px;">

							<?php echo nl2br($_SESSION['data']);?>
						<!--<div class="list-content">
								<h5>Title of the note </h5>
							<div class="btn-group">
								<button><i class="fa fa-pencil" aria-hidden="true"></i></button>
								<button><i class="fa fa-times" aria-hidden="true"></i></button>
							</div>
							<p>
								Content of the notes goes here which is written by the user. at the time of addition.
								and the paragraph will continue untill...
							</p>



							</div>
						</a>
						<hr style="border: 0.05em solid #B5B5B5">

						<a href="#" style="text-decoration: none;">
							<div class="list-content">
							<h5>Title of the note </h5>
							<div class="btn-group">
								<button><i class="fa fa-pencil" aria-hidden="true"></i></button>
								<button><i class="fa fa-times" aria-hidden="true"></i></button>
							</div>
							<p>
								Content of the notes goes here which is written by the user. at the time of addition.
								and the paragraph will continue untill...
							</p>
							</div>
						</a>
						<hr style="border: 0.05em solid #B5B5B5">-->
					</div>


					<div class="col-sm-8 editor">
						<h3>Add a New Note</h3>
						<hr style="border:0.05em solid #B5B5B5">
						<div class="btn-group">
							<button><i class="fa fa-bold" aria-hidden="true"></i></button>
							<button><i class="fa fa-italic" aria-hidden="true"></i></button>
							<button><i class="fa fa-underline" aria-hidden="true"></i></button>
							<button><i class="fa fa-list" aria-hidden="true"></i></button>
							<button><i class="fa fa-list-ol" aria-hidden="true"></i></button>
							<button><i class="fa fa-superscript" aria-hidden="true"></i></button>
							<button><i class="fa fa-subscript" aria-hidden="true"></i></button>
						</div>
						<form action="save-note.php" method="POST">
							<input type="text" name="title" placeholder="Title..." class="title">
							<textarea name="note" placeholder="Start Typing Your Note Here..." class="body"></textarea>
							<input type="submit" name="save" class="btn-save" value="Save">
							<button class="btn-mic"><img src="../images/mic.png"></button>
						</form>
					</div>
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
		</div>


		<div id="addstickynote" class="modal fade" role="dialog">
  			<div class="modal-dialog">

    			<div class="modal-content">

      				<div class="modal-body">

        				<center><h1>Add a New <font style="color: rgb(0,104,139);">Sticky Note</font></h1></center>
        				<form action="newsticky.php" method="POST">
        			  <center>
        					<input type="text" name="title" class="stickyinput" placeholder="Title...">
        					<textarea type="text" name="body" class="stickyinput-lg" placeholder="Your Message Here..."> </textarea> <br>
        					<input style="display: inline-block;" type="radio" name="value" value="imp">most important <h1 style="display: inline-block;background-color:red;height: 10px;width: 10px;"></h1>
                            <input type="radio" name="value" value="less"> important <h1 style="display: inline-block;background-color:green;height: 10px;width: 10px;"></h1>
                            <input type="radio" name="value" value="least"> least important  <h1 style="display: inline-block;background-color:yellow;height: 10px;width: 10px;"></h1> <br><br>
                            <input type="button" class="btn-save" name="save" value="save">
        			  </center>
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
</script>
</html>
