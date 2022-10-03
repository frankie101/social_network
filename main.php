<!DOCTYPE html>
<html>
<head>
	<title>PU Alumni Connect </title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		overflow-x: hidden;
	}
	#centered1{
		position: absolute;
		font-size: 10vw;
		top: 30%;
		left: 30%;
		transform: translate(-50%, -50%);
	}
	#centered2{
		position: absolute;
		font-size: 10vw;
		top: 50%;
		left: 40%;
		transform: translate(-50%, -50%);
	}
	#centered3{
		position: absolute;
		font-size: 10vw;
		top: 70%;
		left: 30%;
		transform: translate(-50%, -50%);
	}
	#signup{
		width: 60%;
		border-radius: 30px;
		border: 1px solid #1167b1;
		color: #fff;
		background-color: #1167b1;
	}
	#login{
		width: 60%;
		background-color: #fff;
		border: 1px solid #1167b1;
		color: #1167b1;
		border-radius: 30px;
	}
	#login:hover{
		width: 60%;
		background-color: #fff;
		color: black;
		border: 2px solid black;
		border-radius: 30px;
	}
	.well{
		background-color: #1167b1;
	}

</style>
<body>
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><h1 style="color: white;"> Welcome, PU Alumni Connect!</h1></center>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6" style="left:0.5%;">
			<img src="images/bg6.jpg" class="img-rounded" title="PU Alumni" width="650px" height="565px">
			<div id="centered1" class="centered"><h3 style="color:white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Connect with Friends.</strong></h3></div>
			<div id="centered2" class="centered"><h3 style="color:white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Support up coming school projects.</strong></h3></div>
			<div id="centered3" class="centered"><h3 style="color:white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Join the Conversation.</strong></h3></div>
		</div>
		<div class="col-sm-6" style="left:8%:">
			<img src="images/logo.png" class="img-rounded" title="PU Alumni" width="180px" height="180px">
			<h2><strong>See what's happening with <br> friends right now</strong></h2><br><br>
			<h4><strong>join PU Alumni Today.</strong></h4>
			<form method="post" action="">
				<button id="signup" class="btn btn-info btn-lg" name="signup">Sign up</button><br><br>
				<?php
					if(isset($_POST['signup'])){
						echo "<script>window.open('signup.php','_self')</script>";
					}
				?>
				<button id="login" class="btn btn-info btn-lg" name="login">Login</button><br><br>
				<?php
					if(isset($_POST['login'])){
						echo "<script>window.open('signin.php','_self')</script>";
					}
				?>
			</form>
		</div>
		
	</div>
</body>
</html>